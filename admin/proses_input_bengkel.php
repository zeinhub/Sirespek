<?php
include '../config/koneksi.php';
$jk = $_POST['jk'];
$merek = $_POST['merek'];
$bengkel = $_POST['bengkel'];
$alamat = $_POST['alamat'];
$link = $_POST['link'];
$id = $_POST['id'];

$query = mysqli_query($conn, "INSERT INTO data_bengkel SET id_bengkel='$id', jenis_kendaraan='$jk', merek='$merek', nama_bengkel='$bengkel', alamat_bengkel='$alamat', link='$link'");
echo "<script>alert('Input Data Berhasil'); location.href=\"daftar-bengkel.php\";</script>";
