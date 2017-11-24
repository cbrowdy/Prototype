<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>COTM</title>
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
    </style>
</head>
<body>
<ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="personalhelp.php">Personal Help</a></li>
    <li><a href="java.php">Java</a></li>
    <li><a href="webtools.php">Web Tools</a></li>
    <li><a href="c.php">C++</a></li>
    <li><a href="deeplearning.php">Deep Learning</a></li>
    <li><a href="scratch.php">Scratch</a></li>
    <li class="active"><a href="cotm.php">COTM</a></li>
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
<div>
    <h1> This Is The COTM Webpage </h1>
    <p>
        Challenge of the Month
        Images
        Submission Button (place to submit the files)
    </p>

</div>
</html>