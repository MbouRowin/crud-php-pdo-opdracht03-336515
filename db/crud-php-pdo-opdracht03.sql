-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2023 at 11:39 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attractiepark`
--

-- --------------------------------------------------------

--
-- Table structure for table `achtbaan`
--

CREATE TABLE `achtbaan` (
  `Id` int(11) NOT NULL,
  `NaamAchtbaan` varchar(128) NOT NULL,
  `NaamPretpark` varchar(128) NOT NULL,
  `Land` varchar(128) NOT NULL,
  `Topsnelheid` int(11) NOT NULL,
  `Hoogte` int(11) NOT NULL,
  `Datum` date NOT NULL,
  `Cijfer` decimal(3,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `achtbaan`
--

INSERT INTO `achtbaan` (`Id`, `NaamAchtbaan`, `NaamPretpark`, `Land`, `Topsnelheid`, `Hoogte`, `Datum`, `Cijfer`) VALUES
(2, 'Red Force', 'Ferrari Land', 'Spanje', 192, 112, '1968-02-03', '9.2'),
(3, 'Ring Racer', 'Circuit Nurnberg', 'Duitsland', 160, 110, '1974-01-08', '8.7'),
(4, 'Furios Baco', 'PortAventura', 'Spanje', 138, 23, '2018-06-06', '5.5'),
(5, 'Shambala', 'PortAventura', 'Spanje', 134, 102, '2017-03-04', '9.7');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achtbaan`
--
ALTER TABLE `achtbaan`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `achtbaan`
--
ALTER TABLE `achtbaan`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
