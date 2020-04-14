<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "pw_193040022");

// ambil data dari table makanan / query data makanan
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

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
    
    <h1>Daftar Mahasiswa</h1>

    <table border="1" cellpadding="10" cellspacing="0">

        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>gambar</th>
            <th>nama</th>
            <th>nrp</th>
            <th>email</th>
            <th>jurusan</th>
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
            <td> <?= $row["nama"]; ?> </td>
            <td> <?= $row["nrp"]; ?> </td>
            <td> <?= $row["email"]; ?> </td>
            <td> <?= $row["jurusan"]; ?> </td>
        </tr>
        <?php $i++; ?>
        <?php endwhile; ?>

    </table>
</body>
</html>