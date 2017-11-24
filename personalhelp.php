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
    <li class="right"><a href="signinsignup.html">Login</a></li>
</ul>
<div id="content" >
    <h1>Help Form</h1>
    <br>
    <form action="Help_Request.php" method="post">
        <p>Name:</p>
        <input type="text" name="NAME" id="NAME" class="panel panel-default"><br>
        <p>Email:</p>
        <input type="email" name="EMAIL" id="EMAIL" class="panel panel-default" value="<?php session_start(); echo($_SESSION["Email"]);?>"><br>
        <p>Question:</p>
        <textarea name="Question" id="Question" class="panel panel-default" cols="40" rows="6"></textarea><br><br>
        <input type="submit" value="Submit" class="btn btn-primary" style="width: 70px; background-color: #4CAF50; border: none;">
    </form>
</div>
</body>
</html>
