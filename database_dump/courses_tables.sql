-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2020 at 01:16 PM
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
(1, 'Physics', 'Physics teachers who teach subjects outside of physics most often teach classes in chemistry, math, or physical science. Education & Background.', '4', '100', 'Courses/rtej8OM6b7qoqKEW3soDHgB9GCgk7QE1luinJnn9.jpeg', '2020-03-14 12:25:01', '2020-03-14 12:25:01'),
(2, 'Chemistry', 'General chemistry courses typically introduce concepts such as stoichiometry, prediction of reaction products, thermodynamics, nuclear chemistry, electrochemistry, chemical kinetics, and many of the rudiments of physical chemistry.', '3', '121', 'Courses/wDf4KaA5NDqjbPVJSPUwqV4aHaHXGRgoFZ2v3ojA.jpeg', '2020-03-14 12:26:26', '2020-03-14 12:26:26'),
(3, 'Computer', 'Subject:Computer science. Books in this subject area deal with computer science: the study of the theoretical foundations of information and computation, and of practical techniques for their implementation and application in computer systems.', '4', '1000', 'Courses/BZWemFKAM9Vk3agVtrecyImHLMvUXAwVKD4zqvP9.jpeg', '2020-03-14 12:28:45', '2020-03-14 12:28:45'),
(4, 'Electronice', 'Electronics is a subfield within the wider electrical engineering academic subject but denotes a broad engineering field that covers subfields such as analog electronics, digital electronics, consumer electronics, embedded systems and power electronics.', '5', '999', 'Courses/ZJ2mb64uZmGALOUXu8e6vn6Ew6OLxE9Ag55zSKik.jpeg', '2020-03-14 12:29:50', '2020-03-14 12:29:50'),
(5, 'Accounting courses', 'Accounting Job Training in Noida. Find accounting job training centres, institutes, classes in Noida and get accountant job training programs, course fees.', '4', '120', 'Courses/EuLOzS9PukxYZgdVXpYK3WMJLnvw4iQyNI6DN5px.jpeg', '2020-03-29 10:33:40', '2020-03-29 10:33:40'),
(6, 'Marketing courses', 'Marketing courses or pay to earn a Course or Specialization Certificate. Marketing courses teach strategies for influencing', '5', '800', 'Courses/mark1.png', '2020-03-29 10:35:35', '2020-03-29 10:35:35'),
(7, 'Project Academy Course', 'project management online courses: Alison: Diploma in Project Management. Brain Sensei: Complete PMP Exam Prep Course. Coursera: Applied Project Management Certificate. Master of Project Academy: Bundled Course.', '8', '100', 'Courses/ieOz2DBSEpRyUFYk09mAVbaoGH7hUGNllZeHYKAC.png', '2020-03-29 10:37:37', '2020-03-29 10:37:37'),
(8, 'Administrative Course', 'After completing a course in administration, individuals may be fully equipped to join the workforce as a secretary or administrative assistant, or advance within days.', '6', '455', 'Courses/o8dkD6D5GA0KYX8Bi8zMKeC3zyTrjBxT1PxMTvbQ.jpeg', '2020-03-29 10:39:25', '2020-03-29 10:39:25'),
(9, 'English', 'Maryland Teachers of the Year Biography. Allegany County – Dr. Matthew Ravenscroft, Mountain Ridge High School, Social Studies, Grades 9 – 12.', '4', '12', 'Courses/JlUdvYKIMqEiIwMKGyD8LqWMLQygC7NICXmQQzbv.jpeg', '2020-04-05 01:17:44', '2020-04-05 01:17:44'),
(10, 'Maths', 'Maryland Teachers of the Year Biography. Allegany County – Dr. Matthew Ravenscroft, Mountain Ridge High School, Social Studies, Grades 9 – 12.', '4', '100', 'Courses/eP817K2i7ZYijqo60W0Sr3rDEel2dTtwlRW9EW0X.jpeg', '2020-04-05 01:18:10', '2020-04-05 01:18:10'),
(11, 'Computer', 'Maryland Teachers of the Year Biography. Allegany County – Dr. Matthew Ravenscroft, Mountain Ridge High School, Social Studies, Grades 9 – 12.', '5', '1000', 'Courses/x6qOVP7LmqS2gxoYsWtzyypgDyV8KhSUb60EJIkz.jpeg', '2020-04-05 01:18:40', '2020-04-05 01:18:40'),
(12, 'Maths eng course', 'Maryland Teachers of the Year Biography. Allegany County – Dr. Matthew Ravenscroft, Mountain Ridge High School, Social Studies, Grades 9 – 12.', '4', '100', 'Courses/g3X2EL38WfEAR9VKgCREH53NynXsGethQaYTkwiU.jpeg', '2020-04-05 01:19:38', '2020-04-05 01:19:38'),
(13, 'Computer', 'Maryland Teachers of the Year Biography. Allegany County – Dr. Matthew Ravenscroft, Mountain Ridge High School, Social Studies, Grades 9 – 12.', '4', '12', 'Courses/D1KloiWUuMfucuqkRwz1iFFY0N20WI2x71wK8WXv.jpeg', '2020-04-05 01:20:10', '2020-04-05 01:20:10'),
(14, 'Electronice', 'In publishing, art, and communication, content is the information and experiences that are directed toward an end-user or audience. Content is \"something that is to be expressed through some medium, as speech, writing or any of various arts', '4', '100', 'Courses/xG5VEN4tHrcLE5ZSCAPXx3fJmbBuwEStLZ3N5b4E.jpeg', '2020-04-05 01:21:00', '2020-04-05 01:21:00'),
(15, 'Physics', 'Take the hassle out of content writing today with Freelancer.com. Use our content writing services to find the perfect Content Writer for your website today. We have top Content Creators and Content Marketers ready to take your business to the next level.', '4', '100', 'Courses/RLaF2dSc78HavS0oCrZOdC2MIOHXs5l186HZ00Ga.jpeg', '2020-04-05 01:26:25', '2020-04-05 01:26:25'),
(16, 'English', 'Take the hassle out of content writing today with Freelancer.com. Use our content writing services to find the perfect Content Writer for your website today. We have top Content Creators and Content Marketers ready to take your business to the next level.', '4', '110', 'Courses/2XooTuMWpgT6km6MVwkzJsxSkyfdKgi54PwhuCRZ.jpeg', '2020-04-05 01:26:57', '2020-04-05 01:26:57');

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
  MODIFY `course_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
