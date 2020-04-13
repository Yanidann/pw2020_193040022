<?php
    // Melakukan koneksi ke database
    $conn = mysqli_connect("localhost", "root", "") or die ("koneksi ke DB gagal");

    // Memilih database 
    mysqli_select_db($conn, "tubes_193040022") or die ("Database salah!");

    // query mengambil objek dari tabel didalam database
    $result = mysqli_query($conn, "SELECT * FROM makanan");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan5a</title>

    <style>
        table {
            margin : auto;
            text-align : center;
            font-size : large;
            background-color: grey;

        }
        img {
            width : 70px;
            height : 50px;
            border : 1px solid black;
        }
    </style>
</head>
<body>
    <div class = "container">
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
            <?php while($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
            <td><?= $i?></td>
            <td><img src="assets/img/<?= $row["gambar"]; ?>"></td>
            <td><?= $row["nama makanan"]; ?></td>
            <td><?= $row["asal makanan"]; ?></td>
            <td><?= $row["bahan makanan"]; ?></td>
            <td><?= $row["harga"]; ?></td>
            </tr>
            <?php $i++; ?>
            <?php endwhile; ?>

        </table>
    </div>
</body>
</html>