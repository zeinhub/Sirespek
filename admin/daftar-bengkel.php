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
    <h1 style="padding-top: 5%; text-align: center; font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif"> <b> Daftar Bengkel Mitra Sirespek</b></h1>
    <form style="float: right; padding-bottom:15px; " class="form-inline my-2 my-lg-0" action="cari-bengkel.php" method="POST">
        <input class="form-control mr-sm-2" type="search" name="cari" placeholder="Search" aria-label="Search">
        <button class="btn btn-info my-2 my-sm-0" name="kode" type="submit">Search</button>
    </form>
</div>
<div class="container">
    <table border=" 1px" cellspacing="0" cellpadding="10px" class="table">
        <tr style="background: #007bff; color: white; text-align:center;">
            <th>
                <h5> No</h5>
            </th>
            <th>
                <h5> Kode Bengkel</h5>
            </th>
            <th>
                <h5> Jenis Kendaraan</h5>
            </th>
            <th>
                <h5> Merek</h5>
            </th>
            <th>
                <h5> Nama Bengkel </h5>
            </th>
            <th>
                <h5> Alamat Bengkel </h5>
            </th>
            <th>
                <h5> Aksi </h5>
            </th>
        </tr>

        <?php
        $query = "SELECT * FROM data_bengkel";
        $result = mysqli_query($conn, $query);
        $no = 1;
        while ($data = mysqli_fetch_array($result)) { ?>
            <tr class="kolom">
                <td><?php echo $no++; ?></td>
                <td><?php echo $data['id_bengkel'] ?></td>
                <td><?php echo $data['jenis_kendaraan'] ?></td>
                <td><?php echo $data['merek'] ?></td>
                <td><?php echo $data['nama_bengkel'] ?></td>
                <td><?php echo $data['alamat_bengkel'] ?></td>
                <td><a href='#'>Ubah</a> | <a href="hapus.php?id=<?php echo $data['id_bengkel'] ?>">Hapus</a></td>
            </tr>
</div>
<?php
        }
?>

</table>
<a style="float: right;" class="btn btn-danger" href="index.php">Kembali</a>
<? include 'foot.php';?>