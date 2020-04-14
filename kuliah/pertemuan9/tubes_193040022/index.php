<?php
require 'functions.php';
$mkn = query("SELECT * FROM makanan");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Halaman Admin</title>
</head>
<body>
    
    <h1>Daftar Makanan</h1>

    <table border="1" cellpadding="10" cellspacing="0">

        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Nama Makanan</th>
            <th>Asal Makanan</th>
            <th>Bahan Makanan</th>
            <th>Harga</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ($mkn as $row) : ?>
        <tr>
            <td> <?= $i; ?> </td>
            <td>
                <a href="">ubah</a> |
                <a href="">hapus</a>
            </td>
            <td><img src="assets/img/<?= $row["gambar"]; ?>" width="50"></td>
            <td> <?= $row["nama makanan"]; ?> </td>
            <td> <?= $row["asal makanan"]; ?> </td>
            <td> <?= $row["bahan makanan"]; ?> </td>
            <td> <?= $row["harga"]; ?> </td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>

    </table>
</body>
</html>