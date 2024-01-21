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
    <div class="container mt-5">
        
        <h2>Nota Pembelian</h2>
        <?php
        $ambil = $koneksi->query("SELECT * FROM pembelian JOIN pelanggan ON pembelian.id_pelanggan=pelanggan.id_pelanggan WHERE pembelian.id_pembelian='$_GET[id]'");
        $detail = $ambil->fetch_assoc();
        ?>

        <strong><?php echo $detail['nama_pelanggan']; ?></strong><br>
        <p>
            <?php echo $detail['telepon_pelanggan']; ?><br>
            <?php echo $detail['email_pelanggan']; ?>
        </p>

        <p>
            tanggal:<?php echo $detail['tanggal_pembelian']; ?><br>
            total:<?php echo $detail['total_pembelian']; ?>
        </p>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>no</th>
                    <th>nama produk</th>
                    <th>harga</th>
                    <th>jumlah</th>
                    <th>subtotal</th>
                </tr>
            </thead>
            <tbody>
                <?php $nomor = 1; ?>
                <?php $ambil = $koneksi->query("SELECT * FROM pembelian_produk JOIN produk on pembelian_produk.id_produk=produk.id_produk WHERE pembelian_produk.id_pembelian='$_GET[id]'"); ?>
                <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo $nomor; ?></td>
                        <td><?php echo $pecah['nama_produk']; ?></td>
                        <td><?php echo $pecah['harga_produk']; ?></td>
                        <td><?php echo $pecah['jumlah']; ?></td>
                        <td>
                            <?php echo $pecah['harga_produk'] * $pecah['jumlah']; ?>
                        </td>
                    </tr>   
                    <?php $nomor++; ?>
                <?php } ?>
            </tbody>
        </table>

        <div class="row">
            <div class="col-md-7">
                <div class="alert alert-info">
                    <p>
                        Terimakasih, Pesanan Anda Akan Segera Kami Proses. <br>
                        Anda akan segera dihubungi melalui Nomor Handphone yang teregistrasi.
                    </p>
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