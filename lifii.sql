-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2022 at 10:58 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lifii`
--

-- --------------------------------------------------------

--
-- Table structure for table `rdpu`
--

CREATE TABLE `rdpu` (
  `no` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `satuthn` varchar(100) NOT NULL,
  `tigathn` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rdpu`
--

INSERT INTO `rdpu` (`no`, `nama`, `jenis`, `satuthn`, `tigathn`) VALUES
(1, 'Sucorinvest Money Market Fund', 'Pasar Uang', '4.59%', '17.84%'),
(2, 'Sucorinvest Sharia Money Market Fund', 'Pasar Uang', '4.19%', '16.97%'),
(3, 'Danamas Rupiah Plus', 'Pasar Uang', '3.74%', '14.98%');

-- --------------------------------------------------------

--
-- Table structure for table `reksadana`
--

CREATE TABLE `reksadana` (
  `no` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `satuthn` varchar(100) NOT NULL,
  `tigathn` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reksadana`
--

INSERT INTO `reksadana` (`no`, `nama`, `jenis`, `satuthn`, `tigathn`) VALUES
(1, 'Sucorinvest Flexi Fund	', 'Campuran', '19.64%	', '38.17%	'),
(2, 'Sucorinvest Sharia Equity Fund	', 'Saham', '8.51%	', '18.61%	'),
(3, 'Sucorinvest Maxi Fund	', 'Saham', '23.27%		', '18.14%	'),
(4, 'Sucorinvest Equity Fund	', 'Saham	', '28.12%	', '31.18%	'),
(5, 'Danamasas Stabil', 'Obligasi', '5.32%', '22.05%');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(8, 'Pure Coding', 'purecodingofficial@gmail.com', '0139a3c5cf42394be982e766c93f5ed0'),
(9, 'tes', 'ets@gmail.com', '28b662d883b6d76fd96e4ddc5e9ba780'),
(10, 'ilham', 'tes@gmail.com', '202cb962ac59075b964b07152d234b70'),
(11, 'admin', 'admin@gmail.com', '202cb962ac59075b964b07152d234b70'),
(12, 'tes', '123@gmail.com', '202cb962ac59075b964b07152d234b70'),
(13, 'a', 'a@gmail.com', '202cb962ac59075b964b07152d234b70'),
(14, '1', '1@gmail.com', '202cb962ac59075b964b07152d234b70'),
(15, 'ilham', 'ilham_8944nugraha@apps.ipb.ac.id', '202cb962ac59075b964b07152d234b70'),
(16, 'tes', 'tes1@gmail.com', '28b662d883b6d76fd96e4ddc5e9ba780'),
(17, '1', 'nugraha8090@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b'),
(18, 'a', 'aa@gmail.com', '0cc175b9c0f1b6a831c399e269772661'),
(19, 'q', '12@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b'),
(20, 'ilham', 'ilham@gmail.com', '202cb962ac59075b964b07152d234b70'),
(21, 'admin', 'admin1@gmail.com', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rdpu`
--
ALTER TABLE `rdpu`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `reksadana`
--
ALTER TABLE `reksadana`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rdpu`
--
ALTER TABLE `rdpu`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
