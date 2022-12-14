<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=320, height=device-height, target-densitydpi=medium-dpi" />

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
    <script type = "text/javascript" src = "js/feecal.js"></script>
</head>
<?php
session_start();
if (isset($_SESSION["Auth"]) == false) {
    if ($_SESSION["Auth"] == false) {
        header("Location: http://localhost/SEFMS/SignIn.php");
        exit();
    }
}
//**************** 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbproject";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql1 = "SELECT  EnrollmentNo FROM tblstudent_info WHERE FeeSubmitted='N'";
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
                            <li class="active"><a href="stdfee.php">Fee Submission</a></li>
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
    <section id="contact" style="padding-top: 15px;">
        <div class="container">
            <div class="col-md-12 text-center heading">
                <h3><span style="color:#01acf1; font-weight:bold; padding-top: 50px;">Fee Submission </span></h3>
            </div>
            <div class="row">
                <?php
                if (isset($_SESSION["FeeCheckMsg"]) == true) {
                    if (empty($_SESSION["FeeCheckMsg"] == false)) {
                ?>
                        <h3>                        
                                <?php echo $_SESSION["FeeCheckMsg"];
                                $_SESSION["FeeCheckMsg"] = ""; ?>              
                        </h3>
                <?php
                    }
                } ?>
                <form id = "register" method = "post" action = "Submitfeesuccess.php" name = "myform">
                    <div class="col-sm-2" style="text-align: center;">
                        <div class="form-group">
                            <label>Select Enrollment No:</label>
                        </div>
                    </div>
                    <div class="col-sm-10">
                        <div class="form-group">
                            <select name = "txtenroll" id = "strenroll" class="form-control">
                                <option>Select Enrollment</option>
                                <?php
                                while ($row1 = $result1->fetch_assoc()) {
                                ?>
                                    <option value=<?php echo $row1["EnrollmentNo"]; ?>> <?php echo $row1["EnrollmentNo"]; ?> </option>
                                <?php
                                }
                                $conn->close();
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-2" style="text-align: center;">
                        <div class="form-group">
                            <label>Registration Fee :</label>
                        </div>
                    </div>
                    <div class="col-sm-10">
                        <div class="form-group">
                            <input type = "number" name = "txtregfee" id = "regfee" maxlength = "10" onblur="findTotal()" class = "amount" style="font-size: 20px;">
                        </div>
                    </div>
                    <div class="col-sm-2" style="text-align: center;">
                        <div class="form-group">
                            <label>Tution Fee :</label>
                        </div>
                    </div>
                    <div class="col-sm-10">
                        <div class="form-group">
                            <input type = "number" name = "txttufee" id = "tufee" maxlength = "10" onblur="findTotal()" class = "amount" style="font-size: 20px;">
                        </div>
                    </div>

                    <div class="col-sm-2" style="text-align: center;">
                        <div class="form-group">
                            <label>Library Fee</label>
                        </div>
                    </div>
                    <div class="col-sm-10">
                        <div class="form-group">
                            <input type = "number" name = "txtlibfee" id = "libfee" maxlength = "10" onblur="findTotal()" class = "amount" style="font-size: 20px;">
                        </div>
                    </div>

                    <div class="col-sm-2" style="text-align: center;">
                        <div class="form-group">
                            <label>Examination fee :</label>
                        </div>
                    </div>
                    <div class="col-sm-10">
                        <div class="form-group">
                            <input type = "number" name = "txtexamfee" id = "examfee" maxlength = "10" onblur="findTotal()" class = "amount" style="font-size: 20px;">
                        </div>
                    </div>
                    <div class="col-sm-2" style="text-align: center;">
                        <div class="form-group">
                            <label>Transpotation Fee :</label>
                        </div>
                    </div>
                    <div class="col-sm-10">
                        <div class="form-group">
                            <input type = "number" name = "txttrfee" id = "trfee" maxlength = "10" onblur="findTotal()" class = "amount" style="font-size: 20px;">
                        </div>
                    </div>

                    <div class="col-sm-2" style="text-align: center;">
                        <div class="form-group">
                            <label>Lab fee :</label>
                        </div>
                    </div>
                    <div class="col-sm-10">
                        <div class="form-group">
                            <input type = "number" name = "txtlabfee" id = "labfee" maxlength = "10" onblur="findTotal()" class = "amount"  style="font-size: 20px;">
                        </div>
                    </div>

                    <div class="col-sm-2" style="text-align: center;">
                        <div class="form-group">
                            <label>Sports fee :</label>
                        </div>
                    </div>
                    <div class="col-sm-10">
                        <div class="form-group">
                            <input type = "number" name = "txtsportsfee" id = "sportsfee" maxlength = "10" onblur="findTotal()" class = "amount" style="font-size: 20px;">
                        </div>
                    </div>

                    <div class="col-sm-2" style="text-align: center;">
                        <div class="form-group">
                            <label>Total fee :</label>
                        </div>
                    </div>
                    <div class="col-sm-10">
                        <div class="form-group">
                            <input type = "number" name = "txttltfee" id = "tltfee" maxlength = "10" class="form-control" style="font-size: 20px;" readonly>
                        </div>
                    </div>

                    <div class="button-send text-center">
                        <button type="submit" name = "submit" id = "submit" class="btn btn-default submit" OnClick = "return validatestdfee();">Submit</button>
                    </div>

                </form>

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
                <h5 style="color: white; font-weight: bold;">?? 2022. All Rights Reserved.</h5>
            </div>
        </div>
        <!-------bootstrap js---------------->
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
    </footer>
    <!-- End Footer -->
</body>

</html>