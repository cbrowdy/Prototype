<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Java</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,900');

        * { margin:0; padding:0; box-sizing:border-box; }
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #004d66;
        }

        li {
            float: left;
        }

        .right{
            float: right;
        }

        li a {
            display: block;
            color: whitesmoke;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        /* Change the link color to #111 (black) on hover */
        li a:hover {
            background-color: #111;
        }
        .active {
            background-color: #333333;
        }
        body {
            font-family: 'Source Sans Pro', sans-serif;
            color: #333;
            background-color: whitesmoke;
        }
        .sidebar{
            width: 15%;
            height: 100vh;
            background: whitesmoke;
            text-align: center;
        }
        .left{
            float: left;
        }
        .video{
            float: left;
            height: 100vh;
            width: 70%;
        }
        .navbutton{
            border-radius: 5px;
            border: none;
            height: 5%;
            width: 15%;
            background-color: #004d66;
            color: white;
        }
        #prev{
            float: left;
        }
        #next{
            float: right;
        }
        #save{
            margin-left: 27.5%;
            margin-right: 27.5%;
            background-color: #cb4154;
            color: #333;
        }
        #playlist tr{
            border-top: solid 3px #333;
            border-bottom: solid 3px #333;
            margin-right: 0px;
        }
        .activeLesson{
            background-color: #004d66;
            color: whitesmoke;
        }
    </style>
</head>
<body>
<script>
    //reload on save
    var href = document.location.href;
    if(href.indexOf("?param=refresh") != -1)
    {
        href = href.substring(0,href.indexOf("?param=refresh"));
        /* the line above strips off the parameter so refresh only occurs
         once otherwise the page would refresh over and over */
        document.location = href;
    }

    function validate(){
        if(confirm("Are You Sure You Would Like To Sign Out?")){
            return true;
        }else{
            return false;
        }
    }
</script>
<ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="personalhelp.php">Personal Help</a></li>
    <li class="active"><a href="java.php">Java</a></li>
    <li><a href="webtools.php">Web Tools</a></li>
    <li><a href="c.php">C++</a></li>
    <li><a href="deeplearning.php">Deep Learning</a></li>
    <li><a href="scratch.php">Scratch</a></li>
    <li><a href="cotm.php">COTM</a></li>
    <?php
    session_start();
    if(isset($_SESSION['Email']) && !empty($_SESSION['Email'])){
        echo("<li class=\"right\"><a href=\"signout.php\" onclick='return validate()'>Sign Out</a></li>");
    }else{
        echo("<li class=\"right\"><a href=\"signinsignup.html\">Login</a></li>");
    }
    ?>
</ul>
<script>
    var urls = ["https://www.youtube.com/embed/WPvGqX-TXP0",
        "https://www.youtube.com/embed/-DGXquPXugI",
        "https://www.youtube.com/embed/WPvGqX-TXP0"];
    var index = 0;
    var numrows = 0;
    var lastSave = 0;
    function reloadvid(){
        if(index == lastSave){
            document.getElementById("save").style = "background-color: #4CAF50;";
        }
        document.getElementById("videoFrame").src = urls[index];
        document.getElementById('playlist').rows[index].className = "activeLesson";
    }
    function clearSelect(){
        document.getElementById("save").style = "";
        document.getElementById('playlist').rows[index].className = "";
    }
    //TODO: add clickable lessons
