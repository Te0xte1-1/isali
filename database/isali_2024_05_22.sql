-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2024 at 05:18 PM
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
-- Database: `isali`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `first_name`, `last_name`, `username`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'نصرالدين ', 'عثمان محمد ', 'admin', '1@1', '$2y$10$8DqLkvy396E65EVK5zW7o.f8PXT6wXi3m.BWy6B/R0QVzERIJ23lm', NULL, NULL);

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
-- Table structure for table `isals`
--

CREATE TABLE `isals` (
  `id` int(11) NOT NULL,
  `isal_serial` varchar(255) DEFAULT NULL,
  `isal_customer_name` varchar(255) DEFAULT NULL,
  `isal_customer_national` varchar(150) DEFAULT NULL,
  `isal_customer_phone` varchar(150) DEFAULT NULL,
  `isal_pay_type` tinyint(4) DEFAULT 1,
  `isal_date` date DEFAULT NULL,
  `isal_time` time DEFAULT NULL,
  `isal_total` decimal(10,2) DEFAULT NULL,
  `isal_status` tinyint(4) DEFAULT NULL,
  `isal_approve` tinyint(4) DEFAULT NULL,
  `currentYear` year(4) DEFAULT NULL,
  `currentMonth` int(11) DEFAULT NULL,
  `isal_note_comment` varchar(255) DEFAULT NULL,
  `isal_print_comment` tinyint(1) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) DEFAULT 1,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `isals`
--

INSERT INTO `isals` (`id`, `isal_serial`, `isal_customer_name`, `isal_customer_national`, `isal_customer_phone`, `isal_pay_type`, `isal_date`, `isal_time`, `isal_total`, `isal_status`, `isal_approve`, `currentYear`, `currentMonth`, `isal_note_comment`, `isal_print_comment`, `created_at`, `created_by`, `updated_at`) VALUES
(1, '02450001', 'ahmed', '9563254212', '0114700220', 1, '2024-05-09', '22:50:01', '16122.00', 3, 1, 2024, 5, 'لا يوجد تعليق', 2, '2024-05-19 07:29:16', 1, '2024-05-19 07:29:16'),
(2, '02450002', 'نصرالدين عثمان محمد', '12234512', '0990172188', 1, '2024-05-19', '22:58:21', '12600.00', 1, 0, 2024, 5, 'لا يوجد تعليق', 2, '2024-05-19 19:58:21', 1, '2024-05-19 19:58:21'),
(3, '02450003', 'الحاج يوسف علي', '23232323', '093213232', 1, '2024-05-21', '14:48:08', '12600.00', 1, 0, 2024, 5, 'لا يوجد تعليق', 2, '2024-05-21 11:48:08', 1, '2024-05-21 11:48:08'),
(4, '02450004', 'الحاج يوسف علي', '23232323', '093213232', 1, '2024-05-21', '14:54:21', '12600.00', 1, 0, 2024, 5, 'لا يوجد تعليق', 2, '2024-05-21 11:54:21', 1, '2024-05-21 11:54:21'),
(5, '02450005', 'الحاج يوسف علي', '23232323', '093213232', 1, '2024-05-21', '14:56:02', '12600.00', 1, 0, 2024, 5, 'لا يوجد تعليق', 2, '2024-05-21 11:56:02', 1, '2024-05-21 11:56:02'),
(6, '02450006', 'الحاج يوسف علي', '23232323', '093213232', 1, '2024-05-21', '14:56:44', '12600.00', 1, 0, 2024, 5, 'لا يوجد تعليق', 2, '2024-05-21 11:56:44', 1, '2024-05-21 11:56:44');

-- --------------------------------------------------------

--
-- Table structure for table `isal_detailses`
--

