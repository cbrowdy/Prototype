<?php
Require_Once("DBConnect.php");
$email = "luccote@stmarksschool.org";
$psswd = password_hash("abc123", PASSWORD_DEFAULT);
$name = "Name Last";
$sql = "SELECT * FROM Users WHERE Email='".$email."'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// user account already exists
    echo "User Already Exists";
}else{
    $sql = "INSERT INTO Users (Email, PSSWD, Name) VALUES ('".$email."', '".$psswd."', '".$name."')";
    if ($conn->query($sql) === TRUE) {
       echo "created user";
    } else {
        echo "Error creating user: " . $conn->error;
    }

    $conn->close();
}


?>