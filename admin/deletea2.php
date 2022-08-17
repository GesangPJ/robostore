<?php 
include "connector.php";
$ID = $_REQUEST['ID'];
$sql = "DELETE FROM peoduk WHERE ID='$ID'";
	$hasil = mysqli_query($koneksi, $sql);
	?>
<script>
alert('Data telah dihapus');
windows.open('admin.php', '_self');
</script>