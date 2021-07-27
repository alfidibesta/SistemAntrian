-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2021 at 02:09 PM
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
(39, '2021-07-23', '9');

-- --------------------------------------------------------

--
-- Table structure for table `antrian_loket`
--

CREATE TABLE `antrian_loket` (
  `id_antrian_loket` int(20) NOT NULL,
  `id_antrian` int(20) NOT NULL,
  `loket_id` int(10) NOT NULL,
  `no_antrian_loket` varchar(20) DEFAULT NULL,
  `tgl_antrian_loket` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `antrian_loket`
--

INSERT INTO `antrian_loket` (`id_antrian_loket`, `id_antrian`, `loket_id`, `no_antrian_loket`, `tgl_antrian_loket`) VALUES
(20, 0, 0, '1', '2021-07-15'),
(21, 0, 0, '1', '2021-07-15'),
(22, 0, 0, '1', '2021-07-15'),
(23, 0, 0, '1', '2021-07-15'),
(24, 0, 15, '1', '2021-07-21'),
(25, 0, 16, '1', '2021-07-21'),
(26, 0, 15, '0', '2021-07-21'),
(27, 0, 15, '1', '2021-07-21'),
(28, 0, 15, '0', '2021-07-21'),
(29, 0, 15, NULL, '2021-07-23'),
(30, 0, 151, NULL, '2021-07-23'),
(31, 0, 151, NULL, '2021-07-23'),
(32, 0, 15, NULL, '2021-07-23'),
(33, 0, 15, '1', '2021-07-23'),
(34, 0, 15, '1', '2021-07-23'),
(35, 0, 16, '1', '2021-07-23'),
(36, 0, 15, '2', '2021-07-23'),
(37, 0, 15, '3', '2021-07-23'),
(38, 0, 16, '4', '2021-07-23'),
(39, 0, 17, '5', '2021-07-23'),
(40, 0, 18, '6', '2021-07-23'),
(41, 0, 15, '7', '2021-07-23'),
(42, 0, 15, '8', '2021-07-23'),
(43, 0, 16, '9', '2021-07-23');

-- --------------------------------------------------------

--
-- Table structure for table `loket`
--

CREATE TABLE `loket` (
  `loket_id` int(11) NOT NULL,
  `kode_loket` varchar(10) NOT NULL,
  `name` varchar(40) NOT NULL,
  `keterangan` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loket`
--

INSERT INTO `loket` (`loket_id`, `kode_loket`, `name`, `keterangan`) VALUES
(15, 'LKT1', 'Loket 1', 'Permohonan KTP'),
(16, 'LKT2', 'Loket 2', 'Permohonan Akte'),
(17, 'LKT3', 'Loket 3', 'Perkawinan'),
(18, 'LKT4', 'Loket 4', 'Surat Pindah');

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
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `name`, `address`, `level`) VALUES
(1, 'admin@admin.com', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'Admin', 'Malang', 1),
(2, 'loket1', '2ef3470e94ceb88d2700d0af05fd0902f199d8d7', 'B', 'Malang', 2),
(3, 'Loket 2', 'f4ebf33fa36dc5646c0b0f2d75c302641dd3bee1', 'Besta Alfidi', 'Magetan', 2),
(5, 'pengunjung', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Pengunjung', 'Malang', 2);

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
  MODIFY `id_antrian` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `antrian_loket`
--
ALTER TABLE `antrian_loket`
  MODIFY `id_antrian_loket` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `loket`
--
ALTER TABLE `loket`
  MODIFY `loket_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
