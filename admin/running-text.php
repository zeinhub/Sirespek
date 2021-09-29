<?php
include '../config/koneksi.php';
session_start();
$tampil = mysqli_query($conn, "SELECT * FROM running");

include 'head.php' ?>
<div class="container">
    <div class="col-5">
        <div style="padding: 50px 20px;" class="form-group">
            <!-- <h5>Running Text</h5> -->
            <table>
                <tr style="margin-bottom: 20px;">
                    <th style="margin-bottom: 10px;">Running Text Saat Ini :</th>
                </tr>
                <?php
                $row = mysqli_fetch_array($tampil);
                echo " 
                <tr>
                    <td style='margin-bottom: 20px;'>
                    $row[isi]
                    </td>
                                   </tr>";
                ?>
            </table>
            <form action="proses-editrt.php" method="POST">
                <textarea id="exampleFormControlTextarea1" class="form-control" name="isi" rows="3" type="text-area">  </textarea> <br>
                <input type="submit" value="Simpan" class="btn btn-primary" id="">
                <a class="btn btn-danger" href="index.php">Kembali</a>
            </form>
        </div>
    </div>
</div>

<?php include 'foot.php' ?>