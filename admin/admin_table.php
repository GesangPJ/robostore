<?php
include "connector.php";

if (!isset($_SESSION['admin']))
    {
        echo "<script> alert('Akses khusus Admin!') </script>";
        echo "<meta http-equiv='refresh' content='1; url=loginform.php'>";
        //header ('location:loginform.php');
        exit();
    }

?>
<link href="css/sb-admin-2.min.css" rel="stylesheet">
<link href="css/sb-admin-2.min.css" rel="stylesheet">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Admin</h6>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>

                        <tr>
                            <th>ID Admin</th>
                            <th>Username Admin</th>
                            <th>Nama Lengkap</th>
                            <th>Konfigurasi</th>
                        </tr>
                    </thead>
                    <?php 
								include "connector.php";
								$sql= "select * from admin";
								$hasil = mysqli_query ($koneksi, $sql);
								while($row = mysqli_fetch_array($hasil)){
							?>

                    <tbody>
                        <td><?php echo $row['id_admin']; ?></td>
                        <td><?php echo $row['username']; ?></td>
                        <td><?php echo $row['nama_admin']; ?></td>
                        <td><a href="" class="btn-btn hapus"></a>
                        </td>
                    </tbody>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->



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