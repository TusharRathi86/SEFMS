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
    <script type="text/javascript" src = "js/SignUp.js"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="fonts/css/font-awesome.css">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
    <!-------------style css--------->
    <link rel="stylesheet" href="css/style.css" type="text/css">

</head>
<?php
session_start(); 
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
                            <li class="active"><a href="index.php">Home</a></li>
                            <li class=""><a href="SignIn.php">Sign In</a></li>
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
            <div class="col-md-12 text-center heading">
            <?php
            if (isset($_SESSION["UserCheckMsg"]) == true){
                if ( empty($_SESSION["UserCheckMsg"] == false) )
				{
                ?>
    			<h3> 
      			<?php echo $_SESSION["UserCheckMsg"]; ?>
      			</h3> 
      			<?php			
				}    
            }
			?>
                <h4><span style="color:#01acf1; font-weight:bold; padding-top: 50px;">For User account Please Register here </span></h4>
            </div>
            <div class="row">
                <form id = "register" method = "post" action = "Thanks.php" name = "myform">
                    <div class="col-sm-2" style="text-align: center;">
                        <div class="form-group">
                            <label>Name</label>
                        </div>
                    </div>
                    <div class="col-sm-10">
                        <div class="form-group">
                            <input type = "text" name = "txtname" id = "name" maxlength = "20" class="form-control" style="font-size: 15px;">
                        </div>
                    </div>

                    <div class="col-sm-2" style="text-align: center;">
                        <div class="form-group">
                            <label>EmailId</label>
                        </div>
                    </div>
                    <div class="col-sm-10">
                        <div class="form-group">
                            <input type = "text" name = "txtemail" id = "email" maxlength = "50" class="form-control" style="font-size: 15px;">
                        </div>
                    </div>
                    <div class="col-sm-2" style="text-align: center;">
                        <div class="form-group">
                            <label>Mobile Number</label>
                        </div>
                    </div>
                    <div class="col-sm-10">
                        <div class="form-group">
                            <input type = "text" name = "txtpnumber" id = "pnumber" maxlength = "10" class="form-control" style="font-size: 15px;">
                        </div>
                    </div>

                    <div class="col-sm-2" style="text-align: center;">
                        <div class="form-group">
                            <label>Address</label>
                        </div>
                    </div>
                    <div class="col-sm-10">
                        <div class="form-group">
                            <input type = "text" name = "txtaddress" id = "address" maxlength = "100" class="form-control" style="font-size: 15px;">
                        </div>
                    </div>

                    <div class="col-sm-2" style="text-align: center;">
                        <div class="form-group">
                            <label>State</label>
                        </div>
                    </div>
                    <div class="col-sm-10">
                        <div class="form-group">
                            <input type = "text" name = "txtstate" id = "city" maxlength = "25" class="form-control" style="font-size: 15px;">
                        </div>
                    </div>
                    <div class="col-sm-2" style="text-align: center;">
                        <div class="form-group">
                            <label>Select Gender:</label>
                        </div>
                    </div>
                    <div class="col-sm-10">
                        <div class="form-group">
                            <select name = "txtgender" id = "gen" class="form-control">
                                <option>Select Gender</option>
                                <option>Male</option>
                                <option>Female</option>
                                <option>Other</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-2" style="text-align: center;">
                        <div class="form-group">
                            <label>User Name</label>
                        </div>
                    </div>
                    <div class="col-sm-10">
                        <div class="form-group">
                            <input type = "text" name = "txtuser" id = "user" maxlength = "15" class="form-control" style="font-size: 15px;">
                        </div>
                    </div>

                    <div class="col-sm-2" style="text-align: center;">
                        <div class="form-group">
                            <label>Password</label>
                        </div>
                    </div>
                    <div class="col-sm-10">
                        <div class="form-group">
                            <input type = "password" name = "txtpasswd" id = "passwd" maxlength = "12" class="form-control" style="font-size: 15px;">
                        </div>
                    </div>

                    <div class="col-sm-2" style="text-align: center;">
                        <div class="form-group">
                            <label>Confirm Password</label>
                        </div>
                    </div>
                    <div class="col-sm-10">
                        <div class="form-group">
                            <input type = "password" name = "txtcpasswd" id = "passwd" maxlength = "12" class="form-control" style="font-size: 15px;">
                            <input type="hidden" name="EntryFlag" value = "Y">
                        </div>
                    </div>
                    <div class="button-send text-center">
                        <button type = "submit" name = "submit" id = "submit" value = "SUBMIT" OnClick = "return validateSignup();" class="btn btn-default submit">Submit</button>
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