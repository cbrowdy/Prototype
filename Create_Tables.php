<?php
require_once("DBConnect.php");
$sql = "CREATE TABLE Users(
    Email VARCHAR(255) NOT NULL,
    PSSWD VARCHAR(255) NOT NULL,
    Name VARCHAR(255) NOT NULL,
    Java INT(11) DEFAULT 0,
    Webtools INT(11) DEFAULT 0,
    AI INT(11) DEFAULT 0,
    C INT(11) DEFAULT 0,
    Scratch INT(11) DEFAULT 0)";

if ($conn->query($sql) === TRUE) {
    echo "created table";
} else {
    echo "Error creating user: " . $conn->error;
}
?>