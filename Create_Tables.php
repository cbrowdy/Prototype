<?php
require_once("DBConnect.php");
$sql = "CREATE TABLE Users(
    Email VARCHAR(255) NOT NULL,
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY);";
if ($conn->query($sql) === TRUE) {
    echo "created table";
} else {
    echo "Error creating table: " . $conn->error;
}
$sql = "CREATE TABLE Requests(
    Question VARCHAR(255) NOT NULL,
    Name VARCHAR(255) NOT NULL,
    Email VARCHAR(255) NOT NULL,
    Type VARCHAR(255) NOT NULL,
    Answered ENUM('true', 'false') DEFAULT 'false')";
if ($conn->query($sql) === TRUE) {
    echo "created table";
} else {
    echo "Error creating table: " . $conn->error;
}
$sql = "CREATE TABLE Answers(
    T VARCHAR(255) NOT NULL,
    F VARCHAR(255) NOT NULL,
    Subject VARCHAR(255) NOT NULL,
    Message VARCHAR(255) NOT NULL)";
if ($conn->query($sql) === TRUE) {
    echo "created table";
} else {
    echo "Error creating table: " . $conn->error;
}
?>