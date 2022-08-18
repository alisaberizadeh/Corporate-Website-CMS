-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2022 at 01:34 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tekno_v2`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `text`, `created_at`, `updated_at`) VALUES
(1, '<div class=\"bold pt-5 section_content_text\">\r\n<p><span style=\"font-size:18px\"><strong>سیستم های داده و صوتی در موفقیت یا شکست نقش حیاتی دارند</strong></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"color:#7f8c8d\">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</span></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"color:#7f8c8d\">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است</span></span><span style=\"font-size:11px\"><span style=\"color:#7f8c8d\">.</span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><strong>موفقیت یا شکست </strong></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"color:#7f8c8d\">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n</div>', NULL, '2022-05-22 14:47:42');

-- --------------------------------------------------------

--
-- Table structure for table `about__elements`
--

CREATE TABLE `about__elements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about__elements`
--

INSERT INTO `about__elements` (`id`, `title`, `icon`, `text`, `created_at`, `updated_at`) VALUES
(1, 'محصول کارآمد', 'fa fa-globe', 'به لطف تجربیات ما در طراحی و متدهای ما کمک به کسب و کارها فراهم است', NULL, '2022-05-22 15:19:11'),
(2, 'کیفیت محصول', 'fa fa-car', 'به لطف تجربیات ما در طراحی و متدهای ما کمک به کسب و کارها فراهم است', NULL, '2022-05-22 15:19:11'),
(3, 'پشتیبانی آنلاین', 'fa fa-phone', 'به لطف تجربیات ما در طراحی و متدهای ما کمک به کسب و کارها فراهم است', NULL, '2022-05-22 15:16:23'),
(4, 'طراحی واکنشگرا', 'fa fa-photo', 'به لطف تجربیات ما در طراحی و متدهای ما کمک به کسب و کارها فراهم است', NULL, '2022-05-22 15:19:11');

-- --------------------------------------------------------

--
-- Table structure for table `backgrounds`
--

CREATE TABLE `backgrounds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `src` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `backgrounds`
--

INSERT INTO `backgrounds` (`id`, `name`, `src`, `created_at`, `updated_at`) VALUES
(1, 'portfolio', '/images/backgrounds/2022_May_slider-10.jpg', NULL, '2022-05-22 12:19:55'),
(2, 'statistics', '/images/backgrounds/2022_May_serv_4.jpg', NULL, '2022-05-22 11:47:20'),
(3, 'contact', '/images/backgrounds/2022_May_pixabay_coding-1200.jpg', NULL, '2022-05-22 13:59:30'),
(4, 'about', '/images/backgrounds/2022_May_slider-10.jpg', NULL, NULL),
(5, 'blog', '/images/backgrounds/2022_May_slider-10.jpg', NULL, '2022-05-22 15:37:08'),
(6, 'sevice_single', '/images/backgrounds/2022_May_pixabay_coding-1200.jpg', NULL, NULL),
(7, 'categorys', '/images/backgrounds/2022_Jun_darshan.jpg', NULL, '2022-06-20 04:32:14');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_fa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `keywords` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `name`, `image`, `date`, `date_fa`, `text`, `created_at`, `updated_at`, `keywords`) VALUES
(2, 'بهترین نوع بازاریابی', '/images/articles/2022_Jun_2022_Jun_null.png', '2022-05-18', '28 اردیبهشت 1401', '<p><span style=\"color:#8e44ad\"><strong>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</strong></span></p>\n\n<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>\n\n<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>', '2022-05-17 19:30:20', '2022-06-02 05:00:52', 'خالی'),
(3, 'مقاله تستی', '/images/articles/2022_Jun_2022_Jun_null.png', '2022-05-18', '28 اردیبهشت 1401', '<p><span style=\"font-size:16px\"><strong>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ </strong></span></p>\r\n\r\n<p>و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>\r\n\r\n<p><span style=\"color:#ecf0f1\"><strong><span style=\"background-color:#16a085\">لورم ایپسوم متن ساختگی با تولید سادگی </span></strong></span></p>\r\n\r\n<p>نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>', '2022-05-17 19:44:51', '2022-06-02 05:00:39', 'خالی'),
(4, 'هک یا امنیت ؟!', '/images/articles/2022_Jun_2022_Jun_null.png', '2022-05-18', '28 اردیبهشت 1401', '<p><span style=\"color:#e74c3c\"><strong>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم </strong></span></p>\r\n\r\n<p>از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>\r\n\r\n<p><span style=\"color:#2980b9\"><strong>لورم ایپسوم متن ساختگی</strong></span></p>\r\n\r\n<p>با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>', '2022-05-17 19:45:45', '2022-06-02 05:00:19', 'خالی');

-- --------------------------------------------------------

--
-- Table structure for table `cats`
--

CREATE TABLE `cats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cats`
--

INSERT INTO `cats` (`id`, `name`, `created_at`, `updated_at`) VALUES
(10, 'چوبی', '2022-06-01 08:40:39', '2022-06-01 08:40:39'),
(11, 'فلزی', '2022-06-01 08:40:50', '2022-06-01 08:40:50');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `for` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_fa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `email`, `for`, `text`, `created_at`, `updated_at`, `status`, `date_fa`) VALUES
(5, 'ایمان شیر محمدی', 'imanshir@gmail.com', '11', 'بسایر مفید بود', '2022-05-30 04:32:41', '2022-05-30 04:56:59', '1', '09 خرداد 1401'),
(6, 'نوید فدایی', 'vdwaer.karimi@tarhfa.com', '11', 'موفق باشید', '2022-05-30 04:51:37', '2022-06-16 06:34:46', '0', '09 خرداد 1401');

