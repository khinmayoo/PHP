<?php
require "database.php";

//Create database
$sql = "CREATE DATABASE sample_php";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();

?>