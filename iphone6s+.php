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

    <title>RoboStore - Iphone6s </title>

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
                        <li class="active">Iphone 6s +</li>
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
                            <img src="./img/iphone6s++.jpg" alt="">
                        </div>

                        <div class="product-preview">
                            <img src="./img/iphone6s+++.jpg" alt="">
                        </div>




                    </div>
                </div>
                <!-- /Product main img -->

                <!-- Product thumb imgs -->
                <div class="col-md-2  col-md-pull-5">
                    <div id="product-imgs">
                        <div class="product-preview">
                            <img src="./img/iphone6s++.jpg" alt="">
                        </div>

                        <div class="product-preview">
                            <img src="./img/iphone6s+++.jpg" alt="">
                        </div>




                    </div>
                </div>
                <!-- /Product thumb imgs -->

                <!-- Product details -->

                <div class="col-md-5">
                    <div class="product-details">
                        <h2 class="product-name">Iphone 6s+</h2>
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
                        <p>Smooth, continuous unibody design. 3D Touch, Live Photos, an A9 chip, advanced cameras, and a
                            4.7-inch Retina HD display.
                            And so much more. The iPhone 6s+ comes in 32GB & 128GB.
                            Available in Space Gray, Silver, Gold or Rose Gold. (Subject to availability)
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
                                        <p> <br> <img src="img/iphone6s++.jpg" height="620" width="880"> <br>
                                            <img src="img/iphone6s+++.jpg" height="620" width="880">
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
                                            LTE Advanced : With 50% faster peak speeds in more than 450 cities from
                                            coast to coast.
                                            <hr color="#555555" size="4px">
                                            Standby Time - Up to : 10 days
                                            <hr color="#555555" size="4px">
                                            Usage Time - Up to : 14 hrs
                                            <hr color="#555555" size="4px">
                                            Camera : 12 MP
                                            <hr color="#555555" size="4px">
                                            Weight : 5.04 oz
                                            <hr color="#555555" size="4px">
                                            Width : 2.64 in
                                            <hr color="#555555" size="4px">
                                            Height : 5.44 in
                                            <hr color="#555555" size="4px">
                                            Screen : 4.7-inch (diagonal) LED-backlit widescreen next-generation
                                            Multi-Touch display with IPS technology and Taptic Engine
                                            <hr color="#555555" size="4px">
                                            Operating System : Apple iOS 10
                                            <hr color="#555555" size="4px">
                                            Colors : Space Gray, Silver, Gold, or Rose Gold (Subject to availability)
                                            <hr color="#555555" size="4px">
                                            Storage : 32 GB or 128 GB (Subject to availability)
                                            <hr color="#555555" size="4px">
                                            Hearing Aid Compatibility : M3/T4
                                            <hr color="#555555" size="4px">
                                            Network : GSM/EDGE, UMTS/HSPA+, DC-HSDPA, CDMA EV-DO Rev. A; Activate
                                            Advanced Calling 1.0 to experience Simultaneous Voice & Data
                                            <hr color="#555555" size="4px">
                                            HD Voice : Experience HD Voice and Simultaneous Voice & Data. Enable Wi-Fi
                                            Calling and make calls anywhere you have a Wi-Fi Connection (available on
                                            iOS 9.3 or greater).


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