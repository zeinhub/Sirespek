<?php
include '../config/koneksi.php';
session_start();
$id = $_GET['id'];
$tampil = mysqli_query($conn, "SELECT * FROM transaksi WHERE id='$id'");
$data = mysqli_fetch_array($tampil);
include '../admin/head.php' ?>
<style type="text/css">
    .kotak {
        margin-top: 10px;
    }

    .kotak2 {
        margin-left: 30%;
        margin-top: 10%;
    }

    .warna {
        color: red;
    }
</style>
<div class="container kotak2">
    <div class="col-md-5 kotak">
        <div style="padding: 50px 20px;" class="form-group">
            <!-- <h5>Running Text</h5> -->
            <table>
                <tr>
                    <h4>Invoice : <text class="warna"> <?php echo $data['id'] ?></text>
                    </h4>
                    <h4>Kendaraaan : <text class="warna"> <?php echo $data['kendaraan'] ?></text></h4>
                    <h4>Status saat ini : <text class="warna"> <?php echo $data['status'] ?></text></h4>
                </tr>
            </table>
            <br>
            <form action="proses-update-status-bengkel.php" method="POST">
                <select class="form-control" name="status" id="">
                    <option>Dalam Antrian</option>
                    <option>Ditangani</option>
                    <option>Selesai</option>
                    <option>Diambil</option>
                </select>
                <div class="kotak">
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    <input type="submit" value="Simpan" class="btn btn-primary btn-block" id="">
                    <a class="btn btn-danger btn-block" href="validasi.php">Kembali</a>
                </div>
            </form>

        </div>
    </div>
</div>

<?php include '../admin/foot.php' ?>