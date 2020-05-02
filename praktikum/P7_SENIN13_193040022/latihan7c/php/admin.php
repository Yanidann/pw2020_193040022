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
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>latihan7b</title>

  <style>
    table {
      background: white;
    }

    img {
      width: 100px;
      height: 100px;
      border: 2px solid black;
    }

    th {
      background: darkcyan;
    }

    button {
      background: darkcyan;
      color: white;
      font-size: medium;
    }
  </style>

</head>

<body>
  <div class="logout">
    <a href="logout.php"><button>Logout</button></a>
  </div>
  <br>
  <div class="add">
    <a href="tambah.php"><button>Tambah Data</button></a>
  </div>
  <br>

  <form action="" method="POST">
    <input type="text" name="keyword" size="40" placeholder="masukan keyword pencarian.." autocomplete="off" autofocus>
    <button type="submit" name="cari">Cari!</button>
  </form>
  <br>

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
</body>

</html>