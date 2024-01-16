-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.28-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.6.0.6765
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table pricing.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table pricing.failed_jobs: ~0 rows (approximately)
DELETE FROM `failed_jobs`;

-- Dumping structure for table pricing.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=151 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table pricing.migrations: ~7 rows (approximately)
DELETE FROM `migrations`;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(144, '2014_10_12_000000_create_users_table', 1),
	(145, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(146, '2014_10_12_100000_create_password_resets_table', 1),
	(147, '2019_08_19_000000_create_failed_jobs_table', 1),
	(148, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(149, '2024_01_11_191532_create_prices_table', 1),
	(150, '2024_01_15_083804_create_posts_table', 2);

-- Dumping structure for table pricing.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table pricing.password_resets: ~0 rows (approximately)
DELETE FROM `password_resets`;

-- Dumping structure for table pricing.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table pricing.password_reset_tokens: ~0 rows (approximately)
DELETE FROM `password_reset_tokens`;

-- Dumping structure for table pricing.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table pricing.personal_access_tokens: ~0 rows (approximately)
DELETE FROM `personal_access_tokens`;

-- Dumping structure for table pricing.posts
CREATE TABLE IF NOT EXISTS `posts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table pricing.posts: ~0 rows (approximately)
DELETE FROM `posts`;

-- Dumping structure for table pricing.prices
CREATE TABLE IF NOT EXISTS `prices` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `zipcode` varchar(255) DEFAULT NULL,
  `coop` varchar(255) DEFAULT NULL,
  `license` varchar(255) DEFAULT NULL,
  `product` varchar(255) DEFAULT NULL,
  `books` varchar(255) DEFAULT NULL,
  `tests` varchar(255) DEFAULT NULL,
  `onsite` varchar(255) DEFAULT NULL,
  `online` varchar(255) DEFAULT NULL,
  `practical` varchar(255) DEFAULT NULL,
  `numberOfPractical` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `extraLesson` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table pricing.prices: ~10 rows (approximately)
DELETE FROM `prices`;
INSERT INTO `prices` (`id`, `name`, `email`, `phone`, `website`, `zipcode`, `coop`, `license`, `product`, `books`, `tests`, `onsite`, `online`, `practical`, `numberOfPractical`, `price`, `extraLesson`, `status`, `created_at`, `updated_at`) VALUES
	(2, 'Academia palau', NULL, NULL, NULL, '08206', 'silver', 'B', '2', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 15, 200, 24, 'Yes', '2024-01-12 16:34:19', '2024-01-12 17:41:29'),
	(3, 'armand palau academias', '', '', '', '08206', 'silver', 'B', '2', 'No', 'No', 'No', 'No', 'No', 10, 225, 23, 'Yes', '2024-01-12 16:34:19', '2024-01-12 16:34:19'),
	(4, 'academia sancu', '', '', '', '08206', 'null', 'B', '2', 'No', 'No', 'No', 'No', 'No', 12, 200, 22, 'Yes', '2024-01-12 16:34:19', '2024-01-12 16:34:19'),
	(5, 'ACCION', 'manoli_cano@hotmail.com', '957255431', 'http://www.autoescuelasaccion.com', '14010', 'null', 'B', '2', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 15, 250, 21, 'Yes', '2024-01-12 16:34:19', '2024-01-12 16:34:19'),
	(6, 'san cugat', '', '', '', '14010', 'null', 'B', '2', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 10, 220, 20, 'Yes', '2024-01-12 16:34:19', '2024-01-12 16:34:19'),
	(7, 'san cucu', '', '', '', '14010', 'null', 'B', '2', 'No', 'No', 'No', 'No', 'No', 10, 200, 19, 'Yes', '2024-01-12 16:34:19', '2024-01-12 16:34:19'),
	(8, 'boadilla', '', '', '', '14010', 'gold', 'B', '2', 'No', 'No', 'No', 'No', 'No', 15, 210, 18, 'Yes', '2024-01-12 16:34:19', '2024-01-12 16:34:19'),
	(9, 'ACTIVA-T', 'josemaria-65@hotmail.com', '677560308', '', '41500', 'gold', 'B', '2', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 13, 207, 17, 'Yes', '2024-01-12 16:34:19', '2024-01-12 16:34:19'),
	(10, 'ADAIZ', 'aeadaiz@yahoo.es', '916119884', '', '28917', 'null', 'B', '2', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 15, 204, 16, 'Yes', '2024-01-12 16:34:19', '2024-01-12 16:34:19'),
	(11, 'ad', NULL, NULL, NULL, '12345', 'gold', NULL, NULL, 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', NULL, NULL, NULL, '1', '2024-01-12 17:41:54', '2024-01-12 17:41:54');

-- Dumping structure for table pricing.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table pricing.users: ~1 rows (approximately)
DELETE FROM `users`;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Admin', 'admin@admin.com', NULL, '$2y$12$sgNJ59VRdUXe/i02a.dMCe25OWoLV6EDWZygNdTJjAjUJ5ZUO3VuK', NULL, NULL, NULL);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
