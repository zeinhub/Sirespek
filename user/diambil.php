<?php
session_start();
include '../config/koneksi.php';
include 'head.php'; ?>
<style type="text/css">
    .kotak {
        margin-top: 50px;
    }

    .pad {
        padding-top: 5%;
    }

    table {
        background: white;
    }

    h3 {
        text-align: center;
        margin-bottom: 30px;
    }

    body {
        background: url("../bootstrap/img/333.jpg");
        background-repeat: repeat;
        background-size: 2000px;
    }

    a {
        margin-top: 20px;
        float: right;
    }
</style>
<div class="container kotak">
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <h3>History Transaksi</h3>
            <form method="GET">
                <table border="1" cellpadding="10px" cellspacing="0">
                    <tr style="background: blue; color: white;">
                        <th>No</th>
                        <th>Invoice</th>
                        <th>Kendaraan</th>
                        <th>Aksi</th>

                    </tr>
                    <?php
                    $no = 1;
                    $user = $_SESSION['username'];
                    $query = "SELECT * FROM transaksi WHERE username='$user' AND status='Diambil'";
                    $sql = mysqli_query($conn, $query);
                    while ($data = mysqli_fetch_array($sql)) {
                    ?>
                        <tr>
                            <td><?php echo $no ?></td>
                            <td><?php echo $data['id']; ?></td>
                            <td><?php echo $data['kendaraan']; ?></td>
                            <td> <a href="nota.php?id=<?php echo $data['id']; ?>">Pilih</a>
                            </td>
                        </tr>
                    <?php $no++;
                    } ?>
                </table>
                <a href="index.php" class="btn  btn-danger">Kembali</a>
            </form>
        </div>
    </div>
</div>
<div class="container pad">
    <table border="1">
        <tr>

        </tr>
    </table>

</div>
<?php
include 'foot.php';
?>