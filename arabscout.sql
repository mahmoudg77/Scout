-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 14, 2017 at 11:23 AM
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
  `id` int(11)  NOT NULL ,
  `name` varchar(150) CHARACTER SET utf8 NOT NULL,
  `approval_request` tinyint(1) NULL default '0',
  `approval_by` int(8) NULL,
  `approval_at` datetime NULL,
  
  
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_by` int(11) NOT NULL,
  `deleted_at` datetime NOT NULL,
  `is_deleted` tinyint(1) NULL default '0'
  
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



  
-- --------------------------------------------------------

--
-- Table structure for table `compUser`
--

CREATE TABLE `compUser` (
  `id` int(10) NOT NULL,
  `mokhymId` int(10) NOT NULL,
  `userId` int(8) NOT NULL,
  `approval_request` tinyint(1) NULL default '0',
  `approval_by` int(8) NULL,
  `approval_at` datetime NULL,
  
  
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_by` int(11) NULL,
  `deleted_at` datetime NULL,
  `is_deleted` tinyint(1) NULL default '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contactType`
--

CREATE TABLE `contactType` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  
  
  
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_by` int(11) NULL,
  `deleted_at` datetime NULL,
  `is_deleted` tinyint(1) NULL default '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contactUser`
--

CREATE TABLE `contactUser` (
  `id` int(10) NOT NULL,
  `userId` int(8) NOT NULL,
  `contactTypeId` int(2) NOT NULL,
  `contactValue` varchar(250) CHARACTER SET utf8 NOT NULL,
  
  
  
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_by` int(11) NULL,
  `deleted_at` datetime NULL,
  `is_deleted` tinyint(1) NULL default '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE `experiences` (
  `id` int(10) NOT NULL,
  `name` varchar(250) CHARACTER SET utf8 NOT NULL,
  
  
  
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_by` int(11) NULL,
  `deleted_at` datetime NULL,
  `is_deleted` tinyint(1) NULL default '0'
  
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `experienesUser`
--

CREATE TABLE `experienesUser` (
  `id` int(10) NOT NULL,
  `userId` int(8) NOT NULL,
  `experieneId` int(6) NOT NULL,
  `approval_request` tinyint(1) NULL default '0',
  `approval_by` int(8) NULL,
  `approval_at` datetime NULL,
  
  
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_by` int(11) NULL,
  `deleted_at` datetime NULL,
  `is_deleted` tinyint(1) NULL default '0'
  
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hobbies`
--

CREATE TABLE `hobbies` (
  `id` int(4) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 NOT NULL,

  
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_by` int(11) NULL,
  `deleted_at` datetime NULL,
  `is_deleted` tinyint(1) NULL default '0'
  ) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hobbiesUsers`
--

CREATE TABLE `hobbiesUsers` (
  `id` int(7) UNSIGNED NOT NULL,
  `hobbiesId` int(3) NOT NULL,
  `userId` int(7) NOT NULL,
  
  
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_by` int(11) NULL,
  `deleted_at` datetime NULL,
  `is_deleted` tinyint(1) NULL default '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(10) NOT NULL,
  `thumb` varchar(300) CHARACTER SET utf8 NOT NULL,
  `medium` varchar(300) CHARACTER SET utf8 NOT NULL,
  `orignal` varchar(300) CHARACTER SET utf8 NOT NULL,
  `service_id` int(11) NOT NULL,
  `service` int(11) NOT NULL,
  
  
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_by` int(11) NULL,
  `deleted_at` datetime NULL,
  `is_deleted` tinyint(1) NULL default '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Position`
--

CREATE TABLE `position` (
  `id` int(3) UNSIGNED NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 NOT NULL,
  
  
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_by` int(11) NULL,
  `deleted_at` datetime NULL,
  `is_deleted` tinyint(1) NULL default '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `positionUser`
--

CREATE TABLE `positionUser` (
  `id` int(10) NOT NULL,
  `postionId` int(3) NOT NULL,
  `userId` int(7) NOT NULL,
  `approval_request` tinyint(1) NULL default '0',
  `approval_by` int(8) NULL,
  `approval_at` datetime NULL,


  
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_by` int(11) NULL,
  `deleted_at` datetime NULL,
  `is_deleted` tinyint(1) NULL default '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(8) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `posid` int(4) NOT NULL,
  
  
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_by` int(11) NULL,
  `deleted_at` datetime NULL,
  `is_deleted` tinyint(1) NULL default '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `regYear` date NOT NULL,
  `regFrom` date NOT NULL,
  `regTo` date NOT NULL,
  
  
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_by` int(11) NULL,
  `deleted_at` datetime NULL,
  `is_deleted` tinyint(1) NULL default '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registeryUser`
--

CREATE TABLE `registeryUser` (
  `Id` int(7) NOT NULL,
  `regId` int(8) NOT NULL,
  `userId` int(8) NOT NULL,
  `approval_request` tinyint(1) NULL default '0',
  `approval_by` int(8) NULL,
  `approval_at` datetime NULL,  
  
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_by` int(11) NULL,
  `deleted_at` datetime NULL,
  `is_deleted` tinyint(1) NULL default '0'
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
  `updated_by` int(11) NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sec_accessright`
--

INSERT INTO `sec_accessright` (`id`, `groupid`, `model`, `accesstype`, `filter`) VALUES
(208, 2, 'App\\Articles\\Articles', 'view', '[[\'authorid\',USER_ACCID_ID],[\'is_deleted\',\'in\',[0,1]]]'),
(207, 2, 'App\\Account\\Account', 'edit', 'WHERE'),
(211, 3, 'App\\Articles\\Articles', 'view', ''),
(210, 2, 'App\\Account\\Account', 'view', ''),
(212, 2, 'App\\Auth\\User', 'view', '');

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
  `updated_by` int(11) NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sec_group`
--

INSERT INTO `sec_group` (`id`, `name`, `groupkey`, `categoryid`, `description`) VALUES
(3, 'Admin', 'acc_admin', 1, ''),
(2, 'General', 'general', 1, '1111');

-- --------------------------------------------------------

--
-- Table structure for table `sec_group_category`
--

CREATE TABLE `sec_group_category` (
  `id` int(8) NOT NULL,
  `name` varchar(100) NOT NULL,
  
  
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_by` int(11) NULL,
  `deleted_at` datetime NULL,
  `is_deleted` tinyint(1) NULL default '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sec_group_category`
--

INSERT INTO `sec_group_category` (`id`, `name`) VALUES
(1, 'Accounting'),
(2, 'Events'),
(3, 'Articles'),
(4, 'Finance');

-- --------------------------------------------------------

--
-- Table structure for table `sec_user_group_rel`
--

CREATE TABLE `sec_user_group_rel` (
  `id` int(8) NOT NULL,
  `userid` int(8) NOT NULL,
  `groupid` int(8) NOT NULL,
  
  
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
  
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sec_user_group_rel`
--

INSERT INTO `sec_user_group_rel` (`id`, `userid`, `groupid`) VALUES
(4, 3, 2),
(2, 3, 3),
(3, 8, 2);

-- --------------------------------------------------------

--
-- Table structure for table `studes`
--

CREATE TABLE `studies` (
  `id` int(11) NOT NULL,
  `name` varchar(350) CHARACTER SET utf8 NOT NULL,
  
  
  
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_by` int(11) NULL,
  `deleted_at` datetime NULL,
  `is_deleted` tinyint(1) NULL default '0'
  
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `studesUser`
--

CREATE TABLE `studiesUsers` (
  `id` int(10) NOT NULL,
  `studyId` int(6) NOT NULL,
  `userId` int(8) NOT NULL,
  `approval_request` tinyint(1) NULL default '0',
  `approval_by` int(8) NULL,
  `approval_at` datetime NULL,
  
  
  
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_by` int(11) NULL,
  `deleted_at` datetime NULL,
  `is_deleted` tinyint(1) NULL default '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Teams`
--

CREATE TABLE `teams` (
  `id` int(10) NOT NULL,
  `name` varchar(300) CHARACTER SET utf8 NOT NULL,
  `searial` varchar(50) NOT NULL,
  `parentId` int(8) NOT NULL,
  
  
  
  
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_by` int(11) NULL,
  `deleted_at` datetime NULL,
  `is_deleted` tinyint(1) NULL default '0'
  
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
  `updated_by` int(11) NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_by` int(11) NULL,
  `deleted_at` datetime NULL,
  `is_deleted` tinyint(1) NULL default '0'
  
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `phone`, `accid`, `token`) VALUES
(7, 'Shams', 'shams@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', '2017-07-08 01:37:46', '2017-07-08 01:39:10', '', 18, 'BE94E371-3093-33D2-37D1-A187BA16FFF8'),
(3, 'Gomaa', 'mahmoudg77@gmail.com', 'ceb6c970658f31504a901b89dcd3e461', '1', '0000-00-00 00:00:00', '2017-07-08 01:11:35', '', 7, '95554aa6-63ac-11e7-8718-fa163e616288'),
(8, 'Elkhouly', 'elkhouly@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', '2017-07-08 01:39:40', '0000-00-00 00:00:00', '', 19, 'E8BF7CED-8605-0849-7209-F7505CF2D3DE');

-- --------------------------------------------------------

--
-- Table structure for table `waitingList`
--

CREATE TABLE `waitingList` (
  `id` int(10) NOT NULL,
  `waitingListTypeID` int(2) NOT NULL,
  `profileID` int(8) NOT NULL,
  `waitingID` int(10) NOT NULL,
  
  
  
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_by` int(11) NULL,
  `deleted_at` datetime NULL,
  `is_deleted` tinyint(1) NULL default '0'
  
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `waitingListType`
--

CREATE TABLE `waitingListType` (
  `id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL,
  
  
  
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_by` int(11) NULL,
  `deleted_at` datetime NULL,
  `is_deleted` tinyint(1) NULL default '0'
  
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for table `comp`
--
ALTER TABLE `comp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `compUser`
--
ALTER TABLE `compUser`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mokhymId` (`mokhymId`),
  ADD KEY `userId` (`userId`),
  ADD KEY `approval_request` (`approval_request`),
  ADD KEY `approval_by` (`approval_by`);

--
-- Indexes for table `contactType`
--
ALTER TABLE `contactType`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactUser`
--
ALTER TABLE `contactUser`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experienesUser`
--
ALTER TABLE `experienesUser`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`),
  ADD KEY `experieneId` (`experieneId`);

--
-- Indexes for table `hobbies`
--
ALTER TABLE `hobbies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hobbiesUsers`
--
ALTER TABLE `hobbiesUsers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hobbiesId` (`hobbiesId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

 
--
-- Indexes for table `Position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `positionUser`
--
ALTER TABLE `positionUser`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`),
  ADD KEY `approval_by` (`approval_by`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posid` (`posid`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`),
  ADD KEY `regFrom` (`regFrom`);

--
-- Indexes for table `registeryUser`
--
ALTER TABLE `registeryUser`
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
-- Indexes for table `studesUser`
--
ALTER TABLE `studiesUsers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`),
  ADD KEY `approval_by` (`approval_by`);

--
-- Indexes for table `Teams`
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
-- Indexes for table `waitingList`
--
ALTER TABLE `waitingList`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profileID` (`profileID`);

--
-- Indexes for table `waitingListType`
--
ALTER TABLE `waitingListType`
  ADD PRIMARY KEY (`id`);
--
-- AUTO_INCREMENT for table `studies`
--
ALTER TABLE `studies`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
  
 --
-- AUTO_INCREMENT for table `studiesUsers`
--
ALTER TABLE `studiesUsers`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
  
  
--
-- AUTO_INCREMENT for table `comp`
--
ALTER TABLE `comp`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `compUser`
--
ALTER TABLE `compUser`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `experienesUser`
--
ALTER TABLE `experienesUser`
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(8) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `registeryUser`
--
ALTER TABLE `registeryUser`
  MODIFY `Id` int(7) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sec_accessright`
--
ALTER TABLE `sec_accessright`
  MODIFY `id` int(8) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sec_group`
--
ALTER TABLE `sec_group`
  MODIFY `id` int(8) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sec_group_category`
--
ALTER TABLE `sec_group_category`
  MODIFY `id` int(8) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sec_user_group_rel`
--
ALTER TABLE `sec_user_group_rel`
  MODIFY `id` int(8) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `waitingList`
--
ALTER TABLE `waitingList`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
  
  
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
