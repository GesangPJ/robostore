<?php
$koneksi = new mysqli("localhost","root","","robostore");

if (!isset($_SESSION['admin']))
    {
        echo "<script> alert('Akses khusus Admin!') </script>";
        echo "<meta http-equiv='refresh' content='1; url=loginform.php'>";
        //header ('location:loginform.php');
        exit();
    }

$nama_admin= $_REQUEST['nama_admin'];
$username=$_REQUEST['username'];
$id_admin= $_REQUEST['id_admin'];
$password= $_REQUEST['password'];
//$hashed = hash('sha512', $password);
$sql= "INSERT INTO admin(id_admin, username, password, nama_admin)
	values ('".$id_admin."','".$username."','".$password."','".$nama_admin."')";
mysqli_query($koneksi,$sql);
?>
<script>
alert('data admin berhasil disimpan');
window.open('admin.php', '_self');
</script>