
<?php
session_start();
include"koneksi.php";

$sesi=$_GET['sesi'];

if($sesi=='user'){
	$id=$_GET['id'];
	$koneksi = mysqli_connect ( "localhost" , "root" , "" , "tugas_8" );
	$query=mysqli_query($koneksi,"DELETE FROM user WHERE username='$id'");
	
	if($query){header('location:sadmin.php');}
}	
?>