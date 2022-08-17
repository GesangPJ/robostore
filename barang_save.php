<?php
include "connector.php";
$namabarang= $_REQUEST['namabarang'];
$hargabarang= $_REQUEST['hargabarang'];
$jumlahstok= $_REQUEST['jumlahstok'];
$sql= "insert into produk(nama_Produk,harga_produk,stok_produk)
	values ('".$namabarang."','".$hargabarang."','".$jumlahstok."')";
mysqli_query($koneksi,$sql);
?>
<script>
alert('data barang/produk berhasil disimpan');
window.open('tables.php', '_self');
</script>