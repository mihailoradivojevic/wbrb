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
-- Table structure for table `ration`
--

CREATE TABLE `ration` (
  `id` int(2) NOT NULL DEFAULT 0,
  `feed` varchar(55) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `quantity` decimal(4,2) NOT NULL DEFAULT 0.00,
  `feedgroup` int(2) DEFAULT NULL,
  `feedgroupname` varchar(110) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `supplemental` int(1) DEFAULT NULL,
  `cpproc` decimal(11,4) DEFAULT NULL,
  `metcysproc` decimal(11,4) DEFAULT NULL,
  `metproc` decimal(11,4) DEFAULT NULL,
  `lysproc` decimal(11,4) DEFAULT NULL,
  `thrproc` decimal(11,4) DEFAULT NULL,
  `tryproc` decimal(11,4) DEFAULT NULL,
  `argproc` decimal(11,4) DEFAULT NULL,
  `valproc` decimal(11,4) DEFAULT NULL,
  `leuproc` decimal(11,4) DEFAULT NULL,
  `isoproc` decimal(11,4) DEFAULT NULL,
  `hisproc` decimal(11,4) DEFAULT NULL,
  `phenproc` decimal(11,4) DEFAULT NULL,
  `fatproc` decimal(11,4) DEFAULT NULL,
  `starchproc` decimal(11,4) DEFAULT NULL,
  `sugarproc` decimal(11,4) DEFAULT NULL,
  `calcproc` decimal(11,4) DEFAULT NULL,
  `phosavlbproc` decimal(11,4) DEFAULT NULL,
  `naproc` decimal(11,4) DEFAULT NULL,
  `mnmg` decimal(11,4) DEFAULT NULL,
  `femg` decimal(11,4) DEFAULT NULL,
  `cumg` decimal(11,4) DEFAULT NULL,
  `znmg` decimal(11,4) DEFAULT NULL,
  `img` decimal(11,4) DEFAULT NULL,
  `semg` decimal(11,4) DEFAULT NULL,
  `vitaiu` decimal(11,4) DEFAULT NULL,
  `vitdiu` decimal(11,4) DEFAULT NULL,
  `viteiu` decimal(11,4) DEFAULT NULL,
  `vitkmg` decimal(11,4) DEFAULT NULL,
  `thiaminmg` decimal(11,4) DEFAULT NULL,
  `riboflavinmg` decimal(11,4) DEFAULT NULL,
  `pyridoxmg` decimal(11,4) DEFAULT NULL,
  `panthacdmg` decimal(11,4) DEFAULT NULL,
  `folacdmg` decimal(11,4) DEFAULT NULL,
  `biotmg` decimal(11,4) DEFAULT NULL,
  `miacinmg` decimal(11,4) DEFAULT NULL,
  `cholmg` decimal(11,4) DEFAULT NULL,
  `cianocobalmg` decimal(11,4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ration`
--

INSERT INTO `ration` (`id`, `feed`, `quantity`, `feedgroup`, `feedgroupname`, `supplemental`, `cpproc`, `metcysproc`, `metproc`, `lysproc`, `thrproc`, `tryproc`, `argproc`, `valproc`, `leuproc`, `isoproc`, `hisproc`, `phenproc`, `fatproc`, `starchproc`, `sugarproc`, `calcproc`, `phosavlbproc`, `naproc`, `mnmg`, `femg`, `cumg`, `znmg`, `img`, `semg`, `vitaiu`, `vitdiu`, `viteiu`, `vitkmg`, `thiaminmg`, `riboflavinmg`, `pyridoxmg`, `panthacdmg`, `folacdmg`, `biotmg`, `miacinmg`, `cholmg`, `cianocobalmg`) VALUES
(417, 'Maize grain, market', 46.58, 1, 'Cereal grains', 0, 7.6000, 0.3200, 0.1500, 0.2100, 0.2400, 0.0400, 0.3400, 0.3500, 0.8700, 0.2600, 0.2000, 0.3400, 3.6000, 63.8000, 1.7000, 0.0400, 0.0600, 0.0000, 9.0000, 35.0000, 3.0000, 20.0000, 0.0900, 0.1000, 2300.0000, 0.0000, 25.4790, 0.3000, 3.6000, 1.4000, 4.6000, 5.8000, 0.2000, 0.0600, 20.7000, 532.0000, 0.0000),
(418, 'Maize, extruded - market', 8.00, 1, 'Cereal grains', 0, 7.6000, 0.3200, 0.1500, 0.2100, 0.2400, 0.0400, 0.3400, 0.3500, 0.8700, 0.2600, 0.2000, 0.3400, 3.6000, 68.8000, 1.7000, 0.0400, 0.0600, 0.0000, 9.0000, 35.0000, 3.0000, 20.0000, 0.0900, 0.1000, 2300.0000, 0.0000, 25.0000, 0.3000, 3.6000, 1.4000, 4.6000, 5.8000, 0.2000, 0.0600, 20.7000, 532.0000, 0.0000),
(420, 'Sodium chloride', 0.23, 8, 'Mineral products', 0, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 38.0000, 0.0000, 0.0000, 0.0000, 8.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000),
(421, 'Sodium bicarbonate', 0.26, 8, 'Mineral products', 0, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0500, 0.0000, 27.2000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000),
(422, 'Calcium carbonate', 0.27, 8, 'Mineral products', 0, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 38.7000, 0.0000, 0.0600, 106.0000, 1698.0000, 2492.0000, 25.0000, 3.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000),
(423, 'Monocalcium phosphate', 1.37, 8, 'Mineral products', 0, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 16.7000, 19.1000, 0.0700, 171.0000, 6132.0000, 21.0000, 204.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000),
(424, 'DL-Methionine', 0.30, 9, 'Supplements', 0, 0.0000, 96.0000, 96.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000),
(425, 'L-Lysine', 0.20, 9, 'Supplements', 0, 0.0000, 0.0000, 0.0000, 99.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000),
(426, 'L-Threonine', 0.10, 9, 'Supplements', 0, 0.0000, 0.0000, 0.0000, 0.0000, 98.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000),
(427, 'L-Tryptophan', 0.05, 9, 'Supplements', 0, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 98.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000),
(428, 'Corn gluten meal, market', 5.00, 2, 'Cereal byproducts', 0, 61.6000, 2.1100, 1.2900, 0.8600, 1.6100, 0.2300, 1.6400, 2.3500, 8.5700, 2.0800, 1.0300, 3.2500, 6.0000, 15.5000, 0.4000, 0.0300, 0.0900, 0.0800, 10.0000, 119.0000, 12.0000, 33.0000, 0.0000, 0.2000, 14200.0000, 0.0000, 36.3560, 0.0000, 0.3000, 2.1000, 8.0000, 6.4000, 0.2000, 0.2000, 60.4000, 363.0000, 0.0000),
(429, 'Soybean, whole, extruded - market', 11.10, 3, 'Legumes and oilseeds', 0, 36.0000, 0.8000, 0.4400, 1.9000, 1.1200, 0.3400, 2.2900, 1.4200, 2.2500, 1.3900, 0.9800, 1.8200, 18.4000, 5.3000, 7.5000, 0.3000, 0.1400, 0.0100, 27.0000, 106.0000, 13.0000, 44.0000, 0.0900, 0.3000, 0.0000, 0.0000, 12.8140, 0.3000, 4.3000, 7.6000, 2.3000, 4.8000, 0.0000, 0.3000, 10.7000, 2152.0000, 0.0000),
(430, 'Soybean meal, 46% CP - market', 12.40, 4, 'Oil byproducts', 0, 43.5000, 1.0600, 0.5600, 2.3800, 1.3900, 0.5300, 2.8600, 1.8000, 2.8800, 1.7300, 1.0200, 1.9100, 1.7000, 6.0000, 0.8000, 0.3400, 0.1400, 0.0100, 32.0000, 240.0000, 14.0000, 36.0000, 0.1000, 0.2000, 0.0000, 0.0000, 7.1520, 0.0000, 3.0000, 3.0000, 7.0000, 15.0000, 0.0000, 0.3000, 39.9000, 2792.0000, 0.0000),
(431, 'Sunflower Meal, 33%CP - market', 3.00, 4, 'Oil byproducts', 0, 36.6000, 1.2000, 0.7500, 1.0600, 1.0000, 0.3900, 2.7300, 1.4900, 1.8800, 1.2800, 0.6800, 1.4000, 1.2000, 3.5000, 6.7000, 0.4000, 0.1800, 0.0100, 40.0000, 448.0000, 29.0000, 85.0000, 0.0900, 0.3000, 0.0000, 0.0000, 16.0920, 0.0000, 3.0000, 3.4000, 13.3000, 39.5000, 0.0000, 0.0000, 235.0000, 2559.0000, 0.0000),
(432, 'Fish meal, protein 65% - market', 5.00, 6, 'Animal products', 0, 65.2000, 1.9800, 1.5700, 4.3300, 2.3900, 0.5800, 3.6200, 2.8000, 4.1600, 2.3700, 1.4400, 2.3300, 9.2000, 0.0000, 0.0000, 4.1300, 2.2400, 1.0600, 18.0000, 352.0000, 11.0000, 99.0000, 2.0000, 0.4000, 0.0000, 2000.0000, 7.7480, 0.0000, 0.2000, 7.2000, 4.2000, 12.0000, 0.3000, 0.2000, 117.0000, 3812.0000, 0.3110),
(433, 'Feather meal, market', 1.00, 6, 'Animal products', 0, 78.9000, 1.9600, 0.3300, 1.0100, 1.8900, 0.2200, 3.5700, 3.8000, 4.1800, 2.7400, 0.5200, 3.2300, 8.5000, 0.0000, 0.0000, 1.1700, 0.6600, 0.1200, 15.0000, 493.0000, 9.0000, 127.0000, 0.6000, 0.7000, 0.0000, 0.0000, 10.7280, 0.0000, 0.1000, 2.0000, 3.0000, 9.3000, 0.2000, 0.0800, 20.8000, 883.0000, 0.0800),
(434, 'Fish oil, herring - market', 1.00, 7, 'Oils and fats', 0, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 100.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 326.3100, 1.5000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000),
(435, 'Sunflower oil, market', 1.00, 7, 'Oils and fats', 0, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 99.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0200, 0.2000, 0.0400, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 868.6700, 0.0500, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 2.0000, 0.0000),
(436, 'Premix, market', 3.00, 9, 'Supplements', 1, 0.0000, 0.0000, 0.0000, 3.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0500, 0.1300, 0.3600, 11.1600, 0.5600, 10.0000, 0.0000, 0.0000, 4000.0000, 1340.0000, 540.0000, 4000.0000, 43.0000, 10.0000, 480000.0000, 180000.0000, 2700.0000, 140.0000, 170.0000, 300.0000, 170.0000, 630.0000, 84.0000, 12.0000, 2400.0000, 60000.0000, 0.7000),
(437, 'L-Arginine', 0.14, 9, 'Supplements', 0, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 98.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000, 0.0000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ration`
--
ALTER TABLE `ration`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
