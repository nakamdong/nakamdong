<?php
session_start();
require 'koneksi.php';
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">

    <title>Nakam Dong</title>
    <link rel="icon" href="images/background/logo.png" type="image/x-icon" />
</head>

<body>

    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid text-center">
        <div class="container">
            <h1 class="display-4"><span class="font-weight-bold">NAKAM DONG</span></h1>
            <hr>
            <p class="lead font-weight-bold">Emang Ga Laper? <br> Silahkan Pesan Menu Sesuai Keinginan Anda <br>
                Enjoy Your Meal</p>
        </div>
    </div>
    <!-- Akhir Jumbotron -->

    <!-- Navbar -->
    <?php include 'header.php' ?>
    <!-- Akhir Navbar -->

    <!-- Menu -->
    <div class="container pt-5 pb-5">
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-center">Login</h3>
                        </div>
                        <div class="card-body">
                            <form method="post">
                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="text" class="form-control" name="email" placeholder="Masukkan email">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="Masukkan password">
                                </div>
                                <div class="py-2 text-center">
                                    <button type="submit" class="btn btn-primary d-block mb-3 w-100" name="login">Login</button>
                                    <a class="small" href="register.php">Jika belum punya akun, registrasi disini</a>
                                </div>
                                <div class="py-2 text-center">
                                    <a class="small" href="/nakam_dong/nakam_dong/admin/login_admin.php">Login Admin</a>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
if(isset($_POST["login"]))
{
	$email = $_POST["email"];
	$password = $_POST["password"];
	$ambil = $koneksi->query("SELECT * FROM pelanggan WHERE email_pelanggan='$email' AND password_pelanggan='$password'");
	$akunyangcocok = $ambil->num_rows;

	if ($akunyangcocok==1) 
	{
		$akun = $ambil->fetch_assoc();
		$_SESSION["pelanggan"] = $akun;
		echo "<script>alert('anda sukses login');</script>";
		echo "<script>location='daftar_menu.php';</script>";
	}
	else
	{
		echo "<script>alert('anda gagal login,periksa akun anda');</script>";
		echo "<script>location='login.php';</script>";
	}

}
?>

    <!-- Akhir Menu -->

    <!-- Awal Footer -->
    <?php include 'footer.php' ?>
    <!-- Akhir Footer -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.js"></script>
</body>

</html>