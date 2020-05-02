<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

$id = $_GET['id'];
$m = query("SELECT * FROM makanan WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
              alert('Data Berhasil diubah!');
              document.location.href = 'admin.php';
          </script>";
  } else {
    echo "<script>
              alert('Data Gagal diubah!');
              document.location.href = 'admin.php';
          </script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Ubah Form</title>
</head>

<body>
  <h3>Form Ubah Daftar Makanan</h3>
  <form action="" method="post">
    <input type="hidden" name="id" id="id" value="<?= $m['id']; ?>">
    <ul>
      <li>
        <label for="gambar">Gambar:</label><br>
        <input type="text" name="gambar" id="gambar" required value="<?= $m['gambar']; ?>"><br><br>
      </li>
      <li>
        <label for="nama">Nama Makanan:</label><br>
        <input type="text" name="nama" id="nama" required value="<?= $m['nama']; ?>"><br><br>
      </li>
      <li>
        <label for="asal">Asal Makanan:</label><br>
        <input type="text" name="asal" id="asal" required value="<?= $m['asal']; ?>"><br><br>
      </li>
      <li>
        <label for="bahan">Bahan Makanan:</label><br>
        <input type="text" name="bahan" id="bahan" required value="<?= $m['bahan']; ?>"><br><br>
      </li>
      <li>
        <label for="harga">Harga:</label><br>
        <input type="text" name="harga" id="harga" required value="<?= $m['harga']; ?>"><br><br>
      </li>
      <button type="submit" name="ubah">Ubah Data!</button>
      <button type="submit">
        <a href="../index.php" style="text-decoration: none; color: black;">Kembali</a>
      </button>
    </ul>
  </form>
</body>

</html>