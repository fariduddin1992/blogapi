-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2019 at 12:51 PM
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
(2, 'বাংলাদেশ', NULL, 'বাংলাদেশ', '2019-10-07 03:28:29', '2019-10-07 03:28:29'),
(3, 'আন্তর্জাতিক', NULL, 'আন্তর্জাতিক', '2019-10-07 03:28:40', '2019-10-07 03:28:40'),
(4, 'অর্থনীতি', NULL, 'অর্থনীতি', '2019-10-07 03:28:48', '2019-10-07 03:28:48'),
(5, 'মতামত', NULL, 'মতামত', '2019-10-07 03:28:58', '2019-10-07 03:28:58'),
(6, 'খেলা', NULL, 'খেলা', '2019-10-07 03:29:10', '2019-10-07 03:29:10'),
(7, 'বিনোদন', NULL, 'বিনোদন', '2019-10-07 03:29:19', '2019-10-07 03:29:19'),
(8, 'উত্তর আমেরিকা', NULL, 'উত্তর-আমেরিকা', '2019-10-07 03:29:26', '2019-10-07 03:29:26'),
(9, 'জীবনযাপন', NULL, 'জীবনযাপন', '2019-10-07 03:29:33', '2019-10-07 03:29:33'),
(10, 'ভিডিও', NULL, 'ভিডিও', '2019-10-07 03:29:40', '2019-10-07 03:29:40');

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
(14, '2019_09_28_073326_create_subcategories_table', 6);

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
  `IP-address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) DEFAULT NULL,
  `is_featured` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `user_type`, `title`, `description`, `image`, `slug`, `IP-address`, `category_id`, `subcategory_id`, `is_featured`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, 'ঢাকায় উবার চালকদের ধর্মঘট চলছে', '<p>তিন মাস ধরে দাবিদাওয়া জানিয়ে উবার চালকেরা এখন ধর্মঘটে নেমেছেন। ৯ দফা দাবিতে তাঁরা ঢাকায় ২৪ ঘণ্টার জন্য উবার অ্যাপে গাড়ি চালানো বন্ধ রেখেছেন। উদ্ভূত সমস্যার জন্য উবার দুঃখ প্রকাশ করে বলছে, তারা চালকদের সুবিধাকে অগ্রাধিকার দিয়ে থাকেন।</p><p><br></p><p>গতকাল রোববার দিবাগত রাত ১২টা থেকে আজ সোমবার দিবাগত রাত ১২টা পর্যন্ত বাংলাদেশ রাইড শেয়ারিং ড্রাইভারস অ্যাসোসিয়েশন এই ধর্মঘট ডেকেছে। সংগঠনটির সাধারণ সম্পাদক কাইয়ুম আহমেদ প্রথম আলোকে বলেন, ‘জুলাই থেকে আমরা দাবি জানিয়ে আসছি। ঈদের আগে উবার অফিস থেকে সমাধানের আশ্বাস দেওয়া হয়েছিল। কিন্তু তাঁরা এখন পর্যন্ত আমাদের কিছু জানায়নি। তাই আমাদের এই সিদ্ধান্ত।’</p><p><br></p><p>উবার চালকদের দাবিগুলো হলো—উবারের ওয়েবিল অনুযায়ী যাত্রা শুরু করা থেকে শেষ পর্যন্ত মিনিট ও কিলোমিটার হিসাব করে ভাড়া দেওয়া। কমিশন ২৫ শতাংশ থেকে কমিয়ে ১২ শতাংশ করা। গ্যাসের মূল্য বাড়ায় ভাড়া বাড়ানো। চালকদের নিরাপত্তার ব্যবস্থা ও যাত্রী দ্বারা গাড়ির ক্ষতি হলে ক্ষতিপূরণ দেওয়া। অভিযোগ যাচাই না করে চালকদের বিরুদ্ধে ব্যবস্থা না নেওয়া। উবারের অ্যাকাউন্টেও যাত্রীর ছবি বাধ্যতামূলক ও যাত্রীকে লোকেশনের ব্যাপারে প্রাথমিক ট্রেনিং দেওয়া। সর্বোচ্চ দুই কিলোমিটারে মধ্যে যাত্রীর সঙ্গে চালকদের সংযোগের ব্যবস্থা। চালকদের গন্তব্যের ক্ষেত্রে শতভাগ গন্তব্যের আশপাশে ট্রিপ দিতে হবে এবং ১২ ঘণ্টার বেশি অনলাইনে না থাকার সিদ্ধান্ত বাতিল করা।</p><p><br></p><p>কাইয়ুম আহমেদ জানান, আগে তাঁদের ৮ দফা দাবি ছিল। সম্প্রতি উবার প্রতিদিন চালকদের জন্য ১২ ঘণ্টা সময় বেঁধে দিয়েছে। একজন চালক দিনে ১২ ঘণ্টার বেশি চালাতে পারবেন না। কিন্তু চালকেরা তা মানতে নারাজ।</p><p><br></p><p>ধর্মঘট চললেও রাজধানীর বিভিন্ন এলাকায় উবারের অ্যাপে গাড়ি পাওয়া যাচ্ছে। রাজধানীর গুলশান, বনানী, ধানমন্ডি ও তেজগাঁও অঞ্চলে অ্যাপে উবারের গাড়ি মিলছে। এ বিষয়ে কাইয়ুম আহমেদের দাবি, ৮০ ভাগ গাড়ি বন্ধ। ২০ ভাগের মতো চলছে। যাঁরা ফেসবুক তেমন বোঝেন না, তাঁরা তাঁদের ধর্মঘট সম্পর্কে অবগত নন। তাঁরাই সেবা দিচ্ছেন।</p><p><br></p><p>কাইয়ুম আহমেদ বলেন, বেঁধে দেওয়া সময়ের মধ্যে উবার যদি দাবি না মানে, তাহলে পরবর্তী কর্মসূচি দেবেন তাঁরা।</p><p><br></p><p>ধর্মঘট প্রসঙ্গে এক বিবৃতিতে উবার জানায়, কিছু ব্যক্তির কারণে তাদের চালকদের সঙ্গে যে সমস্যা সৃষ্টি হয়েছে, সে জন্য তারা দুঃখিত।</p><p><br></p><p>উবার বলছে, তারা চালকদের জন্য স্থিতিশীল আয়ের সুযোগ তৈরিতে নির্ভরযোগ্য, সুবিধাজনক ও নিরাপদ পরিবহন বিকল্প সরবরাহ করতে প্রতিশ্রুতিবদ্ধ। এ ছাড়া চালকদের সুবিধাকে উবার অগ্রাধিকার দিয়ে থাকে বলে বিবৃতিতে উল্লেখ করা হয়। তারা আরও জানায়, চালকদের সমস্যার জন্য উবারের সেবাকেন্দ্র রয়েছে। অ্যাপেও সমস্যা জানানো যায়। এর মাধ্যমেই তারা সমস্যার সমাধান করে থাকে।</p>', '-1571044199.jpg', 'ঢাকায়-উবার-চালকদের-ধর্মঘট-চলছে', NULL, 2, 11, 1, '2019-10-14 03:09:59', '2019-10-14 03:09:59'),
(2, 1, NULL, 'খুনিদের বিচার দাবিতে বুয়েটে গণস্বাক্ষর কর্মসূচি', '<p>আবরার ফাহাদ হত্যার বিচারসহ বিভিন্ন দাবিতে বাংলাদেশ প্রকৌশল বিশ্ববিদ্যালয়ে (বুয়েট) আন্দোলন করছেন সাধারণ শিক্ষার্থীরা। আজ সোমবার আবরার হত্যাকারীদের বিচারের দাবিতে গণস্বাক্ষর সংগ্রহ করছেন আন্দোলনকারীরা। কাল মঙ্গলবার থেকে আবার আন্দোলন পুরোদমে চলবে বলে জানিয়েছেন আন্দোলনরত শিক্ষার্থীরা।</p><p><br></p><p>বুয়েটে ভর্তি পরীক্ষার কারণে গতকাল রোববার ও আজ সোমবার আন্দোলন শিথিল করা হয়। আজ সকাল ৯টা থেকে তিন ঘণ্টার লিখিত ভর্তি পরীক্ষা অনুষ্ঠিত হয়। পরীক্ষা শেষ হয় দুপুর ১২টায়। শান্তিপূর্ণভাবে পরীক্ষা শেষ হয়েছে। মোট পরীক্ষার্থীর ৯০ শতাংশই পরীক্ষায় উপস্থিত ছিলেন বলে জানিয়েছে বুয়েট কর্তৃপক্ষ।</p><p><br></p><p>আবরার ফাহাদ হত্যার বিচারসহ বিভিন্ন দাবিতে বাংলাদেশ প্রকৌশল বিশ্ববিদ্যালয়ে (বুয়েট) আন্দোলন করছেন সাধারণ শিক্ষার্থীরা। আজ সোমবার আবরার হত্যাকারীদের বিচারের দাবিতে গণস্বাক্ষর সংগ্রহ করছেন আন্দোলনকারীরা। কাল মঙ্গলবার থেকে আবার আন্দোলন পুরোদমে চলবে বলে জানিয়েছেন আন্দোলনরত শিক্ষার্থীরা।</p><p><br></p><p>বুয়েটে ভর্তি পরীক্ষার কারণে গতকাল রোববার ও আজ সোমবার আন্দোলন শিথিল করা হয়। আজ সকাল ৯টা থেকে তিন ঘণ্টার লিখিত ভর্তি পরীক্ষা অনুষ্ঠিত হয়। পরীক্ষা শেষ হয় দুপুর ১২টায়। শান্তিপূর্ণভাবে পরীক্ষা শেষ হয়েছে। মোট পরীক্ষার্থীর ৯০ শতাংশই পরীক্ষায় উপস্থিত ছিলেন বলে জানিয়েছে বুয়েট কর্তৃপক্ষ।</p><p><br></p><p>ভর্তি পরীক্ষার কারণে সকাল থেকেই বুয়েট ক্যাম্পাসে ভর্তি-ইচ্ছুক ও তাঁদের অভিভাবকেরা ভিড় করেন। এর মধ্যেই ক্যাম্পাসে শহীদ মিনারের সামনে সাধারণ শিক্ষার্থীদের ব্যানারে কর্মসূচি পালিত হয়। আবরার হত্যার বিচারের দাবিতে গণস্বাক্ষর সংগ্রহ কর্মসূচি পালিত হয়। সেখানে অনেক শিক্ষার্থীকেই স্বাক্ষর করতে দেখা যায়।</p><p><br></p><p>আন্দোলনরত শিক্ষার্থী সাইদুল আরাফাত বলেন, তাঁরা শিক্ষার পরিবেশ ও শিক্ষার্থীদের নিরাপত্তা নিশ্চিত করতে আন্দোলন করছেন। সব দাবি পূরণ না হওয়া পর্যন্ত তাঁদের আন্দোলন চলবে।</p><p><br></p><p>বিশ্ববিদ্যালয় শিক্ষার্থীদের সব দাবি মেনে নিয়েছে, তাহলে আন্দোলন কেন, জানতে চাইলে সাইদুল আরাফাত বলেন, মেনে নেওয়ার ঘোষণা আর বাস্তবায়ন এক নয়। শিক্ষার্থীরা কেবল আশ্বাস নয়, বাস্তবায়নও দেখতে চান।</p><p><br></p><p>গত ৬ অক্টোবর শেরেবাংলা হলে আবরারকে পিটিয়ে হত্যা করেন বুয়েট ছাত্রলীগের একদল নেতা-কর্মীরা।</p><p><br></p><p>আজ ভর্তি পরীক্ষা চলাকালে কয়েকটি কেন্দ্র পরিদর্শন করেন বুয়েট উপাচার্য অধ্যাপক সাইফুল ইসলাম। এ সময় সাংবাদিকদের তিনি বলেন, ‘শিক্ষার্থীদের দাবি পূরণে আমরা কাজ করছি। আবরার হত্যার প্রতিবাদে চলমান আন্দোলন ভর্তি পরীক্ষায় প্রভাব ফেলেনি। বুয়েটের সংকট নিরসনে কয়েকটি কমিটি গঠন করা হয়েছে। শিক্ষার্থীদের দাবি আমরা মেনে নিয়েছি। আশা করি, দ্রুতই সংকট নিরসন হবে।’</p><p><br></p><p>উপাচার্য জানান, বুয়েটের হলে হলে অভিযান অব্যাহত থাকবে। নিয়মিত শিক্ষার্থীদের বাইরে কেউ হলে থাকতে পারবেন না। বুয়েটে ছাত্র-শিক্ষকদের সাংগঠনিক রাজনীতিও থাকবে না।</p>', '-1571052294.jpg', 'খুনিদের-বিচার-দাবিতে-বুয়েটে-গণস্বাক্ষর-কর্মসূচি', NULL, 2, 3, 1, '2019-10-14 05:24:54', '2019-10-14 05:24:54');

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
(7, 2, 2, '2019-10-14 05:24:54', '2019-10-14 05:24:54');

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
(11, 'বিবিধ', 2, 'বিবিধ', NULL, '2019-10-07 04:05:04', '2019-10-07 04:05:04');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'India', 'india', '2019-10-05 03:25:00', '2019-10-05 03:25:00'),
(2, 'যুবলীগ', 'যুবলীগ', '2019-10-07 04:09:23', '2019-10-07 04:09:23'),
(3, 'নির্বাচন', 'নির্বাচন', '2019-10-08 20:56:18', '2019-10-08 20:56:18'),
(4, 'Mug', 'mug', '2019-10-08 20:56:24', '2019-10-08 20:56:24');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `likes_counters`
--
ALTER TABLE `likes_counters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `post_tags`
--
ALTER TABLE `post_tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
