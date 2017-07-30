-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2017 at 02:35 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scout`
--

-- --------------------------------------------------------

--
-- Table structure for table `comp`
--

DROP TABLE IF EXISTS `comp`;
CREATE TABLE IF NOT EXISTS `comp` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(150) CHARACTER SET utf8 NOT NULL,
  `approval_request` tinyint(1) DEFAULT '0',
  `approval_by` int(8) DEFAULT NULL,
  `approval_at` datetime DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_by` int(11) NOT NULL,
  `deleted_at` datetime NOT NULL,
  `is_deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `compuser`
--

DROP TABLE IF EXISTS `compuser`;
CREATE TABLE IF NOT EXISTS `compuser` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `mokhymId` int(10) NOT NULL,
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
  `is_deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `mokhymId` (`mokhymId`),
  KEY `userId` (`userId`),
  KEY `approval_request` (`approval_request`),
  KEY `approval_by` (`approval_by`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contacttype`
--

DROP TABLE IF EXISTS `contacttype`;
CREATE TABLE IF NOT EXISTS `contacttype` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contactuser`
--

DROP TABLE IF EXISTS `contactuser`;
CREATE TABLE IF NOT EXISTS `contactuser` (
  `id` int(10) NOT NULL,
  `userId` int(8) NOT NULL,
  `contactTypeId` int(2) NOT NULL,
  `contactValue` varchar(250) CHARACTER SET utf8 NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `userId` (`userId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

DROP TABLE IF EXISTS `experiences`;
CREATE TABLE IF NOT EXISTS `experiences` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(250) CHARACTER SET utf8 NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `experienesuser`
--

DROP TABLE IF EXISTS `experienesuser`;
CREATE TABLE IF NOT EXISTS `experienesuser` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
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
  `is_deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `userId` (`userId`),
  KEY `experieneId` (`experienceId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hobbies`
--

DROP TABLE IF EXISTS `hobbies`;
CREATE TABLE IF NOT EXISTS `hobbies` (
  `id` int(4) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hobbiesusers`
--

DROP TABLE IF EXISTS `hobbiesusers`;
CREATE TABLE IF NOT EXISTS `hobbiesusers` (
  `id` int(7) UNSIGNED NOT NULL,
  `hobbiesId` int(3) NOT NULL,
  `userId` int(7) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `hobbiesId` (`hobbiesId`),
  KEY `userId` (`userId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `thumb` varchar(300) CHARACTER SET utf8 NOT NULL,
  `medium` varchar(300) CHARACTER SET utf8 NOT NULL,
  `orignal` varchar(300) CHARACTER SET utf8 NOT NULL,
  `model_id` int(11) NOT NULL,
  `model_name` varchar(100) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `thumb`, `medium`, `orignal`, `model_id`, `model_name`, `created_by`, `created_at`, `updated_by`, `updated_at`, `deleted_by`, `deleted_at`, `is_deleted`) VALUES
(1, 'sasda', 'adfsfgsdfg', 'fghfghfgh', 1, 'App\\Models\\Profile\\Profile', 0, '2017-07-27 17:11:19', 7, '2017-07-28 08:16:20', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

DROP TABLE IF EXISTS `position`;
CREATE TABLE IF NOT EXISTS `position` (
  `id` int(3) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`id`, `name`, `created_by`, `created_at`, `updated_by`, `updated_at`, `deleted_by`, `deleted_at`, `is_deleted`) VALUES
(1, 'رئيس مجلس الادارة', 0, '2017-07-15 09:14:42', NULL, '2017-07-15 09:34:21', NULL, NULL, NULL),
(2, 'قائد فريق', 7, '2017-07-15 10:55:19', NULL, NULL, NULL, NULL, 0),
(3, 'sdasdasd', 7, '2017-07-27 10:06:55', NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `positionuser`
--

DROP TABLE IF EXISTS `positionuser`;
CREATE TABLE IF NOT EXISTS `positionuser` (
  `id` int(10) NOT NULL,
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
  `is_deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `userId` (`userId`),
  KEY `approval_by` (`approval_by`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

DROP TABLE IF EXISTS `profile`;
CREATE TABLE IF NOT EXISTS `profile` (
  `Profile_ID` int(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `First_Name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Second_Name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Third_Name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Forth_Name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `National_Number` int(16) NOT NULL,
  `Birth_Date` date DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`Profile_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`Profile_ID`, `First_Name`, `Second_Name`, `Third_Name`, `Forth_Name`, `National_Number`, `Birth_Date`, `created_by`, `created_at`, `updated_by`, `updated_at`, `deleted_by`, `deleted_at`, `is_deleted`) VALUES
(1, 'أحمد', 'شمس الدين', 'محمد', 'خالد', 11, '2017-07-11', 0, '2017-07-15 09:21:31', NULL, '2017-07-17 10:29:03', NULL, '2017-07-15 11:30:19', NULL),
(2, 'Mahmoud Gomaa', '', '', '', 0, '0000-00-00', 3, '2017-07-19 01:58:16', NULL, NULL, NULL, NULL, 0),
(3, 'Test', '', '', '', 0, '0000-00-00', 3, '2017-07-19 02:14:05', NULL, '2017-07-19 08:21:34', 3, '2017-07-19 02:21:34', 1),
(4, 'Yosef', 'Mahmoud', 'Gomaa', 'Khalil', 123456789, '2003-08-23', 7, '2017-07-27 10:08:41', NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `protofolo`
--

DROP TABLE IF EXISTS `protofolo`;
CREATE TABLE IF NOT EXISTS `protofolo` (
  `id` int(4) UNSIGNED NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL,
  `secondname` varchar(255) NOT NULL,
  `thirdname` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(8) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `updated_by` int(8) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `posid` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `protofolo`
--

INSERT INTO `protofolo` (`id`, `firstname`, `secondname`, `thirdname`, `created_at`, `created_by`, `updated_at`, `deleted_at`, `deleted_by`, `updated_by`, `is_deleted`, `posid`) VALUES
(1, 'Test1', 'Test2', 'test3', '2017-07-16 12:21:25', 7, '2017-07-16 12:21:40', '2017-07-16 12:21:46', 7, 7, 1, 0),
(2, 'dddd', 'fff', 'ggg', '2017-07-16 12:31:07', 7, '2017-07-18 12:14:55', NULL, NULL, 7, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `id` int(11) NOT NULL,
  `userId` int(8) NOT NULL,
  `regYear` date NOT NULL,
  `regFrom` date NOT NULL,
  `regTo` date NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `regFrom` (`regFrom`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registeryuser`
--

DROP TABLE IF EXISTS `registeryuser`;
CREATE TABLE IF NOT EXISTS `registeryuser` (
  `Id` int(7) UNSIGNED NOT NULL AUTO_INCREMENT,
  `regId` int(8) NOT NULL,
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
  `is_deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`Id`),
  KEY `userId` (`userId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sec_accessright`
--

DROP TABLE IF EXISTS `sec_accessright`;
CREATE TABLE IF NOT EXISTS `sec_accessright` (
  `id` int(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `groupid` int(8) NOT NULL,
  `model_name` varchar(50) NOT NULL,
  `accesstype` enum('view','add','edit','delete') NOT NULL,
  `filter` varchar(255) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `accesstype` (`accesstype`),
  KEY `model` (`model_name`)
) ENGINE=MyISAM AUTO_INCREMENT=224 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sec_accessright`
--

INSERT INTO `sec_accessright` (`id`, `groupid`, `model_name`, `accesstype`, `filter`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(213, 3, 'App\\*', 'view', '', 0, '2017-07-15 11:50:32', 7, '2017-07-22 16:46:29'),
(222, 3, 'App\\*', 'delete', '', 0, '2017-07-15 15:53:30', 7, '2017-07-21 18:54:05'),
(221, 3, 'App\\*', 'edit', '', 0, '2017-07-15 15:53:20', NULL, NULL),
(220, 3, 'App\\*', 'add', '', 0, '2017-07-15 15:53:07', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sec_group`
--

DROP TABLE IF EXISTS `sec_group`;
CREATE TABLE IF NOT EXISTS `sec_group` (
  `id` int(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `groupkey` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `categoryid` int(8) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `key` (`groupkey`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sec_group`
--

INSERT INTO `sec_group` (`id`, `name`, `groupkey`, `categoryid`, `description`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(3, 'Admin', 'acc_admin', 1, '', 0, '2017-07-14 12:48:42', NULL, NULL),
(2, 'General', 'general', 1, '1111', 0, '2017-07-14 12:48:42', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sec_group_category`
--

DROP TABLE IF EXISTS `sec_group_category`;
CREATE TABLE IF NOT EXISTS `sec_group_category` (
  `id` int(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sec_group_category`
--

INSERT INTO `sec_group_category` (`id`, `name`, `created_by`, `created_at`, `updated_by`, `updated_at`, `deleted_by`, `deleted_at`, `is_deleted`) VALUES
(1, 'Accounting', 0, '2017-07-14 12:48:42', 7, '2017-07-15 13:53:35', NULL, NULL, 0),
(2, 'Events', 0, '2017-07-14 12:48:42', NULL, NULL, NULL, NULL, 0),
(3, 'Articles', 0, '2017-07-14 12:48:42', NULL, NULL, NULL, NULL, 0),
(4, 'Finance', 0, '2017-07-14 12:48:42', NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sec_user_group_rel`
--

DROP TABLE IF EXISTS `sec_user_group_rel`;
CREATE TABLE IF NOT EXISTS `sec_user_group_rel` (
  `id` int(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `userid` int(8) NOT NULL,
  `groupid` int(8) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sec_user_group_rel`
--

INSERT INTO `sec_user_group_rel` (`id`, `userid`, `groupid`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(4, 3, 2, 0, '2017-07-14 12:48:42', NULL, NULL),
(2, 3, 3, 0, '2017-07-14 12:48:42', NULL, NULL),
(3, 8, 2, 0, '2017-07-14 12:48:42', NULL, NULL),
(5, 7, 3, 0, '2017-07-15 11:49:04', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `studies`
--

DROP TABLE IF EXISTS `studies`;
CREATE TABLE IF NOT EXISTS `studies` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(350) CHARACTER SET utf8 NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `studiesusers`
--

DROP TABLE IF EXISTS `studiesusers`;
CREATE TABLE IF NOT EXISTS `studiesusers` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
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
  `is_deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `userId` (`userId`),
  KEY `approval_by` (`approval_by`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

DROP TABLE IF EXISTS `teams`;
CREATE TABLE IF NOT EXISTS `teams` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(300) CHARACTER SET utf8 NOT NULL,
  `searial` varchar(50) NOT NULL,
  `parentId` int(8) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `searial` (`searial`),
  KEY `name` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
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
  `is_deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  KEY `token` (`token`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `phone`, `accid`, `token`, `created_by`, `created_at`, `updated_by`, `updated_at`, `deleted_by`, `deleted_at`, `is_deleted`) VALUES
(7, 'Shams', 'shams@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', '', 1, 'BE94E371-3093-33D2-37D1-A187BA16FFF8', 0, '2017-07-08 01:37:46', NULL, '2017-07-15 09:33:30', NULL, NULL, 0),
(3, 'Gomaa', 'mahmoudg77@gmail.com', 'ceb6c970658f31504a901b89dcd3e461', '1', '', 7, '95554aa6-63ac-11e7-8718-fa163e616288', 0, '0000-00-00 00:00:00', NULL, '2017-07-08 01:11:35', NULL, NULL, 0),
(8, 'Elkhouly', 'elkhouly@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', '', 19, 'E8BF7CED-8605-0849-7209-F7505CF2D3DE', 0, '2017-07-08 01:39:40', NULL, '0000-00-00 00:00:00', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `waitinglist`
--

DROP TABLE IF EXISTS `waitinglist`;
CREATE TABLE IF NOT EXISTS `waitinglist` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `model` varchar(100) NOT NULL,
  `model_id` int(11) NOT NULL,
  `id_done` tinyint(1) NOT NULL DEFAULT '0',
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `waitinglisttype`
--

DROP TABLE IF EXISTS `waitinglisttype`;
CREATE TABLE IF NOT EXISTS `waitinglisttype` (
  `id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
