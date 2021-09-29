<?php
session_start();
include '../config/koneksi.php';
include 'head.php'; ?>

<style type="text/css">
    body {
        background: url("../bootstrap/img/home.svg");
        background-repeat: no-repeat;
        position: relative;
        background-size: 1500px;
        background-position: center;
    }

    .kolom {
        background: white;
    }
</style>

<div class="container">
    <h1 style="padding-top: 5%; text-align: center; font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif"> <b> Data Yang Telah Diambil Pelanggan</b></h1>
    <form style="float: right; padding-bottom:15px; " class="form-inline my-2 my-lg-0" action="#" method="POST">
        <input class="form-control mr-sm-2" type="search" name="cari" placeholder="Search" aria-label="Search">
        <button class="btn btn-info my-2 my-sm-0" name="kode" type="submit">Search</button>
        <a style="color: white; margin-left: 5px;" class="btn btn-danger my-2 my-sm-0" href="index.php">Kembali</a>
    </form>
</div>
<div class="container" style="padding: 20px 20px;">
    <table style="padding: 20px 20px;" border="1px" cellspacing="0" cellpadding="10px" class="table">
        <tr style="background: #007bff; color: white; text-align:center;">
            <th>
                <h5> No</h5>
            </th>
            <th>
                <h5> Invoice</h5>
            </th>
            <th>
                <h5> Username </h5>
            </th>
            <th>
                <h5> Tanggal Masuk</h5>
            </th>
            <th>
                <h5> Kendaraan</h5>
            </th>
            <th>
                <h5> Perawatan </h5>
            </th>
            <th>
                <h5> Bengkel </h5>
            </th>
            <th>
                <h5> Status </h5>
            </th>
        </tr>

        <?php
        $query = "SELECT * FROM transaksi WHERE status='diambil'";
        $result = mysqli_query($conn, $query);
        $no = 1;
        while ($data = mysqli_fetch_array($result)) { ?>
            <tr class="kolom">
                <td><?php echo $no++; ?></td>
                <td><?php echo $data['id'] ?></td>
                <td><?php echo $data['username'] ?></td>
                <td><?php echo $data['tanggal_masuk'] ?></td>
                <td><?php echo $data['kendaraan'] ?></td>
                <td><?php echo $data['perawatan'] ?></td>
                <td><?php echo $data['bengkel'] ?></td>
                <td><?php echo $data['status'] ?></td>
            </tr>
</div>
<?php
        }
?>

</table>
<? include 'foot.php';?>