<?php
include '../config/koneksi.php';
session_start();
$tampil = mysqli_query($conn, "SELECT * FROM transaksi");
$id = $_GET['id'];
include 'head.php' ?>
<div class="container">
    <div class="col-5">
        <div style="padding: 50px 20px;" class="form-group">
            <!-- <h5>Running Text</h5> -->
            <table>
                <tr>
                    <th>Status saat ini : Validasi Pembayaran</th>
                </tr>
            </table>
            <br>
            <form action="proses-updates.php" method="POST">
                <select class="form-control" name="status" id="">
                    <option>Validasi Pembayaran</option>
                    <option>Menunggu</option>
                    <option>Dalam Antrian</option>
                    <option>Ditangani</option>
                    <option>Selesai</option>
                    <option>Diambil</option>
                </select>
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <input type="submit" value="Simpan" class="btn btn-primary" id="">
                <a class="btn btn-danger" href="index.php">Kembali</a>
            </form>

        </div>
    </div>
</div>

<?php include 'foot.php' ?>