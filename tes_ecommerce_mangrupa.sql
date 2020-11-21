-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2020 at 05:13 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tes_ecommerce_mangrupa`
--

-- --------------------------------------------------------

--
-- Table structure for table `apparels`
--

CREATE TABLE `apparels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `apparels`
--

INSERT INTO `apparels` (`id`, `nama`, `jenis`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Baju', 'Atasan', 'atas1.jpg', NULL, NULL),
(2, 'Celana', 'Bawahan', 'bwh1.jpg', NULL, NULL),
(3, 'Tas', 'Aksesoris', '1.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
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
(4, '2020_10_26_151721_create_products_table', 1),
(5, '2020_10_26_151741_create_pesanans_table', 1),
(6, '2020_10_26_151804_create_pesanan_details_table', 1),
(7, '2020_11_09_153634_create_apparels_table', 1);

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
-- Table structure for table `pesanans`
--

CREATE TABLE `pesanans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_pemesanan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `total_harga` int(11) NOT NULL,
  `kode_unik` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pesanans`
--

INSERT INTO `pesanans` (`id`, `kode_pemesanan`, `status`, `total_harga`, `kode_unik`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'JP-1', '1', 90000, 617, 1, '2020-11-09 08:55:12', '2020-11-09 08:59:18');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan_details`
--

CREATE TABLE `pesanan_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jumlah_pesanan` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `pesanan_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pesanan_details`
--

INSERT INTO `pesanan_details` (`id`, `jumlah_pesanan`, `total_harga`, `product_id`, `pesanan_id`, `created_at`, `updated_at`) VALUES
(1, 2, 90000, 1, 1, '2020-11-09 08:55:12', '2020-11-09 08:55:12');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL DEFAULT 100000,
  `apparel_id` int(11) NOT NULL,
  `is_ready` tinyint(1) NOT NULL DEFAULT 1,
  `grade` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Original',
  `berat` double(8,2) NOT NULL DEFAULT 0.25,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `nama`, `harga`, `apparel_id`, `is_ready`, `grade`, `berat`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Atasan 1', 45000, 1, 1, 'Original', 0.25, 'atas1.jpg', NULL, NULL),
(2, 'Atasan 2', 50000, 1, 1, 'Original', 0.25, 'atas2.jpg', NULL, NULL),
(3, 'Atasan 3', 47500, 1, 1, 'Original', 0.25, 'atas3.jpg', NULL, NULL),
(4, 'Atasan 4', 52500, 1, 1, 'Original', 0.25, 'atas4.jpg', NULL, NULL),
(5, 'Atasan 5', 40000, 1, 1, 'Original', 0.25, 'atas5.jpg', NULL, NULL),
(6, 'Atasan 6', 60000, 1, 1, 'Original', 0.25, 'atas6.jpg', NULL, NULL),
(7, 'Atasan 7', 50000, 1, 1, 'Original', 0.25, 'atas7.jpg', NULL, NULL),
(8, 'Atasan 8', 60000, 1, 1, 'Original', 0.25, 'atas8.jpg', NULL, NULL),
(9, 'Atasan 9', 65000, 1, 1, 'Original', 0.25, 'atas9.jpg', NULL, NULL),
(10, 'Atasan 10', 45000, 1, 1, 'Original', 0.25, 'atas11.jpg', NULL, NULL),
(11, 'Atasan 11', 55000, 1, 1, 'Original', 0.25, 'atas11.jpg', NULL, NULL),
(12, 'Atasan 12', 57500, 1, 1, 'Original', 0.25, 'atas12.jpg', NULL, NULL),
(13, 'Atasan 13', 65000, 1, 1, 'Original', 0.25, 'atas13.jpg', NULL, NULL),
(14, 'Atasan 14', 40000, 1, 1, 'Original', 0.25, 'atas14.png', NULL, NULL),
(15, 'Bawahan 1', 70000, 2, 1, 'Original', 0.25, 'bwh1.jpg', NULL, NULL),
(16, 'Bawahan 2', 55000, 2, 1, 'Original', 0.25, 'bwh2.jpg', NULL, NULL),
(17, 'Bawahan 3', 80000, 2, 1, 'Original', 0.25, 'bwh3.jpg', NULL, NULL),
(18, 'Bawahan 4', 45000, 2, 1, 'Original', 0.25, 'bwh4.jpg', NULL, NULL),
(19, 'Bawahan 5', 50000, 2, 1, 'Original', 0.25, 'bwh5.jpg', NULL, NULL),
(20, 'Bawahan 6', 55000, 2, 1, 'Original', 0.25, 'bwh6.jpg', NULL, NULL),
(21, 'Bawahan 7', 77500, 2, 1, 'Original', 0.25, 'bwh7.jpg', NULL, NULL),
(22, 'Bawahan 8', 50000, 2, 1, 'Original', 0.25, 'bwh8.jpg', NULL, NULL),
(23, 'Bawahan 9', 60000, 2, 1, 'Original', 0.25, 'bwh9.jpg', NULL, NULL),
(24, 'Tas 1', 15000, 3, 1, 'Original', 0.25, '1.png', NULL, NULL),
(25, 'Tas 2', 15000, 3, 1, 'Original', 0.25, '2.jpg', NULL, NULL),
(26, 'Tas 3', 15000, 3, 1, 'Original', 0.25, '3.png', NULL, NULL),
(27, 'Tas 4', 15000, 3, 1, 'Original', 0.25, '4.jpg', NULL, NULL),
(28, 'Tas 5', 15000, 3, 1, 'Original', 0.25, '5.jpg', NULL, NULL),
(29, 'Tas 6', 15000, 3, 1, 'Original', 0.25, '6.jpg', NULL, NULL),
(30, 'Tas 7', 15000, 3, 1, 'Original', 0.25, '7.jpg', NULL, NULL),
(31, 'Tas 8', 15000, 3, 1, 'Original', 0.25, '8.jpg', NULL, NULL);

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
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `alamat`, `no_hp`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'tes123', 'tes123@gmail.com', NULL, '$2y$10$0jTz3EyaEOfsErtKCLijKOVicubxcGlHY0PDU8uqnSUl/Oiz3lEjK', 'Jl. Bandung No 1.', '08123456789', NULL, '2020-11-09 08:40:33', '2020-11-09 08:59:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apparels`
--
ALTER TABLE `apparels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `pesanans`
--
ALTER TABLE `pesanans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesanan_details`
--
ALTER TABLE `pesanan_details`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `apparels`
--
ALTER TABLE `apparels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pesanans`
--
ALTER TABLE `pesanans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pesanan_details`
--
ALTER TABLE `pesanan_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
