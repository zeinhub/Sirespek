<?php
include '../config/koneksi.php';
$judul = $_POST['judul'];
$info = $_POST['info'];

$query = mysqli_query($conn, "INSERT INTO informasi SET judul='$judul', isi='$info'");
echo "<script>alert('Input Data Berhasil'); location.href=\"informasi_pelanggan.php\";</script>";
