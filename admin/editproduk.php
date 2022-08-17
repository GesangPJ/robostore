<!DOCTYPE html>

<?php

$koneksi = mysqli_connect("localhost","root","","robostore");
if (!isset($_SESSION['admin']))
    {
        echo "<script> alert('Akses khusus Admin!') </script>";
        echo "<meta http-equiv='refresh' content='1; url=loginform.php'>";
        //header ('location:loginform.php');
        exit();
    }

?>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>RoboStore-Edit Produk</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/input.css" rel="stylesheet">

</head>

<body>

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5 col-lg-17 mx-auto">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">

                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Tambah Produk</h1>
                            </div>
                            <form class="user" action="save_produk.php" method="POST" enctype="multipart/form-data">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name="nama" id="nama"
                                            placeholder="Ketik Nama Produk">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" name="harga"
                                            id="harga" placeholder="Ketik Harga Produk">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name="stok" id="stok"
                                            placeholder="Ketik Jumlah Stok">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="file" id="gambar" name="gambar" accept="image/*">
                                    </div>
                                </div>
                                <button class=" btn btn--pill btn--blue" type="submit">Tambah</button>
                                <hr>
                                <br>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>

</body>
<!--php } ?-->

</html>