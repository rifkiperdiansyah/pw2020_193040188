-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Bulan Mei 2020 pada 08.34
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
-- Database: `tubes_193040188`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `cover_buku` varchar(100) NOT NULL,
  `Judul_Buku` varchar(100) NOT NULL,
  `Penulis` varchar(100) NOT NULL,
  `Penerbit` varchar(100) NOT NULL,
  `Tebal_buku` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id`, `cover_buku`, `Judul_Buku`, `Penulis`, `Penerbit`, `Tebal_buku`) VALUES
(1, 'laskar pelangi.jpg', 'Laskar pelangi', 'Andrea Hirata', 'Bentang pustaka ,Yogyakarta', '553 Halaman'),
(2, 'ayah.jpg', 'Ayah', 'Andrea hirata', 'Bentang pustaka,Yogyakarta', '412 Halaman'),
(3, 'dilan.jpg', 'Dilan', 'piqi baiq', 'Pastel Books', '332 Halaman'),
(4, 'filsafat.jpg', 'Pengantar Filsafat Pendidikan', 'Drs. Uyoh Sadulloh, M.pd', 'Alfabeta, CV	', '183 Halaman'),
(5, 'perahu kertas.jpg', 'Perahu kertas', 'Dewi Lestari (dee)', 'Treudee Pustaka Sejati dan Ben', '444 Halaman'),
(6, 'pesona.jpg', 'Pudarnya pesona Cloepatra', 'Habiburrahman El Shirazy', 'Republika, Jakarta', '111 Halaman'),
(7, 'sang.jpg', 'Sang Pemimpi', 'Andrea Hirata', 'PT. Bentang Pustaka', '292 Halaman'),
(8, 'surat.jpg', 'Surat Kecil Untuk Tuhan', 'Agnes Davonar', 'Inandra Published', '239 Halaman'),
(9, 'rindu.jpg', 'Rindu', 'Darwis Tere Liye', 'Republica', '444 Halaman'),
(10, '5 CM.jpg', '5 CM', 'Dhonny Dhirgantoro', 'PT. Grasindo, Yogyakarta', '381 Halaman');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` char(100) DEFAULT NULL,
  `password` char(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(5, 'rifki', '$2y$10$G67adbneuHp63nN9m.me8.aL5KA3cz7VQjv8gDDwZ/RaDEgdx0wru');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
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
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
