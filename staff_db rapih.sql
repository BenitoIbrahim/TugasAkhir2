-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Apr 2024 pada 11.14
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
-- Struktur dari tabel `administrator`
--

CREATE TABLE `administrator` (
  `id` int(11) NOT NULL,
  `Firstname` varchar(30) NOT NULL,
  `NIS` int(30) NOT NULL,
  `Mtitle` varchar(30) NOT NULL,
  `Phone` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `administrator`
--

INSERT INTO `administrator` (`id`, `Firstname`, `NIS`, `Mtitle`, `Phone`, `Password`, `Email`) VALUES
(1, 'Patrick', 0, 'Mr', '265999107724', 'admin', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `Title` varchar(300) NOT NULL,
  `Name` varchar(1000) NOT NULL,
  `Type` varchar(30) NOT NULL,
  `Size` decimal(10,0) DEFAULT NULL,
  `content` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `files`
--

INSERT INTO `files` (`id`, `Title`, `Name`, `Type`, `Size`, `content`) VALUES
(1, 'Staff', 'staff.csv', 'application/vnd.ms-excel', 76, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `inorg`
--

CREATE TABLE `inorg` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `Phone` varchar(300) NOT NULL,
  `email` varchar(100) NOT NULL,
  `website` varchar(300) NOT NULL,
  `year` varchar(10) NOT NULL,
  `pname` varchar(1000) NOT NULL,
  `type` varchar(30) NOT NULL,
  `size` decimal(10,0) NOT NULL,
  `content` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `profilepictures`
--

CREATE TABLE `profilepictures` (
  `id` int(11) NOT NULL,
  `ids` varchar(30) NOT NULL,
  `Category` varchar(30) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `type` varchar(30) NOT NULL,
  `Size` decimal(10,0) NOT NULL,
  `content` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(2, 'bbb', 10, 'Laki-laki', 'bb@gmail.com', 'bbb', 'bb', '2024-04-03', 'Offline', 'staff-id-card (1).png', 0),
(3, 'ccc', 0, 'Laki-laki', 'cc', 'ccc', 'cc@gmail.com', '0000-00-00', 'Offline', 'WhatsApp Image 2024-03-25 at 13.39.51.jpeg', 0),
(4, 'ddd', 0, 'Perempuan', 'ddd', 'ddd', 'ddd@gmail.com', '0000-00-00', 'Offline', 'original-5d1f73a2010ec.jpeg', 0),
(5, 'eee', 0, 'Laki-laki', 'ee', 'ee', 'eee@gmail.com', '0000-00-00', 'Offline', 'Permintaan magang di bidang IT.eml', 0),
(7, 'test1', 93201, 'Perempuan', 'ppp@gmail.com', 'ppp', 'ppp', '0000-00-00', 'Offline', 'boy.jfif', 0),
(8, 'dfs', 21, 'Perempuan', 'weq', '321', '21', '0000-00-00', 'Offline', '', 0),
(9, 'lala', 123, 'Laki-laki', 'as', 'asa', 'sa', '0000-00-00', 'Offline', '', 0),
(10, '123', 123, 'Laki-laki', '123', '213', '132', '0000-00-00', 'Offline', '', 0),
(11, 'asd', 123, 'Laki-laki', '423', '432', '32', '0000-00-00', 'Offline', 'WhatsApp Image 2024-02-22 at 17.00.12.jpeg', 0),
(12, '21', 132, 'Laki-laki', '312', '123', '321', '0000-00-00', 'Offline', 'user.png', 0),
(13, 'mahfud', 312, 'Laki-laki', '312', '312', '312', '2024-04-06', 'Offline', 'staff-id-card (1).png', 0),
(14, 'pandu', 123, 'L', '123', 'bogor', 'pomad', '0000-00-00', '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `inorg`
--
ALTER TABLE `inorg`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `profilepictures`
--
ALTER TABLE `profilepictures`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `administrator`
--
ALTER TABLE `administrator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `inorg`
--
ALTER TABLE `inorg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `profilepictures`
--
ALTER TABLE `profilepictures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
