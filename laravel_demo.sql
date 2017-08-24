-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2017 at 09:20 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `laravel_demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
`id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(2, 'sd22222222', 'dddddd1111111111', '2017-03-18 12:23:17', '2017-03-18 12:23:26');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2017_03_18_171814_create_items_table', 2),
('2017_03_19_042618_create_students_table', 3),
('2017_03_19_053857_create_teacher_table', 4),
('2017_03_19_053916_create_subjects_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
`id` int(10) unsigned NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `favourite_subject` int(11) NOT NULL,
  `favourite_teacher` int(11) NOT NULL,
  `standard` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=20 ;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `first_name`, `last_name`, `favourite_subject`, `favourite_teacher`, `standard`, `created_at`, `updated_at`) VALUES
(10, 'Kanan', 'Tank', 13, 6, 1, '2017-03-26 06:32:30', '2017-03-26 06:32:30'),
(11, 'Meet', 'Verma', 13, 7, 1, '2017-03-26 06:32:52', '2017-03-26 06:32:52'),
(12, 'Tina', 'Patel', 13, 7, 1, '2017-03-26 06:33:11', '2017-03-26 06:33:11'),
(13, 'Reena', 'Bhoot', 15, 9, 1, '2017-03-26 06:33:32', '2017-03-26 06:33:32'),
(14, 'Yatin', 'Oja', 17, 11, 1, '2017-03-26 06:33:57', '2017-03-26 06:33:57'),
(15, 'Vimal', 'Joshi', 15, 7, 2, '2017-03-26 06:34:35', '2017-03-26 06:34:35'),
(16, 'Ratan', 'Gajera', 15, 7, 2, '2017-03-26 06:34:56', '2017-03-26 06:35:06'),
(17, 'Kinjal', 'Puri', 16, 10, 2, '2017-03-26 06:35:34', '2017-03-26 06:35:34'),
(18, 'Yakub', 'Sekh', 16, 10, 2, '2017-03-26 06:36:02', '2017-03-26 06:36:10'),
(19, 'Raj', 'Tank', 19, 11, 2, '2017-03-26 06:36:37', '2017-03-26 06:36:37');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE IF NOT EXISTS `subjects` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=20 ;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `name`, `created_at`, `updated_at`) VALUES
(13, 'Gujarati', '2017-03-26 06:19:21', '2017-03-26 06:19:21'),
(14, 'English', '2017-03-26 06:19:29', '2017-03-26 06:19:29'),
(15, 'Mathematics', '2017-03-26 06:19:36', '2017-03-26 06:22:07'),
(16, 'Science', '2017-03-26 06:19:44', '2017-03-26 06:19:44'),
(17, 'Hindi', '2017-03-26 06:21:24', '2017-03-26 06:21:24'),
(18, 'Sanskrit', '2017-03-26 06:21:41', '2017-03-26 06:21:41'),
(19, 'Social Science', '2017-03-26 06:22:25', '2017-03-26 06:22:25');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE IF NOT EXISTS `teachers` (
`id` int(10) unsigned NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `education` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `first_name`, `last_name`, `education`, `created_at`, `updated_at`) VALUES
(6, 'Vimal', 'Parekh', 'B.Ed. With Gujarati', '2017-03-26 06:25:49', '2017-03-26 06:27:53'),
(7, 'Nitin', 'Shah', 'M.Ed. With Hindi', '2017-03-26 06:26:18', '2017-03-26 06:27:47'),
(8, 'Kajal', 'Sharma', 'B.Sc. With Mathematics', '2017-03-26 06:27:38', '2017-03-26 06:27:38'),
(9, 'Rajan', 'Patel', 'M.Sc. With Science', '2017-03-26 06:28:59', '2017-03-26 06:28:59'),
(10, 'Nayna', 'Viyas', 'B.A. With Social Science', '2017-03-26 06:30:02', '2017-03-26 06:30:02'),
(11, 'Rajpal', 'Pandit', 'Ph.d With Sanskrit', '2017-03-26 06:30:57', '2017-03-26 06:30:57'),
(12, 'Tushar', 'Dave', 'M.Ed. With English', '2017-03-26 06:31:48', '2017-03-26 06:31:48');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phoneno` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phoneno`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Test', 'test@gmail.com', '', '$2y$10$CMtS9iOUvaXZ1kzYbRsrYeepghhJuaAiVNzZnxVLnBsXK9x5LxKPi', 'sA9li4wvXobxoASgEycZce6vEA9aiLT7SoG3sPwjhLVQPaYe8UC5poCGNpZW', '2017-03-03 20:25:05', '2017-03-03 23:38:07'),
(2, 'Test11', 'test11@gmail.com', '', '$2y$10$0LnAzd.bDTnb8wXbb9Kv.eUxAx3nLmTwlKE1KQB7b6z9n4.Zco6uK', 'ZBHqfwjVvQmCAgyB0zo6h8uNeclPAvlpfQKSrZVYSEcsBcsSDyLzvs9qAT0Q', '2017-03-03 21:16:51', '2017-03-03 21:17:02'),
(3, 'Test44', 'test44@gmail.com', '0123456789', '$2y$10$0FVktWkDGFXEOEJK5lzxsuvtrsiNyuiIrSKAWxcoIIkY923EGj7cW', 'ZSFSxslMl2q0BwykCQrhDHc2m38iIkIN7Vwoq4wH5ctT17YbpD88dpKBybmN', '2017-03-03 23:53:52', '2017-03-03 23:54:04'),
(4, 'TestMansi', 'test4456546@gmail.com', '2435345', '$2y$10$E/x3CDqhZO1fXFQsGe8pCeSue460QGGodrAg0gkOMhOmbSbWtxkF6', '3qEa5DXccKkbyOu8y4teMzLomxlBEw2n60GgYG92fc09kOGRnkMz5nKtj3H4', '2017-03-04 06:50:10', '2017-03-04 06:54:23'),
(5, 'aaaaa', 'aaaaaa@gmail.com', '1111111', '$2y$10$Xg.mZoNNknsRO85B1ZB0muX8MZlUw3e/x1L22XmIj/yjZ3qDQeOCe', 'perQwKKXHVyfK2pE7ZfzlQevall64LSmXm81hcY9MvEpLiVikgqVsyy10rvH', '2017-03-04 06:55:03', '2017-03-04 07:01:07'),
(6, 'ererer', 'erererer@gmail.com', '1111111111', '$2y$10$.79FoPOnXpBv3oY2WZych.X1YQCO9ROxKzsHvRBH/hHfiGLmBpB4q', '7GbJPQe3aI2xFgRtG2z6R3reBUncqCgEJU1i16malqgBHlCnoWYoNEaKT843', '2017-03-04 07:01:38', '2017-03-04 07:02:07'),
(7, 'aaaaaa', 'test555@gmail.com', '123412342314', '$2y$10$9ap8i34ho5aOzve9Ggi4oebQsiN4kmV6jJcvttoBgpPs9TIs1sJcu', 'Ypb6HgljeqBCaRdqV2JmG6Bk9xmWRMExIWRjGCMBuvLsO0f4FBagU2wRPP2x', '2017-03-18 09:04:44', '2017-03-18 09:04:56'),
(8, 'ababab', 'test12ab@gmail.com', '123456', '$2y$10$sTRM3z.cyBhpuF18ewvdsuzvVIq5VUtApN1Vx8pUY/lmw5d0I1aTe', 'UelAr9OSIr33vJ1sIWIOmYDf3tDvIbrCtQvPuU5iC6WEVCGkqE2qK8z232vH', '2017-03-18 09:08:48', '2017-03-26 08:07:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
 ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
