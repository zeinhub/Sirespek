<html>

<head>
    <title>Aplikasi Chat Sederhana Hakko Blog's</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css" type="text/css" />
    <meta charset="utf-8">

    <!-- some pretty fonts for this demo page - not required for the slider -->
    <link href='http://fonts.googleapis.com/css?family=Source+Code+Pro|Open+Sans:300' rel='stylesheet' type='text/css'>

    <!-- demo.css contains additional styles used to set up this demo page - not required for the slider -->
    <link rel="stylesheet" href="demo.css">

    <!-- load jQuery and the plugin -->
    <style>
        .komentar {
            border: 1px solid #5cb85c;
            border-radius: 4px;
            width: 500px;
            height: 300px;
            overflow: scroll;
        }
    </style>

    <script src="dist/js/jquery.validate.js"></script>
    <script>
        $(document).ready(function() {
            $("#formku").validate();
        });
    </script>

    <style type="text/css">
        label.error {
            color: red;
            padding-left: .5em;
        }
    </style>

    <script type="text/javascript">
        x = 0;
        $(document).ready(function() {
            $(".komentar").scroll(function() {
                $("span").text(x += 1);
            });
        });
    </script>
</head>

<body bgcolor="#45B5FF">
    <div class="container">
        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="http://www.hakkoblogs.com">Chat Time</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="http://www.hakkoblogs.com">Aplikasi</a></li>
                        <li><a href="http://www.hakkoblogs.com">Chat Sederhana</a></li>
                    </ul>
                </div>
            </div>
            </nav>
        </div>
        <br />
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header">
                    <center>
                        <h1><span class="glyphicon glyphicon-envelope"></span> Aplikasi Chat Sederhana </h1>
                    </center>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Aplikasi Chat Sederhana </h3>
                    </div>
                    <div class="panel-body">
                        <center>
                            <div class="komentar">
                                <?php
                                echo "<head><title>My Guest Book</title></head>";
                                $fp = fopen("guestbook.txt", "r");
                                echo "<table border=0>";

                                while ($isi = fgets($fp, 250)) {
                                    $pisah = explode("|", $isi);
                                    echo "<tr><td>$pisah[0], $pisah[1], $pisah[2]</td></tr>";
                                    echo "<tr><td><font color=brown>$pisah[3]</font>, Bilang</td></tr>";
                                    echo "<tr><td>$pisah[5]<hr/></td></tr>
<tr><td>&nbsp;</td><td>&nbsp;</td></tr>";
                                }
                                echo "</table>";
                                ?>

                            </div>
                            <p>Scrolled <span>0</span> times.</p>
                        </center><br />
                        <center>
                            <form id="formku" method="post" action="proses-chat.php" onsubmit="return formCheck(this);">
                                <table style="font-style: oblique; font-weight: bold;">
                                    <tr>
                                        <td width="150">Nama</td>
                                        <td width="30">:</td>
                                        <td width="550"><input type="text" name="nama" size="30" class="form-control" minlength="3" placeholder="Nama Anda" required /></td>
                                    </tr>
                                    <tr>
                                        <td width="150">Email</td>
                                        <td width="30">:</td>
                                        <td width="550"><input type="text" name="email" size="30" class="form-control" minlength="3" placeholder="Alamat Email" required-email /></td>
                                    </tr>
                                    <tr>
                                        <td width="150">Komentar</td>
                                        <td width="30">:</td>
                                        <td width="550"><input type="text" name="komentar" size="30" class="form-control" minlength="3" placeholder="Komentar Anda" required /></td>
                                    </tr>
                                    <tr>
                                        <td width="150"></td>
                                        <td width="30"></td>
                                        <td width="550">
                                            <button type="submit" class="btn btn-info btn-sm">Kirim <span class="glyphicon glyphicon-send"></span></button>
                                            <button type="reset" class="btn btn-warning btn-sm">batal <span class="glyphicon glyphicon-refresh"></span></button>
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </center>
                    </div>
                </div>
            </div>
            <center>Copyright &copy; <a href="http://www.hakkobloigs.com" target="_blank" class="hakko">Hakko Blogs</a> 2015 All Right Reserved</center><br />
            <script src="bootstrap/js/bootstrap.js"></script>
</body>

</html>