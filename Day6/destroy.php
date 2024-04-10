<?php
session_start();
?>
<!DOCTYPE html>
<html>

<body>

    <?php
    // remove all session variables
    session_unset();

    // destroy the session
    session_destroy();
    var_dump($_SESSION);
    echo "Session variables are remove.";
    ?>

</body>

</html>