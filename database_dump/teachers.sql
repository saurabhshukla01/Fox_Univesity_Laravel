-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2020 at 01:17 PM
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
(1, 'Sofia', 'English', 'Biography. I am a qualified English teacher and I hold a CELTA certificate for teachers of English as a foreign language, a qualification which is internationally recognised. ... 2 and I understand from first hand experience many of the issues connected with learning a second language as an adult.', 'Teacher/TPiIu5nBSgTKh5UHLqdSvZ8xwR6omYT8xABcqoA3.jpeg', '2020-03-14 12:19:19', '2020-03-14 12:19:19'),
(2, 'Chirstina Joul', 'Social', 'Maryland Teachers of the Year Biography. Allegany County – Dr. Matthew Ravenscroft, Mountain Ridge High School, Social Studies, Grades 9 – 12.', 'Teacher/sqZEDttlhL0q8arIMAe1HDj20NQPZ7rs6Jd71X4m.jpeg', '2020-03-14 12:21:02', '2020-03-14 12:21:02'),
(3, 'Maria Joul', 'Physics', 'The Physics Teacher focuses on the teaching of introductory physics including ... news in physics, history and philosophy, inclusion and diversity, and biographies.', 'Teacher/K40jQnz4mXbvahO3rGTYm5RcQ3cTXEG8tEPvyvk6.jpeg', '2020-03-14 12:21:59', '2020-03-14 12:21:59'),
(4, 'Salman', 'History', 'History is the past as it is described in written documents, and the study thereof. Events occurring before written records are considered prehistory.', 'Teacher/qkfQnEkc7STv27h3gRCg66YxtZ4USFik4tmApC2l.jpeg', '2020-03-29 10:12:30', '2020-03-29 10:12:30'),
(5, 'Jamina', 'Sociology', 'he study of the development, structure, and functioning of human society.', 'Teacher/CBfRXZjktcIBR4DpGsLIFybFa2Gpj0KyUzZzc3mC.jpeg', '2020-03-29 10:14:26', '2020-03-29 10:14:26'),
(6, 'Jalima', 'Music', 'Music is an art form, and cultural activity, whose medium is sound.', 'Teacher/OYuFedRK9eXOAwz8pVdsWRjuVb2vqHJqOekIAAE2.jpeg', '2020-03-29 10:15:53', '2020-03-29 10:15:53'),
(7, 'Sapna Mishra', 'Art', 'Art is a diverse range of human activities in creating visual, auditory or performing artifacts (artworks), expressing the author\'s imaginative, conceptual ideas.', 'Teacher/fWBRI8pDeOcgesS8pu9igMvaNm6NsXPp8cwZ8Tfl.jpeg', '2020-03-29 10:17:40', '2020-03-29 10:17:40'),
(8, 'Seema', 'Zoology', 'Zoology is the branch of biology that studies the animal kingdom, including the structure, embryology, evolution, classification, habits, and distribution of all animals, both living and extinct, and how they interact with their ecosystems.', 'Teacher/AUh3JNV6wmoSn22QfRisC3k8paKdMJh7fOhnQf2S.jpeg', '2020-03-29 10:19:09', '2020-03-29 10:19:09'),
(9, 'saurabh', 'maths', 'Maryland Teachers of the Year Biography. Allegany County – Dr. Matthew Ravenscroft, Mountain Ridge High School, Social Studies, Grades 9 – 12.', 'Teacher/W8oxLLRqAR42JUC1PLp1z6fogdXzRjAyp1INpK7o.jpeg', '2020-04-05 01:03:31', '2020-04-05 01:03:31'),
(10, 'Testing Teacher', 'Testing', 'Maryland Teachers of the Year Biography. Allegany County – Dr. Matthew Ravenscroft, Mountain Ridge High School, Social Studies, Grades 9 – 12.', 'Teacher/ZqmwqbmNKA8jViztwv3UxXE5fD5qTZRxfQy5j605.jpeg', '2020-04-05 01:07:27', '2020-04-05 01:07:27'),
(11, 'Hello Teacher', 'DataBase', 'Maryland Teachers of the Year Biography. Allegany County – Dr. Matthew Ravenscroft, Mountain Ridge High School, Social Studies, Grades 9 – 12.', 'Teacher/aMPTEDOhgvVkCkYDW41MXDhKlCpCsuzkz4TfDby0.jpeg', '2020-04-05 01:10:44', '2020-04-05 01:10:44'),
(12, 'Teacher Bio', 'Biology', 'Maryland Teachers of the Year Biography. Allegany County – Dr. Matthew Ravenscroft, Mountain Ridge High School, Social Studies, Grades 9 – 12.', 'Teacher/jHpp0Pt1aOL58IW72QU0iS0HDSMxMSmDk85Z2qJu.jpeg', '2020-04-05 01:13:40', '2020-04-05 01:13:40'),
(13, 'Teacher 13', 'maths', 'Maryland Teachers of the Year Biography. Allegany County – Dr. Matthew Ravenscroft, Mountain Ridge High School, Social Studies, Grades 9 – 12.', 'Teacher/bGCc4gfwIf95mhux6djpwPU26m2tHP1qQtkwsIWi.jpeg', '2020-04-05 01:14:09', '2020-04-05 01:14:09'),
(14, 'Manju', 'History', 'Maryland Teachers of the Year Biography. Allegany County – Dr. Matthew Ravenscroft, Mountain Ridge High School, Social Studies, Grades 9 – 12.', 'Teacher/Yvp46iBenfeTrxgEfSprGIAcUJ2N0eXtUHP8blyD.jpeg', '2020-04-05 01:15:12', '2020-04-05 01:15:12'),
(15, 'Teacher 15', 'Socail', 'Maryland Teachers of the Year Biography. Allegany County – Dr. Matthew Ravenscroft, Mountain Ridge High School, Social Studies, Grades 9 – 12.', 'Teacher/ypx9VM6s8oMzT8S9bB5GmzsdVbOuoFOjdyhc8KLJ.jpeg', '2020-04-05 01:16:23', '2020-04-05 01:16:23'),
(16, 'Teacher 16', 'Vijaybada', 'Maryland Teachers of the Year Biography. Allegany County – Dr. Matthew Ravenscroft, Mountain Ridge High School, Social Studies, Grades 9 – 12.', 'Teacher/c5oA3j57CsVLuU0zEFCSMwIuAF2YJ7lqDbWJwUNe.jpeg', '2020-04-05 01:16:56', '2020-04-05 01:16:56');

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
  MODIFY `teacher_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
