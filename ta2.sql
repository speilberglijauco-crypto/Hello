-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2026 at 02:10 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ta2`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` varchar(50) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `full_name`, `email`, `phone`, `created_at`, `updated_at`, `avatar`) VALUES
(1, 'Goku', 'goku@gmail.com', '12355232115', '2026-09-16 16:28:52', '2026-11-18 11:47:18', '5456d651-cc24-4733-85bf-cfca13ce527f.jpg'),
(2, 'John Doe', 'jd@gmail.com', '1234567892', '2026-09-16 16:28:52', '2026-11-18 09:29:52', NULL),
(3, 'Juan Cruz', 'jc@gmail.com', '123438769', '2026-09-16 16:28:52', '', NULL),
(4, 'Chris Chan', 'cc@gmail.com', '126534681', '2026-09-16 16:28:52', '', NULL),
(5, 'Jeff Ep', 'jp@gmail.com', '123552353', '2026-09-16 16:28:52', '', NULL),
(7, 'ada', '1234@gmail.com', '12345678999', '2026-09-30 02:22:41', '', NULL),
(8, 'ada', 'wea@gmail.com', NULL, '2026-09-30 07:08:49', '2026-11-18 09:37:00', '879479e8-2484-444c-8933-a66aee8cec21.jpg'),
(9, 'ada', 'dada@g.com', NULL, '2026-09-30 07:17:34', '2026-11-18 09:46:22', 'dd466ad6-5d13-4a0b-8f21-00b0acc92d9d.jpg'),
(10, 'reara', 'rearea@gmail.com', NULL, '2026-09-30 07:18:56', '2026-11-18 09:47:30', 'b739d2cb-a5a9-42c1-991e-6c1fb09764a1.jpg'),
(12, 'dawa', 'adada@ghmail.com', NULL, '2026-09-30 07:21:31', '2026-11-13 14:32:00', '1790752891_386a6e9534574f8c87ca.jpg'),
(13, 'adwasd', 'ada@gmail.com', '', '2026-09-30 07:23:51', '', '1790753031_117604c9e70ea03d0b90.jpg'),
(14, 'adwa', 'dawdasd@gmail.com', NULL, '2026-09-30 07:25:40', '2026-11-13 14:32:22', '1790753140_33bd0869ac034970400b.jpg'),
(15, 'Gohan Son', 'gohan@example.com', '123-456-7890', '2026-10-30 10:56:46', '', NULL),
(16, 'Vegeta Namek', 'vegeta@example.com', '234-567-8901', '2026-10-30 10:56:46', '', NULL),
(17, 'Trunks Vegeta', 'trunks@example.com', '345-678-9012', '2026-10-30 10:56:46', '', NULL),
(18, 'Piccolo Namek', 'piccolo@example.com', '456-789-0123', '2026-10-30 10:56:46', '', NULL),
(19, 'Goku Son', 'goku@example.com', '567-890-1234', '2026-10-30 10:56:46', '', NULL),
(21, 'PlaceHolder', 'place@gmail.com', '12121212121', '2026-11-14 11:15:31', '2026-11-14 11:15:31', NULL),
(22, 'adaw', '1212@fawda.com', '2131', '2026-11-14 11:36:03', '2026-11-14 11:36:03', NULL),
(23, 'dawda', '121@fafa.com', '212121', '2026-11-14 11:44:12', '2026-11-14 11:44:12', NULL),
(24, 'wdawa', 'daad@ga.com', '12121', '2026-11-14 11:44:31', '2026-11-14 11:55:10', 'facdcb46-acc6-4f7a-b529-217ecccdb326.jpg'),
(25, 'dawda', 'ada@gmail', '121', '2026-11-14 11:57:05', '2026-11-14 11:57:05', NULL),
(26, 'dawdaw', 'dada@gafa', 'daw2', '2026-11-14 12:00:21', '2026-11-14 12:00:21', NULL),
(27, 'da', 'dw@gag', '2121', '2026-11-14 12:04:02', '2026-11-14 12:04:02', NULL),
(28, 'dawa', 'ada@gmail', '121', '2026-11-14 12:58:08', '2026-11-14 12:58:08', NULL),
(29, 'dawda', 'wada@a', 'a2121', '2026-11-14 13:05:35', '2026-11-14 13:05:35', '03af6529-8c04-4b1e-865f-7fc316e92eb0.jpg'),
(30, 'wadwa', '1212@fawda.com', '121', '2026-11-14 13:07:23', '2026-11-14 13:07:23', '38d6feb1-cccb-426f-97be-ff81026ff190.jpg'),
(31, 'wda', 'ada@gmail', '121', '2026-11-14 13:19:00', '2026-11-14 13:19:00', NULL),
(32, 'dada', 'ada@gmail', '12312', '2026-11-14 13:22:04', '2026-11-14 13:22:04', '8d513161-76c3-400b-8d2c-184bb8ea383c.jpg');

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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2026_11_18_000000_prepare_custom_user_table', 2);

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
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` varchar(50) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `full_name`, `created_at`, `updated_at`, `avatar`, `password`) VALUES
(1, '121', '2121', '2026-11-18 11:50:57', '2026-11-18 12:19:22', '6aded188-baba-4c3d-83d3-7e1cd85e987e.jpg', '$2y$12$./QGdeF8q/oKym8mA5xBw.7VX8/cjnlEB//a8wy8J7hIQv0VKF/G.'),
(2, 'John', 'John Paul', '2026-11-18 11:54:22', '2026-11-18 11:54:22', '5a3f7ab7-230d-4552-9de5-51cb970836c5.jpg', '$2y$12$T97xbipdTrokzZlimmFzkOBaNLAITOGwu2QzBeItosokJYTg/Fa4y'),
(3, '12121', '323232', '2026-11-18 11:54:46', '2026-11-18 11:54:46', NULL, '$2y$12$7sN/xvgXo5yKVLzjbpDp/OEeX7HVltVPcWIN5lLUVUIDU6rIQUhlO'),
(4, 'alex.rivera', 'alex Rivera', '2026-11-18 12:19:41', '2026-11-18 12:19:41', '0d76ddb8-34b6-4f41-8d61-f17c2dfbbf2a.jpg', '$2y$12$uQmz8yH6/8GcbSwl.cBQ8eMqAZzb6Nrr9tvXefFLGwd7cv/uCRDG2');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Dio Brando', 'db@gmail.com', NULL, '$2y$12$LXLxlg8XfkN4361rpt2jcepSAZeyIT/pDs0mJ2P3nIFXd/SJL5My6', 'b6uYbVLJ1t9CX802z3V0m650UXh44evGcL21fTCeLXv5w6WIWbmmGO6cKsza', '2026-11-18 03:13:09', '2026-11-18 03:13:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_expiration_index` (`expiration`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_locks_expiration_index` (`expiration`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
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
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_username_unique` (`username`);

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
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
