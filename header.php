
  <!-- Navbar -->
      <nav class="navbar navbar-expand-lg  bg-dark">
        <div class="container">
        <a class="navbar-brand text-white" href="index.html"><strong>NAKAM</strong> DONG</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link mr-4" href="index.php">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mr-4" href="daftar_menu.php">DAFTAR MENU</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mr-4" href="pesanan.php">PESANAN</a>
            </li>
            <li class="nav-item">
              <?php if (isset($_SESSION['pelanggan'])) {
                    ?>
                    <li class="nav-item">
                      <a class="nav-link mr-4" href="logout.php">LOGOUT</a>
                    </li>
              <?php } else { ?>
                <li><a class="nav-link mr-4" href="login.php">LOGIN</a></li>
              <?php } ?>
            </li>
          </ul>
        </div>
       </div> 
      </nav>
  <!-- Akhir Navbar -->