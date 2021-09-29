<?php
session_start();
include '../config/koneksi.php';
include 'head.php';
?>
<div class="row justify-content-center">
    <div class="col-md-5">
        <h3 style="margin-top: 10%; text-align:center;">Lengkapi Data Dibawah Ini</h3>
        <form style="margin-top: 10%;" action="proses_input_kendaraan.php" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Jenis Kendaraan</label>
                <select type="text" name="jk" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jenis Kendaraan">
                    <option>Mobil</option>
                    <option>Motor</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Nomor Kendaraan</label>
                <input type="text" name="nopol" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nopol">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Merek</label>
                <input type="text" name="merek" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Merek">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Tipe</label>
                <input type="text" name="tipe" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Tipe Kendaraan">
            </div>
            <div class="form-group">
                <?php
                $user = $_SESSION['username'];
                ?>
                <input type="hidden" name="user" class="form-control" value="<?php echo $user ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Submit</button>
            <a href="index.php" style="margin-bottom: 10%;" class="btn btn-danger btn-block">Keluar</a>
        </form>

    </div>
</div>
<?php
include 'foot.php';
?>