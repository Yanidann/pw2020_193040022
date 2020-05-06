<?php
session_start();

if (!isset($_SESSION["username"])) {
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
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <title>Halaman Ubah Form</title>

  <style>
    body {
      background: darkorange;
    }

    form {
      width: 300px;
      position: absolute;
      left: 550px;
      top: 60px;
    }

    h3 {
      text-align: center;
    }
  </style>
</head>

<body>
  <div class="col-md-12 p-5 pt-2">
    <form action="" method="POST">
      <h3>Form Ubah Daftar Makanan</h3>
      <input type="hidden" name="id" id="id" value="<?= $m['id']; ?>">
      <div class="form-group">
        <label for="gambar">Gambar:</label>
        <input type="text" class="form-control" name="gambar" id="gambar" required>
      </div>
      <div class="form-group">
        <label for="nama">Nama Makanan:</label>
        <input type="text" class="form-control" name="nama" id="nama" required>
      </div>
      <div class="form-group">
        <label for="asal">Asal Makanan:</label>
        <input type="text" class="form-control" name="asal" id="asal" required>
      </div>
      <div class="form-group">
        <label for="bahan">Bahan Makanan:</label>
        <input type="text" class="form-control" name="bahan" id="bahan" required>
      </div>
      <div class="form-group">
        <label for="harga">Harga:</label>
        <input type="text" class="form-control" name="harga" id="harga" required>
      </div>
      <button type="submit" class="btn btn-primary" name="ubah">Ubah Data!</button>
      <button type="submit" class="btn btn-primary bg-light">
        <a href="admin.php" style="text-decoration: none; color: black;">Kembali</a>
      </button>
  </div>
  </form>
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