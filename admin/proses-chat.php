<?php
session_start();
include '../config/koneksi.php';
$user = $_SESSION['username'];
$isi = $_POST['isi'];
$untuk = $_POST['userr'];
$role = "admin";
$query = "INSERT INTO chat SET user='$user', isi='$isi', untuk='$untuk', role='$role'";
$sql = mysqli_query($conn, $query);
header("location: chat.php");
