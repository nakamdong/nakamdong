<?php
session_start();
require '../koneksi.php';
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
                            <h3 class="text-center">Login Admin</h3>
                        </div>
                        <div class="card-body">
                            <form method="post">
                                <div class="mb-3">
                                    <label class="form-label">Username</label>
                                    <input type="text" class="form-control" name="user" placeholder="Masukkan username">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Password</label>
                                    <input type="password" class="form-control" name="pass" placeholder="Masukkan password">
                                </div>
                                <div class="py-2 text-center">
                                    <button type="submit" class="btn btn-primary d-block mb-3 w-100" name="login">Login</button>
                                </div>
                                <div class="py-2 text-center">
                                    <a class="small" href="/nakam_dong/nakam_dong/login.php">Kembali</a>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
if (isset($_POST['login'])) {
    $ambil = $koneksi->query("SELECT * FROM admin WHERE username='$_POST[user]' AND password ='$_POST[pass]'");
    $yangcocok = $ambil->num_rows;
    if ($yangcocok == 1) {
      $_SESSION["login"] = true;
      echo "<script>alert('Login Sukses');</script>";
      echo "<script>location='index.php';</script>";
    } else {
        echo "<script>alert('Login Gagal');</script>";
        echo "<script>location='login_admin.php';</script>";
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