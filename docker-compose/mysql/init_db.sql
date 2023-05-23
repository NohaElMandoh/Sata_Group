-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2023 at 08:41 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sata_group`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `message`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'noha', 'admin@tt.com', 'qwdqd', '2023-04-25 17:56:28', '2023-04-25 17:56:28', NULL),
(2, 'zain', 'wdwd@rr.com', 'dwdw', '2023-04-25 18:18:54', '2023-04-25 18:18:54', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `data_rows`
--

CREATE TABLE `data_rows` (
  `id` int(10) UNSIGNED NOT NULL,
  `data_type_id` int(10) UNSIGNED NOT NULL,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT 0,
  `browse` tinyint(1) NOT NULL DEFAULT 1,
  `read` tinyint(1) NOT NULL DEFAULT 1,
  `edit` tinyint(1) NOT NULL DEFAULT 1,
  `add` tinyint(1) NOT NULL DEFAULT 1,
  `delete` tinyint(1) NOT NULL DEFAULT 1,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_rows`
--

INSERT INTO `data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`) VALUES
(1, 1, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(2, 1, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(3, 1, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, NULL, 3),
(4, 1, 'password', 'password', 'Password', 1, 0, 0, 1, 1, 0, NULL, 4),
(5, 1, 'remember_token', 'text', 'Remember Token', 0, 0, 0, 0, 0, 0, NULL, 5),
(6, 1, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, NULL, 6),
(7, 1, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
(8, 1, 'avatar', 'image', 'Avatar', 0, 1, 1, 1, 1, 1, NULL, 8),
(9, 1, 'user_belongsto_role_relationship', 'relationship', 'Role', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":0}', 10),
(10, 1, 'user_belongstomany_role_relationship', 'relationship', 'Roles', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}', 11),
(11, 1, 'settings', 'hidden', 'Settings', 0, 0, 0, 0, 0, 0, NULL, 12),
(12, 2, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(13, 2, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(14, 2, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(15, 2, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(16, 3, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(17, 3, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(18, 3, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(19, 3, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(20, 3, 'display_name', 'text', 'Display Name', 1, 1, 1, 1, 1, 1, NULL, 5),
(21, 1, 'role_id', 'text', 'Role', 1, 1, 1, 1, 1, 1, NULL, 9),
(22, 4, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(23, 4, 'title_en', 'text', 'Title En', 0, 1, 1, 1, 1, 1, '{}', 2),
(24, 4, 'title_ar', 'text', 'Title Ar', 0, 0, 1, 1, 1, 1, '{}', 3),
(26, 4, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, '{}', 5),
(27, 4, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 6),
(28, 4, 'deleted_at', 'timestamp', 'Deleted At', 0, 0, 0, 0, 0, 0, '{}', 7),
(29, 4, 'logo_ar', 'image', 'Logo Ar', 0, 0, 1, 1, 1, 1, '{}', 4),
(30, 4, 'logo_en', 'image', 'Logo En', 0, 1, 1, 1, 1, 1, '{}', 8),
(31, 4, 'logo_mobile', 'image', 'Logo Mobile', 0, 1, 1, 1, 1, 1, '{}', 9),
(32, 6, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(33, 6, 'logo', 'image', 'Logo', 0, 1, 1, 1, 1, 1, '{}', 2),
(34, 6, 'background', 'image', 'Background', 0, 1, 1, 1, 1, 1, '{}', 3),
(35, 6, 'vedio', 'media_picker', 'Vedio', 0, 1, 1, 1, 1, 1, '{}', 4),
(36, 6, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, '{}', 5),
(37, 6, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 6),
(38, 6, 'deleted_at', 'timestamp', 'Deleted At', 0, 0, 0, 0, 0, 0, '{}', 7),
(39, 7, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(40, 7, 'title_en', 'text', 'Title En', 0, 1, 1, 1, 1, 1, '{}', 2),
(41, 7, 'title_ar', 'text', 'Title Ar', 0, 0, 1, 1, 1, 1, '{}', 3),
(42, 7, 'desc_ar', 'rich_text_box', 'Desc Ar', 0, 0, 1, 1, 1, 1, '{}', 4),
(43, 7, 'desc_en', 'rich_text_box', 'Desc En', 0, 0, 1, 1, 1, 1, '{}', 5),
(44, 7, 'background', 'image', 'Background', 0, 1, 1, 1, 1, 1, '{}', 6),
(45, 7, 'position', 'text', 'Position', 0, 1, 1, 1, 1, 1, '{}', 7),
(46, 7, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, '{}', 8),
(47, 7, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 9),
(48, 7, 'deleted_at', 'timestamp', 'Deleted At', 0, 0, 0, 0, 0, 0, '{}', 10),
(49, 8, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(50, 8, 'title_en', 'text', 'Title En', 0, 1, 1, 1, 1, 1, '{}', 2),
(51, 8, 'title_ar', 'text', 'Title Ar', 0, 0, 1, 1, 1, 1, '{}', 3),
(52, 8, 'home_logo', 'image', 'Home Logo', 0, 1, 1, 1, 1, 1, '{}', 4),
(53, 8, 'background', 'image', 'Background', 0, 0, 1, 1, 1, 1, '{}', 5),
(54, 8, 'desc_ar', 'rich_text_box', 'Desc Ar', 0, 0, 1, 1, 1, 1, '{}', 6),
(55, 8, 'desc_en', 'rich_text_box', 'Desc En', 0, 0, 1, 1, 1, 1, '{}', 7),
(56, 8, 'img', 'image', 'Img', 0, 1, 1, 1, 1, 1, '{}', 8),
(57, 8, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, '{}', 9),
(58, 8, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 10),
(59, 8, 'deleted_at', 'timestamp', 'Deleted At', 0, 0, 0, 0, 0, 0, '{}', 11),
(60, 8, 'logo', 'text', 'Logo', 0, 1, 1, 1, 1, 1, '{}', 12),
(61, 9, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(62, 9, 'title_en', 'text', 'Title En', 0, 1, 1, 1, 1, 1, '{}', 2),
(63, 9, 'title_ar', 'text', 'Title Ar', 0, 0, 1, 1, 1, 1, '{}', 3),
(64, 9, 'image', 'image', 'Image', 0, 1, 1, 1, 1, 1, '{}', 4),
(65, 9, 'desc_en', 'rich_text_box', 'Desc En', 0, 0, 1, 1, 1, 1, '{}', 5),
(66, 9, 'desc_ar', 'rich_text_box', 'Desc Ar', 0, 0, 1, 1, 1, 1, '{}', 6),
(67, 9, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, '{}', 7),
(68, 9, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 8),
(69, 9, 'deleted_at', 'timestamp', 'Deleted At', 0, 0, 0, 0, 0, 0, '{}', 9),
(70, 7, 'background_vedio', 'media_picker', 'Background Vedio', 0, 0, 1, 1, 1, 1, '{}', 11),
(71, 7, 'background_vedio_link', 'text', 'Background Vedio Link', 0, 0, 1, 1, 1, 1, '{}', 12),
(72, 7, 'image', 'image', 'Image', 0, 0, 1, 1, 1, 1, '{}', 13),
(73, 10, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(74, 10, 'name_en', 'text', 'Name En', 0, 1, 1, 1, 1, 1, '{}', 2),
(75, 10, 'name_ar', 'text', 'Name Ar', 0, 0, 1, 1, 1, 1, '{}', 3),
(76, 10, 'position_en', 'text', 'Position En', 0, 1, 1, 1, 1, 1, '{}', 4),
(77, 10, 'position_ar', 'text', 'Position Ar', 0, 0, 1, 1, 1, 1, '{}', 5),
(78, 10, 'image', 'image', 'Image', 0, 1, 1, 1, 1, 1, '{}', 6),
(79, 10, 'message_en', 'rich_text_box', 'Message En', 0, 0, 1, 1, 1, 1, '{}', 7),
(80, 10, 'message_ar', 'rich_text_box', 'Message Ar', 0, 0, 1, 1, 1, 1, '{}', 8),
(81, 10, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, '{}', 9),
(82, 10, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 10),
(83, 10, 'deleted_at', 'timestamp', 'Deleted At', 0, 0, 0, 0, 0, 0, '{}', 11),
(85, 10, 'order', 'number', 'Order', 0, 1, 1, 1, 1, 1, '{}', 12),
(86, 4, 'email', 'text', 'Email', 0, 1, 1, 1, 1, 1, '{}', 10),
(87, 4, 'footer_dec1_en', 'rich_text_box', 'Footer Dec1 En', 0, 0, 1, 1, 1, 1, '{}', 11),
(88, 4, 'footer_dec1_ar', 'rich_text_box', 'Footer Dec1 Ar', 0, 0, 1, 1, 1, 1, '{}', 12),
(89, 4, 'facebook_link', 'text', 'Facebook Link', 0, 0, 1, 1, 1, 1, '{}', 13),
(90, 4, 'instagrame_link', 'text', 'Instagrame Link', 0, 0, 1, 1, 1, 1, '{}', 14),
(91, 4, 'linkedin_link', 'text', 'Linkedin Link', 0, 1, 1, 1, 1, 1, '{}', 15),
(92, 4, 'twitter_link', 'text', 'Twitter Link', 0, 0, 1, 1, 1, 1, '{}', 16),
(93, 4, 'footer_dec2_en', 'rich_text_box', 'Footer Dec2 En', 0, 0, 1, 1, 1, 1, '{}', 17),
(94, 4, 'footer_dec2_ar', 'rich_text_box', 'Footer Dec2 Ar', 0, 0, 1, 1, 1, 1, '{}', 18),
(95, 4, 'footer_image', 'image', 'Footer Image', 0, 0, 1, 1, 1, 1, '{}', 19),
(96, 4, 'footer_logo', 'image', 'Footer Logo', 0, 0, 1, 1, 1, 1, '{}', 20),
(99, 4, 'footer_copyrights_en', 'rich_text_box', 'Footer Copyrights En', 0, 0, 1, 1, 1, 1, '{}', 21),
(100, 4, 'footer_copyrights_ar', 'rich_text_box', 'Footer Copyrights Ar', 0, 0, 1, 1, 1, 1, '{}', 22),
(101, 6, 'image', 'image', 'Image', 0, 0, 1, 1, 1, 1, '{}', 8),
(102, 10, 'appear_home', 'select_dropdown', 'Appear Home', 0, 1, 1, 1, 1, 1, '{\"default\":\"Visible\",\"options\":{\"0\":\"Unvisible\",\"1\":\"Visible\"}}', 13),
(103, 10, 'appear_menu', 'select_dropdown', 'Appear Menu', 0, 1, 1, 1, 1, 1, '{\"default\":\"Visible\",\"options\":{\"0\":\"Unvisible\",\"1\":\"Visible\"}}', 14),
(104, 7, 'route_url', 'text', 'Route Url', 0, 0, 1, 1, 1, 1, '{}', 14),
(105, 11, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(106, 11, 'title_en', 'text', 'Title En', 0, 1, 1, 1, 1, 1, '{}', 2),
(107, 11, 'title_ar', 'text', 'Title Ar', 0, 0, 1, 1, 1, 1, '{}', 3),
(108, 11, 'short_desc_en', 'rich_text_box', 'Short Desc En', 0, 0, 1, 1, 1, 1, '{}', 4),
(109, 11, 'short_desc_ar', 'rich_text_box', 'Short Desc Ar', 0, 0, 1, 1, 1, 1, '{}', 5),
(110, 11, 'long_desc_en', 'rich_text_box', 'Long Desc En', 0, 0, 1, 1, 1, 1, '{}', 6),
(111, 11, 'long_desc_ar', 'rich_text_box', 'Long Desc Ar', 0, 0, 1, 1, 1, 1, '{}', 7),
(112, 11, 'image', 'image', 'Image', 0, 1, 1, 1, 1, 1, '{}', 8),
(113, 11, 'by', 'text', 'By', 0, 1, 1, 1, 1, 1, '{}', 9),
(115, 11, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, '{}', 11),
(116, 11, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 12),
(117, 11, 'deleted_at', 'timestamp', 'Deleted At', 0, 0, 0, 0, 0, 0, '{}', 13),
(118, 11, 'bannar', 'image', 'Bannar', 0, 0, 1, 1, 1, 1, '{}', 14),
(119, 11, 'main_img', 'image', 'Main Img', 0, 0, 1, 1, 1, 1, '{}', 15),
(120, 7, 'header_title_en', 'text', 'Header Title En', 0, 0, 1, 1, 1, 1, '{}', 15),
(121, 7, 'header_title_ar', 'text', 'Header Title Ar', 0, 0, 1, 1, 1, 1, '{}', 16),
(122, 12, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(123, 12, 'title_en', 'text', 'Title En', 0, 1, 1, 1, 1, 1, '{}', 2),
(124, 12, 'title_ar', 'text', 'Title Ar', 0, 0, 1, 1, 1, 1, '{}', 3),
(125, 12, 'desc_en', 'rich_text_box', 'Desc En', 0, 0, 1, 1, 1, 1, '{}', 4),
(126, 12, 'desc_ar', 'rich_text_box', 'Desc Ar', 0, 0, 1, 1, 1, 1, '{}', 5),
(127, 12, 'main_image', 'image', 'Main Image', 0, 0, 1, 1, 1, 1, '{}', 6),
(128, 12, 'image', 'image', 'Image', 0, 0, 1, 1, 1, 1, '{}', 7),
(129, 12, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, '{}', 8),
(130, 12, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 9),
(131, 12, 'deleted_at', 'timestamp', 'Deleted At', 0, 0, 0, 0, 0, 0, '{}', 10),
(132, 12, 'status', 'select_dropdown', 'Status', 0, 1, 1, 1, 1, 1, '{\"default\":\"Visible\",\"options\":{\"0\":\"Unvisible\",\"1\":\"Visible\"}}', 11),
(133, 10, 'banner', 'image', 'Banner', 0, 0, 1, 1, 1, 1, '{}', 15),
(134, 11, 'publish_date', 'date', 'Publish Date', 0, 1, 1, 1, 1, 1, '{}', 10),
(136, 4, 'address_en', 'text', 'Address En', 0, 0, 1, 1, 1, 1, '{}', 24),
(137, 4, 'address_ar', 'text', 'Address Ar', 0, 0, 1, 1, 1, 1, '{}', 25),
(138, 4, 'website_url', 'text', 'Website Url', 0, 0, 1, 1, 1, 1, '{}', 23),
(139, 4, 'mobile', 'text', 'Mobile', 0, 0, 1, 1, 1, 1, '{}', 26),
(140, 13, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(141, 13, 'name', 'text', 'Name', 0, 1, 1, 1, 1, 1, '{}', 2),
(142, 13, 'email', 'text', 'Email', 0, 1, 1, 1, 1, 1, '{}', 3),
(143, 13, 'message', 'rich_text_box', 'Message', 0, 0, 1, 1, 1, 1, '{}', 4),
(144, 13, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, '{}', 5),
(145, 13, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 6),
(146, 13, 'deleted_at', 'timestamp', 'Deleted At', 0, 0, 0, 0, 0, 0, '{}', 7);

-- --------------------------------------------------------

--
-- Table structure for table `data_types`
--

CREATE TABLE `data_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT 0,
  `server_side` tinyint(4) NOT NULL DEFAULT 0,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_types`
--

INSERT INTO `data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `policy_name`, `controller`, `description`, `generate_permissions`, `server_side`, `details`, `created_at`, `updated_at`) VALUES
(1, 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController', '', 1, 0, NULL, '2023-04-15 16:52:17', '2023-04-15 16:52:17'),
(2, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', NULL, '', '', 1, 0, NULL, '2023-04-15 16:52:17', '2023-04-15 16:52:17'),
(3, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController', '', 1, 0, NULL, '2023-04-15 16:52:18', '2023-04-15 16:52:18'),
(4, 'websites', 'websites', 'Website', 'Website', NULL, 'App\\Models\\Website', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2023-04-16 16:14:21', '2023-04-25 15:20:38'),
(6, 'sliders', 'sliders', 'Slider', 'Sliders', NULL, 'App\\Models\\Slider', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2023-04-17 09:10:25', '2023-04-19 06:00:29'),
(7, 'sections', 'sections', 'Section', 'Sections', NULL, 'App\\Models\\Section', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2023-04-17 10:12:25', '2023-04-25 04:36:44'),
(8, 'projects', 'projects', 'Project', 'Projects', NULL, 'App\\Models\\Project', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2023-04-17 22:20:20', '2023-04-20 06:10:33'),
(9, 'services', 'services', 'Service', 'Services', NULL, 'App\\Models\\Service', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2023-04-18 01:39:33', '2023-04-18 01:39:33'),
(10, 'letters', 'letters', 'Letter', 'Letters', NULL, 'App\\Models\\Letter', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2023-04-18 07:00:52', '2023-04-25 06:58:17'),
(11, 'events', 'events', 'Event', 'Events', NULL, 'App\\Models\\Event', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2023-04-22 17:43:53', '2023-04-25 11:45:58'),
(12, 'objectives', 'objectives', 'Objective', 'Objectives', NULL, 'App\\Models\\Objective', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2023-04-25 06:04:35', '2023-04-25 06:07:11'),
(13, 'contacts', 'contacts', 'Contact', 'Contacts', NULL, 'App\\Models\\Contact', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2023-04-25 17:38:10', '2023-04-25 17:38:10');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(10) UNSIGNED NOT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_desc_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_desc_ar` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `long_desc_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `long_desc_ar` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publish_date` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `bannar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title_en`, `title_ar`, `short_desc_en`, `short_desc_ar`, `long_desc_en`, `long_desc_ar`, `image`, `by`, `publish_date`, `created_at`, `updated_at`, `deleted_at`, `bannar`, `main_img`) VALUES
(1, 'Our Chairman word', 'كلمة رئيس مجلس الادارة', '<p>We always strive to present the newest advanced technology means in our services overall; that stems from our beliefs in the role of technology toward human<span class=\"excerpt-hellip\">&nbsp;</span></p>', '<p>نهدف إلى تطبيق جميع معايير الجودة والسلامة ، لتقديم خدمات تُضاهي المستوى العالمي بتكاليف ملائمة للجميع. ونوفرأيضًا بيئة داعمة وهادئة لجميع مقدمي الخدمات والموظفين لضمان جودة</p>', '<div dir=\"auto\">We always strive to present the newest advanced technology means in our services overall; that stems from our beliefs in the role of technology toward human life and social facilities.&rdquo;</div>\r\n<div dir=\"auto\">We are honored to introduce Our Chairman Mr.Mousa Bn Saif Alhesany.</div>', '<p>نهدف إلى تطبيق جميع معايير الجودة والسلامة ، لتقديم خدمات تُضاهي المستوى العالمي بتكاليف ملائمة للجميع. ونوفرأيضًا بيئة داعمة وهادئة لجميع مقدمي الخدمات والموظفين لضمان جودة الخدمات المقدمة. كما نعمل على التطوير المهني لجميع موظفي الشركة لرفع كفاءة أدائهم باستمرار وقدرتهم على العمل والإنتاج من أجل تقديم أرقى وأفضل خدمه لعملائنا الأعزاء .</p>', 'events\\April2023\\rKqQp2h4zrPthbPekSNT.jpeg', 'superadmin', '2022-08-14 00:00:00', '2023-04-22 17:48:51', '2023-04-23 06:12:34', NULL, 'events\\April2023\\R9hyxIp4YEhzOWv4dIql.jpg', 'events\\April2023\\UVM4t5KU5IRS0cdot1zd.png'),
(2, 'Customer care director word', 'كلمة المدير العام للشركة', '<p>Since the first moment of knowing the company&rsquo;s ideas and vision, and I am excited to achieve the goals of the company, striving to exploit my<span class=\"excerpt-hellip\">&nbsp;</span></p>', '<p>في &rdquo; مجموعة ساتا للتكنولوجيا &rdquo; نرسم طريقا واضحا من خلال استراتيجيتنا لنساهم في تحقيق النمو المنشود. كما نعمل دائما علي رضا عملائنا، وتلبية احتياجاتهم عن</p>', '<div class=\"kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x c1et5uql ii04i59q\">\r\n<div dir=\"auto\">Since the first moment of knowing the company&rsquo;s ideas and vision, and I am excited to achieve the goals of the company, striving to exploit my previous experiences to help the company to reach its goals.</div>\r\n</div>\r\n<div class=\"cxmmr5t8 oygrvhab hcukyx3x c1et5uql o9v6fnle ii04i59q\">\r\n<div dir=\"auto\">Customer service is one of the most important advantages offered by SATA Technology Group to its customers</div>\r\n<div dir=\"auto\">We have the best experienced team in the Egyptian market available all day to help our customers.</div>\r\n</div>\r\n<div class=\"cxmmr5t8 oygrvhab hcukyx3x c1et5uql o9v6fnle ii04i59q\">\r\n<div dir=\"auto\">The work environment within the company helps us a lot by giving space for creativity and excellence, team work, exchanging experiences and encouraging each other that makes you feel like you are with your family.</div>\r\n</div>\r\n<div class=\"cxmmr5t8 oygrvhab hcukyx3x c1et5uql o9v6fnle ii04i59q\">\r\n<div dir=\"auto\">We are pleased to introduce to you<br>Mr. Mahmoud Abd-Elkader</div>\r\n<div dir=\"auto\">Customer Service Director</div>\r\n</div>', '<div class=\"cxmmr5t8 oygrvhab hcukyx3x c1et5uql o9v6fnle ii04i59q\">\r\n<div dir=\"auto\">في &rdquo; مجموعة ساتا للتكنولوجيا &rdquo; نرسم طريقا واضحا من خلال استراتيجيتنا لنساهم في تحقيق النمو المنشود.</div>\r\n</div>\r\n<div class=\"cxmmr5t8 oygrvhab hcukyx3x c1et5uql o9v6fnle ii04i59q\">\r\n<div dir=\"auto\">كما نعمل دائما علي رضا عملائنا، وتلبية احتياجاتهم عن طريق كفاءات مؤهله ولديها خبرة واسعة.</div>\r\n</div>\r\n<div class=\"cxmmr5t8 oygrvhab hcukyx3x c1et5uql o9v6fnle ii04i59q\">\r\n<div dir=\"auto\">بالتوافق مع مبادئنا التي تقوم علي الابداع و الابتكار.</div>\r\n</div>\r\n<div class=\"cxmmr5t8 oygrvhab hcukyx3x c1et5uql o9v6fnle ii04i59q\">\r\n<div dir=\"auto\">نقدم لكم المدير العام لمجموعة ساتا للتكنولوجيا</div>\r\n<div dir=\"auto\">أ/ خالد أبوالسعود.</div>\r\n</div>', 'events\\April2023\\cy1TC8ZnrbXQTLWnnPoG.jpeg', 'superadmin', '2022-08-14 00:00:00', '2023-04-22 17:57:03', '2023-04-23 06:12:17', NULL, 'events\\April2023\\9SP5XS81NGZclefs7gTY.jpg', 'events\\April2023\\3lIomGxqSE06WgwQa3sr.png'),
(3, 'Our Chairman word', 'كلمة رئيس مجلس الادارة', '<p>We always strive to present the newest advanced technology means in our services overall; that stems from our beliefs in the role of technology toward human<span class=\"excerpt-hellip\">&nbsp;</span></p>', '<p>نهدف إلى تطبيق جميع معايير الجودة والسلامة ، لتقديم خدمات تُضاهي المستوى العالمي بتكاليف ملائمة للجميع. ونوفرأيضًا بيئة داعمة وهادئة لجميع مقدمي الخدمات والموظفين لضمان جودة</p>', '<div dir=\"auto\">We always strive to present the newest advanced technology means in our services overall; that stems from our beliefs in the role of technology toward human life and social facilities.&rdquo;</div>\r\n<div dir=\"auto\">We are honored to introduce Our Chairman Mr.Mousa Bn Saif Alhesany.</div>', '<p>نهدف إلى تطبيق جميع معايير الجودة والسلامة ، لتقديم خدمات تُضاهي المستوى العالمي بتكاليف ملائمة للجميع. ونوفرأيضًا بيئة داعمة وهادئة لجميع مقدمي الخدمات والموظفين لضمان جودة الخدمات المقدمة. كما نعمل على التطوير المهني لجميع موظفي الشركة لرفع كفاءة أدائهم باستمرار وقدرتهم على العمل والإنتاج من أجل تقديم أرقى وأفضل خدمه لعملائنا الأعزاء .</p>', 'events\\April2023\\rKqQp2h4zrPthbPekSNT.jpeg', 'superadmin', '2022-08-14 00:00:00', '2023-04-22 17:48:51', '2023-04-23 06:12:34', NULL, 'events\\April2023\\R9hyxIp4YEhzOWv4dIql.jpg', 'events\\April2023\\UVM4t5KU5IRS0cdot1zd.png'),
(4, 'Customer care director word', 'كلمة المدير العام للشركة', '<p>Since the first moment of knowing the company&rsquo;s ideas and vision, and I am excited to achieve the goals of the company, striving to exploit my<span class=\"excerpt-hellip\">&nbsp;</span></p>', '<p>في &rdquo; مجموعة ساتا للتكنولوجيا &rdquo; نرسم طريقا واضحا من خلال استراتيجيتنا لنساهم في تحقيق النمو المنشود. كما نعمل دائما علي رضا عملائنا، وتلبية احتياجاتهم عن</p>', '<div class=\"kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x c1et5uql ii04i59q\">\r\n<div dir=\"auto\">Since the first moment of knowing the company&rsquo;s ideas and vision, and I am excited to achieve the goals of the company, striving to exploit my previous experiences to help the company to reach its goals.</div>\r\n</div>\r\n<div class=\"cxmmr5t8 oygrvhab hcukyx3x c1et5uql o9v6fnle ii04i59q\">\r\n<div dir=\"auto\">Customer service is one of the most important advantages offered by SATA Technology Group to its customers</div>\r\n<div dir=\"auto\">We have the best experienced team in the Egyptian market available all day to help our customers.</div>\r\n</div>\r\n<div class=\"cxmmr5t8 oygrvhab hcukyx3x c1et5uql o9v6fnle ii04i59q\">\r\n<div dir=\"auto\">The work environment within the company helps us a lot by giving space for creativity and excellence, team work, exchanging experiences and encouraging each other that makes you feel like you are with your family.</div>\r\n</div>\r\n<div class=\"cxmmr5t8 oygrvhab hcukyx3x c1et5uql o9v6fnle ii04i59q\">\r\n<div dir=\"auto\">We are pleased to introduce to you<br>Mr. Mahmoud Abd-Elkader</div>\r\n<div dir=\"auto\">Customer Service Director</div>\r\n</div>', '<div class=\"cxmmr5t8 oygrvhab hcukyx3x c1et5uql o9v6fnle ii04i59q\">\r\n<div dir=\"auto\">في &rdquo; مجموعة ساتا للتكنولوجيا &rdquo; نرسم طريقا واضحا من خلال استراتيجيتنا لنساهم في تحقيق النمو المنشود.</div>\r\n</div>\r\n<div class=\"cxmmr5t8 oygrvhab hcukyx3x c1et5uql o9v6fnle ii04i59q\">\r\n<div dir=\"auto\">كما نعمل دائما علي رضا عملائنا، وتلبية احتياجاتهم عن طريق كفاءات مؤهله ولديها خبرة واسعة.</div>\r\n</div>\r\n<div class=\"cxmmr5t8 oygrvhab hcukyx3x c1et5uql o9v6fnle ii04i59q\">\r\n<div dir=\"auto\">بالتوافق مع مبادئنا التي تقوم علي الابداع و الابتكار.</div>\r\n</div>\r\n<div class=\"cxmmr5t8 oygrvhab hcukyx3x c1et5uql o9v6fnle ii04i59q\">\r\n<div dir=\"auto\">نقدم لكم المدير العام لمجموعة ساتا للتكنولوجيا</div>\r\n<div dir=\"auto\">أ/ خالد أبوالسعود.</div>\r\n</div>', 'events\\April2023\\cy1TC8ZnrbXQTLWnnPoG.jpeg', 'superadmin', '2022-08-14 00:00:00', '2023-04-22 17:57:03', '2023-04-23 06:12:17', NULL, 'events\\April2023\\9SP5XS81NGZclefs7gTY.jpg', 'events\\April2023\\3lIomGxqSE06WgwQa3sr.png'),
(5, 'Our Chairman word', 'كلمة رئيس مجلس الادارة', '<p>We always strive to present the newest advanced technology means in our services overall; that stems from our beliefs in the role of technology toward human<span class=\"excerpt-hellip\">&nbsp;</span></p>', '<p>نهدف إلى تطبيق جميع معايير الجودة والسلامة ، لتقديم خدمات تُضاهي المستوى العالمي بتكاليف ملائمة للجميع. ونوفرأيضًا بيئة داعمة وهادئة لجميع مقدمي الخدمات والموظفين لضمان جودة</p>', '<div dir=\"auto\">We always strive to present the newest advanced technology means in our services overall; that stems from our beliefs in the role of technology toward human life and social facilities.&rdquo;</div>\r\n<div dir=\"auto\">We are honored to introduce Our Chairman Mr.Mousa Bn Saif Alhesany.</div>', '<p>نهدف إلى تطبيق جميع معايير الجودة والسلامة ، لتقديم خدمات تُضاهي المستوى العالمي بتكاليف ملائمة للجميع. ونوفرأيضًا بيئة داعمة وهادئة لجميع مقدمي الخدمات والموظفين لضمان جودة الخدمات المقدمة. كما نعمل على التطوير المهني لجميع موظفي الشركة لرفع كفاءة أدائهم باستمرار وقدرتهم على العمل والإنتاج من أجل تقديم أرقى وأفضل خدمه لعملائنا الأعزاء .</p>', 'events\\April2023\\rKqQp2h4zrPthbPekSNT.jpeg', 'superadmin', '2022-08-14 00:00:00', '2023-04-22 17:48:51', '2023-04-23 06:12:34', NULL, 'events\\April2023\\R9hyxIp4YEhzOWv4dIql.jpg', 'events\\April2023\\UVM4t5KU5IRS0cdot1zd.png'),
(6, 'Customer care director word', 'كلمة المدير العام للشركة', '<p>Since the first moment of knowing the company&rsquo;s ideas and vision, and I am excited to achieve the goals of the company, striving to exploit my<span class=\"excerpt-hellip\">&nbsp;</span></p>', '<p>في &rdquo; مجموعة ساتا للتكنولوجيا &rdquo; نرسم طريقا واضحا من خلال استراتيجيتنا لنساهم في تحقيق النمو المنشود. كما نعمل دائما علي رضا عملائنا، وتلبية احتياجاتهم عن</p>', '<div class=\"kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x c1et5uql ii04i59q\">\r\n<div dir=\"auto\">Since the first moment of knowing the company&rsquo;s ideas and vision, and I am excited to achieve the goals of the company, striving to exploit my previous experiences to help the company to reach its goals.</div>\r\n</div>\r\n<div class=\"cxmmr5t8 oygrvhab hcukyx3x c1et5uql o9v6fnle ii04i59q\">\r\n<div dir=\"auto\">Customer service is one of the most important advantages offered by SATA Technology Group to its customers</div>\r\n<div dir=\"auto\">We have the best experienced team in the Egyptian market available all day to help our customers.</div>\r\n</div>\r\n<div class=\"cxmmr5t8 oygrvhab hcukyx3x c1et5uql o9v6fnle ii04i59q\">\r\n<div dir=\"auto\">The work environment within the company helps us a lot by giving space for creativity and excellence, team work, exchanging experiences and encouraging each other that makes you feel like you are with your family.</div>\r\n</div>\r\n<div class=\"cxmmr5t8 oygrvhab hcukyx3x c1et5uql o9v6fnle ii04i59q\">\r\n<div dir=\"auto\">We are pleased to introduce to you<br>Mr. Mahmoud Abd-Elkader</div>\r\n<div dir=\"auto\">Customer Service Director</div>\r\n</div>', '<div class=\"cxmmr5t8 oygrvhab hcukyx3x c1et5uql o9v6fnle ii04i59q\">\r\n<div dir=\"auto\">في &rdquo; مجموعة ساتا للتكنولوجيا &rdquo; نرسم طريقا واضحا من خلال استراتيجيتنا لنساهم في تحقيق النمو المنشود.</div>\r\n</div>\r\n<div class=\"cxmmr5t8 oygrvhab hcukyx3x c1et5uql o9v6fnle ii04i59q\">\r\n<div dir=\"auto\">كما نعمل دائما علي رضا عملائنا، وتلبية احتياجاتهم عن طريق كفاءات مؤهله ولديها خبرة واسعة.</div>\r\n</div>\r\n<div class=\"cxmmr5t8 oygrvhab hcukyx3x c1et5uql o9v6fnle ii04i59q\">\r\n<div dir=\"auto\">بالتوافق مع مبادئنا التي تقوم علي الابداع و الابتكار.</div>\r\n</div>\r\n<div class=\"cxmmr5t8 oygrvhab hcukyx3x c1et5uql o9v6fnle ii04i59q\">\r\n<div dir=\"auto\">نقدم لكم المدير العام لمجموعة ساتا للتكنولوجيا</div>\r\n<div dir=\"auto\">أ/ خالد أبوالسعود.</div>\r\n</div>', 'events\\April2023\\cy1TC8ZnrbXQTLWnnPoG.jpeg', 'superadmin', '2022-08-14 00:00:00', '2023-04-22 17:57:03', '2023-04-23 06:12:17', NULL, 'events\\April2023\\9SP5XS81NGZclefs7gTY.jpg', 'events\\April2023\\3lIomGxqSE06WgwQa3sr.png'),
(7, 'Our Chairman word', 'كلمة رئيس مجلس الادارة', '<p>We always strive to present the newest advanced technology means in our services overall; that stems from our beliefs in the role of technology toward human<span class=\"excerpt-hellip\">&nbsp;</span></p>', '<p>نهدف إلى تطبيق جميع معايير الجودة والسلامة ، لتقديم خدمات تُضاهي المستوى العالمي بتكاليف ملائمة للجميع. ونوفرأيضًا بيئة داعمة وهادئة لجميع مقدمي الخدمات والموظفين لضمان جودة</p>', '<div dir=\"auto\">We always strive to present the newest advanced technology means in our services overall; that stems from our beliefs in the role of technology toward human life and social facilities.&rdquo;</div>\r\n<div dir=\"auto\">We are honored to introduce Our Chairman Mr.Mousa Bn Saif Alhesany.</div>', '<p>نهدف إلى تطبيق جميع معايير الجودة والسلامة ، لتقديم خدمات تُضاهي المستوى العالمي بتكاليف ملائمة للجميع. ونوفرأيضًا بيئة داعمة وهادئة لجميع مقدمي الخدمات والموظفين لضمان جودة الخدمات المقدمة. كما نعمل على التطوير المهني لجميع موظفي الشركة لرفع كفاءة أدائهم باستمرار وقدرتهم على العمل والإنتاج من أجل تقديم أرقى وأفضل خدمه لعملائنا الأعزاء .</p>', 'events\\April2023\\rKqQp2h4zrPthbPekSNT.jpeg', 'superadmin', '2022-08-14 00:00:00', '2023-04-22 17:48:51', '2023-04-23 06:12:34', NULL, 'events\\April2023\\R9hyxIp4YEhzOWv4dIql.jpg', 'events\\April2023\\UVM4t5KU5IRS0cdot1zd.png'),
(8, 'Customer care director word', 'كلمة المدير العام للشركة', '<p>Since the first moment of knowing the company&rsquo;s ideas and vision, and I am excited to achieve the goals of the company, striving to exploit my<span class=\"excerpt-hellip\">&nbsp;</span></p>', '<p>في &rdquo; مجموعة ساتا للتكنولوجيا &rdquo; نرسم طريقا واضحا من خلال استراتيجيتنا لنساهم في تحقيق النمو المنشود. كما نعمل دائما علي رضا عملائنا، وتلبية احتياجاتهم عن</p>', '<div class=\"kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x c1et5uql ii04i59q\">\r\n<div dir=\"auto\">Since the first moment of knowing the company&rsquo;s ideas and vision, and I am excited to achieve the goals of the company, striving to exploit my previous experiences to help the company to reach its goals.</div>\r\n</div>\r\n<div class=\"cxmmr5t8 oygrvhab hcukyx3x c1et5uql o9v6fnle ii04i59q\">\r\n<div dir=\"auto\">Customer service is one of the most important advantages offered by SATA Technology Group to its customers</div>\r\n<div dir=\"auto\">We have the best experienced team in the Egyptian market available all day to help our customers.</div>\r\n</div>\r\n<div class=\"cxmmr5t8 oygrvhab hcukyx3x c1et5uql o9v6fnle ii04i59q\">\r\n<div dir=\"auto\">The work environment within the company helps us a lot by giving space for creativity and excellence, team work, exchanging experiences and encouraging each other that makes you feel like you are with your family.</div>\r\n</div>\r\n<div class=\"cxmmr5t8 oygrvhab hcukyx3x c1et5uql o9v6fnle ii04i59q\">\r\n<div dir=\"auto\">We are pleased to introduce to you<br>Mr. Mahmoud Abd-Elkader</div>\r\n<div dir=\"auto\">Customer Service Director</div>\r\n</div>', '<div class=\"cxmmr5t8 oygrvhab hcukyx3x c1et5uql o9v6fnle ii04i59q\">\r\n<div dir=\"auto\">في &rdquo; مجموعة ساتا للتكنولوجيا &rdquo; نرسم طريقا واضحا من خلال استراتيجيتنا لنساهم في تحقيق النمو المنشود.</div>\r\n</div>\r\n<div class=\"cxmmr5t8 oygrvhab hcukyx3x c1et5uql o9v6fnle ii04i59q\">\r\n<div dir=\"auto\">كما نعمل دائما علي رضا عملائنا، وتلبية احتياجاتهم عن طريق كفاءات مؤهله ولديها خبرة واسعة.</div>\r\n</div>\r\n<div class=\"cxmmr5t8 oygrvhab hcukyx3x c1et5uql o9v6fnle ii04i59q\">\r\n<div dir=\"auto\">بالتوافق مع مبادئنا التي تقوم علي الابداع و الابتكار.</div>\r\n</div>\r\n<div class=\"cxmmr5t8 oygrvhab hcukyx3x c1et5uql o9v6fnle ii04i59q\">\r\n<div dir=\"auto\">نقدم لكم المدير العام لمجموعة ساتا للتكنولوجيا</div>\r\n<div dir=\"auto\">أ/ خالد أبوالسعود.</div>\r\n</div>', 'events\\April2023\\cy1TC8ZnrbXQTLWnnPoG.jpeg', 'superadmin', '2022-08-14 00:00:00', '2023-04-22 17:57:03', '2023-04-23 06:12:17', NULL, 'events\\April2023\\9SP5XS81NGZclefs7gTY.jpg', 'events\\April2023\\3lIomGxqSE06WgwQa3sr.png');

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
-- Table structure for table `letters`
--

CREATE TABLE `letters` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message_ar` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `appear_home` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `appear_menu` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `letters`
--

INSERT INTO `letters` (`id`, `name_en`, `name_ar`, `position_en`, `position_ar`, `image`, `message_en`, `message_ar`, `created_at`, `updated_at`, `deleted_at`, `order`, `appear_home`, `appear_menu`, `banner`) VALUES
(1, 'Dr. Azza Mohamed Attia', 'د.عزة محمد عطية', 'CEO', 'الرئيس التنفيذي', 'letters\\April2023\\8Wuy3Wnk917mIrIga67R.png', '<p>We at SATA Technology Group have developed a slogan, which is the best choice, and we mean it literally. The group&rsquo;s systems structure is based on the best choice, which is to be the best in providing technological services that achieves welfare for consumers based on the principle of high quality, competitive price, and means of comfort. So we at SATA group we put that in mind, and we are working in an accelerated manner to keep up with any changes that would upgrade our services to the highest level of service and all for the convenience of our customers, and therefore our sincere intention in managing the Group has adopted this principle, focusing on it and we pray to -Allah Almighty- Good luck in our journey. Ultimately, we all hope to be an active part of society.</p>', '<p style=\"text-align: right;\">نحن في مجموعة ساتا للتكنولوجيا وضعنا شعار، وهو الاختيار الأفضل ونقصد بذلك في كل ما يحمله هذا الشعار من معنى؛ فلقد وضعت أنظمة المجموعة من منطلق الاختيار الأفضل.</p>\r\n<p style=\"text-align: right;\">وذلك&nbsp; يعني أن نكون الأفضل في الخدمات المقدمة بالتكنولوجيا والتي تحقق الرفاهية للمستخدمين من منطلق&nbsp; الجودة العالية والسعر التنافسي<strong><em>،&nbsp;&nbsp;</em></strong>وكذلك سبل الراحة للمستخدمين. لذلك&nbsp; نحن في مجموعة ساتا وضعنا كل ذلك نصب أعيننا ونحن نعمل بوتيرة متسارعة؛ لمواكبة أيّ&nbsp; تغييرات من شأنها أن ترتقي بأعلى&nbsp; مستوى من الخدمات.</p>\r\n<p style=\"text-align: right;\">&nbsp;ذلك من أجل راحة عملائنا ، ولذلك فإنّ نيتنا الصادقة في إدارة&nbsp; المجموعة انتهجت هذا المبدأ وهو محور عملنا وندعو -الله تعالى- التوفيق في مسيرتنا ، وكلنا أمل أن&nbsp; نكون جزءً فعّالًا في المجتمع .</p>', '2023-04-18 07:42:05', '2023-04-25 08:33:20', NULL, 1, '1', '1', 'letters\\April2023\\GOZyo4rOHsSsKOMSYJbk.png'),
(2, 'Moosa Ben Saif Al Hasani', 'موسي بن سيف الحسني', 'Chairman’s', 'رئيس مجلس الادارة', 'letters\\April2023\\AoQXaIcgCJkRLRNeGmlZ.png', '<div class=\"elementor-element elementor-element-7450db7 elementor-widget elementor-widget-text-editor animated zoomInRight\" data-id=\"7450db7\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;zoomInRight&quot;}\" data-widget_type=\"text-editor.default\">\r\n<div class=\"elementor-widget-container\"><strong>We always strive in SATA Technology Group to develop the work environment and create an atmosphere conducive to creativity, innovation, and excellence, and because we realize the meaning of quality, opportunity and real value, the quality in providing our services is the pivot around which everyone revolves around the SATA Group, and SATA Group adds real value to its customers through service quality Provided to them and through real customer service and a capable team working around the clock to serve them.</strong></div>\r\n</div>\r\n<div class=\"elementor-element elementor-element-c285b3b elementor-widget elementor-widget-text-editor animated fadeIn\" data-id=\"c285b3b\" data-element_type=\"widget\" data-settings=\"{&quot;_animation&quot;:&quot;fadeIn&quot;}\" data-widget_type=\"text-editor.default\">\r\n<div class=\"elementor-widget-container\">\r\n<p><strong>Therefore, we constantly strive to improve and innovate everything that serves our valued customers&rsquo; needs and our customers&rsquo; satisfaction has all priority.</strong></p>\r\n<p><strong>We constantly and continuously seek to develop the technology that we use to achieve the aspirations and needs and achieve the Group&rsquo;s trends in development, expansion, and customer satisfaction.</strong></p>\r\n<p><strong>And achieve constant rapid spread to reach everyone without exception.</strong></p>\r\n</div>\r\n</div>', '<p style=\"text-align: right;\">نسعى دائما لتقديم أحدث وسائل التكنولوجيا الحديثة المتطورة في جميع خدماتنا؛ إيمانًا منا بدور التكنولوجيا في تسهيل حياة الفرد والمجتمع.</p>\r\n<p style=\"text-align: right;\">كما نهدف إلى تطبيق جميع معايير الجودة والسلامة؛ لتقديم خدمات تُضاهي المستوى العالمي بتكاليف ملائمة للجميع.</p>\r\n<p style=\"text-align: right;\">نوفرأيضًا بيئة داعم وهادئة لجميع مقدمي الخدمات والموظفين؛&nbsp; لضمان جودة الخدمات المقدمة.</p>\r\n<p style=\"text-align: right;\">كما نعمل على التطوير المهني لجميع موظفي الشركة؛ لرفع كفاءة أدائهم باستمرار وقدرتهم على العمل والإنتاج.&nbsp;</p>', '2023-04-18 07:44:40', '2023-04-25 08:33:10', NULL, 2, '1', '1', 'letters\\April2023\\NJBZUxgYQXNgyORufPPR.png'),
(3, NULL, NULL, 'GM', 'المدير العام', 'letters\\April2023\\kEiK3QwQxcTuQx7UIQzV.jpg', '<div>\r\n<p><strong>At &ldquo;SATA Technology Group&rdquo; we draw a clear path through our strategy to contribute to reach our goals and achieve the desired growth.</strong></p>\r\n</div>\r\n<div dir=\"ltr\">\r\n<div><strong>We also always work to satisfy our customers and meet their needs through qualified competencies with extensive experience.</strong></div>\r\n</div>\r\n<div dir=\"ltr\">\r\n<div><strong>In accordance with our principles that are based on creativity and innovation.</strong></div>\r\n</div>\r\n<div dir=\"ltr\">\r\n<div><strong>Introducing the General Manager of SATA Technology Group</strong></div>\r\n</div>', '<div class=\"cxmmr5t8 oygrvhab hcukyx3x c1et5uql o9v6fnle ii04i59q\">\r\n<div dir=\"auto\"><strong>في &rdquo; مجموعة ساتا للتكنولوجيا &rdquo; نرسم طريقا واضحا من خلال استراتيجيتنا للمساهمة في الوصول إلي أهدافنا وتحقيق النمو المنشود.</strong></div>\r\n</div>\r\n<div class=\"cxmmr5t8 oygrvhab hcukyx3x c1et5uql o9v6fnle ii04i59q\">\r\n<div dir=\"auto\"><strong>كما نعمل دائما علي رضا عملائنا ، وتلبية إحتياجاتهم عن طريق كفاءات مؤهله ولديها خبرة واسعة.</strong></div>\r\n</div>\r\n<div class=\"cxmmr5t8 oygrvhab hcukyx3x c1et5uql o9v6fnle ii04i59q\">\r\n<div dir=\"auto\"><strong>بالتوافق مع مبادئنا التي تقوم علي الابداع و الابتكار.</strong></div>\r\n</div>\r\n<div class=\"cxmmr5t8 oygrvhab hcukyx3x c1et5uql o9v6fnle ii04i59q\">\r\n<div dir=\"auto\"><strong>نقدم لكم المدير العام لمجموعة ساتا للتكنولوجيا</strong></div>\r\n</div>', '2023-04-19 11:00:42', '2023-04-25 08:32:59', NULL, NULL, '0', '1', 'letters\\April2023\\dk4uqzIO5wCnMUqX5RIU.png');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2023-04-15 16:52:18', '2023-04-15 16:52:18'),
(2, 'header', '2023-04-16 10:47:54', '2023-04-16 10:47:54');

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`) VALUES
(1, 1, 'Dashboard', '', '_self', 'voyager-boat', NULL, NULL, 1, '2023-04-15 16:52:18', '2023-04-15 16:52:18', 'voyager.dashboard', NULL),
(2, 1, 'Media', '', '_self', 'voyager-images', NULL, NULL, 5, '2023-04-15 16:52:18', '2023-04-15 16:52:18', 'voyager.media.index', NULL),
(3, 1, 'Users', '', '_self', 'voyager-person', NULL, NULL, 3, '2023-04-15 16:52:18', '2023-04-15 16:52:18', 'voyager.users.index', NULL),
(4, 1, 'Roles', '', '_self', 'voyager-lock', NULL, NULL, 2, '2023-04-15 16:52:18', '2023-04-15 16:52:18', 'voyager.roles.index', NULL),
(5, 1, 'Tools', '', '_self', 'voyager-tools', NULL, NULL, 9, '2023-04-15 16:52:18', '2023-04-15 16:52:18', NULL, NULL),
(6, 1, 'Menu Builder', '', '_self', 'voyager-list', NULL, 5, 10, '2023-04-15 16:52:18', '2023-04-15 16:52:18', 'voyager.menus.index', NULL),
(7, 1, 'Database', '', '_self', 'voyager-data', NULL, 5, 11, '2023-04-15 16:52:18', '2023-04-15 16:52:18', 'voyager.database.index', NULL),
(8, 1, 'Compass', '', '_self', 'voyager-compass', NULL, 5, 12, '2023-04-15 16:52:18', '2023-04-15 16:52:18', 'voyager.compass.index', NULL),
(9, 1, 'BREAD', '', '_self', 'voyager-bread', NULL, 5, 13, '2023-04-15 16:52:18', '2023-04-15 16:52:18', 'voyager.bread.index', NULL),
(10, 1, 'Settings', '', '_self', 'voyager-settings', NULL, NULL, 14, '2023-04-15 16:52:18', '2023-04-15 16:52:18', 'voyager.settings.index', NULL),
(11, 2, 'Home', '', '_self', NULL, '#000000', NULL, 1, '2023-04-16 10:49:54', '2023-04-24 14:14:26', 'home', 'null'),
(12, 2, 'Projects', '#', '_self', NULL, '#000000', NULL, 2, '2023-04-16 10:50:22', '2023-04-16 15:54:02', NULL, ''),
(13, 2, 'About Us', '', '_self', NULL, '#000000', NULL, 3, '2023-04-16 10:50:47', '2023-04-24 14:15:45', '#', 'null'),
(14, 2, 'Events', '', '_self', NULL, '#000000', NULL, 4, '2023-04-16 10:51:01', '2023-04-24 14:15:21', 'events', 'null'),
(15, 2, 'Contact Us', '', '_self', NULL, '#000000', NULL, 5, '2023-04-16 10:51:13', '2023-04-20 07:18:11', 'contact_us', 'null'),
(19, 1, 'Website', '', '_self', NULL, NULL, NULL, 15, '2023-04-16 16:14:21', '2023-04-16 16:14:21', 'voyager.websites.index', NULL),
(20, 1, 'Sliders', '', '_self', NULL, NULL, NULL, 16, '2023-04-17 09:10:25', '2023-04-17 09:10:25', 'voyager.sliders.index', NULL),
(21, 1, 'Sections', '', '_self', NULL, NULL, NULL, 17, '2023-04-17 10:12:25', '2023-04-17 10:12:25', 'voyager.sections.index', NULL),
(22, 1, 'Projects', '', '_self', NULL, NULL, NULL, 18, '2023-04-17 22:20:20', '2023-04-17 22:20:20', 'voyager.projects.index', NULL),
(23, 1, 'Services', '', '_self', NULL, NULL, NULL, 19, '2023-04-18 01:39:33', '2023-04-18 01:39:33', 'voyager.services.index', NULL),
(24, 1, 'Letters', '', '_self', NULL, NULL, NULL, 20, '2023-04-18 07:00:52', '2023-04-18 07:00:52', 'voyager.letters.index', NULL),
(25, 1, 'Events', '', '_self', NULL, NULL, NULL, 21, '2023-04-22 17:43:54', '2023-04-22 17:43:54', 'voyager.events.index', NULL),
(26, 1, 'Objectives', '', '_self', NULL, NULL, NULL, 22, '2023-04-25 06:04:35', '2023-04-25 06:04:35', 'voyager.objectives.index', NULL),
(27, 1, 'Contacts', '', '_self', NULL, NULL, NULL, 23, '2023-04-25 17:38:10', '2023-04-25 17:38:10', 'voyager.contacts.index', NULL);

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
(3, '2016_01_01_000000_add_voyager_user_fields', 1),
(4, '2016_01_01_000000_create_data_types_table', 1),
(5, '2016_05_19_173453_create_menu_table', 1),
(6, '2016_10_21_190000_create_roles_table', 1),
(7, '2016_10_21_190000_create_settings_table', 1),
(8, '2016_11_30_135954_create_permission_table', 1),
(9, '2016_11_30_141208_create_permission_role_table', 1),
(10, '2016_12_26_201236_data_types__add__server_side', 1),
(11, '2017_01_13_000000_add_route_to_menu_items_table', 1),
(12, '2017_01_14_005015_create_translations_table', 1),
(13, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 1),
(14, '2017_03_06_000000_add_controller_to_data_types_table', 1),
(15, '2017_04_21_000000_add_order_to_data_rows_table', 1),
(16, '2017_07_05_210000_add_policyname_to_data_types_table', 1),
(17, '2017_08_05_000000_add_group_to_settings_table', 1),
(18, '2017_11_26_013050_add_user_role_relationship', 1),
(19, '2017_11_26_015000_create_user_roles_table', 1),
(20, '2018_03_11_000000_add_user_settings', 1),
(21, '2018_03_14_000000_add_details_to_data_types_table', 1),
(22, '2018_03_16_000000_make_settings_value_nullable', 1),
(23, '2019_08_19_000000_create_failed_jobs_table', 1),
(24, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `objectives`
--

CREATE TABLE `objectives` (
  `id` int(10) UNSIGNED NOT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc_ar` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `status` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `objectives`
--

INSERT INTO `objectives` (`id`, `title_en`, `title_ar`, `desc_en`, `desc_ar`, `main_image`, `image`, `created_at`, `updated_at`, `deleted_at`, `status`) VALUES
(1, 'Objective, Mission and Vision', 'الهدف ، الرساله و الرؤيه', NULL, NULL, 'objectives\\April2023\\nmO5GmubbY8b4aJIGUEP.png', NULL, '2023-04-25 06:08:41', '2023-04-25 06:08:41', NULL, '1'),
(2, 'Policies and Values', 'السياسه و القيم', NULL, NULL, 'objectives\\April2023\\NfO45Nxibsxc37mPSFVw.png', NULL, '2023-04-25 06:09:18', '2023-04-25 06:09:18', NULL, '1'),
(3, 'SATA ETHICS', 'اخلاق ساتا', NULL, NULL, 'objectives\\April2023\\99C4Ckpl7VdSBNUQlnvh.png', NULL, '2023-04-25 06:10:17', '2023-04-25 06:10:17', NULL, '1');

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`) VALUES
(1, 'browse_admin', NULL, '2023-04-15 16:52:18', '2023-04-15 16:52:18'),
(2, 'browse_bread', NULL, '2023-04-15 16:52:18', '2023-04-15 16:52:18'),
(3, 'browse_database', NULL, '2023-04-15 16:52:18', '2023-04-15 16:52:18'),
(4, 'browse_media', NULL, '2023-04-15 16:52:18', '2023-04-15 16:52:18'),
(5, 'browse_compass', NULL, '2023-04-15 16:52:18', '2023-04-15 16:52:18'),
(6, 'browse_menus', 'menus', '2023-04-15 16:52:18', '2023-04-15 16:52:18'),
(7, 'read_menus', 'menus', '2023-04-15 16:52:18', '2023-04-15 16:52:18'),
(8, 'edit_menus', 'menus', '2023-04-15 16:52:18', '2023-04-15 16:52:18'),
(9, 'add_menus', 'menus', '2023-04-15 16:52:18', '2023-04-15 16:52:18'),
(10, 'delete_menus', 'menus', '2023-04-15 16:52:18', '2023-04-15 16:52:18'),
(11, 'browse_roles', 'roles', '2023-04-15 16:52:18', '2023-04-15 16:52:18'),
(12, 'read_roles', 'roles', '2023-04-15 16:52:18', '2023-04-15 16:52:18'),
(13, 'edit_roles', 'roles', '2023-04-15 16:52:18', '2023-04-15 16:52:18'),
(14, 'add_roles', 'roles', '2023-04-15 16:52:18', '2023-04-15 16:52:18'),
(15, 'delete_roles', 'roles', '2023-04-15 16:52:18', '2023-04-15 16:52:18'),
(16, 'browse_users', 'users', '2023-04-15 16:52:18', '2023-04-15 16:52:18'),
(17, 'read_users', 'users', '2023-04-15 16:52:18', '2023-04-15 16:52:18'),
(18, 'edit_users', 'users', '2023-04-15 16:52:18', '2023-04-15 16:52:18'),
(19, 'add_users', 'users', '2023-04-15 16:52:18', '2023-04-15 16:52:18'),
(20, 'delete_users', 'users', '2023-04-15 16:52:18', '2023-04-15 16:52:18'),
(21, 'browse_settings', 'settings', '2023-04-15 16:52:18', '2023-04-15 16:52:18'),
(22, 'read_settings', 'settings', '2023-04-15 16:52:18', '2023-04-15 16:52:18'),
(23, 'edit_settings', 'settings', '2023-04-15 16:52:18', '2023-04-15 16:52:18'),
(24, 'add_settings', 'settings', '2023-04-15 16:52:18', '2023-04-15 16:52:18'),
(25, 'delete_settings', 'settings', '2023-04-15 16:52:18', '2023-04-15 16:52:18'),
(26, 'browse_websites', 'websites', '2023-04-16 16:14:21', '2023-04-16 16:14:21'),
(27, 'read_websites', 'websites', '2023-04-16 16:14:21', '2023-04-16 16:14:21'),
(28, 'edit_websites', 'websites', '2023-04-16 16:14:21', '2023-04-16 16:14:21'),
(29, 'add_websites', 'websites', '2023-04-16 16:14:21', '2023-04-16 16:14:21'),
(30, 'delete_websites', 'websites', '2023-04-16 16:14:21', '2023-04-16 16:14:21'),
(31, 'browse_sliders', 'sliders', '2023-04-17 09:10:25', '2023-04-17 09:10:25'),
(32, 'read_sliders', 'sliders', '2023-04-17 09:10:25', '2023-04-17 09:10:25'),
(33, 'edit_sliders', 'sliders', '2023-04-17 09:10:25', '2023-04-17 09:10:25'),
(34, 'add_sliders', 'sliders', '2023-04-17 09:10:25', '2023-04-17 09:10:25'),
(35, 'delete_sliders', 'sliders', '2023-04-17 09:10:25', '2023-04-17 09:10:25'),
(36, 'browse_sections', 'sections', '2023-04-17 10:12:25', '2023-04-17 10:12:25'),
(37, 'read_sections', 'sections', '2023-04-17 10:12:25', '2023-04-17 10:12:25'),
(38, 'edit_sections', 'sections', '2023-04-17 10:12:25', '2023-04-17 10:12:25'),
(39, 'add_sections', 'sections', '2023-04-17 10:12:25', '2023-04-17 10:12:25'),
(40, 'delete_sections', 'sections', '2023-04-17 10:12:25', '2023-04-17 10:12:25'),
(41, 'browse_projects', 'projects', '2023-04-17 22:20:20', '2023-04-17 22:20:20'),
(42, 'read_projects', 'projects', '2023-04-17 22:20:20', '2023-04-17 22:20:20'),
(43, 'edit_projects', 'projects', '2023-04-17 22:20:20', '2023-04-17 22:20:20'),
(44, 'add_projects', 'projects', '2023-04-17 22:20:20', '2023-04-17 22:20:20'),
(45, 'delete_projects', 'projects', '2023-04-17 22:20:20', '2023-04-17 22:20:20'),
(46, 'browse_services', 'services', '2023-04-18 01:39:33', '2023-04-18 01:39:33'),
(47, 'read_services', 'services', '2023-04-18 01:39:33', '2023-04-18 01:39:33'),
(48, 'edit_services', 'services', '2023-04-18 01:39:33', '2023-04-18 01:39:33'),
(49, 'add_services', 'services', '2023-04-18 01:39:33', '2023-04-18 01:39:33'),
(50, 'delete_services', 'services', '2023-04-18 01:39:33', '2023-04-18 01:39:33'),
(51, 'browse_letters', 'letters', '2023-04-18 07:00:52', '2023-04-18 07:00:52'),
(52, 'read_letters', 'letters', '2023-04-18 07:00:52', '2023-04-18 07:00:52'),
(53, 'edit_letters', 'letters', '2023-04-18 07:00:52', '2023-04-18 07:00:52'),
(54, 'add_letters', 'letters', '2023-04-18 07:00:52', '2023-04-18 07:00:52'),
(55, 'delete_letters', 'letters', '2023-04-18 07:00:52', '2023-04-18 07:00:52'),
(56, 'browse_events', 'events', '2023-04-22 17:43:54', '2023-04-22 17:43:54'),
(57, 'read_events', 'events', '2023-04-22 17:43:54', '2023-04-22 17:43:54'),
(58, 'edit_events', 'events', '2023-04-22 17:43:54', '2023-04-22 17:43:54'),
(59, 'add_events', 'events', '2023-04-22 17:43:54', '2023-04-22 17:43:54'),
(60, 'delete_events', 'events', '2023-04-22 17:43:54', '2023-04-22 17:43:54'),
(61, 'browse_objectives', 'objectives', '2023-04-25 06:04:35', '2023-04-25 06:04:35'),
(62, 'read_objectives', 'objectives', '2023-04-25 06:04:35', '2023-04-25 06:04:35'),
(63, 'edit_objectives', 'objectives', '2023-04-25 06:04:35', '2023-04-25 06:04:35'),
(64, 'add_objectives', 'objectives', '2023-04-25 06:04:35', '2023-04-25 06:04:35'),
(65, 'delete_objectives', 'objectives', '2023-04-25 06:04:35', '2023-04-25 06:04:35'),
(66, 'browse_contacts', 'contacts', '2023-04-25 17:38:10', '2023-04-25 17:38:10'),
(67, 'read_contacts', 'contacts', '2023-04-25 17:38:10', '2023-04-25 17:38:10'),
(68, 'edit_contacts', 'contacts', '2023-04-25 17:38:10', '2023-04-25 17:38:10'),
(69, 'add_contacts', 'contacts', '2023-04-25 17:38:10', '2023-04-25 17:38:10'),
(70, 'delete_contacts', 'contacts', '2023-04-25 17:38:10', '2023-04-25 17:38:10');

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
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(53, 1),
(54, 1),
(55, 1),
(56, 1),
(57, 1),
(58, 1),
(59, 1),
(60, 1),
(61, 1),
(62, 1),
(63, 1),
(64, 1),
(65, 1),
(66, 1),
(67, 1),
(68, 1),
(69, 1),
(70, 1);

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(10) UNSIGNED NOT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `background` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc_ar` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title_en`, `title_ar`, `home_logo`, `background`, `desc_ar`, `desc_en`, `img`, `created_at`, `updated_at`, `deleted_at`, `logo`) VALUES
(1, 'SATA TRAVEL', 'ساتا ترافيل', 'projects\\April2023\\OsnTlLOfrA8xcuEXVNJv.jpeg', 'projects\\April2023\\akAWWNyXmAp5Rm7a4G1V.jpeg', '<p><strong>ساتا ترافل مفهوم جديد في عالم السفر والسياحة فهي تقدم كافة خدمات السفر والسياحة في منصة واحدة متكاملة مثل حجز تذاكر السفر &ndash; حجز الفنادق &ndash; حجز الرحلات السياحية &ndash; تاجير السيارات &ndash; النقل من والى المطار &ndash; تامين السفر &ndash; حجز البواخر &ndash; القطارات ، حيث اصبح ذلك في منصة واحدة فقط يستطيع من خلاله المسافر الاستفادة من الخدمات السياحية بكل سهولة ويسر وهو في مكانه لتخلق ساتا ترافل مناخًا هادئًا وإطارًا آمنًا لجميع المسافرين إذ تسعى في تقديم أفضل الأسعار لكافة الخدمات السياحية وذلك بهدف تسهيل السفر من ناحية جودة الخدمة والسعر التنافسي.</strong></p>\r\n<p><strong>ولم تحصر تلك الخدمات للافراد فقط بل شملت ايضا شركات السفر والسياحة لتقدم بدورها خدماتها لعملائها من خلال موقع مخصص لشركات السفر والسياحة المشتركة في منصة ساتا ترافل بنظام B2B ، وكل ذلك من اجل نشر ثقافة سهولة السفر ليكون عناء السفر سهلا بوجود ساتا ترافل ، كما تستطيع جميع الشركات استخدام منصة خاصة لهم من خلال رابط مخصص لذلك وذلك لتسهيل عملية حجز كافة خدمات السفر لموظفينهم او ضيوفهم ، فلا داعي للاتصال والبحث عن الحجوزات المناسبة ففي منصة ساتا يستطيع اي مسافر او مستخدم الاطلاع على كافة تفاصيا الرحلات والاسعار لاختيار الانسب منها ، فالان بوجود ساتا ترافل اصبح للسفر متعة.</strong></p>', '<p><strong>SATA Travel aims to create quiet and secured conditions for all its users in the traveling and tourism fields.</strong></p>\r\n<p><strong>So, the company is seeking to offer the best price in traveling and flight services.</strong></p>\r\n<p><strong>As local and international traveling tickets booking, rent cars, booking cruises, and overall trips, hotels reservations, and travel insurance.</strong></p>\r\n<p><strong>Moreover, the company offers multiple perks for traveling and tourism agencies, also it offers high-quality traveling services with a convoy of global services, with lower expenses.</strong></p>\r\n<p><strong>And all of this is the company&rsquo;s efforts, in its perspectives for the convention of advanced technology in tours and traveling facilities. In addition to, improvement of local and international tourism.</strong></p>\r\n<p><strong>Plan your trip well before it&rsquo;s kicking off with SATA Travel.</strong></p>', 'projects\\April2023\\Hr4iQ65u4fL13r8n1vbM.jpg', '2023-04-17 22:51:21', '2023-04-20 06:15:57', NULL, NULL),
(2, 'SATA PAY', 'ساتا باي', 'projects\\April2023\\Kncxx1HX2XfQ828ios20.png', 'projects\\April2023\\knMzIhlhTf1jOfOC1T4M.png', '<p><strong>ساتا باي وجدت لراحة العملاء فمن خلال تطبيقها المتميز ساهم ذلك في توفير الجهد المبذول في دفع الفواتير والالتزامات المالية بشتى انواعها وتسهيل المعاملات المالية لتغطي بذلك شبكة واسعة بجمع كافة موفري الخدمات وتسهل دفع فواتير تلك الخدمات المستخدمين</strong></p>\r\n<p><strong>فقد جاءت ساتا باي لتقديم افضل واحدث الخدمات عبر تطبيق الهاتف الذكي لتلبية احتياجات أكبر فئة ممكنة من مستخدمي خدمات الدفع الالكتروني .</strong></p>\r\n<p><strong>وتتمثل الخدمات في عمليات دفع الفواتير وسداد اشتراكات الهاتف النقال وكذلك شحن أرصدة الهاتف النقال وتحويل الاموال داخلًيا وخارجًيا ، يأتي كل هذا في إطار تحقيق أعلى معايير جودة الخدمة ، والامان التام وسياسة الخصوصية التي تنفرد بها ساتا باي عن غيرها إيماًنا منها&nbsp; لتسخير الفكر التكنولوجي الحديث لراحة خدمة المستخدم فيما يخص المعاملات المالية بكافة انواعها.</strong></p>', '<p><strong>Technological development has contributed to saving efforts in bill collection and facilitating financial transactions.</strong></p>\r\n<p><strong>Our services cover a wide network of users both locally and globally.</strong></p>\r\n<p><strong>SATA Pay has come to provide the best and newest of its variant services for all smartphone users.</strong></p>\r\n<p><strong>According to their needs for electronic payment.</strong></p>\r\n<p><strong>We offer different services such as sending and receiving local, and international transfers.</strong></p>\r\n<p><strong>As well as the company aims to decrease its commission in all transferring processes.</strong></p>\r\n<p><strong>All mentioned before, under the highest conditions of safety and security process and privacy policies. Which distinguishes us from others.</strong></p>\r\n<p><strong>All that from our belief to harness the technological boom for the benefit of individuals regarding financial transactions and bill payments.</strong></p>', 'projects\\April2023\\giOTjUWrb8cBSV713qQ2.jpg', '2023-04-17 22:53:10', '2023-04-20 06:15:10', NULL, NULL),
(3, 'SATA MALL', 'ساتا مول', 'projects\\April2023\\a5ud1hOd85zGB93RmEJd.jpeg', 'projects\\April2023\\r6omwFKO3oTCTO2tceyF.png', '<p><strong>ساتا مول مفهوم جديد في عالم التسوق الرقمي المواكب لاحدث تطورات التكنولوجيا الجديد والتي تسعى اليه ساتا مول من خلال تقديم ارقى وافضل المنتجات لعملائها وذلك من مختلف الشركات والمحلات المشاركة في منصتها ، كما ان ساتا مول تبني علاقتها مع عملائها من خلال جودة المنتجات المتوفرة في المنصة وتضمن جودتها من خلال الشركات والمحلات المشاركة التي تم اختيارها بعناية فائقة إذ تقدم مجموعة متنوعة من كافة المنتجات باسعار تنافسية مع توفير وسائل دفعٍ مرنه وسهلة وخدمه شحنٍ سريع ، وتتميز ساتا مول بعرض مئات الالاف من المنتجات المختلفة عبر منصتها المتميزة وذلك من اجل تسهيل عملية التسوق لتكون في مكان واحد ولتغطي كافة احتياجات عملائها المختلفة من الشراء والمتعة في التسوق سعيا منها لتوفر الوقت والجهد المبذول من خلال ضغطة زر واحد ليصل الى العميل كل ما يريد .</strong></p>\r\n<p><strong>&nbsp;كما تُتيح ساتا مول لمختلف المتاجر الاشتراك على منصتها وعرض جميع منتجاتهم ، وتوفر لهم التسهيلات اللازمة لتحقيق اعلى معدلات بيع لهم من خلال الاعلانات والترويج المخطط لها&nbsp; لـ منصة ساتا مول ، كما تم توفير خدمات شحن وتوصيل تتميز بالسهولة والامان لكافة العملاء والمشتركين من التجار لتُحقيق أعلى معدلات الجودة والأمان لتُصبح منصة ساتا مول المفهوم الراقي في عالم التسوق الالكتروني.</strong></p>', '<p><strong>SATA Mall aims to make the purchasing process easier and more interesting.</strong></p>\r\n<p><strong>All in one place, at the same time, this is what SATA Mall aims for; so, it offers a wide range and Varied products, spot delivery, and variant payment methods.</strong></p>\r\n<p><strong>SATA Mall offers hundreds of products throughout its platform; to cover overall its users&rsquo; needs of purchasing and saving their efforts and wasted money in shopping.</strong></p>\r\n<p><strong>as well as giving a chance for many stores to share most of their product on its platform besides that, it is saving different facilities for getting their revenues.</strong></p>\r\n<p><strong>In addition to easy, secure delivery and shipping.</strong></p>\r\n<p><strong>the company reveals high-quality standards and low expenses in its all shipment and delivery process.</strong></p>\r\n<p><strong>which reflects in SATA Mall&rsquo;s upscale concept of shopping systems.&nbsp;</strong></p>', 'projects\\April2023\\JpJU91UfdPYDx7mrWP2E.jpg', '2023-04-17 22:54:01', '2023-04-20 06:45:34', NULL, NULL),
(4, 'SATA EXPRESS', 'ساتا اكسبريس', 'projects\\April2023\\A59tu4Q8M5v3RRXzKGaX.jpeg', 'projects\\April2023\\glu1GVeqv6hTgOnsYb8w.png', '<p>تهدف شركة ساتا إكسبريس إلى تحقيق أقصى معدلات الجودة والأمان أثناء الشحن والتوصيل.</p>\r\n<p>إذ تُمكّن منصة ساتا إكسبريس كافة مستخدميها &ndash; في جميع أنحاء العالم &ndash; من متابعة شُحنتهم عبر منصتها خطوة بخطوة إلى أن تصل إليهم؛ لتصبح عملية الشحن والتوصيل أسرع وأكثر مرونة.</p>\r\n<p>تُقدّم الشركة كل هذا في نطاق الجودة العالية والعمولة الأقل.</p>\r\n<p>ومن هذا المنطلق؛ توفر شركة ساتا إكسبرس توصيلًا أمنًا للبضائع؛ لتضع مفهومًا جديدًا للخدمات اللوجستية المتطورةمحليًا ودوليًّا.</p>\r\n<p>ساتا إكسبريس عندما تجتّمع الخدمات المتطورة بالتكلفة الأقل.</p>', '<p><strong>SATA Express aims to achieve the highest quality and security during shipping and deliverability.</strong></p>\r\n<p><strong>That is which enables all its users -all over the world- to follow up their shipments step by step through its platform.</strong></p>\r\n<p><strong>To make shipping and delivery easier and more secure. The company offers all of that with benefits of high quality and low commission.</strong></p>\r\n<p><strong>From this point, SATA Express company offers secured goods delivery which presents a new concept in advanced logistics services Local and international.</strong></p>\r\n<p><strong>SATA Express when advanced technology is paired with lower expenses.</strong></p>', 'projects\\April2023\\TV1040umWgKW08kCmpI0.jpg', '2023-04-17 22:54:45', '2023-04-20 06:12:36', NULL, NULL),
(5, 'SATA GO', 'ساتا جو', 'projects\\April2023\\mn6hvonLnLe2LWIw1TsE.jpeg', 'projects\\April2023\\jzz24WNEwPGEErYRVaXC.png', '<p><strong>ساتا جو تُقدّم فكرًا جديدًا ومتنوعًا في خدمات المشاوير والرحلات الداخلية ، فلقد تم تصميم تطبيقها بعناية فائقة ومتميزة في طريقة طرح الخدمة للركاب فلقد تم مراعاة اعلى مقاييس لتوفير الراحة التامة والرفاهية لكافة المستخدمين فهي تقدم أكثر من نظام لقضاء المشاوير من خلال طلب السيارات او الباص اوالدراجات الناريّة من حيث تنوع طريقة التسعير والتأجير وذلك لتلبي كافة السبل للطريقة الذي يرغب بها الراكب في قضاء مشاويره .</strong></p>\r\n<p><strong>كما توفر للسائق أكثر من نظام في التعامل لتُتيح الفرصة لمن يرغب منهم في المشاركة لبناء منظومة بعدد لا نهائي من السيارات ووسائل النقل المختلفة لتغطية شبكة واسعة في جميع&nbsp; الأماكن والمناطق ، من منطلق مبدأ معايير الجودة والراحة والسلامة التي وضعتها الشركة لكلٍ من الراكب والسائق على حدٍ سواء لضمان أعلى جودة وأمان أثناء الرحلة لتكون ساتا جو الفكر المتطوّر لخدمات المشاوير بأفضل الأسعار ورحلة امنه.</strong></p>', '<p><strong>SATA Go came to display new innovative services in car rides and indoor trips; so it aims to provide complete comfort and luxury for all users.</strong></p>\r\n<p><strong>By, offering multiple choices in car renting, buses, and scooters, with different payment methods.</strong></p>\r\n<p><strong>On the other hand, offering different payment facilities for suppliers encourages those who want to share.</strong></p>\r\n<p><strong>Accordingly, we save an endless number of different transportations and cars, Covering a broad range of governorates.</strong></p>\r\n<p><strong>All of that, inside a high-quality, comfort and security of its framework for both captain and passenger; to guarantee the highest level of safety and quality during the trip.</strong></p>\r\n<p><strong>SATA Go is a new revolutionary idea for car rides with the best prices and the lowest commissions.</strong></p>', 'projects\\April2023\\N96r1nMQqr4bWhM7B1lh.jpg', '2023-04-17 22:55:39', '2023-04-20 06:11:51', NULL, NULL),
(6, 'SATA FOOD', 'ساتا فوود', 'projects\\April2023\\cw1ouKvbo2WhPODRy6fX.png', 'projects\\April2023\\M6qVrTQc4ZqoxObDFKYC.png', '<p><strong>تُعد ساتا فوود صرحًا جديدًا في مفهوم التكنولوجيا المتطورة لتقديم توصيل طلبات المطاعم والسوبرماركت والصيدليّات عبر تطبيق الهواتف الذكية من خلال منصتها المتميزة ، إذ توفر عدة امتيازات لِكِلٍ من العميل ومقدمي الخدمة على حدٍّ سواء حيث تقدم للعميل مجموعة واسعة ومتنوعة من المطاعم وكذلك السوبر ماركت والصيدليات ليختار من بينها ما يناسبه مع خدمة توصيل الطلبات في أسرع وقت او يستطيع العميل ان يستلم طلبه بنفسه .</strong></p>\r\n<p><strong>كما تقدم ساتا فوود لعملائها عروضًا متميزة مثل كوبونات خصم وهدايا بشكلٍ مستمر ويأتي كل ذلك لتقديم أفضل خدمة لعملائها ، ومن هذا المنطلق تم إطلاق منصة ساتا فاست لتجمع بين رفاهية وسائل التكنولوجيا الحديثة بمنصه متكاملة.</strong></p>', '<p class=\"p1\"><strong>SATA FOOD is a new advanced innovative technology of<span class=\"Apple-converted-space\">&nbsp;&nbsp;</span>food, supermarkets, and medicine deliverability through its platform via Smartphones.</strong></p>\r\n<p class=\"p1\"><strong>Throughout saving multiple perks for both users and providers. About users, The company displays a broad collection of restaurants, supermarkets, and pharmacies for them to choose the best Moreover, spot delivery at a low cost. In addition to offering discount coupons and gifts continuously for them.</strong></p>\r\n<p class=\"p1\"><strong>And Through its faith in the importance of vendors sharing, the company offers varied perks for them such as lowering their financial period, which encourages them to display the best of their products, through the SATA Food&rsquo;s platform.</strong></p>\r\n<p class=\"p1\"><strong>All of that to provide our customers with the best services, so, we decided to release the SATA FOOD company that collects between the welfare of new advanced technology and low expenses.</strong></p>', 'projects\\April2023\\iZkWkRCwo5Lfc7FBYeI6.png', '2023-04-17 22:56:18', '2023-04-20 06:11:12', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '2023-04-15 16:52:18', '2023-04-15 16:52:18'),
(2, 'user', 'Normal User', '2023-04-15 16:52:18', '2023-04-15 16:52:18');

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` int(10) UNSIGNED NOT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc_ar` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `background` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `background_vedio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `background_vedio_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `route_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `header_title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `header_title_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `title_en`, `title_ar`, `desc_ar`, `desc_en`, `background`, `position`, `created_at`, `updated_at`, `deleted_at`, `background_vedio`, `background_vedio_link`, `image`, `route_url`, `header_title_en`, `header_title_ar`) VALUES
(1, NULL, NULL, 'مجموعة ساتا للتكنولوجيا تمثل الفكر الجديد والمتطور لتقديم الخدمات بمفهوم الجودة المطلق في العديد من المجالات المختلفة مثل (توصيل الطعام – الشحن– النقل– التسوق – السياحة والسفر – المدفوعات وتحويل الأموال).', 'SATA Technology Group represents the new and advanced thinking to provide services with the concept of absolute quality in many different fields such as (Food delivery – shipping – transportation – shopping – tourism and travel – payments and money transfer).', 'sections\\April2023\\BhtHlQK7uGUzHitY9r0L.png', 'home-about', '2023-04-17 10:22:31', '2023-04-17 12:15:41', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Social Responsibility', 'المسئولية المجتمعية', '<p>هي من الأسس التي تهتم بها مجموعة ساتا ؛&nbsp; فالمشاركة المجتمعية وفق منظومة مجموعة ساتا تسعى إلى&nbsp; تقديم أيّ خدمة بمنظور إنساني بعيدًا&nbsp; عن الربح والتجارة ، فسياستها رُسمت على ذلك،&nbsp; ووضعت نصب أعينها كل ما من شأنه المساعدات المجتمعية والإنسانية.</p>\r\n<p>كما أن المشاركة بمشاريع وبرامج تهدف إلى&nbsp; تطوير الخدمات المجتمعيّة والمواكبة بين التكنولوجيا الحديثة و العمل المؤسسي.</p>\r\n<p>كما نعمل على نشر ثقافة&nbsp; المسؤولية المجتمعية ويتمثل هذا النوع من الأنشطة في الخدمات التي تقدم النفع العام لأفراد المجتمع، والمشاركة مع الجميع في تقديم تلك الأنشطة؛ بغرض القضاء على المشكلات الاجتماعية مما يخلق مناخاً جاذباً؛&nbsp; للتقدم والازدهار لكافة أفراد المجتمع.</p>', '<p><strong>One of the fundamentals that SATA Group cares for,&nbsp;</strong><strong>Community participation according to the SATA Group&nbsp;</strong><strong>framework</strong><strong>&nbsp;seeks to provide any service with a humanitarian perspective away from profit and trade.</strong><strong>&nbsp;Its policy has been drawn and it kept an eye on all humanities and social contributions with those projects and programs.</strong></p>\r\n<p><strong>Our group aims to implement social services and keep up between advanced technology and working institutions; as well as we work to distribute the culture of social responsibility.</strong></p>\r\n<p><strong>Those types&nbsp;</strong><strong>of activities&nbsp;</strong><strong>are represented</strong><strong>&nbsp;in services that provide public benefit to members of the community and participate with everyone in providing these activities&nbsp;</strong><strong>to&nbsp;</strong><strong>eliminate social problems, which creates an attractive climate for progress and prosperity for all members of society.</strong></p>', NULL, 'home-intro', '2023-04-17 22:11:48', '2023-04-17 22:11:48', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'SATA IS THE NEW INNOVATIVE THINKING', 'ساتا هي فكر جديد', '<p>في تطوير منظومه الخدمات الالكترونيه</p>', '<p>In the development of the electronic services system</p>', 'sections\\April2023\\kSYPrZ4YC41ra2AeogX6.png', 'home-screens', '2023-04-18 02:05:56', '2023-04-19 04:33:06', NULL, 'sections/33.mp4', 'https://www.youtube.com/watch?v=K3d4CT9XRXE', 'sections\\April2023\\vS9WMDKE6hGCdmCnhT1X.png', NULL, NULL, NULL),
(4, 'letters', 'letters', NULL, NULL, NULL, 'home-letters', '2023-04-19 05:05:23', '2023-04-19 05:12:28', NULL, 'sections/44.mp4', NULL, 'sections\\April2023\\QI7hanrjbxpwYpuRabyz.png', NULL, NULL, NULL),
(5, 'WHO WE ARE', 'من نحن', '<p class=\"p1\" dir=\"rtl\">مجموعة ساتا للتكنولوجيا تمثل الفكر الجديد والمتطور لتقديم الخدمات بمفهوم الجودة المطلق في العديد من المجالات المختلفة مثل<span class=\"s1\">&nbsp;(</span>توصيل الطعام<span class=\"s1\">&nbsp;&ndash;&nbsp;</span>الشحن<span class=\"s1\">&nbsp;&ndash;&nbsp;</span>النقل<span class=\"s1\">&nbsp;&ndash;&nbsp;</span>التسوق<span class=\"s1\">&nbsp;&ndash;&nbsp;</span>السياحة والسفر<span class=\"s1\">&nbsp;&ndash;&nbsp;</span>المدفوعات وتحويل الأموال<span class=\"s1\">).</span></p>\r\n<p>تأسست مجموعة ساتا للتكنولوجيا عام ٢٠٢٠م بجمهورية مصر العربية محافظة القاهرة.</p>\r\n<p>ومنذ ذلك الوقت بدأنا&nbsp; في تنفيذ خططنا الاستراتيجية للاندماج بالسوق المصري والعمل به ونصب أعيننا على الهدف أن&nbsp; تكون مجموعة ساتا الأفضل.</p>\r\n<p>وذلك من خلال تقديم خدمات بجودة احترافية وسعر تنافسي لعملائنا؛&nbsp; باستخدام منصات المجموعة الإلكترونية (تطبيقات الهواتف الذكية &ndash; المواقع الالكترونية) إذ نهتم بأدق التفاصيل والتي ينتج عنها أفضل تجربة للمستخدم يمكن أن يحصل عليها عند استخدام خدمات ساتا.</p>\r\n<p style=\"direction: rtl;\">ونظرًا لأهمية هذه المجالات قامت الشركة بجمع العديد من الخبراء والاستشاريين؛ لتكوين فريق عمل رائع لتقديم هذه الخدمات لعملائنا الكرام، بدرجة عالية من الاحترافية؛ إذ أنَّ رضاء عملائنا في المقام الأول دائما، &nbsp;لذلك فان قسم الأبحاث والتطوير بالمجموعة يعمل بشكل متواصل على ابتكار أساليب وتقنيات جديدة لعملائنا وتقديم أفضل&nbsp; تجربة لهم يمكن الحصول عليها لتكون مجموعة ساتا هي (الاختيار الأفضل).</p>', '<p><strong>SATA Technology Group represents the new and advanced thought to provide services with the concept of absolute quality in many different fields such as (food delivery &ndash; shipping &ndash; transportation &ndash; shopping &ndash; tourism and travel &ndash; payments and money transfer).</strong></p>\r\n<p><strong>SATA Technology Group was established in 2020 in the Arab Republic of Egypt, Cairo Governorate, and since that we have started implementing our strategic plans to integrate into the Egyptian market and working with it.</strong></p>\r\n<p><strong>setting our sights on the goal for SATA Group to be the best, by providing services with professional quality and a competitive price to our customers using (mobile applications &ndash; websites), where we care about the smallest details, resulting in the best user experience that can be obtained when using SATA group services, and due to the importance of these areas, the company has gathered many experts and consultants to form</strong><strong>&nbsp;a team of experts&nbsp;</strong><strong>to provide these services to our valued customers with a high degree of professionalism,</strong><strong>&nbsp;our customers&rsquo; satisfaction came primarily</strong><strong>, so&nbsp;</strong><strong>the department of research and development</strong><strong>&nbsp;of our Group is constantly working on innovating new methods and technologies for our customers and providing them with the best experience that can be obtained to make SATA Group (the best choice).</strong></p>', 'sections\\April2023\\0RDrcaK0KE8XNsvIAcib.png', 'about_page', '2023-04-19 16:18:17', '2023-04-25 04:37:45', NULL, NULL, NULL, NULL, NULL, 'KNOW MORE ABOUT SATA', 'اعرف المزيد عن ساتا'),
(9, NULL, NULL, NULL, NULL, 'sections\\April2023\\BFNdhMnhLToQ59LzK0IH.png', 'home-services', '2023-04-23 07:57:35', '2023-04-23 07:57:35', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, NULL, NULL, NULL, NULL, 'sections\\April2023\\uaN2mkwb6gmTI6HfGufp.png', 'events-page', '2023-04-25 11:11:29', '2023-04-25 11:11:29', NULL, NULL, NULL, NULL, NULL, 'SataGroup Events', 'احداث مجموعه ساتا'),
(11, 'Contact Us', 'اتصل بنا', NULL, NULL, 'sections\\April2023\\htlrJCc5fS5rXVszWSl0.png', 'contact_us_page', '2023-04-25 15:04:30', '2023-04-25 15:15:19', NULL, NULL, NULL, 'sections\\April2023\\J6gapZjvOSWuyCUSOe8v.png', NULL, 'Contact Us', 'اتصل بنا'),
(12, NULL, NULL, '<h2 class=\"titi\">1 - نظرة عامة:</h2>\r\n<p class=\"parg\">باستخدامك لمنصة لساتا باي فانك تتيح لها الاطلاع على معلوماتك الشخصية وملفات تعريف الارتباط بهذه المعلومات وذلك حول كيفية قيام لساتا باي بجمع ومعالجة بياناتك الشخصية عند زيار ة / استخدا م موقعنا الإلكتروني أو التطبيقا ت.</p>\r\n<h2 class=\"titi\">2 - من نحن:</h2>\r\n<p class=\"parg\">- تعتبر لساتا باي احدى منصات التكنولوجيا الحديثة المملوكة لشركة مجموعة ساتا للتكنولوجيا \"Sata Technology Group \" حيث أنها تمكن كافة الجمهور من خلال طرحها على شبكة الانترنت ، من سداد فواتير \" الكهرباء والغاز وشبكات الهاتف المحمول ، والهاتف الأرضي ، ...... إلي أخره من الفواتير والخدمات الآخرى ، وذلك بهدف خلق مجتمع خدمي بسيط للجمهور ، يربط بينهم وبين مقدمي الخدمات .</p>\r\n<h2 class=\"titi\">3 - حق التعدي ل و/ أ و الحذف في سياسية الخصوصية :</h2>\r\n<p class=\"parg\">- تحتفظ لساتا باي بح قها في تحديث \"و/ أو \" تغيير، \"و/ أو\" حذف أي من بنود سياسة الخصوصية هذه بما يتوافق مع الأحكام القانونية. وسنقوم بإعلامك بأي تغييرات مهمة، مثل تغييرات الغرض من المعالجة أو الأغراض الجديدة لها وفي هذه الحالة، لن نقوم بمعالجة بياناتك الشخصية بدون الحصول على موافقتك على التعديلات.</p>\r\n<h2 class=\"titi\">4 - غاية معالجة البيانات :</h2>\r\n<p class=\"parg\">إننا نستخدم البيانات الشخصية المطلوبة فقط حتى نتمكن من خدمتك وهو أمر إلزامي لنا حتى نتمكن من توصيل المنتجات والخدمات إلي ك ، فبدون موافقتك على استخدام بيانات ك ، لن تصبح قادرا على استخدام الخدمات الخاصة بنا.</p>\r\n<h2 class=\"titi\">5 - حقوقك كمستخدم/ عميل :</h2>\r\n<h2 class=\"subtiti\">أ- حقوقك في تقديم المعلومات كمستخدم / عميل / زائر / متصفح</h2>\r\n<ul>\r\n<li>\r\n<p>- بصفتك مستخدم / عميل / زائر / متصفح. / .. فأن الخيار دائماً لديك في ماهية المعلومات التي ترغب في مشاركتها معنا. وبالطبع نحن بحاجة إلى بعض المعلومات من أجل تنفيذ خدمتنا ومع ذلك ، لا يتطلب هذا دائمًا جميع البيانات التي يمكنك إتاحتها لن ا.</p>\r\n</li>\r\n</ul>\r\n<h2 class=\"subtiti\">&zwnj;ب- حق ك في مراجعة وقبول سياسية الخصوصية:</h2>\r\n<ul>\r\n<li>\r\n<p>- لديك الحق في مراجعة سياسة خصوصية البيانات الشخصية والموافقة عليها قبل مع الجة بياناتك الشخصية.</p>\r\n</li>\r\n</ul>\r\n<h2 class=\"subtiti\">&zwnj;ج- حقك في الوصول.</h2>\r\n<ul>\r\n<li>\r\n<p>- لديك الحق في أن يتم إعلانك بالبيانات التي نقوم بتخزينها ومعالجتها المتعلقة بك، وعادة هذا يتم خلال استخدامك للخدمة عن طريق حساب كمثال تغير بيانات خاصة بك &ndash; تظهر مباشرة بعد التعديل بواسطتك -.</p>\r\n</li>\r\n</ul>\r\n<h2 class=\"subtiti\">&zwnj;د- - حقك في تعديل \"و /أ و\" تغير \" و / أو \" تصحيح البيانات:</h2>\r\n<ul>\r\n<li>\r\n<p>- لديك الحق إذا لاحظت أن البيانات التي تم تخزينها غير صحيحة، يمكنك تعديلها / تغيرها / تصحي حه ا مباشرة في ملف التعريف الخاص بك .</p>\r\n</li>\r\n</ul>\r\n<h2 class=\"subtiti\">هــ - حقك في الحذف:</h2>\r\n<ul>\r\n<li>\r\n<p>- يمكنك أن تطلب منا في أي وقت حذف البيانات المتعلقة بك والتي قمنا بتخزينها ومن ثم سيتم إلغاء تنشيط حس ابك ، ولا يحق لنا الاحتفاظ سوى بالعمليات التي تمت على حسابك قبل الغاء التنشيط فقط.</p>\r\n</li>\r\n</ul>\r\n<h2 class=\"subtiti\">و - ح قك في تقديم شكوى:</h2>\r\n<ul>\r\n<li>\r\n<p>- إذا كنت تعتق د أننا ارتكبنا خطأً ما فيما يتعلق ببياناتك الشخصية أو بحقوقك، فيمكنك تقديم شكوى في أي وقت عن طريق إرسال بريد إلكتروني أو التواصل على&nbsp;</p>\r\n</li>\r\n</ul>', '<p>1 - Overview:<br>By using the LesataPay platform, you allow it to view your personal information and cookies with this information, about how LesataPay collects and processes your personal data when visiting / using our website or applications.</p>\r\n<p>2<br>c- Your right of access.<br>- You have the right to be informed of the data that we store and process relating to you, and this is usually done during your use of the service through an account, for example, a change in your data - it appears immediately after the modification by you -.</p>', 'sections\\April2023\\fKGBUXU7mYsJKNXtRW1p.png', 'privacy-page', '2023-04-25 18:05:21', '2023-04-25 18:11:58', NULL, NULL, NULL, NULL, NULL, 'Privacy', 'سياسة الخصوصية');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc_ar` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title_en`, `title_ar`, `image`, `desc_en`, `desc_ar`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'VALUES', 'القيم', 'services\\April2023\\SlYb8qTa7dFBkbv85exy.png', '<p><strong>Integrity and transparency in everything we do are characterized by openness, applying the highest standards of professional ethics as a group and as individuals.</strong></p>', '<p>النـزاهة والشفافية يتسم في كل ما نقوم به بالانفتاح مطبقين أعلى مستويات الأخلاقية المهنية كمجموعة وكأفراد</p>', '2023-04-18 01:40:40', '2023-04-18 01:40:40', NULL),
(2, 'INTEGRITY', 'النزاهة', 'services\\April2023\\eTvueq7KqotqCEXoaTE5.png', '<p><strong>We are doing our best to achieve the highest ethical standards on a personal and professional level in all aspects of our business.</strong></p>', '<p>تحقيق أعلى المعايير الأخلاقية على المستوى الشخصي و المهني فى جميع جوانب أعمالنا<span class=\"s2\">.</span></p>', '2023-04-18 01:41:37', '2023-04-18 01:41:37', NULL),
(3, 'CUSTOMER SATISFACTION', 'التركيز على العميل', 'services\\April2023\\5acwvddydV8mh2znwpZo.png', '<p><strong>Our success depends on our ability to provide the best services to our customers, and we are committed to fulfilling<span class=\"Apple-converted-space\">&nbsp;&nbsp;</span>the aspirations of our customers and giving them the best experience</strong></p>', '<p>نجاحنا يعتمد على قدرتنا على توفير أفضل الخدمات لعملائنا، ونحن ملتزمون بتحقيق تطلعات عملائنا<span class=\"s2\"><span class=\"Apple-converted-space\">&nbsp;&nbsp;</span></span>وأن يحصلوا على أفضل تجربة</p>', '2023-04-18 01:42:30', '2023-04-18 01:42:30', NULL),
(4, 'INNOVATION', 'الابتكار', 'services\\April2023\\UmLPT2UJ9p3769KML4ID.png', '<p><strong>We believe that innovation is an essential competitive advantage and a continuous luxury, so we rely on it and promote it</strong></p>', '<p>نحن نؤمن أن الابتكار هو ميزة تنافسية أساسية ورفاهية مستمرة ، لذا نعتمد عليه ونروج له</p>', '2023-04-18 01:43:25', '2023-04-18 01:43:25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `display_name`, `value`, `details`, `type`, `order`, `group`) VALUES
(1, 'site.title', 'Site Title', 'Site Title', '', 'text', 1, 'Site'),
(2, 'site.description', 'Site Description', 'Site Description', '', 'text', 2, 'Site'),
(3, 'site.logo', 'Site Logo', '', '', 'image', 3, 'Site'),
(4, 'site.google_analytics_tracking_id', 'Google Analytics Tracking ID', NULL, '', 'text', 4, 'Site'),
(5, 'admin.bg_image', 'Admin Background Image', '', '', 'image', 5, 'Admin'),
(6, 'admin.title', 'Admin Title', 'Sata Group', '', 'text', 1, 'Admin'),
(7, 'admin.description', 'Admin Description', 'Welcome to Sata Group  Admin Dashboard', '', 'text', 2, 'Admin'),
(8, 'admin.loader', 'Admin Loader', '', '', 'image', 3, 'Admin'),
(9, 'admin.icon_image', 'Admin Icon Image', '', '', 'image', 4, 'Admin'),
(10, 'admin.google_analytics_client_id', 'Google Analytics Client ID (used for admin dashboard)', NULL, '', 'text', 1, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `background` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vedio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `logo`, `background`, `vedio`, `created_at`, `updated_at`, `deleted_at`, `image`) VALUES
(1, 'sliders\\April2023\\aVp0irTarlSQ6VobcE9c.png', 'sliders\\April2023\\TXgnJwmHZWYkvjyIB5am.jpeg', 'sliders/FinalVersion-02_1.mp4', '2023-04-17 09:13:42', '2023-04-17 09:36:28', NULL, NULL),
(2, 'sliders\\April2023\\2w3sMGVhIIk67VmrOdjM.jpg', 'sliders\\April2023\\z3K7xMMK7z4zk6XsjpWk.jpg', 'sliders/techvid1.mp4', '2023-04-19 05:20:31', '2023-04-19 05:20:41', NULL, NULL),
(3, 'sliders\\April2023\\QAkKiQmICOilT4UBzXT8.png', NULL, NULL, '2023-04-19 06:05:53', '2023-04-19 06:05:53', NULL, 'sliders\\April2023\\4AUOlre8IYMXECV1tcyO.png'),
(4, 'sliders\\April2023\\ZsMZ03qI3nC3J4QBlgjf.png', NULL, NULL, '2023-04-19 06:08:31', '2023-04-19 06:08:31', NULL, 'sliders\\April2023\\Jif2uBuN7Vb6ys4jwuwk.png'),
(5, 'sliders\\April2023\\AFnWSc8rZ9pmgshOmWv4.png', NULL, NULL, '2023-04-19 06:15:22', '2023-04-19 06:15:22', NULL, 'sliders\\April2023\\AF4n27xdALdzZnkirDuQ.jpeg'),
(6, 'sliders\\April2023\\dsIESn5cpdQwu4RYK01r.png', NULL, NULL, '2023-04-19 06:16:23', '2023-04-19 06:16:23', NULL, 'sliders\\April2023\\aJTnxRdeCCl8HvmxnM0F.png'),
(7, 'sliders\\April2023\\tzRc8e7qO91yCqUQLHvl.png', NULL, NULL, '2023-04-19 06:17:39', '2023-04-19 06:17:39', NULL, 'sliders\\April2023\\Tsgtdq4Ry9oWjOEMMHPN.png'),
(8, 'sliders\\April2023\\qeIowh28DWco1DU4S75k.png', NULL, NULL, '2023-04-19 06:22:37', '2023-04-19 06:22:37', NULL, 'sliders\\April2023\\UlZBCY3v8C6hYWo4WQN4.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `avatar`, `email_verified_at`, `password`, `remember_token`, `settings`, `created_at`, `updated_at`) VALUES
(1, 1, 'admin', 'admin@admin.com', 'users/default.png', NULL, '$2y$10$5IafZyobTZNKkKHowp2uvuu3fDmSUlgXSZ3/oG8Ld7axZyF.eyMJ2', NULL, NULL, '2023-04-15 16:52:48', '2023-04-15 16:52:48');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `websites`
--

CREATE TABLE `websites` (
  `id` int(10) UNSIGNED NOT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `logo_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo_mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_dec1_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_dec1_ar` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagrame_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_dec2_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_dec2_ar` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_copyrights_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_copyrights_ar` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `websites`
--

INSERT INTO `websites` (`id`, `title_en`, `title_ar`, `logo_ar`, `created_at`, `updated_at`, `deleted_at`, `logo_en`, `logo_mobile`, `email`, `footer_dec1_en`, `footer_dec1_ar`, `facebook_link`, `instagrame_link`, `linkedin_link`, `twitter_link`, `footer_dec2_en`, `footer_dec2_ar`, `footer_image`, `footer_logo`, `footer_copyrights_en`, `footer_copyrights_ar`, `website_url`, `address_en`, `address_ar`, `mobile`) VALUES
(1, 'Sata Group', 'ساتا جروب', 'websites\\April2023\\eYbsyf0umRG1ONg2wMMv.png', '2023-04-16 16:16:19', '2023-04-25 15:58:16', NULL, 'websites\\April2023\\00xZpTn4z7Y2SR13ZocU.png', 'websites\\April2023\\3A9MRyCmQt0eefZ0cX8U.png', 'info@satagrouptechnology.com', '<p>SATA Technology Group represents the new and advanced thought to provide services with the concept of absolute quality in many different fields.</p>', '<p class=\"p1\" dir=\"rtl\">مجموعة ساتا للتكنولوجيا تمثل الفكر الجديد والمتطور</p>\r\n<p class=\"p1\" dir=\"rtl\">لتقديم الخدمات بمفهوم الجودة المطلق في العديد من المجالات&nbsp;المختلفة.</p>', 'https://www.facebook.com/SATA-GROUP-107069824955138/', 'https://www.instagram.com/satagroupeg/', 'https://www.linkedin.com/company/sata-group-eg/', 'https://twitter.com/group_sata', '<p>We at SATA Technology Group have developed a slogan, which is the best choice, and we mean by that in all the meaning of this slogan, and we have identified a set of basic goals</p>', '<p>نحن في مجموعة ساتا للتكنولوجيا وضعنا شعار وهو الاختيار الافضل ونقصد بذلك في كل ما يحمله هذا الشعار من معنى وحددنا مجووعة من الاهداف الاساسية</p>', 'websites\\April2023\\zYxUGfWRGzUbJB54Vpik.png', 'websites\\April2023\\Qab97fUxqypGXbCQnm8Q.png', '<p>All Copyrights reserverd for&nbsp;<strong>SATA Technology Group</strong>&nbsp;2022 | جميع الحقوق محفوظه&nbsp;<strong>لمجموعه ساتا للتكنولوجيا ا</strong>&nbsp;٢٠٢٢</p>', '<p>All Copyrights reserverd for&nbsp;<strong>SATA Technology Group</strong>&nbsp;2022 | جميع الحقوق محفوظه&nbsp;<strong>لمجموعه ساتا للتكنولوجيا ا</strong>&nbsp;٢٠٢٢</p>', 'https://satatechnologygroup.com', 'Cairo,Egypt', 'القاهره , مصر', '+201010101010');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_rows_data_type_id_foreign` (`data_type_id`);

--
-- Indexes for table `data_types`
--
ALTER TABLE `data_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_types_name_unique` (`name`),
  ADD UNIQUE KEY `data_types_slug_unique` (`slug`);

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
-- Indexes for table `letters`
--
ALTER TABLE `letters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_name_unique` (`name`);

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_items_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `objectives`
--
ALTER TABLE `objectives`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_key_index` (`key`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `user_roles_user_id_index` (`user_id`),
  ADD KEY `user_roles_role_id_index` (`role_id`);

--
-- Indexes for table `websites`
--
ALTER TABLE `websites`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `data_rows`
--
ALTER TABLE `data_rows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

--
-- AUTO_INCREMENT for table `data_types`
--
ALTER TABLE `data_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `letters`
--
ALTER TABLE `letters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `objectives`
--
ALTER TABLE `objectives`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `websites`
--
ALTER TABLE `websites`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Constraints for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
