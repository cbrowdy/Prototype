<?php
require_once("DBConnect.php");
$type = str_replace("'","",trim($_POST["Type"], " "));
$question = str_replace("'","",trim($_POST["Question"], " "));
$name = str_replace("'","",trim($_POST["NAME"], " "));
$email = str_replace("'","",trim($_POST["EMAIL"], " "));
$sql = "INSERT INTO Requests (Type, Question, Name, Email) VALUES ('".$type."','".$question."', '".$name."', '".$email."')";
if ($conn->query($sql) === TRUE) {
    echo("<script>alert('Help Request Received You Will Receive A Response From One Of Our Admins Shortly');</script>");
    echo("<script>var u = document.referrer; u += \"?param=refresh\"; document.location = u;</script>");
} else {
    echo "Error submitting request: " . $conn->error;
}
?>