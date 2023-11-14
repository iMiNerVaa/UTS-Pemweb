-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 03, 2023 at 02:59 AM
-- Server version: 8.0.30
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pemweb-db`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`, `created_at`, `updated_at`) VALUES
(39, 'sabun', 5000, '/upload/WhatsApp Image 2023-11-02 at 19.44.03.jpeg', '2023-11-02 13:30:25', NULL),
(40, 'detergen', 5000, '/upload/1698932052-WhatsApp Image 2023-11-02 at 19.44.03.jpeg', '2023-11-02 13:34:12', NULL),
(41, 'detergen', 5000, '/upload/1698932166-2b83cde3f290082bed3f41594bda2383-WhatsApp Image 2023-11-02 at 19.44.03.jpeg', '2023-11-02 13:36:06', NULL),
(42, 'so klin', 10000, '/upload/1698932550-f83bb0e67d37431c69b06cdccc1a58ca-panduan wisuda 2023-Gladi Mahasiswa.pdf', '2023-11-02 13:42:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `role` enum('admin','user') COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'user',
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `password`, `photo`, `created_at`, `updated_at`) VALUES
(5, 'Yusuf Eka Wicaksana', 'ekayusuf.wicaksana@gmail.com', 'user', '$2y$10$rLNoxFGQoNddoiWy/ebYdOkjhU0ff14xHdXPc2yJIi2APAWvQ.Cra', NULL, '2023-10-26 13:45:09', NULL);

--
-- Indexes for dumped tables
--

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
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
