<?php
//koneksi
require_once('koneksi.php');
 
$id=$_GET['id']; //ambil ID
 
$query="DELETE FROM pengurus WHERE id = '$id'";
$data=mysqli_query($conn,$query);
 
?>
<a href="tampildata.php"> Kembali Untuk lihat Data</a>