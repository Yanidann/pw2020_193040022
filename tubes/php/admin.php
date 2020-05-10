<?php
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

$makanan = query("SELECT * FROM makanan");

// ketika tombol cari diklik
if (isset($_POST['cari'])) {
  $makanan = cari($_POST['keyword']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <title>HALAMAN ADMIN</title>
  <style>
    img {
      width: 100px;
      height: 100px;
      border: 2px solid darkorange;
      border-radius: 20px;
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
      <a class="navbar-brand" href="#">HALAMAN ADMIN</a>
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      </ul>
      <form class="form-inline my-2 my-lg-0" action="" method="POST">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" type="text" name="keyword">
        <button class="btn btn-outline-secondary my-2 my-sm-0 bg-secondary text-light" type="submit" name="cari">Search</button>
      </form>
      <ul class="nav nav-pills card-header-pills pl-3">
        <li class="nav-item">
          <a class="nav-link active bg-success ml-1 mr-2" href=" tambah.php">Tambah Data</a>
        </li>
        <li class="nav-item">
          <a href="logout.php" class="nav-link active">Logout</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- table -->
  <div class="table-responsive m-2" style="block-size: 600px;">
    <table class="table table-bordered">
      <thead class="thead-dark">
        <tr style="text-align: center;">
          <th>No</th>
          <th>Opsi</th>
          <th>Gambar</th>
          <th>Nama Makanan</th>
          <th>Asal Makanan</th>
          <th>Bahan Makanan</th>
          <th>Harga</th>
        </tr>
      </thead>
      <tbody>
        <?php if (empty($makanan)) : ?>
          <tr>
            <td colspan="7">
              <h1 style="color: red; font-style: italic; text-align: center;">Data tidak ditemukan</h1>
            </td>
          </tr>
        <?php endif; ?>

        <?php $i = 1; ?>
        <?php foreach ($makanan as $m) : ?>
          <tr style="text-align: center;">
            <td><?= $i++; ?></td>
            <td>
              <a href=" ubah.php?id=<?= $m['id']; ?>"><button style="background-color: darkorange;">Ubah</button></a>
              <a href="hapus.php?id=<?= $m['id']; ?>" onclick="return confirm('Hapus Data?')"><button style="background-color: darkorange;">Hapus</button></a>
            </td>
            <td><img src="../assets/img/<?= $m['gambar']; ?>"></td>
            <td><?= $m['nama']; ?></td>
            <td><?= $m['asal']; ?></td>
            <td><?= $m['bahan']; ?></td>
            <td><?= $m['harga']; ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
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