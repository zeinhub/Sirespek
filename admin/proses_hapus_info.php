<?php
include '../config/koneksi.php';
$id = $_POST['hapus'];
$query = "DELETE FROM informasi WHERE id_info='$id'";
$sql = mysqli_query($conn, $query);
echo "<script>alert('Bengkel Berhasil Dihapus!'); location.href=\"informasi_pelanggan.php\";</script>";
