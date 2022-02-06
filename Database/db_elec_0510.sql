-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2022 at 04:38 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_electric`
--

-- --------------------------------------------------------

--
-- Table structure for table `khoiluong_vattu`
--

CREATE TABLE `khoiluong_vattu` (
  `ID` int(11) NOT NULL,
  `tenvattu` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `donvi` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `soluong` int(11) NOT NULL,
  `duphong` double DEFAULT NULL,
  `tongkhoiluong` double NOT NULL,
  `dongia` double NOT NULL,
  `tongdongia` double NOT NULL,
  `ghichu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `khoiluong_vattu`
--

INSERT INTO `khoiluong_vattu` (`ID`, `tenvattu`, `donvi`, `soluong`, `duphong`, `tongkhoiluong`, `dongia`, `tongdongia`, `ghichu`) VALUES
(1, 'Tấm pin Sunergy 450W', 'Tấm', 2272, 0, 2272, 2437000, 5536864000, ''),
(2, 'Inverter Sungrow', 'Bộ', 8, 0, 8, 134040000, 1072320000, ''),
(3, 'COM 100D', 'Bộ', 1, 0, 1, 17500000, 17500000, '');

-- --------------------------------------------------------

--
-- Table structure for table `sanluongdien`
--

CREATE TABLE `sanluongdien` (
  `id` int(11) NOT NULL,
  `sanluong` double NOT NULL,
  `ngaytieuthu` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sanluongdien`
--

INSERT INTO `sanluongdien` (`id`, `sanluong`, `ngaytieuthu`) VALUES
(15, 111, '2022-01-01'),
(17, 3333, '2022-01-04'),
(18, 3333, '2022-01-03'),
(19, 3333, '2022-04-27'),
(21, 333, '2021-12-16'),
(22, 3333, '2022-01-12'),
(23, 333, '2021-11-17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `khoiluong_vattu`
--
ALTER TABLE `khoiluong_vattu`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `sanluongdien`
--
ALTER TABLE `sanluongdien`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `khoiluong_vattu`
--
ALTER TABLE `khoiluong_vattu`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sanluongdien`
--
ALTER TABLE `sanluongdien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
