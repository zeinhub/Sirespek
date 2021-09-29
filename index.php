<?php include 'config/koneksi.php'; ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/style.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>SIRESPEK</title>
    <link rel="icon" href="bootstrap/img/logo.png">
</head>

<body>
    <!-- navbar -->
    <?php include 'navbar.php'; ?>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="bootstrap/img/1ok.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="bootstrap/img/2ok.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="bootstrap/img/3ok.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="bootstrap/img/4ok.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- carousell
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="bootstrap/img/sc1.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h1 style="color: white; ">Selamat Datang Di Sistem Reservasi Perawatan Kendaraan</h1>
                </div>
            </div>
            <div class="carousel-item">
                <img id="crs" class="crs d-block w-100" src="bootstrap/img/sc2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="bootstrap/img/sc3.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="bootstrap/img/4.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div> -->
    <?php
    $select = "SELECT * FROM running";
    $query = mysqli_query($conn, $select);
    while ($data = mysqli_fetch_array($query)) {
        $id    = $data['isi'];  // dr tabel

    ?>
        <div style="padding: 20px 20px;">
            <marquee style="font-size: 15pt; background:#007BFF; color:azure;" behavior="" direction=""><?php echo $data['isi'] ?></marquee>
        </div>
    <?php } ?>
    <div id="layanan" class="jumbotron">
        <div class="container text-center">
            <h2>
                <b id="test">Mau servis apa hari ini?</b>
            </h2>
            <div style="padding-top: 50px;" class="container">
                <div style="padding-bottom: 5px;" class="row ">
                    <div class="col bg-light rounded">
                        <h3 style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; padding-top: 15px;"> <b>Motor/Mobil</b></h3>
                        <div style="padding-left: 15%;" class="row">
                            <img style="width: 120px; padding-top: 20px;" src="bootstrap/img/motor.png" alt="">
                            <img style="width: 120px; padding-top: 20px;" src="bootstrap/img/toyota.png" alt="">
                        </div>
                        <br>
                        <br>
                        <p style="padding-top: 25px;">Layanan servis motor gapake lama nih, cuma 1 - 2 jam*, dan mobil 2 - 4 jam* aja.</p>
                        <br>
                        <a type="button" class="btn btn-block btn-primary" href="login.php">Pilih Layanan Ini</a>
                        <br>
                        <br>
                        <br>
                        <br>
                    </div>
                    <div class="col bg-link rounded">
                        <h3 style="padding-top: 15px; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;"> <b>Cari Suku Cadang</b></h3>
                        <img style="width: 230px; padding-top: 25px;" src="bootstrap/img/sc.png" alt="">
                        <p style="padding-top: 25px;">Cari suku cadang untuk kendaraan anda, bisa diambil atau diantar ke rumah.</p>
                        <a type="button" href="login.php" class="btn btn-block btn-primary">Pilih Layanan Ini</a>
                        <br>
                    </div>
                    <div class="col bg-light rounded">
                        <h4 style="padding-top: 15px; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;"> <b>Service On The Spot (Darurat)</b></h4>
                        <img style="width: 230px; padding-top: 25px;" src="bootstrap/img/ots.png" alt="">
                        <p style="padding-top: 0px; padding-bottom: 5px;">Layanan servis kendaraan 24 jam dimanapun ketika kendaraan mogok.</p>
                        <br>
                        <a href="login.php" type="button" class="btn btn-block btn-primary">Pilih Layanan Ini</a>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Start of Tawk.to Script-->
    <script id="livechat" type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/5f96ad72194f2c4cbeb8fdaa/1eli9iaf1';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
    <br>
    <div class="container">
        <div class="border-top border-dark"></div>
    </div>
    <br>
    <div class="container text-center">
        <h2> <b> Artikel pilihan untuk anda</b></h2>
    </div> <br> <br>
    <?php include 'artikel.php'; ?>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
        <div class="border-top border-dark"></div>
    </div>
    <br>
    <br>
    <br>
    <?php include 'faq.php';
    ?>
    <br>
    <div class="container">
        <div class="border-top border-dark"></div>
    </div>
    <br>
    <br>
    <br>
    <?php include 'about.php' ?>
    <?php include 'foot.php' ?>
    <?php include 'footer.php' ?>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>