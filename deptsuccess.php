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
</head>
<?php
session_start();
// START Below code restrict the user to run direct URL in browser
$str11 = $_SERVER['HTTP_REFERER'];
//echo $str11;
$str22 ="http://localhost/SEFMS/deptmaster.php";
$strResult = strcmp($str22, $str11);
If($strResult != 0 )
{
  header("Location: http://localhost/SEFMS/SignUp.php");
  exit();
}
//END 

//Variables used for establishing a connection with the database.
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbproject";

// Create connection.
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection.
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";

//Variables for storing enterd data which is coming from the form, from SignUp.php.
$deptname = strtoupper($_POST['txtDeptName']);
$deptcode = strtoupper($_POST['txtDeptCode']);


//To check if username already exists in the database or not.
$sql1 = "SELECT * FROM tbldeptmaster WHERE deptname='$deptname'";
//$sql1 = "SELECT * FROM tblstudentinfo ORDER BY DeptName, EnrollmentNo";
$result1 = $conn->query($sql1);
if ($result1->num_rows <> 0)
{
  $_SESSION["DeptCheckMsg"] = "This Department name already exists."; 
  header("Location: http://localhost/SEFMS/deptmaster.php");
  exit(); 
}


//PHP and SQL Querry for posting the entered information inside the table in our dbproject database.
$sql = "INSERT INTO tbldeptmaster (deptname, deptcode)
VALUES ('$deptname','$deptcode')";
//$result = $conn->query($sql5);

if ($conn->query($sql) === TRUE)
{
  $msg = "<u><b> Department Master Entry has been done successfully!!! </b></u>";
} 
else
{
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
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
                        <li class="active"><a href="deptmaster.php">Department Master</a></li>
                            <li class=""><a href="stdreg.php">Student Registration</a></li>
                            <li class=""><a href="stdfee.php">Fee Submission</a></li>
                            <li class=""><a href="feedetails.php">Deposited Fee Status</a></li>
                            <li class=""><a href="pendingfee.php">Pending Fee Status</a></li>
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
    <section id="contact" style="padding-top: 80px;">
        <div class="container">
            <div class="row">
                <div id="page" class="container inner_container">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3  fm">
                                <div class="col-md-12 text-center heading">
                                    <h2><span class="section-tittle" style="color:#01acf1; font-weight:bold;"><?php echo  $msg ?> </span></h1>
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
                    <h4><a href="deptmaster.php"><span style="color: white; ">Department Master</span></a> &nbsp;/&nbsp; <a href="stdreg.php"><span style="color: white; ">Student Registration</span></a>&nbsp;/&nbsp;<a href="stdfee.php"><span style="color: white; ">Fee Submission</span></a> &nbsp;/&nbsp;<a href="feedetails.php"><span style="color: white; ">Deposited Fee Status</span></a> &nbsp;/&nbsp; <a href="pendingfee.php"><span style="color: white; ">Pending Fee Status</span></a> &nbsp;/&nbsp; <a href="LogOut.php"><span style="color: white; ">Logout</span></a></h4>
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