-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306:4306
-- Generation Time: Sep 05, 2023 at 09:59 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `homepageads1` varchar(255) DEFAULT NULL,
  `homepageads2` varchar(255) NOT NULL,
  `postads` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `homepageads1`, `homepageads2`, `postads`, `created_at`, `updated_at`) VALUES
(1, '<a href=\"https://cdndn.com/srv.html?id=5525335&pub=2107758\"><img src=\"https://cdndn.com/images/campaigns/5525335_120x120.png\"></a>', '<a href=\"https://cdndn.com/srv.html?id=5525335&pub=2107758\"><img src=\"https://cdndn.com/images/campaigns/5525335_120x120.png\"></a>', '<a href=\"https://cdndn.com/srv.html?id=5525335&pub=2107758\"><img src=\"https://cdndn.com/images/campaigns/5525335_120x120.png\"></a>', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `about_me` varchar(255) NOT NULL,
  `fb` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `pic` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `name`, `about_me`, `fb`, `twitter`, `instagram`, `pic`, `created_at`, `updated_at`) VALUES
(1, 'rana2', 'rana', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', '1693671042.png', NULL, '2023-09-02 10:10:42');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(2, 'Tech', 'tech', '2023-09-01 08:28:27', '2023-09-05 00:55:28'),
(3, 'Mobile', 'mobile', '2023-09-01 08:30:01', '2023-09-01 08:30:01'),
(4, 'Laptop', 'laptop', '2023-09-01 08:30:28', '2023-09-01 08:30:28'),
(5, 'Router', 'router', '2023-09-01 08:31:54', '2023-09-01 08:31:54');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_08_31_115433_create_posts_table', 2),
(7, '2023_09_01_133224_create_categories_table', 3),
(8, '2023_09_01_140617_create_pages_table', 4),
(9, '2023_09_02_055957_create_settings_table', 5),
(10, '2023_09_02_141711_create_ads_table', 6),
(11, '2023_09_02_154814_create_authors_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `body` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`, `slug`, `body`, `created_at`, `updated_at`) VALUES
(2, 'About', 'about', '', '2023-09-01 23:55:52', '2023-09-01 23:55:52'),
(3, 'n', 'n', '<p>n</p>', '2023-09-02 23:11:49', '2023-09-02 23:11:49'),
(4, 'test', 'test', '<p>to access the local server address, you just use&nbsp;<strong>http://localhost</strong>&nbsp;then the xampp dashboard page will appear. But many people are wondering, how do you change localhost to the desired domain?. It&#39;s easy guys, you just need to change a few settings on the windows system, and the apache server.</p>', '2023-09-02 23:12:50', '2023-09-02 23:12:50');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `body` longtext NOT NULL,
  `slug` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `featuredimage` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `created_at`, `updated_at`, `title`, `body`, `slug`, `category`, `featuredimage`) VALUES
(13, '2023-09-02 09:09:26', '2023-09-05 00:56:50', 'How to Change Xampp Localhost', '<h1><div style=\"padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: 0px 0px;\"><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px;\"><font color=\"#545454\" face=\"Helvetica Neue, Helvetica, Arial, sans-serif\"><span style=\"font-size: 16px;\">Are you ready to take your online publishing game to the next level? Look no further! Our Blog &amp; Magazine PHP Script is the perfect solution for creating a dynamic and feature-rich platform to showcase your content. Whether you\'re a seasoned blogger, a news outlet, or a budding magazine publisher, our script has got you covered.</span></font><br></p></div></h1>', 'How to Change Xampp Localhost', 'Tech', '1693667366.jpg'),
(14, '2023-09-02 09:10:03', '2023-09-05 00:56:52', 'What is CMS ?', '<h1><p style=\"margin: 0.5em 0em 0.6em; text-align: justify; padding: 0px; line-height: 1.6;\"><font color=\"#000000\" face=\"Nunito, sans-serif\"><span style=\"font-size: 16px;\">Are you ready to take your online publishing game to the next level? Look no further! Our Blog &amp; Magazine PHP Script is the perfect solution for creating a dynamic and feature-rich platform to showcase your content. Whether you\'re a seasoned blogger, a news outlet, or a budding magazine publisher, our script has got you covered.</span></font><br></p></h1>', 'What is CMS ?', 'Tech', '1693667403.jpg'),
(15, '2023-09-02 09:10:35', '2023-09-05 00:56:59', 'How to Get Last 10', '<h1><font color=\"#545454\" face=\"Helvetica Neue, Helvetica, Arial, sans-serif\"><span style=\"font-size: 16px;\">Are you ready to take your online publishing game to the next level? Look no further! Our Blog &amp; Magazine PHP Script is the perfect solution for creating a dynamic and feature-rich platform to showcase your content. Whether you\'re a seasoned blogger, a news outlet, or a budding magazine publisher, our script has got you covered.</span></font><br style=\"color: rgb(84, 84, 84); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 16px;\"></h1>', 'How to Get Last 10', 'Laptop', '1693667435.jpg'),
(16, '2023-09-02 09:11:18', '2023-09-05 00:57:02', 'How to Upload Image', '<h1><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px;\"><font color=\"#545454\" face=\"Helvetica Neue, Helvetica, Arial, sans-serif\"><span style=\"font-size: 16px;\">Are you ready to take your online publishing game to the next level? Look no further! Our Blog &amp; Magazine PHP Script is the perfect solution for creating a dynamic and feature-rich platform to showcase your content. Whether you\'re a seasoned blogger, a news outlet, or a budding magazine publisher, our script has got you covered.</span></font><br></p></h1>', 'How to Upload Image', 'Laptop', '1693667478.jpg'),
(17, '2023-09-02 09:12:07', '2023-09-05 00:57:07', 'Fix Wifi Broken Or Not', '<h1 style=\"\"><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px;\"><font color=\"#545454\" face=\"Helvetica Neue, Helvetica, Arial, sans-serif\"><span style=\"font-size: 16px;\">Are you ready to take your online publishing game to the next level? Look no further! Our Blog &amp; Magazine PHP Script is the perfect solution for creating a dynamic and feature-rich platform to showcase your content. Whether you\'re a seasoned blogger, a news outlet, or a budding magazine publisher, our script has got you covered.</span></font><br></p></h1>', 'Fix Wifi Broken Or Not', 'Laptop', '1693667527.jpg'),
(18, '2023-09-02 09:12:44', '2023-09-05 00:22:23', 'How to Use Future', '<h1 style=\"\"><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px;\"><font color=\"#545454\" face=\"Helvetica Neue, Helvetica, Arial, sans-serif\"><span style=\"font-size: 16px;\">Are you ready to take your online publishing game to the next level? Look no further! Our Blog &amp; Magazine PHP Script is the perfect solution for creating a dynamic and feature-rich platform to showcase your content. Whether you\'re a seasoned blogger, a news outlet, or a budding magazine publisher, our script has got you covered.</span></font><br></p></h1>', 'How to Use Future', 'Sport', '1693667564.jpg'),
(21, '2023-09-05 00:29:45', '2023-09-05 00:57:11', 'No hint path defined for', '<p>Are you ready to take your online publishing game to the next level? Look no further! Our Blog &amp; Magazine PHP Script is the perfect solution for creating a dynamic and feature-rich platform to showcase your content. Whether you\'re a seasoned blogger, a news outlet, or a budding magazine publisher, our script has got you covered.<br></p>', 'No hint path defined for', 'Mobile', '1693895385.jpg'),
(22, '2023-09-05 00:30:22', '2023-09-05 00:57:15', 'following mail class', '<p>Are you ready to take your online publishing game to the next level? Look no further! Our Blog &amp; Magazine PHP Script is the perfect solution for creating a dynamic and feature-rich platform to showcase your content. Whether you\'re a seasoned blogger, a news outlet, or a budding magazine publisher, our script has got you covered.<br></p>', 'following mail class', 'Mobile', '1693895422.jpg'),
(23, '2023-09-05 00:31:20', '2023-09-05 00:57:20', 'No hint path defined for', '<p>Are you ready to take your online publishing game to the next level? Look no further! Our Blog &amp; Magazine PHP Script is the perfect solution for creating a dynamic and feature-rich platform to showcase your content. Whether you\'re a seasoned blogger, a news outlet, or a budding magazine publisher, our script has got you covered.<br></p>', 'No hint path defined for', 'Router', '1693895479.png'),
(24, '2023-09-05 00:32:05', '2023-09-05 00:57:24', 'How to Concat Two Columns', '<p>Are you ready to take your online publishing game to the next level? Look no further! Our Blog &amp; Magazine PHP Script is the perfect solution for creating a dynamic and feature-rich platform to showcase your content. Whether you\'re a seasoned blogger, a news outlet, or a budding magazine publisher, our script has got you covered.<br></p>', 'How to Concat Two Columns', 'Router', '1693895525.jpg'),
(25, '2023-09-05 00:32:38', '2023-09-05 00:56:47', 'can easily use same code in your application', '<p>Are you ready to take your online publishing game to the next level? Look no further! Our Blog &amp; Magazine PHP Script is the perfect solution for creating a dynamic and feature-rich platform to showcase your content. Whether you\'re a seasoned blogger, a news outlet, or a budding magazine publisher, our script has got you covered.<br></p>', 'can easily use same code in your application', 'Tech', '1693895558.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `footertext` varchar(255) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `title`, `description`, `keywords`, `footertext`, `logo`, `created_at`, `updated_at`) VALUES
(1, 'ArBlog - Blog & Magazine Script', 'ArBlog - Blog & Magazine Script', 'ArBlog,Blog & Magazine Script,Magazine Script', 'ArBlog - Blog & Magazine Script', '1693896779.png', NULL, '2023-09-05 00:52:59');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'rana', 'admin@admin.com', NULL, '$2y$10$swOv5um2qpm.H5YYf3R10eRALaKwJD9bXq4ibUAXF3a6hs01E2FV.', NULL, '2023-08-31 05:47:43', '2023-08-31 05:47:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
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
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
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
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
