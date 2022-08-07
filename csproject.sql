-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2022 at 01:33 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `csproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `casts`
--

CREATE TABLE `casts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_user_id` bigint(20) UNSIGNED NOT NULL,
  `movie_id` bigint(20) UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `created_user_id`, `movie_id`, `content`, `created_at`, `updated_at`) VALUES
(4, 4, 1, 'สนุกกกกก', '2022-03-30 11:02:06', '2022-03-30 11:02:06'),
(6, 4, 2, 'Good', '2022-03-30 11:04:41', '2022-03-30 11:04:41'),
(7, 4, 2, '55555', '2022-03-30 11:04:55', '2022-03-30 11:04:55'),
(11, 4, 1, 'สนุกมากกๆๆๆ ต้องไปดู', '2022-03-31 01:35:36', '2022-03-31 01:35:36'),
(14, 5, 1, 'สนุกๆๆๆๆๆๆ', '2022-03-31 02:09:38', '2022-03-31 02:09:38');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '2014_10_12_000000_create_users_table', 1),
(6, '2014_10_12_100000_create_password_resets_table', 1),
(7, '2019_08_19_000000_create_failed_jobs_table', 1),
(8, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(17, '2022_03_29_071016_create_series_table', 2),
(19, '2022_03_29_070812_create_movies_table', 3),
(20, '2022_03_29_070935_create_casts_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `title`, `description`, `rating`, `type`, `image`, `created_at`, `updated_at`) VALUES
(1, 'แฮร์รี่ พอตเตอร์', 'เรื่องราวชีวิตของเด็กชายกำพร้าคนหนึ่ง แฮร์รี่ พอตเตอร์ เติบโตมาราวกับเป็นทาสในเรือนเบี้ยในครอบครัวของญาติเพียงคนเดียวที่เหลืออยู่ ต่อมาไม่นานเขาก็พบความสามารถพิเศษและได้รู้ความจริงว่าเขาไม่ใช่มนุษย์ธรรมดาทั่วไป แฮร์รี่ต้องเข้าเรียนในโรงเรียนที่ชื่อว่าฮอกวอตส์เช่นเดียวกับพ่อและแม่ผู้ล่วงลับและที่นั่นก็ทำให้เขาได้เจอกับมิตรแท้และศัตรู นอกจากนี้แฮร์รี่ยังต้องปกป้องของวิเศษชิ้นหนึ่งที่สำคัญมาก ๆ ในโลกเวทมนตร์จากคนที่เคยมีอำนาจจนเหล่าผู้วิเศษไม่กล้าแม้แต่จะเอยนาม ชีวิตในโลกเวทมนตร์ของแฮร์รี่จะเป็นอย่างไร เขาจะปกป้องของวิเศษที่ว่าไว้ได้หรือไม่', 5, 'แฟนตาซี', 'https://cdn.majorcineplex.com/uploads/movie/3320/thumb_3320.jpg', NULL, NULL),
(2, 'คนเรียกผี', 'เอ็ด และ ลอว์เรน วอร์เรน คู่สามีภรรยานักปราบผีเข้าช่วยเหลือ แคโรลิน และ โรเจอร์ เพอร์รอน ที่พวกเขาได้ซื้อบ้านไร่อายุกว่าร้อยปีที่ดูเงียบสงบในรัฐโรดไอแลนด์ เมื่อปี 1970 ทันทีที่เข้าไปอยู่ พวกเขาและลูกสาวอีก 5 คน ก็พบว่าตัวเองตกอยู่ในอันตรายที่แฝงไปด้วยความลึกลับสุดหลอน วิญญาณร้ายกำลังกัดกินชีวิตของพวกเขาทีละน้อย ๆ จน เอ็ดและลอว์เรนไปพบเข้า หากคุณเริ่มได้ยินเสียงกระซิบ... เสียงเท้าเดิน...รู้สึกเหมือนมีใครอยู่ด้วย มันจะนำไปสู่อีกขั้น เมื่อคุณจะเริ่มจะถูกครอบงำ...ต้องทำตามที่พวกมันต้องการ และนำไปสู่ขั้นที่ 3 ซึ่งเป็นขั้นสุดท้าย…นั่นก็คือ...ถูกสิงเข้าร่าง พวกเขาจะต่อสู้กับแรงอาฆาตในครั้งนี้ได้หรือไม่', 5, 'สยองขวัญ', 'https://s.isanook.com/mv/0/ud/6/34987/cjr_1sht_alt_intl_debut_online.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `admin` tinyint(1) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `admin`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'Admin', 'admin@admin.com', NULL, 1, '$2y$10$egvNw7yi6utaSSfsYJGbnOgpyAx/jc/p8a5vx6oKPbZae1VzLapza', NULL, '2022-03-28 02:44:08', '2022-03-28 02:44:08'),
(5, 'User', 'user@user.com', NULL, 0, '$2y$10$SN1KvUDnrhQCcR3fYH/xdurYVWZSUPkdgXbdltgFnKuPI8w2lNI1u', NULL, '2022-03-28 02:44:08', '2022-03-28 02:44:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `casts`
--
ALTER TABLE `casts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
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
-- Indexes for table `movies`
--
ALTER TABLE `movies`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `casts`
--
ALTER TABLE `casts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
