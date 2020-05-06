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
    table {
      background: white;
      position: absolute;
      left: 300px;
    }

    img {
      width: 100px;
      height: 100px;
      border: 2px solid darkorange;
    }

    th {
      background: darkorange;
      text-align: center;
    }

    button {
      background: darkorange;
      color: black;
      font-size: medium;
    }
  </style>

</head>

<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
    <a class="navbar-brand" href="#">HALAMAN ADMIN</a>

    <form class="form-inline my-2 my-lg-0 ml-auto" action="" method="POST">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" type="text" name="keyword">
      <button class=" btn btn-outline-secondary my-2 my-sm-0" type="submit" name="cari">Search</button>
    </form>

    <!-- ikon -->
    <div class="icon">
      <div class="icon2 pl-2">
        <ul class="nav nav-pills card-header-pills">
          <li class="nav-item">
            <a class="nav-link" href="tambah.php">Tambah Data</a>
          </li>
          <li class="nav-item">
            <a href="logout.php" class="nav-link active">Logout</a>
          </li>
        </ul>
      </div>
  </nav>

  <div class="col-md-12 p-5 pt-2 mt-5">
    <table border="1" cellpadding="13" cellspacing="0">
      <tr>
        <th>No</th>
        <th>Opsi</th>
        <th>Gambar</th>
        <th>Nama Makanan</th>
        <th>Asal Makanan</th>
        <th>Bahan Makanan</th>
        <th>Harga</th>
      </tr>

      <?php if (empty($makanan)) : ?>
        <tr>
          <td colspan="7">
            <h1 style="color: red; font-style: italic;">Data tidak ditemukan</h1>
          </td>
        </tr>
      <?php endif; ?>

      <?php $i = 1; ?>
      <?php foreach ($makanan as $m) : ?>
        <tr>
          <td><?= $i++; ?></td>
          <td>
            <a href=" ubah.php?id=<?= $m['id']; ?>"><button>Ubah</button></a>
            <a href="hapus.php?id=<?= $m['id']; ?>" onclick="return confirm('Hapus Data??')"><button>Hapus</button></a>
          </td>
          <td><img src="../assets/img/<?= $m['gambar']; ?>"></td>
          <td><?= $m['nama']; ?></td>
          <td><?= $m['asal']; ?></td>
          <td><?= $m['bahan']; ?></td>
          <td><?= $m['harga']; ?></td>
        </tr>
      <?php endforeach; ?>
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