<?php
session_start();
if (isset($_SESSION['login'])) {
    header("Location:index.php");
    exit;
}
require 'config/koneksi.php';
if (isset($_POST["login"])) {
    $user = $_POST["username"];
    $pass = $_POST["password"];
    // untuk keamanan
    $user = stripslashes($user);
    $pass = stripslashes($pass);

    $result = mysqli_query($conn, "SELECT * FROM user_acc WHERE username='$user'");
    //cek nip
    if (mysqli_num_rows($result) === 1) {
        //password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($pass, $row['password'])) {
            //set session
            $_SESSION['login'] = true;
            //
            header("Location:index.php");
            exit;
        }
    }
    $error = true;
}
?>
<?php
// if (isset($_POST['login'])) {
//     $username = $_POST['username'];
//     $password = $_POST['password'];

//     $query = "SELECT * FROM user_acc WHERE username = '$username'";
//     $result = mysqli_query($conn, $query);

//     //cek username
//     if (mysqli_num_rows($result) === 1) {

//         //cek password
//         $row = mysqli_fetch_assoc($result);
//         if (password_verify($password, $row["password"])) {
//             header("Location: index.php");
//             exit;
//         }
//     }
// }
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
    <link href="bootstrap/css/style.css" rel="stylesheet">
    <title>Login</title>
    <script src="https://kit.fontawesome.com/d6320d38fa.js" crossorigin="anonymous"></script>
</head>

<body>
    <style type="text/css">
        .ssl {
            width: 100%;
            align-content: center;
            margin-bottom: 100px;
            text-shadow: white;
        }

        body {
            background: url(https://i.pinimg.com/originals/4d/94/f5/4d94f5cc1a6202e13b07133b8b5ae486.jpg) repeat;
        }
    </style>

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-lg-5">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="container text-center">
                                        <img style="width: 200px;" src="bootstrap/img/logo.png" alt="">
                                    </div>
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Masuk dan berikan perawatan untuk kendaraan anda.</h1>
                                    </div>
                                    <form action="proseslogin.php" method="POST">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="username" aria-describedby="emailHelp" name="username" placeholder="Username">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                        </div>
                                        <button type="submit" name="login" class="btn btn-danger btn-block">
                                            Masuk
                                        </button>
                                    </form>
                                    <hr>

                                    <div class="text-center">
                                        <p>Belum punya akun ? <a href="daftar_user.php">daftar sekarang.</a></p>
                                    </div>
                                    <div class="text-center">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <img class="ssl" src="https://miro.medium.com/max/800/1*Qyw0ADm95j8mYXC3oA5FVQ.png" alt="">

            </div>

        </div>````````
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="js/jquery.easing.min.js"></script>
</body>

</html>