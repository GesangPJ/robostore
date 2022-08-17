<?php
session_start();
//mendapatkan id produk dari url
$id_produk = $_GET['id_produk'];

//jk sudah ada produk itu dikeranjang, maka jumlahnya +1

if(isset($_SESSION['keranjang'][$id_produk]))
{

    $_SESSION['keranjang'][$id_produk]+=1;

}

//selain itu jika belum ada, maka dianggap beli 1
else
{
    $_SESSION['keranjang'][$id_produk] = 1;

}

//echo "<pre>";
//print_r($_SESSION);
//echo "</pre>";

echo "<script>alert('Produk telah masuk ke keranjang belanja');</script>";
echo "<script>location='keranjang.php';</script>";
?>
