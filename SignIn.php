<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=320, height=device-height, target-densitydpi=medium-dpi" />

  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>::Student Enrollment and Fee Management System::</title>
  <!-----------bootstrap css----->
  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

  <!-- Font Awesome -->
  <link rel="stylesheet" type="text/css" href="fonts/css/font-awesome.css">
  <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
  <!-------------style css--------->
  <link rel="stylesheet" href="css/style.css" type="text/css">
  <script type = "text/javascript" src = "js/SignIn.js"></script>
</head>
<?php
session_start();
//$_SESSION["Auth"] = false;
?>

<body>
  <!--------------------row closed-------------->
  <!-----------------menu start--------------->
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
              <li class="active"><a href="index.php">Home</a></li>
              <li class=""><a href="SignUp.php">Sign Up</a></li>

            </ul>
          </div>
        </div>
      </div>
    </div>
  </nav>
  <section class="jk-slider" id="top">
    <div id="carousel-example" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example" data-slide-to="1"></li>
        <li data-target="#carousel-example" data-slide-to="2"></li>
        <li data-target="#carousel-example" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">

          <a href="#"><img src="images/1.png" /></a>

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
  <section id="contact" style="padding-top: 5px;">
    <div class="container">
      <div class="row">
        <div id="page" class="container inner_container">
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-md-offset-3  fm">
                <div class="col-md-12 text-center heading">
                  <h1>Log <span class="section-tittle" style="color:#01acf1; font-weight:bold;">In </span></h1>
                  <?php
                  if (isset($_SESSION["AuthMsg"]) == true) {
                    if (empty($_SESSION["AuthMsg"] == false)) {
                  ?>
                      <h3>                        
                          <?php echo $_SESSION["AuthMsg"]; ?>                       
                      </h3>
                  <?php
                    }
                  } ?>
                </div>
                <form id = "login" method = "post" action = "MainMenu.php" name = "myform">
                  <div class="form-group">
                    <label for="email">User ID:</label>
                    <input type = "Text" name = "txtUser" maxlength="15" id = "user" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type = "password" name = "txtPass" id = "passwd" maxlength="12" class="form-control">
                  </div>
                  <div class="login text-center">
                    <button type = "submit" name = "submit" class="btn btn-default submit" onclick = "return validateSignin()">LOG IN</button>
                  </div>
                </form>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
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
        <h5 style="color: white; font-weight: bold;">© 2022. All Rights Reserved.</h5>
      </div>
    </div>
    <!-------bootstrap js---------------->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
  </footer>
  <!-- End Footer -->
</body>

</html>