<?php
session_start();
include 'connector.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>RoboStore - ASUS TUF Gaming FX505DT</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="css/slick.css" />
    <link type="text/css" rel="stylesheet" href="css/slick-theme.css" />

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="css/style.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
    <?php include 'header.php';?>

    <!-- BREADCRUMB -->
    <div id="breadcrumb" class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb-tree">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="laptops.html">Laptops</a></li>
                        <li class="active">ASUS TUF Gaming FX505DT</li>
                    </ul>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /BREADCRUMB -->

    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- Product main img -->
                <div class="col-md-5 col-md-push-2">
                    <div id="product-main-img">
                        <div class="product-preview">
                            <img src="./img/tuf1.jpg" alt="">
                        </div>

                        <div class="product-preview">
                            <img src="./img/tuf2.jpg" alt="">
                        </div>

                        <div class="product-preview">
                            <img src="./img/tuf3.jpg" alt="">
                        </div>

                        <div class="product-preview">
                            <img src="./img/tuf3.jpg" alt="">
                        </div>

                        <div class="product-preview">
                            <img src="./img/tuf4.png" alt="">
                        </div>
                    </div>
                </div>
                <!-- /Product main img -->

                <!-- Product thumb imgs -->
                <div class="col-md-2  col-md-pull-5">
                    <div id="product-imgs">
                        <div class="product-preview">
                            <img src="./img/tuf1.jpg" alt="">
                        </div>

                        <div class="product-preview">
                            <img src="./img/tuf2.jpg" alt="">
                        </div>

                        <div class="product-preview">
                            <img src="./img/tuf3.jpg" alt="">
                        </div>

                        <div class="product-preview">
                            <img src="./img/tuf4.png" alt="">
                        </div>
                    </div>
                </div>
                <!-- /Product thumb imgs -->

                <!-- Product details -->
                <div class="col-md-5">
                    <div class="product-details">
                        <h2 class="product-name">ASUS TUF Gaming FX505DT - R7586T | R7-3750H</h2>
                        <div>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <a class="review-link" href="#">8 Review(s) | Add your review</a>
                        </div>
                        <div>
                            <h3 class="product-price">Rp.13,499,999 <del class="product-old-price">Rp,15,399,999</del>
                            </h3>
                            <span class="product-available">In Stock</span>
                        </div>
                        <p>ASUS TUF Gaming FX505 is a powerful laptop with Windows 10 that combines an impressive gaming
                            experience and durability above standard.
                            Patented cooling technology, Anti-Dust Cooling (ADC) ensures stable performance, and
                            7.1-channel surround sound fully unites your senses - FX505 comes with affordable prices!
                        </p>

                        <div class="add-to-cart">
                            <div class="qty-label">
                                Qty
                                <div class="input-number">
                                    <input type="number">
                                    <span class="qty-up">+</span>
                                    <span class="qty-down">-</span>
                                </div>
                            </div>
                            <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                        </div>

                        <ul class="product-btns">
                            <li><a href="#"><i class="fa fa-heart-o"></i> add to wishlist</a></li>
                            <li><a href="#"><i class="fa fa-exchange"></i> add to compare</a></li>
                        </ul>

                        <ul class="product-links">
                            <li>Category:</li>
                            <li><a href="laptop.html">Laptop</a></li>
                            <li><a href="gaming.html">Gaming</a></li>
                        </ul>

                        <ul class="product-links">
                            <li>Share:</li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                        </ul>

                    </div>
                </div>
                <!-- /Product details -->

                <!-- Product tab -->
                <div class="col-md-12">
                    <div id="product-tab">
                        <!-- product tab nav -->
                        <ul class="tab-nav">
                            <li class="active"><a data-toggle="tab" href="#tab1">Deskripsi Detail</a></li>
                            <li><a data-toggle="tab" href="#tab2">Spesifikasi</a></li>
                        </ul>
                        <!-- /product tab nav -->

                        <!-- product tab content -->
                        <div class="tab-content">
                            <!-- tab1  -->
                            <div id="tab1" class="tab-pane fade in active">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p> <br> <img src="img/tuf2.jpg" height="620" width="880"> <br>
                                            <img src="img/tuf4.png" height="620" width="880">
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- /tab1  -->

                            <!-- tab2  -->
                            <div id="tab2" class="tab-pane fade in">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>
                                            Processor : AMD Ryzen 7-3750H Processor
                                            <hr color="#555555" size="4px">
                                            Display : 15.6” FHD (1920x1080) IPS-Level 60Hz Anti-Glare NTSC 45%
                                            <hr color="#555555" size="4px">
                                            VGA : Nvidia GeForce GTX 1650-4GB
                                            <hr color="#555555" size="4px">
                                            Memory : RAM 8GB DDR4
                                            <hr color="#555555" size="4px">
                                            Memory SLOTS : 4
                                            <hr color="#555555" size="4px">
                                            Storage : 1TB HDD
                                            <hr color="#555555" size="4px">
                                            Networking : Wi-Fi
                                            Integrated 802.11 AC (2x2)
                                            10/100/1000 Base T
                                            Bluetooth
                                            Built-in Bluetooth V4.0
                                            <hr color="#555555" size="4px">
                                            Audio : Built-in 2 W Stereo Speakers with Array Microphone DTS Headphone: X
                                            Supports Windows 10 Cortana with Voice
                                            <hr color="#555555" size="4px">
                                            Battery : 4 cells battery 48Whr
                                            <hr color="#555555" size="4px">
                                            System Dimensions : 384 x 262 x 25 mm (WxDxH)
                                            <hr color="#555555" size="4px">
                                            Slots/Interface :

                                            1 x Type A USB 2.0
                                            2 x USB 3.0 port(s) Type A
                                            1 x RJ45 LAN Jack for LAN insert
                                            1 x HDMI, Support HDMI 1.4
                                            1 x COMBO audio jack




                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- /tab2  -->


                        </div>
                        <!-- /product tab content  -->
                    </div>
                </div>
                <!-- /product tab -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->

    <!-- Section -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">


                <!-- /product -->

            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /Section -->

    <?php include 'footer.php';?>
    <!-- jQuery Plugins -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/nouislider.min.js"></script>
    <script src="js/jquery.zoom.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>