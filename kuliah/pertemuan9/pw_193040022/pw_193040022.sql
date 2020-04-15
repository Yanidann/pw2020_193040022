-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Apr 2020 pada 08.33
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
-- Database: `pw_193040022`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `nrp` char(9) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `jurusan` varchar(100) DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`, `gambar`) VALUES
(1, 'Yanida Nur Nabila Widya Sastra', '193040022', 'yanidanurn@gmail.com', 'Teknik Informatika', 'yanida.jpg'),
(2, 'Yuni Setyawati', '193040021', 'yunisetyawati01@gmail.com', 'Teknik Informatika', 'yunni.jpg'),
(3, 'M.Farhan As Siddiq', '193040010', 'assidiqfarhan@gmail.com', 'Teknik Informatika', 'farhan.jpg'),
(4, 'Silvi Fitriawati', '193040028', 'silviFitriawati29@gmail.com', 'Teknik Informatika', 'silvi.jpg'),
(5, 'Fahri Arliansyah', '193040011', 'fahriarliansyah12@gmail.com', 'Teknik Informatika', 'fahri.jpg'),
(6, 'Kareena Kardin', '193040035', 'kareenakardin444@gmail.com', 'Teknik Informatika', 'kareena.jpg'),
(7, 'Muhamad Rizky Fauzan', '193040014', 'm.rizky2705@gmail.com', 'Teknik Informatika', 'kijoy.jpg'),
(8, 'Zahra Dwi Ameilia', '193040027', 'zahradwiameilia1@gmail.com', 'Teknik Informatika', 'zahra.jpg'),
(9, 'Seli Suhaeli Septian', '193040015', 'selisuhaeliseptian25@gmail.com', 'Teknik Informatika', 'seli.jpg'),
(10, 'Yusril Ismail Azi', '193040024', 'aziyusril30@gmail.com', 'Teknik Informatika', 'yusril.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
