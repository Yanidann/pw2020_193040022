<?php
// menghubungkan dengan file php lainnya
require 'php/functions.php';

// melakukan query
$makanan = query("SELECT * FROM makanan");

if (isset($_POST['cari'])) {
  $makanan = cari($_POST['keyword']);
}
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <title>YNNWS</title>


  <style>
    .container {
      border: 3px solid darkorange;
      background-color: darkorange;
      width: 270px;
      height: auto;
      margin: auto;
      padding: 20px 0 20px 0;
      text-align: center;
      font-family: arial;
      font-size: x-large;
      border-radius: 20px;
    }

    a {
      color: black;
    }

    a:link {
      text-decoration: none;
    }

    a:hover {
      text-decoration: none;
      color: white;
    }

    a:active {
      text-decoration: none;
    }
  </style>
</head>

<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-warning">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="#">193040022</a>
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-item nav-link active" href="#home" style="font-size: 20px;">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#daftar makanan" style="font-size: 20px;">Daftar Makanan</a>
        </li>
      </ul>
      <ul class="nav nav-pills card-header-pills pr-5">
        <li class="nav-item">
          <a href="php/login.php" class="nav-link active" style="font-size: 17px;">Login</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- home -->
  <section id="home" class="home">
    <div class="header" style="background-color: Gainsboro;">
      <div class="row justify-content-center">
        <div class="col-md-4 text-center">
          <br><br><br><br><br>
          <h1 class="display-4" style="text-align: left; font-size: 60px;"><b>Selamat Datang</b></h1>
          <br>
          <p style=" text-align: left; font-size: 20px;">Halaman ini menampilka <b>Daftar Makanan</b> dari bermacam-macam daerah</p>
          <br><br><br><br><br><br><br><br><br><br><br><br>
        </div>
        <div class="col-md-4 mt-5 text-center">
          <img src="assets/img/makanan.png" width="100%">
        </div>
      </div>
    </div>
  </section>

  <div class="col-md-12 p-5" id="daftar makanan" style="text-align: center;">
    <h1><i class="mr-2"></i>DAFTAR MAKANAN</h1>
    <br>
    <form action="" method="POST">
      <input type="text" name="keyword" size="50" placeholder="Search..." autocomplete="off" autofocus class="keyword">
      <button type="submit" name="cari" class="tombol-cari">Cari!</button>
    </form>
    <br>

    <div class="container">
      <table>
        <?php if (empty($makanan)) : ?>
          <tr>
            <td colspan="4">
              <center>
                <h1 style="color: red; font-style: italic; font-size: large;">Data tidak ditemukan</h1>
              </center>
            </td>
          </tr>
        <?php endif; ?>


        <?php foreach ($makanan as $m) : ?>
          <div class="nama">
            <a href="php/detail.php?id=<?= $m['id']; ?>">
              <?= $m["nama"]; ?>
            </a>
          </div>
        <?php endforeach; ?>
    </div>
    </table>
  </div>

  <footer>
    <br>
    <div>
      <p align="center">&#169;2020 Daftar Makanan by Yanida Nur Nabila</p>
    </div>
  </footer>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="js/script.js"></script>
</body>

</html>