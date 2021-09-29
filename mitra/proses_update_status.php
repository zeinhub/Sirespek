<?php
include '../config/koneksi.php';
$status = $_POST['status'];
$jam = $_POST['jam'];
$id = $_POST['id'];
$query = mysqli_query($conn, "UPDATE teknisi SET jam='$jam', status='$status' WHERE id_teknisi='$id'");
header("location: teknisi.php");
