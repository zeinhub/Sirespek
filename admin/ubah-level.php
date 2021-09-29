<?php
include '../config/koneksi.php';
session_start();
$id = $_GET['id'];
$tampil = mysqli_query($conn, "SELECT * FROM akun WHERE id_admin='$id'");
$data = mysqli_fetch_array($tampil);
include '../admin/head.php' ?>
<div class="container">
    <div class="row">
        <div class="col-5">
            <div style="padding: 50px 20px;" class="form-group">
                <!-- <h5>Running Text</h5> -->
                <h4>Username : <?php echo $data['username']; ?></h4>
                <h4>Email : <?php echo $data['email']; ?></h4>
                <h4>Level saat ini : <?php echo $data['level']; ?></h4>
                <br>
                <form action="proses-ubah-level.php" method="POST">
                    <select class="form-control" name="status" id="">
                        <option selected></option>
                        <option>User</option>
                        <option>Admin</option>
                        <option>Super Admin</option>
                        <option>Mitra</option>
                    </select>
                    <br>
                    <select class="form-control" name="bengkel" id="">
                        <option selected></option>
                        <?php
                        $query = "SELECT * FROM data_bengkel";
                        $sql = mysqli_query($conn, $query);
                        while ($data = mysqli_fetch_array($sql)) {
                        ?>
                            <option><?php echo $data['id_bengkel'] ?></option>
                        <?php } ?>
                    </select>
                    <br>
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    <input type="submit" value="Simpan" class="btn btn-primary" id="">
                    <a class="btn btn-danger" href="manajemen-user.php">Kembali</a>
                    <a class="btn btn-danger" href="daftar-bengkel.php">Daftar Bengkel</a>
                </form>

            </div>
        </div>
        <div class="col-5">
        </div>
    </div>
</div>

<?php include '../admin/foot.php' ?>