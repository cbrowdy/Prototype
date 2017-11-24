<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SMComSci</title>
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
        }

        #pomdiv {
            background:
                linear-gradient(
                        rgba(0, 0, 0, 0.5),
                        rgba(0, 0, 0, 0.5)
                ),
                url("https://www.gwinnettpl.org/wp-content/uploads/2016/12/film-video-movie.jpg");
            background-size: cover;
            height: 50vh;
        }

        .title {
            position: absolute;
            top: 30%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            text-align: center;
        }
        h1 {
            text-transform: uppercase;
            margin: 0;
            font-size: 3rem;
            white-space: nowrap;
        }
        h2 {
            font-size: 2rem;
        }
        p {
            margin: 0;
            font-size: 1.3rem;
        }
        .halfwidth{
            background-size: cover;
            height: 50vh;
            width: 50%;
            text-align: center;
            background-repeat: no-repeat;
        }
    </style>
</head>
<body>

<ul>
    <li><a href="index.php" class="active">Home</a></li>
    <li><a href="personalhelp.php">Personal Help</a></li>
    <li><a href="java.php">Java</a></li>
    <li><a href="webtools.php">Web Tools</a></li>
    <li><a href="c.php">C++</a></li>
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
<div id="pomdiv">
    <div class="title">
        <h1>Project of the Month</h1>
        <p>Description of Said Project</p>
    </div>
</div>
<div class="halfwidth" style="color: orange; background-image: url('https://tctechcrunch2011.files.wordpress.com/2015/04/codecode.jpg?w=738'); float:left;">
    <h2>Learn</h2>
    <p>Java: 50%<br>C++: 80%<br>Scratch: 20%</p>
</div>
<div class="halfwidth" style="color: aqua; float:right; background-image: url('https://code.org/images/fill-480x360/tutorials/new/minecraft2016.jpg')">
    <h2>Reccomended</h2>
    <p>Reccommended course and description here</p>
</div>
</body>
</html>