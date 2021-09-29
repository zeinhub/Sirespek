<?php
session_start();
include '../config/koneksi.php';
include '../admin/head.php';
?>
<?php
$user = $_SESSION['username'];
$query = mysqli_query($conn, "SELECT * FROM akun WHERE username='$user'");
$data = mysqli_fetch_array($query);
?>
<style type="text/css">
    .kotak {
        margin-left: 30%;
        margin-top: 20%;
        text-align: center;
    }

    .kotak h1 {
        margin-bottom: 200px;
    }

    .tbl {
        margin-top: 5px;
        float: right;
    }

    h4 {
        font-family: Verdana, Geneva, Tahoma, sans-serif;
    }
</style>
<div class="">
    <div class="row">
        <div class="kotak col-md-5">
            <h4>Tambah Teknisi</h4>
            <form action="proses_tambah_teknisi.php" method="POST">
                <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
                <input type="hidden" class="form-control" name="bengkel" value="<?php echo $data['id_bengkel'] ?>">
                <button type="submit" class="btn btn-primary btn-block tbl">Tambah</button>
                <a href="teknisi.php" class="btn btn-danger btn-block tbl">Kembali</a>
            </form>
        </div>
    </div>

    <?php
    include '../admin/foot.php';
    ?>