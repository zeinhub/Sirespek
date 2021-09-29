<html>

<head>
    <title>Aplikasi Chat Sederhana Hakko Blog's</title>
</head>

<body bgcolor="#45B5FF">
    <?php
    date_default_timezone_set("Asia/Jakarta");

    $hr = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu");
    $hari_ini = date("w");
    $hari_ini = $hr[$hari_ini];
    $jam = date("H:i:s");

    $tgl = date("d/m/Y");
    $aktif = "1";
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $komentar = $_POST["komentar"];


    $fp = fopen("guestbook.txt", "a+");
    fputs($fp, "$hari_ini|$tgl|$jam|$nama|$email|$komentar\n");
    fclose($fp);
    header("Location: chat.php")
    // echo ("<script>alert('Komentar anda telah berhasil ditambahkan.'); window.location = 'chat.php'</script>");


    ?>
</body>

</html>