<?php
include '../config/koneksi.php';
$id = $_POST['hapus'];
$query = "DELETE FROM data_bengkel WHERE id_bengkel='$id'";
$sql = mysqli_query($conn, $query);
echo "<script>alert('Bengkel Berhasil Dihapus!'); location.href=\"daftar-bengkel.php\";</script>";
