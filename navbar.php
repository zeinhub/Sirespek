<?php include 'head.php' ?>
<nav style="background-color: #196dd4;" class="navbar sticky-top navbar-expand-lg navbar-dark">
    <!-- Image and text -->
    <a class="navbar-brand" href="index.php">
        <img src="bootstrap/img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        SIRESPEK
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link mr-sm-2" href="index.php">Beranda <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="progress.php">Cek Progress Perawatan</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Layanan
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="login.php">Reservasi</a>
                    <a class="dropdown-item" href="login.php">Suku Cadang</a>
                    <a class="dropdown-item" href="login.php">Bengkel Terdekat</a>
                    <div class="dropdown-divider"></div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login.php">Masuk/Daftar</a>
            </li>
        </ul>
    </div>
</nav>
<?php include 'foot.php'; ?>