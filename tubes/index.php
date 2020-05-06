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

  <title>SELAMAT DATANG</title>

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
  <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
    <a class="navbar-brand" href="#">SELAMAT DATANG</a>

    <form class="form-inline my-2 my-lg-0 ml-auto" action="" method="POST">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" type="text" name="keyword">
      <button class=" btn btn-outline-secondary my-2 my-sm-0" type="submit" name="cari">Search</button>
    </form>

    <!-- ikon -->
    <div class="icon">
      <div class="icon2 pl-4">
        <ul class="nav nav-pills card-header-pills">
          <li class="nav-item">
            <a href="php/login.php" class="nav-link active">Login</a>
          </li>
        </ul>
      </div>
  </nav>

  <div class="col-md-12 p-5 pt-2" style="text-align: center">
    <br>
    <br>
    <br>
    <h1><i class="mr-2"></i>DAFTAR MAKANAN</h1>
    <br>
    <br>
    <div class="container">
      <?php if (empty($makanan)) : ?>
        <tr>
          <td colspan="4">
            <center>
              <h1 style="color: red; font-style: italic; font-size: large;">Data tidak ditemukan</h1>
            </center>
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