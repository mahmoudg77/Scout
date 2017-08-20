-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 20, 2017 at 04:00 PM
-- Server version: 5.6.35
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smsegin1_arabscout`
--

-- --------------------------------------------------------

--
-- Table structure for table `comp`
--

CREATE TABLE `comp` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(150) CHARACTER SET utf8 NOT NULL,
  `approval_request` tinyint(1) DEFAULT '0',
  `approval_by` int(8) DEFAULT NULL,
  `approval_at` datetime DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `compuser`
--

CREATE TABLE `compuser` (
  `id` int(10) UNSIGNED NOT NULL,
  `campId` int(10) NOT NULL,
  `userId` int(8) NOT NULL,
  `approval_request` tinyint(1) DEFAULT '0',
  `approval_by` int(8) DEFAULT NULL,
  `approval_at` datetime DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contacttype`
--

CREATE TABLE `contacttype` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacttype`
--

INSERT INTO `contacttype` (`id`, `name`, `created_by`, `created_at`, `updated_by`, `updated_at`, `deleted_by`, `deleted_at`, `is_deleted`) VALUES
(1, 'Address', 7, '2017-08-06 06:47:17', NULL, NULL, NULL, NULL, 0),
(2, 'Email', 7, '2017-08-06 06:47:34', NULL, NULL, NULL, NULL, 0),
(3, 'Phone', 7, '2017-08-06 06:47:38', NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `contactuser`
--

CREATE TABLE `contactuser` (
  `id` int(10) UNSIGNED NOT NULL,
  `userId` int(8) NOT NULL,
  `contactTypeId` int(2) NOT NULL,
  `contactValue` varchar(250) CHARACTER SET utf8 NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactuser`
--

