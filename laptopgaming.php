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

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
    <?php include 'header.php';?>
    <!-- CONTENT -->

    <section class="kontent">
        <div class="container">
            <br>
            <br>

            <h1>Laptop</h1>
            <hr>

            <div class="row">


                <div class="col-md-3">
                    <div class="thumbnail">
                        <img src="./img/tuf1.jpg" height="160" weight="130" alt="">
                        <div class="caption">
                            <h3 class="product-name">ASUS TUF Gaming FX505DT</h3>
                            <h4 class="product-price">Rp. 13,499,999</h4>
                            <a href="asustuf.php" class="btn btn-default">Cek Produk</a>
                            <a href="beli.php?id=133355" class=" btn btn-primary">Beli</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="thumbnail">
                        <img src="./img/dell1.jpg" height="160" weight="130" alt="">
                        <div class="caption">
                            <h3 class="product-name">DELL Mobile Precision M7530</h3>
                            <h4 class="product-price">Rp. 49,899,999</h4>
                            <a href="dell.php" class="btn btn-default">Cek Produk</a>
                            <a href="beli.php?id=133543" class="btn btn-primary">Beli</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumbnail">
                        <img src="./img/gt76-2sg.png" height="160" weight="130" alt="">
                        <div class="caption">
                            <h3 class="product-name">MSI GT76 DT9SG</h3>
                            <h4 class="product-price">Rp. 72,999,000</h4>
                            <a href="msigt76dt9sg.php" class="btn btn-default">Cek Produk</a>
                            <a href="beli.php?id=133855" class="btn btn-primary">Beli</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="thumbnail">
                        <img src="./img/ge75.png" height="160" weight="130" alt="">
                        <div class="caption">
                            <h3 class="product-name">MSI GE75 9SG</h3>
                            <h4 class="product-price">Rp. 72,999,000</h4>
                            <a href="msige759sg.php" class="btn btn-default">Cek Produk</a>
                            <a href="beli.php?id=133620" class="btn btn-primary">Beli</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="thumbnail">
                    <img src="./img/alienware/r5_2.jpg" height="160" weight="130" alt="">
                    <div class="caption">
                        <h3 class="product-name">Alienware 17 R5</h3>
                        <h4 class="product-price">Rp. 56,999,000</h4>
                        <a href="alienware17r5.php" class="btn btn-default">Cek Produk</a>
                        <a href="beli.php?id=873455" class="btn btn-primary">Beli</a>
                    </div>
                </div>
            </div>

        </div>
        </div>
    </section>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
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