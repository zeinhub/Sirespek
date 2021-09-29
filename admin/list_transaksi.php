<?php include '../config/koneksi.php'; ?>
<?php
include 'head.php'; ?>
<div style="padding: 20px 20px;" class="container">
    <table border="1px" cellpadding="10px" cellspacing="0">
        <div class="row border border-primary">
            <div style="color: white;" class="col border bg-primary">
                <h5> No</h5>
            </div>
            <div style="color: white;" class="col border bg-primary">
                <h5> Tanggal Masuk</h5>
            </div>
            <div style="color: white;" class="col border bg-primary">
                <h5> Nomor Polisi</h5>
            </div>
            <div style="color: white;" class="col border bg-primary">
                <h5> Jenis Kendaraan </h5>
            </div>
            <div style="color: white;" class="col border bg-primary">
                <h5> Merek Kendaraan </h5>
            </div>
            <div style="color: white;" class="col border bg-primary">
                <h5> Status </h5>
            </div>
            <div style="color: white;" class="col border bg-primary">
                <h5> Aksi </h5>
            </div>
        </div>
    </table>
    <?php
    $query = "SELECT * FROM transaksi";
    $result = mysqli_query($conn, $query);
    $no = 0;
    while ($data = mysqli_fetch_array($result)) { ?>
        <table border="1px" cellpadding="10px" cellspacing="0">
            <div class="row border border-primary">
                <div class="col border border-prmary"><?php echo $no++; ?></div class="col border border-prmary">
                <div class="col border border-prmary"><?php echo $data['tanggal_masuk'] ?></div class="col border border-prmary">
                <div class="col border border-prmary"><?php echo $data['nopol'] ?></div class="col border border-prmary">
                <div class="col border border-prmary"><?php echo $data['jenis'] ?></div class="col border border-prmary">
                <div class="col border border-prmary"><?php echo $data['kendaraan'] ?></div class="col border border-prmary">
                <div class="col border border-prmary"><?php echo $data['status'] ?></div class="col border border-prmary">
                <div class="col border border-prmary"><a href='form-edit.php?id=$data[id]'>Ubah Status</a> | <a href="hapus.php">Hapus</a></div class="col">
            </div>
        </table>
    <?php
    }
    ?>
    <?php
    include 'foot.php';
    ?>