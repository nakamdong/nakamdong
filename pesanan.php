<?php
session_start();

require 'koneksi.php';


if(empty($_SESSION["keranjang"]) OR !isset($_SESSION["keranjang"]))
{
	echo "<script>alert('keranjang kosong, silahkan belanja dulu');</script>";
	echo "<script>location='daftar_menu.php';</script>";
}

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
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">

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
      <div class="judul-pesanan mt-5
      \">
       
        <h3 class="text-center font-weight-bold">DATA PESANAN</h3>
        
      </div>
      <table class="table table-bordered" id="example">
        <thead class="thead-light">
          <tr>
            <th scope="col">No</th>
						<th scope="col">Produk</th>
						<th scope="col">Harga</th>
						<th scope="col">Jumlah</th>
						<th scope="col">Subharga</th>
						<th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
        <?php $nomor=1; ?>
					<?php foreach ($_SESSION ["keranjang"] as $id_produk => $jumlah): ?> 
					<?php
					$ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk='$id_produk'");
					$pecah = $ambil->fetch_assoc();
					$subharga = $pecah["harga_produk"]*$jumlah;

					?>
          <tr>
          <td><?php echo $nomor; ?></td>
						<td><?php echo $pecah["nama_produk"];?></td>
						<td><?php echo number_format($pecah["harga_produk"]);?></td>
						<td><?php echo $jumlah; ?></td>
						<td>Rp. <?php echo number_format($subharga); ?></td>
						<td>
							<a href="hapuskeranjang.php?id=<?php echo $id_produk ?>" class="btn btn-danger ">Hapus</a>
						</td>
          </tr>
					<?php $nomor++; ?>
					<?php endforeach ?>
        </tbody>
      </table>
      <a href="daftar_menu.php" class="btn btn-success">Lanjutkan Belanja</a>
			<a href="chekout.php" class="btn btn-primary">Checkout</a>
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
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
  </body>
</html>