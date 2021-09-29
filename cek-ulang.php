<?php include 'head.php'; ?>
<?php include 'navbar.php'; ?>
<div class="container text-center">

</div>
<div class="container text-center">
    <div class="row justify-content-center">
        <div class="col">
            <h3 style="padding: 20px 20px;">Data & Progress Kendaraan Pelanggan</h3>
        </div>
    </div>
</div>
</div>
<div class="dropdown-divider"></div>
<div class="alert alert-danger" role="alert">
    Data tidak ditemukan, periksa kembali data yang anda masukkan!
</div>
<div class="dropdown-divider"></div>
<?php
include 'config/koneksi.php';
$no_urut = 0;
$search = $_POST['cari'];
$query = "SELECT * FROM transaksi WHERE nopol='$search'";
$result = mysqli_query($conn, $query);
while ($data = mysqli_fetch_array($result)) { ?>
    <div style="padding-top: 20px;" class="container">
        <div class="row">
            <div class="col">
                <h5>No Kendaraan :</h5>
                <h6><?php echo $data['nopol'] ?></h6>
                <h5>Tanggal Transaksi :</h5>
                <h6><?php echo $data['tanggal_masuk'] ?></h6>
                <h5>Jenis Kendaraan :</h5>
                <h6><?php echo $data['jenis'] ?></h6>
                <h5>Merek Kendaraan :</h5>
                <h6><?php echo $data['kendaraan'] ?></h6>
                <h5>Perkiraan Selesai :</h5>
                <h6><?php echo $data['selesai'] ?></h6>
                <h5>Status :</h5>
                <h6 class="disabled btn btn-primary"><?php echo $data['status'] ?></h6>
            </div>
            <div style="padding-bottom: 20px;" class="dropdown-divider"> <br> </div>
            <div style="padding-top: 20px;" class="card card-body col">
                <h5>Keterangan Status</h5>
                <h6> <b> Validasi : </b> Pesanan anda menunggu persetujuan oleh admin.</h6>
                <h6> <b> Menunggu : </b> Bengkel menunggu kendaraan anda.</h6>
                <h6> <b> Dalam Antrian : </b> Kendaraan anda sudah masuk antrian dan akan ditangani sesuai jadwal yang ditentukan.</h6>
                <h6> <b> Ditangani : </b> Kendaraan anda sedang ditangani teknisi (mungkin teknisi akan menghubungi anda melalui whatsapp jika diperlukan).</h6>
                <h6> <b> Selesai : </b> Kendaraan selesai ditangani namun belum diambil.</h6>
                <h6> <b> Diambil : </b> Kendaraan telah diambil pelanggan.</h6>
            </div>
            <?php
            // $tgl1 = $data['tanggal_masuk']; // pendefinisian tanggal awal
            // // $tgl2 = date('m-d-Y H-i-s', strtotime('+6 hours', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari
            // // echo $tgl2; //print tanggal
            // // 
            // // echo $data['tanggal_masuk'];
            // // $date = var_dump($data)
            // // echo $date->format('d-m-Y : H:i:s'); // 21-01-2017 05:13:03

            // // $date->modify('+1 month');
            // // echo $date->format('d-m-Y H:i:s'); // 28-02-2017 05:13:03

            // // $date->modify('-24 hours');
            // // echo $date->format('d-m-Y H:i:s'); // 20-02-2017 05:13:03
            // echo '1 jam kedepan: ' . date($data['tanggal_masuk'], time() + (120 * 120)) . '<br/>';
            ?>
        </div>
    </div>
    <div class="row justify-content-center">
        <div style="padding-left: 30%; padding-top: 100px; padding-bottom: 100px;" class="col">
            <a style="width: 70%;" class="btn btn-primary btn-block" href="progress.php">Cek Kendaraan Lain</a>
        </div>
    </div>
    </div>
    </div>
<?php    }
?>
</div>
<?php include 'footer.php';
include 'foot.php'; ?>