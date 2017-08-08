-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 08, 2017 at 09:27 AM
-- Server version: 5.6.32-78.1-log
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wptransl_scout`
--

-- --------------------------------------------------------

--
-- Table structure for table `comp`
--

CREATE TABLE IF NOT EXISTS `comp` (
  `id` int(11) unsigned NOT NULL,
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
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `compuser`
--

CREATE TABLE IF NOT EXISTS `compuser` (
  `id` int(10) unsigned NOT NULL,
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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contacttype`
--

CREATE TABLE IF NOT EXISTS `contacttype` (
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

CREATE TABLE IF NOT EXISTS `contactuser` (
  `id` int(10) unsigned NOT NULL,
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
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

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
(7, 2, 3, '', 1, '2017-08-08 14:48:28', NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE IF NOT EXISTS `experiences` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(250) CHARACTER SET utf8 NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT '0'
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `experienesuser`
--

CREATE TABLE IF NOT EXISTS `experienesuser` (
  `id` int(10) unsigned NOT NULL,
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
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hobbies`
--

CREATE TABLE IF NOT EXISTS `hobbies` (
  `id` int(4) unsigned NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT '0'
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

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

CREATE TABLE IF NOT EXISTS `hobbiesusers` (
  `id` int(7) unsigned NOT NULL,
  `hobbiesId` int(3) NOT NULL,
  `userId` int(7) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT '0'
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(10) unsigned NOT NULL,
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
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `file_name`, `model_id`, `model_name`, `tag`, `created_by`, `created_at`, `updated_by`, `updated_at`, `deleted_by`, `deleted_at`, `is_deleted`) VALUES
(17, '435e8.jpg', 67, 'App\\Models\\Profile\\Profile', 'Personal', 0, '2017-08-08 14:19:11', NULL, NULL, NULL, NULL, 0),
(18, 'fa659.png', 67, 'App\\Models\\Profile\\Profile', 'Cover', 0, '2017-08-08 14:19:11', NULL, NULL, NULL, NULL, 0),
(19, '953a4.gif', 68, 'App\\Models\\Profile\\Profile', 'Personal', 0, '2017-08-08 14:22:51', NULL, NULL, NULL, NULL, 0),
(20, '67ca9.jpg', 68, 'App\\Models\\Profile\\Profile', 'Cover', 0, '2017-08-08 14:22:51', NULL, NULL, NULL, NULL, 0),
(21, '5dea6.gif', 1, 'App\\Models\\Profile\\Profile', 'Personal', 0, '2017-08-08 14:28:07', NULL, NULL, NULL, NULL, 0),
(22, '44327.jpg', 1, 'App\\Models\\Profile\\Profile', 'Cover', 0, '2017-08-08 14:28:07', NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE IF NOT EXISTS `level` (
  `id` int(3) unsigned NOT NULL,
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
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

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

CREATE TABLE IF NOT EXISTS `position` (
  `id` int(3) unsigned NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT '0'
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`id`, `name`, `created_by`, `created_at`, `updated_by`, `updated_at`, `deleted_by`, `deleted_at`, `is_deleted`) VALUES
(4, 'مفوض', 0, '2017-08-08 13:58:24', 1, '2017-08-08 15:12:15', NULL, NULL, 0),
(5, 'قائد فريق', 0, '2017-08-08 13:58:24', NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `positionuser`
--

CREATE TABLE IF NOT EXISTS `positionuser` (
  `id` int(10) unsigned NOT NULL,
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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `positionuser`
--

INSERT INTO `positionuser` (`id`, `postionId`, `userId`, `approval_request`, `approval_by`, `approval_at`, `created_by`, `created_at`, `updated_by`, `updated_at`, `deleted_by`, `deleted_at`, `is_deleted`) VALUES
(1, 4, 1, 0, 7, '2017-08-15 00:00:00', 0, '2017-08-08 14:28:07', NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `Profile_ID` int(8) unsigned NOT NULL,
  `First_Name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Second_Name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Third_Name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Forth_Name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `National_Number` int(16) NOT NULL,
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
  `approval_at` datetime DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`Profile_ID`, `First_Name`, `Second_Name`, `Third_Name`, `Forth_Name`, `National_Number`, `Birth_Date`, `Gender`, `created_by`, `created_at`, `updated_by`, `updated_at`, `deleted_by`, `deleted_at`, `is_deleted`, `approval_request`, `approval_by`, `approval_at`) VALUES
(1, 'Admin', 'Arab', 'Scout', 'Website', 10000000, '2017-08-08', 1, 0, '2017-08-08 14:28:06', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(2, 'Leader', 'Second Name', '', '', 123, '2017-08-16', 0, 1, '2017-08-08 14:48:28', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `id` int(11) unsigned NOT NULL,
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
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registeryuser`
--

CREATE TABLE IF NOT EXISTS `registeryuser` (
  `id` int(7) unsigned NOT NULL,
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
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sec_accessright`
--

CREATE TABLE IF NOT EXISTS `sec_accessright` (
  `id` int(8) unsigned NOT NULL,
  `groupid` int(8) NOT NULL,
  `model_name` varchar(50) NOT NULL,
  `accesstype` enum('view','add','edit','delete') NOT NULL,
  `filter` varchar(255) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM AUTO_INCREMENT=224 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sec_accessright`
--

INSERT INTO `sec_accessright` (`id`, `groupid`, `model_name`, `accesstype`, `filter`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(213, 1, 'App\\*', 'view', '', 0, '2017-07-15 11:50:32', 7, '2017-08-08 14:48:13'),
(222, 1, 'App\\*', 'delete', '', 0, '2017-07-15 15:53:30', 7, '2017-08-08 14:48:18'),
(221, 1, 'App\\*', 'edit', '', 0, '2017-07-15 15:53:20', NULL, '2017-08-08 14:48:21'),
(220, 1, 'App\\*', 'add', '', 0, '2017-07-15 15:53:07', NULL, '2017-08-08 14:48:24');

-- --------------------------------------------------------

--
-- Table structure for table `sec_group`
--

CREATE TABLE IF NOT EXISTS `sec_group` (
  `id` int(8) unsigned NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `groupkey` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `categoryid` int(8) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

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

CREATE TABLE IF NOT EXISTS `sec_group_category` (
  `id` int(8) unsigned NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

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

CREATE TABLE IF NOT EXISTS `sec_user_group_rel` (
  `id` int(8) unsigned NOT NULL,
  `userid` int(8) NOT NULL,
  `groupid` int(8) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sec_user_group_rel`
--

INSERT INTO `sec_user_group_rel` (`id`, `userid`, `groupid`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(1, 1, 1, 0, '2017-08-08 14:47:40', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `studies`
--

CREATE TABLE IF NOT EXISTS `studies` (
  `id` int(11) unsigned NOT NULL,
  `name` varchar(350) CHARACTER SET utf8 NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT '0'
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `studiesusers`
--

CREATE TABLE IF NOT EXISTS `studiesusers` (
  `id` int(11) unsigned NOT NULL,
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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teaminfo`
--

CREATE TABLE IF NOT EXISTS `teaminfo` (
  `id` int(11) unsigned NOT NULL,
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
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE IF NOT EXISTS `teams` (
  `id` int(10) unsigned NOT NULL,
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
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

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
(7, 'القاهرة', '0101001', 3, 3, 7, '2017-08-04 11:54:25', NULL, '2017-08-06 13:51:51', NULL, NULL, 0),
(8, 'الاسكندرية', '0101002', 3, 3, 7, '2017-08-04 11:54:25', NULL, '2017-08-06 13:51:56', NULL, NULL, 0),
(9, 'عابدين', '0101001001', 7, 4, 7, '2017-08-04 11:54:25', NULL, '2017-08-06 13:52:19', NULL, NULL, 0),
(10, 'باب الشعرية', '0101001002', 7, 4, 7, '2017-08-04 11:54:25', NULL, '2017-08-06 13:52:19', NULL, NULL, 0),
(11, 'الويلى', '0101001003', 7, 4, 7, '2017-08-04 11:54:25', NULL, '2017-08-06 13:52:19', NULL, NULL, 0),
(12, 'دار السلام', '0101001004', 7, 4, 7, '2017-08-04 11:54:25', NULL, '2017-08-06 13:52:19', NULL, NULL, 0),
(13, 'ام النور', '0101001005', 7, 4, 7, '2017-08-04 11:54:25', NULL, '2017-08-06 13:52:19', NULL, NULL, 0),
(14, 'مركز شباب الساحل', '0101001006', 7, 4, 7, '2017-08-04 11:54:25', NULL, '2017-08-06 13:52:19', NULL, NULL, 0),
(15, 'موسسة حياة', '0101001007', 7, 4, 7, '2017-08-04 11:54:25', NULL, '2017-08-06 13:52:19', NULL, NULL, 0),
(34, 'tttddfr21', '0000000000001', 15, 5, 7, '2017-08-07 12:27:39', NULL, NULL, NULL, NULL, 0),
(33, 'tttddfr2', '0000000000001', 15, 5, 7, '2017-08-07 12:26:45', NULL, NULL, NULL, NULL, 0),
(32, 'tttddfr', '0101001007001', 15, 5, 7, '2017-08-07 12:23:50', NULL, NULL, NULL, NULL, 0),
(35, 'tttddfr214', '0000000000001', 15, 5, 7, '2017-08-07 12:28:40', NULL, NULL, NULL, NULL, 0),
(36, 'tttddf888', '0000000000001', 15, 5, 7, '2017-08-07 12:34:05', NULL, NULL, NULL, NULL, 0),
(37, 'tttddf89', '0000000000001', 15, 5, 7, '2017-08-07 12:37:00', NULL, NULL, NULL, NULL, 0),
(38, 'tttddf890', '0000000000001', 15, 5, 7, '2017-08-07 12:38:33', NULL, NULL, NULL, NULL, 0),
(39, 'tttddf8901', '0000000000001', 15, 5, 7, '2017-08-07 12:40:31', NULL, NULL, NULL, NULL, 0),
(40, 'tttddf89010', '0000000000001', 15, 5, 7, '2017-08-07 12:41:42', NULL, NULL, NULL, NULL, 0),
(41, 'ttt', '0101001001001', 9, 5, 7, '2017-08-07 13:07:01', NULL, NULL, NULL, NULL, 0),
(42, 'rrrrrrr', '0000000000001', 9, 5, 7, '2017-08-08 06:45:13', NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `phone`, `accid`, `token`, `created_by`, `created_at`, `updated_by`, `updated_at`, `deleted_by`, `deleted_at`, `is_deleted`) VALUES
(1, 'Admin', 'info@arabscout.net', 'db8134a0a4a486caf791320bedee266e', NULL, NULL, 1, '0ffdcdea-7c46-11e7-beee-0025902a8534', 0, '2017-08-08 14:30:01', NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `waitinglist`
--

CREATE TABLE IF NOT EXISTS `waitinglist` (
  `id` int(10) unsigned NOT NULL,
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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `waitinglist`
--

INSERT INTO `waitinglist` (`id`, `userId`, `model_name`, `model_id`, `is_done`, `created_by`, `created_at`, `updated_by`, `updated_at`, `deleted_by`, `deleted_at`, `is_deleted`) VALUES
(1, 0, 'App\\Models\\Profile\\Profile', 1, -1, 0, '2017-08-08 14:28:07', NULL, NULL, NULL, NULL, 0),
(2, 0, 'App\\Models\\Profile\\PositionUserLog', 1, -1, 0, '2017-08-08 14:28:07', NULL, NULL, NULL, NULL, 0),
(3, 1, 'App\\Models\\Profile\\Profile', 2, -1, 1, '2017-08-08 14:48:28', NULL, NULL, NULL, NULL, 0);

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
  ADD PRIMARY KEY (`id`), ADD KEY `mokhymId` (`campId`), ADD KEY `userId` (`userId`), ADD KEY `approval_request` (`approval_request`), ADD KEY `approval_by` (`approval_by`);

--
-- Indexes for table `contacttype`
--
ALTER TABLE `contacttype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactuser`
--
ALTER TABLE `contactuser`
  ADD PRIMARY KEY (`id`), ADD KEY `userId` (`userId`);

--
-- Indexes for table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experienesuser`
--
ALTER TABLE `experienesuser`
  ADD PRIMARY KEY (`id`), ADD KEY `userId` (`userId`), ADD KEY `experieneId` (`experienceId`);

--
-- Indexes for table `hobbies`
--
ALTER TABLE `hobbies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hobbiesusers`
--
ALTER TABLE `hobbiesusers`
  ADD PRIMARY KEY (`id`), ADD KEY `hobbiesId` (`hobbiesId`), ADD KEY `userId` (`userId`);

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
  ADD PRIMARY KEY (`id`), ADD KEY `userId` (`userId`), ADD KEY `approval_by` (`approval_by`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`Profile_ID`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`), ADD KEY `regFrom` (`regFrom`);

--
-- Indexes for table `registeryuser`
--
ALTER TABLE `registeryuser`
  ADD PRIMARY KEY (`id`), ADD KEY `userId` (`userId`);

--
-- Indexes for table `sec_accessright`
--
ALTER TABLE `sec_accessright`
  ADD PRIMARY KEY (`id`), ADD KEY `accesstype` (`accesstype`), ADD KEY `model` (`model_name`);

--
-- Indexes for table `sec_group`
--
ALTER TABLE `sec_group`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `key` (`groupkey`);

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
  ADD PRIMARY KEY (`id`), ADD KEY `userId` (`userId`), ADD KEY `approval_by` (`approval_by`);

--
-- Indexes for table `teaminfo`
--
ALTER TABLE `teaminfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`), ADD KEY `searial` (`serial`), ADD KEY `name` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `email` (`email`), ADD KEY `token` (`token`);

--
-- Indexes for table `waitinglist`
--
ALTER TABLE `waitinglist`
  ADD PRIMARY KEY (`id`), ADD KEY `userId` (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comp`
--
ALTER TABLE `comp`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `compuser`
--
ALTER TABLE `compuser`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `contacttype`
--
ALTER TABLE `contacttype`
AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `contactuser`
--
ALTER TABLE `contactuser`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `experienesuser`
--
ALTER TABLE `experienesuser`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `hobbies`
--
ALTER TABLE `hobbies`
  MODIFY `id` int(4) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `hobbiesusers`
--
ALTER TABLE `hobbiesusers`
  MODIFY `id` int(7) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id` int(3) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `id` int(3) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `positionuser`
--
ALTER TABLE `positionuser`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `Profile_ID` int(8) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `registeryuser`
--
ALTER TABLE `registeryuser`
  MODIFY `id` int(7) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `sec_accessright`
--
ALTER TABLE `sec_accessright`
  MODIFY `id` int(8) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=224;
--
-- AUTO_INCREMENT for table `sec_group`
--
ALTER TABLE `sec_group`
  MODIFY `id` int(8) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `sec_group_category`
--
ALTER TABLE `sec_group_category`
  MODIFY `id` int(8) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `sec_user_group_rel`
--
ALTER TABLE `sec_user_group_rel`
  MODIFY `id` int(8) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `studies`
--
ALTER TABLE `studies`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `studiesusers`
--
ALTER TABLE `studiesusers`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `teaminfo`
--
ALTER TABLE `teaminfo`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `waitinglist`
--
ALTER TABLE `waitinglist`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
