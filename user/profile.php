<?php
session_start();
include '../config/koneksi.php'; ?>
<title>Profil Saya</title>
<?php include 'head.php'; ?>
<?php
$test = $_SESSION['username'];
$query = "SELECT * FROM akun WHERE username='$test'";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_array($result); ?>
<style type="text/css">
    body {
        background: url("../bootstrap/img/333.jpg");
    }
</style>
<!-- <div class="jumbotron">
    <h2>Hallo <?php echo $_SESSION['username']; ?>, Ini adalah halaman untuk mengatur profil anda.</h2>
</div> -->
<div style="padding-top: 4%;" class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <h3 style="font-family:Verdana, Geneva, Tahoma, sans-serif; text-align:center; color: white; text-shadow: 2px 2px black;"> <b>Silahkan Lengkapi Data Anda</b></h3>
            <br>
            <form method="POST" action="profile-edit.php">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Username</label>
                        <input type="text" class="form-control" disabled id="inputEmail4" value="<?php echo $data['username'] ?>" placeholder="">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control" id="inputEmail4" value="<?php echo $data['nama'] ?>" placeholder="">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Tanggal Lahir</label>
                        <input type="date" name="tgl_lahir" class="form-control" id="inputPassword4" placeholder="Password">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputAddress">Jenis Kelamin</label>
                        <select name="jk" type="text" class="form-control" id="inputEmail" value="" placeholder="3327040000000000">
                            <option><?php echo $data['jk'] ?></option>
                            <option>Laki-Laki</option>
                            <option>Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress">No Identitas (KTP)</label>
                    <input name="nik" type="text" class="form-control" id="inputEmail" value="<?php echo $data['nik'] ?>" placeholder="3327040000000000">
                </div>
                <div class="form-group">
                    <label for="inputAddress2">Alamat</label>
                    <input name="alamat" type="text" value="<?php echo $data['alamat'] ?>" class="form-control" id="inputAddress2" placeholder="">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="kendaraan.php" class="btn btn-warning">Tambah Kendaraan</a>
                <a href="index.php" class="btn btn-danger">Batal</a>
            </form>
        </div>
    </div>


    <?php include 'foot.php' ?>