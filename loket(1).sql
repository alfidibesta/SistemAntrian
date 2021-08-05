-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2021 at 09:59 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loket`
--

-- --------------------------------------------------------

--
-- Table structure for table `antrian`
--

CREATE TABLE `antrian` (
  `id_antrian` int(20) NOT NULL,
  `tgl_antrian` date NOT NULL,
  `no_antrian` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `antrian`
--

INSERT INTO `antrian` (`id_antrian`, `tgl_antrian`, `no_antrian`) VALUES
(1, '2021-07-08', '1'),
(2, '2021-07-08', '1'),
(3, '2021-07-08', '1'),
(4, '2021-07-08', '1'),
(5, '2021-07-08', '1'),
(6, '2021-07-08', '12'),
(7, '2021-07-10', '2'),
(8, '2021-07-12', '2'),
(9, '2021-07-12', '1'),
(10, '2021-07-12', '1'),
(11, '2021-07-12', '1'),
(12, '2021-07-12', '1'),
(13, '2021-07-12', '1'),
(14, '2021-07-12', '1'),
(15, '2021-07-12', '1'),
(16, '2021-07-15', '1'),
(17, '2021-07-15', '1'),
(18, '2021-07-15', '1'),
(19, '2021-07-15', '1'),
(20, '2021-07-21', '1'),
(21, '2021-07-21', '1'),
(22, '2021-07-21', '1'),
(23, '2021-07-21', '1'),
(24, '2021-07-21', '1'),
(25, '2021-07-23', '1'),
(26, '2021-07-23', '1'),
(27, '2021-07-23', '1'),
(28, '2021-07-23', '1'),
(29, '2021-07-23', '1'),
(30, '2021-07-23', '1'),
(31, '2021-07-23', '1'),
(32, '2021-07-23', '2'),
(33, '2021-07-23', '3'),
(34, '2021-07-23', '4'),
(35, '2021-07-23', '5'),
(36, '2021-07-23', '6'),
(37, '2021-07-23', '7'),
(38, '2021-07-23', '8'),
(39, '2021-07-23', '9'),
(40, '2021-07-23', '10'),
(41, '2021-07-23', '10'),
(42, '2021-07-23', '10'),
(43, '2021-07-23', '10'),
(44, '2021-07-23', '11'),
(45, '2021-07-23', '12'),
(46, '2021-07-23', '13'),
(47, '2021-07-23', '14'),
(48, '2021-07-24', '1'),
(49, '2021-07-24', '1'),
(50, '2021-07-24', '1'),
(51, '2021-07-24', '1'),
(52, '2021-07-24', '1'),
(53, '2021-07-24', '1'),
(54, '2021-07-24', '1'),
(55, '2021-07-25', '1'),
(56, '2021-07-25', '1'),
(57, '2021-07-25', '2'),
(58, '2021-07-25', '1'),
(59, '2021-07-25', '2'),
(60, '2021-07-25', '1'),
(61, '2021-07-25', '2'),
(62, '2021-07-25', '3'),
(63, '2021-07-26', '1'),
(64, '2021-07-26', '2'),
(65, '2021-07-26', '3'),
(66, '2021-07-26', '4'),
(67, '2021-07-26', '5'),
(68, '2021-07-26', '6'),
(69, '2021-07-26', '7'),
(70, '2021-07-26', '8'),
(71, '2021-07-26', '8'),
(72, '2021-07-26', '9'),
(73, '2021-07-26', '9'),
(74, '2021-07-26', '10'),
(75, '2021-07-26', '10'),
(76, '2021-07-26', '11'),
(77, '2021-07-26', '12'),
(78, '2021-07-26', '13'),
(79, '2021-07-26', '14'),
(80, '2021-07-26', '15'),
(81, '2021-07-26', '16'),
(82, '2021-07-26', '17'),
(83, '2021-07-26', '18'),
(84, '2021-07-26', '19'),
(85, '2021-07-26', '20'),
(86, '2021-07-26', '21'),
(87, '2021-07-26', '22'),
(88, '2021-07-26', '23'),
(89, '2021-07-26', '23'),
(90, '2021-07-27', '1'),
(91, '2021-07-27', '2'),
(92, '2021-07-27', '3'),
(93, '2021-07-27', '4'),
(94, '2021-07-27', '5'),
(95, '2021-07-27', '5'),
(96, '2021-07-28', '1'),
(97, '2021-07-28', '2'),
(98, '2021-08-02', '1'),
(99, '2021-08-02', '1'),
(100, '2021-08-02', '2'),
(101, '2021-08-02', '2'),
(102, '2021-08-02', '3'),
(103, '2021-08-02', '4'),
(104, '2021-08-02', '5'),
(105, '2021-08-02', '6'),
(106, '2021-08-02', '7'),
(107, '2021-08-02', '8'),
(108, '2021-08-02', '9'),
(109, '2021-08-02', '10'),
(110, '2021-08-02', '11'),
(111, '2021-08-02', '12'),
(112, '2021-08-02', '12'),
(113, '2021-08-02', '12'),
(114, '2021-08-02', '12'),
(115, '2021-08-02', '13'),
(116, '2021-08-02', '14'),
(117, '2021-08-02', '15'),
(118, '2021-08-02', '16'),
(119, '2021-08-03', '1'),
(120, '2021-08-03', '2'),
(121, '2021-08-03', '2'),
(122, '2021-08-03', '3'),
(123, '2021-08-03', '3'),
(124, '2021-08-03', '4'),
(125, '2021-08-03', '5'),
(126, '2021-08-03', '6'),
(127, '2021-08-03', '7'),
(128, '2021-08-03', '8'),
(129, '2021-08-03', '9'),
(130, '2021-08-03', '10'),
(131, '2021-08-03', '11'),
(132, '2021-08-03', '12'),
(133, '2021-08-03', '13'),
(134, '2021-08-03', '14'),
(135, '2021-08-03', '15'),
(136, '2021-08-04', '1'),
(137, '2021-08-04', '2'),
(138, '2021-08-04', '3'),
(139, '2021-08-04', '4'),
(140, '2021-08-04', '5'),
(141, '2021-08-04', '6'),
(142, '2021-08-04', '7'),
(143, '2021-08-04', '8'),
(144, '2021-08-04', '8'),
(145, '2021-08-04', '9'),
(146, '2021-08-04', '10'),
(147, '2021-08-04', '11'),
(148, '2021-08-04', '11'),
(149, '2021-08-04', '12'),
(150, '2021-08-04', '13'),
(151, '2021-08-04', '14');

-- --------------------------------------------------------

--
-- Table structure for table `antrian_loket`
--

CREATE TABLE `antrian_loket` (
  `id_antrian_loket` int(20) NOT NULL,
  `id_antrian` int(20) NOT NULL,
  `loket_id` int(10) NOT NULL,
  `no_antrian_loket` int(11) DEFAULT NULL,
  `status` varchar(100) NOT NULL,
  `tgl_antrian_loket` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `antrian_loket`
--

INSERT INTO `antrian_loket` (`id_antrian_loket`, `id_antrian`, `loket_id`, `no_antrian_loket`, `status`, `tgl_antrian_loket`) VALUES
(103, 0, 3, 1, '', '2021-08-02'),
(104, 0, 2, 2, '', '2021-08-02'),
(106, 0, 3, 3, '', '2021-08-02'),
(107, 0, 3, 4, '', '2021-08-02'),
(108, 0, 2, 5, '', '2021-08-02'),
(109, 0, 2, 6, '', '2021-08-02'),
(110, 0, 1, 7, '', '2021-08-02'),
(111, 0, 3, 8, '', '2021-08-02'),
(112, 0, 3, 9, '', '2021-08-02'),
(113, 0, 3, 10, '', '2021-08-02'),
(114, 0, 3, 11, '', '2021-08-02'),
(115, 0, 3, 12, '', '2021-08-02'),
(119, 0, 3, 13, '', '2021-08-02'),
(120, 0, 3, 14, '', '2021-08-02'),
(121, 0, 3, 15, 'Belum dipanggil', '2021-08-02'),
(125, 0, 3, 16, 'Belum dipanggil', '2021-08-02'),
(126, 0, 1, 1, 'selesai', '2021-08-03'),
(127, 0, 1, 2, 'selesai', '2021-08-03'),
(129, 0, 2, 3, 'Belum dipanggil', '2021-08-03'),
(131, 0, 2, 24, 'Belum dipanggil', '2021-08-03'),
(133, 0, 1, 5, 'selesai', '2021-08-03'),
(134, 0, 1, 6, 'selesai', '2021-08-03'),
(135, 0, 4, 7, 'Belum dipanggil', '2021-08-03'),
(136, 0, 4, 8, 'Belum dipanggil', '2021-08-03'),
(137, 0, 1, 9, 'selesai', '2021-08-03'),
(138, 0, 1, 10, 'selesai', '2021-08-03'),
(139, 0, 1, 11, 'selesai', '2021-08-03'),
(140, 0, 1, 12, 'selesai', '2021-08-03'),
(141, 0, 1, 13, 'selesai', '2021-08-03'),
(142, 0, 1, 14, 'Belum dipanggil', '2021-08-03'),
(143, 0, 1, 15, 'Belum dipanggil', '2021-08-03'),
(144, 0, 2, 1, '<span class=\"label label-danger\">Di Batalkan</span>', '2021-08-04'),
(145, 0, 1, 2, 'selesai', '2021-08-04'),
(146, 0, 2, 3, '<span class=\"label label-success\">Sudah terlayani</span>', '2021-08-04'),
(147, 0, 1, 4, 'selesai', '2021-08-04'),
(148, 0, 2, 5, '<span class=\"label label-success\">Sudah terlayani</span>', '2021-08-04'),
(149, 0, 1, 6, 'Belum dipanggil', '2021-08-04'),
(150, 0, 3, 7, 'Belum dipanggil', '2021-08-04'),
(151, 0, 1, 8, 'Belum dipanggil', '2021-08-04'),
(152, 0, 2, 8, '<span class=\"label label-danger\">Di Batalkan</span>', '2021-08-04'),
(153, 0, 2, 9, '<span class=\"label label-success\">Sudah terlayani</span>', '2021-08-04'),
(154, 0, 2, 10, '<span class=\"label label-success\">Sudah terlayani</span>', '2021-08-04'),
(155, 0, 2, 11, '<span class=\"label label-success\">Sudah terlayani</span>', '2021-08-04'),
(157, 0, 2, 12, '<span class=\"label label-danger\">Di Batalkan</span>', '2021-08-04'),
(158, 0, 2, 13, '<span class=\"label label-warning blok\">Belum terlayani</span>', '2021-08-04'),
(159, 0, 2, 14, '<span class=\"label label-warning blok\">Belum terlayani</span>', '2021-08-04');

-- --------------------------------------------------------

--
-- Table structure for table `loket`
--

CREATE TABLE `loket` (
  `loket_id` int(11) NOT NULL,
  `kode_loket` varchar(10) NOT NULL,
  `name_loket` varchar(40) NOT NULL,
  `keterangan` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loket`
