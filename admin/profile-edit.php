<?php
session_start();
include '../config/koneksi.php';
$user = $_SESSION['username'];
$nama = $_POST['nama'];
$nik = $_POST['nik'];
$jk = $_POST['jk'];
$tgl_lahir = $_POST['tgl_lahir'];
$alamat = $_POST['alamat'];
$query = "UPDATE akun SET nama = '$nama', nik='$nik', jk='$jk', tgl_lahir='$tgl_lahir', alamat='$alamat' WHERE username='$user'";
$sql = mysqli_query($conn, $query);
header("location: profile.php");