-- --------------------------------------------------------

--
-- Table structure for table `company__information`
--

CREATE TABLE `company__information` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_fa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company__information`
--

INSERT INTO `company__information` (`id`, `name`, `value`, `status`, `created_at`, `updated_at`, `icon`, `name_fa`) VALUES
(1, 'phone', '02166699453', '1', NULL, '2022-05-16 02:59:27', 'fa fa-phone', 'تلفن'),
(2, 'email', 'tekno@gmail.com', '1', NULL, '2022-06-06 06:11:25', 'fa fa-envelope-o', 'ایمیل'),
(3, 'address', 'تهران - اسلامشهر - کوچه اول باغ فیض - پلاک 15 - واحد 8', '1', NULL, '2022-05-26 07:04:34', 'fa fa-map-marker', 'آدرس'),
(4, 'mobile', '09220395840', '0', NULL, '2022-05-16 02:30:27', 'fa fa-phone', 'شماره همراه');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `title`, `icon`, `text`, `created_at`, `updated_at`) VALUES
(1, 'تماس مستقیم', 'fa fa-volume-control-phone', '021-66644654', NULL, '2022-05-22 12:41:37'),
(2, 'ساعات کاری', 'fa fa-clock-o', 'شنبه تا پنج شنبه : 10 صبح - 5 بعد از ظهر', NULL, '2022-05-22 12:41:37'),
(3, 'آدرس ما', 'fa fa-map-o', 'تهران - ولیئصر - خیابان طالقانی - پلاک 65 - واحد 13', NULL, '2022-05-22 12:41:37');

-- --------------------------------------------------------

--
-- Table structure for table `en_about__elements`
--

CREATE TABLE `en_about__elements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `en_about__elements`
--

