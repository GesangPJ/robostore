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

    <title>RoboStore - Iphone 8 +</title>

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
                        <li><a href="laptops.html">Smartphones</a></li>
                        <li class="active">Iphone 8 +</li>
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
                            <img src="./img/iphone88.png" alt="">
                        </div>

                        <div class="product-preview">
                            <img src="./img/iphone888.jpg" alt="">
                        </div>




                    </div>
                </div>
                <!-- /Product main img -->

                <!-- Product thumb imgs -->
                <div class="col-md-2  col-md-pull-5">
                    <div id="product-imgs">
                        <div class="product-preview">
                            <img src="./img/iphone88.png" alt="">
                        </div>

                        <div class="product-preview">
                            <img src="./img/iphone888.jpg" alt="">
                        </div>




                    </div>
                </div>
                <!-- /Product thumb imgs -->

                <!-- Product details -->

                <div class="col-md-5">
                    <div class="product-details">
                        <h2 class="product-name">Iphone 8+</h2>
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
                            <h3 class="product-price">Rp.13,500,000</h3>
                            <span class="product-available">In Stock</span>
                        </div>
                        <p>The Apple iPhone 8 Plus 256GB mobile features a 5.5" (13.97 cm) display with a screen
                            resolution of Full HD (1080 x 1920 pixels) and runs on iOS v11 operating system. The device
                            is powered by Hexa Core (2.39 GHz, Dual core, Monsoon + 1.42 GHz, Quad core, Mistral)
                            processor paired with 3 GB of RAM. As far as the battery is concerned it has 2675 mAh. Over
                            that, as far as the rear camera is concerned this mobile has a 12 MP + 12 MP camera BSI
                            Sensor supporting a resolution of 4608 x 2592 Pixels and the front snapper is powered by a
                            BSI Sensor. Other sensors include Light sensor, Proximity sensor, Accelerometer, Barometer,
                            Compass, Gyroscope. So, does it have a fingerprint sensor? Yes, it does. On board storage is
                            at 256 GB with the option to expand the memory by No.
                            Design is one of the most important factors when it comes to mobiles. This phone is 7.5 mm
                            slim and weighs 202 grams.
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
                                        <p> <br> <img src="img/iphone88.png" height="620" width="880">
                                            <br>
                                            <br>
                                            <img src="img/iphone888.jpg" height="620" width="880">
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
                                            Network : 4G LTE, GSM, CDMA, HSPA+, 802.11a/b/g/n/ac Wi-Fi
                                            <hr color="#555555" size="4px">
                                            Body Dimensions : 1,334 x 750 pixels (326 pixels-per-inch)<br>
                                            Weight : 202 grams (7.13 ounces)<br>
                                            Build : Front glass, aluminum body<br>
                                            SIM : Nano-SIM<br>
                                            IP67 dust/water resistant (up to 1m for 30 mins)<br>
                                            Apple Pay (Visa, MasterCard, AMEX certified)
                                            <hr color="#555555" size="4px">
                                            Display : 5.5-inch Retina HD LCD-backlit widescreen <br>
                                            Size : 6.24 x 3.07 x 0.30 inches<br>
                                            Resolution : 1,920 x 1,080 pixels (401 ppi)
                                            <hr color="#555555" size="4px">
                                            Platform OS iOS : iOS 12<br>
                                            Chipset : A11 Bionic with 64-bit architecture, M10 motion coprocessor<br>
                                            CPU : Quad-core 2.34 GHz (2x Hurricane + 2x Zephyr)<br>
                                            GPU : PowerVR Series7XT Plus (six-core graphics)
                                            <hr color="#555555" size="4px">
                                            Memory Card slot : No <br>
                                            Internal : 64, 256GB, 3 GB RAM
                                            <hr color="#555555" size="4px">
                                            Main Camera Single : 12-megapixel camera, 7MP front<br>
                                            Features : Quad-LED dual-tone flash, HDR<br>
                                            Video : Up to 4K at 60fps, 1080p at 240fps
                                            <hr color="#555555" size="4px">
                                            Sound : Loudspeaker Yes, with stereo speakers3.5mm jack <br>
                                            NoActive noise cancellation with dedicated mic
                                            <hr color="#555555" size="4px">
                                            Comms WLAN : Wi-Fi 802.11 a/b/g/n/ac, dual-band, hotspot
                                            Bluetooth : Yes, version 5
                                            GPS : Yes, with A-GPS, GLONASS, GALILEO, QZSS
                                            NFC : Yes Apple Only
                                            Radio : No
                                            USB : 2.0, proprietary reversible connector
                                            <hr color="#555555" size="4px">
                                            Battery : 2,675 mAh
                                            21 hours of talk time, 13 hours of internet, 14 hours of video playback, and
                                            up to 60 hours of audio playback
                                            Fast charging offers up to 50 percent charge in 30 minutes
                                            Wireless charging (Qi standard)

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