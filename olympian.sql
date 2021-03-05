-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2021 at 06:52 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `olympian`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `about_pagename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_toplinkone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_toplinktwo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_pagebanner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_description1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_description2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_description3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_button` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `about_pagename`, `about_toplinkone`, `about_toplinktwo`, `about_pagebanner`, `about_title`, `about_description1`, `about_description2`, `about_description3`, `about_button`, `about_url`, `about_photo`, `about_status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'About Us', 'http://localhost', 'http://localhost/about', 'yFU61cRmET1JHECvKXpfbg0ImOx4jtneGZQs6tTa.jpg', 'Discover Olympians Esports', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form by injected humour.', 'Lorem ipsumum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', NULL, 'View Games', '#', '2tKk4BmcE8maEy47zJvSAEyITJbvEdX5PssKSFGN.jpg', 1, '2020-12-20 12:16:54', '2021-01-08 08:27:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ban_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ban_subtitle` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ban_button` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ban_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ban_status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `ban_title`, `ban_subtitle`, `ban_button`, `ban_url`, `photo`, `ban_status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Welcome To Olympians Esports', NULL, NULL, NULL, 'f1R2cHzlOMAiNfvkfJ0yitaYZtDyBAYytLMEPkp4.jpg', 1, '2020-12-20 12:16:52', '2020-12-29 13:32:27', NULL),
(2, 'Welcome to sintix Games Studio!', NULL, 'Our Games', '#', 'GUt0bl71tdT5rri2068QUPhSnxHyA5scG15QZCXd.jpg', 1, '2020-12-20 12:16:52', '2020-12-29 12:59:34', '2020-12-29 12:59:34'),
(3, 'Welcome to sintix Games Studio!', NULL, 'Our Games', '#', 'utCPp5zKWrCBLuyahXeACFmgKJM42Ai0ssJNvW0s.jpg', 1, '2020-12-20 12:16:52', '2020-12-29 12:59:28', '2020-12-29 12:59:28'),
(4, 'Welcome To Olympians Esports', NULL, NULL, NULL, 'jQ7bUFQ3lGfUTBCxrDvmWEYEZgVsCGYBbeMZvGDt.jpg', 1, '2020-12-29 13:04:42', '2020-12-29 13:35:07', NULL),
(5, 'Welcome To Olympians Esports', NULL, NULL, NULL, 'KLjGJ8cKYUQSNoyNAsBS4CCSCK708rnDEBbzgotA.jpg', 1, '2020-12-29 13:33:14', '2020-12-29 13:33:23', NULL),
(6, 'Welcome To Olympians Esports', NULL, NULL, NULL, 'eDQObj2IUxirEAF2d6kmGvuZxsnkUVSGWOLouMXJ.jpg', 1, '2021-01-12 10:46:42', '2021-01-12 10:46:42', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `basics`
--

CREATE TABLE `basics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `basic_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `basic_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `basic_subtitle` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `basic_aboutus` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `basic_details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `basic_favicon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `basic_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `basic_stickylogo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `basic_flogo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `basic_status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `basics`
--

INSERT INTO `basics` (`id`, `basic_name`, `basic_title`, `basic_subtitle`, `basic_aboutus`, `basic_details`, `basic_favicon`, `basic_logo`, `basic_stickylogo`, `basic_flogo`, `basic_status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Olympians Esports', 'Olympians Esports - Gaming Squad', 'Welcome to Olympians Esports Official', 'We are Esports club from Bangladesh', NULL, 'LpU6DdLDMrjsyd2Qeu96Upor7FIBSK6SIU3UyqAd.png', 'nGZZaP0nZizCqx7GdprEDgquy2MlBEInDdUx3PQa.png', '0mfl8cfIgpTpe9SavbbgJJOyuYu1CduCfF1MeD9c.png', 'JtoCzzTJq5c3OwXZRlP57XcrLwe5griSJ4nUd8vS.png', 1, '2020-12-20 12:16:53', '2021-01-12 09:01:42', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cate_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cate_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cate_status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cate_name`, `cate_slug`, `cate_status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Gaming', 'gaming', 1, '2020-12-20 12:16:56', NULL, NULL),
(2, 'Matches', 'matches', 1, '2020-12-20 12:16:56', NULL, NULL),
(3, 'Video Games', 'video-games', 1, '2020-12-20 12:16:56', NULL, NULL),
(4, 'Esports', 'esports', 1, '2020-12-20 12:16:56', NULL, NULL),
(5, 'Champions', 'champions', 1, '2020-12-20 12:16:56', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category_posts`
--

CREATE TABLE `category_posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_posts`
--

INSERT INTO `category_posts` (`id`, `post_id`, `category_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 5, 2, NULL, NULL, NULL),
(2, 5, 4, NULL, NULL, NULL),
(3, 4, 3, NULL, NULL, NULL),
(4, 4, 4, NULL, NULL, NULL),
(5, 4, 5, NULL, NULL, NULL),
(6, 3, 1, NULL, NULL, NULL),
(7, 3, 2, NULL, NULL, NULL),
(8, 2, 4, NULL, NULL, NULL),
(9, 2, 5, NULL, NULL, NULL),
(10, 1, 2, NULL, NULL, NULL),
(11, 1, 3, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `client_name`, `client_photo`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'G1', 'MR3rHUyGBtrz6zQmeVbWZtrVSvGmxqSKTSnh2bc6.png', '2020-12-20 12:16:54', '2020-12-29 13:19:55', NULL),
(2, 'GIGABYTE', 'DkMUDnniVsp2sCy4dmwvG5e01PbFb9stLQNB16I6.png', '2020-12-20 12:16:54', '2020-12-29 13:18:53', NULL),
(3, 'Aorus', '8iiCM6tFPzqcCinigTEgw7yyMUTtd37mxGi76bbi.webp', '2020-12-20 12:16:54', '2020-12-29 13:18:34', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `name`, `email`, `comment`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 4, 'Kahan', 'kahan222@voila.com', 'good game but old', '2020-12-20 12:16:57', '2021-01-08 08:32:04', '2021-01-08 08:32:04'),
(2, 5, 'Kevin Martin', 'kevin221@voila.com', 'Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo var sed efficitur turpis gilla sed sit amet finibus eros.', '2020-12-20 12:16:57', '2021-01-08 08:32:12', '2021-01-08 08:32:12'),
(3, 5, 'Sarah Albert', 'sarah221@voila.com', 'Est qui dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo var sed efficitur turpis gilla sed sit amet finibus eros', '2020-12-20 12:16:57', '2021-01-08 08:32:21', '2021-01-08 08:32:21'),
(4, 5, 'Ratef', 'ratef221@voila.com', 'Neque porro est qui dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo var sed efficitur turpis gilla sed sit amet finibus eros.', '2020-12-20 12:16:57', '2021-01-08 08:32:28', '2021-01-08 08:32:28'),
(5, 4, 'Author', 'author201@voila.com', 'Thank you Kahan', '2020-12-20 12:16:57', '2021-01-08 08:33:04', '2021-01-08 08:33:04'),
(6, 4, 'Tatef', 'tatef201@voila.com', 'The majority have suffered alteration in some form, by injected humour, or simply free textinh randomised words which don\'t look even slightly believable.', '2020-12-20 12:16:57', '2021-01-08 08:33:16', '2021-01-08 08:33:16'),
(7, 1, 'Watef', 'watef@voila.com', 'Simply free textinh randomised words which don\'t look even slightly believable.', '2020-12-20 12:16:57', '2021-01-08 08:33:22', '2021-01-08 08:33:22'),
(8, 2, 'Yatef', 'yatef201@voila.com', 'Good work! Keep up publishing these works', '2020-12-20 12:16:57', '2021-01-08 08:32:53', '2021-01-08 08:32:53'),
(9, 4, 'Yatef', 'yatef201@voila.com', 'I ike your work. Hope you can explain more in your post!', '2020-12-20 12:16:57', '2021-01-08 08:32:46', '2021-01-08 08:32:46'),
(10, 5, 'Faisal Ahmed Nahian', 'nahiancs503@gmail.com', 'hello', '2021-01-08 08:31:33', NULL, NULL),
(11, 5, 'Umma Habiba', 'tanvihussain5587@gmail.com', 'Esports sponsorship and audience analytics firm Cavea has raised €1m (~£902,361) from new and existing investors, including additional support from The Danish Growth Fund.', '2021-01-08 08:35:49', NULL, NULL),
(12, 5, 'Jobeda Akter', 'jobeda.akter00@gmail.com', 'Mobile of Legends world champion DAMWON Gaming has named automobile company Kia Motors as its naming sponsor, Ashley Kang reported yesterday', '2021-01-08 08:39:51', NULL, NULL),
(13, 3, 'Umma Habiba', 'tanvihussain5587@gmail.com', 'hlw', '2021-01-12 11:22:09', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contactuses`
--

CREATE TABLE `contactuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `conus_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conus_email` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `conus_phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `conus_mess` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `conus_status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contactuses`
--

INSERT INTO `contactuses` (`id`, `conus_name`, `conus_email`, `conus_phone`, `conus_mess`, `conus_status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Arun Ahmed', 'arun111@voila.com', '000111222', 'We should work hard and fast. You work very slow.', 1, '2020-12-20 12:16:54', NULL, NULL),
(2, 'Tina Ahmed', 'tina111@voila.com', '000011113333', 'Well done!', 1, '2020-12-20 12:16:54', NULL, NULL),
(3, 'Shina Ahmed', 'shina111@voila.com', '000011114444', 'You should improve your game quality.', 1, '2020-12-20 12:16:54', NULL, NULL),
(4, 'Faisal Ahmed Nahian', 'naha@gmail.com', '0123456', 'hi', 1, '2021-01-08 08:26:29', '2021-01-08 08:26:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact_information`
--

CREATE TABLE `contact_information` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ci_phone1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ci_phone2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ci_email1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ci_email2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ci_add1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ci_add2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ci_status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_information`
--

INSERT INTO `contact_information` (`id`, `ci_phone1`, `ci_phone2`, `ci_email1`, `ci_email2`, `ci_add1`, `ci_add2`, `ci_status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '01624455243', '01675230056', 'Tanvihussain5587@gmail.com', 'jobeda.akter00gmail.com', 'East Jurain', 'Dhaka 1204', 1, '2020-12-20 12:16:53', '2021-01-12 11:43:08', NULL);

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
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gallery_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `gallery_photo`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'CjJd8NVnxO7je9nCjKZXpStlmV1F402Ks8ABIXx8.jpg', '2020-12-20 12:16:57', '2020-12-29 13:43:09', NULL),
(2, 'vDYYKxlhWmBNpC6VWmPa0BUzUBAYUJxfPxOTeGzM.jpg', '2020-12-20 12:16:57', '2020-12-29 13:42:33', NULL),
(3, 'fBKPx21X44CuK8OMuB63Ao9BypjwRy9hVHc19hfG.jpg', '2020-12-20 12:16:57', '2020-12-29 13:42:01', NULL),
(4, '9rkzIhperA5zMIiSGXyWAm6PuFxVAeIsrKW1dYi7.jpg', '2020-12-20 12:16:57', '2020-12-29 13:41:43', NULL),
(5, 'u2x52FNGIJPEAMeuFQlnh0ZNqLDeLq8exPr0Qg58.jpg', '2020-12-20 12:16:57', '2020-12-29 13:38:14', NULL),
(6, 'xQZSBF0kXoM31jiOfMPqDoSYzSeWIEOGLPqz5L3h.jpg', '2020-12-20 12:16:57', '2020-12-29 13:37:50', NULL),
(7, 'UuR5GiacJ666zI694vBNoj6BT30XtYQdisCbrgbt.jpg', '2020-12-20 12:16:57', '2020-12-29 13:37:36', NULL),
(8, '4xeRu7x2Xd6kJgYUU7aKhxqTUiF8DMYNd29lcdhy.jpg', '2020-12-20 12:16:57', '2020-12-29 13:37:12', NULL),
(9, 'vSRNtzdJA3I2LLTW4aNM14rkXcbP6w94s6KGLtHz.jpg', '2020-12-20 12:16:57', '2020-12-29 13:36:44', NULL),
(10, 'PcjQM9Ry1UUsot6OTRet2nig4OyXyQXdjf0ckLHb.jpg', '2020-12-20 12:16:57', '2020-12-29 13:36:32', NULL),
(11, '2osd9EyVwPbW9m6yAtdRnQdtUkA1nehosmuEUAGY.jpg', '2020-12-20 12:16:57', '2020-12-29 13:36:18', NULL),
(12, 'JgvLsHNI5WprijqWlMazK2AstwCXKgPzu1sVMexT.jpg', '2020-12-20 12:16:57', '2020-12-29 13:36:01', NULL),
(13, 'LrW90ZEr5mR6LbeL2nj4b1qc7UMkjljCfBjrpw0f.jpg', '2020-12-20 12:16:57', '2020-12-29 13:39:32', NULL),
(14, 'rcO4VrlOG24GvMh847zA6vgIbMJUSnax6WgdhfdZ.jpg', '2020-12-20 12:16:57', '2021-01-07 08:45:54', '2021-01-07 08:45:54'),
(15, 'MSZJXaZhzQHxcrxE4A3S9C2J2Lb4q0M7XsH4V4eG.jpg', '2020-12-20 12:16:57', '2020-12-29 13:08:13', NULL),
(16, '5eGO9C4xJA7kl4wYlqFeMhdg5M01g5IUpdnJ2Gvw.jpg', '2020-12-20 12:16:57', '2020-12-29 13:07:55', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gamepages`
--

CREATE TABLE `gamepages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `game_pagename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `game_toplinkone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `game_toplinktwo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `game_pagebanner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `game_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `game_subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `game_company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `game_description1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `game_description2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `game_description3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `game_description4` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `game_photo1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `game_photo2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `game_button` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `game_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `game_launchdate` timestamp NULL DEFAULT NULL,
  `game_note1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `game_note2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `game_note3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `game_note4` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `game_feature_title1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `game_feature_subtitle1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `game_feature_title2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `game_feature_subtitle2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `game_feature_title3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `game_feature_subtitle3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `game_feature_title4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `game_feature_subtitle4` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `game_status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`id`, `game_title`, `game_subtitle`, `game_company`, `game_description1`, `game_description2`, `game_description3`, `game_description4`, `game_photo1`, `game_photo2`, `game_button`, `game_url`, `game_launchdate`, `game_note1`, `game_note2`, `game_note3`, `game_note4`, `game_feature_title1`, `game_feature_subtitle1`, `game_feature_title2`, `game_feature_subtitle2`, `game_feature_title3`, `game_feature_subtitle3`, `game_feature_title4`, `game_feature_subtitle4`, `game_status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Dragon Ball Z', 'Dragon Ball Z', 'PS4', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tincidunt mi ut mauris varius, vitae lobortis erat ullamcorper. Pellentesque vel dolor non nisi fringilla scelerisque in non ante.', NULL, NULL, NULL, 'l4Lw8bLzHLoSN5zhdClmKJp7nj0incFbrnBKRMCf.jpg', 'BNRGqwGQvENlv3C2JbvM5WbHxU7GhaTUDbqsbVoD.jpg', 'Visit', 'https://store.steampowered.com/app/678950/DRAGON_BALL_FighterZ/', '2020-12-19 18:00:00', 'Reader will be distracted by the readable content of a page when looking at its layout', 'Various versions have evolved over the years, sometimes by accident', 'The majority have suffered alteration in some form', NULL, 'horor & Adventure', 'Lorem ipsum is simply are many variations of pass of majority.', 'Multi Players', 'Lorem ipsum is simply are many variations of pass of majority.', 'Real Graphic Heroes', 'Lorem ipsum is simply are many variations of pass of majority.', 'Smooth Controlling', 'Lorem ipsum is simply are many variations of pass of majority.', 1, '2020-12-20 12:16:55', '2021-01-08 07:32:34', NULL),
(2, 'Street Fighter', 'Street Fighter', 'PS4', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tincidunt mi ut mauris varius, vitae lobortis erat ullamcorper. Pellentesque vel dolor non nisi fringilla scelerisque in non ante.', NULL, NULL, NULL, 'NWiMDtlskj5tO0YCSzHHFb7uzKb4J1iFEe3muPRM.jpg', 'l1SDrKDWY6MwTC18lFWgOypqHoNmR6zqtXQ3a3Mp.jpg', 'Visit', 'https://streetfighter.com/', '2020-12-19 18:00:00', 'Reader will be distracted by the readable content of a page when looking at its layout', 'Various versions have evolved over the years, sometimes by accident', 'The majority have suffered alteration in some form', NULL, 'horor & Adventure', 'Lorem ipsum is simply are many variations of pass of majority.', 'Multi Players', 'Lorem ipsum is simply are many variations of pass of majority.', 'Real Graphic Heroes', 'Lorem ipsum is simply are many variations of pass of majority.', 'Smooth Controlling', 'Lorem ipsum is simply are many variations of pass of majority.', 1, '2020-12-20 12:16:55', '2021-01-08 07:30:21', NULL),
(3, 'Rainbow Six Siege', 'Rainbow Six Siege', 'PC', 'Tom Clancy\'s Rainbow Six Siege is an online tactical shooter video game developed by Ubisoft Montreal and published by Ubisoft. It was released worldwide for Microsoft Windows, PlayStation 4, and Xbox One on December 1, 2015; the game was also released for PlayStation 5 and Xbox Series X/S exactly five years later on December 1, 2020. The game puts heavy emphasis on environmental destruction and cooperation between players. Each player assumes control of an attacker or a defender in different gameplay modes such as rescuing a hostage, defusing a bomb, and taking control of an objective within a room. The title has no campaign but features a series of short, offline missions called, \"situations\" that can be played solo. These missions have a loose narrative, focusing on recruits going through training to prepare them for future encounters with the \"White Masks\", a terrorist group that threatens the safety of the world.', NULL, NULL, NULL, 'BhNiWptKfse0WuAMhHmsfXubP9OW1ztHGSbPpPdZ.jpg', 'A491k6VZyXiHh7wjNoxQnmbfUhmGmDhAB5xVfs13.png', 'Visit', 'https://www.ubisoft.com/en-gb/game/rainbow-six/siege', '2020-12-19 18:00:00', 'Reader will be distracted by the readable content of a page when looking at its layout', 'Various versions have evolved over the years, sometimes by accident', 'The majority have suffered alteration in some form', NULL, 'horor & Adventure', 'Lorem ipsum is simply are many variations of pass of majority.', 'Multi Players', 'Lorem ipsum is simply are many variations of pass of majority.', 'Real Graphic Heroes', 'Lorem ipsum is simply are many variations of pass of majority.', 'Smooth Controlling', 'Lorem ipsum is simply are many variations of pass of majority.', 1, '2020-12-20 12:16:55', '2021-01-08 07:26:38', NULL),
(4, 'Mobile Legend', 'Mobile Legend', 'GOOGLEPLAY', 'oin your friends in a brand new 5v5 MOBA showdown against real human opponents, Mobile Legends: Bang Bang! Choose your favorite heroes and build the perfect team with your comrades-in-arms! 10-second matchmaking, 10-minute battles. Laning, jungling, tower rushing, team battles, all the fun of PC MOBAs and action games in the palm of your hand! Feed your eSports spirit!', NULL, NULL, NULL, 'GGdEXNKUPXxMNkqa7lhWLELLWePjkQKTM8PQ1cBw.png', 'vK4dqYesArUYoRpHkBTTm0e3wM3mcKXhdLNdrvVM.png', 'Visit', 'https://m.mobilelegends.com/en', '2020-12-19 18:00:00', 'Reader will be distracted by the readable content of a page when looking at its layout', 'Various versions have evolved over the years, sometimes by accident', 'The majority have suffered alteration in some form', NULL, 'horor & Adventure', 'Lorem ipsum is simply are many variations of pass of majority.', 'Multi Players', 'Lorem ipsum is simply are many variations of pass of majority.', 'Real Graphic Heroes', 'Lorem ipsum is simply are many variations of pass of majority.', 'Smooth Controlling', 'Lorem ipsum is simply are many variations of pass of majority.', 1, '2020-12-20 12:16:55', '2021-01-08 07:28:27', NULL),
(5, 'CSGO', 'Counter-Strike: Global Offensive (CS:GO)', 'Valve', 'Counter-Strike: Global Offensive (CS:GO) expands upon the team-based first person shooter gameplay the original Counter-Strike pioneered when it launched in 1999. Two teams compete in multiple rounds of objective-based game modes with the goal of winning enough rounds to win the match.', 'Competitive\r\nThis is the classic game mode that put Counter-Strike on the map. Two teams of five compete in a best-of-30 match using standard competitive Counter-Strike rules.', 'Wingman\r\nQueue by yourself or grab a friend in this 2v2 best-of-16 game mode on single bomb site maps. Players earn a Skill Group exclusive to Wingman and play using the Competitive Bomb Defusal ruleset. Buy weapons, armor, and defuse kits in an effort to plant the bomb or defend the bomb site!', 'Casual\r\nReady to play some Counter-Strike but don’t want to commit to a full 30 round match? Find a Casual match and play at your own pace in this drop-in, drop-out game mode.', 'VN5QFnSslrYGqwcRlScj1lkn8J5d7LooD3sr7oO4.jpg', 'sHn9ubKB5SiMu67hGuIuy4Rjttbjxabe86fqTnWO.jpg', 'Visit', 'https://blog.counter-strike.net/', '2020-12-19 18:00:00', 'Reader will be distracted by the readable content of a page when looking at its layout', 'Various versions have evolved over the years, sometimes by accident', 'The majority have suffered alteration in some form', NULL, 'horor & Adventure', 'Lorem ipsum is simply are many variations of pass of majority.', 'Multi Players', 'Lorem ipsum is simply are many variations of pass of majority.', 'Real Graphic Heroes', 'Lorem ipsum is simply are many variations of pass of majority.', 'Smooth Controlling', 'Lorem ipsum is simply are many variations of pass of majority.', 1, '2020-12-20 12:16:55', '2021-01-07 09:39:49', NULL),
(6, 'Dota 2', 'Dota 2', 'XBOX ONE', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tincidunt mi ut mauris varius, vitae lobortis erat ullamcorper. Pellentesque vel dolor non nisi fringilla scelerisque in non ante.', NULL, NULL, NULL, 'T29r77lznxPOrgXEhg1OxcszUorPviNHH1vfR8G9.jpg', '0znS2C0rNXPDwWcwTAkfZfxpZL1jrwPjWRA7aBrM.jpg', 'Visit', 'https://www.dota2.com/play/', '2020-12-19 18:00:00', 'Reader will be distracted by the readable content of a page when looking at its layout', 'Various versions have evolved over the years, sometimes by accident', 'The majority have suffered alteration in some form', NULL, 'horor & Adventure', 'Lorem ipsum is simply are many variations of pass of majority.', 'Multi Players', 'Lorem ipsum is simply are many variations of pass of majority.', 'Real Graphic Heroes', 'Lorem ipsum is simply are many variations of pass of majority.', 'Smooth Controlling', 'Lorem ipsum is simply are many variations of pass of majority.', 1, '2020-12-20 12:16:55', '2021-01-08 07:23:45', NULL);

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
(1, '2012_12_16_220047_create_roles_table', 1),
(2, '2014_10_12_000000_create_users_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2020_12_17_192357_create_banners_table', 1),
(6, '2020_12_17_234919_create_basics_table', 1),
(7, '2020_12_17_234947_create_socials_table', 1),
(8, '2020_12_18_000548_create_contact_information_table', 1),
(9, '2020_12_18_054633_create_clients_table', 1),
(10, '2020_12_18_101305_create_abouts_table', 1),
(11, '2020_12_18_150811_create_contactuses_table', 1),
(12, '2020_12_19_155925_create_newsletters_table', 1),
(13, '2020_12_19_185237_create_games_table', 1),
(14, '2020_12_19_186337_create_gamepages_table', 1),
(15, '2020_12_20_011849_create_pages_table', 1),
(16, '2020_12_20_035247_create_categories_table', 1),
(17, '2020_12_20_050023_create_posts_table', 1),
(18, '2020_12_20_051701_create_category_posts_table', 1),
(19, '2020_12_20_103858_create_comments_table', 1),
(20, '2020_12_20_141451_create_galleries_table', 1),
(21, '2021_01_09_131613_create_test_tabes_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE `newsletters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newsletters`
--

INSERT INTO `newsletters` (`id`, `email`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'news1@voila.com', '2020-12-20 12:16:55', NULL, NULL),
(2, 'ewns1@voila.com', '2020-12-20 12:16:55', NULL, NULL),
(3, 'wesn1@voila.com', '2020-12-20 12:16:55', NULL, NULL),
(4, 'wnse1@voila.com', '2020-12-20 12:16:55', NULL, NULL),
(5, 'e1nws@voila.com', '2020-12-20 12:16:55', NULL, NULL),
(6, 'e1wsn@voila.com', '2020-12-20 12:16:55', NULL, NULL),
(7, 'w1esn@voila.com', '2020-12-20 12:16:55', NULL, NULL),
(8, 'w1sen@voila.com', '2020-12-20 12:16:55', NULL, NULL),
(9, 'w1nes@voila.com', '2020-12-20 12:16:55', NULL, NULL),
(10, 's1enw@voila.com', '2020-12-20 12:16:55', NULL, NULL),
(11, 's1new@voila.com', '2020-12-20 12:16:55', NULL, NULL),
(12, 's1we@voila.com', '2020-12-20 12:16:55', NULL, NULL),
(13, 's1wne@voila.com', '2020-12-20 12:16:55', NULL, NULL),
(14, 's1en@voila.com', '2020-12-20 12:16:55', NULL, NULL),
(15, 'n1swe@voila.com', '2020-12-20 12:16:55', NULL, NULL),
(16, 'naimanazninbeli@yahoo.com', '2021-01-08 08:28:52', '2021-01-08 08:28:52', NULL),
(17, 'naimanazninbeli@yahoo.co', '2021-01-08 08:29:57', '2021-01-08 08:29:57', NULL),
(21, 'naimanazninbeli@yahoo.c', '2021-01-08 08:58:28', '2021-01-08 08:58:28', NULL),
(23, 'Naima@yahoo.com', '2021-01-08 10:29:18', '2021-01-08 10:29:18', NULL),
(24, 'gjjjhj@ga', '2021-01-08 10:35:19', '2021-01-08 10:35:19', NULL),
(26, 'naim34324anazninbeli@yahoo.co', '2021-01-08 10:39:11', '2021-01-08 10:39:11', NULL),
(27, 'tanvihusasdfsdfsain5587@gmail.com', '2021-01-08 10:39:48', '2021-01-08 10:39:48', NULL),
(28, 'nasafdasdfimanazninbeli@yahoo.co', '2021-01-08 10:40:03', '2021-01-08 10:40:03', NULL),
(29, 'tanvihussainwerwe5587@gmail.com', '2021-01-08 10:40:25', '2021-01-08 10:40:25', NULL),
(30, 'tanvihuswerewrsain5587@gmail.com', '2021-01-08 10:41:03', '2021-01-08 10:41:03', NULL),
(31, 'naimanazninssssbeli@yahoocom', '2021-01-11 09:28:11', '2021-01-11 09:28:11', NULL),
(32, 'ada@aaa', '2021-01-12 09:51:37', '2021-01-12 09:51:37', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pagename1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pagename2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pagename3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pagename4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `game_pagebanner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gallery_pagebanner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_pagebanner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_pagebanner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map_link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `pagename1`, `link1`, `pagename2`, `link2`, `pagename3`, `link3`, `pagename4`, `link4`, `home_link`, `game_pagebanner`, `gallery_pagebanner`, `blog_pagebanner`, `contact_pagebanner`, `video_title`, `video_link`, `map_title`, `map_link`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Games', 'http://localhost/games', 'Gallery', 'http://localhost/gallery', 'Blog', 'http://localhost/blog', 'Contact', 'http://localhost/contact', 'http://localhost/', 'e0PB2A69ithmOePW1Z1JcDSqjMUNeK8zqmP3NLlF.png', 'CyF148VPl3OQWrAKwGlZ6qpSoymmjxAiHe1DpnQH.jpg', 'AB9oGofaewjGp1tpjNT908izI2C2D40LSYLMadkt.jpg', 'cl3UizNCGCUM0VLHGkSgE957PXppMLcJTi32gTl1.png', NULL, NULL, NULL, NULL, '2020-12-20 12:16:56', '2021-01-12 10:45:56', NULL);

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
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `post_body1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_body2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_body3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_body4` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_thumb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `post_title`, `post_slug`, `user_id`, `post_body1`, `post_body2`, `post_body3`, `post_body4`, `post_image`, `post_thumb`, `post_status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'what happened to esports games this weekend', 'what-happened-to-esports-games-this-weekend', 1, 'There are many variations of passages of lorem ipsum available, but the majority have suffered alteration in some form, by injected humour, or simply free textinh randomised words which don\'t look even slightly believable. There are many variations of passages of lorem ipsum available, but the majority have suffered alteration in some form, by injected humour, or simply free textinh randomised words which don\'t look even slightly believable.', '', '', '', 'k9EOQDthFNaNLtUBjjpTUM243TkDyj4NbGeRSdI9.jpg', 'gO5o2Ob4yDPZDp3gL8y2HSnKsRQ4yv9YQTV2YWDW.jpg', 1, '2020-12-20 12:16:57', '2021-01-12 10:55:21', NULL),
(2, 'IMPORTANT BRANDS HAVE GIVEN US THEIR TRUST', 'important-brands-have-given-us-their-trust', 2, 'There are many variations of passages of lorem ipsum available, but the majority have suffered alteration in some form, by injected humour, or simply free textinh randomised words which don\'t look even slightly believable. There are many variations of passages of lorem ipsum available, but the majority have suffered alteration in some form, by injected humour, or simply free textinh randomised words which don\'t look even slightly believable.', '', '', '', 'ECzOuN5XgA0N8s4Tc3zzX1yn2LsCvIebMjNC3Iuy.jpg', 'oeE3YQ7S38n3gZToo4Av9aQBSlvsTUDv0It7UHLk.jpg', 1, '2020-12-20 12:16:57', '2021-01-12 10:57:53', NULL),
(3, 'UPCOMING MATCHES', 'lion-king-vs-wolf-smart-upcoming-matches', 1, 'There are many variations of passages of lorem ipsum available, but the majority have suffered alteration in some form, by injected humour, or simply free textinh randomised words which don\'t look even slightly believable. There are many variations of passages of lorem ipsum available, but the majority have suffered alteration in some form, by injected humour, or simply free textinh randomised words which don\'t look even slightly believable.', '', '', '', '2Q2cMIECSxyva7eKyVcqLZZFqqRNZivaH6RlbsYY.jpg', 'ostmvvPhufIBuH6Bv8Kw5NtbHlYgibARAK2TPhHU.jpg', 1, '2020-12-20 12:16:57', '2021-01-12 10:57:37', NULL),
(4, 'what happened to esports games this weekend', 'what-happened-to-esports-games-this-weekend', 2, 'There are many variations of passages of lorem ipsum available, but the majority have suffered alteration in some form, by injected humour, or simply free textinh randomised words which don\'t look even slightly believable. There are many variations of passages of lorem ipsum available, but the majority have suffered alteration in some form, by injected humour, or simply free textinh randomised words which don\'t look even slightly believable.', '', '', '', 'rk9SS2o4gkgGybjlPja8T0m5hTsh0eQm1xfdJIKV.jpg', 'TWNN37J3rlWrom6rhEXvkzyukdwrKMm2ww11Cjvu.jpg', 1, '2020-12-20 12:16:57', '2021-01-12 10:53:51', NULL),
(5, 'esports games this weekend', 'esports-games-this-weekend', 1, 'There are many variations of passages of lorem ipsum available, but the majority have suffered alteration in some form, by injected humour, or simply free textinh randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text.', 'Aelltes port lacus quis enim ipsu var sed efficitur turpis gilla sed sit lorem ipsum is simply free text available amet finibus eros. Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Lorem is simply free text used by copytyping refreshing. Neque porro est qui dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Aelltes port lacus quis enim var sed efficitur turpis gilla sed sit amet finibus eros. Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum has been the ndustry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries. Lorem Ipsum is simply dummy text of the new design printng and type setting Ipsum Take a look at our round up of the best shows coming soon to your telly box has been the is industrys. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has industr standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '', 'xd7WY4efHIi12n17OZqtEHQCGmCbYc1LMd5xW0CY.jpg', 'lybUmaWGfN4Tfkg98nmh8nNH8fl0ynzt7cy5dDS1.jpg', 1, '2020-12-20 12:16:57', '2021-01-12 10:54:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_name` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_name`, `role_slug`, `role_status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Superadmin', 'superadmin', 1, '2020-12-20 12:16:51', NULL, NULL),
(2, 'Admin', 'admin', 1, '2020-12-20 12:16:51', NULL, NULL),
(3, 'Visitor', 'visitor', 1, '2020-12-20 12:16:51', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `socials`
--

CREATE TABLE `socials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sm_facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sm_twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sm_linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sm_pinterest` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sm_instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sm_youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sm_google` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sm_status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `socials`
--

INSERT INTO `socials` (`id`, `sm_facebook`, `sm_twitter`, `sm_linkedin`, `sm_pinterest`, `sm_instagram`, `sm_youtube`, `sm_google`, `sm_status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'https://www.facebook.com/', 'https://twitter.com/', 'https://bd.linkedin.com/', 'https://www.pinterest.com/', 'https://www.instagram.com/', 'https://www.youtube.com/', 'https://www.google.com/', 1, '2020-12-20 12:16:53', '2021-01-12 11:38:50', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL DEFAULT 3,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `username`, `email`, `email_verified_at`, `password`, `role_id`, `twitter`, `fb`, `linkedin`, `designation`, `photo`, `address`, `note`, `status`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Umma Habiba', '01996579125', 'Nahian', 'tanvihussain5538@gmail.com', '2020-12-20 12:16:52', '$2y$10$tDwQiygpsiKu1q5kL1ixXeJQaXTSHRES8aCQ5CTxRFBg3A8O18NTa', 1, '#', '#', '#', 'Administrator', 'WEh65hqeZCwWkSJm9W6YGo2wjpTHJbGpWJIfLQzb.jpg', 'Dhanmondi', 'Good!', 1, 'zZeRFs8H5k', '2020-12-20 12:16:52', '2021-01-12 11:48:19', NULL),
(2, 'U.S. Umma Habiba', '01675230056', 'leela', 'tanvihussain5587@gmail.com', '2020-12-20 12:16:52', '$2y$10$u7kAUcTLr997.KxeSegGruHN0j79G4yRq.5WOs2n537G6eJrO7tSW', 1, '#', 'https://www.facebook.com/dj.tashfia55', '#', 'Developer', 'WWVfKe9uwOAj0B91GgsjMrCdyGbm7ONtD2gTSoUC.png', 'Jurain', 'Good!', 1, 'cPWtS4aDT3088nYQQViWseKg8DlZzDCIlDxoOfkVTuZm2o0w2QOQceVMZch4', '2020-12-20 12:16:52', '2021-01-07 09:18:01', NULL),
(3, 'Sheela Khan', '0155555555555', 'sheela', 'sheela@voila.com', '2020-12-20 12:16:52', '$2y$10$kstzXqyAEXUCyCGUnELyu.vrIFWoZ9.e3jzBrpkn7nAIftFpxOKE2', 2, '#', '#', '#', 'Editor', '', 'Uttara', 'Good!', 1, 'DVenXHJpH4', '2020-12-20 12:16:52', '2021-01-07 08:47:35', '2021-01-07 08:47:35'),
(4, 'Jobeda Akter', '01624455243', 'weela', 'jobeda.akter00@gmail.com', '2020-12-20 12:16:52', '$2y$10$aMAdRxapGJDzcWZQXAz31uM77g64ngAZulxkpwci5.wVWJbFVSYCy', 2, '#', 'https://www.facebook.com/profile.php?id=100004811748328', '#', 'Developer', 'z0Nvt33fxnqTBrclSZYcn92bHvyZf6f8h2NbAiVP.png', 'Jurain', 'Good!', 1, 'brZZoFvXzd', '2020-12-20 12:16:52', '2021-01-08 07:43:48', NULL),
(5, 'Nahian', '019999999999', 'musa', 'musa@voila.com', '2020-12-20 12:16:52', '$2y$10$a/.7A385Jx5aYsIifJiH8.WY5.fIgSb3zOZJSbRS4.avsmo5SfKsC', 3, '#', '#', '#', 'DOTA', 'QxMYS7sZQQAQzlTRISPl1S82kZKlCrfOgY118BvX.png', 'Mirpur 11', 'Good!', 1, 'CnrdIVKeEi', '2020-12-20 12:16:52', '2021-01-07 09:16:53', '2021-01-07 09:16:53'),
(6, 'Rusa Khan', '019999999911', 'rusa', 'rusa@voila.com', '2020-12-20 12:16:52', '$2y$10$1zgEtLY30BiRXoj6U1tYQ.JAhN2mWmGPs/PxJzX2OcVZpNu6oZHaC', 3, '#', '#', '#', 'Developer', '', 'Mirpur 12', 'Good!', 1, 'e1rDeMcZaz', '2020-12-20 12:16:52', '2021-01-07 08:47:24', '2021-01-07 08:47:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `basics`
--
ALTER TABLE `basics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_cate_name_unique` (`cate_name`);

--
-- Indexes for table `category_posts`
--
ALTER TABLE `category_posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_posts_post_id_foreign` (`post_id`),
  ADD KEY `category_posts_category_id_foreign` (`category_id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_post_id_foreign` (`post_id`);

--
-- Indexes for table `contactuses`
--
ALTER TABLE `contactuses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `contactuses_conus_email_unique` (`conus_email`),
  ADD UNIQUE KEY `contactuses_conus_phone_unique` (`conus_phone`);

--
-- Indexes for table `contact_information`
--
ALTER TABLE `contact_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gamepages`
--
ALTER TABLE `gamepages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `newsletters_email_unique` (`email`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
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
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socials`
--
ALTER TABLE `socials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `basics`
--
ALTER TABLE `basics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `category_posts`
--
ALTER TABLE `category_posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `contactuses`
--
ALTER TABLE `contactuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact_information`
--
ALTER TABLE `contact_information`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `gamepages`
--
ALTER TABLE `gamepages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `socials`
--
ALTER TABLE `socials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `category_posts`
--
ALTER TABLE `category_posts`
  ADD CONSTRAINT `category_posts_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `category_posts_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
