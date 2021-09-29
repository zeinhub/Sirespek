<?php
session_start();
include '../config/koneksi.php';
include 'head.php';
?>
<title> Chat Admin </title>
<style type="text/css">
    body {
        background: url(../bootstrap/img/home.svg);
        background-size: 100%;
        background-position: center;
        background-repeat: repeat-y;
    }

    .kotak {
        width: 450px;
        height: 300px;
        overflow: auto;
        background: url(../bootstrap/img/logo.png);
        background-size: 50%;
        background-repeat: no-repeat;
        background-position: center;
    }

    .kotak2 {
        width: 300px;
        height: auto;
        background: blue;
        color: white;
        float: right;
        margin: 5px;
    }

    .kotak3 {
        width: 300px;
        height: auto;
        background: blue;
        color: white;
        float: left;
        margin: 5px;
    }
</style>

<div style="padding-top: 1px; padding-bottom: 1px;" class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class=" card card-body">
                <h3>Chat Admin SIRESPEK (Beta)</h3>
                <div class="card card-body col">
                    <div id="chat" class="kotak">
                        <?php $user = $_SESSION['username'];
                        $query = "SELECT * FROM chat WHERE untuk='$user'";
                        $sql = mysqli_query($conn, $query); ?>
                        <?php
                        while ($data = mysqli_fetch_array($sql)) {
                            if ($data['role'] == "user") {                        ?>
                                <div style="padding-left: 10px;" class="kotak2 rounded">
                                    <h6 style="padding-top: 5px; padding-bottom:5px;">
                                        <?php
                                        echo $data['isi'];
                                        ?>
                                    </h6>
                                    <p><?php echo $data[$user] ?></p>
                                </div>
                            <?php
                            } else { ?>
                                <div style="padding-left: 10px;" class="kotak3 rounded">
                                    <h6 style="padding-top: 5px; padding-bottom:5px;">
                                        <?php
                                        echo $data['isi'];
                                        ?>
                                    </h6>
                                    <p><?php echo $data['user'] ?></p>
                                </div>
                            <?php  } ?>
                        <?php
                        } ?>
                        <script type="text/javascript">
                            var con = document.getElementById("chat");
                            con.scrollTop = con.scrollHeight;
                        </script>
                    </div>
                    <br>
                    <form action="proses-chat.php" method="POST">
                        <div>
                            <input class="form-control" name="isi" placeholder="Tulis Pesan Disini" type="text">
                        </div>
                        <div style="padding-top: 20px;">
                            <button type="submit" class="btn btn-primary btn-block">Kirim</button> <br>
                            <a type="submit" href="index.php" style="color: white;" class="btn btn-success btn-block">Kembali</a> <br>
                        </div>
                    </form>
                    <form action="hapus-chat.php" method="POST">
                        <?php
                        $untuk = $_SESSION['username'];
                        ?>
                        <input type="hidden" name="hapus" value="<?php echo $untuk ?>">
                        <button type="submit" class="btn btn-danger btn-block">Hapus Chat</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/5f96ad72194f2c4cbeb8fdaa/default';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>
<!--End of Tawk.to Script-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<?php
include 'foot.php';
?>