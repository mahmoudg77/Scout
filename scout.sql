-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2017 at 05:30 AM
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

CREATE TABLE `comp` (
  `id` int(11) UNSIGNED NOT NULL,
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
  `is_deleted` tinyint(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `compuser`
--

CREATE TABLE `compuser` (
  `id` int(10) UNSIGNED NOT NULL,
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

-- --------------------------------------------------------

--
-- Table structure for table `contactuser`
--

CREATE TABLE `contactuser` (
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
  `is_deleted` tinyint(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
  `is_deleted` tinyint(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `thumb`, `medium`, `orignal`, `model_id`, `model_name`, `created_by`, `created_at`, `updated_by`, `updated_at`, `deleted_by`, `deleted_at`, `is_deleted`) VALUES
(1, 'sasda', 'adfsfgsdfg', 'fghfghfgh', 1, 'App\\Models\\Profile\\Profile', 0, '2017-07-27 17:11:19', 7, '2017-07-28 08:16:20', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `id` int(3) UNSIGNED NOT NULL,
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

CREATE TABLE `positionuser` (
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
  `is_deleted` tinyint(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
  `National_Number` int(16) NOT NULL,
  `Birth_Date` date DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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

CREATE TABLE `protofolo` (
  `id` int(4) UNSIGNED NOT NULL,
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
  `posid` int(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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

CREATE TABLE `register` (
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
  `is_deleted` tinyint(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registeryuser`
--

CREATE TABLE `registeryuser` (
  `Id` int(7) UNSIGNED NOT NULL,
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
  `is_deleted` tinyint(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sec_accessright`
--

CREATE TABLE `sec_accessright` (
  `id` int(8) UNSIGNED NOT NULL,
  `groupid` int(8) NOT NULL,
  `model` varchar(50) NOT NULL,
  `accesstype` enum('view','add','edit','delete') NOT NULL,
  `filter` varchar(255) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sec_accessright`
--

INSERT INTO `sec_accessright` (`id`, `groupid`, `model`, `accesstype`, `filter`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(213, 3, 'App\\*', 'view', '', 0, '2017-07-15 11:50:32', 7, '2017-07-22 16:46:29'),
(222, 3, 'App\\*', 'delete', '', 0, '2017-07-15 15:53:30', 7, '2017-07-21 18:54:05'),
(221, 3, 'App\\*', 'edit', '', 0, '2017-07-15 15:53:20', NULL, NULL),
(220, 3, 'App\\*', 'add', '', 0, '2017-07-15 15:53:07', NULL, NULL);

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
(3, 'Admin', 'acc_admin', 1, '', 0, '2017-07-14 12:48:42', NULL, NULL),
(2, 'General', 'general', 1, '1111', 0, '2017-07-14 12:48:42', NULL, NULL);

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
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
(4, 3, 2, 0, '2017-07-14 12:48:42', NULL, NULL),
(2, 3, 3, 0, '2017-07-14 12:48:42', NULL, NULL),
(3, 8, 2, 0, '2017-07-14 12:48:42', NULL, NULL),
(5, 7, 3, 0, '2017-07-15 11:49:04', NULL, NULL);

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
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(300) CHARACTER SET utf8 NOT NULL,
  `searial` varchar(50) NOT NULL,
  `parentId` int(8) NOT NULL,
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
(7, 'Shams', 'shams@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', '', 1, 'BE94E371-3093-33D2-37D1-A187BA16FFF8', 0, '2017-07-08 01:37:46', NULL, '2017-07-15 09:33:30', NULL, NULL, 0),
(3, 'Gomaa', 'mahmoudg77@gmail.com', 'ceb6c970658f31504a901b89dcd3e461', '1', '', 7, '95554aa6-63ac-11e7-8718-fa163e616288', 0, '0000-00-00 00:00:00', NULL, '2017-07-08 01:11:35', NULL, NULL, 0),
(8, 'Elkhouly', 'elkhouly@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', '', 19, 'E8BF7CED-8605-0849-7209-F7505CF2D3DE', 0, '2017-07-08 01:39:40', NULL, '0000-00-00 00:00:00', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `waitinglist`
--

CREATE TABLE `waitinglist` (
  `id` int(10) UNSIGNED NOT NULL,
  `model` varchar(100) NOT NULL,
  `model_id` int(11) NOT NULL,
  `id_done` tinyint(1) NOT NULL DEFAULT '0',
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
-- Table structure for table `waitinglisttype`
--

CREATE TABLE `waitinglisttype` (
  `id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
  ADD KEY `mokhymId` (`mokhymId`),
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
  ADD PRIMARY KEY (`Profile_ID`);

--
-- Indexes for table `protofolo`
--
ALTER TABLE `protofolo`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`Id`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `sec_accessright`
--
ALTER TABLE `sec_accessright`
  ADD PRIMARY KEY (`id`),
  ADD KEY `accesstype` (`accesstype`),
  ADD KEY `model` (`model`);

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
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `searial` (`searial`),
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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `waitinglisttype`
--
ALTER TABLE `waitinglisttype`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comp`
--
ALTER TABLE `comp`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `compuser`
--
ALTER TABLE `compuser`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `experienesuser`
--
ALTER TABLE `experienesuser`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hobbies`
--
ALTER TABLE `hobbies`
  MODIFY `id` int(4) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `id` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `Profile_ID` int(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `protofolo`
--
ALTER TABLE `protofolo`
  MODIFY `id` int(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `registeryuser`
--
ALTER TABLE `registeryuser`
  MODIFY `Id` int(7) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sec_accessright`
--
ALTER TABLE `sec_accessright`
  MODIFY `id` int(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=224;
--
-- AUTO_INCREMENT for table `sec_group`
--
ALTER TABLE `sec_group`
  MODIFY `id` int(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sec_group_category`
--
ALTER TABLE `sec_group_category`
  MODIFY `id` int(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `sec_user_group_rel`
--
ALTER TABLE `sec_user_group_rel`
  MODIFY `id` int(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `studies`
--
ALTER TABLE `studies`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `studiesusers`
--
ALTER TABLE `studiesusers`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `waitinglist`
--
ALTER TABLE `waitinglist`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
