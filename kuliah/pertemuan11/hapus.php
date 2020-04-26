<?php
require 'functions.php';

// mengambil id dari URL
$id = $_GET['id'];

if (hapus($id) > 0) {
  echo "<script>
            alert('Data Berhasil dihapus!');
            document.location.href = 'index.php';
          </script>";
} else {
  echo "data gagal ditambahkan!";
}
