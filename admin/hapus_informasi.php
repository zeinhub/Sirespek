<?php
session_start();
include '../config/koneksi.php';
include '../admin/head.php';

$id = $_GET['id'];
$tampil = mysqli_query($conn, "SELECT * FROM informasi WHERE id_info='$id'");
$data = mysqli_fetch_array($tampil);
?>
<style type="text/css">
    .kotak {
        margin-top: 20px;
    }
</style>
<div class="container">
    <div class="kotak">

        <form action="proses_hapus_info.php" method="POST">

            <input type="hidden" name="hapus" value="<?php echo $id ?>">
            <button type="submit" class="btn btn-danger btn-block">Hapus Data</button>
        </form>
    </div>
</div>
<?php include '../admin/foot.php'; ?>