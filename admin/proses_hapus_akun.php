<?php
include '../config/koneksi.php';
$id = $_POST['hapus'];
$query = "DELETE FROM akun WHERE id_admin='$id'";
$sql = mysqli_query($conn, $query);
echo "<script>alert('User Berhasil Dihapus!'); location.href=\"manajemen-user.php\";</script>";
