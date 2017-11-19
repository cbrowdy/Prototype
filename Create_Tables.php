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
?>