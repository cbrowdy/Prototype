<?php
Require_Once("DBConnect.php");
$email = str_replace("'","",trim($_POST["EMAILCREATE"], " "));
$psswd = password_hash(str_replace("'"," ",trim($_POST["PASSWORD"], " ")), PASSWORD_DEFAULT);
$name = str_replace("'","",trim($_POST["NAME"], " "));
$sql = "SELECT id FROM Users WHERE Email='".$email."'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// user account already exists
    echo("<script>alert('An Account With This Email Already Exists');</script>");
    echo("<script>var u = window.location.href.toString().replace('CreateUser.php', 'signinsignup.html'); document.location=u;</script>");
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
                    $sql = "INSERT INTO user_".$id." (Role, Value) VALUES ('Password', '".$psswd."')";
                    if ($conn->query($sql) === TRUE) {
                        $sql = "INSERT INTO user_".$id." (Role, Value) VALUES ('Name', '".$name."')";
                        if ($conn->query($sql) === TRUE) {
                            session_start();
                            $_SESSION["Email"] = $email;
                            echo("<script>var u = window.location.href.toString().replace('CreateUser', 'index'); document.location=u;</script>");

                        } else {
                            echo "Error inserting user table: " . $conn->error;
                        }

                    } else {
                        echo "Error inserting user table: " . $conn->error;
                    }

                } else {
                    echo "Error creating user: " . $conn->error;
                }

            $conn->close();
        } else{
            echo "Error selecting user: " . $conn->error;
        }
    }else{
        echo "Error inserting user: " . $conn->error;
    }
}



?>