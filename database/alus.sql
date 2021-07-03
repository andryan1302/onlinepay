-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2020 at 09:24 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alus`
--

-- --------------------------------------------------------

--
-- Table structure for table `alus_g`
--

CREATE TABLE `alus_g` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `alus_g`
--

INSERT INTO `alus_g` (`id`, `name`, `description`) VALUES
(1, 'admin', 'testaa'),
(20, 'Tata Usaha', ''),
(22, 'murid', 'Belajar'),
(23, 'admin2', 'Untuk Sekolah');

-- --------------------------------------------------------

--
-- Table structure for table `alus_gd`
--

CREATE TABLE `alus_gd` (
  `agd_id` int(11) NOT NULL,
  `ag_id` int(11) DEFAULT NULL,
  `enabled` int(1) DEFAULT NULL,
  `table_name` varchar(50) DEFAULT NULL,
  `table_is_filter` int(1) DEFAULT NULL,
  `table_where` varchar(50) DEFAULT NULL,
  `table_filter` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alus_gd`
--

INSERT INTO `alus_gd` (`agd_id`, `ag_id`, `enabled`, `table_name`, `table_is_filter`, `table_where`, `table_filter`) VALUES
(1, 1, 1, 'Test Maul', NULL, NULL, '+1++2++3++5++7+'),
(2, 2, 1, 'tesst', NULL, NULL, '+24+'),
(4, 14, 1, 'teest', NULL, NULL, '+1+'),
(5, 15, 1, 'teest', NULL, NULL, NULL),
(6, 28, 1, 'teest', NULL, NULL, NULL),
(7, 17, 1, 'teest', NULL, NULL, NULL),
(8, 16, 1, 'teest', NULL, NULL, NULL),
(9, 27, 1, 'teest', NULL, NULL, NULL),
(10, 30, 1, 'teest', NULL, NULL, NULL),
(11, 29, 1, 'teest', NULL, NULL, NULL),
(12, 21, 1, 'Ma', NULL, NULL, '+2++10+'),
(13, 20, 1, 'teest', NULL, NULL, NULL),
(14, 22, 1, 'teest', NULL, NULL, NULL),
(15, 31, 1, 'teest', NULL, NULL, NULL),
(17, 24, 1, 'teest', NULL, NULL, '+49++50++51+'),
(18, 25, 1, 'teest', NULL, NULL, NULL),
(19, 26, 1, 'teest', NULL, NULL, '+5+'),
(20, 18, 1, 'teest', NULL, NULL, '+3+'),
(21, 23, 1, 'teest', NULL, NULL, '+234+'),
(22, 33, 1, 'teest', NULL, NULL, NULL),
(23, 34, 1, 'teest', NULL, NULL, NULL),
(25, 88, 1, 'Tables', NULL, NULL, '+1++5++49++50+'),
(26, 89, 1, 'Tables', NULL, NULL, '+5+'),
(27, 86, 1, 'maulanaaaaa', NULL, NULL, '+1+');

-- --------------------------------------------------------

--
-- Table structure for table `alus_la`
--

CREATE TABLE `alus_la` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `alus_mg`
--

