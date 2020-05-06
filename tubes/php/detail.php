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
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Halaman Detail</title>

    <style>
        body {
            background: darkorange;
        }

        img {
            height: 200px;
        }

        .card {
            position: absolute;
            left: 550px;
            top: 50px;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="card" style="width: 18rem;">
        <img src="../assets/img/<?= $mkn["gambar"]; ?>" alt="">
        <div class="card-body">
            <div class="keterangan">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <p><?= $mkn["nama"]; ?></p>
                    </li>
                    <li class="list-group-item">
                        <p><?= $mkn["asal"]; ?></p>
                    </li>
                    <li class="list-group-item">
                        <p><?= $mkn["bahan"]; ?></p>
                    </li>
                    <li class="list-group-item">
                        <p><?= $mkn["harga"]; ?></p>
                    </li>
                </ul>
            </div>
            <a href="../index.php" class="btn btn-primary">Kembali</a>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- javascript -->
    <script type="text/javascript" src="java.js"></script>
</body>

</html>