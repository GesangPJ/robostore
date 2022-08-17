<?php   
session_start();
$ID=$_GET["id"];
unset($_SESSION["keranjang"][$ID]);

echo "<script>alert('Produk Dihapus');</script>";
echo "<script>location='keranjang.php';</script>";

?>   