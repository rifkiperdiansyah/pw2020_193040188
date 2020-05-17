-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Bulan Mei 2020 pada 08.31
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
-- Database: `pw_193040188`
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`, `gambar`) VALUES
(1, 'Sandhika Galih', '043040023', 'sandhikagalih@unpas.ac.id', 'Teknik Informatika', 'sandhika.jpg'),
(2, 'Sugih Mohammad Galih', '193040180', '193040180@mail.unpas.ac.id', 'Teknik Informatika', 'sugih.jpg'),
(3, 'Mohammad Sugih', '193391121', 'mohsugih@gmail.com', 'Teknik Mesin', 'mohsugih.jpeg'),
(4, 'Rifki Perdiansyah', '193040188', 'rifky@mail.unpas.ac.id', 'Teknik Industri', 'rifky.jpeg'),
(5, 'Cahyadi Ivansyah', '193040123', 'ivan@mail.unpas.ac.id', 'Teknik Mesin', 'ivan.jpeg'),
(6, 'Claudio', '193040179', 'claudio@mail.unpas.ac.id', 'Teknik Lingkungan', 'claudio.jpeg'),
(7, 'Dio Geovani', '193040124', 'dio@mail.unpas.ac.id', 'Perencanaan Wilayah dan Kota', 'dio.jpeg'),
(8, 'Hermawan Arby', '193040161', 'hermawan@mail.unpas.ac.id', 'Teknik Informatika', 'arby.jpeg'),
(9, 'Aldi Ageng', '193040054', 'aldi@mail.unpas.ac.id', 'Teknik Informatika', 'aldi.jpeg'),
(10, 'Alip F', '193040158', 'alip@mail.unpas.ac.id', 'Teknik Informatika', 'alip.jpeg'),
(11, 'sandika.', '2309432', 'sand@gmail', 'informat', '5ec0d896ea459.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(3, 'rifki', '$2y$10$wsX/tZtz9BH6hl8AxM7Zseu7ZfWm6JfZPLTX/6iQ6d1m.T.gMN9Fe');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
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
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
