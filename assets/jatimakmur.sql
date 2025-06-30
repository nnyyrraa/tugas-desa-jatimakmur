-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2022 at 06:07 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jatimakmur`
--

-- --------------------------------------------------------

--
-- Table structure for table `bpd`
--

CREATE TABLE `bpd` (
  `no_urut` int(3) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `jabatan` varchar(10) DEFAULT NULL,
  `alamat` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bpd`
--

INSERT INTO `bpd` (`no_urut`, `nama`, `jabatan`, `alamat`) VALUES
(1, 'I KETUT SUDARSANA ARUMBAWA', 'KETUA', 'BR. DINAS RAMUAN'),
(2, 'I KETUT LACA', 'WAKIL', 'BR. DINAS SEDEHING'),
(3, 'I GEDE AGUS SUASTAWAN', 'SEKRETARIS', 'BR. DINAS SEKARTAJI'),
(4, 'I WAYAN SUJANA', 'ANGGOTA', 'BR. DINAS TABUANAN'),
(5, 'I MADE PURNAYASA', 'ANGGOTA', 'BR. DINAS DLUNDUNGAN'),
(6, 'I KETUT SEWANTARA', 'ANGGOTA', 'BR. DINAS BUNGKIL'),
(7, 'I GEDE AGUS PERDANA KESUMA', 'ANGGOTA', 'BR. DINAS SEKARTAJI');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bpd`
--
ALTER TABLE `bpd`
  ADD PRIMARY KEY (`no_urut`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
