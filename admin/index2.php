<?php
session_start();

include 'head.php';
?>
<!-- Image and text -->
<nav style="background: #00054a;" class="navbar navbar-dark sticky-top">
    <a class="navbar-brand" href="#">
        <img src="../bootstrap/img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        Sirespek
    </a>
    <h6 style="float: right; color: white;">Selamat datang, <?php echo $_SESSION['nama']; ?>
        <!-- <a href="../logout.php"> <button class="btn btn-success" type="button">Logout</button></a></h4> -->
</nav>
<!-- <div class="container">
    <h4> <?php echo date("d-M-Y"); ?> | <?php date_default_timezone_set("Asia/Jakarta");
                                        echo date("H:i"); ?> | <p style="color: blue;">Refresh untuk update jam.</p>
    </h4>
</div> -->
<!-- <div class="container">
    <div class="row">
        <div class="col-lg-5">
            <a href="list_transaksi.php" class="btn btn-primary">Daftar Transaksi</a>
            <a href="running-text.php" class="btn btn-primary">Update Running Text</a>
        </div>
    </div>
</div> -->
<div style="padding-top: 10px;" class="container">
    <h5><b> Dashboard</b></h5>
    <h6>Pelayanan</h6>
    <div class="row">
        <div class="col-lg-4">
            <div class="card" style="width: 20rem; background: #000bab;">
                <div class="card-body">
                    <h5 style="text-align: right; color:white;">Teknisi Tersedia</h5>
                    <div class="row">
                        <div class="col-6">
                            <span class="iconify" data-inline="false" data-icon="ic:baseline-engineering" style="color: #ffffff; font-size: 106.0217514038086px;"></span>

                        </div>
                        <div class="col-6">
                            <h1 style="color: white; font-size: 80px;">46</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Earnings (Monthly)</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 20rem; background: #000bab;">
                <div class="card-body">
                    <h5 style="text-align: right; color:white;">Teknisi Tersedia</h5>
                    <div class="row">
                        <div class="col">
                            <span class="iconify" data-inline="false" data-icon="ic:baseline-engineering" style="color: #ffffff; font-size: 106.0217514038086px;"></span>

                        </div>
                        <div class="col">
                            <h1 style="color: white; font-size: 80px;">46</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 20rem; background: #000bab;">
                <div class="card-body">
                    <h5 style="text-align: right; color:white;">Teknisi Tersedia</h5>
                    <div class="row">
                        <div class="col">
                            <span class="iconify" data-inline="false" data-icon="ic:baseline-engineering" style="color: #ffffff; font-size: 106.0217514038086px;"></span>

                        </div>
                        <div class="col">
                            <h1 style="color: white; font-size: 80px;">46</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
<?php include 'foot.php'; ?>