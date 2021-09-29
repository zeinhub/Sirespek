<?php
session_start();
include '../config/koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Nota Pembayaran</title>
    <link rel="stylesheet" href="css/style.css" media="all" />
</head>

<body>
    <header class="clearfix">
        <div id="logo">
            <img src="../bootstrap/img/logo.png">
        </div>
        <?PHP
        $idses = $_GET['id'];
        $query = "SELECT* FROM transaksi where id='$idses'";
        ?>
        <h1><?php echo $idses ?></h1>
        <div id="company" class="clearfix">
            <div>PT SIRESPEK Internasional.</div>
            <div>Sirespek Tower,<br /> Jakarta, Indonesia</div>
            <div>021-000000</div>
            <div>care@sirespek.com</div>
        </div>
        <div id="project">
            <?PHP
            $user = $_SESSION['username'];
            $query = "SELECT * FROM akun where username='$user'";
            $sql = mysqli_query($conn, $query);
            $data = mysqli_fetch_array($sql);
            ?>
            <div><span>LAYANAN</span> Reservasi Perawatan Kendaraan</div>
            <div><span>NAMA</span><?php echo $data['nama']; ?> </div>
            <div class="ok"><span>ADDRESS</span> <?php echo $data['alamat']; ?></div>
            <div><span>EMAIL</span> <?php echo $data['email']; ?></a></div>
        </div>
    </header>
    <main>
        <table>
            <thead>
                <tr>
                    <th class="service">TANGGAL RESERVASI</th>
                    <th class="desc">KENDARAAN</th>
                    <th>BENGKEL</th>
                    <th>TANGGAL SELESAI</th>
                    <th>METODE PEMBAYARAN</th>
                </tr>
            </thead>
            <tbody>
                <?PHP
                $idses = $_GET['id'];
                $query = "SELECT * FROM transaksi where id='$idses'";
                $sql = mysqli_query($conn, $query);
                $data = mysqli_fetch_array($sql);
                ?>
                <tr>
                    <td class="service"><?php echo $data['tanggal_masuk']; ?></td>
                    <td class="unit"><?php echo $data['kendaraan']; ?></td>
                    <td class="desc"><?php echo $data['bengkel']; ?>0</td>
                    <td class="qty"><?php echo $data['selesai']; ?></td>
                    <td class="total"><?php echo $data['pembayaran']; ?></td>
                </tr>
                <td colspan="4" class="grand total"></td>
                <td class="grand total"></td>

            </tbody>

        </table>

        <div id="notices">
            <div>CATATAN:</div>
            <div class="notice">1. Nota ini adalah bukti bahwa pembayaran anda telah lunas.</div>
            <div class="notice">2. Nota ini juga sebagai bukti jika terjadi masalah saat pengambilan pada bengkel.</div>
            <div class="notice">3. Jika terjadi kerusakan yang disebabkan oleh penanganan bengkel mitra sirespek maka dengan menunjukkan nota ini, anda berhak menerima perawatan gratis 1x.</div>
        </div>
    </main>

    <script>
        window.print();
    </script>
</body>

</html>