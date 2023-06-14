-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2023 at 03:35 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ai_fikri`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabelprediksi`
--

CREATE TABLE `tabelprediksi` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `keselarasan` text NOT NULL,
  `lamawaktu` text NOT NULL,
  `tingkatposisi` text NOT NULL,
  `pendapatan` text NOT NULL,
  `hasil` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tabelprediksi`
--

INSERT INTO `tabelprediksi` (`id`, `nama`, `keselarasan`, `lamawaktu`, `tingkatposisi`, `pendapatan`, `hasil`) VALUES
(2, 'Kades', 'Selaras', 'Cepat', 'Lebih Tinggi', 'Diatas UMR', 'Cukup Berkompeten');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabelprediksi`
--
ALTER TABLE `tabelprediksi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabelprediksi`
--
ALTER TABLE `tabelprediksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
