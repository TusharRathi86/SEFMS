<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=320, height=device-height, target-densitydpi=medium-dpi"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>::Student Enrollment and Fee Management System::</title>
    <!-----------bootstrap css----->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="fonts/css/font-awesome.css">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
    <!-------------style css--------->
    <link rel="stylesheet" href="css/style.css" type="text/css">    
</head>
<?php
session_start();
  $_SESSION["AuthMsg"] = "";
  //$_SESSION["Auth"] = false;
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "dbproject";
  $AuthResult="";
  $AuthYN=false;
  
  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  
  // Check connection
  if (!$conn) 
  {
    die("Connection failed: " . mysqli_connect_error());
  }
  //echo "Connected successfully";
  
  //Variables for storing enterd data which is coming from the form, from SignUp.php.
  $Uname = trim($_POST['txtUser']);
  $Paswd = trim($_POST['txtPass']);
  
  $sql = "SELECT  * FROM tbtlogininfo WHERE Username = '$Uname' ";
  $result = $conn->query($sql);
  
  if ($result->num_rows <> 0) 
  {
    // output data of each row
  
    while($row = $result->fetch_assoc()) 
    {
  
      //echo "User ID: " . $row["Username"]. " <br/> Password: " . $row["YPassword"]. "<br>";
  
     $strResult = strcmp($Uname, $row["Username"]);
     $strResultP = strcmp($Paswd, $row["YPassword"]);
  
     //echo $strResult;
  
        If($strResult == 0 && $strResultP == 0)
        {
            $AuthResult = "You are Authenticated Successfully";
            $_SESSION["Auth"] = true;
            $_SESSION["AuthMsg"] = "You are Authenticated Successfully";
        }
        else
        {
            $AuthResult = "User Name or Password is incorrect. Please try again.";  
            $_SESSION["Auth"] = false;
            $_SESSION["AuthMsg"] = "User Name or Password is incorrect. Please try again.";
  			    header("Location: http://localhost/SEFMS/SignIn.php");
  			    exit();
        }
    }
  } 
        else  
        {
        $AuthResult="You are not Registered User. Please SIGN UP first!";
        $_SESSION["AuthMsg"] = "You are not Registered User. Please SIGN UP first!";         
        }
  $conn->close();
  if ($result->num_rows == 0) 
  {
    header("Location: http://localhost/SEFMS/SignIn.php");
    exit();
  }
  if ($_SESSION["Auth"] == false) 
  {
    header("Location: http://localhost/SEFMS/SignIn.php");
    exit();
  }

?>
<body>
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
                            <li class=""><a href="deptmaster.php">Department Master</a></li>
                            <li class=""><a href="stdreg.php">Student Registration</a></li>
                            <li class=""><a href="stdfee.php">Fee Submission</a></li>
                            <li class=""><a href="feedetails.php">Deposited Fee Status</a></li>
                            <li class=""><a href="pendingfee.php">Pending Fee Status</a></li>
                            <li class=""><a href="reports.php">Reports</a></li>
                            <li class=""><a href="LogOut.php">Logout</a></li>
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
    <section id="contact" style="padding-top: 10px;">
        <div class="container">
            <div id="serives" class="container cd" style="padding-top: 2px;">
                <div class="col-md-12 text-center heading">
                    <h1>OUR <span class="section-tittle" style="color:#01acf1; font-weight:bold;">Modules </span></h1>
                </div>
                <div class="row">
                    <div class="section ">
                        <div class="col-md-4">
                            <div class="iva_inner">
                                <div class="icon"><i class="fa fa-cog fa-spin" aria-hidden="true"></i>
                                </div>
                                <div class="content">
                                    <a href="deptmaster.php">
                                        <h4>Department Master Module</h4>
                                    </a>
                                    <p>In this module we are making master entries of all the departments of the Institutes. Each and every department will have uniques department ID</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 ">
                            <div class="iva_inner">
                                <div class="icon"><i class="fa fa-cog fa-spin" aria-hidden="true"></i>
                                </div>
                                <div class="content">
                                    <a href="stdreg.php">
                                        <h4>Student Registration Module</h4>
                                    </a>
                                    <p>In this module department wise student registration is done. After registration each student have unique enrollment ID.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 ">
                            <div class="iva_inner">
                                <div class="icon"><i class="fa fa-cog fa-spin" aria-hidden="true"></i></div>
                                <div class="content">
                                    <a href="stdfee.php">
                                        <h4>Fee Submission Module </h4>
                                    </a>
                                    <p>In this module Enrollment Number wise Fee of the Student is submitted. While submitted fee of the student, It is mendodary that the student should have enrollment number</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="iva_inner">
                                <div class="icon"><i class="fa fa-cog fa-spin" aria-hidden="true"></i></div>
                                <div class="content">
                                    <a href="feedetails.php">
                                        <h4>Deposited Fee Status Module</h4>
                                    </a>
                                    <p>In this module we can check the deposited fee status. It will show the student details of which fee has been deposited. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="iva_inner">
                                <div class="icon"><i class="fa fa-cog fa-spin" aria-hidden="true"></i></div>
                                <div class="content">
                                    <a href="pendingfee.php">
                                        <h4>Pending Fee Status Module</h4>
                                    </a>
                                    <p>In this module we can check thepending fee status. It will show the student details of which fee is pending. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="iva_inner">
                                <div class="icon"><i class="fa fa-cog fa-spin" aria-hidden="true"></i></div>
                                <div class="content">
                                    <a href="reports.php">
                                        <h4>Reports</h4>
                                    </a>
                                    <p>In this module the user can see various Reports. </p>
                                </div>
                            </div>
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
                    <h4><a href="deptmaster.php"><span style="color: white; ">Department Master</span></a> &nbsp;/&nbsp; <a href="stdreg.php"><span style="color: white; ">Student Registration</span></a>&nbsp;/&nbsp;<a href="stdfee.php"><span style="color: white; ">Fee Submission</span></a> &nbsp;/&nbsp;<a href="feedetails.php"><span style="color: white; ">Deposited Fee Status</span></a> &nbsp;/&nbsp; <a href="pendingfee.php"><span style="color: white; ">Pending Fee Status</span></a> &nbsp;/&nbsp; <a href="reports.php"><span style="color: white; ">Reports</span></a> &nbsp;/&nbsp; <a href="LogOut.php"><span style="color: white; ">Logout</span></a></h4>
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