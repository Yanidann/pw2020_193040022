<?php
    // menghubungkan dengan file php lainnya
    require 'php/functions.php';

    // melakukan query
    $makanan = query("SELECT * FROM makanan");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan5b</title>

    <style>
        table {
            margin : auto;
            text-align : center;
            font-size : x-large;
            background-color: #9370DB;

        }
        img {
            width : 100px;
            height : 80px;
            border : 1px solid black;
        }
    </style>
</head>
<body>
    <div class = "container">
        <h1><center>DAFTAR MAKANAN</center></h1>
        <table cellpadding  = "10" cellspacing = "0" border = "1">
            <tr>
                <th>No.</th>
                <th>Gambar</th>
                <th>Nama Makanan</th>
                <th>Asal Makanan</th>
                <th>Bahan Makanan</th>
                <th>Harga</th>
            </tr>

            <?php $i = 1?>
            <?php foreach ($makanan as $mkn) : ?>
            <tr>
                <td><?= $i?></td>
                <td><img src="assets/img/<?= $mkn["gambar"]; ?>"></td>
                <td><?= $mkn["nama makanan"]; ?></td>
                <td><?= $mkn["asal makanan"]; ?></td>
                <td><?= $mkn["bahan makanan"]; ?></td>
                <td><?= $mkn["harga"]; ?></td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>