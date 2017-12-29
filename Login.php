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
            $_SESSION["Email"] = $email;
            echo("<script>var u = window.location.href.toString().replace('Login', 'index'); document.location=u;</script>");
        }else{
            echo("<script>alert('Incorrect Password');</script>");
            echo("<script>var u = document.referrer; u += \"?param=refresh\"; document.location = u;</script>");
        }
    }else{
        echo("<script>alert('Could Not Find Password);</script>");
        echo("<script>var u = document.referrer; u += \"?param=refresh\"; document.location = u;</script>");
    }
}else{
    echo("<script>alert('An Account With This Email Does Not Exist');</script>");
    echo("<script>var u = document.referrer; u += \"?param=refresh\"; document.location = u;</script>");
}


?>