<?php
include '../config/koneksi.php';
?> 
<?php
date_default_timezone_set('Asia/Jakarta');
$tanggal = date("Y-m-d H:i:s");
$selesai = date("Y-m-d H:i:s", strtotime('+3 hour', strtotime($tanggal)));
$jam = $_POST['jam'];
$user = $_POST['username'];
$kode = $_POST['kode'];
$kendaraan = $_POST['kendaraan'];
$tlp = $_POST['tlp'];
$bengkel = $_POST['bengkel'];
$perawatan = $_POST['perawatan'];
$pembayaran = $_POST['pembayaran'];
$norek = $_POST['norek'];
$query = "INSERT INTO transaksi SET id='$kode', tanggal_masuk='$tanggal', kendaraan='$kendaraan', bengkel='$bengkel', status='Validasi Pembayaran', selesai='$selesai', username='$user', tlp='$tlp', perawatan='$perawatan', pembayaran='$pembayaran', norek='$norek', jam='$jam'";
mysqli_query($conn, $query);
// if (mysqli_query($conn, $query)) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $query . "<br>" . mysqli_error($conn);
// }
// 
?>
<?php
echo "<script>alert('Input Berhasil'); location.href=\"index.php\";</script>";
?>