CREATE TABLE `isal_detailses` (
  `id` int(11) NOT NULL,
  `isal_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `service_price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `isal_detailses`
--

INSERT INTO `isal_detailses` (`id`, `isal_id`, `service_id`, `service_price`) VALUES
(1, 1, 1, '150.00'),
(2, 1, 2, '450.00'),
(3, 1, 3, '12000.00'),
(4, 1, 4, '2500.00'),
(5, 1, 5, '42.00'),
(6, 1, 6, '70.00'),
(7, 1, 7, '530.00'),
(8, 1, 8, '320.00'),
(9, 1, 9, '60.00'),
(10, 2, 1, '150.00'),
(11, 2, 2, '450.00'),
(12, 2, 3, '12000.00'),
(13, 3, 1, '150.00'),
(14, 3, 2, '450.00'),
(15, 3, 3, '12000.00'),
(16, 4, 1, '150.00'),
(17, 4, 2, '450.00'),
(18, 4, 3, '12000.00'),
(19, 5, 1, '150.00'),
(20, 5, 2, '450.00'),
(21, 5, 3, '12000.00'),
(22, 6, 1, '150.00'),
(23, 6, 2, '450.00'),
(24, 6, 3, '12000.00');

-- --------------------------------------------------------

--
-- Table structure for table `isal_miror`
--

CREATE TABLE `isal_miror` (
  `id` int(11) NOT NULL,
  `serial_code` varchar(255) NOT NULL,
  `first_status_of_isal` tinyint(4) NOT NULL COMMENT 'حاله الإيصال الأولى',
  `isal_movments_status` tinyint(11) NOT NULL COMMENT 'حاله الإيصال الجديده',
  `byan` varchar(200) NOT NULL,
  `status_of_movemoent` tinyint(4) NOT NULL COMMENT 'حاله حركه الإيصال هل تمت الحركه ام لم تتم',
  `added_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `isal_miror`
--

INSERT INTO `isal_miror` (`id`, `serial_code`, `first_status_of_isal`, `isal_movments_status`, `byan`, `status_of_movemoent`, `added_by`, `created_at`, `updated_at`) VALUES
(1, '2', 1, 5, 'ييي', 1, 1, '2024-05-16 09:52:26', '2024-05-16');

-- --------------------------------------------------------

--
-- Table structure for table `isal_status`
--

CREATE TABLE `isal_status` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `isal_status`
--

INSERT INTO `isal_status` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'إيصال قيد التنفيذ', NULL, NULL),
(2, 'إيصال مؤورشف', NULL, NULL),
(3, 'مكتمل', NULL, NULL),
(4, 'إيصال تم إلغاؤة', NULL, NULL),
(5, 'طلب إلغاء إيصال', NULL, NULL),
(6, 'إيصال مطلوب إلغاؤة', NULL, NULL);

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_04_23_130123_create_admins_table', 1),
(6, '2024_05_03_120346_create_services_table', 1),
(7, '2024_05_03_120408_create_sub__services_table', 1),
(8, '2024_05_03_120423_create_units_table', 1),
(9, '2024_05_03_120441_create_settings_table', 1),
(10, '2024_05_03_120926_create_isals_table', 1),
(11, '2024_05_03_120941_create_isal__statuses_table', 1),
(12, '2024_05_03_121005_create_motahasils_table', 1),
(13, '2024_05_03_121023_create_pay__types_table', 1),
(14, '2024_05_04_084441_laratrust_setup_tables', 1),
(15, '2024_05_04_084737_create_isal_detailses_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `motahasils`
--

CREATE TABLE `motahasils` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mot_name` varchar(255) NOT NULL,
  `mot_unit` varchar(255) NOT NULL,
  `mot_id` varchar(255) NOT NULL,
  `mot_barcode` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pay_types`
--

CREATE TABLE `pay_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `display_name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'users_create', 'Create Users', 'Create Users', '2024-05-04 12:16:56', '2024-05-04 12:16:56'),
(2, 'users_read', 'Read Users', 'Read Users', '2024-05-04 12:16:56', '2024-05-04 12:16:56'),
(3, 'users_update', 'Update Users', 'Update Users', '2024-05-04 12:16:56', '2024-05-04 12:16:56'),
(4, 'users_delete', 'Delete Users', 'Delete Users', '2024-05-04 12:16:57', '2024-05-04 12:16:57');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) NOT NULL
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `display_name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'super_admin', 'Super Admin', 'Super Admin', '2024-05-04 12:16:56', '2024-05-04 12:16:56');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`, `user_type`) VALUES
(1, 1, 'App\\Models\\User');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `service_name` varchar(255) NOT NULL,
  `service_price` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_name`, `service_price`, `created_at`, `updated_at`) VALUES
