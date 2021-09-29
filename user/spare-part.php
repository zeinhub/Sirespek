<?php
session_start();
include '../config/koneksi.php';
include 'head.php';
?>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Nerko+One&family=Texturina:wght@100&display=swap" rel="stylesheet">
<style type="text/css">
    .kotak {
        margin: 5%;
        text-align: center;
    }

    .kotak img {
        width: 300px;
        padding-bottom: 10px;
    }

    .kotak h1 {
        font-family: 'Nerko One';
    }

    .kotak h4 {
        font-family: 'texturina';
    }
</style>
<div class="kotak">
    <img src="../bootstrap/img/logo.png" alt="">
    <h1>Mohon maaf, halaman ini masih dalam tahap pengembangan.</h1>
    <h4>Kami akan segera memberitahu anda jika halaman tersedia.</h4>
</div>
<?php
include 'foot.php';
?>