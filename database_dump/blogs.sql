-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2020 at 03:02 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fox_university_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `blog_id` int(10) UNSIGNED NOT NULL,
  `blog_title` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_descripition` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`blog_id`, `blog_title`, `blog_descripition`, `blog_image`, `created_at`, `updated_at`) VALUES
(1, 'Blogging Pictures', 'Choose from a curated selection of blogging photos. Every image can be used for free for both commercial and personal uses thanks to the Unsplash community\'s photographers.', 'public/Blog/A7Vvf4zXpxhOwOXPTNYnJGgKACuevtxh1zoyt5Zs.jpeg', '2020-03-15 08:30:04', '2020-03-15 08:30:04'),
(2, 'Blogging Pictures1', 'Choose from a curated selection of blogging photos. Every image can be used for free for both commercial and personal uses thanks to the Unsplash community\'s photographers', 'public/Blog/fzAZCPf0VNREYOyLpYOFZSZTwgGYgzjz2N1xAzXM.jpeg', '2020-03-15 08:30:30', '2020-03-15 08:30:30'),
(3, 'Blogging Pictures2', 'Choose from a curated selection of blogging photos. Every image can be used for free for both commercial and personal uses thanks to the Unsplash community\'s photographers.', 'public/Blog/YZcVZe4zAATIpSZ3ma1qEwo8Dw1Ib3Nc1eO6SpDy.jpeg', '2020-03-15 08:30:54', '2020-03-15 08:30:54'),
(4, 'Blogging Pictures3', 'Choose from a curated selection of blogging photos. Every image can be used for free for both commercial and personal uses thanks to the Unsplash community\'s photographers', 'public/Blog/tFoA7TMVPhAo1Rdjcxf320Hi5KSzdGqSud1GmOLS.jpeg', '2020-03-15 08:31:19', '2020-03-15 08:31:19'),
(5, 'Blogging Pictures4', 'Choose from a curated selection of blogging photos. Every image can be used for free for both commercial and personal uses thanks to the Unsplash community\'s photographers', 'public/Blog/t6x5oaMDAF8mcBdj1afI2uDsMgjVmKd5ECeCkHCh.webp', '2020-03-15 08:32:16', '2020-03-15 08:32:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`blog_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `blog_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
