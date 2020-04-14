<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "tubes_193040022");

// ambil data dari table makanan / query data makanan
$result = mysqli_query($conn, "SELECT * FROM makanan");

// ambil data makanan dari object result
// mysqli_fetch_row() // mengembalikan array numerik
// mysqli_fetch_assoc() // mengembalikan array associative
// mysqli_fetch_array() // mengembalikan keduanya
// mysqli_fetch_object() 

// while ($makanan = mysqli_fetch_assoc($result) ) {
// var_dump($makanan);
// }

?>
<!DOCTYPE html>
<html>
<head>
    <title>Halaman Admin</title>
</head>
<body>
    
    <h1>Daftar Makanan</h1>

    <table border="1" cellpadding="10" cellspacing="0">

        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Nama Makanan</th>
            <th>Asal Makanan</th>
            <th>Bahan Makanan</th>
            <th>Harga</th>
        </tr>

        <?php $i = 1; ?>
        <?php while( $row = mysqli_fetch_assoc($result) ) : ?>
        <tr>
            <td> <?= $i; ?> </td>
            <td>
                <a href="">ubah</a> |
                <a href="">hapus</a>
            </td>
            <td><img src="assets/img/<?= $row["gambar"]; ?>" width="50"></td>
            <td> <?= $row["nama makanan"]; ?> </td>
            <td> <?= $row["asal makanan"]; ?> </td>
            <td> <?= $row["bahan makanan"]; ?> </td>
            <td> <?= $row["harga"]; ?> </td>
        </tr>
        <?php $i++; ?>
        <?php endwhile; ?>

    </table>
</body>
</html>