--

INSERT INTO `loket` (`loket_id`, `kode_loket`, `name_loket`, `keterangan`) VALUES
(1, 'LKT1', 'Loket 1', 'Permohonan KTP'),
(2, 'LKT2', 'Loket 2', 'Permohonan Akte'),
(3, 'LKT3', 'Loket 3', 'Perkawinan'),
(4, 'LKT4', 'Loket 4', 'Surat Pindah'),
(5, 'LKT5', 'Loket 5', 'HEEH');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(200) DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `loket_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `name`, `address`, `level`, `loket_id`) VALUES
(1, 'admin@admin.com', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'Admin', 'Malang', 1, NULL),
(2, 'loket1', '8cb2237d0679ca88db6464eac60da96345513964', 'Loket 1', 'Malang', 2, 1),
(3, 'loket2', '8cb2237d0679ca88db6464eac60da96345513964', 'Loket 2', 'Magetan', 2, 2),
(4, 'loket3', '8cb2237d0679ca88db6464eac60da96345513964', 'loket 3', 'Malang', 2, 3),
(102, 'loket4', '8cb2237d0679ca88db6464eac60da96345513964', 'Loket 4', 'Malang', 2, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `antrian`
--
ALTER TABLE `antrian`
  ADD PRIMARY KEY (`id_antrian`);

--
-- Indexes for table `antrian_loket`
--
ALTER TABLE `antrian_loket`
  ADD PRIMARY KEY (`id_antrian_loket`);

--
-- Indexes for table `loket`
--
ALTER TABLE `loket`
  ADD PRIMARY KEY (`loket_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `antrian`
--
ALTER TABLE `antrian`
  MODIFY `id_antrian` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

--
-- AUTO_INCREMENT for table `antrian_loket`
--
ALTER TABLE `antrian_loket`
  MODIFY `id_antrian_loket` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;

--
-- AUTO_INCREMENT for table `loket`
--
ALTER TABLE `loket`
  MODIFY `loket_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
