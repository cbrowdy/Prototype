<?php
Require_Once("DBConnect.php");
$to      = str_replace("'","",trim($_POST["TO"], " "));
$subject = str_replace("'","",trim($_POST["SUBJECT"], " "));
$message = str_replace("'","",trim($_POST["MESSAGE"], " "));
$from = str_replace("'","",trim($_POST["FROM"], " "));
$question = str_replace("'","",trim($_POST["QUESTION"], " "));
$headers = 'From: '.$from;
$sql = "INSERT INTO Answers (T, F, Subject, Message) VALUES ('".$to."', '".$from."', '".$subject."', '".$message."')";
if ($conn->query($sql) === TRUE) {
    mail($to, $subject, $message, $headers);
    $sql = "UPDATE Requests SET Answered='true' WHERE Question='".$question."' AND Email='".$to."'";
    echo("<script>alert('Answer Sent');</script>");
    echo("<script>var u = document.referrer; document.location = u;</script>");
} else {
    echo "Error submitting request: " . $conn->error;
}
?>