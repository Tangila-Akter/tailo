-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 24, 2023 at 01:30 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tailor`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` bigint UNSIGNED NOT NULL,
  `date` date DEFAULT NULL,
  `reason` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `username`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'superadmin@example.com', 'superadmin', NULL, '$2y$10$mqkT6Hfhd75Rszvp17L/TuS1mXNr3YaWtzuPOy1IwaSOScaNoAwV2', NULL, '2023-09-15 19:46:32', '2023-09-15 19:46:32');

-- --------------------------------------------------------

--
-- Table structure for table `buttons`
--

CREATE TABLE `buttons` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `buttons`
--

INSERT INTO `buttons` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Chanda Oliver', '2023-09-15 20:11:37', '2023-09-15 20:11:37'),
(2, 'Dorian Riley', '2023-09-15 20:11:51', '2023-09-15 20:11:51');

-- --------------------------------------------------------

--
-- Table structure for table `collars`
--

CREATE TABLE `collars` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `collars`
--

INSERT INTO `collars` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Brittany Herrera', '2023-09-15 20:08:38', '2023-09-15 20:08:38'),
(2, 'Gillian Downs', '2023-09-15 20:08:53', '2023-09-15 20:08:53');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fuls`
--

CREATE TABLE `fuls` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fuls`
--

INSERT INTO `fuls` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Benedict Sellers', '2023-09-15 20:11:03', '2023-09-15 20:11:03'),
(2, 'Jakeem Sutton', '2023-09-15 20:11:21', '2023-09-15 20:11:21');

-- --------------------------------------------------------

--
-- Table structure for table `golas`
--

CREATE TABLE `golas` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `golas`
--

INSERT INTO `golas` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Yeo Blackwell', '2023-09-15 20:09:07', '2023-09-15 20:09:07'),
(2, 'Dominic Zimmerman', '2023-09-15 20:09:22', '2023-09-15 20:09:22');

-- --------------------------------------------------------

--
-- Table structure for table `laces`
--

CREATE TABLE `laces` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `laces`
--

INSERT INTO `laces` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Emery Rodriquez', '2023-09-15 20:10:33', '2023-09-15 20:10:33'),
(2, 'Slade Olsen', '2023-09-15 20:10:47', '2023-09-15 20:10:47');

-- --------------------------------------------------------

--
-- Table structure for table `lower_pockets`
--

CREATE TABLE `lower_pockets` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lower_pockets`
--

INSERT INTO `lower_pockets` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Virginia Richmond', '2023-09-15 20:12:04', '2023-09-15 20:12:04'),
(2, 'Abigail Curry', '2023-09-15 20:12:18', '2023-09-15 20:12:18');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_07_24_184706_create_permission_tables', 1),
(5, '2020_09_12_043205_create_admins_table', 1),
(6, '2023_09_05_185609_create_pockets_table', 1),
(7, '2023_09_07_034931_create_upper_pockets_table', 1),
(8, '2023_09_08_054309_create_collars_table', 1),
(9, '2023_09_08_070136_create_golas_table', 1),
(10, '2023_09_09_214050_create_plates_table', 1),
(11, '2023_09_09_220649_create_pastings_table', 1),
(12, '2023_09_09_222933_create_laces_table', 1),
(13, '2023_09_09_235156_create_fuls_table', 1),
(14, '2023_09_10_000602_create_buttons_table', 1),
(15, '2023_09_10_001145_create_lower_pockets_table', 1),
(16, '2023_09_10_004634_create_orders_table', 1),
(17, '2023_09_10_021447_create_stuffs_table', 1),
(18, '2023_09_12_022844_create_accounts_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\Admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint UNSIGNED NOT NULL,
  `order_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci,
  `up_long` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `up_body` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `up_bodyLose` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `put` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hattarLomba` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hattarMuk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kaf` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gola` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `plate_fara` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collar_choura` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `plate_choura` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ghar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hif` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nich_hata` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `madani_fara` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mota_mor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hata_pasting` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `up_pocket` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `up_collar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `up_gola` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `up_plate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `up_pasting` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `up_lace` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `up_ful` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `up_button` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `low_long` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `low_muk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `low_hie` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `low_ghar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `low_komor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `low_belt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `low_hif` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `low_pocket` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cost` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nogod` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_date` date DEFAULT NULL,
  `d_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `up_message` longtext COLLATE utf8mb4_unicode_ci,
  `low_message` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_no`, `name`, `phone`, `email`, `address`, `up_long`, `up_body`, `up_bodyLose`, `pat`, `put`, `hattarLomba`, `hattarMuk`, `kaf`, `gola`, `plate_fara`, `collar_choura`, `plate_choura`, `ghar`, `hif`, `nich_hata`, `madani_fara`, `mota_mor`, `hata_pasting`, `up_pocket`, `up_collar`, `up_gola`, `up_plate`, `up_pasting`, `up_lace`, `up_ful`, `up_button`, `low_long`, `low_muk`, `low_hie`, `low_ghar`, `low_komor`, `low_belt`, `low_hif`, `low_pocket`, `cost`, `nogod`, `order_date`, `d_date`, `up_message`, `low_message`, `created_at`, `updated_at`) VALUES
