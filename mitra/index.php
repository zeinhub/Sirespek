<?php
include '../config/koneksi.php';
session_start();
if (!isset($_SESSION["username"])) {
    echo "<script>alert('Silahkan Login Terlebih Dahulu Atau Anda Tidak Memiliki Hak Akses Ke halaman Ini!'); location.href=\"../login.php\";</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Sirespek | Mitra</title>
    <!-- Custom fonts for this template-->
    <link href="../admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../admin/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <img style="width: 70%;" src="../bootstrap/img/logo.png" alt="">
                </div>
                <div class="sidebar-brand-text mx-3">SIRESPEK MITRA</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <li class="nav-item">
                <a class="nav-link" href="profile.php">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    <span>Profile</span>
                </a>
            </li>
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
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['username'] ?></span>
                                <img class="img-profile rounded-circle" src="../bootstrap/img/avatarr.png">
                            </a>

                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Layanan Pelanggan</h1>
                    </div>
                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Teknisi Tersedia</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <a href="teknisi.php">
                                                    <?php
                                                    $user = $_SESSION['username'];
                                                    $sqll    = "SELECT * FROM akun WHERE username='$user'";
                                                    $query = mysqli_query($conn, $sqll);
                                                    $data = mysqli_fetch_array($query);
                                                    $id = $data['id_bengkel'];
                                                    ?>
                                                    <?php
                                                    $sql    = "SELECT * FROM teknisi WHERE bengkel='$id'";
                                                    $query    = mysqli_query($conn, $sql);
                                                    $count    = mysqli_num_rows($query);
                                                    echo "$count"; ?>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-cogs fa-2x text-gray-300"></i>
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
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Order Masuk</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <a href="validasi.php">
                                                    <?php
                                                    $user = $_SESSION['username'];
                                                    $kueri = mysqli_query($conn, "SELECT * FROM akun WHERE username = '$user'");
                                                    $dt = mysqli_fetch_array($kueri);
                                                    $bengkel = $dt['id_bengkel'];
                                                    $sql = "SELECT * FROM transaksi WHERE bengkel='$bengkel' AND NOT status IN ('Validasi Pembayaran', 'Diambil')";
                                                    $query    = mysqli_query($conn, $sql);
                                                    $count    = mysqli_num_rows($query);
                                                    echo "$count"; ?>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-check fa-2x text-gray-300"></i>
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
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Telah Diambil</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <a href="diambil.php">
                                                    <?php
                                                    $user = $_SESSION['username'];
                                                    $kueri = mysqli_query($conn, "SELECT * FROM akun WHERE username = '$user'");
                                                    $dt = mysqli_fetch_array($kueri);
                                                    $bengkel = $dt['id_bengkel'];
                                                    $sql = "SELECT * FROM transaksi WHERE bengkel='$bengkel' AND status='Diambil'";
                                                    $query    = mysqli_query($conn, $sql);
                                                    $count    = mysqli_num_rows($query);
                                                    echo "$count"; ?>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clock fa-2x text-gray-300"></i>
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
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Monitor Transaksi</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"> <a href="transaksi.php" target="_BLANK">Pilih </a></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-text fa-2x text-gray-300"></i>
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
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Chat Pelanggan(beta)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"> <a href="chat.php">Chat</a></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-text fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        $username = $_SESSION['username'];
                        $query = mysqli_query($conn, "SELECT * FROM akun WHERE username = '$username'");
                        $get = mysqli_fetch_array($query);
                        $level = $get['level'];
                        $nama = $get['username'];
                        if ($level == "Super Admin") {
                        ?>
                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-success shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Manajemen User</div>
                                                <a href="manajemen-user.php" class="h5 mb-0 font-weight-bold text-gray-800">Pilih</a>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-user fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                        <!-- End of Footer -->

                    </div>
                    <!-- Footer -->
                    <footer class="sticky-footer bg-white">
                        <div class="container my-auto">
                            <div class="copyright text-center my-auto">
                                <span>Copyright &copy; SIRESPEK 2020</span>
                            </div>
                        </div>
                    </footer>
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