<?php
include '../config/koneksi.php';
$id = $_POST['id'];
$isi = $_POST['status'];
$query = "UPDATE transaksi SET status='$isi' WHERE id='$id'";
$sql = mysqli_query($conn, $query);
echo "<script>alert('Update Status Berhasil'); location.href=\"index.php\";</script>";
