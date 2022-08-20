-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 21, 2022 at 03:32 AM
-- Server version: 10.6.7-MariaDB-2ubuntu1.1
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbltest`
--

CREATE TABLE `tbltest` (
  `id` int(10) NOT NULL,
  `NIM` varchar(12) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `hp` varchar(14) NOT NULL,
  `email` varchar(25) NOT NULL,
  `jk` char(1) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `tbltest`
--

INSERT INTO `tbltest` (`id`, `NIM`, `nama`, `hp`, `email`, `jk`, `alamat`) VALUES
(1, '2058644', 'Anthony Ullrich', '245.716.7401x8', 'aisha.kuphal@example.org', '', '385 Stone Greens Suite 678\nJerrellchester, NC 0699'),
(6, '12150311480', 'M. WIRA ADE KUSUMA', '082391552478', 'mwiraadekusuma1@gmail.com', 'L', 'Riau');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbltest`
--
ALTER TABLE `tbltest`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbltest`
--
ALTER TABLE `tbltest`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
