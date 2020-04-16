-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Apr 2020 pada 11.41
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `judul_buku`
--

CREATE TABLE `judul_buku` (
  `ID` int(11) NOT NULL,
  `cover_buku` char(30) NOT NULL,
  `Judul_buku` char(30) NOT NULL,
  `Penulis` char(30) NOT NULL,
  `Penerbit` char(30) NOT NULL,
  `Tebal_buku` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `judul_buku`
--

INSERT INTO `judul_buku` (`ID`, `cover_buku`, `Judul_buku`, `Penulis`, `Penerbit`, `Tebal_buku`) VALUES
(1, 'laskarpelangi.jpg', 'Laskar pelangi', 'Andrea Hirata', 'Bentang pustaka ,Yogyakarta', '553 Halaman'),
(2, 'perahukertas.jpg', 'Perahu kertas', 'Dewi Lestari (dee)', 'Treudee Pustaka Sejati dan Ben', '444 Halaman'),
(3, '5cm.jpg', '5 CM', 'Dhonny Dhirgantoro', 'PT. Grasindo, Yogyakarta', '381 Halaman'),
(4, 'pesona.jpg', 'Pudarnya pesona Cloepatra', 'Habiburrahman El Shirazy', 'Republika, Jakarta', '111 Halaman'),
(5, 'ayah.jpg', 'Ayah', 'Andrea Hirata', 'Bentang pustaka,Yogyakarta', '412 Halaman'),
(6, 'surat.jpg', 'Surat Kecil Untuk Tuhan', 'Agnes Davonar', 'Inandra Published', '239 Halaman'),
(7, 'sang.jpg', 'Sang Pemimpi', 'Andrea Hirata', 'PT. Bentang Pustaka', '292 Halaman'),
(8, 'filsafat.jpg', 'Pengantar Filsafat Pendidikan', 'Drs. Uyoh Sadulloh, M.pd', 'Alfabeta, CV', '183 Halaman'),
(9, 'dilan.jpg', 'Dilan', 'piqi baiq', 'Pastel Books', '332 Halaman'),
(10, 'rindu.jpg', 'Rindu', 'Darwis Tere Liye', 'Republica', '444 Halaman');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `judul_buku`
--
ALTER TABLE `judul_buku`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
