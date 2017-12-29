<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,900');

        * { margin:0; padding:0; box-sizing:border-box; }
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }

        li {
            float: left;
        }
        .right{
            float: right;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        /* Change the link color to #111 (black) on hover */
        li a:hover {
            background-color: #111;
        }
        .active {
            background-color: #4CAF50;
        }
        body {
            font-family: 'Source Sans Pro', sans-serif;
            background: cornflowerblue;
        }
        #content{
            content-align: center;
            text-align: center;
        }
    </style>
</head>
<body>
<ul>
    <li><a href="index.php">Home</a></li>
    <li class="active"><a href="personalhelp.php">Personal Help</a></li>
    <li><a href="java.php">Java</a></li>
    <li><a href="webtools.php">Web Tools</a></li>
    <li><a href="c.php">C++</a></li>
    <li><a href="deeplearning.php">Deep Learning</a></li>
    <li><a href="scratch.php">Scratch</a></li>
    <li><a href="cotm.php">COTM</a></li>
    <?php
    session_start();
    if(isset($_SESSION['Email']) && !empty($_SESSION['Email'])){
        echo("<li class=\"right\"><a href=\"signout.php\">Sign Out</a></li>");
    }else{
        echo("<li class=\"right\"><a href=\"signinsignup.html\">Login</a></li>");
    }
    ?>
</ul>
<div id="content" >
    <h1>Help Form</h1>
    <br>
    <form action="Help_Request.php" method="post">
        <p>Name:</p>
        <input type="text" name="NAME" id="NAME" class="panel panel-default" required><br>
        <p>Email:</p>
        <input type="email" name="EMAIL" id="EMAIL" class="panel panel-default" value="<?php session_start(); echo($_SESSION["Email"]);?>" required><br>
        <p>Problem Type:</p>
        <select name="Type" required>
            <option value="General">General</option>
            <option value="Java">Java</option>
            <option value="C++">C++</option>
            <option value="HTML/CSS">HTML/CSS</option>
            <option value="Javascript">Javascript</option>
            <option value="Scratch">Scratch</option>
            <option value="Machine Learning">Machine Learning</option>
            <option value="Other">Other</option>
        </select>
        <p>Question:</p>
        <textarea name="Question" id="Question" class="panel panel-default" cols="40" rows="6" required></textarea><br><br>
        <input type="submit" value="Submit" class="btn btn-primary" style="width: 70px; background-color: #4CAF50; border: none;">
    </form>
</div>
</body>
</html>
