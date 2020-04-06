-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2020 at 02:43 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `education_information_tables`
--

CREATE TABLE `education_information_tables` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_uid` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `board_university` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_name` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `university_collage_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `passing_year` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mark_obtain` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mark_total` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `percentage_mark` double(8,2) NOT NULL,
  `board_university1` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_name1` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `university_collage_name1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `passing_year1` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mark_obtain1` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mark_total1` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `percentage_mark1` double(8,2) NOT NULL,
  `board_university2` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_name2` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `university_collage_name2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `passing_year2` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mark_obtain2` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mark_total2` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `percentage_mark2` double(8,2) NOT NULL,
  `board_university3` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_name3` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `university_collage_name3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `passing_year3` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mark_obtain3` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mark_total3` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `percentage_mark3` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(4, '2020_02_29_160232_create_courses_tables', 1),
(5, '2020_02_29_160644_create_registration_tables', 1),
(6, '2020_02_29_160741_create_personal_information_tables', 1),
(7, '2020_02_29_160812_create_education_information_tables', 1),
(8, '2020_02_29_160846_create_verification_information_tables', 1),
(9, '2020_03_14_134108_create_teachers_table', 1),
(10, '2020_03_15_131101_create_blogs_table', 1);

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
-- Table structure for table `personal_information_tables`
--

CREATE TABLE `personal_information_tables` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_uid` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_line1` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_line2` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pincode` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `addhar_number` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registration_tables`
--

CREATE TABLE `registration_tables` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_uid` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `candidate_name` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `candidate_father_name` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationality` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Dob` date NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `teacher_id` int(10) UNSIGNED NOT NULL,
  `teacher_name` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_teacher` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_biology` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `verification_information_tables`
--

CREATE TABLE `verification_information_tables` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_uid` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_photo` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `courses_tables`
--
ALTER TABLE `courses_tables`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `education_information_tables`
--
ALTER TABLE `education_information_tables`
  ADD PRIMARY KEY (`user_id`);

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
-- Indexes for table `personal_information_tables`
--
ALTER TABLE `personal_information_tables`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `registration_tables`
--
ALTER TABLE `registration_tables`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`teacher_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `verification_information_tables`
--
ALTER TABLE `verification_information_tables`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `blog_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `courses_tables`
--
ALTER TABLE `courses_tables`
  MODIFY `course_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `education_information_tables`
--
ALTER TABLE `education_information_tables`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_information_tables`
--
ALTER TABLE `personal_information_tables`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registration_tables`
--
ALTER TABLE `registration_tables`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `teacher_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `verification_information_tables`
--
ALTER TABLE `verification_information_tables`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
