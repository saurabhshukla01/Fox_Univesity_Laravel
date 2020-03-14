-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2020 at 07:02 PM
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
-- Table structure for table `courses_tables`
--

CREATE TABLE `courses_tables` (
  `course_id` int(10) UNSIGNED NOT NULL,
  `course_name` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_descripition` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_duration` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_seat` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses_tables`
--

INSERT INTO `courses_tables` (`course_id`, `course_name`, `course_descripition`, `course_duration`, `course_seat`, `course_image`, `created_at`, `updated_at`) VALUES
(1, 'Physics', 'Physics teachers who teach subjects outside of physics most often teach classes in chemistry, math, or physical science. Education & Background.', '4', '100', 'public/Courses/rtej8OM6b7qoqKEW3soDHgB9GCgk7QE1luinJnn9.jpeg', '2020-03-14 12:25:01', '2020-03-14 12:25:01'),
(2, 'Chemistry', 'General chemistry courses typically introduce concepts such as stoichiometry, prediction of reaction products, thermodynamics, nuclear chemistry, electrochemistry, chemical kinetics, and many of the rudiments of physical chemistry.', '3', '121', 'public/Courses/wDf4KaA5NDqjbPVJSPUwqV4aHaHXGRgoFZ2v3ojA.jpeg', '2020-03-14 12:26:26', '2020-03-14 12:26:26'),
(3, 'Computer', 'Subject:Computer science. Books in this subject area deal with computer science: the study of the theoretical foundations of information and computation, and of practical techniques for their implementation and application in computer systems.', '4', '1000', 'public/Courses/BZWemFKAM9Vk3agVtrecyImHLMvUXAwVKD4zqvP9.jpeg', '2020-03-14 12:28:45', '2020-03-14 12:28:45'),
(4, 'Electronice', 'Electronics is a subfield within the wider electrical engineering academic subject but denotes a broad engineering field that covers subfields such as analog electronics, digital electronics, consumer electronics, embedded systems and power electronics.', '5', '999', 'public/Courses/ZJ2mb64uZmGALOUXu8e6vn6Ew6OLxE9Ag55zSKik.jpeg', '2020-03-14 12:29:50', '2020-03-14 12:29:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses_tables`
--
ALTER TABLE `courses_tables`
  ADD PRIMARY KEY (`course_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses_tables`
--
ALTER TABLE `courses_tables`
  MODIFY `course_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
