<?php
include '../config/koneksi.php';
$untuk = $_POST['hapus'];
$query = "DELETE FROM chat WHERE untuk='$untuk'";
$sql = mysqli_query($conn, $query);
header("location:chat.php");
