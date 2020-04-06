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
(1, 'Blogging Pictures', 'Choose from a curated selection of blogging photos. Every image can be used for free for both commercial and personal uses thanks to the Unsplash community\'s photographers.', 'Blog/A7Vvf4zXpxhOwOXPTNYnJGgKACuevtxh1zoyt5Zs.jpeg', '2020-03-15 08:30:04', '2020-03-15 08:30:04'),
(2, 'Blogging Pictures1', 'Choose from a curated selection of blogging photos. Every image can be used for free for both commercial and personal uses thanks to the Unsplash community\'s photographers', 'Blog/fzAZCPf0VNREYOyLpYOFZSZTwgGYgzjz2N1xAzXM.jpeg', '2020-03-15 08:30:30', '2020-03-15 08:30:30'),
(3, 'Blogging Pictures2', 'Choose from a curated selection of blogging photos. Every image can be used for free for both commercial and personal uses thanks to the Unsplash community\'s photographers.', 'Blog/YZcVZe4zAATIpSZ3ma1qEwo8Dw1Ib3Nc1eO6SpDy.jpeg', '2020-03-15 08:30:54', '2020-03-15 08:30:54'),
(4, 'Blogging Pictures3', 'Choose from a curated selection of blogging photos. Every image can be used for free for both commercial and personal uses thanks to the Unsplash community\'s photographers', 'Blog/tFoA7TMVPhAo1Rdjcxf320Hi5KSzdGqSud1GmOLS.jpeg', '2020-03-15 08:31:19', '2020-03-15 08:31:19'),
(5, 'Blogging Pictures4', 'Choose from a curated selection of blogging photos. Every image can be used for free for both commercial and personal uses thanks to the Unsplash community\'s photographers', 'Blog/t6x5oaMDAF8mcBdj1afI2uDsMgjVmKd5ECeCkHCh.webp', '2020-03-15 08:32:16', '2020-03-15 08:32:16'),
(6, 'Blogging Pictures5', 'Next to the title, it is the one that makes make or break decision. Blog or post description is the piece of text that appears below your link in SERPs and social sites. There are two types of descriptions for a blog. Blog description: A description of your whole blog visible under your blog\'s homepage link.', 'Blog/PaoqO1MVmWmUayrBCSNRsYqEPO9KhToayKka4OlD.jpeg', '2020-03-29 10:25:29', '2020-03-29 10:25:29'),
(7, 'Blogging Pictures6', 'Blog titles are the first part of your blog post that your readers will see and the part that’s responsible for getting them to click through and read the rest. They’re frequently what people use when they share your blog post, meaning that any time a reader likes your content enough to share it with their social network, it’s the part of the blog their followers will see.', 'Blog/y4o1zf2xtLD9dkczajtbClg9vWRqCRDGOtifL51l.jpeg', '2020-03-29 10:29:02', '2020-03-29 10:29:02'),
(8, 'Blogging Pictures7', 'In other words, the success of your post absolutely depends on coming up with a good blog title. To strengthen your title-writing game, here are a few tips that will help you create great blog titles', 'Blog/V1e81poD8qUWnpHqoF9v4eCtiNAGVEATT4foRbZP.jpeg', '2020-03-29 10:29:45', '2020-03-29 10:29:45'),
(9, 'Blogging Pictures8', 'Over the years, a lot of bloggers and marketers have done research to see how different types of headlines perform in comparison to others and they’ve found some clear trends in what people choose to click on. You can benefit from the work others have done by one.', 'Blog/ZRc0MBg04ZYUFfSowsmCAZNp69e0FjGaHxvrXYCk.jpeg', '2020-03-29 10:30:41', '2020-03-29 10:30:41'),
(10, 'Blogging Pictures9', 'Take the hassle out of content writing today with Freelancer.com. Use our content writing services to find the perfect Content Writer for your website today. We have top Content Creators and Content Marketers ready to take your business to the next level.', 'Blog/r1IvGC2Db47daGksGxHFoV3Qw7WOMZ2MZAEdE9KL.jpeg', '2020-04-05 01:32:34', '2020-04-05 01:32:34'),
(11, 'Blogging Pictures10', 'The <b>blog post</b> is an entry (article) that you write on a <b>blog</b>. It can include <b>content</b> in the form of text, photos, infographics, or videos. Make sure you always have an engaging introduction, quality <b>content</b>, and a solid conclusion.', 'Blog/jqm9l7WtW5TyyfFd2uaeF8lwQj4mTa7yFvK3Ieav.jpeg', '2020-04-05 01:53:57', '2020-04-05 01:53:57'),
(12, 'Blogging Pictures11', 'The <b>blog post</b> is an entry (article) that you write on a <b>blog</b>. It can include <b>content</b> in the form of text, photos, infographics, or videos. Make sure you always have an engaging introduction, quality <b>content</b>, and a solid conclusion.', 'Blog/v58ImWfYnm8EC0AYkQgkMgnzT1LDR8LFMPBf7eyZ.jpeg', '2020-04-05 01:54:18', '2020-04-05 01:54:18'),
(13, 'Blogging Pictures12', 'The <b>blog post</b> is an entry (article) that you write on a <b>blog</b>. It can include <b>content</b> in the form of text, photos, infographics, or videos. Make sure you always have an engaging introduction, quality <b>content</b>, and a solid conclusion.', 'Blog/RaRm7F4OjNnIhv2MG7yCFNypnxWGYG29fbZGE10Z.jpeg', '2020-04-05 01:54:47', '2020-04-05 01:54:47'),
(14, 'Blogging Pictures13', 'The <b>blog post</b> is an entry (article) that you write on a <b>blog</b>. It can include <b>content</b> in the form of text, photos, infographics, or videos. Make sure you always have an engaging introduction, quality <b>content</b>, and a solid conclusion.', 'Blog/yHRHpx8hfMJzEzXNZ4SPYLgkjlFmzCjOcfje3Odu.jpeg', '2020-04-05 01:56:28', '2020-04-05 01:56:28'),
(15, 'Blogging Pictures 14', 'The <b>blog post</b> is an entry (article) that you write on a <b>blog</b>. It can include <b>content</b> in the form of text, photos, infographics, or videos. Make sure you always have an engaging introduction, quality <b>content</b>, and a solid conclusion.', 'Blog/aDumjULYvsfJkold9C0hAwBZDuDIMwdRzQYqUXek.jpeg', '2020-04-05 01:56:45', '2020-04-05 01:56:45'),
(16, 'Blogging Pictures 15', 'The <b>blog post</b> is an entry (article) that you write on a <b>blog</b>. It can include <b>content</b> in the form of text, photos, infographics, or videos. Make sure you always have an engaging introduction, quality <b>content</b>, and a solid conclusion.', 'Blog/92mzGuYlQ7W6NnD6CRkUDy41yUt6JdL2NDJ92Ocq.jpeg', '2020-04-05 01:57:13', '2020-04-05 01:57:13'),
(17, 'Blogging Pictures 16', 'Plan your <em>blog post</em> by choosing a topic, creating an outline, conducting research, and checking facts. Step 2: Craft a headline that is both .', 'Blog/2VykRBpX067Cq0iGhlcOhdAsn1NqeZwZrVSc44m1.jpeg', '2020-04-05 02:00:12', '2020-04-05 02:00:12'),
(18, 'Blogging Pictures 17', 'Plan your <em>blog post</em> by choosing a topic, creating an outline, conducting research, and checking facts. Step 2: Craft a headline that is both .', 'Blog/To4E71lWIcAuX8fVjgtQw9chsUkqpcvtSgW9PhOd.jpeg', '2020-04-05 02:00:32', '2020-04-05 02:00:32');

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
  MODIFY `blog_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
