<?php
session_start();
include '../config/koneksi.php';
include 'head.php';
?>
<div class="row justify-content-center">
    <div class="col-md-5">
        <h3 style="margin-top: 10%; text-align:center;">Lengkapi Data Dibawah Ini</h3>
        <form style="margin-top: 10%;" action="proses_input_bengkel.php" method="POST">
            <div class="form-group">
                <?php
                $query = mysqli_query($conn, "SELECT max(id_bengkel) as kodeTerbesar FROM data_bengkel");
                $data = mysqli_fetch_array($query);
                $kodeBarang = $data['kodeTerbesar'];
                // mengambil angka dari kode barang terbesar, menggunakan fungsi substr
                // dan diubah ke integer dengan (int)
                $urutan = (int) substr($kodeBarang, 3, 3);

                // bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
                $urutan++;

                // membentuk kode barang baru
                // perintah sprintf("%03s", $urutan); berguna untuk membuat string menjadi 3 karakter
                // misalnya perintah sprintf("%03s", 15); maka akan menghasilkan '015'
                // angka yang diambil tadi digabungkan dengan kode huruf yang kita inginkan, misalnya BRG 
                $huruf = "BKL";
                $kodeBarang = $huruf . sprintf("%03s", $urutan);
                ?>
                <input type="hidden" name="id" value="<?php echo $kodeBarang ?>">
                <label for="exampleInputEmail1">Jenis Kendaraan</label>
                <select type="text" name="jk" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jenis Kendaraan">
                    <option>Mobil</option>
                    <option>Motor</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Merek</label>
                <input type="text" name="merek" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Merek">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Nama Bengkel</label>
                <input type="text" name="bengkel" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama Bengkel">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Alamat Bengkel</label>
                <input type="text" name="alamat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Alamat">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Link Google Maps</label>
                <input type="text" name="link" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Link">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Submit</button>
            <a href="index.php" style="margin-bottom: 10%;" class="btn btn-danger btn-block">Keluar</a>
        </form>

    </div>
</div>
<?php
include 'foot.php';
?>