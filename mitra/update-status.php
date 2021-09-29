<?php
include '../config/koneksi.php';
session_start();
$id = $_GET['id'];
$tampil = mysqli_query($conn, "SELECT * FROM teknisi WHERE id_teknisi='$id'");
$data = mysqli_fetch_array($tampil);
include '../admin/head.php' ?>
<div class="container">
    <div class="row">
        <div class="col-5">
            <div style="padding: 50px 20px;" class="form-group">
                <!-- <h5>Running Text</h5> -->
                <h4>Nama : <?php echo $data['nama']; ?></h4>
                <h4>Jam : <?php echo $data['jam']; ?></h4>
                <h4>Status : <?php echo $data['status']; ?></h4>
                <br>
                <form action="proses_update_status.php" method="POST">
                    <select class="form-control" name="status" id="">
                        <option selected>Status</option>
                        <option>Tersedia</option>
                        <option>Tidak Tersedia</option>
                    </select>
                    <br>
                    <input name="jam" class="form-control" value="<?php echo $data['jam'] ?>" type="time">
                    <br>
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    <input type="submit" value="Simpan" class="btn btn-primary" id="">
                    <a class="btn btn-danger" href="teknisi.php">Kembali</a>
                    <a class="btn btn-danger" href="daftar-bengkel.php">Daftar Bengkel</a>
                </form>

            </div>
        </div>
        <div class="col-5">
        </div>
    </div>
</div>

<?php include '../admin/foot.php' ?>