(1, 'عوائد سكنية', '150', NULL, NULL),
(2, 'دمغه عامة', '450', '2024-05-06 20:46:01', '2024-05-06 20:46:01'),
(3, 'رسوم خدمات مجتمعية', '12000', '2024-05-06 20:47:38', '2024-05-06 20:47:38'),
(4, 'رسوم هندسية', '2500', '2024-05-14 20:19:01', '2024-05-14 20:19:01'),
(5, 'دمغه ولائية', '42', '2024-05-14 20:19:28', '2024-05-14 20:19:28'),
(6, 'رسوم الخدمات', '70', '2024-05-14 20:20:44', '2024-05-14 20:20:44'),
(7, 'اعلاانات', '530', '2024-05-14 20:21:00', '2024-05-14 20:21:00'),
(8, 'رسوم إدارية', '320', '2024-05-14 20:21:14', '2024-05-14 20:21:14'),
(9, 'دمغه معاملات', '60', '2024-05-14 20:21:28', '2024-05-14 20:21:28');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_services`
--

CREATE TABLE `sub_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_id` varchar(255) NOT NULL,
  `sub_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `unit_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `unit_name`, `created_at`, `updated_at`) VALUES
(1, 'وحده الأمير', '2024-05-06 15:17:51', '2024-05-06 15:17:51'),
(2, 'وحده الأمير', '2024-05-06 15:24:10', '2024-05-06 15:24:10'),
(3, 'وحده السوق العربي', '2024-05-06 15:24:44', '2024-05-06 15:24:44'),
(4, 'وحده السوق المركزي', '2024-05-06 15:25:20', '2024-05-06 15:25:20'),
(5, 'وحده سوق بحري', '2024-05-06 19:47:08', '2024-05-06 19:47:08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
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

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'super', 'admin', '1@app.com', NULL, '$2y$10$RJoE977ocXgfImqvXhSyX.F1blP5TVIaufGU/eL3notXI7NfQnr0S', NULL, '2024-05-04 12:16:58', '2024-05-04 12:16:58'),
(3, '', '', '1@1', NULL, 'c4ca4238a0b923820dcc509a6f75849b', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `isals`
--
ALTER TABLE `isals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `isal_detailses`
--
ALTER TABLE `isal_detailses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `isal_id` (`isal_id`),
  ADD KEY `service_id` (`service_id`);

--
-- Indexes for table `isal_miror`
--
ALTER TABLE `isal_miror`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `isal_status`
--
ALTER TABLE `isal_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `motahasils`
--
ALTER TABLE `motahasils`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pay_types`
--
ALTER TABLE `pay_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`user_id`,`permission_id`,`user_type`),
  ADD KEY `permission_user_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`,`user_type`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_services`
--
ALTER TABLE `sub_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `isals`
--
ALTER TABLE `isals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `isal_detailses`
--
ALTER TABLE `isal_detailses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `isal_miror`
--
ALTER TABLE `isal_miror`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `isal_status`
--
ALTER TABLE `isal_status`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `motahasils`
--
ALTER TABLE `motahasils`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pay_types`
--
ALTER TABLE `pay_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_services`
--
ALTER TABLE `sub_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `isal_detailses`
--
ALTER TABLE `isal_detailses`
  ADD CONSTRAINT `isal_id` FOREIGN KEY (`isal_id`) REFERENCES `isals` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `service_id` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
