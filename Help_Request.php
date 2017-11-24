<?php
require_once("DBConnect.php");
$question = str_replace("'","",trim($_POST["Question"], " "));
$name = str_replace("'","",trim($_POST["NAME"], " "));
$email = str_replace("'","",trim($_POST["EMAIL"], " "));
$sql = "INSERT INTO Requests (Question, Name, Email) VALUES ('".$question."', '".$name."', '".$email."')";
if ($conn->query($sql) === TRUE) {
    echo "request sucessfull";
    header("Location: personalhelp.php");
} else {
    echo "Error submitting request: " . $conn->error;
}
?>