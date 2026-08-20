-- ========================================================
-- BUDILUHUR TV PRODUCTION DATABASE DUMP
-- Database: budiluhur_tv
-- Date: 2026-08-20 04:29:41
-- ========================================================

SET FOREIGN_KEY_CHECKS=0;

DROP TABLE IF EXISTS `cache`;
CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` bigint NOT NULL,
  PRIMARY KEY (`key`),
  KEY `cache_expiration_index` (`expiration`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `cache_locks`;
CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` bigint NOT NULL,
  PRIMARY KEY (`key`),
  KEY `cache_locks_expiration_index` (`expiration`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `created_at`, `updated_at`) VALUES ('1', 'Media Kampus', 'media-kampus', 'Siaran informasi resmi, aktivitas akademik, dan liputan khusus civitas akademika Universitas Budi Luhur.', '2026-08-20 03:57:24', '2026-08-20 03:57:24');
INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `created_at`, `updated_at`) VALUES ('2', 'Komunitas Kreatif', 'komunitas-kreatif', 'Wadah kreasi sinematografi, animasi, seni digital, dan karya inovasi siswa/mahasiswa.', '2026-08-20 03:57:24', '2026-08-20 03:57:24');
INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `created_at`, `updated_at`) VALUES ('3', 'Pembelajaran Media & Jurnalistik', 'pembelajaran-media-jurnalistik', 'Konten edukatif seputar broadcast TV, teknik produksi video, riset redaksi, dan dunia jurnalistik.', '2026-08-20 03:57:24', '2026-08-20 03:57:24');
INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `created_at`, `updated_at`) VALUES ('4', 'Live Report & Event', 'live-report-event', 'Siaran langsung wisuda, inaugurasi, festival budaya, seminar nasional, dan kompetisi kreatif.', '2026-08-20 03:57:24', '2026-08-20 03:57:24');

