-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 08, 2021 at 05:05 PM
-- Server version: 5.1.73-community
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `praktikum_pw`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mahasiswa` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `tanggal_lahir` varchar(50) NOT NULL,
  `kota_lahir` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mahasiswa`, `nama`, `jenis_kelamin`, `tanggal_lahir`, `kota_lahir`, `alamat`) VALUES
(1, 'Fadhlan Yusuf F', 'Laki-laki', '2001-03-01', 'Belanda', 'Cibitung'),
(2, 'Dimas Dwi Putra', 'Laki-laki', '2001-02-01', 'Paris', 'Cikarang'),
(3, 'Arif Budiman', 'Laki-laki', '2000-01-01', 'Jakarta', 'Manado'),
(4, 'Azri Amrima Putra', 'Laki-laki', '1999-12-17', 'Bekasi', 'Mangun Jaya'),
(5, 'Reza Fathurrahman', 'Laki-laki', '2000-03-21', 'Jakarta', 'Bekasi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
