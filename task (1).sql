-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2024 at 01:38 PM
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
-- Database: `task`
--

-- --------------------------------------------------------

--
-- Table structure for table `codes`
--

CREATE TABLE `codes` (
  `id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `codes`
--

INSERT INTO `codes` (`id`, `code`, `mobile`, `updated_at`, `created_at`) VALUES
(1, '23017', '09398064490', '2024-05-18 15:09:37', '2024-05-18 15:09:37'),
(2, '23693', '09398064490', '2024-05-18 15:09:51', '2024-05-18 15:09:51'),
(3, '13523', '09398064490', '2024-05-18 15:11:37', '2024-05-18 15:11:37'),
(4, '34721', '09398064490', '2024-05-18 15:12:20', '2024-05-18 15:12:20'),
(5, '44935', '09398064490', '2024-05-18 15:12:30', '2024-05-18 15:12:30'),
(6, '24880', '09398064490', '2024-05-18 15:13:02', '2024-05-18 15:13:02'),
(7, '45065', '09398064490', '2024-05-18 15:14:15', '2024-05-18 15:14:15'),
(8, '32030', '09398064490', '2024-05-18 15:14:23', '2024-05-18 15:14:23'),
(9, '12933', '09398064490', '2024-05-18 15:14:27', '2024-05-18 15:14:27'),
(10, '39108', '09398064490', '2024-05-18 15:15:15', '2024-05-18 15:15:15'),
(11, '21997', '09398064490', '2024-05-18 15:15:18', '2024-05-18 15:15:18'),
(12, '17274', '09398064490', '2024-05-18 15:15:30', '2024-05-18 15:15:30'),
(13, '12394', '09398064490', '2024-05-18 15:16:01', '2024-05-18 15:16:01'),
(14, '48841', '09398064490', '2024-05-18 15:16:30', '2024-05-18 15:16:30'),
(15, '37671', '09398064490', '2024-05-18 15:16:34', '2024-05-18 15:16:34'),
(16, '31760', '09398064490', '2024-05-18 15:16:42', '2024-05-18 15:16:42'),
(17, '24886', '09398064490', '2024-05-18 15:17:39', '2024-05-18 15:17:39'),
(18, '19119', '09398064490', '2024-05-18 15:17:54', '2024-05-18 15:17:54'),
(19, '43261', '09398064490', '2024-05-18 15:18:02', '2024-05-18 15:18:02'),
(20, '12284', '09398064490', '2024-05-18 15:18:51', '2024-05-18 15:18:51'),
(21, '12014', '09398064490', '2024-05-18 15:19:03', '2024-05-18 15:19:03'),
(22, '11349', '09398064490', '2024-05-18 15:20:03', '2024-05-18 15:20:03'),
(23, '8418', '09398064490', '2024-05-18 15:38:26', '2024-05-18 15:38:26'),
(25, '5701', '09398064490', '2024-05-18 16:30:11', '2024-05-18 16:30:11'),
(26, '5647', '09398064490', '2024-05-18 16:32:34', '2024-05-18 16:32:34'),
(27, '1807', '09398064asd', '2024-05-19 03:55:03', '2024-05-19 03:55:03'),
(28, '2770', '09336395637', '2024-05-19 03:59:39', '2024-05-19 03:59:39'),
(29, '7478', '09336395637', '2024-05-19 04:10:10', '2024-05-19 04:10:10'),
(30, '4723', '09336395637', '2024-05-19 04:12:38', '2024-05-19 04:12:38'),
(31, '7664', '09336395637', '2024-05-19 04:15:35', '2024-05-19 04:15:35'),
(32, '7678', '09336395637', '2024-05-19 04:21:46', '2024-05-19 04:21:46'),
(33, '5965', '09336395637', '2024-05-19 04:50:46', '2024-05-19 04:50:46'),
(34, '7926', '09226880381', '2024-05-19 04:51:42', '2024-05-19 04:51:42'),
(35, '6231', '09336395637', '2024-05-19 06:15:14', '2024-05-19 06:15:14'),
(36, '9167', '09336395637', '2024-05-19 06:17:15', '2024-05-19 06:17:15'),
(37, '5633', '09226880381', '2024-05-19 06:18:01', '2024-05-19 06:18:01'),
(38, '4496', '09336395637', '2024-05-19 06:20:43', '2024-05-19 06:20:43'),
(39, '3344', '09226880381', '2024-05-19 06:21:20', '2024-05-19 06:21:20'),
(40, '5224', '09336395637', '2024-05-19 06:24:53', '2024-05-19 06:24:53'),
(41, '8664', '09336395637', '2024-05-19 06:28:59', '2024-05-19 06:28:59'),
(42, '2887', '09336395637', '2024-05-19 06:33:18', '2024-05-19 06:33:18'),
(43, '9519', '09226880381', '2024-05-19 06:33:47', '2024-05-19 06:33:47'),
(44, '6165', '09336395637', '2024-05-19 06:36:15', '2024-05-19 06:36:15'),
(45, '5700', '09226880381', '2024-05-19 06:36:54', '2024-05-19 06:36:54'),
(46, '7949', '09336395637', '2024-05-19 06:44:31', '2024-05-19 06:44:31'),
(47, '1659', '09336395637', '2024-05-19 06:50:27', '2024-05-19 06:50:27'),
(48, '6757', '09336395637', '2024-05-19 06:52:54', '2024-05-19 06:52:54'),
(49, '7159', '09336395637', '2024-05-19 07:08:32', '2024-05-19 07:08:32'),
(50, '6978', '09336395637', '2024-05-19 07:10:34', '2024-05-19 07:10:34'),
(51, '9742', '09336395637', '2024-05-19 07:12:36', '2024-05-19 07:12:36');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` char(255) DEFAULT NULL,
  `color` char(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `title`, `color`, `created_at`, `updated_at`, `logo`) VALUES
(1, 'Almas Negin', '#ffffff', NULL, NULL, 'ads logo png _5.png');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_05_17_144256_create_menus_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `family` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` char(255) NOT NULL,
  `inv` char(255) DEFAULT NULL,
  `invitecode` varchar(255) DEFAULT NULL,
  `otp` varchar(255) DEFAULT NULL,
  `role` enum('admin','user') NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `family`, `email`, `mobile`, `inv`, `invitecode`, `otp`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, 'sas', 'dads', 'dsdds@gmail.com', '09226880381', NULL, 'm0qc0o', NULL, 'admin', NULL, '$2y$12$j6jxkxzuwBCO71OFMo4zUu1VjpA3lFA58PPoG4NshHtQ4AaByDJGO', NULL, '2024-05-18 14:39:04', '2024-05-19 06:37:10'),
(6, 'سجاد', '23423', 'sajri16@gmail.com', '09127685439', NULL, 'tte0wu', NULL, 'admin', NULL, '$2y$12$Y8dEHjhKR5eQpmvwNGgbw.d310zK0DK744JkVUVMjM4Gpj9vIN.tC', NULL, '2024-05-18 14:40:11', '2024-05-18 14:40:11'),
(7, 'saeed', 'halvaei', 'kirekhar@gmial.com', '09398064490', 'ammat', 'nhnwnc', NULL, 'admin', NULL, '$2y$12$4Av5zX.p2bKEvLEWHO0CreTzJgNkNABdEzCbPuTjjE37rnV7UtfNi', NULL, '2024-05-18 18:15:41', '2024-05-18 18:15:41'),
(8, 'sajad', 'salari', 'sajadsalari17@gmail.com', '09336395637', 'kjh', 'afjyeq', NULL, 'admin', NULL, '$2y$12$MEuTMlRMNhflK49h0N8Fg.2GUQLJGNP7Srhw8Mf29tUzJmdZpcwk2', NULL, '2024-05-19 09:43:45', '2024-05-19 06:36:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `codes`
--
ALTER TABLE `codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_mobile_unique` (`mobile`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `codes`
--
ALTER TABLE `codes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
