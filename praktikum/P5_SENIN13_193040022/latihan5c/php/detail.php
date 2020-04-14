<?php
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
    <title>Latihan 5 C</title>
    <style>
    .container{
        border : 2px solid seagreen;
        width: 160px;
        height : 300px;
        text-align: center;
        padding-top: 5px;
        margin : auto;
        background-color: salmon;
        border-radius : 50px;
        font-family: arial;
    }
    img {
            width : 100px;
            height : 80px;
            border : 1px solid black;
        }
    }
    button:hover, a:hover{
        text-decoration: none;
        color : magenta;
    }
    button:link, a:link{
        text-decoration: none;
        color : seagreen;
    }
    button:active, a:active{
        text-decoration: none;
        color: black;
    }
    </style>
</head>
<body>
    <div class = "container">
        <div class="gambar">
            <img src="../assets/img/<?= $mkn["gambar"];?>">
        </div>
        <div class="keterangan">
            <p><?= $mkn ["nama makanan"]; ?></p>
            <p><?= $mkn ["asal makanan"]; ?></p>
            <p><?= $mkn ["bahan makanan"]; ?></p>
            <p><?= $mkn ["harga"]; ?></p>
        </div>
        <button class = "tombol-kembali"><a href="../index.php">Kembali</a></button>
    </div>
</body>
</html>