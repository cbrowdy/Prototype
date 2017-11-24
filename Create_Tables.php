<?php
require_once("DBConnect.php");
$sql = "CREATE TABLE Users(
    Email VARCHAR(255) NOT NULL,
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY);";
if ($conn->query($sql) === TRUE) {
    echo "created table";
} else {
    echo "Error creating user: " . $conn->error;
}
$sql = "CREATE TABLE Requests(
    Question VARCHAR(255) NOT NULL,
    Name VARCHAR(255) NOT NULL,
    Email VARCHAR(255) NOT NULL,
    Answered ENUM('true', 'false') DEFAULT 'false',
    Satisfied ENUM('true', 'false') DEFAULT 'false');";
if ($conn->query($sql) === TRUE) {
    echo "created table";
} else {
    echo "Error creating user: " . $conn->error;
}
?>