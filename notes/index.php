<?php
    include "../functions.php";
    require("../database.php");

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if ($_POST["action"] ?? '' === "DELETE") {
            $id = $_POST['id'];
            $delete_query = "DELETE FROM `todos` WHERE id = $id";

            $result = mysqli_query($conn, $delete_query);
        } else {
            $body = $_POST['body'];

            $insert = "INSERT INTO `todos` (`body`, `user_id`) VALUES ('$body', 1)";

            $query = mysqli_query($conn, $insert);    
        }
    }

    $query_string = "SELECT * FROM todos ORDER BY id DESC";

    $result = mysqli_query($conn, $query_string);

?>

<html>
<body>
<div>
    <form action="/todos/index.php" method="POST">
        <input type="text" name="body" />
        <button name="add-todo-btn" type="submit">Add</button>
    </form>
</div>
<div>
    <?php while($row = mysqli_fetch_assoc($result)) : ?>
        <div>
            <?= htmlentities($row['body']) ?>
            <form action="/todos/index.php" method="POST">
                <input type="hidden" name="id" value=<?= $row['id'] ?> />
                <input type="hidden" name="action" value="DELETE"/>
                <button>Delete</button>
            </form>
        </div>
    <?php endwhile; ?>
</div>
</body>
</html>