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
      <p class="lead font-weight-bold">Emang Ga Laper?<br>Silahkan Pesan Menu Sesuai Keinginan Anda<br>Enjoy Your Meal</p>
    </div>
  </div>
  <!-- Akhir Jumbotron -->

  <!-- Navbar -->
  <?php include 'header.php' ?>
  <!-- Akhir Navbar -->

  <!-- Menu -->
  <div class="container">
    <h3 class="font-weight-bold mt-5 mb-2 text-center">Daftar Menu</h3>
    <div class="row mt-3">

    <?php $ambil=$koneksi->query("SELECT * FROM produk"); ?>
				<?php while($perproduk=$ambil->fetch_assoc()) { ?>
				<div class="col-md-3">
					<div class="thumbnail">
						<img class="card-img-top" src="foto_produk/<?php echo $perproduk['foto_produk']; ?>">
						<div class="caption">
							<h5><?php echo $perproduk['nama_produk']; ?></h3>
							<h5>Rp. <?php echo number_format($perproduk['harga_produk']); ?></h5>
							<a href="beli.php?id=<?php echo $perproduk['id_produk']; ?>" class="btn btn-primary">Beli</a>
							<a href="detail_menu.php?id=<?php echo $perproduk['id_produk']; ?>" class="btn btn-secondary">Detail</a>
						</div>
					</div>
				</div>
				<?php } ?>

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