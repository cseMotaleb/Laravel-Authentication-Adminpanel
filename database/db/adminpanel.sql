-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2020 at 12:29 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adminpanel`
--

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
(8, '2020_08_23_085603_create_permission_tables', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\User', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('rana@subrasystems.com', '$2y$10$46HaiQoKDg17zFcEAtyEqOm/ecHUeVuR9UaSgMaijJx3.d2n.pbtm', '2020-08-25 22:29:17');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'admin-list', 'web', NULL, '2020-08-23 18:36:29', '2020-08-23 18:36:29'),
(2, 'admin-create', 'web', NULL, '2020-08-23 18:36:29', '2020-08-23 18:36:29'),
(3, 'admin-edit', 'web', NULL, '2020-08-23 18:36:29', '2020-08-23 18:36:29'),
(4, 'admin-delete', 'web', NULL, '2020-08-23 18:36:29', '2020-08-23 18:36:29'),
(5, 'manager-list', 'web', NULL, '2020-08-23 18:36:29', '2020-08-23 18:36:29'),
(6, 'manager-create', 'web', NULL, '2020-08-23 18:36:29', '2020-08-23 18:36:29'),
(7, 'manager-edit', 'web', NULL, '2020-08-23 18:36:29', '2020-08-23 18:36:29'),
(8, 'manager-delete', 'web', NULL, '2020-08-23 18:36:30', '2020-08-23 18:36:30'),
(9, 'customer-list', 'web', NULL, '2020-08-23 18:36:30', '2020-08-23 18:36:30'),
(10, 'customer-create', 'web', NULL, '2020-08-23 18:36:30', '2020-08-23 18:36:30'),
(11, 'customer-edit', 'web', NULL, '2020-08-23 18:36:30', '2020-08-23 18:36:30'),
(12, 'customer-delete', 'web', NULL, '2020-08-23 18:36:30', '2020-08-23 18:36:30'),
(13, 'user-list', 'web', NULL, '2020-08-23 18:36:30', '2020-08-23 18:36:30'),
(14, 'user-create', 'web', NULL, '2020-08-23 18:36:30', '2020-08-23 18:36:30'),
(15, 'user-edit', 'web', NULL, '2020-08-23 18:36:30', '2020-08-23 18:36:30'),
(16, 'user-delete', 'web', NULL, '2020-08-23 18:36:30', '2020-08-23 18:36:30'),
(17, 'vendor-list', 'web', NULL, '2020-08-23 18:36:30', '2020-08-23 18:36:30'),
(18, 'vendor-create', 'web', NULL, '2020-08-23 18:36:30', '2020-08-23 18:36:30'),
(19, 'vendor-edit', 'web', NULL, '2020-08-23 18:36:30', '2020-08-23 18:36:30'),
(20, 'vendor-delete', 'web', NULL, '2020-08-23 18:36:30', '2020-08-23 18:36:30'),
(21, 'staff-list', 'web', NULL, '2020-08-23 18:36:31', '2020-08-23 18:36:31'),
(22, 'staff-create', 'web', NULL, '2020-08-23 18:36:31', '2020-08-23 18:36:31'),
(23, 'staff-edit', 'web', NULL, '2020-08-23 18:36:31', '2020-08-23 18:36:31'),
(24, 'staff-delete', 'web', NULL, '2020-08-23 18:36:31', '2020-08-23 18:36:31'),
(25, 'role-list', 'web', NULL, '2020-08-23 18:36:31', '2020-08-23 18:36:31'),
(26, 'role-create', 'web', NULL, '2020-08-23 18:36:31', '2020-08-23 18:36:31'),
(27, 'role-edit', 'web', NULL, '2020-08-23 18:36:31', '2020-08-23 18:36:31'),
(28, 'role-delete', 'web', NULL, '2020-08-23 18:36:31', '2020-08-23 18:36:31'),
(29, 'permission-list', 'web', NULL, '2020-08-23 18:36:31', '2020-08-23 18:36:31'),
(30, 'permission-create', 'web', NULL, '2020-08-23 18:36:31', '2020-08-23 18:36:31'),
(31, 'permission-edit', 'web', NULL, '2020-08-23 18:36:31', '2020-08-23 18:36:31'),
(32, 'permission-delete', 'web', NULL, '2020-08-23 18:36:31', '2020-08-23 18:36:31'),
(33, 'dashboard-list', 'web', NULL, '2020-08-23 18:36:31', '2020-08-23 18:36:31'),
(34, 'dashboard-create', 'web', NULL, '2020-08-23 18:36:31', '2020-08-23 18:36:31'),
(35, 'dashboard-edit', 'web', NULL, '2020-08-23 18:36:32', '2020-08-23 18:36:32'),
(36, 'dashboard-delete', 'web', NULL, '2020-08-23 18:36:32', '2020-08-23 18:36:32'),
(37, 'product-list', 'web', NULL, '2020-08-23 18:36:32', '2020-08-23 18:36:32'),
(38, 'product-create', 'web', NULL, '2020-08-23 18:36:32', '2020-08-23 18:36:32'),
(39, 'product-edit', 'web', NULL, '2020-08-23 18:36:32', '2020-08-23 18:36:32'),
(40, 'product-delete', 'web', NULL, '2020-08-23 18:36:32', '2020-08-23 18:36:32'),
(41, 'order-list', 'web', NULL, '2020-08-23 18:36:32', '2020-08-23 18:36:32'),
(42, 'order-create', 'web', NULL, '2020-08-23 18:36:32', '2020-08-23 18:36:32'),
(43, 'order-edit', 'web', NULL, '2020-08-23 18:36:32', '2020-08-23 18:36:32'),
(44, 'order-delete', 'web', NULL, '2020-08-23 18:36:32', '2020-08-23 18:36:32'),
(45, 'blog-list', 'web', NULL, '2020-08-23 18:36:32', '2020-08-23 18:36:32'),
(46, 'blog-create', 'web', NULL, '2020-08-23 18:36:32', '2020-08-23 18:36:32'),
(47, 'blog-edit', 'web', NULL, '2020-08-23 18:36:33', '2020-08-23 18:36:33'),
(48, 'blog-delete', 'web', NULL, '2020-08-23 18:36:33', '2020-08-23 18:36:33');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', '2020-08-23 18:36:40', '2020-08-23 18:36:40');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `user_type` enum('Admin','Manager','Vendor','Staff','Customer') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Customer',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `phone`, `email`, `role_id`, `user_type`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Motaleb Hossain', 'motaleb', '01767007717', 'admin@gmail.com', 1, 'Admin', NULL, '$2y$10$voQgo4nTVfFWPLct7f1cN.QExjS5q8mNkx/H224W6InXvOFWZXnL.', NULL, '2020-08-23 18:36:40', '2020-08-23 18:36:40'),
(2, 'ali hossain', 'ali', '0134544444', 'ali@gmail.com', NULL, 'Customer', NULL, '$2y$10$EMl5u41fdqyP5vRIRPLzTuwIfa7bsFDd57a9//tSwXSu7p8zZ0Uq.', NULL, '2020-08-23 18:46:05', '2020-08-23 18:46:05'),
(5, 'nabi', 'nabi', '0199239292', 'nabi@subrasystems.com', NULL, 'Customer', NULL, '$2y$10$iJ/yVtuSIYS7/8TMz13.HOEJBqdkoqljJ37tby3kmLbevzdU7yyyC', NULL, '2020-08-25 23:35:57', '2020-08-25 23:35:57');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
