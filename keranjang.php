<?php
session_start();
include 'connector.php';

if(empty($_SESSION["keranjang"]))
{
	echo "<script>alert('Cart is empty! Please add product to cart');</script>";
	echo "<script>location='index.php';</script>";

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>RoboStore-Cart</title>

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

    <!-- section title -->
    <section class="konten">
        <div class="container">
            <br>
            <br>

            <h1 class="title">Keranjang </h1>
            <hr>
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
								$ambil = $koneksi -> query("SELECT * FROM produk WHERE id_produk = $id_produk");
								$pecah = $ambil->fetch_assoc();
								$subharga = $pecah ["harga_jual"] * $jumlah;
					?>

                    <tr>

                        <th><?php echo $nomor; ?></th>
                        <th><?php echo $pecah["nama_produk"]; ?></th>
                        <th><img src="./img/<?php echo $pecah["foto_produk"]; ?>" height="150" width="150"></th>
                        <th>Rp. <?php echo number_format($pecah["harga_jual"]); ?></th>
                        <th><?php echo $jumlah; ?></th>
                        <th>Rp. <?php echo number_format ($subharga); ?></th>
                        <th>
                            <p align="center"><a href="hapus.php?id_produk=<?php echo $id_produk; ?>"
                                    class="btn btn-danger btn-xs">Hapus</a></p>
                        </th>
                    </tr>

                    <?php $nomor++; ?>
                    <?php endforeach ?>
                </tbody>
            </table>

            <a href="index.php" class="btn btn-default">Keep Shopping</a>
            <a href="checkout.php" class="btn btn-primary">Checkout</a>
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