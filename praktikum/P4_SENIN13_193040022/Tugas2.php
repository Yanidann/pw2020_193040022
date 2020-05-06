<?php
    $makanan = [
                [
            "foto"          => "RendangDaging.jpg",
            "nama"          => "Rendang",
            "asal makanan"  => "Sumatra Barat",
            "bahan makanan" => "Daging Sapi, Cabai, Santan, Bawang Merah, Jahe, Kunyit, Lengkuas, 
                              Serai, Bawang Putih",
            "harga"         => 15000
                ],
                [
            "foto"          => "SotoAyam.jpg",
            "nama"          => "Soto Ayam",
            "asal makanan"  => "Lamongan, Jawa Timur",
            "bahan makanan" =>"Ayam, Jeruk Nipis, Daun Bawang, Serai, Daun Salam, Daun Jeruk Putut,
                             Lengkuas, Jahe, Kunyit",
            "harga"         => 15000
                ],
                [
            "foto"          => "Rawon.png",
            "nama"          => "Rawon",
            "asal makanan"  => "Jawa Timur",
            "bahan makanan" => "Daging Sapi, Bawang Merah, Bawang Putih, Lengkuas, Ketumbar, Kemiri,
                                Serai, Kunir, Cabai, Kluwek",
            "harga"         => 15000
                ],
                [
            "foto"          => "SateMatang.jpg",
            "nama"          => "Sate Matang",
            "asal makanan"  => "Aceh",
            "bahan makanan" => "Daging Kambing, Kapulaga, Bunga Lawang, Cengkih, 
                                Kayu Manis,Merica",
            "harga"         => 30000
                ],
                [
            "foto"          => "Gudeg.jpg",
            "nama"          => "Gudeg",
            "asal makanan"  => "DI Yogyakarta, Jawa Tengah",
            "bahan makanan" => "Nangka, Santan, Daun Jati",
            "harga"         => 150000
                ],
                [
            "foto"          => "KerakTelor.jpg",
            "nama"          => "Kerak Telor",
            "asal makanan"  => "Jakarta",
            "bahan makanan" => "Telur Ayam, Ebi, Bawang Merah Goreng, Kelapa Sangrai, 
                                Cabai Merah, Kencur, Jahe, Merica",
            "harga"         => 15000
                ],
                [
            "foto"          => "AyamBetutu.jpg",
            "nama"          => "Ayam Betutu",
            "asal makanan"  => "Bali",
            "bahan makanan" => "Ayam, Base Genep",
            "harga"         => 50000
                ],
                [
            "foto"          => "Papeda.jpg",
            "nama"          => "Papeda",
            "asal makanan"  => "Papua",
            "bahan makanan" => "Bubur Sagu",
            "harga"         => 500000
                ],
                [
            "foto"          => "SateMadura.jpg",
            "nama"          => "Sate",
            "asal makanan"  => "Madura",
            "bahan makanan" => "Ayam, Kacang Tumbuk, Petis, Bawang Merah, Kecap",
            "harga"         => 30000
                ],
                [
            "foto"          => "Tekwan.jpg",
            "nama"          => "Tekwan",
            "asal makanan"  => "Palembang",
            "bahan makanan" => "Ikan, Tapioka, Sohun, Irisan Bengkoang, Jamur, Daun Bawang, 
                                Seledri, Bawng Goreng",
            "harga"         => 15000
                ]
               ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Makanan</title>
    <style>
        table{
            border: 1px solid black;
        }
        td, h2{
            text-align: center;
        }
        img{
            height: 150px;
        }
    </style>
</head>
<body>
        <h2>Data Makanan</h2>
        <table border="1" cellpadding="2" cellspacing="0">
            <tr>
                <td><b>No</b></td>
                <td><b>Foto</b></td>
                <td><b>Nama Makanan</b></td>
                <td><b>Asal Makanan</b></td>
                <td><b>Bahan Makanan</b></td>
                <td><b>Harga</b></td>
            </tr>
            <?php $i = 1; ?>
            <?php foreach ($makanan as $ma) : ?>
            <tr>
                <td><?= $i ?> </td>
                <td><img src="assets/img/<?=$ma["foto"]; ?>"></td>
                <td><?=$ma["nama"]; ?></td>
                <td><?=$ma["asal makanan"]; ?></td>
                <td><?=$ma["bahan makanan"]; ?></td>
                <td><?=$ma["harga"]; ?></td>
            </tr>
            <?php $i++; ?>
            <?php endforeach ?>
            </tr>
        </table>
</body>
</html>


