<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
    	<title>Pemrograman Web Dinamis</title>
        <!-- Bootstrap -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/jumbotron.css" rel="stylesheet">
        <link rel="stylesheet" href="css/sign.css">

    </head>
    <body>
    
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-md-offset-4">
                    <center><img src="img/photo.jpg" alt="..." class="img-rounded" width="140px"></center>
                    <center><h3 class="form-signin-heading">Login</h3></center>
                    
                    <form class="form-signin" action="validasi.php" method="POST">
                    <input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
                    <input type="password" class="form-control" name="password" placeholder="Password" required autofocus>
                    <?php
                    // menampilkan validasi jika username atau password salah
                    if(isset($_SESSION['pesan'])){
                        echo $_SESSION['pesan'];
                        unset($_SESSION['pesan']);
                    }
                    else{
                    // apabila login gagal lanjut tampilkan form login
                    }
                    ?>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
    </body>
</html>