<?php
session_start();
require 'class/UserClass.php';
// Begin/resume session


// Define variable for custom error messages
$errors = [];

$servername = "localhost";
$username = "root";
$password = "Password123#@!";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$user = new UserClass($conn);
?>