(1, '12', 'Channing Mcmahon', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-15 19:56:00', '2023-09-15 19:56:00'),
(2, '23', 'Chanda Warner', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-15 19:56:50', '2023-09-15 19:56:50'),
(3, '11', 'Ivor Pugh', '+1 (928) 953-5905', NULL, 'Est sunt iste eu se', 'Ex et officia harum', 'Quia sit ducimus d', 'Qui fugiat voluptas', 'Quas quaerat asperna', 'A totam est velit no', 'Inventore ducimus a', 'Nostrum ipsum et ve', 'Magna velit illum e', 'Explicabo Rerum par', 'Autem illum aute no', 'Animi eligendi volu', 'Necessitatibus perfe', 'Nostrum dolor volupt', 'Consequat Asperiore', 'Occaecat repudiandae', 'Qui blanditiis aperi', 'Velit elit saepe re', 'Cumque ut ut aut mol', 'Maxwell Branch', 'Brittany Herrera', 'Yeo Blackwell', 'Keely Walsh', 'Piper Sargent', 'Slade Olsen', 'Jakeem Sutton', 'Dorian Riley', 'Excepteur sit fuga', 'Officia amet mollit', 'Est doloremque enim', 'Ipsam in Nam nesciun', 'Nam consequatur quis', 'Quis nisi eum tempor', 'Voluptatem Consecte', 'Abigail Curry', '32', '46', '1993-10-05', '2012-12-26', 'Veritatis nisi quis', 'Consequatur sint vel', '2023-09-15 20:12:53', '2023-09-15 20:12:53'),
(4, '41', 'Ginger Dominguez', '+1 (533) 109-3342', NULL, 'Voluptate mollitia q', 'Quasi corrupti qui', 'Et unde tempora ea r', 'Ea vero recusandae', 'Soluta rerum aut adi', 'Sunt doloremque err', 'Expedita deserunt qu', 'Vel et quibusdam dol', 'Tempore perferendis', 'Vitae quia vel labor', 'Nam repellendus Non', 'Velit minima veniam', 'Iusto exercitation f', 'Quasi porro asperior', 'Ut et nemo in conseq', 'Aut aut dolore volup', 'Vero dolorem quis et', 'Enim in fugiat accus', 'Ipsum sunt magni es', 'Ignatius Cochran', 'Gillian Downs', NULL, 'Kaitlin Barton', 'Piper Sargent', 'Emery Rodriquez', 'Benedict Sellers', 'Dorian Riley', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Abigail Curry', '3453', '333', '2023-09-15', '2023-09-06', 'wfrewf', 'wsdefsdef', '2023-09-15 20:14:28', '2023-09-15 20:14:28'),
(5, '7', 'Nolan Travis', '+1 (251) 415-7953', NULL, 'Esse ut saepe corrup', 'Consectetur officia', 'Non dignissimos est', 'Qui officiis corpori', 'Quas fugiat totam e', 'Sunt aute et cupidi', 'Consequuntur reicien', 'Odit quis beatae inv', 'Facere ea qui amet', 'In quos Nam voluptat', 'Soluta dolor quas in', 'Quos dignissimos qua', 'Eum aliquip dolore i', 'Non voluptates volup', 'Quo facere quia cumq', 'Vel iure magni aute', 'Consequuntur quis qu', 'Velit quis do qui id', 'Sit adipisci necess', 'Ignatius Cochran', 'Gillian Downs', NULL, 'Keely Walsh', 'Ella Macias', NULL, 'Jakeem Sutton', 'Dorian Riley', 'In voluptatibus ea m', 'Modi tempore est vo', 'Velit eiusmod dolori', 'Aut eaque ratione co', 'Quia eaque id enim e', 'Sed saepe nulla do e', 'Quia voluptatum sit', 'Abigail Curry', '68', '65', '1974-07-14', '1978-12-11', 'Voluptas quasi liber', 'Voluptate ut eos pro', '2023-09-15 20:15:47', '2023-09-15 20:15:47'),
(6, '33', 'Rachel Gonzales', '+1 (483) 873-1686', NULL, 'Quaerat sed soluta a', 'Ea voluptate consect', 'Nihil labore enim et', 'Ratione nulla sed do', 'Nemo quam laborum S', 'Placeat alias beata', 'Ut temporibus perfer', 'Facilis harum totam', 'Velit quisquam cons', 'Nam Nam dolore et a', 'Aliqua Error aliqui', 'Distinctio Providen', 'Est ipsum ut ea ame', 'Neque debitis incidu', 'Placeat sint quasi', 'Et corporis non duci', 'Amet nisi elit ut', 'Perferendis fugiat v', 'Ipsa reprehenderit', 'Maxwell Branch', NULL, 'Dominic Zimmerman', 'Keely Walsh', NULL, 'Slade Olsen', 'Jakeem Sutton', NULL, 'Reiciendis et sit ex', 'Nihil consequatur di', 'Voluptatem mollitia', 'Aperiam aliqua Qui', 'Similique minus pari', 'Magni eius rerum ass', 'Iusto sed ut exercit', NULL, '47', '72', '1989-06-25', '1970-08-22', 'Consequuntur non eum', 'Reprehenderit in sun', '2023-09-15 20:16:27', '2023-09-15 20:16:27');

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
-- Table structure for table `pastings`
--

CREATE TABLE `pastings` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pastings`
--

INSERT INTO `pastings` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Piper Sargent', '2023-09-15 20:10:05', '2023-09-15 20:10:05'),
(2, 'Ella Macias', '2023-09-15 20:10:17', '2023-09-15 20:10:17');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `group_name`, `created_at`, `updated_at`) VALUES
(1, 'dashboard.view', 'admin', 'dashboard', '2023-09-15 19:46:32', '2023-09-15 19:46:32'),
(2, 'dashboard.edit', 'admin', 'dashboard', '2023-09-15 19:46:33', '2023-09-15 19:46:33'),
(3, 'user.create', 'admin', 'user', '2023-09-15 19:46:33', '2023-09-15 19:46:33'),
(4, 'user.view', 'admin', 'user', '2023-09-15 19:46:33', '2023-09-15 19:46:33'),
(5, 'user.edit', 'admin', 'user', '2023-09-15 19:46:33', '2023-09-15 19:46:33'),
(6, 'user.delete', 'admin', 'user', '2023-09-15 19:46:33', '2023-09-15 19:46:33'),
(7, 'order.create', 'admin', 'order', '2023-09-15 19:46:33', '2023-09-15 19:46:33'),
(8, 'order.view', 'admin', 'order', '2023-09-15 19:46:33', '2023-09-15 19:46:33'),
(9, 'order.edit', 'admin', 'order', '2023-09-15 19:46:33', '2023-09-15 19:46:33'),
(10, 'order.delete', 'admin', 'order', '2023-09-15 19:46:33', '2023-09-15 19:46:33'),
(11, 'account.create', 'admin', 'account', '2023-09-15 19:46:33', '2023-09-15 19:46:33'),
(12, 'account.view', 'admin', 'account', '2023-09-15 19:46:33', '2023-09-15 19:46:33'),
(13, 'account.edit', 'admin', 'account', '2023-09-15 19:46:34', '2023-09-15 19:46:34'),
(14, 'account.delete', 'admin', 'account', '2023-09-15 19:46:34', '2023-09-15 19:46:34'),
(15, 'sms.create', 'admin', 'sms', '2023-09-15 19:46:34', '2023-09-15 19:46:34'),
(16, 'sms.view', 'admin', 'sms', '2023-09-15 19:46:34', '2023-09-15 19:46:34'),
(17, 'sms.edit', 'admin', 'sms', '2023-09-15 19:46:34', '2023-09-15 19:46:34'),
(18, 'sms.delete', 'admin', 'sms', '2023-09-15 19:46:34', '2023-09-15 19:46:34'),
(19, 'stuff.create', 'admin', 'stuff', '2023-09-15 19:46:34', '2023-09-15 19:46:34'),
(20, 'stuff.view', 'admin', 'stuff', '2023-09-15 19:46:35', '2023-09-15 19:46:35'),
(21, 'stuff.edit', 'admin', 'stuff', '2023-09-15 19:46:35', '2023-09-15 19:46:35'),
(22, 'stuff.delete', 'admin', 'stuff', '2023-09-15 19:46:35', '2023-09-15 19:46:35'),
(23, 'setting.create', 'admin', 'setting', '2023-09-15 19:46:35', '2023-09-15 19:46:35'),
(24, 'setting.view', 'admin', 'setting', '2023-09-15 19:46:35', '2023-09-15 19:46:35'),
(25, 'setting.edit', 'admin', 'setting', '2023-09-15 19:46:35', '2023-09-15 19:46:35'),
(26, 'setting.delete', 'admin', 'setting', '2023-09-15 19:46:35', '2023-09-15 19:46:35'),
(27, 'upper_pocket.create', 'admin', 'upper_pocket', '2023-09-15 19:46:35', '2023-09-15 19:46:35'),
(28, 'upper_pocket.view', 'admin', 'upper_pocket', '2023-09-15 19:46:36', '2023-09-15 19:46:36'),
(29, 'upper_pocket.edit', 'admin', 'upper_pocket', '2023-09-15 19:46:36', '2023-09-15 19:46:36'),
(30, 'upper_pocket.delete', 'admin', 'upper_pocket', '2023-09-15 19:46:36', '2023-09-15 19:46:36'),
(31, 'collar.create', 'admin', 'collar', '2023-09-15 19:46:36', '2023-09-15 19:46:36'),
(32, 'collar.view', 'admin', 'collar', '2023-09-15 19:46:36', '2023-09-15 19:46:36'),
(33, 'collar.edit', 'admin', 'collar', '2023-09-15 19:46:36', '2023-09-15 19:46:36'),
(34, 'collar.delete', 'admin', 'collar', '2023-09-15 19:46:36', '2023-09-15 19:46:36'),
(35, 'gola.create', 'admin', 'gola', '2023-09-15 19:46:37', '2023-09-15 19:46:37'),
(36, 'gola.view', 'admin', 'gola', '2023-09-15 19:46:37', '2023-09-15 19:46:37'),
(37, 'gola.edit', 'admin', 'gola', '2023-09-15 19:46:37', '2023-09-15 19:46:37'),
(38, 'gola.delete', 'admin', 'gola', '2023-09-15 19:46:37', '2023-09-15 19:46:37'),
(39, 'plate.create', 'admin', 'plate', '2023-09-15 19:46:37', '2023-09-15 19:46:37'),
(40, 'plate.view', 'admin', 'plate', '2023-09-15 19:46:37', '2023-09-15 19:46:37'),
(41, 'plate.edit', 'admin', 'plate', '2023-09-15 19:46:38', '2023-09-15 19:46:38'),
(42, 'plate.delete', 'admin', 'plate', '2023-09-15 19:46:38', '2023-09-15 19:46:38'),
(43, 'pasting.create', 'admin', 'pasting', '2023-09-15 19:46:38', '2023-09-15 19:46:38'),
(44, 'pasting.view', 'admin', 'pasting', '2023-09-15 19:46:38', '2023-09-15 19:46:38'),
(45, 'pasting.edit', 'admin', 'pasting', '2023-09-15 19:46:38', '2023-09-15 19:46:38'),
(46, 'pasting.delete', 'admin', 'pasting', '2023-09-15 19:46:38', '2023-09-15 19:46:38'),
(47, 'lace.create', 'admin', 'lace', '2023-09-15 19:46:39', '2023-09-15 19:46:39'),
(48, 'lace.view', 'admin', 'lace', '2023-09-15 19:46:39', '2023-09-15 19:46:39'),
(49, 'lace.edit', 'admin', 'lace', '2023-09-15 19:46:39', '2023-09-15 19:46:39'),
(50, 'lace.delete', 'admin', 'lace', '2023-09-15 19:46:39', '2023-09-15 19:46:39'),
(51, 'ful.create', 'admin', 'ful', '2023-09-15 19:46:39', '2023-09-15 19:46:39'),
(52, 'ful.view', 'admin', 'ful', '2023-09-15 19:46:39', '2023-09-15 19:46:39'),
(53, 'ful.edit', 'admin', 'ful', '2023-09-15 19:46:40', '2023-09-15 19:46:40'),
(54, 'ful.delete', 'admin', 'ful', '2023-09-15 19:46:40', '2023-09-15 19:46:40'),
(55, 'button.create', 'admin', 'button', '2023-09-15 19:46:40', '2023-09-15 19:46:40'),
(56, 'button.view', 'admin', 'button', '2023-09-15 19:46:40', '2023-09-15 19:46:40'),
(57, 'button.edit', 'admin', 'button', '2023-09-15 19:46:40', '2023-09-15 19:46:40'),
(58, 'button.delete', 'admin', 'button', '2023-09-15 19:46:40', '2023-09-15 19:46:40'),
(59, 'lower_pocket.create', 'admin', 'lower_pocket', '2023-09-15 19:46:41', '2023-09-15 19:46:41'),
(60, 'lower_pocket.view', 'admin', 'lower_pocket', '2023-09-15 19:46:41', '2023-09-15 19:46:41'),
(61, 'lower_pocket.edit', 'admin', 'lower_pocket', '2023-09-15 19:46:41', '2023-09-15 19:46:41'),
(62, 'lower_pocket.delete', 'admin', 'lower_pocket', '2023-09-15 19:46:41', '2023-09-15 19:46:41'),
(63, 'admin.create', 'admin', 'admin', '2023-09-15 19:46:41', '2023-09-15 19:46:41'),
(64, 'admin.view', 'admin', 'admin', '2023-09-15 19:46:42', '2023-09-15 19:46:42'),
(65, 'admin.edit', 'admin', 'admin', '2023-09-15 19:46:42', '2023-09-15 19:46:42'),
(66, 'admin.delete', 'admin', 'admin', '2023-09-15 19:46:42', '2023-09-15 19:46:42'),
(67, 'admin.approve', 'admin', 'admin', '2023-09-15 19:46:42', '2023-09-15 19:46:42'),
(68, 'role.create', 'admin', 'role', '2023-09-15 19:46:42', '2023-09-15 19:46:42'),
(69, 'role.view', 'admin', 'role', '2023-09-15 19:46:43', '2023-09-15 19:46:43'),
(70, 'role.edit', 'admin', 'role', '2023-09-15 19:46:43', '2023-09-15 19:46:43'),
(71, 'role.delete', 'admin', 'role', '2023-09-15 19:46:43', '2023-09-15 19:46:43'),
(72, 'role.approve', 'admin', 'role', '2023-09-15 19:46:43', '2023-09-15 19:46:43'),
(73, 'profile.view', 'admin', 'profile', '2023-09-15 19:46:43', '2023-09-15 19:46:43'),
(74, 'profile.edit', 'admin', 'profile', '2023-09-15 19:46:43', '2023-09-15 19:46:43');

-- --------------------------------------------------------

--
-- Table structure for table `plates`
--

CREATE TABLE `plates` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `plates`
--

INSERT INTO `plates` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Kaitlin Barton', '2023-09-15 20:09:35', '2023-09-15 20:09:35'),
(2, 'Keely Walsh', '2023-09-15 20:09:50', '2023-09-15 20:09:50');

-- --------------------------------------------------------

--
-- Table structure for table `pockets`
--

CREATE TABLE `pockets` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'superadmin', 'admin', '2023-09-15 19:46:32', '2023-09-15 19:46:32');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL
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
(70, 1),
(71, 1),
(72, 1),
(73, 1),
(74, 1);

-- --------------------------------------------------------

--
-- Table structure for table `stuffs`
--

CREATE TABLE `stuffs` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `salary` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contract` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `upper_pockets`
--

CREATE TABLE `upper_pockets` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `upper_pockets`
--

INSERT INTO `upper_pockets` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Maxwell Branch', '2023-09-15 20:08:05', '2023-09-15 20:08:05'),
(2, 'Ignatius Cochran', '2023-09-15 20:08:22', '2023-09-15 20:08:22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
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
(1, 'tangila Akter', 'manirujjamanakash@gmail.com', NULL, '$2y$10$Au9qE6DCMjTzfNJ4TEIjTuthqMgRoHyZZ/Emyu3Uv0kDklQdva3K6', NULL, '2023-09-15 19:46:31', '2023-09-15 19:46:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`),
  ADD UNIQUE KEY `admins_username_unique` (`username`);

--
-- Indexes for table `buttons`
--
ALTER TABLE `buttons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `collars`
--
ALTER TABLE `collars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fuls`
--
ALTER TABLE `fuls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `golas`
--
ALTER TABLE `golas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laces`
--
ALTER TABLE `laces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lower_pockets`
--
ALTER TABLE `lower_pockets`
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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pastings`
--
ALTER TABLE `pastings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plates`
--
ALTER TABLE `plates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pockets`
--
ALTER TABLE `pockets`
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
-- Indexes for table `stuffs`
--
ALTER TABLE `stuffs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upper_pockets`
--
ALTER TABLE `upper_pockets`
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
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `buttons`
--
ALTER TABLE `buttons`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `collars`
--
ALTER TABLE `collars`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fuls`
--
ALTER TABLE `fuls`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `golas`
--
ALTER TABLE `golas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `laces`
--
ALTER TABLE `laces`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lower_pockets`
--
ALTER TABLE `lower_pockets`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pastings`
--
ALTER TABLE `pastings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `plates`
--
ALTER TABLE `plates`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pockets`
--
ALTER TABLE `pockets`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stuffs`
--
ALTER TABLE `stuffs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `upper_pockets`
--
ALTER TABLE `upper_pockets`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