//    function addTableHandlers() {
//        var table = document.getElementById("playlist");
//        var rows = table.getElementsByTagName("tr");
//        for (i = 0; i < rows.length; i++) {
//            var currentRow = table.rows[i];
//            var createClickHandler =
//                function(row)
//                {
//                    return function() {
//                        clearSelect();
//                        index=i;
//                        reloadvid();
//                    };
//                };
//
//            currentRow.onclick = createClickHandler(currentRow);
//        }
//    }
    function next(){
        if(index >= numrows-1){
            alert("Congratulations You Have Finished Java, You Are Now A JAVA Master");
        }else{
            clearSelect();
            index++;
            reloadvid();
        }
    }
    function prev(){
        if(index <= 0){
            alert("You are at the first execrsize you cant go back anymore");
        }else{
            clearSelect();
            index--;
            reloadvid();
        }
    }
    <?php
    Require_Once("DBConnect.php");
    session_start();
    function GetInt($index, $defaultValue) {
        return (isset($_GET[$index]) && ctype_digit($_GET[$index])
            ? (int)$_GET[$index]
            : $defaultValue);
    }
    if(isset($_SESSION['Email']) && !empty($_SESSION['Email'])) {
        $sql = "SELECT id from Users WHERE Email='" . $_SESSION['Email'] . "'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $id = $row["id"];
            $sql = "SELECT Value from user_" . $id . " WHERE Role='Java'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $index = $row["Value"];
                echo("index = " . $index . "; lastSave = ".$index.";");
            }else{
                $index = GetInt("index", 0);
                echo("index = " . $index . ";");
            }
        }else{
            $index = GetInt("index", 0);
            echo("index = " . $index . ";");
        }
    }else{
        $index = GetInt("index", 0);
        echo("index = " . $index . ";");
    }
    ?>
    function save(){
        var form = document.createElement("form");
        var element1 = document.createElement("input");
        var element2 = document.createElement("input");

        form.method = "GET";
        form.action = "saveProgress.php";

        element1.value="Java";
        element1.name="Role";
        form.appendChild(element1);

        element2.value=index;
        element2.name="Value";
        form.appendChild(element2);

        document.body.appendChild(form);

        form.submit();
    }
</script>
<script>
    window.onload = function(e){
        reloadvid();
        numrows = document.getElementById('playlist').rows.length;
        <?php
        session_start();
        if(isset($_SESSION['Email']) && !empty($_SESSION['Email'])) {
            echo("document.getElementById('save').disabled=false;");
        }
        ?>
    }
</script>
<div class="sidebar left">
    <h1>Java Course:</h1>
    <table id="playlist" width="100%">
        <col width="100%">
        <tr>
            <td>Lesson 1</td>
        </tr>
        <tr>
            <td>Lesson 2</td>
        </tr>
        <tr>
            <td>Test 1</td>
        </tr>
    </table>
</div>
<div class="video" style="margin-left: -1px; margin-right: -1px;">
    <iframe id="videoFrame" width="100%" height="85%" src="https://www.youtube.com/embed/WPvGqX-TXP0" frameborder="0" allowfullscreen></iframe>
    <button type="button" id="prev" class="navbutton btn" onclick="prev()">Prev</button>
    <button type="button" id="save" class="navbutton btn" disabled="true" onclick="save()">Save Progress</button>
    <button type="button" id="next" class="navbutton btn" onclick="next()">Next</button>
</div>
<div class="sidebar right">
    <h1>Need Help?</h1>
    <form action="Help_Request.php" method="post">
        <p>Name:</p>
        <input type="text" name="NAME" id="NAME" class="panel panel-default" required><br>
        <p>Email:</p>
        <input type="email" name="EMAIL" id="EMAIL" class="panel panel-default" value="<?php session_start(); echo($_SESSION["Email"]);?>" required><br>
        <p>Problem Type:</p>
        <select name="Type" required>
            <option value="General">General</option>
            <option value="Java" selected>Java</option>
            <option value="C++">C++</option>
            <option value="HTML/CSS">HTML/CSS</option>
            <option value="Javascript">Javascript</option>
            <option value="Scratch">Scratch</option>
            <option value="Machine Learning">Machine Learning</option>
            <option value="Other">Other</option>
        </select>
        <p>Question:</p>
        <textarea name="Question" id="Question" class="panel panel-default" cols="20" rows="6" required></textarea><br>
        <input type="submit" value="Submit" class="btn btn-primary" style="width: 70px; background-color: #004d66; border: none;">
    </form>
</div>
</body>
</html>