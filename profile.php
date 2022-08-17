<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

</head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://bootswatch.com/4/simplex/bootstrap.min.css"/>

<body>
<div class="container">
<?php 
								include "connector.php";
								$sql= "select * from pelanggan";
								$hasil = mysqli_query ($koneksi, $sql);
								while($row = mysqli_fetch_array($hasil)){
							?>
        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-body">
                        <div class="card-title mb-4">
                            <div class="d-flex justify-content-start">
                                <div class="image-container">
                                    <img src="./img/<?php echo $row["foto_profil"]; ?>" style="width: 150px; height: 150px" class="img-thumbnail" />
                                    <div class="middle">
                                        <input type="button" class="btn btn-secondary" id="btnChangePicture" value="Change" />
                                        <input type="file" style="display: none;" id="profilePicture" name="file" />
                                    </div>
                                </div>
                                <div class="userData ml-3">
                                    <h2 class="d-block" style="font-size: 1.5rem; font-weight: bold"><a href="javascript:void(0);"><?php echo $row['namalengkap']; ?></a></h2>
                                </div>
                                <div class="ml-auto">
                                    <input type="button" class="btn btn-primary d-none" id="btnDiscard" value="Discard Changes" />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="basicInfo-tab" data-toggle="tab" href="#basicInfo" role="tab" aria-controls="basicInfo" aria-selected="true">Profile</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="order-tab" data-toggle="tab" href="#order" role="tab" aria-controls="connectedServices" aria-selected="false">Your Order</a>
                                    </li>
                                </ul>
                                <div class="tab-content ml-1" id="myTabContent">
                                    <div class="tab-pane fade show active" id="basicInfo" role="tabpanel" aria-labelledby="basicInfo-tab">
                                        

                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Username</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                            <?php echo $row['username']; ?>
                                            </div>
                                        </div>
                                        <hr />

                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Full Name</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                            <?php echo $row['namalengkap']; ?>
                                            </div>
                                        </div>
                                        <hr />
                                        
                                        
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Email</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                            <?php echo $row['email_pelanggan']; ?>
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Home Address</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                            <?php echo $row['alamat_pelanggan']; ?>
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">No.Telephone</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                            <?php echo $row['notelp_pelanggan']; ?>
                                            </div>
                                        </div>
                                        <hr />

                                    </div>
                                    <div class="tab-pane fade show active" id="order" role="tabpanel" aria-labelledby="order-tab">
                                    <?php if (isset($_SESSION['keranjang'])):?>
                <div class="col-md-5 order-details">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>
                                    <p align="center">No</p>
                                </th>
                                <th>
                                    <p align="center">Produk</p>
                                </th>
                                <th>
                                    <p align="center">Gambar</p>
                                </th>
                                <th>
                                    <p align="center">harga</p>
                                </th>
                                <th>
                                    <p align="center">Jumlah</p>
                                </th>
                                <th>
                                    <p align="center">Subharga</p>
                                </th>
                                <th>
                                    <p align="center">Aksi</p>
                                </th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php $nomor=1; ?>
                            <?php foreach ($_SESSION["keranjang"] as $ID => $jumlah): ?>
                            <?php
								$ambil = $koneksi ->query ("SELECT * FROM produk WHERE id=$ID");
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
                                    <p align="center"><a href="hapus.php?id=<?php echo $ID ?>"
                                            class="btn btn-danger btn-xs">Hapus</a></p>
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
                                </div>
                                    
                            
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>
        
    </div>
    <?php } ?>
    </body>
    </html>