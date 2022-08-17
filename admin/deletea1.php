<?php 
$koneksi = mysqli_connect("localhost","root","","robostore");
$ID = $_REQUEST['ID'];
$sql = "DELETE FROM produk WHERE ID = '$ID'";
$hasil = mysqli_query($koneksi, $sql);
?>

<script>
confirm('Anda yakin ingin menghapus produk ini?');
windows.open('admin.php', '_self');
</script>