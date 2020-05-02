-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 02 Bulan Mei 2020 pada 09.53
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pegawai`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data`
--

CREATE TABLE `data` (
  `nip` int(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jk` varchar(12) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` int(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pangkat` varchar(50) NOT NULL,
  `golongan` varchar(50) NOT NULL,
  `no_req` int(20) NOT NULL,
  `bank` varchar(50) NOT NULL,
  `gaji` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data`
--

INSERT INTO `data` (`nip`, `nama`, `jk`, `alamat`, `no_hp`, `email`, `pangkat`, `golongan`, `no_req`, `bank`, `gaji`) VALUES
(1, ' Y=^* =* =*', ' L~+~+^ J~^~', 'Tegal', 83456723, ' .=^*.=*.=*@-~*_.@=-', 'Leader', 'III', 10768299, ' B~+) BRI', 12),
(123, ' A+]=+', ' L~+~+^ J~^~', '\r\nJ~]*!~{~+^', 123, ' ~+]=+@-~*_.@=-', 'Office', 'II', 1413, ' R~).~]', 13);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`nip`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