INSERT INTO `contactuser` (`id`, `userId`, `contactTypeId`, `contactValue`, `created_by`, `created_at`, `updated_by`, `updated_at`, `deleted_by`, `deleted_at`, `is_deleted`) VALUES
(1, 1, 2, 'info@arabscout.net', 0, '2017-08-08 14:28:07', NULL, NULL, NULL, NULL, 0),
(2, 1, 1, 'Giza', 0, '2017-08-08 14:28:07', NULL, NULL, NULL, NULL, 0),
(3, 1, 3, '010000000', 0, '2017-08-08 14:28:07', NULL, NULL, NULL, NULL, 0),
(4, 2, 1, '', 1, '2017-08-08 14:48:28', NULL, NULL, NULL, NULL, 0),
(5, 2, 2, 'mahmoudg77@gmail.com', 1, '2017-08-08 14:48:28', NULL, NULL, NULL, NULL, 0),
(6, 2, 3, '01143184244', 1, '2017-08-08 14:48:28', NULL, NULL, NULL, NULL, 0),
(7, 2, 3, '', 1, '2017-08-08 14:48:28', NULL, NULL, NULL, NULL, 0),
(8, 3, 2, 'ahmedshahin_5555@yahoo.com', 0, '2017-08-15 03:21:44', NULL, NULL, NULL, NULL, 0),
(9, 3, 1, '7 atafi elkhalefa', 0, '2017-08-15 03:21:44', NULL, NULL, NULL, NULL, 0),
(10, 3, 3, '01116072260', 0, '2017-08-15 03:21:44', NULL, NULL, NULL, NULL, 0),
(94, 25, 3, '', 2, '2017-08-17 06:00:55', NULL, NULL, NULL, NULL, 0),
(93, 25, 3, '123456789', 2, '2017-08-17 06:00:55', NULL, NULL, NULL, NULL, 0),
(92, 25, 2, 'profile9@arabscout.net', 2, '2017-08-17 06:00:55', NULL, NULL, NULL, NULL, 0),
(91, 25, 1, '', 2, '2017-08-17 06:00:55', NULL, NULL, NULL, NULL, 0),
(90, 24, 3, '', 2, '2017-08-17 06:00:03', NULL, NULL, NULL, NULL, 0),
(89, 24, 3, '123456789', 2, '2017-08-17 06:00:03', NULL, NULL, NULL, NULL, 0),
(88, 24, 2, 'profile8@arabscout.net', 2, '2017-08-17 06:00:03', NULL, NULL, NULL, NULL, 0),
(87, 24, 1, '', 2, '2017-08-17 06:00:03', NULL, NULL, NULL, NULL, 0),
(86, 23, 3, '', 2, '2017-08-17 05:59:21', NULL, NULL, NULL, NULL, 0),
(85, 23, 3, '123456789', 2, '2017-08-17 05:59:21', NULL, NULL, NULL, NULL, 0),
(84, 23, 2, 'profile7@arabscout.net', 2, '2017-08-17 05:59:21', NULL, NULL, NULL, NULL, 0),
(83, 23, 1, '', 2, '2017-08-17 05:59:21', NULL, NULL, NULL, NULL, 0),
(82, 22, 3, '', 2, '2017-08-17 05:58:47', NULL, NULL, NULL, NULL, 0),
(81, 22, 3, '123456789', 2, '2017-08-17 05:58:47', NULL, NULL, NULL, NULL, 0),
(80, 22, 2, 'profile6@arabscout.net', 2, '2017-08-17 05:58:47', NULL, NULL, NULL, NULL, 0),
(79, 22, 1, '', 2, '2017-08-17 05:58:47', NULL, NULL, NULL, NULL, 0),
(78, 21, 3, '', 2, '2017-08-17 05:58:01', NULL, NULL, NULL, NULL, 0),
(77, 21, 3, '123456789', 2, '2017-08-17 05:58:01', NULL, NULL, NULL, NULL, 0),
(76, 21, 2, 'profile5@arabscout.net', 2, '2017-08-17 05:58:01', NULL, NULL, NULL, NULL, 0),
(75, 21, 1, '', 2, '2017-08-17 05:58:01', NULL, NULL, NULL, NULL, 0),
(74, 20, 3, '', 2, '2017-08-17 05:57:26', NULL, NULL, NULL, NULL, 0),
(73, 20, 3, '123456789', 2, '2017-08-17 05:57:26', NULL, NULL, NULL, NULL, 0),
(72, 20, 2, 'profile4@arabscout.net', 2, '2017-08-17 05:57:26', NULL, NULL, NULL, NULL, 0),
(71, 20, 1, '', 2, '2017-08-17 05:57:26', NULL, NULL, NULL, NULL, 0),
(70, 19, 3, '', 2, '2017-08-17 05:55:58', NULL, NULL, NULL, NULL, 0),
(69, 19, 3, '123456789', 2, '2017-08-17 05:55:58', NULL, NULL, NULL, NULL, 0),
(68, 19, 2, 'profile2@arabscout.net', 2, '2017-08-17 05:55:58', NULL, NULL, NULL, NULL, 0),
(67, 19, 1, '', 2, '2017-08-17 05:55:58', NULL, NULL, NULL, NULL, 0),
(66, 18, 3, '', 2, '2017-08-17 05:54:56', NULL, NULL, NULL, NULL, 0),
(65, 18, 3, '123456789', 2, '2017-08-17 05:54:56', NULL, NULL, NULL, NULL, 0),
(64, 18, 2, 'profile2@arabscout.net', 2, '2017-08-17 05:54:56', NULL, NULL, NULL, NULL, 0),
(63, 18, 1, '', 2, '2017-08-17 05:54:56', NULL, NULL, NULL, NULL, 0),
(62, 17, 3, '', 2, '2017-08-17 05:54:22', NULL, NULL, NULL, NULL, 0),
(61, 17, 3, '123456789', 2, '2017-08-17 05:54:22', NULL, NULL, NULL, NULL, 0),
(60, 17, 2, 'profile1@arabscout.net', 2, '2017-08-17 05:54:22', NULL, NULL, NULL, NULL, 0),
(59, 17, 1, '', 2, '2017-08-17 05:54:22', NULL, NULL, NULL, NULL, 0),
(95, 26, 1, '', 2, '2017-08-17 06:04:42', NULL, NULL, NULL, NULL, 0),
(96, 26, 2, 'profile10@arabscout.net', 2, '2017-08-17 06:04:42', NULL, NULL, NULL, NULL, 0),
(97, 26, 3, '123456789', 2, '2017-08-17 06:04:42', NULL, NULL, NULL, NULL, 0),
(98, 26, 3, '', 2, '2017-08-17 06:04:42', NULL, NULL, NULL, NULL, 0),
(99, 27, 1, '', 2, '2017-08-17 06:05:23', NULL, NULL, NULL, NULL, 0),
(100, 27, 2, 'profile11@arabscout.net', 2, '2017-08-17 06:05:23', NULL, NULL, NULL, NULL, 0),
(101, 27, 3, '123456789', 2, '2017-08-17 06:05:23', NULL, NULL, NULL, NULL, 0),
(102, 27, 3, '', 2, '2017-08-17 06:05:23', NULL, NULL, NULL, NULL, 0),
(103, 28, 1, '', 2, '2017-08-17 06:06:12', NULL, NULL, NULL, NULL, 0),
(104, 28, 2, 'profile12@arabscout.net', 2, '2017-08-17 06:06:12', NULL, NULL, NULL, NULL, 0),
(105, 28, 3, '123456789', 2, '2017-08-17 06:06:12', NULL, NULL, NULL, NULL, 0),
(106, 28, 3, '', 2, '2017-08-17 06:06:12', NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE `experiences` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(250) CHARACTER SET utf8 NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `experienesuser`
--

CREATE TABLE `experienesuser` (
  `id` int(10) UNSIGNED NOT NULL,
  `userId` int(8) NOT NULL,
  `experienceId` int(6) NOT NULL,
  `approval_request` tinyint(1) DEFAULT '0',
  `approval_by` int(8) DEFAULT NULL,
  `approval_at` datetime DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hobbies`
--

CREATE TABLE `hobbies` (
  `id` int(4) UNSIGNED NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hobbies`
--

INSERT INTO `hobbies` (`id`, `name`, `created_by`, `created_at`, `updated_by`, `updated_at`, `deleted_by`, `deleted_at`, `is_deleted`) VALUES
(1, 'سباحة', 0, '2017-08-08 14:25:16', NULL, NULL, NULL, NULL, 0),
(2, 'رماية', 0, '2017-08-08 14:25:16', NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `hobbiesusers`
--

CREATE TABLE `hobbiesusers` (
  `id` int(7) UNSIGNED NOT NULL,
  `hobbiesId` int(3) NOT NULL,
  `userId` int(7) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `file_name` varchar(300) CHARACTER SET utf8 NOT NULL,
  `model_id` int(11) NOT NULL,
  `model_name` varchar(100) NOT NULL,
  `tag` varchar(50) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `file_name`, `model_id`, `model_name`, `tag`, `created_by`, `created_at`, `updated_by`, `updated_at`, `deleted_by`, `deleted_at`, `is_deleted`) VALUES
(17, '435e8.jpg', 67, 'App\\Models\\Profile\\Profile', 'Personal', 0, '2017-08-08 14:19:11', NULL, NULL, NULL, NULL, 0),
(18, 'fa659.png', 67, 'App\\Models\\Profile\\Profile', 'Cover', 0, '2017-08-08 14:19:11', NULL, NULL, NULL, NULL, 0),
(19, '953a4.gif', 68, 'App\\Models\\Profile\\Profile', 'Personal', 0, '2017-08-08 14:22:51', NULL, NULL, NULL, NULL, 0),
(20, '67ca9.jpg', 68, 'App\\Models\\Profile\\Profile', 'Cover', 0, '2017-08-08 14:22:51', NULL, NULL, NULL, NULL, 0),
(21, '5dea6.gif', 1, 'App\\Models\\Profile\\Profile', 'Personal', 0, '2017-08-08 14:28:07', NULL, NULL, NULL, NULL, 0),
(22, '44327.jpg', 1, 'App\\Models\\Profile\\Profile', 'Cover', 0, '2017-08-08 14:28:07', NULL, NULL, NULL, NULL, 0),
(23, 'e38eb.jpg', 3, 'App\\Models\\Profile\\Profile', 'Personal', 0, '2017-08-15 03:21:44', NULL, NULL, NULL, NULL, 0),
(24, 'b9a30.jpg', 3, 'App\\Models\\Profile\\Profile', 'Cover', 0, '2017-08-15 03:21:44', NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id` int(3) UNSIGNED NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `fromAge` int(4) NOT NULL,
  `toAge` int(4) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id`, `name`, `fromAge`, `toAge`, `created_by`, `created_at`, `updated_by`, `updated_at`, `deleted_by`, `deleted_at`, `is_deleted`) VALUES
(1, 'براعم', 5, 10, 7, '2017-08-06 07:48:22', NULL, NULL, NULL, NULL, 0),
(2, 'أشبال', 5, 10, 7, '2017-08-06 07:48:36', NULL, NULL, NULL, NULL, 0),
(3, 'كشافة', 5, 10, 7, '2017-08-06 07:48:42', NULL, NULL, NULL, NULL, 0),
(4, 'كشاف متقدم', 5, 10, 7, '2017-08-06 07:48:50', NULL, NULL, NULL, NULL, 0),
(5, 'جوالة', 5, 10, 7, '2017-08-06 07:48:57', NULL, NULL, NULL, NULL, 0),
(6, 'teet', 324, 234, 7, '2017-08-06 07:54:49', NULL, '2017-08-06 09:54:59', 7, '2017-08-06 09:54:59', 1);

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `id` int(3) UNSIGNED NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `sec_groups` varchar(100) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`id`, `name`, `sec_groups`, `created_by`, `created_at`, `updated_by`, `updated_at`, `deleted_by`, `deleted_at`, `is_deleted`) VALUES
(4, 'مفوض', 'branch_admin', 0, '2017-08-08 13:58:24', 1, '2017-08-20 10:29:29', NULL, NULL, 0),
(5, 'قائد فريق', 'team_admin', 0, '2017-08-08 13:58:24', NULL, '2017-08-20 10:29:12', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `positionuser`
--

CREATE TABLE `positionuser` (
  `id` int(10) UNSIGNED NOT NULL,
  `postionId` int(3) NOT NULL,
  `userId` int(7) NOT NULL,
  `approval_request` tinyint(1) DEFAULT '0',
  `approval_by` int(8) DEFAULT NULL,
  `approval_at` datetime DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `positionuser`
--

INSERT INTO `positionuser` (`id`, `postionId`, `userId`, `approval_request`, `approval_by`, `approval_at`, `created_by`, `created_at`, `updated_by`, `updated_at`, `deleted_by`, `deleted_at`, `is_deleted`) VALUES
(1, 4, 1, 1, 1, '2017-08-12 15:56:33', 0, '2017-08-08 14:28:07', 1, '2017-08-12 15:56:33', NULL, NULL, 0),
(2, 5, 3, 1, 1, '2017-08-20 04:31:39', 0, '2017-08-15 03:21:44', 1, '2017-08-20 04:31:39', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `Profile_ID` int(8) UNSIGNED NOT NULL,
  `First_Name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Second_Name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Third_Name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Forth_Name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `National_Number` varchar(16) NOT NULL,
  `Birth_Date` date DEFAULT NULL,
  `Gender` tinyint(1) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT '0',
  `approval_request` tinyint(1) DEFAULT NULL,
  `approval_by` int(11) DEFAULT NULL,
  `approval_at` datetime DEFAULT NULL,
  `serial` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`Profile_ID`, `First_Name`, `Second_Name`, `Third_Name`, `Forth_Name`, `National_Number`, `Birth_Date`, `Gender`, `created_by`, `created_at`, `updated_by`, `updated_at`, `deleted_by`, `deleted_at`, `is_deleted`, `approval_request`, `approval_by`, `approval_at`, `serial`) VALUES
(1, 'Admin', 'Arab', 'Scout', 'Website', '27710012107438', '2017-08-08', 1, 0, '2017-08-08 14:28:06', 1, '2017-08-17 10:56:45', NULL, NULL, 0, NULL, NULL, NULL, NULL),
(2, 'Leader', 'Second Name', '', '', '123', '2017-08-16', 0, 1, '2017-08-08 14:48:28', 1, '2017-08-20 04:03:25', NULL, NULL, 0, 1, 1, '2017-08-20 04:03:25', '0101010010114'),
(3, 'ahmed', 'abdalah', 'mohamed', 'mohamed', '2147483647', '1986-09-05', 1, 0, '2017-08-15 03:21:44', 1, '2017-08-20 04:03:25', NULL, NULL, 0, 1, 1, '2017-08-20 04:03:25', '0101010010113'),
(27, 'Profile 11', 'Second Name', '', '', '234567', '2013-01-01', 1, 2, '2017-08-17 06:05:23', 1, '2017-08-20 04:03:25', NULL, NULL, 0, 1, 1, '2017-08-20 04:03:25', '0101010010111'),
(26, 'Profile 10', 'Second Name', '', '', '23456', '2013-02-01', 1, 2, '2017-08-17 06:04:42', 1, '2017-08-20 04:03:25', NULL, NULL, 0, 1, 1, '2017-08-20 04:03:25', '0101010010110'),
(25, 'Profile 9', 'Second Name', '', '', '2345', '2013-12-31', 1, 2, '2017-08-17 06:00:55', 1, '2017-08-20 04:03:25', NULL, NULL, 0, 1, 1, '2017-08-20 04:03:25', '0101010010109'),
(24, 'Profile 8', 'Second Name', '', '', '234', '2014-01-01', 1, 2, '2017-08-17 06:00:03', 1, '2017-08-20 04:03:25', NULL, NULL, 0, 1, 1, '2017-08-20 04:03:25', '0101010010108'),
(23, 'Profile 7', 'Second Name', '', '', '1234567890', '2014-01-01', 1, 2, '2017-08-17 05:59:21', 1, '2017-08-20 04:03:25', NULL, NULL, 0, 1, 1, '2017-08-20 04:03:25', '0101010010107'),
(22, 'Profile 6', 'Second Name', '', '', '123456789', '2014-01-01', 1, 2, '2017-08-17 05:58:47', 1, '2017-08-20 04:03:25', NULL, NULL, 0, 1, 1, '2017-08-20 04:03:25', '0101010010106'),
(21, 'Profile 5', 'Second Name', '', '', '12345678', '2014-01-01', 1, 2, '2017-08-17 05:58:01', 1, '2017-08-20 04:03:25', NULL, NULL, 0, 1, 1, '2017-08-20 04:03:25', '0101010010105'),
(20, 'Profile 4', 'Second Name', '', '', '1234567', '2014-01-01', 1, 2, '2017-08-17 05:57:26', 1, '2017-08-20 04:03:25', NULL, NULL, 0, 1, 1, '2017-08-20 04:03:25', '0101010010104'),
(19, 'Profile 3', 'Second Name', '', '', '123456', '2014-01-01', 1, 2, '2017-08-17 05:55:58', 1, '2017-08-20 04:03:25', NULL, NULL, 0, 1, 1, '2017-08-20 04:03:25', '0101010010103'),
(18, 'Profile 2', 'Second Name', '', '', '12345', '2014-01-01', 1, 2, '2017-08-17 05:54:56', 1, '2017-08-20 04:03:25', NULL, NULL, 0, 1, 1, '2017-08-20 04:03:25', '0101010010102'),
(17, 'Profile 1', 'Second Name', '', '', '1234', '2014-01-01', 1, 2, '2017-08-17 05:54:22', 1, '2017-08-20 04:03:25', NULL, NULL, 0, 1, 1, '2017-08-20 04:03:25', '0101010010101'),
(28, 'Profile 12', 'Second Name', '', '', '2345678', '2013-03-01', 1, 2, '2017-08-17 06:06:12', 1, '2017-08-20 04:03:25', NULL, NULL, 0, 1, 1, '2017-08-20 04:03:25', '0101010010112');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) UNSIGNED NOT NULL,
  `regYear` varchar(50) NOT NULL,
  `regFrom` date NOT NULL,
  `regTo` date NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `regYear`, `regFrom`, `regTo`, `created_by`, `created_at`, `updated_by`, `updated_at`, `deleted_by`, `deleted_at`, `is_deleted`) VALUES
(3, '2017-2018', '2017-07-01', '2018-07-31', 1, '2017-08-17 05:38:00', NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `registeryuser`
--

CREATE TABLE `registeryuser` (
  `id` int(7) UNSIGNED NOT NULL,
  `regId` int(8) NOT NULL,
  `userId` int(8) NOT NULL,
  `teamId` int(8) DEFAULT '0',
  `approval_request` tinyint(1) DEFAULT '0',
  `approval_by` int(8) DEFAULT NULL,
  `approval_at` datetime DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registeryuser`
--

INSERT INTO `registeryuser` (`id`, `regId`, `userId`, `teamId`, `approval_request`, `approval_by`, `approval_at`, `created_by`, `created_at`, `updated_by`, `updated_at`, `deleted_by`, `deleted_at`, `is_deleted`) VALUES
(7, 3, 17, 48, 1, 1, '2017-08-20 04:03:25', 2, '2017-08-18 08:01:00', 1, '2017-08-20 04:03:25', NULL, NULL, 0),
(8, 3, 18, 48, 1, 1, '2017-08-20 04:03:25', 2, '2017-08-18 08:01:00', 1, '2017-08-20 04:03:25', NULL, NULL, 0),
(9, 3, 19, 48, 1, 1, '2017-08-20 04:03:25', 2, '2017-08-18 08:01:00', 1, '2017-08-20 04:03:25', NULL, NULL, 0),
(10, 3, 20, 48, 1, 1, '2017-08-20 04:03:25', 2, '2017-08-18 08:01:00', 1, '2017-08-20 04:03:25', NULL, NULL, 0),
(11, 3, 21, 48, 1, 1, '2017-08-20 04:03:25', 2, '2017-08-18 08:01:00', 1, '2017-08-20 04:03:25', NULL, NULL, 0),
(12, 3, 22, 48, 1, 1, '2017-08-20 04:03:25', 2, '2017-08-18 08:01:00', 1, '2017-08-20 04:03:25', NULL, NULL, 0),
(13, 3, 23, 48, 1, 1, '2017-08-20 04:03:25', 2, '2017-08-18 08:01:00', 1, '2017-08-20 04:03:25', NULL, NULL, 0),
(14, 3, 24, 48, 1, 1, '2017-08-20 04:03:25', 2, '2017-08-18 08:01:00', 1, '2017-08-20 04:03:25', NULL, NULL, 0),
(15, 3, 25, 48, 1, 1, '2017-08-20 04:03:25', 2, '2017-08-18 08:01:00', 1, '2017-08-20 04:03:25', NULL, NULL, 0),
(16, 3, 26, 48, 1, 1, '2017-08-20 04:03:25', 2, '2017-08-18 08:01:00', 1, '2017-08-20 04:03:25', NULL, NULL, 0),
(17, 3, 27, 48, 1, 1, '2017-08-20 04:03:25', 2, '2017-08-18 08:01:00', 1, '2017-08-20 04:03:25', NULL, NULL, 0),
(18, 3, 28, 48, 1, 1, '2017-08-20 04:03:25', 2, '2017-08-18 08:01:00', 1, '2017-08-20 04:03:25', NULL, NULL, 0),
(19, 3, 3, 48, 1, 1, '2017-08-20 04:03:25', 0, '2017-08-20 07:37:23', 1, '2017-08-20 04:03:25', NULL, NULL, 0),
(20, 3, 2, 48, 1, 1, '2017-08-20 04:03:25', 0, '2017-08-20 07:38:48', 1, '2017-08-20 04:03:25', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sec_accessright`
--

CREATE TABLE `sec_accessright` (
  `id` int(8) UNSIGNED NOT NULL,
  `groupid` int(8) NOT NULL,
  `model_name` varchar(50) NOT NULL,
  `accesstype` enum('view','add','edit','delete') NOT NULL,
  `filter` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sec_accessright`
--

INSERT INTO `sec_accessright` (`id`, `groupid`, `model_name`, `accesstype`, `filter`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(213, 1, 'App\\*', 'view', '', 0, '2017-07-15 11:50:32', 7, '2017-08-08 14:48:13'),
(222, 1, 'App\\*', 'delete', '', 0, '2017-07-15 15:53:30', 7, '2017-08-08 14:48:18'),
(221, 1, 'App\\*', 'edit', '', 0, '2017-07-15 15:53:20', NULL, '2017-08-08 14:48:21'),
(220, 1, 'App\\*', 'add', '', 0, '2017-07-15 15:53:07', NULL, '2017-08-08 14:48:24'),
(224, 8, 'App\\Models\\Lookup\\TeamsReg', 'view', '[[\'approval_request\']]', 1, '2017-08-12 15:59:41', NULL, NULL),
(225, 8, 'App\\Models\\Lookup\\TeamsReg', 'add', '', 1, '2017-08-17 03:16:14', NULL, NULL),
(226, 8, 'App\\Models\\Lookup\\*', 'view', '', 1, '2017-08-17 05:08:53', NULL, NULL),
(227, 8, 'App\\Models\\Admin\\Teams', 'view', '', 1, '2017-08-17 05:16:21', NULL, NULL),
(228, 8, 'App\\Models\\Profile\\Profile', 'add', '', 1, '2017-08-17 05:22:14', NULL, NULL),
(229, 8, 'App\\Models\\Profile\\*', 'add', '', 1, '2017-08-17 05:23:04', NULL, NULL),
(230, 8, 'App\\Models\\Admin\\RegisteryUserLog', 'add', '', 1, '2017-08-17 13:44:38', NULL, NULL),
(231, 8, 'App\\Models\\Admin\\RegisteryUserLog', 'view', '', 1, '2017-08-17 13:45:23', NULL, NULL),
(232, 8, 'App\\Models\\Admin\\Teams', 'add', '', 1, '2017-08-17 13:47:54', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sec_group`
--

CREATE TABLE `sec_group` (
  `id` int(8) UNSIGNED NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `groupkey` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `categoryid` int(8) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sec_group`
--

INSERT INTO `sec_group` (`id`, `name`, `groupkey`, `categoryid`, `description`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(1, 'Admin', 'sys_admin', 1, 'System Administrator', 0, '2017-07-14 12:48:42', 1, '2017-08-08 15:17:21'),
(4, 'Country Admin', 'country_admin', 1, 'Administrtors of country scout', 1, '2017-08-08 14:53:13', 1, '2017-08-08 15:12:27'),
(5, 'Organization Admin', 'org_admin', 1, 'Administrators of organizations in scout', 1, '2017-08-08 14:54:14', 1, '2017-08-08 15:12:33'),
(6, 'Branch Admin', 'branch_admin', 1, 'Administrators of branches in scout', 1, '2017-08-08 14:55:13', 1, '2017-08-08 15:12:39'),
(7, 'Office Admin', 'office_admin', 1, 'Administrators of office in scout', 1, '2017-08-08 14:55:59', 1, '2017-08-08 15:12:44'),
(8, 'Team Admin', 'team_admin', 1, 'Administrators of team inside office in scout', 1, '2017-08-08 15:13:52', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sec_group_category`
--

CREATE TABLE `sec_group_category` (
  `id` int(8) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sec_group_category`
--

INSERT INTO `sec_group_category` (`id`, `name`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(1, 'Accounting', 0, '2017-07-14 12:48:42', 7, '2017-08-08 06:17:51'),
(2, 'Events', 0, '2017-07-14 12:48:42', NULL, NULL),
(3, 'Articles', 0, '2017-07-14 12:48:42', NULL, NULL),
(4, 'Finance', 0, '2017-07-14 12:48:42', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sec_user_group_rel`
--

CREATE TABLE `sec_user_group_rel` (
  `id` int(8) UNSIGNED NOT NULL,
  `userid` int(8) NOT NULL,
  `groupid` int(8) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sec_user_group_rel`
--

INSERT INTO `sec_user_group_rel` (`id`, `userid`, `groupid`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(1, 1, 1, 0, '2017-08-08 14:47:40', NULL, NULL),
(4, 2, 8, 1, '2017-08-20 04:31:39', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `studies`
--

CREATE TABLE `studies` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(350) CHARACTER SET utf8 NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `studiesusers`
--

CREATE TABLE `studiesusers` (
  `id` int(11) UNSIGNED NOT NULL,
  `studyId` int(6) NOT NULL,
  `userId` int(8) NOT NULL,
  `approval_request` tinyint(1) DEFAULT '0',
  `approval_by` int(8) DEFAULT NULL,
  `approval_at` datetime DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teaminfo`
--

CREATE TABLE `teaminfo` (
  `id` int(11) UNSIGNED NOT NULL,
  `TeamId` int(11) NOT NULL,
  `TeamCatId` int(11) NOT NULL,
  `LeaderId` int(11) NOT NULL,
  `AFLeaderId` int(11) DEFAULT NULL,
  `ASLeaderId` int(11) DEFAULT '0',
  `NoOfTeam` int(11) NOT NULL,
  `approval_request` tinyint(4) DEFAULT NULL,
  `approval_by` int(11) DEFAULT NULL,
  `approval_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `is_deleted` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teaminfo`
--

INSERT INTO `teaminfo` (`id`, `TeamId`, `TeamCatId`, `LeaderId`, `AFLeaderId`, `ASLeaderId`, `NoOfTeam`, `approval_request`, `approval_by`, `approval_at`, `created_by`, `created_at`, `updated_by`, `updated_at`, `deleted_by`, `deleted_at`, `is_deleted`) VALUES
(13, 48, 1, 3, NULL, 0, 12, 1, 1, '2017-08-20 04:03:25', 2, '2017-08-18 08:01:00', 1, '2017-08-20 04:03:25', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(300) CHARACTER SET utf8 NOT NULL,
  `serial` varchar(50) NOT NULL,
  `parentId` int(8) NOT NULL,
  `level_type` int(4) DEFAULT '0',
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `serial`, `parentId`, `level_type`, `created_by`, `created_at`, `updated_by`, `updated_at`, `deleted_by`, `deleted_at`, `is_deleted`) VALUES
(1, 'مصر', '01', 0, 1, 7, '2017-08-04 11:54:25', NULL, '2017-08-06 13:51:29', NULL, NULL, 0),
(2, 'لينان', '02', 0, 1, 7, '2017-08-04 11:54:25', NULL, '2017-08-06 13:51:32', NULL, NULL, 0),
(3, 'جمعية الكشافة البحرية', '0101', 1, 2, 7, '2017-08-04 11:54:25', NULL, '2017-08-06 13:51:35', NULL, NULL, 0),
(4, 'جمعية الكشافة الجوية', '0102', 1, 2, 7, '2017-08-04 11:54:25', NULL, '2017-08-06 13:51:38', NULL, NULL, 0),
(5, 'جمعية فتيان الكشافة', '0103', 1, 2, 7, '2017-08-04 11:54:25', NULL, '2017-08-06 13:51:47', NULL, NULL, 0),
(6, 'جمعية المرشدات', '0104', 1, 2, 7, '2017-08-04 11:54:25', NULL, '2017-08-06 13:51:49', NULL, NULL, 0),
(7, 'القاهرة', '010101', 3, 3, 7, '2017-08-04 11:54:25', NULL, '2017-08-19 18:25:14', NULL, NULL, 0),
(8, 'الاسكندرية', '010102', 3, 3, 7, '2017-08-04 11:54:25', NULL, '2017-08-19 18:25:20', NULL, NULL, 0),
(9, 'عابدين', '010101001', 7, 4, 7, '2017-08-04 11:54:25', NULL, '2017-08-19 18:25:26', NULL, NULL, 0),
(10, 'باب الشعرية', '010101002', 7, 4, 7, '2017-08-04 11:54:25', NULL, '2017-08-19 18:26:07', NULL, NULL, 0),
(11, 'الويلى', '010101003', 7, 4, 7, '2017-08-04 11:54:25', NULL, '2017-08-19 18:26:12', NULL, NULL, 0),
(12, 'دار السلام', '010101004', 7, 4, 7, '2017-08-04 11:54:25', NULL, '2017-08-19 18:26:17', NULL, NULL, 0),
(13, 'ام النور', '010101005', 7, 4, 7, '2017-08-04 11:54:25', NULL, '2017-08-19 18:26:21', NULL, NULL, 0),
(14, 'مركز شباب الساحل', '010101006', 7, 4, 7, '2017-08-04 11:54:25', NULL, '2017-08-19 18:26:27', NULL, NULL, 0),
(15, 'موسسة حياة', '010101007', 7, 4, 7, '2017-08-04 11:54:25', NULL, '2017-08-19 18:26:33', NULL, NULL, 0),
(48, 'فريق 1', '01010100101', 9, 5, 2, '2017-08-18 08:01:00', NULL, '2017-08-19 18:26:49', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(60) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `accid` int(8) NOT NULL,
  `token` varchar(100) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `phone`, `accid`, `token`, `created_by`, `created_at`, `updated_by`, `updated_at`, `deleted_by`, `deleted_at`, `is_deleted`) VALUES
(1, 'Admin', 'info@arabscout.net', 'db8134a0a4a486caf791320bedee266e', NULL, NULL, 1, '0ffdcdea-7c46-11e7-beee-0025902a8534', 0, '2017-08-08 14:30:01', NULL, '2017-08-20 04:30:44', NULL, NULL, 0),
(2, 'ahmed abdalah mohamed', 'ahmedscout', '25f9e794323b453885f5181f1b624d0b', NULL, NULL, 3, '33A825BF-872B-96DB-F4EA-E98A4F0DC40E', 1, '2017-08-15 03:23:12', NULL, '2017-08-19 12:20:52', NULL, NULL, 0),
(22, 'Profile 8 Second Name ', '234', 'd763671fb0c1a93f301fe8ec1c0c499b', NULL, '', 24, '0C82E3D4-6F6D-A4BB-B071-19DD91D9B950', 1, '2017-08-18 10:14:30', NULL, NULL, NULL, NULL, 0),
(21, 'Profile 7 Second Name ', '1234567890', '07f8941a7bc63b05577ac264b08dad4b', NULL, '', 23, '21D5D3D8-9B18-080F-F050-7B9BDA65FBA2', 1, '2017-08-18 10:14:29', NULL, NULL, NULL, NULL, 0),
(20, 'Profile 6 Second Name ', '123456789', '2c29c221886d01a3f19e3affecf22249', NULL, '', 22, 'AA7198A0-3841-6879-C218-703515882E8F', 1, '2017-08-18 10:14:29', NULL, NULL, NULL, NULL, 0),
(19, 'Profile 5 Second Name ', '12345678', '754ee1cffefd697ebe5608fb240e54e6', NULL, '', 21, '8A507185-3EF1-8702-985C-1A1BA7B49C04', 1, '2017-08-18 10:14:29', NULL, NULL, NULL, NULL, 0),
(18, 'Profile 4 Second Name ', '1234567', '1b39e6e9528fd166e6ebd2ba526483e6', NULL, '', 20, '6A39ED15-48C5-1B95-FF63-CA043B3233A4', 1, '2017-08-18 10:14:29', NULL, NULL, NULL, NULL, 0),
(17, 'Profile 3 Second Name ', '123456', 'b5cc21c868426c9d8a99b0fe62d4f189', NULL, '', 19, '313978FA-733C-FCDA-B68F-F13E85F5CC08', 1, '2017-08-18 10:14:29', NULL, NULL, NULL, NULL, 0),
(16, 'Profile 2 Second Name ', '12345', '8c4aef1a98cd98da27834cc4bbf8f89f', NULL, '', 18, '41DAECB5-BC9D-E52D-C30C-87A98C80A1FE', 1, '2017-08-18 10:14:29', NULL, NULL, NULL, NULL, 0),
(15, 'Profile 1 Second Name ', '1234', 'a5a1e6c8997b54ac70f5a4e3ce8e5ce2', NULL, '', 17, '02A570A1-46F4-5DD4-B8A7-C3E2F909248B', 1, '2017-08-18 10:14:29', NULL, '2017-08-19 12:21:56', NULL, NULL, 0),
(23, 'Profile 9 Second Name ', '2345', '8c4aef1a98cd98da27834cc4bbf8f89f', NULL, '', 25, 'DCD17192-9102-9A6A-3EBF-8BC34618BCA6', 1, '2017-08-18 10:14:30', NULL, NULL, NULL, NULL, 0),
(24, 'Profile 10 Second Name ', '23456', 'b5cc21c868426c9d8a99b0fe62d4f189', NULL, '', 26, '7F21537D-2540-71F0-3B05-D12ADE8F5652', 1, '2017-08-18 10:14:30', NULL, NULL, NULL, NULL, 0),
(25, 'Profile 11 Second Name ', '234567', '1b39e6e9528fd166e6ebd2ba526483e6', NULL, '', 27, '4351D55B-91C3-3763-43CD-8C52E82E7B2E', 1, '2017-08-18 10:14:30', NULL, NULL, NULL, NULL, 0),
(26, 'Profile 12 Second Name ', '2345678', '754ee1cffefd697ebe5608fb240e54e6', NULL, '', 28, '7992023F-4E1D-3670-A833-203FE49571B0', 1, '2017-08-18 10:14:30', NULL, NULL, NULL, NULL, 0),
(27, 'Leader Second Name ', '123', '6e73f13e0bd7ed238e35f637fff21540', NULL, '', 2, '9F244790-B0C4-98F3-495E-1FDFFB020876', 1, '2017-08-20 01:39:17', NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `waitinglist`
--

CREATE TABLE `waitinglist` (
  `id` int(10) UNSIGNED NOT NULL,
  `userId` int(11) NOT NULL,
  `model_name` varchar(100) NOT NULL,
  `model_id` int(11) NOT NULL,
  `is_done` tinyint(1) NOT NULL DEFAULT '0',
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `waitinglist`
--

INSERT INTO `waitinglist` (`id`, `userId`, `model_name`, `model_id`, `is_done`, `created_by`, `created_at`, `updated_by`, `updated_at`, `deleted_by`, `deleted_at`, `is_deleted`) VALUES
(1, 0, 'App\\Models\\Profile\\Profile', 1, 1, 0, '2017-08-08 14:28:07', 1, '2017-08-12 15:56:35', NULL, NULL, 0),
(2, 0, 'App\\Models\\Profile\\PositionUserLog', 1, 1, 0, '2017-08-08 14:28:07', 1, '2017-08-12 15:56:33', NULL, NULL, 0),
(3, 1, 'App\\Models\\Profile\\Profile', 2, 1, 1, '2017-08-08 14:48:28', 1, '2017-08-20 01:39:17', NULL, NULL, 0),
(4, 0, 'App\\Models\\Profile\\Profile', 3, 1, 0, '2017-08-15 03:21:44', 1, '2017-08-20 01:38:53', NULL, NULL, 0),
(5, 0, 'App\\Models\\Profile\\PositionUserLog', 2, 1, 0, '2017-08-15 03:21:44', 1, '2017-08-20 04:31:39', NULL, NULL, 0),
(31, 2, 'App\\Models\\Lookup\\TeamsReg', 9, -1, 2, '2017-08-17 14:21:21', NULL, NULL, NULL, NULL, 0),
(30, 2, 'App\\Models\\Profile\\Profile', 28, -1, 2, '2017-08-17 06:06:12', NULL, NULL, NULL, NULL, 0),
(29, 2, 'App\\Models\\Profile\\Profile', 27, -1, 2, '2017-08-17 06:05:23', NULL, NULL, NULL, NULL, 0),
(28, 2, 'App\\Models\\Profile\\Profile', 26, -1, 2, '2017-08-17 06:04:42', NULL, NULL, NULL, NULL, 0),
(27, 2, 'App\\Models\\Profile\\Profile', 25, -1, 2, '2017-08-17 06:00:55', NULL, NULL, NULL, NULL, 0),
(26, 2, 'App\\Models\\Profile\\Profile', 24, -1, 2, '2017-08-17 06:00:03', NULL, NULL, NULL, NULL, 0),
(25, 2, 'App\\Models\\Profile\\Profile', 23, -1, 2, '2017-08-17 05:59:21', NULL, NULL, NULL, NULL, 0),
(24, 2, 'App\\Models\\Profile\\Profile', 22, -1, 2, '2017-08-17 05:58:47', NULL, NULL, NULL, NULL, 0),
(23, 2, 'App\\Models\\Profile\\Profile', 21, -1, 2, '2017-08-17 05:58:01', NULL, NULL, NULL, NULL, 0),
(22, 2, 'App\\Models\\Profile\\Profile', 20, -1, 2, '2017-08-17 05:57:26', NULL, NULL, NULL, NULL, 0),
(21, 2, 'App\\Models\\Profile\\Profile', 19, -1, 2, '2017-08-17 05:55:58', NULL, NULL, NULL, NULL, 0),
(20, 2, 'App\\Models\\Profile\\Profile', 18, -1, 2, '2017-08-17 05:54:56', NULL, NULL, NULL, NULL, 0),
(19, 2, 'App\\Models\\Profile\\Profile', 17, -1, 2, '2017-08-17 05:54:22', NULL, NULL, NULL, NULL, 0),
(32, 2, 'App\\Models\\Lookup\\TeamsReg', 10, -1, 2, '2017-08-17 14:28:59', NULL, NULL, NULL, NULL, 0),
(33, 2, 'App\\Models\\Lookup\\TeamsReg', 11, -1, 2, '2017-08-18 07:53:32', NULL, NULL, NULL, NULL, 0),
(34, 2, 'App\\Models\\Lookup\\TeamsReg', 12, -1, 2, '2017-08-18 07:59:14', NULL, NULL, NULL, NULL, 0),
(35, 2, 'App\\Models\\Lookup\\TeamsReg', 13, 1, 2, '2017-08-18 08:01:00', 1, '2017-08-20 04:03:25', NULL, NULL, 0),
(36, 2, 'App\\Models\\Admin\\RegisteryUserLog', 7, -1, 2, '2017-08-18 08:01:00', NULL, NULL, NULL, NULL, 0),
(37, 2, 'App\\Models\\Admin\\RegisteryUserLog', 8, -1, 2, '2017-08-18 08:01:00', NULL, NULL, NULL, NULL, 0),
(38, 2, 'App\\Models\\Admin\\RegisteryUserLog', 9, -1, 2, '2017-08-18 08:01:00', NULL, NULL, NULL, NULL, 0),
(39, 2, 'App\\Models\\Admin\\RegisteryUserLog', 10, -1, 2, '2017-08-18 08:01:00', NULL, NULL, NULL, NULL, 0),
(40, 2, 'App\\Models\\Admin\\RegisteryUserLog', 11, -1, 2, '2017-08-18 08:01:00', NULL, NULL, NULL, NULL, 0),
(41, 2, 'App\\Models\\Admin\\RegisteryUserLog', 12, -1, 2, '2017-08-18 08:01:00', NULL, NULL, NULL, NULL, 0),
(42, 2, 'App\\Models\\Admin\\RegisteryUserLog', 13, -1, 2, '2017-08-18 08:01:00', NULL, NULL, NULL, NULL, 0),
(43, 2, 'App\\Models\\Admin\\RegisteryUserLog', 14, -1, 2, '2017-08-18 08:01:00', NULL, NULL, NULL, NULL, 0),
(44, 2, 'App\\Models\\Admin\\RegisteryUserLog', 15, -1, 2, '2017-08-18 08:01:00', NULL, NULL, NULL, NULL, 0),
(45, 2, 'App\\Models\\Admin\\RegisteryUserLog', 16, -1, 2, '2017-08-18 08:01:00', NULL, NULL, NULL, NULL, 0),
(46, 2, 'App\\Models\\Admin\\RegisteryUserLog', 17, -1, 2, '2017-08-18 08:01:00', NULL, NULL, NULL, NULL, 0),
(47, 2, 'App\\Models\\Admin\\RegisteryUserLog', 18, -1, 2, '2017-08-18 08:01:00', NULL, NULL, NULL, NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comp`
--
ALTER TABLE `comp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `compuser`
--
ALTER TABLE `compuser`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mokhymId` (`campId`),
  ADD KEY `userId` (`userId`),
  ADD KEY `approval_request` (`approval_request`),
  ADD KEY `approval_by` (`approval_by`);

--
-- Indexes for table `contacttype`
--
ALTER TABLE `contacttype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactuser`
--
ALTER TABLE `contactuser`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experienesuser`
--
ALTER TABLE `experienesuser`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`),
  ADD KEY `experieneId` (`experienceId`);

--
-- Indexes for table `hobbies`
--
ALTER TABLE `hobbies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hobbiesusers`
--
ALTER TABLE `hobbiesusers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hobbiesId` (`hobbiesId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `positionuser`
--
ALTER TABLE `positionuser`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`),
  ADD KEY `approval_by` (`approval_by`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`Profile_ID`),
  ADD UNIQUE KEY `National_Number` (`National_Number`),
  ADD UNIQUE KEY `serial` (`serial`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`),
  ADD KEY `regFrom` (`regFrom`);

--
-- Indexes for table `registeryuser`
--
ALTER TABLE `registeryuser`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `sec_accessright`
--
ALTER TABLE `sec_accessright`
  ADD PRIMARY KEY (`id`),
  ADD KEY `accesstype` (`accesstype`),
  ADD KEY `model` (`model_name`);

--
-- Indexes for table `sec_group`
--
ALTER TABLE `sec_group`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `key` (`groupkey`);

--
-- Indexes for table `sec_group_category`
--
ALTER TABLE `sec_group_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sec_user_group_rel`
--
ALTER TABLE `sec_user_group_rel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studies`
--
ALTER TABLE `studies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studiesusers`
--
ALTER TABLE `studiesusers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`),
  ADD KEY `approval_by` (`approval_by`);

--
-- Indexes for table `teaminfo`
--
ALTER TABLE `teaminfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `searial` (`serial`),
  ADD KEY `name` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `token` (`token`);

--
-- Indexes for table `waitinglist`
--
ALTER TABLE `waitinglist`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comp`
--
ALTER TABLE `comp`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `compuser`
--
ALTER TABLE `compuser`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `contactuser`
--
ALTER TABLE `contactuser`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;
--
-- AUTO_INCREMENT for table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `experienesuser`
--
ALTER TABLE `experienesuser`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `hobbies`
--
ALTER TABLE `hobbies`
  MODIFY `id` int(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `hobbiesusers`
--
ALTER TABLE `hobbiesusers`
  MODIFY `id` int(7) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `id` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `positionuser`
--
ALTER TABLE `positionuser`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `Profile_ID` int(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `registeryuser`
--
ALTER TABLE `registeryuser`
  MODIFY `id` int(7) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `sec_accessright`
--
ALTER TABLE `sec_accessright`
  MODIFY `id` int(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=233;
--
-- AUTO_INCREMENT for table `sec_group`
--
ALTER TABLE `sec_group`
  MODIFY `id` int(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `sec_group_category`
--
ALTER TABLE `sec_group_category`
  MODIFY `id` int(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `sec_user_group_rel`
--
ALTER TABLE `sec_user_group_rel`
  MODIFY `id` int(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `studies`
--
ALTER TABLE `studies`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `studiesusers`
--
ALTER TABLE `studiesusers`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `teaminfo`
--
ALTER TABLE `teaminfo`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `waitinglist`
--
ALTER TABLE `waitinglist`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
