<?php
session_start();
include '../config/koneksi.php';
$nama = $_POST['nama'];
$bengkel = $_POST['bengkel'];
$query = mysqli_query($conn, "INSERT INTO teknisi SET nama='$nama', bengkel='$bengkel'");
header("location: teknisi.php");