INSERT INTO `en_about__elements` (`id`, `title`, `icon`, `text`, `created_at`, `updated_at`) VALUES
(1, 'Test 111111', 'fa fa-photo', 'test', NULL, '2022-06-25 04:04:24'),
(2, 'tsdf', 'fa fa-photo', 'daed', NULL, NULL),
(3, 'sdfs', 'fa fa-photo', 'sdgsa', NULL, NULL),
(4, 'sdfs', 'fa fa-photo', 'sf', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `en_footer__informations`
--

CREATE TABLE `en_footer__informations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `copy_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `count_post` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `en_footer__informations`
--

INSERT INTO `en_footer__informations` (`id`, `text`, `copy_text`, `count_post`, `created_at`, `updated_at`) VALUES
(1, 'Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sed ', 'All rights of this website are reserved for \"Techno Company\". ©', '2', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `en__abouts`
--

CREATE TABLE `en__abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `en__abouts`
--

INSERT INTO `en__abouts` (`id`, `text`, `created_at`, `updated_at`) VALUES
(1, '<p>Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sedLorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sedLorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sedLorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sedLorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sedLorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sedLorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sedLorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sedLorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sedLorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sedLorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sedLorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sedLorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sedLorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sed</p>', NULL, '2022-06-25 03:56:27');

-- --------------------------------------------------------

--
-- Table structure for table `en__blogs`
--

CREATE TABLE `en__blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_fa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `en__blogs`
--

INSERT INTO `en__blogs` (`id`, `name`, `image`, `date`, `date_fa`, `text`, `keywords`, `created_at`, `updated_at`) VALUES
(1, 'Test Post 1', '/images/articles/2022_Jun_2022_Jun_2022_Jun_null.png', '2022-06-23', '02 تیر 1401', '<div class=\"blog_description\">\r\n<p>Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.</p>\r\n\r\n<div class=\"blog_description\">\r\n<p>Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.</p>\r\n\r\n<div class=\"blog_description\">\r\n<p>Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.</p>\r\n\r\n<div class=\"blog_description\">\r\n<p>Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.</p>\r\n\r\n<div class=\"blog_description\">\r\n<p>Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.</p>\r\n\r\n<div class=\"blog_description\">\r\n<p>Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.</p>\r\n\r\n<div class=\"blog_description\">\r\n<p>Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.</p>\r\n\r\n<div class=\"blog_description\">\r\n<p>Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.</p>\r\n\r\n<div class=\"blog_description\">\r\n<p>Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', 'post1,post', '2022-06-23 03:22:12', '2022-06-23 03:22:12'),
(2, 'Test Post 2', '/images/articles/2022_Jun_2022_Jun_2022_Jun_null.png', '2022-06-23', '02 تیر 1401', '<div class=\"blog_description\">\n<p>Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.</p>\n\n<div class=\"blog_description\">\n<p>Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.</p>\n\n<div class=\"blog_description\">\n<p>Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.</p>\n</div>\n</div>\n</div>', 'post1,post', '2022-06-23 03:22:39', '2022-06-23 03:22:39'),
(3, 'Test Post 3', '/images/articles/2022_Jun_2022_Jun_2022_Jun_null.png', '2022-06-23', '02 تیر 1401', '<div class=\"blog_description\">\r\n<p>Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.</p>\r\n\r\n<div class=\"blog_description\">\r\n<p>Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.</p>\r\n\r\n<div class=\"blog_description\">\r\n<p>Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.</p>\r\n</div>\r\n</div>\r\n</div>', 'post1,post', '2022-06-23 03:23:06', '2022-06-23 03:23:06'),
(4, 'Test Post 44444', '/images/articles/2022_Jun_2022_Jun_2022_Jun_null.png', '2022-06-23', '02 تیر 1401', '<div class=\"blog_description\">\r\n<p>Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.</p>\r\n\r\n<div class=\"blog_description\">\r\n<p>Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.</p>\r\n\r\n<div class=\"blog_description\">\r\n<p>Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.</p>\r\n\r\n<div class=\"blog_description\">\r\n<p>Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.</p>\r\n\r\n<div class=\"blog_description\">\r\n<p>Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.</p>\r\n\r\n<div class=\"blog_description\">\r\n<p>Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.Lorem ipsum dolor sit amet consectet adipisie cing elit sed eiusmod tempor incididunt on labore et dolore.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', 'post1,post', '2022-06-23 03:23:20', '2022-06-23 03:28:08');

-- --------------------------------------------------------

--
-- Table structure for table `en__cats`
--

CREATE TABLE `en__cats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `en__cats`
--

INSERT INTO `en__cats` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Wooden', '2022-06-22 03:45:14', '2022-06-22 03:45:14'),
(3, 'Metal', '2022-06-22 03:45:47', '2022-06-22 03:45:47');

-- --------------------------------------------------------

--
-- Table structure for table `en__comments`
--

CREATE TABLE `en__comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_fa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `for` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `en__comments`
--

INSERT INTO `en__comments` (`id`, `name`, `date_fa`, `email`, `status`, `for`, `text`, `created_at`, `updated_at`) VALUES
(1, 'Ali Saberi', '2022-06-25', 'alisaberizadeh.one@gmail.com', '1', '1', 'Good !!!!!', '2022-06-25 03:10:05', '2022-06-25 03:20:12');

-- --------------------------------------------------------

--
-- Table structure for table `en__company__information`
--

CREATE TABLE `en__company__information` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name_fa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `en__company__information`
--

INSERT INTO `en__company__information` (`id`, `name`, `value`, `status`, `created_at`, `updated_at`, `name_fa`, `icon`) VALUES
(1, 'email', 'tekno@gmail.com', '1', NULL, '2022-06-06 06:11:17', 'Email', 'fa fa-envelope-o'),
(2, 'phone', '02155544565', '1', NULL, '2022-06-06 06:08:08', 'Phone', 'fa fa-phone'),
(3, 'mobile', '09354974225', '0', NULL, '2022-06-06 06:15:29', 'Mobile', 'fa fa-phone'),
(4, 'address', 'Iran , Tehran , Vali-asr , Pirozi , p12', '1', NULL, '2022-06-06 06:11:17', 'Address', 'fa fa-map-marker');

-- --------------------------------------------------------

--
-- Table structure for table `en__contacts`
--

CREATE TABLE `en__contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `en__contacts`
--

INSERT INTO `en__contacts` (`id`, `title`, `icon`, `text`, `created_at`, `updated_at`) VALUES
(1, 'test  4', 'fa fa-map-o', 'sdfd', NULL, '2022-06-25 04:24:06'),
(2, 'test  3', 'fa fa-map-o', 'sdfsat', NULL, '2022-06-25 04:24:06'),
(3, 'test  2', 'fa fa-map-o', 'sdfdf', NULL, '2022-06-25 04:24:06');

-- --------------------------------------------------------

--
-- Table structure for table `en__menus`
--

CREATE TABLE `en__menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sub` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `count` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `en__menus`
--

INSERT INTO `en__menus` (`id`, `sub`, `title`, `count`, `link`, `created_at`, `updated_at`) VALUES
(1, '', 'Contact', '', 'en/contact', '2022-06-25 04:41:35', '2022-06-25 04:41:35'),
(2, '', 'About', '', 'en/about', '2022-06-25 04:42:23', '2022-06-25 04:42:23'),
(5, 'Cat', 'Categorys', '', 'en/#', '2022-06-25 04:59:28', '2022-06-25 04:59:28'),
(6, '', 'Blog', '', 'en/blog', '2022-06-25 05:00:50', '2022-06-25 05:00:50'),
(7, '', 'Portfolio', '', 'en/portfolio', '2022-06-25 05:01:45', '2022-06-25 05:01:45');

-- --------------------------------------------------------

--
-- Table structure for table `en__plans`
--

CREATE TABLE `en__plans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `en__plans`
--

INSERT INTO `en__plans` (`id`, `name`, `text`, `price`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Plan Test 1', 'SFSDF- SfF- SDDFSDF- DSVSADF -SDFDSF', '560000', '3 months', '2022-06-23 02:13:13', '2022-06-23 02:23:15'),
(2, 'Plan Test 2', 'QWEQWC  - SADDFDSAF - DDCVSD - DSVDS- SDVSD', '120000', '3 months', '2022-06-23 02:13:30', '2022-06-23 02:13:30'),
(3, 'Plan Test 3333333', 'AS - SD - D - V-Df', '200000', '6 months', '2022-06-23 02:13:54', '2022-06-23 02:22:42');

-- --------------------------------------------------------

--
-- Table structure for table `en__portfolios`
--

CREATE TABLE `en__portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `en__portfolios`
--

INSERT INTO `en__portfolios` (`id`, `name`, `image`, `link`, `created_at`, `updated_at`) VALUES
(1, 'portfolio 1', '/images/Portfolio/2022_Jun_2022_Jun_2022_Jun_null.png', '#', '2022-06-23 06:07:15', '2022-06-23 06:07:15'),
(2, 'portfolio 2', '/images/Portfolio/2022_Jun_2022_Jun_2022_Jun_null.png', '#', '2022-06-23 06:07:59', '2022-06-23 06:07:59'),
(3, 'portfolio 3333', '/images/Portfolio/2022_Jun_2022_Jun_2022_Jun_null.png', '#', '2022-06-23 06:08:06', '2022-06-23 06:14:36');

-- --------------------------------------------------------

--
-- Table structure for table `en__products`
--

CREATE TABLE `en__products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `keyworlds` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `en__products`
--

INSERT INTO `en__products` (`id`, `title`, `cat`, `image`, `text`, `keyworlds`, `created_at`, `updated_at`) VALUES
(1, 'test product 1', 'Wooden', '/images/Product/2022_Jun_null.png', '<p>tet</p>', 'test,ii', '2022-06-22 05:53:22', '2022-06-22 05:53:22'),
(3, 'test product 3', 'Metal', '/images/Product/2022_Jun_null.png', '<p>test product</p>', 'xzcxz', '2022-06-22 05:55:43', '2022-06-22 05:55:43'),
(4, 'test product 1', 'Wooden', '/images/Product/2022_Jun_2022_Jun_2022_Jun_null.png', '<p>test product 1</p>', 'SF', '2022-06-22 06:23:13', '2022-06-22 06:23:13'),
(5, 'test product 5', 'Metal', '/images/Product/2022_Jun_2022_Jun_null.png', '<p>sdf</p>', 'xzcxz', '2022-06-22 06:23:30', '2022-06-22 06:23:30'),
(6, 'test product 6', 'Metal', '/images/Product/2022_Jun_2022_Jun_null.png', '<p>SDF</p>', 'SF', '2022-06-22 06:23:48', '2022-06-22 06:23:48'),
(7, 'test product 7', 'Metal', '/images/Product/2022_Jun_2022_Jun_null.png', '<p>dvcds</p>', 'zx', '2022-06-22 06:24:01', '2022-06-22 06:24:01'),
(8, 'test product 8', 'Metal', '/images/Product/2022_Jun_2022_Jun_null.png', '<p>z</p>', 'SF', '2022-06-22 06:24:20', '2022-06-22 06:24:20');

-- --------------------------------------------------------

--
-- Table structure for table `en__services`
--

CREATE TABLE `en__services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `en__services`
--

INSERT INTO `en__services` (`id`, `name`, `icon`, `text`, `created_at`, `updated_at`) VALUES
(2, 'Warranty', 'fa fa-award', '<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', '2022-06-21 08:45:07', '2022-06-21 08:45:07'),
(3, 'Free Service', 'fa fa-award', '<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', '2022-06-21 08:45:31', '2022-06-21 08:45:31'),
(4, '2222Support', 'fa fa-award', '<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', '2022-06-21 08:45:47', '2022-06-22 02:51:36'),
(5, 'Periodic visits', 'fa fa-award', '<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', '2022-06-21 08:46:06', '2022-06-21 08:46:06'),
(6, 'Assembly', 'fa fa-award', '<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', '2022-06-21 08:46:32', '2022-06-21 08:46:32'),
(7, 'After Sales Service', 'fa fa-award', '<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', '2022-06-21 08:47:00', '2022-06-21 08:47:00');

-- --------------------------------------------------------

--
-- Table structure for table `en__sliders`
--

CREATE TABLE `en__sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `en__sliders`
--

INSERT INTO `en__sliders` (`id`, `title`, `text`, `image`, `created_at`, `updated_at`) VALUES
(4, '', '', '/images/slider/2022_Jun_sliderbc.jpg', '2022-06-25 06:58:43', '2022-06-25 06:59:28');

-- --------------------------------------------------------

--
-- Table structure for table `en__statistics`
--

CREATE TABLE `en__statistics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `en__statistics`
--

INSERT INTO `en__statistics` (`id`, `title`, `icon`, `value`, `created_at`, `updated_at`, `status`) VALUES
(1, 'Test 1', 'fa fa-trophy', '33', NULL, NULL, '1'),
(2, 'Test 2', 'fa fa-trophy', '212', NULL, '2022-06-22 03:19:44', '1'),
(3, 'Test 333', 'fa fa-trophy', '1212', NULL, '2022-06-22 03:16:24', '1'),
(4, 'Tset 444', 'fa fa-trophy', '221', NULL, '2022-06-22 03:19:41', '1');

-- --------------------------------------------------------

--
-- Table structure for table `en__teams`
--

CREATE TABLE `en__teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `github` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `en__teams`
--

INSERT INTO `en__teams` (`id`, `name`, `avatar`, `level`, `instagram`, `twitter`, `linkedin`, `github`, `created_at`, `updated_at`) VALUES
(1, 'Ali Saberi', '/images/avatar/2022_Jun_2022_May_team1.jpg', 'Programmer', '#', '#', '#', '#', '2022-06-22 07:33:42', '2022-06-22 07:33:42'),
(2, 'User Test 1', '/images/avatar/2022_Jun_2022_May_team1.jpg', 'test', '#', '#', '#', '#', '2022-06-22 07:34:05', '2022-06-22 07:34:05'),
(3, 'User Test 2', '/images/avatar/2022_Jun_2022_Jun_2022_May_team1.jpg', 'test', '#', '#', '#', '#', '2022-06-22 07:34:29', '2022-06-22 07:34:29'),
(4, 'User Test 3333', '/images/avatar/2022_Jun_2022_May_team1.jpg', 'Programmer', '#', '#', '#', '#', '2022-06-22 07:34:40', '2022-06-22 07:40:48');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `footer__information`
--

CREATE TABLE `footer__information` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `copy_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `count_post` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footer__information`
--

INSERT INTO `footer__information` (`id`, `text`, `copy_text`, `count_post`, `created_at`, `updated_at`) VALUES
(1, 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است', 'کلیه حقوق این وبسایت برای شرکت \" شرکت تکنو \" محفوظ می باشد . ©', '2', NULL, '2022-05-22 16:59:16');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sub` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `count` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `title`, `link`, `created_at`, `updated_at`, `sub`, `count`) VALUES
(5, 'مقالات', 'blog', '2022-06-14 06:55:27', '2022-06-14 06:55:27', '', ''),
(6, 'خدمات', '#', '2022-06-14 07:40:45', '2022-06-14 07:40:45', 'Service', '6'),
(13, 'درباره ما', 'about', '2022-06-14 08:21:37', '2022-06-25 05:00:18', '', ''),
(14, 'تماس باما', 'contact', '2022-06-14 08:26:12', '2022-06-20 06:24:15', '', ''),
(17, 'دسته بندی ها', '#', '2022-06-20 02:25:12', '2022-06-20 02:25:12', 'Cat', '2');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_05_11_115405_add_level_to_users', 1),
(6, '2022_05_12_070812_create_settings_table', 1),
(7, '2022_05_15_132152_create_company__information_table', 2),
(8, '2022_05_15_144424_create_social__media_table', 3),
(9, '2022_05_15_195511_add_icon_to_information', 4),
(10, '2022_05_16_064451_add_nema_fa_to_company__information', 5),
(11, '2022_05_16_070514_create_sections_table', 6),
(13, '2022_05_16_075401_create_sections__settings_table', 7),
(15, '2022_05_16_085303_create_services_table', 8),
(16, '2022_05_16_113728_create_teams_table', 9),
(17, '2022_05_17_221624_create_plans_table', 10),
(18, '2022_05_17_231543_create_blogs_table', 11),
(19, '2022_05_18_223659_create_sliders_table', 12),
(20, '2022_05_22_105044_create_statistics_table', 13),
(21, '2022_05_22_113722_add_status_to_statistics', 14),
(22, '2022_05_22_120831_create_backgrounds_table', 15),
(23, '2022_05_22_124642_create_portfolios_table', 15),
(24, '2022_05_22_132553_add_type_to_sections', 16),
(25, '2022_05_22_165759_create_contacts_table', 17),
(26, '2022_05_22_173656_create_messages_table', 18),
(27, '2022_05_22_183119_create_abouts_table', 19),
(28, '2022_05_22_191915_create_about__elements_table', 20),
(29, '2022_05_22_210037_create_footer__information_table', 21),
(30, '2022_05_26_072030_create_cats_table', 22),
(32, '2022_05_26_080740_add_href_section', 23),
(33, '2022_05_26_085116_create_products_table', 24),
(34, '2022_05_30_083537_create_comments_table', 25),
(35, '2022_05_30_085328_add_status_commetns', 26),
(36, '2022_05_30_090121_add_date_fa_commetns', 27),
(37, '2022_06_06_095636_create_en__company__information_table', 28),
(38, '2022_06_06_095951_add_namefa_en__company__information', 29),
(39, '2022_06_06_100436_add_icon_en__company__information', 30),
(40, '2022_06_06_110253_create_en__sliders_table', 31),
(41, '2022_06_06_120138_add_keywords', 32),
(42, '2022_06_06_125202_create_menus_table', 33),
(45, '2022_06_14_110511_add_sub_menus', 34),
(46, '2022_06_14_115256_add_count_menus', 35),
(47, '2022_06_21_071458_add_keywords_menus', 36),
(49, '2022_06_21_125646_create_en__services_table', 37),
(50, '2022_06_22_073410_create_en__statistics_table', 38),
(51, '2022_06_22_073816_add_status_en__statistics', 39),
(52, '2022_06_22_080000_create_en__cats_table', 40),
(53, '2022_06_22_094147_create_en__products_table', 41),
(54, '2022_06_22_114034_create_en__teams_table', 42),
(55, '2022_06_23_062553_create_en__plans_table', 43),
(57, '2022_06_23_073159_create_en__blogs_table', 44),
(58, '2022_06_23_093416_add_value_en_settings', 45),
(59, '2022_06_23_095752_create_en_footer__informations_table', 46),
(60, '2022_06_23_102108_create_en__portfolios_table', 47),
(61, '2022_06_25_073555_create_en__comments_table', 48),
(62, '2022_06_25_081448_create_en__abouts_table', 49),
(63, '2022_06_25_081549_create_en_about__elements_table', 49),
(64, '2022_06_25_084218_create_en__contacts_table', 50),
(65, '2022_06_25_085911_create_en__menus_table', 51);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`id`, `name`, `text`, `price`, `type`, `created_at`, `updated_at`) VALUES
(2, 'طرح پایه', '30 روز پشتیبانی - 3 روز رایگان جهت ازمایش - سرعت بالا - پنل تبلیغات', '1000000', '6 ماهه', '2022-05-17 18:03:30', '2022-05-17 18:30:28'),
(4, 'ادمین اینستاگرام', 'روزانه 5 استوری - روزانه 3 پست - ماهانه 200 دنبا کننده -  طراحی لوگو', '1000000', '3 ماهه', '2022-05-17 18:04:57', '2022-05-17 18:25:30'),
(5, 'طرح اولترا', '30 روز دسترسی آزمایشی به امکانات - اتصال سینک شده به پایگاه داده ابری - 10 ساعت پشتیبانی - یکپارچه سازی با شبکه های اجتماعی', '5500000', 'سالاته', '2022-05-17 18:24:28', '2022-05-17 18:24:28');

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `name`, `image`, `link`, `created_at`, `updated_at`) VALUES
(11, 'نمونه کار تست', '/images/Portfolio/2022_Jun_2022_Jun_null.png', 'google.com', '2022-06-02 05:02:32', '2022-06-02 05:02:32'),
(12, 'نمونه کار تست', '/images/Portfolio/2022_Jun_2022_Jun_null.png', 'https://google.com', '2022-06-02 05:02:47', '2022-06-02 05:02:47'),
(13, 'نمونه کار تست 2222', '/images/Portfolio/2022_Jun_2022_Jun_null.png', 'https://google.com', '2022-06-02 05:02:54', '2022-06-16 08:17:56');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `keyworlds` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `cat`, `image`, `text`, `created_at`, `updated_at`, `keyworlds`) VALUES
(14, 'محصول خالی 1', 'چوبی', '/images/Product/2022_Jun_null.png', '<p>تست</p>', '2022-06-02 03:24:28', '2022-06-21 02:52:11', 'تست,چوبی'),
(15, 'محصول خالی 2', 'چوبی', '/images/Product/2022_Jun_null.png', '<p>تست</p>', '2022-06-02 03:24:46', '2022-06-02 03:24:46', 'تست'),
(16, 'محصول خالی 3', 'چوبی', '/images/Product/2022_Jun_null.png', '<p>تست</p>', '2022-06-02 03:25:00', '2022-06-02 03:25:00', 'تست'),
(17, 'محصول خالی 4', 'چوبی', '/images/Product/2022_Jun_null.png', '<p>تست</p>', '2022-06-02 03:25:14', '2022-06-02 03:25:14', 'تست'),
(18, 'محصول خالی 5', 'فلزی', '/images/Product/2022_Jun_null.png', '<p>تست</p>', '2022-06-02 03:25:38', '2022-06-02 03:25:38', 'تست'),
(19, 'محصول خالی 7', 'فلزی', '/images/Product/2022_Jun_null.png', '<p>تست</p>', '2022-06-02 03:25:53', '2022-06-02 03:25:53', 'تست');

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_fa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `href` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `name`, `name_fa`, `status`, `created_at`, `updated_at`, `type`, `href`) VALUES
(1, 'services', 'خدمات', '1', NULL, '2022-05-16 03:15:33', 'section', ''),
(2, 'statistics', 'آمار', '1', NULL, '2022-06-16 06:59:10', 'section', ''),
(3, 'team', 'تیم ما', '1', NULL, '2022-06-01 03:21:11', 'section', ''),
(4, 'plans', 'قیمت ها و طرح ها', '1', NULL, '2022-06-01 03:21:14', 'section', ''),
(5, 'blog', 'مقالات', '1', NULL, '2022-06-16 06:59:13', 'section', ''),
(6, 'slider', 'اسلایدر', '1', NULL, '2022-05-22 06:14:41', 'section', ''),
(12, 'random_product', 'برخی از محصولات ما', '1', NULL, '2022-06-02 04:44:35', 'section', '#'),
(13, 'portfolio', 'نمونه کار', '1', NULL, '2022-06-01 08:39:23', 'page', '#'),
(14, 'about', 'درباره ما', '1', NULL, NULL, 'page', '#'),
(15, 'contact', 'تماس باما', '1', NULL, '2022-06-20 03:51:58', 'page', '#'),
(16, 'blog', 'بلاگ', '1', NULL, NULL, 'page', '@'),
(17, 'services', 'خدمات', '1', NULL, NULL, 'page', '#'),
(18, 'products', 'محصولات', '1', NULL, '2022-06-02 04:49:41', 'page', '#'),
(19, 'categorys', 'دسته بندی', '1', NULL, NULL, 'page', '#');

