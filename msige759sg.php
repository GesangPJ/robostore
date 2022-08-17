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

    <title>RoboStore-MSI GE75-9SG</title>

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
                        <li><a href="index.php">Home</a></li>
                        <li><a href="laptops.html">Laptops</a></li>
                        <li class="active">MSI GE75-9SG</li>
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
                            <img src="./img/ge75_1.png" alt="">
                        </div>

                        <div class="product-preview">
                            <img src="./img/ge75_2.png" alt="">
                        </div>

                        <div class="product-preview">
                            <img src="./img/ge75_3.png" alt="">
                        </div>

                        <div class="product-preview">
                            <img src="./img/ge75_4.png" alt="">
                        </div>
                    </div>
                </div>
                <!-- /Product main img -->

                <!-- Product thumb imgs -->
                <div class="col-md-2  col-md-pull-5">
                    <div id="product-imgs">
                        <div class="product-preview">
                            <img src="./img/ge75_1.png" alt="">
                        </div>

                        <div class="product-preview">
                            <img src="./img/ge75_2.png" alt="">
                        </div>

                        <div class="product-preview">
                            <img src="./img/ge75_3.png" alt="">
                        </div>

                        <div class="product-preview">
                            <img src="./img/ge75_4.png" alt="">
                        </div>
                    </div>
                </div>
                <!-- /Product thumb imgs -->

                <!-- Product details -->
                <div class="col-md-5">
                    <div class="product-details">
                        <h2 class="product-name">MSI GE75-9SG (RTX2080)</h2>
                        <div>
                            <h3 class="product-price">Rp49.999.000 <del class="product-old-price">Rp50.999.000</del>
                            </h3>
                            <span class="product-available">In Stock</span>
                        </div>
                        <p>The new GE75 Raider. The reflective diamond-cut trims forms the one-of-a-kind “3D Dragon
                            Spine” design, crafted from a three-dimensional surface with red anodized finish, showing an
                            unique yet aggressive aesthetic that's guaranteed to stand out from the crowd.</p>

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
                            <li class="active"><a data-toggle="tab" href="#tab1">Dskripsi Detail</a></li>
                            <li><a data-toggle="tab" href="#tab2">Spesifikasi</a></li>
                        </ul>
                        <!-- /product tab nav -->

                        <!-- product tab content -->
                        <div class="tab-content">
                            <!-- tab1  -->
                            <div id="tab1" class="tab-pane fade in active">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p> <br> <img src="img/ge75p.jpg" height="620" width="1080"> <br>
                                            <img src="img/rtx2080.jpg" height="620" width="880">
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
                                            CPU : Intel Core i7-9750H
                                            <hr color="#555555" size="4px">
                                            Display : 17.3" (1080p) 144Hz
                                            <hr color="#555555" size="4px">
                                            Chipset : Intel® HM370
                                            <hr color="#555555" size="4px">
                                            VGA : nVIDIA GeForce RTX2080
                                            <hr color="#555555" size="4px">
                                            Memory Type : DDR4-2666
                                            <hr color="#555555" size="4px">
                                            Memory SLOTS : 2
                                            <hr color="#555555" size="4px">
                                            Storage : 2xM.2 NVME SSD & 1x 1TB HDD
                                            <hr color="#555555" size="4px">
                                            Keyboard : SteelSeries® Per Key RGB KeyBoard
                                            <hr color="#555555" size="4px">
                                            Lan & Wireless : Killer Gb& ax Wifi+Bluetooth v5
                                            <hr color="#555555" size="4px">
                                            Audio : DynAudio® 2x2W Speakers+ 1x 3W Woofer
                                            <hr color="#555555" size="4px">
                                            Battery : 65WHr
                                            <hr color="#555555" size="4px">
                                            Dimension : 397 x 330 x 33~42 mm



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