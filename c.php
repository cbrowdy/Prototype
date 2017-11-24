<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>C++</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        @import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,900);

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
        body {
            background: rgb(255, 252, 220);
        }
        body {
            font-family: 'Source Sans Pro', sans-serif;
            color: #333;
        }

        .sidebar{
            width: 15%;
            height: 100vh;
            background: rgb(255, 252, 220);
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
    </style>
</head>
<body>
<ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="personalhelp.php">Personal Help</a></li>
    <li><a href="java.php">Java</a></li>
    <li><a href="webtools.php">Web Tools</a></li>
    <li class="active"><a href="c.php">C++</a></li>
    <li><a href="deeplearning.php">Deep Learning</a></li>
    <li><a href="scratch.php">Scratch</a></li>
    <li><a href="cotm.php">COTM</a></li>
    <?php
    session_start();
    if($_SESSION["Email"] != ""){
        echo("<li class=\"right\"><a href=\"signout.php\">Sign Out</a></li>");
    }else{
        echo("<li class=\"right\"><a href=\"signinsignup.html\">Login</a></li>");
    }
    ?>
</ul>
</body>
<div class="sidebar left">
    <h1>C++ Course:</h1>
    <p>C++ Playlist</p>
</div>
<div class="video">
  <iframe width="100%" height="100%" src="https://www.youtube.com/embed/Rub-JsjMhWY" frameborder="0" allowfullscreen></iframe>
</div>
<div class="sidebar right">
    <h1>Need Help?</h1>
    C++ Help ticket form
</div>
</html>