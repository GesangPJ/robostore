<?php
session_start();
include 'connector.php';

if (!isset($_SESSION['admin']))
    {
        echo "<script> alert('Akses khusus Admin!') </script>";
        echo "<meta http-equiv='refresh' content='1; url=index.php'>";
        //header ('location:loginform.php');
        exit();
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ROBOSTORE-Admin Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/customicons" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center"
                href="admin.php?halaman=dashboard">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">ROBOSTORE-Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="admin.php?halaman=dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>



            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->

            <!-- Heading -->
            <div class="sidebar-heading">
                Data
            </div>



            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">

            </li>

            <!-- Nav Item - Charts -->

            <li class="nav-item">
                <a class="nav-link" href="admin.php?halaman=users">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tabel Pelanggan</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="admin.php?halaman=produk">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tabel Barang/Produk</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
            <li class="nav-item">
                <a class="nav-link" href="admin.php?halaman=produkadd">
                    <i class="fas fa-fw fa-tablet"></i>
                    <span>Tambah Barang/Produk</span></a>
            </li>

            <hr class="sidebar-divider d-none d-md-block">

            <li class="nav-item">
                <a class="nav-link" href="admin.php?halaman=logout">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Logout</span></a>
            </li>

            <!-- Sidebar Toggler (Sidebar) -->

            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->
        <?php
            if (isset($_GET['halaman']))
            {
                if($_GET['halaman']=="produk")
                {
                    include 'products.php';
                }
                elseif($_GET['halaman']=="users")
                {
                    include 'users.php';
                }
                elseif($_GET['halaman']=="logout")
                {
                    include 'logout.php';
                }
                elseif($_GET['halaman']=="admins")
                {
                    include 'admin_table.php';
                }
                elseif($_GET['halaman']=="dashboard")
                {
                    include 'dashboard.php';
                }
                elseif($_GET['halaman']=="addamin")
                {
                    include 'addamin.php';
                }
                elseif($_GET['halaman']=="produkadd")
                {
                    include 'addproduk.php';
                }
            }
            else 
            {
                include 'dashboard.php';
            }

        ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <!--<div id="content">
            </div>-->
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->


        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>

</body>

</html>