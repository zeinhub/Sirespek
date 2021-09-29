<?php
session_start();
include '../config/koneksi.php';
include 'head.php';
?>
<div class="row justify-content-center">
    <div class="col-md-5">
        <h3 style="margin-top: 10%; text-align:center;">Lengkapi Data Dibawah Ini</h3>
        <form style="margin-top: 10%;" action="proses_add_info.php" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Judul</label>
                <input type="text" name="judul" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Judul Info">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Informasi</label>
                <input type="text" name="info" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Isi Informasi">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Submit</button>
            <a href="index.php" style="margin-bottom: 10%;" class="btn btn-danger btn-block">Keluar</a>
        </form>

    </div>
</div>
<?php
include 'foot.php';
?>