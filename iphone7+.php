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

    <title>RoboStore - Iphone 7+ </title>

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
    <?php include 'header.php'; ?>
    <!-- BREADCRUMB -->
    <div id="breadcrumb" class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb-tree">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="laptops.html">Smartphones</a></li>
                        <li class="active">Iphone 7</li>
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
                            <img src="./img/iphone77.jpg" alt="">
                        </div>

                        <div class="product-preview">
                            <img src="./img/iphone777.jpg" alt="">
                        </div>




                    </div>
                </div>
                <!-- /Product main img -->

                <!-- Product thumb imgs -->
                <div class="col-md-2  col-md-pull-5">
                    <div id="product-imgs">
                        <div class="product-preview">
                            <img src="./img/iphone77.jpg" alt="">
                        </div>

                        <div class="product-preview">
                            <img src="./img/iphone777.jpg" alt="">
                        </div>




                    </div>
                </div>
                <!-- /Product thumb imgs -->

                <!-- Product details -->

                <div class="col-md-5">
                    <div class="product-details">
                        <h2 class="product-name">Iphone 7</h2>
                        <div>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <a class="review-link" href="#">10 Review(s) | Add your review</a>
                        </div>
                        <div>
                            <h3 class="product-price">Rp.5,500,000</h3>
                            <span class="product-available">In Stock</span>
                        </div>
                        <p>On the surface, the iPhone 7 and the iPhone 7 Plus devices don't look very different from the
                            previous-generation iPhone 6s and iPhone 6s Plus, continuing to feature the same 4.7 and
                            5.5-inch screen sizes and the same dimensions, but there are a few visual differences and
                            several important internal changes.
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
                            <a href="keranjang.php"><button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>
                                    add to cart</button></a>
                        </div>

                        <ul class="product-btns">
                            <li><a href="#"><i class="fa fa-heart-o"></i> add to wishlist</a></li>
                            <li><a href="#"><i class="fa fa-exchange"></i> add to compare</a></li>
                        </ul>

                        <ul class="product-links">
                            <li>Category:</li>
                            <li><a href="smartphone.html">Smartphone</a></li>
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
                                        <p> <br> <img src="img/iphone77.jpg" height="620" width="880">
                                            <br>
                                            <br>
                                            <img src="img/iphone777.jpg" height="620" width="880">
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
                                            Network : GSM / CDMA / HSPA / EVDO / LTE
                                            <hr color="#555555" size="4px">
                                            Body Dimensions : 138.3 x 67.1 x 7.1 mm (5.44 x 2.64 x 0.28 in)<br>
                                            Weight : 138 g (4.87 oz)<br>
                                            Build : Front glass, aluminum body<br>
                                            SIM : Nano-SIM<br>
                                            IP67 dust/water resistant (up to 1m for 30 mins)<br>
                                            Apple Pay (Visa, MasterCard, AMEX certified)
                                            <hr color="#555555" size="4px">
                                            Display : Type IPS LCD capacitive touchscreen, 16M colors <br>
                                            Size : 4.7 inches, 60.9 cm2 (~65.6% screen-to-body ratio)<br>
                                            Resolution : 750 x 1334 pixels, 16:9 ratio (~326 ppi density)
                                            Protection Ion-strengthened glass, oleophobic coating
                                            Wide color gamut 3D Touch display & home button
                                            <hr color="#555555" size="4px">
                                            Platform OS iOS : 10.0.1, upgradable to iOS 12.3<br>
                                            Chipset :Apple A10 Fusion (16 nm)<br>
                                            CPU : Quad-core 2.34 GHz (2x Hurricane + 2x Zephyr)<br>
                                            GPU : PowerVR Series7XT Plus (six-core graphics)
                                            <hr color="#555555" size="4px">
                                            Memory Card slot : No <br>
                                            Internal : 32/128/256 GB, 2 GB RAM
                                            <hr color="#555555" size="4px">
                                            Main Camera Single : 12 MP, f/1.8, 28mm (wide), 1/3", PDAF, OIS<br>
                                            Features : Quad-LED dual-tone flash, HDR<br>
                                            Video : 2160p@30fps, 1080p@30/60/120fps, 720p@240fps
                                            <hr color="#555555" size="4px">
                                            Selfie camera : Single 7 MP, f/2.2, 32mm (standard)<br>
                                            Features : Face detection, HDR, panorama Video 1080p@30fps
                                            <hr color="#555555" size="4px">
                                            Sound : Loudspeaker Yes, with stereo speakers3.5mm jack <br>
                                            NoActive noise cancellation with dedicated mic
                                            <hr color="#555555" size="4px">
                                            Comms WLAN : Wi-Fi 802.11 a/b/g/n/ac, dual-band, hotspot
                                            Bluetooth : 4.2, A2DP, LE
                                            GPS : Yes, with A-GPS, GLONASS, GALILEO, QZSS
                                            NFC : Yes
                                            Radio : No
                                            USB : 2.0, proprietary reversible connector

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