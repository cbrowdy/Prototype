<?php
Require_Once("DBConnect.php");
$email = "luccote@stmarksschool.org";
$psswd = "abc123";
$sql = "SHOW TABLES LIKE '".$email."'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// user account already exists
}else{
    $sql = "CREATE TABLE ".$email." (
    Email VARCHAR(255) NOT NULL,
    PSSWD VARCHAR(255) NOT NULL,
    Name VARCHAR(255) NOT NULL,
    Java INT(11) DEFAULT 0,
    Webtools INT(11) DEFAULT 0,
    AI INT(11) DEFAULT 0,
    C++ INT(11) DEFAULT 0,
    Scratch INT(11) DEFAULT 0)";
}
?>