-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 14, 2025 at 05:39 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_menu`
--

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_menu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `nama_menu`, `foto`, `harga`, `created_at`, `updated_at`) VALUES
(2, 'makaroni', 'menu/6MEychlsxlS4QW7HYWS4buKUIJT6zR4vAIfNr6Gt.jpg', '9000.00', '2025-11-13 07:01:27', '2025-11-13 21:55:25'),
(3, 'Somai kering', 'menu/SghCoLrXXksbIpWQoWNOWatwBzJGrralq1wkTqji.jpg', '9000.00', '2025-11-13 21:57:22', '2025-11-13 21:57:22'),
(4, 'Sotong mini pedas', 'menu/NsCedbn4K334QmmZ883mo2lZclMCQp4Hfl7WYCel.jpg', '10000.00', '2025-11-13 22:17:50', '2025-11-13 22:17:50'),
(5, 'Mie kering pedas', 'menu/Q1ejyUnsXlmIH5bw73Jo5tqe1VOZo42g0wMMcYXy.jpg', '10000.00', '2025-11-13 22:19:48', '2025-11-13 22:23:50'),
(6, 'cimol kering', 'menu/xxU6HYhYC4nImtJCpN2qwMNgANiybSgARBl6iJ1K.jpg', '9000.00', '2025-11-13 22:20:43', '2025-11-13 22:20:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
