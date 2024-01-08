-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Nov 2023 pada 10.22
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datawebuts`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `nama_admin` varchar(20) NOT NULL,
  `email_admin` varchar(20) NOT NULL,
  `password_admin` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`nama_admin`, `email_admin`, `password_admin`) VALUES
('widhi ', 'widhi@gmail.com ', '1234 ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `ID_PRODUK` varchar(5) NOT NULL,
  `NAMA_PRODUK` varchar(20) NOT NULL,
  `VARIAN` varchar(20) NOT NULL,
  `STOK` int(11) NOT NULL,
  `HARGA` int(15) NOT NULL,
  `GAMBAR` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`ID_PRODUK`, `NAMA_PRODUK`, `VARIAN`, `STOK`, `HARGA`, `GAMBAR`) VALUES
('5', 'Kripik Pisang ijo ', 'Rumput laut', 0, 20000, 'produk1.jpg'),
('6', 'Kripik Pisang Kuning', 'Vanila', 0, 20000, 'produk3.jpg'),
('7', 'Kripik Pisang Coklat', 'Coklat', 0, 20000, 'produk2.jpg'),
('9', 'Kripik Pisang Coklat', 'straberry', 0, 20000, 'produk4.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_nama` varchar(20) NOT NULL,
  `user_password` varchar(20) NOT NULL,
  `user_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_nama`, `user_password`, `user_email`) VALUES
('aku', 'aku', 'aku@gmail.com'),
('user', 'user', 'user@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`nama_admin`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`ID_PRODUK`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_nama`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
