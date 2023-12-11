-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2023 at 06:48 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `helpsx_retina_soft`
--

-- --------------------------------------------------------

--
-- Table structure for table `customerbalances`
--

CREATE TABLE `customerbalances` (
  `cb_id` bigint(20) UNSIGNED NOT NULL,
  `cb_name` varchar(50) DEFAULT NULL,
  `cb_type` varchar(50) DEFAULT NULL,
  `cb_amount` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customerbalances`
--

INSERT INTO `customerbalances` (`cb_id`, `cb_name`, `cb_type`, `cb_amount`, `created_at`, `updated_at`) VALUES
(1, '1', '1', '1000', '2023-12-10 20:27:50', '2023-12-10 20:27:50'),
(2, '1', '2', '500', '2023-12-10 20:28:13', '2023-12-10 20:28:13'),
(3, '1', '2', '300', '2023-12-10 20:29:01', '2023-12-10 20:47:29'),
(4, '2', '1', '700', '2023-12-10 20:29:21', '2023-12-10 20:48:46'),
(5, '2', '1', '500', '2023-12-10 20:46:41', '2023-12-10 20:48:23'),
(6, '2', '2', '1500', '2023-12-10 20:49:11', '2023-12-10 20:49:11'),
(7, '3', '1', '500', '2023-12-11 05:30:18', '2023-12-11 05:30:18'),
(8, '3', '2', '300', '2023-12-11 05:30:47', '2023-12-11 05:30:47');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `customer_name` varchar(50) DEFAULT NULL,
  `customer_phone` varchar(50) DEFAULT NULL,
  `customer_address` varchar(50) DEFAULT NULL,
  `customer_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_phone`, `customer_address`, `customer_status`, `created_at`, `updated_at`) VALUES
(1, 'Moshiur Rahman', '+880 1877-756676', 'Behar hat, Shibgonj-Bogura', 1, '2023-12-10 20:24:50', '2023-12-10 20:24:50'),
(2, 'Jubayer Joy', '+880 1719-928664', 'Behar hat, Shibgonj-Bogura', 1, '2023-12-10 20:25:35', '2023-12-10 20:25:35'),
(3, 'Md Rakib', '+8801723629080', 'Behar hat, Shibgonj-Bogura', 1, '2023-12-11 05:30:06', '2023-12-11 05:30:06');

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
(5, '2023_12_10_215130_create_customers_table', 2),
(6, '2023_12_10_215205_create_customerbalances_table', 2),
(7, '2023_12_10_215241_create_suppliers_table', 2),
(8, '2023_12_10_215255_create_supplierbalances_table', 2),
(9, '2023_12_10_231525_create_types_table', 3),
(10, '2023_12_10_231814_create_statuses_table', 3);

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
-- Table structure for table `statuses`
--

CREATE TABLE `statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status_name` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `statuses`
--

INSERT INTO `statuses` (`id`, `status_name`, `created_at`, `updated_at`) VALUES
(1, 'Active', NULL, NULL),
(2, 'Inactive', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `supplierbalances`
--

CREATE TABLE `supplierbalances` (
  `sb_id` bigint(20) UNSIGNED NOT NULL,
  `sb_name` varchar(50) DEFAULT NULL,
  `sb_type` varchar(50) DEFAULT NULL,
  `sb_amount` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `supplierbalances`
--

INSERT INTO `supplierbalances` (`sb_id`, `sb_name`, `sb_type`, `sb_amount`, `created_at`, `updated_at`) VALUES
(1, '1', '1', '5000', '2023-12-10 20:30:09', '2023-12-10 20:30:09'),
(2, '1', '2', '1500', '2023-12-10 20:30:42', '2023-12-10 20:30:42'),
(3, '1', '2', '2000', '2023-12-10 20:31:10', '2023-12-10 20:49:44'),
(4, '2', '1', '2000', '2023-12-10 20:31:37', '2023-12-10 20:50:02'),
(5, '2', '1', '800', '2023-12-10 20:50:43', '2023-12-10 20:50:43'),
(6, '2', '2', '3000', '2023-12-10 20:51:06', '2023-12-10 20:51:06'),
(7, '3', '1', '600', '2023-12-11 05:37:01', '2023-12-11 05:37:01'),
(8, '3', '2', '350', '2023-12-11 05:37:11', '2023-12-11 05:37:11');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `supplier_id` bigint(20) UNSIGNED NOT NULL,
  `supplier_name` varchar(50) DEFAULT NULL,
  `supplier_phone` varchar(50) DEFAULT NULL,
  `supplier_address` varchar(50) DEFAULT NULL,
  `supplier_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`supplier_id`, `supplier_name`, `supplier_phone`, `supplier_address`, `supplier_status`, `created_at`, `updated_at`) VALUES
(1, 'Ali Hasan', '+880 1723-629080', 'Behar hat, Shibgonj-Bogura', 1, '2023-12-10 20:26:17', '2023-12-10 20:26:17'),
(2, 'Mim Hasan', '+880 1723-629080', 'Behar hat, Shibgonj-Bogura', 1, '2023-12-10 20:26:55', '2023-12-10 20:26:55'),
(3, 'Md Miraj', '+880 1723-629080', 'Behar hat, Shibgonj-Bogura', 1, '2023-12-11 05:36:46', '2023-12-11 05:36:46');

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `type_id` bigint(20) UNSIGNED NOT NULL,
  `type_name` varchar(50) DEFAULT NULL,
  `type_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`type_id`, `type_name`, `type_status`, `created_at`, `updated_at`) VALUES
(1, 'Income', 1, NULL, NULL),
(2, 'Expense', 1, NULL, NULL);

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
(1, 'Ali Hasan', 'infoalihasanbd@gmail.com', NULL, '$2y$12$IJejP4cSrOeYa4PuBlRzSu.D1HeKEa9QJlb4MMfqKGKLESbHbYFFu', NULL, '2023-12-10 14:20:55', '2023-12-10 14:20:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customerbalances`
--
ALTER TABLE `customerbalances`
  ADD PRIMARY KEY (`cb_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplierbalances`
--
ALTER TABLE `supplierbalances`
  ADD PRIMARY KEY (`sb_id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`supplier_id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`type_id`);

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
-- AUTO_INCREMENT for table `customerbalances`
--
ALTER TABLE `customerbalances`
  MODIFY `cb_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `supplierbalances`
--
ALTER TABLE `supplierbalances`
  MODIFY `sb_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `supplier_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `type_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
