-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2020 at 12:46 PM
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
  `is_approved` int(11) NOT NULL DEFAULT 0,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_featured` int(1) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `user_type`, `title`, `description`, `image`, `slug`, `total_view`, `total_search`, `IP-address`, `category_id`, `subcategory_id`, `is_approved`, `meta_description`, `is_featured`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, 'বাংলাদেশ বিদ্যুৎ উন্নয়ন বোর্ডে চাকরির নিয়োগ বিজ্ঞপ্তি BPDB Job Circular 2020', '<p class=\"MsoListParagraphCxSpFirst\"><span style=\"font-size:18.0pt;line-height:\r\n107%;font-family:Nikosh\">বাংলাদেশ বিদ্যুৎ উন্নয়ন বোর্ডে জনবল নিয়োগের বিজ্ঞপ্তি প্রকাশিত\r\nহয়েছে। বাংলাদেশ বিদ্যুৎ উন্নয়ন বোর্ড সহকারী প্রকৌশলী ও এসবিএ পদে নিয়োগ দেবে। পদগুলোতে\r\nনারী ও পুরুষ উভয়েই আবেদন করতে পারবেন। আগ্রহ&nbsp;\r\nও&nbsp; যোগ্যতা থাকলে আপনিও আবেদন করতে পারেন।\r\nআগ্রহী প্রার্থীরা অনলাইনে আবেদন করতে পারবেন। সম্পূর্ণ বিজ্ঞপ্তি বিস্তারিত দেওয়া\r\nহল।</span></p><table class=\"MsoTableGrid\" border=\"1\" cellspacing=\"0\" cellpadding=\"0\" width=\"0\" style=\"width: 471.95pt; margin-left: 0px; border: none;\">\r\n <tbody><tr>\r\n  <td width=\"162\" valign=\"top\" style=\"width:121.25pt;border:solid windowtext 1.0pt;\r\n  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt\">\r\n  <p class=\"MsoListParagraphCxSpMiddle\" style=\"margin:0in;margin-bottom:.0001pt;\r\n  mso-add-space:auto;line-height:normal\"><strong><span style=\"font-size: 18pt; font-family: Nikosh; color: rgb(48, 48, 48); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">পদের নাম</span></strong><span style=\"font-size:18.0pt;font-family:Nikosh\"><o:p></o:p></span></p>\r\n  </td>\r\n  <td width=\"468\" valign=\"top\" style=\"width:350.7pt;border:solid windowtext 1.0pt;\r\n  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:\r\n  solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt\">\r\n  <p class=\"MsoListParagraphCxSpLast\" style=\"margin:0in;margin-bottom:.0001pt;\r\n  mso-add-space:auto;line-height:normal\"><strong><span style=\"font-size: 18pt; font-family: Nikosh; color: rgb(48, 48, 48); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">সহকারী প্রকৌশলী (তড়িৎ/যান্ত্রিক/মেটালার্জিক্যাল/কেমিক্যাল/সিভিল/\r\n  কম্পিউটার সায়েন্স এন্ড ইঞ্জিনিয়ারিং)</span></strong><span style=\"font-size:\r\n  18.0pt;font-family:Nikosh\"><o:p></o:p></span></p>\r\n  </td>\r\n </tr>\r\n <tr>\r\n  <td width=\"162\" valign=\"top\" style=\"width:121.25pt;border:solid windowtext 1.0pt;\r\n  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;\r\n  padding:0in 5.4pt 0in 5.4pt\">\r\n  <p class=\"MsoListParagraphCxSpFirst\" style=\"margin:0in;margin-bottom:.0001pt;\r\n  mso-add-space:auto;line-height:normal\"><span style=\"font-size: 18pt; font-family: Nikosh; color: rgb(48, 48, 48); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">শিক্ষাগত যোগ্যতা</span><span style=\"font-size:18.0pt;font-family:Nikosh\"><o:p></o:p></span></p>\r\n  </td>\r\n  <td width=\"468\" valign=\"top\" style=\"width:350.7pt;border-top:none;border-left:\r\n  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;\r\n  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;\r\n  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt\">\r\n  <p class=\"MsoListParagraphCxSpLast\" style=\"margin:0in;margin-bottom:.0001pt;\r\n  mso-add-space:auto;line-height:normal\"><span style=\"font-size: 18pt; font-family: Nikosh; color: rgb(48, 48, 48); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">বিএসসি ইঞ্জিনিয়ারিং: তড়িৎ/যান্ত্রিক/মেটালার্জিক্যাল/কেমিক্যাল/সিভিল/\r\n  কম্পিউটার সায়েন্স এন্ড ইঞ্জিনিয়ারিং।</span><span style=\"font-size:\r\n  18.0pt;font-family:Nikosh\"><o:p></o:p></span></p>\r\n  </td>\r\n </tr>\r\n <tr>\r\n  <td width=\"162\" valign=\"top\" style=\"width:121.25pt;border:solid windowtext 1.0pt;\r\n  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;\r\n  padding:0in 5.4pt 0in 5.4pt\">\r\n  <p class=\"MsoListParagraphCxSpFirst\" style=\"margin:0in;margin-bottom:.0001pt;\r\n  mso-add-space:auto;line-height:normal\"><span style=\"font-size: 18pt; font-family: Nikosh; color: rgb(48, 48, 48); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">বেতন</span><span style=\"font-size:18.0pt;font-family:Nikosh\"><o:p></o:p></span></p>\r\n  </td>\r\n  <td width=\"468\" valign=\"top\" style=\"width:350.7pt;border-top:none;border-left:\r\n  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;\r\n  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;\r\n  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt\">\r\n  <p class=\"MsoListParagraphCxSpLast\" style=\"margin:0in;margin-bottom:.0001pt;\r\n  mso-add-space:auto;line-height:normal\"><span style=\"font-size: 18pt; font-family: Nikosh; color: rgb(48, 48, 48); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">২২,০০০ – ৫৩,০৬০ টাকা</span><span style=\"font-size:18.0pt;font-family:Nikosh\"><o:p></o:p></span></p>\r\n  </td>\r\n </tr>\r\n <tr>\r\n  <td width=\"162\" valign=\"top\" style=\"width:121.25pt;border:solid windowtext 1.0pt;\r\n  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;\r\n  padding:0in 5.4pt 0in 5.4pt\">\r\n  <p class=\"MsoListParagraphCxSpFirst\" style=\"margin:0in;margin-bottom:.0001pt;\r\n  mso-add-space:auto;line-height:normal\"><span style=\"font-size: 18pt; font-family: Nikosh; color: rgb(48, 48, 48); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">আবেদন শুরুর সময়</span><span style=\"font-size:18.0pt;font-family:Nikosh\"><o:p></o:p></span></p>\r\n  </td>\r\n  <td width=\"468\" valign=\"top\" style=\"width:350.7pt;border-top:none;border-left:\r\n  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;\r\n  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;\r\n  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt\">\r\n  <p class=\"MsoListParagraphCxSpLast\" style=\"margin:0in;margin-bottom:.0001pt;\r\n  mso-add-space:auto;line-height:normal\"><span style=\"font-size:18.0pt;\r\n  font-family:Nikosh\">০৯ জানুয়ারি ২০২০ তারিখ সকাল ১০:০০ টা থেকে আবেদন করা যাবে<o:p></o:p></span></p>\r\n  </td>\r\n </tr>\r\n <tr>\r\n  <td width=\"162\" valign=\"top\" style=\"width:121.25pt;border:solid windowtext 1.0pt;\r\n  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;\r\n  padding:0in 5.4pt 0in 5.4pt\">\r\n  <p class=\"MsoListParagraphCxSpFirst\" style=\"margin:0in;margin-bottom:.0001pt;\r\n  mso-add-space:auto;line-height:normal\"><span style=\"font-size: 18pt; font-family: Nikosh; color: rgb(48, 48, 48); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">আবেদনের শেষ সময়:</span><span style=\"font-size:18.0pt;font-family:Nikosh\"><o:p></o:p></span></p>\r\n  </td>\r\n  <td width=\"468\" valign=\"top\" style=\"width:350.7pt;border-top:none;border-left:\r\n  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;\r\n  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;\r\n  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt\">\r\n  <p class=\"MsoListParagraphCxSpLast\" style=\"margin:0in;margin-bottom:.0001pt;\r\n  mso-add-space:auto;line-height:normal\"><span style=\"font-size: 18pt; font-family: Nikosh; color: rgb(48, 48, 48); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">৩০ জানুয়ারি ২০২০ বিকাল ০৫:০০\r\n  টা পর্যন্ত আবেদন করা যাবে।</span><span style=\"font-size:18.0pt;\r\n  font-family:Nikosh\"><o:p></o:p></span></p>\r\n  </td>\r\n </tr>\r\n <tr>\r\n  <td width=\"162\" valign=\"top\" style=\"width:121.25pt;border:solid windowtext 1.0pt;\r\n  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;\r\n  padding:0in 5.4pt 0in 5.4pt\">\r\n  <p class=\"MsoListParagraphCxSpFirst\" style=\"margin:0in;margin-bottom:.0001pt;\r\n  mso-add-space:auto;line-height:normal\"><span style=\"font-size:18.0pt;\r\n  font-family:Nikosh\"><o:p>&nbsp;</o:p></span></p>\r\n  </td>\r\n  <td width=\"468\" valign=\"top\" style=\"width:350.7pt;border-top:none;border-left:\r\n  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;\r\n  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;\r\n  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt\">\r\n  <p class=\"MsoListParagraphCxSpLast\" style=\"margin:0in;margin-bottom:.0001pt;\r\n  mso-add-space:auto;line-height:normal\"><span style=\"font-size:18.0pt;\r\n  font-family:Nikosh\"><o:p>&nbsp;</o:p></span></p>\r\n  </td>\r\n </tr>\r\n <tr>\r\n  <td width=\"162\" valign=\"top\" style=\"width:121.25pt;border:solid windowtext 1.0pt;\r\n  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;\r\n  padding:0in 5.4pt 0in 5.4pt\">\r\n  <p class=\"MsoListParagraphCxSpFirst\" style=\"margin:0in;margin-bottom:.0001pt;\r\n  mso-add-space:auto;line-height:normal\"><span style=\"font-size:18.0pt;\r\n  font-family:Nikosh\"><o:p>&nbsp;</o:p></span></p>\r\n  </td>\r\n  <td width=\"468\" valign=\"top\" style=\"width:350.7pt;border-top:none;border-left:\r\n  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;\r\n  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;\r\n  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt\">\r\n  <p class=\"MsoListParagraphCxSpLast\" style=\"margin:0in;margin-bottom:.0001pt;\r\n  mso-add-space:auto;line-height:normal\"><span style=\"font-size:18.0pt;\r\n  font-family:Nikosh\"><o:p>&nbsp;</o:p></span></p>\r\n  </td>\r\n </tr>\r\n</tbody></table><br><table class=\"MsoTableGrid\" border=\"1\" cellspacing=\"0\" cellpadding=\"0\" width=\"0\" style=\"width: 471.95pt; margin-left: 0px; border: none;\">\r\n <tbody><tr>\r\n  <td width=\"162\" valign=\"top\" style=\"width:121.25pt;border:solid windowtext 1.0pt;\r\n  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt\">\r\n  <p class=\"MsoListParagraphCxSpMiddle\" style=\"margin:0in;margin-bottom:.0001pt;\r\n  mso-add-space:auto;line-height:normal\"><strong><span style=\"font-size: 18pt; font-family: Nikosh; color: rgb(48, 48, 48); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">পদের নাম</span></strong><span style=\"font-size:18.0pt;font-family:Nikosh\"><o:p></o:p></span></p>\r\n  </td>\r\n  <td width=\"468\" valign=\"top\" style=\"width:350.7pt;border:solid windowtext 1.0pt;\r\n  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:\r\n  solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt\">\r\n  <p class=\"MsoListParagraphCxSpLast\" style=\"margin:0in;margin-bottom:.0001pt;\r\n  mso-add-space:auto;line-height:normal\"><strong><span style=\"font-size: 18pt; font-family: Nikosh; color: rgb(48, 48, 48); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">এসবিএ (পুরুষ)</span></strong><span style=\"font-size:18.0pt;font-family:Nikosh\"><o:p></o:p></span></p>\r\n  </td>\r\n </tr>\r\n <tr>\r\n  <td width=\"162\" valign=\"top\" style=\"width:121.25pt;border:solid windowtext 1.0pt;\r\n  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;\r\n  padding:0in 5.4pt 0in 5.4pt\">\r\n  <p class=\"MsoListParagraphCxSpFirst\" style=\"margin:0in;margin-bottom:.0001pt;\r\n  mso-add-space:auto;line-height:normal\"><span style=\"font-size: 18pt; font-family: Nikosh; color: rgb(48, 48, 48); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">শিক্ষাগত যোগ্যতা</span><span style=\"font-size:18.0pt;font-family:Nikosh\"><o:p></o:p></span></p>\r\n  </td>\r\n  <td width=\"468\" valign=\"top\" style=\"width:350.7pt;border-top:none;border-left:\r\n  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;\r\n  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;\r\n  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt\">\r\n  <p class=\"MsoListParagraphCxSpLast\" style=\"margin:0in;margin-bottom:.0001pt;\r\n  mso-add-space:auto;line-height:normal\"><span style=\"font-size: 18pt; font-family: Nikosh; color: rgb(48, 48, 48); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">বিজ্ঞান বিভাগে উচ্চ মাধ্যমিক\r\n  বা সমমান পাশ।</span><span style=\"font-size:18.0pt;font-family:Nikosh\"><o:p></o:p></span></p>\r\n  </td>\r\n </tr>\r\n <tr>\r\n  <td width=\"162\" valign=\"top\" style=\"width:121.25pt;border:solid windowtext 1.0pt;\r\n  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;\r\n  padding:0in 5.4pt 0in 5.4pt\">\r\n  <p class=\"MsoListParagraphCxSpFirst\" style=\"margin:0in;margin-bottom:.0001pt;\r\n  mso-add-space:auto;line-height:normal\"><span style=\"font-size: 18pt; font-family: Nikosh; color: rgb(48, 48, 48); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">বেতন</span><span style=\"font-size:18.0pt;font-family:Nikosh\"><o:p></o:p></span></p>\r\n  </td>\r\n  <td width=\"468\" valign=\"top\" style=\"width:350.7pt;border-top:none;border-left:\r\n  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;\r\n  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;\r\n  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt\">\r\n  <p class=\"MsoListParagraphCxSpLast\" style=\"margin:0in;margin-bottom:.0001pt;\r\n  mso-add-space:auto;line-height:normal\"><span style=\"font-size: 18pt; font-family: Nikosh; color: rgb(48, 48, 48); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">৯,৭০০ – ২৩,৪৯০ টাকা।</span><span style=\"font-size:18.0pt;font-family:Nikosh\"><o:p></o:p></span></p>\r\n  </td>\r\n </tr>\r\n <tr>\r\n  <td width=\"162\" valign=\"top\" style=\"width:121.25pt;border:solid windowtext 1.0pt;\r\n  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;\r\n  padding:0in 5.4pt 0in 5.4pt\">\r\n  <p class=\"MsoListParagraphCxSpFirst\" style=\"margin:0in;margin-bottom:.0001pt;\r\n  mso-add-space:auto;line-height:normal\"><span style=\"font-size: 18pt; font-family: Nikosh; color: rgb(48, 48, 48); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">আবেদন শুরুর সময়</span><span style=\"font-size:18.0pt;font-family:Nikosh\"><o:p></o:p></span></p>\r\n  </td>\r\n  <td width=\"468\" valign=\"top\" style=\"width:350.7pt;border-top:none;border-left:\r\n  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;\r\n  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;\r\n  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt\">\r\n  <p class=\"MsoListParagraphCxSpLast\" style=\"margin:0in;margin-bottom:.0001pt;\r\n  mso-add-space:auto;line-height:normal\"><span style=\"font-size:18.0pt;\r\n  font-family:Nikosh\">০৯ জানুয়ারি ২০২০ তারিখ সকাল ১০:০০ টা থেকে আবেদন করা যাবে<o:p></o:p></span></p>\r\n  </td>\r\n </tr>\r\n <tr>\r\n  <td width=\"162\" valign=\"top\" style=\"width:121.25pt;border:solid windowtext 1.0pt;\r\n  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;\r\n  padding:0in 5.4pt 0in 5.4pt\">\r\n  <p class=\"MsoListParagraphCxSpFirst\" style=\"margin:0in;margin-bottom:.0001pt;\r\n  mso-add-space:auto;line-height:normal\"><span style=\"font-size: 18pt; font-family: Nikosh; color: rgb(48, 48, 48); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">আবেদনের শেষ সময়:</span><span style=\"font-size:18.0pt;font-family:Nikosh\"><o:p></o:p></span></p>\r\n  </td>\r\n  <td width=\"468\" valign=\"top\" style=\"width:350.7pt;border-top:none;border-left:\r\n  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;\r\n  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;\r\n  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt\">\r\n  <p class=\"MsoListParagraphCxSpLast\" style=\"margin:0in;margin-bottom:.0001pt;\r\n  mso-add-space:auto;line-height:normal\"><span style=\"font-size: 18pt; font-family: Nikosh; color: rgb(48, 48, 48); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">১২ জানুয়ারি ২০২০ বিকাল ০৫:০০\r\n  টা পর্যন্ত আবেদন করা যাবে।</span><span style=\"font-size:18.0pt;\r\n  font-family:Nikosh\"><o:p></o:p></span></p>\r\n  </td>\r\n </tr>\r\n <tr>\r\n  <td width=\"162\" valign=\"top\" style=\"width:121.25pt;border:solid windowtext 1.0pt;\r\n  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;\r\n  padding:0in 5.4pt 0in 5.4pt\">\r\n  <p class=\"MsoListParagraphCxSpFirst\" style=\"margin:0in;margin-bottom:.0001pt;\r\n  mso-add-space:auto;line-height:normal\"><span style=\"font-size:18.0pt;\r\n  font-family:Nikosh\"><o:p>&nbsp;</o:p></span></p>\r\n  </td>\r\n  <td width=\"468\" valign=\"top\" style=\"width:350.7pt;border-top:none;border-left:\r\n  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;\r\n  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;\r\n  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt\">\r\n  <p class=\"MsoListParagraphCxSpLast\" style=\"margin:0in;margin-bottom:.0001pt;\r\n  mso-add-space:auto;line-height:normal\"><span style=\"font-size:18.0pt;\r\n  font-family:Nikosh\"><o:p>&nbsp;</o:p></span></p>\r\n  </td>\r\n </tr>\r\n</tbody></table><p class=\"MsoListParagraphCxSpFirst\"><span style=\"font-size:18.0pt;line-height:\r\n107%;font-family:Nikosh\"><o:p>&nbsp;</o:p></span></p><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"MsoListParagraphCxSpLast\"><span style=\"font-size:18.0pt;line-height:\r\n107%;font-family:Nikosh\">আবেদনের নিয়ম: আগ্রহী প্রার্থীরা অনলাইনে\r\nhttp://bpdb.teletalk.com.bd ওয়েবসাইটের মাধ্যমে আবেদন করতে পারবেন।<o:p></o:p></span></p>', NULL, 'বাংলাদেশ-বিদ্যুৎ-উন্নয়ন-বোর্ডে-চাকরির-নিয়োগ-বিজ্ঞপ্তি-BPDB-Job-Circular-2020', 30, 0, NULL, 6, 1, 1, 'বাংলাদেশ বিদ্যুৎ উন্নয়ন বোর্ডে জনবল নিয়োগের বিজ্ঞপ্তি প্রকাশিত হয়েছে বাংলাদেশ বিদ্যুৎ উন্নয়ন বোর্ড সহকারী প্রকৌশলী ও এসবিএ পদে নিয়োগ দেবে।', 1, '2020-01-05 20:58:23', '2020-01-10 23:36:22'),
(2, 1, NULL, 'Bangladesh Power Development Board (BPDB)  Job Circular 2020', '<p>বাংলাদেশ বিদ্যুৎ উন্নয়ন বোর্ডে জনবল নিয়োগের বিজ্ঞপ্তি প্রকাশিত হয়েছে। বাংলাদেশ বিদ্যুৎ উন্নয়ন বোর্ড সহকারী প্রকৌশলী ও এসবিএ পদে নিয়োগ দেবে। পদগুলোতে নারী ও পুরুষ উভয়েই আবেদন করতে পারবেন। আগ্রহ &nbsp; ও &nbsp;যোগ্যতা থাকলে আপনিও আবেদন করতে পারেন। আগ্রহী প্রার্থীরা অনলাইনে আবেদন করতে পারবেন। সম্পূর্ণ বিজ্ঞপ্তি বিস্তারিত দেওয়া হল।</p>\r\n<p>&nbsp;</p>\r\n<table border=\"1\" cellpadding=\"0\" cellspacing=\"0\" width=\"0\">\r\n  <tbody>\r\n    <tr>\r\n      <td valign=\"top\" width=\"25.714285714285715%\">\r\n        <p><strong>পদের নাম</strong></p>\r\n      </td>\r\n      <td valign=\"top\" width=\"74.28571428571429%\">\r\n        <p><strong>সহকারী প্রকৌশলী (তড়িৎ/যান্ত্রিক/মেটালার্জিক্যাল/কেমিক্যাল/সিভিল/ কম্পিউটার সায়েন্স এন্ড ইঞ্জিনিয়ারিং)</strong></p>\r\n      </td>\r\n    </tr>\r\n    <tr>\r\n      <td valign=\"top\" width=\"25.714285714285715%\">\r\n        <p>শিক্ষাগত যোগ্যতা</p>\r\n      </td>\r\n      <td valign=\"top\" width=\"74.28571428571429%\">\r\n        <p>বিএসসি ইঞ্জিনিয়ারিং: তড়িৎ/যান্ত্রিক/মেটালার্জিক্যাল/কেমিক্যাল/সিভিল/ কম্পিউটার সায়েন্স এন্ড ইঞ্জিনিয়ারিং।</p>\r\n      </td>\r\n    </tr>\r\n    <tr>\r\n      <td valign=\"top\" width=\"25.714285714285715%\">\r\n        <p>বেতন</p>\r\n      </td>\r\n      <td valign=\"top\" width=\"74.28571428571429%\">\r\n        <p>২২,০০০ – ৫৩,০৬০ টাকা</p>\r\n      </td>\r\n    </tr>\r\n    <tr>\r\n      <td valign=\"top\" width=\"25.714285714285715%\">\r\n        <p>আবেদন শুরুর সময়</p>\r\n      </td>\r\n      <td valign=\"top\" width=\"74.28571428571429%\">\r\n        <p>০৯ জানুয়ারি ২০২০ তারিখ সকাল ১০:০০ টা থেকে আবেদন করা যাবে</p>\r\n      </td>\r\n    </tr>\r\n    <tr>\r\n      <td valign=\"top\" width=\"25.714285714285715%\">\r\n        <p>আবেদনের শেষ সময়:</p>\r\n      </td>\r\n      <td valign=\"top\" width=\"74.28571428571429%\">\r\n        <p>৩০ জানুয়ারি ২০২০ বিকাল ০৫:০০ টা পর্যন্ত আবেদন করা যাবে।</p>\r\n      </td>\r\n    </tr>\r\n    <tr>\r\n      <td valign=\"top\" width=\"25.714285714285715%\">\r\n        <p>&nbsp;</p>\r\n      </td>\r\n      <td valign=\"top\" width=\"74.28571428571429%\">\r\n        <p>&nbsp;</p>\r\n      </td>\r\n    </tr>\r\n    <tr>\r\n      <td valign=\"top\" width=\"25.714285714285715%\">\r\n        <p>&nbsp;</p>\r\n      </td>\r\n      <td valign=\"top\" width=\"74.28571428571429%\">\r\n        <p>&nbsp;</p>\r\n      </td>\r\n    </tr>\r\n  </tbody>\r\n</table>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<table border=\"1\" cellpadding=\"0\" cellspacing=\"0\" width=\"0\">\r\n  <tbody>\r\n    <tr>\r\n      <td valign=\"top\" width=\"25.714285714285715%\">\r\n        <p><strong>পদের নাম</strong></p>\r\n      </td>\r\n      <td valign=\"top\" width=\"74.28571428571429%\">\r\n        <p><strong>এসবিএ (পুরুষ)</strong></p>\r\n      </td>\r\n    </tr>\r\n    <tr>\r\n      <td valign=\"top\" width=\"25.714285714285715%\">\r\n        <p>শিক্ষাগত যোগ্যতা</p>\r\n      </td>\r\n      <td valign=\"top\" width=\"74.28571428571429%\">\r\n        <p>বিজ্ঞান বিভাগে উচ্চ মাধ্যমিক বা সমমান পাশ।</p>\r\n      </td>\r\n    </tr>\r\n    <tr>\r\n      <td valign=\"top\" width=\"25.714285714285715%\">\r\n        <p>বেতন</p>\r\n      </td>\r\n      <td valign=\"top\" width=\"74.28571428571429%\">\r\n        <p>৯,৭০০ – ২৩,৪৯০ টাকা।</p>\r\n      </td>\r\n    </tr>\r\n    <tr>\r\n      <td valign=\"top\" width=\"25.714285714285715%\">\r\n        <p>আবেদন শুরুর সময়</p>\r\n      </td>\r\n      <td valign=\"top\" width=\"74.28571428571429%\">\r\n        <p>০৯ জানুয়ারি ২০২০ তারিখ সকাল ১০:০০ টা থেকে আবেদন করা যাবে</p>\r\n      </td>\r\n    </tr>\r\n    <tr>\r\n      <td valign=\"top\" width=\"25.714285714285715%\">\r\n        <p>আবেদনের শেষ সময়:</p>\r\n      </td>\r\n      <td valign=\"top\" width=\"74.28571428571429%\">\r\n        <p>১২ জানুয়ারি ২০২০ বিকাল ০৫:০০ টা পর্যন্ত আবেদন করা যাবে।</p>\r\n      </td>\r\n    </tr>\r\n    <tr>\r\n      <td valign=\"top\" width=\"25.714285714285715%\">\r\n        <p>&nbsp;</p>\r\n      </td>\r\n      <td valign=\"top\" width=\"74.28571428571429%\">\r\n        <p>&nbsp;</p>\r\n      </td>\r\n    </tr>\r\n  </tbody>\r\n</table>\r\n<p>&nbsp;</p>\r\n<p>আবেদনের নিয়ম: আগ্রহী প্রার্থীরা অনলাইনে http://bpdb.teletalk.com.bd ওয়েবসাইটের মাধ্যমে আবেদন করতে পারবেন।</p>', NULL, 'Bangladesh-Power-Development-Board-(BPDB)-Job-Circular-2020', 6, 0, NULL, 6, NULL, 1, NULL, 0, '2020-01-05 21:08:20', '2020-01-09 22:17:06'),
(3, 1, NULL, 'Bangladesh Power Development Board (BPDB)  Job Circular 2020', '<p><span style=\"color: rgb(66, 76, 87); font-family: open_sansregular; font-size: 14px; text-align: center;\">Apple\'s iPhone and other iOS devices do not provide a simple way to view the source code. On these devices, it can only be viewed through third party apps, adding code to your bookmarks, or using a service such as&nbsp;</span><font color=\"#333333\" face=\"open_sansregular\"><span style=\"box-sizing: inherit; background-color: rgb(255, 255, 255); transition-duration: 0.5s; transition-property: all; outline-color: initial; outline-style: initial; font-size: 14px; text-align: center;\">View Page Source</span></font><br></p>', NULL, 'Bangladesh-Power-Development-Board-(BPDB)-Job-Circular-2020', 0, 0, NULL, 6, NULL, 0, NULL, 1, '2020-01-05 21:09:19', '2020-01-11 00:07:18'),
(8, 1, NULL, 'Congratulating a friend on his/her brilliant result/success in the  Examination', '<p><span style=\"font-size: 0.813rem; font-weight: initial;\">Dear ------&nbsp;</span><br></p><p>At the outset of my letter, take my cordial love. Your letter carrying a good news is just to hand. We are all happy to hear the news of your brilliant result in the Annual Examination. My joys news no bounds when I came to know that you stood ------ in your class securing ------ letters in the --------- Examination. Please accept my heartiest congratulation on your brilliant success. You are really worthy of this result. You used your every moment in order to obtain good marks. Almighty Allah fulfilled your wish. We are proud of you. My parents are also glad to know of your success. Actually determination and hard work bring success, which has been proved by your effort. I hope this brilliant result will help you go forward. You have to go a long way like your father. So, don\'t be proud of your results, in your future life. you will need this result. This result will make a good position for you. I hope you will continue this. You should remember that a success brings many successes. I want to arrange a dinner party for the honour of your brilliant success. It will be a great pleasure for us if you visit us shortly. I wish your every success in your future life. I hope you will keep continuing your success. Yours ever, Karim</p><p><br></p>', NULL, 'Congratulating-a-friend-on-his/her-brilliant-result/success-in-the-Examination', 0, 0, NULL, 2, 3, 0, NULL, 1, '2020-01-09 22:21:34', '2020-01-11 00:07:22'),
(9, 1, NULL, 'Congratulating a friend on his or her  brilliant result in the  Examination', '<p><span style=\"font-size: 0.813rem; font-weight: initial;\">Dear ------&nbsp;</span><br></p><p>At the outset of my letter, take my cordial love. Your letter carrying a good news is just to hand. We are all happy to hear the news of your brilliant result in the Annual Examination. My joys news no bounds when I came to know that you stood ------ in your class securing ------ letters in the --------- Examination. Please accept my heartiest congratulation on your brilliant success. You are really worthy of this result. You used your every moment in order to obtain good marks. Almighty Allah fulfilled your wish. We are proud of you. My parents are also glad to know of your success. Actually determination and hard work bring success, which has been proved by your effort. I hope this brilliant result will help you go forward. You have to go a long way like your father. So, don\'t be proud of your results, in your future life. you will need this result. This result will make a good position for you. I hope you will continue this. You should remember that a success brings many successes. I want to arrange a dinner party for the honour of your brilliant success. It will be a great pleasure for us if you visit us shortly. I wish your every success in your future life. I hope you will keep continuing your success. </p><p><br></p><p>Yours ever, </p><p>Karim</p><p><br></p>', NULL, 'Congratulating-a-friend-on-his-or-her-brilliant-result-in-the-Examination', 18, 0, NULL, 2, 1, 0, NULL, 1, '2020-01-09 22:25:52', '2020-01-11 00:48:53'),
(10, 1, NULL, 'Write a letter to your friend describing him a picnic', '<p>My Dear -------&nbsp;</p><p>Hope you are well. It is a long time that I know nothing of you all. I will give you a good news that we enjoyed a fantastic a picnic at a shooting spot in Gazipur. I am describing how I enjoyed the picnic. The picnic party consisted of fifty members including our parents. Our preparation was very nice. We started for the spot by bus at 7 a.m. with all necessary utensils and materials. In the bus we took breakfast and enjoyed ourselves very much. After reaching there, we set our materials to cook. Our uncle was with us. He was very expert in cooking every kind of delicious food. He was our chief cook. Some of my friends were his assistants Along with cooking, we sang, cut jokes and played different types of games. An enjoyable cultural function was arranged. We swam in the canal beside the spot. We climbed up trees and enjoyed the beauty of nature. We took attractive snaps. After taking meals we went to different beautiful places to see. There is a deep forest beside the spot. We saw many animals and birds and their activities. The spot reminded us of our village environment. Tror We also took bats and balls with us to play. In the afternoon there was a competition between the players above 30 years and below 30 years. It was an exciting game. After enjoying the game we took light refreshment and started for our homes. It will be a great pleasure if you joined our picnic. It is my earnes request to you to enjoy the picnic with us. I stop here. More when we will meet. Convey my best regards to your parents.&nbsp;</p><p>Yours ever,&nbsp;</p><p>Faysal</p>', NULL, 'Write-a-letter-to-your-friend-describing-him-a-picnic', 0, 0, NULL, 2, 3, 0, NULL, 1, '2020-01-09 23:28:00', '2020-01-11 00:07:36'),
(11, 1, NULL, 'Story : THE LION AND THE MOUSE', '<p>Once upon a time, a lion was sleeping in a forest. Suddenly a mouse came there. He did not notice the sleeping lion. He&nbsp; was running about and playing happily nearby. By chance the mouse ran over the face of the lion. The lion awoke. At that, the lion grew very angry, held him tightly and did not let him go. The mouse requested the lion respectfully to let him&nbsp; go and also said that one day he would help him. The lion laughed at him and asked how he a little mouse could help a big lion. However he he let him&nbsp; go. Then the lion told the mouse to run more carefully. The mouse became very grateful and thanked him saying that he&nbsp; was very kind. The next week the mouse was again looking for something to eat. He saw then that the lion was tied into a net under a tree. The mouse respectfully said that he&nbsp; would help him.Then the mouse cut the ropes of the net with his sharp teeth one after another and soon the lion became free. He became very grateful to the mouse. He thanked the mouse. Then he realized that help may come even from the smallest creature. So, everybody smaller or larger has importance this earth.</p><div><br></div>', NULL, 'Story-:-THE-LION-AND-THE-MOUSE', 1, 0, NULL, 2, 3, 0, NULL, NULL, '2020-01-09 23:38:30', '2020-01-11 00:07:40'),
(12, 1, NULL, 'THE TWO RATS AND THE MONKEY', '<p style=\"text-align: justify; \">One day two rats found a piece of bread. They were not able to divide it equally between them. So they went to their friend named Mr. Monkey to take his advice about how they would divide the bread. He was very wise and just to their eyes. He agreed to divide the bread into two equal halves. He also told them that it was not easy and it would cost them a lot. Then Mr. Monkey broke the bread into two pieces and put them on his scales. He saw that one piece was heavier than the other. So taking a small bite out of it, he put it back on the scales. But the other piece was heavier for his trick. So again biting a small piece out of that, he put it back on the scales. But every time the pieces were unequal. He willingly made the pieces unequal. He did it again and again. Seeing the pieces unequal the two rats shouted and exclaimed that he was eating all their bread. Mr. Monkey told them that he was doing his best to divide the bread equally but it was difficult to do the pieces equal. But even, he tried many times and soon there was only a very small piece of bread left. Then the two rats understood the fact and told Mr. Monkey to stop dividing any longer. They agreed to divide the bread themselves and told him to give them the little piece. But Mr. Monkey took it for doing a lot of work for them to divide the bread. At last the two rats understood that they should have met up their problem by themselves without taking other\'s help.</p><div style=\"text-align: justify;\"><br></div>', NULL, 'THE-TWO-RATS-AND-THE-MONKEY', 4, 0, NULL, 2, 1, 0, NULL, 1, '2020-01-09 23:43:22', '2020-01-11 00:09:47'),
(13, 1, NULL, 'Story : Robert Bruce and a spider   or Failures are the Pillars of Success', '<p>There was a king named Robert Bruce in Scotland. He was a good ruler and brave warrior. He loved freedom. Scotland was then under the domination of England. Robert Bruce wanted to gain freedom of his country and fought against the English. He met the English soldiers in six battles one by one. But he was defeated each time. At last, he lost heart and gave up the hope of success. His enemies were trying to captures him. He became a fugitive. He roamed about in search of a shelter. He was moving in hills, jungles and forests. At last, he took shelter in a cave. One day the king was lying in the cave. He thought and thought over his misfortune. At that moment, he found a spider trying to reach the ceiling of the cave. His attention was drawn to the repeated efforts of the spider. It was trying hard again and again. The spider crawled up a few inches and then dropped on its silken thread. But it did not give up its attempts. It tried again and again and on the seventh time it became successful. The sight of the spider encouraged the king. Robert Bruce thought the spider was not disheartened in spite of repeated failure. But it went on trying again and again and at last it came out successful. It raised a new hope in the king. He became of the cave and began to gather forces. In his last effort, he became successful. Scotland was at last free.</p><div><br></div>', NULL, 'Story-:-Robert-Bruce-and-a-spider-or-Failures-are-the-Pillars-of-Success', 2, 0, NULL, 2, 3, 0, NULL, NULL, '2020-01-10 00:02:53', '2020-01-11 00:08:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;