-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2025 at 10:18 AM
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
(1, 1, 'demo', 'demo', NULL, NULL, '1', NULL, '2025-09-16 04:44:16', '2025-09-16 04:46:10'),
(2, 1, 'Honey', 'honey', NULL, NULL, '1', NULL, '2025-09-17 06:02:19', '2025-09-17 06:02:19');

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
(4, '1', 'Outsource', 'outsource', NULL, '1', NULL, '2025-09-09 01:26:06', '2025-09-09 01:26:06');

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
  `customer_id` varchar(255) DEFAULT NULL,
  `product_id` varchar(255) DEFAULT NULL,
  `category_id` varchar(255) DEFAULT NULL,
  `sub_category_id` varchar(255) DEFAULT NULL,
  `brand_id` varchar(255) DEFAULT NULL,
  `pincode` varchar(255) DEFAULT NULL,
  `qty` varchar(255) DEFAULT '1',
  `price` varchar(255) DEFAULT '1',
  `total_amount` varchar(255) DEFAULT '1',
  `deleted_at` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(10, '1', 'Butter', 'butter', NULL, '1', NULL, '2025-09-08 04:40:29', '2025-09-08 04:40:29');

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
(2, NULL, 'demo', '[\"1\"]', '1', NULL, NULL, '2025-09-04 06:14:53', '2025-09-04 06:14:53');

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
(21, 'App\\Models\\Product', 7, '79768326-6a68-47ea-aa2c-193117f50559', 'main_img', '26', '26.png', 'image/png', 'media', 'media', 308245, '[]', '[]', '{\"thumb\":true}', '[]', 1, '2025-09-09 05:05:56', '2025-09-09 05:05:56'),
(22, 'App\\Models\\Product', 7, '7baba193-5d2f-44b3-9f8c-803db16fdcf7', 'gallery_imgs', '5', '5.png', 'image/png', 'media', 'media', 443501, '[]', '[]', '{\"thumb\":true}', '[]', 2, '2025-09-09 05:05:57', '2025-09-09 05:05:57'),
(23, 'App\\Models\\Product', 7, '09e6a27e-27aa-4662-a955-4ef335ad8a7e', 'gallery_imgs', '8', '8.png', 'image/png', 'media', 'media', 376550, '[]', '[]', '{\"thumb\":true}', '[]', 3, '2025-09-09 05:05:58', '2025-09-09 05:05:59'),
(24, 'App\\Models\\Product', 7, '365919c0-282c-4bf5-91e2-df87602fb661', 'gallery_imgs', '11', '11.png', 'image/png', 'media', 'media', 461910, '[]', '[]', '{\"thumb\":true}', '[]', 4, '2025-09-09 05:06:00', '2025-09-09 05:06:00'),
(25, 'App\\Models\\Product', 8, '595fe8ae-3375-47ed-9145-7badffac66d2', 'main_img', '9', '9.png', 'image/png', 'media', 'media', 296525, '[]', '[]', '{\"thumb\":true}', '[]', 1, '2025-09-09 05:09:22', '2025-09-09 05:09:22'),
(26, 'App\\Models\\Product', 8, 'e9fe5fe3-b423-4521-a9ff-9e759f5ff79f', 'gallery_imgs', '2', '2.png', 'image/png', 'media', 'media', 275817, '[]', '[]', '{\"thumb\":true}', '[]', 2, '2025-09-09 05:09:22', '2025-09-09 05:09:23'),
(27, 'App\\Models\\Product', 8, '4368ea64-afba-41a8-b7c6-52014f2fa384', 'gallery_imgs', '12', '12.png', 'image/png', 'media', 'media', 435478, '[]', '[]', '{\"thumb\":true}', '[]', 3, '2025-09-09 05:09:24', '2025-09-09 05:09:24'),
(28, 'App\\Models\\Product', 8, '5e27beab-8dfc-4e65-a558-3968d156fb73', 'gallery_imgs', '19', '19.png', 'image/png', 'media', 'media', 274419, '[]', '[]', '{\"thumb\":true}', '[]', 4, '2025-09-09 05:09:25', '2025-09-09 05:09:26'),
(29, 'App\\Models\\Product', 9, '69890c6f-2bb4-4b08-8ee3-54eecc300b0b', 'main_img', '22', '22.png', 'image/png', 'media', 'media', 295126, '[]', '[]', '{\"thumb\":true}', '[]', 1, '2025-09-09 05:12:30', '2025-09-09 05:12:31'),
(30, 'App\\Models\\Product', 9, '383129e1-15d1-48b7-8ed3-b98bb6a4d9d1', 'gallery_imgs', '9', '9.png', 'image/png', 'media', 'media', 344931, '[]', '[]', '{\"thumb\":true}', '[]', 2, '2025-09-09 05:12:31', '2025-09-09 05:12:31'),
(31, 'App\\Models\\Product', 9, '28116dfb-949d-4ff4-914b-8aa95b468502', 'gallery_imgs', '14', '14.png', 'image/png', 'media', 'media', 337992, '[]', '[]', '{\"thumb\":true}', '[]', 3, '2025-09-09 05:12:32', '2025-09-09 05:12:32'),
(32, 'App\\Models\\Product', 9, 'a2bd5ef9-b75d-4839-b1cd-17b3fda98b21', 'gallery_imgs', '16', '16.png', 'image/png', 'media', 'media', 444062, '[]', '[]', '{\"thumb\":true}', '[]', 4, '2025-09-09 05:12:32', '2025-09-09 05:12:34'),
(33, 'App\\Models\\Product', 10, '00dd4e0d-9777-4740-b9fd-07f4b04cc95c', 'main_img', '25', '25.png', 'image/png', 'media', 'media', 295489, '[]', '[]', '{\"thumb\":true}', '[]', 1, '2025-09-09 05:23:15', '2025-09-09 05:23:15'),
(34, 'App\\Models\\Product', 10, 'f33da8bc-84b7-438c-8559-f9f8e40ecaf1', 'gallery_imgs', '4', '4.png', 'image/png', 'media', 'media', 375557, '[]', '[]', '{\"thumb\":true}', '[]', 2, '2025-09-09 05:23:15', '2025-09-09 05:23:16'),
(35, 'App\\Models\\Product', 10, '997095fc-02f3-4b8d-973d-59d6512d1355', 'gallery_imgs', '9(1)', '9(1).png', 'image/png', 'media', 'media', 450483, '[]', '[]', '{\"thumb\":true}', '[]', 3, '2025-09-09 05:23:16', '2025-09-09 05:23:17'),
(36, 'App\\Models\\Product', 10, '6e2b6130-1346-4cd3-92b6-edf6f10b9719', 'gallery_imgs', '9', '9.png', 'image/png', 'media', 'media', 388577, '[]', '[]', '{\"thumb\":true}', '[]', 4, '2025-09-09 05:23:18', '2025-09-09 05:23:18'),
(37, 'App\\Models\\Product', 11, 'b5828137-b62b-4b15-b27e-1c5621cc5a0a', 'main_img', '19', '19.png', 'image/png', 'media', 'media', 296947, '[]', '[]', '{\"thumb\":true}', '[]', 1, '2025-09-09 05:26:10', '2025-09-09 05:26:10'),
(38, 'App\\Models\\Product', 11, '7197d590-5648-4c84-9d1b-7bceb3146790', 'gallery_imgs', '2', '2.png', 'image/png', 'media', 'media', 469258, '[]', '[]', '{\"thumb\":true}', '[]', 2, '2025-09-09 05:26:10', '2025-09-09 05:26:11'),
(39, 'App\\Models\\Product', 11, 'aab4a631-537a-4498-9d8f-86ebc368b26f', 'gallery_imgs', '12', '12.png', 'image/png', 'media', 'media', 375161, '[]', '[]', '{\"thumb\":true}', '[]', 3, '2025-09-09 05:26:11', '2025-09-09 05:26:12'),
(40, 'App\\Models\\Product', 11, '9cd81d36-019e-4019-a7a9-137867868303', 'gallery_imgs', '18', '18.png', 'image/png', 'media', 'media', 463268, '[]', '[]', '{\"thumb\":true}', '[]', 4, '2025-09-09 05:26:13', '2025-09-09 05:26:13'),
(41, 'App\\Models\\Product', 12, '2eefe09c-27ef-429a-90b7-021d056e8d02', 'main_img', '15', '15.png', 'image/png', 'media', 'media', 283931, '[]', '[]', '{\"thumb\":true}', '[]', 1, '2025-09-09 05:32:01', '2025-09-09 05:32:01'),
(42, 'App\\Models\\Product', 12, '8f20d119-64a3-4027-b280-376c299f11ed', 'gallery_imgs', '13', '13.png', 'image/png', 'media', 'media', 407347, '[]', '[]', '{\"thumb\":true}', '[]', 2, '2025-09-09 05:32:01', '2025-09-09 05:32:02'),
(43, 'App\\Models\\Product', 12, '6e1b864b-d841-43de-a9fd-6cbf542c6e92', 'gallery_imgs', '19', '19.png', 'image/png', 'media', 'media', 475217, '[]', '[]', '{\"thumb\":true}', '[]', 3, '2025-09-09 05:32:03', '2025-09-09 05:32:03'),
(44, 'App\\Models\\Product', 12, 'df408c6c-8b56-45e0-b96e-1a7abf5e7803', 'gallery_imgs', '24', '24.png', 'image/png', 'media', 'media', 395171, '[]', '[]', '{\"thumb\":true}', '[]', 4, '2025-09-09 05:32:03', '2025-09-09 05:32:04'),
(45, 'App\\Models\\Banners', 1, '6c9b1dfc-15a2-4699-84c1-8d804721fead', 'main_img', 'Daco_4763966 (1)', 'Daco_4763966-(1).png', 'image/png', 'media', 'media', 38983, '[]', '[]', '{\"thumb\":true}', '[]', 1, '2025-09-16 04:44:17', '2025-09-16 04:44:19'),
(46, 'App\\Models\\Banners', 1, 'f8b0cc6d-67a4-45ad-990a-4ac2a15c1229', 'mobile_img', 'Daco_4763966 (1)', 'Daco_4763966-(1).png', 'image/png', 'media', 'media', 38983, '[]', '[]', '{\"thumb\":true}', '[]', 2, '2025-09-16 04:44:19', '2025-09-16 04:44:20'),
(47, 'App\\Models\\Blog', 1, '6b134aea-9c0f-4855-9fde-facfadfcee3f', 'main_img', '14305', '14305.jpg', 'image/jpeg', 'media', 'media', 1210129, '[]', '[]', '{\"thumb\":true}', '[]', 1, '2025-09-17 04:41:00', '2025-09-17 04:41:04'),
(48, 'App\\Models\\Banners', 2, 'd65af5d8-c987-404a-b30f-fe45378447da', 'main_img', '2151754429', '2151754429.jpg', 'image/jpeg', 'media', 'media', 538088, '[]', '[]', '{\"thumb\":true}', '[]', 1, '2025-09-17 06:02:20', '2025-09-17 06:02:21'),
(49, 'App\\Models\\Banners', 2, '7b5d6d65-5534-4578-b7d1-e9dd37ef1b21', 'mobile_img', '2151754429', '2151754429.jpg', 'image/jpeg', 'media', 'media', 538088, '[]', '[]', '{\"thumb\":true}', '[]', 2, '2025-09-17 06:02:21', '2025-09-17 06:02:21');

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
(26, '2025_09_09_061303_create_manufacturers_table', 2);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_by_id` varchar(255) DEFAULT NULL,
  `code` varchar(33) DEFAULT NULL,
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

INSERT INTO `products` (`id`, `created_by_id`, `code`, `brand_id`, `category_id`, `name`, `slug`, `casepack`, `quantity`, `mrp_price`, `sale_price`, `hsn_code`, `gst_rate`, `product_weight`, `length`, `width`, `height`, `product_shelf_life`, `ingredients`, `allergent_info`, `bottel_type`, `status`, `is_featured`, `is_trending`, `enable_product_benefits`, `enable_product_features`, `product_benefits_img`, `short_description`, `description`, `deleted_at`, `created_at`, `updated_at`) VALUES
(3, '1', 'P-003', '1', '3', 'Acacia Lite Colour', 'acacia-lite-colour', '12', '100', '799', '0.00', '4090000', '5', '500GM', '10', '13.5', '11', '24 Months', NULL, NULL, 'Square Glass', '1', '1', '1', '0', '0', NULL, 'Nestled in the serene and pristine Himalayan valleys, where abundant flora thrives, lies the origin of Raw of Acacia honey. Made by bees from the nectar-rich white flowers of the native Acacia (Robinia pseudoacacia) trees, this exquisite honey boasts a pleasant pale yellow hue and unrivaled clarity. Collected in the untouched meadows, it offers a pure, unprocessed, and nutrient-rich treasure that provides immense health benefits and promotes overall well-being. Indulge in the velvety texture, warm aroma, and amber-colored sweetness of this rarity harvested only in small batches every year', '<p>Nestled in the serene and pristine Himalayan valleys, where abundant flora thrives, lies the origin of Raw of Acacia honey. Made by bees from the nectar-rich white flowers of the native Acacia (Robinia pseudoacacia) trees, this exquisite honey boasts a pleasant pale yellow hue and unrivaled clarity. Collected in the untouched meadows, it offers a pure, unprocessed, and nutrient-rich treasure that provides immense health benefits and promotes overall well-being. Indulge in the velvety texture, warm aroma, and amber-colored sweetness of this rarity harvested only in small batches every year.</p>\r\n\r\n<p><strong>Why is Acacia honey rare?:</strong>&nbsp;Raw Acacia honey is a prized rarity, made by bees from the elusive nectars of the beautiful and fragrant white and pale yellow flowers of Robinia pseudoacacia (a special variety of Babool), harvested in small batches for a very limited period each year. Its exquisite taste and limited availability make it a coveted delicacy sought after by connoisseurs.</p>', NULL, '2025-09-09 04:43:14', '2025-09-09 04:43:14'),
(6, '1', 'P-006', '1', '3', 'Organic 3', 'organic-3', '12', '100', '649', '0.00', '4090000', '5', '500GM', '10', '13.5', '11', '24 Months', NULL, NULL, 'Square Glass', '1', '1', '1', '0', '0', NULL, '100% Pure & Natural Honey – straight from the beehives, unprocessed, rich in taste, and full of natural energy', '<p>Our <strong>100% Pure &amp; Natural Honey</strong> is collected directly from beehives and carefully packed without any adulteration. It retains all its natural nutrients, antioxidants, and medicinal properties, making it a perfect health companion.</p>\r\n\r\n<p>✅ Boosts Immunity &amp; Strength<br />\r\n✅ Natural Sweetener for Tea, Milk, Bread, Salads &amp; Desserts<br />\r\n✅ Rich in Energy &ndash; Keeps you active all day<br />\r\n✅ No Added Sugar, No Preservatives, No Chemicals</p>\r\n\r\n<p>Whether you use it as a healthy alternative to sugar or as an ayurvedic remedy, this pure honey makes your lifestyle naturally sweet and wholesome.&quot;</p>', NULL, '2025-09-09 05:01:27', '2025-09-09 05:06:48'),
(7, '1', 'P-007', '1', '3', 'Honey Black Forest', 'honey-black-forest', '12', '100', '599', '0.00', '4090000', '5', '500GM', '10', '13.5', '11', '24 Months', NULL, NULL, 'Square Glass', '1', '0', '0', '0', '0', NULL, '100% Pure & Natural Honey – straight from the beehives, unprocessed, rich in taste, and full of natural energy.', '<p>Our <strong>100% Pure &amp; Natural Honey</strong> is collected directly from beehives and carefully packed without any adulteration. It retains all its natural nutrients, antioxidants, and medicinal properties, making it a perfect health companion.</p>\r\n\r\n<p>✅ Boosts Immunity &amp; Strength<br />\r\n✅ Natural Sweetener for Tea, Milk, Bread, Salads &amp; Desserts<br />\r\n✅ Rich in Energy &ndash; Keeps you active all day<br />\r\n✅ No Added Sugar, No Preservatives, No Chemicals</p>\r\n\r\n<p>Whether you use it as a healthy alternative to sugar or as an ayurvedic remedy, this pure honey makes your lifestyle naturally sweet and wholesome.&quot;</p>', NULL, '2025-09-09 05:05:55', '2025-09-09 05:05:56'),
(8, '1', 'P-008', '1', '3', 'HONEY (Spring Flora)', 'honey-spring-flora', '12', '100', '549', '0.00', '4090000', '5', '500GM', '10', '13.5', '11', '24 Months', NULL, NULL, 'Square Glass', '1', '0', '0', '0', '0', NULL, '100% Pure & Natural Honey – straight from the beehives, unprocessed, rich in taste, and full of natural energy.', '<p>Our <strong>100% Pure &amp; Natural Honey</strong> is collected directly from beehives and carefully packed without any adulteration. It retains all its natural nutrients, antioxidants, and medicinal properties, making it a perfect health companion.</p>\r\n\r\n<p>✅ Boosts Immunity &amp; Strength<br />\r\n✅ Natural Sweetener for Tea, Milk, Bread, Salads &amp; Desserts<br />\r\n✅ Rich in Energy &ndash; Keeps you active all day<br />\r\n✅ No Added Sugar, No Preservatives, No Chemicals</p>\r\n\r\n<p>Whether you use it as a healthy alternative to sugar or as an ayurvedic remedy, this pure honey makes your lifestyle naturally sweet and wholesome.</p>', NULL, '2025-09-09 05:09:22', '2025-09-09 05:09:22'),
(9, '1', 'P-009', '1', '3', 'Van Tulsi', 'van-tulsi', '12', '100', '799', '0.00', '4090000', '5', '500GM', '10', '13.5', '11', '24 Months', NULL, NULL, 'Square Glass', '1', '0', '0', '0', '0', NULL, '100% Pure & Natural Honey – straight from the beehives, unprocessed, rich in taste, and full of natural energy', '<p>Our <strong>100% Pure &amp; Natural Honey</strong> is collected directly from beehives and carefully packed without any adulteration. It retains all its natural nutrients, antioxidants, and medicinal properties, making it a perfect health companion.</p>\r\n\r\n<p>✅ Boosts Immunity &amp; Strength<br />\r\n✅ Natural Sweetener for Tea, Milk, Bread, Salads &amp; Desserts<br />\r\n✅ Rich in Energy &ndash; Keeps you active all day<br />\r\n✅ No Added Sugar, No Preservatives, No Chemicals</p>\r\n\r\n<p>Whether you use it as a healthy alternative to sugar or as an ayurvedic remedy, this pure honey makes your lifestyle naturally sweet and wholesome.</p>', NULL, '2025-09-09 05:12:30', '2025-09-09 05:12:30'),
(10, '1', 'P-010', '2', '4', 'Ginger cubes', 'ginger-cubes', '12|60Cubes/PACK', '100', '699', '0.00', '17049090', '18', '240GM | 5GM/Piece', '10', '13.5', '11', '6 Months', NULL, NULL, 'Square Glass', '1', '0', '0', '0', '0', NULL, '100% Pure & Natural Honey – straight from the beehives, unprocessed, rich in taste, and full of natural energy', '<p>Our <strong>100% Pure &amp; Natural Honey</strong> is collected directly from beehives and carefully packed without any adulteration. It retains all its natural nutrients, antioxidants, and medicinal properties, making it a perfect health companion.</p>\r\n\r\n<p>✅ Boosts Immunity &amp; Strength<br />\r\n✅ Natural Sweetener for Tea, Milk, Bread, Salads &amp; Desserts<br />\r\n✅ Rich in Energy &ndash; Keeps you active all day<br />\r\n✅ No Added Sugar, No Preservatives, No Chemicals</p>\r\n\r\n<p>Whether you use it as a healthy alternative to sugar or as an ayurvedic remedy, this pure honey makes your lifestyle naturally sweet and wholesome.</p>', NULL, '2025-09-09 05:23:14', '2025-09-09 05:26:22'),
(11, '1', 'P-011', '2', '4', 'Shilajit Cubes', 'shilajit-cubes', '12|60Cubes/PACK', '100', '999', '0.00', '17049090', '18', '240GM | 5GM/Piece', '10', '13.5', '11', '6 Months', NULL, NULL, 'Square Glass', '1', '0', '0', '0', '0', NULL, '100% Pure & Natural Honey – straight from the beehives, unprocessed, rich in taste, and full of natural energy.', '<p>Our <strong>100% Pure &amp; Natural Honey</strong> is collected directly from beehives and carefully packed without any adulteration. It retains all its natural nutrients, antioxidants, and medicinal properties, making it a perfect health companion.</p>\r\n\r\n<p>✅ Boosts Immunity &amp; Strength<br />\r\n✅ Natural Sweetener for Tea, Milk, Bread, Salads &amp; Desserts<br />\r\n✅ Rich in Energy &ndash; Keeps you active all day<br />\r\n✅ No Added Sugar, No Preservatives, No Chemicals</p>\r\n\r\n<p>Whether you use it as a healthy alternative to sugar or as an ayurvedic remedy, this pure honey makes your lifestyle naturally sweet and wholesome.</p>', NULL, '2025-09-09 05:26:09', '2025-09-09 05:26:09'),
(12, '1', 'P-012', '1', '5', 'Turmeric Honey', 'turmeric-honey', '12', '100', '799', '17029030', '17029030', '5', '250GM', '8', '8', '8', '18 Months', NULL, NULL, 'Pet Mono carton', '0', '0', '0', '0', '0', NULL, '100% Pure & Natural Honey – straight from the beehives, unprocessed, rich in taste, and full of natural energy.', '<p>Our <strong>100% Pure &amp; Natural Honey</strong> is collected directly from beehives and carefully packed without any adulteration. It retains all its natural nutrients, antioxidants, and medicinal properties, making it a perfect health companion.</p>\r\n\r\n<p>✅ Boosts Immunity &amp; Strength<br />\r\n✅ Natural Sweetener for Tea, Milk, Bread, Salads &amp; Desserts<br />\r\n✅ Rich in Energy &ndash; Keeps you active all day<br />\r\n✅ No Added Sugar, No Preservatives, No Chemicals</p>\r\n\r\n<p>Whether you use it as a healthy alternative to sugar or as an ayurvedic remedy, this pure honey makes your lifestyle naturally sweet and wholesome.</p>', NULL, '2025-09-09 05:32:00', '2025-09-16 04:35:37');

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
('FrmpVycl5VaDwfMzWgQgKdP57mEUTF7rkLKfNYeu', NULL, '192.168.1.6', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZkhkdWZXV0NjeHB0TzNPYlAzblhLMmVMQ0prTzFzUkJQbFdiYmxCSCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjM6Imh0dHA6Ly8xOTIuMTY4LjEuNjo4MDAwIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1758268193),
('mUHzDDE59PbNgUt7K8HV5qed4OQ8q2SucF38mw5f', NULL, '192.168.1.6', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYzhCQUFBTVBZV2lQM1BBZWVHcjJaUGZRdjVOYUNWcHZPNnN5MHlLUyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjM6Imh0dHA6Ly8xOTIuMTY4LjEuNjo4MDAwIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1758266946);

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
(1, '1', NULL, '1', '3', NULL, '6', '10', 'In', NULL, '2025-09-16 05:58:00', '2025-09-16 05:58:00');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `botteltypes`
--
ALTER TABLE `botteltypes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `combo_products`
--
ALTER TABLE `combo_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

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
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
-- AUTO_INCREMENT for table `stock_details`
--
ALTER TABLE `stock_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
