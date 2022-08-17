<?php
include 'connector.php';
session_start();
unset($_SESSION["customer"]);

echo "<script> alert('You've been Log Out) </script>";
echo "<script> location='index.php'; </script>"

?>