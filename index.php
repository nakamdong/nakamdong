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

    <link rel="icon" href="background/logo.png" type="image/x-icon" />
  </head>
  <body>

  <!-- Jumbotron -->
      <div class="jumbotron jumbotron-fluid text-center">
        <div class="container">
          <h1 class="display-4"><span class="font-weight-bold">NAKAM DONG</span></h1>
          <hr>
          <p class="lead font-weight-bold">Emang Ga Laper?<br>Silahkan Pesan Menu Sesuai Keinginan Anda<br>Enjoy Your Meal</p>
        </div>
      </div>
  <!-- Akhir Jumbotron -->

  <!-- Navbar -->
<?php include 'header.php' ?>
  <!-- Akhir Navbar -->

  <!-- Menu -->    
      <div class="container">
        <div class="judul text-center mt-5">
          <h3 class="font-weight-bold">NAKAM DONG</h3>
          <h5>Ciracas, Jakarta Timur
          <br>Buka Jam <strong>09:00 - 17:00</strong></h5>
        </div>

        <div class="row mb-2 mt-2 ">
          <div class="col-md-6 d-flex justify-content-end">
            <div class="card bg-dark text-white border-light">
              <img src="images/background/bg new.png" class="card-img" alt="Lihat Daftar Menu">
              <div class="card-img-overlay mt-5 text-center">
               <a href="daftar_menu.php" class="btn btn-primary">LIHAT DAFTAR MENU</a>
              </div>
            </div>
          </div>

          <div class="col-md-6 d-flex justify-content-start">
            <div class="card bg-dark text-white border-light">
              <img src="images/background/bg new.png" class="card-img" alt="Lihat Pesanan">
              <div class="card-img-overlay mt-5 text-center">
               <a href="pesanan.php" class="btn btn-primary">LIHAT PESANAN</a>
              </div>
            </div>
          </div>
        </div>
      </div>
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