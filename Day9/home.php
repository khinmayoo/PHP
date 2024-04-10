<?php
// Include necessary file
//include_once 'database.php';

// Check if user is not logged in
if (!$user->isLogIn()) {
    $user->redirect('index.php');
}

//try {
    // Define query to select values from the users table
    $sql = "SELECT * FROM sample_php.users WHERE id='". $_SESSION['user_session'] . "'";

    $result = $conn->query($sql);

    // Check if row is actually returned
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    }
    
// } catch (Exception $e) {
//     array_push($errors, $e->getMessage());
// }

if (isset($_GET['logout']) && ($_GET['logout'] == 'true')) {
    $user->logOut();
    $user->redirect('index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OOP PHP - Home</title>
</head>
<body>
    <h1>Home</h1>

    <?php if (count($errors) > 0): ?>
    <p>Error(s):</p>
    <ul>
        <?php foreach ($errors as $error): ?>
            <li><?= $error ?></li>
        <?php endforeach ?>
    </ul>
    <?php endif ?>

    <p>Welcome, <?= $row['name']; ?>. <a href="?logout=true">Log out</a></p>
</body>
</html>
