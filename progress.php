<?php
include 'config/koneksi.php';
include 'head.php';
include 'navbar.php'; ?>
<div class="container">
    <div style="padding-top: 30px; padding-bottom: 100px;" class="row justify-content-center">
        <div class="col-5">
            <form action="proses_cek.php" method="POST">
                <div class="container text-center">
                    <img style="width: 50%;" src="bootstrap/img/logo.png" alt="">
                </div>
                <div id="cek" class="form-group">
                    <h5 for="exampleInputEmail1">Lacak perkembangan perawatan kendaraan anda!</h5>
                    <input type="text" name="cari" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan kode Invoice">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Lacak</button>
            </form>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


</body>

</html>