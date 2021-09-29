<?php
session_start();
include '../config/koneksi.php';
include '../admin/head.php';
?>

<head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Castoro&display=swap" rel="stylesheet">
    <meta http-equiv="refresh" content="1">
</head>
<style type="text/css">
    body {
        background: url(../bootstrap/img/creativika160900036.jpg) repeat;
        background-size: 50%;

    }

    .judul {
        margin-top: 20px;
        text-align: center;
        color: white;
        font-family: castoro;
        padding-bottom: 10px;
        padding-top: 10px;

    }

    .kotak {
        width: auto;
        height: auto;
        background: #007bff;
    }

    .om {
        font-size: 150px;
        font-family: castoro;
        position: relative;
        padding: 0;
        color: red;
    }

    .boks {
        width: 250px;
        height: 250px;
        background-color: white;
        text-align: center;
        border-radius: 10px;
        padding-top: 10px;
        margin-top: 20%;


    }

    h2 {
        font-family: acme;
        margin: 0;
        margin-top: 20px;
    }

    h3 {
        float: right;
        color: white;
        box-shadow: black;
    }
</style>
<div class="container">
    <?php
    $user = $_SESSION['username'];
    $query = mysqli_query($conn, "SELECT * FROM akun WHERE username='$user'");
    $data = mysqli_fetch_array($query);
    ?>
    <div class="kotak">
        <h1 class="judul">Selamat Datang Di <?php echo $data['nama'] ?></h1>
    </div>
    <div class="row justify-content-center">
        <div class="col">
            <?php
            date_default_timezone_set("Asia/Jakarta"); ?>
            <h3> <?php echo date("d-m-Y H:i:s"); ?></h3>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-3">
            <?php
            $user = $_SESSION['username'];
            $kueri = mysqli_query($conn, "SELECT * FROM akun WHERE username = '$user'");
            $dt = mysqli_fetch_array($kueri);
            $bengkel = $dt['id_bengkel'];
            $sql = "SELECT * FROM transaksi WHERE bengkel='$bengkel' AND NOT status IN ('Validasi Pembayaran', 'Diambil')";
            $query    = mysqli_query($conn, $sql);
            $count    = mysqli_num_rows($query); ?>
            <div class="boks">
                <h2>Order Masuk</h2>
                <div class="om"><?php echo "$count"; ?></div>
            </div>
        </div>
        <div class="col-md-3">
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
            $count    = mysqli_num_rows($query); ?>
            <div class="boks">
                <h2>Teknisi Tersedia</h2>
                <div class="om"><?php echo "$count"; ?></div>
            </div>
        </div>
        <div class="col-md-3">
            <?php
            $user = $_SESSION['username'];
            $kueri = mysqli_query($conn, "SELECT * FROM akun WHERE username = '$user'");
            $dt = mysqli_fetch_array($kueri);
            $bengkel = $dt['id_bengkel'];
            $sql = "SELECT * FROM transaksi WHERE bengkel='$bengkel' AND status='Diambil'";
            $query    = mysqli_query($conn, $sql);
            $count    = mysqli_num_rows($query); ?>
            <div class="boks">
                <h2>Order Selesai</h2>
                <div class="om"><?php echo "$count"; ?></div>
            </div>
        </div>
    </div>
</div>
<?php
include '../admin/foot.php';
?>