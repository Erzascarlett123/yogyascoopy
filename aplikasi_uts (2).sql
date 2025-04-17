-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2025 at 03:36 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aplikasi_uts`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username_admin` varchar(100) NOT NULL,
  `password_admin` varchar(100) NOT NULL,
  `nama_admin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username_admin`, `password_admin`, `nama_admin`) VALUES
(1, 'admin1', 'admin1', 'sayyidiz');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `nama_berita` varchar(255) NOT NULL,
  `keterangan_berita` text NOT NULL,
  `foto_berita` varchar(255) NOT NULL,
  `tanggal_update` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `nama_berita`, `keterangan_berita`, `foto_berita`, `tanggal_update`) VALUES
(1, 'BILED', '350.000', '20250417134451sprpt 9.jpg', '0000-00-00'),
(2, 'SHOCK BEKER', '150.000', '202504171345182025041517320420250413173932sprpt 3.webp', '0000-00-00'),
(5, 'VELG RTC', '450.000', '20250417134543dprpt 4.webp', '0000-00-00'),
(6, 'HANDEL REM HONDA ', '120.000', '2025041713460520250415173130sprpt 8.jpg', '0000-00-00'),
(7, 'SPION RTC SCOOPY', '120.000', '202504171346352025041517322320250413174004sprpt 2.webp', '0000-00-00'),
(8, 'SHOCK DEPAN', '270.000', '2025041713470820250413173945sprpt 5.webp', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(11) NOT NULL,
  `foto_galeri` varchar(255) NOT NULL,
  `nama_galeri` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `foto_galeri`, `nama_galeri`) VALUES
(1, '20250417134737logo ysoc 1.jpeg', 'FOTO BERSAMA CLUB YSOC'),
(2, '20250417134822berita1.webp', 'MERAYAKAN HARI ULTAH'),
(5, '2025041713484720230114052139download.jpeg', 'GOTONG ROYONG BERSAMA YSOC'),
(6, '20250417134923thiland style.jpg', 'KONTES THAILAND STYLE');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id_kegiatan` int(11) NOT NULL,
  `nama_kegiatan` varchar(100) NOT NULL,
  `keterangan_kegiatan` text NOT NULL,
  `foto_kegiatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id_kegiatan`, `nama_kegiatan`, `keterangan_kegiatan`, `foto_kegiatan`) VALUES
(7, 'BISMILAH', 'RAWRR', 'berita1.webp'),
(8, 'PAMERAN', 'KELUARAN BARU..', 'berita.webp'),
(9, 'SCOOPY 2', 'PRODUK KE 2', 'SCOOPY 2020.jpeg'),
(10, 'SCOOPY GENERASI PERTAMA ', 'SCOOPY PERTAMA', 'SCOOPY GENERASI PERTAMA.webp'),
(11, '', '', 'scoopy data base.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id_kontak` int(11) NOT NULL,
  `nama_kontak` varchar(59) NOT NULL,
  `email_kontak` varchar(50) NOT NULL,
  `pesan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id_kontak`, `nama_kontak`, `email_kontak`, `pesan`) VALUES
(1, 'sayyid', 'Sayyid@gmail.com', 'hhha'),
(2, 'sayyid', 'Sayyid@gmail.com', 'hhha'),
(3, 'WILDAN', 'Sayyid@gmail.com', 'jajjaja'),
(4, 'WILDAN', 'Sayyid@gmail.com', 'hahaha'),
(5, 'WILDAN', 'Sayyid@gmail.com', 'hahaha'),
(6, 'WILDAN', 'Sayyid@gmail.com', 'hahaha'),
(7, 'WILDAN', 'Sayyid@gmail.com', 'hahaha'),
(8, 'WILDAN', 'Sayyid@gmail.com', 'huhhuuu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
