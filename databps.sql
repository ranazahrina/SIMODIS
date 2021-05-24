-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2021 at 03:56 PM
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
-- Table structure for table `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'evi1871autentikasi@gmail.com', NULL, '2021-03-06 23:01:49', 0),
(2, '::1', 'evi1871autentikasi@gmail.com', 1, '2021-03-06 23:10:38', 1),
(3, '::1', 'evi1871autentikasi@gmail.com', 1, '2021-03-06 23:29:38', 1),
(4, '::1', 'evi1871autentikasi@gmail.com', 1, '2021-03-06 23:31:18', 1),
(5, '::1', 'evi1871autentikasi@gmail.com', 1, '2021-03-06 23:42:36', 1),
(6, '::1', 'evi1871autentikasi@gmail.com', 1, '2021-03-06 23:46:45', 1),
(7, '::1', 'evi1871autentikasi@gmail.com', 1, '2021-03-06 23:55:54', 1),
(8, '::1', 'ranazahrina@gmail.com', NULL, '2021-03-07 00:57:32', 0),
(9, '::1', 'ranazahrina@gmail.com', 2, '2021-03-07 01:04:08', 0),
(10, '::1', 'ranazahrina@ymail.com', 3, '2021-03-07 01:06:39', 1),
(11, '::1', 'ranazahrina@ymail.com', 3, '2021-03-07 01:32:41', 1),
(12, '::1', 'ranazahrina@ymail.com', 3, '2021-03-07 01:33:22', 1),
(13, '::1', 'ranazahrina@ymail.com', 3, '2021-03-07 01:37:10', 1),
(14, '::1', 'ranazahrina@ymail.com', 3, '2021-03-07 01:49:46', 1),
(15, '::1', 'ranazahrina@ymail.com', 3, '2021-03-07 01:56:52', 1),
(16, '::1', 'ranazahrina@ymail.com', 3, '2021-03-07 02:00:51', 1),
(17, '::1', 'evie1817', NULL, '2021-03-07 07:42:29', 0),
(18, '::1', 'evie1871', NULL, '2021-03-07 07:43:24', 0),
(19, '::1', 'evi1871autentikasi@gmail.com', 1, '2021-03-07 07:43:58', 1),
(20, '::1', 'evi1871autentikasi@gmail.com', 1, '2021-03-07 08:10:16', 1),
(21, '::1', 'evi1871autentikasi@gmail.com', 1, '2021-03-07 08:19:14', 1),
(22, '::1', 'evi1871autentikasi@gmail.com', 1, '2021-03-07 18:59:20', 1),
(23, '::1', 'evi1871autentikasi@gmail.com', 1, '2021-03-07 19:27:43', 1),
(24, '::1', 'evi1871autentikasi@gmail.com', 1, '2021-03-15 10:32:58', 1),
(25, '::1', 'evi1871autentikasi@gmail.com', 1, '2021-03-15 23:59:32', 1),
(26, '::1', 'evi1871autentikasi@gmail.com', 1, '2021-03-17 12:13:57', 1),
(27, '::1', 'evi1871autentikasi@gmail.com', 1, '2021-03-24 03:04:00', 1),
(28, '::1', 'evi1871autentikasi@gmail.com', 1, '2021-04-22 12:09:57', 1),
(29, '::1', 'evie1817', NULL, '2021-05-24 06:38:58', 0),
(30, '::1', 'evi1871autentikasi@gmail.com', 1, '2021-05-24 06:39:10', 1),
(31, '::1', 'evi1871autentikasi@gmail.com', 1, '2021-05-24 08:46:37', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(161, 'SIKAMPAI HOTEL', 'VHTS', 'JANUARI', 'Bulanan', '2021-02-08', 'Agus Sarjono', '', ''),
(162, 'Andalas Permai', 'VHTS', 'JANUARI', 'Bulanan', '2021-02-04', 'Agus Sarjono', '', ''),
(163, 'Kurnia Perdana', 'VHTS', 'JANUARI', 'Bulanan', '2021-05-12', 'Agus Sarjono', '', ''),
(164, 'ASOKA LUXURY HOTEL', 'VHTS', 'JANUARI', 'Bulanan', '2021-02-16', 'Alberto M', '', ''),
(165, 'RUMAH INAP W DAN D MAKMUR', 'VHTS', 'JANUARI', 'Bulanan', '2021-03-17', 'Alberto M', '', ''),
(166, 'NARITA WISMA', 'VHTS', 'JANUARI', 'Bulanan', '2021-05-11', 'Anggi', '', ''),
(167, 'OMAH AKAS', 'VHTS', 'JANUARI', 'Bulanan', '2021-02-03', 'Anggi', '', ''),
(168, 'BAMBOE IIN 2', 'VHTS', 'JANUARI', 'Bulanan', '', 'Anggi', '', ''),
(169, '24 GUEST HOUSE DIAN AGUSTIAN', 'VHTS', 'JANUARI', 'Bulanan', '', 'Anne', '', ''),
(170, 'FLIP FLOP', 'VHTS', 'JANUARI', 'Bulanan', '', 'Anne', '', ''),
(171, 'SWISS BELHOTEL', 'VHTS', 'JANUARI', 'Bulanan', '', 'Aprilia PS', '', ''),
(172, 'KURNIA DUA HOTEL', 'VHTS', 'JANUARI', 'Bulanan', '', 'Aprilia PS', '', ''),
(173, 'EMERSIA HOTEL', 'VHTS', 'JANUARI', 'Bulanan', '', 'Bagus', '', ''),
(174, 'BUKIT MAS COTTAGE', 'VHTS', 'JANUARI', 'Bulanan', '', 'Bagus', '', ''),
(175, 'WISATA PUNCAK MAS', 'VHTS', 'JANUARI', 'Bulanan', '', 'Bagus', '', ''),
(176, 'BANDAR LAMPUNG WISMA', 'VHTS', ' JANUARI', 'Bulanan', '', 'Basuki', '', ''),
(177, ' Pelangi Residen', 'VHTS', 'JANUARI', 'Bulanan', '', 'Basuki', '', ''),
(178, ' GRAND PRABA HOTEL', 'VHTS', 'JANUARI', 'Bulanan', '2021-02-05', 'Edy K', '', ''),
(179, ' OYO WISMA MULIA', 'VHTS', 'JANUARI', 'Bulanan', '', 'Edy K', '', ''),
(180, 'BIMO HOME STAY', 'VHTS', 'JANUARI', 'Bulanan', '', 'Edy K', '', ''),
(181, 'Rumah Kopi', 'VHTS', 'JANUARI', 'Bulanan', '', 'Edy K', '', ''),
(182, 'LAMPUNG INN HOTEL', 'VHTS', 'JANUARI', 'Bulanan', '', 'Erwan', '', ''),
(183, 'NUSANTARA HOTEL SYARIAH', 'VHTS', 'JANUARI', 'Bulanan', '2021-02-05', 'Erwan', '', ''),
(184, 'B.JAYA 2 PENGINAPAN', 'VHTS', 'JANUARI', 'Bulanan', '', 'Fahroni', '', ''),
(185, 'DIVKA PENGINAPAN RESIDEN', 'VHTS', 'JANUARI', 'Bulanan', '2021-02-03', 'Fahroni', '', ''),
(186, 'YUNNA HOTEL', 'VHTS', 'JANUARI', 'Bulanan', '', 'Imam T', '', ''),
(187, 'PACIFIC HOTEL', 'VHTS', 'JANUARI', 'Bulanan', '', 'Imam T', '', ''),
(188, 'GOLDEN TULIP SPRINGHIL', 'VHTS', 'JANUARI', 'Bulanan', '', 'Imam T', '', ''),
(189, 'WHIZ PRIME LAMPUNG HOTEL', 'VHTS', 'JANUARI', 'Bulanan', '', 'Indra K', '', ''),
(190, 'BATIQA HOTEL LAMPUNG ', 'VHTS', 'JANUARI', 'Bulanan', '', 'Indra K', '', ''),
(191, 'POP HOTEL', 'VHTS', 'JANUARI', 'Bulanan', '', 'Indra K', '', ''),
(192, 'HOTEL KURAYA', 'VHTS', 'JANUARI', 'Bulanan', '', 'Indra K', '', ''),
(193, 'AMALIA HOTEL', 'VHTS', 'JANUARI', 'Bulanan', '', 'Kaisar', '', ''),
(194, 'HORISON HOTEL', 'VHTS', 'JANUARI', 'Bulanan', '', 'Kaisar', '', ''),
(195, 'RADISSON LAMPUNG HOTEL', 'VHTS', 'JANUARI', 'Bulanan', '', 'Kaisar', '', ''),
(196, 'DEGREEN HOTEL', 'VHTS', 'JANUARI', 'Bulanan', '', 'Sari Citra', '', ''),
(197, 'PALAPA  PONDOK PENGINAPAN', 'VHTS', 'JANUARI', 'Bulanan', '', 'Sari Citra', '', ''),
(198, 'SAHID BANDAR LAMPUNG HOTEL', 'VHTS', 'JANUARI', 'Bulanan', '', 'Sobirin', '', ''),
(199, 'RAHMAT HOTEL', 'VHTS', 'JANUARI', 'Bulanan', '', 'Sobirin', '', ''),
(200, 'HOTEL SWADEX', 'VHTS', 'JANUARI', 'Bulanan', '', 'Sobirin', '', ''),
(201, 'GRAND CITIHUB HOTEL', 'VHTS', 'JANUARI', 'Bulanan', '', 'Sri Susi', '', ''),
(202, 'TORRO GUEST HOUSE', 'VHTS', 'JANUARI', 'Bulanan', '', 'Sri Susi', '', ''),
(203, 'NOVOTEL HOTEL', 'VHTS', 'JANUARI', 'Bulanan', '', 'Tri Aprilia', '', ''),
(204, 'MARCOPOLO  HOTEL', 'VHTS', 'JANUARI', 'Bulanan', '', 'Tri Aprilia', '', ''),
(205, 'SHERATON LAMPUNG HOTEL', 'VHTS', 'JANUARI', 'Bulanan', '', 'Tri Aprilia', '', ''),
(206, 'ANUGRAH EXPRESS HOTEL', 'VHTS', 'JANUARI', 'Bulanan', '', 'Tri Aprilia', '', ''),
(207, 'ARINAS HOTEL', 'VHTS', 'JANUARI', 'Bulanan', '', 'Tri Aprilia', '', ''),
(208, 'ARNES CENTRAL HOTEL', 'VHTS', 'JANUARI', 'Bulanan', '', 'Tri Aprilia', '', ''),
(209, 'GRAND ANUGERAH  HOTEL', 'VHTS', 'JANUARI', 'Bulanan', '', 'Tri Aprilia', '', ''),
(210, 'GUNUNG SARI PENGINAPAN LOSMEN', 'VHTS', 'JANUARI', 'Bulanan', '', 'Ujang', '', ''),
(211, 'SITI HABIBAH PENGINAPAN', 'VHTS', 'JANUARI', 'Bulanan', '', 'Ujang', '', ''),
(212, 'GATAM WISMA', 'VHTS', 'JANUARI', 'Bulanan', '', 'Ujang', '', ''),
(213, 'RENNY SIMON LOSMEN', 'VHTS', 'JANUARI', 'Bulanan', '', 'Ujang', '', ''),
(214, 'BUKIT RANDU HOTEL', 'VHTS', 'JANUARI', 'Bulanan', '', 'Ujang', '', ''),
(215, 'ASTON HOTEL', 'VHTS', 'JANUARI', 'Bulanan', '', 'Imam T', '', ''),
(216, 'JAMILA', 'HK-5', 'JANUARI', 'Bulanan', '', 'Erwan', '', ''),
(217, 'TURMAN', 'HK-5', 'JANUARI', 'Bulanan', '', 'Bagus', '', ''),
(218, 'AKIL GUNAWAN', 'HK-5', 'JANUARI', 'Bulanan', '', 'Bagus', '', ''),
(219, 'HENDRI KUSUMA / YENI', 'HK-5', 'JANUARI', 'Bulanan', '', 'Bagus', '', ''),
(220, 'EDI', 'HK-5', 'JANUARI', 'Bulanan', '', 'Bagus', '', ''),
(221, 'ALESIUS BUNAWAN', 'HK-5', 'JANUARI', 'Bulanan', '', 'Bagus', '', ''),
(222, 'ROBBY RUBYANTO', 'HK-5', 'JANUARI', 'Bulanan', '', 'Imam T', '', ''),
(223, 'TEDY', 'HK-5', 'JANUARI', 'Bulanan', '', 'Imam T', '', ''),
(224, 'TEDRY', 'HK-5', 'JANUARI', 'Bulanan', '', 'Indra K', '', ''),
(225, 'REFLI ERFIN', 'HK-5', 'JANUARI', 'Bulanan', '', 'Indra K', '', ''),
(226, 'MEILIANA', 'HK-5', 'JANUARI', 'Bulanan', '', 'Kaisar', '', ''),
(227, 'ALI DUKI', 'HK-5', 'JANUARI', 'Bulanan', '', 'Kaisar', '', ''),
(228, 'HAMID ALI', 'HK-5', 'JANUARI', 'Bulanan', '', 'Kaisar', '', ''),
(229, 'KARIM GUSANI', 'HK-5', 'JANUARI', 'Bulanan', '', 'Ujang', '', ''),
(230, 'IRWANSYAH', 'HK-5', 'JANUARI', 'Bulanan', '', 'Ujang', '', ''),
(231, 'MARUAP NAPITUPULU NY./ ELFRIDA PANJAITAN', 'HK-5', 'JANUARI', 'Bulanan', '', 'Ujang', '', ''),
(232, 'A SUSANTO', 'HK-5', 'JANUARI', 'Bulanan', '', 'Ujang', '', ''),
(233, 'M JAMARIL AKBAR', 'HK-5', 'JANUARI', 'Bulanan', '', 'Ujang', '', ''),
(234, 'NAZARUDDIN ALWI', 'HK-5', 'JANUARI', 'Bulanan', '', 'A Riadi', '', ''),
(235, 'RIZAL ENDI', 'HK-5', 'JANUARI', 'Bulanan', '', 'Agus Sarjono', '', ''),
(236, 'BUSTAM HADORI', 'HK-5', 'JANUARI', 'Bulanan', '', 'Edy K', '', ''),
(237, 'DEDI RINDAS', 'HK-5', 'JANUARI', 'Bulanan', '', 'Edy K', '', ''),
(238, 'RIYAN HIDAYAT', 'HK-4', 'JANUARI', 'Bulanan', '', 'Imam T', '', ''),
(239, 'BASRI', 'HK-4', 'JANUARI', 'Bulanan', '', 'Imam T', '', ''),
(240, 'FITRIAH', 'HK-4', 'JANUARI', 'Bulanan', '', 'Imam T', '', ''),
(241, 'PULUNG', 'HK-4', 'JANUARI', 'Bulanan', '', 'Imam T', '', ''),
(242, 'DEDI', 'HK-4', 'JANUARI', 'Bulanan', '', 'Imam T', '', ''),
(243, 'ASMIN', 'HK-4', 'JANUARI', 'Bulanan', '', 'Imam T', '', ''),
(244, 'UJANG CHOLIKIN', 'HK-4', 'JANUARI', 'Bulanan', '', 'Imam T', '', ''),
(245, 'SILVAN', 'HK-4', 'JANUARI', 'Bulanan', '', 'Nanang', '', ''),
(246, 'PATUAN', 'HK-4', 'JANUARI', 'Bulanan', '', 'Nanang', '', ''),
(247, 'EZZA', 'HK-4', 'JANUARI', 'Bulanan', '', 'Nanang', '', ''),
(248, 'YOAN', 'HK-4', 'JANUARI', 'Bulanan', '', 'Nanang', '', ''),
(249, 'LIECHING', 'HK-4', 'JANUARI', 'Bulanan', '', 'Ujang', '', ''),
(250, 'NONO. W', 'HK-4', 'JANUARI', 'Bulanan', '', 'Ujang', '', ''),
(251, 'MARWAN M.A', 'HK-4', 'JANUARI', 'Bulanan', '', 'Ujang', '', ''),
(252, 'ADENAN HASYIM', 'HK-4', 'JANUARI', 'Bulanan', '', 'Ujang', '', ''),
(253, 'HANAFI', 'HK-4', 'JANUARI', 'Bulanan', '', 'Ujang', '', ''),
(254, 'SARYANI', 'HK-4', 'JANUARI', 'Bulanan', '', 'Ujang', '', ''),
(255, 'RAHMAT A', 'HK-4', 'JANUARI', 'Bulanan', '', 'Edy K', '', ''),
(256, 'ENDRIK', 'HK-4', 'JANUARI', 'Bulanan', '', 'Edy K', '', ''),
(257, 'NURYUSUF', 'HK-4', 'JANUARI', 'Bulanan', '', 'Edy K', '', ''),
(258, 'ROZALI', 'HK-4', 'JANUARI', 'Bulanan', '', 'Edy K', '', ''),
(259, 'REJEKI', 'HK-4', 'JANUARI', 'Bulanan', '', 'Indra K', '', ''),
(260, 'KULSUM', 'HK-4', 'JANUARI', 'Bulanan', '', 'Indra K', '', ''),
(261, 'RAMLI G.S', 'HK-4', 'JANUARI', 'Bulanan', '', 'Indra K', '', ''),
(262, 'HUSNA', 'HK-4', 'JANUARI', 'Bulanan', '', 'Indra K', '', ''),
(263, 'EKA', 'HK-4', 'JANUARI', 'Bulanan', '', 'Indra K', '', ''),
(264, 'ATIN', 'HK-4', 'JANUARI', 'Bulanan', '', 'Indra K', '', ''),
(265, 'TIO', 'HK-4', 'JANUARI', 'Bulanan', '', 'Indra K', '', ''),
(266, 'FEBRI', 'HK-4', 'JANUARI', 'Bulanan', '', 'Indra K', '', ''),
(267, 'ASIA', 'HK-4', 'JANUARI', 'Bulanan', '', 'Indra K', '', ''),
(268, 'HERI CHANDRA', 'HK-4', 'JANUARI', 'Bulanan', '', 'Indra K', '', ''),
(269, 'LINA', 'HK-4', 'JANUARI', 'Bulanan', '', 'Indra K', '', ''),
(270, 'YULI', 'HK-4', 'JANUARI', 'Bulanan', '', 'Indra K', '', ''),
(271, 'NELI', 'HK-4', 'JANUARI', 'Bulanan', '', 'Indra K', '', ''),
(272, 'ANGGUN', 'HK-4', 'JANUARI', 'Bulanan', '', 'Indra K', '', ''),
(273, 'EKO WIBOWO', 'HK-4', 'JANUARI', 'Bulanan', '', 'Indra K', '', ''),
(274, 'ELZA', 'HK-4', 'JANUARI', 'Bulanan', '', 'Indra K', '', ''),
(275, 'YETI', 'HK-4', 'JANUARI', 'Bulanan', '', 'Indra K', '', ''),
(276, 'TAUFIK HIDAYAT', 'HK-4', 'JANUARI', 'Bulanan', '', 'Kaisar', '', ''),
(277, 'ERNIS', 'HK-4', 'JANUARI', 'Bulanan', '', 'Kaisar', '', ''),
(278, 'MUTIA', 'HK-4', 'JANUARI', 'Bulanan', '', 'Kaisar', '', ''),
(279, 'DWI', 'HK-4', 'JANUARI', 'Bulanan', '', 'Kaisar', '', ''),
(280, 'PINDO', 'HK-4', 'JANUARI', 'Bulanan', '', 'Kaisar', '', ''),
(281, 'REGINA', 'HK-4', ' JANUARI', 'Bulanan', '', 'Kaisar', '', ''),
(282, 'RONI', 'HK-4', 'JANUARI', 'Bulanan', '', 'Kaisar', '', ''),
(283, 'RAHMAD', 'HK-4', 'JANUARI', 'Bulanan', '', 'Kaisar', '', ''),
(284, 'SUCIPTA', 'HK-4', 'JANUARI', 'Bulanan', '', 'Erwan', '', ''),
(285, 'SARWONO', 'HK-4', 'JANUARI', 'Bulanan', '', 'Erwan', '', ''),
(286, 'EFENDI MANULANG', 'HK-4', 'JANUARI', 'Bulanan', '', 'Erwan', '', ''),
(287, 'JOKO TRIYANTO', 'HK-4', 'JANUARI', 'Bulanan', '', 'Erwan', '', ''),
(288, 'ANDI', 'HK-4', 'JANUARI', 'Bulanan', '', 'Fahroni', '', ''),
(289, 'SAHWAN', 'HK-4', 'JANUARI', 'Bulanan', '', 'Fahroni', '', ''),
(290, 'AJI', 'HK-4', 'JANUARI', 'Bulanan', '', 'Fahroni', '', ''),
(291, 'SILABON', 'HK-4', 'JANUARI', 'Bulanan', '', 'Fahroni', '', ''),
(292, 'ARBAIN', 'HK-4', 'JANUARI', 'Bulanan', '', 'Fahroni', '', ''),
(293, 'LASIS', 'HK-4', 'JANUARI', 'Bulanan', '', 'Fahroni', '', ''),
(294, 'SOFIAN SALEH', 'HK-4', 'JANUARI', 'Bulanan', '', 'Agus Sarjono', '', ''),
(295, 'SLAMET/RISWANDI', 'HK-4', 'JANUARI', 'Bulanan', '', 'Basuki', '', ''),
(296, 'HARYADI', 'HK-4', 'JANUARI', 'Bulanan', '', 'Basuki', '', ''),
(297, 'LUTFI', 'HK-4', 'JANUARI', 'Bulanan', '', 'Sobirin', '', ''),
(298, 'Toko Salabintana', 'HPB', 'JANUARI', 'Bulanan', '', 'Kaisar', '', ''),
(299, 'PT Sinar Lampung', 'HPB', 'JANUARI', 'Bulanan', '', 'Kaisar', '', ''),
(300, 'Central Arloji (Hi.erwan saibu)', 'HPB', 'JANUARI', 'Bulanan', '', 'Kaisar', '', ''),
(301, 'Toko Uncu', 'HPB', 'JANUARI', 'Bulanan', '', 'Kaisar', '', ''),
(302, 'Toko Tasik Jaya (Hi Dedy Juna)', 'HPB', 'JANUARI', 'Bulanan', '', 'Kaisar', '', ''),
(303, 'KUD Mina Jaya', 'HPB', 'JANUARI', 'Bulanan', '', 'Sri Susi', '', ''),
(304, 'Toko Aluminium Karya Murni', 'HPB', 'JANUARI', 'Bulanan', '', 'Sri Susi', '', ''),
(305, 'Toko Besi Nusantara', 'HPB', 'JANUARI', 'Bulanan', '', 'A Riadi', '', ''),
(306, 'Istana Diesel', 'HPB', 'JANUARI', 'Bulanan', '', 'A Riadi', '', ''),
(307, 'Perdagangan Jengkol Dan Petai', 'HPB', 'JANUARI', 'Bulanan', '', 'A Riadi', '', ''),
(308, 'AR Family', 'HPB', 'JANUARI', 'Bulanan', '', 'Erwan', '', ''),
(309, 'Rajawali Elektronik', 'HPB', 'JANUARI', 'Bulanan', '', 'Erwan', '', ''),
(310, 'PT Trakindo Utama', 'HPB', 'JANUARI', 'Bulanan', '', 'Erwan', '', ''),
(311, 'Antara Saudara, CV', 'HPB', 'JANUARI', 'Bulanan', '', 'Imam T', '', ''),
(312, 'Cik Leni', 'HPB', 'JANUARI', 'Bulanan', '', 'Imam T', '', ''),
(313, 'PT Prasidha Aneka Niaga', 'HPB', 'JANUARI', 'Bulanan', '', 'Imam T', '', ''),
(314, 'PT Semen Baturaja', 'HPB', 'JANUARI', 'Bulanan', '', 'Imam T', '', ''),
(315, 'Tri Jaya', 'HPB', 'JANUARI', 'Bulanan', '', 'Imam T', '', ''),
(316, 'Usaha Perdagangan Kerajinan Kerang', 'HPB', 'JANUARI', 'Bulanan', '', 'Sobirin', '', ''),
(317, 'Agen Makan (Purwanto)', 'HPB', 'JANUARI', 'Bulanan', '', 'Sobirin', '', ''),
(318, 'Optik Modern', 'HPB', 'JANUARI', 'Bulanan', '', 'Sari Citra', '', ''),
(319, 'Sentra Computer (Robby)', 'HPB', 'JANUARI', 'Bulanan', '', 'Sari Citra', '', ''),
(320, 'GRIYACOM', 'HPB', 'JANUARI', 'Bulanan', '', 'Sari Citra', '', ''),
(321, 'Toko Tas Jihan (Hasiati)', 'HPB', 'JANUARI', 'Bulanan', '', 'Aprilia PS', '', ''),
(322, 'Toko Tas Piayu', 'HPB', 'JANUARI', 'Bulanan', '', 'Aprilia PS', '', ''),
(323, 'Toko Mainan \'Herni Jaya\'', 'HPB', 'JANUARI', 'Bulanan', '', 'Aprilia PS', '', ''),
(324, 'PT Rajawali Hiyoto', 'HPB', 'JANUARI', 'Bulanan', '', 'Ujang', '', ''),
(325, 'Rejeki Agung', 'HPB', 'JANUARI', 'Bulanan', '', 'Ujang', '', ''),
(326, 'Auto 2000 Raden Intan', 'HPB', 'JANUARI', 'Bulanan', '', 'Ujang', '', ''),
(327, 'PT Surya Serba Mulia', 'HPB', 'JANUARI', 'Bulanan', '', 'Ujang', '', ''),
(328, 'Berlian Utama Motor, PT', 'HPB', 'JANUARI', 'Bulanan', '', 'Ujang', '', ''),
(329, 'CV Cekatan', 'HPB', 'JANUARI', 'Bulanan', '', 'Ujang', '', ''),
(330, 'PT Enseval Putra Mega Tradin', 'HPB', 'JANUARI', 'Bulanan', '', 'Edy K', '', ''),
(331, 'Harapan Nusa Mandiri', 'HPB', 'JANUARI', 'Bulanan', '', 'Edy K', '', ''),
(332, 'PT Krisbow Indonesia', 'HPB', 'JANUARI', 'Bulanan', '', 'Edy K', '', ''),
(333, 'Jual Beli Palawa (Adi)', 'HPB', 'JANUARI', 'Bulanan', '', 'Edy K', '', ''),
(334, 'CV Panca Bahagia', 'HPB', 'JANUARI', 'Bulanan', '', 'Edy K', '', ''),
(335, 'PT Parid Padang Global', 'HPB', 'JANUARI', 'Bulanan', '', 'Edy K', '', ''),
(336, 'Toko Balai Buku (Fauziah)', 'HPB', 'JANUARI', 'Bulanan', '', 'Edy K', '', ''),
(337, 'PT Budi Berlian', 'HPB', 'JANUARI', 'Bulanan', '', 'Indra K', '', ''),
(338, 'Cipta lestari tehnik', 'HPB', 'JANUARI', 'Bulanan', '', 'Indra K', '', ''),
(339, 'One Box Apple', 'HPB', 'JANUARI', 'Bulanan', '', 'Indra K', '', ''),
(340, 'Jaco Tv (PT Indosehat Sempurna)', 'HPB', 'JANUARI', 'Bulanan', '', 'Indra K', '', ''),
(341, 'Distributor Buah Lilik', 'HPB', 'JANUARI', 'Bulanan', '', 'Indra K', '', ''),
(342, 'Mars Audio Toko Rachmatsyam', 'HPB', 'JANUARI', 'Bulanan', '', 'Indra K', '', ''),
(343, 'UD. VIA Mandiri', 'HPB', 'JANUARI', 'Bulanan', '', 'A Maradona', '', ''),
(344, 'CV Pena Mas ', 'HPB', 'JANUARI', 'Bulanan', '', 'A Maradona', '', ''),
(345, 'Tiga Putri (Puspa Riyadi)', 'HPB', 'JANUARI', 'Bulanan', '', 'Bagus', '', ''),
(346, 'SIKAMPAI HOTEL', 'VHTS', 'FEBRUARI', 'Bulanan', '', 'Agus Sarjono', '', ''),
(347, 'Andalas Permai', 'VHTS', 'FEBRUARI', 'Bulanan', '', 'Agus Sarjono', '', ''),
(348, 'Kurnia Perdana', 'VHTS', 'FEBRUARI', 'Bulanan', '', 'Agus Sarjono', '', ''),
(350, 'KRIDA WISATA', 'VHTS', 'FEBRUARI', 'Bulanan', '', 'Agus Sarjono', '', ''),
(351, 'ASOKA LUXURY HOTEL', 'VHTS', 'FEBRUARI', 'Bulanan', '', 'Alberto M', '', ''),
(352, 'RUMAH INAP W DAN D MAKMUR', 'VHTS', 'FEBRUARI', 'Bulanan', '', 'Alberto M', '', ''),
(353, 'NARITA WISMA', 'VHTS', 'FEBRUARI', 'Bulanan', '', 'Anggi', '', ''),
(354, 'OMAH AKAS', 'VHTS', 'FEBRUARI', 'Bulanan', '2021-03-09', 'Anggi', '', ''),
(355, '24 GUEST HOUSE DIAN AGUSTIAN', 'VHTS', 'FEBRUARI', 'Bulanan', '', 'Anne', '', ''),
(356, 'FLIP FLOP', 'VHTS', 'FEBRUARI', 'Bulanan', '', 'Anne', '', ''),
(357, 'BAMBOE IIN 2', 'VHTS', 'FEBRUARI', 'Bulanan', '', 'Anggi', '', ''),
(358, 'SWISS BELHOTEL', 'VHTS', 'FEBRUARI', 'Bulanan', '', 'Aprilia PS', '', ''),
(359, 'KURNIA DUA HOTEL', 'VHTS', 'FEBRUARI', 'Bulanan', '', 'Aprilia PS', '', ''),
(360, 'EMERSIA HOTEL', 'VHTS', 'FEBRUARI', 'Bulanan', '', 'Bagus', '', ''),
(361, 'BUKIT MAS COTTAGE', 'VHTS', 'FEBRUARI', 'Bulanan', '', 'Bagus', '', ''),
(362, 'WISATA PUNCAK MAS', 'VHTS', 'FEBRUARI', 'Bulanan', '', 'Bagus', '', ''),
(363, 'BANDAR LAMPUNG WISMA', 'VHTS', 'FEBRUARI', 'Bulanan', '', 'Basuki', '', ''),
(364, 'GRAND PRABA HOTEL', 'VHTS', 'FEBRUARI', 'Bulanan', '', 'Edy K', '', ''),
(365, 'OYO WISMA MULIA', 'VHTS', 'FEBRUARI', 'Bulanan', '', 'Edy K', '', ''),
(366, 'BIMO HOME STAY', 'VHTS', 'FEBRUARI', 'Bulanan', '', 'Edy K', '', ''),
(367, 'Rumah Kopi', 'VHTS', 'FEBRUARI', 'Bulanan', '', 'Edy K', '', ''),
(368, 'Pelangi Residen', 'VHTS', 'FEBRUARI', 'Bulanan', '', 'Basuki', '', ''),
(369, 'LAMPUNG INN HOTEL', 'VHTS', 'FEBRUARI', 'Bulanan', '', 'Erwan', '', ''),
(370, 'NUSANTARA HOTEL SYARIAH', 'VHTS', 'FEBRUARI', 'Bulanan', '', 'Erwan', '', ''),
(371, 'B.JAYA 2 PENGINAPAN', 'VHTS', 'FEBRUARI', 'Bulanan', '', 'Fahroni', '', ''),
(372, 'DIVKA PENGINAPAN RESIDEN', 'VHTS', 'FEBRUARI', 'Bulanan', '', 'Fahroni', '', ''),
(373, 'YUNNA HOTEL', 'VHTS', 'FEBRUARI', 'Bulanan', '', 'Imam T', '', ''),
(374, 'PACIFIC HOTEL', 'VHTS', 'FEBRUARI', 'Bulanan', '', 'Imam T', '', ''),
(375, 'GOLDEN TULIP SPRINGHIL', 'VHTS', 'FEBRUARI', 'Bulanan', '', 'Imam T', '', ''),
(376, 'WHIZ PRIME LAMPUNG HOTEL', 'VHTS', 'FEBRUARI', 'Bulanan', '', 'Indra K', '', ''),
(377, 'BATIQA HOTEL LAMPUNG ', 'VHTS', 'FEBRUARI', 'Bulanan', '', 'Indra K', '', ''),
(378, 'POP HOTEL', 'VHTS', 'FEBRUARI', 'Bulanan', '', 'Indra K', '', ''),
(379, 'HOTEL KURAYA', 'VHTS', 'FEBRUARI', 'Bulanan', '', 'Indra K', '', ''),
(380, 'AMALIA HOTEL', 'VHTS', 'FEBRUARI', 'Bulanan', '', 'Kaisar', '', ''),
(381, 'HORISON HOTEL', 'VHTS', 'FEBRUARI', 'Bulanan', '', 'Kaisar', '', ''),
(382, 'RADISSON LAMPUNG HOTEL', 'VHTS', 'FEBRUARI', 'Bulanan', '', 'Kaisar', '', ''),
(383, 'DEGREEN HOTEL', 'VHTS', 'FEBRUARI', 'Bulanan', '', 'Sari Citra', '', ''),
(384, 'PALAPA PONDOK PENGINAPAN', 'VHTS', 'FEBRUARI', 'Bulanan', '', 'Sari Citra', '', ''),
(385, 'SAHID BANDAR LAMPUNG HOTEL', 'VHTS', 'FEBRUARI', 'Bulanan', '', 'Sobirin', '', ''),
(386, 'RAHMAT HOTEL', 'VHTS', 'FEBRUARI', 'Bulanan', '', 'Sobirin', '', ''),
(387, 'HOTEL SWADEX', 'VHTS', 'FEBRUARI', 'Bulanan', '', 'Sobirin', '', ''),
(388, 'GRAND CITIHUB HOTEL', 'VHTS', 'FEBRUARI', 'Bulanan', '', 'Sri Susi', '', ''),
(389, 'TORRO GUEST HOUSE', 'VHTS', 'FEBRUARI', 'Bulanan', '', 'Sri Susi', '', ''),
(390, 'NOVOTEL HOTEL', 'VHTS', 'FEBRUARI', 'Bulanan', '', 'Tri Aprilia', '', ''),
(391, 'MARCOPOLO  HOTEL', 'VHTS', 'FEBRUARI', 'Bulanan', '', 'Tri Aprilia', '', ''),
(392, 'SHERATON LAMPUNG HOTEL', 'VHTS', 'FEBRUARI', 'Bulanan', '', 'Tri Aprilia', '', ''),
(393, 'ANUGRAH EXPRESS HOTEL', 'VHTS', 'FEBRUARI', 'Bulanan', '', 'Tri Aprilia', '', ''),
(394, 'ARINAS HOTEL', 'VHTS', 'FEBRUARI', 'Bulanan', '', 'Tri Aprilia', '', ''),
(395, 'ARNES CENTRAL HOTEL', 'VHTS', 'FEBRUARI', 'Bulanan', '', 'Tri Aprilia', '', ''),
(396, 'GRAND ANUGERAH  HOTEL', 'VHTS', 'FEBRUARI', 'Bulanan', '', 'Tri Aprilia', '', ''),
(397, 'GUNUNG SARI PENGINAPAN LOSMEN', 'VHTS', 'FEBRUARI', 'Bulanan', '', 'Ujang', '', ''),
(398, 'SITI HABIBAH PENGINAPAN', 'VHTS', 'FEBRUARI', 'Bulanan', '', 'Ujang', '', ''),
(399, 'GATAM WISMA', 'VHTS', 'FEBRUARI', 'Bulanan', '', 'Ujang', '', ''),
(400, 'RENNY SIMON LOSMEN', 'VHTS', 'FEBRUARI', 'Bulanan', '', 'Ujang', '', ''),
(401, 'BUKIT RANDU HOTEL', 'VHTS', 'FEBRUARI', 'Bulanan', '', 'Ujang', '', ''),
(402, 'ASTON HOTEL', 'VHTS', 'FEBRUARI', 'Bulanan', '', 'Imam T', '', ''),
(403, 'Toko Salabintana', 'HPB', 'FEBRUARI', 'Bulanan', '', 'Kaisar', '', ''),
(404, 'PT Sinar Lampung', 'HPB', 'FEBRUARI', 'Bulanan', '', 'Kaisar', '', ''),
(405, 'Central Arloji (Hi.erwan saibu)', 'HPB', 'FEBRUARI', 'Bulanan', '', 'Kaisar', '', ''),
(406, 'Toko Uncu', 'HPB', 'FEBRUARI', 'Bulanan', '', 'Kaisar', '', ''),
(407, 'Toko Tasik Jaya (Hi Dedy Juna)', 'HPB', 'FEBRUARI', 'Bulanan', '', 'Kaisar', '', ''),
(408, 'KUD Mina Jaya', 'HPB', 'FEBRUARI', 'Bulanan', '', 'Sri Susi', '', ''),
(409, 'Toko Aluminium Karya Murni', 'HPB', 'FEBRUARI', 'Bulanan', '', 'Sri Susi', '', ''),
(410, 'Toko Besi Nusantara', 'HPB', 'FEBRUARI', 'Bulanan', '', 'A Riadi', '', ''),
(411, 'Istana Diesel', 'HPB', 'FEBRUARI', 'Bulanan', '', 'A Riadi', '', ''),
(412, 'Perdagangan Jengkol Dan Petai', 'HPB', 'FEBRUARI', 'Bulanan', '', 'A Riadi', '', ''),
(413, 'AR Family', 'HPB', 'FEBRUARI', 'Bulanan', '', 'Erwan', '', ''),
(414, 'Rajawali Elektronik', 'HPB', 'FEBRUARI', 'Bulanan', '', 'Erwan', '', ''),
(415, 'PT Trakindo Utama', 'HPB', 'FEBRUARI', 'Bulanan', '', 'Erwan', '', ''),
(416, 'Antara Saudara, CV', 'HPB', 'FEBRUARI', 'Bulanan', '', 'Imam T', '', ''),
(417, 'Cik Leni', 'HPB', 'FEBRUARI', 'Bulanan', '', 'Imam T', '', ''),
(418, 'PT Prasidha Aneka Niaga', 'HPB', 'FEBRUARI', 'Bulanan', '', 'Imam T', '', ''),
(419, 'PT Semen Baturaja', 'HPB', 'FEBRUARI', 'Bulanan', '', 'Imam T', '', ''),
(420, 'Tri Jaya', 'HPB', 'FEBRUARI', 'Bulanan', '', 'Imam T', '', ''),
(421, 'Usaha Perdagangan Kerajinan Kerang', 'HPB', 'FEBRUARI', 'Bulanan', '', 'Sobirin', '', ''),
(422, 'Agen Makan (Purwanto)', 'HPB', 'FEBRUARI', 'Bulanan', '', 'Sobirin', '', ''),
(423, 'Optik Modern', 'HPB', 'FEBRUARI', 'Bulanan', '', 'Citra', '', ''),
(424, 'Sentra Computer (Robby)', 'HPB', 'FEBRUARI', 'Bulanan', '', 'Citra', '', ''),
(425, 'GRIYACOM', 'HPB', 'FEBRUARI', 'Bulanan', '', 'Citra', '', ''),
(426, 'Toko Tas Jihan (Hasiati)', 'HPB', 'FEBRUARI', 'Bulanan', '', 'Aprilia PS', '', ''),
(427, 'Toko Tas Piayu', 'HPB', 'FEBRUARI', 'Bulanan', '', 'Aprilia PS', '', ''),
(428, 'Toko Mainan \'Herni Jaya\'', 'HPB', 'FEBRUARI', 'Bulanan', '', 'Aprilia PS', '', ''),
(429, 'PT Rajawali Hiyoto', 'HPB', 'FEBRUARI', 'Bulanan', '', 'Ujang', '', ''),
(430, 'Rejeki Agung', 'HPB', 'FEBRUARI', 'Bulanan', '', 'Ujang', '', ''),
(431, 'Auto 2000 Raden Intan', 'HPB', 'FEBRUARI', 'Bulanan', '', 'Ujang', '', ''),
(432, 'PT Surya Serba Mulia', 'HPB', 'FEBRUARI', 'Bulanan', '', 'Ujang', '', ''),
(433, 'Berlian Utama Motor, PT', 'HPB', 'FEBRUARI', 'Bulanan', '', 'Ujang', '', ''),
(434, 'CV Cekatan', 'HPB', 'FEBRUARI', 'Bulanan', '', 'Ujang', '', ''),
(435, 'PT Enseval Putra Mega Tradin', 'HPB', 'FEBRUARI', 'Bulanan', '', 'Edy K', '', ''),
(436, 'Harapan Nusa Mandiri', 'HPB', 'FEBRUARI', 'Bulanan', '', 'Edy K', '', ''),
(437, 'PT Krisbow Indonesia', 'HPB', 'FEBRUARI', 'Bulanan', '', 'Edy K', '', ''),
(438, 'Jual Beli Palawa (Adi)', 'HPB', 'FEBRUARI', 'Bulanan', '', 'Edy K', '', ''),
(439, 'CV Panca Bahagia', 'HPB', 'FEBRUARI', 'Bulanan', '', 'Edy K', '', ''),
(440, 'PT Parid Padang Global', 'HPB', 'FEBRUARI', 'Bulanan', '', 'Edy K', '', ''),
(441, 'Toko Balai Buku (Fauziah)', 'HPB', 'FEBRUARI', 'Bulanan', '', 'Edy K', '', ''),
(442, 'PT Budi Berlian', 'HPB', 'FEBRUARI', 'Bulanan', '', 'Indra K', '', ''),
(443, 'Cipta lestari tehnik', 'HPB', 'FEBRUARI', 'Bulanan', '', 'Indra K', '', ''),
(444, 'One Box Apple', 'HPB', 'FEBRUARI', 'Bulanan', '', 'Indra K', '', ''),
(445, 'Jaco Tv (PT Indosehat Sempurn)', 'HPB', 'FEBRUARI', 'Bulanan', '', 'Indra K', '', ''),
(446, 'Distributor Buah Lilik', 'HPB', 'FEBRUARI', 'Bulanan', '', 'Indra K', '', ''),
(447, 'Mars Audio Toko Rachmatsyam', 'HPB', 'FEBRUARI', 'Bulanan', '', 'Indra K', '', ''),
(448, 'UD. VIA Mandiri', 'HPB', 'FEBRUARI', 'Bulanan', '', 'A Maradona', '', ''),
(449, 'CV Pena Mas ', 'HPB', 'FEBRUARI', 'Bulanan', '', 'A Maradona', '', ''),
(450, 'Tiga Putri (Puspa Riyadi)', 'HPB', 'FEBRUARI', 'Bulanan', '', 'Bagus', '', ''),
(451, 'RIYAN HIDAYAT', 'HK-4', 'MARET', 'Bulanan', '', 'Imam T', '', ''),
(452, 'BASRI', 'HK-4', 'MARET', 'Bulanan', '', 'Imam T', '', ''),
(453, 'FITRIAH', 'HK-4', 'MARET', 'Bulanan', '', 'Imam T', '', ''),
(454, 'PULUNG', 'HK-4', 'MARET', 'Bulanan', '', 'Imam T', '', ''),
(455, 'DEDI', 'HK-4', 'MARET', 'Bulanan', '', 'Imam T', '', ''),
(456, 'ASMIN', 'HK-4', 'MARET', 'Bulanan', '', 'Imam T', '', ''),
(457, 'UJANG CHOLIKIN', 'HK-4', 'MARET', 'Bulanan', '', 'Imam T', '', ''),
(458, 'SILVAN', 'HK-4', 'MARET', 'Bulanan', '', 'Nanang', '', ''),
(459, 'PATUAN', 'HK-4', 'MARET', 'Bulanan', '', 'Nanang', '', ''),
(460, 'EZZA', 'HK-4', 'MARET', 'Bulanan', '', 'Nanang', '', ''),
(461, 'YOAN', 'HK-4', 'MARET', 'Bulanan', '', 'Nanang', '', ''),
(462, 'LIECHING', 'HK-4', 'MARET', 'Bulanan', '', 'Ujang', '', ''),
(463, 'NONO. W', 'HK-4', 'MARET', 'Bulanan', '', 'Ujang', '', ''),
(464, 'MARWAN M.A', 'HK-4', 'MARET', 'Bulanan', '', 'Ujang', '', ''),
(465, 'ADENAN HASYIM', 'HK-4', 'MARET', 'Bulanan', '', 'Ujang', '', ''),
(466, 'HANAFI', 'HK-4', 'MARET', 'Bulanan', '', 'Ujang', '', ''),
(467, 'SARYANI', 'HK-4', 'MARET', 'Bulanan', '', 'Ujang', '', ''),
(468, 'RAHMAT A', 'HK-4', 'MARET', 'Bulanan', '', 'Edy K', '', ''),
(469, 'ENDRIK', 'HK-4', 'MARET', 'Bulanan', '', 'Edy K', '', ''),
(470, 'NURYUSUF', 'HK-4', 'MARET', 'Bulanan', '', 'Edy K', '', ''),
(471, 'ROZALI', 'HK-4', 'MARET', 'Bulanan', '', 'Edy K', '', ''),
(473, 'REJEKI', 'HK-4', 'MARET', 'Bulanan', '', 'Indra K', '', ''),
(474, 'KULSUM', 'HK-4', 'MARET', 'Bulanan', '', 'Indra K', '', ''),
(475, 'RAMLI G.S', 'HK-4', 'MARET', 'Bulanan', '', 'Indra K', '', ''),
(476, 'HUSNA', 'HK-4', 'MARET', 'Bulanan', '', 'Indra K', '', ''),
(477, 'EKA', 'HK-4', 'MARET', 'Bulanan', '', 'Indra K', '', ''),
(478, 'ATIN', 'HK-4', 'MARET', 'Bulanan', '', 'Indra K', '', ''),
(479, 'TIO', 'HK-4', 'MARET', 'Bulanan', '', 'Indra K', '', ''),
(480, 'FEBRI', 'HK-4', 'MARET', 'Bulanan', '', 'Indra K', '', ''),
(481, 'ASIA', 'HK-4', 'MARET', 'Bulanan', '', 'Indra K', '', ''),
(482, 'HERI CHANDRA', 'HK-4', 'MARET', 'Bulanan', '', 'Indra K', '', ''),
(483, 'LINA', 'HK-4', 'MARET', 'Bulanan', '', 'Indra K', '', ''),
(484, 'YULI', 'HK-4', 'MARET', 'Bulanan', '', 'Indra K', '', ''),
(485, 'NELI', 'HK-4', 'MARET', 'Bulanan', '', 'Indra K', '', ''),
(486, 'ANGGUN', 'HK-4', 'MARET', 'Bulanan', '', 'Indra K', '', ''),
(487, 'EKO WIBOWO', 'HK-4', 'MARET', 'Bulanan', '', 'Indra K', '', ''),
(488, 'ELZA', 'HK-4', 'MARET', 'Bulanan', '', 'Indra K', '', ''),
(489, 'YETI', 'HK-4', 'MARET', 'Bulanan', '', 'Indra K', '', ''),
(490, 'TAUFIK HIDAYAT', 'HK-4', 'MARET', 'Bulanan', '', 'Kaisar', '', ''),
(491, 'ERNIS', 'HK-4', 'MARET', 'Bulanan', '', 'Kaisar', '', ''),
(492, 'MUTIA', 'HK-4', 'MARET', 'Bulanan', '', 'Kaisar', '', ''),
(493, 'DWI', 'HK-4', 'MARET', 'Bulanan', '', 'Kaisar', '', ''),
(494, 'PINDO', 'HK-4', 'MARET', 'Bulanan', '', 'Kaisar', '', ''),
(495, 'REGINA', 'HK-4', 'MARET', 'Bulanan', '', 'Kaisar', '', ''),
(496, 'RONI', 'HK-4', 'MARET', 'Bulanan', '', 'Kaisar', '', ''),
(497, 'RAHMAD', 'HK-4', 'MARET', 'Bulanan', '', 'Kaisar', '', ''),
(498, 'SUCIPTA', 'HK-4', 'MARET', 'Bulanan', '', 'Erwan', '', ''),
(499, 'SARWONO', 'HK-4', 'MARET', 'Bulanan', '', 'Erwan', '', ''),
(500, 'EFENDI MANULANG', 'HK-4', 'MARET', 'Bulanan', '', 'Erwan', '', ''),
(501, 'JOKO TRIYANTO', 'HK-4', 'MARET', 'Bulanan', '', 'Erwan', '', ''),
(502, 'ANDI', 'HK-4', 'MARET', 'Bulanan', '', 'Fahroni', '', ''),
(503, 'SAHWAN', 'HK-4', 'MARET', 'Bulanan', '', 'Fahroni', '', ''),
(504, 'AJI', 'HK-4', 'MARET', 'Bulanan', '', 'Fahroni', '', ''),
(505, 'SILABON', 'HK-4', 'MARET', 'Bulanan', '', 'Fahroni', '', ''),
(506, 'ARBAIN', 'HK-4', 'MARET', 'Bulanan', '', 'Fahroni', '', ''),
(507, 'LASIS', 'HK-4', 'MARET', 'Bulanan', '', 'Fahroni', '', ''),
(508, 'SOFIAN SALEH', 'HK-4', 'MARET', 'Bulanan', '', 'Agus Sarjono', '', ''),
(509, 'SLAMET/RISWANDI', 'HK-4', 'MARET', 'Bulanan', '', 'Basuki', '', ''),
(510, 'HARYADI', 'HK-4', 'MARET', 'Bulanan', '', 'Basuki', '', ''),
(512, 'LUTFI', 'HK-4', 'MARET', 'Bulanan', '2021-04-06', 'Sobirin', '', ''),
(513, 'JAMILA', 'HK-5', 'MARET', 'Bulanan', '', 'Erwan', '', ''),
(514, 'TURMAN', 'HK-5', 'MARET', 'Bulanan', '', 'Bagus', '', ''),
(515, 'AKIL GUNAWAN', 'HK-5', 'MARET', 'Bulanan', '', 'Bagus', '', ''),
(516, 'HENDRI KUSUMA / YENI', 'HK-5', 'MARET', 'Bulanan', '', 'Bagus', '', ''),
(517, 'EDI', 'HK-5', 'MARET', 'Bulanan', '', 'Bagus', '', ''),
(518, 'ALESIUS BUNAWAN', 'HK-5', 'MARET', 'Bulanan', '', 'Bagus', '', ''),
(519, 'ROBBY RUBYANTO', 'HK-5', 'MARET', 'Bulanan', '', 'Imam T', '', ''),
(520, 'TEDY', 'HK-5', 'MARET', 'Bulanan', '', 'Imam T', '', ''),
(521, 'TEDRY', 'HK-5', 'MARET', 'Bulanan', '', 'Indra K', '', ''),
(522, 'REFLI ERFIN', 'HK-5', 'MARET', 'Bulanan', '', 'Indra K', '', ''),
(523, 'MEILIANA', 'HK-5', 'MARET', 'Bulanan', '', 'Kaisar', '', ''),
(524, 'ALI DUKI', 'HK-5', 'MARET', 'Bulanan', '', 'Kaisar', '', ''),
(525, 'HAMID ALI', 'HK-5', 'MARET', 'Bulanan', '', 'Kaisar', '', ''),
(526, 'KARIM GUSANI', 'HK-5', 'MARET', 'Bulanan', '', 'Ujang', '', ''),
(527, 'IRWANSYAH', 'HK-5', 'MARET', 'Bulanan', '', 'Ujang', '', ''),
(528, 'MARUAP NAPITUPULU NY./ ELFRIDA PANJAITAN', 'HK-5', 'MARET', 'Bulanan', '', 'Ujang', '', ''),
(529, 'A SUSANTO', 'HK-5', 'MARET', 'Bulanan', '', 'Ujang', '', ''),
(530, 'M JAMARIL AKBAR', 'HK-5', 'MARET', 'Bulanan', '2021-04-08', 'Ujang', '', ''),
(531, 'NAZARUDDIN ALWI', 'HK-5', 'MARET', 'Bulanan', '', 'A Riadi', '', ''),
(532, 'RIZAL ENDI', 'HK-5', 'MARET', 'Bulanan', '', 'Agus Sarjono', '', ''),
(533, 'BUSTAM HADORI', 'HK-5', 'MARET', 'Bulanan', '', 'Edy K', '', ''),
(534, 'DEDI RINDAS', 'HK-5', 'MARET', 'Bulanan', '', 'Edy K', '', '');

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
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1615092902, 1);

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `target` varchar(255) NOT NULL,
  `realisasi` varchar(255) NOT NULL,
  `nama_petugas` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `bulan_masuk` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`target`, `realisasi`, `nama_petugas`, `id`, `bulan_masuk`) VALUES
('4', '3', 'Alberto M', 132, 'MARET'),
('6', '0', 'Anggi', 133, ''),
('4', '0', 'Anne', 134, ''),
('10', '0', 'Aprilia PS', 135, ''),
('18', '0', 'Bagus', 136, ''),
('20', '1', 'Erwan', 139, ''),
('16', '1', 'Fahroni', 140, ''),
('36', '0', 'Imam T', 141, ''),
('58', '0', 'Indra K', 142, ''),
('38', '0', 'Kaisar', 143, ''),
('7', '0', 'Sari Citra', 144, ''),
('12', '0', 'Sobirin', 145, ''),
('8', '0', 'Sri Susi', 146, ''),
('14', '0', 'Tri Aprilia', 147, ''),
('44', '0', 'Ujang', 148, ''),
('8', '0', 'A Riadi', 149, ''),
('8', '0', 'Nanang', 150, ''),
('4', '0', 'A Maradona', 152, ''),
('7', '1', 'Agus Sarjono', 153, ''),
('4', '0', 'Basuki', 154, ''),
('17', '0', 'Edy K', 155, ''),
('3', '0', 'Citra', 156, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'evi1871autentikasi@gmail.com', 'evi1871', '$2y$10$HQ/nyzmK8MUwQnudBK/Qge0dL2h6PMX9RmDniOwhJ1HhtMAvzqTV6', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-03-06 23:10:03', '2021-03-06 23:10:03', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indexes for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indexes for table `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indexes for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

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
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=535;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
