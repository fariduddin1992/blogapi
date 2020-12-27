-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2019 at 12:50 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'আন্তর্জাতিক', NULL, 'আন্তর্জাতিক', '2019-10-07 03:28:40', '2019-10-07 03:28:40'),
(2, 'বাংলাদেশ', NULL, 'বাংলাদেশ', '2019-10-07 03:28:29', '2019-10-07 03:28:29'),
(4, 'অর্থনীতি', NULL, 'অর্থনীতি', '2019-10-07 03:28:48', '2019-10-07 03:28:48'),
(5, 'মতামত', NULL, 'মতামত', '2019-10-07 03:28:58', '2019-10-07 03:28:58'),
(6, 'খেলা', NULL, 'খেলা', '2019-10-07 03:29:10', '2019-10-07 03:29:10'),
(7, 'বিনোদন', NULL, 'বিনোদন', '2019-10-07 03:29:19', '2019-10-07 03:29:19'),
(8, 'উত্তর আমেরিকা', NULL, 'উত্তর-আমেরিকা', '2019-10-07 03:29:26', '2019-10-07 03:29:26'),
(9, 'জীবনযাপন', NULL, 'জীবনযাপন', '2019-10-07 03:29:33', '2019-10-07 03:29:33'),
(10, 'ভিডিও', NULL, 'ভিডিও', '2019-10-07 03:29:40', '2019-10-07 03:29:40'),
(11, 'শিক্ষা', NULL, 'শিক্ষা', '2019-11-25 02:01:20', '2019-11-25 02:01:20');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `comments_author_ip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_approved` int(11) DEFAULT NULL,
  `comment_author_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `slug`, `email`, `website`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'farid uddin', 'farid-uddin', 'admin@example.com', 'hello.com', 'wow.com', 'This is test', '2019-11-29 09:06:54', '2019-11-29 09:06:54');

-- --------------------------------------------------------

--
-- Table structure for table `likes_counters`
--

CREATE TABLE `likes_counters` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_09_28_073053_create_posts_table', 1),
(4, '2019_09_28_073142_create_comments_table', 1),
(5, '2019_09_28_073225_create_likes_counters_table', 1),
(6, '2019_09_28_073255_create_admins_table', 1),
(9, '2019_09_28_073420_create_settings_table', 2),
(10, '2019_09_28_073311_create_categories_table', 3),
(12, '2019_10_05_091830_create__tags_table', 4),
(13, '2019_10_05_105611_create_post_tags_table', 5),
(14, '2019_09_28_073326_create_subcategories_table', 6),
(15, '2019_11_23_165948_create_contacts_table', 7);

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_view` int(11) NOT NULL DEFAULT 0,
  `total_search` int(11) NOT NULL DEFAULT 0,
  `IP-address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) DEFAULT NULL,
  `is_featured` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `user_type`, `title`, `description`, `image`, `slug`, `total_view`, `total_search`, `IP-address`, `category_id`, `subcategory_id`, `is_featured`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, 'fake post', '<p>This is&nbsp;</p>', '-1575042818.jpg', 'fake-post', 2, 0, NULL, 2, 3, 1, '2019-11-29 09:53:38', '2019-11-30 05:49:19'),
(2, 1, NULL, 'fake', '<p>ss</p>', '-1575043087.jpg', 'fake', 1, 0, NULL, 2, 4, 1, '2019-11-29 09:58:07', '2019-11-30 04:28:11');

-- --------------------------------------------------------

--
-- Table structure for table `post_tags`
--

CREATE TABLE `post_tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_tags`
--

INSERT INTO `post_tags` (`id`, `post_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(3, 30, 1, '2019-10-13 02:39:05', '2019-10-13 02:39:05'),
(4, 30, 3, '2019-10-13 02:39:05', '2019-10-13 02:39:05'),
(5, 30, 4, '2019-10-13 02:39:05', '2019-10-13 02:39:05'),
(6, 1, 3, '2019-10-14 03:09:59', '2019-10-14 03:09:59'),
(7, 2, 2, '2019-10-14 05:24:54', '2019-10-14 05:24:54'),
(8, 5, 2, '2019-11-25 02:42:33', '2019-11-25 02:42:33'),
(9, 6, 2, '2019-11-25 02:44:01', '2019-11-25 02:44:01'),
(10, 8, 2, '2019-11-25 04:50:34', '2019-11-25 04:50:34'),
(11, 9, 2, '2019-11-29 01:39:15', '2019-11-29 01:39:15'),
(12, 1, 2, '2019-11-29 01:49:28', '2019-11-29 01:49:28'),
(13, 1, 3, '2019-11-29 01:49:28', '2019-11-29 01:49:28'),
(14, 2, 2, '2019-11-29 01:51:22', '2019-11-29 01:51:22'),
(15, 3, 2, '2019-11-29 01:52:51', '2019-11-29 01:52:51'),
(16, 3, 3, '2019-11-29 01:52:51', '2019-11-29 01:52:51'),
(17, 4, 2, '2019-11-29 01:55:01', '2019-11-29 01:55:01'),
(18, 5, 2, '2019-11-29 02:01:52', '2019-11-29 02:01:52'),
(19, 1, 2, '2019-11-29 02:03:21', '2019-11-29 02:03:21'),
(20, 2, 2, '2019-11-29 02:19:20', '2019-11-29 02:19:20'),
(21, 3, 2, '2019-11-29 02:25:02', '2019-11-29 02:25:02'),
(22, 1, 2, '2019-11-29 09:53:38', '2019-11-29 09:53:38'),
(23, 2, 3, '2019-11-29 09:58:07', '2019-11-29 09:58:07');

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
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `name`, `category_id`, `slug`, `image`, `created_at`, `updated_at`) VALUES
(1, 'নির্বাচন', 2, 'নির্বাচন', NULL, '2019-10-07 04:02:53', '2019-10-07 04:02:53'),
(2, 'এলাকার খবর', 2, 'এলাকার-খবর', NULL, '2019-10-07 04:03:20', '2019-10-07 04:03:20'),
(3, 'রাজনীতি', 2, 'রাজনীতি', NULL, '2019-10-07 04:03:27', '2019-10-07 04:03:27'),
(4, 'সরকার', 2, 'সরকার', NULL, '2019-10-07 04:03:36', '2019-10-07 04:03:36'),
(5, 'অপরাধ', 2, 'অপরাধ', NULL, '2019-10-07 04:03:53', '2019-10-07 04:03:53'),
(6, 'আইন ও বিচার', 2, 'আইন-ও-বিচার', NULL, '2019-10-07 04:04:03', '2019-10-07 04:04:03'),
(7, 'পরিবেশ', 2, 'পরিবেশ', NULL, '2019-10-07 04:04:10', '2019-10-07 04:04:10'),
(8, 'সংসদ', 2, 'সংসদ', NULL, '2019-10-07 04:04:42', '2019-10-07 04:04:42'),
(9, 'রাজধানী', 2, 'রাজধানী', NULL, '2019-10-07 04:04:50', '2019-10-07 04:04:50'),
(10, 'জনসংখ্যা', 2, 'জনসংখ্যা', NULL, '2019-10-07 04:04:57', '2019-10-07 04:04:57'),
(11, 'বিবিধ', 2, 'বিবিধ', NULL, '2019-10-07 04:05:04', '2019-10-07 04:05:04'),
(12, 'হিসাব বিজন', 11, 'হিসাব-বিজন', NULL, '2019-11-25 02:01:59', '2019-11-25 02:01:59');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `priority` int(11) NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `priority`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'India', 3, 'india', '2019-10-05 03:25:00', '2019-10-05 03:25:00'),
(2, 'যুবলীগ', 1, 'যুবলীগ', '2019-10-07 04:09:23', '2019-10-07 04:09:23'),
(3, 'নির্বাচন', 2, 'নির্বাচন', '2019-10-08 20:56:18', '2019-10-08 20:56:18'),
(4, 'Mug', 4, 'mug', '2019-10-08 20:56:24', '2019-10-08 20:56:24');

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'farid uddin', 'fariduddin1992@gmail.com', NULL, '', NULL, NULL, NULL),
(3, 'kamal', 'kamal@gmail.com', NULL, '$2y$10$cVkW5ph.FMGiJcCcG3iAReMcnlv2vIZ78/be4WjnTcLsmE5iULfZq', NULL, '2019-11-23 10:45:43', '2019-11-23 10:45:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes_counters`
--
ALTER TABLE `likes_counters`
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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_tags`
--
ALTER TABLE `post_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `likes_counters`
--
ALTER TABLE `likes_counters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `post_tags`
--
ALTER TABLE `post_tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
