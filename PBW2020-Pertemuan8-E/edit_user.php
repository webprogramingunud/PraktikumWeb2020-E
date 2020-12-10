
<?php session_start(); include"koneksi.php";?>
<html>
<head><title>Edit User</title>
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
 <?php
 $id=$_GET['id'];
 $koneksi = mysqli_connect ( "localhost" , "root" , "" , "tugas_8" );
 $data=mysqli_fetch_array(mysqli_query($koneksi,"SELECT * FROM user WHERE username='$id'"));
 ?>   
	<h3>Edit User</h3>
	<form method="POST" action="">
    	<label>Nama</label>
		<input type="text" class="form-control" name="nama" placeholder="Nama" value="<?php echo $data['nama'] ?>">
		<label>Username</label>
		<input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo $data['username'] ?>">
		<label>Password</label>
		<input type="password" class="form-control" name="password" placeholder="Password">
		<label>Level</label>
		<select name="level" class="form-control">
			<option <?php echo $data['level'] == "super_admin"  ? 'selected="selected"' : '';?> value="super_admin">Super Admin</option>
			<option <?php echo $data['level'] == "admin"  ? 'selected="selected"' : '';?> value="admin">Admin</option>
		</select><br>
		<button type="submit" class="btn btn-primary">Edit</button>
	</form>
	

<?php 
if($_POST){
	$id=$data['username'];
	
	$nama=$_POST['nama'];
	$username=$_POST['username'];
	$pass=$_POST['password'];
	$level=$_POST['level'];
	
	if($pass==''){
		$password=$data['password'];
	}else{
		$password=$pass;
	}
	$koneksi = mysqli_connect ( "localhost" , "root" , "" , "tugas_8" );
	$insert=mysqli_query($koneksi,"UPDATE user SET username='$username',password='$password',nama='$nama',level='$level' WHERE username='$id'");
	
	if($insert){
		header('location:sadmin.php');
	}else{
		echo'ERROR'.mysqli_error();
	}
}
?>
</div>
</div>
</div>
</div>
</body>
</html

