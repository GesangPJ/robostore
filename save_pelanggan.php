<?php
include "connector.php";

$nama= $_REQUEST['nama'];
$username=$_REQUEST['username'];
$email= $_REQUEST['email'];
$katasandi= $_REQUEST['katasandi'];
$address= $_REQUEST['address'];
$notelp= $_REQUEST['notelp'];
$ambil=$koneksi->query("SELECT * FROM pelanggan WHERE email_pelanggan='$email'");
$cocok = $ambil->num_rows;

if($cocok==1)
	{
		echo "<script>
		alert('Email is exist! Pelase enter other email');
		window.open('registerform.php', '_self');
		</script>";
	}	
	elseif(isset($_FILES['foto']['name']))
    	{
        $file_tmp=$_FILES['foto']['tmp_name'];
        $file_name=$_FILES['foto']['name'];
		$target_file="img/".$file_name;
		
        move_uploaded_file($file_tmp, $target_file);
		
		$sql= "INSERT INTO pelanggan (namalengkap, username, email_pelanggan, katasandi, alamat_pelanggan, notelp_pelanggan, foto_profil)
		values ('".$nama."','".$username."','".$email."','".$katasandi."','".$address."','".$notelp."','".$file_name."')";
		mysqli_query($koneksi,$sql);
		}                                
?>
<script>
alert('Registration Success! Please Log In');
window.open('customlogin.php', '_self');
</script>
