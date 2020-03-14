-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2020 at 07:03 PM
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

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`teacher_id`, `teacher_name`, `subject_teacher`, `teacher_biology`, `teacher_image`, `created_at`, `updated_at`) VALUES
(1, 'Javira', 'Maths', 'I was born and raised in southwestern Pennsylvania. My interest in math developed at an early age when I became obsessed with the statistics on the back of baseball and football cards. I attended West Virginia University and graduated in 1996 with a degree in Secondary Education.', 'public/Teacher/YuLYdrlkFgEdTBFXZj3MOJU0dM6ElIWCUwndBLk3.jpeg', '2020-03-14 12:18:29', '2020-03-14 12:18:29'),
(2, 'Sofia', 'English', 'Biography. I am a qualified English teacher and I hold a CELTA certificate for teachers of English as a foreign language, a qualification which is internationally recognised. ... 2 and I understand from first hand experience many of the issues connected with learning a second language as an adult.', 'public/Teacher/TPiIu5nBSgTKh5UHLqdSvZ8xwR6omYT8xABcqoA3.jpeg', '2020-03-14 12:19:19', '2020-03-14 12:19:19'),
(3, 'Chirstina Joul', 'Social', 'Maryland Teachers of the Year Biography. Allegany County – Dr. Matthew Ravenscroft, Mountain Ridge High School, Social Studies, Grades 9 – 12.', 'public/Teacher/sqZEDttlhL0q8arIMAe1HDj20NQPZ7rs6Jd71X4m.jpeg', '2020-03-14 12:21:02', '2020-03-14 12:21:02'),
(4, 'Maria Joul', 'Physics', 'The Physics Teacher focuses on the teaching of introductory physics including ... news in physics, history and philosophy, inclusion and diversity, and biographies.', 'public/Teacher/K40jQnz4mXbvahO3rGTYm5RcQ3cTXEG8tEPvyvk6.jpeg', '2020-03-14 12:21:59', '2020-03-14 12:21:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`teacher_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `teacher_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
