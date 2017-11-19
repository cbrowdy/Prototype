<?php
Require_Once("DBConnect.php");
$email = str_replace("'","",trim($_POST["EMAIL"], " "));;
$psswd = password_hash(str_replace("'"," ",trim($_POST["PSSWD"], " ")), PASSWORD_DEFAULT);
$name = "Name Last";
$sql = "SELECT id FROM Users WHERE Email='".$email."'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// user account already exists
    echo "User Already Exists";
}else{
    $sql = "INSERT INTO Users (Email) VALUES ('".$email."')";
    if ($conn->query($sql) === TRUE) {
        $sql = "SELECT id FROM Users WHERE Email='".$email."'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0){
            $row = $result->fetch_assoc();
            $id = $row["id"];
            $sql = "CREATE TABLE user_".$id."(
            Role VARCHAR(255) NOT NULL,
            Value VARCHAR(255) NOT NULL);";
            if ($conn->query($sql) === TRUE) {
                    echo "created table";
                    $sql = "INSERT INTO user_".$id." (Role, Value) VALUES ('Password', '".$psswd."')";
                    if ($conn->query($sql) === TRUE) {
                        echo "created table";

                    } else {
                        echo "Error creating user table: " . $conn->error;
                    }

                } else {
                    echo "Error creating user: " . $conn->error;
                }

            $conn->close();
        }
        else{
            echo "Error selecting user: " . $conn->error;
        }
    }else{
        echo "Error inserting user: " . $conn->error;
    }
}



?>