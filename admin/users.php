<?php

include 'connector.php';

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
<!-- Begin Page Content -->
<br>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"></h1>
    <p class="mb-8"></p>

    <!-- DataTales Example -->
    <div class="card shadow mb-8">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Pelanggan</h6>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="1">
                    <thead>

                        <tr>
                            <th>ID Akun</th>
                            <th>Username</th>
                            <th>Nama Lengkap</th>
                            <th>Alamat Email</th>
                            <th>Alamat Rumah</th>
                            <th>Nomor Telephone</th>
                            <th></th>
                        </tr>
                    </thead>
                    <?php 
								include "connector.php";
								$sql= "select * from pelanggan";
								$hasil = mysqli_query ($koneksi, $sql);
								while($row = mysqli_fetch_array($hasil)){
							?>

                    <tbody>
                        <td><?php echo $row['id_pelanggan']; ?></td>
                        <td><?php echo $row['username']; ?></td>
                        <td><?php echo $row['namalengkap']; ?></td>
                        <td><?php echo $row['email_pelanggan']; ?></td>
                        <td><?php echo $row['alamat_pelanggan']; ?></td>
                        <td><?php echo $row['notelp_pelanggan']; ?></td>
                        <td>
                            <a class="fab-button" href="">
                                <div class="dot"></div>
                            </a>
                            <div class="fab-options">
                                <a class="fab-option" href="#"><i class="material-icons">delete</i>
                                    <p>
                                        Hapus
                                    </p>
                                </a><a class="fab-option" href="#"><i class="material-icons">mail</i>
                                    <p>
                                        Kirim Pesan
                                    </p>
                            </div>
                        </td>
                    </tbody>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>

    <!-- End of Main Content -->



    <!-- Bootstrap core JavaScript-->
    <!--<script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
-->
    <!-- Core plugin JavaScript-->
    <!--<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
-->
    <!-- Custom scripts for all pages-->
    <!--<script src="js/sb-admin-2.min.js"></script>
    -->
    </body>

    </html>
