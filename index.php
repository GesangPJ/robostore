<?php
session_start();
include "connector.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>RoboStore-Home</title>

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
                <ul class="header-links pull-right">
                    <!--kalau sudah login-->
                    <?php if (isset($_SESSION['customer'])):?>
                    <li><a href="account.php"><i class="fa fa-user-o"></i>Your Account</a></li>
                    <li><a href="logout.php"><i class="fa fa-user-o"></i>Log Out</a></li>
                    <!--//kalau sudah login-->
                    <!--kalau belum login-->
                    <?php else : ?>
                    <li><a href="customlogin.php"><i class="fa fa-user-o"></i>Log In</a></li>
                    <?php endif ?>
                    <!--done-->
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
                            <div class="menu-toggle">
                                <a href="#">
                                    <i class="fa fa-bars"></i>
                                    <span>Menu</span>
                                </a>
                            </div>
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

    <!-- NAVIGATION -->
    <nav id="navigation">
        <!-- container -->
        <div class="container">
            <!-- responsive-nav -->
            <div id="responsive-nav">
                <!-- NAV -->
                <ul class="main-nav nav navbar-nav">
                    <li class="active"><a href="index.php">Home</a></li>
                    <li><a href="laptopgaming.php">Laptops</a></li>
                    <li><a href="smartphone.php">Smartphones</a></li>
                    <li><a href="voucher.php">Digital Vouchers</a></li>
                </ul>
                <!-- /NAV-->
            </div>
            <!-- /responsive-nav -->
        </div>
        <!-- /container -->
    </nav>
    <!-- /NAVIGATION -->

    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">

                <!-- shop -->
                <div class="col-md-4 col-xs-6">
                    <div class="shop">
                        <div class="shop-img">
                            <img src="./img/gt76.jpg" alt="">
                        </div>
                        <div class="shop-body">
                            <h3>Laptop<br>Collection</h3>
                            <a href="laptopgaming.php" class="cta-btn">Shop now <i
                                    class="fa fa-arrow-circle-right"></i></a>

                        </div>
                    </div>
                </div>
                <!-- /shop -->

                <!-- shop -->
                <div class="col-md-4 col-xs-6">
                    <div class="shop">
                        <div class="shop-img">
                            <img src="./img/smartphones.jpg" alt="">
                        </div>
                        <div class="shop-body">
                            <h3>Smartphones<br>Collection</h3>
                            <a href="smartphone.php" class="cta-btn">Shop now <i
                                    class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- /shop -->

                <!-- shop -->
                <div class="col-md-4 col-xs-6">
                    <div class="shop">
                        <div class="shop-img">
                            <img src="./img/90k.jpg" height="240" weight="120" alt="">
                        </div>
                        <div class="shop-body">
                            <h3>Voucher Digital<br>Collection</h3>
                            <a href="voucher.php" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- /shop -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->

    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">

                <!-- section title -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h3 class="title">New Products</h3>
                        <div class="section-nav">
                            <ul class="section-tab-nav tab-nav">
                                <li class="active"><a data-toggle="tab" href="#tab1">Gaming Laptop</a></li>
                                <li><a data-toggle="tab" href="#tab2">Smartphones</a></li>
                                <li><a data-toggle="tab" href="#tab4">Digital Vouchers</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /section title -->

                <!-- Products tab 1 & slick -->
                <div class="col-md-12">
                    <div class="row">
                        <div class="products-tabs">
                            <!-- tab -->
                            <div id="tab1" class="tab-pane active">
                                <div class="products-slick" data-nav="#slick-nav-1">
                                    <!-- product -->
                                    <?php
                                    include "connector.php";
                                    $ambil = $koneksi-> query("SELECT * FROM produk WHERE id_produk IN ('133855', '133543','133355','133620'); ");?>
                                    <?php while ($perproduk = $ambil-> fetch_assoc()){ ?>
                                    <div class="product">
                                        <div class="product-img">
                                            <img src="./img/<?php echo $perproduk ['foto_produk']; ?>" alt="">
                                            <div class="product-label">
                                                <span class="new">NEW</span>
                                            </div>
                                        </div>
                                        <div class="product-body">
                                            <p class="product-category">Category</p>
                                            <h3 class="product-name"><?php echo $perproduk ['nama_produk']; ?></h3>
                                            <h4 class="product-price">Rp.
                                                <?php echo number_format($perproduk ['harga_jual']); ?></h4>
                                            <!--<div class="product-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>-->
                                            <div class="product-btns">
                                                <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span
                                                        class="tooltipp">add to
                                                        wishlist</span></button>
                                                <button class="add-to-compare"><i class="fa fa-exchange"></i><span
                                                        class="tooltipp">add to
                                                        compare</span></button>
                                                <button class="quick-view"><i class="fa fa-eye"></i><span
                                                        class="tooltipp">quick
                                                        view</span></button>
                                            </div>
                                        </div>
                                        <div class="add-to-cart">
                                            <a href="beli.php?id=<?php echo $perproduk ['id_produk']; ?>"><button
                                                    class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to
                                                    cart</a></button>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    <!-- /product -->

                                </div>
                                <div id="slick-nav-1" class="products-slick-nav"></div>
                            </div>
                            <!-- /tab -->
                            <!-- tab -->
                            <div id="tab2" class="tab-pane fade">
                                <div class="products-slick" data-nav="#slick-nav-1">
                                    <!-- product -->
                                    <?php $ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk IN ('187678', '345234','347382','582365','623523','867867','923214','73672'); ");?>
                                    <?php while ($perproduk= $ambil->fetch_assoc()){ ?>
                                    <div class="product">
                                        <div class="product-img">
                                            <img src="./img/<?php echo $perproduk ['foto_produk']?>" alt="">
                                            <div class="product-label">
                                                <span class="new">NEW</span>
                                            </div>
                                        </div>
                                        <div class="product-body">
                                            <p class="product-category">Category</p>
                                            <h3 class="product-name"><?php echo $perproduk ['nama_produk']; ?></h3>
                                            <h4 class="product-price">Rp.
                                                <?php echo number_format($perproduk ['harga_jual']); ?></h4>
                                            <div class="product-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="product-btns">
                                                <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span
                                                        class="tooltipp">add to
                                                        wishlist</span></button>
                                                <button class="add-to-compare"><i class="fa fa-exchange"></i><span
                                                        class="tooltipp">add to
                                                        compare</span></button>
                                                <button class="quick-view"><i class="fa fa-eye"></i><span
                                                        class="tooltipp">quick
                                                        view</span></button>
                                            </div>
                                        </div>
                                        <div class="add-to-cart">
                                            <a href="beli.php?id_produk=<?php echo $perproduk ['id_produk']?>"><button
                                                    class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to
                                                    cart</a></button>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    <!-- /product -->


                                </div>
                                <div id="slick-nav-2" class="products-slick-nav"></div>
                            </div>
                            <!-- /tab -->
                            <!-- tab -->
                            <div id="tab4" class="tab-pane fade">
                                <div class="products-slick" data-nav="#slick-nav-1">
                                    <!-- product -->
                                    <?php $ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk IN ('61236', '78250'); ");?>
                                    <?php while ($perproduk= $ambil->fetch_assoc()){ ?>
                                    <div class="product">
                                        <div class="product-img">
                                            <img src="./img/<?php echo $perproduk ['foto_produk']?>" alt="">
                                            <div class="product-label">
                                                <span class="new">NEW</span>
                                            </div>
                                        </div>
                                        <div class="product-body">
                                            <p class="product-category">Category</p>
                                            <h3 class="product-name"><?php echo $perproduk ['nama_produk']; ?></h3>
                                            <h4 class="product-price">Rp.
                                                <?php echo number_format($perproduk ['harga_jual']); ?></h4>
                                            <div class="product-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="product-btns">
                                                <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span
                                                        class="tooltipp">add to
                                                        wishlist</span></button>
                                                <button class="add-to-compare"><i class="fa fa-exchange"></i><span
                                                        class="tooltipp">add to
                                                        compare</span></button>
                                                <button class="quick-view"><i class="fa fa-eye"></i><span
                                                        class="tooltipp">quick
                                                        view</span></button>
                                            </div>
                                        </div>
                                        <div class="add-to-cart">
                                            <a href="beli.php?id_produk=<?php echo $perproduk ['id_produk']?>"><button
                                                    class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to
                                                    cart</a></button>
                                        </div>
                                    </div>

                                    <?php } ?>



                                    <!-- /product -->


                                </div>
                                <div id="slick-nav-4" class="products-slick-nav"></div>
                            </div>
                            <!-- /tab -->
                        </div>
                    </div>
                </div>
                <!-- Products tab & slick -->





            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->

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