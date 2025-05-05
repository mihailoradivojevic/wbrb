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
-- Table structure for table `reqexpo`
--

CREATE TABLE `reqexpo` (
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
-- Dumping data for table `reqexpo`
--

INSERT INTO `reqexpo` (`id`, `targetliveweight`, `agedaysrange`, `energykcal`, `energymj`, `cpproc`, `metproc`, `metcysproc`, `lysproc`, `thrproc`, `tryproc`, `argproc`, `valproc`, `leuproc`, `isoproc`, `hisproc`, `phenproc`, `calcproc`, `phosavlbproc`, `naproc`, `mnmg`, `mnmgsupp`, `femg`, `femgsupp`, `cumg`, `cumgsupp`, `znmg`, `znmgsupp`, `img`, `imgsupp`, `semg`, `semgsupp`, `vitaiu`, `vitaiusupp`, `vitdiu`, `vitdiusupp`, `viteiu`, `viteiusupp`, `vitkiu`, `vitkiusupp`, `thiaminmg`, `thiaminmgsupp`, `riboflavinmg`, `riboflavinmgsupp`, `pyridoxmg`, `panthacdmg`, `panthacdmgsupp`, `folacdmg`, `biotmg`, `miacinmg`, `miacinmgsupp`, `cholmg`, `cholmgsupp`, `cianocobalmg`, `cianocobalmgsupp`) VALUES
(1, 'High nutrient density diet specifications for broilers', '0-18 days, starter', 3050, 12.7697, 22.0000, 0.5000, 0.9500, 1.3000, 0.7200, 0.2200, 1.4000, 0.8500, 1.4000, 0.7500, 0.4000, 0.7500, 0.9500, 0.4500, 0.2200, 70.0000, 120.0000, 20.0000, 40.0000, 8.0000, 16.0000, 70.0000, 100.0000, 0.5000, 1.2500, 0.3000, 0.3000, 8000.0000, 12000.0000, 3500.0000, 5000.0000, 50.0000, 75.0000, 0.5000, 3.0000, 4.0000, 3.0000, 5.0000, 8.0000, 4.0000, 14.0000, 13.0000, 1.0000, 0.1000, 40.0000, 55.0000, 400.0000, 1600.0000, 0.0120, 0.0160),
(2, 'High nutrient density diet specifications for broilers', '19-30 days, grower', 3100, 12.9791, 20.0000, 0.4400, 0.8800, 1.1500, 0.6200, 0.2000, 1.2500, 0.6600, 1.1000, 0.6500, 0.3200, 0.6800, 0.9200, 0.4100, 0.2100, 56.0000, 120.0000, 16.0000, 40.0000, 6.4000, 16.0000, 56.0000, 100.0000, 0.4000, 1.2500, 0.2400, 0.3000, 6400.0000, 10000.0000, 2800.0000, 5000.0000, 40.0000, 50.0000, 0.5000, 3.0000, 3.2000, 2.0000, 4.0000, 6.0000, 3.2000, 11.2000, 13.0000, 0.8000, 0.0800, 32.0000, 55.0000, 320.0000, 1500.0000, 0.0096, 0.0160),
(3, 'High nutrient density diet specifications for broilers', '31-41 days, finisher', 3150, 13.1884, 18.0000, 0.3800, 0.7500, 1.0000, 0.5500, 0.1800, 1.1000, 0.5600, 0.9000, 0.5500, 0.2800, 0.6000, 0.8900, 0.3800, 0.2000, 49.0000, 120.0000, 14.0000, 40.0000, 5.6000, 16.0000, 49.0000, 100.0000, 0.3500, 1.2500, 0.2100, 0.3000, 5600.0000, 10000.0000, 2450.0000, 5000.0000, 35.0000, 50.0000, 0.5000, 2.0000, 2.8000, 2.0000, 3.5000, 5.0000, 2.8000, 9.8000, 13.0000, 0.7000, 0.0700, 28.0000, 35.0000, 280.0000, 1400.0000, 0.0084, 0.0100),
(4, 'High nutrient density diet specifications for broilers', '42 days to market, withdrawal', 3200, 13.3978, 16.0000, 0.3600, 0.7200, 0.9500, 0.5000, 0.1600, 1.0000, 0.5000, 0.8000, 0.4500, 0.2400, 0.5000, 0.8500, 0.3600, 0.2000, 35.0000, 120.0000, 10.0000, 40.0000, 4.0000, 16.0000, 35.0000, 100.0000, 0.2500, 1.2500, 0.1500, 0.3000, 4000.0000, 10000.0000, 1750.0000, 5000.0000, 25.0000, 50.0000, 0.5000, 2.0000, 2.0000, 2.0000, 2.5000, 5.0000, 2.0000, 7.0000, 13.0000, 0.5000, 0.0500, 20.0000, 35.0000, 200.0000, 1400.0000, 0.0060, 0.0100),
(5, 'Low nutrient density diet specifications for broilers', '0-18 days, starter', 2850, 11.9324, 21.0000, 0.4500, 0.9000, 1.2000, 0.6800, 0.2100, 1.3000, 0.7800, 1.2000, 0.6800, 0.3700, 0.7000, 0.9500, 0.4500, 0.2200, 70.0000, 120.0000, 20.0000, 40.0000, 8.0000, 16.0000, 70.0000, 100.0000, 0.5000, 1.2500, 0.3000, 0.3000, 8000.0000, 12000.0000, 3500.0000, 5000.0000, 50.0000, 75.0000, 0.5000, 3.0000, 4.0000, 3.0000, 5.0000, 8.0000, 4.0000, 14.0000, 13.0000, 1.0000, 0.1000, 40.0000, 55.0000, 400.0000, 1600.0000, 0.0120, 0.0160),
(6, 'Low nutrient density diet specifications for broilers', '19-30 days, grower', 2900, 12.1417, 19.0000, 0.4000, 0.8100, 1.0800, 0.6000, 0.1900, 1.1500, 0.6400, 0.9000, 0.6000, 0.2800, 0.6500, 0.9000, 0.4100, 0.2100, 49.0000, 120.0000, 14.0000, 40.0000, 5.6000, 16.0000, 49.0000, 100.0000, 0.3500, 1.2500, 0.2100, 0.3000, 5600.0000, 10000.0000, 2450.0000, 5000.0000, 35.0000, 50.0000, 0.5000, 3.0000, 2.8000, 2.0000, 3.5000, 6.0000, 2.8000, 9.8000, 13.0000, 0.7000, 0.0700, 28.0000, 55.0000, 280.0000, 1500.0000, 0.0084, 0.0160),
(7, 'Low nutrient density diet specifications for broilers', '31-41 days, finisher', 2950, 12.3511, 17.0000, 0.3500, 0.7200, 0.9500, 0.5000, 0.1700, 1.0000, 0.5200, 0.8000, 0.5000, 0.2500, 0.5500, 0.8500, 0.3600, 0.1900, 42.0000, 120.0000, 12.0000, 40.0000, 4.8000, 16.0000, 42.0000, 100.0000, 0.3000, 1.2500, 0.1800, 0.3000, 4800.0000, 10000.0000, 2100.0000, 5000.0000, 30.0000, 50.0000, 0.5000, 2.0000, 2.4000, 2.0000, 3.0000, 5.0000, 2.4000, 8.4000, 13.0000, 0.6000, 0.0600, 24.0000, 35.0000, 240.0000, 1400.0000, 0.0072, 0.0100),
(8, 'Low nutrient density diet specifications for broilers', '42 days to market, withdrawal', 3000, 12.5604, 15.0000, 0.3200, 0.7000, 0.9200, 0.4500, 0.1400, 0.9500, 0.4800, 0.7500, 0.4200, 0.2100, 0.4600, 0.8000, 0.3400, 0.1800, 28.0000, 120.0000, 8.0000, 40.0000, 3.2000, 16.0000, 28.0000, 100.0000, 0.2000, 1.2500, 0.1200, 0.3000, 3200.0000, 10000.0000, 1400.0000, 5000.0000, 20.0000, 50.0000, 0.5000, 2.0000, 1.6000, 2.0000, 2.0000, 5.0000, 1.6000, 5.6000, 13.0000, 0.4000, 0.0400, 16.0000, 35.0000, 160.0000, 1400.0000, 0.0048, 0.0100),
(9, 'Diet specifications for very heavy broilers', '0-15 days, starter', 2850, 11.9324, 20.0000, 0.4200, 0.8500, 1.1300, 0.6400, 0.2000, 1.2200, 0.7300, 1.1300, 0.6400, 0.3500, 0.6600, 0.9500, 0.4500, 0.2200, 70.0000, 120.0000, 20.0000, 40.0000, 8.0000, 16.0000, 70.0000, 100.0000, 0.5000, 1.2500, 0.3000, 0.3000, 8000.0000, 12000.0000, 3500.0000, 5000.0000, 50.0000, 75.0000, 0.5000, 3.0000, 4.0000, 3.0000, 5.0000, 8.0000, 4.0000, 14.0000, 13.0000, 1.0000, 0.1000, 40.0000, 55.0000, 400.0000, 1600.0000, 0.0120, 0.0160),
(10, 'Diet specifications for very heavy broilers', '16-30 days, grower 1', 2900, 12.1417, 19.0000, 0.3800, 0.7600, 1.0200, 0.5600, 0.1800, 1.0800, 0.6000, 0.8500, 0.5600, 0.2600, 0.6100, 0.9000, 0.4100, 0.2100, 56.0000, 120.0000, 16.0000, 40.0000, 6.4000, 16.0000, 56.0000, 100.0000, 0.4000, 1.2500, 0.2400, 0.3000, 6400.0000, 10000.0000, 2800.0000, 5000.0000, 40.0000, 50.0000, 0.5000, 3.0000, 3.2000, 2.0000, 4.0000, 6.0000, 3.2000, 11.2000, 13.0000, 0.8000, 0.0800, 32.0000, 55.0000, 320.0000, 1500.0000, 0.0096, 0.0160),
(11, 'Diet specifications for very heavy broilers', '31-45 days, grower 2', 2950, 12.3511, 18.0000, 0.3300, 0.6800, 0.9500, 0.4700, 0.1600, 0.9400, 0.4900, 0.7500, 0.4700, 0.2400, 0.5200, 0.8500, 0.3600, 0.1900, 49.0000, 120.0000, 14.0000, 40.0000, 5.6000, 16.0000, 49.0000, 100.0000, 0.3500, 1.2500, 0.2100, 0.3000, 5600.0000, 10000.0000, 2450.0000, 5000.0000, 35.0000, 50.0000, 0.5000, 3.0000, 2.8000, 2.0000, 3.5000, 6.0000, 2.8000, 9.8000, 13.0000, 0.7000, 0.0700, 28.0000, 55.0000, 280.0000, 1500.0000, 0.0084, 0.0160),
(12, 'Diet specifications for very heavy broilers', '46-56 days, finisher 1', 3000, 12.5604, 16.0000, 0.3000, 0.6600, 0.9200, 0.4200, 0.1300, 0.8900, 0.4500, 0.7100, 0.3900, 0.2000, 0.4300, 0.8000, 0.3400, 0.1800, 42.0000, 120.0000, 12.0000, 40.0000, 4.8000, 16.0000, 42.0000, 100.0000, 0.3000, 1.2500, 0.1800, 0.3000, 4800.0000, 10000.0000, 2100.0000, 5000.0000, 30.0000, 50.0000, 0.5000, 2.0000, 2.4000, 2.0000, 3.0000, 5.0000, 2.4000, 8.4000, 13.0000, 0.6000, 0.0600, 24.0000, 35.0000, 240.0000, 1400.0000, 0.0072, 0.0100),
(13, 'Diet specifications for very heavy broilers', '57 days to market, finisher 2', 3000, 12.5604, 15.0000, 0.2800, 0.6400, 0.9000, 0.3900, 0.1100, 0.8500, 0.4200, 0.6700, 0.3500, 0.1800, 0.3900, 0.7500, 0.3000, 0.1800, 28.0000, 120.0000, 8.0000, 40.0000, 3.2000, 16.0000, 28.0000, 100.0000, 0.2000, 1.2500, 0.1200, 0.3000, 3200.0000, 10000.0000, 1400.0000, 5000.0000, 20.0000, 50.0000, 0.5000, 2.0000, 1.6000, 2.0000, 2.0000, 5.0000, 1.6000, 5.6000, 13.0000, 0.4000, 0.0400, 16.0000, 35.0000, 160.0000, 1400.0000, 0.0048, 0.0100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reqexpo`
--
ALTER TABLE `reqexpo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reqexpo`
--
ALTER TABLE `reqexpo`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
