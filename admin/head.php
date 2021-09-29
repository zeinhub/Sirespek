<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d6320d38fa.js" crossorigin="anonymous"></script>

    <title>Admin</title>
</head>

<body>
    <?php
    if (!isset($_SESSION["username"])) {
        echo "<script>alert('Silahkan Login Terlebih Dahulu Atau Anda Tidak Memiliki Hak Akses Ke halaman Ini!'); location.href=\"../login.php\";</script>";
    }
    ?>