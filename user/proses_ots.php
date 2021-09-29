<?php
session_start();
include '../config/koneksi.php';
include 'head.php';
?> 
<?php
date_default_timezone_set('Asia/Jakarta');
$tanggal = date("Y-m-d H:i:s");
$selesai = date("Y-m-d H:i:s", strtotime('+3 hour', strtotime($tanggal)));
$user = $_POST['username'];
$kode = $_POST['kode'];
$kendaraan = $_POST['kendaraan'];
$tlp = $_POST['tlp'];
$query = "INSERT INTO transaksi SET id='$kode', tanggal_masuk='$tanggal', kendaraan='$kendaraan', bengkel='Menunggu Konfirmasi', status='-', selesai='$selesai', username='$user', tlp='$tlp', perawatan='Layanan Darurat', pembayaran='COD', norek='-', jam='-'";
mysqli_query($conn, $query);
echo "<script>alert('Permintaan Terkirim!'); location.href=\"index.php\";</script>";
?>
<?php include 'foot.php'; ?>