-- --------------------------------------------------------

--
-- Table structure for table `sections__settings`
--

CREATE TABLE `sections__settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_fa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `count` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sections__settings`
--

INSERT INTO `sections__settings` (`id`, `name`, `name_fa`, `title`, `count`, `created_at`, `updated_at`) VALUES
(1, 'services', 'خدمات', 'ارائه خدمات خارق العاده', '6', NULL, '2022-05-16 08:12:24'),
(2, 'team', 'تیم ما', 'تیم خارق العاده و خلاق ما', '4', NULL, '2022-05-17 17:20:39'),
(3, 'plans', 'قیمت ها و طرح ها', 'طرح مناسب خود را انتخاب کنید', '3', NULL, '2022-06-20 04:38:35'),
(4, 'blog', 'آخرین مقالات', 'مشاهده آخرین پست های بلاگ', '3', NULL, '2022-05-16 04:19:35'),
(5, 'portfolio', 'محصولات', 'آخرین نمونه کارهای ما', '0', NULL, '2022-05-22 11:04:00'),
(6, 'contact', 'تماس باما', 'ما برای کمک به شما اینجاییم', '0', NULL, '2022-05-22 12:25:38'),
(7, 'about', '30 سال تجربه', 'برای موفقیت آماده شوید', '0', NULL, '2022-05-22 13:58:32'),
(8, 'random_product', 'محصولات ما', 'برخی از محصولات ما را مشهاده کنید', '1', NULL, '2022-05-26 06:42:31');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `icon`, `text`, `created_at`, `updated_at`) VALUES
(1, 'خدمات پس از فروش', 'fa fa-instagram', '<p>تست</p>', '2022-05-16 04:45:17', '2022-05-26 06:13:48'),
(5, 'سرویس ازمایشی', 'fa fa-award', '<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', '2022-05-16 07:03:12', '2022-06-22 02:50:39'),
(6, 'سرویس', 'fa fa-award', '<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', '2022-05-16 07:04:15', '2022-06-22 02:46:23'),
(7, 'بازدید دوره ای', 'fa fa-tasks', '<p>تست</p>', '2022-05-16 07:05:12', '2022-05-26 06:19:00'),
(9, 'سرویس و نگهداری', 'fa fa-wrench', '<p>تست</p>', '2022-05-16 08:44:47', '2022-05-26 06:19:37'),
(10, 'مونتاژ و دمونتاژ', 'fa fa-cog', '<p>تست</p>', '2022-05-16 08:45:28', '2022-05-26 06:16:58');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `value_en` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `value`, `status`, `created_at`, `updated_at`, `value_en`) VALUES
(1, 'english', '0', '1', NULL, '2022-06-25 07:01:45', ''),
(2, 'color_base', '#fdce13', '1', NULL, '2022-06-25 07:01:46', ''),
(3, 'fav', '/images/fav/2022_May_26_faas.png', '1', NULL, '2022-05-26 07:02:37', ''),
(4, 'logo_1', '/images/logo/2022_May_26_newlogoo.png', '1', NULL, '2022-05-26 07:02:43', ''),
(5, 'logo_2', '/images/logo/2022_May_26_2022_May_23_dfgsdgsr.svg', '1', NULL, '2022-05-26 07:03:34', ''),
(6, 'title', 'وبسایت شرکت تکنو', '1', NULL, '2022-06-25 07:01:46', '222Techno Company Website'),
(7, 'description', 'توضیحات شرکت تکنو', '1', NULL, '2022-06-25 07:01:46', '2222a description test'),
(8, 'repair', '1', '1', NULL, '2022-06-25 07:01:45', ''),
(9, 'keyworlds', 'Web,Site', '1', NULL, '2022-06-25 07:01:45', 'Web,Site'),
(10, 'link_whatsapp', 'http://wa.me/989125856129', '1', NULL, '2022-06-25 07:01:45', '');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `text`, `image`, `created_at`, `updated_at`) VALUES
(7, '', '', '/images/slider/2022_Jun_sliderbc.jpg', '2022-06-25 06:58:26', '2022-06-25 06:59:21');