DROP TABLE IF EXISTS `crew_registrations`;
CREATE TABLE `crew_registrations` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `major` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `division_interest` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reason` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Pending','Reviewed','Accepted','Rejected') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`),
  KEY `failed_jobs_connection_queue_failed_at_index` (`connection`,`queue`,`failed_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `job_batches`;
CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `jobs`;
CREATE TABLE `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` smallint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES ('1', '0001_01_01_000000_create_users_table', '1');
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES ('2', '0001_01_01_000001_create_cache_table', '1');
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES ('3', '0001_01_01_000002_create_jobs_table', '1');
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES ('4', '2026_08_20_000001_create_budiluhur_tv_tables', '1');

DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `category_id` bigint unsigned NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Tim Redaksi BLTV',
  `is_featured` tinyint(1) NOT NULL DEFAULT '0',
  `views` bigint unsigned NOT NULL DEFAULT '0',
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `news_slug_unique` (`slug`),
  KEY `news_category_id_foreign` (`category_id`),
  KEY `news_user_id_foreign` (`user_id`),
  CONSTRAINT `news_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  CONSTRAINT `news_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `news` (`id`, `category_id`, `user_id`, `title`, `slug`, `summary`, `content`, `image_url`, `author_name`, `is_featured`, `views`, `published_at`, `created_at`, `updated_at`) VALUES ('1', '1', NULL, 'Budi Luhur TV: Wadah Media Kampus dan Komunitas Kreatif Siswa', 'budi-luhur-tv-wadah-media-kampus-dan-komunitas-kreatif', 'Budi Luhur TV terus berkomitmen menghadirkan tayangan berkualitas serta sarana mengasah bakat broadcast pemuda.', 'JAKARTA - Budi Luhur TV (BLTV) hadir sebagai media resmi kampus dan komunitas kreatif yang berlokasi di Jakarta Selatan. Melalui berbagai program seperti Live Report, News Digest, dan Sinema Kreatif, BLTV memfasilitasi mahasiswa dan siswa untuk memproduksi konten audio visual berkualitas profesional. Selain siaran langsung kegiatan kampus, BLTV juga rutin mengadakan kelas dan workshop penyiaran.', 'https://images.unsplash.com/photo-1540575467063-178a50c2df87?w=800&auto=format&fit=crop', 'Tim Redaksi BLTV', '1', '1540', '2026-08-20 03:57:25', '2026-08-20 03:57:25', '2026-08-20 03:57:25');
INSERT INTO `news` (`id`, `category_id`, `user_id`, `title`, `slug`, `summary`, `content`, `image_url`, `author_name`, `is_featured`, `views`, `published_at`, `created_at`, `updated_at`) VALUES ('2', '3', NULL, 'Registration Crew BLTV: Kesempatan Bergabung Bersama Tim Media Center', 'registration-crew-bltv-kesempatan-bergabung-bersama-tim-media-center', 'Formulir pendaftaran dibuka untuk divisi Camera Operator, Video Editor, Host/Presenter, dan Redaksi.', 'Media Center Budi Luhur TV mengundang seluruh siswa & mahasiswa aktif Universitas Budi Luhur untuk menyalurkan minat di bidang broadcasting dan produksi media digital. Pendaftaran dilakukan secara online melalui menu Teams & Contact pada situs budiluhur.tv.', 'https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=800&auto=format&fit=crop', 'Divisi HR & Crew BLTV', '1', '2980', '2026-08-19 03:57:25', '2026-08-20 03:57:25', '2026-08-20 03:57:25');

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DROP TABLE IF EXISTS `programs`;
CREATE TABLE `programs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `category_id` bigint unsigned DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `broadcast_schedule` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `host_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('Active','Completed','Upcoming') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `programs_slug_unique` (`slug`),
  KEY `programs_category_id_foreign` (`category_id`),
  CONSTRAINT `programs_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `programs` (`id`, `category_id`, `title`, `slug`, `description`, `thumbnail_url`, `broadcast_schedule`, `host_name`, `status`, `created_at`, `updated_at`) VALUES ('1', '1', 'BLTV Campus News & Digest', 'bltv-campus-news-digest', 'Program berita utama yang menyampaikan kabar akademis, inovasi riset, dan prestasi terkini dari Kampus Budi Luhur.', 'https://images.unsplash.com/photo-1585829365295-ab7cd400c167?w=800&auto=format&fit=crop', 'Setiap Senin & Kamis, 16.00 WIB', 'Tim Redaksi BLTV', 'Active', '2026-08-20 03:57:24', '2026-08-20 03:57:24');
INSERT INTO `programs` (`id`, `category_id`, `title`, `slug`, `description`, `thumbnail_url`, `broadcast_schedule`, `host_name`, `status`, `created_at`, `updated_at`) VALUES ('2', '3', 'Kreatif Talk & Media Pod', 'kreatif-talk-media-pod', 'Bincang interaktif bersama praktisi penyiaran, alumni, dan dosen seputar industri media & teknologi informasi.', 'https://images.unsplash.com/photo-1590602847861-f357a9332bbc?w=800&auto=format&fit=crop', 'Rabu, 19.00 WIB', 'Crew Broadcast BLTV', 'Active', '2026-08-20 03:57:24', '2026-08-20 03:57:24');
INSERT INTO `programs` (`id`, `category_id`, `title`, `slug`, `description`, `thumbnail_url`, `broadcast_schedule`, `host_name`, `status`, `created_at`, `updated_at`) VALUES ('3', '4', 'Live Report Budi Luhur', 'live-report-budi-luhur', 'Program siaran langsung momen istimewa Universitas Budi Luhur seperti Wisuda, Inaugurasi, dan Festival Budaya.', 'https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?w=800&auto=format&fit=crop', 'Tentatif Event', 'Tim OB Van & Crew Lapangan', 'Active', '2026-08-20 03:57:25', '2026-08-20 03:57:25');
INSERT INTO `programs` (`id`, `category_id`, `title`, `slug`, `description`, `thumbnail_url`, `broadcast_schedule`, `host_name`, `status`, `created_at`, `updated_at`) VALUES ('4', '2', 'Sinema Komunitas & Karya Siswa', 'sinema-komunitas-karya-siswa', 'Ajang apresiasi dan pameran film pendek, animasi 3D, serta video dokumenter karya mahasiswa/siswa.', 'https://images.unsplash.com/photo-1485846234645-a62644f84728?w=800&auto=format&fit=crop', 'Jumat, 20.00 WIB', 'Komunitas Kreatif BLTV', 'Active', '2026-08-20 03:57:25', '2026-08-20 03:57:25');

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES ('1dvoYMDvNY9NG6drs1lajYvIcH1MklmFLIdKREEH', NULL, '127.0.0.1', 'Go-http-client/1.1', 'eyJfdG9rZW4iOiJyWnJtbUtlMXhOREJvaDBQZXE4VkhvQ3d1b1pxRXg0TlBsVzFCSktLIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cL2xvY2FsaG9zdDo4MDgwXC90ZWFtcyIsInJvdXRlIjoidGVhbXMuaW5kZXgifSwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119fQ==', '1787198392');
INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES ('ElY93UKPnKP09T4lmNtvvDYt3ZU7IShl3hSx643S', NULL, '127.0.0.1', 'Go-http-client/1.1', 'eyJfdG9rZW4iOiJTNEVkekxLalN5cjBBMkt2dkZMejNJMDRSWEVZelp5dXNsNm42S3F5IiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cL2xvY2FsaG9zdDo4MDgwIiwicm91dGUiOiJob21lIn0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=', '1787198644');
INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES ('O2llOeTWsMwW4PvGbQhyuU1bYyiAu6cFbpvfKwn4', NULL, '127.0.0.1', 'Go-http-client/1.1', 'eyJfdG9rZW4iOiJPS28xV2RjcmtSV2RvVUZ3NUxPMVNqZEhNekszNjVLcVR6a3NVTklxIiwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119fQ==', '1787199259');
INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES ('SIcUhtTq5zcUkVLvLOEKxCPGlVGUfPjNa5bDJpdN', NULL, '127.0.0.1', 'Go-http-client/1.1', 'eyJfdG9rZW4iOiJseVA3MzhkZndpbDI1Y1dkc1JBUjdlczRRVkhiYzFCdnFzd2V5U24wIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cL2xvY2FsaG9zdDo4MDgwXC90ZWFtcyIsInJvdXRlIjoidGVhbXMuaW5kZXgifSwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119fQ==', '1787199259');
INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES ('uX80rrCywbk6bDxo1GimNOcRjpdjOJOaSXDkTX0g', NULL, '127.0.0.1', 'Go-http-client/1.1', 'eyJfdG9rZW4iOiJCOUQySkNLTDIxWmhrZFlaVmJ1bEc2WkRSZWRyVHpCcld4SjNqNm50IiwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119fQ==', '1787198643');
INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES ('W2CLbkSv6b3FXKA9J40OGuKc5eykcYmgVKRetBXh', NULL, '127.0.0.1', 'Go-http-client/1.1', 'eyJfdG9rZW4iOiJNSkMwamJvbm9aSFRXbFIwWnd1bWE2T1JzTjJQQkRHU0tuM3YxbmdaIiwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119fQ==', '1787198392');
INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES ('yQYlcFrdsMAtGHjseGZmyIyb42RX8TwLzonBW0oX', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/151.0.0.0 Safari/537.36', 'eyJfdG9rZW4iOiJ0YWgySGJiU2R6WndsT252TUNoZEN3OW9pZjE4aDF3VzFKVlJ3ZTNWIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cL2xvY2FsaG9zdDo4MDgwXC90ZWFtcyIsInJvdXRlIjoidGVhbXMuaW5kZXgifSwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119fQ==', '1787199348');

DROP TABLE IF EXISTS `tickers`;
CREATE TABLE `tickers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `tickers` (`id`, `content`, `link_url`, `is_active`, `created_at`, `updated_at`) VALUES ('1', 'WELCOME TO BUDI LUHUR TV - MEDIA KAMPUS DAN KOMUNITAS KREATIF UNIVERSITAS BUDI LUHUR', NULL, '1', '2026-08-20 03:57:24', '2026-08-20 03:57:24');
INSERT INTO `tickers` (`id`, `content`, `link_url`, `is_active`, `created_at`, `updated_at`) VALUES ('2', 'REGISTRATION CREW BLTV DIBUKA! GABUNG BERSAMA KOMUNITAS KREATIF MEDIA DAN JURNALISTIK SISWA & MAHASISWA.', '/contact', '1', '2026-08-20 03:57:24', '2026-08-20 03:57:24');
INSERT INTO `tickers` (`id`, `content`, `link_url`, `is_active`, `created_at`, `updated_at`) VALUES ('3', 'TONTON SIARAN LANGSUNG (LIVE REPORT) KAMPUS HANYA DI BUDILUHUR.TV', '/live-report', '1', '2026-08-20 03:57:24', '2026-08-20 03:57:24');

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES ('1', 'Admin Budi Luhur TV', 'admin@budiluhur.tv', NULL, '$2y$12$O5IAv9fl9fr2Er8/L0myAeKT7KCDHMXpvxOR5jApUdEl3zm1MX.CW', NULL, '2026-08-20 03:57:24', '2026-08-20 03:57:24');

DROP TABLE IF EXISTS `videos`;
CREATE TABLE `videos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `program_id` bigint unsigned DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `youtube_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_live` tinyint(1) NOT NULL DEFAULT '0',
  `is_featured` tinyint(1) NOT NULL DEFAULT '0',
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '10:00',
  `views` bigint unsigned NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `videos_slug_unique` (`slug`),
  KEY `videos_program_id_foreign` (`program_id`),
  CONSTRAINT `videos_program_id_foreign` FOREIGN KEY (`program_id`) REFERENCES `programs` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `videos` (`id`, `program_id`, `title`, `slug`, `description`, `youtube_id`, `thumbnail_url`, `is_live`, `is_featured`, `duration`, `views`, `created_at`, `updated_at`) VALUES ('1', '3', 'LIVE REPORT: Procession Wisuda & Inaugurasi Universitas Budi Luhur', 'live-report-procession-wisuda-inaugurasi-universitas-budi-luhur', 'Siaran langsung resmi Budi Luhur TV dari Grha Budi Luhur Jakarta Selatan.', 'L_LUpnjgPso', 'https://images.unsplash.com/photo-1523580494863-6f3031224c94?w=800&auto=format&fit=crop', '1', '1', 'LIVE STREAM', '6420', '2026-08-20 03:57:25', '2026-08-20 03:57:25');
INSERT INTO `videos` (`id`, `program_id`, `title`, `slug`, `description`, `youtube_id`, `thumbnail_url`, `is_live`, `is_featured`, `duration`, `views`, `created_at`, `updated_at`) VALUES ('2', '1', 'BLTV Digest: Inovasi Sains & Mobil Listrik Ramah Lingkungan Karya Budi Luhur', 'bltv-digest-inovasi-sains-mobil-listrik-budi-luhur', 'Liputan eksklusif mengenai pengembangan teknologi riset terdepan mahasiswa Universitas Budi Luhur.', 'dQw4w9WgXcQ', 'https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?w=800&auto=format&fit=crop', '0', '1', '14:25', '2180', '2026-08-20 03:57:25', '2026-08-20 03:57:25');
INSERT INTO `videos` (`id`, `program_id`, `title`, `slug`, `description`, `youtube_id`, `thumbnail_url`, `is_live`, `is_featured`, `duration`, `views`, `created_at`, `updated_at`) VALUES ('3', '2', 'Kreatif Talk #05: Menjadi Broadcaster Profesional di Era Digital', 'kreatif-talk-05-menjadi-broadcaster-profesional', 'Diskusi mendalam bersama praktisi penyiaran nasional dan alumni Budi Luhur.', 'dQw4w9WgXcQ', 'https://images.unsplash.com/photo-1590602847861-f357a9332bbc?w=800&auto=format&fit=crop', '0', '0', '22:15', '1140', '2026-08-20 03:57:25', '2026-08-20 03:57:25');

SET FOREIGN_KEY_CHECKS=1;
