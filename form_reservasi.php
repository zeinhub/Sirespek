<?php
// session_start();
// if (!isset($_SESSION["login"])) {
//     header("location:login.php");
//     exit;
// }
?>
<?php include 'head.php'; ?>
<title>Formulir Reservasi</title>


<body>
    <?php
    include 'navbar.php'; ?>
    <div style="padding-top: 10px;" class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="jumbotron bg-light">
                    <h3>Silahkan isi data dibawah untuk melanjutkan reservasi perawatan kendaraan anda.</h3>
                    <h6 style="padding-top: 5%;"><b>Data Kendaraan</b></h6>
                    <div class="container">
                        <p>Pilih Kendaraan Anda</p>
                        <select class="custom-select">
                            <option selected>Pilih</option>
                            <option value="1">Motor</option>
                            <option value="2">Mobil</option>
                        </select>
                    </div>
                    <h6 style="padding-top: 20px;"><b>Pelayanan</b></h6>
                    <div class="container">
                        <p>Jenis</p>
                        <select class="custom-select">
                            <option selected>Pilih</option>
                            <option value="1">Perawatan Rutin</option>
                            <option value="2">Ganti Oli</option>
                            <option value="2">Perawatan Kendaraan Ringan</option>
                        </select>
                        <div class="form-group">
                            <label for="date">Tanggal</label>
                            <input type="date" class="form-control" id="date" aria-describedby="emailHelp" placeholder="Tanggal">
                        </div>
                        <div class="form-group">
                            <label for="date">Waktu</label>
                            <input type="Time" class="form-control" id="date" aria-describedby="emailHelp" placeholder="Tanggal">
                        </div>
                        <div>
                            <p>Lokasi Bengkel</p>
                            <select class="custom-select">
                                <option value="1">Tangerang</option>
                                <option value="2">Bogor</option>
                                <option value="2">Jakarta</option>
                            </select>
                        </div>
                        <br>
                        <button style="padding-top: 5px;" type="button" class="btn btn-primary">Kirim</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div>
        <?php
        include 'footer.php'; ?> <br>
    </div>

    <?php
    include 'foot.php' ?>
</body>

</html>