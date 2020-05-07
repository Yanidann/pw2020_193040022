-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Bulan Mei 2020 pada 16.26
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_193040022`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `makanan`
--

CREATE TABLE `makanan` (
  `id` int(11) NOT NULL,
  `nama` char(35) NOT NULL,
  `asal` char(15) NOT NULL,
  `bahan` char(20) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `makanan`
--

INSERT INTO `makanan` (`id`, `nama`, `asal`, `bahan`, `harga`, `gambar`) VALUES
(1, 'Rendang', 'Sumatra Barat', 'Daging sapi', 15000, 'RendangDaging.jpg'),
(2, 'Soto Ayam', 'Lamongan', 'Daging ayam', 15000, 'SotoAyam.jpg'),
(3, 'Rawon', 'Jawa Timur', 'Daging sapi', 15000, 'Rawon.png'),
(4, 'Sate Matang', 'Aceh', 'Danging Kambing', 30000, 'SateMatang.jpg'),
(5, 'Gudeg', 'DI Yogyakarta', 'Nangka', 15000, 'Gudeg.jpg'),
(6, 'Kerak Telor', 'Jakarta', 'Telur ayam', 15000, 'KerakTelor.jpg'),
(7, 'Ayam Betutu', 'Bali', 'Daging ayam', 50000, 'AyamBetutu.jpg'),
(8, 'Papeda', 'Papua', 'Bubur Sagu', 50000, 'Papeda.jpg'),
(9, 'Sate', 'Madura', 'Daging ayam', 30000, 'SateMadura.jpg'),
(10, 'Tekwan', 'Palembang', 'Daging ikan', 15000, 'Tekwan.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$MG5DrctBZJEDY4/q8QEz4e1HgMAkeJz7slhFFC4u1gUA.4/kf7VN6');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `makanan`
--
ALTER TABLE `makanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `makanan`
--
ALTER TABLE `makanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
