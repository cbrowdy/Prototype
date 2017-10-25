<?php
require_once("DBConnect.php")
$email = "luccote@stmarksschool.org";
$psswd = "abc123";
$sql = "SELECT PSSWD From Users WHERE Email='".$email."'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    if(password_verify($psswd, $psswd)){
        session_start();
        $_SESSION["PSSWD"] = $psswd;
        $_SESSION["Email"] = $email;
    }
}else{
    //user does not exist
}
?>