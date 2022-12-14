<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=320, height=device-height, target-densitydpi=medium-dpi" />
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link rel="icon" href="images/favi-con.png">
  <title>::Student Enrollment and Fee Management System::</title>
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-----------bootstrap css----->
  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
  <!-- Font Awesome -->
  <link rel="stylesheet" type="text/css" href="fonts/css/font-awesome.css">
  <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
  <!--------------------normalize css----------------->

  <!-------------style css--------->
  <link rel="stylesheet" href="css/style.css" type="text/css">
  <!-------responsive csss---------------->
  <!--------WOW CSS-------------->
</head>
<?php
session_start(); 
$_SESSION["AuthMsg"]="";
$_SESSION["UserCheckMsg"]="";
?>
<!--------------------row closed-------------->
<!-----------------menu start--------------->
<header>
  <nav class="navbar navbar-inverse menu navbar-fixed-top ">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle tog" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <a class="navbar-brand" href="#"> <img src="images/Logo5.png"></a>

      </div>
      <div class="container">
        <div class="row">
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav menu-title   navbar-right">
              <li class=""><a href="SignUp.php">Sign Up</a></li>
              <li><a href="SignIn.php">Sign In</a></li>

            </ul>
          </div>
        </div>
      </div>
    </div>
  </nav>
</header>
<div class="clearfix"></div>

<body data-spy="scroll" data-target=".navbar" data-offset="100">
  <section class="jk-slider" id="top">
    <div id="carousel-example" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example" data-slide-to="1"></li>
        <li data-target="#carousel-example" data-slide-to="2"></li>
        <li data-target="#carousel-example" data-slide-to="3"></li>
        <li data-target="#carousel-example" data-slide-to="4"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">

          <a href="#"><img src="images/1.png" /></a>

        </div>
        <div class="item">

          <a href="#"><img src="images/2.png" /></a>

        </div>
        <div class="item">

          <a href="#"><img src="images/3.png" /></a>
        </div>
        <div class="item">

          <a href="#"><img src="images/4.png" /></a>
        </div>
        <div class="item">

          <a href="#"><img src="images/5.png" /></a>
        </div>
      </div>
    </div>
  </section>
  <div class="bg" id="about-us">
    <div class="container-fluid">
      <div class="row">
        <div class="heading about-center">
          <h1>About <span class="section-tittle" style="color:#01acf1; font-weight:bold;">Project</span></h1>
          <div class="c0l-lg-8 col-md-8 col-sm-12 col-xs-12">
            <h4>In this project we have developed the Student Enrollment and Fee Management System. In which the user has to register himself/herself to create a user account. After creating the user account the user will be able to login to the sytem and can access Main Menu of the Project, which includes functionality for Department Master Entry,Student Enrollment, Student Fee Subission, Deposited Fee Status and Pending Fee Status.</h4>
            <h3>Flow of the Project:</h3>
            <h5>As we open the web home page of the application, there are two buttons on the home page Login button and Sign-Up button.</h5>
            <h5>1. In first step the user has to create his/her account for Login to the system. At sign-up page the user will provide his/her information, username and password. As the user registered successfully the sytem will display that, "User Registered Successfully" now he/she can enter into the system.</h5>
            <h5>2. The "Login Button" takes the user to the login page where the user will have to enter his/her userID and password. After filling up the credentials the user will click on the Submit Button.</h5>
            <h5>- If the user is not authenticated it will display the message "User Name or Password is incorrect. Please try again" and user has to enter correct USERID and PASSWORD.</h5>
            <h5>- If the user authenticated successfully it will navigate him to a Main Menu page where he/she can access the functionality of the System e.g Department Master Entry,Student Enrollment, Student Fee Subission, Deposited Fee Status and Pending Fee Status..</h5>
          </div>
          <div class="col-lg-4 col-md-4 about-section">
            <img src="images/about.jpg" />
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-------bg closed---->

  <!----services section----->
  <footer id="footer" class="footer">
    <div class="container">
      <div class="row text-center">
        <div class="col-sm-12">

        </div>

      </div>

    </div>
    <div class="container">
      <div class="row text-center">
        <h5 style="color: white; font-weight: bold;">?? 2022. All Rights Reserved.</h5>
      </div>
    </div>
    <!-------bootstrap js---------------->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
  </footer><!-- End Footer -->


</body>

</html>