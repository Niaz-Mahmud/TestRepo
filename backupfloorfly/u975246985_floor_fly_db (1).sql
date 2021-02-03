-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 06, 2021 at 05:00 AM
-- Server version: 10.3.24-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u975246985_floor_fly_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogcategories`
--

CREATE TABLE `blogcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogcategories`
--

INSERT INTO `blogcategories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(7, 'Real Estate Essentials', 'real-estate-essentials', '2020-12-29 16:54:29', '2020-12-29 16:54:29'),
(8, 'Understanding FAR & Legal Issues', 'understanding-far-legal-issues', '2020-12-29 16:54:41', '2020-12-29 16:54:41'),
(9, 'The Great Deals', 'the-great-deals', '2020-12-29 16:54:53', '2020-12-29 16:54:53'),
(10, 'Real Estate Marketing', 'real-estate-marketing', '2020-12-29 16:55:05', '2020-12-29 16:55:05'),
(11, 'Self Training', 'self-training', '2020-12-29 16:55:13', '2020-12-29 16:55:13'),
(12, 'Technology & Real Estate', 'technology-real-estate', '2020-12-29 16:55:23', '2020-12-29 16:55:23');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) NOT NULL,
  `title` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `feature` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blogcategory_id` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(2) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `user_id`, `title`, `description`, `slug`, `feature`, `blogcategory_id`, `status`, `created_at`, `updated_at`) VALUES
(9, 1, 'The Best Way to Invest In Real Estate', '<h3 style=\"color:#aaaaaa; font-style:italic\">&nbsp;</h3>\r\n\r\n<p><big><strong>The Best Way to Invest In Real Estate</strong></big></p>\r\n\r\n<p>The ever-growing cosmopolitan Dhaka is in high demand in creating living space. Living luxury has become a compulsion when it comes to living in Dhaka and when it comes to investment, everyone has their perspective about it. The phenomenon is making money out of an investment in the real estate sector. The world is getting older and the livable space has shortened over the epochs, but none of us has realized that one day the audacity of consuming livable space of other species shall become a suicidal mission by humans and the wrath of Mother Nature shall be upon us. Time to think about where to invest and how to invest.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Builders</strong> and Construction firms are shaping our cities and they are one of the key master planners for iconic structures. But a city&rsquo;s future does not always rely upon the skyscrapers or iconic structures, it is about usability, making lifestyle easier and convenient for its inhabitants. If we compare Australia and China where I visited very frequently over the last two decades, the difference is very visible. The way Australia planned and shaped their cities or the cosmopolitan areas, is now outdated due to the growing demands where the buildings are mostly two-storied or a suburban area is full of townhouses. China is unlikely in another way around, it planned for the growing demand for livable space in the cities and their policy was to make every family an owner of a flat. So now the Chinese people are not renting and they have their property. That&rsquo;s how the Chinese govt. is utilizing its resources and creates synergy in the economy. In Dhaka city whatever the areas are like Uttara, Bashundhara, Baridhara, Mirpur, Banani, Mohammadpur, Khilgaon, or at Diabari, you will find more than 90% of population is migrated from different parts of Bangladesh and they rent their living place. It is not that they cannot effort a home or they don&rsquo;t belong to the area, rather it is because they have no option without renting as the developer companies are unable to offer them according to their need. The developers are always partaking in wishful discerning of the elite or semi-elite class. So the middle class and lower middle class is being always denied. Floorfly is to change the paradigm and wish to bring changes for believing its motto &ldquo;every life deserves a living space&rdquo;.</p>\r\n\r\n<p>But where to invest if there is no supply according to demand? Every innovation is dealt with troubles and the question has its answer. But finding the right place to invest may become very ambiguous and life-threatening if it is not taken seriously.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Nowadays</strong> there are groups who get bunched up together and purchase a piece of land and they together wish to build a structure and often it is called shared development. Should you invest in here just to live? Are you aware of its outcome and future or are you sure that you will get what you wanted? Who to blame if something goes wrong? Who is among you shall be held responsible? Why and by what laws the person shall abide by the group? Who to check quality or how to manage the very detail of micromanagement of erecting a building? There are hundreds of questions and confusion when it comes to shared developments by so-called shareholders or inviters.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>When</strong> it comes to the terms of investing, it means an achievement where you need to ensure maximum ROI. You have to be visionary or to counsel the experts to make a secure investment in the real estate sector. Look out for the <a href=\"https://rajuk.portal.gov.bd/site/page/68c8d4af-f493-43de-a54c-b0dc83d56bff\">DAP</a> (Detail Area Planning) of <a href=\"http://www.rajuk.gov.bd\">RAJUK</a>, City Planning, connect with people who are engaged in city designing may give you a clear picture in which area you should invest either for living or to maximize your ROI. Look out for that particular area&rsquo;s land value, find it out whether it is a leasehold property or a privately held property. Leasehold properties always pay more in the future than privately held properties. Have your own gut&rsquo;s feeling, talk to your Sales Agent who is known to you for years. After considering all the facts involved then decide where to invest. The already grown up populated area will miss its beauty in 4-5 year time because of its old perspective view. Modern architecture&nbsp;shall be implied in the new areas and more innovation shall be practiced in the developing areas. Diabari in Uttara, Tongi in Gazipur, and Basila in Mohammadpur could be your next destination for either investment or living.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Before investing in the Real-Estate one must consider the top ten factors which matter the most:</p>\r\n\r\n<ol>\r\n	<li>Background of the company or the person from whom you intends to buy</li>\r\n	<li>Achievement history</li>\r\n	<li>The <a href=\"https://floorfly.com/details/land-registration/1\">property registration</a> process and history</li>\r\n	<li>Rajuk approved FAR (Floor Area Ratio) wise carpet area</li>\r\n	<li>Know how much space is taken as a common area (in most of the cases corruption begins here)</li>\r\n	<li>Handover time and related clauses in the Sales Deed (this is the most tricky part)</li>\r\n	<li>You are not buying a piece of cloth, so you must meet the owner of the company or the person whom you are purchasing the property</li>\r\n	<li>You must know who is signing the Sales Deed if it is other than a person and on behalf of a company; ask them to show the &ldquo;Board of Resolution&rdquo;</li>\r\n	<li>Have a clear understanding of the area and its potential</li>\r\n	<li>Make sure you get professional advice before purchasing your property</li>\r\n</ol>\r\n\r\n<p>&nbsp; &nbsp; Thank You dear.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', 'the-best-way-to-invest-in-real-estate', '/public/upload/blogs/1609828932land.png', '7', 1, '2020-12-30 10:11:35', '2021-01-05 12:42:12');

-- --------------------------------------------------------

--
-- Table structure for table `client_requests`
--

CREATE TABLE `client_requests` (
  `id` int(10) NOT NULL,
  `name` varchar(190) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(90) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `size` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact` int(11) NOT NULL,
  `requirement` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `client_requests`
--

INSERT INTO `client_requests` (`id`, `name`, `email`, `location`, `size`, `contact`, `requirement`, `created_at`, `updated_at`) VALUES
(4, 'Imran Hasan', 'ih7kania123@gmail.com', 'Satkania', '5', 1860936539, NULL, '2020-09-15 01:44:31', '2020-09-15 01:44:31'),
(5, 'Imran Hasan', 'ih7kania123@gmail.com', 'Satkania', '5', 1860936539, NULL, '2020-09-15 01:44:31', '2020-09-15 01:44:31');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `company` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `start_date` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `end_date` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `position` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `department` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `user_id`, `company`, `start_date`, `end_date`, `position`, `department`, `created_at`, `updated_at`) VALUES
(1, 20, 'Winbiz Digital', NULL, NULL, 'Officer', 'Admin', NULL, NULL),
(2, 22, 'Winbiz', NULL, NULL, 'Executive', 'Marketing', NULL, NULL),
(3, 30, 'Winbiz', NULL, NULL, '4', '3', NULL, NULL),
(4, 31, 'com1', NULL, NULL, '1', '2', NULL, NULL),
(5, 32, 'com1', NULL, NULL, '2', '2', NULL, NULL),
(6, 35, 'vrthtesrh', NULL, NULL, '2', '1', NULL, NULL),
(7, 36, 'com1', NULL, NULL, '2', '2', NULL, NULL),
(8, 38, 'advance', NULL, NULL, '1', '1', NULL, NULL),
(9, 51, 'com1', NULL, NULL, '2', '2', NULL, NULL),
(10, 52, 'com1', NULL, NULL, '1', '1', NULL, NULL),
(11, 53, 'com1', NULL, NULL, '3', '1', NULL, NULL),
(12, 54, 'Rupayan Housing Estate Limited', NULL, NULL, '1', '1', NULL, NULL),
(13, 55, 'com1', '2020-09-15', '2020-09-22', '1', '2', NULL, NULL),
(14, 56, 'com1', '2020-09-15', '2020-09-22', '1', '2', NULL, NULL),
(15, 57, 'Rupayan group', '2018-09-13', '2020-05-30', '1', '1', NULL, NULL),
(16, 60, 'Rosoborn Technologies', '2020-09-01', '2020-09-01', '9', '4', NULL, NULL),
(17, 61, 'com1', '2020-09-08', '2020-09-22', '2', '2', NULL, NULL),
(18, 62, 'com1', '2020-09-08', '2020-09-22', '2', '2', NULL, NULL),
(19, 63, 'com1', '2020-09-01', '2020-09-30', '2', '2', NULL, NULL),
(20, 64, 'com1', '2020-09-08', '2020-09-28', '2', '1', NULL, NULL),
(21, 65, 'NENEMART LTD', '2020-09-02', '2020-09-01', '9', '4', NULL, NULL),
(22, 66, 'com. name', '2020-09-23', '2020-09-22', '2', '2', NULL, NULL),
(23, 67, 'abc group', '2020-01-01', '2020-08-30', '10', '2', NULL, NULL),
(24, 68, 'abc group', '2020-09-07', '2020-09-21', '2', '2', NULL, NULL),
(25, 69, 'NENEMART LTD', '2020-09-01', '2020-09-01', '6', '4', NULL, NULL),
(26, 70, 'NENEMART LTD', '2020-09-01', '2020-09-01', '9', '4', NULL, NULL),
(27, 71, 'A Company', '2019-01-01', '2020-09-30', '11', '2', NULL, NULL),
(28, 74, 'ttt company', '2020-09-01', '2020-09-30', '1', '4', NULL, NULL),
(29, 75, 'com1', '2020-09-08', '2020-09-22', '3', '2', NULL, NULL),
(30, 76, 'A Company', '2018-02-03', '2020-09-30', '2', '2', NULL, NULL),
(31, 77, 'raubsbha', '2010-03-03', '2020-09-16', '3', '1', NULL, NULL),
(32, 84, 'A Company Ltd', '2020-09-01', '2020-09-30', '3', '2', NULL, NULL),
(33, 87, 'A Company', '2020-08-31', '2020-09-15', '1', '2', NULL, NULL),
(34, 88, 'com1', '2020-09-08', '2020-09-07', '2', '3', NULL, NULL),
(35, 89, 'A Company', '2020-07-15', '2020-08-31', '1', '1', NULL, NULL),
(36, 90, 'Winbiz', '2017-01-01', '2020-09-02', '2', '2', NULL, NULL),
(37, 91, 'Winbiz', '2020-06-15', '2020-09-09', '4', '3', NULL, NULL),
(38, 92, 'com1', '2024-06-11', '2020-09-15', '1', '1', NULL, NULL),
(39, 92, NULL, '2024-06-11', '2020-09-15', '1', '1', NULL, NULL),
(40, 93, 'abc group', '2020-09-02', '2020-09-15', '2', '2', NULL, NULL),
(41, 93, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(42, 94, 'com1', '2020-09-01', '2020-09-14', '1', '1', NULL, NULL),
(43, 94, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(44, 95, 'Smart Assets BD', '2018-07-03', '2020-09-19', '11', '1', NULL, NULL),
(45, 96, 'com1', '2020-09-08', '2020-09-15', '2', '2', NULL, NULL),
(46, 96, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(47, 105, 'NENEMART LTD', '2009-08-05', '2020-10-06', '9', '4', NULL, NULL),
(48, 105, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(49, 106, 'Building Technology & Ideas Lt', '2010-01-01', '2020-09-01', '9', '1', NULL, NULL),
(50, 106, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(51, 107, 'DITM', '2018-01-15', '2020-09-26', '9', '4', NULL, NULL),
(52, 107, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(53, 108, 'Winbiz', '2020-09-15', '2020-09-10', '3', '2', NULL, NULL),
(54, 108, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(55, 111, 'com1', '02-2020', '01-2020', 'CCO - Chief Customer Officer', 'Business Development', NULL, NULL),
(56, 111, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(63, 119, 'com1', '02-2020', '02-2020', 'CCO - Chief Commercial Officer', 'Public Relations', NULL, NULL),
(64, 119, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(65, 122, 'ROSOBORN Technologies Ltd.', '07-2019', '04-2020', 'Sight Engineer', 'Business Development', NULL, NULL),
(66, 122, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(67, 124, 'ROSOBORN Technologies Ltd.', '01-2020', '08-2020', 'Scrum Master', 'Legal', NULL, NULL),
(68, 124, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(69, 128, 'ROSOBORN Technologies Ltd.', '01-2020', '05-2021', 'Benefits Manager', 'Media', NULL, NULL),
(70, 128, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(71, 129, 'ROSOBORN Technologies Ltd.', '01-2020', '12-2020', 'CPO - Chief Product Officer', 'Legal', NULL, NULL),
(72, 129, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(73, 36, 'ROSOBORN Technologies Ltd.', '01-2019', '03-2020', 'Chairman', 'Accounts & Finance', NULL, NULL),
(74, 36, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(75, 37, 'Floorfly.com', '10-2020', '11-2020', 'CMO - Chief Marketing Officer', 'Marketing', NULL, NULL),
(76, 37, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(77, 41, 'Floorfly', '02-2020', NULL, 'Managing Director', 'Marketing', NULL, NULL),
(78, 41, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(79, 46, 'Floorfly.com', '02-2019', '02-2020', 'Managing Director', 'Accounts & Finance', NULL, NULL),
(80, 46, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Accounts & Finance', 1, NULL, NULL),
(2, 'Marketing', 1, NULL, NULL),
(3, 'Human Resource', 1, NULL, NULL),
(4, 'Admin', 1, NULL, NULL),
(5, 'Sales', 1, '2020-09-23 00:14:12', '2020-09-23 00:14:12'),
(6, 'Sales & Marketing', 1, NULL, NULL),
(7, 'Media', 1, NULL, NULL),
(8, 'Construction', 1, NULL, NULL),
(9, 'Administration', 1, NULL, NULL),
(10, 'Customer Service', 1, NULL, NULL),
(11, 'Legal', 1, NULL, NULL),
(12, 'Business Development', 1, NULL, NULL),
(13, 'Public Relations', 1, NULL, NULL),
(14, '', 1, '2020-10-10 05:07:31', '2020-10-10 05:07:31');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int(11) NOT NULL,
  `user_id` int(3) DEFAULT NULL,
  `institue` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `agent_result` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `agent_degree` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `user_id`, `institue`, `agent_result`, `agent_degree`, `created_at`, `updated_at`) VALUES
(1, 20, 'UITS', '3.5', 'Bachelor', NULL, NULL),
(2, 20, NULL, NULL, NULL, NULL, NULL),
(3, 22, 'University o information technology', '3.5', 'Bachelor', NULL, NULL),
(4, 22, NULL, NULL, NULL, NULL, NULL),
(5, 30, 'University o information techn', '3.5', 'MBA', NULL, NULL),
(6, 30, NULL, NULL, NULL, NULL, NULL),
(7, 31, 'instation', '55', 'HSC', NULL, NULL),
(8, 31, NULL, NULL, NULL, NULL, NULL),
(9, 32, 'instation', '55', 'SSC', NULL, NULL),
(10, 32, NULL, NULL, NULL, NULL, NULL),
(11, 35, 'dgrsrhgesrh', '3.20', 'Masters', NULL, NULL),
(12, 35, NULL, NULL, NULL, NULL, NULL),
(13, 36, 'ftyhtrhrt yr tyh55', '55', 'SSC', NULL, NULL),
(14, 36, NULL, NULL, NULL, NULL, NULL),
(15, 38, 'titumir college', '3.20', 'Masters', NULL, NULL),
(16, 38, NULL, NULL, NULL, NULL, NULL),
(17, 51, 'onw', '55', 'HSC', NULL, NULL),
(18, 51, NULL, NULL, NULL, NULL, NULL),
(19, 52, 'instation', '55', 'HSC', NULL, NULL),
(20, 52, NULL, NULL, NULL, NULL, NULL),
(21, 53, 'instation', '55', 'HSC', NULL, NULL),
(22, 53, NULL, NULL, NULL, NULL, NULL),
(23, 54, 'Asian University Bangladesh', '3.34', 'MBA', NULL, NULL),
(24, 54, NULL, NULL, NULL, NULL, NULL),
(25, 55, 'instation', '55', 'HSC', NULL, NULL),
(26, 55, NULL, NULL, NULL, NULL, NULL),
(27, 56, 'instation', '55', 'HSC', NULL, NULL),
(28, 56, NULL, NULL, NULL, NULL, NULL),
(29, 57, 'AUST', '3.51', 'MBA', NULL, NULL),
(30, 57, NULL, NULL, NULL, NULL, NULL),
(31, 60, 'ULAB', 'B+', 'MBA', NULL, NULL),
(32, 60, NULL, NULL, NULL, NULL, NULL),
(33, 61, 'instation', '55', 'HSC', NULL, NULL),
(34, 61, NULL, NULL, NULL, NULL, NULL),
(35, 62, 'instation', '55', 'HSC', NULL, NULL),
(36, 62, NULL, NULL, NULL, NULL, NULL),
(37, 63, 'instation', '55', 'SSC', NULL, NULL),
(38, 63, NULL, NULL, NULL, NULL, NULL),
(39, 64, 'instation', '3.3', 'SSC', NULL, NULL),
(40, 64, NULL, NULL, NULL, NULL, NULL),
(41, 65, 'ULAB', 'B+', 'MBA', NULL, NULL),
(42, 65, NULL, NULL, NULL, NULL, NULL),
(43, 66, 'instation', '5.5', 'HSC', NULL, NULL),
(44, 66, NULL, NULL, NULL, NULL, NULL),
(45, 67, 'Govt. Titumir College', '3.16', 'MBA', NULL, NULL),
(46, 67, NULL, NULL, NULL, NULL, NULL),
(47, 68, 'Govt. Titumir College', '3.16', 'SSC', NULL, NULL),
(48, 68, NULL, NULL, NULL, NULL, NULL),
(49, 69, 'ULAB', 'B+', 'MBA', NULL, NULL),
(50, 69, NULL, NULL, NULL, NULL, NULL),
(51, 70, 'ULAB', 'B+', 'MBA', NULL, NULL),
(52, 70, NULL, NULL, NULL, NULL, NULL),
(53, 71, 'A School', '5.00', 'SSC', NULL, NULL),
(54, 71, NULL, NULL, NULL, NULL, NULL),
(55, 71, 'B College', '5.00', 'HSC', NULL, NULL),
(56, 71, 'C University', '3.32', 'Bachelor', NULL, NULL),
(57, 74, 'a school', '5.00', 'SSC', NULL, NULL),
(58, 74, NULL, NULL, NULL, NULL, NULL),
(59, 75, 'instation', '55', 'HSC', NULL, NULL),
(60, 75, NULL, NULL, NULL, NULL, NULL),
(61, 76, 'A School', '3', 'SSC', NULL, NULL),
(62, 76, NULL, NULL, NULL, NULL, NULL),
(63, 76, 'B College', '4', 'HSC', NULL, NULL),
(64, 76, 'C University', '1', 'Bachelor', NULL, NULL),
(65, 77, 'nsu', '3.5', 'Masters', NULL, NULL),
(66, 77, NULL, NULL, NULL, NULL, NULL),
(67, 84, 'A School', '5.00', 'SSC', NULL, NULL),
(68, 84, NULL, NULL, NULL, NULL, NULL),
(69, 87, 'A School', '3', 'Bachelor', NULL, NULL),
(70, 87, NULL, NULL, NULL, NULL, NULL),
(71, 88, 'instation', '55', 'SSC', NULL, NULL),
(72, 88, NULL, NULL, NULL, NULL, NULL),
(73, 89, 'A School', '3', 'Bachelor', NULL, NULL),
(74, 89, NULL, NULL, NULL, NULL, NULL),
(75, 90, 'University o information techn', '3.5', 'HSC', NULL, NULL),
(76, 90, NULL, NULL, NULL, NULL, NULL),
(77, 91, 'University o information techn', '3.5', 'Bachelor', NULL, NULL),
(78, 91, NULL, NULL, NULL, NULL, NULL),
(79, 92, 'instation', '5.5', 'SSC', NULL, NULL),
(80, 92, NULL, NULL, NULL, NULL, NULL),
(81, 93, 'instation', '55', 'HSC', NULL, NULL),
(82, 93, NULL, NULL, NULL, NULL, NULL),
(83, 94, 'instation', '55', 'HSC', NULL, NULL),
(84, 94, NULL, NULL, NULL, NULL, NULL),
(85, 95, 'shiddswarie degree colllage', '2nd division', 'Masters', NULL, NULL),
(86, 95, NULL, NULL, NULL, NULL, NULL),
(87, 96, 'instation', '55', 'HSC', NULL, NULL),
(88, 96, NULL, NULL, NULL, NULL, NULL),
(89, 105, 'ULAB', 'A+', 'MBA', NULL, NULL),
(90, 105, NULL, NULL, NULL, NULL, NULL),
(91, 106, 'University of Liberal Arts', '3.34', 'MBA', NULL, NULL),
(92, 106, NULL, NULL, NULL, NULL, NULL),
(93, 107, 'Govt Azizul Haque College', 'Second Class', 'Masters', NULL, NULL),
(94, 107, NULL, NULL, NULL, NULL, NULL),
(95, 108, 'University o information techn', '3.5', 'HSC', NULL, NULL),
(96, 108, NULL, NULL, NULL, NULL, NULL),
(97, 111, 'Govt. Titumir College', '55', 'SSC', NULL, NULL),
(98, 111, NULL, NULL, NULL, NULL, NULL),
(105, 119, 'instation', '55', 'SSC', NULL, NULL),
(106, 119, NULL, NULL, NULL, NULL, NULL),
(107, 122, 'Milestone College', '5.00', 'HSC', NULL, NULL),
(108, 122, NULL, NULL, NULL, NULL, NULL),
(109, 124, 'Milestone College', '5.00', 'HSC', NULL, NULL),
(110, 124, NULL, NULL, NULL, NULL, NULL),
(111, 128, 'Milestone College', '5.00', 'HSC', NULL, NULL),
(112, 128, NULL, NULL, NULL, NULL, NULL),
(113, 129, 'Milestone College', '5.00', 'HSC', NULL, NULL),
(114, 129, NULL, NULL, NULL, NULL, NULL),
(115, 36, 'Milestone College', '5.00', 'HSC', NULL, NULL),
(116, 36, NULL, NULL, NULL, NULL, NULL),
(117, 37, 'BSMRSTU', '3.01', 'Bachelor', NULL, NULL),
(118, 37, NULL, NULL, NULL, NULL, NULL),
(119, 41, 'Bsmrstu', '3.5', 'Bachelor', NULL, NULL),
(120, 41, NULL, NULL, NULL, NULL, NULL),
(121, 46, 'BSMRSTU', '3.01', 'Bachelor', NULL, NULL),
(122, 46, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `enquire`
--

CREATE TABLE `enquire` (
  `id` int(10) UNSIGNED NOT NULL,
  `property_id` int(11) DEFAULT NULL,
  `enquiry_property` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` int(10) DEFAULT NULL,
  `verify_user_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `property_size_form` varchar(90) COLLATE utf8_unicode_ci DEFAULT NULL,
  `property_size_to` varchar(90) COLLATE utf8_unicode_ci DEFAULT NULL,
  `property_location` varchar(90) COLLATE utf8_unicode_ci DEFAULT NULL,
  `property_status` varchar(90) COLLATE utf8_unicode_ci DEFAULT NULL,
  `budget` varchar(90) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facing` varchar(90) COLLATE utf8_unicode_ci DEFAULT NULL,
  `floor_position` varchar(90) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lead_source` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `verify` int(11) NOT NULL DEFAULT 0,
  `verify_date` timestamp NULL DEFAULT NULL,
  `reffered_by` varchar(90) COLLATE utf8_unicode_ci DEFAULT NULL,
  `refer_person_name` varchar(90) COLLATE utf8_unicode_ci DEFAULT NULL,
  `refer_person_phone` int(11) DEFAULT NULL,
  `refer_person_address` varchar(90) COLLATE utf8_unicode_ci DEFAULT NULL,
  `relation` varchar(90) COLLATE utf8_unicode_ci DEFAULT NULL,
  `special_note` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `enquire`
--

INSERT INTO `enquire` (`id`, `property_id`, `enquiry_property`, `user_id`, `verify_user_id`, `name`, `email`, `phone`, `message`, `property_size_form`, `property_size_to`, `property_location`, `property_status`, `budget`, `facing`, `floor_position`, `lead_source`, `verify`, `verify_date`, `reffered_by`, `refer_person_name`, `refer_person_phone`, `refer_person_address`, `relation`, `special_note`, `created_at`, `updated_at`) VALUES
(9, NULL, NULL, NULL, NULL, 'Md. Abdul Kafi Neowaj', 'kneowaj@gmail.com', '01818601855', NULL, '1100', '1300', 'uttara', 'Ready to Live', NULL, NULL, NULL, 'Website', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-10-21 20:39:13', '2020-10-21 20:39:13'),
(10, 11, '3 Bed Apartment in Mohammadpur', NULL, NULL, 'Yamin', 'yamineco2006@gmail.com', '01732284841', 'I would like to know exact location on google map and more photos including floor plan about Property Floorfly-ID11 . Please contact me at your earliest convenience.', NULL, NULL, '30', NULL, NULL, NULL, NULL, 'Website', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-10-22 15:13:10', '2020-10-22 15:13:10'),
(12, NULL, NULL, NULL, NULL, 'Rabiul Pervez', 'rabiulufo@yahoo.com', '01727009631', NULL, '1200', '1400', 'mirpur,uttara', 'Ready to Live', NULL, NULL, NULL, 'Website', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-10-30 19:26:14', '2020-10-30 19:26:14'),
(13, NULL, NULL, NULL, NULL, 'StevenTrouh', 'mrgreen1top@gmail.com', '81784157788', NULL, NULL, NULL, 'darus Salam', 'Hand Over in 24m', NULL, NULL, NULL, 'Website', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-03 05:51:13', '2020-11-03 05:51:13'),
(14, NULL, NULL, NULL, NULL, 'Mir Ruhul Islam', 'mirruhul45@gmail.com', '01792401358', 'দক্ষিনমুখী,৩ বেড,৩ বার্থ,৩ বারান্দা ৪/৫ তলা,টপ ফ্লোর ব্যতীত কয় করতে চাই।', '1250', '1300', 'dhanmondi', 'Hand Over in 12m', NULL, NULL, NULL, 'Website', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-11 21:08:56', '2020-11-11 21:08:56'),
(16, NULL, NULL, NULL, NULL, 's.saha', 'surajit087@yahoo.com', '01709992246', NULL, '1500', '2000', 'uttara', 'Ready to Live', NULL, NULL, NULL, 'Website', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-23 22:04:50', '2020-11-23 22:04:50'),
(18, NULL, NULL, NULL, NULL, 'Rehana', 'nazmakhondakr@gmail.com', '01552352174', 'Use flat', '1000', NULL, 'mirpur', NULL, NULL, NULL, NULL, 'Website', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-28 19:19:58', '2020-11-28 19:19:58'),
(19, 73, 'Ready Flat For Sale @ Bijoy-Rakeen City', NULL, NULL, 'Ahammed Oli Ahad', 'oliahad80@gmail.com', '01962107384', 'I would like to inquire about Property Floorfly-ID73 . Please contact me at your earliest convenience.', NULL, NULL, '29', NULL, NULL, NULL, NULL, 'Website', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-30 08:24:37', '2020-11-30 08:24:37'),
(21, 93, 'Ready Flat For Sale At Baridhara', NULL, NULL, 'Abul Ehsan', 'a.ehsan80@gmail.com', '01713385091', 'I would like to inquire about Property Floorfly-ID93 . Please contact me at your earliest convenience.', NULL, NULL, '50', NULL, NULL, NULL, NULL, 'Website', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-12-01 15:40:31', '2020-12-01 15:40:31'),
(24, NULL, NULL, NULL, NULL, 'Md. Ashraful Islam', 'engashrafulislam@gmail.com', '01710768575', 'please details...', '1300', '1500', 'sherebangla Nagar', 'Ready to Live', NULL, NULL, NULL, 'Website', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-12-13 23:07:15', '2020-12-13 23:07:15'),
(28, NULL, NULL, NULL, NULL, 'TARONE912', 'LEPETICH953@thefmail.com', '83286133145', 'Thank you!!1', NULL, NULL, 'aftabnagar', 'Hand Over in 18m', NULL, NULL, NULL, 'Website', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-03 23:35:10', '2021-01-03 23:35:10'),
(29, NULL, NULL, NULL, NULL, 'Md Alamgir Islam', 'mdalamgirislam1958@gmail.com', '01715104091', NULL, '1200', '1350', 'aftabnagar,khilgaon', 'Ready to Live', NULL, NULL, NULL, 'Website', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-04 22:15:48', '2021-01-04 22:15:48');

-- --------------------------------------------------------

--
-- Table structure for table `front_designs`
--

CREATE TABLE `front_designs` (
  `id` int(10) NOT NULL,
  `title` varchar(190) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(190) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` varchar(90) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(90) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `front_designs`
--

INSERT INTO `front_designs` (`id`, `title`, `image`, `link`, `type`, `created_at`, `updated_at`) VALUES
(2, 'On Sale Bottom Service Banner', '/public/upload/front-designs/1609155104on sale bottom ads.png', 'https://floorfly.com/details/legal-vetting/4', 'on sale bottom ads', '2020-12-28 11:31:44', '2020-12-28 17:31:44'),
(12, 'Services Banner', '/public/upload/front-designs/1609155236service.png', 'https://floorfly.com/details/landscaping/13', 'service', '2020-12-28 11:33:56', '2020-12-28 17:33:56'),
(13, 'Commercial Banner', '/public/upload/front-designs/1609323956Banner bottom.png', 'https://floorfly.com/properties/luxurious-flat-for-sale-in-bashundhara/137', 'commercial projects', '2020-12-30 10:25:56', '2020-12-30 16:25:56'),
(17, 'Apartment For Sale At Baridhara J Block', '/public/upload/front-designs/1605092726baridhara.png', 'https://floorfly.com/properties/ready-flat-for-sale-at-baridhara-j-block/70', 'sidebar ads', '2020-11-11 17:05:26', '2020-11-11 17:05:26'),
(18, 'Flat For Sale At Dhanmondi 32', '/public/upload/front-designs/1605092977dhanmondi32.png', 'https://floorfly.com/properties/ready-flat-for-sale-at-dhanmondi-32/77', 'sidebar ads', '2020-11-11 17:09:37', '2020-11-11 17:09:37'),
(19, 'Apartment For Sale At Bashundhara', '/public/upload/front-designs/16097502732142 Bashundhara.png', 'https://floorfly.com/properties/luxurious-flat-for-sale-in-bashundhara/137', 'sidebar ads', '2021-01-04 08:51:13', '2021-01-04 14:51:13'),
(20, 'Flat For Sale At Dhaka', '/public/upload/front-designs/16090535101700 banner.jpg', 'https://floorfly.com/properties/luxurious-1700sq-ft-flat-for-sale-at-uttara/132', 'on sale left ads', '2020-12-28 11:26:15', '2020-12-28 17:26:15'),
(23, 'Flat For Sale At Dhanmondi 32', '/public/upload/front-designs/16090538521300 banner.jpg', 'https://floorfly.com/properties/luxurious-apartment-for-sale-at-low-price-in-uttara/131', 'home-sidebar-ads1', '2020-12-28 11:13:14', '2020-12-28 17:13:14');

-- --------------------------------------------------------

--
-- Table structure for table `hires`
--

CREATE TABLE `hires` (
  `id` int(90) NOT NULL,
  `sellertype` varchar(90) COLLATE utf8_unicode_ci DEFAULT NULL,
  `seller_id` int(10) NOT NULL,
  `seller_name` varchar(90) COLLATE utf8_unicode_ci NOT NULL,
  `seller_phone` int(11) DEFAULT NULL,
  `seller_email` varchar(90) COLLATE utf8_unicode_ci DEFAULT NULL,
  `agent_id` int(10) NOT NULL,
  `agent_name` varchar(90) COLLATE utf8_unicode_ci NOT NULL,
  `agent_phone` int(11) DEFAULT NULL,
  `agent_email` varchar(90) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hiretype` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(10) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `interests`
--

CREATE TABLE `interests` (
  `id` int(10) NOT NULL,
  `agent_id` int(10) NOT NULL,
  `agent_name` varchar(90) COLLATE utf8_unicode_ci NOT NULL,
  `agent_phone` varchar(90) COLLATE utf8_unicode_ci NOT NULL,
  `property_id` int(10) NOT NULL,
  `property_name` varchar(90) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(10) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_12_10_065428_create_settings_table', 1),
('2015_12_25_133843_create_enquire_table', 1),
('2015_12_25_134328_create_partners_table', 1),
('2015_12_25_134629_create_properties_table', 1),
('2015_12_25_142242_create_slider_table', 1),
('2015_12_25_142436_create_subscriber_table', 1),
('2015_12_25_142619_create_testimonials_table', 1),
('2016_04_04_164203_create_cities_table', 1),
('2016_04_04_164227_create_property_types_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `page_title` varchar(500) NOT NULL,
  `page_slug` varchar(500) NOT NULL,
  `page_content` text NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `page_title`, `page_slug`, `page_content`, `status`) VALUES
(1, 'About Us', 'about-us', '<p>Floorfly Realtor Limited is established to serve the residents of Bangladesh for any property related services, buy and sell service, and to provide building design and architectural solution. Ready flats, ongoing apartment and verified plots around Dhaka city are available at affordable and competitive price. We are the best property solution provider in Uttara sector 1, 3, 4, 5, 6, 7, 9, 10, 11, 12, 13, 15, 14, 17, Bashundhara, Baridhara, Mirpur, Banasree, Gulshan, Banani, Mohammadpur, Aftabnagar, Khilgaon, Nikunja, Niketon, Tongi, Gazipur, Savar, Jatrabari, Rampura, Tejgaon and many more prime location in Dhaka, BD. Floorfly is an ideal place for finding flats within budget, location and convenience.&nbsp;&nbsp;</p><p>Core Services:</p><p>Flat, Office, Shop, Showroom Outlets &amp; Land Buy-Sale_Rent</p><p>Registration of Land &amp; Flats Including Mutation &amp; Mortgage Assistance</p><p>Project Design (Architectural, Structural, Electrical &amp; Plumbing)</p><p>Rajuk Approval &amp; Supportive Colaboration</p><p>Project Cost Estimate &amp; Budgetting</p><p>Digital Survey &amp; Soil Test</p><p>Project Fencing</p><p>Legal Vetting</p><p>Other Services: <span style=\\\"white-space:pre\\\">			</span></p><p>Sink Repair</p><p>Office Carpet Cleaning</p><p>A/C Servicing &amp; Repair</p><p>Interior &amp; Exterior Painting</p><p>Water Tank/Reservoir Cleaning</p><p>Landscapping &amp; Rooftop Gardening</p><p>Marble &amp; Tiles Cleaning &amp; Polishing</p><p>All Kind of Property Renovation Works</p><p>All Kind of Plumbing &amp; Electrical Works</p><p>Interior Design- Shops, Office, Apartments</p><p>Sofa, Chair Cleaning &amp; Furniture Polishing</p><p>Lift, Elevator, Escalator, Generator, Substation</p><p>360 Security Solution Including Fire Safety, CCTV Camera, PABX etc</p><p>Hotel, Hospital, Restaurant, Educational Institutions, Home &amp; Office Deep Cleaning</p><p><br></p><p>In a nutshell, we will provide 360 services when it comes anything for real estate related services.</p>', 1),
(2, 'Terms Of Use', 'terms-of-use', '<p><strong>Use of this site is provided by Demos subject to the following Terms and Conditions:</strong><br></p>\r\n<ol>\r\n<li><span style=\\\"color: rgb(58, 72, 81); font-family: b10, &quot;times new roman&quot;, Times, serif; font-size: 18px;\\\">Your use constitutes acceptance of these Terms and Conditions as at the date of your first use of the site.</span></li>\r\n<li><span style=\\\"color: rgb(58, 72, 81); font-family: b10, &quot;times new roman&quot;, Times, serif; font-size: 18px;\\\">Demos reserves the rights to change these Terms and Conditions at any time by posting changes online. Your continued use of this site after changes are posted constitutes your acceptance of this agreement as modified.</span></li>\r\n<li><span style=\\\"color: rgb(58, 72, 81); font-family: b10, &quot;times new roman&quot;, Times, serif; font-size: 18px;\\\">You agree to use this site only for lawful purposes, and in a manner which does not infringe the rights, or restrict, or inhibit the use and enjoyment of the site by any third party.</span></li>\r\n<li><span style=\\\"color: rgb(58, 72, 81); font-family: b10, &quot;times new roman&quot;, Times, serif; font-size: 18px;\\\">This site and the information, names, images, pictures, logos regarding or relating to Demos are provided “as is” without any representation or endorsement made and without warranty of any kind whether express or implied. In no event will Demos be liable for any damages including, without limitation, indirect or consequential damages, or any damages whatsoever arising from the use or in connection with such use or loss of use of the site, whether in contract or in negligence.</span></li>\r\n<li><span style=\\\"color: rgb(58, 72, 81); font-family: b10, &quot;times new roman&quot;, Times, serif; font-size: 18px;\\\">Demos does not warrant that the functions contained in the material contained in this site will be uninterrupted or error free, that defects will be corrected, or that this site or the server that makes it available are free of viruses or bugs or represents the full functionality, accuracy and reliability of the materials.</span></li>\r\n<li><span style=\\\"color: rgb(58, 72, 81); font-family: b10, &quot;times new roman&quot;, Times, serif; font-size: 18px;\\\">Copyright restrictions: please refer to our Creative Commons license terms governing the use of material on this site.</span></li>\r\n<li><span style=\\\"color: rgb(58, 72, 81); font-family: b10, &quot;times new roman&quot;, Times, serif; font-size: 18px;\\\">Demos takes no responsibility for the content of external Internet Sites.</span></li>\r\n<li><span style=\\\"color: rgb(58, 72, 81); font-family: b10, &quot;times new roman&quot;, Times, serif; font-size: 18px;\\\">Any communication or material that you transmit to, or post on, any public area of the site including any data, questions, comments, suggestions, or the like, is, and will be treated as, non-confidential and non-proprietary information.</span></li>\r\n<li><span style=\\\"color: rgb(58, 72, 81); font-family: b10, &quot;times new roman&quot;, Times, serif; font-size: 18px;\\\">If there is any conflict between these Terms and Conditions and rules and/or specific terms of use appearing on this site relating to specific material then the latter shall prevail.</span></li>\r\n<li><span style=\\\"color: rgb(58, 72, 81); font-family: b10, &quot;times new roman&quot;, Times, serif; font-size: 18px;\\\">These terms and conditions shall be governed and construed in accordance with the laws of England and Wales. Any disputes shall be subject to the exclusive jurisdiction of the Courts of England and Wales.</span></li>\r\n<li><span style=\\\"color: rgb(58, 72, 81); font-family: b10, &quot;times new roman&quot;, Times, serif; font-size: 18px;\\\">If these Terms and Conditions are not accepted in full, the use of this site must be terminated immediately.<br></span>&nbsp;</li>\r\n</ol>', 1),
(3, 'Privacy Policy', 'privacy-policy', '<h1>Privacy Policy of&nbsp;<span class=\\\"highlight preview_company_name\\\">Company Name</span></h1>\r\n<p><span class=\\\"highlight preview_company_name\\\">Company Name</span>&nbsp;operates the&nbsp;<span class=\\\"highlight preview_website_name\\\">Website Name</span>&nbsp;website, which provides the SERVICE.</p>\r\n<p>This page is used to inform website visitors regarding our policies with the collection, use, and disclosure of Personal Information if anyone decided to use our Service, the&nbsp;<span class=\\\"highlight preview_website_name\\\">Website Name</span>&nbsp;website.</p>\r\n<p>If you choose to use our Service, then you agree to the collection and use of information in relation with this policy. The Personal Information that we collect are used for providing and improving the Service. We will not use or share your information with anyone except as described in this Privacy Policy.</p>\r\n<p>The terms used in this Privacy Policy have the same meanings as in our Terms and Conditions, which is accessible at&nbsp;<span class=\\\"highlight preview_website_url\\\">Website URL</span>, unless otherwise defined in this Privacy Policy.</p>\r\n<h2>Information Collection and Use</h2>\r\n<p>For a better experience while using our Service, we may require you to provide us with certain personally identifiable information, including but not limited to your name, phone number, and postal address. The information that we collect will be used to contact or identify you.</p>\r\n<h2>Log Data</h2>\r\n<p>We want to inform you that whenever you visit our Service, we collect information that your browser sends to us that is called Log Data. This Log Data may include information such as your computer\\\'s Internet Protocol (“IP”) address, browser version, pages of our Service that you visit, the time and date of your visit, the time spent on those pages, and other statistics.</p>\r\n<h2>Cookies</h2>\r\n<p>Cookies are files with small amount of data that is commonly used an anonymous unique identifier. These are sent to your browser from the website that you visit and are stored on your computer\\\'s hard drive.</p>\r\n<p>Our website uses these “cookies” to collection information and to improve our Service. You have the option to either accept or refuse these cookies, and know when a cookie is being sent to your computer. If you choose to refuse our cookies, you may not be able to use some portions of our Service.</p>\r\n<h2>Service Providers</h2>\r\n<p>We may employ third-party companies and individuals due to the following reasons:</p>\r\n<ul>\r\n<li>To facilitate our Service;</li>\r\n<li>To provide the Service on our behalf;</li>\r\n<li>To perform Service-related services; or</li>\r\n<li>To assist us in analyzing how our Service is used.</li>\r\n</ul>\r\n<p>We want to inform our Service users that these third parties have access to your Personal Information. The reason is to perform the tasks assigned to them on our behalf. However, they are obligated not to disclose or use the information for any other purpose.</p>\r\n<h2>Security</h2>\r\n<p>We value your trust in providing us your Personal Information, thus we are striving to use commercially acceptable means of protecting it. But remember that no method of transmission over the internet, or method of electronic storage is 100% secure and reliable, and we cannot guarantee its absolute security.</p>\r\n<h2>Links to Other Sites</h2>\r\n<p>Our Service may contain links to other sites. If you click on a third-party link, you will be directed to that site. Note that these external sites are not operated by us. Therefore, we strongly advise you to review the Privacy Policy of these websites. We have no control over, and assume no responsibility for the content, privacy policies, or practices of any third-party sites or services.</p>\r\n<p>Children\\\'s Privacy</p>\r\n<p>Our Services do not address anyone under the age of 13. We do not knowingly collect personal identifiable information from children under 13. In the case we discover that a child under 13 has provided us with personal information, we immediately delete this from our servers. If you are a parent or guardian and you are aware that your child has provided us with personal information, please contact us so that we will be able to do necessary actions.</p>\r\n<h2>Changes to This Privacy Policy</h2>\r\n<p>We may update our Privacy Policy from time to time. Thus, we advise you to review this page periodically for any changes. We will notify you of any changes by posting the new Privacy Policy on this page. These changes are effective immediately, after they are posted on this page.</p>\r\n<h2>Contact Us</h2>\r\n<p>If you have any questions or suggestions about our Privacy Policy, do not hesitate to contact us.</p>', 1),
(4, 'FAQ', 'faq', '<p>Coming Soon</p>', 1);

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `partner_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `name`, `url`, `partner_image`) VALUES
(1, 'Squareroom', '#', 'squareroom-8be2fb52b61cffd275c182409590a5de'),
(2, 'Bluehost', '#', 'bluehost-1e6d0ac3fa9b9d6ba685a41baf498c5b'),
(3, 'Square', '#', 'square-dcb2450728f965b31a3d5619772fe59a'),
(4, 'Erikaschesonis1', '#', 'erikaschesonis1-617150e2475e77fbc86477f26816ed62'),
(5, 'Cube', '#', 'cube-cfe98eef41393ad457fa78c8f26fd843'),
(6, 'Altria1', '#', 'altria1-e1a183cc2597e9832fb5f891651329ea'),
(7, 'National Geographic', '#', 'national-geographic-249e3571728581a15f66b178ffbbef72'),
(8, 'Modernart', '#', 'modernart-443d8f45d4ed7a6637c35c256e2a326e');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('r.raufur2000@gmail.com', '$2y$10$Hn8fOkpWP/EekH3eLZRODuV5JBGSqqwJf2MYjgYkQwL/AxtmY3Yy6', '2020-09-26 12:05:18'),
('smaliashraf69@gmail.com', '$2y$10$bSBxwD640dYCFUTmA6tjX.ncyV8fFnPh3B0dXCD5QoMBzB3dYEBn2', '2020-10-10 15:09:08'),
('ranashohel0805@gmail.com', '$2y$10$jkMpWtWUbdAt2eRYdiQSfer29fCE21ttQH0PoRVXYcpSFX8OVhn3i', '2020-10-14 10:42:40'),
('admin@floorfly.com', '$2y$10$UcqU4mUJwDbYLBodD9BRVOgVF7lOoyv88D0cB6J1Ln4fYQGlHOsru', '2020-10-22 11:15:49');

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Chairman', 1, NULL, NULL),
(2, 'Managing Director', 1, NULL, NULL),
(3, 'CEO - Chief Executive Officer', 1, NULL, NULL),
(4, 'COO - Chief Operating Officer', 1, NULL, NULL),
(5, 'CFO - Chief Financial Officer', 1, NULL, NULL),
(6, 'CIO - Chief Information Officer', 1, NULL, NULL),
(7, 'CTO - Chief Technology Officer', 1, NULL, NULL),
(8, 'CMO - Chief Marketing Officer', 1, NULL, NULL),
(9, 'CHRO - Chief Human Resources Officer', 1, NULL, NULL),
(10, 'CDO - Chief Data Officer', 1, NULL, NULL),
(11, 'CPO - Chief Product Officer', 1, NULL, NULL),
(12, 'CCO - Chief Customer Officer', 1, NULL, NULL),
(13, 'CCO - Chief Commercial Officer', 1, NULL, NULL),
(14, 'Sight Engineer', 1, NULL, NULL),
(15, 'Sight Supervisor', 1, NULL, NULL),
(16, 'Procurement Manager', 1, NULL, NULL),
(17, 'Customer Service Officer', 1, NULL, NULL),
(18, 'Customer Support Officer', 1, NULL, NULL),
(19, 'Help Desk Executive', 1, NULL, NULL),
(20, 'Customer Service Manager', 1, NULL, NULL),
(21, 'Technical Support Specialist', 1, NULL, NULL),
(22, 'Account Representative', 1, NULL, NULL),
(23, 'Client Service Specialist', 1, NULL, NULL),
(24, 'Customer Care Associate', 1, NULL, NULL),
(25, 'Operations Manager', 1, NULL, NULL),
(26, 'Operations Assistant', 1, NULL, NULL),
(27, 'Operations Coordinator', 1, NULL, NULL),
(28, 'Operations Analyst', 1, NULL, NULL),
(29, 'Operations Director', 1, NULL, NULL),
(30, 'Vice President of Operations', 1, NULL, NULL),
(31, 'Operations Professional', 1, NULL, NULL),
(32, 'Scrum Master', 1, NULL, NULL),
(33, 'Continuous Improvement Lead', 1, NULL, NULL),
(34, 'Continuous Improvement Consultant', 1, NULL, NULL),
(35, 'Credit Authorizer', 1, NULL, NULL),
(36, 'Benefits Manager', 1, NULL, NULL),
(37, 'Credit Counselor', 1, NULL, NULL),
(38, 'Accountant', 1, NULL, NULL),
(39, 'Bookkeeper', 1, NULL, NULL),
(40, 'Accounting Analyst', 1, NULL, NULL),
(41, 'Accounting Director', 1, NULL, NULL),
(42, 'Accounts Payable or Receivable Clerk', 1, NULL, NULL),
(43, 'Auditor', 1, NULL, NULL),
(44, 'Budget Analyst', 1, NULL, NULL),
(45, 'Controller', 1, NULL, NULL),
(46, 'Financial Analyst', 1, NULL, NULL),
(47, 'Finance Manager', 1, NULL, NULL),
(48, 'Economist', 1, NULL, NULL),
(49, 'Payroll Manager', 1, NULL, NULL),
(50, 'Payroll Clerk', 1, NULL, NULL),
(51, 'Financial Planner', 1, NULL, NULL),
(52, 'Financial Services Representative', 1, NULL, NULL),
(53, 'Finance Director', 1, NULL, NULL),
(54, 'Commercial Loan Officer', 1, NULL, NULL),
(55, 'Sales Associate', 1, NULL, NULL),
(56, 'Sales Representative', 1, NULL, NULL),
(57, 'Sales Manager', 1, NULL, NULL),
(58, 'Retail Worker', 1, NULL, NULL),
(59, 'Store Manager', 1, NULL, NULL),
(60, 'Sales Representative', 1, NULL, NULL),
(61, 'Sales Manager', 1, NULL, NULL),
(62, 'Real Estate Broker', 1, NULL, NULL),
(63, 'Sales Associate', 1, NULL, NULL),
(64, 'Cashier', 1, NULL, NULL),
(65, 'Store Manager', 1, NULL, NULL),
(67, 'Account Executive', 1, NULL, NULL),
(68, 'Account Manager', 1, NULL, NULL),
(69, 'Area Sales Manager', 1, NULL, NULL),
(70, 'Direct Salesperson', 1, NULL, NULL),
(71, 'Director of Inside Sales', 1, NULL, NULL),
(72, 'Outside Sales Manager', 1, NULL, NULL),
(73, 'Sales Analyst', 1, NULL, NULL),
(74, 'Market Development Manager', 1, NULL, NULL),
(75, 'B2B Sales Specialist', 1, NULL, NULL),
(76, 'Sales Engineer', 1, NULL, NULL),
(77, 'Merchandising Associate', 1, NULL, NULL),
(78, 'Construction Worker', 1, NULL, NULL),
(79, 'Taper', 1, NULL, NULL),
(80, 'Plumber', 1, NULL, NULL),
(81, 'Heavy Equipment Operator', 1, NULL, NULL),
(82, 'Vehicle or Equipment Cleaner', 1, NULL, NULL),
(83, 'Carpenter', 1, NULL, NULL),
(84, 'Electrician', 1, NULL, NULL),
(85, 'Painter', 1, NULL, NULL),
(86, 'Welder', 1, NULL, NULL),
(87, 'Handyman', 1, NULL, NULL),
(88, 'Boilermaker', 1, NULL, NULL),
(89, 'Boilermaker', 1, NULL, NULL),
(90, 'Crane Operator', 1, NULL, NULL),
(91, 'Building Inspector', 1, NULL, NULL),
(92, 'Pipefitter', 1, NULL, NULL),
(93, 'Sheet Metal Worker', 1, NULL, NULL),
(94, 'Iron Worker', 1, NULL, NULL),
(95, 'Mason', 1, NULL, NULL),
(96, 'Roofer', 1, NULL, NULL),
(97, 'Solar Photovoltaic Installer', 1, NULL, NULL),
(98, 'Well Driller', 1, NULL, NULL),
(99, 'Marketing Specialist', 1, NULL, NULL),
(100, 'Marketing Manager', 1, NULL, NULL),
(101, 'Marketing Director', 1, NULL, NULL),
(102, 'Graphic Designer', 1, NULL, NULL),
(103, 'Marketing Research Analyst', 1, NULL, NULL),
(104, 'Marketing Communications Manager', 1, NULL, NULL),
(105, 'Marketing Consultant', 1, NULL, NULL),
(106, 'Product Manager', 1, NULL, NULL),
(107, 'Public Relations', 1, NULL, NULL),
(108, 'Social Media Assistant', 1, NULL, NULL),
(109, 'Brand Manager', 1, NULL, NULL),
(110, 'SEO Manager', 1, NULL, NULL),
(111, 'Content Marketing Manager', 1, NULL, NULL),
(112, 'Copywriter', 1, NULL, NULL),
(113, 'Media Buyer', 1, NULL, NULL),
(114, 'Digital Marketing Manager', 1, NULL, NULL),
(115, 'eCommerce Marketing Specialist', 1, NULL, NULL),
(116, 'Brand Strategist', 1, NULL, NULL),
(117, 'Vice President of Marketing', 1, NULL, NULL),
(118, 'Media Relations Coordinator', 1, NULL, NULL),
(119, 'Vice President', 1, NULL, NULL),
(120, 'General Manager', 1, NULL, NULL),
(121, 'Director', 1, NULL, NULL),
(122, 'Manager', 1, NULL, NULL),
(123, 'Supervisor', 1, NULL, NULL),
(124, 'Assistant Manager', 1, NULL, NULL),
(125, 'Associate', 1, NULL, NULL),
(126, 'Executive', 1, NULL, NULL),
(127, 'Sr. Executive', 1, NULL, NULL),
(128, 'Deputy Manager', 1, NULL, NULL),
(129, 'Sr. Manager', 1, NULL, NULL),
(130, 'AGM - Asst. General Manager', 1, NULL, NULL),
(131, 'DGM - Dep. General Manager', 1, NULL, NULL),
(132, 'Sr. GM - Sr. General Manager', 1, NULL, NULL),
(133, 'EVP - Executive Vice President', 1, NULL, NULL),
(134, 'SEVP - Sr. Executive Vice President', 1, NULL, NULL),
(135, 'FAVP - First Asst. Vice President', 1, NULL, NULL),
(136, '', 1, '2020-10-10 05:00:21', '2020-10-10 05:00:21');

-- --------------------------------------------------------

--
-- Table structure for table `promotion_slider`
--

CREATE TABLE `promotion_slider` (
  `id` int(11) NOT NULL,
  `name` varchar(90) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` varchar(91) COLLATE utf8_unicode_ci DEFAULT NULL,
  `photo` varchar(190) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `promotion_slider`
--

INSERT INTO `promotion_slider` (`id`, `name`, `link`, `photo`, `status`, `created_at`, `updated_at`) VALUES
(2, 'mirpur dohs flat sale', 'https://floorfly.com/register/agent', '/upload/promotion-slides/160906660701.1.png', 1, '2020-12-27 10:56:47', '2020-12-27 16:56:47'),
(3, 'flat for sale in Uttara', 'https://floorfly.com/register/agent', '/upload/promotion-slides/160906245502.png', 1, '2020-12-27 09:47:35', '2020-12-27 15:47:35'),
(5, 'Used flat for sale in Dhaka', 'https://floorfly.com/properties', '/upload/promotion-slides/160906236003.png', 1, '2020-12-27 09:46:00', '2020-12-27 15:46:00'),
(7, 'Flat for sale in Dhaka', 'https://floorfly.com/register/agent', '/upload/promotion-slides/160906222804.png', 1, '2020-12-27 09:43:48', '2020-12-27 15:43:48');

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `product_code` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `featured_property` int(11) NOT NULL DEFAULT 0,
  `property_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `property_slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `property_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `property_purpose` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `search_price` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rate_per_sft` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `po` varchar(90) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location` varchar(190) COLLATE utf8_unicode_ci DEFAULT NULL,
  `map_latitude` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `map_longitude` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bathrooms` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bedrooms` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `garage` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `land_area` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `build_area` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `search_build_area` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `balcony` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `no_of_floor` varchar(90) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facing` varchar(90) COLLATE utf8_unicode_ci DEFAULT NULL,
  `available_floor` varchar(90) COLLATE utf8_unicode_ci DEFAULT NULL,
  `floor` varchar(90) COLLATE utf8_unicode_ci DEFAULT NULL,
  `unit` varchar(90) COLLATE utf8_unicode_ci DEFAULT NULL,
  `loan_facility` varchar(90) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `nearest_school_km` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nearest_hospital_km` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nearest_bus_stand_km` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nearest_railway_km` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nearest_airport_km` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nearest_mall_km` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nearest_park_km` varchar(90) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nearest_mosque_km` varchar(90) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nearest_playground_km` varchar(90) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nearest_departmental_store_km` varchar(90) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nearest_restaurant_km` varchar(90) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nearest_fire_service_km` varchar(90) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nearest_police_station_km` varchar(90) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nearest_pharmacy_km` varchar(90) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nearest_grocery_bazar_km` varchar(90) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nearest_govt_office_km` varchar(90) COLLATE utf8_unicode_ci DEFAULT NULL,
  `property_features` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `amenities_servent_bed` varchar(90) COLLATE utf8_unicode_ci DEFAULT NULL,
  `amenities_servent_bath` varchar(90) COLLATE utf8_unicode_ci DEFAULT NULL,
  `amenities_gym` varchar(90) COLLATE utf8_unicode_ci DEFAULT NULL,
  `amenities_front_yard` varchar(90) COLLATE utf8_unicode_ci DEFAULT NULL,
  `amenities_splash_pool` varchar(90) COLLATE utf8_unicode_ci DEFAULT NULL,
  `amenities_roof_deck` varchar(90) COLLATE utf8_unicode_ci DEFAULT NULL,
  `amenities_reception` varchar(90) COLLATE utf8_unicode_ci DEFAULT NULL,
  `amenities_rooftop_garden` varchar(90) COLLATE utf8_unicode_ci DEFAULT NULL,
  `amenities_generator` varchar(90) COLLATE utf8_unicode_ci DEFAULT NULL,
  `amenities_substation` varchar(90) COLLATE utf8_unicode_ci DEFAULT NULL,
  `amenities_lift` varchar(90) COLLATE utf8_unicode_ci DEFAULT NULL,
  `amenities_kitchen_veranda` varchar(90) COLLATE utf8_unicode_ci DEFAULT NULL,
  `amenities_kitchen_cabinet` varchar(90) COLLATE utf8_unicode_ci DEFAULT NULL,
  `amenities_corner_plot` varchar(90) COLLATE utf8_unicode_ci DEFAULT NULL,
  `amenities_guest_lobby` varchar(90) COLLATE utf8_unicode_ci DEFAULT NULL,
  `amenities_cctv` varchar(90) COLLATE utf8_unicode_ci DEFAULT NULL,
  `amenities_swimming_pool` varchar(90) COLLATE utf8_unicode_ci DEFAULT NULL,
  `amenities_guest_parking` varchar(90) COLLATE utf8_unicode_ci DEFAULT NULL,
  `amenities_laundry_room` varchar(90) COLLATE utf8_unicode_ci DEFAULT NULL,
  `amenities_bbq` varchar(90) COLLATE utf8_unicode_ci DEFAULT NULL,
  `amenities_terrace` varchar(90) COLLATE utf8_unicode_ci DEFAULT NULL,
  `amenities_sauna` varchar(90) COLLATE utf8_unicode_ci DEFAULT NULL,
  `featured_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `floor_plan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `video_code` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `active_plan_id` int(11) NOT NULL DEFAULT 0,
  `property_exp_date` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 0,
  `soldout` int(10) NOT NULL DEFAULT 0,
  `position_id` int(11) NOT NULL DEFAULT 99,
  `position_exp_date` int(11) NOT NULL DEFAULT 0,
  `position_status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`product_code`, `id`, `user_id`, `featured_property`, `property_name`, `property_slug`, `property_type`, `property_purpose`, `price`, `search_price`, `rate_per_sft`, `address`, `po`, `location`, `map_latitude`, `map_longitude`, `bathrooms`, `bedrooms`, `garage`, `land_area`, `build_area`, `search_build_area`, `balcony`, `no_of_floor`, `facing`, `available_floor`, `floor`, `unit`, `loan_facility`, `description`, `nearest_school_km`, `nearest_hospital_km`, `nearest_bus_stand_km`, `nearest_railway_km`, `nearest_airport_km`, `nearest_mall_km`, `nearest_park_km`, `nearest_mosque_km`, `nearest_playground_km`, `nearest_departmental_store_km`, `nearest_restaurant_km`, `nearest_fire_service_km`, `nearest_police_station_km`, `nearest_pharmacy_km`, `nearest_grocery_bazar_km`, `nearest_govt_office_km`, `property_features`, `amenities_servent_bed`, `amenities_servent_bath`, `amenities_gym`, `amenities_front_yard`, `amenities_splash_pool`, `amenities_roof_deck`, `amenities_reception`, `amenities_rooftop_garden`, `amenities_generator`, `amenities_substation`, `amenities_lift`, `amenities_kitchen_veranda`, `amenities_kitchen_cabinet`, `amenities_corner_plot`, `amenities_guest_lobby`, `amenities_cctv`, `amenities_swimming_pool`, `amenities_guest_parking`, `amenities_laundry_room`, `amenities_bbq`, `amenities_terrace`, `amenities_sauna`, `featured_image`, `floor_plan`, `video_code`, `active_plan_id`, `property_exp_date`, `status`, `soldout`, `position_id`, `position_exp_date`, `position_status`, `created_at`, `updated_at`) VALUES
('FF-PR-56', 11, 24, 0, '3 Bed Apartment in Mohammadpur', '3-bed-apartment-in-mohammadpur', '2', 'Sale', '5,100,000', '5100000', '6,000', 'P # 12, Block - A, Rd 6, Kaderabad Housing, Mohammadpur', 'Mohammadpur', '30', NULL, NULL, '3', '2', '1', '2.5', '850', '850', '2', 'G+6', 'North', '3rd Floor', '3rd', 'A', 'Available', '<p><strong>Flat sale: </strong>An exclusive&nbsp;luxurious 1700 sft apartment.<br />\r\n<strong># Mohammadpur</strong><br />\r\nStatus: Ready&nbsp;Flat<br />\r\nLocation : Katasur, Mohammadpur<br />\r\nHouse : G+ 6<br />\r\nAvailabe : 3rd Floor<br />\r\nTotal SIZE :- 1700 sft.<br />\r\n<br />\r\n<strong># Apartment Inside arrangement:</strong><br />\r\n3 Bed,<br />\r\n4 Baths<br />\r\nDining<br />\r\nDrawing<br />\r\nKitchen<br />\r\n4 Verandas<br />\r\n1 lift etc.<br />\r\nParking: 1<br />\r\n<br />\r\n<strong># Special Features:</strong><br />\r\n-- North-East corner apartment<br />\r\n-- 25 feet wide road both side<br />\r\n-- 24 hours generator service<br />\r\n-- 24 hours CC TV security coverage.<br />\r\n-- LPG Gas Available.</p>', 'Mokbul Hossain College', 'City Hospital', 'B.R.T.C Mohammadpur', NULL, NULL, 'Tokiyo Square', NULL, 'Allah-Karim Mosque', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Departmental Store,Community Hall,Roof Top Garden', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Rooftop Garden', 'Generator', NULL, 'Lift', NULL, NULL, 'Corner Plot', NULL, 'CCTV', NULL, NULL, NULL, NULL, NULL, NULL, 'floor-fly-apartment-7bd15a6d58dc74207f89ce919ff52782', 'faruk-villa-9fb92dbe14e7ced09c12c56f0a6912b1', '', 1, 1632938400, 0, 0, 99, 0, 0, '2020-08-13 17:19:24', '2020-12-01 12:36:33'),
('FF-PR-27', 16, 14, 1, 'Luxurious 3 Bed Apartment At Uttara Sector-14', 'luxurious-3-bed-apartment-at-uttara-sector-14', '2', 'Sale', '7,200,000', '7200000', '6,000', 'H-32, R-16, S-14, Uttara', 'Uttara', '47', NULL, NULL, '3', '3', '1', '3', '1,200', '1200', '2', 'G+5', 'East', '5th', '5th', 'A', 'Available', '<p><strong>Flat sale:&nbsp;</strong>An exclusive&nbsp;luxurious 1200 sft apartment.<br />\r\n<strong># Uttara</strong><br />\r\nStatus: Used Flat<br />\r\nLocation : Sector-14, Uttara<br />\r\nHouse : G+ 5<br />\r\nAvailabe : 5th&nbsp;Floor<br />\r\nTotal SIZE :- 1200 sft.<br />\r\n<br />\r\n<strong># Apartment Inside arrangement:</strong><br />\r\n3 Bed,<br />\r\n2 Baths<br />\r\nDining<br />\r\nDrawing<br />\r\nKitchen<br />\r\n1 Verandas<br />\r\n1 lift etc.<br />\r\nParking: 1<br />\r\n<br />\r\n<strong># Special Features:</strong><br />\r\n--North East corner apartment<br />\r\n-- 60&nbsp;feet wide road both side<br />\r\n-- 24 hours generator service<br />\r\n-- 24 hours CC TV security coverage.<br />\r\n--&nbsp;Gas Available.</p>', 'Oxford International School', 'Hi-Care General Hospital Ltd', 'House Building', 'Airport Railway Station', 'Shahjalal International Airport', 'Mascat Plaza', 'Uttara Sector-14 Park', 'Ahalia Jame Masjid', 'Uttara Sector-14', 'Swapno Super Shop', 'Kabab Factory', 'Bangladesh Fire Station', NULL, 'Lazz Pharma', NULL, 'Tax Office Zone 9', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Generator', NULL, 'Lift', NULL, NULL, 'Corner Plot', NULL, 'CCTV', NULL, NULL, NULL, NULL, NULL, NULL, 'luxurious-3-bed-apartment-at-uttara-sector-14-e090d9560a902fa840d0b6024df0d503', NULL, '', 1, 1632938400, 1, 0, 99, 0, 0, '2020-08-23 17:46:48', '2020-12-14 16:16:34'),
(NULL, 17, 1, 0, '3 Bed Apartment in Uttara', '3-bed-apartment-in-uttara', '2', 'Sale', '8,580,000', '8580000', '5,500', 'Uttara-10', 'Uttara', '47', NULL, NULL, '3', '3', '1', '5', '1,560', '1560', '2', 'G+5', 'South', '2nd Floor', '2nd', 'A', 'Available', '<p><strong>Flat sale:&nbsp;</strong>An exclusive&nbsp;luxurious 1560 sft apartment.<br />\r\n<strong># Uttara</strong><br />\r\nStatus: Used Flat<br />\r\nLocation : Sector-10, Uttara<br />\r\nHouse : G+ 5<br />\r\nAvailabe : 2nd Floor<br />\r\nTotal SIZE :- 1560 sft.<br />\r\n<br />\r\n<strong># Apartment Inside arrangement:</strong><br />\r\n3 Bed,<br />\r\n3 Baths<br />\r\nDining<br />\r\nDrawing<br />\r\nKitchen<br />\r\n2 Verandas<br />\r\n1 lift etc.<br />\r\nParking: 1<br />\r\n<br />\r\n<strong># Special Features:</strong><br />\r\n--South Facing&nbsp;apartment<br />\r\n-- 60&nbsp;feet wide road&nbsp;<br />\r\n-- 24 hours generator service<br />\r\n-- 24 hours CC TV security coverage.<br />\r\n--&nbsp;Gas Available.</p>', 'Sun Beams School', 'Bangladesh Medical College and Hospital', 'House Building', 'Airport Railway Station', 'Shahjalal International Airport', 'Mascat Plaza', 'Uttara Sector-10 Park', 'Sector-10 Mosque', 'Uttara Sector-10', 'Agura Super Shop', 'Pizza Zone', 'Bangladesh Fire Station', NULL, 'Tamanna Pharmacy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Rooftop Garden', 'Generator', NULL, 'Lift', NULL, NULL, NULL, NULL, 'CCTV', NULL, NULL, NULL, NULL, NULL, NULL, '3-bed-apartment-in-uttara-037cdf095c897618d1c91ce3c29e2cfa', NULL, '', 1, 1632938400, 1, 1, 99, 0, 0, '2020-08-23 18:12:37', '2020-10-28 14:57:51'),
(NULL, 18, 24, 0, '3 Bed Apartment @ Mohammadpur', '3-bed-apartment-at-mohammadpur', '2', 'Sale', '8,200,000', '8200000', '6,300', 'Katasur, Mohammadpur.', 'Mohammadpur', '30', NULL, NULL, '3', '3', '1', '4', '1,300', '1300', '2', 'G+8', 'South', '3rd Floor', '3rd', 'A', 'Available', '<p><strong>Flat sale:&nbsp;</strong>An exclusive&nbsp;luxurious 1300 sft apartment.<br />\r\n<strong># Mohammadpur</strong><br />\r\nStatus: Ready&nbsp;Flat<br />\r\nLocation : Katasur, Mohammadpur<br />\r\nHouse : G+ 8<br />\r\nAvailabe : 3rd Floor<br />\r\nTotal SIZE :- 1300 sft.<br />\r\n<br />\r\n<strong># Apartment Inside arrangement:</strong><br />\r\n3 Bed,<br />\r\n3 Baths<br />\r\nDining<br />\r\nDrawing<br />\r\nKitchen<br />\r\n2 Verandas<br />\r\n1 lift etc.<br />\r\nParking: 1<br />\r\n<br />\r\n<strong># Special Features:</strong><br />\r\n-- 25 feet wide road both side<br />\r\n-- 24 hours generator service<br />\r\n-- 24 hours CC TV security coverage.<br />\r\n-- LPG Gas Available.</p>', 'Mokbul Hossain College', 'City Hospital', 'B.R.T.C Mohammadpur', NULL, 'Shahjalal International Airport', 'Tokiyo Square', NULL, NULL, NULL, 'Agura Shopper Shop', 'KFC', 'Bangladesh Fire Station', NULL, 'Tamanna Pharmacy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Rooftop Garden', 'Generator', NULL, 'Lift', NULL, NULL, NULL, NULL, 'CCTV', NULL, NULL, NULL, NULL, NULL, NULL, 'floorfly-apartment-f68ff6fd880469442fab0d2544c9dd21', 'floorfly-apartment-a3118fa8703d93a510ea9bd337a4d144', '', 1, 1632938400, 1, 1, 99, 0, 0, '2020-08-23 21:32:45', '2020-10-28 14:57:18'),
(NULL, 19, 4, 0, '3 Bed Apartment in Uttara @ Sector 9', '3-bed-apartment-in-uttara-at-sector-9', '2', 'Sale', '15,200,000', '15200000', '9,500', 'H-37, R-1, S-9, Uttara', 'Uttara', '47', NULL, NULL, '3', '3', '1', '3', '1,600', '1600', '4', 'G+5', 'South', '3rd Floor', '3rd', 'A', 'Available', '<p><strong>Flat sale:&nbsp;</strong>An exclusive&nbsp;luxurious 1600 sft apartment.<br />\r\n<strong># Uttara</strong><br />\r\nStatus: Ready&nbsp;Flat<br />\r\nLocation : Sector-9, Uttara<br />\r\nHouse : G+ 5<br />\r\nAvailabe : 3rd Floor<br />\r\nTotal SIZE :- 1600 sft.<br />\r\n<br />\r\n<strong># Apartment Inside arrangement:</strong><br />\r\n3 Bed,<br />\r\n3 Baths<br />\r\nDining<br />\r\nDrawing<br />\r\nKitchen<br />\r\n4 Verandas<br />\r\n1 lift etc.<br />\r\nParking: 1<br />\r\n<br />\r\n<strong># Special Features:<br />\r\n-- </strong>South Facing<br />\r\n-- 60&nbsp;feet wide road both&nbsp;<br />\r\n-- 24 hours generator service<br />\r\n-- 24 hours CC TV security coverage.<br />\r\n--&nbsp;Gas Available.</p>', 'Sun Beams School', 'Bangladesh Medical College and Hospital', 'House Building', 'Airport Railway Station', 'Shahjalal International Airport', 'Mascat Plaza', 'Uttara Sector-9 Park', 'Sector-9 Mosque', 'Uttara Sector-9', 'Agura Super Shop', 'KFC', 'Bangladesh Fire Station', NULL, 'Tamanna Pharmacy', NULL, 'House Building Finance Corporation', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reception', 'Rooftop Garden', 'Generator', 'Substation', 'Lift', NULL, NULL, NULL, 'Guest Lobby', 'CCTV', NULL, NULL, NULL, NULL, NULL, NULL, '3-bed-apartment-in-uttara-ac42ecfd161f5196339dcae1a1fb83e3', NULL, '', 1, 1632852000, 0, 0, 99, 0, 0, '2020-08-23 21:43:02', '2020-12-03 12:59:54'),
(NULL, 20, 1, 0, '3 Bed Apartment in Bashundhara', '3-bed-apartment-in-bashundhara', '2', 'Sale', '11,200,000', '11200000', '7,200', 'Block-F,', 'Bashundhara R/A', '4', NULL, NULL, '3', '3', '1', '3', '1,550', '1550', '2', 'G+6', 'South', '3rd Floor', NULL, 'A', 'Available', '<p><strong>Flat sale:&nbsp;</strong>An exclusive&nbsp;luxurious 1550 sft apartment.<br />\r\n<strong># Bashundhara R/A</strong><br />\r\nStatus: Ready&nbsp;Flat<br />\r\nLocation : Block-F, Bashundhara<br />\r\nHouse : G+ 6<br />\r\nAvailabe : 3rd Floor<br />\r\nTotal SIZE :- 1550 sft.<br />\r\n<br />\r\n<strong># Apartment Inside arrangement:</strong><br />\r\n3 Bed,<br />\r\n3 Baths<br />\r\nDining<br />\r\nDrawing<br />\r\nKitchen<br />\r\n2 Verandas<br />\r\n1 lift etc.<br />\r\nParking: 1<br />\r\n<br />\r\n<strong># Special Features:<br />\r\n--&nbsp;</strong>South Facing<br />\r\n-- 60&nbsp;feet wide road&nbsp;<br />\r\n-- 24 hours generator service<br />\r\n-- 24 hours CC TV security coverage.<br />\r\n--&nbsp;Gas Available.</p>', 'Cambrian School and College', 'United Hospital', 'Kuril Bishsho Road', 'Airport Railway Station', 'Shahjalal International Airport', 'Jamuna Future Park', 'Jamuna Future Park', 'Bashundhara Mosque', NULL, 'Agura Super Shop', 'KFC', 'Bangladesh Fire Station', NULL, 'Lazz Pharma', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Generator', NULL, 'Lift', NULL, NULL, NULL, NULL, 'CCTV', NULL, NULL, NULL, NULL, NULL, NULL, 'floorfly-apartment-50b1fb84f633d473ccddcf1e9f4544d5', NULL, '', 1, 1632938400, 1, 1, 99, 0, 0, '2020-08-26 15:22:45', '2020-10-28 14:56:38'),
('FF-PR-42', 21, 18, 0, '3 Bed Apartment in Bashundhara Block D', '3-bed-apartment-in-bashundhara-block-d', '2', 'Sale', '11,900,000', '11900000', '7,000', 'P # 315 - 317, Road 10, Block D, Basundhara', 'Bashundhara R/A', '4', NULL, NULL, '3', '3', '1', '15', '1,600', '1600', '2', 'G+8', 'South', '3rd Floor', '3rd', 'A', 'Available', '<p><strong>Flat sale:&nbsp;</strong>An exclusive&nbsp;luxurious 1600 sft apartment.<br />\r\n<strong># Bashundhara R/A</strong><br />\r\nStatus: Ongoing&nbsp;Flat<br />\r\nLocation : Block-D, Bashundhara<br />\r\nHouse : G+ 9<br />\r\nAvailabe : 3rd Floor<br />\r\nTotal SIZE :- 1600 sft.<br />\r\n<br />\r\n<strong># Apartment Inside arrangement:</strong><br />\r\n3 Bed,<br />\r\n3 Baths<br />\r\nDining<br />\r\nDrawing<br />\r\nKitchen<br />\r\n2 Verandas<br />\r\n1 lift etc.<br />\r\nParking: 1<br />\r\n<br />\r\n<strong># Special Features:<br />\r\n--&nbsp;</strong>South Facing<br />\r\n-- 60&nbsp;feet wide road&nbsp;<br />\r\n-- 24 hours generator service<br />\r\n-- 24 hours CC TV security coverage.<br />\r\n--&nbsp;Gas Available.</p>', 'Cambrian School and College', 'United Hospital', 'Kuril Bishsho Road', 'Airport Railway Station', 'Shahjalal International Airport', 'Jamuna Future Park', 'Jamuna Future Park', 'Bashundhara Mosque', 'Rooftop', NULL, 'KFC', 'Bangladesh Fire Station', NULL, 'Lazz Pharma', NULL, NULL, NULL, NULL, NULL, 'Gym', NULL, NULL, NULL, 'Reception', 'Rooftop Garden', 'Generator', NULL, 'Lift', NULL, NULL, NULL, 'Guest Lobby', 'CCTV', 'Swimming Pool', NULL, NULL, 'BBQ', NULL, NULL, 'floorfly-apartment-2c60098677d8997212a0c7914825bcef', 'floorfly-apartment-b259c41a2afce47e9d9e6a27220d2820', '', 1, 1632938400, 1, 0, 99, 0, 0, '2020-08-26 16:00:04', '2020-12-01 12:27:54'),
('FF-PR-62', 22, 16, 1, '3 Bed Apartment in Dakkhin Khan', '3-bed-apartment-in-dakkhin-khan', '2', 'Sale', '6,000,000', '6000000', '4,500', 'Khan Para, Joynal Market, Dhaka 1230', 'Dakkhin kan', '47', NULL, NULL, '3', '3', '1', '15', '1,350', '1350', '2', NULL, 'South', '6th Floor', '6th', 'B', 'Available', '<p><strong>Flat sale:&nbsp;</strong>An exclusive&nbsp;luxurious Commercial cum&nbsp;Residential project.<br />\r\n<strong># Uttara</strong><br />\r\nStatus: Ongoing&nbsp;<br />\r\nLocation : Faidabad,Dakkhin kan,Uttara.<br />\r\nHouse : G+ 9<br />\r\nAvailabe :&nbsp;3rd Floor- A,B,C<br />\r\n4th Floor- C<br />\r\n5th Floor- C<br />\r\n6th Floor- B,C<br />\r\n7th Floor- A,B,C<br />\r\n8th Floor- A,B,C<br />\r\n9th Floor- A,B,C<br />\r\n10th Floor- A,B,C&nbsp;Floor<br />\r\nTotal SIZE :- 1250,1350,1360 sft.<br />\r\n<br />\r\n<strong># Apartment Inside arrangement:</strong><br />\r\n3 Bed,<br />\r\n3 Baths<br />\r\nDining<br />\r\nDrawing<br />\r\nKitchen<br />\r\n2 Verandas<br />\r\n1 lift etc.<br />\r\nParking: 1<br />\r\n<br />\r\n<strong># Special Features:<br />\r\n--&nbsp;</strong>South Facing<br />\r\n-- 30&nbsp;feet wide road&nbsp;<br />\r\n-- 24 hours generator service<br />\r\n-- 24 hours CC TV security coverage.<br />\r\n--&nbsp;Gas Available.</p>', 'Rajuk Uttara Model School and College', 'Bangladesh Medical College and Hospital', 'House Building', 'Airport Railway Station', 'Shahjalal International Airport', 'Mascat Plaza', NULL, 'Faidabad Mosque', NULL, 'Swapno Super Shop', 'Grand Plaza Hotel Uttara', 'Bangladesh Fire Station', NULL, 'Tamanna Pharmacy', NULL, 'House Building Finance Corporation', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reception', NULL, 'Generator', NULL, 'Lift', NULL, NULL, NULL, NULL, 'CCTV', NULL, NULL, NULL, NULL, NULL, NULL, '3-bed-apartment-in-dakkhin-khan-5596a1c3cefe922da3cfd3244c02133a', 'floorfly-apartment-fba5dc5886ffca911f1ffaec1e7a231f', '', 1, 1632938400, 1, 0, 99, 0, 0, '2020-08-27 17:28:48', '2020-11-25 17:43:02'),
(NULL, 23, 16, 0, '3 Bed Apartment in Uttara Sector-17', '3-bed-apartment-in-uttara-sector-17', '2', 'Sale', '5,800,000', '5800000', '4,400', 'Sec # 17, Shetu Housing, Uttara', 'Uttara', '47', NULL, NULL, '3', '3', '1', '8', '1,300', '1300', '2', NULL, 'North', '7th', '7th', 'A', 'Available', '<p><strong>Flat sale:&nbsp;</strong>An exclusive&nbsp;luxurious 1300 sft apartment.<br />\r\n<strong># Uttara</strong><br />\r\nStatus: Ongoing&nbsp;Flat<br />\r\nLocation : Rajuk, Sector-17, Uttara<br />\r\nHouse : G+ 9<br />\r\nAvailabe : 6th,7th,8th,Floor<br />\r\nTotal SIZE : 1300&nbsp;sft.<br />\r\n<br />\r\n<strong># Apartment Inside arrangement:</strong><br />\r\n3 Bed,<br />\r\n3 Baths<br />\r\nDining<br />\r\nDrawing<br />\r\nKitchen<br />\r\n2 Verandas<br />\r\n1 lift etc.<br />\r\nParking: 1<br />\r\n<br />\r\n<strong># Special Features:<br />\r\n-- </strong>North-West&nbsp;Facing<br />\r\n-- 30&nbsp;feet wide road&nbsp;<br />\r\n-- 24 hours generator service<br />\r\n-- 24 hours CC TV security coverage.<br />\r\n--&nbsp;Gas Available.<br />\r\n-- Huge open space.</p>', 'DPS School', 'Ibn Sina Hospital', NULL, 'Airport Railway Station', 'Shahjalal International Airport', 'Mascat Plaza', NULL, 'Allah Karem Mosque', NULL, NULL, NULL, 'Bangladesh Fire Station', NULL, NULL, NULL, 'DESCO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Generator', NULL, 'Lift', NULL, NULL, NULL, NULL, 'CCTV', NULL, NULL, NULL, NULL, NULL, NULL, 'floorfly-apartment-43cc251c33e8376d80f506ae8e4323eb', NULL, '', 1, 1632938400, 0, 0, 99, 0, 0, '2020-08-27 18:07:56', '2020-11-24 11:37:38'),
('FF-PR-28', 24, 16, 1, '3 Bed Apartment in Uttara', '3-bed-apartment-in-uttara', '2', 'Sale', '8,575,000', '8575000', '4,500', 'Rajuk, Sector-15, Uttara', 'Uttara', '47', NULL, NULL, '3', '3', '1', '12', '1,750', '1750', '2', NULL, 'North', '7th & 8th', '7th', 'B', 'Available', '<p><strong>Flat sale:&nbsp;</strong>An exclusive&nbsp;luxurious 1750 sft apartment.<br />\r\n<strong># Uttara</strong><br />\r\nStatus: Ready Flat<br />\r\nLocation : Rajuk, Sector-15, Uttara<br />\r\nHouse : G+ 9<br />\r\nAvailabe : 7th,8th,Floor<br />\r\nTotal SIZE : 1750&nbsp;sft.<br />\r\n<br />\r\n<strong># Apartment Inside arrangement:</strong><br />\r\n3 Bed,<br />\r\n4 Baths<br />\r\nDining<br />\r\nDrawing<br />\r\nKitchen<br />\r\n2 Verandas<br />\r\n1 lift etc.<br />\r\nParking: 1<br />\r\n<br />\r\n<strong># Special Features:<br />\r\n--&nbsp;</strong>North-West&nbsp;Facing<br />\r\n-- 30&nbsp;feet wide road&nbsp;<br />\r\n-- 24 hours generator service<br />\r\n-- 24 hours CC TV security coverage.<br />\r\n-- LPG Gas Available.<br />\r\n&nbsp;</p>', 'DPS School', 'Ibn Sina Hospital', 'House Building', 'Airport Railway Station', 'Shahjalal International Airport', 'Mascat Plaza', 'Fantasy Island', 'Allah Karem Mosque', NULL, 'Agura Super Shop', 'Kacchi Bhai', 'Bangladesh Fire Station', NULL, 'AKS Pharmacy', NULL, 'DESCO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reception', 'Rooftop Garden', 'Generator', 'Substation', 'Lift', NULL, NULL, NULL, NULL, 'CCTV', NULL, NULL, NULL, 'BBQ', 'Terrace', NULL, '3-bed-apartment-in-uttara-184a21fae65a9aa4a060db553947a24b', 'floorfly-apartment-18903e4430783a191b0cfab439daaef8', '', 1, 1632938400, 1, 0, 99, 0, 0, '2020-08-27 18:59:40', '2020-11-24 10:50:55'),
('FF-PR-08', 25, 6, 0, '3 Bed Apartment in Uttara Sector-9', '3-bed-apartment-in-uttara-sector-9', '2', 'Sale', '15,200,000', '15200000', '9,000', 'H-1, R-7D, S-9, Uttara', 'Uttara', '47', NULL, NULL, '3', '3', '1', '10', '1,600', '1600', '2', 'G+5', 'North', '3rd Floor', '3rd', 'A', 'Available', '<p><strong>Flat sale:&nbsp;</strong>An exclusive&nbsp;luxurious 1600 sft apartment.<br />\r\n<strong># Uttara</strong><br />\r\nStatus: Ready&nbsp;Flat<br />\r\nLocation : Sector-9, Uttara<br />\r\nHouse : G+ 5<br />\r\nAvailabe : 3rd Floor (Unit- A,B,C)<br />\r\nTotal SIZE : 1600&nbsp;sft.<br />\r\n<br />\r\n<strong># Apartment Inside arrangement:</strong><br />\r\n3 Bed,<br />\r\n3 Bath<br />\r\nDining<br />\r\nDrawing<br />\r\nKitchen<br />\r\n2 Verandas<br />\r\n1 lift etc.<br />\r\nParking: 1<br />\r\n<br />\r\n<strong># Special Features:<br />\r\n--&nbsp;</strong>North&nbsp;Facing<br />\r\n-- 30&nbsp;feet wide road&nbsp;<br />\r\n-- 24 hours generator service<br />\r\n-- 24 hours CC TV security coverage.<br />\r\n--&nbsp;Gas Available.<br />\r\n&nbsp;</p>', 'Sun Beams School', 'Bangladesh Medical College and Hospital', 'House Building', 'Airport Railway Station', 'Shahjalal International Airport', 'Mascat Plaza', 'Uttara Sector-9 Park', 'Sector-9 Mosque', 'Uttara Sector-9', 'Daily Shopping', 'Pizza Hut', 'Bangladesh Fire Station', NULL, 'Tamanna Pharmacy', NULL, 'House Building Finance Corporation', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reception', NULL, 'Generator', NULL, 'Lift', NULL, NULL, NULL, 'Guest Lobby', 'CCTV', NULL, NULL, NULL, NULL, NULL, NULL, '3-bed-apartment-in-uttara-a0b83c02d720415dada82e08bc09e9f3', NULL, '', 1, 1632938400, 1, 1, 99, 0, 0, '2020-08-27 19:20:39', '2020-12-03 13:00:08'),
(NULL, 26, 16, 0, 'Exlusive 3 Bed Apartment @ Uttara', 'exlusive-3-bed-apartment-at-uttara', '2', 'Sale', '6,300,000', '6300000', '5,000', 'Sector-15', 'Uttara', '47', NULL, NULL, '3', '3', '1', '12', '1,250', '1250', '2', NULL, 'North', '7th', '7th', 'D', 'Available', '<p><strong>Flat sale:&nbsp;</strong>An exclusive&nbsp;luxurious 1250 sft apartment.<br />\r\n<strong># Uttara</strong><br />\r\nStatus: Ready Flat<br />\r\nLocation : Sector-15, Uttara<br />\r\nHouse : G+ 9<br />\r\nAvailabe : 7th Floor<br />\r\nTotal SIZE : 1250&nbsp;sft.<br />\r\n<br />\r\n<strong># Apartment Inside arrangement:</strong><br />\r\n3 Bed,<br />\r\n3 Baths<br />\r\nDining<br />\r\nDrawing<br />\r\nKitchen<br />\r\n2 Verandas<br />\r\n1 lift etc.<br />\r\nParking: 1<br />\r\n<br />\r\n<strong># Special Features:<br />\r\n--&nbsp;</strong>North-West&nbsp;Facing<br />\r\n-- 30&nbsp;feet wide road&nbsp;<br />\r\n-- 24 hours generator service<br />\r\n-- 24 hours CC TV security coverage.<br />\r\n-- LPG Gas Available.</p>', 'DPS School', 'Ibn Sina Hospital', 'House Building', 'Airport Railway Station', 'Shahjalal International Airport', 'Mascat Plaza', 'Fantasy Island', 'Allah-Karim Mosque', NULL, 'Agura Super Shop', 'Kacchi Bhai', 'Bangladesh Fire Station', NULL, 'Lazz Pharma', NULL, 'DESCO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reception', NULL, 'Generator', 'Substation', 'Lift', NULL, NULL, NULL, NULL, 'CCTV', NULL, NULL, NULL, 'BBQ', 'Terrace', NULL, 'exlusive-3-bed-apartment-at-uttara-3875cf00cb4c7ea432538354856d66e7', '3-bed-apartment-in-uttara-a2b45e7eaa7a1376c3fb1b13fd31620b', '', 1, 1632938400, 1, 1, 99, 0, 0, '2020-09-01 18:07:53', '2020-10-28 14:56:14'),
(NULL, 27, 1, 0, '3 Bed Apartment @ Uttara', '3-bed-apartment-at-uttara', '2', 'Sale', '14,000,000', '14000000', '5,500', 'Sector-10', 'Uttara', '47', NULL, NULL, '3', '3', '1', '5', '1,560', '1560', '2', 'G+5', 'South', '3rd Floor', '3rd', 'B', 'Available', '<p><strong>Flat sale:&nbsp;</strong>An exclusive&nbsp;luxurious 1560 sft apartment.<br />\r\n<strong># Uttara</strong><br />\r\nStatus: Used&nbsp;Flat<br />\r\nLocation : Sector-10, Uttara<br />\r\nHouse : G+ 5<br />\r\nAvailabe : 3rd Floor<br />\r\nTotal SIZE : 1560&nbsp;sft.<br />\r\n<br />\r\n<strong># Apartment Inside arrangement:</strong><br />\r\n3 Bed,<br />\r\n3 Baths<br />\r\nDining<br />\r\nDrawing<br />\r\nKitchen<br />\r\n2 Verandas<br />\r\n1 lift etc.<br />\r\nParking: 1<br />\r\n<br />\r\n<strong># Special Features:<br />\r\n-- </strong>South&nbsp;Facing<br />\r\n-- 30&nbsp;feet wide road&nbsp;<br />\r\n-- 24 hours generator service<br />\r\n-- 24 hours CC TV security coverage.<br />\r\n--&nbsp;Gas Available.</p>', 'Sun Beams School', 'Bangladesh Medical College and Hospital', 'House Building', 'Airport Railway Station', 'Shahjalal International Airport', 'Mascat Plaza', 'Uttara Sector-10 Park', 'Sector-10 Mosque', 'Uttara Sector-10', 'Swapno Super Shop', 'KFC', 'Bangladesh Fire Station', NULL, 'AKS Pharmacy', NULL, 'House Building Finance Corporation', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Generator', 'Substation', 'Lift', NULL, NULL, NULL, 'Guest Lobby', 'CCTV', NULL, NULL, NULL, NULL, NULL, NULL, '3-bed-apartment-at-uttara-e9c46fbd9f4b5dd58e5f5b297670dc19', NULL, '', 1, 1632938400, 1, 1, 99, 0, 0, '2020-09-01 19:47:07', '2020-10-28 14:59:02'),
('FF-PR-15', 28, 9, 0, 'Luxurious 3 Bed Apartment At Uttara Sector-10', 'luxurious-3-bed-apartment-at-uttara-sector-10', '2', 'Sale', '10,500,000', '10500000', '7,885', 'H 32, R-3, S-10, Uttara', 'Uttara', '47', NULL, NULL, '3', '3', '1', '3', '1,395', '1395', '2', 'G+5', 'North', '2nd', '2nd', 'A', 'Available', '<p><strong>Flat sale:&nbsp;</strong>An exclusive&nbsp;luxurious 1395&nbsp;sft apartment.<br />\r\n<strong># Uttara</strong><br />\r\nStatus: Used&nbsp;Flat<br />\r\nLocation : Sector-10, Uttara<br />\r\nHouse : G+ 5<br />\r\nAvailabe : 2nd Floor<br />\r\nTotal SIZE : 1395&nbsp;sft.<br />\r\n<br />\r\n<strong># Apartment Inside arrangement:</strong><br />\r\n3 Bed,<br />\r\n3 Baths<br />\r\nDining<br />\r\nDrawing<br />\r\nKitchen<br />\r\n2 Verandas<br />\r\n1 lift etc.<br />\r\nParking: 1<br />\r\n<br />\r\n<strong># Special Features:<br />\r\n-- </strong>North&nbsp;Facing<br />\r\n-- 30&nbsp;feet wide road&nbsp;<br />\r\n-- 24 hours generator service<br />\r\n-- 24 hours CC TV security coverage.<br />\r\n--&nbsp;Gas Available.</p>', 'Sun Beams school', 'Ibn Sina Hospital', 'Abdullahpur', 'Airport Railway Station', 'Hazrat Shahajalal International Airport', 'North Tower', NULL, 'Central Mosque', NULL, 'Daily Shopping', 'KFC', 'Bangladesh Fire Station', NULL, 'AKS Pharmacy', NULL, 'House Building Finance Corporation', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reception', NULL, 'Generator', 'Substation', 'Lift', NULL, NULL, NULL, 'Guest Lobby', 'CCTV', NULL, NULL, NULL, 'BBQ', NULL, NULL, 'luxurious-3-bed-apartment-at-uttara-sector-10-c84f741b048a0721739ac52c241ba5df', NULL, '', 1, 1632938400, 1, 0, 99, 0, 0, '2020-09-01 20:56:36', '2020-12-14 16:14:47'),
('FF-PR-12', 29, 7, 0, 'Nice 3 Bed Apartment At Uttara Sector-10', 'nice-3-bed-apartment-at-uttara-sector-10', '2', 'Sale', '6,275,000', '6275000', '5,900', 'H-17, R-5, S-10, Uttara', 'Uttara', '47', NULL, NULL, '3', '3', '1', '3', '1,050', '1050', '2', 'G+5', 'North', '5th', '5th', 'C', 'Available', '<p><strong>Flat sale:&nbsp;</strong>An exclusive&nbsp;luxurious 1050 sft apartment.<br />\r\n<strong># Uttara</strong><br />\r\nStatus: Used&nbsp;Flat<br />\r\nLocation : Sector-10, Uttara<br />\r\nHouse : G+ 5<br />\r\nAvailabe : 5th&nbsp;Floor<br />\r\nTotal SIZE : 1050&nbsp;sft.<br />\r\n<br />\r\n<strong># Apartment Inside arrangement:</strong><br />\r\n3 Bed,<br />\r\n3 Baths<br />\r\nDining<br />\r\nDrawing<br />\r\nKitchen<br />\r\n2 Verandas<br />\r\n1 lift etc.<br />\r\nParking: 1<br />\r\n<br />\r\n<strong># Special Features:<br />\r\n-- </strong>North&nbsp;Facing<br />\r\n-- 30&nbsp;feet wide road&nbsp;<br />\r\n-- 24 hours generator service<br />\r\n-- 24 hours CC TV security coverage.<br />\r\n--&nbsp;Gas Available.</p>', 'Sun Beams school', 'Ibn Sina Hospital', 'Abdullahpur', 'Airport Railway Station', 'Hazrat Shahajalal International Airport', 'Mascot Plaza', NULL, 'Central Mosque', NULL, 'Swapno Super Shop', 'KFC', 'Bangladesh Fire Station', NULL, 'Lazz Pharma', NULL, 'House Building Finance Corporation', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Generator', 'Substation', 'Lift', NULL, NULL, NULL, 'Guest Lobby', 'CCTV', NULL, NULL, NULL, NULL, NULL, NULL, 'nice-3-bed-apartment-at-uttara-sector-10-ce7cb1bed57fe080a1c07ec11f5294b0', NULL, '', 1, 1632938400, 1, 0, 99, 0, 0, '2020-09-01 21:08:40', '2020-12-14 16:14:35'),
('FF-PR-10', 30, 6, 0, 'Luxurious 4 Bed Apartment At Uttara Sector 9', 'luxurious-4-bed-apartment-at-uttara-sector-9', '2', 'Sale', '20,950,000', '20950000', '9,000', 'H-1, R-7D, S-9, Uttara', 'Uttara', '47', NULL, NULL, '4', '4', '1', '10', '2,250', '2250', '2', 'G+5', 'South', '3rd', '3rd', 'C', 'Available', '<p><strong>Flat sale:&nbsp;</strong>An exclusive&nbsp;luxurious 2250 sft apartment.<br />\r\n<strong># Uttara</strong><br />\r\nStatus: Ready&nbsp;Flat<br />\r\nLocation : Sector-9, Uttara<br />\r\nHouse : G+ 5<br />\r\nAvailabe : 3rd Floor&nbsp;<br />\r\nTotal SIZE : 2250&nbsp;sft.<br />\r\n<br />\r\n<strong># Apartment Inside arrangement:</strong><br />\r\n4 Bed,<br />\r\n4 Bath<br />\r\nDining<br />\r\nDrawing<br />\r\nKitchen<br />\r\n2 Verandas<br />\r\n1 lift etc.<br />\r\nParking: 1<br />\r\n<br />\r\n<strong># Special Features:<br />\r\n-- </strong>South<strong>&nbsp;</strong>Facing<br />\r\n-- 30&nbsp;feet wide road&nbsp;<br />\r\n-- 24 hours generator service<br />\r\n-- 24 hours CC TV security coverage.<br />\r\n--&nbsp;Gas Available.</p>', 'Sun Beams school', 'Bangladesh Medical College and Hospital', 'Abdullahpur', 'Airport Railway Station', 'Hazrat Shahajalal International Airport', 'Mascot Plaza', NULL, 'Central Mosque', NULL, 'Meena Bazar', 'Grand Plaza', 'Bangladesh Fire Station', NULL, 'Tamanna Pharmacy', NULL, 'House Building Finance Corporation', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reception', 'Rooftop Garden', 'Generator', 'Substation', 'Lift', NULL, NULL, NULL, 'Guest Lobby', 'CCTV', NULL, NULL, NULL, NULL, NULL, NULL, 'luxurious-4-bed-apartment-at-uttara-0d57b29242747d9e02cfceab91989fa3', NULL, '', 1, 1632938400, 1, 0, 99, 0, 0, '2020-09-02 14:12:46', '2020-12-14 16:14:05'),
('FF-PR-11', 31, 7, 0, '2 Bed Apartment At Uttara Sector-10', '2-bed-apartment-at-uttara-sector-10', '2', 'Sale', '5,800,000', '5800000', '5,900', 'H-17, R-5, S-10, Uttara', 'Uttara', '47', NULL, NULL, '2', '2', '1', '3', '956', '956', '2', 'G+5', 'South', '5th', '5th', 'A', 'Available', '<p><strong>Flat sale:&nbsp;</strong>An exclusive&nbsp;luxurious 980 sft apartment.<br />\r\n<strong># Uttara</strong><br />\r\nStatus: Used&nbsp;Flat<br />\r\nLocation : Sector-10, Uttara<br />\r\nHouse : G+ 5<br />\r\nAvailabe : 5th&nbsp;Floor<br />\r\nTotal SIZE : 980&nbsp;sft.<br />\r\n<br />\r\n<strong># Apartment Inside arrangement:</strong><br />\r\n2 Bed,<br />\r\n3 Baths<br />\r\nDining<br />\r\nDrawing<br />\r\nKitchen<br />\r\n2 Verandas<br />\r\n1 lift etc.<br />\r\nParking: 1<br />\r\n<br />\r\n<strong># Special Features:<br />\r\n--&nbsp;</strong>South&nbsp;Facing<br />\r\n-- 30&nbsp;feet wide road&nbsp;<br />\r\n-- 24 hours generator service<br />\r\n-- 24 hours CC TV security coverage.<br />\r\n--&nbsp;Gas Available.</p>', 'Sun Beams school', 'Ibn Sina Hospital', 'Abdullahpur', 'Airport Railway Station', 'Hazrat Shahajalal International Airport', 'Mascot Plaza', NULL, 'Central Mosque', NULL, 'Daily Shopping', 'KFC', 'Bangladesh Fire Station', NULL, 'Tamanna Pharmacy', NULL, 'House Building Finance Corporation', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Rooftop Garden', 'Generator', 'Substation', 'Lift', NULL, NULL, NULL, 'Guest Lobby', 'CCTV', NULL, NULL, NULL, 'BBQ', NULL, NULL, '2-bed-apartment-at-uttara-sector-10-4855c708e4c8b337c7e14217be04b61f', NULL, '', 1, 1632938400, 1, 0, 99, 0, 0, '2020-09-02 14:28:04', '2020-12-20 17:43:56'),
('FF-PR-61', 32, 16, 0, '3 Bed Apartment At Dakkhin Khan', '3-bed-apartment-at-dakkhin-khan', '2', 'Sale', '5,600,000', '5600000', '4,500', 'Khan Para, Joynal Market, Dhaka 1230', 'Dakkhin Khan', '47', NULL, NULL, '3', '3', '1', '15', '1,250', '1250', '3', 'G+9', 'South', '4th', '4th', 'C', 'Available', '<p><strong>Flat sale:&nbsp;</strong>An exclusive&nbsp;luxurious Commercial cum&nbsp;Residential project.<br />\r\n<strong># Uttara</strong><br />\r\nStatus: Ongoing Project<br />\r\nLocation : Faidabad,Dakkhin kan,Uttara.<br />\r\nHouse : G+ 9<br />\r\nAvailabe : 4th Floor<br />\r\nTotal SIZE :1250&nbsp;sft.<br />\r\n<br />\r\n<strong># Apartment Inside arrangement:</strong><br />\r\n3 Bed,<br />\r\n3 Baths<br />\r\nDining<br />\r\nDrawing<br />\r\nKitchen<br />\r\n3 Verandas<br />\r\n1 lift etc.<br />\r\nParking: 1<br />\r\n<br />\r\n<strong># Special Features:<br />\r\n-- </strong>South Facing<br />\r\n-- 30&nbsp;feet wide road&nbsp;<br />\r\n-- 24 hours generator service<br />\r\n-- 24 hours CC TV security coverage.<br />\r\n--&nbsp;Gas Available.</p>', 'Rajuk Uttara Model School And College', 'Labaid Hospital', 'Abdullahpur', 'Airport Railway Station', 'Hazrat Shahajalal International Airport', 'Mascot Plaza', NULL, 'Faidabad Jame Mosjid', NULL, 'The daily Needs Departmental Store', 'Sudhu Burger', 'Bangladesh Fire Station', NULL, 'Dhaka Pharmacy', NULL, 'DESCO', NULL, NULL, NULL, 'Gym', NULL, NULL, NULL, 'Reception', NULL, 'Generator', 'Substation', 'Lift', NULL, NULL, NULL, 'Guest Lobby', 'CCTV', NULL, 'Guest Parking', NULL, NULL, NULL, NULL, '3-bed-apartment-at-dakkhin-khan-a209ca7b50dcaab2db7c2d4d1223d4d5', '3-bed-apartment-at-dakkhin-khan-c613ce58a2d142a6c3acfab815d78052', '', 1, 1632938400, 1, 0, 99, 0, 0, '2020-09-02 15:02:32', '2020-12-14 16:13:22'),
(NULL, 33, 1, 0, 'Exclusive 3 Bed Apartment @ Uttara', 'exclusive-3-bed-apartment-at-uttara', '2', 'Sale', '8,580,000', '8580000', '5,500', 'Sector-10, Uttara', 'Uttara', '47', NULL, NULL, '3', '3', '1', '5', '1,560', '1560', '2', 'G+5', 'South', '5th', '5th', 'A', 'Available', '<p><strong>Flat sale:&nbsp;</strong>An exclusive&nbsp;luxurious 1560 sft apartment.<br />\r\n<strong># Uttara</strong><br />\r\nStatus: Used&nbsp;Flat<br />\r\nLocation : Sector-10, Uttara<br />\r\nHouse : G+ 5<br />\r\nAvailabe : 5th&nbsp;Floor<br />\r\nTotal SIZE : 1560&nbsp;sft.<br />\r\n<br />\r\n<strong># Apartment Inside arrangement:</strong><br />\r\n3 Bed,<br />\r\n3 Baths<br />\r\nDining<br />\r\nDrawing<br />\r\nKitchen<br />\r\n2 Verandas<br />\r\n1 lift etc.<br />\r\nParking: 1<br />\r\n<br />\r\n<strong># Special Features:<br />\r\n--&nbsp;</strong>South&nbsp;Facing<br />\r\n-- 30&nbsp;feet wide road&nbsp;<br />\r\n-- 24 hours generator service<br />\r\n-- 24 hours CC TV security coverage.<br />\r\n--&nbsp;Gas Available.</p>', 'Sun Beams school', 'Ibn Sina Hospital', 'Abdullahpur', 'Airport Railway Station', 'Hazrat Shahajalal International Airport', 'Mascot Plaza', NULL, 'Central Mosque', NULL, 'Daily Shopping', 'Kacchi Bhai', 'Bangladesh Fire Station', NULL, 'AKS Pharmacy', NULL, 'House Building Finance Corporation', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Generator', 'Substation', 'Lift', NULL, NULL, NULL, NULL, 'CCTV', NULL, NULL, NULL, 'BBQ', NULL, NULL, 'exclusive-3-bed-apartment-at-uttara-d8994f945bb0a0217ab9d19a0d416581', NULL, '', 1, 1632938400, 1, 1, 99, 0, 0, '2020-09-02 18:40:33', '2020-10-28 14:59:29'),
('FF-PR-09', 34, 6, 0, 'Exclusive 3 Bed Apartment At Uttara Sector 9', 'exclusive-3-bed-apartment-at-uttara-sector-9', '2', 'Sale', '17,700,000', '17700000', '9,000', 'H-1, R-7D, S-9, Uttara', 'Uttara', '47', NULL, NULL, '3', '3', '1', '10', '1,890', '1890', '2', 'G+5', 'East', '3rd', '3rd', 'C', 'Available', '<p><strong>Flat sale:&nbsp;</strong>An exclusive&nbsp;luxurious 1890 sft apartment.<br />\r\n<strong># Uttara</strong><br />\r\nStatus: Ready&nbsp;Flat<br />\r\nLocation : Sector-9, Uttara<br />\r\nHouse : G+ 5<br />\r\nAvailabe : 3rd Floor&nbsp;<br />\r\nTotal SIZE : 1890&nbsp;sft.<br />\r\n<br />\r\n<strong># Apartment Inside arrangement:</strong><br />\r\n3 Bed,<br />\r\n3 Bath<br />\r\nDining<br />\r\nDrawing<br />\r\nKitchen<br />\r\n2 Verandas<br />\r\n1 lift etc.<br />\r\nParking: 1<br />\r\n<br />\r\n<strong># Special Features:<br />\r\n-- </strong>East<strong>&nbsp;</strong>Facing<br />\r\n-- 30&nbsp;feet wide road&nbsp;<br />\r\n-- 24 hours generator service<br />\r\n-- 24 hours CC TV security coverage.<br />\r\n--&nbsp;Gas Available.</p>', 'Sun Beams school', 'Bangladesh Medical College and Hospital', 'House Building', 'Airport Railway Station', 'Hazrat Shahajalal International Airport', 'Mascot Plaza', NULL, 'Central Mosque', NULL, 'Swapno Super Shop', 'KFC', 'Bangladesh Fire Station', NULL, 'Lazz Pharma', NULL, 'House Building Finance Corporation', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reception', 'Rooftop Garden', 'Generator', 'Substation', 'Lift', NULL, NULL, NULL, NULL, 'CCTV', NULL, NULL, NULL, 'BBQ', NULL, NULL, 'exclusive-3-bed-apartment-at-uttara-sector-9-9504c1af6b347e373fac1baceabf46ef', NULL, '', 1, 1632938400, 1, 0, 99, 0, 0, '2020-09-02 18:58:29', '2020-12-14 16:12:59'),
('FF-PR-29', 35, 16, 0, 'Luxurious 3 Bed Apartment At Uttara', 'luxurious-3-bed-apartment-at-uttara', '2', 'Sale', '9,000,000', '9000000', '4,500', 'Rajuk, Sector-15, Uttara', 'Uttara', '47', NULL, NULL, '3', '3', '1', '12', '1,850', '1850', '2', NULL, 'South', '8th', '8th', 'A', 'Available', '<p>Flat sale:&nbsp;An exclusive&nbsp;luxurious 1850 sft apartment. # Uttara Status: Ready Flat Location : Sector-15, Uttara House : G+ 9 Availabe : 8th Floor Total SIZE : 1850&nbsp;sft. # Apartment Inside arrangement: 3 Bed, 3 Baths Dining Drawing Kitchen 2 Verandas 1 lift etc. Parking: 1 # Special Features: -- South Facing -- 30&nbsp;feet wide road&nbsp; -- 24 hours generator service -- 24 hours CC TV security coverage. -- LPG Gas Available.</p>', 'DPS School', 'Ibn Sina Hospital', 'Matro Railway Station', 'Airport Railway Station', 'Hazrat Shahajalal International Airport', 'Mascot Plaza', 'Fantacy Island', 'Allah Karim Mosque', NULL, 'Trust Family Needs', 'Kacchi Bhai', 'Bangladesh Fire Station', NULL, 'Tamanna Pharmacy', NULL, 'DESCO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reception', 'Rooftop Garden', 'Generator', 'Substation', 'Lift', NULL, NULL, NULL, NULL, 'CCTV', NULL, NULL, NULL, 'BBQ', NULL, NULL, 'luxurious-3-bed-apartment-at-uttara-e02372177014d026e553b545ec1fe8f8', '3-bed-apartment-in-uttara-2e2a109078d88dfc88d73670856a48cd', '', 1, 1632938400, 1, 0, 99, 0, 0, '2020-09-02 19:12:55', '2020-12-14 16:12:42'),
(NULL, 36, 8, 0, '2 Bed Apartment @ Uttara Sector-10', '2-bed-apartment-at-uttara-sector-10', '2', 'Sale', '4,200,000', '4200000', '4,242', 'H # 59 & 60, Rd # 6, Ranabhola, Sector -10.', 'Uttara', '47', NULL, NULL, '3', '2', '1', '5', '990', '990', '2', 'G+8', 'North', '7th', '7th', 'B', 'Available', '<p><strong>Flat sale:&nbsp;</strong>An exclusive&nbsp;luxurious 990 sft apartment.<br />\r\n<strong># Uttara</strong><br />\r\nStatus: Used Flat<br />\r\nLocation : Ranabhola, Sector-10, Uttara<br />\r\nHouse : G+ 7<br />\r\nAvailabe : 7th Floor<br />\r\nTotal SIZE : 990&nbsp;sft.<br />\r\n<br />\r\n<strong># Apartment Inside arrangement:</strong><br />\r\n2 Bed,<br />\r\n3 Baths<br />\r\nDining<br />\r\nDrawing<br />\r\nKitchen<br />\r\n2 Verandas<br />\r\n1 lift etc.<br />\r\nParking: 1<br />\r\n<br />\r\n<strong># Special Features:<br />\r\n--&nbsp;</strong>South Facing<br />\r\n-- 30&nbsp;feet wide road&nbsp;<br />\r\n-- 24 hours generator service<br />\r\n-- 24 hours CC TV security coverage.<br />\r\n-- LPG Gas Available.</p>', 'Sun Beams school', 'Bangladesh Medical College and Hospital', 'Abdullahpur', 'Airport Railway Station', 'Hazrat Shahajalal International Airport', 'Mascot Plaza', 'Fantacy Island', 'Central Mosque', NULL, 'Swapno Super Shop', 'Kacchi Bhai', 'Bangladesh Fire Station', NULL, 'Tamanna Pharmacy', NULL, 'House Building Finance Corporation', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Generator', 'Substation', 'Lift', NULL, NULL, NULL, NULL, 'CCTV', NULL, NULL, NULL, NULL, NULL, NULL, '2-bed-apartment-at-uttara-27e19985e986bf7df9fbaba3527a013d', NULL, '', 1, 1632938400, 1, 0, 99, 0, 0, '2020-09-02 19:36:16', '2020-10-27 14:51:55'),
('FF-PR-14', 37, 8, 0, '3 Bed Apartment At Uttara Sector-10', '3-bed-apartment-at-uttara-sector-10', '2', 'Sale', '5,250,000', '5250000', '4,200', 'H # 59 & 60, Rd # 6, Ranabhola, Sector -10.', 'Uttara', '47', NULL, NULL, '3', '3', '1', '5', '1,250', '1250', '2', 'G+7', 'South', '5th', '5th', 'A', 'Available', '<p><strong>lat sale:&nbsp;</strong>An exclusive&nbsp;luxurious 1250&nbsp;sft apartment.<br />\r\n<strong># Uttara</strong><br />\r\nStatus: Used Flat<br />\r\nLocation : Ranabhola, Sector-10, Uttara<br />\r\nHouse : G+ 7<br />\r\nAvailabe : 5th Floor<br />\r\nTotal SIZE : 1250&nbsp;sft.<br />\r\n<br />\r\n<strong># Apartment Inside arrangement:</strong><br />\r\n3 Bed,<br />\r\n3 Baths<br />\r\nDining<br />\r\nDrawing<br />\r\nKitchen<br />\r\n2 Verandas<br />\r\n1 lift etc.<br />\r\nParking: 1<br />\r\n<br />\r\n<strong># Special Features:<br />\r\n--&nbsp;</strong>South Facing<br />\r\n-- 30&nbsp;feet wide road&nbsp;<br />\r\n-- 24 hours generator service<br />\r\n-- 24 hours CC TV security coverage.<br />\r\n-- LPG Gas Available.</p>', 'Sun Beams school', 'Bangladesh Medical College and Hospital', 'Abdullahpur', 'Airport Railway Station', 'Hazrat Shahajalal International Airport', 'Mascot Plaza', 'Fantacy Island', 'Central Mosque', NULL, 'Swapno Super Shop', 'Kacchi Bhai', 'Bangladesh Fire Station', NULL, 'Tamanna Pharmacy', NULL, 'House Building Finance Corporation', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Generator', 'Substation', 'Lift', NULL, NULL, NULL, NULL, 'CCTV', NULL, NULL, NULL, NULL, NULL, NULL, '3-bed-apartment-at-uttara-5606c4382f50a2c86fa0108c46c9fd32', NULL, '', 1, 1632938400, 1, 0, 99, 0, 0, '2020-09-02 19:48:45', '2020-12-14 16:11:24'),
('FF-PR-30', 39, 16, 1, 'Under Construction 3 Bed Apartment At Uttara', 'under-construction-3-bed-apartment-at-uttara', '2', 'Sale', '5,800,000', '5800000', '4,000', 'Rajuk, Sector-17, Uttara', 'Uttara', '47', NULL, NULL, '3', '3', '1', '5', '1,300', '1300', '2', 'G+6', 'South', '4th', '4th', 'B', 'Available', '<p>Flat sale:&nbsp;An exclusive&nbsp;luxurious 1300 sft apartment.<br />\r\n# Uttara<br />\r\nStatus: Ongoing&nbsp;Flat<br />\r\nLocation : Rajuk, Sector-17, Uttara<br />\r\nHouse : G+ 9<br />\r\nAvailabe : 4th Floor<br />\r\nTotal SIZE : 1300&nbsp;sft.</p>\r\n\r\n<p># Apartment Inside arrangement:<br />\r\n3 Bed,<br />\r\n3 Baths<br />\r\nDining<br />\r\nDrawing<br />\r\nKitchen<br />\r\n2 Verandas<br />\r\n1 lift etc.<br />\r\nParking: 1</p>\r\n\r\n<p># Special Features:<br />\r\n-- South&nbsp;Facing<br />\r\n-- 30&nbsp;feet wide road&nbsp;<br />\r\n-- 24 hours generator service<br />\r\n-- 24 hours CC TV security coverage.<br />\r\n-- LPG Gas Available.<br />\r\n-- Huge open space.</p>', 'DPS School', 'Ibn Sina Hospital', 'Matro Railway Station', 'Airport Railway Station', 'Hazrat Shahajalal International Airport', 'Mascot Plaza', 'Fantacy Island', 'Allah Karim Mosque', NULL, 'Trust Family Needs', 'KFC', 'Bangladesh Fire Station', NULL, 'Lazz Pharma', NULL, 'DESCO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Rooftop Garden', 'Generator', 'Substation', 'Lift', NULL, NULL, NULL, NULL, 'CCTV', NULL, NULL, NULL, NULL, NULL, NULL, 'under-construction-3-bed-apartment-at-uttara-fb4ec268ea675409d836b9acc325ae45', NULL, '', 1, 1632938400, 1, 0, 2, 1602266400, 1, '2020-09-02 20:05:54', '2020-12-14 16:07:26'),
('FF-PR-56', 40, 24, 0, 'Exclusive 2 Bed Apartment At Mohammadpur', 'exclusive-2-bed-apartment-at-mohammadpur', '2', 'Sale', '5,575,000', '5575000', '6,200', 'P # 12, Block - A, Rd 6, Kaderabad Housing, Mohammadpur', 'Mohammadpur', '30', NULL, NULL, '2', '2', '1', '3', '850', '850', '2', 'G+5', 'South', '3rd', '3rd', 'A', NULL, '<p><strong>Flat sale:&nbsp;</strong>An exclusive&nbsp;luxurious 850 sft apartment.<br />\r\n<strong># Mohammadpur</strong><br />\r\nStatus: Ready&nbsp;Flat<br />\r\nLocation : Katasur, Mohammadpur<br />\r\nHouse : G+ 5<br />\r\nAvailabe : 3rd Floor<br />\r\nTotal SIZE :- 850 sft.<br />\r\n<br />\r\n<strong># Apartment Inside arrangement:</strong><br />\r\n2 Bed,<br />\r\n2 Baths<br />\r\nDining<br />\r\nDrawing<br />\r\nKitchen<br />\r\n2 Verandas<br />\r\n1 lift etc.<br />\r\nParking: 1<br />\r\n<br />\r\n<strong># Special Features:</strong><br />\r\n-- North - East corner plot<br />\r\n-- 25 feet wide road both side<br />\r\n-- 24 hours generator service<br />\r\n-- 24 hours CC TV security coverage.<br />\r\n-- LPG Gas Available.</p>', 'Mokbul Hossain School and College', 'City Hospital', 'BRTC Mohammadpur', 'Kamalapur Railway Station', 'Hazrat Shahajalal International Airport', 'Tokiyo Square', NULL, 'Central Mosque', NULL, 'Agura Super Shop', 'Cafe Rio', 'Bangladesh Fire Station', NULL, 'Lazz Pharma', NULL, 'Income Tax', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Rooftop Garden', 'Generator', 'Substation', 'Lift', NULL, NULL, 'Corner Plot', NULL, 'CCTV', NULL, NULL, NULL, 'BBQ', NULL, NULL, 'exclusive-2-bed-apartment-at-mohammadpur-7586b614ca0ba5d59d45e06f2f175e75', '2-bed-apartment-in-mohammadpur-3c8ae4a57a79f55c656501865e252ae9', '', 1, 1632938400, 1, 0, 99, 0, 0, '2020-09-02 20:29:22', '2020-12-14 16:07:06'),
(NULL, 41, 16, 0, '3 Bed Apartment @ Uttara', '3-bed-apartment-at-uttara', '2', 'Sale', '5,800,000', '5800000', '4,000', 'Rajuk, Sector-17, Uttara', 'Uttara', '47', NULL, NULL, '3', '3', '1', '5', '1,300', '1300', '2', NULL, 'South', '6th', '6th', 'B', 'Available', '<p><strong>Flat sale:&nbsp;</strong>An exclusive&nbsp;luxurious 1300 sft apartment.<br />\r\n<strong># Uttara</strong><br />\r\nStatus: Ongoing&nbsp;Flat<br />\r\nLocation : Rajuk, Sector-17, Uttara<br />\r\nHouse : G+ 9<br />\r\nAvailabe : 6th Floor<br />\r\nTotal SIZE : 1300&nbsp;sft.<br />\r\n<br />\r\n<strong># Apartment Inside arrangement:</strong><br />\r\n3 Bed,<br />\r\n3 Baths<br />\r\nDining<br />\r\nDrawing<br />\r\nKitchen<br />\r\n2 Verandas<br />\r\n1 lift etc.<br />\r\nParking: 1<br />\r\n<br />\r\n<strong># Special Features:<br />\r\n-- </strong>South Facing<br />\r\n-- 30&nbsp;feet wide road&nbsp;<br />\r\n-- 24 hours generator service<br />\r\n-- 24 hours CC TV security coverage.<br />\r\n--&nbsp;Gas Available.<br />\r\n-- Huge open space.</p>', 'DPS School', 'Ibn Sina Hospital', 'Matro Railway Station', 'Airport Railway Station', 'Hazrat Shahajalal International Airport', 'Mascot Plaza', 'Fantacy Island', 'Allah Karim Mosque', NULL, 'Agura Super Shop', 'Kacchi Bhai', 'Bangladesh Fire Station', NULL, 'Tamanna Pharmacy', NULL, 'DESCO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Rooftop Garden', 'Generator', 'Substation', 'Lift', NULL, NULL, NULL, NULL, 'CCTV', NULL, NULL, NULL, NULL, 'Terrace', NULL, '3-bed-apartment-at-uttara-7ca7066de79a392c500a95aa6331b3ea', NULL, '', 1, 1632938400, 0, 0, 99, 0, 0, '2020-09-03 14:20:02', '2020-11-24 11:32:01'),
('FF-PR-122', 42, 16, 0, '250 sqft Shop is available for Sale At Dakkhin Khan', '250-sqft-shop-is-available-for-sale-at-dakkhin-khan', '7', 'Sale', '5,500,000', '5500000', '22,000', 'Khan Para, Joynal Market, Faidabad, Dakkhin Khan', 'Dakkhin Khan', '47', NULL, NULL, NULL, NULL, NULL, '15', '250', '250', NULL, 'G+8', 'North', 'Gr. 1st', '1st', NULL, 'Available', '<p>In the amazing location of Dakkhin Khan, there is shop space which is just perfect for the business enthusiast who is looking for an affordable deal. This vacant shop space comes complete with all-time utility supplies.</p>\r\n\r\n<p><br />\r\nProject Status: Ongoing&nbsp;<br />\r\nLocation : Faidabad,Dakkhin kan,Uttara.<br />\r\nHouse : G+ 9<br />\r\nAvailable : Ground Floor&nbsp;&amp; 1st&nbsp;Floor<br />\r\nTotal Size Available&nbsp;: 60-301&nbsp;sft.<br />\r\nPrice: 22000 per sft.<br />\r\n<br />\r\n<strong># Special Features:</strong><br />\r\n-- 30&nbsp;feet wide road&nbsp;<br />\r\n-- 24 hours generator service<br />\r\n-- 24 hours CC TV security coverage.<br />\r\n-- Maintenance Staff<br />\r\n-- Fire Exit<br />\r\n-- Intercom<br />\r\n-- Dedicated Security Guard</p>', 'Rajuk Uttara Model School And College', 'Bangladesh Medical College and Hospital', 'Abdullahpur', 'Airport Railway Station', 'Hazrat Shahajalal International Airport', 'Mascot Plaza', NULL, 'Faidabad Jame Mosjid', NULL, 'Swapno Super Shop', 'Sudhu Burger', 'Bangladesh Fire Station', NULL, 'Tamanna Pharmacy', NULL, 'House Building Finance Corporation', NULL, NULL, NULL, 'Gym', NULL, NULL, NULL, 'Reception', NULL, 'Generator', 'Substation', 'Lift', NULL, NULL, NULL, NULL, 'CCTV', NULL, 'Guest Parking', NULL, NULL, NULL, NULL, '250-sqft-shop-is-available-for-sale-at-dakkhin-khan-f16c2eff09049a0b4ad3311b1f1c4089', '250-sqft-shop-is-available-for-sale-at-dakkhin-khan-e9076ea3f13f41a6bd874117c97da12f', '', 1, 1632938400, 1, 0, 99, 0, 0, '2020-09-03 16:11:31', '2020-12-14 16:06:43'),
(NULL, 43, 16, 0, '3 Bed Apartment @ Uttara', '3-bed-apartment-at-uttara', '2', 'Sale', '5,800,000', '5800000', '4,200', 'Rajuk, Sector-17, Uttara', 'Uttara', '47', NULL, NULL, '3', '3', '1', '5', '1,300', '1300', '2', 'G+8', 'West', '7th', '7th', 'B', 'Available', '<p>To impress residents or home seekers, there are certain things that an apartment must have. While affordability and flat plan are two of the most important factors, the apartment&rsquo;s location is by far, one of the most relevant factors that are always taken into consideration. It&rsquo;s best to keep your home in a well developing area like this location because you will never get bored. As it&rsquo;s constantly changing for the better, there will always be a lot to look forward to.</p>\r\n\r\n<p><strong># Special Features:<br />\r\n-- </strong>West Facing<br />\r\n-- 30&nbsp;feet wide road&nbsp;<br />\r\n-- 24 hours generator service<br />\r\n-- 24 hours CC TV security coverage.<br />\r\n-- LPG Gas Available.<br />\r\n-- Huge open space.</p>', 'DPS School', 'Ibn Sina Hospital', 'Matro Railway Station', 'Airport Railway Station', 'Hazrat Shahajalal International Airport', 'Mascot Plaza', 'Fantacy Island', 'Central Mosque', NULL, 'Trust Family Needs', 'Kacchi Bhai', 'Bangladesh Fire Station', NULL, 'AKS Pharmacy', NULL, 'DESCO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Rooftop Garden', 'Generator', 'Substation', 'Lift', NULL, NULL, NULL, NULL, 'CCTV', NULL, NULL, NULL, 'BBQ', 'Terrace', NULL, '3-bed-apartment-at-uttara-ba3c95c2962d3aab2f6e667932daa3c5', NULL, '', 1, 1632938400, 0, 0, 99, 0, 0, '2020-09-03 16:54:53', '2020-11-24 11:32:08');
INSERT INTO `properties` (`product_code`, `id`, `user_id`, `featured_property`, `property_name`, `property_slug`, `property_type`, `property_purpose`, `price`, `search_price`, `rate_per_sft`, `address`, `po`, `location`, `map_latitude`, `map_longitude`, `bathrooms`, `bedrooms`, `garage`, `land_area`, `build_area`, `search_build_area`, `balcony`, `no_of_floor`, `facing`, `available_floor`, `floor`, `unit`, `loan_facility`, `description`, `nearest_school_km`, `nearest_hospital_km`, `nearest_bus_stand_km`, `nearest_railway_km`, `nearest_airport_km`, `nearest_mall_km`, `nearest_park_km`, `nearest_mosque_km`, `nearest_playground_km`, `nearest_departmental_store_km`, `nearest_restaurant_km`, `nearest_fire_service_km`, `nearest_police_station_km`, `nearest_pharmacy_km`, `nearest_grocery_bazar_km`, `nearest_govt_office_km`, `property_features`, `amenities_servent_bed`, `amenities_servent_bath`, `amenities_gym`, `amenities_front_yard`, `amenities_splash_pool`, `amenities_roof_deck`, `amenities_reception`, `amenities_rooftop_garden`, `amenities_generator`, `amenities_substation`, `amenities_lift`, `amenities_kitchen_veranda`, `amenities_kitchen_cabinet`, `amenities_corner_plot`, `amenities_guest_lobby`, `amenities_cctv`, `amenities_swimming_pool`, `amenities_guest_parking`, `amenities_laundry_room`, `amenities_bbq`, `amenities_terrace`, `amenities_sauna`, `featured_image`, `floor_plan`, `video_code`, `active_plan_id`, `property_exp_date`, `status`, `soldout`, `position_id`, `position_exp_date`, `position_status`, `created_at`, `updated_at`) VALUES
('FF-PR-85', 44, 16, 0, 'Beautiful 194 sqft Shop is available for Sale At Dakkhin Khan', 'beautiful-194-sqft-shop-is-available-for-sale-at-dakkhin-khan', '7', 'Sale', '4,268,000', '4268000', '22,000', 'Faidabad, Dakkhin Khan', 'Dakkhin Khan', '47', NULL, NULL, NULL, NULL, NULL, '15', '194', '194', NULL, NULL, 'North', '1st', '1st', NULL, 'Available', '<p>In the amazing location of Dakkhin Khan, there is shop space which is just perfect for the business enthusiast who is looking for an affordable deal. This vacant shop space comes complete with all-time utility supplies.</p>\r\n\r\n<p><br />\r\nProject Status: Ongoing&nbsp;<br />\r\nLocation : Faidabad,Dakkhin kan,Uttara.<br />\r\nHouse : G+ 9<br />\r\nAvailable : Ground Floor&nbsp;&amp; 1st&nbsp;Floor<br />\r\nTotal Size Available&nbsp;: 60-301&nbsp;sft.<br />\r\nPrice: 22000 per sft.<br />\r\n<br />\r\n# Special Features:<br />\r\n-- 30&nbsp;feet wide road&nbsp;<br />\r\n-- 24 hours generator service<br />\r\n-- 24 hours CC TV security coverage.<br />\r\n-- Maintenance Staff<br />\r\n-- Fire Exit<br />\r\n-- Intercom<br />\r\n-- Dedicated Security Guard</p>', 'Rajuk Uttara Model School And College', 'Bangladesh Medical College and Hospital', 'Abdullahpur', 'Airport Railway Station', 'Hazrat Shahajalal International Airport', 'Mascot Plaza', NULL, 'Faidabad Jame Mosjid', NULL, 'The daily Needs Departmental Store', 'Sudhu Burger', NULL, NULL, NULL, NULL, 'House Building Finance Corporation', NULL, NULL, NULL, 'Gym', NULL, NULL, NULL, 'Reception', 'Rooftop Garden', 'Generator', 'Substation', 'Lift', NULL, NULL, NULL, NULL, 'CCTV', NULL, 'Guest Parking', NULL, NULL, NULL, NULL, 'beautiful-194-sqft-shop-is-available-for-sale-at-dakkhin-khan-b64a468079ff608f1e478971284e259d', 'beautiful-194-sqft-shop-is-available-for-sale-at-dakkhin-khan-c2b785bd7217c5d8a345d470e6673b48', '', 1, 1632938400, 1, 0, 99, 0, 0, '2020-09-03 19:01:19', '2020-12-14 16:06:26'),
('FF-PR-35', 45, 16, 0, '3 Bed Apartment At Uttara 17, Shetu Housing (adjacent to sec - 17)', '3-bed-apartment-at-uttara-17-shetu-housing-adjacent-to-sec-17', '2', 'Sale', '6,050,000', '6050000', '4,200', 'Adjacent Rajuk, Sector-17, Uttara', 'Uttara', '47', NULL, NULL, '3', '3', '1', '5', '1,300', '1300', '2', 'G+8', 'East', '7th', '7th', 'C', 'Available', '<p>To impress residents or home seekers, there are certain things that an apartment must have. While affordability and flat plan are two of the most important factors, the apartment&rsquo;s location is by far, one of the most relevant factors that are always taken into consideration. It&rsquo;s best to keep your home in a well-developing area like this location because you will never get bored. As it&rsquo;s constantly changing for the better, there will always be a lot to look forward to.<br />\r\n<br />\r\nProject Status: Ongoing&nbsp;<br />\r\nLocation : Rajuk, Sector-17, Uttara<br />\r\nHouse : G+ 9<br />\r\nAvailabe : 7th Floor<br />\r\nTotal SIZE : 1300&nbsp;sft.</p>\r\n\r\n<p># Special Features:<br />\r\n-- East&nbsp;Facing<br />\r\n-- 30&nbsp;feet wide road&nbsp;<br />\r\n-- 24 hours generator service<br />\r\n-- 24 hours CC TV security coverage.<br />\r\n-- LPG Gas Available.<br />\r\n-- Huge open space.</p>', 'DPS School', 'Ibn Sina Hospital', 'Matro Railway Station', 'Airport Railway Station', 'Hazrat Shahajalal International Airport', 'Mascot Plaza', 'Fantacy Island', 'Allah Karim Mosque', NULL, 'Trust Family Needs', 'Kacchi Bhai', 'Bangladesh Fire Station', NULL, 'Lazz Pharma', NULL, 'DESCO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Generator', 'Substation', 'Lift', NULL, NULL, NULL, NULL, 'CCTV', NULL, NULL, NULL, 'BBQ', 'Terrace', NULL, '3-bed-apartment-at-uttara-79001f4bcb3e16121f9d63d61264138d', NULL, '', 1, 1632938400, 1, 0, 99, 0, 0, '2020-09-03 19:29:22', '2020-12-14 16:06:08'),
('FF-PR-70', 46, 28, 0, 'Commercial Cum Residential Apartment At Dakkhin Khan', 'commercial-cum-residential-apartment-at-dakkhin-khan', '2', 'Sale', '6,200,000', '6200000', '4,500', 'Khan Para, Joynal Market,Faidabad, Dakkhin Khan', 'Dakkhin Khan', '47', NULL, NULL, '3', '3', '1', '15', '1,250', '1250', '2', 'G+8', 'South', '3rd, 4th, 5th, 6th', '3rd', 'A', 'Available', '<p>This area is one of the best places to reside in. Why? Well it&rsquo;s a planned residential area that is developing quickly. Eventually, it is expected that the infrastructure will reach notable improvements. The roads to access various parts of the area are well built as well.<br />\r\n<br />\r\nProject Status: Ongoing<br />\r\nLocation : Faidabad,Dakkhin kan,Uttara.<br />\r\nHouse : G+ 9<br />\r\nAvailabe : 3rd - 7th Floor<br />\r\nTotal SIZE :1250, 1350, 1360 sft.</p>\r\n\r\n<p>Shop : 60-301 (Gr - 1st fl)<br />\r\n<br />\r\n# Special Features:<br />\r\n<strong>-- </strong>South&nbsp;Facing<br />\r\n-- 20&nbsp;feet wide road&nbsp;<br />\r\n-- 24 hours generator service<br />\r\n-- 24 hours CC TV security coverage.<br />\r\n-- LPG Gas Available.</p>', 'Rajuk Uttara Model School And College', 'Bangladesh Medical College and Hospital', 'Abdullahpur', 'Airport Railway Station', 'Hazrat Shahajalal International Airport', 'North Tower', NULL, 'Faidabad Jame Mosjid', NULL, 'The daily Needs Departmental Store', 'Sudhu Burger', 'Bangladesh Fire Station', NULL, 'Dhaka Pharmacy', NULL, 'House Building Finance Corporation', NULL, NULL, NULL, 'Gym', NULL, NULL, NULL, 'Reception', 'Rooftop Garden', 'Generator', 'Substation', 'Lift', NULL, NULL, NULL, NULL, 'CCTV', NULL, NULL, NULL, 'BBQ', NULL, NULL, '3-bed-apartment-at-dakkhin-khan-c2a6300aa487ba1f56883b5d6c05e8aa', '3-bed-apartment-in-uttara-d8baddc195497f70ed815daebf4aaac6', '', 1, 1632938400, 1, 0, 99, 0, 0, '2020-09-03 19:52:55', '2020-12-14 16:05:14'),
(NULL, 48, 17, 0, 'Luxurious 3 Bed Apartment @ Bashundhara', 'luxurious-3-bed-apartment-at-bashundhara', '2', 'Sale', '15,300,000', '15300000', '7,800', 'Bashundhara, Block-B', 'Bashundhara', '4', NULL, NULL, '3', '3', '1', '3', '1,870', '1870', '2', 'G+8', 'North', '1st', '1st', 'A', 'Available', '<p>To impress residents or home seekers, there are certain things that an apartment must have. While affordability and flat plan are two of the most important factors, the apartment&rsquo;s location is by far, one of the most relevant factors that are always taken into consideration. It&rsquo;s best to keep your home in a well developing area like this location because you will never get bored. As it&rsquo;s constantly changing for the better, there will always be a lot to look forward to.<br />\r\n<br />\r\nProject Status: Ready<br />\r\nLocation : Block-B, Bashundhara<br />\r\nHouse : G+ 8<br />\r\nAvailabe : 1st&nbsp;Floor<br />\r\nTotal SIZE : 1870&nbsp;sft.</p>\r\n\r\n<p># Special Features:<br />\r\n-- North&nbsp;Facing<br />\r\n-- 30&nbsp;feet wide road&nbsp;<br />\r\n-- 24 hours generator service<br />\r\n-- 24 hours CC TV security coverage.<br />\r\n-- LPG Gas Available.</p>', 'NSU', 'Apolo Hospital', 'Bashundhara', 'Airport Railway Station', 'Hazrat Shahajalal International Airport', 'Jamuna Future PArk', 'Jamuna Future Park', 'Baitul Nazat Jame Masjid', 'Bashundhara Sports Ground', 'Mahedi Mart', 'The Country House', 'Bangladesh Fire Station', NULL, 'Tamanna Pharmacy', NULL, 'WASA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reception', NULL, 'Generator', NULL, 'Lift', NULL, NULL, NULL, NULL, 'CCTV', NULL, NULL, NULL, 'BBQ', NULL, NULL, 'luxurious-3-bed-apartment-at-bashundhara-21ff915375c8abc3be247356b256935c', NULL, '', 1, 1632938400, 1, 1, 99, 0, 0, '2020-09-03 21:09:21', '2020-10-28 14:38:54'),
('FF-PR-36', 49, 17, 1, 'Exclusive 3 Bed Apartment At Bashundhara', 'exclusive-3-bed-apartment-at-bashundhara', '2', 'Sale', '14,100,000', '14100000', '7,800', 'Bashundhara, Block-B, Rd 6', 'Bashundhara', '4', NULL, NULL, '3', '3', '1', '7', '1,715', '1715', '2', 'G+8', 'North', '1st', '1st', 'A', 'Available', '<p>To impress residents or home seekers, there are certain things that an apartment must have. While affordability and flat plan are two of the most important factors, the apartment&rsquo;s location is by far, one of the most relevant factors that are always taken into consideration. It&rsquo;s best to keep your home in a well developing area like this location because you will never get bored. As it&rsquo;s constantly changing for the better, there will always be a lot to look forward to.<br />\r\n<br />\r\nProject Status: Ready&nbsp;<br />\r\nLocation : Block-B, Bashundhara<br />\r\nHouse : G+ 9<br />\r\nAvailabe : 1st &amp; 9th Floor<br />\r\nTotal SIZE : 1715&nbsp;sft.</p>\r\n\r\n<p># Special Features:<br />\r\n-- North&nbsp;Facing<br />\r\n-- 30&nbsp;feet wide road&nbsp;<br />\r\n-- 24 hours generator service<br />\r\n-- 24 hours CC TV security coverage.<br />\r\n-- LPG Gas Available.</p>', 'NSU', 'Apolo Hospital', 'Bashundhara', 'Airport Railway Station', 'Hazrat Shahajalal International Airport', 'Jamuna Future Park', 'Jamuna Future Park', 'Baitul Nazat Jame Masjid', 'Bashundhara Sports Ground', 'Mahedi Mart', 'The Country House', 'Bangladesh Fire Station', NULL, 'Lazz Pharma', NULL, 'WASA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reception', 'Rooftop Garden', 'Generator', 'Substation', 'Lift', NULL, NULL, 'Corner Plot', NULL, 'CCTV', NULL, NULL, NULL, NULL, NULL, NULL, 'exclusive-3-bed-apartment-at-bashundhara-a4786eb72c071a0368d390f555c42933', NULL, '', 1, 1632938400, 1, 0, 99, 0, 0, '2020-09-03 21:19:34', '2020-12-14 16:02:44'),
('FF-PR-41', 50, 20, 0, 'Luxurious 3 Bed Apartment At Bashundhara Block-E', 'luxurious-3-bed-apartment-at-bashundhara-block-e', '2', 'Sale', '10,000,000', '10000000', '6,000', 'Plot # 400, Rd 15, Block -E, Basundhara', 'Bashundhara', '4', NULL, NULL, '3', '3', '1', '3', '1,550', '1550', '3', 'G+6', 'North', '6th Floor', '4th', 'A', 'NA', '<p>To impress residents or home seekers, there are certain things that an apartment must have. While affordability and flat plan are two of the most important factors, the apartment&rsquo;s location is by far, one of the most relevant factors that are always taken into consideration. It&rsquo;s best to keep your home in a well developing area like this location because you will never get bored. As it&rsquo;s constantly changing for the better, there will always be a lot to look forward to.<br />\r\n<br />\r\nProject Status: Ready&nbsp;<br />\r\nLocation : Block-E, Bashundhara<br />\r\nHouse : G+ 6<br />\r\nAvailabe : 4th&nbsp;&amp; 6th Floor<br />\r\nTotal SIZE : 1550&nbsp;sft.</p>\r\n\r\n<p># Special Features:<br />\r\n-- North&nbsp;Facing<br />\r\n-- 30&nbsp;feet wide road&nbsp;<br />\r\n-- 24 hours generator service<br />\r\n-- 24 hours CC TV security coverage.<br />\r\n-- LPG Gas Available.</p>', 'NSU', 'Apolo Hospital', 'Bashundhara', 'Airport Railway Station', 'Shahjalal International Airport', 'jamuna Future Park', 'Jamuna Future Park', 'Baitul Nazat Jame Mosjid', 'Bashundhara sports ground', 'Mehedi Mart', 'The Country house', 'Bangladesh Fire Service', NULL, 'Tamanna Pharmacy', NULL, 'WASA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reception', NULL, 'Generator', 'Substation', 'Lift', NULL, NULL, 'Corner Plot', NULL, 'CCTV', NULL, NULL, NULL, NULL, NULL, NULL, 'luxurious-3-bed-apartment-at-bashundhara-block-e-d14584212fce301cd6095f28f463baf1', NULL, '', 1, 1632938400, 1, 0, 99, 0, 0, '2020-09-13 19:34:22', '2020-12-14 16:02:32'),
('FF-PR-57', 51, 25, 0, '3 Bed Apartment @ Link Road, Badda', '3-bed-apartment-at-link-road-badda', '2', 'Sale', '8,000,000', '8000000', '6,500', 'Ta - 155, Link Road, Badda', 'Badda', '17', NULL, NULL, '3', '3', '1', '3', '1,120', '1120', '2', 'G+6', 'North', '2nd', '2nd', 'A', 'Available', '<p>To impress residents or home seekers, there are certain things that an apartment must have. While affordability and flat plan are two of the most important factors, the apartment&rsquo;s location is by far, one of the most relevant factors that are always taken into consideration. It&rsquo;s best to keep your home in a well developing area like this location because you will never get bored. As it&rsquo;s constantly changing for the better, there will always be a lot to look forward to.<br />\r\n<br />\r\nProject Status: Ready&nbsp;<br />\r\nLocation : Link Road, Badda<br />\r\nHouse : G+ 6<br />\r\nAvailabe : 2nd&nbsp;Floor<br />\r\nTotal SIZE : 1120&nbsp;sft.</p>\r\n\r\n<p># Special Features:<br />\r\n-- South&nbsp;Facing<br />\r\n-- 20&nbsp;feet wide road&nbsp;<br />\r\n-- 24 hours generator service<br />\r\n-- 24 hours CC TV security coverage.<br />\r\n-- LPG Gas Available.</p>', 'Brac University', 'National Institute of ENT', 'Badda', 'Airport Railway Station', 'Shahjalal International Airport', 'Police Plaza', 'Gulshan South Park', 'Center Mosque', NULL, 'Shawpno Super Shop', 'London Coffee Shop & Restaurant', 'Bangladesh Fire Service', NULL, 'Lazz Pharma', NULL, 'TiTas Gas', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reception', NULL, 'Generator', 'Substation', 'Lift', NULL, NULL, NULL, NULL, 'CCTV', NULL, NULL, NULL, NULL, NULL, NULL, '3-bed-apartment-at-link-road-badda-fa7fdeb5c05b708e5614c7e8cdb1c34d', NULL, '', 1, 1635616800, 0, 0, 99, 0, 0, '2020-10-03 14:17:29', '2020-12-01 15:37:59'),
('FF-PR-16', 52, 11, 0, '3 Bed Apartment At Uttara', '3-bed-apartment-at-uttara', '2', 'Sale', '11,500,000', '11500000', '6,500', 'Sector-12', 'Uttara', '47', NULL, NULL, '3', '3', '1', '3', '1,550', '1550', '2', 'G+6', 'North', '5th', '5th', 'A', 'Available', '<p>To impress residents or home seekers, there are certain things that an apartment must have. While affordability and flat plan are two of the most important factors, the apartment&rsquo;s location is by far, one of the most relevant factors that are always taken into consideration. It&rsquo;s best to keep your home in a well developing area like this location because you will never get bored. As it&rsquo;s constantly changing for the better, there will always be a lot to look forward to.</p>\r\n\r\n<p><strong># Special Features:<br />\r\n-- </strong>North&nbsp;Facing<br />\r\n-- 30&nbsp;feet wide road&nbsp;<br />\r\n-- 24 hours generator service<br />\r\n-- 24 hours CC TV security coverage.<br />\r\n-- LPG Gas Available.<br />\r\n-- Huge open space.</p>', 'Master Mind', 'Ibn Sina Hospital', 'House Building', 'Airport Railway Station', 'Shahjalal International Airport', 'ZamZam Tower', 'Sector-12 Park', 'Sector-12 Central Mosjid', 'Sector-12 Playground', 'Meena Bazar', 'Haveli', 'Bangladesh Fire Service', NULL, 'Tamanna Pharmacy', NULL, 'BRTA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Generator', 'Substation', 'Lift', NULL, NULL, NULL, NULL, 'CCTV', NULL, NULL, NULL, NULL, NULL, NULL, '3-bed-apartment-at-uttara-84ea2d894d6ef688084b36e59e2d9999', NULL, '', 1, 1635616800, 1, 0, 99, 0, 0, '2020-10-05 11:24:34', '2020-12-14 16:02:05'),
(NULL, 53, 11, 0, 'Wonderful 2000 sft Commercial Space for sale @ Uttara Sector 11', 'wonderful-2000-sft-commercial-space-for-sale-at-uttara-sector-11', '7', 'Sale', '30,000,000', '30000000', '15,000', 'P # 38, Sonargaon Janopath, Sec 11, Uttara', 'Uttara', '47', NULL, NULL, NULL, NULL, '1', '10', '2,000', '2000', NULL, 'G+8', 'South', '3rd, 4th, 6th 7th', '3rd', 'A', 'Available', '<p>This vacant office space is right by the road and steps away from a good amount of shopping and groceries. Transportation is very convincing in the area. So if you are looking for a vacant office location, it can be a perfect space for you to check. With a good security, the building is completed with an open floor plan, that assures enough privacy as well. The rooms are well prepared with the finest quality fixtures of the washrooms are installed with a high durability guarantee.<br />\r\n<br />\r\nDo not miss this affordable offer and we are just a call away to close the deal for you!</p>\r\n\r\n<p><strong># Special Features:<br />\r\n-- </strong>North&nbsp;Facing<br />\r\n-- 60&nbsp;feet wide road&nbsp;<br />\r\n-- 24 hours generator service<br />\r\n-- 24 hours CC TV security coverage.<br />\r\n-- Special Security&nbsp;Available.<br />\r\n-- Huge open space.</p>', NULL, 'Ibn Sina Hospital', 'House Building', 'Airport Railway Station', 'Shahjalal International Airport', 'ZamZam Tower', 'ZamZam Tower roof Top Park', 'Center Mosque', NULL, NULL, 'Haveli', 'Bangladesh Fire Service', NULL, 'Lazz Pharma', NULL, 'Bangladesh House Building Finance', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reception', 'Rooftop Garden', 'Generator', 'Substation', 'Lift', NULL, NULL, NULL, 'Guest Lobby', 'CCTV', NULL, 'Guest Parking', NULL, NULL, 'Terrace', NULL, 'wonderful-2000-sft-commercial-space-for-sale-at-uttara-0cd60efb5578cd967c3c23894f305800', NULL, '', 1, 1635616800, 0, 0, 99, 0, 0, '2020-10-05 11:43:21', '2020-11-17 12:04:48'),
('FF-PR-44', 54, 22, 0, 'Luxurious Apartment Is for Sale In Dhanmondi', 'luxurious-apartment-is-for-sale-in-dhanmondi', '2', 'Sale', '45,000,000', '45000000', '18,500', 'H -512/A, Road 7, Dhanmondi', 'Dhanmondi', '13', NULL, NULL, '+5', '4', '1', '5', '2,375', '2375', '4', 'G+7', 'South', '3rd', '3rd', 'A', 'Available', '<p>A lively area to live, lovely home to settle and it all comes at a reasonable price. This vacant apartment situated on an area of is located in a place where you will find all your needs readily met with. The flat is beautifully equipped with well-fitted tiles and cabinet. The rooms are well prepared with the finest quality fixtures and the washrooms are installed with a high durability guarantee. An added benefit for living in this flat is, a large number of groceries, school, colleges and Universities are located in the nearby area.<br />\r\n<br />\r\nWe suggest to make up your mind and steal this deal offered at the best value.</p>\r\n\r\n<p># Spoecial Features:-<br />\r\n-- South (Lake) Facing<br />\r\n-- Lake viewing in the apartment<br />\r\n-- High class security System<br />\r\n-- 24&nbsp; Hour CCTV Coverage<br />\r\n-- 24 Hour Generator Service</p>', 'Sunny Dale', 'Ibn Sina Hospital', 'Rasel Square', 'Kamalapur Railway Station', 'Shahjalal International Airport', 'Rifles Square', 'Dhanmondi Lake', 'Taqwaya Mosjid', 'Abahoni Playground', 'Shawpno Super Shop', 'Cafe Rio', 'Bangladesh Fire Service', NULL, 'Lazz Pharma', NULL, 'WASA', NULL, 'Servant Bed', 'Servant Bath', NULL, NULL, NULL, NULL, 'Reception', NULL, 'Generator', 'Substation', 'Lift', 'Kitchen Veranda', NULL, 'Corner Plot', 'Guest Lobby', 'CCTV', NULL, NULL, NULL, 'BBQ', NULL, NULL, 'luxurious-apartment-is-for-sale-in-dhanmondi-e678c019bd5a54a28103c0229d76bf40', NULL, '', 1, 1635616800, 1, 1, 99, 0, 0, '2020-10-05 12:27:12', '2020-12-13 13:47:52'),
(NULL, 55, 1, 0, 'Luxurious Apartment Is For Sale In Nurechala, Vatara, Gulshan.', 'luxurious-apartment-is-for-sale-in-nurechala-vatara-gulshan', '2', 'Sale', '7,200,000', '7200000', '5,760', 'Nurechala, Vatara, Gulshan.', 'Vatara', '17', NULL, NULL, '3', '3', '1', '5', '1,250', '1250', '3', 'G+5', 'East', '1st', '1st', NULL, NULL, '<p>Five minutes walking distance from Baridhara. Ready flat.&nbsp;A lively area to live, lovely home to settle and it all comes at a reasonable price. The flat is beautifully equipped with well-fitted tiles and cabinet. The rooms are well prepared with the finest quality fixtures and the washrooms are installed with a high durability guarantee. This vacant apartment situated on an area of is located in a place where you will find all your needs readily met with. A&nbsp;large number of groceries, school, colleges and Universities are located in the nearby area.</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Generator', NULL, 'Lift', 'Kitchen Veranda', 'Kichen Cabinet', NULL, 'Guest Lobby', NULL, NULL, 'Guest Parking', NULL, NULL, 'Terrace', NULL, 'luxurious-apartment-is-up-for-sale-in-nurechala-vatara-gulshan-63d123be5d79464d8a8427982d0a2ab6', NULL, '', 1, 1626285600, 1, 1, 99, 0, 0, '2020-10-11 17:28:35', '2020-10-28 14:35:20'),
('FF-PR-139', 56, 1, 0, 'Exclusive 3 Bed Apartment At Bashundhara I Block', 'exclusive-3-bed-apartment-at-bashundhara-i-block', '2', 'Sale', '11,500,000', '11500000', '6,500', 'Bashundhara I Block', 'Vatara', '4', NULL, NULL, '3', '3', '1', '6', '1,550', '1550', '3', 'G+7', 'North', '1', '6th', NULL, NULL, '<p>Luxurious apartment in Bashundhara residential area, Dhaka.&nbsp;Located in a a safe and sound neighborhood place It&#39;s just near to 300 ft and Kuril bishwa road. A good amount of schools, colleges and groceries are also located in the nearby area. If you are looking for a suitable area to live a life than it will be best for you.</p>', 'Vikarunnesa school and College', 'Apollo Hospital', 'Bashundhara Bus Stand', 'CMH Railway Station', 'Hazrat Shahjalal International Airport', 'Jamuna Future Park', NULL, NULL, NULL, 'Swapno', NULL, NULL, NULL, 'Lazz Pharma', 'Mehedi Mart', NULL, NULL, NULL, NULL, NULL, 'Front yard', NULL, NULL, NULL, NULL, 'Generator', NULL, 'Lift', NULL, NULL, NULL, 'Guest Lobby', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'exclusive-3-bed-apartment-at-bashundhara-i-block-070ffad3c0f12da66ca3b5d0c2d23069', NULL, '<iframe src=\\\"https://www.youtube.com/embed/k0UeWDmc1Ac\\\" frameborder=\\\"0\\\" allow=\\\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\\\" allowfullscreen></iframe>', 1, 1623261600, 1, 0, 99, 0, 0, '2020-10-11 18:10:40', '2020-12-14 16:01:44'),
('FF-PR-03', 60, 3, 0, 'Ready Flat For Sale At Sector 7, Uttara', 'ready-flat-for-sale-at-sector-7-uttara', '2', 'Sale', '17,580,000', '17580000', '8,300', 'H # 11, R-7, Sector 7, Uttara', NULL, '47', NULL, NULL, '3', '3', '1', NULL, '1,950', '1950', '2', 'G+8', 'North', '6th', '9th', NULL, 'NA', '<p>Having separate spaces for a dining and a drawing can make things really comfortable. Here in this apartment, you will find separate spaces for each and three bedrooms. Two of the bedrooms have balconies attached to them and the other one is on the opposite end of the apartment. The walls have a neat tone that complements the floor. You could create a flow within the apartment by using separate designs for each room but maintaining a common theme.</p>', 'Milestone School & College', 'Uttara Adhunik Medical College Hospital', 'House Building Bus Stand', 'Bimanbondor Railway Station', 'Hazrat Shahjalal International Airport', 'Mascot Plaza', 'Sector 7 Park', 'Sector 7 Mosque', 'Sector 7 Playground', 'Swapno', NULL, NULL, NULL, 'Lazz Pharma', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reception', NULL, 'Generator', NULL, 'Lift', NULL, 'Kichen Cabinet', NULL, 'Guest Lobby', 'CCTV', NULL, 'Guest Parking', NULL, NULL, NULL, NULL, 'ready-flat-for-sale-at-sector-7-uttara-4135e89c3138834f30906c929a4f95c9', NULL, '', 1, 1623261600, 1, 1, 99, 0, 0, '2020-10-15 09:50:21', '2021-01-02 10:47:19'),
('FF-PR-26', 61, 13, 0, 'Ready Flat For Sale At Sector 13, Uttara.', 'ready-flat-for-sale-at-sector-13-uttara', '2', 'Sale', '17,500,000', '17500000', '7,200', 'H # 10, R-12, Sector 13, Uttara', NULL, '47', NULL, NULL, '+5', '4', '1', '7', '2,400', '2400', '4', 'G+7', 'South', '1', '5th', NULL, 'NA', '<p>The respective unit of this beautiful building holds spacious rooms. The dining space for your dining hours is just right close to the living area which also connects with a tidy and nicely furnished kitchen. You will be privileged with a nice parking that comes with all the brilliant features offered in and out. A good amount of School, College and groceries are also available in the nearby area. So you do not have to worry about your everyday living necessities.</p>', 'Milestone School & College', 'Uttara Adhunik Medical College Hospital', 'House Building Bus Stand', 'Bimanbondor Railway Station', 'Hazrat Shahjalal International Airport', 'Mascot Plaza', 'Sector 13 Park', 'Sector 13 Mosque', 'Sector 13 Playground', 'Swapno', NULL, NULL, NULL, 'Lazz Pharma', NULL, 'Uttara Passport Office', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reception', NULL, 'Generator', NULL, 'Lift', NULL, 'Kichen Cabinet', NULL, 'Guest Lobby', 'CCTV', NULL, 'Guest Parking', NULL, NULL, NULL, NULL, 'ready-flat-for-sale-at-sector-13-uttara-09a630e07af043e4cae879dd60db1cac', NULL, '', 1, 1626285600, 1, 1, 99, 0, 0, '2020-10-15 10:13:33', '2020-12-14 16:01:10'),
(NULL, 62, 23, 0, 'Excellent Flat For Sale @ Siddheswari', 'excellent-flat-for-sale-at-siddheswari', '2', 'Sale', '33,828,500', '33828500', '14,500', 'Siddheswari', NULL, '36', NULL, NULL, '3', '3', '1', NULL, '2,333', '2333', '3', 'G+8', NULL, '1', '2nd', NULL, NULL, '<p>A happy future in your dream home is in your hand now. It will provide you a premium living and exclusive comforts. The plan reflects the vision of a community where you will get a convenient place in terms of infrastructure, design and urban planning. At the same time it is also offering you the satisfactory value for your money.</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Rooftop Garden', 'Generator', NULL, 'Lift', NULL, 'Kichen Cabinet', NULL, 'Guest Lobby', 'CCTV', NULL, 'Guest Parking', NULL, NULL, NULL, NULL, 'excellent-flat-for-sale-at-siddheswari-0ecbe2d1052ab4f21fd72c5eacbd04b8', NULL, '', 1, 1623261600, 1, 1, 99, 0, 0, '2020-10-15 10:36:33', '2020-11-08 16:57:18'),
('FF-PR-39', 63, 19, 0, 'Ready Flat For Sale At E Block, Bashundhara', 'ready-flat-for-sale-at-e-block-bashundhara', '2', 'Sale', '11,000,000', '11000000', '7,300', 'Plot # 370, Rd 16, Block -E, Basundhara', NULL, '4', NULL, NULL, '3', '3', '1', NULL, '1,500', '1500', '2', 'G+6', NULL, '3rd', '3rd', NULL, NULL, '<p>This wonderful residence is nestled on a large level in the desirable location of Bashundhara. Moreover, the home retains the value of peaceful living while being conveniently close to shops, school and transport. Standing on a strong structure, the flat is very spacious. The asking price of this flat for sale surely comes within your affordability.<br />\r\n<br />\r\nContact us at your earliest to know more about this apartment.</p>', 'Vikarunnesa school and College', 'Apollo Hospital', 'Bashundhara Bus Stand', 'CMH Railway Station', 'Hazrat Shahjalal International Airport', 'Jamuna Future Park', NULL, NULL, NULL, 'Swapno', NULL, NULL, NULL, 'Lazz Pharma', 'Mehedi Mart', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reception', NULL, 'Generator', NULL, 'Lift', NULL, 'Kichen Cabinet', NULL, 'Guest Lobby', 'CCTV', NULL, 'Guest Parking', NULL, NULL, NULL, NULL, 'ready-flat-for-sale-at-e-block-bashundhara-465636eb4a7ff4b267f3b765d07a02da', NULL, '', 1, 1626285600, 1, 0, 99, 0, 0, '2020-10-15 11:06:01', '2020-12-14 16:00:47'),
('FF-PR-16', 64, 10, 0, 'Used Flat For Sale At Sector 11, Uttara', 'used-flat-for-sale-at-sector-11-uttara', '2', 'Sale', '9,500,000', '9500000', '6,100', 'P-15, R-10/A,Sector 11, Uttara', NULL, '47', NULL, NULL, '3', '3', '1', '3', '1,550', '1550', '3', 'G+6', 'North', '5th', '5th', NULL, 'NA', '<p>Are you looking for something unique? See this lovely apartment located in Uttara as the location makes sure you get everyday necessity right within your reach. Electricity, water, gas services are also available here. The locality here is very pleasant.&nbsp;</p>', 'Milestone School & College', 'Uttara Adhunik Medical College Hospital', 'House Building Bus Stand', 'Bimanbondor Railway Station', 'Hazrat Shahjalal International Airport', 'Mascot Plaza', 'Sector 11 Park', 'Sector 11 Mosque', 'Sector 11 Playground', 'Swapno', NULL, NULL, NULL, 'Lazz Pharma', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reception', NULL, 'Generator', NULL, 'Lift', NULL, 'Kichen Cabinet', NULL, 'Guest Lobby', 'CCTV', NULL, 'Guest Parking', NULL, NULL, NULL, NULL, 'used-flat-for-sale-at-sector-11-uttara-86db00ea09965c14268bcb96bfa6f834', NULL, '', 1, 1626285600, 1, 0, 99, 0, 0, '2020-10-15 11:42:37', '2020-12-30 15:56:41'),
('FF-PR-02', 65, 3, 0, 'Ready Flat For Sale At Sector 7, Uttara', 'ready-flat-for-sale-at-sector-7-uttara', '2', 'Sale', '15,660,000', '15660000', '8,300', 'H # 11, R-7, Sector 7, Uttara', NULL, '47', NULL, NULL, '3', '3', '1', '8', '1,800', '1800', '3', 'G+8', 'East', '5th', '5th', NULL, NULL, '<p>Having separate spaces for a dining and a drawing can make things really comfortable. Here in this apartment, you will find separate spaces for each and three bedrooms. Two of the bedrooms have balconies attached to them and the other one is on the opposite end of the apartment. The walls have a neat tone that complements the floor. You could create a flow within the apartment by using separate designs for each room but maintaining a common theme.</p>', 'Milestone School & College', 'Uttara Adhunik Medical College Hospital', 'House Building Bus Stand', 'Bimanbondor Railway Station', 'Hazrat Shahjalal International Airport', 'Mascot Plaza', 'Sector 7 Park', 'Sector 7 Mosque', 'Sector 7 Playground', 'Swapno', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Generator', NULL, 'Lift', NULL, NULL, 'Corner Plot', NULL, 'CCTV', NULL, 'Guest Parking', NULL, NULL, NULL, NULL, 'ready-flat-for-sale-at-sector-7-uttara-a7e8ce2715799ff27bab9c684d389652', NULL, '', 1, 1623261600, 1, 1, 99, 0, 0, '2020-10-15 18:35:06', '2020-12-14 15:58:16'),
('FF-PR-137', 66, 34, 0, 'Ready Office At Dhanmondi', 'ready-office-at-dhanmondi', '7', 'Sale', '65,000,000', '65000000', '30,000', 'House 5/2 Road ,road-4, 5th Floor, Kashba Centre, Dhanmondi,', 'Dhanmondi', '13', NULL, NULL, NULL, NULL, NULL, '5', '2,200', '2200', NULL, 'G+5', 'West', '5th', '5th', NULL, NULL, '<p>The office comes with beautiful interrior design. Rooftop is also added to the property. The rooftop can be of great use. The space has been designed perfectly for commercial use. The arrangement of the area and the rooms will enable you to carry out your operations at ease.&nbsp; The windows extend from the floor to the ceiling, giving the floor a corporate feel and since this is located in Dhanmondi, which is basically the hub for rising businesses, you will find plenty of facilities right around the corner.&nbsp;</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Roof Deck', 'Reception', 'Rooftop Garden', 'Generator', 'Substation', 'Lift', NULL, NULL, NULL, 'Guest Lobby', 'CCTV', NULL, NULL, NULL, NULL, NULL, NULL, 'ready-office-at-dhanmondi-99628fa2e8d3bedd870b425c42fc2b74', NULL, '', 1, 1635357600, 1, 0, 99, 0, 0, '2020-10-22 17:59:13', '2020-12-14 15:58:00'),
('FF-PR-141', 70, 1, 0, 'Ready Flat For Sale At Baridhara J Block', 'ready-flat-for-sale-at-baridhara-j-block', '2', 'Sale', '15,000,000', '15000000', '9,572', 'Baridhara J Block, Dhaka', NULL, '50', NULL, NULL, '3', '3', '1', NULL, '1,567', '1567', '3', 'G+9', 'South', '6th', '6th', NULL, NULL, '<p>This location is home to some of the best places in the city. The finest restaurants, the liveliest zones for a chat and a wonderful community that still breathes tradition. Commute times are quite minimal from here to other central locations of the city and readily available. With numerous residents and a satisfactory ambiance, this place is built for contemplating.</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Generator', NULL, 'Lift', NULL, 'Kichen Cabinet', NULL, 'Guest Lobby', 'CCTV', NULL, 'Guest Parking', NULL, NULL, NULL, NULL, 'ready-flat-for-sale-at-baridhara-j-block-e2bea321fe32f03b09c8a3f51896bf54', NULL, '', 1, 1634148000, 1, 0, 99, 0, 0, '2020-11-01 11:41:49', '2020-12-14 15:57:45'),
('FF-PR-129', 71, 1, 0, 'Under Construction Flat For Sale At Chowdhury Para, Malibag', 'under-construction-flat-for-sale-at-chowdhury-para-malibag', '2', 'Sale', '11,000,000', '11000000', NULL, 'Chowdhury Para, Malibag', NULL, '49', NULL, NULL, '3', '3', '1', NULL, '1,500', '1500', '3', 'G+10', 'North', '3rd', '3rd', NULL, NULL, '<p>Convenient location and a friendly neighborhood. A good amount of school, college and groceries will be located right nearby to your home. All-time electricity backup with updated apartment fittings will make your life smooth.<br />\r\n<br />\r\nIf you like the flat, call us right away to know more.</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Generator', NULL, 'Lift', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'under-construction-flat-for-sale-at-chowdhury-para-malibag-965db33f1a1db73b6f4dbf5eb081d9ee', NULL, '', 1, 1623261600, 1, 0, 99, 0, 0, '2020-11-01 12:10:39', '2020-12-14 15:57:22'),
('FF-PR-128', 72, 1, 0, 'Under Construction Flat For Sale At Khilgaon', 'under-construction-flat-for-sale-at-khilgaon', '2', 'Sale', '9,375,500', '9375500', NULL, 'Khilgaon', NULL, '23', NULL, NULL, '3', '3', '1', NULL, '1,150', '1150', '2', 'G+6', 'West', '2nd', '2nd', NULL, NULL, '<p>A beautiful, well ventilated and open flat in the amicable locality of Khilgaon.&nbsp; There are balconies to make your apartment life more comfortable in the flat.<br />\r\n<br />\r\nMake yourself a happy buyer by calling us about this beautiful apartment right away!</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Generator', NULL, 'Lift', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'under-construction-flat-for-sale-at-khilgaon-faf79d0e0a1721a77cc0dba9ac8b844a', NULL, '', 1, 1623261600, 1, 0, 99, 0, 0, '2020-11-01 12:40:12', '2020-12-14 15:57:06'),
('FF-PR-133', 73, 1, 0, 'Ready Flat For Sale At Bijoy-Rakeen City', 'ready-flat-for-sale-at-bijoy-rakeen-city', '2', 'Sale', '12,500,000', '12500000', NULL, 'Mirpur, Dhaka.', NULL, '29', NULL, NULL, '3', '3', '1', NULL, '1,872', '1872', '3', NULL, 'West', '2nd', '2nd', NULL, NULL, '<p>A wonderful locality to settle with family the locality here is that kind so the house seekers who are planning to shift to one of the friendliest neighborhood in the city, deserve a worthy update. Bijoy-Rakeen City is offering a flat which covers a spacious area in the respective locality featuring airy space for pleasant living. An impressive entrance leads to the generous and airy rooms.&nbsp; You would also have balconies for unwinding in your morning and evening hours.</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reception', NULL, 'Generator', NULL, 'Lift', NULL, NULL, NULL, NULL, 'CCTV', NULL, NULL, NULL, NULL, NULL, NULL, 'ready-flat-for-sale-at-bijoy-rakeen-city-fd6522107f6ee7340d673d02770facf6', NULL, '', 1, 1623261600, 1, 0, 99, 0, 0, '2020-11-01 13:04:31', '2020-12-14 15:56:49'),
('FF-PR-57', 74, 1, 0, 'Ready Flat For Sale At Link Road, Badda', 'ready-flat-for-sale-at-link-road-badda', '2', 'Sale', '7,700,000', '7700000', '6,700', 'Link Road, Badda.', NULL, '5', NULL, NULL, '3', '3', '1', NULL, '1,120', '1120', '2', 'G+7', 'North', '3rd', '3rd', NULL, NULL, '<p>A happy future in your dream home is in your hand now.&nbsp; The apartment reflects the vision of a community where you will get a convenient place in terms of infrastructure, design and urban planning. At the same time it is also offering you the satisfactory value for your money.<br />\r\n<br />\r\nSo what are you waiting for, contact us to book this apartment.</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Generator', NULL, 'Lift', NULL, NULL, NULL, 'Guest Lobby', 'CCTV', NULL, NULL, NULL, NULL, NULL, NULL, 'ready-flat-for-sale-at-link-road-badda-48e7000c9e590e581b8dbcc464637d3f', NULL, '', 1, 1635357600, 1, 0, 99, 0, 0, '2020-11-01 13:23:29', '2020-12-14 15:56:16'),
('FF-PR-01', 75, 1, 0, 'Ready Flat For Sale At Sector 3, Uttara', 'ready-flat-for-sale-at-sector-3-uttara', '2', 'Sale', '17,000,000', '17000000', '9,500', 'Sector 3, Uttara', NULL, '47', NULL, NULL, '4', '3', '1', NULL, '1,798', '1798', '4', 'G+7', 'South', '3rd', '1st', NULL, NULL, '<p>In the desirable location of Uttara a beautiful apartment is located for you to make it your new home. All time availability of water, gas and electricity will make your life even smooth while living in this flat. You would also have refreshing balconies for a chill out in your morning and evening hours with your family.<br />\r\n<br />\r\nContact us to know more about this apartment.</p>', 'Milestone School & College', 'Uttara Adhunik Medical College Hospital', 'House Building Bus Stand', 'Bimanbondor Railway Station', 'Hazrat Shahjalal International Airport', 'Mascot Plaza', 'Sector 3 Park', 'Sector 3 Mosque', 'Sector 3 Playground', 'Swapno', NULL, NULL, NULL, 'Lazz Pharma', NULL, 'Uttara Passport Office', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Generator', NULL, 'Lift', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ready-flat-for-sale-at-sector-3-uttara-2685b09160d682645d4b900eb88d8279', NULL, '', 1, 1635357600, 1, 0, 99, 0, 0, '2020-11-01 13:39:28', '2020-12-15 15:07:51'),
('FF-PR-43', 76, 1, 0, 'Ready Flat For Sale At C block, Bashundhara', 'ready-flat-for-sale-at-c-block-bashundhara', '2', 'Sale', '10,500,000', '10500000', NULL, 'C Block, Bashundhara', NULL, '4', NULL, NULL, '4', '3', '1', NULL, '1,438', '1438', '1', 'G+6', 'South', '2nd', '2nd', NULL, NULL, '<p>Agargaon offers you this lovely home which is vacant right now. You do not need to worry about water, gas and electricity while staying in this home. With tiled flooring in the whole apartment, the flat also makes sure the washrooms are made with quality and durable fixtures. Moreover, the home retains the value of peaceful living while being conveniently close to shops, school and transport.<br />\r\n<br />\r\nContact us at your earliest to know more about this apartment.</p>', 'Vikarunnesa school and College', 'Apollo Hospital', 'Bashundhara Bus Stand', 'CMH Railway Station', 'Hazrat Shahjalal International Airport', 'Jamuna Future Park', NULL, NULL, NULL, 'Swapno', NULL, NULL, NULL, 'Lazz Pharma', 'Mehedi Mart', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Generator', NULL, 'Lift', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ready-flat-for-sale-at-c-block-bashundhara-efd33731692792594017105dc0931699', NULL, '', 1, 1635357600, 1, 1, 99, 0, 0, '2020-11-01 14:10:46', '2020-12-14 15:54:50'),
('FF-PR-135', 77, 1, 0, 'Ready Flat For Sale At Dhanmondi 32', 'ready-flat-for-sale-at-dhanmondi-32', '2', 'Sale', '28,000,000', '28000000', '12,000', 'Dhanmondi 32', 'Dhanmondi', '13', NULL, NULL, '3', '4', '1', NULL, '2,316', '2316', '3', 'G+5', 'West', '2nd', NULL, NULL, NULL, '<p>Waiting for winning a ready flat in Dhanmondi? You just chose the right link to get through it. Dhanmondi is offering you one of the finest looking flats positioning. Utilities are available in this ready flat. The apartment has got balconies that would give the opportunity to spend some good family times with your family. Additionally a good amount of school, college and groceries are available in the nearby area. The flat has got amazing rooms which are enough to get you influenced to seize the flat right away.<br />\r\n<br />\r\nWe are here waiting to acknowledge your need and aid you with the best property at this instant.</p>', 'Oxford School', 'Square Hospital', 'Dhanmondi Bus Station', NULL, NULL, NULL, NULL, NULL, NULL, 'Swapno', 'KFC', NULL, NULL, 'Lazz Pharma', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Generator', NULL, NULL, NULL, NULL, NULL, NULL, 'CCTV', NULL, NULL, NULL, NULL, NULL, NULL, 'ready-flat-for-sale-at-dhanmondi-32-e0e931dc0290d2dc20a3eaa885e448a4', NULL, '', 1, 1635357600, 1, 0, 99, 0, 0, '2020-11-01 14:41:47', '2020-12-19 16:13:54'),
('FF-PR-0003', 78, 1, 0, '5 Katha Plot For Sale At Sector 21', '5-katha-plot-for-sale-at-sector-21', '5', 'Sale', '37,500,000', '37500000', NULL, 'Sector 21, Purbachal.', NULL, '53', NULL, NULL, NULL, NULL, NULL, '5', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<p>Build your dream home in this booming location. We are happy to present you a unique, large and newly developed land which is available for sale. The ambiance has been created with opulent ingredients to make your living really convenient. The location is satisfactory for the entire family and friends.&nbsp;</p>\r\n\r\n<p>Feel free to contact us at your earliest to book this plot.</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5-katha-plot-for-sale-at-sector-21-96dc606adf1ca040f2f39292976dd546', NULL, '', 1, 1634580000, 1, 0, 99, 0, 0, '2020-11-01 18:16:23', '2020-12-14 15:54:19'),
('FF-PR-0002', 79, 1, 0, '5 Katha Plot At Sector 21', '5-katha-plot-at-sector-21', '5', 'Sale', '37,500,000', '37500000', NULL, 'Sector 21, Purbachal.', NULL, '53', NULL, NULL, NULL, NULL, NULL, '5', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<p>Build your dream home in this booming location. We are happy to present you a unique, large and newly developed land which is available for sale. The ambiance has been created with opulent ingredients to make your living really convenient. The location is satisfactory for the entire family and friends.&nbsp;</p>\r\n\r\n<p>Feel free to contact us at your earliest to book this plot.</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5-katha-plot-at-sector-21-4451968692a5e17185fb5b6894ea4f67', NULL, '', 1, 1634580000, 1, 0, 99, 0, 0, '2020-11-01 18:21:34', '2020-12-14 15:54:00'),
('FF-PR-0007', 80, 1, 0, '10 Katha Plot For Sale At Block k, Bashundhara.', '10-katha-plot-for-sale-at-block-k-bashundhara', '5', 'Sale', '80,000,000', '80000000', NULL, 'Block K, Bashundhara.', NULL, '4', NULL, NULL, NULL, NULL, NULL, '10', NULL, '', NULL, NULL, 'South', NULL, NULL, NULL, NULL, '<p>This plot is planned in view of your ideal home. It won&#39;t just offer you a lovely way of life yet in addition will offer you complete protection and security to guarantee that your family and visitors have a sheltered and pleasant time.</p>\r\n\r\n<p>In the event that you like the plot, call us to know more.</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '10-katha-plot-for-sale-at-block-k-bashundhara-e331078f97b7ea468f3818aedd80c1d3', NULL, '', 1, 1634580000, 1, 0, 99, 0, 0, '2020-11-01 18:26:19', '2020-12-14 15:53:39'),
('FF-PR-0006', 81, 1, 0, '5 Katha Land For Sale At Block L, Bashundhara.', '5-katha-land-for-sale-at-block-l-bashundhara', '5', 'Sale', '29,000,000', '29000000', NULL, 'Block L, Bashundhara.', NULL, '4', NULL, NULL, NULL, NULL, NULL, '5', NULL, '', NULL, NULL, 'North', NULL, NULL, NULL, NULL, '<p>Building a cheerful future in your fantasy home is in your grasp now. This plot will offer you a superior living, restrictive solaces and outright peacefulness. The arrangement of this plot mirrors the vision of a network where you will get a helpful spot regarding foundation, plan and metropolitan arranging. Simultaneously the plot is likewise offering you the good incentive for your cash.&nbsp;</p>\r\n\r\n<p>So what are you sitting tight for get in touch with us to book this plot immediately.</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5-katha-land-for-sale-at-block-l-bashundhara-e5705b41110c61a78337a0536bccce98', NULL, '', 1, 1634580000, 1, 0, 99, 0, 0, '2020-11-01 18:29:18', '2020-12-14 15:53:07'),
('FF-PR-0005', 82, 1, 0, '10 Katha Plot For Sale At Block K, Bashundhara', '10-katha-plot-for-sale-at-block-k-bashundhara', '5', 'Sale', '88,000,000', '88000000', NULL, 'Block K, Bashundhara', NULL, '4', NULL, NULL, NULL, NULL, NULL, '10', NULL, '', NULL, NULL, 'South-East', NULL, NULL, NULL, NULL, '<p>Building a cheerful future in your fantasy home is in your grasp now. This plot will offer you a superior living, restrictive solaces and outright peacefulness. The arrangement of this plot mirrors the vision of a network where you will get a helpful spot regarding foundation, plan and metropolitan arranging. Simultaneously the plot is likewise offering you the good incentive for your cash.&nbsp;</p>\r\n\r\n<p>So what are you sitting tight for get in touch with us to book this plot immediately.</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '10-katha-plot-for-sale-at-block-k-bashundhara-0722189e332bf55c4d69b35432ac26ed', NULL, '', 1, 1635357600, 1, 0, 99, 0, 0, '2020-11-01 18:34:03', '2020-12-14 15:52:34'),
('FF-PR-0001', 83, 1, 0, '5 Katha Land For Sale At Block L, Bashundhara.', '5-katha-land-for-sale-at-block-l-bashundhara', '5', 'Sale', '31,000,000', '31000000', NULL, 'Block L, Bashundhara.', NULL, '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, 'North-West', NULL, NULL, NULL, NULL, '<p>Building a cheerful future in your fantasy home is in your grasp now. This plot will offer you a superior living, elite solaces and total peacefulness. The arrangement of this plot mirrors the vision of a network where you will get an advantageous spot regarding framework, plan and metropolitan arranging. Simultaneously the plot is additionally offering you the acceptable incentive for your cash.&nbsp;</p>\r\n\r\n<p>So what are you sitting tight for reach us to book this plot immediately.</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5-katha-land-for-sale-at-block-l-bashundhara-90252502ab29331e94fd3113f11c58e0', NULL, '', 1, 1634580000, 1, 0, 99, 0, 0, '2020-11-01 18:38:39', '2020-12-14 15:52:04'),
('FF-PR-0004', 84, 1, 0, '3 Katha Plot For Sale At Block L, Bashundhara.', '3-katha-plot-for-sale-at-block-l-bashundhara', '5', 'Sale', '11,100,000', '11100000', NULL, 'Block L, Bashundhara.', NULL, '4', NULL, NULL, NULL, NULL, NULL, '3', NULL, '', NULL, NULL, 'North', NULL, NULL, NULL, NULL, '<p>Manufacture your fantasy home in this thriving area. We are glad to introduce you a special land which is ready for sale. The area has been made with rich fixings to make your living truly convenient. The area is satisfactory for the whole loved ones.</p>\r\n\r\n<p>Please call us to know more.</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3-katha-plot-for-sale-at-block-l-bashundhara-078bdd6990e2259f4c1a7eb5c07a0e69', NULL, '', 1, 1635357600, 1, 0, 99, 0, 0, '2020-11-01 18:42:22', '2020-12-14 15:51:33');
INSERT INTO `properties` (`product_code`, `id`, `user_id`, `featured_property`, `property_name`, `property_slug`, `property_type`, `property_purpose`, `price`, `search_price`, `rate_per_sft`, `address`, `po`, `location`, `map_latitude`, `map_longitude`, `bathrooms`, `bedrooms`, `garage`, `land_area`, `build_area`, `search_build_area`, `balcony`, `no_of_floor`, `facing`, `available_floor`, `floor`, `unit`, `loan_facility`, `description`, `nearest_school_km`, `nearest_hospital_km`, `nearest_bus_stand_km`, `nearest_railway_km`, `nearest_airport_km`, `nearest_mall_km`, `nearest_park_km`, `nearest_mosque_km`, `nearest_playground_km`, `nearest_departmental_store_km`, `nearest_restaurant_km`, `nearest_fire_service_km`, `nearest_police_station_km`, `nearest_pharmacy_km`, `nearest_grocery_bazar_km`, `nearest_govt_office_km`, `property_features`, `amenities_servent_bed`, `amenities_servent_bath`, `amenities_gym`, `amenities_front_yard`, `amenities_splash_pool`, `amenities_roof_deck`, `amenities_reception`, `amenities_rooftop_garden`, `amenities_generator`, `amenities_substation`, `amenities_lift`, `amenities_kitchen_veranda`, `amenities_kitchen_cabinet`, `amenities_corner_plot`, `amenities_guest_lobby`, `amenities_cctv`, `amenities_swimming_pool`, `amenities_guest_parking`, `amenities_laundry_room`, `amenities_bbq`, `amenities_terrace`, `amenities_sauna`, `featured_image`, `floor_plan`, `video_code`, `active_plan_id`, `property_exp_date`, `status`, `soldout`, `position_id`, `position_exp_date`, `position_status`, `created_at`, `updated_at`) VALUES
('FF-PR-134', 85, 1, 0, 'Under Construction Flat For Sale At Bijoy-Rakeen City, Mirpur.', 'under-construction-flat-for-sale-at-bijoy-rakeen-city-mirpur', '2', 'Sale', '11,500,000', '11500000', '7,400', 'Bijoy-Rakeen City, Mirpur', NULL, '29', NULL, NULL, '3', '3', '1', NULL, '1,553', '1553', '3', NULL, NULL, '2nd', '2nd', NULL, NULL, '<p>A wonderful locality to settle with family the locality here is that kind so the house seekers who are planning to shift to one of the friendliest neighborhood in the city, deserve a worthy update. Bijoy-Rakeen City is offering a flat which covers a spacious area in the respective locality featuring airy space for pleasant living. An impressive entrance leads to the generous and airy rooms.&nbsp; You would also have balconies for unwinding in your morning and evening hours.</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reception', NULL, 'Generator', NULL, 'Lift', NULL, NULL, NULL, 'Guest Lobby', 'CCTV', NULL, 'Guest Parking', NULL, NULL, NULL, NULL, 'under-construction-flat-for-sale-at-bijot-rakeen-city-mirpur-1e3ff24d9a50ce3a2a2cca2baf925a73', NULL, '', 1, 1635357600, 1, 0, 99, 0, 0, '2020-11-03 16:11:48', '2020-12-15 17:56:49'),
(NULL, 86, 1, 0, 'Ready Flat For Sale At Sector 11, Uttara', 'ready-flat-for-sale-at-sector-11-uttara', '2', 'Sale', '12,500,000', '12500000', '8,000', 'Sector 11, Uttara', NULL, '47', NULL, NULL, '3', '3', '1', NULL, '1,550', '1550', '2', 'G+6', 'South', '3rd', '3rd', NULL, NULL, '<p>For more details feel free to contact us. Convenient location and a friendly neighborhood. A good amount of school, college and groceries will be located right nearby to your home. All-time electricity backup with updated apartment fittings will make your life smooth.&nbsp;</p>\r\n\r\n<p>If you like the flat, call us to know more.</p>', 'Milestone School & College', 'Uttara Adhunik Medical College Hospital', 'House Building Bus Stand', 'Bimanbondor Railway Station', 'Hazrat Shahjalal International Airport', 'Mascot Plaza', 'Sector 11 Park', 'Sector 11 Mosque', 'Sector 11 Playground', 'Swapno', NULL, NULL, NULL, 'Lazz Pharma', NULL, 'Uttara Passport Office', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Generator', NULL, 'Lift', NULL, NULL, NULL, 'Guest Lobby', 'CCTV', NULL, 'Guest Parking', NULL, NULL, NULL, NULL, 'ready-flat-for-sale-at-sector-11-uttara-1da90119b6dc29eb0d76093123046738', NULL, '', 1, 1623261600, 1, 0, 99, 0, 0, '2020-11-08 16:54:46', '2020-11-10 18:30:50'),
('FF-PR-45', 91, 1, 0, 'Ready Flat For Sale At Segunbagicha', 'ready-flat-for-sale-at-segunbagicha', '2', 'Sale', '17,540,000', '17540000', '12,000', 'Segunbagicha, Dhaka', 'Shegunbagicha', '51', NULL, NULL, '3', '3', '1', NULL, '1,394', '1394', '3', 'G+6', 'North', '4th', '4th', NULL, NULL, '<p>Shegunbagicha is offering a &nbsp;flat which covers a spacious area in the respective locality featuring airy space for pleasant living. An impressive entrance leads to the generous and airy rooms. A wonderful locality to settle with family. For your cooking needs, you would find a convenient kitchen just right next to the dining area. You would also have balconies for unwinding in your morning and evening hours.&nbsp;</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reception', 'Rooftop Garden', 'Generator', NULL, 'Lift', NULL, 'Kichen Cabinet', NULL, 'Guest Lobby', 'CCTV', NULL, 'Guest Parking', NULL, NULL, NULL, NULL, 'ready-flat-for-sale-at-segunbagicha-84b069ebd287d467cb7fd26e53c6a0c9', NULL, '', 1, 1635357600, 1, 0, 99, 0, 0, '2020-11-11 10:16:05', '2020-12-06 11:49:12'),
('FF-PR-63', 92, 1, 0, 'Under Construction Flat For Sale At Dakshin Khan', 'under-construction-flat-for-sale-at-dakshin-khan', '2', 'Sale', '7,000,000', '7000000', NULL, 'Dakshin khan, Dhaka', 'Dakshinkhan', '47', NULL, NULL, '3', '3', '1', NULL, '1,360', '1360', '2', 'G+8', 'North-West', '3rd', '3rd', NULL, NULL, '<p>Dakshin Khan brings you this wonderful house. With an area of which will provide you ample space the flat also assures all time water and electricity. Convenient location and a friendly neighborhood. A good amount of school, college and groceries will be located right nearby to your home. The apartment comes within your affordability in this wonderful location. The flat for sale provides the exact comfortable living you have been looking for. &nbsp;<br />\r\n&nbsp;</p>\r\n\r\n<p>Feel Free To Contact Us.</p>', 'Milestone School & College', 'Uttara Adhunik Medical College Hospital', 'House Building Bus Stand', 'Bimanbondor Railway Station', 'Hazrat Shahjalal International Airport', 'Mascot Plaza', NULL, NULL, NULL, 'Swapno', NULL, NULL, NULL, 'Lazz Pharma', NULL, 'Uttara Passport Office', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reception', NULL, 'Generator', NULL, NULL, NULL, 'Kichen Cabinet', NULL, 'Guest Lobby', 'CCTV', NULL, 'Guest Parking', NULL, NULL, NULL, NULL, 'under-construction-flat-for-sale-at-dakshin-khan-951bb0a9f13d7f95c71852ab379862f1', NULL, '', 1, 1635357600, 1, 0, 99, 0, 0, '2020-11-11 10:43:00', '2020-12-20 17:39:25'),
('FF-PR-131', 93, 1, 0, 'Ready Flat For Sale At Baridhara', 'ready-flat-for-sale-at-baridhara', '2', 'Sale', '11,000,000', '11000000', NULL, 'Noor Er Chela, Baridhara', NULL, '50', NULL, NULL, '3', '3', '1', NULL, '1,545', '1545', '3', NULL, 'North', NULL, NULL, NULL, NULL, '<p>Baridhara is a zone for the first class. Everyone in the city knows that it holds an impeccable reputation with a high-end society and an aristocratic community. &nbsp;There are three bedrooms here and you will get a space in the middle for a living room, another for a dining area, and another for a drawing-room. The plan is simply perfect to lead a comfortable lifestyle.&nbsp;</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reception', NULL, 'Generator', NULL, 'Lift', NULL, NULL, NULL, 'Guest Lobby', 'CCTV', NULL, 'Guest Parking', NULL, NULL, NULL, NULL, 'ready-flat-for-sale-at-baridhara-1e4f05d264788b72ffd120140ca80f70', NULL, '', 1, 1635357600, 1, 0, 99, 0, 0, '2020-11-11 11:07:33', '2020-12-03 15:12:50'),
('FF-PR-138', 94, 1, 0, 'Ready Flat For Sale At Sector 13, Uttara', 'ready-flat-for-sale-at-sector-13-uttara', '2', 'Sale', '19,500,000', '19500000', NULL, 'Sector 13, Uttara', NULL, '47', NULL, NULL, '4', '4', '1', NULL, '2,350', '2350', '4', 'G+7', 'East', '7th', NULL, NULL, NULL, '<p>Uttara is offering a &nbsp;flat which covers a spacious area in the respective locality featuring airy space for pleasant living. An impressive entrance leads to the generous and airy rooms. A wonderful locality to settle with family. For your cooking needs, you would find a convenient kitchen just right next to the dining area. You would also have balconies for unwinding in your morning and evening hours.&nbsp;</p>', 'Milestone School & College', 'Uttara Adhunik Medical College Hospital', 'House Building Bus Stand', 'Bimanbondor Railway Station', 'Hazrat Shahjalal International Airport', 'Mascot Plaza', 'Sector 13 Park', 'Sector 13 Mosque', 'Sector 13 Playground', 'Swapno', NULL, NULL, NULL, 'Lazz Pharma', NULL, 'Uttara Passport Office', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reception', NULL, 'Generator', NULL, 'Lift', NULL, 'Kichen Cabinet', NULL, 'Guest Lobby', 'CCTV', NULL, 'Guest Parking', NULL, NULL, NULL, NULL, 'ready-flat-for-sale-at-sector-13-uttara-3677481dc67fc92d2347a706e9a64285', NULL, '', 1, 1634580000, 1, 1, 99, 0, 0, '2020-11-11 12:48:51', '2021-01-02 10:46:19'),
('FF-PR-142', 95, 1, 0, 'Under Construction Flat For Sale At C Block, Bashundhara', 'under-construction-flat-for-sale-at-c-block-bashundhara', '2', 'Sale', '11,000,000', '11000000', NULL, 'C Block, Bashundhara', NULL, '4', NULL, NULL, '3', '3', '1', NULL, '1,550', '1550', '3', 'G+8', 'South', '5th', '5th', NULL, NULL, '<p>Bashundhara Khan brings you this wonderful house. With an area of which will provide you ample space the flat also assures all time water and electricity. Convenient location and a friendly neighborhood.</p>\r\n\r\n<p>A good amount of school, college and groceries will be located right nearby to your home. The apartment comes within your affordability in this wonderful location. The flat for sale provides the exact comfortable living you have been looking for.</p>', 'Vikarunnesa school and College', 'Apollo Hospital', 'Bashundhara Bus Stand', 'CMH Railway Station', 'Hazrat Shahjalal International Airport', 'Jamuna Future Park', NULL, NULL, NULL, 'Swapno', NULL, NULL, NULL, 'Lazz Pharma', NULL, 'Uttara Passport Office', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reception', NULL, 'Generator', NULL, 'Lift', NULL, NULL, NULL, 'Guest Lobby', 'CCTV', NULL, 'Guest Parking', NULL, NULL, NULL, NULL, 'under-construction-flat-for-sale-at-c-block-bashundhara-37a351003761ff2fda6718e4901fd210', NULL, '', 1, 1634580000, 1, 0, 99, 0, 0, '2020-11-11 13:37:33', '2020-11-25 17:50:26'),
('FF-PR-144', 96, 1, 0, 'Under Construction Flat For Sale At I Block, Bashundhara', 'under-construction-flat-for-sale-at-i-block-bashundhara', '2', 'Sale', '10,200,000', '10200000', NULL, 'I Block, Bashundhara', NULL, '4', NULL, NULL, '3', '3', '1', NULL, '1,500', '1500', '2', 'G+6', 'North', '6th', '6th', NULL, NULL, '<p>Bashundhara is offering a &nbsp;flat which covers a spacious area in the respective locality featuring airy space for pleasant living. An impressive entrance leads to the generous and airy rooms. A wonderful locality to settle with family. For your cooking needs, you would find a convenient kitchen just right next to the dining area. You would also have balconies for unwinding in your morning and evening hours.</p>\r\n\r\n<p>Feel Free To Contact Us To Know More.</p>', 'Vikarunnesa school and College', 'Apollo Hospital', 'Bashundhara Bus Stand', 'CMH Railway Station', 'Hazrat Shahjalal International Airport', 'Jamuna Future Park', NULL, NULL, NULL, 'Swapno', NULL, NULL, NULL, 'Lazz Pharma', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reception', NULL, 'Generator', NULL, 'Lift', NULL, NULL, NULL, 'Guest Lobby', 'CCTV', NULL, 'Guest Parking', NULL, NULL, NULL, NULL, 'under-construction-flat-for-sale-at-i-block-bashundhara-b18debbbbb097c0f2290172b289a7456', NULL, '', 1, 1634580000, 1, 0, 99, 0, 0, '2020-11-11 14:00:02', '2020-12-01 12:49:01'),
('FF-PR-54', 99, 1, 1, 'Ready Flat For Sale At Shiddhesory', 'ready-flat-for-sale-at-shiddhesory', '2', 'Sale', '45,000,000', '45000000', '15,000', 'Shiddhessori', NULL, '52', NULL, NULL, '4', '4', NULL, NULL, '2,981', '2981', '3', 'G+13', 'West', '3rd', '3rd', NULL, NULL, '<p>Shiddhessory is offering a&nbsp; luxurious flat which covers a spacious area in the respective locality featuring airy space for pleasant living. This is a type of apartment that will bring happiness in your life. A wonderful locality to settle with family.&nbsp; You would also have balconies for unwinding in your morning and evening hours.</p>\r\n\r\n<p>Feel Free To Contact Us To Know More.</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reception', 'Rooftop Garden', 'Generator', 'Substation', 'Lift', 'Kitchen Veranda', 'Kichen Cabinet', NULL, 'Guest Lobby', 'CCTV', NULL, 'Guest Parking', NULL, NULL, NULL, NULL, 'ready-flat-for-sale-at-shiddhesory-9ec53bd19dd81ddd33912cf4003aa035', NULL, '', 1, 1635357600, 1, 0, 99, 0, 0, '2020-11-30 12:31:30', '2020-12-14 15:50:13'),
('FF-PR-07', 100, 1, 0, 'Ready Flat For Sale At Sector 5, Uttara', 'ready-flat-for-sale-at-sector-5-uttara', '2', 'Sale', '5,700,000', '5700000', '7,000', 'Uttara, Dhaka', NULL, '47', NULL, NULL, '2', '2', '1', NULL, '807', '807', '2', NULL, 'West', '4th', '4th', NULL, NULL, '<p>Convenient location at Uttara and a friendly neighborhood. A good amount of school, college and groceries will be located right nearby to your home.&nbsp;</p>\r\n\r\n<p>Please contact us for more details.</p>', 'Milestone School & College', 'Uttara Adhunik Medical College Hospital', 'House Building Bus Stand', 'Bimanbondor Railway Station', 'Hazrat Shahjalal International Airport', 'Mascot Plaza', 'Sector 5 Park', 'Sector 5 Mosque', NULL, 'Swapno', NULL, NULL, NULL, 'Lazz Pharma', NULL, 'Uttara Passport Office', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Generator', NULL, 'Lift', NULL, NULL, NULL, NULL, 'CCTV', NULL, 'Guest Parking', NULL, NULL, NULL, NULL, 'ready-flat-for-sale-at-sector-5-uttara-7cdfe69d31671c26e5952ddc911753f1', NULL, '', 1, 1623261600, 1, 0, 99, 0, 0, '2020-11-30 14:40:03', '2020-11-30 14:42:28'),
('FF-PR-147', 101, 1, 0, 'Under Construction Flat For Sale At Sector 13, Uttara', 'under-construction-flat-for-sale-at-sector-13-uttara', '2', 'Sale', '14,000,000', '14000000', NULL, 'Uttara, Dhaka', NULL, '47', NULL, NULL, '3', '3', '1', NULL, '1,650', '1650', '3', 'G+7', 'North', '5th', '5th', NULL, NULL, '<p>Uttara is offering a &nbsp;flat which covers a spacious area in the respective locality featuring&nbsp;space for pleasant living. A wonderful locality to settle with family. For your cooking needs, you would find a convenient kitchen just right next to the dining area. An impressive entrance leads to the generous and airy rooms. A wonderful locality to settle with family. For your cooking needs, you would find a convenient kitchen just right next to the dining area. You would also have balconies for unwinding in your morning and evening hours.</p>\r\n\r\n<p>Feel Free To Contact Us To Know More.</p>', 'Milestone School & College', 'Uttara Adhunik Medical College Hospital', 'House Building Bus Stand', 'Bimanbondor Railway Station', 'Hazrat Shahjalal International Airport', 'Mascot Plaza', 'Sector 13 Park', 'Sector 13 Mosque', 'Sector 13 Playground', 'Swapno', NULL, NULL, NULL, 'Lazz Pharma', NULL, 'Uttara Passport Office', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reception', NULL, 'Generator', 'Substation', 'Lift', NULL, NULL, NULL, 'Guest Lobby', 'CCTV', NULL, NULL, NULL, NULL, NULL, NULL, 'under-construction-flat-for-sale-at-sector-7-uttara-b86d9a8e244a8af4610b10875b98230e', NULL, '', 1, 1635357600, 1, 0, 99, 0, 0, '2020-11-30 18:00:19', '2020-12-14 15:49:49'),
('FF-PR-06', 102, 1, 0, 'Ready Flat For Sale at Sector 5, Uttara', 'ready-flat-for-sale-at-sector-5-uttara', '2', 'Sale', '18,500,000', '18500000', '10,200', 'Uttara, Dhaka', NULL, '47', NULL, NULL, '3', '3', '1', NULL, '1,809', '1809', '3', 'G+8', 'South', '8th', '8th', NULL, NULL, '<p>A beautiful apartment in the center location of Uttara which is sure to make anyone satisfied&nbsp;an impressive entrance leads to the generous and airy rooms. A wonderful locality to settle with family. For your cooking needs, you would find a convenient kitchen just right next to the dining area. You would also have balconies for unwinding in your morning and evening hours.&nbsp;</p>', 'Milestone School & College', 'Uttara Adhunik Medical College Hospital', 'House Building Bus Stand', 'Bimanbondor Railway Station', 'Hazrat Shahjalal International Airport', 'Mascot Plaza', 'Sector 5 Park', 'Sector 5 Mosque', 'Sector 5 Playground', 'Swapno', NULL, NULL, NULL, 'Lazz Pharma', NULL, 'Uttara Passport Office', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reception', NULL, 'Generator', 'Substation', 'Lift', NULL, 'Kichen Cabinet', NULL, NULL, 'CCTV', NULL, 'Guest Parking', NULL, NULL, NULL, NULL, 'ready-flat-for-sale-at-sector-5-uttara-098d86c982354a96556bd861823ebfbd', NULL, '', 1, 1634580000, 1, 0, 99, 0, 0, '2020-12-02 16:06:43', '2020-12-02 16:07:12'),
('FF-PR-19', 103, 1, 0, 'Commercial Space For Sale At Sector 11, Uttara', 'commercial-space-for-sale-at-sector-11-uttara', '7', 'Sale', '37,200,000', '37200000', NULL, 'Uttara, Dhaka', NULL, '47', NULL, NULL, NULL, NULL, '1', NULL, '2,460', '2460', NULL, NULL, 'South', '6th', '6th', NULL, NULL, '<p>A wonderful commercial project for sale at a proper location of Uttara. Perfect place for&nbsp;starting a restaurant or for&nbsp;making&nbsp;it a modern office.</p>\r\n\r\n<p>Contact us to learn more about this beautiful project.</p>', 'Milestone School & College', 'Uttara Adhunik Medical College Hospital', 'House Building Bus Stand', 'Bimanbondor Railway Station', 'Hazrat Shahjalal International Airport', 'Mascot Plaza', 'Sector 11 Park', 'Sector 11 Mosque', 'Sector 11 Playground', 'Swapno', NULL, NULL, NULL, 'Lazz Pharma', NULL, 'Uttara Passport Office', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'commercial-space-for-sale-at-sector-11-uttara-d5a7c99a46ed7fb9dfcaac2e3bb5a3e2', NULL, '', 1, 1623261600, 1, 0, 99, 0, 0, '2020-12-02 16:24:59', '2020-12-02 16:26:07'),
('FF-PR-130', 104, 1, 0, 'Ready Flat For Sale At Baridhara', 'ready-flat-for-sale-at-baridhara', '2', 'Sale', '12,500,000', '12500000', NULL, 'Baridhara, Dhaka.', NULL, '50', NULL, NULL, '3', '3', '1', NULL, '1,777', '1777', '3', 'G+7', 'North', '3rd', '3rd', NULL, NULL, '<p>This location brings a combination of things to those who reside here. There are restaurants, parks, residences, shops, recreational centers, malls and everything you can think of, for a completely lively living experience.</p>\r\n\r\n<p>Please contact us to know more</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reception', NULL, 'Generator', NULL, 'Lift', 'Kitchen Veranda', 'Kichen Cabinet', NULL, NULL, 'CCTV', NULL, 'Guest Parking', NULL, NULL, NULL, NULL, 'ready-flat-for-sale-at-baridhara-620d348d4551ea2870e4cb602881a1d8', NULL, '', 1, 1623261600, 1, 0, 99, 0, 0, '2020-12-06 12:04:01', '2020-12-06 12:08:10'),
('FF-PR-24', 105, 1, 0, 'Ready Flat For Sale at Sector 12, Uttara', 'ready-flat-for-sale-at-sector-12-uttara', '2', 'Sale', '11,500,000', '11500000', NULL, 'Uttara, Dhaka', NULL, '47', NULL, NULL, '3', '3', '1', NULL, '1,580', '1580', '3', 'G+5', 'North', '1st', '1st', NULL, NULL, '<p>Sector 12, Uttara is offering a &nbsp;flat which covers a spacious area in the respective locality featuring airy space for pleasant living. An impressive entrance leads to the generous and airy rooms. A wonderful locality to settle with family. For your cooking needs, you would find a convenient kitchen just right next to the dining area. You would also have balconies for unwinding in your morning and evening hours.</p>\r\n\r\n<p>Call us to learn more.........</p>', 'Milestone School & College', 'Uttara Adhunik Medical College Hospital', 'House Building Bus Stand', 'Bimanbondor Railway Station', 'Hazrat Shahjalal International Airport', 'Mascot Plaza', 'Sector 12 Park', 'Sector 12 Mosque', 'Sector 12 Playground', 'Swapno', NULL, NULL, NULL, 'Lazz Pharma', NULL, 'Uttara Passport Office', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reception', NULL, 'Generator', 'Substation', 'Lift', NULL, 'Kichen Cabinet', NULL, NULL, 'CCTV', NULL, 'Guest Parking', NULL, NULL, NULL, NULL, 'ready-flat-for-sale-at-sector-12-uttara-afa298106b7924eee7320e78b94ea1bf', NULL, '', 1, 1639591200, 1, 0, 99, 0, 0, '2020-12-06 13:17:47', '2020-12-06 13:18:50'),
('FF-PR-25', 106, 1, 0, 'Ready Flat For Sale At Uttara', 'ready-flat-for-sale-at-uttara', '2', 'Sale', '5,750,000', '5750000', NULL, 'Uttara, Dhaka', NULL, '47', NULL, NULL, '2', '2', '1', NULL, '790', '790', '2', 'G+5', 'North', '5th', '5th', NULL, NULL, '<p>This beautiful location is offering a &nbsp;flat which covers a spacious area in the respective locality featuring airy space for pleasant living. An impressive entrance leads to the generous and airy rooms. A wonderful locality to settle with family.</p>\r\n\r\n<p>Call us to know more about this wonderful project.</p>', 'Milestone School & College', 'Uttara Adhunik Medical College Hospital', 'House Building Bus Stand', 'Bimanbondor Railway Station', 'Hazrat Shahjalal International Airport', 'Mascot Plaza', NULL, NULL, NULL, 'Swapno', NULL, NULL, NULL, 'Lazz Pharma', NULL, 'Uttara Passport Office', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reception', NULL, 'Generator', 'Substation', 'Lift', 'Kitchen Veranda', 'Kichen Cabinet', NULL, 'Guest Lobby', 'CCTV', NULL, 'Guest Parking', NULL, NULL, NULL, NULL, 'ready-flat-for-sale-at-uttara-f2735a800fe6b68a5117504cbec84752', NULL, '', 1, 1639764000, 1, 0, 99, 0, 0, '2020-12-06 16:11:59', '2020-12-06 16:13:25'),
('FF-PR-90', 107, 1, 0, 'Exclusive Shop For Sale At Dokkhinkhan', 'exclusive-shop-for-sale-at-dokkhinkhan', '7', 'Sale', '2,337,000', '2337000', NULL, 'Dakshinkhan, Dhaka', NULL, '14', NULL, NULL, NULL, NULL, NULL, NULL, '123', '123', NULL, NULL, 'South', '1', NULL, NULL, NULL, '<p>This is a wonderful shop located in the main point of Dakshinkhan where many people comes for shopping. There are many shops located around this project. Almost all type of products can be sold here. This shop is sure to provide one with good earning for family.</p>\r\n\r\n<p>Please contact us to know more about this peoject.</p>', 'Milestone School & College', 'Uttara Adhunik Medical College Hospital', 'House Building Bus Stand', 'Bimanbondor Railway Station', 'Hazrat Shahjalal International Airport', 'Mascot Plaza', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Generator', NULL, 'Lift', NULL, NULL, NULL, NULL, 'CCTV', NULL, NULL, NULL, NULL, NULL, NULL, 'exclusive-shop-for-sale-at-dakshinkhan-f240b62bd890bb6ca8be7fcb6de82775', NULL, '', 1, 1639591200, 1, 0, 99, 0, 0, '2020-12-07 11:07:16', '2020-12-07 12:15:39'),
('FF-PR-105', 108, 1, 0, 'Exclusive 301sft Shop For Sale At Dokkhinkhan', 'exclusive-301sft-shop-for-sale-at-dokkhinkhan', '7', 'Sale', '5,568,000', '5568000', NULL, 'Dakshinkhan, Dhaka', NULL, '14', NULL, NULL, NULL, NULL, NULL, NULL, '301', '301', NULL, NULL, 'South', '1', '1st', NULL, NULL, '<p>This is an wonderful shop whis is sure to make one a successful businessman. This project is located at the heart of Dakshinkhan. Many people living in Dakshinkhan comes here for their day to tay shopping.</p>\r\n\r\n<p>Please contact us to know more about this beautiful project.</p>', 'Milestone School & College', 'Uttara Adhunik Medical College Hospital', 'House Building Bus Stand', 'Bimanbondor Railway Station', 'Hazrat Shahjalal International Airport', 'Mascot Plaza', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reception', NULL, 'Generator', NULL, 'Lift', NULL, NULL, NULL, NULL, 'CCTV', NULL, NULL, NULL, NULL, NULL, NULL, 'exclusive-301sgt-shop-for-sale-at-dakshinkhan-f25c6ac5f918996124bfb5cb65201434', NULL, '', 1, 1639591200, 1, 0, 99, 0, 0, '2020-12-07 11:18:43', '2020-12-07 12:16:20'),
('FF-PR-81', 109, 1, 0, 'Under Construction 64sft Shop For Sale At Dokkhinkhan', 'under-construction-64sft-shop-for-sale-at-dokkhinkhan', '7', 'Sale', '1,216,000', '1216000', NULL, 'Dakshinkhan, Dhaka', NULL, '14', NULL, NULL, NULL, NULL, NULL, NULL, '64', '64', NULL, NULL, 'South', '1', NULL, NULL, NULL, '<p>This is an wonderful shop whis is sure to make one a successful businessman. This project is located at the heart of Dakshinkhan. Many people living in Dakshinkhan comes here for their day to tay shopping.</p>\r\n\r\n<p>Please contact us to know more about this beautiful project.</p>', 'Milestone School & College', 'Uttara Adhunik Medical College Hospital', 'House Building Bus Stand', 'Bimanbondor Railway Station', 'Hazrat Shahjalal International Airport', 'Mascot Plaza', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reception', NULL, 'Generator', NULL, 'Lift', NULL, NULL, NULL, NULL, 'CCTV', NULL, NULL, NULL, NULL, NULL, NULL, 'under-construction-64sft-shop-for-sale-at-dakshinkhan-ea8bf400c57f85e1fa510dcd027ce484', NULL, '', 1, 1639591200, 1, 0, 99, 0, 0, '2020-12-07 11:34:59', '2020-12-07 12:16:45'),
('FF-PR-22', 110, 1, 0, 'Ready Flat For Sale at Sector 12, Uttara', 'ready-flat-for-sale-at-sector-12-uttara', '2', 'Sale', '7,000,000', '7000000', NULL, 'H # 38, Rd 12, Sec 12,Uttara', NULL, '47', NULL, NULL, '2', '2', '1', NULL, '950', '950', '2', 'G+6', 'North', '1st', '1st', NULL, NULL, '<p>his location brings a combination of things to those who reside here. There are parks, restaurants, residences, recreational centers, shops, malls and everything you can think of, for a completely lively living experience. The transport facilities are superb and the area is developing into something that is really wonderful and will continue to become even more lucrative. Please contact us to learn more about this beautiful project.</p>', 'Milestone School & College', 'Uttara Adhunik Medical College Hospital', 'House Building Bus Stand', 'Bimanbondor Railway Station', 'Hazrat Shahjalal International Airport', 'Mascot Plaza', 'Sector 12 Park', 'Sector 12 Mosque', 'Sector 12 Playground', 'Swapno', NULL, NULL, NULL, 'Lazz Pharma', NULL, 'Uttara Passport Office', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reception', NULL, 'Generator', 'Substation', 'Lift', NULL, 'Kichen Cabinet', NULL, 'Guest Lobby', 'CCTV', NULL, 'Guest Parking', NULL, NULL, NULL, NULL, 'ready-flat-for-sale-at-sector-12-uttara-78383fd635668ffe34e22ef0ed11f6b5', NULL, '', 1, 1639591200, 1, 0, 99, 0, 0, '2020-12-07 11:47:49', '2020-12-07 11:48:16'),
('FF-PR-89', 111, 1, 0, 'Under Construction 112sft Shop For Sale At Dokkhinkhan', 'under-construction-112sft-shop-for-sale-at-dokkhinkhan', '7', 'Sale', '2,128,000', '2128000', NULL, 'Dakshinkhan, Dhaka', NULL, '14', NULL, NULL, NULL, NULL, NULL, NULL, '112', '112', NULL, NULL, 'South', NULL, '1st', NULL, NULL, '<p>This is a wonderful shop located in the main point of Dakshinkhan where many people comes for shopping. There are many shops located around this project. Almost all type of products can be sold here. This shop is sure to provide one with good earning for family.</p>\r\n\r\n<p>Please contact us to know more about this peoject.</p>', 'Milestone School & College', 'Uttara Adhunik Medical College Hospital', 'House Building Bus Stand', 'Bimanbondor Railway Station', 'Hazrat Shahjalal International Airport', 'Mascot Plaza', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reception', NULL, 'Generator', NULL, 'Lift', NULL, NULL, NULL, NULL, 'CCTV', NULL, NULL, NULL, NULL, NULL, NULL, 'under-construction-112sft-shop-for-sale-at-dakshinkhan-9fc664916bce863561527f06a96f5ff3', NULL, '', 1, 1639591200, 1, 0, 99, 0, 0, '2020-12-07 12:14:10', '2020-12-07 12:17:09'),
('FF-PR-124', 112, 1, 0, 'Under Construction 208sft Shop For Sale At Dakshinkhan', 'under-construction-208sft-shop-for-sale-at-dakshinkhan', '7', 'Sale', '3,952,000', '3952000', NULL, 'Dakshinkhan, Dhaka', NULL, '14', NULL, NULL, NULL, NULL, NULL, NULL, '208', '208', NULL, NULL, 'South', '1', '1st', NULL, NULL, '<p>This is an wonderful shop which&nbsp;is sure to make one a successful businessman. This project is located at the heart of Dakshinkhan. Many people living in Dakshinkhan comes here for their day to tay shopping.</p>\r\n\r\n<p>Please contact us to know more about this beautiful project.</p>', 'Milestone School & College', 'Uttara Adhunik Medical College Hospital', 'House Building Bus Stand', 'Bimanbondor Railway Station', 'Hazrat Shahjalal International Airport', 'Mascot Plaza', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reception', NULL, 'Generator', NULL, 'Lift', NULL, NULL, NULL, NULL, 'CCTV', NULL, NULL, NULL, NULL, NULL, NULL, 'under-construction-208sft-shop-for-sale-at-dakshinkhan-9dff9ab17beb0a69734bac543900c536', NULL, '', 1, 1639591200, 1, 0, 99, 0, 0, '2020-12-07 12:24:01', '2020-12-07 13:29:12'),
('FF-PR-123', 113, 1, 0, 'Under Construction 72sft Shop For Sale At Dakshinkhan', 'under-construction-72sft-shop-for-sale-at-dakshinkhan', '7', 'Sale', '1,368,000', '1368000', NULL, 'Dakshinkhan, Dhaka', NULL, '14', NULL, NULL, NULL, NULL, NULL, NULL, '72', '72', NULL, NULL, 'South', NULL, '1st', NULL, NULL, '<p>This is a wonderful shop located in the main point of Dakshinkhan where many people comes for shopping. There are many shops located around this project. Almost all type of products can be sold here. This shop is sure to provide one with good earning for family.</p>\r\n\r\n<p>Please contact us to know more about this peoject.</p>', 'Milestone School & College', 'Uttara Adhunik Medical College Hospital', 'House Building Bus Stand', 'Bimanbondor Railway Station', 'Hazrat Shahjalal International Airport', 'Mascot Plaza', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reception', NULL, 'Generator', NULL, 'Lift', NULL, NULL, NULL, NULL, 'CCTV', NULL, NULL, NULL, NULL, NULL, NULL, 'under-construction-72sft-shop-for-sale-at-dakshinkhan-d6acde074e0a7676545df92704c690e2', NULL, '', 1, 1639591200, 1, 0, 99, 0, 0, '2020-12-07 12:27:59', '2020-12-07 12:28:17'),
('FF-PR-150', 114, 1, 0, 'Under Construction Flat For Sale At Sector 5, Uttara', 'under-construction-flat-for-sale-at-sector-5-uttara', '2', 'Sale', '14,800,000', '14800000', NULL, 'Uttara, Dhaka', NULL, '47', NULL, NULL, '3', '3', '1', NULL, '1,850', '1850', '3', 'G+8', 'North', '3rd', '3rd', NULL, NULL, '<p>Uttara is offering a &nbsp;flat which covers a spacious area in the respective locality featuring airy space for pleasant living. An impressive entrance leads to the generous and airy rooms. A wonderful locality to settle with family. For your cooking needs, you would find a convenient kitchen just right next to the dining area.</p>', 'Milestone School & College', 'Uttara Adhunik Medical College Hospital', 'House Building Bus Stand', 'Bimanbondor Railway Station', 'Hazrat Shahjalal International Airport', 'Mascot Plaza', 'Sector 5 Park', 'Sector 5 Mosque', 'Sector 5 Playground', 'Swapno', NULL, NULL, NULL, 'Lazz Pharma', NULL, 'Uttara Passport Office', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reception', NULL, 'Generator', 'Substation', 'Lift', NULL, 'Kichen Cabinet', NULL, NULL, 'CCTV', NULL, NULL, NULL, NULL, NULL, NULL, 'under-construction-flat-for-sale-at-sector-5-uttara-535ab76633d94208236a2e829ea6d888', NULL, '', 1, 1639591200, 1, 0, 99, 0, 0, '2020-12-07 12:58:43', '2020-12-07 13:02:12'),
('FF-PR-23', 115, 1, 0, 'Ready Flat For Sale At Sector 12, Uttara', 'ready-flat-for-sale-at-sector-12-uttara', '2', 'Sale', '6,200,000', '6200000', NULL, 'Uttara, Dhaka', NULL, '47', NULL, NULL, '2', '2', '1', NULL, '810', '810', '2', 'G+6', 'South', '4th', '4th', NULL, NULL, '<p>This location brings a combination of things to those who reside here. There are parks, restaurants, residences, recreational centers, shops, malls and everything you can think of, for a completely lively living experience. The transport facilities are superb and the area is developing into something that is really wonderful and will continue to become even more lucrative.&nbsp;<br />\r\n&nbsp;</p>', 'Milestone School & College', 'Uttara Adhunik Medical College Hospital', 'House Building Bus Stand', 'Bimanbondor Railway Station', 'Hazrat Shahjalal International Airport', 'Mascot Plaza', 'Sector 12 Park', 'Sector 12 Mosque', 'Sector 12 Playground', 'Swapno', NULL, NULL, NULL, 'Lazz Pharma', NULL, 'Uttara Passport Office', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reception', NULL, 'Generator', 'Substation', 'Lift', NULL, 'Kichen Cabinet', NULL, 'Guest Lobby', 'CCTV', NULL, 'Guest Parking', NULL, NULL, NULL, NULL, 'ready-flat-for-sale-at-sector-12-uttara-e1fc9c082df6cfff8cbcfff2b5a722ef', NULL, '', 1, 1639591200, 1, 0, 99, 0, 0, '2020-12-07 13:10:51', '2020-12-07 13:11:14'),
('FF-PR-136', 116, 1, 0, 'Ready Flat For Sale At Dhanmondi', 'ready-flat-for-sale-at-dhanmondi', '2', 'Sale', '31,000,000', '31000000', NULL, 'Dhanmondi, Dhaka', NULL, '13', NULL, NULL, '3', '3', '1', NULL, '2,124', '2124', '3', 'G+6', 'North', '8th', '8th', NULL, NULL, '<p><br />\r\nThis location is becoming the new hub for residents. Its dreamy atmosphere and the convenience it provides, is soon to be unmatched by other areas in the city.&nbsp;Restaurants, houses, offices, recreational centers, shopping centers everything is available in this area.</p>\r\n\r\n<p>Contact us to know more about this beautiful property.</p>', 'Oxford School', 'Square Hospital', NULL, NULL, NULL, NULL, 'Dhanmondi Lake Park', NULL, NULL, NULL, 'KFC', NULL, NULL, 'Lazz Pharma', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reception', NULL, 'Generator', 'Substation', 'Lift', NULL, 'Kichen Cabinet', NULL, 'Guest Lobby', 'CCTV', NULL, 'Guest Parking', NULL, NULL, NULL, NULL, 'ready-flat-for-sale-at-dhanmondi-2a5e1c52752a71a87c5c2cc5d594dfc0', NULL, '', 1, 1639591200, 1, 0, 99, 0, 0, '2020-12-07 14:18:13', '2020-12-19 16:12:31'),
('FF-PR-157', 117, 1, 0, 'Under Construction Flat for Sale At Mirpur 1', 'under-construction-flat-for-sale-at-mirpur-1', '2', 'Sale', '7,000,000', '7000000', NULL, 'Mirpur, Dhaka.', NULL, '29', NULL, NULL, '4', '4', '1', NULL, '1,350', '1350', '4', 'G+5', 'South', '4th', '1st', NULL, NULL, '<p>This flat is located at a proper place of Mirpur. This project is good enough to ensure a luxurious lifestyle.&nbsp;&nbsp;A good amount of Schools, Colleges, Markets, etc. are available near this location.</p>\r\n\r\n<p>Please contact us to learn more about this beautiful property.</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reception', NULL, 'Generator', 'Substation', NULL, NULL, 'Kichen Cabinet', NULL, 'Guest Lobby', 'CCTV', NULL, 'Guest Parking', NULL, NULL, NULL, NULL, 'under-construction-flat-for-sale-at-mirpur-1-c7038df96a5325298713467d23a0ccf5', NULL, '', 1, 1639591200, 1, 0, 99, 0, 0, '2020-12-09 14:30:00', '2020-12-15 12:40:40'),
('FF-PR-161', 118, 1, 0, 'Ready Flat For Sale At Sector 10, Uttara', 'ready-flat-for-sale-at-sector-10-uttara', '2', 'Sale', '4,400,000', '4400000', NULL, 'Uttara, Dhaka', NULL, '47', NULL, NULL, '2', '2', NULL, NULL, '775', '775', '2', 'G+7', NULL, '7th', '7th', NULL, NULL, '<p>This is a very good property at an affordable price. This flat is located at sector 10, where many schools, colleges, markets, and superstores available near the property.&nbsp;</p>\r\n\r\n<p>Please contact us to learn more about this property.</p>', 'Milestone School & College', 'Uttara Adhunik Medical College Hospital', 'House Building Bus Stand', 'Bimanbondor Railway Station', 'Hazrat Shahjalal International Airport', 'Mascot Plaza', 'Sector 10 Park', 'Sector 10 Mosque', 'Sector 10 Playground', 'Swapno', NULL, NULL, NULL, 'Lazz Pharma', NULL, 'Uttara Passport Office', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reception', NULL, 'Generator', NULL, 'Lift', NULL, NULL, NULL, NULL, 'CCTV', NULL, NULL, NULL, NULL, NULL, NULL, 'ready-flat-for-sale-at-sector-10-uttara-5f1517b532a2dd760f7d865e4d4146c6', NULL, '', 1, 1639591200, 1, 0, 99, 0, 0, '2020-12-09 15:30:30', '2020-12-09 15:30:49'),
('FF-PR-159', 119, 1, 0, 'Under Construction Flat for Sale At Mirpur 1', 'under-construction-flat-for-sale-at-mirpur-1', '2', 'Sale', '3,600,000', '3600000', NULL, 'Mirpur, Dhaka.', NULL, '29', NULL, NULL, '2', '2', '1', NULL, '675', '675', '2', 'G+5', 'South', '5th', '5th', NULL, NULL, '<p>This is a very good flat for a small family. One can live here peacefully and in a quiet environment. This project is in the prime location of Mirpur.</p>\r\n\r\n<p>Call us to learn more about this project.</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reception', NULL, 'Generator', NULL, 'Lift', NULL, NULL, NULL, 'Guest Lobby', 'CCTV', NULL, 'Guest Parking', NULL, NULL, NULL, NULL, 'under-construction-flat-for-sale-at-mirpur-1-138bb0696595b338afbab333c555292a', NULL, '', 1, 1639591200, 1, 0, 99, 0, 0, '2020-12-09 15:48:11', '2020-12-15 12:30:32'),
('FF-PR-88', 120, 1, 0, 'Under Construction 196sft Shop For Sale At Dakshinkhan', 'under-construction-196sft-shop-for-sale-at-dakshinkhan', '2', 'Sale', '3,678,000', '3678000', NULL, 'Dakshinkhan, Dhaka', NULL, '14', NULL, NULL, NULL, NULL, NULL, NULL, '196', '196', NULL, 'G+9', 'South', '1', '1st', NULL, NULL, '<p>This project is located at the heart of Dakshinkhan where many people come for their day to day shopping. There are many other shops around this project. One is sure to be a successful businessman by doing business here.</p>\r\n\r\n<p>&nbsp;Please contact us to learn more about this wonderful project.</p>', 'Milestone School & College', 'Uttara Adhunik Medical College Hospital', 'House Building Bus Stand', 'Bimanbondor Railway Station', 'Hazrat Shahjalal International Airport', 'Mascot Plaza', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reception', NULL, 'Generator', NULL, 'Lift', NULL, NULL, NULL, NULL, 'CCTV', NULL, NULL, NULL, NULL, NULL, NULL, 'under-construction-196sft-shop-for-sale-at-dakshinkhan-3695d4080f70c7cb92a819fb44524314', NULL, '', 1, 1639591200, 1, 0, 99, 0, 0, '2020-12-09 16:13:37', '2020-12-09 16:13:54'),
('FF-PR-92', 121, 1, 0, 'Under Construction 108sft Shop For Sale At Dakshinkhan', 'under-construction-108sft-shop-for-sale-at-dakshinkhan', '7', 'Sale', '2,052,000', '2052000', NULL, 'Dakshinkhan, Dhaka', NULL, '14', NULL, NULL, NULL, NULL, NULL, NULL, '108', '108', NULL, 'G+8', 'South', '1', NULL, NULL, NULL, '<p>This shop is located at the proper location of Dakshinkhan. Many people come to this area for shopping. One can become a successful businessman by doing business here.</p>\r\n\r\n<p>Call us to learn more about this project.</p>', 'Milestone School & College', 'Uttara Adhunik Medical College Hospital', 'House Building Bus Stand', 'Bimanbondor Railway Station', 'Hazrat Shahjalal International Airport', 'Mascot Plaza', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reception', NULL, 'Generator', NULL, 'Lift', NULL, NULL, NULL, NULL, 'CCTV', NULL, NULL, NULL, NULL, NULL, NULL, 'under-construction-108sft-shop-for-sale-at-dakshinkhan-22b55de76e6a8c7258e4661e8343ff3e', NULL, '', 1, 1639591200, 1, 0, 99, 0, 0, '2020-12-09 16:26:46', '2020-12-09 16:27:39'),
('FF-PR-162', 122, 1, 0, 'Ready Flat For Sale at Sector 10, Uttara', 'ready-flat-for-sale-at-sector-10-uttara', '2', 'Sale', '9,500,000', '9500000', NULL, 'Uttara, Dhaka', NULL, '47', NULL, NULL, '4', '3', '1', NULL, '1,720', '1720', '4', 'G+7', NULL, '7th', '7th', NULL, NULL, '<p>This project is located at the center of Uttara where many good quality schools, colleges, shops, markets, and other facilities are available and one can live peacefully here.</p>\r\n\r\n<p>To know more please contact us.</p>', 'Milestone School & College', 'Uttara Adhunik Medical College Hospital', 'House Building Bus Stand', 'Bimanbondor Railway Station', 'Hazrat Shahjalal International Airport', 'Mascot Plaza', 'Sector 10 Park', 'Sector 10 Mosque', 'Sector 10 Playground', 'Swapno', NULL, NULL, NULL, 'Lazz Pharma', NULL, 'Uttara Passport Office', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reception', NULL, 'Generator', 'Substation', 'Lift', NULL, 'Kichen Cabinet', NULL, 'Guest Lobby', 'CCTV', NULL, 'Guest Parking', NULL, NULL, NULL, NULL, 'ready-flat-for-sale-at-sector-10-uttara-270a7713a318a6e28a801dbb4a2bfd25', NULL, '', 1, 1639591200, 1, 0, 99, 0, 0, '2020-12-09 16:34:01', '2020-12-17 12:34:20'),
('FF-PR-87', 123, 1, 0, 'Under Construction 150sft Shop For Sale At Dakshinkhan', 'under-construction-150sft-shop-for-sale-at-dakshinkhan', '7', 'Sale', '2,700,000', '2700000', NULL, 'Dakshinkhan, Dhaka', NULL, '14', NULL, NULL, NULL, NULL, NULL, NULL, '150', '150', NULL, 'G+9', 'South', '1', '1st', NULL, NULL, '<p>This project is located at the center of Dakshinkhan where many people come for shopping and buy their daily products. There are many shops around this project and people are becoming successful by doing business in this area.</p>\r\n\r\n<p>Contact us to learn more about this project.</p>', 'Milestone School & College', 'Uttara Adhunik Medical College Hospital', 'House Building Bus Stand', 'Bimanbondor Railway Station', 'Hazrat Shahjalal International Airport', 'Mascot Plaza', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reception', NULL, 'Generator', NULL, 'Lift', NULL, NULL, NULL, 'Guest Lobby', 'CCTV', NULL, 'Guest Parking', NULL, NULL, NULL, NULL, 'under-construction-150sft-shop-for-sale-at-dakshinkhan-7b830d0d8663ee0a70690c9f50bf1c85', NULL, '', 1, 1639591200, 1, 0, 99, 0, 0, '2020-12-13 16:27:35', '2020-12-13 16:28:24'),
('FF-PR-154', 124, 1, 0, 'Affordable 3 Bed Apartment in Uttara at Reasonable Price', 'affordable-3-bed-apartment-in-uttara-at-reasonable-price', '2', 'Sale', '14,000,000', '14000000', NULL, 'Sector 5, Uttara, Dhaka', NULL, '47', NULL, NULL, '3', '3', '1', NULL, '1,750', '1750', '3', 'G+8', 'South', '3rd', '3rd', NULL, NULL, '<p>Uttara is offering a &nbsp;flat that covers a spacious area in the respective locality featuring airy space for pleasant living. An impressive entrance leads to the generous and airy rooms. A wonderful locality to settle with the family. For your cooking needs, you would find a convenient kitchen just right next to the dining area. You would also have balconies for unwinding in your morning and evening hours.&nbsp;</p>\r\n\r\n<p>Please contact us to learn more about this project.</p>', 'Milestone School & College', 'Uttara Adhunik Medical College Hospital', 'House Building Bus Stand', 'Bimanbondor Railway Station', 'Hazrat Shahjalal International Airport', 'Mascot Plaza', 'Sector 5 Park', 'Sector 5 Mosque', 'Sector 5 Playground', 'Swapno', NULL, NULL, NULL, 'Lazz Pharma', NULL, 'Uttara Passport Office', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reception', NULL, 'Generator', 'Substation', 'Lift', NULL, 'Kichen Cabinet', NULL, 'Guest Lobby', 'CCTV', NULL, 'Guest Parking', NULL, NULL, NULL, NULL, 'affordable-3-bed-apartment-in-uttara-at-reasonable-price-3dc91c9313038ce8c97966f7f4194aac', NULL, '', 1, 1639591200, 1, 0, 99, 0, 0, '2020-12-15 12:49:29', '2020-12-15 13:16:56'),
('FF-PR-86', 125, 1, 0, 'This Wonderful 301sft Shop is for Sale', 'this-wonderful-301sft-shop-is-for-sale', '2', 'Sale', '5,418,000', '5418000', NULL, 'Dakshinkhan, Dhaka', NULL, '14', NULL, NULL, NULL, NULL, NULL, NULL, '301', '301', NULL, 'G+9', 'South', '1', '1st', NULL, NULL, '<p>This wonderful shop is sure to make one a successful businessman. There are many other shops around this project. Many people who live in this area come to this place for shopping.</p>\r\n\r\n<p>Call us to know more about this project.</p>', 'Milestone School & College', 'Uttara Adhunik Medical College Hospital', 'House Building Bus Stand', 'Bimanbondor Railway Station', 'Hazrat Shahjalal International Airport', 'Mascot Plaza', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reception', NULL, 'Generator', NULL, 'Lift', NULL, NULL, NULL, NULL, 'CCTV', NULL, NULL, NULL, NULL, NULL, NULL, 'this-wonderful-301sft-shop-is-for-sale-7998540c659c975a9e7826ba4efa2a0f', NULL, '', 1, 1639591200, 1, 0, 99, 0, 0, '2020-12-15 13:35:10', '2020-12-15 14:20:11'),
('FF-PR-145', 127, 1, 0, '3 Bed Apartment in Bashundhara at Reasonable Price', '3-bed-apartment-in-bashundhara-at-reasonable-price', '2', 'Sale', '10,000,000', '10000000', NULL, 'Bashundhara, Dhaka', NULL, '4', NULL, NULL, '3', '3', '1', NULL, '1,530', '1530', '3', 'G+7', 'North', '4th', '4th', NULL, NULL, '<p>This project is located at&nbsp;a wonderful location in Bashundhara. This place is perfect for spending a happy life. Many Schools, Colleges, Shopping Malls, Hospitals are available near this location.</p>\r\n\r\n<p>Please contact us to learn more about this project.</p>', 'Vikarunnesa school and College', 'Apollo Hospital', 'Bashundhara Bus Stand', 'CMH Railway Station', 'Hazrat Shahjalal International Airport', 'Jamuna Future Park', NULL, NULL, NULL, 'Swapno', NULL, NULL, NULL, 'Lazz Pharma', 'Mehedi Mart', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reception', NULL, 'Generator', 'Substation', 'Lift', NULL, 'Kichen Cabinet', NULL, 'Guest Lobby', 'CCTV', NULL, 'Guest Parking', NULL, NULL, NULL, NULL, '3-bed-apartment-in-bashundhara-at-reasonable-price-0c71f0a8c36a3212e6569e6186febd41', NULL, '', 1, 1639591200, 1, 0, 99, 0, 0, '2020-12-19 10:15:21', '2020-12-19 10:15:45'),
('FF-PR-179', 129, 1, 0, 'Amazing 760Sq. Ft Flat for sale at low price in Uttara', 'amazing-760sq-ft-flat-for-sale-at-low-price-in-uttara', '2', 'Sale', '3,700,000', '3700000', NULL, 'Uttara, Dhaka', NULL, '47', NULL, NULL, '2', '3', '1', NULL, '760', '760', '2', 'G+7', 'East', '4th/5th/6th', '4th', NULL, NULL, '<p>This wonderful project is for sale at a very low cost. Please contact us to learn more about this project.</p>', 'Milestone School & College', 'Uttara Adhunik Medical College Hospital', 'House Building Bus Stand', 'Bimanbondor Railway Station', 'Hazrat Shahjalal International Airport', 'Mascot Plaza', NULL, NULL, NULL, 'Swapno', NULL, NULL, NULL, 'Lazz Pharma', NULL, 'Uttara Passport Office', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reception', NULL, 'Generator', NULL, 'Lift', NULL, 'Kichen Cabinet', NULL, 'Guest Lobby', 'CCTV', NULL, 'Guest Parking', NULL, NULL, NULL, NULL, 'amazing-760sq-ft-flat-for-sale-in-uttara-34f9679482b481012016f1f5c8b977f0', 'amazing-760sq-ft-flat-for-sale-in-uttara-09ff22d462320a43405e7abc629f681f', '', 1, 1639591200, 1, 0, 99, 0, 0, '2020-12-28 16:37:07', '2021-01-02 10:33:20'),
('FF-PR-178', 130, 1, 0, 'Excellent Flat For Sale At Uttara', 'excellent-flat-for-sale-at-uttara', '2', 'Sale', '5,200,000', '5200000', NULL, 'Uttara, Dhaka', NULL, '47', NULL, NULL, '3', '3', '1', NULL, '1,100', '1100', '3', 'G+7', 'South', '4th/5th/6th', '4th', NULL, NULL, '<p>This Excellent flat is for sale at Uttara. Grab the chance as early as possible. Contact us for more information about this project.</p>', 'Milestone School & College', 'Uttara Adhunik Medical College Hospital', 'House Building Bus Stand', 'Bimanbondor Railway Station', 'Hazrat Shahjalal International Airport', 'Mascot Plaza', NULL, NULL, NULL, 'Swapno', 'KFC', NULL, NULL, 'Lazz Pharma', NULL, 'Uttara Passport Office', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reception', NULL, 'Generator', 'Substation', 'Lift', NULL, 'Kichen Cabinet', NULL, 'Guest Lobby', 'CCTV', NULL, 'Guest Parking', NULL, NULL, NULL, NULL, 'excellent-flat-for-sale-at-uttara-e1e5887067c9d77ee29318793ff38a28', 'excellent-flat-for-sale-at-uttara-afecc60f82be41c1b52f6705ec69e0f1', '', 1, 1640628000, 1, 0, 99, 0, 0, '2020-12-28 16:48:06', '2021-01-02 10:30:15'),
('FF-PR-175', 131, 1, 0, 'Luxurious apartment for sale at low price in Uttara', 'luxurious-apartment-for-sale-at-low-price-in-uttara', '2', 'Sale', '6,000,000', '6000000', NULL, 'Uttara, Dhaka', NULL, '47', NULL, NULL, '3', '3', '1', NULL, '1,300', '1300', '4', 'G+7', 'South', '4th/5th/6th', '4th', NULL, NULL, '<p>This luxurious flat is for sale which is located in Uttara. This flat is offered at a very low price. If you are interested, contact&nbsp;us.</p>', 'Milestone School & College', 'Uttara Adhunik Medical College Hospital', 'House Building Bus Stand', 'Bimanbondor Railway Station', 'Hazrat Shahjalal International Airport', 'Mascot Plaza', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Lazz Pharma', NULL, 'Uttara Passport Office', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reception', NULL, 'Generator', 'Substation', 'Lift', NULL, 'Kichen Cabinet', NULL, 'Guest Lobby', 'CCTV', NULL, 'Guest Parking', NULL, NULL, NULL, NULL, 'luxurious-apartment-for-sale-at-low-price-in-uttara-df7ee89b6f8ec5827a19ecbaff5d4cd2', 'luxurious-apartment-for-sale-at-low-price-in-uttara-12f743edf866f7a7ff81368543dcd1a1', '', 1, 1640800800, 1, 0, 99, 0, 0, '2020-12-28 17:00:51', '2021-01-02 10:19:48');
INSERT INTO `properties` (`product_code`, `id`, `user_id`, `featured_property`, `property_name`, `property_slug`, `property_type`, `property_purpose`, `price`, `search_price`, `rate_per_sft`, `address`, `po`, `location`, `map_latitude`, `map_longitude`, `bathrooms`, `bedrooms`, `garage`, `land_area`, `build_area`, `search_build_area`, `balcony`, `no_of_floor`, `facing`, `available_floor`, `floor`, `unit`, `loan_facility`, `description`, `nearest_school_km`, `nearest_hospital_km`, `nearest_bus_stand_km`, `nearest_railway_km`, `nearest_airport_km`, `nearest_mall_km`, `nearest_park_km`, `nearest_mosque_km`, `nearest_playground_km`, `nearest_departmental_store_km`, `nearest_restaurant_km`, `nearest_fire_service_km`, `nearest_police_station_km`, `nearest_pharmacy_km`, `nearest_grocery_bazar_km`, `nearest_govt_office_km`, `property_features`, `amenities_servent_bed`, `amenities_servent_bath`, `amenities_gym`, `amenities_front_yard`, `amenities_splash_pool`, `amenities_roof_deck`, `amenities_reception`, `amenities_rooftop_garden`, `amenities_generator`, `amenities_substation`, `amenities_lift`, `amenities_kitchen_veranda`, `amenities_kitchen_cabinet`, `amenities_corner_plot`, `amenities_guest_lobby`, `amenities_cctv`, `amenities_swimming_pool`, `amenities_guest_parking`, `amenities_laundry_room`, `amenities_bbq`, `amenities_terrace`, `amenities_sauna`, `featured_image`, `floor_plan`, `video_code`, `active_plan_id`, `property_exp_date`, `status`, `soldout`, `position_id`, `position_exp_date`, `position_status`, `created_at`, `updated_at`) VALUES
('FF-PR-176', 132, 1, 0, 'Luxurious 1700Sq. Ft flat for sale at Uttara', 'luxurious-1700sq-ft-flat-for-sale-at-uttara', '2', 'Sale', '7,700,000', '7700000', NULL, 'Uttara, Dhaka', NULL, '47', NULL, NULL, '4', '3', '1', NULL, '1,700', '1700', '4', 'G+7', 'South', '4th/5th/6th', '4th', NULL, NULL, '<p>This beautiful and luxurious apartment is for sale at a low price which is situated in Uttara. Contact us to learn more about this beautiful project.</p>', 'Milestone School & College', 'Uttara Adhunik Medical College Hospital', 'House Building Bus Stand', 'Bimanbondor Railway Station', 'Hazrat Shahjalal International Airport', 'Mascot Plaza', NULL, NULL, NULL, 'Swapno', 'KFC', NULL, NULL, 'Lazz Pharma', NULL, 'Uttara Passport Office', NULL, 'Servant Bed', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Generator', NULL, 'Lift', 'Kitchen Veranda', 'Kichen Cabinet', NULL, 'Guest Lobby', 'CCTV', NULL, 'Guest Parking', NULL, NULL, NULL, NULL, 'luxurious-1700sq-ft-flat-for-sale-at-uttara-cb0ad9132928a42f70797a828062dc5b', 'luxurious-1700sq-ft-flat-for-sale-at-uttara-7e909d0e18cec1ad8ad9076be0b669c2', '', 1, 1639591200, 1, 0, 99, 0, 0, '2020-12-28 17:25:12', '2021-01-02 10:20:58'),
('FF-PR-177', 133, 1, 0, 'Luxurious apartment for sale at an affordable price', 'luxurious-apartment-for-sale-at-an-affordable-price', '2', 'Sale', '9,400,000', '9400000', NULL, 'Uttara, Dhaka', NULL, '47', NULL, NULL, '+5', '4', '1', NULL, '2,100', '2100', '4', 'G+7', 'South', '4th/5th/6th', '4th', NULL, NULL, '<p>This beautiful apartment is for sale at a very low price. This property is located at Uttara. Please contact us to learn more about this beautiful property.</p>', 'Milestone School & College', 'Uttara Adhunik Medical College Hospital', 'House Building Bus Stand', 'Bimanbondor Railway Station', 'Hazrat Shahjalal International Airport', 'Mascot Plaza', NULL, NULL, NULL, NULL, 'KFC', NULL, NULL, 'Lazz Pharma', NULL, 'Uttara Passport Office', NULL, 'Servant Bed', NULL, NULL, NULL, NULL, NULL, 'Reception', NULL, 'Generator', 'Substation', 'Lift', 'Kitchen Veranda', 'Kichen Cabinet', NULL, 'Guest Lobby', 'CCTV', NULL, 'Guest Parking', NULL, NULL, NULL, NULL, 'luxurious-apartment-for-sale-at-an-affordable-price-7bc1ec1d9c3426357e69acd5bf320061', 'luxurious-apartment-for-sale-at-an-affordable-price-6e12399778e2dfb58420fcc6007260c6', '', 1, 1639591200, 1, 0, 99, 0, 0, '2020-12-28 17:44:15', '2021-01-02 10:22:56'),
('FF-PR-180', 134, 1, 0, 'Three bed apartment for sale at affordable price', 'three-bed-apartment-for-sale-at-affordable-price', '2', 'Sale', '3,800,000', '3800000', NULL, 'Uttara, Dhaka', NULL, '47', NULL, NULL, '2', '3', '1', NULL, '766', '766', '2', 'G+9', 'North', '4th/5th/6th', '4th', NULL, NULL, '<p>This wonderful three-bedroom apartment is for sale at a low price which is situated in Uttara. Please contact us to learn more about this wonderful project.</p>', 'Milestone School & College', 'Uttara Adhunik Medical College Hospital', 'House Building Bus Stand', 'Bimanbondor Railway Station', 'Hazrat Shahjalal International Airport', 'Mascot Plaza', NULL, NULL, NULL, 'Swapno', NULL, NULL, NULL, 'Lazz Pharma', NULL, 'Uttara Passport Office', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reception', NULL, 'Generator', 'Substation', 'Lift', 'Kitchen Veranda', 'Kichen Cabinet', NULL, 'Guest Lobby', 'CCTV', NULL, 'Guest Parking', NULL, NULL, NULL, NULL, 'three-bed-apartment-for-sale-at-affordable-price-d80b953dc038cf51d46c42c5ce477822', 'three-bed-apartment-for-sale-at-affordable-price-d3c72e9ce3e5d94a4d58cdea05d46dc3', '', 1, 1639591200, 1, 0, 99, 0, 0, '2020-12-29 11:27:53', '2021-01-02 10:38:25'),
('FF-PR-181', 135, 1, 0, 'An apartment of 746Sft for sale at Uttara', 'an-apartment-of-746sft-for-sale-at-uttara', '2', 'Sale', '3,600,000', '3600000', NULL, 'Uttara, Dhaka', NULL, '47', NULL, NULL, '2', '3', '1', NULL, '746', '746', '2', 'G+9', 'South', '4th/5th/6th', '4th', NULL, NULL, '<p>Bashundhara is offering a &nbsp;flat that covers a spacious area in the respective locality featuring airy space for pleasant living. An impressive entrance leads to the generous and airy rooms. A wonderful locality to settle with the family. For your cooking needs, you would find a convenient kitchen just right next to the dining area. You would also have balconies for unwinding in your morning and evening hours.</p>', 'Milestone School & College', 'Uttara Adhunik Medical College Hospital', 'House Building Bus Stand', 'Bimanbondor Railway Station', 'Hazrat Shahjalal International Airport', 'Mascot Plaza', NULL, NULL, NULL, 'Swapno', 'KFC', NULL, NULL, 'Lazz Pharma', NULL, 'Uttara Passport Office', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reception', NULL, 'Generator', 'Substation', NULL, 'Kitchen Veranda', 'Kichen Cabinet', NULL, 'Guest Lobby', 'CCTV', NULL, 'Guest Parking', NULL, NULL, NULL, NULL, 'an-apartment-of-746sft-for-sale-at-uttara-448ea1e596840cfabdf8e0dcdaee48f3', 'an-apartment-of-746sft-for-sale-at-uttara-71004d4eb5f021f96164c74bdcd1c0c5', '', 1, 1639591200, 1, 0, 99, 0, 0, '2020-12-29 12:02:02', '2021-01-02 10:39:41'),
('Darpan-008', 136, 1, 0, 'Excellent Flat For Sale At Khilgaon', 'excellent-flat-for-sale-at-khilgaon', '2', 'Sale', '8,100,000', '8100000', NULL, 'Khilgaon, Dhaka', NULL, '23', NULL, NULL, '3', '3', NULL, NULL, '1,245', '1245', '3', 'G+7', 'North-East', '1st', '1st', NULL, NULL, '<p>Considering a wonderful lifestyle, this is one of the best places to live. It is a wonderful and comfortable flat for a family. The flat has amazing bedrooms with modish tiled flooring. You will have a large kitchen area to have your desired cookery essentials. A great number of groceries, schools, colleges, and bus stops are also located in the nearby area.&nbsp;</p>\r\n\r\n<p>Contact us to learn more about this beautiful project.</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reception', 'Rooftop Garden', 'Generator', 'Substation', 'Lift', NULL, 'Kichen Cabinet', NULL, 'Guest Lobby', 'CCTV', NULL, NULL, NULL, NULL, NULL, NULL, 'excellent-flat-for-sale-at-khilgaon-b5932e1bc9bc30711f71a60a3d5c965c', NULL, '', 1, 1639591200, 1, 0, 99, 0, 0, '2020-12-29 17:07:26', '2021-01-02 14:40:34'),
('FF-PR-169', 137, 1, 0, 'Luxurious Flat For Sale In Bashundhara', 'luxurious-flat-for-sale-in-bashundhara', '2', 'Sale', '8,237,000', '8237000', NULL, 'Bashundhara, Dhaka', NULL, '4', NULL, NULL, '4', '4', '1', NULL, '2,142', '2142', '5', 'G+9', 'North', '4th/5th/6th', '4th', NULL, NULL, '<p>Bashundhara is offering a flat that covers a spacious area in the respective locality featuring airy space for pleasant living. An impressive entrance leads to the generous and airy rooms. A wonderful locality to settle with the family. For your cooking needs, you would find a convenient kitchen just right next to the dining area. You would also have balconies for unwinding in your morning and evening hours.</p>', 'Vikarunnesa school and College', 'Apollo Hospital', 'Bashundhara Bus Stand', 'Bimanbondor Railway Station', 'Hazrat Shahjalal International Airport', 'Jamuna Future Park', NULL, NULL, NULL, 'Swapno', 'KFC', NULL, NULL, 'Lazz Pharma', NULL, 'Uttara Passport Office', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Reception', 'Rooftop Garden', 'Generator', 'Substation', 'Lift', 'Kitchen Veranda', 'Kichen Cabinet', NULL, 'Guest Lobby', 'CCTV', NULL, 'Guest Parking', NULL, NULL, NULL, NULL, 'luxurious-flat-for-sale-in-bashundhara-ce9ef514fb19e2de83fce2499c4ed8e3', 'luxurious-flat-for-sale-in-bashundhara-5b6f6f2df2bd1f461a19c19f65161223', '', 1, 1639591200, 1, 0, 99, 0, 0, '2020-12-30 16:23:00', '2020-12-30 16:37:49');

-- --------------------------------------------------------

--
-- Table structure for table `property_gallery`
--

CREATE TABLE `property_gallery` (
  `id` int(10) UNSIGNED NOT NULL,
  `property_id` int(11) NOT NULL,
  `image_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `property_gallery`
--

INSERT INTO `property_gallery` (`id`, `property_id`, `image_name`) VALUES
(118, 18, 'floorfly-apartment_9-b.jpg'),
(117, 18, 'floorfly-apartment_3059-b.jpg'),
(116, 18, 'floorfly-apartment_7632-b.jpg'),
(115, 18, 'floorfly-apartment_6220-b.jpg'),
(114, 18, 'floorfly-apartment_2994-b.jpg'),
(113, 18, 'floorfly-apartment_2318-b.jpg'),
(112, 18, 'floorfly-apartment_8050-b.jpg'),
(84, 11, 'faruk-villa_3248-b.jpg'),
(82, 11, 'faruk-villa_7672-b.jpg'),
(83, 11, 'faruk-villa_4932-b.jpg'),
(111, 18, 'floorfly-apartment_3262-b.jpg'),
(77, 11, 'faruk-villa_7135-b.jpg'),
(78, 11, 'faruk-villa_3068-b.jpg'),
(79, 11, 'faruk-villa_8553-b.jpg'),
(80, 11, 'faruk-villa_9853-b.jpg'),
(81, 11, 'faruk-villa_8486-b.jpg'),
(123, 19, 'floorfly-apartment_28-b.jpg'),
(122, 19, 'floorfly-apartment_4184-b.jpg'),
(121, 18, 'floorfly-apartment_4246-b.jpg'),
(93, 16, 'floorfly-apartment_7316-b.jpg'),
(120, 18, 'floorfly-apartment_4455-b.jpg'),
(119, 18, 'floorfly-apartment_6513-b.jpg'),
(94, 16, 'floorfly-apartment_3620-b.jpg'),
(95, 16, 'floorfly-apartment_2749-b.jpg'),
(96, 16, 'floorfly-apartment_8605-b.jpg'),
(97, 16, 'floorfly-apartment_1922-b.jpg'),
(98, 16, 'floorfly-apartment_7318-b.jpg'),
(99, 16, 'floorfly-apartment_2955-b.jpg'),
(100, 16, 'floorfly-apartment_8452-b.jpg'),
(101, 16, 'floorfly-apartment_369-b.jpg'),
(102, 16, 'floorfly-apartment_5161-b.jpg'),
(103, 16, 'floorfly-apartment_2328-b.jpg'),
(104, 17, 'floorfly-apartment_1729-b.jpg'),
(105, 17, 'floorfly-apartment_4753-b.jpg'),
(106, 17, 'floorfly-apartment_5378-b.jpg'),
(107, 17, 'floorfly-apartment_2548-b.jpg'),
(108, 17, 'floorfly-apartment_874-b.jpg'),
(109, 17, 'floorfly-apartment_3023-b.jpg'),
(110, 17, 'floorfly-apartment_670-b.jpg'),
(124, 19, 'floorfly-apartment_8497-b.jpg'),
(125, 19, 'floorfly-apartment_6041-b.jpg'),
(126, 19, 'floorfly-apartment_3748-b.jpg'),
(127, 19, 'floorfly-apartment_5721-b.jpg'),
(128, 19, 'floorfly-apartment_3773-b.jpg'),
(129, 20, 'floorfly-apartment_6482-b.jpg'),
(130, 20, 'floorfly-apartment_8279-b.jpg'),
(131, 20, 'floorfly-apartment_5067-b.jpg'),
(132, 20, 'floorfly-apartment_5408-b.jpg'),
(133, 20, 'floorfly-apartment_776-b.jpg'),
(134, 20, 'floorfly-apartment_5624-b.jpg'),
(135, 20, 'floorfly-apartment_7101-b.jpg'),
(136, 20, 'floorfly-apartment_9804-b.jpg'),
(137, 20, 'floorfly-apartment_2820-b.jpg'),
(138, 20, 'floorfly-apartment_3049-b.jpg'),
(139, 21, 'floorfly-apartment_5761-b.jpg'),
(140, 21, 'floorfly-apartment_8808-b.jpg'),
(141, 21, 'floorfly-apartment_8982-b.jpg'),
(142, 22, 'floorfly-apartment_6733-b.jpg'),
(143, 23, 'floorfly-apartment_2565-b.jpg'),
(144, 24, 'floorfly-apartment_2117-b.jpg'),
(145, 25, 'floorfly-apartment_6129-b.jpg'),
(146, 25, 'floorfly-apartment_9608-b.jpg'),
(147, 25, 'floorfly-apartment_8932-b.jpg'),
(148, 25, 'floorfly-apartment_1399-b.jpg'),
(149, 25, 'floorfly-apartment_2712-b.jpg'),
(150, 25, 'floorfly-apartment_5515-b.jpg'),
(151, 25, 'floorfly-apartment_3814-b.jpg'),
(152, 25, 'floorfly-apartment_6795-b.jpg'),
(153, 25, 'floorfly-apartment_2648-b.jpg'),
(154, 25, 'floorfly-apartment_7297-b.jpg'),
(409, 135, 'an-apartment-of-746sft-for-sale-at-uttara_7943-b.jpg'),
(316, 26, 'exlusive-3-bed-apartment-at-uttara_6984-b.jpg'),
(311, 27, '3-bed-apartment-at-uttara_3415-b.jpg'),
(312, 27, '3-bed-apartment-at-uttara_6464-b.jpg'),
(306, 29, 'nice-3-bed-apartment-at-uttara_1083-b.jpg'),
(307, 29, 'nice-3-bed-apartment-at-uttara_7531-b.jpg'),
(303, 29, 'nice-3-bed-apartment-at-uttara_4020-b.jpg'),
(304, 29, 'nice-3-bed-apartment-at-uttara_1276-b.jpg'),
(305, 29, 'nice-3-bed-apartment-at-uttara_9655-b.jpg'),
(408, 134, 'three-bed-apartment-for-sale-at-affordable-price_2042-b.jpg'),
(297, 30, 'luxurious-4-bed-apartment-at-uttara_7483-b.jpg'),
(296, 30, 'luxurious-4-bed-apartment-at-uttara_6704-b.jpg'),
(288, 31, '3-bed-apartment-at-uttara_4638-b.jpg'),
(289, 31, '3-bed-apartment-at-uttara_3836-b.jpg'),
(290, 31, '3-bed-apartment-at-uttara_6681-b.jpg'),
(291, 31, '3-bed-apartment-at-uttara_8119-b.jpg'),
(407, 133, 'luxurious-apartment-for-sale-at-an-affordable-price_3127-b.jpg'),
(179, 32, '3-bed-apartment-in-uttara_4575-b.jpg'),
(284, 33, 'exclusive-3-bed-apartment-at-uttara_4889-b.jpg'),
(283, 33, 'exclusive-3-bed-apartment-at-uttara_4195-b.jpg'),
(277, 34, 'exclusive-3-bed-apartment-at-uttara_7092-b.jpg'),
(276, 34, 'exclusive-3-bed-apartment-at-uttara_7043-b.jpg'),
(405, 129, 'amazing-760sq-ft-flat-for-sale-at-low-price-in-uttara_932-b.jpg'),
(275, 34, 'exclusive-3-bed-apartment-at-uttara_3291-b.jpg'),
(269, 36, '3-bed-apartment-at-uttara_5707-b.jpg'),
(266, 36, '3-bed-apartment-at-uttara_6158-b.jpg'),
(267, 36, '3-bed-apartment-at-uttara_5582-b.jpg'),
(268, 36, '3-bed-apartment-at-uttara_9424-b.jpg'),
(263, 37, '3-bed-apartment-at-uttara_1951-b.jpg'),
(258, 37, '3-bed-apartment-at-uttara_7081-b.jpg'),
(259, 37, '3-bed-apartment-at-uttara_2033-b.jpg'),
(260, 37, '3-bed-apartment-at-uttara_5520-b.jpg'),
(261, 37, '3-bed-apartment-at-uttara_8851-b.jpg'),
(262, 37, '3-bed-apartment-at-uttara_7779-b.jpg'),
(404, 131, 'luxurious-apartment-for-sale-at-low-price-in-uttara_3133-b.jpg'),
(252, 40, 'exclusive-2-bed-apartment-at-mohammadpur_7424-b.jpg'),
(253, 40, 'exclusive-2-bed-apartment-at-mohammadpur_9248-b.jpg'),
(403, 130, 'excellent-flat-for-sale-at-uttara_3451-b.jpg'),
(397, 43, '3-bed-apartment-at-uttara_5650-b.jpg'),
(406, 132, 'luxurious-1700sq-ft-flat-for-sale-at-uttara_3307-b.jpg'),
(400, 104, 'ready-flat-for-sale-at-baridhara_6806-b.jpg'),
(240, 48, 'luxurious-3-bed-apartment-at-bashundhara_5001-b.jpg'),
(232, 49, 'exclusive-3-bed-apartment-at-bashundhara_1447-b.jpg'),
(233, 49, 'exclusive-3-bed-apartment-at-bashundhara_6591-b.jpg'),
(230, 49, 'exclusive-3-bed-apartment-at-bashundhara_8314-b.jpg'),
(235, 49, 'exclusive-3-bed-apartment-at-bashundhara_2509-b.jpg'),
(231, 49, 'exclusive-3-bed-apartment-at-bashundhara_9304-b.jpg'),
(234, 49, 'exclusive-3-bed-apartment-at-bashundhara_930-b.jpg'),
(236, 49, 'exclusive-3-bed-apartment-at-bashundhara_9786-b.jpg'),
(237, 49, 'exclusive-3-bed-apartment-at-bashundhara_5254-b.jpg'),
(238, 49, 'exclusive-3-bed-apartment-at-bashundhara_6576-b.jpg'),
(239, 49, 'exclusive-3-bed-apartment-at-bashundhara_8337-b.jpg'),
(241, 48, 'luxurious-3-bed-apartment-at-bashundhara_8353-b.jpg'),
(242, 48, 'luxurious-3-bed-apartment-at-bashundhara_3497-b.jpg'),
(399, 66, 'ready-office-at-dhanmondi_3224-b.jpg'),
(398, 66, 'ready-office-at-dhanmondi_8326-b.jpg'),
(245, 46, '3-bed-apartment-at-dakkhin-khan_336-b.jpg'),
(246, 45, '3-bed-apartment-at-uttara_7786-b.jpg'),
(247, 45, '3-bed-apartment-at-uttara_6373-b.jpg'),
(248, 44, 'beautiful-194-sqft-shop-is-available-for-sale-at-dakkhin-khan_2854-b.jpg'),
(249, 43, '3-bed-apartment-at-uttara_7843-b.jpg'),
(250, 43, '3-bed-apartment-at-uttara_7768-b.jpg'),
(251, 41, '3-bed-apartment-at-uttara_8411-b.jpg'),
(254, 40, 'exclusive-2-bed-apartment-at-mohammadpur_5761-b.jpg'),
(255, 40, 'exclusive-2-bed-apartment-at-mohammadpur_7596-b.jpg'),
(256, 39, '3-bed-apartment-at-uttara_7173-b.jpg'),
(257, 39, '3-bed-apartment-at-uttara_6688-b.jpg'),
(264, 37, '3-bed-apartment-at-uttara_2761-b.jpg'),
(265, 37, '3-bed-apartment-at-uttara_172-b.jpg'),
(270, 36, '3-bed-apartment-at-uttara_3957-b.jpg'),
(271, 36, '3-bed-apartment-at-uttara_5994-b.jpg'),
(272, 35, 'luxurious-3-bed-apartment-at-uttara_7771-b.jpg'),
(273, 35, 'luxurious-3-bed-apartment-at-uttara_2315-b.jpg'),
(274, 35, 'luxurious-3-bed-apartment-at-uttara_5685-b.jpg'),
(278, 34, 'exclusive-3-bed-apartment-at-uttara_8722-b.jpg'),
(279, 34, 'exclusive-3-bed-apartment-at-uttara_9526-b.jpg'),
(280, 34, 'exclusive-3-bed-apartment-at-uttara_9373-b.jpg'),
(281, 34, 'exclusive-3-bed-apartment-at-uttara_3362-b.jpg'),
(282, 34, 'exclusive-3-bed-apartment-at-uttara_4976-b.jpg'),
(285, 33, 'exclusive-3-bed-apartment-at-uttara_9876-b.jpg'),
(286, 33, 'exclusive-3-bed-apartment-at-uttara_4698-b.jpg'),
(287, 32, '3-bed-apartment-at-dakkhin-khan_6445-b.jpg'),
(292, 31, '3-bed-apartment-at-uttara_792-b.jpg'),
(293, 31, '3-bed-apartment-at-uttara_169-b.jpg'),
(294, 31, '3-bed-apartment-at-uttara_4426-b.jpg'),
(295, 31, '3-bed-apartment-at-uttara_7430-b.jpg'),
(298, 30, 'luxurious-4-bed-apartment-at-uttara_7691-b.jpg'),
(299, 30, 'luxurious-4-bed-apartment-at-uttara_1793-b.jpg'),
(300, 30, 'luxurious-4-bed-apartment-at-uttara_3910-b.jpg'),
(301, 30, 'luxurious-4-bed-apartment-at-uttara_6967-b.jpg'),
(302, 30, 'luxurious-4-bed-apartment-at-uttara_6436-b.jpg'),
(308, 29, 'nice-3-bed-apartment-at-uttara_2407-b.jpg'),
(309, 29, 'nice-3-bed-apartment-at-uttara_3280-b.jpg'),
(310, 29, 'nice-3-bed-apartment-at-uttara_355-b.jpg'),
(313, 27, '3-bed-apartment-at-uttara_3306-b.jpg'),
(314, 27, '3-bed-apartment-at-uttara_8723-b.jpg'),
(315, 27, '3-bed-apartment-at-uttara_3739-b.jpg'),
(317, 26, 'exlusive-3-bed-apartment-at-uttara_3604-b.jpg'),
(318, 26, 'exlusive-3-bed-apartment-at-uttara_2341-b.jpg'),
(319, 50, 'luxurious-3-bed-apartment-at-bashundhara_4292-b.jpg'),
(320, 50, 'luxurious-3-bed-apartment-at-bashundhara_8534-b.jpg'),
(321, 50, 'luxurious-3-bed-apartment-at-bashundhara_8544-b.jpg'),
(322, 50, 'luxurious-3-bed-apartment-at-bashundhara_9582-b.jpg'),
(323, 50, 'luxurious-3-bed-apartment-at-bashundhara_1639-b.jpg'),
(324, 50, 'luxurious-3-bed-apartment-at-bashundhara_3181-b.jpg'),
(325, 50, 'luxurious-3-bed-apartment-at-bashundhara_9038-b.jpg'),
(326, 51, '3-bed-apartment-at-link-road-badda_6403-b.jpg'),
(327, 51, '3-bed-apartment-at-link-road-badda_4064-b.jpg'),
(328, 51, '3-bed-apartment-at-link-road-badda_1507-b.jpg'),
(329, 51, '3-bed-apartment-at-link-road-badda_2661-b.jpg'),
(330, 51, '3-bed-apartment-at-link-road-badda_4971-b.jpg'),
(331, 51, '3-bed-apartment-at-link-road-badda_5348-b.jpg'),
(332, 51, '3-bed-apartment-at-link-road-badda_593-b.jpg'),
(333, 51, '3-bed-apartment-at-link-road-badda_9777-b.jpg'),
(334, 52, '3-bed-apartment-at-uttara_7837-b.jpg'),
(335, 52, '3-bed-apartment-at-uttara_9632-b.jpg'),
(336, 52, '3-bed-apartment-at-uttara_6816-b.jpg'),
(337, 52, '3-bed-apartment-at-uttara_8479-b.jpg'),
(338, 52, '3-bed-apartment-at-uttara_7832-b.jpg'),
(339, 53, 'wonderful-2000-sft-commercial-space-for-sale-at-uttara_7849-b.jpg'),
(340, 53, 'wonderful-2000-sft-commercial-space-for-sale-at-uttara_3739-b.jpg'),
(341, 53, 'wonderful-2000-sft-commercial-space-for-sale-at-uttara_1848-b.jpg'),
(342, 53, 'wonderful-2000-sft-commercial-space-for-sale-at-uttara_3625-b.jpg'),
(343, 53, 'wonderful-2000-sft-commercial-space-for-sale-at-uttara_3126-b.jpg'),
(344, 53, 'wonderful-2000-sft-commercial-space-for-sale-at-uttara_6386-b.jpg'),
(345, 53, 'wonderful-2000-sft-commercial-space-for-sale-at-uttara_9282-b.jpg'),
(346, 53, 'wonderful-2000-sft-commercial-space-for-sale-at-uttara_7492-b.jpg'),
(347, 54, 'luxurious-apartment-is-up-for-sale-in-dhanmondi_1003-b.jpg'),
(348, 54, 'luxurious-apartment-is-up-for-sale-in-dhanmondi_5367-b.jpg'),
(349, 54, 'luxurious-apartment-is-up-for-sale-in-dhanmondi_2708-b.jpg'),
(350, 54, 'luxurious-apartment-is-up-for-sale-in-dhanmondi_903-b.jpg'),
(351, 54, 'luxurious-apartment-is-up-for-sale-in-dhanmondi_6788-b.jpg'),
(352, 54, 'luxurious-apartment-is-up-for-sale-in-dhanmondi_7198-b.jpg'),
(353, 54, 'luxurious-apartment-is-up-for-sale-in-dhanmondi_912-b.jpg'),
(354, 54, 'luxurious-apartment-is-up-for-sale-in-dhanmondi_277-b.jpg'),
(379, 56, 'exclusive-3-bed-apartment-at-bashundhara-i-block_9636-b.jpg'),
(380, 56, 'exclusive-3-bed-apartment-at-bashundhara-i-block_7215-b.jpg'),
(375, 56, 'exclusive-3-bed-apartment-at-bashundhara-i-block_6663-b.jpg'),
(376, 56, 'exclusive-3-bed-apartment-at-bashundhara-i-block_3276-b.jpg'),
(377, 56, 'exclusive-3-bed-apartment-at-bashundhara-i-block_6719-b.jpg'),
(369, 55, 'luxurious-apartment-is-up-for-sale-in-nurechala-vatara-gulshan_154-b.jpg'),
(361, 55, 'luxurious-apartment-is-up-for-sale-in-nurechala-vatara-gulshan_1602-b.jpg'),
(378, 56, 'exclusive-3-bed-apartment-at-bashundhara-i-block_7130-b.jpg'),
(370, 55, 'luxurious-apartment-is-up-for-sale-in-nurechala-vatara-gulshan_2510-b.jpg'),
(371, 55, 'luxurious-apartment-is-up-for-sale-in-nurechala-vatara-gulshan_6600-b.jpg'),
(372, 55, 'luxurious-apartment-is-up-for-sale-in-nurechala-vatara-gulshan_8400-b.jpg'),
(373, 55, 'luxurious-apartment-is-up-for-sale-in-nurechala-vatara-gulshan_2421-b.jpg'),
(374, 55, 'luxurious-apartment-is-up-for-sale-in-nurechala-vatara-gulshan_2593-b.jpg'),
(381, 56, 'exclusive-3-bed-apartment-at-bashundhara-i-block_6905-b.jpg'),
(382, 56, 'exclusive-3-bed-apartment-at-bashundhara-i-block_4493-b.jpg'),
(383, 56, 'exclusive-3-bed-apartment-at-bashundhara-i-block_6767-b.jpg'),
(384, 56, 'exclusive-3-bed-apartment-at-bashundhara-i-block_350-b.jpg'),
(385, 56, 'exclusive-3-bed-apartment-at-bashundhara-i-block_5370-b.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `property_purposes`
--

CREATE TABLE `property_purposes` (
  `id` int(10) UNSIGNED NOT NULL,
  `purpose` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `property_types`
--

CREATE TABLE `property_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `types` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `property_types`
--

INSERT INTO `property_types` (`id`, `types`, `slug`) VALUES
(2, 'Apartments/Flats', 'apartments'),
(3, 'Condos', 'condos'),
(5, 'Land', 'land'),
(7, 'Commercial Project', 'commercial-project');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) NOT NULL,
  `service_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `service_description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `service_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `service_phone` int(11) DEFAULT NULL,
  `category_id` int(10) NOT NULL,
  `subcategory_id` int(10) DEFAULT NULL,
  `childcategory_id` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `service_cost` int(10) DEFAULT NULL,
  `status` int(11) DEFAULT 1,
  `user_id` int(10) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_name`, `slug`, `service_description`, `service_image`, `service_phone`, `category_id`, `subcategory_id`, `childcategory_id`, `service_cost`, `status`, `user_id`, `created_at`, `updated_at`) VALUES
(16, 'Marketing', 'marketing', '<p><strong>Project Based Solution:</strong> Floorfly can assist you in project based marketing support through print media, electronic media and digital media including design. If your apartment project is worth of BDT 8-9 crore then from green land to handover we can come up with an estimated budget for marketing which will be sales driven only. Each project&rsquo;s marketing budget comes with a gnat chart which gives you freedom and analytical ability to measure and justify the cost.</p>\r\n\r\n<p><br />\r\nফ্লোরফ্লাই আপনাকে প্রিন্ট মিডিয়া, ইলেকট্রনিক মিডিয়া এবং ডিজাইন সহ ডিজিটাল মিডিয়ার মাধ্যমে প্রকল্প ভিত্তিক বিপণন কার্যে সহায়তা করতে পারে। যদি আপনার অ্যাপার্টমেন্ট প্রকল্পটির মূল্য ৮-৯ কোটি টাকা হয় তবে গ্রীন ফিল্ড থেকে হ্যান্ডওভার পর্যন্ত আমরা বিপণনের জন্য একটি আনুমানিক বাজেট নিয়ে আসতে পারি যা কেবল বিক্রয়ের লক্ষ্যে পরিচালিত হবে। প্রতিটি প্রকল্পের বিপণন বাজেট একটি গ্যাং চার্ট সহ প্রেজেন্ট করা হয় যা আপনাকে ব্যয় পরিমাপ ও যাচাই করার জন্য স্বাধীনতা এবং বিশ্লেষণযোগ্য ক্ষমতা দেয়।</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Target Based Solution:</strong> Any company may come up with target based solution provided by floorfly. The service is basically a custom solution which ensures the targeted product for targeted sales. Floorfly may brought under contract to sell a single apartment or the whole project. &nbsp;</p>\r\n\r\n<p>যে কোনও কোম্পানি ফ্লোর ফ্লাই এর সাহায্যে টার্গেট ভিত্তিক সমাধান পেতে পারে। পরিষেবাটি মূলত একটি কাস্টম সমাধান যা নির্দিস্ট বিক্রয়ের জন্য নির্দিস্ট পণ্য নিশ্চিত করে। ফ্লোরফ্লাই কোনও একক অ্যাপার্টমেন্ট বা পুরো প্রকল্প বিক্রির চুক্তির জন্য একটি নির্ভরযোগ্য প্রতিষ্ঠান।</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Dedicated Marketing Partner:</strong> A company can take privileges and advantages of floorfly&rsquo;s advanced marketing techniques and over the years&rsquo; experience. Floorfly can assist you in building your brand or enhance your brand image, market survey, price survey, proposed price of the project etc.</p>\r\n\r\n<p>floorfly can market your product to its right audience with minimum cost and sell your products, so as a builder you concentrate on innovative architectural designs while you engage floorfly for A-Z marketing. A company can save Lakhs and Crores by not investing in sales &amp; marketing people.&nbsp;</p>\r\n\r\n<p>একটি কোম্পানি ফ্লোরফ্লাইয়ের উন্নত বিপণন কৌশলগুলির সুবিধা এবং দীর্ঘ সময়ের অভিজ্ঞতা অর্জন কাজে লাগাতে পারে। ফ্লোরফ্লাই আপনাকে আপনার ব্র্যান্ড তৈরি করতে বা আপনার ব্র্যান্ডের মান বাড়াতে, বাজার সমীক্ষা, মূল্য জরিপ, প্রকল্পের প্রস্তাবিত দাম ইত্যাদি বাড়িয়ে তুলতে সহায়তা করতে পারে।</p>\r\n\r\n<p>ফ্লোরফ্লাই আপনার পণ্যটি ন্যূনতম ব্যয়ের সাথে তার সঠিক ক্রেতার কাছে পৌঁছে দিতে পারে এবং আপনার পণ্যগুলি বিক্রয় করতে পারে, তাই আপনি একজন বিল্ডার হিসেবেই কাজ করুন এবং আপনার A-Z বিপণনের কাজের জন্য ফ্লোরফ্লাই নিযুক্ত থাকাকালীন উদ্ভাবনী আর্কিটেকচারাল ডিজাইনের উপর মনোনিবেশ করুন। কোনও সংস্থা বিক্রয় ও বিপণনের লোকদের বিনিয়োগ না করে লক্ষ কোটি টাকা বাঁচাতে পারে।&nbsp;</p>', '/public/uploads/services/1599717413marketing.jpg', 1917003909, 2, 3, '1', NULL, 1, 1, '2020-08-16 20:46:08', '2021-01-04 12:02:00'),
(17, 'Property Sale', 'property-sale', '<p>For any kind of authentic property sales you need the following papers ready:</p>\r\n\r\n<p><strong>For leasehold properties:</strong></p>\r\n\r\n<ol>\r\n	<li>Allotment letter</li>\r\n	<li>Lease deed</li>\r\n	<li>Possession letter</li>\r\n	<li>Mutation by relevant agency (if first allotee)</li>\r\n	<li>Sales deeds (if land has changed hands)</li>\r\n	<li>Permission from relevant agency to sell land (if land has changed hands)</li>\r\n	<li>Mutation by land office</li>\r\n	<li>Tax receipt and DCR or duplicate carbon copy of receipt</li>\r\n</ol>\r\n\r\n<p><strong>For freehold properties:</strong></p>\r\n\r\n<ol>\r\n	<li>Title deed if the seller is land owner through purchase</li>\r\n	<li>Documents of the person from whom the seller purchased the land, or relevant documents if the land is acquired in any other manner</li>\r\n	<li>Documents relating to how ever many times the land changed hands over a minimum of 25 years or after the last survey</li>\r\n	<li>Record of rights</li>\r\n	<li>Tax receipt and DCR or duplicate carbon copy of receipt</li>\r\n	<li>Partition deed</li>\r\n</ol>\r\n\r\n<p><strong>Other documents:</strong></p>\r\n\r\n<ol>\r\n	<li>Documents to verify payment of gas bills, water bills, electricity bills, etc.</li>\r\n	<li>Relevant deeds, decrees, documents, etc where relevant</li>\r\n	<li>The approved design of the house, building or flat being purchased (and whether the plans have been followed in the construction)</li>\r\n	<li>If the seller owns the land through inheritance, the inheritance certificates, partition deeds and ownership deeds of the antecedents is must.</li>\r\n	<li>In the case of&nbsp;<strong>jointly owned property</strong>, all owners signed the deed.</li>\r\n</ol>', '/public/uploads/services/1599717460property-sale.jpg', 1917003909, 2, 4, 'Select Child Category', NULL, 1, 1, '2020-08-16 20:54:29', '2020-09-10 15:57:40'),
(18, 'Property Buy', 'property-buy', '<p>If you are an individual or a company you may appoint floorfly. If you have a targeted area for any kind of property purchase, we have a team to assist you. We ensure a hassle free, easy registration process.</p>', '/public/uploads/services/1599717613property-buying.jpg', 1917003909, 2, 5, 'Select Child Category', NULL, 1, 1, '2020-08-16 20:57:40', '2020-09-10 16:00:13'),
(19, 'Special Requirement', 'special-requirement', '<p>If you have any special requirement for any property related purchase, sale or any kind of service, please fill up the form or you may directly contact us on +880 1917003909</p>', '/public/uploads/services/16097401811599717692special-requirement.jpg', 1917003909, 2, 6, '1', NULL, 1, 1, '2020-08-16 21:01:19', '2021-01-04 12:03:01'),
(20, 'AC Repair and Servicing', 'ac-repair-and-servicing', '<p>FloorFly provides the best AC repair service in Bangladesh. We also provide ac cleaning service in Dhaka. Our professional technicians will provide you with the best AC repairing service. If you need ac service in Dhaka at an affordable cost, you can contact us at any time.</p>\r\n\r\n<p>Our Services:</p>\r\n\r\n<ol>\r\n	<li>AC Basic Services</li>\r\n	<li>AC Installation</li>\r\n	<li>AC Repairing Service</li>\r\n	<li>AC Gas Change</li>\r\n	<li>AC Shifting</li>\r\n	<li>AC Gas Change</li>\r\n</ol>', '/public/uploads/services/1606370457Ac-Servicing-&-Repairing (1).jpg', 1917003909, 1, 2, '10', 2000, 1, 1, '2020-10-18 17:33:03', '2020-11-26 12:00:57'),
(21, 'Water Tank or Reservoir Cleaning', 'water-tank-or-reservoir-cleaning', '<p>Water Tank / Reservoir Cleaning Call now : +8801917003909</p>', '/public/uploads/services/1603021008bannar-10.png', 1917003909, 1, 2, '22', 3000, 1, 1, '2020-10-18 17:36:48', '2020-10-18 17:36:48'),
(22, 'Project Design Services', 'project-design-services', '<p>Floorfly has partnered with one of the best Design Firm in the world!!</p>\r\n\r\n<p><img alt=\"logo\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOcAAAA4CAMAAAFGRS9+AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAKdUExURQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAKYr0DEAAADfdFJOUwDWgsMub7Ab8VwI3kmKyzZ3uCP5ZKUQ5lGS0z7AK2ytGO5ZmgXbRofIM3S1IPZhog3jTo/QO3y9/mmq61YC2EOExTCyHfNenwrgjM04ebol+6cS6NVAgcItbhrwW5wH3YnKNXa3+GMP5VCR0j0qa6wX7VgE2kWGxzJztB/1oQziTY7POnv9aKkUVQHXQsQvcLEc8l2eCd9Ki8w3eLkk+mWmEedSk9Q/gMEsba7vWpsG3EfJNHW2Ifdiow7kkNE8vin/ahbsV5gD2USFxjFysx70C+FMjc45ersm/GeoVJV4DovpAAAACXBIWXMAACHVAAAh1QEEnLSdAAAJK0lEQVRYR+2Zi5+UVRnHD2IpdFEhkbQLroutl0WhpSZ0vBSYgMGKFsYqXtc1k3JdzAxTSwdpkaQh7WINSrlaUkBFq6soDyuul/JCaDoGf0u/5/Ke97wz887M3mpKvp+Z8z7nOZff+8yc95zzvq+rAdlRDcv16QF5ij5sgy2SBd3sycyi/A20HD5U0Ip2iEo7UMr9SJF7CA2DUrafkybK7yTlUsUbBhfWxFdZwZbl4oC+RzPQzU3EpXYyRD3y4drmikszzkqXxqXSEXx2iEvBG5V6XsotuLYdPaiUOMas8K5kGfozy6i/aRlEzxDdQ7SaaBpRK9F2a0rUAoPoNk5XN9EDEsV6SWcSrZSeM8T/YJ46kGII+Kb4oBqAQTRfcupDil8CR22aofOIJncnm+qnj05yfEIlTUPgq0lKnZpNe3HiBbNHRbmS99xHbWYJZTXrb9rnR7dRf9My+C/DkAdzJZX/A2CUcFPxPB35ib4pKVG/NF2MoUHUJr6rtYr4ixl2dnRSvzqJ7pRBB4M7kNMjujsqtI/4B6HKNov8VTwHknXkuDf04RM09cBTs6kSqzKICJ5KTQ8PffiI//St3DQ7xSTx+a6vgI81xUfLNeWmuA6+RW03suef3h8YXCegzOEZsGNqnfSmhqpWoq6mZjKpHQV0HQRmG/ehWeo45T5L5sAk9Yhiyimt1HiiNZH+shMz90ruzCcL9In5bA0B1/svuhF2UjS7q3OSF81e1U0TDoi/9yT4LrkVlrR1bkf7hGazJd12fPFyqSmiSpq9NymaESfT5q40CytO3OAoMXt41jV6Ej0DNbinWRepXUB6rPkvlUNClO0VbhdSm7WsD3znuVOQPiz5nt9wqmUqqrYsNpoVUUwTbOeRdpgfax4OZaKD+vPqEqiIH+x80IQwm3Ajsa03TusWffPvQBQBeyqJuoNmPSZV6hX9mdosut38KrpsCRBFwB4TtUqOiw/H92TrjpN6RcVWmgN7YvnPq6ioMZmTfZ1Iloi7J/gZqoq6HOd4wTM/u5FJXjKcWd6FBJcMb2CZF5x7x8zztUaPG0Sa4aRcNA2tNhrQwcxh9jN6UWzMlMXmqM1+YOaIye59Zf/XcQk1Ar9C9L81OxVe2F422+BfzcwyvlKtENSlyX38xWyjWrfvF835fcDsSoyHZi3+e5pNU1/Kcq5385W05V4xscZn3e6tW5bBTmpuzr065DX/1kKtZ2wT/ye3w/ckGvfqNqF3Q/Fa2yyo49T2X0jXoskd0DXOLRADOPc60ovFXlSiKU7ekaDW5yQDms0P3rMx9KDkZLp3s5HoDoI3wKypbHUfNovoOtE0kpqPik9wWTOAe8wMmKoptiKaytXoQjRbeB2ylcRs0Vx8ltgJzcc503YXp24Tp4t5v6ISWjPQzOGWnG3WzNwmKxe6YM15VpeTOWaz5gK1t0kaaT7CGavEt0cTdCfVLA51x5rvuevFZs0L3M1iR2NI63JyU6CJhZHtyZJGmp/mTNDgo7qEyLrNW1QQa85xZ4vNmie4ZWKPgaYhmuCOTf9BzZ1m0Btjo8m7vz+rZKqmm3ucmWOjGVLh/4zZIe4x0eQd5Y+014TmVCTQfA3FzVzHyUgONKfXpfkxd4TYrFlUf1bS6P/8PmeswRIkuKD4upYx5NxqTmPNY2Q3XE3zBk4V0TS0NNL8vfgEd64ZQK7PI7nvUNOoojmfU2GHaPK2HiQ1g74Sth2Baf5RMkIVTXcBH8BrOse/cAtnLirR5K20PmlyboB/VpDByhKZfp9QRHpcpf8zDRtDw+PO8o0la7abXYsRaSY4WoL6AtKJ5qnF6DV/iR6UW8xTi9FrxourOWoyek33U1WkT1m+JtNwv3KY2SPmstv3f+dcsxNsXqR8w/LjzCaT848M6uV+a7hI9nHDh2cFBjPD6JA7csZPH5WQCRgM+4GazDRM1Ud86RyKc5gcijNkxHGOlkNxDpP/mTi/ZtsoelhLen5geaVlmnh5ZWUudrujZ3p8Q181zqao52tL4lwlN7Ke623N2GN5Q15VJK5Pv0XdqI8ZGPhlrwvcEG+9maJ/gBPFuc+OzC74h9ZbJqAL/ijOJbyXjPgJCtLjPN8KGLkrBxznrWYH7ITbd+TpQPxhnMHemc6wYxjn5+3IfEROIY4zwYBzp5mZYCiOM8Gx6Cg1Tnk+XwriXGVmgs/EdweXtF0qDzfAHxJxhq8gYoI4Q060s4jibMX+f0Y0vg64X5tFV6COvAxhngrixIi4OfpPeaueGqc8TGLORiY6c8Qpt3ig+Dr8cyyDn9KMefBeYzaupCBOv3U+DVXk5pQJ4lwPf5PZdAQyIDEPRXHOiseUDHC7RaO34jhl97vBMnwznhrnt81Pg8h8yWzE2W2m3qpHF/vKKM4NcPZeqCCGIE4/QKajityFMUGcfM5yR8bY246UOP1fiLv9OM6OkjjlbRNTLU7/i3Oc8Tzkby4WrmX4QQGjj2mUh15s2s0vOJlKcc6Bv1KcJ8DfMHFWvsoScRqz30bD/784h543M+aVBoozlVpxLtwTYuN0zcsPbOy3CkT94xanvAtnxi1OPz4TjwyTrItCHbc4v2oWyc35HZZ5pyTOP1mm6rjV9xeA44xeCSPOaGeCSRxEC87kPjP2sPctyyTi9GvQWtSQp+/MyOKUl9FM9z8GLos2MfwSJoqTnl+z7lkzZTFOjfOz5qcJ73adaq/NOc7DzKR5U8685xyzaeWPzViIpqvshO5KxKmvbkBm9vrZ0SmPMM74HVFAEVV8nCHnoSA1zqPMnwBx+jNJ0Fs+3xIdnYhTX0mVMsI43VqzY2ZyFT9unzMDLODJIzVO96IVgCe6zECc7k3/gs6Tw9n6YenhbWUQp1tpJuM7rxHnB/PKzzlzpGUmSZGbtK+/kEPsufbO/FX6xjG8Pgd/ODVHmcKHeN+GTaO1zX9Asgke6c9lMoU81sEBq/SqFixd3ioKmWKhf8GX+cUns+b4/nYZ4JlcobXlXfHdbg3zOiG/vfGs/EsfnxHMQ3CeY1Xmwn7U7PwUqT9sEvNQAxDF+Yzlx4pGiJOfuIPCKduG1kVT/kErGysaIc4L7RxC7DIcMxpi3E63k/Dk+JIcUxrk+jz5mHiy7rzui+Z9X+PcvwHl2LW1JJijDAAAAABJRU5ErkJggg==\" style=\"float:left; height:24px; width:101px\" /></p>\r\n\r\n<p><br />\r\n&nbsp;</p>\r\n\r\n<p>WE DON&rsquo;T DESIGN WHAT</p>\r\n\r\n<p>THEY WANT, WE DESIGN</p>\r\n\r\n<p>WHAT THEY DON&rsquo;T EXPECT,</p>\r\n\r\n<p>WHAT THEY HAVE NEVER IMAGINED.</p>\r\n\r\n<p>WE FACE THE IDEATION</p>\r\n\r\n<p>WITH A SPIRIT ALWAYS NEW,</p>\r\n\r\n<p>WITH NO LIMITS BUT THOSE</p>\r\n\r\n<p>OF OUR EXPERIENCE,</p>\r\n\r\n<p>WE DON&rsquo;T EXCLUDE ANY ALTERNATIVE</p>\r\n\r\n<p>AND MOST OF THE TIMES</p>\r\n\r\n<p>WE MAKE GOOD DISCOVERIES.</p>\r\n\r\n<h1>UNEXPECTED</h1>\r\n\r\n<p>Our clients know we don&rsquo;t necessarily design what they have in mind. We design what they don&rsquo;t expect, what they would never have imagined. We approach creative thinking with the mind of a child, without limits, except for those we have verified through experience. All alternatives are worth consideration and in this way we often make some very interesting discoveries.</p>\r\n\r\n<h1>DETAILS</h1>\r\n\r\n<p>In order for a person to perceive space and understand it, he or she must open to a myriad of stimuli and information that is then filtered through his or her own cultural awareness. Detail comes from the basic elements of this inner &ldquo;dialogue&rdquo;.</p>\r\n\r\n<h1>IRONY</h1>\r\n\r\n<p>We know from experience that one definite and univocal solution will never satisfy what is needed to create something unforgettable. That&rsquo;s why we like weightlessness; in architecture it is synonymous of openness and diversity. Providing different interpretations for one object or place means favouring thought, imagination and the best solution.</p>\r\n\r\n<h1>AMBIANCE</h1>\r\n\r\n<p>Architectural space becomes real when an idea is &ldquo;contaminated&rdquo; by the ambiance for which the project is being developed. That is why trying to describe a project in words inevitably betrays its profound nature and complexity. It&rsquo;s the difference between a house and a museum.</p>\r\n\r\n<p><strong>Let Hop! Design be your guide, from project to communication, from research of normative laws to choice of materials and colours, from overall structure to the finest detail.<br />\r\nHop! Design: a solid group of diversified professionals who can take your project from an abstract idea to the real thing, IN STYLE.</strong><br />\r\n&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"2\" cellspacing=\"10\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><img src=\"https://floorfly.com/upload/Kazi-Manzur-Ahmed-.png\" style=\"height:267px; width:200px\" /></p>\r\n\r\n			<p><strong>Kazi Manzur Ahmed </strong></p>\r\n\r\n			<p>Chairman and Founder (FloorFly)</p>\r\n			</td>\r\n			<td>\r\n			<p><img src=\"https://www.hopdesign.com/wp-content/uploads/2019/01/Paolo-Tosi-2-uai-720x960.jpg\" style=\"height:267px; width:200px\" /></p>\r\n\r\n			<h3><strong>Paolo Tosi</strong></h3>\r\n\r\n			<p>Chairman and Founder (Hop Design)</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><img src=\"https://www.hopdesign.com/wp-content/uploads/2019/01/Marta-1-uai-720x960.jpg\" style=\"height:267px; width:200px\" /></p>\r\n\r\n			<h3><strong>Marta Gervasoni</strong></h3>\r\n\r\n			<p>Architect</p>\r\n			</td>\r\n			<td>\r\n			<p><img src=\"https://www.hopdesign.com/wp-content/uploads/2019/01/Paolo-Vincini-1-uai-720x960.jpg\" style=\"height:267px; width:200px\" /></p>\r\n\r\n			<h3><strong>Paolo Vincini</strong></h3>\r\n\r\n			<p>Engineer</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><img src=\"https://www.hopdesign.com/wp-content/uploads/2019/01/Laura-1-uai-720x960.jpg\" style=\"height:267px; width:200px\" /></p>\r\n\r\n			<h3><strong>Laura Mazzoni</strong></h3>\r\n\r\n			<p>Architect</p>\r\n			</td>\r\n			<td>\r\n			<p><img src=\"https://www.hopdesign.com/wp-content/uploads/2019/01/Gilvan-1-uai-720x960.jpg\" style=\"height:267px; width:200px\" /></p>\r\n\r\n			<h3><strong>Gilvan Almeida Soares Junior</strong></h3>\r\n\r\n			<p>Technical Consultant</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><img src=\"https://www.hopdesign.com/wp-content/uploads/2019/01/Eugenia-1-uai-720x960.jpg\" style=\"height:267px; width:200px\" /></p>\r\n\r\n			<h3><strong>Evgeniya Tkacheva</strong></h3>\r\n\r\n			<p>Business Developer</p>\r\n			</td>\r\n			<td>\r\n			<p><img src=\"https://www.hopdesign.com/wp-content/uploads/2019/01/WhatsApp-Image-2020-05-05-at-12.45.50-uai-720x960.jpeg\" style=\"height:267px; width:200px\" /></p>\r\n\r\n			<h3><strong>Henry Ngo (Ngo Quoc Khang)</strong></h3>\r\n\r\n			<p>Vietnam Regional Business Developer</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><img src=\"https://www.hopdesign.com/wp-content/uploads/2019/01/Elisa-1-uai-720x960.jpg\" style=\"height:267px; width:200px\" /></p>\r\n\r\n			<h3><strong>Elisa Ghisoni</strong></h3>\r\n\r\n			<p>Graphic Designer</p>\r\n			</td>\r\n			<td>\r\n			<p><img src=\"https://www.hopdesign.com/wp-content/uploads/2019/01/Elena-1-uai-720x960.jpg\" style=\"height:267px; width:200px\" /></p>\r\n\r\n			<h3><strong>Elena Tosi</strong></h3>\r\n\r\n			<p>Administration Dept.</p>\r\n			</td>\r\n		</tr>\r\n		\r\n	</tbody>\r\n</table>', '/public/uploads/services/1603101252project-design.jpg', 1917003909, 1, 2, '7', NULL, 1, 1, '2020-10-19 15:54:12', '2020-12-22 14:48:19'),
(23, 'Land Registration', 'land-registration', '<p>When buying land, it is very important to know how to measure the size of the land and to have the correct knowledge about the land documents. If you are thinking of buying a piece of land without understanding these issues, it can be a very complicated and wrong decision. There are many things to consider when buying land and the role of legal issues is very important. When land is sold, the buyer or their representative is officially registered.</p>\r\n\r\n<p>But if there is a problem with the land documents, it is absolutely impossible to implement it. Floorfly.com gives you a flow chart below to illustrate the process so that you can easily figure out what steps to follow to register land in your name.</p>\r\n\r\n<pre>\r\n<img alt=\"\" src=\"https://floorfly.com/upload/services/land-registration.jpg\" style=\"height:500px; width:678px\" />\r\n&nbsp;\r\n</pre>\r\n\r\n<p>Before purchasing land, check the following:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li>Verify that the seller has proper ownership of the property and has a legitimate right to sell the property.</li>\r\n	<li>Check whether the last deed of the property is in the owner&rsquo;s own name or if the property is inherited. Because under Section 53C of the Transfer of Property Act, 182, if a person owns property in a manner other than inheritance, under the State Acquisition and Tenancy Act 1950, if he does not have the latest ledger in his own name, or if he is the owner of the property by inheritance, if he has not prepared the last mutation in his own name, he cannot sell any property, if sold in any other way, it is a punishable act.</li>\r\n	<li>Whether the land tax (khajna) has been paid till now. If the land tax (rent) has already been paid, go to the office of the concerned Assistant Land Development Officer and check whether the receipt or receipt of payment of land development tax (khajna) is authentic.</li>\r\n	<li>Whether the seller has possession of the proposed property. It would not be right to purchase the land without the seller&#39;s possession of the property.</li>\r\n	<li>Check whether the property is owned by the govt. Buying or selling the government is a punishable offense.</li>\r\n</ol>\r\n\r\n<p>Land Measurement<br />\r\nFirst, find out the length and width of the land. If the size of the four sides of the land is not equal, find the average of the length and width. Then divide the multiplication of the width and length by 435.6. The result is the accurate measurement of the land in decimal.</p>\r\n\r\n<p><img alt=\"\" src=\"https://floorfly.com/upload/services/land.jpg\" style=\"height:849px; width:600px\" /></p>\r\n\r\n<p>Floorfly.com provides a smooth Land registration through its own legal and govt. registered vetting process. To know the detail and avail the service please call us on +8801713079222</p>', '/public/uploads/services/1603877464land-reg-feature-image.jpg', 1713079222, 1, 1, '1', NULL, 1, 1, '2020-10-28 15:31:04', '2020-12-09 16:32:22'),
(24, 'Apartment Registration', 'apartment-registration', '<p>Before purchasing a flat the buyer must check the following to complete the flat registration which ensures legal ownership of the flat.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul style=\"list-style-type:square\">\r\n	<li>Check all land papers (ask your developer company to provide a photocopy).</li>\r\n	<li>Check if the plan is approved by Rajuk and if the developer violates any design.</li>\r\n	<li>Ensure you read a sales deed before purchasing the flat, ask your agent to provide a sales deed copy so that you don&rsquo;t miss anything or can negotiate about some cluases.</li>\r\n	<li>Sometime developer companies delays to handover the project. Enquire what the original &amp; declared date of Handover was and why the delay has taken place. You must include strong clause for rental benefits if further delay or any delay happens in the future.</li>\r\n	<li>Ensure the developing land is not mortgaged for any other reason than its own development (sometime developer companies take loans against a land for developing other projects).</li>\r\n	<li>Make sure the loan that is taken by the developer company is adjusted before handover otherwise you will never be able to register the flat by your name.</li>\r\n	<li>Make sure the land has no litigation with the Govt. or it is not facing any legal issues by the court or the land is not under DAP (Detail Area Plan).</li>\r\n	<li>Sometime mega projects faces a lot of consequences specially declared as &ldquo;City&rdquo; so please make sure all land documents or Rajuk approval is granted for the mega project. It is always better to hire legal associate to negotiate and check variables for mega projects.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>For any apartment registration take floorfly&rsquo;s assistance, please call +8801713079222 &nbsp;</p>', '/public/uploads/services/1603877996apartment-registration.jpg', 1713079222, 1, 1, '2', NULL, 1, 1, '2020-10-28 15:39:56', '2020-10-28 15:39:56'),
(25, 'Property Maintenance & Cleaning', 'property-maintenance-cleaning', '<p>FloorFly provides the best professional cleaning service in Dhaka. We provide both office cleaning service and house cleaning service. Our professional cleaners will provide you with the best service that you are bound to be satisfied. Call us now to learn more about our services.</p>', '/public/uploads/services/1605526362service-property.jpg', 1917003909, 1, 2, '18', NULL, 1, 1, '2020-11-16 17:32:42', '2020-11-25 11:24:24'),
(26, 'Office Carpet Cleaning', 'office-carpet-cleaning', '<p>FloorFly provides the best office carpet cleaning service in Bangladesh. Our professional carpet cleaner will provide you with the best carpet cleaning service in Dhaka. We are here to make your old carpet look new. Please call us to know more about our carpet cleaning services.</p>', '/public/uploads/services/1606371014Office-Carpet-Cleaning.jpg', 1917003909, 1, 2, '15', NULL, 1, 1, '2020-11-26 12:10:14', '2020-11-26 12:53:50'),
(27, 'Furniture Cleaning and Polishing', 'furniture-cleaning-and-polishing', '<p>FloorFly provides the best furniture cleaning and polishing service in Bangladesh. Our professional cleaner will provide you with the best cleaning and polishing service in Dhaka. We are here to make your old furniture look like new. Please contact us to learn more about our services.</p>', '/public/uploads/services/1606371091Furniture-cleaning-&-Polishing.jpg', 1917003909, 1, 2, '11', NULL, 1, 1, '2020-11-26 12:11:31', '2020-11-26 12:45:24'),
(28, 'Interior Design Service', 'interior-design-service', '<p>FloorFly is the best interior design company in Dhaka, Bangladesh.&nbsp;We are specialized interior and exterior design for Office, Residence, Hospital, Bank, Showroom, Outlet. Our highly talented Architects and dedicated interior designer can make your dream come true and we can ensure that our team can always be relied upon to create outstanding designs.</p>', '/public/uploads/services/1606906248Interior-Services.png', 1713079222, 1, 2, '12', NULL, 1, 1, '2020-12-02 16:50:48', '2020-12-03 10:33:36'),
(29, 'Plumbing & Electrical Service', 'plumbing-electrical-service', '<p>We provide the best Plumbing and Electrical service in Dhaka, Bangladesh. We have professional workers who has experience of many years. Our service is good enough to make you satisfied.</p>\r\n\r\n<p>Contact us to know more about the service.</p>', '/public/uploads/services/1606906319Ellectric-Work.png', 1713079222, 1, 2, '17', NULL, 1, 1, '2020-12-02 16:51:59', '2020-12-07 14:29:03'),
(30, 'Marbel & Tiles Cleaning', 'marbel-tiles-cleaning', '<p>Floorfly provides one of the best marble and tiles cleaning and polishing service in Dhaka, Bangladesh. We can make your floor&nbsp;as goog as new.&nbsp; Our professional floor cleaners will know the perfect chemical to use for your floor which will not harm your floor while polishing.</p>', '/public/uploads/services/1606906366Marbel-&-Tiles.png', 1713079222, 1, 2, '14', NULL, 1, 1, '2020-12-02 16:52:46', '2020-12-03 10:57:03'),
(31, 'Renovation Work', 'renovation-work', '<p>Floorfly has experienced renovation team to renovate&nbsp;Home, Office and&nbsp;Restaurant. We offer quality renovation work in all the areas of Dhaka City. Please contact us to learn more about our services.</p>', '/public/uploads/services/1606906475Renovation Work.png', 1713079222, 1, 2, '19', NULL, 1, 1, '2020-12-02 16:54:35', '2020-12-03 17:25:20'),
(32, 'Painting Service', 'painting-service', '<p>We provide excellent painting service in Dhaka, Bangladesh. Our professional painters ar experienced and expart enough to know your taste of colors. We can paint your project with colors of your dream. Please call us to know more about our services.</p>', '/public/uploads/services/1606906513Painting.png', 1713079222, 1, 2, '16', NULL, 1, 1, '2020-12-02 16:55:13', '2020-12-03 12:22:23'),
(33, 'Rooftop Gardening', 'rooftop-gardening', '<p>Do you need help with your rooftop garden? Our professional gardeners will be on the way to help you. We can turn your rooftop into your dream garden at a low cost. Please contact us to learn more about our services.</p>', '/public/uploads/services/1609063555Rooftop Gardening.png', 1713079222, 1, 2, '20', NULL, 1, 1, '2020-12-20 16:49:30', '2020-12-27 16:05:55'),
(34, 'Landscaping', 'landscaping', '<p>Our landscape designers are highly talented and can create plans for your outdoor space and their plans are sure to make you satisfied. Please contact us to know more about our services.&nbsp;</p>', '/public/uploads/services/1609326457Landscaping.png', 1713079222, 1, 2, '13', NULL, 1, 1, '2020-12-21 12:14:38', '2020-12-30 17:07:37'),
(35, 'Legal Vetting', 'legal-vetting', '<p>Floorfly is a trusted realtor firm where anyone can get their land documents vetted legally. Dhaka originally deviates from its master plan chalked out by the British Govt. and then RAJUK and then by the local authorities. So every land is different in the vetting process. Floorfly helps its client with the very detail of <strong>&ldquo;HOW TO BUY/PURCHASE A LAND?&rdquo;</strong></p>\r\n\r\n<p><strong>Before purchasing any land, the purchaser should be aware of the following:</strong></p>\r\n\r\n<h3><strong>Lease Hold Land</strong></h3>\r\n\r\n<ul style=\"list-style-type:square\">\r\n	<li>Allotment Letter</li>\r\n	<li>&nbsp;Possession Letter / Churanto Jorip Patro</li>\r\n	<li>&nbsp;Lease Deed</li>\r\n	<li>Land Office Mutation :</li>\r\n</ul>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - Namjari-O-Jomavag Prostab Potro, DCR &amp; Khajna Receipt</p>\r\n\r\n<ul style=\"list-style-type:square\">\r\n	<li>&nbsp;Land Service Charge</li>\r\n</ul>\r\n\r\n<p><strong><em>If 1st&nbsp; Allottee died, then for successors :</em></strong></p>\r\n\r\n<ul style=\"list-style-type:square\">\r\n	<li><em>Death Certificate of Allottee</em></li>\r\n	<li><em>- Succession Certificate from Court</em></li>\r\n	<li><em>- Mutation, DCR &amp; Khajna Receipt</em></li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul style=\"list-style-type:square\">\r\n	<li>For any existing building on the land, a copy of the Approved Plan&nbsp; of that building</li>\r\n	<li>Utility Bills for all lands till the Possession H.O. &ndash; Electricity, Water, Gas, City Corp.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>Free Hold Land</strong></h3>\r\n\r\n<ol>\r\n	<li>Bia &ndash; Deed</li>\r\n	<li>&nbsp;Registered Sales Deed</li>\r\n	<li>&nbsp;C.S. (R.S.), S.A. (for Ctg P.S.), R.S. (for Ctg. B.S.) Khatian and Mohanagr Jorip</li>\r\n	<li>Land Office Mutation :</li>\r\n</ol>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Namjari-O-Jomavag Prostab Potro, DCR &amp; Khajna Receipt</p>\r\n\r\n<p><strong><em>If Owner died, then for successors :</em></strong></p>\r\n\r\n<ul style=\"list-style-type:square\">\r\n	<li><em>Death Certificate of Allottee&nbsp;</em></li>\r\n	<li><em>Succession Certificate from Court</em></li>\r\n	<li><em>Mutation, DCR &amp; Khajna Receipt</em></li>\r\n	<li>For any existing building on the land, a copy of the Approved Plan&nbsp; of that building</li>\r\n	<li>Utility Bills for all lands till the Possession H.O. &ndash; Electricity, Water, Gas, City Corp.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Charges</p>\r\n\r\n<p>How much floorfly charges for land legal vetting? As every case is different so the charges varied by its nature.</p>\r\n\r\n<p>But anyone can expect in between <strong>BDT 25,000/- to BDT 75,000/-</strong></p>', '/public/uploads/services/1609063279Legal Vetting.png', 1713079222, 1, 1, '4', NULL, 1, 1, '2020-12-21 13:17:19', '2020-12-27 16:01:19'),
(36, 'Project Fencing', 'project-fencing', '<p>A fence can offer protection, provide security, and increase privacy. Floorfly can provide excellent fencing service which will also increase the security of your house. We have many types of fencing designs for you to choose from. Please contact us to learn more about our services.</p>', '/public/uploads/services/1609128857Project Fencing.png', 1713079222, 1, 2, '8', NULL, 1, 1, '2020-12-21 16:39:24', '2020-12-28 10:14:17'),
(37, 'Rajuk Approval', 'rajuk-approval', '<p>Constructing a building in Dhaka city requires permission from the government before starting the process of construction. In Dhaka, RAJUK is the authority to grant such permission. Floorfly can help the clients to get approval from RAJUK. Please contact us to learn more about our services.</p>\r\n\r\n<p>&nbsp;</p>', '/public/uploads/services/1609063481Rajuk Approval.png', 1713079222, 1, 1, '9', NULL, 1, 1, '2020-12-21 16:45:50', '2020-12-27 16:04:41');

-- --------------------------------------------------------

--
-- Table structure for table `service_categories`
--

CREATE TABLE `service_categories` (
  `id` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `service_categories`
--

INSERT INTO `service_categories` (`id`, `name`, `slug`, `status`) VALUES
(1, 'Services', 'services', 1),
(2, 'Appoint Us', 'appoint-us', 0);

-- --------------------------------------------------------

--
-- Table structure for table `service_childcategories`
--

CREATE TABLE `service_childcategories` (
  `id` int(10) NOT NULL,
  `service_subcategory_id` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `service_childcategories`
--

INSERT INTO `service_childcategories` (`id`, `service_subcategory_id`, `name`, `slug`) VALUES
(1, 1, 'Land Registration', 'land-registration'),
(2, 1, 'Apartment Registration', 'apartment-registration'),
(4, 1, 'Legal Vetting', 'legal-vetting'),
(7, 2, 'Project Design', 'project-design'),
(8, 2, 'Project Fencing', 'project-fencing'),
(9, 1, 'Rajuk Approval', 'rajuk-approval'),
(10, 2, 'A/C Servicing & Repair', 'ac-servicing-repair'),
(11, 2, 'Furniture Cleaning & Polishing', 'furniture-cleaning-polishing'),
(12, 2, 'Interior Design', 'interior-design'),
(13, 2, 'Landscaping', 'landscaping'),
(14, 2, 'Marble & Tiles Cleaning & Polishing', 'marble-tiles-cleaning-polishing'),
(15, 2, 'Office Carpet Cleaning', 'office-carpet-cleaning'),
(16, 2, 'Painting', 'painting'),
(17, 2, 'Plumbing & Electrical Work', 'plumbing-electrical-work'),
(18, 2, 'Property Maintenance & Cleaning', 'property-maintenance-cleaning'),
(19, 2, 'Renovation Work', 'renovation-work'),
(20, 2, 'Rooftop Gardening', 'rooftop-gardening'),
(22, 2, 'Water Tank / Reservoir Cleaning', 'water-tank-reservoir-cleaning');

-- --------------------------------------------------------

--
-- Table structure for table `service_subcategories`
--

CREATE TABLE `service_subcategories` (
  `id` int(10) NOT NULL,
  `service_category_id` int(90) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(10) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `service_subcategories`
--

INSERT INTO `service_subcategories` (`id`, `service_category_id`, `name`, `slug`, `status`) VALUES
(1, 1, 'Legal Services >', 'legal-services', 1),
(2, 1, 'Property Services >', 'property-services', 1),
(3, 2, 'Marketing', 'marketing', 1),
(4, 2, 'Property Sales', 'property-sales', 1),
(5, 2, 'Property Buy', 'property-buy', 1),
(6, 2, 'Special Requirement', 'special-requirement', 1);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `time_zone` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'UTC',
  `site_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `site_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `site_logo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `site_favicon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `google_map_key` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `recaptcha` int(1) NOT NULL DEFAULT 0,
  `recaptcha_secret_key` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `recaptcha_site_key` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `site_description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `site_keywords` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `site_header_code` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `site_footer_code` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `site_copyright` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `footer_widget1_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `footer_widget1` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `footer_widget2_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `footer_widget2` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `footer_widget3_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `footer_widget3` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `title_bg` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `all_properties_layout` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `map_latitude` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `map_longitude` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `home_properties_layout` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `featured_properties_layout` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sale_properties_layout` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rent_properties_layout` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pagination_limit` int(3) NOT NULL DEFAULT 12,
  `addthis_share_code` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `disqus_comment_code` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `social_facebook` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `social_twitter` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `social_linkedin` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `social_instagram` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contact_lat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contact_long` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contact_us_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contact_us_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contact_us_phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contact_us_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `terms_conditions_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `terms_conditions_description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `privacy_policy_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `privacy_policy_description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `currency_sign` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '$',
  `currency_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tax_percentage` float(11,2) NOT NULL,
  `paypal_payment_on_off` int(1) NOT NULL DEFAULT 1,
  `paypal_mode` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'sandbox',
  `paypal_client_id` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `paypal_secret` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stripe_payment_on_off` int(1) NOT NULL DEFAULT 1,
  `stripe_secret_key` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `featured_property_price` float(11,2) DEFAULT NULL,
  `bank_payment_details` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `invoice_company` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'Company Name',
  `invoice_address` varchar(500) COLLATE utf8_unicode_ci DEFAULT 'Suite 1C1, 25-33 Allen St',
  `smtp_host` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `smtp_port` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `smtp_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `smtp_password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `smtp_encryption` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gdpr_cookie_title` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gdpr_cookie_text` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `gdpr_cookie_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `time_zone`, `site_name`, `site_email`, `site_logo`, `site_favicon`, `google_map_key`, `recaptcha`, `recaptcha_secret_key`, `recaptcha_site_key`, `site_description`, `site_keywords`, `site_header_code`, `site_footer_code`, `site_copyright`, `footer_widget1_title`, `footer_widget1`, `footer_widget2_title`, `footer_widget2`, `footer_widget3_title`, `footer_widget3`, `title_bg`, `all_properties_layout`, `map_latitude`, `map_longitude`, `home_properties_layout`, `featured_properties_layout`, `sale_properties_layout`, `rent_properties_layout`, `pagination_limit`, `addthis_share_code`, `disqus_comment_code`, `social_facebook`, `social_twitter`, `social_linkedin`, `social_instagram`, `contact_lat`, `contact_long`, `contact_us_title`, `contact_us_email`, `contact_us_phone`, `contact_us_address`, `terms_conditions_title`, `terms_conditions_description`, `privacy_policy_title`, `privacy_policy_description`, `currency_sign`, `currency_code`, `tax_percentage`, `paypal_payment_on_off`, `paypal_mode`, `paypal_client_id`, `paypal_secret`, `stripe_payment_on_off`, `stripe_secret_key`, `featured_property_price`, `bank_payment_details`, `invoice_company`, `invoice_address`, `smtp_host`, `smtp_port`, `smtp_email`, `smtp_password`, `smtp_encryption`, `gdpr_cookie_title`, `gdpr_cookie_text`, `gdpr_cookie_url`) VALUES
(1, 'Asia/Almaty', 'Floor Fly - No. 1 Property Portal of Bangladesh, Apartment, Flat & Plot For Sale', 'ask@floorfly.com', 'logo.png', 'favicon.png', 'AIzaSyDB9Kcu-XZ-vuCjcfTTVKX2GRV3clZTtpQ', 0, '6LdSOrAZAAAAAJCgAcYFsnxJ8ujTWEf-S4bjS1E-', '6LdSOrAZAAAAAMeZZjwIFU57GiF19m6e9XTgCTBj', 'Real Estate and Property buy and sell service provider in Bangladesh. Flat, Apartment, Office, Plot & Commercial space at All Locations, Uttara, Bashundhara, Baridhara, Mirpur, Rampura in Dhaka, Bd.', 'Floorfly luxury cheap used ready apartment flat office plot shop buy sale booking in Bangladesh bd Dhaka Uttara Bashundhara Mirpur Banani.', '', '', 'Copyright © 2020 Floor Fly Realtor Ltd. All rights reserved.', 'About Us', 'Floorfly Realtor Limited is established to serve the residents of Bangladesh for any property related services, buy and sell service, and to provide building design and architectural solution. Ready flats, ongoing apartment and verified plots around Dhaka city are available at affordable and competitive price. We are the best property solution provider in Uttara sector 1, 3, 4, 5, 6, 7, 9, 10, 11, 12, 13, 15, 14, 17, Bashundhara, Baridhara, Mirpur, Banasree, Gulshan, Banani, Mohammadpur, Aftabnagar, Khilgaon, Nikunja, Niketon, Tongi, Gazipur, Savar, Jatrabari, Rampura, Tejgaon and many more prime location in Dhaka, BD. Floorfly is an ideal place for finding flats within budget, location and convenience.', 'Follow Us', '', 'Get In Touch', '<ul class=\\\"contact-info\\\">\r\n            <li><i class=\\\"fa fa-map-marker\\\"></i>Sector-3, Road-13, House No- 36, Uttara, Dhaka -1230</li>\r\n            <li class=\\\"phone\\\"><i class=\\\"fa fa-phone\\\"></i>+880 9612 232323</li>\r\n            <li><i class=\\\"fa fa-envelope\\\"></i>ask@floorfly.com</li>\r\n </ul>', 'title_bg.jpg', 'grid_side', '37.090240', '-95.712891', 'slider', 'grid_side', 'grid', 'grid_side', 9, '<!-- Go to www.addthis.com/dashboard to customize your tools -->\r\n<script type=\"text/javascript\" src=\"//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5f4e3dd87c01705e\"></script>', '<div id=\"disqus_thread\"></div>\r\n<script>\r\n\r\n/**\r\n*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.\r\n*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/\r\n/*\r\nvar disqus_config = function () {\r\nthis.page.url = PAGE_URL;  // Replace PAGE_URL with your page\'s canonical URL variable\r\nthis.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page\'s unique identifier variable\r\n};\r\n*/\r\n(function() { // DON\'T EDIT BELOW THIS LINE\r\nvar d = document, s = d.createElement(\'script\');\r\ns.src = \'https://divine-home-pro.disqus.com/embed.js\';\r\ns.setAttribute(\'data-timestamp\', +new Date());\r\n(d.head || d.body).appendChild(s);\r\n})();\r\n</script>\r\n<noscript>Please enable JavaScript to view the <a href=\"https://disqus.com/?ref_noscript\">comments powered by Disqus.</a></noscript>\r\n<script id=\"dsq-count-scr\" src=\"//divine-home-pro.disqus.com/count.js\" async></script>', 'https://www.facebook.com/floorflyservice/', 'https://www.youtube.com/channel/UCCj_IO2HqYkwncaIyt9g3ew', 'https://www.linkedin.com/company/69108526', 'https://www.instagram.com/floorflybd/', '38.493744', '-122.456286', 'Contact Us', 'ask@floorfly.com', '+880 9612 232323', 'Sector-3, Road-13, House No- 36, Uttara, Dhaka -1230', '', '', '', '', '৳', 'BDT', 0.00, 1, 'sandbox', NULL, NULL, 1, NULL, 9.99, '<div><span style=\\\"font-weight: bold;\\\">Bank payment details</span></div><div><br></div><div>ICICI:&nbsp;</div><div>SWIFT:&nbsp;</div><div><br></div><div>Featured property details</div><div><br></div>', 'Floorfly Realtor ltd.', 'Sector-3, Road-13, House No- 36, Uttara, Dhaka -1230', 'smtp.gmail.com', '587', 'devcustomer007@gmail.com', 'DEVcustomer007811', 'TLS', 'This website is using cookies', 'We use technical and analytics cookies to ensure that we give you the best experience on our website.', '#');

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE `skill` (
  `id` int(11) NOT NULL,
  `user_id` int(3) DEFAULT NULL,
  `skill` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `skill`
--

INSERT INTO `skill` (`id`, `user_id`, `skill`, `created_at`, `updated_at`) VALUES
(1, 20, 'Developer', NULL, NULL),
(2, 22, 'Developer', NULL, NULL),
(3, 22, 'Designer', NULL, NULL),
(4, 30, 'Developer', NULL, NULL),
(5, 31, 'skill', NULL, NULL),
(6, 32, 'skill', NULL, NULL),
(7, 35, 'saaa', NULL, NULL),
(8, 36, 'skill', NULL, NULL),
(9, 38, 'sales', NULL, NULL),
(10, 51, 'skill', NULL, NULL),
(11, 52, 'skill', NULL, NULL),
(12, 53, 'skill', NULL, NULL),
(13, 54, 'MS Office', NULL, NULL),
(14, 55, 'skill', NULL, NULL),
(15, 56, 'skill', NULL, NULL),
(16, 57, 'Sales & Marketing', NULL, NULL),
(17, 61, 'skill', NULL, NULL),
(18, 62, 'skill', NULL, NULL),
(19, 63, 'skill', NULL, NULL),
(20, 64, 'skill', NULL, NULL),
(21, 64, 'skill2', NULL, NULL),
(22, 66, 'skill', NULL, NULL),
(23, 67, 'Computer', NULL, NULL),
(24, 71, 'Communication', NULL, NULL),
(25, 75, 'skill', NULL, NULL),
(26, 76, 'Balda', NULL, NULL),
(27, 77, 'sdfds', NULL, NULL),
(28, 84, 'nil', NULL, NULL),
(29, 87, 'alla', NULL, NULL),
(30, 88, 'skill', NULL, NULL),
(31, 89, 'alla', NULL, NULL),
(32, 90, 'Developer', NULL, NULL),
(33, 91, 'Developer', NULL, NULL),
(34, 92, 'skill', NULL, NULL),
(35, 93, 'skill', NULL, NULL),
(36, 94, 'skill', NULL, NULL),
(37, 95, 'Good', NULL, NULL),
(38, 96, 'skill', NULL, NULL),
(39, 96, 'skill2', NULL, NULL),
(40, 107, 'Digital Marketing', NULL, NULL),
(41, 108, 'Developer', NULL, NULL),
(42, 111, 'skill', NULL, NULL),
(43, 111, NULL, NULL, NULL),
(50, 119, 'skill', NULL, NULL),
(51, 119, NULL, NULL, NULL),
(52, 122, 'Software', NULL, NULL),
(53, 122, NULL, NULL, NULL),
(54, 124, 'Software', NULL, NULL),
(55, 124, NULL, NULL, NULL),
(56, 128, 'Software', NULL, NULL),
(57, 128, NULL, NULL, NULL),
(58, 129, 'Software', NULL, NULL),
(59, 129, NULL, NULL, NULL),
(60, 36, 'Software', NULL, NULL),
(61, 36, NULL, NULL, NULL),
(62, 37, 'sdsdsd', NULL, NULL),
(63, 37, NULL, NULL, NULL),
(64, 41, 'Debate', NULL, NULL),
(65, 41, NULL, NULL, NULL),
(66, 46, NULL, NULL, NULL),
(67, 46, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(10) UNSIGNED NOT NULL,
  `slider_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slider_text1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slider_text2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscriber`
--

CREATE TABLE `subscriber` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ip` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `subscriber`
--

INSERT INTO `subscriber` (`id`, `email`, `ip`) VALUES
(1, 'admin@gmail.com', '::1'),
(2, 'admin@gmail.com', '::1'),
(3, 'muktaakter53094@gmail.com', '103.54.150.114'),
(4, 'cartermitchell.27620113@dyplesher.info', '193.142.59.139');

-- --------------------------------------------------------

--
-- Table structure for table `subscription_plan`
--

CREATE TABLE `subscription_plan` (
  `id` int(11) NOT NULL,
  `plan_name` varchar(255) NOT NULL,
  `plan_days` int(11) NOT NULL,
  `plan_duration` varchar(255) NOT NULL,
  `plan_duration_type` varchar(255) NOT NULL,
  `plan_price` decimal(11,2) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscription_plan`
--

INSERT INTO `subscription_plan` (`id`, `plan_name`, `plan_days`, `plan_duration`, `plan_duration_type`, `plan_price`, `status`) VALUES
(1, 'Basic Plan', 7, '7', '1', '5.00', 1),
(2, 'Premium Plan', 30, '1', '30', '10.00', 1),
(3, 'Platinum Plan', 365, '1', '365', '49.00', 1),
(4, 'free', 365, '1', '365', '0.00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `testimonial` text COLLATE utf8_unicode_ci NOT NULL,
  `t_user_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `designation`, `testimonial`, `t_user_image`) VALUES
(1, 'John Doe', 'Lawyer', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi architecto dolor, earum eum illo nostrum possimus quae, quasi quod ratione recusandae repudiandae soluta vero? Dicta dolor est et exercitationem illo! Deleniti dolorem est facere neque pariatur, quaerat recusandae ut? Alias atque cum dicta hic ipsum laboriosam, modi numquam sed vero?', 'john-doe-2606fbaedca2a141aadec6dd0f9f160a'),
(2, 'Chris Brown', 'Accountant', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi architecto dolor, earum eum illo nostrum possimus quae, quasi quod ratione recusandae repudiandae soluta vero? Dicta dolor est et exercitationem illo! Deleniti dolorem est facere neque pariatur, quaerat recusandae ut? Alias atque cum dicta hic ipsum laboriosam, modi numquam sed vero?', 'chris-brown-9db2c9687965bb31c1d03c79e99aa2fc'),
(3, 'Harry Cool', 'Photographer', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi architecto dolor, earum eum illo nostrum possimus quae, quasi quod ratione recusandae repudiandae soluta vero? Dicta dolor est et exercitationem illo! Deleniti dolorem est facere neque pariatur, quaerat recusandae ut? Alias atque cum dicta hic ipsum laboriosam, modi numquam sed vero?', 'harry-cool-e2797cb6a879efc1af1a2068586c8cca'),
(4, 'Jane Doe', 'Nurse', 'Phasellus quis lectus metus, at posuere neque. Sed pharetra nibh eget orci convallis at posuere leo convallis', 'jane-doe-2a29b9a9b0a26a7d39e8d6fb247eef69'),
(5, 'Cen Lung', 'Accountant', 'Vivamus sit amet libero turpis, non venenatis urna. In blandit, odio convallis suscipit venenatis, ante ipsum cursus augue.Vivamus sit amet libero turpis, non venenatis urna. In blandit, odio convallis suscipit venenatis, ante ipsum cursus augue.', 'cen-lung-d868f46a40b126f375f0b6a4b40500c8');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(11) NOT NULL,
  `property_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `plan_id` int(11) DEFAULT NULL,
  `gateway` varchar(255) NOT NULL,
  `payment_amount` varchar(255) NOT NULL,
  `tax_amount` varchar(255) NOT NULL,
  `total_payment_amount` varchar(255) NOT NULL,
  `payment_id` varchar(255) NOT NULL,
  `date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `property_id`, `user_id`, `email`, `plan_id`, `gateway`, `payment_amount`, `tax_amount`, `total_payment_amount`, `payment_id`, `date`) VALUES
(1, 8, 10, 'owner@gmail.com', 4, 'none', '0', '0', '0', 'none', 1597082400),
(2, 9, 11, 'smil@gmil.com', 4, 'none', '0', '0', '0', 'none', 1597168800);

-- --------------------------------------------------------

--
-- Table structure for table `upazilas`
--

CREATE TABLE `upazilas` (
  `id` int(2) UNSIGNED NOT NULL,
  `district_id` int(2) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `upazilas`
--

INSERT INTO `upazilas` (`id`, `district_id`, `name`) VALUES
(1, 1, 'aftabnagar'),
(2, 1, 'adabar'),
(3, 1, 'banani'),
(4, 1, 'bashundhara'),
(5, 1, 'badda'),
(6, 1, 'bangshal'),
(7, 1, 'bhashantek'),
(8, 1, 'bhatara'),
(9, 1, 'biman Bandar'),
(10, 1, 'chalkbazar'),
(11, 1, 'cantonment'),
(12, 1, 'dhamrai'),
(13, 1, 'dhanmondi'),
(14, 1, 'dakhinkhan'),
(15, 1, 'darus Salam'),
(16, 1, 'demra'),
(17, 1, 'gulshan'),
(18, 1, 'gendaria'),
(19, 1, 'hazaribagh'),
(20, 1, 'jatrabari'),
(21, 1, 'joypara'),
(22, 1, 'keraniganj'),
(23, 1, 'khilgaon'),
(24, 1, 'khilkhet'),
(25, 1, 'kadamtoli'),
(26, 1, 'kamrangirchar'),
(27, 1, 'kotwali'),
(28, 1, 'lalbag'),
(29, 1, 'mirpur'),
(30, 1, 'mohammadpur'),
(31, 1, 'motijheel'),
(32, 1, 'nawabganj'),
(33, 1, 'new market'),
(34, 1, 'palton'),
(35, 1, 'pallabi'),
(36, 1, 'ramna'),
(37, 1, 'rampura'),
(38, 1, 'rupnagar'),
(39, 1, 'sherebangla Nagar'),
(40, 1, 'shahjahanpur'),
(41, 1, 'sabujbag'),
(42, 1, 'savar'),
(43, 1, 'sutrapur'),
(44, 1, 'tejgaon'),
(45, 1, 'tejgaon industrial area'),
(46, 1, 'turag'),
(47, 1, 'uttara'),
(48, 1, 'uttarkhan'),
(49, 1, 'malibag'),
(50, 1, 'baridhara'),
(51, 1, 'shegunbagicha'),
(52, 1, 'shiddhessory'),
(53, 1, 'purbachal');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `usertype` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `sellertype` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(90) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `seller_present_address` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `position` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `department` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `skill` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `profile_image` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `cover_image` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `seller_permanent_address` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_address` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_trade_license` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `about` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `google` varchar(90) COLLATE utf8_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image_icon` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `confirmation_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `agent_dob` date DEFAULT NULL,
  `agent_contact1` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `agent_contact2` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `agent_present_address` varchar(90) COLLATE utf8_unicode_ci DEFAULT NULL,
  `agent_location` varchar(90) COLLATE utf8_unicode_ci DEFAULT NULL,
  `agent_zip` int(10) DEFAULT NULL,
  `agent_nid` varchar(90) COLLATE utf8_unicode_ci DEFAULT NULL,
  `agent_passport` varchar(90) COLLATE utf8_unicode_ci DEFAULT NULL,
  `agent_driver_license` varchar(90) COLLATE utf8_unicode_ci DEFAULT NULL,
  `agent_father` varchar(90) COLLATE utf8_unicode_ci DEFAULT NULL,
  `agent_mother` varchar(90) COLLATE utf8_unicode_ci DEFAULT NULL,
  `agent_marital_status` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `agent_permanent_address` varchar(90) COLLATE utf8_unicode_ci DEFAULT NULL,
  `agent_institution` varchar(90) COLLATE utf8_unicode_ci DEFAULT NULL,
  `agent_result` varchar(90) COLLATE utf8_unicode_ci DEFAULT NULL,
  `agent_degree` varchar(90) COLLATE utf8_unicode_ci DEFAULT NULL,
  `agent_tenure_todate` date DEFAULT NULL,
  `agent_tenure_formdate` date DEFAULT NULL,
  `agent_position` varchar(90) COLLATE utf8_unicode_ci DEFAULT NULL,
  `agent_department` varchar(90) COLLATE utf8_unicode_ci DEFAULT NULL,
  `agent_question1` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `agent_question2` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `accecpt` tinyint(1) DEFAULT NULL,
  `approved` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `usertype`, `sellertype`, `name`, `gender`, `email`, `password`, `seller_present_address`, `company`, `position`, `department`, `skill`, `profile_image`, `cover_image`, `seller_permanent_address`, `company_address`, `company_trade_license`, `phone`, `about`, `facebook`, `twitter`, `google`, `instagram`, `linkedin`, `image_icon`, `status`, `confirmation_code`, `remember_token`, `agent_dob`, `agent_contact1`, `agent_contact2`, `agent_present_address`, `agent_location`, `agent_zip`, `agent_nid`, `agent_passport`, `agent_driver_license`, `agent_father`, `agent_mother`, `agent_marital_status`, `agent_permanent_address`, `agent_institution`, `agent_result`, `agent_degree`, `agent_tenure_todate`, `agent_tenure_formdate`, `agent_position`, `agent_department`, `agent_question1`, `agent_question2`, `accecpt`, `approved`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, 'Floorfly', NULL, 'admin@floorfly.com', '$2y$10$oYEEteGhJex2kpgPJ.lQ..T/10n.c2ISKIh9sYi6HQKmgs4sFxrI2', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '01917003909', 'Floorfly.com is a market place for secondary property buy & sell service along with the following services.\r\n\r\nCore Services:\r\nFlat, Office, Shop, Showroom Outlets & Land Buy-Sale_Rent\r\nRegistration of Land & Flats Including Mutation & Mortgage Assistance\r\nProject Design (Architectural, Structural, Electrical & Plumbing)\r\nRajuk Approval & Supportive Colaboration\r\nProject Cost Estimate & Budgetting\r\nDigital Survey & Soil Test\r\nProject Fencing\r\nLegal Vetting\r\nOther Services: 			\r\nSink Repair\r\nOffice Carpet Cleaning\r\nA/C Servicing & Repair\r\nInterior & Exterior Painting\r\nWater Tank/Reservoir Cleaning\r\nLandscapping & Rooftop Gardening\r\nMarble & Tiles Cleaning & Polishing\r\nAll Kind of Property Renovation Works\r\nAll Kind of Plumbing & Electrical Works\r\nInterior Design- Shops, Office, Apartments\r\nSofa, Chair Cleaning & Furniture Polishing\r\nLift, Elevator, Escalator, Generator, Substation\r\n360 Security Solution Including Fire Safety, CCTV Camera, PABX etc\r\nHotel, Hospital, Restaurant, Educational Institutions, Home & Office Deep Cleaning\r\n\r\nIn a nutshell, we will provide 360 services when it comes anything for real estate related services.', 'https://www.facebook.com/floorflyservice', 'http://twitter.com', NULL, 'http://gplus.com', 'http://linkedin.com', 'floorfly-5f56cb0dc793f42e5c9bc5e20b728a7a', 1, NULL, 'E4U05i1RfnZgnfdZv44o0MVRo402cgSdZgB8wjZK6nr3EASx2oYdH75SX204', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2016-10-11 12:42:11', '2020-12-12 18:06:19'),
(2, 'Seller', 'individual', 'Mr. Belayet', NULL, '01935832908@floorfly.com', '$2y$10$LHVmBDrHFz69bpyDYARr/.fxgxVGnWkyzQo5QFb6FJNvBsI2z9dHi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '01935832908', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2020-10-25 16:03:58', '2020-10-25 16:03:58'),
(3, 'Seller', 'individual', 'Turab Ali', NULL, '01711605342@floorfly.com', '$2y$10$0d3js8zz/wCgHCH6HvltGuf652sn8S289BiRSDR5GibRlug0RsxrS', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '01711605342', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2020-10-25 16:17:25', '2020-10-25 16:17:25'),
(4, 'Seller', 'individual', 'Mr.Belal', NULL, '01924555998@floorfly.com', '$2y$10$FzVjDENh0ViGjFay0dHvTOlYRy6.0IdQoEjjb57q1n43Hdzl5q2Wm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '01924555998', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2020-10-25 16:24:41', '2020-10-25 16:24:41'),
(5, 'Seller', 'individual', 'Elias Hossain', NULL, '01713452125@floorfly.com', '$2y$10$8fqvJ89MwXo0pzXy09nFkeZLbEncGopf9htu0brbnPoAX/Afh40Rm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '01713452125', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2020-10-25 16:27:20', '2020-10-25 16:27:20'),
(6, 'Seller', 'individual', 'Mr. Shafiqul', NULL, '01842115937@floorfly.com', '$2y$10$Xv3BbNDhYmCkmaW4DcruKuK1X89jTCKRQ7YVnXRpi3qIpAXO88RY.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '01842115937', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2020-10-25 16:31:18', '2020-10-25 16:31:32'),
(7, 'Seller', 'individual', 'Mr. Shuvo', NULL, '01689082045@floorfly.com', '$2y$10$N1jlXhplWPdMl.OGZAsYIucOvVpQ5Kc2/.yU4u6Z50RwqKTnBRVAm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '01689082045', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2020-10-25 16:39:27', '2020-10-25 16:39:27'),
(8, 'Seller', 'individual', 'Azizur Rahman', NULL, '01945771437@floorfly.com', '$2y$10$vFlgPlieWMShlAancaVB4O92BQo12/vy.gE.LZwG8MRDZ3Lf6VlqC', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '01945771437', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2020-10-25 16:41:09', '2020-10-25 16:41:09'),
(9, 'Seller', 'individual', 'Mr. Babu', NULL, '01707351288@floorfly.com', '$2y$10$nBriEwlLaWLHapxfv9mGTekS0OBiwcN746c19XjxdYnAeCrCCI1Sy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '01707351288', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2020-10-25 16:44:35', '2020-10-25 16:44:35'),
(10, 'Agents', NULL, 'Mrs. Alam', NULL, '01711398495@floorfly.com', '$2y$10$ucZ1RguiqbxO.b4IpPAHfuoyGBPZcZ1aHyiJVh7vJCWuI67BuojuW', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '01711398495', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2020-10-25 16:45:29', '2020-10-25 16:45:29'),
(11, 'Agents', NULL, 'Motiur Rahman Apu', NULL, '01614441106@floorfly.com', '$2y$10$qk7/AmnArzcRZ7OiJy20wugwEIBwtBjCHI33CfucQG2VyvWfQ0dqi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '01614441106', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2020-10-25 16:46:38', '2020-10-25 16:46:38'),
(13, 'Seller', 'individual', 'Mr. Jhon', NULL, '01817540663@floorfly.com', '$2y$10$LjJS.M24zny5G6enEUmNJuz2wx.ZA9HMXlcQVGgPiDHQfR1kyFHE2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '01817540663', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2020-10-25 16:49:59', '2020-10-25 16:49:59'),
(14, 'Seller', 'individual', 'Mr. Solaiman', NULL, '01974726861@floorfly.com', '$2y$10$rEXj2xygeOyOkRmRtrddcOgDnf2.vbzxA27w6o/ddtMOgzLxUEOre', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '01974726861', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2020-10-25 16:51:03', '2020-10-25 16:51:03'),
(15, 'Seller', 'individual', 'Hafizur Rahman', NULL, '01795074812@floorfly.com', '$2y$10$BJuHRUqaXnO/qZuPpcWKbuVFr22mlIALD9dAyXvP2WBWtMT6WRicq', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '01795074812', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2020-10-25 16:51:43', '2020-10-25 16:52:47'),
(16, 'Seller', 'individual', 'Mr. Atique', NULL, '01886610077@floorfly.com', '$2y$10$aO7atk.m2MnU23fiSCIzTe8S1mc7f4/6jVvT7BmewZwdaPIfSoIeq', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '01886610077', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2020-10-25 16:52:35', '2020-10-25 16:53:00'),
(17, 'Agents', NULL, 'Mr. Latif, Saiful', NULL, '01720129299@floorfly.com', '$2y$10$3m63FvLXjaDzeDNXWqj2seT6DUtjauRP3.0thvl3.k3.0Ja.e0Dv.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '01720129299', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2020-10-25 16:54:38', '2020-10-25 16:54:38'),
(18, 'Seller', 'individual', 'Richmond Group', NULL, '01730372653@floorfly.com', '$2y$10$CHFa/Ll52ZR8wwccuE0Cnuum6Y1hioD7Y5X7Ht2BvjKuBJ6lvcNbK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '01730372653', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2020-10-25 16:56:05', '2020-10-25 16:56:05'),
(19, 'Seller', 'individual', 'Key stone, Eng. Mahi, ED', NULL, '01634326625@floorfly.com', '$2y$10$V2c8umUMJy/RM9eEfXeOsuvqSD7UmlLlJFhDxw6nk6ruBg6hEUf6C', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '01634326625', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2020-10-25 16:57:03', '2020-10-25 16:57:03'),
(20, 'Seller', 'individual', 'Mr. Hafiz', NULL, '01711692283@floorfly.com', '$2y$10$VejDpodFdXOQ.qtQ0jyRAu09WRE5aq4AJD7dIMkRtXyAbbuu76hci', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '01711692283', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2020-10-25 16:58:03', '2020-10-25 16:58:03'),
(21, 'User', 'individual', 'Mujibur Rahman', NULL, '01617916529@floorfly.com', '$2y$10$7lU/Nx/CsnMetG2z.xvYoecSj.3LmZ55tTuRfhEyM0fZZzCxFYv5S', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '01617916529', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2020-10-25 16:59:25', '2020-10-25 16:59:25'),
(22, 'Seller', 'individual', 'Mr. Pintu', NULL, '01715297266@floorfly.com', '$2y$10$wYqt9LIUn45NaPIi4fXs6ehoO6QJhPtY1ChaP1DOL6chKQRaRDnHS', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '01715297266', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2020-10-25 17:00:26', '2020-10-25 17:00:26'),
(23, 'User', 'individual', 'Mr. Kundo', NULL, '01719209728@floorfly.com', '$2y$10$cBsOdRIbbWpbv1iZLTGBsOgeaTtRffSu5bbhVX.wEJAwLAUaJCZvu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '01719209728', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2020-10-25 17:01:10', '2020-10-25 17:01:10'),
(24, 'Seller', 'individual', 'Mahfuz', NULL, '01728589966@floorfly.com', '$2y$10$.lMD9TlNw34d0teG23DlpOWqq9/ygQHS4BiEqWDezvp4epdGfTpca', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '01728589966', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2020-10-25 17:01:55', '2020-10-25 17:01:55'),
(25, 'Seller', 'individual', 'Apan Builders, Tareq', NULL, '01842410647@floorfly.com', '$2y$10$dBuZ/UAHDEWPT6WMnhU6WuWF/P6o6uRlDOfCHLhWxowx9xcx2DW66', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '01842410647', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2020-10-25 17:02:43', '2020-10-25 17:02:43'),
(26, 'Seller', 'individual', 'RPL', NULL, '01828624419@floorfly.com', '$2y$10$eK0BtRzWsStDe1c/1N7u8er/KO15nZbH60GJEojQQx8YEHXdksdVO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '01828624419', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2020-10-25 17:03:34', '2020-10-25 17:03:34'),
(27, 'Seller', 'individual', 'RBL, Tauhid', NULL, '01915476305@floorfly.com', '$2y$10$9dJ5EXrRyNyQd.Ue3C32l.ez4PnRfIytrVqHzF4z6.K.8milcJlJC', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '01915476305', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2020-10-25 17:04:24', '2020-10-25 17:04:24'),
(28, 'Seller', 'individual', 'Mr. Ahsan', NULL, '01914069319@floorfly.com', '$2y$10$2KVQmEbII0D.ANM4yYKJW.sSU0FbS1/7qCE.N3R/sf27bhIhr1ygm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '01914069319', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2020-10-25 17:05:17', '2020-10-25 17:05:17'),
(29, 'Seller', 'individual', 'Shamsul Alam, MD, Future View Property', NULL, '01711737705@floorfly.com', '$2y$10$tXEZ2bH2SOKUHC34bEXMs.G/g4q60C2xQtCpnOJmws6ZAz6Z83P/u', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '01711737705', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2020-10-25 17:06:08', '2020-10-25 17:06:08'),
(30, 'Seller', 'individual', 'Momtaz uddin Ahmed', NULL, '01913656259@floorfly.com', '$2y$10$DdVF3DVnG0xZsrHZZe3hv.JzdghIzJjHi7aKnsIOEK0KsBxl/dxYy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '01913656259', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2020-10-25 17:07:00', '2020-10-25 17:07:00'),
(31, 'Seller', 'individual', 'Dr. Wazir', NULL, '0173012803@floorfly.com', '$2y$10$kqteNOp4yx6hQg4sSMg0peyJYsOF00zjBBi7Lj.1Rj/PhcFEXPaLK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0173012803', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2020-10-25 17:07:42', '2020-10-25 17:07:42'),
(32, 'Seller', 'individual', 'Md. Nasir Uddin Ahmed', NULL, '01741393444@floorfly.com', '$2y$10$2bKIgw69ECgqP6oOUPz05u3c1TmFGf4/gUi/9T7.TPNoE2EQx69D.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '01741393444', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2020-10-25 17:08:35', '2020-10-25 17:08:35'),
(33, 'Seller', 'individual', 'Md. Alamgir', NULL, '01797320407@floorfly.com', '$2y$10$E3VyVl.2hrYLtdSG.9oeAO8XxTZfebHE/8x94PoV.oeBqUjqwMdM2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '01797320407', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2020-10-25 17:13:18', '2020-10-25 17:13:18'),
(34, 'Seller', 'individual', 'Mahbubur Rahman', NULL, '01750333333@floorfly.com', '$2y$10$VFRS8OoYV.1vDXy4lZNd6uB6mm3sgr7xnOLj/CdtqYl9twt1ABoT.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '01750333333', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2020-10-25 17:14:12', '2020-10-25 17:14:12'),
(42, 'User', 'individual', 'Tanvir Ahmed', 'Male', 'tanvirnoor38@gmail.com', '$2y$10$fWG6M.IjnTxnZ4LFsWve/./w80aJy.kVMnFAX13EKE0pVKnCjjhWm', 'Uttara, Dhaka', NULL, NULL, NULL, NULL, '/upload/profile_image/1606886000Emdad Sit.jpg', NULL, 'Uttara, Dhaka', NULL, NULL, '01855333530', 'bvchtfhvbmhvguj', NULL, NULL, NULL, NULL, NULL, NULL, 1, 'bY4gtJCRVvMDZkD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2020-11-19 15:02:47', '2020-12-02 11:13:20'),
(43, 'User', 'individual', 'Tareq Hossain', 'Male', 'tareqhossain91527@gmail.com', '$2y$10$Y/xSzVXdME1tckoZDZIZIuiUm7uoEX9WzxfhkMjanbC5aVt6xr1au', 'House:951, Road:14, Avenue:2, Mirpur DOHS, Dhaka', NULL, NULL, NULL, NULL, NULL, NULL, 'House:951, Road:14, Avenue:2, Mirpur DOHS, Dhaka', NULL, NULL, '01911500820', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'xFVdiFUeikoVqKr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2020-11-25 11:35:34', '2020-11-25 11:35:56'),
(44, 'User', 'individual', 'Md Saifullah', 'Male', 'mdhmshasib@gmail.com', '$2y$10$GT/1aoSz6EABPPXncOhL8emmMvarg4vMWVi2vQPP5pELCpDK/T8R.', 'Cox\'s bazar', NULL, NULL, NULL, NULL, NULL, NULL, 'Brahmanbaria', NULL, NULL, '01847323275', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'oPFpkivDdS6PSZj', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2020-11-28 02:47:39', '2020-11-28 02:47:39'),
(45, 'User', 'individual', 'MD.Riasat', 'Male', 'riasat.rahman22@gmail.com', '$2y$10$RracuASR212LSyc16wIHf.dMG8td/gvvWzrPvOn5oGCx.GmNdtXx2', 'Uttora', NULL, NULL, NULL, NULL, NULL, NULL, 'পাবনা', NULL, NULL, '01717400905', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'qUJt9acsFdVh11J', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2020-12-01 16:55:32', '2020-12-01 16:56:14'),
(47, 'User', 'individual', 'Sabuj Chowdhury', 'Male', 'sobuj2616@gmail.com', '$2y$10$TLWZmbNu6bhC0PmXtirEjeo3f3ybs9DEFPNryU.i/gfwQTpseeXzG', '31 Johnson road', NULL, NULL, NULL, NULL, NULL, NULL, '31 Johnson road', NULL, NULL, '01816139708', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'xHEnONzecRDDRP4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2020-12-05 22:25:50', '2020-12-08 21:17:12'),
(48, 'User', 'individual', 'Shakil Ahmed', 'Male', 'evanshakil@Yahoo.com', '$2y$10$Ox4HgtehBAGwgm7Di9yczOfNSPGp9hVb4bRDZZUTGDuqYPmvLfcZC', 'D101, mohanagar project Rampura', NULL, NULL, NULL, NULL, NULL, NULL, 'D101, mohanagar project Rampura', NULL, NULL, '01726617391', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'kEWaO4snKuaF46J', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2020-12-13 18:39:13', '2020-12-13 18:39:13');

-- --------------------------------------------------------

--
-- Table structure for table `varify`
--

CREATE TABLE `varify` (
  `id` int(11) NOT NULL,
  `otp` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `varify`
--

INSERT INTO `varify` (`id`, `otp`, `created_at`, `updated_at`) VALUES
(2, '265338', '2020-09-12 22:45:48', '2020-09-12 22:45:48'),
(31, '883281', '2020-09-13 22:35:13', '2020-09-13 22:35:13'),
(40, '723692', '2020-09-14 21:53:01', '2020-09-14 21:53:01'),
(46, '784107', '2020-09-16 16:32:11', '2020-09-16 16:32:11'),
(47, '657564', '2020-09-16 16:34:07', '2020-09-16 16:34:07'),
(48, '493545', '2020-09-16 16:35:44', '2020-09-16 16:35:44'),
(50, '724854', '2020-09-16 16:50:15', '2020-09-16 16:50:15'),
(52, '255807', '2020-09-16 17:39:32', '2020-09-16 17:39:32'),
(53, '310677', '2020-09-16 17:44:38', '2020-09-16 17:44:38'),
(54, '899215', '2020-09-16 17:47:11', '2020-09-16 17:47:11'),
(56, '144615', '2020-09-19 11:28:37', '2020-09-19 11:28:37'),
(63, '354999', '2020-09-21 08:18:27', '2020-09-21 08:18:27'),
(78, '496800', '2020-10-08 15:04:15', '2020-10-08 15:04:15'),
(87, '918067', '2020-10-08 15:58:06', '2020-10-08 15:58:06'),
(90, '775286', '2020-10-08 16:43:43', '2020-10-08 16:43:43'),
(93, '622682', '2020-10-10 02:15:06', '2020-10-10 02:15:06'),
(96, '931508', '2020-10-13 02:30:06', '2020-10-13 02:30:06'),
(97, '423346', '2020-10-14 17:56:44', '2020-10-14 17:56:44'),
(98, '292780', '2020-10-15 09:34:26', '2020-10-15 09:34:26'),
(102, '615559', '2020-10-17 16:28:28', '2020-10-17 16:28:28'),
(103, '374631', '2020-10-17 16:30:58', '2020-10-17 16:30:58'),
(104, '960335', '2020-10-17 16:33:56', '2020-10-17 16:33:56'),
(105, '824007', '2020-10-17 16:38:15', '2020-10-17 16:38:15'),
(110, '245691', '2020-10-21 18:04:59', '2020-10-21 18:04:59'),
(114, '465960', '2020-10-23 22:07:24', '2020-10-23 22:07:24'),
(115, '498031', '2020-10-24 23:40:53', '2020-10-24 23:40:53'),
(116, '639395', '2020-10-28 10:10:48', '2020-10-28 10:10:48'),
(117, '417911', '2020-10-28 10:21:12', '2020-10-28 10:21:12'),
(120, '801433', '2020-11-09 17:27:01', '2020-11-09 17:27:01'),
(122, '429956', '2020-11-09 17:41:24', '2020-11-09 17:41:24'),
(135, '431169', '2020-11-23 08:46:02', '2020-11-23 08:46:02'),
(139, '635078', '2020-11-23 08:49:12', '2020-11-23 08:49:12'),
(142, '750974', '2020-11-25 11:34:31', '2020-11-25 11:34:31'),
(143, '753352', '2020-11-25 11:35:45', '2020-11-25 11:35:45'),
(146, '424653', '2020-12-02 16:19:10', '2020-12-02 16:19:10'),
(151, '210117', '2020-12-13 16:41:23', '2020-12-13 16:41:23'),
(155, '701122', '2020-12-16 02:50:31', '2020-12-16 02:50:31'),
(161, '290714', '2020-12-24 14:48:44', '2020-12-24 14:48:44'),
(162, '295645', '2020-12-24 14:48:47', '2020-12-24 14:48:47'),
(163, '337538', '2020-12-24 14:49:09', '2020-12-24 14:49:09'),
(164, '169014', '2020-12-24 14:49:48', '2020-12-24 14:49:48'),
(165, '563764', '2020-12-24 14:49:50', '2020-12-24 14:49:50'),
(166, '833156', '2020-12-24 14:49:50', '2020-12-24 14:49:50'),
(167, '723173', '2020-12-24 14:49:50', '2020-12-24 14:49:50'),
(168, '138483', '2020-12-24 14:49:51', '2020-12-24 14:49:51'),
(169, '433934', '2020-12-24 14:49:52', '2020-12-24 14:49:52'),
(170, '200853', '2020-12-24 14:49:52', '2020-12-24 14:49:52'),
(171, '365819', '2020-12-24 14:49:52', '2020-12-24 14:49:52'),
(172, '673131', '2020-12-24 14:49:52', '2020-12-24 14:49:52'),
(173, '467130', '2020-12-24 14:49:52', '2020-12-24 14:49:52'),
(174, '151745', '2020-12-24 14:49:52', '2020-12-24 14:49:52'),
(175, '486728', '2020-12-24 14:50:42', '2020-12-24 14:50:42'),
(176, '221427', '2020-12-24 14:50:42', '2020-12-24 14:50:42'),
(177, '916790', '2020-12-24 14:50:43', '2020-12-24 14:50:43'),
(178, '719445', '2020-12-24 14:50:43', '2020-12-24 14:50:43'),
(179, '528944', '2020-12-24 14:50:44', '2020-12-24 14:50:44'),
(180, '715428', '2020-12-24 14:50:44', '2020-12-24 14:50:44'),
(181, '266049', '2020-12-24 14:50:44', '2020-12-24 14:50:44'),
(182, '574505', '2020-12-24 14:50:44', '2020-12-24 14:50:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogcategories`
--
ALTER TABLE `blogcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_requests`
--
ALTER TABLE `client_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquire`
--
ALTER TABLE `enquire`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `front_designs`
--
ALTER TABLE `front_designs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hires`
--
ALTER TABLE `hires`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interests`
--
ALTER TABLE `interests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promotion_slider`
--
ALTER TABLE `promotion_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property_gallery`
--
ALTER TABLE `property_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property_purposes`
--
ALTER TABLE `property_purposes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property_types`
--
ALTER TABLE `property_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_categories`
--
ALTER TABLE `service_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_childcategories`
--
ALTER TABLE `service_childcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_subcategories`
--
ALTER TABLE `service_subcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscriber`
--
ALTER TABLE `subscriber`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscription_plan`
--
ALTER TABLE `subscription_plan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upazilas`
--
ALTER TABLE `upazilas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `upazila_id` (`district_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `varify`
--
ALTER TABLE `varify`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogcategories`
--
ALTER TABLE `blogcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `client_requests`
--
ALTER TABLE `client_requests`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT for table `enquire`
--
ALTER TABLE `enquire`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `front_designs`
--
ALTER TABLE `front_designs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `hires`
--
ALTER TABLE `hires`
  MODIFY `id` int(90) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `interests`
--
ALTER TABLE `interests`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT for table `promotion_slider`
--
ALTER TABLE `promotion_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;

--
-- AUTO_INCREMENT for table `property_gallery`
--
ALTER TABLE `property_gallery`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=410;

--
-- AUTO_INCREMENT for table `property_purposes`
--
ALTER TABLE `property_purposes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `property_types`
--
ALTER TABLE `property_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `service_categories`
--
ALTER TABLE `service_categories`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `service_childcategories`
--
ALTER TABLE `service_childcategories`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `service_subcategories`
--
ALTER TABLE `service_subcategories`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `skill`
--
ALTER TABLE `skill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subscriber`
--
ALTER TABLE `subscriber`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subscription_plan`
--
ALTER TABLE `subscription_plan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `upazilas`
--
ALTER TABLE `upazilas`
  MODIFY `id` int(2) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `varify`
--
ALTER TABLE `varify`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=184;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
