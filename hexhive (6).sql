-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2025 at 08:28 AM
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
-- Database: `hexhive`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address_1` varchar(255) DEFAULT NULL,
  `address_2` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `pincode` varchar(255) DEFAULT NULL,
  `landmark` varchar(255) DEFAULT NULL,
  `latitude` varchar(255) DEFAULT NULL,
  `longitude` varchar(255) DEFAULT NULL,
  `address_type` varchar(255) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `main_img` varchar(255) DEFAULT NULL,
  `mobile_img` varchar(255) DEFAULT NULL,
  `status` varchar(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `created_by_id`, `name`, `slug`, `main_img`, `mobile_img`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'demo', 'demo', NULL, NULL, '1', '2025-12-24 00:44:31', '2025-09-16 04:44:16', '2025-12-24 00:44:31'),
(2, 1, 'Honey', 'honey', NULL, NULL, '1', '2025-12-24 00:44:28', '2025-09-17 06:02:19', '2025-12-24 00:44:28'),
(3, 1, 'Anil sidhu', 'anil-sidhu', NULL, NULL, '1', '2025-12-24 00:44:26', '2025-12-24 00:06:38', '2025-12-24 00:44:26'),
(4, 1, 'First banner', 'first-banner', NULL, NULL, '1', NULL, '2025-12-24 00:43:38', '2025-12-24 00:43:38');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_by_id` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `is_featured` tinyint(1) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `created_by_id`, `title`, `slug`, `description`, `is_featured`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '1', 'Honey Food', 'honey-food', '<p>Honey Food</p>', 1, 1, NULL, '2025-09-17 04:40:56', '2025-09-17 04:40:56');

-- --------------------------------------------------------

--
-- Table structure for table `botteltypes`
--

CREATE TABLE `botteltypes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_by_id` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=Active,0=Inactive',
  `deleted_at` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `botteltypes`
--

INSERT INTO `botteltypes` (`id`, `created_by_id`, `name`, `slug`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, NULL, 'Pet Mono carton', 'pet-mono-carton', 1, NULL, '2025-09-09 01:06:07', '2025-09-09 01:06:07'),
(3, NULL, 'Stick Round Box', 'stick-round-box', 1, NULL, '2025-09-09 01:06:16', '2025-09-09 01:06:16'),
(4, NULL, 'Apple Glass Jar', 'apple-glass-jar', 1, NULL, '2025-09-09 01:06:23', '2025-09-09 01:06:23'),
(5, NULL, 'Pancake', 'pancake', 1, NULL, '2025-09-09 01:06:42', '2025-09-09 01:06:42'),
(6, NULL, 'Sauce round bottle', 'sauce-round-bottle', 1, NULL, '2025-09-09 01:06:47', '2025-09-09 01:06:47'),
(7, NULL, 'PET ROUND JAR', 'pet-round-jar', 1, NULL, '2025-09-09 01:06:51', '2025-09-09 01:06:51'),
(8, NULL, 'Square Glass', 'square-glass', 1, NULL, '2025-09-09 01:10:30', '2025-09-09 01:10:30');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_by_id` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `deleted_at` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `created_by_id`, `name`, `slug`, `img`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '1', 'Beehive Farms', 'beehive-farms', NULL, '1', NULL, '2025-09-09 01:25:30', '2025-09-09 01:25:30'),
(2, '1', 'Hexhive Foods', 'hexhive-foods', NULL, '1', NULL, '2025-09-09 01:25:51', '2025-09-09 01:25:51'),
(3, '1', 'TBD', 'tbd', NULL, '1', NULL, '2025-09-09 01:26:01', '2025-09-09 01:26:01'),
(4, '1', 'Outsource', 'outsource', NULL, '1', NULL, '2025-09-09 01:26:06', '2025-09-09 01:26:06'),
(5, '1', 'Anil sidhu', 'anil-sidhu', NULL, '1', '2025-12-24 05:24:16', '2025-12-23 23:54:11', '2025-12-23 23:54:16');

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
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_by_id` varchar(255) DEFAULT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `customer_id` varchar(255) DEFAULT NULL,
  `product_id` varchar(255) DEFAULT NULL,
  `category_id` varchar(255) DEFAULT NULL,
  `sub_category_id` varchar(255) DEFAULT NULL,
  `brand_id` varchar(255) DEFAULT NULL,
  `pincode` varchar(255) DEFAULT NULL,
  `qty` varchar(255) DEFAULT '1',
  `sale_price` varchar(255) DEFAULT '1',
  `total_amount` varchar(255) DEFAULT '1',
  `order_type` varchar(255) DEFAULT NULL,
  `deleted_at` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `created_by_id`, `user_id`, `customer_id`, `product_id`, `category_id`, `sub_category_id`, `brand_id`, `pincode`, `qty`, `sale_price`, `total_amount`, `order_type`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, NULL, '1', NULL, '7', NULL, NULL, NULL, NULL, '1', '599', '599', 'Single', '2025-12-24 05:54:41', '2025-12-24 00:24:04', '2025-12-24 00:24:41'),
