<?php
include '../config/koneksi.php';
$id = $_POST['id'];
$isi = $_POST['status'];
$bengkel = $_POST['bengkel'];
$query = "UPDATE akun SET level='$isi', id_bengkel='$bengkel' WHERE id_admin='$id'";
$sql = mysqli_query($conn, $query);
echo "<script>alert('Ubah Level Berhasil'); location.href=\"manajemen-user.php\";</script>";
