<?php
// function untuk melakukan koneksi ke database
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "") or die("Koneksi ke DB gagal!");
    mysqli_select_db($conn, "tubes_193040022") or die("Database Salah!");

    return $conn;
}

// function untuk melakukan query ke database
function query($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// fungsi upload
function upload()
{
    $nama_file = $_FILES['gambar']['name'];
    $tipe_file = $_FILES['gambar']['type'];
    $ukuran_file = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmp_file = $_FILES['gambar']['tmp_name'];

    // ketika tidak ada gambar yang dipilih
    if ($error == 4) {
        echo "<script>
                    alert('pilih gambar terlebih dahulu!');
              </script>";
        return false;
    }

    // cek ekstensi file
    $daftar_gambar = ['jpg', 'jpeg', 'png'];
    $ekstensi_file = explode('.', $nama_file);
    $ekstensi_file = strtolower(end($ekstensi_file));
    if (!in_array($ekstensi_file, $daftar_gambar)) {
        echo "<script>
                    alert('yang anda pilih bukan gambar!');
              </script>";
        return false;
    }

    // cek type data
    if ($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {
        echo "<script>
                    alert('yang anda pilih bukan gambar!');
              </script>";
        return false;
    }

    // cek ukuran file
    // maksimal 5Mb = 5000000
    if ($ukuran_file > 5000000) {
        echo "<script>
                    alert('ukuran terlalu besar!');
              </script>";
        return false;
    }

    // lolos pengecekan
    // siap upload file
    // generate nama file baru
    $nama_file_baru = uniqid();
    $nama_file_baru .= '.';
    $nama_file_baru .= $ekstensi_file;
    move_uploaded_file($tmp_file, '../assets/img/' . $nama_file_baru);

    return $nama_file_baru;
}

// fungsi untuk menambahkan data didalam database
function tambah($data)
{
    $conn = koneksi();


    // upload gambar
    $gambar = upload();
    if (!$gambar) {
        return false;
    }

    // $gambar = htmlspecialchars($data['gambar']);
    $nama = htmlspecialchars($data['nama']);
    $asal = htmlspecialchars($data['asal']);
    $bahan = htmlspecialchars($data['bahan']);
    $harga = htmlspecialchars($data['harga']);

    $query = "INSERT INTO makanan
                    VALUES
                    ('', '$nama', '$asal', '$bahan', '$harga', '$gambar')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// fungsi untuk menghapus data
function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM makanan WHERE id = $id");

    return mysqli_affected_rows($conn);
}

// fungsi untuk mengubah data
function ubah($data)
{
    $conn = koneksi();

    $id = htmlspecialchars($data['id']);
    $gambar = htmlspecialchars($data['gambar']);
    $nama = htmlspecialchars($data['nama']);
    $asal = htmlspecialchars($data['asal']);
    $bahan = htmlspecialchars($data['bahan']);
    $harga = htmlspecialchars($data['harga']);

    $query = "UPDATE makanan
              SET
                nama = '$nama', 
                asal = '$asal', 
                bahan = '$bahan', 
                harga = '$harga', 
                gambar = '$gambar'
                WHERE id = '$id'
                ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// cari
function cari($keyword)
{
    $conn = koneksi();

    $query = "SELECT * FROM makanan
              WHERE 
              nama LIKE '%$keyword%' OR 
              asal LIKE '%$keyword%' OR
              bahan LIKE '%$keyword%' OR
              harga LIKE '%$keyword%'
              ";
    $result = mysqli_query($conn, $query);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// registrasi
function registrasi($data)
{
    $conn = koneksi();
    $username = strtolower(stripcslashes($data['username']));
    $password = mysqli_real_escape_string($conn, $data['password']);

    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' ");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('username sudah digunakan');
              </script>";
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambah user baru
    $query_tambah = "INSERT INTO user VALUES('', '$username', '$password')";
    mysqli_query($conn, $query_tambah);

    return mysqli_affected_rows($conn);
}
