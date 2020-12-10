

<?php session_start(); include"koneksi.php";?>
<html>
<head><title>Tambah User</title>
	<!-- Bootstrap -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/jumbotron.css" rel="stylesheet">
        <link rel="stylesheet" href="css/sign.css">
</head>
<body>
<div class="container">
<div class="row">
<div class="span2">
 <div class="span8">
<?PHP
// apa bila login berhasil tampilkan Pesan 
if (isset($_SESSION['username'])&&(isset($_SESSION['level']))){
	
	?>
	<h3>Tambah User</h3>
	<form method="POST" action="">
    	<label>Nama</label>
        <input type="text" class="form-control" name="nama" placeholder="Nama">
		<label>Username</label>
		 <input type="text" class="form-control" name="username" placeholder="Username">
		<label>Password</label>
		<input type="password" class="form-control" name="password" placeholder="Password">
		<label>Level</label>
		<select name="level" class="form-control">
			<option value="super_admin">Super Admin</option>
			<option value="admin">Admin</option>
			<option value="operator">Operator</option>
		</select><br>
		<button type="submit" class="btn btn-primary">Tambah</button>
	</form>

<?php } ?>
<?php 
if($_POST){
	
	$nama=$_POST['nama'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$level=$_POST['level'];
	$koneksi = mysqli_connect ( "localhost" , "root" , "" , "tugas_8" );
	$insert=mysqli_query($koneksi,"INSERT INTO user(nama,username,password,level) VALUES ('$nama','$username','$password','$level')");
	
	if($insert){
		header('location:sadmin.php');
	}else{
		echo'ERROR'.mysqli_error($koneksi);
	}
}
?>
</div>
<div class="span2"></div>
</div>
</div>
</body>
</html

