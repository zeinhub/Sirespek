<?php
session_start();
include '../config/koneksi.php';
include 'head.php';
?>
<style>
    .kotak {
        margin-top: 5%;
        margin-left: 25%;
        text-align: center;
    }

    .tabel tr th {
        color: white;
        background: #007bff;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    }

    .tombol {
        margin-left: 78%;
        margin-top: 10px;
    }
</style>
<div class="kotak">
    <table class="tabel" border="1px" cellpadding="10px" cellspacing="0">
        <tr>
            <b>
                <th> Nama </th>
                <th> Username </th>
                <th> Email </th>
                <th> Bengkel </th>
                <th> Level
                <th> </th>
                </th>
            </b>
        </tr>
        <?php
        $user = $_SESSION['username'];
        $query = "SELECT * FROM akun WHERE NOT username='$user'";
        $sql = mysqli_query($conn, $query);
        while ($data = mysqli_fetch_array($sql)) {
        ?>
            <tr>
                <td><?php echo $data['nama'] ?></td>
                <td><?php echo $data['username'] ?></td>
                <td><?php echo $data['email'] ?></td>
                <td><?php echo $data['id_bengkel'] ?></td>
                <td><?php echo $data['level'] ?></td>
                <td><a href="ubah-level.php?id=<?php echo $data['id_admin'] ?>">Ubah Level</a> | <a href="hapus_akun.php?id=<?php echo $data['id_admin'] ?>">Hapus</a></td>
            </tr>
        <?php } ?>
    </table>
</div>
<div class="tombol">
    <a class="btn btn-danger" href="index.php">Kembali</a>
</div>
<?php include '../admin/foot.php'; ?>