(2, NULL, '1', NULL, '7', NULL, NULL, NULL, NULL, '1', '599', '599', 'Single', NULL, '2025-12-24 00:24:47', '2025-12-24 01:52:55');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_by_id` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `deleted_at` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `created_by_id`, `name`, `slug`, `img`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '1', 'demo', 'demo', NULL, '1', '2025-09-08 10:04:47', '2025-09-04 03:52:46', '2025-09-08 04:34:47'),
(2, '1', 'Test', 'test', NULL, '1', '2025-09-08 10:04:44', '2025-09-04 03:54:34', '2025-09-08 04:34:44'),
(3, '1', 'Honey', 'honey', NULL, '1', NULL, '2025-09-08 04:37:48', '2025-09-08 04:37:48'),
(4, '1', 'Cubes', 'cubes', NULL, '1', NULL, '2025-09-08 04:38:27', '2025-09-08 04:38:27'),
(5, '1', 'Varietal Honey', 'varietal-honey', NULL, '1', NULL, '2025-09-08 04:38:48', '2025-09-08 04:38:48'),
(6, '1', 'Honey sticks', 'honey-sticks', NULL, '1', NULL, '2025-09-08 04:39:12', '2025-09-08 04:39:12'),
(7, '1', 'Nuts Honey', 'nuts-honey', NULL, '1', NULL, '2025-09-08 04:39:25', '2025-09-08 04:39:25'),
(8, '1', 'Honey Sauce', 'honey-sauce', NULL, '1', NULL, '2025-09-08 04:39:43', '2025-09-08 04:39:43'),
(9, '1', 'Syrup/Honey', 'syruphoney', NULL, '1', NULL, '2025-09-08 04:40:13', '2025-09-08 04:40:13'),
(10, '1', 'Butter', 'butter', NULL, '1', NULL, '2025-09-08 04:40:29', '2025-09-08 04:40:29'),
(11, '1', 'demo', 'demo', NULL, '1', '2025-12-24 05:23:49', '2025-12-23 23:53:45', '2025-12-23 23:53:49');

-- --------------------------------------------------------

--
-- Table structure for table `combo_products`
--

CREATE TABLE `combo_products` (
  `id` int(11) NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `products` text DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `video_url` varchar(255) DEFAULT NULL,
  `deleted_at` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `combo_products`
--

INSERT INTO `combo_products` (`id`, `created_by_id`, `name`, `products`, `status`, `video_url`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, NULL, 'demo', '[\"1\"]', '1', NULL, '2025-09-04 11:44:39', '2025-09-04 06:12:25', '2025-09-04 06:14:39'),
(2, NULL, 'demo', '[\"1\"]', '1', NULL, NULL, '2025-09-04 06:14:53', '2025-09-04 06:14:53'),
(3, NULL, 'demo', '[\"7\"]', '1', NULL, NULL, '2025-12-24 00:07:23', '2025-12-24 00:07:23');

-- --------------------------------------------------------

--
-- Table structure for table `contact_forms`
--

CREATE TABLE `contact_forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Pending',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `otp` varchar(255) DEFAULT NULL,
  `otp_expires_at` timestamp NULL DEFAULT NULL,
  `deleted_at` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_by_id` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `main_img` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `deleted_at` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `home_sliders`
--

CREATE TABLE `home_sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_by_id` text DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `img` text DEFAULT NULL,
  `mobile_img` text DEFAULT NULL,
  `link` text DEFAULT NULL,
  `status` text DEFAULT NULL,
  `deleted_at` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
-- Table structure for table `manufacturers`
--

CREATE TABLE `manufacturers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_by_id` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=Active,0=Inactive',
  `deleted_at` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) DEFAULT NULL,
  `collection_name` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `mime_type` varchar(255) DEFAULT NULL,
  `disk` varchar(255) NOT NULL,
  `conversions_disk` varchar(255) DEFAULT NULL,
  `size` bigint(20) UNSIGNED NOT NULL,
  `manipulations` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`manipulations`)),
  `custom_properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`custom_properties`)),
  `generated_conversions` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`generated_conversions`)),
  `responsive_images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`responsive_images`)),
  `order_column` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `model_type`, `model_id`, `uuid`, `collection_name`, `name`, `file_name`, `mime_type`, `disk`, `conversions_disk`, `size`, `manipulations`, `custom_properties`, `generated_conversions`, `responsive_images`, `order_column`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\Category', 1, 'df44235b-4779-4c26-9e94-a613114145dd', 'main_img', 'browser_7828035', 'browser_7828035.png', 'image/png', 'media', 'media', 23885, '[]', '[]', '{\"thumb\":true}', '[]', 1, '2025-09-04 03:52:51', '2025-09-04 03:52:56'),
(2, 'App\\Models\\Category', 2, 'f6d1808b-5e85-477a-a883-618396dc5112', 'main_img', 'browser_7828035', 'browser_7828035.png', 'image/png', 'media', 'media', 23885, '[]', '[]', '{\"thumb\":true}', '[]', 1, '2025-09-04 03:54:35', '2025-09-04 03:54:36'),
(3, 'App\\Models\\Product', 1, '141317f2-afc2-4f4d-9955-d39124cda3b4', 'main_img', 'Sanatani', 'Sanatani.png', 'image/png', 'media', 'media', 173436, '[]', '[]', '{\"thumb\":true}', '[]', 1, '2025-09-04 04:08:49', '2025-09-04 04:08:50'),
(4, 'App\\Models\\Product', 1, '4098f808-dbfe-4619-9e79-920aa3c9fc48', 'gallery_imgs', '12506', '12506.jpg', 'image/jpeg', 'media', 'media', 509165, '[]', '[]', '{\"thumb\":true}', '[]', 2, '2025-09-04 04:08:50', '2025-09-04 04:08:51'),
(5, 'App\\Models\\Product', 1, '84d83e63-eec4-4516-94c4-8bc4e6e2ff54', 'product_benefits_img', 'browser_7828035', 'browser_7828035.png', 'image/png', 'media', 'media', 23885, '[]', '[]', '{\"thumb\":true}', '[]', 3, '2025-09-04 04:08:51', '2025-09-04 04:08:52'),
(6, 'App\\Models\\ComboProduct', 0, 'b603e4ac-3bfc-45fb-b446-b853ed5511b2', 'main_img', 'browser_7828035', 'browser_7828035.png', 'image/png', 'media', 'media', 23885, '[]', '[]', '{\"thumb\":true}', '[]', 1, '2025-09-04 06:12:26', '2025-09-04 06:12:27'),
(7, 'App\\Models\\ComboProduct', 2, '6f328be0-f052-46bf-b72c-490947593c82', 'main_img', 'browser_7828035', 'browser_7828035.png', 'image/png', 'media', 'media', 23885, '[]', '[]', '{\"thumb\":true}', '[]', 1, '2025-09-04 06:14:54', '2025-09-04 06:14:54'),
(8, 'App\\Models\\Category', 3, 'd442e109-17fc-4ea0-996b-8c54dbfea131', 'main_img', '6382069', '6382069.jpg', 'image/jpeg', 'media', 'media', 439480, '[]', '[]', '{\"thumb\":true}', '[]', 1, '2025-09-08 04:37:51', '2025-09-08 04:37:55'),
(9, 'App\\Models\\Category', 4, '74e0bfed-b50d-40c7-a5fb-f8d451735fdc', 'main_img', '2148132578', '2148132578.jpg', 'image/jpeg', 'media', 'media', 721696, '[]', '[]', '{\"thumb\":true}', '[]', 1, '2025-09-08 04:38:27', '2025-09-08 04:38:28'),
(10, 'App\\Models\\Category', 5, '38e8b4a6-e295-4499-a143-09df53a320c7', 'main_img', '120629', '120629.jpg', 'image/jpeg', 'media', 'media', 740109, '[]', '[]', '{\"thumb\":true}', '[]', 1, '2025-09-08 04:38:49', '2025-09-08 04:38:49'),
(11, 'App\\Models\\Category', 6, '68040ae1-a0b6-41d0-9b2f-8e0b1e1e55a1', 'main_img', '2148346611', '2148346611.jpg', 'image/jpeg', 'media', 'media', 277118, '[]', '[]', '{\"thumb\":true}', '[]', 1, '2025-09-08 04:39:12', '2025-09-08 04:39:13'),
(12, 'App\\Models\\Category', 7, '1d32814e-a285-4f5a-a5a5-edc2926c10a6', 'main_img', '2148074856', '2148074856.jpg', 'image/jpeg', 'media', 'media', 1052612, '[]', '[]', '{\"thumb\":true}', '[]', 1, '2025-09-08 04:39:26', '2025-09-08 04:39:26'),
(13, 'App\\Models\\Category', 8, '67bcfc5c-966b-4753-9355-7e6a3754eaf4', 'main_img', '480509', '480509.jpg', 'image/jpeg', 'media', 'media', 292962, '[]', '[]', '{\"thumb\":true}', '[]', 1, '2025-09-08 04:39:43', '2025-09-08 04:39:43'),
(14, 'App\\Models\\Category', 9, '592df38e-fe67-4343-89eb-75b541bf4881', 'main_img', '480491', '480491.jpg', 'image/jpeg', 'media', 'media', 226266, '[]', '[]', '{\"thumb\":true}', '[]', 1, '2025-09-08 04:40:13', '2025-09-08 04:40:14'),
(15, 'App\\Models\\Category', 10, 'f9d09386-bd92-4537-b286-b6813c854dbd', 'main_img', '6790', '6790.jpg', 'image/jpeg', 'media', 'media', 706552, '[]', '[]', '{\"thumb\":true}', '[]', 1, '2025-09-08 04:40:30', '2025-09-08 04:40:31'),
(16, 'App\\Models\\Product', 2, '6bb45403-f4b4-4727-a009-26935229db8c', 'main_img', '14305', '14305.jpg', 'image/jpeg', 'media', 'media', 1210129, '[]', '[]', '{\"thumb\":true}', '[]', 1, '2025-09-09 00:04:34', '2025-09-09 00:04:38'),
(17, 'App\\Models\\Product', 6, '3aa842b0-8499-4491-b3fb-a790f11edca6', 'main_img', '7', '7.png', 'image/png', 'media', 'media', 286629, '[]', '[]', '{\"thumb\":true}', '[]', 1, '2025-09-09 05:01:30', '2025-09-09 05:01:33'),
(18, 'App\\Models\\Product', 6, '0f5959e8-0730-4e5d-8f93-54190ac254c1', 'gallery_imgs', '8', '8.png', 'image/png', 'media', 'media', 455511, '[]', '[]', '{\"thumb\":true}', '[]', 2, '2025-09-09 05:01:33', '2025-09-09 05:01:33'),
(19, 'App\\Models\\Product', 6, 'f38e7238-669b-40b2-ae08-e8bb880aeed1', 'gallery_imgs', '23', '23.png', 'image/png', 'media', 'media', 314786, '[]', '[]', '{\"thumb\":true}', '[]', 3, '2025-09-09 05:01:33', '2025-09-09 05:01:34'),
(20, 'App\\Models\\Product', 6, '16cb6358-800e-42fd-9673-194ecbb0be88', 'gallery_imgs', '26', '26.png', 'image/png', 'media', 'media', 277742, '[]', '[]', '{\"thumb\":true}', '[]', 4, '2025-09-09 05:01:34', '2025-09-09 05:01:34'),
(45, 'App\\Models\\Banners', 1, '6c9b1dfc-15a2-4699-84c1-8d804721fead', 'main_img', 'Daco_4763966 (1)', 'Daco_4763966-(1).png', 'image/png', 'media', 'media', 38983, '[]', '[]', '{\"thumb\":true}', '[]', 1, '2025-09-16 04:44:17', '2025-09-16 04:44:19'),
(46, 'App\\Models\\Banners', 1, 'f8b0cc6d-67a4-45ad-990a-4ac2a15c1229', 'mobile_img', 'Daco_4763966 (1)', 'Daco_4763966-(1).png', 'image/png', 'media', 'media', 38983, '[]', '[]', '{\"thumb\":true}', '[]', 2, '2025-09-16 04:44:19', '2025-09-16 04:44:20'),
(47, 'App\\Models\\Blog', 1, '6b134aea-9c0f-4855-9fde-facfadfcee3f', 'main_img', '14305', '14305.jpg', 'image/jpeg', 'media', 'media', 1210129, '[]', '[]', '{\"thumb\":true}', '[]', 1, '2025-09-17 04:41:00', '2025-09-17 04:41:04'),
(48, 'App\\Models\\Banners', 2, 'd65af5d8-c987-404a-b30f-fe45378447da', 'main_img', '2151754429', '2151754429.jpg', 'image/jpeg', 'media', 'media', 538088, '[]', '[]', '{\"thumb\":true}', '[]', 1, '2025-09-17 06:02:20', '2025-09-17 06:02:21'),
(49, 'App\\Models\\Banners', 2, '7b5d6d65-5534-4578-b7d1-e9dd37ef1b21', 'mobile_img', '2151754429', '2151754429.jpg', 'image/jpeg', 'media', 'media', 538088, '[]', '[]', '{\"thumb\":true}', '[]', 2, '2025-09-17 06:02:21', '2025-09-17 06:02:21'),
(50, 'App\\Models\\Product', 12, 'fefe8c63-8cd4-4632-8c07-2fbba9fa3fc5', 'main_img', 'Turmeric-Honey-7', 'Turmeric-Honey-7.jpg', 'image/jpeg', 'media', 'media', 192059, '[]', '[]', '{\"thumb\":true}', '[]', 5, '2025-12-23 03:52:05', '2025-12-23 03:52:07'),
(51, 'App\\Models\\Product', 12, '540e069a-07df-4691-8a81-6d5b36eb3b60', 'gallery_imgs', 'Turmeric-Honey', 'Turmeric-Honey.jpg', 'image/jpeg', 'media', 'media', 288819, '[]', '[]', '{\"thumb\":true}', '[]', 6, '2025-12-23 03:52:07', '2025-12-23 03:52:07'),
(52, 'App\\Models\\Product', 12, 'a6dd233a-d784-44be-93f0-9f883d996de5', 'gallery_imgs', 'Turmeric-Honey-1', 'Turmeric-Honey-1.jpg', 'image/jpeg', 'media', 'media', 291718, '[]', '[]', '{\"thumb\":true}', '[]', 7, '2025-12-23 03:52:08', '2025-12-23 03:52:09'),
(53, 'App\\Models\\Product', 12, 'd8e47022-1c52-40da-bf97-fe00c6fc58a3', 'gallery_imgs', 'Turmeric-Honey-2', 'Turmeric-Honey-2.jpg', 'image/jpeg', 'media', 'media', 288512, '[]', '[]', '{\"thumb\":true}', '[]', 8, '2025-12-23 03:52:09', '2025-12-23 03:52:10'),
(54, 'App\\Models\\Product', 12, 'ab04d3c6-b205-4f08-a828-3c57e524fa44', 'gallery_imgs', 'Turmeric-Honey-3', 'Turmeric-Honey-3.jpg', 'image/jpeg', 'media', 'media', 307807, '[]', '[]', '{\"thumb\":true}', '[]', 9, '2025-12-23 03:52:10', '2025-12-23 03:52:11'),
(55, 'App\\Models\\Product', 12, '6bb5b91c-9f51-43c2-8bf4-301d23ad16b9', 'gallery_imgs', 'Turmeric-Honey-4', 'Turmeric-Honey-4.jpg', 'image/jpeg', 'media', 'media', 212491, '[]', '[]', '{\"thumb\":true}', '[]', 10, '2025-12-23 03:52:12', '2025-12-23 03:52:12'),
(56, 'App\\Models\\Product', 12, '4539e664-1b91-4f9e-985f-ed838359d505', 'gallery_imgs', 'Turmeric-Honey-5', 'Turmeric-Honey-5.jpg', 'image/jpeg', 'media', 'media', 228038, '[]', '[]', '{\"thumb\":true}', '[]', 11, '2025-12-23 03:52:13', '2025-12-23 03:52:13'),
(57, 'App\\Models\\Product', 12, '365e32ce-a42d-4d73-9ab6-625a01125295', 'gallery_imgs', 'Turmeric-Honey-6', 'Turmeric-Honey-6.jpg', 'image/jpeg', 'media', 'media', 219753, '[]', '[]', '{\"thumb\":true}', '[]', 12, '2025-12-23 03:52:13', '2025-12-23 03:52:14'),
(58, 'App\\Models\\Product', 12, 'f6bb240c-9814-4174-a921-c83257789bd8', 'gallery_imgs', 'Turmeric-Honey-7', 'Turmeric-Honey-7.jpg', 'image/jpeg', 'media', 'media', 192059, '[]', '[]', '{\"thumb\":true}', '[]', 13, '2025-12-23 03:52:15', '2025-12-23 03:52:16'),
(59, 'App\\Models\\Product', 13, '8b1b6cd8-db90-4607-9fd8-e0ff4d572730', 'main_img', 'Organic-Honey-Front', 'Organic-Honey-Front.jpg', 'image/jpeg', 'media', 'media', 668339, '[]', '[]', '{\"thumb\":true}', '[]', 1, '2025-12-23 03:58:03', '2025-12-23 03:58:04'),
(60, 'App\\Models\\Product', 13, '6c47a39a-4efc-43f8-9a3d-960daa9dcd98', 'gallery_imgs', 'Organic-Honey-back', 'Organic-Honey-back.jpg', 'image/jpeg', 'media', 'media', 686669, '[]', '[]', '{\"thumb\":true}', '[]', 2, '2025-12-23 03:58:04', '2025-12-23 03:58:05'),
(61, 'App\\Models\\Product', 13, '1a8de54b-b731-4222-8bb4-a006f70b77a8', 'gallery_imgs', 'Organic-Honey-back-1', 'Organic-Honey-back-1.jpg', 'image/jpeg', 'media', 'media', 668526, '[]', '[]', '{\"thumb\":true}', '[]', 3, '2025-12-23 03:58:06', '2025-12-23 03:58:07'),
(62, 'App\\Models\\Product', 13, '9cc1ec49-b631-4179-bd3b-58593d6312bf', 'gallery_imgs', 'Organic-Honey-back-2', 'Organic-Honey-back-2.jpg', 'image/jpeg', 'media', 'media', 545660, '[]', '[]', '{\"thumb\":true}', '[]', 4, '2025-12-23 03:58:08', '2025-12-23 03:58:09'),
(63, 'App\\Models\\Product', 13, '9a5f12a9-418b-4811-8df6-f8eac5b9e63f', 'gallery_imgs', 'Organic-Honey-Front', 'Organic-Honey-Front.jpg', 'image/jpeg', 'media', 'media', 668339, '[]', '[]', '{\"thumb\":true}', '[]', 5, '2025-12-23 03:58:09', '2025-12-23 03:58:10'),
(64, 'App\\Models\\Product', 13, '08d6d41d-6039-4e23-b703-4c82dc97cc2a', 'gallery_imgs', 'Organic-Honey-sides', 'Organic-Honey-sides.jpg', 'image/jpeg', 'media', 'media', 736462, '[]', '[]', '{\"thumb\":true}', '[]', 6, '2025-12-23 03:58:11', '2025-12-23 03:58:12'),
(65, 'App\\Models\\Product', 13, '6637f84b-4303-46fd-8fb6-96e2c3932e42', 'gallery_imgs', 'Organic-Honey-sides-1', 'Organic-Honey-sides-1.jpg', 'image/jpeg', 'media', 'media', 782091, '[]', '[]', '{\"thumb\":true}', '[]', 7, '2025-12-23 03:58:13', '2025-12-23 03:58:14'),
(66, 'App\\Models\\Product', 13, 'c9c86dc5-dd67-4b23-900a-ce888b66f5e7', 'product_benefits_img', 'Organic-Honey-back-1', 'Organic-Honey-back-1.jpg', 'image/jpeg', 'media', 'media', 668526, '[]', '[]', '{\"thumb\":true}', '[]', 8, '2025-12-23 03:58:15', '2025-12-23 03:58:16'),
(67, 'App\\Models\\Product', 13, '929fc575-3852-4736-acba-034fac3edf6c', 'product_benefits_img', 'Organic-Honey-back-2', 'Organic-Honey-back-2.jpg', 'image/jpeg', 'media', 'media', 545660, '[]', '[]', '{\"thumb\":true}', '[]', 9, '2025-12-23 03:58:17', '2025-12-23 03:58:18'),
(68, 'App\\Models\\Product', 14, '288644ab-fdd3-4bda-93f4-ac2138ce4434', 'main_img', 'Acacia-Light-Honey-front', 'Acacia-Light-Honey-front.jpg', 'image/jpeg', 'media', 'media', 724833, '[]', '[]', '{\"thumb\":true}', '[]', 1, '2025-12-23 04:01:56', '2025-12-23 04:01:57'),
(69, 'App\\Models\\Product', 14, '92e2c67d-1374-4ddc-951a-8bfc8e8ba74a', 'gallery_imgs', 'Acacia-Light-Honey-back', 'Acacia-Light-Honey-back.jpg', 'image/jpeg', 'media', 'media', 764401, '[]', '[]', '{\"thumb\":true}', '[]', 2, '2025-12-23 04:01:58', '2025-12-23 04:01:59'),
(70, 'App\\Models\\Product', 14, '547f6fcb-ed78-4d1c-8543-969ccefd9e57', 'gallery_imgs', 'Acacia-Light-Honey-back-1', 'Acacia-Light-Honey-back-1.jpg', 'image/jpeg', 'media', 'media', 707032, '[]', '[]', '{\"thumb\":true}', '[]', 3, '2025-12-23 04:02:00', '2025-12-23 04:02:00'),
(71, 'App\\Models\\Product', 14, '519be0a1-b488-42b2-9d74-b03dfba758fd', 'gallery_imgs', 'Acacia-Light-Honey-back-2', 'Acacia-Light-Honey-back-2.jpg', 'image/jpeg', 'media', 'media', 462839, '[]', '[]', '{\"thumb\":true}', '[]', 4, '2025-12-23 04:02:01', '2025-12-23 04:02:02'),
(72, 'App\\Models\\Product', 14, '86b344b8-bf50-4268-ace9-b6fb0575697a', 'gallery_imgs', 'Acacia-Light-Honey-front', 'Acacia-Light-Honey-front.jpg', 'image/jpeg', 'media', 'media', 724833, '[]', '[]', '{\"thumb\":true}', '[]', 5, '2025-12-23 04:02:03', '2025-12-23 04:02:04'),
(73, 'App\\Models\\Product', 14, '6b581cfa-1676-4cec-b5a7-b98daf332581', 'gallery_imgs', 'Acacia-Light-Honey-side', 'Acacia-Light-Honey-side.jpg', 'image/jpeg', 'media', 'media', 784147, '[]', '[]', '{\"thumb\":true}', '[]', 6, '2025-12-23 04:02:05', '2025-12-23 04:02:06'),
(74, 'App\\Models\\Product', 14, '32cc19c0-ac92-4416-894f-5257e0ff4e3a', 'gallery_imgs', 'Acacia-Light-Honey-side-1', 'Acacia-Light-Honey-side-1.jpg', 'image/jpeg', 'media', 'media', 802582, '[]', '[]', '{\"thumb\":true}', '[]', 7, '2025-12-23 04:02:06', '2025-12-23 04:02:07'),
(75, 'App\\Models\\Product', 14, '1f65279b-014a-4645-9ff3-e13671c41689', 'product_benefits_img', 'Acacia-Light-Honey-front', 'Acacia-Light-Honey-front.jpg', 'image/jpeg', 'media', 'media', 724833, '[]', '[]', '{\"thumb\":true}', '[]', 8, '2025-12-23 04:02:07', '2025-12-23 04:02:10'),
(76, 'App\\Models\\Product', 14, 'ade21e08-ee08-4c8c-9899-93c56d28a910', 'product_benefits_img', 'Acacia-Light-Honey-side', 'Acacia-Light-Honey-side.jpg', 'image/jpeg', 'media', 'media', 784147, '[]', '[]', '{\"thumb\":true}', '[]', 9, '2025-12-23 04:02:10', '2025-12-23 04:02:11'),
(77, 'App\\Models\\Product', 7, 'dcd8695e-761d-4759-bc94-585754efc4b3', 'main_img', 'Black-Forest-Honey-front', 'Black-Forest-Honey-front.jpg', 'image/jpeg', 'media', 'media', 675929, '[]', '[]', '{\"thumb\":true}', '[]', 5, '2025-12-23 04:03:45', '2025-12-23 04:03:45'),
(78, 'App\\Models\\Product', 7, '16bd1d04-1f9b-4a66-b8e7-ece56b775e13', 'gallery_imgs', 'Black-Forest-Honey-back', 'Black-Forest-Honey-back.jpg', 'image/jpeg', 'media', 'media', 641867, '[]', '[]', '{\"thumb\":true}', '[]', 6, '2025-12-23 04:03:46', '2025-12-23 04:03:46'),
(79, 'App\\Models\\Product', 7, 'e653252a-fe66-4cd7-bbf6-600bed14485c', 'gallery_imgs', 'Black-Forest-Honey-back-1', 'Black-Forest-Honey-back-1.jpg', 'image/jpeg', 'media', 'media', 497269, '[]', '[]', '{\"thumb\":true}', '[]', 7, '2025-12-23 04:03:47', '2025-12-23 04:03:48'),
(80, 'App\\Models\\Product', 7, '13441a67-a423-45c0-bf76-5dfb5599ef27', 'gallery_imgs', 'Black-Forest-Honey-front', 'Black-Forest-Honey-front.jpg', 'image/jpeg', 'media', 'media', 675929, '[]', '[]', '{\"thumb\":true}', '[]', 8, '2025-12-23 04:03:48', '2025-12-23 04:03:48'),
(81, 'App\\Models\\Product', 7, 'f33340c4-5f55-4843-ad85-e6ca54995fd0', 'gallery_imgs', 'Black-Forest-Honey-side', 'Black-Forest-Honey-side.jpg', 'image/jpeg', 'media', 'media', 722023, '[]', '[]', '{\"thumb\":true}', '[]', 9, '2025-12-23 04:03:49', '2025-12-23 04:03:49'),
(82, 'App\\Models\\Product', 7, 'bf376aa9-2734-427b-acd6-e5fbfedf1963', 'gallery_imgs', 'Black-Forest-Honey-side-1', 'Black-Forest-Honey-side-1.jpg', 'image/jpeg', 'media', 'media', 694323, '[]', '[]', '{\"thumb\":true}', '[]', 10, '2025-12-23 04:03:49', '2025-12-23 04:03:50'),
(83, 'App\\Models\\Product', 7, '228c00fd-d3c4-4483-bacb-84b27c1ccdcd', 'gallery_imgs', 'Black-Forest-Honey-side-2', 'Black-Forest-Honey-side-2.jpg', 'image/jpeg', 'media', 'media', 641487, '[]', '[]', '{\"thumb\":true}', '[]', 11, '2025-12-23 04:03:50', '2025-12-23 04:03:50'),
(84, 'App\\Models\\Product', 8, 'bf470538-f7cb-40d6-bfe3-80c46aa8292e', 'main_img', 'Spring-Blossom-Honey-front', 'Spring-Blossom-Honey-front.jpg', 'image/jpeg', 'media', 'media', 700875, '[]', '[]', '{\"thumb\":true}', '[]', 5, '2025-12-23 04:05:00', '2025-12-23 04:05:00'),
(85, 'App\\Models\\Product', 8, 'eab8e3c5-964c-4dde-8a78-ddd49074e3f7', 'gallery_imgs', 'Spring-Blossom-Honey-back', 'Spring-Blossom-Honey-back.jpg', 'image/jpeg', 'media', 'media', 835807, '[]', '[]', '{\"thumb\":true}', '[]', 6, '2025-12-23 04:05:01', '2025-12-23 04:05:01'),
(86, 'App\\Models\\Product', 8, 'f1f632e1-7699-498b-bf1d-2f318f0e876f', 'gallery_imgs', 'Spring-Blossom-Honey-front', 'Spring-Blossom-Honey-front.jpg', 'image/jpeg', 'media', 'media', 700875, '[]', '[]', '{\"thumb\":true}', '[]', 7, '2025-12-23 04:05:01', '2025-12-23 04:05:02'),
(87, 'App\\Models\\Product', 8, '168a6489-b373-40a8-98c8-f8c0ed9536b5', 'gallery_imgs', 'Spring-Blossom-Honey-side', 'Spring-Blossom-Honey-side.jpg', 'image/jpeg', 'media', 'media', 831287, '[]', '[]', '{\"thumb\":true}', '[]', 8, '2025-12-23 04:05:03', '2025-12-23 04:05:04'),
(88, 'App\\Models\\Product', 8, '5072f83a-2077-481c-9399-113c417bc66c', 'gallery_imgs', 'Spring-Blossom-Honey-side-1', 'Spring-Blossom-Honey-side-1.jpg', 'image/jpeg', 'media', 'media', 776950, '[]', '[]', '{\"thumb\":true}', '[]', 9, '2025-12-23 04:05:04', '2025-12-23 04:05:04'),
(89, 'App\\Models\\Product', 8, 'fd9bf628-21f7-4a24-80f9-7ed1c09203b1', 'gallery_imgs', 'Spring-Blossom-Honey-side-2', 'Spring-Blossom-Honey-side-2.jpg', 'image/jpeg', 'media', 'media', 919891, '[]', '[]', '{\"thumb\":true}', '[]', 10, '2025-12-23 04:05:04', '2025-12-23 04:05:05'),
(90, 'App\\Models\\Product', 9, 'bf3668a1-4140-46f6-b245-3094de6325b3', 'main_img', 'Van-Tulsi-Honey-top-front', 'Van-Tulsi-Honey-top-front.jpg', 'image/jpeg', 'media', 'media', 475423, '[]', '[]', '{\"thumb\":true}', '[]', 5, '2025-12-23 04:06:11', '2025-12-23 04:06:13'),
(91, 'App\\Models\\Product', 9, '1955901f-38d3-4914-86a8-608ab85ebdd2', 'gallery_imgs', 'Van-Tulsi-Honey-top', 'Van-Tulsi-Honey-top.jpg', 'image/jpeg', 'media', 'media', 404122, '[]', '[]', '{\"thumb\":true}', '[]', 6, '2025-12-23 04:06:13', '2025-12-23 04:06:13'),
(92, 'App\\Models\\Product', 9, '16fb6c3a-9e87-419d-9c64-619013180f5b', 'gallery_imgs', 'Van-Tulsi-Honey-top-back', 'Van-Tulsi-Honey-top-back.jpg', 'image/jpeg', 'media', 'media', 493507, '[]', '[]', '{\"thumb\":true}', '[]', 7, '2025-12-23 04:06:14', '2025-12-23 04:06:15'),
(93, 'App\\Models\\Product', 9, '3150b514-31e4-4d24-8dc7-bf1c68fcf7c1', 'gallery_imgs', 'Van-Tulsi-Honey-top-back-1', 'Van-Tulsi-Honey-top-back-1.jpg', 'image/jpeg', 'media', 'media', 464801, '[]', '[]', '{\"thumb\":true}', '[]', 8, '2025-12-23 04:06:15', '2025-12-23 04:06:16'),
(94, 'App\\Models\\Product', 9, '6ee62634-48f2-46e0-b2bf-ff1806cce8ea', 'gallery_imgs', 'Van-Tulsi-Honey-top-front', 'Van-Tulsi-Honey-top-front.jpg', 'image/jpeg', 'media', 'media', 475423, '[]', '[]', '{\"thumb\":true}', '[]', 9, '2025-12-23 04:06:16', '2025-12-23 04:06:16'),
(95, 'App\\Models\\Product', 9, '3d972602-e8dc-4cec-831b-f1794185481b', 'gallery_imgs', 'Van-Tulsi-Honey-top-side', 'Van-Tulsi-Honey-top-side.jpg', 'image/jpeg', 'media', 'media', 556430, '[]', '[]', '{\"thumb\":true}', '[]', 10, '2025-12-23 04:06:17', '2025-12-23 04:06:18'),
(96, 'App\\Models\\Product', 9, 'a0ad116b-e3df-41dd-a977-8bd7c4dcecd6', 'gallery_imgs', 'Van-Tulsi-Honey-top-side-1', 'Van-Tulsi-Honey-top-side-1.jpg', 'image/jpeg', 'media', 'media', 510466, '[]', '[]', '{\"thumb\":true}', '[]', 11, '2025-12-23 04:06:18', '2025-12-23 04:06:18'),
(97, 'App\\Models\\Product', 10, '323d324e-b6c8-4c57-be2c-da7619b350e9', 'main_img', 'Honey-Cubes-Ginger', 'Honey-Cubes-Ginger.jpg', 'image/jpeg', 'media', 'media', 797092, '[]', '[]', '{\"thumb\":true}', '[]', 5, '2025-12-23 04:12:23', '2025-12-23 04:12:23'),
(98, 'App\\Models\\Product', 10, '073c55b1-c788-4e3c-8848-9440b23ebf44', 'gallery_imgs', 'Honey-Cubes-Ginger', 'Honey-Cubes-Ginger.jpg', 'image/jpeg', 'media', 'media', 797092, '[]', '[]', '{\"thumb\":true}', '[]', 6, '2025-12-23 04:12:24', '2025-12-23 04:12:24'),
(99, 'App\\Models\\Product', 10, '81c01402-a08d-4852-a460-939c563cb33b', 'gallery_imgs', 'Honey-Cubes-Ginger-back', 'Honey-Cubes-Ginger-back.jpg', 'image/jpeg', 'media', 'media', 603966, '[]', '[]', '{\"thumb\":true}', '[]', 7, '2025-12-23 04:12:25', '2025-12-23 04:12:25'),
(100, 'App\\Models\\Product', 10, '124d13c3-bb23-49ed-a4b0-0ef43f59e1d4', 'gallery_imgs', 'Honey-Cubes-Ginger-left', 'Honey-Cubes-Ginger-left.jpg', 'image/jpeg', 'media', 'media', 819996, '[]', '[]', '{\"thumb\":true}', '[]', 8, '2025-12-23 04:12:26', '2025-12-23 04:12:27'),
(101, 'App\\Models\\Product', 10, '67e37e69-0803-482a-86d0-04f2d93a9ab9', 'gallery_imgs', 'Honey-Cubes-Ginger-right', 'Honey-Cubes-Ginger-right.jpg', 'image/jpeg', 'media', 'media', 857903, '[]', '[]', '{\"thumb\":true}', '[]', 9, '2025-12-23 04:12:27', '2025-12-23 04:12:27'),
(102, 'App\\Models\\Product', 10, 'ea17beaf-29a2-4e78-8084-6972470810b4', 'gallery_imgs', 'Honey-Cubes-Ginger-top', 'Honey-Cubes-Ginger-top.jpg', 'image/jpeg', 'media', 'media', 636172, '[]', '[]', '{\"thumb\":true}', '[]', 10, '2025-12-23 04:12:28', '2025-12-23 04:12:29'),
(103, 'App\\Models\\Product', 11, 'b47fc73b-febe-4007-81b3-1184e7808017', 'main_img', 'Shilajit-Honey-front', 'Shilajit-Honey-front.jpg', 'image/jpeg', 'media', 'media', 565606, '[]', '[]', '{\"thumb\":true}', '[]', 1, '2025-12-23 04:19:18', '2025-12-23 04:19:18'),
(104, 'App\\Models\\Product', 11, '538d87cf-5290-46c8-9afb-32fe23f22cbc', 'gallery_imgs', 'Shilajit-Honey-back', 'Shilajit-Honey-back.jpg', 'image/jpeg', 'media', 'media', 571627, '[]', '[]', '{\"thumb\":true}', '[]', 2, '2025-12-23 04:19:18', '2025-12-23 04:19:19'),
(105, 'App\\Models\\Product', 11, '4025693f-f008-4280-9d7b-bd85436e3ec5', 'gallery_imgs', 'Shilajit-Honey-back-1', 'Shilajit-Honey-back-1.jpg', 'image/jpeg', 'media', 'media', 595684, '[]', '[]', '{\"thumb\":true}', '[]', 3, '2025-12-23 04:19:20', '2025-12-23 04:19:20'),
(106, 'App\\Models\\Product', 11, 'c16d4780-7d5c-42fb-972e-b0f7f00cb322', 'gallery_imgs', 'Shilajit-Honey-box', 'Shilajit-Honey-box.jpg', 'image/jpeg', 'media', 'media', 427351, '[]', '[]', '{\"thumb\":true}', '[]', 4, '2025-12-23 04:19:21', '2025-12-23 04:19:21'),
(107, 'App\\Models\\Product', 11, 'df5e0754-0c4f-40d3-8df9-2167197ae964', 'gallery_imgs', 'Shilajit-Honey-front', 'Shilajit-Honey-front.jpg', 'image/jpeg', 'media', 'media', 565606, '[]', '[]', '{\"thumb\":true}', '[]', 5, '2025-12-23 04:19:21', '2025-12-23 04:19:23'),
(108, 'App\\Models\\Product', 11, '0805661f-b045-4d1c-8c86-c9eb74db6b54', 'gallery_imgs', 'Shilajit-Honey-front-1', 'Shilajit-Honey-front-1.jpg', 'image/jpeg', 'media', 'media', 531338, '[]', '[]', '{\"thumb\":true}', '[]', 6, '2025-12-23 04:19:23', '2025-12-23 04:19:24'),
(109, 'App\\Models\\Product', 11, 'a3e9dc27-29d1-4bad-8a63-5e3190ba9b9f', 'gallery_imgs', 'Shilajit-Honey-top', 'Shilajit-Honey-top.jpg', 'image/jpeg', 'media', 'media', 595981, '[]', '[]', '{\"thumb\":true}', '[]', 7, '2025-12-23 04:19:24', '2025-12-23 04:19:24'),
(110, 'App\\Models\\Product', 15, '72e3848e-b751-49a9-ba57-3ffd924178ea', 'main_img', 'Moringa-Honey', 'Moringa-Honey.jpg', 'image/jpeg', 'media', 'media', 341446, '[]', '[]', '{\"thumb\":true}', '[]', 1, '2025-12-23 04:27:00', '2025-12-23 04:27:01'),
(111, 'App\\Models\\Product', 15, 'c0180955-9e5b-4a0e-8cde-98805d7ff023', 'gallery_imgs', 'Moringa-Honey', 'Moringa-Honey.jpg', 'image/jpeg', 'media', 'media', 341446, '[]', '[]', '{\"thumb\":true}', '[]', 2, '2025-12-23 04:27:01', '2025-12-23 04:27:02'),
(112, 'App\\Models\\Product', 15, '816ba603-27ef-472d-9c86-bde7d29dcca6', 'gallery_imgs', 'Moringa-Honey-1', 'Moringa-Honey-1.jpg', 'image/jpeg', 'media', 'media', 351649, '[]', '[]', '{\"thumb\":true}', '[]', 3, '2025-12-23 04:27:02', '2025-12-23 04:27:02'),
(113, 'App\\Models\\Product', 15, 'ff9c5c43-fde4-44f4-8f09-c23c6d9ce591', 'gallery_imgs', 'Moringa-Honey-2', 'Moringa-Honey-2.jpg', 'image/jpeg', 'media', 'media', 250487, '[]', '[]', '{\"thumb\":true}', '[]', 4, '2025-12-23 04:27:03', '2025-12-23 04:27:04'),
(114, 'App\\Models\\Product', 15, '486c1be4-5239-436d-bcbd-ad56c0477eef', 'gallery_imgs', 'Moringa-Honey-3', 'Moringa-Honey-3.jpg', 'image/jpeg', 'media', 'media', 336519, '[]', '[]', '{\"thumb\":true}', '[]', 5, '2025-12-23 04:27:05', '2025-12-23 04:27:05'),
(115, 'App\\Models\\Product', 15, 'df44e187-1818-4c64-9018-09154112903d', 'gallery_imgs', 'Moringa-Honey-4', 'Moringa-Honey-4.jpg', 'image/jpeg', 'media', 'media', 227986, '[]', '[]', '{\"thumb\":true}', '[]', 6, '2025-12-23 04:27:06', '2025-12-23 04:27:06'),
(116, 'App\\Models\\Product', 15, '5dccd527-3ad3-4327-bf05-b2f533d9bd34', 'gallery_imgs', 'Moringa-Honey-5', 'Moringa-Honey-5.jpg', 'image/jpeg', 'media', 'media', 260125, '[]', '[]', '{\"thumb\":true}', '[]', 7, '2025-12-23 04:27:07', '2025-12-23 04:27:08'),
(117, 'App\\Models\\Product', 15, '5223d734-0a5b-4e5c-ade5-33f29a39bdcd', 'gallery_imgs', 'Moringa-Honey-6', 'Moringa-Honey-6.jpg', 'image/jpeg', 'media', 'media', 273864, '[]', '[]', '{\"thumb\":true}', '[]', 8, '2025-12-23 04:27:09', '2025-12-23 04:27:09'),
(118, 'App\\Models\\Product', 15, '530ba781-ba99-4731-a4fc-6373d7107fac', 'gallery_imgs', 'Moringa-Honey-7', 'Moringa-Honey-7.jpg', 'image/jpeg', 'media', 'media', 245315, '[]', '[]', '{\"thumb\":true}', '[]', 9, '2025-12-23 04:27:10', '2025-12-23 04:27:10'),
(119, 'App\\Models\\Product', 16, '2a522a81-3178-47a5-a9e6-b0a2c98b41ab', 'main_img', 'Ginseng-Honey-5', 'Ginseng-Honey-5.jpg', 'image/jpeg', 'media', 'media', 566181, '[]', '[]', '{\"thumb\":true}', '[]', 1, '2025-12-23 04:29:24', '2025-12-23 04:29:25'),
(120, 'App\\Models\\Product', 16, '931bd196-2d38-4f27-98c3-3ba68824a5ef', 'gallery_imgs', 'Ginseng-Honey', 'Ginseng-Honey.jpg', 'image/jpeg', 'media', 'media', 529637, '[]', '[]', '{\"thumb\":true}', '[]', 2, '2025-12-23 04:29:25', '2025-12-23 04:29:25'),
(121, 'App\\Models\\Product', 16, '1893e797-e28f-472b-a797-31fae1e4938f', 'gallery_imgs', 'Ginseng-Honey-1', 'Ginseng-Honey-1.jpg', 'image/jpeg', 'media', 'media', 591862, '[]', '[]', '{\"thumb\":true}', '[]', 3, '2025-12-23 04:29:25', '2025-12-23 04:29:27'),
(122, 'App\\Models\\Product', 16, '2caad18b-3078-487e-8f48-896a6569f6ec', 'gallery_imgs', 'Ginseng-Honey-2', 'Ginseng-Honey-2.jpg', 'image/jpeg', 'media', 'media', 580711, '[]', '[]', '{\"thumb\":true}', '[]', 4, '2025-12-23 04:29:27', '2025-12-23 04:29:27'),
(123, 'App\\Models\\Product', 16, '831496c9-5bc5-4141-8e80-fd7350434ad7', 'gallery_imgs', 'Ginseng-Honey-3', 'Ginseng-Honey-3.jpg', 'image/jpeg', 'media', 'media', 570097, '[]', '[]', '{\"thumb\":true}', '[]', 5, '2025-12-23 04:29:27', '2025-12-23 04:29:28'),
(124, 'App\\Models\\Product', 16, 'd65f131c-6eff-4360-84f0-bcb84a6c9c65', 'gallery_imgs', 'Ginseng-Honey-4', 'Ginseng-Honey-4.jpg', 'image/jpeg', 'media', 'media', 444304, '[]', '[]', '{\"thumb\":true}', '[]', 6, '2025-12-23 04:29:28', '2025-12-23 04:29:28'),
(125, 'App\\Models\\Product', 16, 'fb20efd8-3b40-4dce-8251-122df92cec9f', 'gallery_imgs', 'Ginseng-Honey-5', 'Ginseng-Honey-5.jpg', 'image/jpeg', 'media', 'media', 566181, '[]', '[]', '{\"thumb\":true}', '[]', 7, '2025-12-23 04:29:29', '2025-12-23 04:29:29'),
(126, 'App\\Models\\Product', 17, 'f472c6ee-c29b-4b96-848b-e2b10bc1003a', 'main_img', 'Ashwagandha-Honey-6', 'Ashwagandha-Honey-6.jpg', 'image/jpeg', 'media', 'media', 231148, '[]', '[]', '{\"thumb\":true}', '[]', 1, '2025-12-23 04:33:29', '2025-12-23 04:33:29'),
(127, 'App\\Models\\Product', 17, 'd659eef7-a1b0-4caf-a011-2fdb9f24a570', 'gallery_imgs', 'Ashwagandha-Honey', 'Ashwagandha-Honey.jpg', 'image/jpeg', 'media', 'media', 207306, '[]', '[]', '{\"thumb\":true}', '[]', 2, '2025-12-23 04:33:29', '2025-12-23 04:33:30'),
(128, 'App\\Models\\Product', 17, '5e07f385-6aab-484f-ad7b-f3e3e717643d', 'gallery_imgs', 'Ashwagandha-Honey-1', 'Ashwagandha-Honey-1.jpg', 'image/jpeg', 'media', 'media', 283336, '[]', '[]', '{\"thumb\":true}', '[]', 3, '2025-12-23 04:33:30', '2025-12-23 04:33:31'),
(129, 'App\\Models\\Product', 17, 'e2e4ccfe-1b24-48e4-a3ae-445692071518', 'gallery_imgs', 'Ashwagandha-Honey-2', 'Ashwagandha-Honey-2.jpg', 'image/jpeg', 'media', 'media', 259325, '[]', '[]', '{\"thumb\":true}', '[]', 4, '2025-12-23 04:33:31', '2025-12-23 04:33:32'),
(130, 'App\\Models\\Product', 17, '49b805c1-d2c7-45dc-a873-bd9425c33403', 'gallery_imgs', 'Ashwagandha-Honey-3', 'Ashwagandha-Honey-3.jpg', 'image/jpeg', 'media', 'media', 218291, '[]', '[]', '{\"thumb\":true}', '[]', 5, '2025-12-23 04:33:32', '2025-12-23 04:33:32'),
(131, 'App\\Models\\Product', 17, 'f65f3831-8115-4915-8334-1257f9cf219c', 'gallery_imgs', 'Ashwagandha-Honey-4', 'Ashwagandha-Honey-4.jpg', 'image/jpeg', 'media', 'media', 253665, '[]', '[]', '{\"thumb\":true}', '[]', 6, '2025-12-23 04:33:33', '2025-12-23 04:33:34'),
(132, 'App\\Models\\Product', 17, 'a703ca6c-5b89-4f10-91cf-2aced04b5f8e', 'gallery_imgs', 'Ashwagandha-Honey-5', 'Ashwagandha-Honey-5.jpg', 'image/jpeg', 'media', 'media', 210207, '[]', '[]', '{\"thumb\":true}', '[]', 7, '2025-12-23 04:33:34', '2025-12-23 04:33:34'),
(133, 'App\\Models\\Product', 17, 'c9b3310f-32bb-42fd-8aea-0bcfdd62a025', 'gallery_imgs', 'Ashwagandha-Honey-6', 'Ashwagandha-Honey-6.jpg', 'image/jpeg', 'media', 'media', 231148, '[]', '[]', '{\"thumb\":true}', '[]', 8, '2025-12-23 04:33:35', '2025-12-23 04:33:35'),
(134, 'App\\Models\\Product', 17, '9b9e8dd6-f9a2-49f0-83f6-59c24cd35b5c', 'gallery_imgs', 'Ashwagandha-Honey-7', 'Ashwagandha-Honey-7.jpg', 'image/jpeg', 'media', 'media', 265207, '[]', '[]', '{\"thumb\":true}', '[]', 9, '2025-12-23 04:33:35', '2025-12-23 04:33:36'),
(135, 'App\\Models\\Product', 18, '117e17c6-4623-4344-84cd-c8a6427128df', 'main_img', 'Royal-Jelly-Honey-5', 'Royal-Jelly-Honey-5.jpg', 'image/jpeg', 'media', 'media', 467683, '[]', '[]', '{\"thumb\":true}', '[]', 1, '2025-12-23 04:36:34', '2025-12-23 04:36:34'),
(136, 'App\\Models\\Product', 18, '95ef6960-3615-48fe-83be-331a53036a19', 'gallery_imgs', 'Royal-Jelly-Honey-1', 'Royal-Jelly-Honey-1.jpg', 'image/jpeg', 'media', 'media', 417589, '[]', '[]', '{\"thumb\":true}', '[]', 2, '2025-12-23 04:36:34', '2025-12-23 04:36:35'),
(137, 'App\\Models\\Product', 18, '04476426-c245-4885-8203-f683b27537ba', 'gallery_imgs', 'Royal-Jelly-Honey-2', 'Royal-Jelly-Honey-2.jpg', 'image/jpeg', 'media', 'media', 445802, '[]', '[]', '{\"thumb\":true}', '[]', 3, '2025-12-23 04:36:35', '2025-12-23 04:36:35'),
(138, 'App\\Models\\Product', 18, 'c12260aa-e955-4d4f-96c9-a4ea4f6cdcfe', 'gallery_imgs', 'Royal-Jelly-Honey-3', 'Royal-Jelly-Honey-3.jpg', 'image/jpeg', 'media', 'media', 394924, '[]', '[]', '{\"thumb\":true}', '[]', 4, '2025-12-23 04:36:35', '2025-12-23 04:36:36'),
(139, 'App\\Models\\Product', 18, 'fdb8b17b-405a-42a4-ae48-5f57a4ff143e', 'gallery_imgs', 'Royal-Jelly-Honey-4', 'Royal-Jelly-Honey-4.jpg', 'image/jpeg', 'media', 'media', 401392, '[]', '[]', '{\"thumb\":true}', '[]', 5, '2025-12-23 04:36:36', '2025-12-23 04:36:36'),
(140, 'App\\Models\\Product', 18, 'ee06021f-a6ad-4e60-8897-10dca67f9bb5', 'gallery_imgs', 'Royal-Jelly-Honey-5', 'Royal-Jelly-Honey-5.jpg', 'image/jpeg', 'media', 'media', 467683, '[]', '[]', '{\"thumb\":true}', '[]', 6, '2025-12-23 04:36:36', '2025-12-23 04:36:37'),
(141, 'App\\Models\\Product', 18, 'cef6df9c-4507-48b6-a187-e06b4ad0f493', 'gallery_imgs', 'Royal-Jelly-Honey-6', 'Royal-Jelly-Honey-6.jpg', 'image/jpeg', 'media', 'media', 465125, '[]', '[]', '{\"thumb\":true}', '[]', 7, '2025-12-23 04:36:37', '2025-12-23 04:36:37'),
(142, 'App\\Models\\Product', 18, 'a23679f8-a331-4ed5-9b70-8c4f35363529', 'gallery_imgs', 'Royal-Jelly-Honey-7', 'Royal-Jelly-Honey-7.jpg', 'image/jpeg', 'media', 'media', 580776, '[]', '[]', '{\"thumb\":true}', '[]', 8, '2025-12-23 04:36:37', '2025-12-23 04:36:38'),
(143, 'App\\Models\\Product', 19, '04cd5b8d-6992-400a-b34f-45351e665753', 'main_img', 'Shilajit-Honey-front', 'Shilajit-Honey-front.jpg', 'image/jpeg', 'media', 'media', 565606, '[]', '[]', '{\"thumb\":true}', '[]', 1, '2025-12-23 04:38:43', '2025-12-23 04:38:45'),
(144, 'App\\Models\\Product', 19, '3e93d4aa-916a-410f-9387-027ce8eb6b30', 'gallery_imgs', 'Shilajit-Honey-back', 'Shilajit-Honey-back.jpg', 'image/jpeg', 'media', 'media', 571627, '[]', '[]', '{\"thumb\":true}', '[]', 2, '2025-12-23 04:38:45', '2025-12-23 04:38:46'),
(145, 'App\\Models\\Product', 19, 'fe29ff8d-0896-4f93-912c-39341e073895', 'gallery_imgs', 'Shilajit-Honey-back-1', 'Shilajit-Honey-back-1.jpg', 'image/jpeg', 'media', 'media', 595684, '[]', '[]', '{\"thumb\":true}', '[]', 3, '2025-12-23 04:38:46', '2025-12-23 04:38:46'),
(146, 'App\\Models\\Product', 19, '9da70a03-30cb-4968-aaa0-05e271658d32', 'gallery_imgs', 'Shilajit-Honey-box', 'Shilajit-Honey-box.jpg', 'image/jpeg', 'media', 'media', 427351, '[]', '[]', '{\"thumb\":true}', '[]', 4, '2025-12-23 04:38:46', '2025-12-23 04:38:47'),
(147, 'App\\Models\\Product', 19, '27c910d6-3060-4162-8a48-8f3c6eb507c9', 'gallery_imgs', 'Shilajit-Honey-front', 'Shilajit-Honey-front.jpg', 'image/jpeg', 'media', 'media', 565606, '[]', '[]', '{\"thumb\":true}', '[]', 5, '2025-12-23 04:38:47', '2025-12-23 04:38:47'),
(148, 'App\\Models\\Product', 19, '20dfe838-7548-446b-a828-63e669f32259', 'gallery_imgs', 'Shilajit-Honey-front-1', 'Shilajit-Honey-front-1.jpg', 'image/jpeg', 'media', 'media', 531338, '[]', '[]', '{\"thumb\":true}', '[]', 6, '2025-12-23 04:38:47', '2025-12-23 04:38:48'),
(149, 'App\\Models\\Product', 19, '8dc81bd1-3c4e-4197-8f51-158c5d000b42', 'gallery_imgs', 'Shilajit-Honey-top', 'Shilajit-Honey-top.jpg', 'image/jpeg', 'media', 'media', 595981, '[]', '[]', '{\"thumb\":true}', '[]', 7, '2025-12-23 04:38:48', '2025-12-23 04:38:48'),
(150, 'App\\Models\\Product', 20, '669325c6-ade4-4ec2-8001-07c4e9540ad1', 'main_img', 'Honey-with-Nuts-Saffron front', 'Honey-with-Nuts-Saffron-front.jpg', 'image/jpeg', 'media', 'media', 726502, '[]', '[]', '{\"thumb\":true}', '[]', 1, '2025-12-23 23:32:13', '2025-12-23 23:32:14'),
(151, 'App\\Models\\Product', 20, 'baba6f16-e754-4e14-ba17-666fab187a8d', 'gallery_imgs', 'Honey-with-Nuts-Saffron front', 'Honey-with-Nuts-Saffron-front.jpg', 'image/jpeg', 'media', 'media', 726502, '[]', '[]', '{\"thumb\":true}', '[]', 2, '2025-12-23 23:32:15', '2025-12-23 23:32:15'),
(152, 'App\\Models\\Product', 20, '2bf76f67-79a3-45bf-9e6b-cabc5b4f0de5', 'gallery_imgs', 'Honey-with-Nuts-Saffron', 'Honey-with-Nuts-Saffron.jpg', 'image/jpeg', 'media', 'media', 801630, '[]', '[]', '{\"thumb\":true}', '[]', 3, '2025-12-23 23:32:15', '2025-12-23 23:32:16'),
(153, 'App\\Models\\Product', 20, 'd2c4f91d-2527-493c-a19e-936fdef9530f', 'gallery_imgs', 'Honey-with-Nuts-Saffron-back', 'Honey-with-Nuts-Saffron-back.jpg', 'image/jpeg', 'media', 'media', 918912, '[]', '[]', '{\"thumb\":true}', '[]', 4, '2025-12-23 23:32:16', '2025-12-23 23:32:16'),
(154, 'App\\Models\\Product', 20, 'cfbefc6b-68d9-4bfc-9e1a-9cc9214ca558', 'gallery_imgs', 'Honey-with-Nuts-Saffron-Top', 'Honey-with-Nuts-Saffron-Top.jpg', 'image/jpeg', 'media', 'media', 776240, '[]', '[]', '{\"thumb\":true}', '[]', 5, '2025-12-23 23:32:16', '2025-12-23 23:32:17'),
(155, 'App\\Models\\Banners', 3, '024c6c93-4f77-4529-b4a0-ec4a81e8d9b6', 'main_img', 'Honey-with-Nuts-Saffron-Top', 'Honey-with-Nuts-Saffron-Top.jpg', 'image/jpeg', 'media', 'media', 776240, '[]', '[]', '{\"thumb\":true}', '[]', 1, '2025-12-24 00:06:39', '2025-12-24 00:06:42'),
(156, 'App\\Models\\Banners', 3, '30d727fd-e625-453c-8d70-6eee4915f5e0', 'mobile_img', 'Honey-with-Nuts-Saffron-back', 'Honey-with-Nuts-Saffron-back.jpg', 'image/jpeg', 'media', 'media', 918912, '[]', '[]', '{\"thumb\":true}', '[]', 2, '2025-12-24 00:06:42', '2025-12-24 00:06:44'),
(157, 'App\\Models\\ComboProduct', 3, 'c2f17cba-f57c-4651-86cf-9478e24a07b4', 'main_img', 'Honey-with-Nuts-Saffron', 'Honey-with-Nuts-Saffron.jpg', 'image/jpeg', 'media', 'media', 801630, '[]', '[]', '{\"thumb\":true}', '[]', 1, '2025-12-24 00:07:23', '2025-12-24 00:07:24'),
(158, 'App\\Models\\Product', 21, '39f84927-18b9-4b26-8559-821334f49d8b', 'main_img', 'Honey-Chilli-Sauce-front', 'Honey-Chilli-Sauce-front.jpg', 'image/jpeg', 'media', 'media', 435417, '[]', '[]', '{\"thumb\":true}', '[]', 1, '2025-12-24 00:21:47', '2025-12-24 00:21:48'),
(159, 'App\\Models\\Product', 21, 'cbb8edc9-b87f-4d72-8c65-1c58d9fa9c48', 'gallery_imgs', 'Honey-Chilli-Sauce-back', 'Honey-Chilli-Sauce-back.jpg', 'image/jpeg', 'media', 'media', 445757, '[]', '[]', '{\"thumb\":true}', '[]', 2, '2025-12-24 00:21:49', '2025-12-24 00:21:50'),
(160, 'App\\Models\\Product', 21, '659a0025-2a6d-4b10-b552-159c0cb0f7a5', 'gallery_imgs', 'Honey-Chilli-Sauce-front', 'Honey-Chilli-Sauce-front.jpg', 'image/jpeg', 'media', 'media', 435417, '[]', '[]', '{\"thumb\":true}', '[]', 3, '2025-12-24 00:21:50', '2025-12-24 00:21:51'),
(161, 'App\\Models\\Product', 21, 'ea07a600-c99a-4b4c-aa99-28462111db06', 'gallery_imgs', 'Honey-Chilli-Sauce-side', 'Honey-Chilli-Sauce-side.jpg', 'image/jpeg', 'media', 'media', 457091, '[]', '[]', '{\"thumb\":true}', '[]', 4, '2025-12-24 00:21:51', '2025-12-24 00:21:52'),
(162, 'App\\Models\\Product', 21, 'f2fd01d7-1524-41d5-ae8e-4bae7ea1c622', 'gallery_imgs', 'Honey-Chilli-Sauce-side-1', 'Honey-Chilli-Sauce-side-1.jpg', 'image/jpeg', 'media', 'media', 389121, '[]', '[]', '{\"thumb\":true}', '[]', 5, '2025-12-24 00:21:52', '2025-12-24 00:21:53'),
(163, 'App\\Models\\Product', 21, 'd2df7d25-4bb5-4dc1-a321-88bafa00d273', 'gallery_imgs', 'Honey-Chilli-Sauce-side-2', 'Honey-Chilli-Sauce-side-2.jpg', 'image/jpeg', 'media', 'media', 398353, '[]', '[]', '{\"thumb\":true}', '[]', 6, '2025-12-24 00:21:54', '2025-12-24 00:21:55'),
(164, 'App\\Models\\Product', 21, '40c21b31-6b78-4f40-ae3f-e250a85d19d1', 'gallery_imgs', 'Honey-Chilli-Sauce-top', 'Honey-Chilli-Sauce-top.jpg', 'image/jpeg', 'media', 'media', 412260, '[]', '[]', '{\"thumb\":true}', '[]', 7, '2025-12-24 00:21:55', '2025-12-24 00:21:55'),
(165, 'App\\Models\\Product', 22, 'a4dba373-65b1-41b1-851d-4d24e1224586', 'main_img', 'Tomato-Honey-Kalonji-Sauce', 'Tomato-Honey-Kalonji-Sauce.jpg', 'image/jpeg', 'media', 'media', 457828, '[]', '[]', '{\"thumb\":true}', '[]', 1, '2025-12-24 00:27:22', '2025-12-24 00:27:23'),
(166, 'App\\Models\\Product', 22, '0d29ee79-ed98-4285-a872-a7946fd13d73', 'gallery_imgs', 'Tomato-Honey-Kalonji-Sauce', 'Tomato-Honey-Kalonji-Sauce.jpg', 'image/jpeg', 'media', 'media', 457828, '[]', '[]', '{\"thumb\":true}', '[]', 2, '2025-12-24 00:27:23', '2025-12-24 00:27:25'),
(167, 'App\\Models\\Product', 22, 'ce8463e7-b67c-4d87-b089-025e22894ecd', 'gallery_imgs', 'Tomato-Honey-Kalonji-Sauce-back', 'Tomato-Honey-Kalonji-Sauce-back.jpg', 'image/jpeg', 'media', 'media', 376132, '[]', '[]', '{\"thumb\":true}', '[]', 3, '2025-12-24 00:27:25', '2025-12-24 00:27:26'),
(168, 'App\\Models\\Product', 22, '50b80d22-3070-469b-9a31-11d77b67f2ae', 'gallery_imgs', 'Tomato-Honey-Kalonji-Sauce-side', 'Tomato-Honey-Kalonji-Sauce-side.jpg', 'image/jpeg', 'media', 'media', 458529, '[]', '[]', '{\"thumb\":true}', '[]', 4, '2025-12-24 00:27:26', '2025-12-24 00:27:27'),
(169, 'App\\Models\\Product', 22, '5330d7d3-bd0f-4a62-b16d-bdb46e0c65f5', 'gallery_imgs', 'Tomato-Honey-Kalonji-Sauce-top', 'Tomato-Honey-Kalonji-Sauce-top.jpg', 'image/jpeg', 'media', 'media', 434283, '[]', '[]', '{\"thumb\":true}', '[]', 5, '2025-12-24 00:27:27', '2025-12-24 00:27:28'),
(170, 'App\\Models\\Banners', 4, '0c25a82f-ac5b-45e3-914b-b70ef16af91e', 'main_img', '1sgt', '1sgt.webp', 'image/webp', 'media', 'media', 127646, '[]', '[]', '{\"thumb\":true}', '[]', 1, '2025-12-24 00:43:39', '2025-12-24 00:43:39'),
(171, 'App\\Models\\Banners', 4, 'c538f24c-f50c-41be-9c57-44a29613d8e8', 'mobile_img', '1sgt', '1sgt.webp', 'image/webp', 'media', 'media', 127646, '[]', '[]', '{\"thumb\":true}', '[]', 2, '2025-12-24 00:43:40', '2025-12-24 00:43:41');

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
(4, '2025_02_08_102719_create_product_features_table', 1),
(5, '2025_05_15_075554_create_categories_table', 1),
(6, '2025_05_15_080247_create_brands_table', 1),
(7, '2025_05_15_080936_create_sub_categories_table', 1),
(8, '2025_05_15_104354_create_products_table', 1),
(9, '2025_05_15_120906_create_media_table', 1),
(10, '2025_05_23_065039_create_stock_details_table', 1),
(11, '2025_05_24_075138_create_personal_access_tokens_table', 1),
(12, '2025_06_06_062844_create_product_requests_table', 1),
(13, '2025_06_09_070749_create_customers_table', 1),
(14, '2025_06_14_060451_create_carts_table', 1),
(15, '2025_06_14_060459_create_orders_table', 1),
(16, '2025_06_14_060505_create_order_details_table', 1),
(17, '2025_06_18_060057_create_order_histories_table', 1),
(18, '2025_06_21_134234_create_addresses_table', 1),
(19, '2025_07_18_100640_create_subscribe_forms_table', 1),
(20, '2025_07_18_114719_create_contact_forms_table', 1),
(21, '2025_07_23_055503_create_blogs_table', 1),
(22, '2025_07_23_102052_create_policies_table', 1),
(23, '2025_07_29_044059_create_comboproducts_table', 1),
(24, '2025_08_20_060905_create_events_table', 1),
(25, '2025_09_09_060710_create_botteltypes_table', 2),
(26, '2025_09_09_061303_create_manufacturers_table', 2),
(27, '2025_01_30_080056_create_home_sliders_table', 3),
(28, '2025_03_28_111659_create_policy_pages_table', 4),
(29, '2025_03_31_081059_create_product_reviews_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_by_id` varchar(255) DEFAULT NULL,
  `created_by_role` varchar(255) DEFAULT NULL,
  `customer_id` varchar(255) DEFAULT NULL,
  `order_no` varchar(255) DEFAULT NULL,
  `f_name` varchar(255) DEFAULT NULL,
  `l_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `address_1` varchar(255) DEFAULT NULL,
  `address_2` varchar(255) DEFAULT NULL,
  `pincode` varchar(255) DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL,
  `order_status` varchar(255) DEFAULT 'Pending',
  `payment_method` varchar(255) DEFAULT NULL,
  `payment_status` varchar(255) DEFAULT 'Pending',
  `sub_total` varchar(255) DEFAULT '0',
  `shipping_cost` varchar(255) DEFAULT '0',
  `total_tax_amount` varchar(255) DEFAULT '0',
  `discount` varchar(255) DEFAULT '0',
  `grand_total` varchar(255) DEFAULT '0',
  `deleted_at` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_by_id` varchar(255) DEFAULT NULL,
  `created_by_role` varchar(255) DEFAULT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `customer_id` varchar(255) DEFAULT NULL,
  `order_id` varchar(255) DEFAULT NULL,
  `product_id` varchar(255) DEFAULT NULL,
  `category_id` varchar(255) DEFAULT NULL,
  `sub_category_id` varchar(255) DEFAULT NULL,
  `brand_id` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT '0',
  `qty` varchar(255) DEFAULT '1',
  `total_amount` varchar(255) DEFAULT '0',
  `tax_rate` varchar(255) DEFAULT '0',
  `tax_amount` varchar(255) DEFAULT '0',
  `deleted_at` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_histories`
--

CREATE TABLE `order_histories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_by_id` varchar(255) DEFAULT NULL,
  `order_id` varchar(255) DEFAULT NULL,
  `order_status` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `remarks` varchar(255) DEFAULT NULL,
  `deleted_at` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `policies`
--

CREATE TABLE `policies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_by_id` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `is_featured` tinyint(1) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `policy_pages`
--

CREATE TABLE `policy_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_by_id` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `deleted_at` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_by_id` varchar(255) DEFAULT NULL,
  `code` varchar(33) DEFAULT NULL,
  `sku` varchar(255) DEFAULT NULL,
  `brand_id` varchar(255) DEFAULT NULL,
  `category_id` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `casepack` varchar(255) DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `mrp_price` varchar(255) DEFAULT NULL,
  `sale_price` varchar(255) DEFAULT NULL,
  `hsn_code` varchar(255) DEFAULT NULL,
  `gst_rate` varchar(11) DEFAULT NULL,
  `product_weight` varchar(255) DEFAULT NULL,
  `length` varchar(11) DEFAULT NULL,
  `width` varchar(11) DEFAULT NULL,
  `height` varchar(11) DEFAULT NULL,
  `product_shelf_life` varchar(255) DEFAULT NULL,
  `ingredients` longtext DEFAULT NULL,
  `allergent_info` longtext DEFAULT NULL,
  `bottel_type` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `is_featured` varchar(11) DEFAULT NULL,
  `is_trending` varchar(11) DEFAULT NULL,
  `enable_product_benefits` varchar(255) DEFAULT NULL,
  `enable_product_features` varchar(255) DEFAULT NULL,
  `product_benefits_img` text DEFAULT NULL,
  `short_description` longtext DEFAULT NULL,
  `description` text DEFAULT NULL,
  `deleted_at` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `created_by_id`, `code`, `sku`, `brand_id`, `category_id`, `name`, `slug`, `casepack`, `quantity`, `mrp_price`, `sale_price`, `hsn_code`, `gst_rate`, `product_weight`, `length`, `width`, `height`, `product_shelf_life`, `ingredients`, `allergent_info`, `bottel_type`, `status`, `is_featured`, `is_trending`, `enable_product_benefits`, `enable_product_features`, `product_benefits_img`, `short_description`, `description`, `deleted_at`, `created_at`, `updated_at`) VALUES
