-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Apr 2024 pada 11.01
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `staff_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `Firstname` varchar(300) NOT NULL,
  `NIS` int(30) NOT NULL,
  `Gender` varchar(30) NOT NULL,
  `NISN` varchar(30) NOT NULL,
  `Tempatlahir` varchar(30) NOT NULL,
  `Alamat` varchar(300) NOT NULL,
  `Tanggallahir` date NOT NULL,
  `Online` varchar(300) NOT NULL,
  `Picname` varchar(1000) NOT NULL,
  `Time` bigint(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `Firstname`, `NIS`, `Gender`, `NISN`, `Tempatlahir`, `Alamat`, `Tanggallahir`, `Online`, `Picname`, `Time`) VALUES
(48, 'Zainal Mutaqin', 2225001, 'Laki-laki', '200123', 'Cianjur', 'Perumahan Taman Yasmib, Blok a2 no.12', '2007-01-17', 'Offline', 'zainal.jfif', 0),
(49, 'Jessica Milla', 2225002, 'Perempuan', '200765', 'Jakarta', 'Pantai Indah Kapuk no.13', '2007-06-13', 'Offline', 'jessica.png', 0),
(50, 'Adinda Berlina', 2225003, 'Perempuan', '200789', 'Tasikmalaya', 'Jl. Cilendek Raya no 911', '2007-02-01', 'Offline', 'dinda.jfif', 0),
(51, 'Son Heung Min', 2225004, 'Laki-laki', '200654', 'Seoul', 'Jl.dr semeru nomor 12', '2007-05-07', 'Offline', 'son heung min.jpg', 0),
(52, 'Siska Amalia', 2225005, 'Perempuan', '200987', 'Bandung', 'Jalan Raya Semplak no 7 ', '2024-05-20', 'Offline', 'siska.jpg', 0),
(53, 'Lucas ', 2225006, 'Laki-laki', '200965', 'Cimahi ', 'Jalan Raya Bantar Kambing no 19', '2024-07-17', 'Offline', 'lucas.jpg', 0),
(54, 'kim jong un', 2225007, 'Laki-laki', '200765', 'Korea Utara', 'Bukit Cimanggu City no 5', '2024-10-10', 'Offline', 'kim.jfif', 0),
(55, 'Gibran Pranowo', 2225008, 'Perempuan', '200463', 'Solo', 'Perumahan Taman Cimanggu nomor', '2007-10-23', 'Offline', 'siska.jpg', 0),
(58, 'Lionel Akhdan', 2225009, 'Laki-laki', '200543', 'Bogor', 'Jalan Bogor', '2007-02-02', '', 'kim.jfif', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
