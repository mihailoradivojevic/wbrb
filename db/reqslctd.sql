-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2025 at 09:29 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aleksa`
--

-- --------------------------------------------------------

--
-- Table structure for table `reqslctd`
--

CREATE TABLE `reqslctd` (
  `id` int(2) NOT NULL,
  `targetliveweight` varchar(54) DEFAULT NULL,
  `agedaysrange` varchar(29) DEFAULT NULL,
  `energykcal` int(4) DEFAULT NULL,
  `energymj` decimal(6,4) DEFAULT NULL,
  `cpproc` decimal(6,4) DEFAULT NULL,
  `metproc` decimal(5,4) DEFAULT NULL,
  `metcysproc` decimal(5,4) DEFAULT NULL,
  `lysproc` decimal(5,4) DEFAULT NULL,
  `thrproc` decimal(5,4) DEFAULT NULL,
  `tryproc` decimal(5,4) DEFAULT NULL,
  `argproc` decimal(5,4) DEFAULT NULL,
  `valproc` decimal(5,4) DEFAULT NULL,
  `leuproc` decimal(5,4) DEFAULT NULL,
  `isoproc` decimal(5,4) DEFAULT NULL,
  `hisproc` decimal(5,4) DEFAULT NULL,
  `phenproc` decimal(5,4) DEFAULT NULL,
  `calcproc` decimal(5,4) DEFAULT NULL,
  `phosavlbproc` decimal(5,4) DEFAULT NULL,
  `naproc` decimal(5,4) DEFAULT NULL,
  `mnmg` decimal(6,4) DEFAULT NULL,
  `mnmgsupp` decimal(7,4) DEFAULT NULL,
  `femg` decimal(6,4) DEFAULT NULL,
  `femgsupp` decimal(6,4) DEFAULT NULL,
  `cumg` decimal(5,4) DEFAULT NULL,
  `cumgsupp` decimal(6,4) DEFAULT NULL,
  `znmg` decimal(6,4) DEFAULT NULL,
  `znmgsupp` decimal(7,4) DEFAULT NULL,
  `img` decimal(5,4) DEFAULT NULL,
  `imgsupp` decimal(5,4) DEFAULT NULL,
  `semg` decimal(5,4) DEFAULT NULL,
  `semgsupp` decimal(5,4) DEFAULT NULL,
  `vitaiu` decimal(8,4) DEFAULT NULL,
  `vitaiusupp` decimal(9,4) DEFAULT NULL,
  `vitdiu` decimal(8,4) DEFAULT NULL,
  `vitdiusupp` decimal(8,4) DEFAULT NULL,
  `viteiu` decimal(6,4) DEFAULT NULL,
  `viteiusupp` decimal(6,4) DEFAULT NULL,
  `vitkiu` decimal(5,4) DEFAULT NULL,
  `vitkiusupp` decimal(5,4) DEFAULT NULL,
  `thiaminmg` decimal(5,4) DEFAULT NULL,
  `thiaminmgsupp` decimal(5,4) DEFAULT NULL,
  `riboflavinmg` decimal(5,4) DEFAULT NULL,
  `riboflavinmgsupp` decimal(5,4) DEFAULT NULL,
  `pyridoxmg` decimal(5,4) DEFAULT NULL,
  `panthacdmg` decimal(6,4) DEFAULT NULL,
  `panthacdmgsupp` decimal(6,4) DEFAULT NULL,
  `folacdmg` decimal(5,4) DEFAULT NULL,
  `biotmg` decimal(5,4) DEFAULT NULL,
  `miacinmg` decimal(6,4) DEFAULT NULL,
  `miacinmgsupp` decimal(6,4) DEFAULT NULL,
  `cholmg` decimal(7,4) DEFAULT NULL,
  `cholmgsupp` decimal(8,4) DEFAULT NULL,
  `cianocobalmg` decimal(5,4) DEFAULT NULL,
  `cianocobalmgsupp` decimal(5,4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `reqslctd`
--

INSERT INTO `reqslctd` (`id`, `targetliveweight`, `agedaysrange`, `energykcal`, `energymj`, `cpproc`, `metproc`, `metcysproc`, `lysproc`, `thrproc`, `tryproc`, `argproc`, `valproc`, `leuproc`, `isoproc`, `hisproc`, `phenproc`, `calcproc`, `phosavlbproc`, `naproc`, `mnmg`, `mnmgsupp`, `femg`, `femgsupp`, `cumg`, `cumgsupp`, `znmg`, `znmgsupp`, `img`, `imgsupp`, `semg`, `semgsupp`, `vitaiu`, `vitaiusupp`, `vitdiu`, `vitdiusupp`, `viteiu`, `viteiusupp`, `vitkiu`, `vitkiusupp`, `thiaminmg`, `thiaminmgsupp`, `riboflavinmg`, `riboflavinmgsupp`, `pyridoxmg`, `panthacdmg`, `panthacdmgsupp`, `folacdmg`, `biotmg`, `miacinmg`, `miacinmgsupp`, `cholmg`, `cholmgsupp`, `cianocobalmg`, `cianocobalmgsupp`) VALUES
(1, 'Low nutrient density diet specifications for broilers', '0-18 days, starter', 2850, 11.9324, 21.0000, 0.4500, 0.9000, 1.2000, 0.6800, 0.2100, 1.3000, 0.7800, 1.2000, 0.6800, 0.3700, 0.7000, 0.9500, 0.4500, 0.2200, 70.0000, 120.0000, 20.0000, 40.0000, 8.0000, 16.0000, 70.0000, 100.0000, 0.5000, 1.2500, 0.3000, 0.3000, 8000.0000, 12000.0000, 3500.0000, 5000.0000, 50.0000, 75.0000, 0.5000, 3.0000, 4.0000, 3.0000, 5.0000, 8.0000, 4.0000, 14.0000, 13.0000, 1.0000, 0.1000, 40.0000, 55.0000, 400.0000, 1600.0000, 0.0120, 0.0160);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reqslctd`
--
ALTER TABLE `reqslctd`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reqslctd`
--
ALTER TABLE `reqslctd`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
