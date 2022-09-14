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
    <script type="text/javascript" src="js/tablejs.js"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="fonts/css/font-awesome.css">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
    <!-------------style css--------->
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/tablestyle.css" type="text/css">
</head>
<?php
session_start();
if (isset($_SESSION["Auth"]) == false) 
{
  header("Location: http://localhost/SEFMS/SignIn.php");
  exit();
} 
//**************** 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbproject";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) 
{
  die("Connection failed: " . mysqli_connect_error());
}
$sql1 = "SELECT * FROM tblstudent_info WHERE FeeSubmitted = 'N' ORDER BY DeptName, EnrollmentNo";
//$sql1 = "SELECT * FROM tblstudentinfo ORDER BY DeptName, EnrollmentNo";
$result1 = $conn->query($sql1);
//****************
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
                            <li class="active"><a href="pendingfee.php">Pending Fee Status</a></li>
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
            <h2>Pending Fee Status</h2>
            <table class="table table-bordered table-striped table-responsive-stack" id="tableOne">
                <thead class="thead-dark">
                    <tr>
                        <th>Enrollment Number</th>
                        <th>Deparment Name</th>
                        <th>Student's Name</th>
                        <th>Father's Name</th>
                        <th>Class</th>
                        <th>Fee Status</th>
                    </tr>
                </thead>
                <?php
                while($row1 = $result1->fetch_assoc()) {
			    $Feestatus="";
				$str11 = $row1["FeeSubmitted"];
				If($str11 == 'N')
				{
				$Feestatus="FEE PENDING";
				}
				If($str11 == 'Y')
				{
				$Feestatus="FEE DEPOSITED";
				}
                ?>
                <tbody>
                    <tr>
                        <td>JEnrollment no1</td>
                        <td>Department Name 1</td>
                        <td>Student Name 1</td>
                        <td>Father Name1</td>
                        <td>Class 1</td>
                        <td>Fee Status 1</td>
                    </tr>
                    <tr>
                        <td height> 
                            <?php echo $row1["EnrollmentNo"]; ?>
                        </td>
                        <td height> 
                            <?php echo $row1["DeptName"]; ?>
                        </td>
                        <td height> 
                            <?php echo $row1["StudentName"]; ?>
                        </td>
                        <td height> 
                            <?php echo $row1["FatherName"]; ?>
                        </td>
                        <td height> 
                            <?php echo $row1["YClass"]; ?>
                        </td>
                        <td height> 
                            <?php echo $Feestatus;?>
                        </td>
                    </tr>
                    <?php
                    }
                    $conn->close();    
                    ?>
                </tbody>
            </table>
        </div>
        <!-- /.container -->
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