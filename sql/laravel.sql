-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 09, 2022 at 10:25 AM
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
(1, 'admin@test.it', 'e64b78fc3bc91bcbc7dc232ba8ec59e0', 'Iryna', 'Melnikava', 'piazza Duomo', 'Roma', 'italia', '2022-11-04 08:21:48', '2022-11-04 08:21:48'),
(2, 'admin2@test.it', 'e64b78fc3bc91bcbc7dc232ba8ec59e0', 'Nice', 'Surname', 'via Limone', 'Roma', 'Italia', NULL, NULL),
(3, 'admin3@test.it', 'e64b78fc3bc91bcbc7dc232ba8ec59e0', 'Admin3', 'Admin3', 'Via Papaya', 'Roma', 'Italia', NULL, '2022-11-08 07:05:50'),
(5, 'admin4@test.it', 'e64b78fc3bc91bcbc7dc232ba8ec59e0', 'Nome', 'Cognome', 'Indirizzo', 'Roma', 'Italia', '2022-11-08 08:42:29', '2022-11-08 08:42:29'),
(6, 'Admin5@test.it', 'e64b78fc3bc91bcbc7dc232ba8ec59e0', 'Nome', 'Cognome', 'Indirizzo', 'Roma', 'Italia', '2022-11-08 08:42:52', '2022-11-08 08:42:52'),
(7, 'admin6@test.it', 'e64b78fc3bc91bcbc7dc232ba8ec59e0', 'Nome', 'Cognome', 'Indirizzo', 'Roma', 'Italia', '2022-11-08 08:43:36', '2022-11-08 08:43:36');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_11_03_110143_create_customers_table', 1);

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
(1, 'Insalata ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ut condimentum ex. Nulla eu ultrices purus. Morbi lectus magna, auctor et ultrices aliquet, finibus ut mauris. Curabitur mattis, orci non lobortis scelerisque, erat orci posuere sem, in pellentesque turpis ipsum scelerisque magna. Ut id dolor ac nisi efficitur efficitur.', '16.25', '0.00', '2022-01-30 23:00:00', '1', 'Images/9.png', '2022-01-28 18:09:43', '2022-01-28 18:10:13'),
(2, 'Frutta esotica', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ut condimentum ex. Nulla eu ultrices purus. Morbi lectus magna, auctor et ultrices aliquet, finibus ut mauris. Curabitur mattis, orci non lobortis scelerisque, erat orci posuere sem, in pellentesque turpis ipsum scelerisque magna. Ut id dolor ac nisi efficitur efficitur.', '17.50', '0.00', '2022-01-30 23:00:00', '3', 'Images/10.png', '2022-01-28 18:09:43', '2022-01-28 18:10:13'),
(3, 'Mele', 'VLorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ut condimentum ex. Nulla eu ultrices purus. Morbi lectus magna, auctor et ultrices aliquet, finibus ut mauris. Curabitur mattis, orci non lobortis scelerisque, erat orci posuere sem, in pellentesque turpis ipsum scelerisque magna. Ut id dolor ac nisi efficitur efficitur.', '28.56', '23.00', '2022-01-30 23:00:00', '3', 'Images/11.png', '2022-01-28 18:09:43', '2022-01-28 18:10:13'),
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
(52, 'Cipolla', '<p>new cipolla</p>', '14', '12', '2022-11-09 10:12:24', '1', 'images/cipolla.png', '2022-11-09 09:12:24', '2022-11-09 09:12:24');

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
-- Indexes for table `customers`
--
ALTER TABLE `customers`
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
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
