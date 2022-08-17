<?php 
 // mengambil value login
 $username = "";

if(isset($_POST['username'])){
    $username = $_POST['username'];
}
 $katasandi = "";
if(isset($_POST['username'])){
    $katasandi = $_POST['katasandi'];
 }
 // mencegah mysql injection
 $username = stripcslashes($username);
 $katasandi = stripcslashes($katasandi);
 $username = mysql_real_escape_string($username);
 $katasandi = mysql_real_escape_string($katasandi);

 //koneksi database
 mysql_connect("localhost", "root", "");
 mysql_select_db("gpaudra_store");

 // database query (MySQL)
 $result = mysql_query("select * from users where username = '$username' and katasandi = '$katasandi'")
  or die('Failed to query database'.mysql_error());
 $row = mysql_fetch_array($result);
 if ( $row['username'] == $username && $row['password'] == $katasandi ) {
  echo "login success! Welcome".$row['username'];
 } else {
     echo "Failed to login!";
}

?>