-- --------------------------------------------------------

--
-- Table structure for table `social__media`
--

CREATE TABLE `social__media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social__media`
--

INSERT INTO `social__media` (`id`, `name`, `icon`, `value`, `status`, `created_at`, `updated_at`) VALUES
(1, 'instagram', 'fa fa-instagram', 'https://www.instagram.com/test', '1', NULL, '2022-06-01 03:28:02'),
(2, 'telegram', 'fa fa-telegram', 'https://t.me/test', '1', NULL, '2022-06-01 03:28:02'),
(3, 'whatsapp', 'fa fa-whatsapp', 'https://chat.whatsapp.com/BggergOyL9hGK0BvlLi', '1', NULL, '2022-06-01 03:27:29'),
(4, 'twitter', 'fa fa-twitter', '@test', '0', NULL, '2022-05-16 01:47:37'),
(5, 'facebook', 'fa fa-facebook', '@test', '0', NULL, '2022-05-16 01:52:53'),
(6, 'linkedin', 'fa fa-linkedin', 'https://www.linkedin.com/in/ali-saberizadeh-667899223/', '1', NULL, '2022-06-01 03:27:34'),
(7, 'github', 'fa fa-github', 'https://github.com/alisaberizadeh', '1', NULL, '2022-06-01 03:27:37'),
(8, 'youtube', 'fa fa-youtube', '@test', '0', NULL, '2022-05-16 02:04:27');

