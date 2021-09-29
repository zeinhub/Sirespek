<?php include '../config/koneksi.php';
session_start(); ?>
<title>Reservasi Perawatan</title>
<?php include 'head.php'; ?>
<style type="text/css">
    body {
        background: url("../bootstrap/img/333.jpg");
        background-repeat: repeat;
        background-size: 2000px;
    }

    .truncate {
        width: 20px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .bg {
        background: #027ea3;
        padding-top: 20px;
        padding-bottom: 20px;
        padding-left: 20px;
        padding-right: 20px;
    }

    .shd {
        box-shadow: 2px 2px black;
    }

    .col {
        color: white;
    }
</style>
<?php
$test = $_SESSION['username'];
$queryy = "SELECT * FROM kendaraan WHERE username='$test'";
$result = mysqli_query($conn, $queryy);
// $dt = mysqli_fetch_array($result); 
?>
<?php
date_default_timezone_set('Asia/Jakarta');
$tanggal = date("dmY");
// mengambil data barang dengan kode paling besar
$query = mysqli_query($conn, "SELECT max(id) as kodeTerbesar FROM transaksi");
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
$huruf = "INV";
$kodeBarang = $huruf . sprintf("%03s", $urutan);
?>
<div style="padding-top: 5%; padding-bottom:5%;" class="container">
    <div class="row justify-content-center">
        <div class="col col-md-6 bg rounded">
            <h3 style="font-family:Verdana, Geneva, Tahoma, sans-serif; padding-bottom:4%; text-align:center; color: white;"> <b>Isi Data Dibawah Untuk Melakukan Reservasi</b></h3>

            <form method="POST" action="proses-reservasi.php">
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="inputEmail4">Username</label>
                        <input type="text" class="form-control shd" name="username" value="<?php echo $_SESSION['username']; ?>" readonly required="required" id="inputEmail4" placeholder="Email">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputEmail4">No Order</label>
                        <input type="text" class="form-control shd" name="kode" value="<?php echo $kodeBarang; ?>" readonly required="required" id="inputEmail4" placeholder="Email">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputPassword4">Kendaraan</label>
                        <select type="text" name="kendaraan" class="form-control shd" id="inputState" placeholder="Password">
                            <option selected>Pilih Kendaraan</option>
                            <?php
                            while ($dt = mysqli_fetch_assoc($result)) {
                            ?>
                                <option>
                                    <?php
                                    echo $dt['nopol'];
                                    echo ' - ';
                                    echo $dt['tipe'];
                                    ?>
                                </option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <?php
                $test = $_SESSION['username'];
                $queryyy = "SELECT * FROM akun WHERE username='$test'";
                $result = mysqli_query($conn, $queryyy);
                $dta = mysqli_fetch_array($result); ?>
                <div class="form-group">
                    <label for="inputAddress">No Telepon</label>
                    <input type="number" name="tlp" class="form-control shd" value="<?php echo $dta['tlp']; ?>" id="inputAddress" placeholder="081234567890">
                </div>
                <div class="form-row">

                    <div class="form-group col-md-4">
                        <label for="inputAddress2">Lokasi Bengkel</label>
                        <select type="text" name="bengkel" class="form-control shd" id="inputAddress2" placeholder="Password">
                            <option value="" selected>Pilih Bengkel</option>
                            <?php
                            $test = $_SESSION['username'];
                            $queryyyy = "SELECT * FROM data_bengkel";
                            $hasil = mysqli_query($conn, $queryyyy);
                            // $dt = mysqli_fetch_array($result);
                            while ($dataa = mysqli_fetch_assoc($hasil)) { ?>
                                <option>
                                    <?php echo $dataa['id_bengkel'];
                                    ?>
                                </option>
                            <?php
                            }
                            ?>
                        </select> </div>
                    <div class="form-group col-md-4">
                        <label for="inputAddress2">Waktu & Teknisi</label>
                        <select type="text" name="jam" class="form-control shd" id="inputAddress2" placeholder="Password">
                            <option value="" selected>Pilih Waktu</option>
                            <?php
                            $queryyyy = "SELECT * FROM teknisi";
                            $hasil = mysqli_query($conn, $queryyyy);
                            // $dt = mysqli_fetch_array($result);
                            while ($dataa = mysqli_fetch_assoc($hasil)) { ?>
                                <option>
                                    <?php echo $dataa['jam'];
                                    echo ' - ';
                                    echo $dataa['nama'];
                                    ?>
                                </option>
                            <?php
                            }
                            ?>
                        </select> </div>
                    <div class="form-group col-md-4">
                        <a class="btn btn-success form-control" style="margin-top: 19%;" href="daftar-bengkel.php">Daftar Bengkel</a>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="inputCity">Tipe Perawatan</label>
                        <select class="form-control shd" name="perawatan" id="InputState">
                            <option selected>Pilih Perawatan </option>
                            <option>1. Perawatan Ringan </option>
                            <option>2. Ganti Oli </option>
                            <option>3. Perawatan Rutin </option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputState">Pembayaran</label>
                        <select id="inputState" name="pembayaran" class="form-control shd">
                            <option selected>Pilih Metode</option>
                            <option>Transfer Bank</option>
                            <option>Virtual Account (Soon)</option>
                            <option>Saldo</option>
                            <option>QRIS (Soon)</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputZip">No Rekening*</label>
                        <select type="text" name="norek" class="form-control shd" id="inputZip">
                            <?php
                            $test = $_SESSION['username'];
                            $mysql = "SELECT * FROM akun";
                            $hasill = mysqli_query($conn, $mysql);
                            // $dt = mysqli_fetch_array($result);
                            while ($ok = mysqli_fetch_assoc($hasill)) { ?>
                                <option>
                                    <?php echo $ok['rek'];
                                    ?>
                                </option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <label for="file">Silahkan Upload Bukti Pembayaran</label>
                            <input id="file" type="file">
                        </div>
                    </div>
                </div> <br>
                <p>*Hanya pilih jika menggunakan metode transfer. <br>
                    Silahkan transfer sebesar <b>Rp. 50.000</b> sebagai booking fee ke <b>BRI - 599219282891718 </b>a/n PT SIRESPEK Internasional.

                </p> <br>
                <button type="submit" name="proses" class="btn btn-primary">Proses</button>
                <a href="index.php" class="btn btn-danger">Batal</a>
            </form>
        </div>
    </div>
</div>
<?php include 'foot.php'; ?>