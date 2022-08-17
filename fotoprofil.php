<?php
include "connector.php"

if(isset($_FILES['gambar']['name'])){
    $file_tmp=$_FILES['gambar']['tmp_name'];
    $file_name=$_FILES['gambar']['name'];
    $target_file="profile/".$file_name;
    move_uploaded_file($file_tmp, $target_file);
    $sql="insert into pelanggan(fotoprofil)
            values (".file_name."')";
    mysqli_query($koneksi, $sql);
    echo "<img src='./profile/".$file_name."'>";
}
?>