<?php
session_start();
include 'koneksi.php';
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
            <h1 class="display-4"><span class="font-weight-bold">BAKSO SOLO BARU</span></h1>
            <hr>
            <p class="lead font-weight-bold">Silahkan Pesan Menu Sesuai Keinginan Anda <br>
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
                            <h3 class="text-center">Registrasi</h3>
                        </div>
                        <div class="card-body">
                            <form method="post" action="">
                                <div class="mb-3">
                                    <label class="form-label">Nama</label>
                                    <input type="text" class="form-control" name="nama" placeholder="Masukkan nama">
                                </div>
								<div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="text" class="form-control" name="email" placeholder="Masukkan email">
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="Masukkan password">
                                </div>
								<div class="mb-3">
                                    <label class="form-label">No Hp</label>
                                    <input type="text" class="form-control" name="nomor" placeholder="Masukkan nomor">
                                </div>
                                <div class="py-2 text-center">
                                    <button type="submit"  class="btn btn-primary d-block mb-3 w-100" name="regist">Registrasi</button>
                                    <a class="small" href="login.php">Kembali ke Login</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
if(isset($_POST['regist'])){

    
	$nama = $_POST["nama"];
    $email = $_POST["email"];
    $password = $_POST["password"];
	$no_tlp = $_POST["nomor"];


    $sql = "INSERT INTO pelanggan (nama_pelanggan, email_pelanggan, password_pelanggan, telepon_pelanggan) 
            VALUES ('$nama', '$email', '$password', '$no_tlp')";
	$query = mysqli_query($koneksi, $sql);


    if($query) {
		echo "<script>alert('Berhasil Di Tambahkan!')</script>";
		// header("Location: login.php");
	}else{
		echo "<script>alert('Gagal Menambahkan Akun!')</script>";
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