(3, '1', 'P-003', NULL, '1', '3', 'Acacia Lite Colour', 'acacia-lite-colour', '12', '100', '799', '0.00', '4090000', '5', '500GM', '10', '13.5', '11', '24 Months', NULL, NULL, 'Square Glass', '1', '1', '1', '0', '0', NULL, 'Nestled in the serene and pristine Himalayan valleys, where abundant flora thrives, lies the origin of Raw of Acacia honey. Made by bees from the nectar-rich white flowers of the native Acacia (Robinia pseudoacacia) trees, this exquisite honey boasts a pleasant pale yellow hue and unrivaled clarity. Collected in the untouched meadows, it offers a pure, unprocessed, and nutrient-rich treasure that provides immense health benefits and promotes overall well-being. Indulge in the velvety texture, warm aroma, and amber-colored sweetness of this rarity harvested only in small batches every year', '<p>Nestled in the serene and pristine Himalayan valleys, where abundant flora thrives, lies the origin of Raw of Acacia honey. Made by bees from the nectar-rich white flowers of the native Acacia (Robinia pseudoacacia) trees, this exquisite honey boasts a pleasant pale yellow hue and unrivaled clarity. Collected in the untouched meadows, it offers a pure, unprocessed, and nutrient-rich treasure that provides immense health benefits and promotes overall well-being. Indulge in the velvety texture, warm aroma, and amber-colored sweetness of this rarity harvested only in small batches every year.</p>\r\n\r\n<p><strong>Why is Acacia honey rare?:</strong>&nbsp;Raw Acacia honey is a prized rarity, made by bees from the elusive nectars of the beautiful and fragrant white and pale yellow flowers of Robinia pseudoacacia (a special variety of Babool), harvested in small batches for a very limited period each year. Its exquisite taste and limited availability make it a coveted delicacy sought after by connoisseurs.</p>', '2025-12-23 06:25:37', '2025-09-09 04:43:14', '2025-12-23 00:55:37'),
(6, '1', 'P-006', NULL, '1', '3', 'Organic 3', 'organic-3', '12', '100', '649', '0.00', '4090000', '5', '500GM', '10', '13.5', '11', '24 Months', NULL, NULL, 'Square Glass', '1', '1', '1', '0', '0', NULL, '100% Pure & Natural Honey – straight from the beehives, unprocessed, rich in taste, and full of natural energy', '<p>Our <strong>100% Pure &amp; Natural Honey</strong> is collected directly from beehives and carefully packed without any adulteration. It retains all its natural nutrients, antioxidants, and medicinal properties, making it a perfect health companion.</p>\r\n\r\n<p>✅ Boosts Immunity &amp; Strength<br />\r\n✅ Natural Sweetener for Tea, Milk, Bread, Salads &amp; Desserts<br />\r\n✅ Rich in Energy &ndash; Keeps you active all day<br />\r\n✅ No Added Sugar, No Preservatives, No Chemicals</p>\r\n\r\n<p>Whether you use it as a healthy alternative to sugar or as an ayurvedic remedy, this pure honey makes your lifestyle naturally sweet and wholesome.&quot;</p>', '2025-12-23 06:25:34', '2025-09-09 05:01:27', '2025-12-23 00:55:34'),
(7, '1', 'P-007', 'Hexhive Honey Black Forest 500gm', '1', '3', 'Honey Black Forest', 'honey-black-forest', '12', '100', '599', '599', '4090000', '5', '500GM', '10', '13.5', '11', '24 Months', NULL, NULL, 'Square Glass', '1', '0', '0', '0', '0', NULL, '100% Pure & Natural Honey – straight from the beehives, unprocessed, rich in taste, and full of natural energy.', '<p>Our <strong>100% Pure &amp; Natural Honey</strong> is collected directly from beehives and carefully packed without any adulteration. It retains all its natural nutrients, antioxidants, and medicinal properties, making it a perfect health companion.</p>\r\n\r\n<p>✅ Boosts Immunity &amp; Strength<br />\r\n✅ Natural Sweetener for Tea, Milk, Bread, Salads &amp; Desserts<br />\r\n✅ Rich in Energy &ndash; Keeps you active all day<br />\r\n✅ No Added Sugar, No Preservatives, No Chemicals</p>\r\n\r\n<p>Whether you use it as a healthy alternative to sugar or as an ayurvedic remedy, this pure honey makes your lifestyle naturally sweet and wholesome.&quot;</p>', NULL, '2025-09-09 05:05:55', '2025-12-23 23:34:10'),
(8, '1', 'P-008', 'Hexhive HONEY (Spring Blossom) 500gm', '1', '3', 'HONEY (Spring Blossom)', 'honey-spring-blossom', '12', '100', '549', '549', '4090000', '5', '500GM', '10', '13.5', '11', '24 Months', NULL, NULL, 'Square Glass', '1', '0', '0', '0', '0', NULL, '100% Pure & Natural Honey – straight from the beehives, unprocessed, rich in taste, and full of natural energy.', '<p>Our <strong>100% Pure &amp; Natural Honey</strong> is collected directly from beehives and carefully packed without any adulteration. It retains all its natural nutrients, antioxidants, and medicinal properties, making it a perfect health companion.</p>\r\n\r\n<p>✅ Boosts Immunity &amp; Strength<br />\r\n✅ Natural Sweetener for Tea, Milk, Bread, Salads &amp; Desserts<br />\r\n✅ Rich in Energy &ndash; Keeps you active all day<br />\r\n✅ No Added Sugar, No Preservatives, No Chemicals</p>\r\n\r\n<p>Whether you use it as a healthy alternative to sugar or as an ayurvedic remedy, this pure honey makes your lifestyle naturally sweet and wholesome.</p>', NULL, '2025-09-09 05:09:22', '2025-12-23 23:34:17'),
(9, '1', 'P-009', 'Hexhive Van Tulsi Honey 500GM', '1', '3', 'Van Tulsi', 'van-tulsi', '12', '100', '799', '799', '4090000', '5', '500GM', '10', '13.5', '11', '24 Months', NULL, NULL, 'Square Glass', '1', '0', '0', '0', '0', NULL, '100% Pure & Natural Honey – straight from the beehives, unprocessed, rich in taste, and full of natural energy', '<p>Our <strong>100% Pure &amp; Natural Honey</strong> is collected directly from beehives and carefully packed without any adulteration. It retains all its natural nutrients, antioxidants, and medicinal properties, making it a perfect health companion.</p>\r\n\r\n<p>✅ Boosts Immunity &amp; Strength<br />\r\n✅ Natural Sweetener for Tea, Milk, Bread, Salads &amp; Desserts<br />\r\n✅ Rich in Energy &ndash; Keeps you active all day<br />\r\n✅ No Added Sugar, No Preservatives, No Chemicals</p>\r\n\r\n<p>Whether you use it as a healthy alternative to sugar or as an ayurvedic remedy, this pure honey makes your lifestyle naturally sweet and wholesome.</p>', NULL, '2025-09-09 05:12:30', '2025-12-23 23:34:01'),
(10, '1', 'P-010', 'Hexhive Ginger cubes 300GM | 5GM/Piece', '2', '4', 'Ginger cubes', 'ginger-cubes', '12|60Cubes/PACK', '100', '699', '699', '17049090', '18', '300GM | 5GM/Piece', '10', '13.5', '11', '6 Months', NULL, NULL, 'Square Glass', '1', '0', '0', '0', '0', NULL, '100% Pure & Natural Honey – straight from the beehives, unprocessed, rich in taste, and full of natural energy', '<p>Our <strong>100% Pure &amp; Natural Honey</strong> is collected directly from beehives and carefully packed without any adulteration. It retains all its natural nutrients, antioxidants, and medicinal properties, making it a perfect health companion.</p>\r\n\r\n<p>✅ Boosts Immunity &amp; Strength<br />\r\n✅ Natural Sweetener for Tea, Milk, Bread, Salads &amp; Desserts<br />\r\n✅ Rich in Energy &ndash; Keeps you active all day<br />\r\n✅ No Added Sugar, No Preservatives, No Chemicals</p>\r\n\r\n<p>Whether you use it as a healthy alternative to sugar or as an ayurvedic remedy, this pure honey makes your lifestyle naturally sweet and wholesome.</p>', NULL, '2025-09-09 05:23:14', '2025-12-23 23:34:24'),
(11, '1', 'P-011', 'Hexhive Shilajit Cubes 300gm', '2', '4', 'Shilajit Cubes', 'shilajit-cubes', '12|60Cubes/PACK', '100', '999', '999', '17049090', '18', '300GM | 5GM/Piece', '10', '13.5', '11', '6 Months', NULL, NULL, 'Square Glass', '1', '0', '0', '0', '0', NULL, '100% Pure & Natural Honey – straight from the beehives, unprocessed, rich in taste, and full of natural energy.', '<p>Our <strong>100% Pure &amp; Natural Honey</strong> is collected directly from beehives and carefully packed without any adulteration. It retains all its natural nutrients, antioxidants, and medicinal properties, making it a perfect health companion.</p>\r\n\r\n<p>✅ Boosts Immunity &amp; Strength<br />\r\n✅ Natural Sweetener for Tea, Milk, Bread, Salads &amp; Desserts<br />\r\n✅ Rich in Energy &ndash; Keeps you active all day<br />\r\n✅ No Added Sugar, No Preservatives, No Chemicals</p>\r\n\r\n<p>Whether you use it as a healthy alternative to sugar or as an ayurvedic remedy, this pure honey makes your lifestyle naturally sweet and wholesome.</p>', NULL, '2025-09-09 05:26:09', '2025-12-23 23:33:54'),
(12, '1', 'P-012', 'Hexhive Turmeric Honey Varietal Honey 250GM', '1', '5', 'Turmeric Honey', 'turmeric-honey', '12', '100', '799', '799', '17029030', '5', '250GM', '8', '8', '8', '18 Months', NULL, NULL, 'Pet Mono carton', '0', '0', '0', '0', '0', NULL, '100% Pure & Natural Honey – straight from the beehives, unprocessed, rich in taste, and full of natural energy.', '<p>Our <strong>100% Pure &amp; Natural Honey</strong> is collected directly from beehives and carefully packed without any adulteration. It retains all its natural nutrients, antioxidants, and medicinal properties, making it a perfect health companion.</p>\r\n\r\n<p>✅ Boosts Immunity &amp; Strength<br />\r\n✅ Natural Sweetener for Tea, Milk, Bread, Salads &amp; Desserts<br />\r\n✅ Rich in Energy &ndash; Keeps you active all day<br />\r\n✅ No Added Sugar, No Preservatives, No Chemicals</p>\r\n\r\n<p>Whether you use it as a healthy alternative to sugar or as an ayurvedic remedy, this pure honey makes your lifestyle naturally sweet and wholesome.</p>', NULL, '2025-09-09 05:32:00', '2025-12-23 23:33:47'),
(13, '1', 'P-013', 'Hexhive Organic Honey 500GM', '2', '3', 'Organic Honey', 'organic-honey', '12', '1', '649', '649', '4090000', '5', '500GM', '10', '13.5', '11', '24 Months', NULL, NULL, 'Square Glass', '1', '0', '0', '1', '1', NULL, 'Organic Honey', '<p>Organic Honey</p>', NULL, '2025-12-23 03:58:03', '2025-12-23 23:33:39'),
(14, '1', 'P-014', 'Hexhive Acacia Lite Honey 500gm', '2', '3', 'Acacia Lite', 'acacia-lite', '12', '1', '799', '799', '4090000', '5', '500GM', '10', '13.5', '11', '24 Months', NULL, NULL, 'Square Glass', '1', '0', '0', '1', '1', NULL, 'Acacia Lite', '<p>Acacia Lite</p>', NULL, '2025-12-23 04:01:56', '2025-12-23 23:33:12'),
(15, '1', 'P-015', 'Hexhive Moringa Honey 250gm', '1', '4', 'Moringa Honey', 'moringa-honey', '12', '1', '999', '999', '17029030', '5', '250GM', '8', '8', '8', '18 Months', NULL, NULL, 'Pet Mono carton', '1', '0', '0', '0', '0', NULL, 'Moringa Honey', '<p>Moringa Honey</p>', NULL, '2025-12-23 04:26:59', '2025-12-23 23:33:02'),
(16, '1', 'P-016', 'Hexhive Ginseng Honey 250gm', '1', '5', 'Ginseng Honey', 'ginseng-honey', '12', '1', '999', '999', '17029030', '18', '250GM', '8', '8', '8', '18 Months', NULL, NULL, 'Pet Mono carton', '1', '0', '0', '0', '1', NULL, 'Ginseng Honey', '<p>Ginseng Honey</p>', NULL, '2025-12-23 04:29:24', '2025-12-23 23:32:54'),
(17, '1', 'P-017', 'Hexhive Ashwagandha Honey 250gm', '1', '5', 'Ashwagandha Honey', 'ashwagandha-honey', '12', '1', '999', '999', '17029030', '5', '250GM', '8', '8', '8', '18 Months', NULL, NULL, 'Pet Mono carton', '1', '0', '0', '0', '0', NULL, 'Ashwagandha Honey', '<p>Ashwagandha Honey</p>', NULL, '2025-12-23 04:33:29', '2025-12-23 23:32:46'),
(18, '1', 'P-018', 'Hexhive Royal Jelly Honey 250gm', '1', '5', 'Royal Jelly Honey', 'royal-jelly-honey', '12', '1', '1499', '1499', '17029030', '18', '250GM', '8', '8', '8', '18 Months', NULL, NULL, 'Pet Mono carton', '1', '0', '0', '0', '0', NULL, 'Royal Jelly Honey', '<p>Royal Jelly Honey</p>', NULL, '2025-12-23 04:36:33', '2025-12-23 23:32:39'),
(19, '1', 'P-019', 'Hexhive Shilajit Honey 250gm', '1', '5', 'Shilajit Honey', 'shilajit-honey', '12', '1', '1099', '1099', '17029030', '18', '250GM', '8', '8', '8', '18 Months', NULL, NULL, 'Pet Mono carton', '1', '0', '0', '0', '0', NULL, 'Shilajit Honey', '<p>Shilajit Honey</p>', NULL, '2025-12-23 04:38:42', '2025-12-23 23:32:31'),
(20, '1', 'P-020', 'Hexhive Saffron Nuts Honey 600GM', '1', '7', 'Saffron Nuts Honey', 'saffron-nuts-honey', '6', '1', '1499', '1499', '8904519100089', '18', '600GM', NULL, NULL, NULL, '18 Months', NULL, NULL, 'Apple Glass Jar', '1', '0', '0', '0', '0', NULL, 'Saffron Nuts Honey', '<p>Saffron Nuts Honey</p>', NULL, '2025-12-23 23:32:11', '2025-12-23 23:32:11'),
(21, '1', 'P-021', 'Hexhive Honey Chilli Sauce 430GM', '2', '8', 'Honey Chilli Sauce', 'honey-chilli-sauce', '12', '1', '499', '499', '21039090', '18', NULL, '6', '6', '19', '12 Months', NULL, NULL, 'Sauce round bottle', '1', '0', '0', '0', '0', NULL, 'Honey Chilli Sauce', '<p>Honey Chilli Sauce&nbsp;</p>', NULL, '2025-12-24 00:21:47', '2025-12-24 00:21:47'),
(22, '1', 'P-022', 'Hexhive Honey Tomato Kalonji Chutney 430gm', '2', '8', 'Honey Tomato Kalonji Chutney', 'honey-tomato-kalonji-chutney', '12', '1', '499', '499', '21039090', '5', '430GM', '6', '6', '19', '12 Months', NULL, NULL, 'Sauce round bottle', '1', '0', '0', '0', '0', NULL, 'Honey Tomato Kalonji Chutney', '<p>Honey Tomato Kalonji Chutney</p>', NULL, '2025-12-24 00:27:22', '2025-12-24 00:27:22');

