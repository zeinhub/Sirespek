<?php
include '../config/koneksi.php';
$id = $_POST['judul'];
$isi = $_POST['isi'];
$query = "UPDATE artikel SET judul='$id', artikel='$isi' WHERE id='1'";
$sql = mysqli_query($conn, $query);
echo "<script>alert('Update Status Berhasil'); location.href=\"update_artikel.php\";</script>";
