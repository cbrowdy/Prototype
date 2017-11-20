<?php
require_once("DBConnect.php");
$email = str_replace("'"," ",trim($_POST["EMAIL"], " "));
$psswd = str_replace("'"," ",trim($_POST["PSSWD"], " "));
$sql = "SELECT id FROM Users WHERE Email='".$email."'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $id = $row["id"];
    $sql = "SELECT Value FROM user_".$id." WHERE Role='Password'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $pwd = $row["Value"];
        if(password_verify($psswd, $pwd)){
            session_start();
            $_SESSION["PSSWD"] = $psswd;
            $_SESSION["Email"] = $email;
            header("Location: index.html");
            exit();
        }
    }else{
        echo "could not log in";
    }
}else{
    echo"could not find user";
    echo $email;
    echo"hello";
}


?>