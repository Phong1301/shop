-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2022 at 08:49 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_qty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Fruit', '2022-10-23 20:51:03', '2022-10-24 00:48:26'),
(2, 'Pizza', '2022-10-23 20:57:09', '2022-10-23 20:57:09'),
(3, 'Cream', '2022-10-23 20:57:56', '2022-10-24 00:48:48'),
(4, 'Drinks', '2022-10-23 20:59:36', '2022-10-24 00:48:55');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '2014_10_12_000000_create_users_table', 1),
(6, '2014_10_12_100000_create_password_resets_table', 1),
(7, '2019_08_19_000000_create_failed_jobs_table', 1),
(8, '2022_10_24_025229_create_categories_table', 1),
(9, '2022_10_24_045228_create_products_table', 2),
(10, '2022_10_25_042159_create_carts_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cate_id` bigint(20) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `cate_id`, `name`, `description`, `price`, `image`, `qty`, `created_at`, `updated_at`) VALUES
(4, 1, 'Berry', 'Per Kg', '20', '1666598478.jpg', '5', '2022-10-24 01:01:18', '2022-10-24 01:01:18'),
(5, 1, 'Strawberry', 'Per Kg', '30', '1666598521.jpg', '5', '2022-10-24 01:02:01', '2022-10-24 01:02:01'),
(6, 1, 'Lemon', 'Per Kg', '40', '1666598560.jpg', '5', '2022-10-24 01:02:40', '2022-10-24 01:02:40'),
(7, 1, 'Kiwi', 'Per Kg', '42', '1666598596.jpg', '6', '2022-10-24 01:03:16', '2022-10-24 01:03:16'),
(8, 1, 'Green Apple', 'Per Kg', '35', '1666598624.jpg', '8', '2022-10-24 01:03:44', '2022-10-24 01:03:44'),
(9, 2, 'Pizza Gà Nướng 3 Vị', 'Gà nướng, gà bơ tỏi và gà ướp sốt nấm', '20', '1666598695.png', '7', '2022-10-24 01:04:55', '2022-10-24 01:04:55'),
(10, 2, 'Pizza Thịt Xông Khói', 'Thịt giăm bông, thịt xông khói và hai loại rau', '35', '1666598741.png', '4', '2022-10-24 01:05:41', '2022-10-24 01:53:27'),
(11, 2, 'Pizza Tôm Cocktail', 'Tôm với nấm và sốt Thousand Island.', '36', '1666598781.png', '4', '2022-10-24 01:06:21', '2022-10-24 01:54:06'),
(12, 2, 'Pizza Hải Sản Cocktail', 'Tôm, cua, giăm bông với sốt Island', '32', '1666598821.png', '6', '2022-10-24 01:07:01', '2022-10-24 01:53:54'),
(13, 2, 'Pizza Hải Sản Pesto Xanh', 'Tôm, cua, mực và bông cải xanh tươi ngon', '65', '1666598883.png', '9', '2022-10-24 01:08:03', '2022-10-24 01:53:13'),
(14, 3, 'Kem Chocolate', 'Hộp 200 gam', '20', '1666598930.png', '21', '2022-10-24 01:08:50', '2022-10-24 01:08:50'),
(15, 3, 'Kem Rum Raisin', 'Hộp 200 gram', '35', '1666598962.png', '96', '2022-10-24 01:09:22', '2022-10-24 01:09:22'),
(16, 3, 'Kem Very Strawberry', 'Hộp 200 gram', '31', '1666599000.png', '32', '2022-10-24 01:10:00', '2022-10-24 01:10:00'),
(17, 3, 'Kem Matcha Green Tea', 'Hộp 200 gram', '24', '1666599028.png', '12', '2022-10-24 01:10:28', '2022-10-24 01:10:38'),
(18, 3, 'Kem Mocha Almond Fudge', 'Hộp 200 gram', '65', '1666599073.png', '74', '2022-10-24 01:11:13', '2022-10-24 01:11:13'),
(19, 4, 'Pepsi Lon', NULL, '10', '1666599164.jpeg', '23', '2022-10-24 01:12:44', '2022-10-24 01:12:44'),
(20, 4, 'Pepsi 1,5l Chai', NULL, '12', '1666599250.jpeg', '74', '2022-10-24 01:14:10', '2022-10-24 01:14:10'),
(21, 4, '7Up Lon', NULL, '11', '1666599276.jpeg', '32', '2022-10-24 01:14:36', '2022-10-24 01:14:36'),
(22, 4, 'Aquafina Chai', NULL, '7', '1666599305.png', '32', '2022-10-24 01:15:05', '2022-10-24 01:15:05'),
(23, 4, 'Bia Heineken', NULL, '14', '1666599327.png', '54', '2022-10-24 01:15:27', '2022-10-24 01:15:27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_as` tinyint(4) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role_as`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@localhost', NULL, '$2y$10$PfqUucLplpAsJ2O9WfMQbOSFIFZQqA8Sx14/lyuYY/J64yXM6bjsm', 1, NULL, '2022-10-23 20:01:20', '2022-10-23 20:01:20'),
(2, 'Phong', 'chuheobd13@gmail.com', NULL, '$2y$10$fqxCP8/TNJaHPug6IsFhUuc7Xr/gUAbXWgBrZ1nHhrALBrudye1ca', 0, NULL, '2022-10-24 20:28:17', '2022-10-24 20:28:17'),
(3, 'VIet', 'viet@gmail.com', NULL, '$2y$10$9jZi/g970TBBBPHqKqWjBus5NchOJqgwJi1.jlroAFTdpY5.cUCge', 0, NULL, '2022-10-24 20:59:39', '2022-10-24 20:59:39'),
(4, 'Phúc', 'phuc@gmail.com', NULL, '$2y$10$C1aekkDwr6wUwaRcYrIQS.CsahGIJd16Q9PpMsMTxN7kzre7Md9LC', 0, NULL, '2022-10-24 21:16:08', '2022-10-24 21:16:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
