<?php
session_start();

include 'connector.php';

if (!isset($_SESSION['customer']))
    {
      echo "<script> alert('You're not logged in! Please Log In first') </script>";
      echo "<meta http-equiv='refresh' content='1; url=customlogin.php'>";
     header ('location:loginform.php');
    exit();
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>RoboStore-Customer Account</title>

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
                    <h3 class="breadcrumb-header">Your Account</h3>
                    <ul class="breadcrumb-tree">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Account</li>
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
                <?php 
                                include "connector.php";
                               // include "getuser.php";
                              ?>


                <div class="col-md-7">
                    <!-- Billing Details -->
                    <div class="billing-details">
                        <div class="section-title">
                            <img src="./img/<?php echo $_SESSION['customer']['foto_profil']; ?>"
                                style="width: 150px; height: 150px" class="img-thumbnail" />
                        </div>
                        <div class="row">
                            <div class="col-md-5 col-10">
                                <h4>Username : </h4>
                            </div>
                            <div class="col-md-6 col-10">
                                <h4> <?php echo $_SESSION['customer']['username']; ?></h4>
                            </div>
                        </div>
                        <hr />

                        <div class="row">
                            <div class="col-md-5 col-10">
                                <h4>Full Name : </h4>
                            </div>
                            <div class="col-md-7 col-10">
                                <h4><?php echo $_SESSION['customer']['namalengkap']; ?></h4>
                            </div>
                        </div>
                        <hr />
                        <div class="row">
                            <div class="col-md-5 col-10">
                                <h4>Email Address : </h4>
                            </div>
                            <div class="col-md-6 col-10">
                                <h4><?php echo $_SESSION['customer']['email_pelanggan']; ?></h4>
                            </div>
                        </div>
                        <hr />
                        <div class="row">
                            <div class="col-md-5 col-10">
                                <h4>Home Address : </h4>
                            </div>
                            <div class="col-md-6 col-10">
                                <h4><?php echo $_SESSION['customer']['alamat_pelanggan']; ?></h4>
                            </div>
                        </div>
                        <hr />
                        <div class="row">
                            <div class="col-md-5 col-10">
                                <h4>Telephone : </h4>
                            </div>
                            <div class="col-md-6 col-10">
                                <h4><?php echo $_SESSION['customer']['notelp_pelanggan']; ?></h4>
                            </div>
                        </div>
                        <hr />
                        <?php// endforeach ?>
                        <?php //}?>
                        <div class="row">
                            <div class="col-md-6 col-10">
                                <button onclick="window.location.href='logout.php'">Log Out</button>
                            </div>
                        </div>

                    </div>
                    <!-- /Billing Details -->

                    <!-- Shiping Details -->
                    <div class="shiping-details">
                        <div class="section-title">
                            <h3 class="title">YOUR ORDER HISTORY</h3>
                        </div>


                    </div>
                    <!-- /Shiping Details -->
                </div>

                <!-- Order Details -->
                <?php if (isset($_SESSION['keranjang'])):?>
                <div class="col-md-5 order-details">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>
                                    <p align="center">No</p>
                                </th>
                                <th>
                                    <p align="center">Product</p>
                                </th>
                                <th>
                                    <p align="center">Picture(s)</p>
                                </th>
                                <th>
                                    <p align="center">Price</p>
                                </th>
                                <th>
                                    <p align="center">Total</p>
                                </th>
                                <th>
                                    <p align="center">SubTotal</p>
                                </th>
                                <th>
                                    <p align="center">Action</p>
                                </th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php $nomor=1; ?>
                            <?php foreach ($_SESSION["keranjang"] as $id_produk => $jumlah): ?>
                            <?php
								$ambil = $koneksi ->query ("SELECT * FROM produk WHERE id_produk = $id_produk");
								$pecah = $ambil->fetch_assoc();
								$subharga = $pecah["harga_jual"]*$jumlah;
								
								?>

                            <tr>

                                <th><?php echo $nomor; ?></th>
                                <th><?php echo $pecah["nama_produk"]; ?></th>
                                <th><img src="./img/<?php echo $pecah["foto_produk"]; ?>" height="120" width="120"></th>
                                <th>Rp. <?php echo number_format($pecah["harga_jual"]); ?></th>
                                <th><?php echo $jumlah; ?></th>
                                <th>Rp. <?php echo number_format ($subharga); ?></th>
                                <th>
                                    <p align="center"><a href="hapus.php?id_produk=<?php echo $id_produk ?>"
                                            class="btn btn-danger btn-xs">Delete</a></p>
                                </th>
                            </tr>

                            <?php $nomor++; ?>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
                <!-- /Order Details -->
                <?php else : ?>
                <div class="col-md-5 order-details">
                    <div class="section-title text-center">
                        <h3 class="title">Your Have No Order</h3>
                    </div>
                </div>
                <?php endif ?>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->


    </div>
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
