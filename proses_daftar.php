<?php
include 'config/koneksi.php';
// menyimpan data kedalam variabel
$username   = $_POST['user'];
$nama       = $_POST['nama'];
$email      = $_POST['email'];
$password   = $_POST['password'];
$cek_username = mysqli_num_rows(mysqli_query($conn, "SELECT username FROM akun WHERE username='$_POST[user]'"));
if ($cek_username > 0) {
    echo "<script>alert('Username Sudah Terdaftar!'); location.href=\"daftar_user.php\";</script>";
} else {

    $query      = "INSERT INTO akun SET username='$username', nama='$nama', email='$email', password='$password', level='User'";
    $sql        = mysqli_query($conn, $query);
    echo "<script>alert('Akun Berhasil Dibuat'); location.href=\"login.php\";</script>";
}
