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
    <title>latihan5c</title>

    <style>
        .container {
            border : 5px solid seagreen;
            width : 580px;
            height: 300px;
            padding-top: 10px;
            padding-left: 10px;
            border-radius: 30px;
            margin : auto;
            font-size: x-large;
            font-family : arial;
            background-color: black;
        }
        a:active{
            text-decoration: none;
            color : magenta;
        }
        a:link{
            text-decoration: none;
            color : salmon;
        }
        a:hover{
            text-decoration: none;
            color : seagreen;
        }
    </style>
</head>
<body>
    <h1><center>DAFTAR MAKANAN</center></h1>
        <div class = "container">
            <?php foreach ($makanan as $mkn) : ?>
                <div class = "nama">
                    <a href="php/detail.php?id=<?= $mkn['id']; ?>"> 
                        <?= $mkn["nama makanan"]; ?>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    <h1><center>ANDA PUAS KAMI SENANG!!!</center></h1>
</body>
</html>