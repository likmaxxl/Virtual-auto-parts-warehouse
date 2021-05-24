-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2021 at 01:35 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `virtuelni_magacin`
--

-- --------------------------------------------------------

--
-- Table structure for table `delovi`
--

CREATE TABLE `delovi` (
  `id` int(11) NOT NULL,
  `naziv dela` varchar(100) NOT NULL,
  `marka` varchar(100) NOT NULL,
  `detalji` varchar(200) NOT NULL,
  `slika` varchar(255) NOT NULL,
  `cena` int(11) NOT NULL,
  `kolicina` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delovi`
--

INSERT INTO `delovi` (`id`, `naziv dela`, `marka`, `detalji`, `slika`, `cena`, `kolicina`) VALUES
(2, '12312', '3213', '131313', 'images/111111111111111111111.jpg', 123, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `delovi`
--
ALTER TABLE `delovi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `delovi`
--
ALTER TABLE `delovi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