-- --------------------------------------------------------

--
-- Table structure for table `statistics`
--

CREATE TABLE `statistics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `statistics`
--

INSERT INTO `statistics` (`id`, `title`, `icon`, `value`, `created_at`, `updated_at`, `status`) VALUES
(1, 'پروژه', 'fa fa-book', '28', NULL, '2022-05-22 11:32:02', '1'),
(2, 'مشتری', 'fa fa-users', '254', NULL, '2022-05-22 11:32:02', '1'),
(3, 'پاداش پیروزی', 'fa fa-trophy', '342', NULL, '2022-05-22 11:32:02', '1'),
(4, 'خرید', 'fa fa-credit-card', '78', NULL, '2022-05-22 11:32:02', '1');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `github` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `avatar`, `level`, `instagram`, `twitter`, `linkedin`, `github`, `created_at`, `updated_at`) VALUES
(6, 'علی صابری', '/images/avatar/2022_May_team1.jpg', 'برنامه نویس', '#', '#', '#', '#', '2022-05-16 08:49:23', '2022-05-17 17:38:31'),
(7, 'ایمان شیر محمدی', '/images/avatar/2022_May_team3.jpg', 'موسس', '#', '#', '#', '#', '2022-05-16 08:50:27', '2022-05-17 17:39:00'),
(8, 'نوید فدایی', '/images/avatar/2022_May_team4.jpg', 'طراح سایت', '#', '#', '#', '#', '2022-05-16 08:50:40', '2022-05-16 08:50:40'),
(9, 'الهام محمدی', '/images/avatar/2022_May_team2.jpg', 'سئو کار', '#', '#', '#', '#', '2022-05-16 08:50:57', '2022-05-16 08:50:57');

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `level`) VALUES
(1, 'علی صابری', 'alisaberizadeh01@gmail.com', NULL, '$2y$10$AOpx3mLixEpoaAYs94sLmuaXTrXLY61LhBn7HtmLv0Qp2W6d4JBNe', NULL, '2022-05-14 15:57:04', '2022-06-01 04:47:15', '1'),
(4, 'ایمان', 'iman@gmail.com', NULL, '$2y$10$zON4prLYrg8MkpCGmKhUg.T4MmC03a0lNhnbNUt2SCt.M0BWRkQS6', NULL, '2022-06-25 07:04:19', '2022-06-25 07:04:19', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about__elements`
--
ALTER TABLE `about__elements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `backgrounds`
--
ALTER TABLE `backgrounds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cats`
--
ALTER TABLE `cats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company__information`
--
ALTER TABLE `company__information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `en_about__elements`
--
ALTER TABLE `en_about__elements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `en_footer__informations`
--
ALTER TABLE `en_footer__informations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `en__abouts`
--
ALTER TABLE `en__abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `en__blogs`
--
ALTER TABLE `en__blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `en__cats`
--
ALTER TABLE `en__cats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `en__comments`
--
ALTER TABLE `en__comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `en__company__information`
--
ALTER TABLE `en__company__information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `en__contacts`
--
ALTER TABLE `en__contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `en__menus`
--
ALTER TABLE `en__menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `en__plans`
--
ALTER TABLE `en__plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `en__portfolios`
--
ALTER TABLE `en__portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `en__products`
--
ALTER TABLE `en__products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `en__services`
--
ALTER TABLE `en__services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `en__sliders`
--
ALTER TABLE `en__sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `en__statistics`
--
ALTER TABLE `en__statistics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `en__teams`
--
ALTER TABLE `en__teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `footer__information`
--
ALTER TABLE `footer__information`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sections__settings`
--
ALTER TABLE `sections__settings`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social__media`
--
ALTER TABLE `social__media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statistics`
--
ALTER TABLE `statistics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `about__elements`
--
ALTER TABLE `about__elements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `backgrounds`
--
ALTER TABLE `backgrounds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cats`
--
ALTER TABLE `cats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `company__information`
--
ALTER TABLE `company__information`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `en_about__elements`
--
ALTER TABLE `en_about__elements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `en_footer__informations`
--
ALTER TABLE `en_footer__informations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `en__abouts`
--
ALTER TABLE `en__abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `en__blogs`
--
ALTER TABLE `en__blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `en__cats`
--
ALTER TABLE `en__cats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `en__comments`
--
ALTER TABLE `en__comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `en__company__information`
--
ALTER TABLE `en__company__information`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `en__contacts`
--
ALTER TABLE `en__contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `en__menus`
--
ALTER TABLE `en__menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `en__plans`
--
ALTER TABLE `en__plans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `en__portfolios`
--
ALTER TABLE `en__portfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `en__products`
--
ALTER TABLE `en__products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `en__services`
--
ALTER TABLE `en__services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `en__sliders`
--
ALTER TABLE `en__sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `en__statistics`
--
ALTER TABLE `en__statistics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `en__teams`
--
ALTER TABLE `en__teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `footer__information`
--
ALTER TABLE `footer__information`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `sections__settings`
--
ALTER TABLE `sections__settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `social__media`
--
ALTER TABLE `social__media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `statistics`
--
ALTER TABLE `statistics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
