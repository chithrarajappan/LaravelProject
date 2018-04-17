-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2018 at 06:57 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.0.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `examlaravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(750) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `age`, `address`, `photo`, `email`, `username`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Chithra Rajappan', 26, 'super nivas,\r\nnattassery po,\r\nkottayam-686006', 'fi.jpg', 'chithra@gmail.com', 'chithra', '$2y$10$FdLNayxpkXp2aGQ0bcJy4OX0CdKof7vdbHBN8WK7GUN7sf60ke2xS', 'rOOISCvmLSPtmNwgrC54ClsreDFJ4heZDKYv338wnvhq6J02sLtfDwZr3F64', '2018-03-31 22:11:51', '2018-03-31 22:11:51'),
(2, 'Abishek G', 28, 'Abi nivas,\r\nkakoor po,\r\npiravam-736006', '11.jpg', 'abi123@gmail.com', 'abi1234', '$2y$10$cIn1ySzUuK/G6m.9FChYl.2K0u1OonMDvldEIjiNyELWVwGF8JHvW', NULL, '2018-03-31 22:13:47', '2018-03-31 22:13:47'),
(3, 'Nandha kishor', 31, 'nandhanam,\r\nvellam po,\r\nekm-422353', 'Anumon Chettan 20170410_210749.jpg', 'nandhan@gmail.com', 'nandhan123', '$2y$10$t4qjCOsfZs4MvrT/0QG/LuuNSUXUwAEFSyRO72d80Cojo/L1GLjWq', NULL, '2018-03-31 22:23:56', '2018-03-31 22:23:56'),
(4, 'Darshan', 28, 'darshan villa,\r\nnattoor po,\r\nktm-342332', '8iEb5MaaT.jpg', 'darshan@gmail.com', 'darshan', '$2y$10$dxpBSWNv8oaBxGl9WTM9rujngassQjxhgvxFvf9AKLv14Vjf7PQSC', 'Yxu0VEqfeJ3nSD4TnmezMFdau8wSAiv3WMHfYUla9vtYIY4zJqha5PNPh5nU', '2018-04-01 11:18:49', '2018-04-01 11:18:49'),
(5, 'Arjun v', 25, 'arjun mmm,\r\npiravam po,\r\nktm-752345', 'images.jpg', 'arjun@gmail.com', 'arjun123', '$2y$10$RPR61HvITnGz9gphCePx1ul0KvkLD0KEMDOLnlU4xzB1wZEHyMdBS', NULL, '2018-04-01 11:27:01', '2018-04-01 11:27:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
