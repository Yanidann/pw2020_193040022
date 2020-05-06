<?php
require 'functions.php';

if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
              alert('Data Berhasil ditambahkan!');
              document.location.href = 'admin.php';
          </script>";
  } else {
    echo "<script>
              alert('Data Gagal ditambahkan!');
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
  <title>Halaman Tambah Form</title>
</head>

<body>
  <h3>Form Tambah Daftar Makanan</h3>
  <form action="" method="post">
    <ul>
      <li>
        <label for="gambar">Gambar:</label><br>
        <input type="text" name="gambar" id="gambar" required><br><br>
      </li>
      <li>
        <label for="nama">Nama Makanan:</label><br>
        <input type="text" name="nama" id="nama" required><br><br>
      </li>
      <li>
        <label for="asal">Asal Makanan:</label><br>
        <input type="text" name="asal" id="asal" required><br><br>
      </li>
      <li>
        <label for="bahan">Bahan Makanan:</label><br>
        <input type="text" name="bahan" id="bahan" required><br><br>
      </li>
      <li>
        <label for="harga">Harga:</label><br>
        <input type="text" name="harga" id="harga" required><br><br>
      </li>
      <button type="submit" name="tambah">Tambah Data!</button>
      <button type="submit">
        <a href="admin.php" style="text-decoration: none; color: black;">Kembali</a>
      </button>
    </ul>
  </form>
</body>

</html>