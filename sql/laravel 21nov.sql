-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 21, 2022 at 08:08 AM
-- Server version: 5.7.34
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `amministratores`
--

CREATE TABLE `amministratores` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `amministratores`
--

INSERT INTO `amministratores` (`id`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin@test.it', 'e64b78fc3bc91bcbc7dc232ba8ec59e0', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Nome',
  `cognome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Cognome',
  `indirizzo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Indirizzo',
  `citta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Roma',
  `nazione` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Italia',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `email`, `password`, `nome`, `cognome`, `indirizzo`, `citta`, `nazione`, `created_at`, `updated_at`) VALUES
(1, 'admin@test.it', 'e64b78fc3bc91bcbc7dc232ba8ec59e0', 'Iryna', 'Melnikava', 'piazza Spagna', 'Roma', 'italia', '2022-11-04 08:21:48', '2022-11-17 09:16:50'),
(2, 'admin2@test.it', 'e64b78fc3bc91bcbc7dc232ba8ec59e0', 'Pippo', 'Rossi', 'via Limone', 'Roma', 'Italia', NULL, '2022-11-18 07:12:32'),
(3, 'admin3@test.it', 'e64b78fc3bc91bcbc7dc232ba8ec59e0', 'Admin3', 'Admin3', 'Via Papaya', 'Roma', 'Italia', NULL, '2022-11-08 07:05:50'),
(5, 'admin4@test.it', 'e64b78fc3bc91bcbc7dc232ba8ec59e0', 'Nome', 'Cognome', 'Indirizzo', 'Roma', 'Italia', '2022-11-08 08:42:29', '2022-11-08 08:42:29'),
(6, 'Admin5@test.it', 'e64b78fc3bc91bcbc7dc232ba8ec59e0', 'Nome', 'Cognome', 'Indirizzo', 'Roma', 'Italia', '2022-11-08 08:42:52', '2022-11-08 08:42:52'),
(7, 'admin6@test.it', 'e64b78fc3bc91bcbc7dc232ba8ec59e0', 'Nome', 'Cognome', 'Indirizzo', 'Roma', 'Italia', '2022-11-08 08:43:36', '2022-11-08 08:43:36'),
(8, 'admin9@test.it', 'e64b78fc3bc91bcbc7dc232ba8ec59e0', 'Nome', 'Cognome', 'Indirizzo', 'Roma', 'Italia', '2022-11-17 08:39:02', '2022-11-17 08:39:02');

-- --------------------------------------------------------

--
-- Table structure for table `customers_empty`
--

CREATE TABLE `customers_empty` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cognome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `indirizzo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `citta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nazione` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
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
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2014_10_12_100000_create_password_resets_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(10, '2022_11_03_110143_create_customers_table', 1),
(11, '2022_11_15_203249_create_amministratores_table', 2),
(12, '2022_11_18_090640_create_orders_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Customer_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `indirizzo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `citta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cart` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `prezzo` decimal(8,2) NOT NULL,
  `stato` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `Customer_id`, `nome`, `indirizzo`, `citta`, `cart`, `prezzo`, `stato`, `created_at`, `updated_at`) VALUES
(1, '2', 'admin2@test.it', 'via Limone', 'Roma', 'O:8:\"App\\Cart\":3:{s:5:\"items\";a:1:{i:3;a:7:{s:3:\"qty\";i:1;s:10:\"product_id\";s:1:\"3\";s:12:\"product_name\";s:4:\"Mele\";s:16:\"product_discount\";s:5:\"23.00\";s:13:\"product_price\";s:5:\"23.00\";s:13:\"product_image\";s:13:\"Images/11.png\";s:4:\"item\";O:18:\"App\\Models\\Product\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:8:\"products\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:10:{s:2:\"id\";i:3;s:4:\"name\";s:4:\"Mele\";s:11:\"description\";s:334:\"VLorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ut condimentum ex. Nulla eu ultrices purus. Morbi lectus magna, auctor et ultrices aliquet, finibus ut mauris. Curabitur mattis, orci non lobortis scelerisque, erat orci posuere sem, in pellentesque turpis ipsum scelerisque magna. Ut id dolor ac nisi efficitur efficitur.\";s:5:\"price\";s:5:\"28.56\";s:8:\"discount\";s:5:\"23.00\";s:4:\"date\";s:19:\"2022-11-06 00:00:00\";s:8:\"category\";s:1:\"3\";s:5:\"image\";s:13:\"Images/11.png\";s:10:\"created_at\";s:19:\"2022-01-28 19:09:43\";s:10:\"updated_at\";s:19:\"2022-01-28 19:10:13\";}s:11:\"\0*\0original\";a:10:{s:2:\"id\";i:3;s:4:\"name\";s:4:\"Mele\";s:11:\"description\";s:334:\"VLorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ut condimentum ex. Nulla eu ultrices purus. Morbi lectus magna, auctor et ultrices aliquet, finibus ut mauris. Curabitur mattis, orci non lobortis scelerisque, erat orci posuere sem, in pellentesque turpis ipsum scelerisque magna. Ut id dolor ac nisi efficitur efficitur.\";s:5:\"price\";s:5:\"28.56\";s:8:\"discount\";s:5:\"23.00\";s:4:\"date\";s:19:\"2022-11-06 00:00:00\";s:8:\"category\";s:1:\"3\";s:5:\"image\";s:13:\"Images/11.png\";s:10:\"created_at\";s:19:\"2022-01-28 19:09:43\";s:10:\"updated_at\";s:19:\"2022-01-28 19:10:13\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}}}s:8:\"totalQty\";i:1;s:10:\"totalPrice\";d:23;}', '23.00', 1, '2022-11-18 09:00:58', '2022-11-18 09:00:58'),
(2, '2', 'admin2@test.it', 'via Limone', 'Roma', 'O:8:\"App\\Cart\":3:{s:5:\"items\";a:1:{i:3;a:7:{s:3:\"qty\";i:1;s:10:\"product_id\";s:1:\"3\";s:12:\"product_name\";s:4:\"Mele\";s:16:\"product_discount\";s:5:\"23.00\";s:13:\"product_price\";s:5:\"23.00\";s:13:\"product_image\";s:13:\"Images/11.png\";s:4:\"item\";O:18:\"App\\Models\\Product\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:8:\"products\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:10:{s:2:\"id\";i:3;s:4:\"name\";s:4:\"Mele\";s:11:\"description\";s:334:\"VLorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ut condimentum ex. Nulla eu ultrices purus. Morbi lectus magna, auctor et ultrices aliquet, finibus ut mauris. Curabitur mattis, orci non lobortis scelerisque, erat orci posuere sem, in pellentesque turpis ipsum scelerisque magna. Ut id dolor ac nisi efficitur efficitur.\";s:5:\"price\";s:5:\"28.56\";s:8:\"discount\";s:5:\"23.00\";s:4:\"date\";s:19:\"2022-11-06 00:00:00\";s:8:\"category\";s:1:\"3\";s:5:\"image\";s:13:\"Images/11.png\";s:10:\"created_at\";s:19:\"2022-01-28 19:09:43\";s:10:\"updated_at\";s:19:\"2022-01-28 19:10:13\";}s:11:\"\0*\0original\";a:10:{s:2:\"id\";i:3;s:4:\"name\";s:4:\"Mele\";s:11:\"description\";s:334:\"VLorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ut condimentum ex. Nulla eu ultrices purus. Morbi lectus magna, auctor et ultrices aliquet, finibus ut mauris. Curabitur mattis, orci non lobortis scelerisque, erat orci posuere sem, in pellentesque turpis ipsum scelerisque magna. Ut id dolor ac nisi efficitur efficitur.\";s:5:\"price\";s:5:\"28.56\";s:8:\"discount\";s:5:\"23.00\";s:4:\"date\";s:19:\"2022-11-06 00:00:00\";s:8:\"category\";s:1:\"3\";s:5:\"image\";s:13:\"Images/11.png\";s:10:\"created_at\";s:19:\"2022-01-28 19:09:43\";s:10:\"updated_at\";s:19:\"2022-01-28 19:10:13\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}}}s:8:\"totalQty\";i:1;s:10:\"totalPrice\";d:23;}', '23.00', 1, '2022-11-18 09:07:40', '2022-11-18 09:07:40'),
(3, '2', 'admin2@test.it', 'via Limone', 'Roma', 'O:8:\"App\\Cart\":3:{s:5:\"items\";a:1:{i:3;a:7:{s:3:\"qty\";i:1;s:10:\"product_id\";s:1:\"3\";s:12:\"product_name\";s:4:\"Mele\";s:16:\"product_discount\";s:5:\"23.00\";s:13:\"product_price\";s:5:\"23.00\";s:13:\"product_image\";s:13:\"Images/11.png\";s:4:\"item\";O:18:\"App\\Models\\Product\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:8:\"products\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:10:{s:2:\"id\";i:3;s:4:\"name\";s:4:\"Mele\";s:11:\"description\";s:334:\"VLorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ut condimentum ex. Nulla eu ultrices purus. Morbi lectus magna, auctor et ultrices aliquet, finibus ut mauris. Curabitur mattis, orci non lobortis scelerisque, erat orci posuere sem, in pellentesque turpis ipsum scelerisque magna. Ut id dolor ac nisi efficitur efficitur.\";s:5:\"price\";s:5:\"28.56\";s:8:\"discount\";s:5:\"23.00\";s:4:\"date\";s:19:\"2022-11-06 00:00:00\";s:8:\"category\";s:1:\"3\";s:5:\"image\";s:13:\"Images/11.png\";s:10:\"created_at\";s:19:\"2022-01-28 19:09:43\";s:10:\"updated_at\";s:19:\"2022-01-28 19:10:13\";}s:11:\"\0*\0original\";a:10:{s:2:\"id\";i:3;s:4:\"name\";s:4:\"Mele\";s:11:\"description\";s:334:\"VLorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ut condimentum ex. Nulla eu ultrices purus. Morbi lectus magna, auctor et ultrices aliquet, finibus ut mauris. Curabitur mattis, orci non lobortis scelerisque, erat orci posuere sem, in pellentesque turpis ipsum scelerisque magna. Ut id dolor ac nisi efficitur efficitur.\";s:5:\"price\";s:5:\"28.56\";s:8:\"discount\";s:5:\"23.00\";s:4:\"date\";s:19:\"2022-11-06 00:00:00\";s:8:\"category\";s:1:\"3\";s:5:\"image\";s:13:\"Images/11.png\";s:10:\"created_at\";s:19:\"2022-01-28 19:09:43\";s:10:\"updated_at\";s:19:\"2022-01-28 19:10:13\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}}}s:8:\"totalQty\";i:1;s:10:\"totalPrice\";d:23;}', '23.00', 1, '2022-11-18 09:38:45', '2022-11-18 09:38:45'),
(4, '2', 'admin2@test.it', 'via Limone', 'Roma', 'O:8:\"App\\Cart\":3:{s:5:\"items\";a:1:{i:2;a:7:{s:3:\"qty\";i:1;s:10:\"product_id\";s:1:\"2\";s:12:\"product_name\";s:14:\"Frutta esotica\";s:16:\"product_discount\";s:4:\"0.00\";s:13:\"product_price\";s:5:\"17.50\";s:13:\"product_image\";s:13:\"Images/10.png\";s:4:\"item\";O:18:\"App\\Models\\Product\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:8:\"products\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:10:{s:2:\"id\";i:2;s:4:\"name\";s:14:\"Frutta esotica\";s:11:\"description\";s:333:\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ut condimentum ex. Nulla eu ultrices purus. Morbi lectus magna, auctor et ultrices aliquet, finibus ut mauris. Curabitur mattis, orci non lobortis scelerisque, erat orci posuere sem, in pellentesque turpis ipsum scelerisque magna. Ut id dolor ac nisi efficitur efficitur.\";s:5:\"price\";s:5:\"17.50\";s:8:\"discount\";s:4:\"0.00\";s:4:\"date\";s:19:\"2022-11-02 00:00:00\";s:8:\"category\";s:1:\"3\";s:5:\"image\";s:13:\"Images/10.png\";s:10:\"created_at\";s:19:\"2022-01-28 19:09:43\";s:10:\"updated_at\";s:19:\"2022-01-28 19:10:13\";}s:11:\"\0*\0original\";a:10:{s:2:\"id\";i:2;s:4:\"name\";s:14:\"Frutta esotica\";s:11:\"description\";s:333:\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ut condimentum ex. Nulla eu ultrices purus. Morbi lectus magna, auctor et ultrices aliquet, finibus ut mauris. Curabitur mattis, orci non lobortis scelerisque, erat orci posuere sem, in pellentesque turpis ipsum scelerisque magna. Ut id dolor ac nisi efficitur efficitur.\";s:5:\"price\";s:5:\"17.50\";s:8:\"discount\";s:4:\"0.00\";s:4:\"date\";s:19:\"2022-11-02 00:00:00\";s:8:\"category\";s:1:\"3\";s:5:\"image\";s:13:\"Images/10.png\";s:10:\"created_at\";s:19:\"2022-01-28 19:09:43\";s:10:\"updated_at\";s:19:\"2022-01-28 19:10:13\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}}}s:8:\"totalQty\";i:1;s:10:\"totalPrice\";d:17.5;}', '17.50', 1, '2022-11-18 09:54:25', '2022-11-18 09:54:25'),
(5, '3', 'admin3@test.it', 'Via Papaya', 'Roma', 'O:8:\"App\\Cart\":3:{s:5:\"items\";a:1:{i:22;a:7:{s:3:\"qty\";i:1;s:10:\"product_id\";s:2:\"22\";s:12:\"product_name\";s:6:\"Sprite\";s:16:\"product_discount\";s:4:\"4.00\";s:13:\"product_price\";s:4:\"4.00\";s:13:\"product_image\";s:13:\"Images/16.png\";s:4:\"item\";O:18:\"App\\Models\\Product\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:8:\"products\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:10:{s:2:\"id\";i:22;s:4:\"name\";s:6:\"Sprite\";s:11:\"description\";s:428:\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a mattis justo, in venenatis justo. Integer laoreet tincidunt eros. Praesent porttitor malesuada mattis. Vestibulum condimentum ex et vehicula tincidunt. In tincidunt lacinia risus, sed pretium purus elementum eu. Sed ut tincidunt eros, eget tincidunt nibh. Nullam fermentum, enim et blandit accumsan, quam ipsum dictum dolor, hendrerit laoreet eros eros non turpis.\";s:5:\"price\";s:4:\"5.00\";s:8:\"discount\";s:4:\"4.00\";s:4:\"date\";s:19:\"2021-09-01 00:00:00\";s:8:\"category\";s:1:\"2\";s:5:\"image\";s:13:\"Images/16.png\";s:10:\"created_at\";s:19:\"2022-01-28 19:09:43\";s:10:\"updated_at\";s:19:\"2022-01-28 19:10:13\";}s:11:\"\0*\0original\";a:10:{s:2:\"id\";i:22;s:4:\"name\";s:6:\"Sprite\";s:11:\"description\";s:428:\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a mattis justo, in venenatis justo. Integer laoreet tincidunt eros. Praesent porttitor malesuada mattis. Vestibulum condimentum ex et vehicula tincidunt. In tincidunt lacinia risus, sed pretium purus elementum eu. Sed ut tincidunt eros, eget tincidunt nibh. Nullam fermentum, enim et blandit accumsan, quam ipsum dictum dolor, hendrerit laoreet eros eros non turpis.\";s:5:\"price\";s:4:\"5.00\";s:8:\"discount\";s:4:\"4.00\";s:4:\"date\";s:19:\"2021-09-01 00:00:00\";s:8:\"category\";s:1:\"2\";s:5:\"image\";s:13:\"Images/16.png\";s:10:\"created_at\";s:19:\"2022-01-28 19:09:43\";s:10:\"updated_at\";s:19:\"2022-01-28 19:10:13\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}}}s:8:\"totalQty\";i:1;s:10:\"totalPrice\";d:4;}', '4.00', 1, '2022-11-18 14:26:59', '2022-11-18 14:26:59');

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
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `discount`, `date`, `category`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Insalata', 'Verde fresca', '16.25', '0.00', '2022-10-26 22:00:00', '1', 'Images/9.png', '2022-01-28 18:09:43', '2022-11-09 13:13:05'),
(2, 'Frutta esotica', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ut condimentum ex. Nulla eu ultrices purus. Morbi lectus magna, auctor et ultrices aliquet, finibus ut mauris. Curabitur mattis, orci non lobortis scelerisque, erat orci posuere sem, in pellentesque turpis ipsum scelerisque magna. Ut id dolor ac nisi efficitur efficitur.', '17.50', '0.00', '2022-11-01 23:00:00', '3', 'Images/10.png', '2022-01-28 18:09:43', '2022-01-28 18:10:13'),
(3, 'Mele', 'VLorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ut condimentum ex. Nulla eu ultrices purus. Morbi lectus magna, auctor et ultrices aliquet, finibus ut mauris. Curabitur mattis, orci non lobortis scelerisque, erat orci posuere sem, in pellentesque turpis ipsum scelerisque magna. Ut id dolor ac nisi efficitur efficitur.', '28.56', '23.00', '2022-11-05 23:00:00', '3', 'Images/11.png', '2022-01-28 18:09:43', '2022-01-28 18:10:13'),
(13, 'Cavoli', 'Mauris blandit est et nisl dignissim consequat. Morbi volutpat ligula dapibus sapien posuere posuere. Sed semper quam nisl, id porttitor odio ultrices vel. Mauris laoreet quam id arcu ultricies, in volutpat metus cursus. Sed blandit dapibus diam, quis mattis ante pharetra sit amet. Nulla volutpat, metus non sagittis scelerisque, felis magna lobortis magna, ut tincidunt nisi tellus nec magna. Suspendisse sit amet ultrices neque.\r\n\r\n', '18.54', '0.00', '2022-01-30 23:00:00', '1', 'Images/12.png', '2022-01-28 18:09:43', '2022-01-28 18:10:13'),
(14, 'Sunsweet', 'MMauris blandit est et nisl dignissim consequat. Morbi volutpat ligula dapibus sapien posuere posuere. Sed semper quam nisl, id porttitor odio ultrices vel. Mauris laoreet quam id arcu ultricies, in volutpat metus cursus. Sed blandit dapibus diam, quis mattis ante pharetra sit amet. Nulla volutpat, metus non sagittis scelerisque, felis magna lobortis magna, ut tincidunt nisi tellus nec magna. Suspendisse sit amet ultrices neque.\r\n\r\n', '9.68', '0.00', '2021-08-31 22:00:00', '2', 'Images/14.png', '2022-01-28 18:09:43', '2022-01-28 18:10:13'),
(17, 'India Gate', 'Maecenas porta massa a velit fermentum, ac molestie nibh luctus. In vestibulum urna id fermentum ultrices. In volutpat in nisl vel ultrices. Duis varius erat et accumsan sodales. Aliquam erat volutpat. Sed gravida, risus sed tincidunt sagittis, nunc nunc iaculis velit, eget hendrerit ligula mauris ac elit. Vestibulum bibendum, mauris vel efficitur varius, augue massa suscipit justo, sed congue elit purus eget augue. Nunc sodales, nibh ac condimentum sollicitudin, massa tellus auctor metus, ut gravida urna risus sit amet leo. Suspendisse eget bibendum lorem. Nunc quis mollis nisl, ac sollicitudin ligula. Sed quis purus tincidunt, feugiat dolor nec, pulvinar urna. Fusce dictum neque nec ex gravida, vitae bibendum nibh rutrum.', '18.67', '0.00', '2020-07-18 22:00:00', '5', 'Images/3.png', '2022-01-28 18:09:43', '2022-01-28 18:10:13'),
(18, 'Patatine', 'Maecenas porta massa a velit fermentum, ac molestie nibh luctus. In vestibulum urna id fermentum ultrices. In volutpat in nisl vel ultrices. Duis varius erat et accumsan sodales. Aliquam erat volutpat. Sed gravida, risus sed tincidunt sagittis, nunc nunc iaculis velit, eget hendrerit ligula mauris ac elit. Vestibulum bibendum, mauris vel efficitur varius, augue massa suscipit justo, sed congue elit purus eget augue. Nunc sodales, nibh ac condimentum sollicitudin, massa tellus auctor metus, ut gravida urna risus sit amet leo. Suspendisse eget bibendum lorem. Nunc quis mollis nisl, ac sollicitudin ligula. Sed quis purus tincidunt, feugiat dolor nec, pulvinar urna. Fusce dictum neque nec ex gravida, vitae bibendum nibh rutrum.', '28.91', '0.00', '2010-07-18 22:00:00', '5', 'Images/7.png', '2022-01-28 18:09:43', '2022-01-28 18:10:13'),
(19, 'Britania', 'Maecenas porta massa a velit fermentum, ac molestie nibh luctus. In vestibulum urna id fermentum ultrices. In volutpat in nisl vel ultrices. Duis varius erat et accumsan sodales. Aliquam erat volutpat. Sed gravida, risus sed tincidunt sagittis, nunc nunc iaculis velit, eget hendrerit ligula mauris ac elit. Vestibulum bibendum, mauris vel efficitur varius, augue massa suscipit justo, sed congue elit purus eget augue. Nunc sodales, nibh ac condimentum sollicitudin, massa tellus auctor metus, ut gravida urna risus sit amet leo. Suspendisse eget bibendum lorem. Nunc quis mollis nisl, ac sollicitudin ligula. Sed quis purus tincidunt, feugiat dolor nec, pulvinar urna. Fusce dictum neque nec ex gravida, vitae bibendum nibh rutrum.', '18.95', '0.00', '2010-07-19 22:00:00', '5', 'Images/8.png', '2022-01-28 18:09:43', '2022-01-28 18:10:13'),
(22, 'Sprite', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a mattis justo, in venenatis justo. Integer laoreet tincidunt eros. Praesent porttitor malesuada mattis. Vestibulum condimentum ex et vehicula tincidunt. In tincidunt lacinia risus, sed pretium purus elementum eu. Sed ut tincidunt eros, eget tincidunt nibh. Nullam fermentum, enim et blandit accumsan, quam ipsum dictum dolor, hendrerit laoreet eros eros non turpis.', '5.00', '4.00', '2021-08-31 22:00:00', '2', 'Images/16.png', '2022-01-28 18:09:43', '2022-01-28 18:10:13'),
(23, 'Stuzzichini', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a mattis justo, in venenatis justo. Integer laoreet tincidunt eros. Praesent porttitor malesuada mattis. Vestibulum condimentum ex et vehicula tincidunt. In tincidunt lacinia risus, sed pretium purus elementum eu. Sed ut tincidunt eros, eget tincidunt nibh. Nullam fermentum, enim et blandit accumsan, quam ipsum dictum dolor, hendrerit laoreet eros eros non turpis.', '4.00', NULL, '2020-11-23 23:00:00', '5', 'Images/37.png', '2022-01-28 18:09:43', '2022-01-28 18:10:13'),
(28, 'Banane', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a mattis justo, in venenatis justo. Integer laoreet tincidunt eros. Praesent porttitor malesuada mattis. Vestibulum condimentum ex et vehicula tincidunt. In tincidunt lacinia risus, sed pretium purus elementum eu. Sed ut tincidunt eros, eget tincidunt nibh. Nullam fermentum, enim et blandit accumsan, quam ipsum dictum dolor, hendrerit laoreet eros eros non turpis.', '7.00', NULL, '2020-11-14 23:00:00', '3', 'Images/29.png', '2022-01-28 18:09:43', '2022-01-28 18:10:13'),
(29, 'Cavolfiori ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a mattis justo, in venenatis justo. Integer laoreet tincidunt eros. Praesent porttitor malesuada mattis. Vestibulum condimentum ex et vehicula tincidunt. In tincidunt lacinia risus, sed pretium purus elementum eu. Sed ut tincidunt eros, eget tincidunt nibh. Nullam fermentum, enim et blandit accumsan, quam ipsum dictum dolor, hendrerit laoreet eros eros non turpis.', '9.00', '8.00', '2020-11-24 23:00:00', '1', 'Images/30.png', '2022-01-28 18:09:43', '2022-01-28 18:10:13'),
(30, 'Melanzane', '', '9.00', '7.00', '2020-11-22 23:00:00', '1', 'Images/31.png', '2022-01-28 18:09:43', '2022-01-28 18:10:13'),
(31, 'Limoni', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a mattis justo, in venenatis justo. Integer laoreet tincidunt eros. Praesent porttitor malesuada mattis. Vestibulum condimentum ex et vehicula tincidunt. In tincidunt lacinia risus, sed pretium purus elementum eu. Sed ut tincidunt eros, eget tincidunt nibh. Nullam fermentum, enim et blandit accumsan, quam ipsum dictum dolor, hendrerit laoreet eros eros non turpis.', '8.00', NULL, '2020-11-23 23:00:00', '3', 'Images/32.png', '2022-01-28 18:09:43', '2022-01-28 18:10:13'),
(32, 'Cipolle', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a mattis justo, in venenatis justo. Integer laoreet tincidunt eros. Praesent porttitor malesuada mattis. Vestibulum condimentum ex et vehicula tincidunt. In tincidunt lacinia risus, sed pretium purus elementum eu. Sed ut tincidunt eros, eget tincidunt nibh. Nullam fermentum, enim et blandit accumsan, quam ipsum dictum dolor, hendrerit laoreet eros eros non turpis.', '6.00', NULL, '2020-11-23 23:00:00', '1', 'Images/33.png', '2022-01-28 18:09:43', '2022-01-28 18:10:13'),
(33, 'Meloni', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a mattis justo, in venenatis justo. Integer laoreet tincidunt eros. Praesent porttitor malesuada mattis. Vestibulum condimentum ex et vehicula tincidunt. In tincidunt lacinia risus, sed pretium purus elementum eu. Sed ut tincidunt eros, eget tincidunt nibh. Nullam fermentum, enim et blandit accumsan, quam ipsum dictum dolor, hendrerit laoreet eros eros non turpis.', '12.00', '9.00', '2020-11-23 23:00:00', '3', 'Images/34.png', '2022-01-28 18:09:43', '2022-01-28 18:10:13'),
(34, 'Funghi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a mattis justo, in venenatis justo. Integer laoreet tincidunt eros. Praesent porttitor malesuada mattis. Vestibulum condimentum ex et vehicula tincidunt. In tincidunt lacinia risus, sed pretium purus elementum eu. Sed ut tincidunt eros, eget tincidunt nibh. Nullam fermentum, enim et blandit accumsan, quam ipsum dictum dolor, hendrerit laoreet eros eros non turpis.', '18.00', '12.00', '2020-11-24 23:00:00', '1', 'Images/35.png', '2022-01-28 18:09:43', '2022-01-28 18:10:13'),
(35, 'Fragole', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a mattis justo, in venenatis justo. Integer laoreet tincidunt eros. Praesent porttitor malesuada mattis. Vestibulum condimentum ex et vehicula tincidunt. In tincidunt lacinia risus, sed pretium purus elementum eu. Sed ut tincidunt eros, eget tincidunt nibh. Nullam fermentum, enim et blandit accumsan, quam ipsum dictum dolor, hendrerit laoreet eros eros non turpis.', '10.00', NULL, '2020-11-16 23:00:00', '3', 'Images/36.png', '2022-01-28 18:09:43', '2022-01-28 18:10:13'),
(36, 'Brioches', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a mattis justo, in venenatis justo. Integer laoreet tincidunt eros. Praesent porttitor malesuada mattis. Vestibulum condimentum ex et vehicula tincidunt. In tincidunt lacinia risus, sed pretium purus elementum eu. Sed ut tincidunt eros, eget tincidunt nibh. Nullam fermentum, enim et blandit accumsan, quam ipsum dictum dolor, hendrerit laoreet eros eros non turpis.', '4.00', '2.00', '2020-11-25 23:00:00', '6', 'Images/38.png', '2022-01-28 18:09:43', '2022-01-28 18:10:13'),
(37, 'Pane', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a mattis justo, in venenatis justo. Integer laoreet tincidunt eros. Praesent porttitor malesuada mattis. Vestibulum condimentum ex et vehicula tincidunt. In tincidunt lacinia risus, sed pretium purus elementum eu. Sed ut tincidunt eros, eget tincidunt nibh. Nullam fermentum, enim et blandit accumsan, quam ipsum dictum dolor, hendrerit laoreet eros eros non turpis.', '2.50', '2.00', '2020-11-23 23:00:00', '8', 'Images/39.png', '2022-01-28 18:09:43', '2022-01-28 18:10:13'),
(38, 'Grissini', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a mattis justo, in venenatis justo. Integer laoreet tincidunt eros. Praesent porttitor malesuada mattis. Vestibulum condimentum ex et vehicula tincidunt. In tincidunt lacinia risus, sed pretium purus elementum eu. Sed ut tincidunt eros, eget tincidunt nibh. Nullam fermentum, enim et blandit accumsan, quam ipsum dictum dolor, hendrerit laoreet eros eros non turpis.', '6.00', NULL, '2020-11-23 23:00:00', '8', 'Images/40.png', '2022-01-28 18:09:43', '2022-01-28 18:10:13'),
(39, 'Bauletto', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a mattis justo, in venenatis justo. Integer laoreet tincidunt eros. Praesent porttitor malesuada mattis. Vestibulum condimentum ex et vehicula tincidunt. In tincidunt lacinia risus, sed pretium purus elementum eu. Sed ut tincidunt eros, eget tincidunt nibh. Nullam fermentum, enim et blandit accumsan, quam ipsum dictum dolor, hendrerit laoreet eros eros non turpis.', '8.00', NULL, '2020-11-23 23:00:00', '8', 'Images/41.png', '2022-01-28 18:09:43', '2022-01-28 18:10:13'),
(40, 'Cioccolato', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a mattis justo, in venenatis justo. Integer laoreet tincidunt eros. Praesent porttitor malesuada mattis. Vestibulum condimentum ex et vehicula tincidunt. In tincidunt lacinia risus, sed pretium purus elementum eu. Sed ut tincidunt eros, eget tincidunt nibh. Nullam fermentum, enim et blandit accumsan, quam ipsum dictum dolor, hendrerit laoreet eros eros non turpis.', '7.00', NULL, '2021-08-31 22:00:00', '6', 'Images/42.png', '2022-01-28 18:09:43', '2022-01-28 18:10:13'),
(41, 'Paste', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a mattis justo, in venenatis justo. Integer laoreet tincidunt eros. Praesent porttitor malesuada mattis. Vestibulum condimentum ex et vehicula tincidunt. In tincidunt lacinia risus, sed pretium purus elementum eu. Sed ut tincidunt eros, eget tincidunt nibh. Nullam fermentum, enim et blandit accumsan, quam ipsum dictum dolor, hendrerit laoreet eros eros non turpis.', '15.00', NULL, '2020-11-15 23:00:00', '6', 'Images/46.png', '2022-01-28 18:09:43', '2022-01-28 18:10:13'),
(42, 'Frollini', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a mattis justo, in venenatis justo. Integer laoreet tincidunt eros. Praesent porttitor malesuada mattis. Vestibulum condimentum ex et vehicula tincidunt. In tincidunt lacinia risus, sed pretium purus elementum eu. Sed ut tincidunt eros, eget tincidunt nibh. Nullam fermentum, enim et blandit accumsan, quam ipsum dictum dolor, hendrerit laoreet eros eros non turpis.', '12.00', NULL, '2021-08-31 22:00:00', '6', 'Images/47.png', '2022-01-28 18:09:43', '2022-01-28 18:10:13'),
(43, 'Aranciate', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a mattis justo, in venenatis justo. Integer laoreet tincidunt eros. Praesent porttitor malesuada mattis. Vestibulum condimentum ex et vehicula tincidunt. In tincidunt lacinia risus, sed pretium purus elementum eu. Sed ut tincidunt eros, eget tincidunt nibh. Nullam fermentum, enim et blandit accumsan, quam ipsum dictum dolor, hendrerit laoreet eros eros non turpis.', '9.00', NULL, '2020-11-22 23:00:00', '2', 'Images/2.png', '2022-01-28 18:09:43', '2022-01-28 18:10:13'),
(44, 'Yougurt', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a mattis justo, in venenatis justo. Integer laoreet tincidunt eros. Praesent porttitor malesuada mattis. Vestibulum condimentum ex et vehicula tincidunt. In tincidunt lacinia risus, sed pretium purus elementum eu. Sed ut tincidunt eros, eget tincidunt nibh. Nullam fermentum, enim et blandit accumsan, quam ipsum dictum dolor, hendrerit laoreet eros eros non turpis.', '6.00', '5.00', '2020-11-23 23:00:00', '2', 'Images/51.png', '2022-01-28 18:09:43', '2022-01-28 18:10:13'),
(45, 'Succo', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a mattis justo, in venenatis justo. Integer laoreet tincidunt eros. Praesent porttitor malesuada mattis. Vestibulum condimentum ex et vehicula tincidunt. In tincidunt lacinia risus, sed pretium purus elementum eu. Sed ut tincidunt eros, eget tincidunt nibh. Nullam fermentum, enim et blandit accumsan, quam ipsum dictum dolor, hendrerit laoreet eros eros non turpis.', '9.00', NULL, '2020-11-24 23:00:00', '2', 'Images/52.png', '2022-01-28 18:09:43', '2022-01-28 18:10:13'),
(46, 'Schweeps', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a mattis justo, in venenatis justo. Integer laoreet tincidunt eros. Praesent porttitor malesuada mattis. Vestibulum condimentum ex et vehicula tincidunt. In tincidunt lacinia risus, sed pretium purus elementum eu. Sed ut tincidunt eros, eget tincidunt nibh. Nullam fermentum, enim et blandit accumsan, quam ipsum dictum dolor, hendrerit laoreet eros eros non turpis.', '12.00', '10.00', '2020-11-25 23:00:00', '2', 'Images/65.png', '2022-01-28 18:09:43', '2022-01-28 18:10:13'),
(47, 'Bull', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a mattis justo, in venenatis justo. Integer laoreet tincidunt eros. Praesent porttitor malesuada mattis. Vestibulum condimentum ex et vehicula tincidunt. In tincidunt lacinia risus, sed pretium purus elementum eu. Sed ut tincidunt eros, eget tincidunt nibh. Nullam fermentum, enim et blandit accumsan, quam ipsum dictum dolor, hendrerit laoreet eros eros non turpis.', '13.00', NULL, '2020-11-25 23:00:00', '2', 'Images/56.png', '2022-01-28 18:09:43', '2022-01-28 18:10:13'),
(54, 'cipolla', 'cipollino.png', '22', '11', '2022-11-09 11:22:10', '1', 'images/cipolla.png', '2022-11-09 10:22:10', '2022-11-09 13:41:45'),
(55, 'ciao', 'ciao', '33', '22', '2022-11-10 09:09:58', '1', 'images/cipollino.png', '2022-11-10 08:09:58', '2022-11-10 17:37:55'),
(56, 'ddd', 'ffff', '33', '22', '2022-11-02 09:10:57', '1', 'images/cipolla_new.png', '2022-11-10 08:10:57', '2022-11-10 17:46:14');

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
-- Indexes for table `amministratores`
--
ALTER TABLE `amministratores`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `amministratores_email_unique` (`email`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers_empty`
--
ALTER TABLE `customers_empty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `amministratores`
--
ALTER TABLE `amministratores`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `customers_empty`
--
ALTER TABLE `customers_empty`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
