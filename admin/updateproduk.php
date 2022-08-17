<?php
$koneksi = mysqli_connect("localhost","root","","robostore");


$nama= $_REQUEST['nama'];
$Harga_Jual= $_REQUEST['harga'];
$Harga_Beli= $_REQUEST['Harga_Beli'];
$Satuan_Barang=  $_REQUEST['Satuan_Barang'];
$gambar = $_REQUEST['gambar'];

$action= $_REQUEST['Kode_Barang'];
$query="UPDATE barang SET Kode_Barang='$Kode_Barang', Nama_Barang='$Nama_Barang',Harga_Jual='$Harga_Jual', Harga_Beli='$Harga_Beli', 
         Satuan_Barang='$Satuan_Barang', WHERE Kode_Barang='$Kode_Barang'";
mysqli_query($koneksi,$query);
?>
<script>
alert('data berhasil diupdate');
windows.open('barang.php', '_self');
</script>