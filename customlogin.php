<!DOCTYPE html>
<?php
//include('loginprocess.php'); // Includes Login Script
//if(isset($_SESSION['login_user'])){
//header("location: index.php"); // Redirecting To Profile Page
//}
session_start();
include "connector.php";

?>
<html lang="en">

<head>
    <title>RoboStore : Customer Login</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="css/slick.css" />
    <link type="text/css" rel="stylesheet" href="css/slick-theme.css" />

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="css/style.css" />

</head>

<body>
    <!-- HEADER -->
    <header>
        <!-- TOP HEADER -->
        <div id="top-header">
            <div class="container">
                <ul class="header-links pull-left">
                    <li><a href="#"><i class="fa fa-phone"></i> +021-95-51-84</a></li>
                    <li><a href="#"><i class="fa fa-envelope-o"></i> robostore@gtech.id</a></li>
                    <li><a href="#"><i class="fa fa-map-marker"></i> R1-R5 2nd floor, Paudra Tower, Central Atlantis</a>
                    </li>
                </ul>
                <br>
            </div>
        </div>
        <!-- /TOP HEADER -->

        <!-- MAIN HEADER -->
        <div id="header">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- LOGO -->
                    <div class="col-md-3">
                        <div class="header-logo">
                            <a href="index.php" class="logo">
                                <img src="./img/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- /LOGO -->



                    <!-- ACCOUNT -->
                    <div class="col-md-3 clearfix">
                        <div class="header-ctn">

                            <!-- /Menu Toogle -->
                        </div>
                    </div>
                    <!-- /ACCOUNT -->
                </div>
                <!-- row -->
            </div>
            <!-- container -->
        </div>
        <!-- /MAIN HEADER -->
    </header>
    <!-- /HEADER -->



    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
                    <span class="login100-form-title-1">
                        Log in
                    </span>
                </div>

                <form class="login100-form validate-form" method="POST">
                    <!--action="loginprocess.php"-->
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
                        <span class="label-input100">Username</span>
                        <input class="input100" type="text" id="username" name="username"
                            placeholder="Enter your username">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
                        <span class="label-input100">Password</span>
                        <input class="input100" type="password" id="katasandi" name="katasandi"
                            placeholder="Enter password">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="flex-sb-m w-full p-b-30">
                        <div>
                            <a href="registerform.php" class="txt1">
                                Register Here
                            </a>
                        </div>

                        <div>
                            <a href="forgot.php" class="txt1">
                                Forgot Password?
                            </a>
                        </div>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" name="login">
                            Login
                        </button>
                    </div>
                    <div>
                        <br>
                    </div>
                    <div class="g-recaptcha" data-sitekey="6LcBNK8UAAAAANt2302ETRWEfq0opL_9wcjfPRTn"></div>
                </form>
                <?php 
					if (isset($_POST['login']))
					{
						$getcustom = $koneksi->query("SELECT * FROM pelanggan WHERE username='$_POST[username]' AND katasandi='$_POST[katasandi]'");
						
						$cocok = $getcustom->num_rows;

						if($cocok==1)
						{
                            $akun = $getcustom->fetch_assoc();
                            $_SESSION['customer'] = $akun;
							echo "<div class='alert alert-info'> Welcome!  </div>" ; echo $_SESSION['customer']['namalengkap'];
							echo "<meta http-equiv='refresh' content='1; url= index.php'>";
						}
						else 
						{
							echo "<div class='alert alert-danger'> Name or Password is wrong! </div>";
							echo "<meta http-equiv='refresh' content='1; url=customlogin.php'>";
						}
					}
				

				?>
                <div>
                    <a href="index.php" class="txt1">
                        Back to Home
                    </a>
                </div>
            </div>

        </div>
    </div>
    <?php include 'footer.php';?>

    <script>
    $(document).ready(function) {
        $(".validate-form").on('login', function(event) {
            var recaptcha =

        });
    }
    </script>
    <script src="https://www.google.com/recaptcha/api.js?render=6LcBNK8UAAAAANt2302ETRWEfq0opL_9wcjfPRTn"></script>
    <script>
    grecaptcha.ready(function() {
        grecaptcha.execute('6LcBNK8UAAAAANt2302ETRWEfq0opL_9wcjfPRTn', {
            action: 'login'
        }).then(function(token) {
            ...
        });
    });
    </script>

    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>

</body>

</html>