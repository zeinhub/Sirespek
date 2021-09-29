<?php
include '../config/koneksi.php';
$id = $_POST['hapus'];
$query = "DELETE FROM teknisi WHERE id_teknisi='$id'";
$sql = mysqli_query($conn, $query);
echo "<script>alert('User Berhasil Dihapus!'); location.href=\"teknisi.php\";</script>";
