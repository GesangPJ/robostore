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

    <title>RoboStore-iPhone XS</title>

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
                        <li class="active">iPhone XS</li>
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
                            <img src="./img/ipxs.png" alt="">
                        </div>

                        <div class="product-preview">
                            <img src="./img/gt76-3sg.png" alt="">
                        </div>

                        <div class="product-preview">
                            <img src="./img/gt76-2sg.png" alt="">
                        </div>

                        <div class="product-preview">
                            <img src="./img/gt76-8sg.png" alt="">
                        </div>
                    </div>
                </div>
                <!-- /Product main img -->

                <!-- Product thumb imgs -->
                <div class="col-md-2  col-md-pull-5">
                    <div id="product-imgs">



                    </div>
                </div>
                <!-- /Product thumb imgs -->

                <!-- Product details -->
                <div class="col-md-5">
                    <div class="product-details">
                        <h2 class="product-name">iPhone XS</h2>
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
                            <h3 class="product-price">Rp22.500.000<del class="product-old-price">Rp.22.599.000</del>
                            </h3>
                            <span class="product-available">In Stock</span>
                        </div>
                        <p>Super Retina dalam dua ukuran - termasuk layar terbesar yang pernah ada di iPhone. Face ID
                            yang lebih cepat lagi. Chip paling cerdas dan andal dalam ponsel pintar. Dan sebuah
                            terobosan sistem kamera ganda. iPhone Xs adalah segala sesuatu yang anda sukai dari iPhone.
                            Dibawa ke titik maksimum.
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
                                        <p> <br>

                                            <b>Super Retina. Besar dan lebih besar</b>
                                            <br>
                                            Layar OLED yang dibuat khusus di iPhone Xs menghadirkan warna paling akurat
                                            di industri ponsel, HDR, dan hitam pekat. Dan iPhone Xs Max memiliki layar
                                            terbesar yang pernah ada di iPhone
                                            <br><br>
                                            <b>Terbuat dari yang terbaik</b>
                                            <br>
                                            Kaca terkuat yang pernah ada di ponsel pintar. Warna emas baru yang memukau,
                                            dihasilkan oleh proses tingkat atomik. Tepian baja tahan karat sekelas alat
                                            bedah medis dan dikerjakan menggunakan mesin secara presisi. Serta tahan
                                            debu dan air di level baru
                                            <br><br>
                                            <b>Baja tahan karat sekelas alat bedah medis.</b> Apple menggunakan logam
                                            paduan khusus yang diproses menggunakan mesin secara presisi untuk
                                            menciptakan tepian struktural dalam tiga warna.
                                            <br><br>
                                            <b>Pemrosesan warna PVD.</b> Warna emas dan abu-abu menggunakan proses
                                            deposisi uap fisik (PVD) canggih pada tepian baja tahan karat untuk
                                            menghasilkan warna dan reflektivitas yang berpadu menawan dengan kaca.
                                            <br><br>
                                            <b>Pengisian daya nirkabel.</b> Kaca belakang memungkinkan pengisian daya
                                            iPhone XS secara nirkabel.3 Dan daya terisi lebih cepat dibanding iPhone X.
                                            <br><br>
                                            <b>Face ID canggih</b>
                                            <br>
                                            Keamanan menjadi sederhana ketika wajah Anda adalah kata sandi Anda. Anda
                                            dapat membuka kunci iPhone dan masuk ke aplikasi, akun, dan lainnya dengan
                                            menatap sekilas. Inilah autentikasi wajah paling aman yang pernah ada di
                                            ponsel pintar. Dan kini bekerja lebih cepat lagi
                                            <br><br>
                                            <b>A12 Bionic cerdas</b>
                                            <br>
                                            Inilah chip paling cerdas dan andal dalam ponsel pintar, dengan Neural
                                            Engine Apple generasi berikutnya. Untuk pengalaman augmented reality yang
                                            luar biasa. Potret memukau dengan Depth Control. Serta kecepatan dan
                                            kelancaran dalam segala hal yang anda lakukan
                                            <br><br>
                                            <b>Terobosan sistem kamera ganda</b>
                                            <br>
                                            Kamera paling populer di dunia kini menandai era baru fotografi. Saat sensor
                                            inovatif bekerja dengan ISP dan Neural Engine untuk membantu Anda
                                            menciftakan foto yang belum pernah dibayangkan sebelumnya

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
                                            Screen Size : 5,8 inch
                                            <hr color="#555555" size="4px">
                                            Processor : Chip A12 Bionic dengan Neural Engine
                                            <hr color="#555555" size="4px">
                                            Camera : Kamera telefoto dan wide-angle 12 MP
                                            <hr color="#555555" size="4px">
                                            Video : Mampu merekam video 4K pada kecepatan 24 fps, 30 fps, atau 60 fps
                                            <hr color="#555555" size="4px">
                                            Operating System : iOs 12
                                            <hr color="#555555" size="4px">
                                            Connector : Lightning
                                            <hr color="#555555" size="4px">
                                            Dimensi dan Berat : 177 gram (6,24 ounce)
                                            <hr color="#555555" size="4px">



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