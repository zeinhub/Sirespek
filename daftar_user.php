<?php
if (isset($_POST['daftar'])) {
    # code...
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="bootstrap/css/sb-admin-2.min.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <style type="text/css">
        .ssl {
            width: 40%;
            align-content: center;
            margin-left: 30%;
            margin-bottom: 100px;
            text-shadow: white;
        }

        body {
            background: url(https://i.pinimg.com/originals/4d/94/f5/4d94f5cc1a6202e13b07133b8b5ae486.jpg) repeat;
        }
    </style>
    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5 col-lg-5 mx-auto">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <div class="container text-center">
                                    <img style="width: 200px;" src="bootstrap/img/logo.png" alt="">
                                </div>
                                <h1 class="h4 text-gray-900 mb-4">Buat Akun SIRESPEK</h1>
                            </div>
                            <form method="POST" action="proses_daftar.php">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" required id="nama" placeholder="Nama Lengkap" name="nama">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" required id="user" placeholder="Username" name="user">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" required id="email" placeholder="Email" name="email">

                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user" required id="password" name="password" placeholder="Password">
                                    <br>
                                    <button type="submit" name="daftar" class="btn btn-primary btn-user btn-block">
                                        Buat Akun
                                    </button>
                            </form>
                            <hr>

                            <div class="text-center">
                                <a class="small" href="login.php">Sudah punya akun? masuk sekarang!</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <img class="ssl" src="https://miro.medium.com/max/800/1*Qyw0ADm95j8mYXC3oA5FVQ.png" alt="">
    <!-- Bootstrap core JavaScript-->
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="bootstrap/js/jquery.easing.min.js"></script>
</body>

</html>