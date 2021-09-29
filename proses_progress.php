<?php include_once 'config/conn.php'; ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <table border=1px;>
        <tr>
            <th>Invoice</th>
            <th>Nopol</th>
            <th>Kendaraan</th>
            <th>Status</th>
        </tr>
        <?php
        $nopol = $_POST['nopol'];
        $query = mysqli_query($koneksi, "select * from transaksi where nopol=$nopol");
        while ($row = mysqli_fetch_array($query)) {
            echo "<tr>";
            echo "<td>$row[invoice]</td>";
            echo "<td>$row[nopol]</td>";
            echo "<td>$row[kendaraan]</td>";
            echo "<td>$row[status]</td>";
        } ?>

    </table>
</body>

</html>