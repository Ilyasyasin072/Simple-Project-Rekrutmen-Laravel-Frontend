-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2016 at 11:03 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 7.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project2`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_12_17_063806_create_social_providers_table', 2),
(4, '2016_12_17_065809_create_penerimaans_table', 3),
(5, '2016_12_21_041352_create_pelamars_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pelamars`
--

CREATE TABLE `pelamars` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_testing` int(11) NOT NULL,
  `pelamar_no_ktp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pelamar_nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pelamar_alamat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pelamar_ttl` datetime NOT NULL,
  `pelamar_jk` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pelamar_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pelamar_pendidikan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pelamar_pengalamankerja` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pelamar_tlp` int(11) NOT NULL,
  `pelamar_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penerimaans`
--

CREATE TABLE `penerimaans` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_penerima` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id_testing` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tgl_penerima` datetime NOT NULL,
  `hasil_penerima` int(11) NOT NULL,
  `nilai_interview` int(11) NOT NULL,
  `nilai_psikotes` int(11) NOT NULL,
  `status` enum('TERIMA','TIDAK','','') COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `penerimaans`
--

INSERT INTO `penerimaans` (`id`, `id_penerima`, `id_testing`, `tgl_penerima`, `hasil_penerima`, `nilai_interview`, `nilai_psikotes`, `status`, `created_at`, `updated_at`) VALUES
(1, 'PN01', 'TS01', '2016-12-07 15:24:00', 90, 90, 90, 'TERIMA', '2016-12-20 19:30:01', '2016-12-20 19:30:01'),
(2, 'PN02', 'TS02', '2016-12-14 13:01:00', 90, 90, 90, 'TERIMA', '2016-12-20 20:30:10', '2016-12-20 20:30:10');

-- --------------------------------------------------------

--
-- Table structure for table `social_providers`
--

CREATE TABLE `social_providers` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `provider_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `provider` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `social_providers`
--

INSERT INTO `social_providers` (`id`, `user_id`, `provider_id`, `provider`, `created_at`, `updated_at`) VALUES
(2, 7, '1331747050183550', 'facebook', '2016-12-20 06:48:18', '2016-12-20 06:48:18'),
(3, 8, '117613059823192371189', 'google', '2016-12-20 06:53:24', '2016-12-20 06:53:24');

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tests`
--

INSERT INTO `tests` (`id`, `name`, `pendidikan`, `created_at`, `updated_at`) VALUES
(1, 'ilyas yasin', 'SARJANA TERAPAN 1 POLITEKNIK POS INDONESIA', '2016-12-17 15:20:56', '2016-12-17 15:20:56'),
(2, 'Agung Suryana', 'SARJANA TERAPAN 1 POLITEKNIK POS INDONESIA', '2016-12-17 15:59:52', '2016-12-17 15:59:52'),
(3, 'Eki Kesuma', 'SARJANA TERAPAN 1 POLITEKNIK POS INDONESIA', '2016-12-17 16:00:05', '2016-12-17 16:00:05'),
(4, 'Adli Asirof', 'SARJANA TERAPAN 1 POLITEKNIK POS INDONESIA', '2016-12-17 16:00:16', '2016-12-17 16:00:16'),
(5, 'Nurpazrina', 'SARJANA TERAPAN 1 POLITEKNIK POS INDONESIA', '2016-12-17 16:00:26', '2016-12-17 16:00:26'),
(6, 'Reska', 'SARJANA TERAPAN 1 POLITEKNIK POS INDONESIA', '2016-12-17 16:00:32', '2016-12-17 16:00:32'),
(7, 'Dede', 'SARJANA TERAPAN 1 POLITEKNIK POS INDONESIA', '2016-12-17 16:00:37', '2016-12-17 16:00:37');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(7, 'Ilyas Yasin Permana', 'ilyasyasin123@yahoo.com', '', 'bjlHvfvhCxP0WdM8uK4AxWicbpzH3xtk2nKLGEojuHZYIVf6mpJZDR7z1LTl', '2016-12-20 06:48:18', '2016-12-20 20:15:19'),
(8, 'Ilyas Yasin', 'ilyasyasin072@gmail.com', '', '9hLtUNDn2AyP4tF7Tppil8nHGNF54U8LxWY1cpR0y9f1QtYHTGZdN740oQ9x', '2016-12-20 06:53:24', '2016-12-20 07:08:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `pelamars`
--
ALTER TABLE `pelamars`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pelamars_pelamar_email_unique` (`pelamar_email`);

--
-- Indexes for table `penerimaans`
--
ALTER TABLE `penerimaans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_providers`
--
ALTER TABLE `social_providers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pelamars`
--
ALTER TABLE `pelamars`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `penerimaans`
--
ALTER TABLE `penerimaans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `social_providers`
--
ALTER TABLE `social_providers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
