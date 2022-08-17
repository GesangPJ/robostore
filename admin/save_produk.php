<?php
include 'connector.php';

if(isset($_FILES['gambar']['name']))
    {
        $file_tmp=$_FILES['gambar']['tmp_name'];
        $file_name=$_FILES['gambar']['name'];
        $target_file="images/".$file_name;
        $nama= $_REQUEST['nama'];
        $harga=$_REQUEST['harga'];
        $stok= $_REQUEST['stok'];
        move_uploaded_file($file_tmp, $target_file);

        $sql= "INSERT INTO produk(nama_produk, harga_jual, stok_produk, foto_produk)
	    values ('".$nama."','".$harga."','".$stok."','".$file_name."')";
        mysqli_query($koneksi,$sql);
    }
?>
<script>
alert('data produk berhasil disimpan');
window.open('admin.php', '_self');
</script>
