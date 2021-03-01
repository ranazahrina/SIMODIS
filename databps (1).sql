-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2021 at 07:01 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `databps`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(128) CHARACTER SET latin1 NOT NULL,
  `email` varchar(128) CHARACTER SET latin1 NOT NULL,
  `password` varchar(256) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(3, 'Agatha', 'Agatha@gmail.com', '$2y$10$aVE1oqNfm.8TpoZaKBDXgejEh.E47Ft5VJ8u.yE7lUXPYzZlrUPlW'),
(5, 'Febiola', 'Febiola@gmail.com', '$2y$10$aRQe5EKFDC0Bs.7I.eMA2ODG3JRaJ2mfpjY6hgI.1nI3L1OP4lS9y');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(111) NOT NULL,
  `responden` varchar(50) NOT NULL,
  `jenis_survey` varchar(50) NOT NULL,
  `waktu_pelaksanaan` varchar(30) NOT NULL,
  `waktu_survey` varchar(30) NOT NULL,
  `dokumen_masuk` varchar(50) NOT NULL,
  `nama_petugas` varchar(30) NOT NULL,
  `target` varchar(255) NOT NULL,
  `realisasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `responden`, `jenis_survey`, `waktu_pelaksanaan`, `waktu_survey`, `dokumen_masuk`, `nama_petugas`, `target`, `realisasi`) VALUES
(1, 'Aston', 'VHTS', 'JANUARI', '3 BULAN SEKALI ', '12-01-2020', 'suep', '', ''),
(2, 'Horison', 'CTR', 'JANUARI', '3 BULAN SEKALI ', '12-02-2021', 'saipudin', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_survey`
--

CREATE TABLE `jenis_survey` (
  `jenis_survey` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_survey`
--

INSERT INTO `jenis_survey` (`jenis_survey`) VALUES
('CTR'),
('VHTS');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `nama_petugas` varchar(30) NOT NULL,
  `target` varchar(255) NOT NULL,
  `realisasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`nama_petugas`, `target`, `realisasi`) VALUES
('saipudin', '3', '1'),
('suep', '5', '3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nama_petugas` (`nama_petugas`),
  ADD KEY `jenis_survey` (`jenis_survey`);

--
-- Indexes for table `jenis_survey`
--
ALTER TABLE `jenis_survey`
  ADD PRIMARY KEY (`jenis_survey`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`nama_petugas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data`
--
ALTER TABLE `data`
  ADD CONSTRAINT `data_ibfk_3` FOREIGN KEY (`jenis_survey`) REFERENCES `jenis_survey` (`jenis_survey`),
  ADD CONSTRAINT `data_ibfk_4` FOREIGN KEY (`nama_petugas`) REFERENCES `petugas` (`nama_petugas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