-- --------------------------------------------------------

--
-- Table structure for table `product_features`
--

CREATE TABLE `product_features` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_by_id` varchar(255) DEFAULT NULL,
  `product_id` text DEFAULT NULL,
  `title` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `img` text DEFAULT NULL,
  `deleted_at` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_requests`
--

CREATE TABLE `product_requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_by_id` varchar(255) DEFAULT NULL,
  `warehouse_id` varchar(255) DEFAULT NULL,
  `brand_id` varchar(255) DEFAULT NULL,
  `category_id` varchar(255) DEFAULT NULL,
  `sub_category_id` varchar(255) DEFAULT NULL,
  `product_id` varchar(255) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `unit` varchar(255) DEFAULT NULL,
  `qty` varchar(255) DEFAULT NULL,
  `prescription_required` varchar(255) DEFAULT 'No',
  `mrp_price` varchar(255) DEFAULT NULL,
  `sale_price` varchar(255) DEFAULT NULL,
  `use_case` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_remarks` text DEFAULT NULL,
  `deleted_at` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_reviews`
--

CREATE TABLE `product_reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_by_id` varchar(255) DEFAULT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `product_id` varchar(255) DEFAULT NULL,
  `rate` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `comment` longtext DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `deleted_at` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('6GfppYMsfXRbXJHN6sWVEMNZpnj27PmPQCed751s', NULL, '192.168.1.5', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTnczRTNaVDk2YXdJYkNWVUNPNkdjWlZvQXp3cUV3WnlkQkNKYWNxbSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Nzc6Imh0dHA6Ly8xOTIuMTY4LjEuNDo4MDAwL2Zyb250X2Fzc2V0cy9pbWFnZXMvbG9nby9sb2dvX2RhcmsxNzU3MzI3MDYyNDAyMTcucG5nIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1766554420),
