<?php session_start(); ?>
<?php include 'koneksi.php'; ?>
<?php
$id_produk = $_GET["id"];
$ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk='$id_produk'");
$detail = $ambil->fetch_assoc();

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

        <div class="row align-items-center mt-5 pt-5">
            <div class="col-md-6">
                <img src="foto_produk/<?php echo $detail["foto_produk"]; ?>" alt="" class="img-responsive">
            </div>
            <div class="col-md-6">
                <h2><?php echo $detail["nama_produk"] ?></h2>
                <h4>Rp. <?php echo number_format($detail["harga_produk"]); ?></h4>
                <p><?php echo $detail["deskripsi_produk"]; ?></p>

                <form method="post">
                    <div class="form-group">
                        <div class="input-group">
                            <input type="number" min="1" class="form-control" name="jumlah">
                            <div class="input-group-btn">
                                <button class="btn btn-primary" name="beli">Beli</button>
                            </div>
                        </div>
                    </div>
                </form>

                <?php
                if (isset($_POST["beli"])) {
                    $jumlah = $_POST["jumlah"];
                    $_SESSION["keranjang"][$id_produk] = $jumlah;

                    echo "<script>alert('produk telah masuk ke keranjang belanja');</script>";
                    echo "<script>location='pesanan.php';</script>";
                }
                ?>

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