-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Bulan Mei 2024 pada 10.19
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siswa_db`
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
(1, 'Admin', 1, 'Mr', '265999107724', 'admin', 'admin@gmail.com'),
(2, 'sendi', 2, 'mr', '087378912', '123', 'sendi@gmail.com');

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
  `Nama_kepsek` varchar(300) NOT NULL,
  `Gelar` varchar(300) NOT NULL,
  `NIP` varchar(100) NOT NULL,
  `website` varchar(300) NOT NULL,
  `year` varchar(10) NOT NULL,
  `pname` varchar(1000) NOT NULL,
  `type` varchar(30) NOT NULL,
  `size` decimal(10,0) NOT NULL,
  `content` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `inorg`
--

INSERT INTO `inorg` (`id`, `Nama_kepsek`, `Gelar`, `NIP`, `website`, `year`, `pname`, `type`, `size`, `content`) VALUES
(0, 'Pandu Wicaksono', 'S. Tr. RPL, M. Si', '03032110311', '', '', 'signature (2).png', 'image/png', 23874, 0x7369676e6174757265202832292e706e67);

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
(48, 'Zainal Mutaqin', 2225001, 'Perempuan', '200123', 'Cianjur', 'Perumahan Taman Yasmib, Blok a2 no.12 belakang tukang bakso rudal pak eko samping tukang sayur', '2007-01-17', 'Offline', 'zainal.jfif', 0),
(49, 'Jessica Milla', 2225002, 'Perempuan', '200765', 'Jakarta', 'Pantai Indah Kapuk no.13', '2007-06-13', 'Offline', 'jessica.png', 0),
(50, 'Adinda Berlina', 2225003, 'Perempuan', '200789', 'Tasikmalaya', 'Jl. Cilendek Raya no 911', '2007-02-01', 'Offline', 'dinda.jfif', 0),
(51, 'Son Heung Min', 2225004, 'Laki-laki', '200654', 'Seoul', 'Jl.dr semeru nomor 12', '2007-05-07', 'Offline', 'son heung min.jpg', 0),
(52, 'Siska Amalia', 2225005, 'Perempuan', '200987', 'Bandung', 'Jalan Raya Semplak no 7 ', '2024-05-20', 'Offline', 'siska.jpg', 0),
(53, 'Lucas ', 2225006, 'Laki-laki', '200965', 'Cimahi ', 'Jalan Raya Bantar Kambing no 19', '2024-07-17', 'Offline', 'lucas.jpg', 0),
(54, 'kim min jae', 2225007, 'Laki-laki', '200765', 'Korea Utara', 'Bukit Cimanggu City no 5', '2024-10-10', 'Offline', 'kim.jfif', 0),
(55, 'Gibran Pranowo', 2225008, 'Perempuan', '200463', 'Solo', 'Perumahan Taman Cimanggu nomor', '2007-10-23', 'Offline', 'siska.jpg', 0),
(58, 'Lionel Akhdan', 2225009, 'Laki-laki', '200543', 'Bogor', 'Jalan Bogor', '2007-02-02', '', 'kim.jfif', 0),
(60, 'Monalisa', 2225010, 'Perempuan', '200321', 'Roma', 'Milan san german no.12a bayern leverloosen gapernah kalah dapet invicilbe trophy lebih bagus dari', '2004-02-29', 'Offline', 'mona.jfif', 0),
(61, 'Issac Tangis', 2225011, 'Laki-laki', '200645', 'London', 'London samping warteg harry kane', '2009-12-25', 'Offline', 'issac.jfif', 0),
(63, 'Pandu Wicaksono', 2225012, 'Laki-laki', '200123', 'Bogor', 'Pomad raya', '2003-02-20', '', 'waduh.jpg', 0),
(64, 'Eka Hanny', 2225012, 'Perempuan', '200754', 'Makassar', 'Makassar kanan dikit', '2024-05-13', 'Offline', 'galgadot.jpeg', 0),
(65, 'Joss', 2225013, 'Laki-laki', '200312', 'Brebes', 'Brebes ujung', '2002-02-02', '', 'galgadot.jpeg', 0),
(66, 'Ilham ', 23112, 'Laki-laki', '4324', 'Bogor', 'Bogor asri', '2012-10-10', '', '', 0),
(67, 'Ilham ', 23112, 'Laki-laki', '4324', 'Bogor', 'Bogor asri', '0000-00-00', '', '', 0),
(68, '0iu0', 87, 'Perempuan', '987', 'ih', 'uih', '2024-05-23', 'Offline', 'yamete.jpeg', 0),
(69, 'sensei', 112, 'Perempuan', '112', 'Osaka', 'pomad asri', '2003-02-02', '', '', 0);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `inorg`
--
ALTER TABLE `inorg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `profilepictures`
--
ALTER TABLE `profilepictures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
