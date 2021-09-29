<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <title>Login</title>
</head>

<body>
    <div class="container">
        <div class="iframely-embed">
            <div class="iframely-responsive" style="height: 140px; padding-bottom: 0;"><a href="https://teknozen.xyz/2020/07/03/remot-motor-vario-anda-tidak-bunyi-beep-simak-solusinya/" data-iframely-url="//cdn.iframe.ly/mS6vS9r"></a></div>
        </div>
        <script async src="//cdn.iframe.ly/embed.js" charset="utf-8"></script>
    </div> <br>
    <div class="container">
        <?php
        $query = "SELECT * FROM artikel";
        $result = mysqli_query($conn, $query);
        while ($data = mysqli_fetch_array($result)) { ?>
            <table border="1px" cellpadding="10px" cellspacing="0">
                <div class="row">
                    <div class="col text-center"><?php echo $data['judul'] ?></div>
                </div>
                <div class="row">
                    <div class="col"><?php echo $data['artikel'] ?></div>
                </div>
            </table>
        <?php
        }
        ?>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="js/jquery.easing.min.js"></script>
</body>

</html>