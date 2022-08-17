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

    <title>RoboStore - Samsung Galaxy A80</title>

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
    <!-- HEADER -->

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
                        <li><a href="laptops.html">Smartphones</a></li>
                        <li class="active">Samsung Galaxy A80</li>
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
                            <img src="./img/galaxy180-1.jpg" alt="">
                        </div>

                        <div class="product-preview">
                            <img src="./img/galaxy180-2.jpg" alt="">
                        </div>

                        <div class="product-preview">
                            <img src="./img/galaxy180-3.jpg" alt="">
                        </div>
                        <div class="product-preview">
                            <img src="./img/galaxy180-4.jpg" alt="">
                        </div>
                    </div>
                </div>
                <!-- /Product main img -->

                <!-- Product thumb imgs -->
                <div class="col-md-2  col-md-pull-5">
                    <div id="product-imgs">
                        <div class="product-preview">
                            <img src="./img/galaxy180-1.jpg" alt="">
                        </div>

                        <div class="product-preview">
                            <img src="./img/galaxy180-2.jpg" alt="">
                        </div>
                        <div class="product-preview">
                            <img src="./img/galaxy180-3.jpg" alt="">
                        </div>
                        <div class="product-preview">
                            <img src="./img/galaxy180-4.jpg" alt="">
                        </div>




                    </div>
                </div>
                <!-- /Product thumb imgs -->

                <!-- Product details -->

                <div class="col-md-5">
                    <div class="product-details">
                        <h2 class="product-name">Smasung Galaxy A80</h2>
                        <div>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <a class="review-link" href="#">18 Review(s) | Add your review</a>
                        </div>
                        <div>
                            <h3 class="product-price">Rp.9,499,000</h3>
                            <span class="product-available">In Stock</span>
                        </div>
                        <p>Rotating Camera, All Cinematic Display, Super Fast Charging, On Screen Fingerprint.
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
                            <a href="beli.php?id=62223"><button class="add-to-cart-btn"><i
                                        class="fa fa-shopping-cart"></i>
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
                                        <p>
                                            The Samsung Galaxy A80 has a 6.7-inch full-HD+ (1080x2400 pixels) Super
                                            AMOLED "New Infinity Display" with a 20:9 aspect ratio; it is the first
                                            Samsung phone featuring the "New Infinity" technology. The phone is
                                            powered
                                            by the newly unveiled Snapdragon 730 SoC, an octa-core processor with
                                            two
                                            cores clocked at 2.2GHz and six cores clocked at 1.7GHz. It also comes
                                            with
                                            8GB of RAM and 128GB of onboard storage. Its storage cannot be expanded
                                            via
                                            a micro SD card. The phone measures 165.2x76.5x9.3mm. The phone also
                                            comes
                                            with a 3700 mAh battery and 25W Super Fast Charging technology.
                                            <br>
                                            <img src="img/galaxy180-e.jpg" height="1920" width="1080">
                                            <br>
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
                                            Network : 2G GSM, 3G WCDMA, 4G LTE FDD, 4G LTE TDD <br>
                                            <hr color="#555555" size="4px">
                                            Body Dimensions : 165.2 x 76.5 x 9.3<br>
                                            Weight : 220 grams<br>
                                            Build : Front glass, aluminum body<br>
                                            SIM : Nano-SIM (SIM+SIM 2)<br>
                                            IP67 dust/water resistant (up to 1m for 30 mins)<br>

                                            <hr color="#555555" size="4px">
                                            Display : 170.3mm (6.7" full rectangle) / 166.0mm (6.5" rounded corners)
                                            SUPER AMOLED <br>
                                            Resolution : 1080 x 2400 (FHD+)
                                            <hr color="#555555" size="4px">
                                            OS : Android 9 (Pie)<br>
                                            Chipset : Qualcomm Snapdragon 730<br>
                                            CPU : Octa-core (2x 2.2GHz Kryo 470 Gold + 6x 1.7GHz Kryo 470
                                            Silver)<br>
                                            GPU : Adreno 618 <br>
                                            <hr color="#555555" size="4px">
                                            Memory Card slot : No <br>
                                            Internal : 128GB ROM ; 8GB RAM ;
                                            <hr color="#555555" size="4px">
                                            Main Camera (Resolution): 48.0 MP + 8.0 MP + HQVGA<br>
                                            Main Camera (F) : F2.0 , F2.2 , F1.2<br>
                                            Video : Up to UHD 4K (3840 x 2160) @30fps<br>
                                            Slow Motion : 480fps @HD, 240fps @HD <br>
                                            <hr color="#555555" size="4px">
                                            Sound : Loudspeaker Yes<br>
                                            NoActive noise cancellation with dedicated mic
                                            <hr color="#555555" size="4px">
                                            Comms WLAN : Wi-Fi 802.11 a/b/g/n/ac, dual-band, hotspot
                                            Bluetooth : Yes, version 5
                                            GPS : GPS, Glonass, Beidou, Galileo
                                            NFC : Yes
                                            Radio : No
                                            USB : 2.0 Type-C
                                            <hr color="#555555" size="4px">
                                            Battery : 3700 mAh<br>
                                            Sensors : Accelerometer, Fingerprint Sensor, Gyro Sensor, Geomagnetic
                                            Sensor, Hall Sensor, RGB Light Sensor, Proximity Sensor<br>

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
    <?php include 'footer.php'; ?>

    <!-- jQuery Plugins -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/nouislider.min.js"></script>
    <script src="js/jquery.zoom.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>
