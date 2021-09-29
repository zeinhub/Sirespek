<?php
session_start();
include '../config/koneksi.php';
include '../admin/head.php'; ?>
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

    .tbl {
        margin-left: 3px;
    }
</style>
<div class="container">
    <?php
    $user = $_SESSION['username'];
    $kueri = mysqli_query($conn, "SELECT * FROM akun WHERE username='$user'");
    $dt = mysqli_fetch_array($kueri);
    $id = $dt['id_bengkel'];
    ?>
    <?php
    $kueri = mysqli_query($conn, "SELECT * FROM data_bengkel WHERE id_bengkel='$id'");
    $dta = mysqli_fetch_array($kueri);
    ?>
    <h1 style="padding-top: 5%; text-align: center; font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif"> <b> Daftar Teknisi <?php echo $dta['nama_bengkel'] ?></b></h1>
    <form style="float: right; padding-bottom:15px; " class="form-inline my-2 my-lg-0" action="#" method="POST">
        <input class="form-control mr-sm-2" type="search" name="cari" placeholder="Search" aria-label="Search"><br>
        <button class="tbl btn btn-info my-2 my-sm-0" name="kode" type="submit">Search</button>
        <a href="tambah_teknisi.php" class="tbl btn btn-primary my-2 my-sm-0">Tambah Teknisi</a>
        <a href="index.php" class="tbl btn btn-danger my-2 my-sm-0">Kembali</a>
    </form>
</div>
<div class="container">
    <table border=" 1px" cellspacing="0" cellpadding="10px" class="table">
        <tr style="background: #007bff; color: white; text-align:center;">
            <th>
                <h5> No</h5>
            </th>
            <th>
                <h5> No Registrasi</h5>
            </th>
            <th>
                <h5> Nama</h5>
            </th>
            <th>
                <h5> Jam Pelayanan</h5>
            </th>
            <th>
                <h5> Status </h5>
            <th></th>
            </th>
        </tr>
        <?php
        $user = $_SESSION['username'];
        $kueri = mysqli_query($conn, "SELECT * FROM akun WHERE username='$user'");
        $dt = mysqli_fetch_array($kueri);
        $id = $dt['id_bengkel'];
        ?>
        <?php
        $query = "SELECT * FROM teknisi WHERE bengkel='$id'";
        $result = mysqli_query($conn, $query);
        $no = 1;
        while ($data = mysqli_fetch_array($result)) { ?>
            <tr class="kolom">
                <td><?php echo $no++; ?></td>
                <td><?php echo $data['id_teknisi'] ?></td>
                <td><?php echo $data['nama'] ?></td>
                <td><?php echo $data['jam'] ?></td>
                <td><?php echo $data['status'] ?></td>
                <td><a href="update-status.php?id=<?php echo $data['id_teknisi'] ?>">Ubah Status</a> | <a href="hapus.php?id=<?php echo $data['id_teknisi'] ?>">Hapus</a></td>
            </tr>
</div>
<?php
        }
?>

</table>
<?php include '../admin/foot.php'; ?>