('PCu3YH2gebRwpPjaGCEHqR8juhZETKTmsEJwl6Az', NULL, '192.168.1.7', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiM1pNR21YckpBdVlEQjUzMnRlYXRkWExpaDA4c1RXUXdkWGY3c216MSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjM6Imh0dHA6Ly8xOTIuMTY4LjEuNDo4MDAwIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1766561031),
('Sf9lUVoeONDgagdJh8MOHpzU9WBuiDwA3uCiHyCm', 1, '192.168.1.10', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiSVRsaVlBZFF5MG5yOWY5NzNwNDFqbEJEUFVWbG5UOE1HZWpkSjg0UyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjM6Imh0dHA6Ly8xOTIuMTY4LjEuNDo4MDAwIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MDp7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czo0OiJhdXRoIjthOjE6e3M6MjE6InBhc3N3b3JkX2NvbmZpcm1lZF9hdCI7aToxNzY2NTUyOTk3O319', 1766561292),
('Ygw5Uo9U1yTgHU7VHyg6VkdRB9lkyRhkGZpmmxYn', 1, '192.168.1.4', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoicGhyS2FMRW5lUlRaczRYMm5xQXcxMUNpZURZaFZ3UWdVd3RBaW9QQSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly8xOTIuMTY4LjEuNDo4MDAwL2FkbWluL3Byb2R1Y3QiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6NDoiYXV0aCI7YToxOntzOjIxOiJwYXNzd29yZF9jb25maXJtZWRfYXQiO2k6MTc2NjU1MjAxODt9fQ==', 1766561278);

-- --------------------------------------------------------

--
-- Table structure for table `stock_details`
--

CREATE TABLE `stock_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_by_id` varchar(255) DEFAULT NULL,
  `warehouse_id` varchar(255) DEFAULT NULL,
  `brand_id` varchar(255) DEFAULT NULL,
  `category_id` varchar(255) DEFAULT NULL,
  `sub_category_id` varchar(255) DEFAULT NULL,
  `product_id` varchar(255) DEFAULT NULL,
  `qty` varchar(255) DEFAULT NULL,
  `in_out` varchar(255) DEFAULT NULL,
  `deleted_at` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stock_details`
--

INSERT INTO `stock_details` (`id`, `created_by_id`, `warehouse_id`, `brand_id`, `category_id`, `sub_category_id`, `product_id`, `qty`, `in_out`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '1', NULL, '1', '3', NULL, '6', '10', 'In', '2025-12-24 05:27:51', '2025-09-16 05:58:00', '2025-12-23 23:57:51'),
(2, '1', NULL, '1', '3', NULL, '7', '12', 'In', NULL, '2025-12-23 23:57:42', '2025-12-23 23:57:42'),
(3, '1', NULL, '1', '3', NULL, '8', '10', 'Out', NULL, '2025-12-23 23:58:01', '2025-12-24 00:03:55'),
(4, '1', NULL, '1', '3', NULL, '8', '10', 'In', NULL, '2025-12-24 01:54:10', '2025-12-24 01:54:10'),
(5, '1', NULL, '1', '3', NULL, '9', '10', 'In', NULL, '2025-12-24 01:54:18', '2025-12-24 01:54:18'),
(6, '1', NULL, '2', '4', NULL, '10', '10', 'In', NULL, '2025-12-24 01:54:23', '2025-12-24 01:54:23'),
(7, '1', NULL, '2', '4', NULL, '11', '10', 'In', NULL, '2025-12-24 01:54:31', '2025-12-24 01:54:31'),
(8, '1', NULL, '1', '5', NULL, '12', '10', 'In', NULL, '2025-12-24 01:54:37', '2025-12-24 01:54:37'),
(9, '1', NULL, '2', '3', NULL, '13', '10', 'In', NULL, '2025-12-24 01:54:42', '2025-12-24 01:54:42'),
(10, '1', NULL, '2', '3', NULL, '14', '10', 'In', NULL, '2025-12-24 01:54:47', '2025-12-24 01:54:47'),
(11, '1', NULL, '1', '4', NULL, '15', '10', 'In', NULL, '2025-12-24 01:54:53', '2025-12-24 01:54:53'),
(12, '1', NULL, '1', '5', NULL, '16', '10', 'In', NULL, '2025-12-24 01:54:58', '2025-12-24 01:54:58'),
(13, '1', NULL, '1', '5', NULL, '17', '10', 'In', NULL, '2025-12-24 01:55:03', '2025-12-24 01:55:03'),
(14, '1', NULL, '1', '5', NULL, '18', '10', 'In', NULL, '2025-12-24 01:55:07', '2025-12-24 01:55:07'),
(15, '1', NULL, '1', '5', NULL, '19', '10', 'In', NULL, '2025-12-24 01:55:13', '2025-12-24 01:55:13'),
(16, '1', NULL, '1', '7', NULL, '20', '10', 'In', NULL, '2025-12-24 01:55:20', '2025-12-24 01:55:20'),
(17, '1', NULL, '2', '8', NULL, '21', '10', 'In', NULL, '2025-12-24 01:55:26', '2025-12-24 01:55:26'),
(18, '1', NULL, '2', '8', NULL, '22', '10', 'In', NULL, '2025-12-24 01:55:31', '2025-12-24 01:55:31');

-- --------------------------------------------------------

--
-- Table structure for table `subscribe_forms`
--

CREATE TABLE `subscribe_forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_by_id` varchar(255) DEFAULT NULL,
  `category_id` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `deleted_at` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_by_id` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `show_password` varchar(255) DEFAULT NULL,
  `role_as` varchar(255) DEFAULT NULL,
  `deleted_at` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `created_by_id`, `name`, `phone`, `email`, `email_verified_at`, `password`, `show_password`, `role_as`, `deleted_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '0', 'Admin', '1234567890', 'admin@gmail.com', '2025-09-04 00:31:26', '$2y$12$SNifurZ3fMci64AraZz9Rej6tGt0agcK5YD7LgOPCQTsunFBhQLKi', 'admin@gmail.com', 'Admin', NULL, 'aBlyd2xdJz', '2025-09-04 00:31:26', '2025-09-04 00:31:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `botteltypes`
--
ALTER TABLE `botteltypes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `botteltypes_slug_unique` (`slug`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `combo_products`
--
ALTER TABLE `combo_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_forms`
--
ALTER TABLE `contact_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `home_sliders`
--
ALTER TABLE `home_sliders`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `manufacturers`
--
ALTER TABLE `manufacturers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `manufacturers_slug_unique` (`slug`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `media_uuid_unique` (`uuid`),
  ADD KEY `media_model_type_model_id_index` (`model_type`,`model_id`),
  ADD KEY `media_order_column_index` (`order_column`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_histories`
--
ALTER TABLE `order_histories`
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
-- Indexes for table `policies`
--
ALTER TABLE `policies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `policy_pages`
--
ALTER TABLE `policy_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_features`
--
ALTER TABLE `product_features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_requests`
--
ALTER TABLE `product_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_reviews`
--
ALTER TABLE `product_reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `stock_details`
--
ALTER TABLE `stock_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribe_forms`
--
ALTER TABLE `subscribe_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
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
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `botteltypes`
--
ALTER TABLE `botteltypes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `combo_products`
--
ALTER TABLE `combo_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact_forms`
--
ALTER TABLE `contact_forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home_sliders`
--
ALTER TABLE `home_sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `manufacturers`
--
ALTER TABLE `manufacturers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=172;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_histories`
--
ALTER TABLE `order_histories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `policies`
--
ALTER TABLE `policies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `policy_pages`
--
ALTER TABLE `policy_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `product_features`
--
ALTER TABLE `product_features`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_requests`
--
ALTER TABLE `product_requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_reviews`
--
ALTER TABLE `product_reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stock_details`
--
ALTER TABLE `stock_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `subscribe_forms`
--
ALTER TABLE `subscribe_forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
