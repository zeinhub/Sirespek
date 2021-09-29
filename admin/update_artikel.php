<?php
session_start();
include '../config/koneksi.php';
include 'head.php';
?>

<style type="text/css">
    table {
        width: 70%;
        margin-left: 150px;
        margin-top: 2%;
        border: black 4px;
        margin-bottom: 10%;
    }

    table tr th {
        background: #007bff;
        color: white;
        text-align: center;
    }

    h3 {
        text-align: center;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        margin-top: 5%;
        font-size: 40px;
    }

    .tombol {
        margin-left: 63%;
    }
</style>

<div class="container">
    <h3>Artikel</h3>
    <div class="tombol">

        <a class="btn btn-primary" href="tambah_art.php">Tambah Artikel</a>
        <a class="btn btn-danger" href="index.php">Kembali</a>
    </div>
    <table border="1px" cellpadding="10px" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Isi</th>
            <th>Aksi</th>
        </tr>
        <tr>

            <?php
            $no = 1;
            $query = "SELECT * FROM artikel";
            $result = mysqli_query($conn, $query);
            while ($data = mysqli_fetch_array($result)) { ?>
                <td><?php echo $no; ?></td>
                <td><?php echo $data['judul'] ?></td>
                <td><?php echo $data['artikel'] ?></td>
                <td><a href="update_art.php?id=<?php echo $data['id']; ?>">Ubah</a></td>
            <?php
                $no++;
            }
            ?>
        </tr>
</div>
</table>

<?php
include 'foot.php';
?>