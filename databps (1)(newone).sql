-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2021 at 03:04 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
(161, 'SIKAMPAI HOTEL', 'VHTS', ' JANUARI', 'Bulanan', '', 'Agus Sarjono', '', ''),
(162, 'Andalas Permai', 'VHTS', ' JANUARI', 'Bulanan', '', 'Agus Sarjono', '', ''),
(163, 'Kurnia Perdana', 'VHTS', ' JANUARI', 'Bulanan', '', 'Agus Sarjono', '', ''),
(164, 'ASOKA LUXURY HOTEL', 'VHTS', ' JANUARI', 'Bulanan', '', 'Alberto M', '', ''),
(165, 'RUMAH INAP W DAN D MAKMUR', 'VHTS', ' JANUARI', 'Bulanan', '', 'Alberto M', '', ''),
(166, 'NARITA WISMA', 'VHTS', ' JANUARI', 'Bulanan', '', 'Anggi', '', ''),
(167, 'OMAH AKAS', 'VHTS', ' JANUARI', 'Bulanan', '', 'Anggi', '', ''),
(168, 'BAMBOE IIN 2', 'VHTS', ' JANUARI', 'Bulanan', '', 'Anggi', '', ''),
(169, '24 GUEST HOUSE DIAN AGUSTIAN', 'VHTS', ' JANUARI', 'Bulanan', '', 'Anne', '', ''),
(170, 'FLIP FLOP', 'VHTS', ' JANUARI', 'Bulanan', '', 'Anne', '', ''),
(171, 'SWISS BELHOTEL', 'VHTS', ' JANUARI', 'Bulanan', '', 'Aprilia PS', '', ''),
(172, 'KURNIA DUA HOTEL', 'VHTS', ' JANUARI', 'Bulanan', '', 'Aprilia PS', '', ''),
(173, 'EMERSIA HOTEL', 'VHTS', ' JANUARI', 'Bulanan', '', 'Bagus', '', ''),
(174, 'BUKIT MAS COTTAGE', 'VHTS', ' JANUARI', 'Bulanan', '', 'Bagus', '', ''),
(175, 'WISATA PUNCAK MAS', 'VHTS', ' JANUARI', 'Bulanan', '', 'Bagus', '', ''),
(176, 'BANDAR LAMPUNG WISMA', 'VHTS', ' JANUARI', 'Bulanan', '', 'Basuki', '', ''),
(177, 'Pelangi Residen', 'VHTS', ' JANUARI', 'Bulanan', '', 'Basuki', '', ''),
(178, ' GRAND PRABA HOTEL', 'VHTS', 'JANUARI', 'Bulanan', '', 'Edy K', '', ''),
(179, 'OYO WISMA MULIA', 'VHTS', ' JANUARI', 'Bulanan', '', 'Edy K', '', ''),
(180, 'BIMO HOME STAY', 'VHTS', ' JANUARI', 'Bulanan', '', 'Edy K', '', ''),
(181, 'Rumah Kopi', 'VHTS', ' JANUARI', 'Bulanan', '', 'Edy K', '', ''),
(182, 'LAMPUNG INN HOTEL', 'VHTS', ' JANUARI', 'Bulanan', '', 'Erwan', '', ''),
(183, 'NUSANTARA HOTEL SYARIAH', 'VHTS', ' JANUARI', 'Bulanan', '', 'Erwan', '', ''),
(184, 'B.JAYA 2 PENGINAPAN', 'VHTS', ' JANUARI', 'Bulanan', '', 'Fahroni', '', ''),
(185, 'DIVKA PENGINAPAN RESIDEN', 'VHTS', ' JANUARI', 'Bulanan', '', 'Fahroni', '', ''),
(186, 'YUNNA HOTEL', 'VHTS', ' JANUARI', 'Bulanan', '', 'Imam T', '', ''),
(187, 'PACIFIC HOTEL', 'VHTS', ' JANUARI', 'Bulanan', '', 'Imam T', '', ''),
(188, 'GOLDEN TULIP SPRINGHIL', 'VHTS', ' JANUARI', 'Bulanan', '', 'Imam T', '', ''),
(189, 'WHIZ PRIME LAMPUNG HOTEL', 'VHTS', ' JANUARI', 'Bulanan', '', 'Indra K', '', ''),
(190, 'BATIQA HOTEL LAMPUNG ', 'VHTS', ' JANUARI', 'Bulanan', '', 'Indra K', '', ''),
(191, 'POP HOTEL', 'VHTS', ' JANUARI', 'Bulanan', '', 'Indra K', '', ''),
(192, 'HOTEL KURAYA', 'VHTS', ' JANUARI', 'Bulanan', '', 'Indra K', '', ''),
(193, 'AMALIA HOTEL', 'VHTS', ' JANUARI', 'Bulanan', '', 'Kaisar', '', ''),
(194, 'HORISON HOTEL', 'VHTS', ' JANUARI', 'Bulanan', '', 'Kaisar', '', ''),
(195, 'RADISSON LAMPUNG HOTEL', 'VHTS', ' JANUARI', 'Bulanan', '', 'Kaisar', '', ''),
(196, 'DEGREEN HOTEL', 'VHTS', ' JANUARI', 'Bulanan', '', 'Sari Citra', '', ''),
(197, 'PALAPA  PONDOK PENGINAPAN', 'VHTS', ' JANUARI', 'Bulanan', '', 'Sari Citra', '', ''),
(198, 'SAHID BANDAR LAMPUNG HOTEL', 'VHTS', ' JANUARI', 'Bulanan', '', 'Sobirin', '', ''),
(199, 'RAHMAT HOTEL', 'VHTS', ' JANUARI', 'Bulanan', '', 'Sobirin', '', ''),
(200, 'HOTEL SWADEX', 'VHTS', ' JANUARI', 'Bulanan', '', 'Sobirin', '', ''),
(201, 'GRAND CITIHUB HOTEL', 'VHTS', ' JANUARI', 'Bulanan', '', 'Sri Susi', '', ''),
(202, 'TORRO GUEST HOUSE', 'VHTS', ' JANUARI', 'Bulanan', '', 'Sri Susi', '', ''),
(203, 'NOVOTEL HOTEL', 'VHTS', ' JANUARI', 'Bulanan', '', 'Tri Aprilia', '', ''),
(204, 'MARCOPOLO  HOTEL', 'VHTS', ' JANUARI', 'Bulanan', '', 'Tri Aprilia', '', ''),
(205, 'SHERATON LAMPUNG HOTEL', 'VHTS', ' JANUARI', 'Bulanan', '', 'Tri Aprilia', '', ''),
(206, 'ANUGRAH EXPRESS HOTEL', 'VHTS', ' JANUARI', 'Bulanan', '', 'Tri Aprilia', '', ''),
(207, 'ARINAS HOTEL', 'VHTS', ' JANUARI', 'Bulanan', '', 'Tri Aprilia', '', ''),
(208, 'ARNES CENTRAL HOTEL', 'VHTS', ' JANUARI', 'Bulanan', '', 'Tri Aprilia', '', ''),
(209, 'GRAND ANUGERAH  HOTEL', 'VHTS', ' JANUARI', 'Bulanan', '', 'Tri Aprilia', '', ''),
(210, 'GUNUNG SARI PENGINAPAN LOSMEN', 'VHTS', ' JANUARI', 'Bulanan', '', 'Ujang', '', ''),
(211, 'SITI HABIBAH PENGINAPAN', 'VHTS', ' JANUARI', 'Bulanan', '', 'Ujang', '', ''),
(212, 'GATAM WISMA', 'VHTS', ' JANUARI', 'Bulanan', '', 'Ujang', '', ''),
(213, 'RENNY SIMON LOSMEN', 'VHTS', ' JANUARI', 'Bulanan', '', 'Ujang', '', ''),
(214, 'BUKIT RANDU HOTEL', 'VHTS', ' JANUARI', 'Bulanan', '', 'Ujang', '', ''),
(215, 'ASTON HOTEL', 'VHTS', ' JANUARI', 'Bulanan', '', 'Imam T', '', ''),
(216, 'JAMILA', 'HK-5', ' JANUARI', 'Bulanan', '', 'Erwan', '', ''),
(217, 'TURMAN', 'HK-5', ' JANUARI', 'Bulanan', '', 'Bagus', '', ''),
(218, 'AKIL GUNAWAN', 'HK-5', ' JANUARI', 'Bulanan', '', 'Bagus', '', ''),
(219, 'HENDRI KUSUMA / YENI', 'HK-5', ' JANUARI', 'Bulanan', '', 'Bagus', '', ''),
(220, 'EDI', 'HK-5', ' JANUARI', 'Bulanan', '', 'Bagus', '', ''),
(221, 'ALESIUS BUNAWAN', 'HK-5', ' JANUARI', 'Bulanan', '', 'Bagus', '', ''),
(222, 'ROBBY RUBYANTO', 'HK-5', ' JANUARI', 'Bulanan', '', 'Imam T', '', ''),
(223, 'TEDY', 'HK-5', ' JANUARI', 'Bulanan', '', 'Imam T', '', ''),
(224, 'TEDRY', 'HK-5', ' JANUARI', 'Bulanan', '', 'Indra K', '', ''),
(225, 'REFLI ERFIN', 'HK-5', ' JANUARI', 'Bulanan', '', 'Indra K', '', ''),
(226, 'MEILIANA', 'HK-5', ' JANUARI', 'Bulanan', '', 'Kaisar', '', ''),
(227, 'ALI DUKI', 'HK-5', ' JANUARI', 'Bulanan', '', 'Kaisar', '', ''),
(228, 'HAMID ALI', 'HK-5', ' JANUARI', 'Bulanan', '', 'Kaisar', '', ''),
(229, 'KARIM GUSANI', 'HK-5', ' JANUARI', 'Bulanan', '', 'Ujang', '', ''),
(230, 'IRWANSYAH', 'HK-5', ' JANUARI', 'Bulanan', '', 'Ujang', '', ''),
(231, 'MARUAP NAPITUPULU NY./ ELFRIDA PANJAITAN', 'HK-5', ' JANUARI', 'Bulanan', '', 'Ujang', '', ''),
(232, 'A SUSANTO', 'HK-5', ' JANUARI', 'Bulanan', '', 'Ujang', '', ''),
(233, 'M JAMARIL AKBAR', 'HK-5', ' JANUARI', 'Bulanan', '', 'Ujang', '', ''),
(234, 'NAZARUDDIN ALWI', 'HK-5', ' JANUARI', 'Bulanan', '', 'A Riadi', '', ''),
(235, 'RIZAL ENDI', 'HK-5', ' JANUARI', 'Bulanan', '', 'Agus Sarjono', '', ''),
(236, 'BUSTAM HADORI', 'HK-5', ' JANUARI', 'Bulanan', '', 'Edy K', '', ''),
(237, 'DEDI RINDAS', 'HK-5', ' JANUARI', 'Bulanan', '', 'Edy K', '', ''),
(238, 'RIYAN HIDAYAT', 'HK-4', ' JANUARI', 'Bulanan', '', 'Imam T', '', ''),
(239, 'BASRI', 'HK-4', ' JANUARI', 'Bulanan', '', 'Imam T', '', ''),
(240, 'FITRIAH', 'HK-4', ' JANUARI', 'Bulanan', '', 'Imam T', '', ''),
(241, 'PULUNG', 'HK-4', ' JANUARI', 'Bulanan', '', 'Imam T', '', ''),
(242, 'DEDI', 'HK-4', ' JANUARI', 'Bulanan', '', 'Imam T', '', ''),
(243, 'ASMIN', 'HK-4', ' JANUARI', 'Bulanan', '', 'Imam T', '', ''),
(244, 'UJANG CHOLIKIN', 'HK-4', ' JANUARI', 'Bulanan', '', 'Imam T', '', ''),
(245, 'SILVAN', 'HK-4', ' JANUARI', 'Bulanan', '', 'Nanang', '', ''),
(246, 'PATUAN', 'HK-4', ' JANUARI', 'Bulanan', '', 'Nanang', '', ''),
(247, 'EZZA', 'HK-4', ' JANUARI', 'Bulanan', '', 'Nanang', '', ''),
(248, 'YOAN', 'HK-4', ' JANUARI', 'Bulanan', '', 'Nanang', '', ''),
(249, 'LIECHING', 'HK-4', ' JANUARI', 'Bulanan', '', 'Ujang', '', ''),
(250, 'NONO. W', 'HK-4', ' JANUARI', 'Bulanan', '', 'Ujang', '', ''),
(251, 'MARWAN M.A', 'HK-4', ' JANUARI', 'Bulanan', '', 'Ujang', '', ''),
(252, 'ADENAN HASYIM', 'HK-4', ' JANUARI', 'Bulanan', '', 'Ujang', '', ''),
(253, 'HANAFI', 'HK-4', ' JANUARI', 'Bulanan', '', 'Ujang', '', ''),
(254, 'SARYANI', 'HK-4', ' JANUARI', 'Bulanan', '', 'Ujang', '', ''),
(255, 'RAHMAT A', 'HK-4', ' JANUARI', 'Bulanan', '', 'Edy K', '', ''),
(256, 'ENDRIK', 'HK-4', ' JANUARI', 'Bulanan', '', 'Edy K', '', ''),
(257, 'NURYUSUF', 'HK-4', ' JANUARI', 'Bulanan', '', 'Edy K', '', ''),
(258, 'ROZALI', 'HK-4', ' JANUARI', 'Bulanan', '', 'Edy K', '', ''),
(259, 'REJEKI', 'HK-4', ' JANUARI', 'Bulanan', '', 'Indra K', '', ''),
(260, 'KULSUM', 'HK-4', ' JANUARI', 'Bulanan', '', 'Indra K', '', ''),
(261, 'RAMLI G.S', 'HK-4', ' JANUARI', 'Bulanan', '', 'Indra K', '', ''),
(262, 'HUSNA', 'HK-4', ' JANUARI', 'Bulanan', '', 'Indra K', '', ''),
(263, 'EKA', 'HK-4', ' JANUARI', 'Bulanan', '', 'Indra K', '', ''),
(264, 'ATIN', 'HK-4', ' JANUARI', 'Bulanan', '', 'Indra K', '', ''),
(265, 'TIO', 'HK-4', ' JANUARI', 'Bulanan', '', 'Indra K', '', ''),
(266, 'FEBRI', 'HK-4', ' JANUARI', 'Bulanan', '', 'Indra K', '', ''),
(267, 'ASIA', 'HK-4', ' JANUARI', 'Bulanan', '', 'Indra K', '', ''),
(268, 'HERI CHANDRA', 'HK-4', ' JANUARI', 'Bulanan', '', 'Indra K', '', ''),
(269, 'LINA', 'HK-4', ' JANUARI', 'Bulanan', '', 'Indra K', '', ''),
(270, 'YULI', 'HK-4', ' JANUARI', 'Bulanan', '', 'Indra K', '', ''),
(271, 'NELI', 'HK-4', ' JANUARI', 'Bulanan', '', 'Indra K', '', ''),
(272, 'ANGGUN', 'HK-4', ' JANUARI', 'Bulanan', '', 'Indra K', '', ''),
(273, 'EKO WIBOWO', 'HK-4', ' JANUARI', 'Bulanan', '', 'Indra K', '', ''),
(274, 'ELZA', 'HK-4', ' JANUARI', 'Bulanan', '', 'Indra K', '', ''),
(275, 'YETI', 'HK-4', ' JANUARI', 'Bulanan', '', 'Indra K', '', ''),
(276, 'TAUFIK HIDAYAT', 'HK-4', ' JANUARI', 'Bulanan', '', 'Kaisar', '', ''),
(277, 'ERNIS', 'HK-4', ' JANUARI', 'Bulanan', '', 'Kaisar', '', ''),
(278, 'MUTIA', 'HK-4', ' JANUARI', 'Bulanan', '', 'Kaisar', '', ''),
(279, 'DWI', 'HK-4', ' JANUARI', 'Bulanan', '', 'Kaisar', '', ''),
(280, 'PINDO', 'HK-4', ' JANUARI', 'Bulanan', '', 'Kaisar', '', ''),
(281, 'REGINA', 'HK-4', ' JANUARI', 'Bulanan', '', 'Kaisar', '', ''),
(282, 'RONI', 'HK-4', ' JANUARI', 'Bulanan', '', 'Kaisar', '', ''),
(283, 'RAHMAD', 'HK-4', ' JANUARI', 'Bulanan', '', 'Kaisar', '', ''),
(284, 'SUCIPTA', 'HK-4', ' JANUARI', 'Bulanan', '', 'Erwan', '', ''),
(285, 'SARWONO', 'HK-4', ' JANUARI', 'Bulanan', '', 'Erwan', '', ''),
(286, 'EFENDI MANULANG', 'HK-4', ' JANUARI', 'Bulanan', '', 'Erwan', '', ''),
(287, 'JOKO TRIYANTO', 'HK-4', ' JANUARI', 'Bulanan', '', 'Erwan', '', ''),
(288, 'ANDI', 'HK-4', ' JANUARI', 'Bulanan', '', 'Fahroni', '', ''),
(289, 'SAHWAN', 'HK-4', ' JANUARI', 'Bulanan', '', 'Fahroni', '', ''),
(290, 'AJI', 'HK-4', ' JANUARI', 'Bulanan', '', 'Fahroni', '', ''),
(291, 'SILABON', 'HK-4', ' JANUARI', 'Bulanan', '', 'Fahroni', '', ''),
(292, 'ARBAIN', 'HK-4', ' JANUARI', 'Bulanan', '', 'Fahroni', '', ''),
(293, 'LASIS', 'HK-4', ' JANUARI', 'Bulanan', '', 'Fahroni', '', ''),
(294, 'SOFIAN SALEH', 'HK-4', ' JANUARI', 'Bulanan', '', 'Agus Sarjono', '', ''),
(295, 'SLAMET/RISWANDI', 'HK-4', ' JANUARI', 'Bulanan', '', 'Basuki', '', ''),
(296, 'HARYADI', 'HK-4', ' JANUARI', 'Bulanan', '', 'Basuki', '', ''),
(297, 'LUTFI', 'HK-4', ' JANUARI', 'Bulanan', '', 'Sobirin', '', ''),
(298, 'Toko Salabintana', 'HPB', ' JANUARI', 'Bulanan', '', 'Kaisar', '', ''),
(299, 'PT Sinar Lampung', 'HPB', ' JANUARI', 'Bulanan', '', 'Kaisar', '', ''),
(300, 'Central Arloji (Hi.erwan saibu)', 'HPB', ' JANUARI', 'Bulanan', '', 'Kaisar', '', ''),
(301, 'Toko Uncu', 'HPB', ' JANUARI', 'Bulanan', '', 'Kaisar', '', ''),
(302, 'Toko Tasik Jaya (Hi Dedy Juna)', 'HPB', ' JANUARI', 'Bulanan', '', 'Kaisar', '', ''),
(303, 'KUD Mina Jaya', 'HPB', ' JANUARI', 'Bulanan', '', 'Sri Susi', '', ''),
(304, 'Toko Aluminium Karya Murni', 'HPB', ' JANUARI', 'Bulanan', '', 'Sri Susi', '', ''),
(305, 'Toko Besi Nusantara', 'HPB', ' JANUARI', 'Bulanan', '', 'A Riadi', '', ''),
(306, 'Istana Diesel', 'HPB', ' JANUARI', 'Bulanan', '', 'A Riadi', '', ''),
(307, 'Perdagangan Jengkol Dan Petai', 'HPB', ' JANUARI', 'Bulanan', '', 'A Riadi', '', ''),
(308, 'AR Family', 'HPB', ' JANUARI', 'Bulanan', '', 'Erwan', '', ''),
(309, 'Rajawali Elektronik', 'HPB', ' JANUARI', 'Bulanan', '', 'Erwan', '', ''),
(310, 'PT Trakindo Utama', 'HPB', ' JANUARI', 'Bulanan', '', 'Erwan', '', ''),
(311, 'Antara Saudara, CV', 'HPB', ' JANUARI', 'Bulanan', '', 'Imam T', '', ''),
(312, 'Cik Leni', 'HPB', ' JANUARI', 'Bulanan', '', 'Imam T', '', ''),
(313, 'PT Prasidha Aneka Niaga', 'HPB', ' JANUARI', 'Bulanan', '', 'Imam T', '', ''),
(314, 'PT Semen Baturaja', 'HPB', ' JANUARI', 'Bulanan', '', 'Imam T', '', ''),
(315, 'Tri Jaya', 'HPB', ' JANUARI', 'Bulanan', '', 'Imam T', '', ''),
(316, 'Usaha Perdagangan Kerajinan Kerang', 'HPB', ' JANUARI', 'Bulanan', '', 'Sobirin', '', ''),
(317, 'Agen Makan (Purwanto)', 'HPB', ' JANUARI', 'Bulanan', '', 'Sobirin', '', ''),
(318, 'Optik Modern', 'HPB', ' JANUARI', 'Bulanan', '', 'Sari Citra', '', ''),
(319, 'Sentra Computer (Robby)', 'HPB', ' JANUARI', 'Bulanan', '', 'Sari Citra', '', ''),
(320, 'GRIYACOM', 'HPB', ' JANUARI', 'Bulanan', '', 'Sari Citra', '', ''),
(321, 'Toko Tas Jihan (Hasiati)', 'HPB', ' JANUARI', 'Bulanan', '', 'Aprilia PS', '', ''),
(322, 'Toko Tas Piayu', 'HPB', ' JANUARI', 'Bulanan', '', 'Aprilia PS', '', ''),
(323, 'Toko Mainan \'Herni Jaya\'', 'HPB', ' JANUARI', 'Bulanan', '', 'Aprilia PS', '', ''),
(324, 'PT Rajawali Hiyoto', 'HPB', ' JANUARI', 'Bulanan', '', 'Ujang', '', ''),
(325, 'Rejeki Agung', 'HPB', ' JANUARI', 'Bulanan', '', 'Ujang', '', ''),
(326, 'Auto 2000 Raden Intan', 'HPB', ' JANUARI', 'Bulanan', '', 'Ujang', '', ''),
(327, 'PT Surya Serba Mulia', 'HPB', ' JANUARI', 'Bulanan', '', 'Ujang', '', ''),
(328, 'Berlian Utama Motor, PT', 'HPB', ' JANUARI', 'Bulanan', '', 'Ujang', '', ''),
(329, 'CV Cekatan', 'HPB', ' JANUARI', 'Bulanan', '', 'Ujang', '', ''),
(330, 'PT Enseval Putra Mega Tradin', 'HPB', ' JANUARI', 'Bulanan', '', 'Edy K', '', ''),
(331, 'Harapan Nusa Mandiri', 'HPB', ' JANUARI', 'Bulanan', '', 'Edy K', '', ''),
(332, 'PT Krisbow Indonesia', 'HPB', ' JANUARI', 'Bulanan', '', 'Edy K', '', ''),
(333, 'Jual Beli Palawa (Adi)', 'HPB', ' JANUARI', 'Bulanan', '', 'Edy K', '', ''),
(334, 'CV Panca Bahagia', 'HPB', ' JANUARI', 'Bulanan', '', 'Edy K', '', ''),
(335, 'PT Parid Padang Global', 'HPB', ' JANUARI', 'Bulanan', '', 'Edy K', '', ''),
(336, 'Toko Balai Buku (Fauziah)', 'HPB', ' JANUARI', 'Bulanan', '', 'Edy K', '', ''),
(337, 'PT Budi Berlian', 'HPB', ' JANUARI', 'Bulanan', '', 'Indra K', '', ''),
(338, 'Cipta lestari tehnik', 'HPB', ' JANUARI', 'Bulanan', '', 'Indra K', '', ''),
(339, 'One Box Apple', 'HPB', ' JANUARI', 'Bulanan', '', 'Indra K', '', ''),
(340, 'Jaco Tv (PT Indosehat Sempurn)', 'HPB', ' JANUARI', 'Bulanan', '', 'Indra K', '', ''),
(341, 'Distributor Buah Lilik', 'HPB', ' JANUARI', 'Bulanan', '', 'Indra K', '', ''),
(342, 'Mars Audio Toko Rachmatsyam', 'HPB', ' JANUARI', 'Bulanan', '', 'Indra K', '', ''),
(343, 'UD. VIA Mandiri', 'HPB', ' JANUARI', 'Bulanan', '', 'A Maradona', '', ''),
(344, 'CV Pena Mas ', 'HPB', ' JANUARI', 'Bulanan', '', 'A Maradona', '', ''),
(345, 'Tiga Putri (Puspa Riyadi)', 'HPB', ' JANUARI', 'Bulanan', '', 'Bagus', '', '');

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
('HK-4'),
('HK-5'),
('HPB'),
('VHTS');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `target` varchar(255) NOT NULL,
  `realisasi` varchar(255) NOT NULL,
  `nama_petugas` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`target`, `realisasi`, `nama_petugas`, `id`) VALUES
('5', '0', 'Agus Sarjono', 131),
('2', '0', 'Alberto M', 132),
('3', '0', 'Anggi', 133),
('2', '0', 'Anne', 134),
('5', '0', 'Aprilia PS', 135),
('9', '0', 'Bagus', 136),
('17', '0', 'Edy K', 138),
('10', '0', 'Erwan', 139),
('8', '0', 'Fahroni', 140),
('18', '0', 'Imam T', 141),
('29', '0', 'Indra K', 142),
('19', '0', 'Kaisar', 143),
('5', '0', 'Sari Citra', 144),
('6', '0', 'Sobirin', 145),
('4', '0', 'Sri Susi', 146),
('7', '0', 'Tri Aprilia', 147),
('22', '0', 'Ujang', 148),
('4', '0', 'A Riadi', 149),
('4', '0', 'Nanang', 150),
('2', '0', 'Basuki', 151),
('2', '0', 'A Maradona', 152);

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
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=346;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
