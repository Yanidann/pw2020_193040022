\<?php
    // Mengecaek apakah ada id yang dikirimkan
    // jika tidak maka akan dikembalikan ke halaman index.php
    if (!isset($_GET['id'])) {
        header("location: ../index.php");
    }

    require 'functions.php';

    // Mengambil id dari url
    $id = $_GET['id'];

    // melakukan query dengan parameter id yang diambil dari url
    $mkn = query("SELECT * FROM makanan WHERE id = $id")[0];

    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan5c</title>
    <style>
        .container {
            border: 3px solid #4B0082;
            /* indigo */
            background-color: #9370DB;
            /* medium purple */
            width: 170px;
            height: 270px;
            margin: auto;
            padding: 20px 0 20px 0;
            text-align: center;
            font-family: arial;
            font-size: medium;
        }

        img {
            border: 2px solid #4B0082;
            /* indigo */
            width: 100px;
            height: 70px;
        }

        button:link,
        a:link {
            color: #0000CD;
            /* medium blue */
        }

        button:hover,
        a:hover {
            text-decoration: none;
            color: #48D1CC;
            /* medium turquoise */
        }

        button:active,
        a:active {
            text-decoration: none;
        }
    </style>

</head>

<body>
    <div class="container">
        <div class="gambar">
            <img src="../assets/img/<?= $mkn["gambar"]; ?>" alt="">
        </div>
        <div class="keterangan">
            <p><?= $mkn["nama"]; ?></p>
            <p><?= $mkn["asal"]; ?></p>
            <p><?= $mkn["bahan"]; ?></p>
            <p><?= $mkn["harga"]; ?></p>
        </div>
        <button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
    </div>
</body>

</html>