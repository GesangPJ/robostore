<?php
include "connector.php";

$nama= $_REQUEST['nama'];
$username=$_REQUEST['username'];
$email= $_REQUEST['email'];
$address= $_REQUEST['address'];
$password= $_REQUEST['password'];
$hashed = hash('sha512', $password);
$sql= "INSERT INTO account(username, password, account_name,account_email, account_address)
	values ('".$username."','".$password."','".$nama."','".$email."','".$address."')";
mysqli_query($koneksi,$sql);
?>
<script>
alert('data pelanggan berhasil disimpan');
window.open('index.php', '_self');
</script>