<?php

$koneksi = new mysqli("localhost","root","","robostore");

if (!isset($_SESSION['admin']))
    {
        echo "<script> alert('Akses khusus Admin!') </script>";
        echo "<meta http-equiv='refresh' content='1; url=loginform.php'>";
        //header ('location:loginform.php');
        exit();
    }

?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link href="custombuttons.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="css/sb-admin-2.min.css" rel="stylesheet">
<link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<!-- Begin Page Content -->
<div class="container-fluid col-lg-17 mx-auto">

    <!-- Page Heading -->

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Barang</h6>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID Barang</th>
                            <th>Nama Barang</th>
                            <th>Harga Jual Barang</th>
                            <th>Jumlah Barang</th>
                            <th>Waktu re-stok</th>
                            <th>Konfigurasi</th>
                        </tr>
                    </thead>
                    <tfoot>

                        <tr>
                            <th>ID Barang</th>
                            <th>Nama Barang</th>
                            <th>Harga Jual Barang</th>
                            <th>Jumlah Barang</th>
                            <th>Waktu re-stok</th>
                            <th>Konfigurasi</th>
                        </tr>
                    </tfoot>
                    <?php 
								include "connector.php";
								$sql= "select * from produk";
								$hasil = mysqli_query ($koneksi, $sql);
								while($row = mysqli_fetch_array($hasil)){
							?>

                    <tbody>
                        <td><?php echo $row['id_produk']; ?></td>
                        <td><?php echo $row['nama_produk']; ?></td>
                        <td><?php echo $row['harga_jual']; ?></td>
                        <td><?php echo $row['stok_produk']; ?></td>
                        <td><?php echo $row['restok']; ?></td>
                        <td><a class="fab-button" href="">
                                <div class="dot"></div>
                            </a>
                            <div class="fab-options">
                                <a class="fab-option" href="deletea1.php"><i class="material-icons">delete</i>
                                    <p>
                                        Hapus
                                    </p>
                                </a><a class="fab-option" href="editproduk.php"><i class="material-icons">edit</i>
                                    <p>
                                        Edit
                                    </p>
                        </td>
                    </tbody>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/datatables-demo.js"></script>

</body>

</html>
