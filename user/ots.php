<?php
session_start();
include '../config/koneksi.php';
include 'head.php'; ?>
<div class="container">
    <form action="proses-ots.php" method="POST">
        <div class="row justify-content-center">
            <div class="col">
                <div style="margin: 200px; margin-left:350px;">
                    <label for="alamat"> Alamat </label>

                    <?php
                    $user = $_SESSION['username'];
                    $query = "SELECT * FROM akun WHERE username='$user'";
                    $sql = mysqli_query($conn, $query);
                    $data = mysqli_fetch_array($sql);
                    ?>
                    <input id="alamat" name="alamat" class="form-control" style="width:auto; height:auto; overflow:scroll;" type="text" value="<?php echo $data['alamat']; ?>">
                    <br>
                    <button class="btn btn-primary" type="submit">Kirim Permintaan</button>
                </div>
            </div>
        </div>
    </form>
</div>
<?php include 'foot.php'; ?>