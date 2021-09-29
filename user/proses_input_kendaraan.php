<?php
include '../config/koneksi.php';
$jk = $_POST['jk'];
$merek = $_POST['nopol'];
$bengkel = $_POST['merek'];
$alamat = $_POST['tipe'];
$link = $_POST['user'];

$query = mysqli_query($conn, "INSERT INTO kendaraan SET jenis='$jk', nopol='$merek', merek='$bengkel', tipe='$alamat', username='$link'");
echo "<script>alert('Input Data Berhasil'); location.href=\"kendaraan.php\";</script>";
