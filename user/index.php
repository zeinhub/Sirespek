<?php
session_start();
if (!isset($_SESSION["username"])) {
    echo "<script>alert('Silahkan Login Terlebih Dahulu Atau Anda Tidak Memiliki Hak Akses Ke halaman Ini!'); location.href=\"../login.php\";</script>";
}
include '../config/koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sirespek</title>

    <!-- Custom fonts for this template-->
    <link href="../admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../admin/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">
    <style type="text/css">
        select {
            width: 150px;
            overflow: scroll;
        }
    </style>

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <img style="width: 70%;" src="../bootstrap/img/logo.png" alt="">
                </div>
                <div class="sidebar-brand-text mx-3">SIRESPEK</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="profile.php">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    <span>Profile</span>
                </a>
            </li>
            <!-- Button trigger modal -->
            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle">Keluar Aplikasi</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Anda yakin ingin keluar?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                            <a href="../logout.php" type="button" class="btn btn-primary">Keluar</a>
                        </div>
                    </div>
                </div>
            </div>
            <li class="nav-item">
                <a data-toggle="modal" data-target="#exampleModalCenter" class="nav-link" href="#">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    <span>Keluar</span>
                </a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">



            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <li style="display:block; margin-top: 30px;">
                        <?php
                        $test = $_SESSION['username'];
                        $query = "SELECT * FROM akun WHERE username='$test'";
                        $result = mysqli_query($conn, $query);
                        $data = mysqli_fetch_array($result); ?>
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h5>Selamat datang, <b><?php echo $data['nama']; ?></b></h5>
                        </div>
                    </li>
                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>



                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-800 large"><?php echo $_SESSION['username']; ?></span>
                                <img class="img-profile rounded-circle" src="../bootstrap/img/avatarr.png">
                            </a>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->

                    <h4 style="color: blue;" class="text-800">Layanan</h4>

                    <!-- Content Row -->
                    <div class="row">
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Perawatan Kendaraan</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"> <a href="reservasi.php"> Reservasi Sekarang</a></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-bookmark fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Suku Cadang</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"> <a href="spare-part.php">Beli Sekarang</a></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-toolbox fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">On The Spot Service</div>
                                            <!-- Button trigger modal -->
                                            <div class="h5 mb-0 font-weight-bold text-gray-800" data-toggle="modal" data-target="#exampleModal">
                                                <a href="#">Pilih Layanan Ini</a>
                                            </div>

                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">On The Spot Service</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Layanan ini akan mendatangkan teknisi terdekat berdasarkan lokasi pada alamat anda,
                                                            setelah melakukan pemesanan layanan ini anda tidak dapat membatalkannya.
                                                            Admin bengkel terdekat akan melakukan konfirmasi alamat dan kerusakan kendaraan anda,
                                                            biaya tambahan mungkin berlaku untuk layanan ini. Silahkan pilih alamat anda dibawah ini
                                                            kemudian klik kirim permintaan.
                                                        </div>
                                                        <?php
                                                        // mengambil data barang dengan kode paling besar
                                                        $query = mysqli_query($conn, "SELECT max(id) as kodeTerbesar FROM transaksi");
                                                        $data = mysqli_fetch_array($query);
                                                        $kodeBarang = $data['kodeTerbesar'];
                                                        date_default_timezone_set('Asia/Jakarta');
                                                        $tanggal = date("dmY");

                                                        // mengambil angka dari kode barang terbesar, menggunakan fungsi substr
                                                        // dan diubah ke integer dengan (int)
                                                        $urutan = (int) substr($kodeBarang, 3, 3);

                                                        // bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
                                                        $urutan++;

                                                        // membentuk kode barang baru
                                                        // perintah sprintf("%03s", $urutan); berguna untuk membuat string menjadi 3 karakter
                                                        // misalnya perintah sprintf("%03s", 15); maka akan menghasilkan '015'
                                                        // angka yang diambil tadi digabungkan dengan kode huruf yang kita inginkan, misalnya BRG 
                                                        $huruf = "INV$tanggal";
                                                        $kodeBarang = $huruf . sprintf("%03s", $urutan);
                                                        ?>
                                                        <div class="modal-body">
                                                            <form class="form-group col-md-5" method="POST" action="proses_ots.php">
                                                                <?php
                                                                $test = $_SESSION['username'];
                                                                $queryyy = "SELECT * FROM akun WHERE username='$test'";
                                                                $result = mysqli_query($conn, $queryyy);
                                                                $dta = mysqli_fetch_array($result); ?>
                                                                <div class="form-group">
                                                                    <input type="hidden" name="tlp" value="<?php echo $dta['tlp']; ?>" id="inputAddress" placeholder="081234567890">
                                                                </div>
                                                                <div class="form-group col-md-4">
                                                                    <input type="hidden" name="username" value="<?php echo $_SESSION['username']; ?>" readonly required="required">
                                                                </div>
                                                                <div class="form-group col-md-4">
                                                                    <input type="hidden" name="kode" value="<?php echo $kodeBarang; ?>" readonly required="required">
                                                                </div>
                                                                <select name="alamat" id="">
                                                                    <?php
                                                                    $user = $_SESSION['username'];
                                                                    $query = "SELECT * FROM akun WHERE username='$user'";
                                                                    $sql = mysqli_query($conn, $query);
                                                                    while ($data = mysqli_fetch_array($sql)) {;
                                                                    ?>
                                                                        <option selected>Pilih Alamat</option>
                                                                        <option type="text" name="alamat" class="form-control shd" id="inputState" placeholder="Password">
                                                                            <?php echo $data['alamat']; ?>
                                                                        </option>
                                                                    <?php } ?>
                                                                </select>
                                                                <select name="kendaraan" id="">
                                                                    <option selected>Pilih Kendaraan</option>
                                                                    <?php
                                                                    $user = $_SESSION['username'];
                                                                    $query = "SELECT * FROM kendaraan WHERE username='$user'";
                                                                    $sql = mysqli_query($conn, $query);
                                                                    while ($data = mysqli_fetch_array($sql)) {;
                                                                    ?>
                                                                        <option>
                                                                            <?php
                                                                            echo $data['nopol'];
                                                                            echo ' - ';
                                                                            echo $data['tipe'];
                                                                            ?>
                                                                        </option>
                                                                    <?php } ?>
                                                                </select>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-primary" data-dismiss="modal">Batalkan</button>
                                                            <button type="submit" class="btn btn-danger">Kirim Permintaan</button>
                                                        </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-map-marked-alt fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Bengkel Terdekat</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"> <a href="daftar-bengkel.php">Cari Bengkel Terdekat</a></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-newspaper fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h4 style="color: blue;" class="text-800">Transaksi</h4>
                    <div class="row">
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Dalam Proses</div>
                                            <div class="h2 mb-0 font-weight-bold text-gray-800">
                                                <a href="dalam-proses.php">
                                                    <?php
                                                    $test = $_SESSION['username'];
                                                    $queryy = "SELECT * FROM transaksi WHERE username='$test' AND NOT status='diambil'";
                                                    $result = mysqli_query($conn, $queryy);
                                                    $count    = mysqli_num_rows($result);
                                                    echo "$count"; ?>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-spinner fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">History Transaksi</div>
                                            <div class="h2 mb-0 font-weight-bold text-gray-800">
                                                <a href="diambil.php">
                                                    <?php
                                                    $test = $_SESSION['username'];
                                                    $queryy = "SELECT * FROM transaksi WHERE username='$test' AND status='diambil'";
                                                    $result = mysqli_query($conn, $queryy);
                                                    $count    = mysqli_num_rows($result);
                                                    echo "$count"; ?>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-history fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Butuh Bantuan?</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"> <a href="chat.php">Chat Admin</a></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Earnings (Monthly) Card Example -->
                        <!-- <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Saldo</div>
                                            <?php
                                            // $user = $_SESSION['username'];
                                            // $query = "SELECT * FROM akun WHERE username='$user'";
                                            // $sql = mysqli_query($conn, $query);
                                            // $data = mysqli_fetch_array($sql);
                                            ?>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"> <a href="Chat.php"><?php echo $data['saldo'] ?></a></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
                        <!-- Content Row -->
                        <div class="container">
                            <!-- <h4 style="color: blue;" class="text-800">Informasi Pelanggan</h4> -->
                            <div class="row justify-content-center">
                                <!-- Pie Chart -->
                                <div class=" col-lg-8">

                                    <!-- Illustrations -->
                                    <div class="card shadow mb-4">
                                        <div class="card-header py-3">
                                            <h4 class="m-0 font-weight-bold text-primary">Informasi Pelanggan</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="text-center">
                                            </div>
                                            <?php
                                            $query = "SELECT * FROM informasi";
                                            $sql = mysqli_query($conn, $query);
                                            while ($result = mysqli_fetch_array($sql)) {;
                                            ?>
                                                <h5 style="text-align: center;">
                                                    <b> <?php echo $result['judul']; ?></b>
                                                </h5>
                                                <h6>
                                                    <?php echo $result['isi']; ?>
                                                </h6>
                                            <?php } ?>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; SIRESPEK 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="../logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../admin/vendor/jquery/jquery.min.js"></script>
    <script src="../admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../admin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../admin/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../admin/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../admin/js/demo/chart-area-demo.js"></script>
    <script src="../admin/js/demo/chart-pie-demo.js"></script>

</body>

</html>