CREATE TABLE `alus_mg` (
  `menu_id` int(11) NOT NULL,
  `menu_parent` int(11) NOT NULL,
  `menu_nama` varchar(255) NOT NULL,
  `menu_uri` varchar(255) NOT NULL,
  `menu_target` varchar(255) DEFAULT NULL,
  `menu_icon` varchar(25) DEFAULT NULL,
  `order_num` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `alus_mg`
--

INSERT INTO `alus_mg` (`menu_id`, `menu_parent`, `menu_nama`, `menu_uri`, `menu_target`, `menu_icon`, `order_num`) VALUES
(11, 30, 'Menus', 'menus', '', 'fa fa-bars fa-fw', 1),
(12, 30, 'Group', 'group', '', 'fa fa-book fa-fw', 2),
(13, 30, 'User', 'users', '', 'fa fa-book fa-fw', 3),
(30, 0, 'Master', '#', '', 'fa fa-bars fa-fw', 1),
(78, 30, 'Tambah Group', 'inputgrup', '', 'fa fa-users fa-fw', 3),
(79, 30, 'Tagihan', 'inputtagihan', '', 'fa fa-briefcase fa-fw', 4),
(81, 30, 'history', 'inputhistory', '', 'fa fa-book fa-fw', 5),
(84, 30, 'Tagihan', 'tagihan', '', 'fa fa-briefcase fa-fw', 1),
(85, 30, 'History', 'history', '', 'fa fa-book fa-fw', 2),
(88, 30, 'Tambah Murid', 'inputmurid', '', 'fa fa-user-plus fa-fw', 1),
(89, 30, 'Tambah Kelas', 'inputkelas', '', 'fa fa-users fa-fw', 2);

-- --------------------------------------------------------

--
-- Table structure for table `alus_mga`
--

CREATE TABLE `alus_mga` (
  `id` int(11) NOT NULL,
  `id_group` mediumint(8) UNSIGNED NOT NULL,
  `id_menu` int(11) NOT NULL,
  `can_view` int(1) DEFAULT NULL,
  `can_edit` int(1) NOT NULL DEFAULT 0,
  `can_add` int(1) NOT NULL DEFAULT 0,
  `can_delete` int(1) NOT NULL DEFAULT 0,
  `psv` datetime DEFAULT NULL,
  `pev` datetime DEFAULT NULL,
  `psed` datetime DEFAULT NULL,
  `peed` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `alus_mga`
--

INSERT INTO `alus_mga` (`id`, `id_group`, `id_menu`, `can_view`, `can_edit`, `can_add`, `can_delete`, `psv`, `pev`, `psed`, `peed`) VALUES
(3858, 20, 30, 1, 0, 0, 0, '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00'),
(3859, 20, 11, 0, 0, 0, 0, '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00'),
(3860, 20, 12, 0, 0, 0, 0, '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00'),
(3861, 20, 13, 0, 0, 0, 0, '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00'),
(3862, 20, 78, 1, 1, 1, 1, '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00'),
(3863, 20, 79, 1, 1, 1, 1, '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00'),
(3864, 20, 81, 1, 1, 1, 1, '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00'),
(3874, 21, 30, 1, 0, 0, 0, '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00'),
(3875, 21, 11, 0, 0, 0, 0, '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00'),
(3876, 21, 12, 0, 0, 0, 0, '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00'),
(3877, 21, 13, 0, 0, 0, 0, '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00'),
(3878, 21, 78, 0, 0, 0, 0, '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00'),
(3879, 21, 79, 0, 0, 0, 0, '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00'),
(3880, 21, 81, 0, 0, 0, 0, '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00'),
(3881, 21, 82, 1, 1, 1, 1, '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00'),
(3882, 21, 83, 1, 1, 1, 1, '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00'),
(3883, 22, 30, 1, 0, 0, 0, '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00'),
(3884, 22, 11, 0, 0, 0, 0, '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00'),
(3885, 22, 12, 0, 0, 0, 0, '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00'),
(3886, 22, 13, 0, 0, 0, 0, '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00'),
(3887, 22, 78, 0, 0, 0, 0, '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00'),
(3888, 22, 79, 0, 0, 0, 0, '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00'),
(3889, 22, 81, 0, 0, 0, 0, '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00'),
(3890, 22, 82, 0, 0, 0, 0, '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00'),
(3891, 22, 84, 1, 1, 1, 1, '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00'),
(3892, 22, 85, 1, 1, 1, 1, '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00'),
(3935, 23, 30, 1, 0, 0, 0, '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00'),
(3936, 23, 11, 0, 0, 0, 0, '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00'),
(3937, 23, 12, 0, 0, 0, 0, '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00'),
(3938, 23, 13, 0, 0, 0, 0, '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00'),
(3939, 23, 78, 1, 1, 1, 1, '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00'),
(3940, 23, 79, 1, 1, 1, 1, '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00'),
(3941, 23, 81, 1, 1, 1, 1, '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00'),
(3942, 23, 84, 0, 0, 0, 0, '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00'),
(3943, 23, 85, 0, 0, 0, 0, '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00'),
(3944, 23, 88, 1, 1, 1, 1, '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00'),
(3945, 23, 89, 1, 1, 1, 1, '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00'),
(3946, 1, 30, 1, 1, 1, 1, '2016-09-06 10:55:00', '2016-09-06 10:55:00', '2016-08-08 12:06:00', '2016-08-09 13:50:00'),
(3947, 1, 11, 1, 1, 1, 1, '2016-09-06 10:55:00', '2016-09-06 10:55:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00'),
(3948, 1, 12, 1, 1, 1, 1, '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00'),
(3949, 1, 13, 1, 1, 1, 1, '1970-01-01 12:00:00', '1970-01-01 12:00:00', '1970-01-01 00:00:00', '1970-01-01 00:00:00'),
(3950, 1, 78, 0, 0, 0, 0, '1970-01-01 12:00:00', '1970-01-01 12:00:00', '1970-01-01 00:00:00', '1970-01-01 00:00:00'),
(3951, 1, 79, 0, 0, 0, 0, '1970-01-01 12:00:00', '1970-01-01 12:00:00', '1970-01-01 00:00:00', '1970-01-01 00:00:00'),
(3952, 1, 81, 0, 0, 0, 0, '1970-01-01 12:00:00', '1970-01-01 12:00:00', '1970-01-01 00:00:00', '1970-01-01 00:00:00'),
(3953, 1, 84, 0, 0, 0, 0, '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00'),
(3954, 1, 85, 0, 0, 0, 0, '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00'),
(3955, 1, 88, 0, 0, 0, 0, '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00'),
(3956, 1, 89, 1, 1, 1, 1, '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00', '1970-01-01 01:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `alus_u`
--

CREATE TABLE `alus_u` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(100) NOT NULL,
  `job_title` varchar(50) DEFAULT NULL,
  `abc` varchar(100) NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `ghi` varchar(255) NOT NULL,
  `def` varchar(255) DEFAULT NULL,
  `mno` varchar(40) DEFAULT NULL,
  `jkl` varchar(40) DEFAULT NULL,
  `stu` int(11) UNSIGNED DEFAULT NULL,
  `pqr` varchar(40) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `ht` int(1) DEFAULT 0,
  `picture` varchar(255) DEFAULT NULL,
  `mdo_id` int(11) DEFAULT NULL,
  `mos_id` int(11) DEFAULT NULL,
  `grup_type` int(11) DEFAULT NULL,
  `bpd_id` int(11) DEFAULT NULL,
  `bpd_id_2` int(11) DEFAULT NULL,
  `staff_pmk_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `alus_u`
--

INSERT INTO `alus_u` (`id`, `username`, `job_title`, `abc`, `ip_address`, `ghi`, `def`, `mno`, `jkl`, `stu`, `pqr`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`, `ht`, `picture`, `mdo_id`, `mos_id`, `grup_type`, `bpd_id`, `bpd_id_2`, `staff_pmk_id`) VALUES
(64, 'admins', 'admins', 'MTIzNDU2Nzg5MDEyMzQ1Nvqvv5U+5Kixew57njDPeg==', '::1', '$2y$08$.sbsuXatbF/d4/RvUy77GeeX/Nw48XoXXS/3Xurj7O/ujoQu3KGzK', 'xEfWFClsAdO4BnNm', '', '', NULL, '', 1469523580, 1595182897, 1, 'User', '', '', '11', 0, '1496118042.jpg', NULL, NULL, NULL, NULL, NULL, NULL),
(181, 'TU', 'Tata Usaha', 'MTIzNDU2Nzg5MDEyMzQ1Nu+qpp0l16i9dydy3TLJexUMnGM=', '::1', '$2y$08$NxWR7Pq7opWpFWAJpa70u.fGZYWEFzo5.tRNNTKvUhNZsKYNsTHvO', '0REVeSwfa2M9Uium', NULL, NULL, NULL, NULL, 1583728190, 1594733687, 1, 'Tatas', 'Usahas', NULL, '08980916908', 1, 'avatar_default.png', NULL, NULL, NULL, NULL, NULL, NULL),
(198, 'admin', 'admin', 'MTIzNDU2Nzg5MDEyMzQ1Nvqvv5U+5K64dw55njDPeg==', '::1', '$2y$08$AIg11NBgJ45zMW1/3v6Hu.IWaLIjJpRFIyog1BtVc1NLbUHY4gy62', 'KSX380mQmd9zLI2i', NULL, NULL, NULL, NULL, 1594733100, 1595186540, 1, 'admin', 'admin', NULL, '08980916908', 1, 'avatar_default.png', NULL, NULL, NULL, NULL, NULL, NULL),
(209, 'yudha', 'siswa', 'MTIzNDU2Nzg5MDEyMzQ1NuK+tpQx5K64dw55njDPeg==', '::1', '$2y$08$Jy6uVgZTRgB4NyHIaXPYkOkAuc6.X4u2tuEIghPhiGK/p.zLsFQzq', 'OwlkTbeG2N/bugAH', NULL, NULL, NULL, NULL, 1595186014, 1595186339, 1, 'yudha', 'salas', NULL, '123112312123', 1, 'avatar_default.png', NULL, NULL, NULL, NULL, NULL, NULL),
(210, 'irsal', 'siswa', 'MTIzNDU2Nzg5MDEyMzQ1NvK5oZ085K64dw55njDPeg==', '::1', '$2y$08$/F0Efk7ja7kAPfOJJI1o0.2I2mnVVjFelNN/VHo1TCwhx5e58Qyui', 'qiILEqbo7fdrBJUo', NULL, NULL, NULL, NULL, 1595186045, NULL, 1, 'muhammad', 'irsal', NULL, '1545457467', 1, 'avatar_default.png', NULL, NULL, NULL, NULL, NULL, NULL),
(211, 'andryan', 'siswa', 'MTIzNDU2Nzg5MDEyMzQ1Nvqlto4pxaeVcQp02T+OdFQC', '::1', '$2y$08$IhiDnWSW9lEoARv3pJOXHeVu6/ERzTo6nG/WzN4wLw/oaIA/IDMGC', 'MWRI4frh3tv70dVb', NULL, NULL, NULL, NULL, 1595186069, NULL, 1, 'andryan', 'liong', NULL, '08980916908', 1, 'avatar_default.png', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `alus_ug`
--

CREATE TABLE `alus_ug` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `alus_ug`
--

INSERT INTO `alus_ug` (`id`, `user_id`, `group_id`) VALUES
(1, 64, 1),
(68, 181, 20),
(74, 198, 23),
(86, 209, 22),
(87, 210, 22),
(88, 211, 22);

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `history_id` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tagihan` varchar(255) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `jumlah` int(11) NOT NULL,
  `metode_pembayaran` varchar(255) DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`history_id`, `nama`, `tagihan`, `tanggal`, `jumlah`, `metode_pembayaran`, `deskripsi`, `keterangan`) VALUES
('PO-799136', 'yudha', 'SPP Agustus', '2020-07-19', 700000, 'OVO | 08980916908', 'SPP Saja', 'selesai');

-- --------------------------------------------------------

--
-- Table structure for table `m_grup`
--

CREATE TABLE `m_grup` (
  `mg_id` int(11) NOT NULL,
  `mg_nama` varchar(255) DEFAULT NULL,
  `mg_deskripsi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_grup`
--

INSERT INTO `m_grup` (`mg_id`, `mg_nama`, `mg_deskripsi`) VALUES
(49, 'Angkatan 2017 | SPP-700000', 'SPP 700000 | Tidak bayar Uang Buku');

-- --------------------------------------------------------

--
-- Table structure for table `m_kelas`
--

CREATE TABLE `m_kelas` (
  `mk_id` mediumint(8) NOT NULL,
  `mk_nama` varchar(255) DEFAULT NULL,
  `mk_deskripsi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_kelas`
--

INSERT INTO `m_kelas` (`mk_id`, `mk_nama`, `mk_deskripsi`) VALUES
(19, 'X-RPL-1', 'Angkatan 2017'),
(20, 'X-RPL-2', 'Angkatan 2017'),
(21, 'X-RPL-3', 'Angkatan 2017');

-- --------------------------------------------------------

--
-- Table structure for table `sys_codes`
--

CREATE TABLE `sys_codes` (
  `srn_id` int(11) NOT NULL,
  `srn_code` varchar(50) DEFAULT NULL,
  `srn_value` int(11) DEFAULT NULL,
  `srn_length` int(11) DEFAULT 5,
  `srn_format` varchar(50) DEFAULT NULL,
  `srn_year` int(11) DEFAULT NULL,
  `srn_month` int(11) DEFAULT NULL,
  `srn_reset_by` varchar(20) DEFAULT 'NONE'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sys_codes`
--

INSERT INTO `sys_codes` (`srn_id`, `srn_code`, `srn_value`, `srn_length`, `srn_format`, `srn_year`, `srn_month`, `srn_reset_by`) VALUES
(1, 'SN-IDTOKO', 52, 5, '{VALUE}', 2017, 1, 'YEAR');

-- --------------------------------------------------------

--
-- Table structure for table `t_grup`
--

CREATE TABLE `t_grup` (
  `id` int(11) NOT NULL,
  `kelas_id` mediumint(8) NOT NULL,
  `group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_grup`
--

INSERT INTO `t_grup` (`id`, `kelas_id`, `group_id`) VALUES
(114, 19, 49),
(115, 20, 49),
(116, 21, 49);

-- --------------------------------------------------------

--
-- Table structure for table `t_kelas`
--

CREATE TABLE `t_kelas` (
  `tk_id` int(14) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `kelas_id` mediumint(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_kelas`
--

INSERT INTO `t_kelas` (`tk_id`, `user_id`, `kelas_id`) VALUES
(21, 209, 19),
(22, 210, 20),
(23, 211, 21);

-- --------------------------------------------------------

--
-- Table structure for table `t_tagihan`
--

CREATE TABLE `t_tagihan` (
  `tt_id` int(15) NOT NULL,
  `tt_nama` varchar(255) NOT NULL,
  `tt_tagihan` varchar(255) NOT NULL,
  `tt_jumlah` int(11) NOT NULL,
  `tt_deskripsi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_tagihan`
--

INSERT INTO `t_tagihan` (`tt_id`, `tt_nama`, `tt_tagihan`, `tt_jumlah`, `tt_deskripsi`) VALUES
(21, 'irsal', 'SPP Agustus', 700000, 'SPP Saja'),
(22, 'andryan', 'SPP Agustus', 700000, 'SPP Saja');

-- --------------------------------------------------------

--
-- Table structure for table `t_user_endpoint`
--

CREATE TABLE `t_user_endpoint` (
  `tue_id` int(22) NOT NULL,
  `tue_ip` varchar(75) NOT NULL,
  `tue_id_login` varchar(11) DEFAULT '0',
  `tue_endpoint` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_user_endpoint`
--

INSERT INTO `t_user_endpoint` (`tue_id`, `tue_ip`, `tue_id_login`, `tue_endpoint`) VALUES
(9, '8926d376-9656-4942-82a0-145ce3262eb9', '0', '{\"endpoint\":\"https://fcm.googleapis.com/fcm/send/dlrfzTlwERY:APA91bHBfq0S9QwFgXC_7BbSi3c61PtOb687tAEAlHi5k39XexEwTZtDsSnmuYM5OTex2WL7MNcm7LKPCEzIdV4AIaagAKnf-jQWZbw6Zi_aVm1suY3vwWdBpGUEKB5-kjgWkKlpJ5bF\",\"expirationTime\":null,\"keys\":{\"p256dh\":\"BCJdHlOxkhZjXXXQJZ1EprYpw-rP9Kb6y5p4glVB6ZB51UN3Uol-_w5KtpXv82ZkNKgX5EU6WrVyjeDRKKlaMUs\",\"auth\":\"xWQ87COB5PLiIsoR1ZNw7g\"}}'),
(10, 'fb386e80-c20f-4c14-9c05-16c069ea9390', '0', '{\"endpoint\":\"https://fcm.googleapis.com/fcm/send/dSi3LVhVJSM:APA91bHNM7kEvSEU6eF7li5S5MovvZWG0MBanArphrYd26GYSwYgrTCRIhXTXDYCUVl9-DofgFrsxrB-dYftB3lWNuhfwBLRkQrrV1hI7lsEvVam1aDHp9ws_l4ZUbnqWzwJDHaJhOho\",\"expirationTime\":null,\"keys\":{\"p256dh\":\"BOd6G9SlnGqrMILGFHWut1RD6JV5jIFXoXFz8RliC2R8PjNg3g-z0p9TN5KrIT5tqh9ZD4YN_HsFDWNo1brgfAw\",\"auth\":\"0ndzI8m_3dD3RGJ_EiCJOw\"}}'),
(11, 'e90c474e-d70b-4975-953f-873940e77272', '0', '{\"endpoint\":\"https://fcm.googleapis.com/fcm/send/cREzv9WlkS0:APA91bHOh9n19JSIICbYGaX53ZmO4wCyXqLdk7zODJ4bCtQ6MKBLzgCdYzYnln2TZ1Cp-E9EHmNqw2-XF0Iif398FmZx1fjQWRcB89O0qed8gB2ETPaUxy0LLaHrXpmsa5IsfB2SauSo\",\"expirationTime\":null,\"keys\":{\"p256dh\":\"BDs4453C_Nt4pHCT4mRP0ZNWq3m7EfF3D2wDlzVOx9fnzbt3j-QVWA8iPyXDeAg-ntRVJkA98rE7lX3Dzg2bOdU\",\"auth\":\"OBCLF2E1iZPlMwdMn4sEWw\"}}'),
(12, 'e90c474e-d70b-4975-953f-873940e77272', '0', '{\"endpoint\":\"https://fcm.googleapis.com/fcm/send/cREzv9WlkS0:APA91bHOh9n19JSIICbYGaX53ZmO4wCyXqLdk7zODJ4bCtQ6MKBLzgCdYzYnln2TZ1Cp-E9EHmNqw2-XF0Iif398FmZx1fjQWRcB89O0qed8gB2ETPaUxy0LLaHrXpmsa5IsfB2SauSo\",\"expirationTime\":null,\"keys\":{\"p256dh\":\"BDs4453C_Nt4pHCT4mRP0ZNWq3m7EfF3D2wDlzVOx9fnzbt3j-QVWA8iPyXDeAg-ntRVJkA98rE7lX3Dzg2bOdU\",\"auth\":\"OBCLF2E1iZPlMwdMn4sEWw\"}}');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alus_g`
--
ALTER TABLE `alus_g`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alus_gd`
--
ALTER TABLE `alus_gd`
  ADD PRIMARY KEY (`agd_id`);

--
-- Indexes for table `alus_la`
--
ALTER TABLE `alus_la`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alus_mg`
--
ALTER TABLE `alus_mg`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `alus_mga`
--
ALTER TABLE `alus_mga`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_groups_deleted` (`id_group`) USING BTREE,
  ADD KEY `fk_menu_deleted` (`id_menu`);

--
-- Indexes for table `alus_u`
--
ALTER TABLE `alus_u`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sys_users_idx1` (`id`) USING BTREE,
  ADD KEY `sys_users_idx2` (`id`) USING BTREE,
  ADD KEY `username` (`username`);

--
-- Indexes for table `alus_ug`
--
ALTER TABLE `alus_ug`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`) USING BTREE,
  ADD KEY `fk_users_groups_users1_idx` (`user_id`) USING BTREE,
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`) USING BTREE;

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`history_id`) USING BTREE,
  ADD KEY `jumlah_bayar` (`jumlah`),
  ADD KEY `nama_tagihan` (`tagihan`);

--
-- Indexes for table `m_grup`
--
ALTER TABLE `m_grup`
  ADD PRIMARY KEY (`mg_id`),
  ADD UNIQUE KEY `mg_nama` (`mg_nama`,`mg_deskripsi`) USING BTREE;

--
-- Indexes for table `m_kelas`
--
ALTER TABLE `m_kelas`
  ADD PRIMARY KEY (`mk_id`);

--
-- Indexes for table `sys_codes`
--
ALTER TABLE `sys_codes`
  ADD PRIMARY KEY (`srn_id`);

--
-- Indexes for table `t_grup`
--
ALTER TABLE `t_grup`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_kelas_grup` (`kelas_id`,`group_id`) USING BTREE,
  ADD KEY `group_data` (`group_id`);

--
-- Indexes for table `t_kelas`
--
ALTER TABLE `t_kelas`
  ADD PRIMARY KEY (`tk_id`),
  ADD UNIQUE KEY `uc_user_kelas` (`user_id`,`kelas_id`) USING BTREE,
  ADD KEY `kelas_data_2` (`kelas_id`);

--
-- Indexes for table `t_tagihan`
--
ALTER TABLE `t_tagihan`
  ADD PRIMARY KEY (`tt_id`),
  ADD KEY `jumlah_bayar` (`tt_jumlah`),
  ADD KEY `nama_tagihan` (`tt_tagihan`);

--
-- Indexes for table `t_user_endpoint`
--
ALTER TABLE `t_user_endpoint`
  ADD PRIMARY KEY (`tue_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alus_g`
--
ALTER TABLE `alus_g`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `alus_gd`
--
ALTER TABLE `alus_gd`
  MODIFY `agd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `alus_la`
--
ALTER TABLE `alus_la`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `alus_mg`
--
ALTER TABLE `alus_mg`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `alus_mga`
--
ALTER TABLE `alus_mga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3957;

--
-- AUTO_INCREMENT for table `alus_u`
--
ALTER TABLE `alus_u`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=212;

--
-- AUTO_INCREMENT for table `alus_ug`
--
ALTER TABLE `alus_ug`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `m_grup`
--
ALTER TABLE `m_grup`
  MODIFY `mg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `m_kelas`
--
ALTER TABLE `m_kelas`
  MODIFY `mk_id` mediumint(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `sys_codes`
--
ALTER TABLE `sys_codes`
  MODIFY `srn_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t_grup`
--
ALTER TABLE `t_grup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `t_kelas`
--
ALTER TABLE `t_kelas`
  MODIFY `tk_id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `t_tagihan`
--
ALTER TABLE `t_tagihan`
  MODIFY `tt_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `t_user_endpoint`
--
ALTER TABLE `t_user_endpoint`
  MODIFY `tue_id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `alus_ug`
--
ALTER TABLE `alus_ug`
  ADD CONSTRAINT `alus_ug_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `alus_g` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `alus_ug_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `alus_u` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `t_grup`
--
ALTER TABLE `t_grup`
  ADD CONSTRAINT `group_data` FOREIGN KEY (`group_id`) REFERENCES `m_grup` (`mg_id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `kelas_data` FOREIGN KEY (`kelas_id`) REFERENCES `m_kelas` (`mk_id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `t_kelas`
--
ALTER TABLE `t_kelas`
  ADD CONSTRAINT `kelas_data_2` FOREIGN KEY (`kelas_id`) REFERENCES `m_kelas` (`mk_id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `user_data` FOREIGN KEY (`user_id`) REFERENCES `alus_u` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
