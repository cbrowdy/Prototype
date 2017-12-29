<?php
Require_Once("DBConnect.php");
function GetInt($index, $defaultValue) {
    return (isset($_GET[$index]) && ctype_digit($_GET[$index])
        ? (int)$_GET[$index]
        : $defaultValue);
}
$role = $_GET["Role"];
$value = GetInt("Value", 0);
session_start();
if(isset($_SESSION['Email']) && !empty($_SESSION['Email'])) {
    $sql = "SELECT id from Users WHERE Email='" . $_SESSION['Email'] . "'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $id = $row["id"];
        $sql = "SELECT Value from user_" . $id . " WHERE Role='".$role."'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $sql = "UPDATE user_" . $id . " SET Value='".$value."' WHERE Role='".$role."'";
            $conn->query($sql);
        }else{
            $sql = "INSERT INTO user_" . $id . " (Role, Value) VALUES ('".$role."', '".$value."')";
            $conn->query($sql);
        }
    }
}
echo("<script>var u = document.referrer; u += \"?param=refresh\"; document.location = u;</script>");
?>