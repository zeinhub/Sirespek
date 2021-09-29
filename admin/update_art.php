<?php
include '../config/koneksi.php';
session_start();
$tampil = mysqli_query($conn, "SELECT * FROM artikel");

include 'head.php' ?>
<div class="container">
    <!-- <h5>Running Text</h5> -->
    <div class="row justify-content-center">
        <div class="col-md-4">

        </div>
        <?php
        $row = mysqli_fetch_array($tampil);
        ?>
        <table border="1" cellpadding="10" cellspacing="0">
            <tr style="margin-bottom: 20px;">
                <th style="margin-bottom: 10px;">Artikel Saat Ini : <?php echo $row['judul']; ?></th>
            </tr>
            <tr>
                <td style='margin-bottom: 20px;'>
                    <?php echo $row['artikel']; ?>
                </td>
            </tr>
        </table>
    </div>
    <form action="proses_update_artikel.php" method="POST">
        <input style="margin-top: 4%;" id="exampleFormControlTextarea1" class="form-control" name="judul" rows="3" placeholder="Judul Artikel" type="text-area"> </input> <br>
        <textarea id="exampleFormControlTextarea1" class="form-control" name="isi" rows="3" placeholder="Isi Artikel" type="text-area">  </textarea> <br>
        <input type="submit" value="Simpan" class="btn btn-primary" id="">
        <a class="btn btn-danger" href="update_art.php">Kembali</a>
    </form>
</div>

<?php include 'foot.php' ?>