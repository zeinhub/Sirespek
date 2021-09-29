<?php
include '../config/koneksi.php';
$isi = $_POST['isi'];
$query = "UPDATE running SET isi='$isi' WHERE id='1'";
$sql = mysqli_query($conn, $query);
header("location:running-text.php");
