<?php
require_once("DBConnect.php");
$question = str_replace("'","",trim($_POST["Question"], " "));
$name = str_replace("'","",trim($_POST["NAME"], " "));
$email = str_replace("'","",trim($_POST["EMAIL"], " "));
$sql = "INSERT INTO Requests (Question, Name, Email) VALUES ('".$question."', '".$name."', '".$email."')";
if ($conn->query($sql) === TRUE) {
    echo "request sucessfull";
    echo("<script>var u = document.referrer; u += \"?param=refresh\"; document.location = u;</script>");
} else {
    echo "Error submitting request: " . $conn->error;
}
?>