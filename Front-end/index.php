<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous"> 
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
       
    <title>SMComSci</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:700,600,500,400,400i,300,300i,100i|Montserrat" rel="stylesheet" type="text/css">
 
</head>
    <style>

body {
  

}

span {
    float: left;
    text-align: center;
}

.header {
    position: absolute;
    width: 100%;
    z-index: 4;
    height: 44px;
    background-color: #fff;
}
.side-nav {
    position: absolute;
    width: 100%;
    height: 100vh;
    background-color: #fff;
    z-index: 3;
    padding-top: 44px;
    color: black;
}

.side-nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
}
.side-nav ul li {
    padding: 20px 10px;
    border-bottom: 1px solid #333;
}

.side-nav ul li a {
    color: black;
    text-decoration: none;

}
.side-nav ul li i {
    color: black;

}

.main-content {
    padding-top: 44px;
    color: black;
}
@media screen and (min-width: 600px) {
   .side-nav {
        display: block;
        width: 70px;
        z-index: 2;
    }

    .side-nav ul li span:nth-child(2) {
        display: none;
    }

     .side-nav ul li i {
        font-size: 26px;
    }
    .side-nav ul li {
        text-align: center;
    }

    .main-content {
        margin-left: 80px;
    }

@media screen and (min-width: 1000px) {
    .side-nav{
        width: 170px;

    }
    .side-nav ul li {
        text-align: left;
    }

    .side-nav ul li span:nth-child(2) {
        display: inline-block;
    } 
    .side-nav ul li i {
        font-size: 30px;
    }
    .main-content {
        margin-left: 200px;
    }
}
   

        @import url('https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,900');

        * { margin:0; padding:0; box-sizing:border-box; }
    

        .right{
            float: right;
        }

        .active {
        
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
            background-repeat: no-repeat


                }


    </style>




 <body>



<h2 class="display-4 text-center py-5 my-4"> Technology Outreach Club </h2>

    <nav class="nav justify-content-center nav-pills">
            <li><a class="nav-link active" href="index.php" class="active">Home</a></li>
            <li><a class="nav-link" href="personalhelp.php">Personal Help</a></li>
            <li><a class="nav-link" href="java.php">Java</a></li>
            <li><a class="nav-link" href="webtools.php">Web Tools</a></li>
            <li><a class="nav-link" href="c.php">C++</a></li>
            <li><a class="nav-link" href="deeplearning.php">Deep Learning</a></li>
            <li><a class="nav-link" href="scratch.php">Scratch</a></li>
            <li><a class="nav-link" href="cotm.php">COTM</a></li>
            <?php
            session_start();
            if(isset($_SESSION['Email']) && !empty($_SESSION['Email'])){
                echo("<li class=\"right nav-link\"><a href=\"signout.php\">Sign Out</a></li>");
            }else{
                echo("<li class=\"right nav-link\"><a href=\"signinsignup.html\">Login</a></li>");
            }
            ?>
</nav>


<script>
<$(document).ready(function() {
    $('.nav-trigger').click(function() {
        $('.side-nav').toggleClass('visible');
    });
});

</script>






  
    <body>
        <div class="header">
            <a href="#" class="nav-trigger"><span></span></a>
        </div>
        <div class="side-nav">
            <div class="logo">
                <i class="fa fa-tachometer"></i>
                <SPAN>Dashboard</SPAN>
            </div>
            <nav>
                <ul>
                    <li>
                        <a href="#">
                            <span><i class="fa fa-user"></i></span>
                            <span>Users</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">

                            <span><i class="fa fa-envelope"></i></span>
                            <span>Messages</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#">
                            <span><i class="fa fa-bar-chart"></i></span>
                            <span>Analytics</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span><i class="fa fa-credit-card-alt"></i></span>
                            <span>Payments</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="main-content">
            <div class="title">
                Analytics
            </div>










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
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min
</html>