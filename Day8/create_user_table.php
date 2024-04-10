<?php
require "database.php";
// sql to create table
$sql = "CREATE TABLE php_project.users (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(30) NOT NULL,
	email VARCHAR(20),
	url VARCHAR(20),
	profile_img VARCHAR(30),
	gender SMALLINT,
    status SMALLINT,
	comment TEXT,
	create_date DATETIME DEFAULT CURRENT_TIMESTAMP,
    update_date DATETIME DEFAULT CURRENT_TIMESTAMP,
    delete_date DATETIME DEFAULT NULL
    )";

if ($conn->query($sql) === TRUE) {
    echo "Table users created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();

?>