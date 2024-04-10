<?php
require "database.php";

//Create database
$sql = "CREATE DATABASE php_project";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();

?>