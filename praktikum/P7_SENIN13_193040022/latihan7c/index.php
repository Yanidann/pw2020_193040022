<?php
// menghubungkan dengan file php lainnya
require 'php/functions.php';

// melakukan query
$makanan = query("SELECT * FROM makanan");

if (isset($_POST['cari'])) {
    $makanan = cari($_POST['keyword']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 7c</title>

    <style>
        .container {
            border: 4px solid #191970;
            /* midnight blue */
            background-color: #48D1CC;
            /* medium turquoise */
            width: 300px;
            height: 300px;
            margin: auto;
            padding: 30px 0 20px 20px;
            font-family: arial;
            font-size: x-large;
        }

        a:link {
            text-decoration: none;
            color: #0000CD;
            /* medium blue */
        }

        a:hover {
            text-decoration: none;
            color: #FFFF00;
            /* yellow */
        }

        a:active {
            text-decoration: none;
        }
    </style>

</head>

<body>
    <h1>
        <center>DAFTAR MAKANAN</center>
    </h1>

    <form action="" method="POST">
        <center><input type="text" name="keyword" size="25" placeholder="masukan pencarian.." autocomplete="off" autofocus>
            <button type="submit" name="cari">Cari!</button></center>
    </form>
    <br>

    <center><a href="php/login.php">
            <button>Masuk ke halaman admin</button>
        </a></center>
    <br>

    <div class="container">

        <?php if (empty($makanan)) : ?>
            <tr>
                <td colspan="4">
                    <h1 style="color: red; font-style: italic; font-size: large;">Data tidak ditemukan</h1>
                </td>
            </tr>
        <?php endif; ?>


        <?php foreach ($makanan as $mkn) : ?>
            <div class="nama">
                <a href="php/detail.php?id=<?= $mkn['id']; ?>">
                    <?= $mkn["nama"]; ?>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
    <h1>
        <center>TERIMAKASIH SUDAH MEMESAN!</center>
    </h1>

</body>

</html>