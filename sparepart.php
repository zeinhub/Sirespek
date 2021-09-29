<?php
// session_start();
// if (!isset($_SESSION["login"])) {
//     header("location:login.php");
//     exit;
// }
?>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Suku Cadang</title>
</head>

<body>
    <?php include 'navbar.php'; ?>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="bootstrap/img/sc1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="bootstrap/img/sc2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="bootstrap/img/sc3.jpg" alt="Third slide">
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
    <nav class="navbar navbar-light bg-light">
        <form class="form-inline">
            <button class="btn btn-outline-success" type="button">Filter</button>
            <button class="btn btn-outline-success" type="button">Kategori</button>
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </nav>
    <div style="padding-top: 20px;" class="container">
        <div class="row">
            <div class="col-sm-2">
                <img style="width: 100%;" src="bootstrap/img/spion.jpg" alt="">
                <p>Spion tengah mobil auto dimming<br> <b> Rp. 370.000</b> <br> <img style="width: 50%;" src="bootstrap/img/rating.png" alt=""> (200) </p>
            </div>
            <div class="col-sm-2">
                <img style="width: 100%;" src="bootstrap/img/yamalube.jpg" alt="">
                <p>Oli Motor Yamalube Super Sport<br> <b> Rp. 70.000</b> <br> <img style="width: 50%;" src="bootstrap/img/rating.png" alt=""> (200) </p>
            </div>
            <div class="col-sm-2">
                <img style="width: 100%;" src="bootstrap/img/spion.jpg" alt="">
                <p>Spion tengah mobil auto dimming<br> <b> Rp. 370.000</b> <br> <img style="width: 50%;" src="bootstrap/img/rating.png" alt=""> (200) </p>
            </div>
            <div class="col-sm-2">
                <img style="width: 100%;" src="bootstrap/img/yamalube.jpg" alt="">
                <p>Oli Motor Yamalube Super Sport<br> <b> Rp. 70.000</b> <br> <img style="width: 50%;" src="bootstrap/img/rating.png" alt=""> (200) </p>
            </div>
            <div class="col-sm-2">
                <img style="width: 100%;" src="bootstrap/img/spion.jpg" alt="">
                <p>Spion tengah mobil auto dimming<br> <b> Rp. 370.000</b> <br> <img style="width: 50%;" src="bootstrap/img/rating.png" alt=""> (200) </p>
            </div>
            <div class="col-sm-2">
                <img style="width: 100%;" src="bootstrap/img/yamalube.jpg" alt="">
                <p>Oli Motor Yamalube Super Sport<br> <b> Rp. 70.000</b> <br> <img style="width: 50%;" src="bootstrap/img/rating.png" alt=""> (200) </p>
            </div>
            <div class="col-sm-2">
                <img style="width: 100%;" src="bootstrap/img/spion.jpg" alt="">
                <p>Spion tengah mobil auto dimming<br> <b> Rp. 370.000</b> <br> <img style="width: 50%;" src="bootstrap/img/rating.png" alt=""> (200) </p>
            </div>
            <div class="col-sm-2">
                <img style="width: 100%;" src="bootstrap/img/yamalube.jpg" alt="">
                <p>Oli Motor Yamalube Super Sport<br> <b> Rp. 70.000</b> <br> <img style="width: 50%;" src="bootstrap/img/rating.png" alt=""> (200) </p>
            </div>
            <div class="col-sm-2">
                <img style="width: 100%;" src="bootstrap/img/spion.jpg" alt="">
                <p>Spion tengah mobil auto dimming<br> <b> Rp. 370.000</b> <br> <img style="width: 50%;" src="bootstrap/img/rating.png" alt=""> (200) </p>
            </div>
            <div class="col-sm-2">
                <img style="width: 100%;" src="bootstrap/img/yamalube.jpg" alt="">
                <p>Oli Motor Yamalube Super Sport<br> <b> Rp. 70.000</b> <br> <img style="width: 50%;" src="bootstrap/img/rating.png" alt=""> (200) </p>
            </div>
            <div class="col-sm-2">
                <img style="width: 100%;" src="bootstrap/img/spion.jpg" alt="">
                <p>Spion tengah mobil auto dimming<br> <b> Rp. 370.000</b> <br> <img style="width: 50%;" src="bootstrap/img/rating.png" alt=""> (200) </p>
            </div>
            <div class="col-sm-2">
                <img style="width: 100%;" src="bootstrap/img/yamalube.jpg" alt="">
                <p>Oli Motor Yamalube Super Sport<br> <b> Rp. 70.000</b> <br> <img style="width: 50%;" src="bootstrap/img/rating.png" alt=""> (200) </p>
            </div>
        </div>
    </div>
    </div>
    <?php include 'footer.php' ?>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>