-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2017 at 04:00 PM
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
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comp`
--

INSERT INTO `comp` (`id`, `name`, `approval_request`, `approval_by`, `approval_at`, `created_by`, `created_at`, `updated_by`, `updated_at`, `deleted_by`, `deleted_at`, `is_deleted`) VALUES
(1, 'Comp2', NULL, NULL, NULL, 7, '2017-08-05 13:41:07', NULL, NULL, NULL, NULL, 0),
(2, 'Comp3', 1, 7, '2017-08-05 16:28:22', 7, '2017-08-05 13:44:41', 7, '2017-08-05 16:28:22', NULL, NULL, 0);

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

--
-- Dumping data for table `compuser`
--

INSERT INTO `compuser` (`id`, `campId`, `userId`, `approval_request`, `approval_by`, `approval_at`, `created_by`, `created_at`, `updated_by`, `updated_at`, `deleted_by`, `deleted_at`, `is_deleted`) VALUES
(1, 1, 1, 1, 7, '2017-08-05 16:28:24', 7, '2017-08-05 14:25:06', 7, '2017-08-05 14:28:24', NULL, NULL, 0);

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
(7, 16, 3, '01110056724', 7, '2017-08-06 07:27:53', NULL, NULL, NULL, NULL, 0),
(6, 16, 2, 'mahmoudg777777@gmail.com', 7, '2017-08-06 07:27:53', NULL, NULL, NULL, NULL, 0),
(5, 16, 1, 'Giza', 7, '2017-08-06 07:27:53', NULL, NULL, NULL, NULL, 0),
(8, 16, 3, '023380225', 7, '2017-08-06 07:27:53', NULL, NULL, NULL, NULL, 0),
(9, 17, 1, '', 7, '2017-08-06 07:46:09', NULL, NULL, NULL, NULL, 0),
(10, 17, 2, '', 7, '2017-08-06 07:46:09', NULL, NULL, NULL, NULL, 0),
(11, 17, 3, '01110056724', 7, '2017-08-06 07:46:09', NULL, NULL, NULL, NULL, 0),
(12, 17, 3, '', 7, '2017-08-06 07:46:09', NULL, NULL, NULL, NULL, 0),
(13, 18, 1, '', 7, '2017-08-06 07:52:56', NULL, NULL, NULL, NULL, 0),
(14, 18, 2, '', 7, '2017-08-06 07:52:56', NULL, NULL, NULL, NULL, 0),
(15, 18, 3, '01110056724', 7, '2017-08-06 07:52:56', NULL, NULL, NULL, NULL, 0),
(16, 18, 3, '', 7, '2017-08-06 07:52:56', NULL, NULL, NULL, NULL, 0),
(17, 19, 1, '', 7, '2017-08-06 07:53:37', NULL, NULL, NULL, NULL, 0),
(18, 19, 2, '', 7, '2017-08-06 07:53:37', NULL, NULL, NULL, NULL, 0),
(19, 19, 3, '01110056724', 7, '2017-08-06 07:53:37', NULL, NULL, NULL, NULL, 0),
(20, 19, 3, '', 7, '2017-08-06 07:53:37', NULL, NULL, NULL, NULL, 0),
(21, 20, 1, '', 7, '2017-08-06 07:54:00', NULL, NULL, NULL, NULL, 0),
(22, 20, 2, '', 7, '2017-08-06 07:54:00', NULL, NULL, NULL, NULL, 0),
(23, 20, 3, '01110056724', 7, '2017-08-06 07:54:00', NULL, NULL, NULL, NULL, 0),
(24, 20, 3, '', 7, '2017-08-06 07:54:00', NULL, NULL, NULL, NULL, 0),
(25, 21, 1, '', 7, '2017-08-06 08:33:50', NULL, NULL, NULL, NULL, 0),
(26, 21, 2, '', 7, '2017-08-06 08:33:50', NULL, NULL, NULL, NULL, 0),
(27, 21, 3, '22', 7, '2017-08-06 08:33:50', NULL, NULL, NULL, NULL, 0),
(28, 21, 3, '', 7, '2017-08-06 08:33:50', NULL, NULL, NULL, NULL, 0),
(29, 25, 1, '', 7, '2017-08-06 08:46:10', NULL, NULL, NULL, NULL, 0),
(30, 25, 2, '', 7, '2017-08-06 08:46:10', NULL, NULL, NULL, NULL, 0),
(31, 25, 3, '01110056724', 7, '2017-08-06 08:46:10', NULL, NULL, NULL, NULL, 0),
(32, 25, 3, '', 7, '2017-08-06 08:46:10', NULL, NULL, NULL, NULL, 0),
(33, 26, 1, '', 7, '2017-08-06 08:47:45', NULL, NULL, NULL, NULL, 0),
(34, 26, 2, '', 7, '2017-08-06 08:47:45', NULL, NULL, NULL, NULL, 0),
(35, 26, 3, '01110056724', 7, '2017-08-06 08:47:45', NULL, NULL, NULL, NULL, 0),
(36, 26, 3, '', 7, '2017-08-06 08:47:45', NULL, NULL, NULL, NULL, 0),
(37, 27, 1, '', 7, '2017-08-06 08:49:27', NULL, NULL, NULL, NULL, 0),
(38, 27, 2, '', 7, '2017-08-06 08:49:27', NULL, NULL, NULL, NULL, 0),
(39, 27, 3, '01110056724', 7, '2017-08-06 08:49:27', NULL, NULL, NULL, NULL, 0),
(40, 27, 3, '', 7, '2017-08-06 08:49:27', NULL, NULL, NULL, NULL, 0),
(41, 28, 1, '', 7, '2017-08-06 08:49:40', NULL, NULL, NULL, NULL, 0),
(42, 28, 2, '', 7, '2017-08-06 08:49:40', NULL, NULL, NULL, NULL, 0),
(43, 28, 3, '01110056724', 7, '2017-08-06 08:49:40', NULL, NULL, NULL, NULL, 0),
(44, 28, 3, '', 7, '2017-08-06 08:49:40', NULL, NULL, NULL, NULL, 0),
(45, 29, 1, '', 7, '2017-08-06 08:49:53', NULL, NULL, NULL, NULL, 0),
(46, 29, 2, '', 7, '2017-08-06 08:49:53', NULL, NULL, NULL, NULL, 0),
(47, 29, 3, '01110056724', 7, '2017-08-06 08:49:53', NULL, NULL, NULL, NULL, 0),
(48, 29, 3, '', 7, '2017-08-06 08:49:53', NULL, NULL, NULL, NULL, 0),
(49, 30, 1, '', 7, '2017-08-06 08:51:46', NULL, NULL, NULL, NULL, 0),
(50, 30, 2, '', 7, '2017-08-06 08:51:46', NULL, NULL, NULL, NULL, 0),
(51, 30, 3, '01110056724', 7, '2017-08-06 08:51:46', NULL, NULL, NULL, NULL, 0),
(52, 30, 3, '', 7, '2017-08-06 08:51:46', NULL, NULL, NULL, NULL, 0),
(53, 31, 1, '', 7, '2017-08-06 08:54:40', NULL, NULL, NULL, NULL, 0),
(54, 31, 2, '', 7, '2017-08-06 08:54:40', NULL, NULL, NULL, NULL, 0),
(55, 31, 3, '01110056724', 7, '2017-08-06 08:54:40', NULL, NULL, NULL, NULL, 0),
(56, 31, 3, '', 7, '2017-08-06 08:54:40', NULL, NULL, NULL, NULL, 0),
(57, 32, 1, '', 7, '2017-08-06 08:55:15', NULL, NULL, NULL, NULL, 0),
(58, 32, 2, '', 7, '2017-08-06 08:55:15', NULL, NULL, NULL, NULL, 0),
(59, 32, 3, '01110056724', 7, '2017-08-06 08:55:15', NULL, NULL, NULL, NULL, 0),
(60, 32, 3, '', 7, '2017-08-06 08:55:15', NULL, NULL, NULL, NULL, 0),
(61, 33, 1, '', 7, '2017-08-06 08:56:56', NULL, NULL, NULL, NULL, 0),
(62, 33, 2, '', 7, '2017-08-06 08:56:56', NULL, NULL, NULL, NULL, 0),
(63, 33, 3, '01110056724', 7, '2017-08-06 08:56:56', NULL, NULL, NULL, NULL, 0),
(64, 33, 3, '', 7, '2017-08-06 08:56:56', NULL, NULL, NULL, NULL, 0),
(65, 34, 1, '', 7, '2017-08-06 08:57:24', NULL, NULL, NULL, NULL, 0),
(66, 34, 2, '', 7, '2017-08-06 08:57:24', NULL, NULL, NULL, NULL, 0),
(67, 34, 3, '01110056724', 7, '2017-08-06 08:57:24', NULL, NULL, NULL, NULL, 0),
(68, 34, 3, '', 7, '2017-08-06 08:57:24', NULL, NULL, NULL, NULL, 0),
(69, 35, 1, '', 7, '2017-08-06 08:59:03', NULL, NULL, NULL, NULL, 0),
(70, 35, 2, '', 7, '2017-08-06 08:59:03', NULL, NULL, NULL, NULL, 0),
(71, 35, 3, '01110056724', 7, '2017-08-06 08:59:03', NULL, NULL, NULL, NULL, 0),
(72, 35, 3, '', 7, '2017-08-06 08:59:03', NULL, NULL, NULL, NULL, 0),
(73, 36, 1, '', 7, '2017-08-06 10:10:15', NULL, NULL, NULL, NULL, 0),
(74, 36, 2, '', 7, '2017-08-06 10:10:15', NULL, NULL, NULL, NULL, 0),
(75, 36, 3, '01110056724', 7, '2017-08-06 10:10:15', NULL, NULL, NULL, NULL, 0),
(76, 36, 3, '', 7, '2017-08-06 10:10:15', NULL, NULL, NULL, NULL, 0),
(77, 37, 1, '', 7, '2017-08-06 10:11:40', NULL, NULL, NULL, NULL, 0),
(78, 37, 2, '', 7, '2017-08-06 10:11:40', NULL, NULL, NULL, NULL, 0),
(79, 37, 3, '01110056724', 7, '2017-08-06 10:11:40', NULL, NULL, NULL, NULL, 0),
(80, 37, 3, '', 7, '2017-08-06 10:11:40', NULL, NULL, NULL, NULL, 0),
(81, 38, 1, '', 7, '2017-08-06 12:34:52', NULL, NULL, NULL, NULL, 0),
(82, 38, 2, 'nsaapiuser@gmail.com', 7, '2017-08-06 12:34:52', NULL, NULL, NULL, NULL, 0),
(83, 38, 3, '01110056724', 7, '2017-08-06 12:34:52', NULL, NULL, NULL, NULL, 0),
(84, 38, 3, '', 7, '2017-08-06 12:34:52', NULL, NULL, NULL, NULL, 0),
(85, 39, 1, '', 7, '2017-08-06 12:37:44', NULL, NULL, NULL, NULL, 0),
(86, 39, 2, 'nsaapiuser@gmail.com', 7, '2017-08-06 12:37:44', NULL, NULL, NULL, NULL, 0),
(87, 39, 3, '01110056724', 7, '2017-08-06 12:37:44', NULL, NULL, NULL, NULL, 0),
(88, 39, 3, '', 7, '2017-08-06 12:37:44', NULL, NULL, NULL, NULL, 0),
(89, 40, 1, '', 7, '2017-08-06 12:38:33', NULL, NULL, NULL, NULL, 0),
(90, 40, 2, 'mahmoudg777777@gmail.com', 7, '2017-08-06 12:38:33', NULL, NULL, NULL, NULL, 0),
(91, 40, 3, '01110056724', 7, '2017-08-06 12:38:33', NULL, NULL, NULL, NULL, 0),
(92, 40, 3, '', 7, '2017-08-06 12:38:33', NULL, NULL, NULL, NULL, 0),
(93, 41, 1, '', 7, '2017-08-07 08:38:05', NULL, NULL, NULL, NULL, 0),
(94, 41, 2, 'mahmoudg777777@gmail.com', 7, '2017-08-07 08:38:05', NULL, NULL, NULL, NULL, 0),
(95, 41, 3, '01110056724', 7, '2017-08-07 08:38:05', NULL, NULL, NULL, NULL, 0),
(96, 41, 3, '', 7, '2017-08-07 08:38:05', NULL, NULL, NULL, NULL, 0),
(97, 42, 1, '', 7, '2017-08-07 09:44:43', NULL, NULL, NULL, NULL, 0),
(98, 42, 2, 'mahmoudg777777@gmail.com', 7, '2017-08-07 09:44:43', NULL, NULL, NULL, NULL, 0),
(99, 42, 3, '01110056724', 7, '2017-08-07 09:44:43', NULL, NULL, NULL, NULL, 0),
(100, 42, 3, '', 7, '2017-08-07 09:44:43', NULL, NULL, NULL, NULL, 0),
(101, 43, 1, '', 7, '2017-08-07 09:49:15', NULL, NULL, NULL, NULL, 0),
(102, 43, 2, 'mahmoudg777777@gmail.com', 7, '2017-08-07 09:49:15', NULL, NULL, NULL, NULL, 0),
(103, 43, 3, '01110056724', 7, '2017-08-07 09:49:15', NULL, NULL, NULL, NULL, 0),
(104, 43, 3, '', 7, '2017-08-07 09:49:15', NULL, NULL, NULL, NULL, 0),
(105, 44, 1, '', 7, '2017-08-07 09:49:32', NULL, NULL, NULL, NULL, 0),
(106, 44, 2, 'mahmoudg777777@gmail.com', 7, '2017-08-07 09:49:32', NULL, NULL, NULL, NULL, 0),
(107, 44, 3, '01110056724', 7, '2017-08-07 09:49:32', NULL, NULL, NULL, NULL, 0),
(108, 44, 3, '', 7, '2017-08-07 09:49:32', NULL, NULL, NULL, NULL, 0),
(109, 45, 1, '', 7, '2017-08-07 09:49:49', NULL, NULL, NULL, NULL, 0),
(110, 45, 2, 'mahmoudg777777@gmail.com', 7, '2017-08-07 09:49:49', NULL, NULL, NULL, NULL, 0),
(111, 45, 3, '01110056724', 7, '2017-08-07 09:49:49', NULL, NULL, NULL, NULL, 0),
(112, 45, 3, '', 7, '2017-08-07 09:49:49', NULL, NULL, NULL, NULL, 0),
(113, 46, 1, '', 7, '2017-08-07 09:49:59', NULL, NULL, NULL, NULL, 0),
(114, 46, 2, 'mahmoudg777777@gmail.com', 7, '2017-08-07 09:49:59', NULL, NULL, NULL, NULL, 0),
(115, 46, 3, '01110056724', 7, '2017-08-07 09:49:59', NULL, NULL, NULL, NULL, 0),
(116, 46, 3, '', 7, '2017-08-07 09:49:59', NULL, NULL, NULL, NULL, 0),
(117, 47, 1, '', 7, '2017-08-07 09:50:21', NULL, NULL, NULL, NULL, 0),
(118, 47, 2, 'mahmoudg777777@gmail.com', 7, '2017-08-07 09:50:21', NULL, NULL, NULL, NULL, 0),
(119, 47, 3, '01110056724', 7, '2017-08-07 09:50:21', NULL, NULL, NULL, NULL, 0),
(120, 47, 3, '', 7, '2017-08-07 09:50:21', NULL, NULL, NULL, NULL, 0),
(121, 48, 1, '', 7, '2017-08-07 09:50:53', NULL, NULL, NULL, NULL, 0),
(122, 48, 2, 'mahmoudg777777@gmail.com', 7, '2017-08-07 09:50:53', NULL, NULL, NULL, NULL, 0),
(123, 48, 3, '01110056724', 7, '2017-08-07 09:50:53', NULL, NULL, NULL, NULL, 0),
(124, 48, 3, '', 7, '2017-08-07 09:50:53', NULL, NULL, NULL, NULL, 0),
(125, 49, 1, '', 7, '2017-08-07 09:52:08', NULL, NULL, NULL, NULL, 0),
(126, 49, 2, 'mahmoudg777777@gmail.com', 7, '2017-08-07 09:52:08', NULL, NULL, NULL, NULL, 0),
(127, 49, 3, '01110056724', 7, '2017-08-07 09:52:08', NULL, NULL, NULL, NULL, 0),
(128, 49, 3, '', 7, '2017-08-07 09:52:08', NULL, NULL, NULL, NULL, 0),
(129, 42, 1, '', 7, '2017-08-07 09:52:52', NULL, NULL, NULL, NULL, 0),
(130, 42, 2, '', 7, '2017-08-07 09:52:52', NULL, NULL, NULL, NULL, 0),
(131, 42, 3, '64654', 7, '2017-08-07 09:52:52', NULL, NULL, NULL, NULL, 0),
(132, 42, 3, '', 7, '2017-08-07 09:52:52', NULL, NULL, NULL, NULL, 0),
(133, 50, 1, 'Giza1', 7, '2017-08-07 09:53:38', NULL, NULL, NULL, NULL, 0),
(134, 50, 2, 'mahmoudg777777@gmail.com', 7, '2017-08-07 09:53:38', NULL, NULL, NULL, NULL, 0),
(135, 50, 3, '01110056724', 7, '2017-08-07 09:53:38', NULL, NULL, NULL, NULL, 0),
(136, 50, 3, '', 7, '2017-08-07 09:53:38', NULL, NULL, NULL, NULL, 0),
(137, 51, 1, '', 7, '2017-08-07 09:59:33', NULL, NULL, NULL, NULL, 0),
(138, 51, 2, 'mahmoudg777777@gmail.com', 7, '2017-08-07 09:59:33', NULL, NULL, NULL, NULL, 0),
(139, 51, 3, '01110056724', 7, '2017-08-07 09:59:33', NULL, NULL, NULL, NULL, 0),
(140, 51, 3, '', 7, '2017-08-07 09:59:33', NULL, NULL, NULL, NULL, 0),
(141, 52, 1, '', 7, '2017-08-07 10:01:41', NULL, NULL, NULL, NULL, 0),
(142, 52, 2, 'shams@gmail.com', 7, '2017-08-07 10:01:41', NULL, NULL, NULL, NULL, 0),
(143, 52, 3, '01110056724', 7, '2017-08-07 10:01:41', NULL, NULL, NULL, NULL, 0),
(144, 52, 3, '', 7, '2017-08-07 10:01:41', NULL, NULL, NULL, NULL, 0),
(145, 53, 1, '', 7, '2017-08-07 10:05:23', NULL, NULL, NULL, NULL, 0),
(146, 53, 2, 'mahmoudg77@gmail.com', 7, '2017-08-07 10:05:23', NULL, NULL, NULL, NULL, 0),
(147, 53, 3, '01110056724', 7, '2017-08-07 10:05:23', NULL, NULL, NULL, NULL, 0),
(148, 53, 3, '', 7, '2017-08-07 10:05:23', NULL, NULL, NULL, NULL, 0),
(149, 54, 1, '', 7, '2017-08-07 10:43:56', NULL, NULL, NULL, NULL, 0),
(150, 54, 2, 'mahmoudg777777@gmail.com', 7, '2017-08-07 10:43:56', NULL, NULL, NULL, NULL, 0),
(151, 54, 3, '01110056724', 7, '2017-08-07 10:43:56', NULL, NULL, NULL, NULL, 0),
(152, 54, 3, '', 7, '2017-08-07 10:43:56', NULL, NULL, NULL, NULL, 0),
(153, 55, 1, '', 7, '2017-08-07 11:20:10', NULL, NULL, NULL, NULL, 0),
(154, 55, 2, 'mahmoudg777777@gmail.com', 7, '2017-08-07 11:20:10', NULL, NULL, NULL, NULL, 0),
(155, 55, 3, '01110056724', 7, '2017-08-07 11:20:10', NULL, NULL, NULL, NULL, 0),
(156, 55, 3, '', 7, '2017-08-07 11:20:10', NULL, NULL, NULL, NULL, 0);

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

--
-- Dumping data for table `experiences`
--

INSERT INTO `experiences` (`id`, `name`, `created_by`, `created_at`, `updated_by`, `updated_at`, `deleted_by`, `deleted_at`, `is_deleted`) VALUES
(1, 'Exp1', 7, '2017-07-29 10:07:09', NULL, NULL, NULL, NULL, 0);

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

--
-- Dumping data for table `experienesuser`
--

INSERT INTO `experienesuser` (`id`, `userId`, `experienceId`, `approval_request`, `approval_by`, `approval_at`, `created_by`, `created_at`, `updated_by`, `updated_at`, `deleted_by`, `deleted_at`, `is_deleted`) VALUES
(1, 1, 1, NULL, NULL, NULL, 7, '2017-08-05 13:17:40', NULL, NULL, NULL, NULL, 0),
(2, 2, 1, 1, 7, '2017-08-05 16:28:26', 7, '2017-08-05 14:25:36', 7, '2017-08-05 14:28:26', NULL, NULL, 0);

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
(1, 'h1', 7, '2017-07-29 10:07:19', NULL, '2017-07-29 12:07:29', 7, '2017-07-29 12:07:29', 1),
(2, 'Hobb 1', 7, '2017-07-29 10:10:10', 7, '2017-07-31 07:36:04', NULL, NULL, 0);

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

--
-- Dumping data for table `hobbiesusers`
--

INSERT INTO `hobbiesusers` (`id`, `hobbiesId`, `userId`, `created_by`, `created_at`, `updated_by`, `updated_at`, `deleted_by`, `deleted_at`, `is_deleted`) VALUES
(1, 2, 1, 7, '2017-07-29 10:10:51', NULL, NULL, NULL, NULL, 0);

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
(1, 'fghfghfgh', 1, 'App\\Models\\Profile\\Profile', '', 0, '2017-07-27 17:11:19', 7, '2017-07-28 08:16:20', NULL, NULL, 0),
(2, '', 25, 'App\\Models\\Profile\\Profile', '', 7, '2017-08-06 08:46:10', NULL, NULL, NULL, NULL, 0),
(3, '', 25, 'App\\Models\\Profile\\Profile', '', 7, '2017-08-06 08:46:10', NULL, NULL, NULL, NULL, 0),
(4, '9900e.gif', 26, 'App\\Models\\Profile\\Profile', '', 7, '2017-08-06 08:47:45', NULL, NULL, NULL, NULL, 0),
(5, '0c180.gif', 27, 'App\\Models\\Profile\\Profile', '', 7, '2017-08-06 08:49:27', NULL, NULL, NULL, NULL, 0),
(6, '9d400.png', 28, 'App\\Models\\Profile\\Profile', '', 7, '2017-08-06 08:49:40', NULL, NULL, NULL, NULL, 0),
(7, '9c181.png', 29, 'App\\Models\\Profile\\Profile', '', 7, '2017-08-06 08:49:53', NULL, NULL, NULL, NULL, 0),
(8, '6218c.png', 30, 'App\\Models\\Profile\\Profile', 'Personal', 7, '2017-08-06 08:51:46', NULL, NULL, NULL, NULL, 0),
(9, 'a0323.png', 31, 'App\\Models\\Profile\\Profile', 'Personal', 7, '2017-08-06 08:54:40', NULL, NULL, NULL, NULL, 0),
(10, 'a5209.png', 32, 'App\\Models\\Profile\\Profile', 'Personal', 7, '2017-08-06 08:55:15', NULL, NULL, NULL, NULL, 0),
(11, '92226.png', 33, 'App\\Models\\Profile\\Profile', 'Personal', 7, '2017-08-06 08:56:56', NULL, NULL, NULL, NULL, 0),
(12, '0af9e.png', 34, 'App\\Models\\Profile\\Profile', 'Personal', 7, '2017-08-06 08:57:24', NULL, NULL, NULL, NULL, 0),
(13, '4a775.png', 35, 'App\\Models\\Profile\\Profile', 'Personal', 7, '2017-08-06 08:59:03', NULL, NULL, NULL, NULL, 0),
(14, '724ae.jpg', 35, 'App\\Models\\Profile\\Profile', 'Cover', 7, '2017-08-06 08:59:03', NULL, NULL, NULL, NULL, 0),
(15, '382a8.jpg', 40, 'App\\Models\\Profile\\Profile', 'Personal', 7, '2017-08-06 12:38:33', NULL, NULL, NULL, NULL, 0),
(16, '000b2.jpg', 40, 'App\\Models\\Profile\\Profile', 'Cover', 7, '2017-08-06 12:38:33', NULL, NULL, NULL, NULL, 0);

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`Profile_ID`, `First_Name`, `Second_Name`, `Third_Name`, `Forth_Name`, `National_Number`, `Birth_Date`, `Gender`, `created_by`, `created_at`, `updated_by`, `updated_at`, `deleted_by`, `deleted_at`, `is_deleted`, `approval_request`, `approval_by`, `approval_at`) VALUES
(1, 'أحمد', 'شمس الدين', 'محمد', 'خالد', 111, '2017-07-11', NULL, 0, '2017-07-15 09:21:31', 7, '2017-08-06 07:03:26', NULL, '2017-07-15 11:30:19', NULL, 1, 7, '2017-08-05 16:28:28'),
(2, 'Mahmoud Gomaa', '', '', '', 0, '2017-08-09', NULL, 3, '2017-07-19 01:58:16', NULL, '2017-08-05 16:19:51', NULL, NULL, 0, NULL, NULL, NULL),
(3, 'Test', '', '', '', 0, '2017-08-15', NULL, 3, '2017-07-19 02:14:05', NULL, '2017-08-05 16:19:55', 3, '2017-07-19 02:21:34', 1, NULL, NULL, NULL),
(4, 'Yosef', 'Mahmoud', 'Gomaa', 'Khalil', 11, '2003-08-23', NULL, 7, '2017-07-27 10:08:41', NULL, '2017-08-06 07:03:32', NULL, NULL, 0, NULL, NULL, NULL),
(5, 'Test', 'tett', 'tt', 'tt', 123456, '1955-02-02', NULL, 7, '2017-08-05 10:29:34', NULL, '2017-08-05 15:45:19', 7, '2017-08-05 15:45:19', 1, NULL, NULL, NULL),
(6, 'Test', 'tett', 'tt', 'tt', 123456, '1955-02-02', NULL, 7, '2017-08-05 10:30:48', NULL, '2017-08-05 15:45:18', 7, '2017-08-05 15:45:18', 1, NULL, NULL, NULL),
(7, 'Test123', 'sfsdfsdf', 'dsfs', 'sdf', 555, '1955-02-02', NULL, 7, '2017-08-05 10:31:38', NULL, '2017-08-05 15:45:17', 7, '2017-08-05 15:45:17', 1, NULL, NULL, NULL),
(8, 'Test123', 'sfsdfsdf', 'dsfs', 'sdf', 555, '1955-02-02', NULL, 7, '2017-08-05 10:33:18', NULL, '2017-08-05 15:45:15', 7, '2017-08-05 15:45:15', 1, NULL, NULL, NULL),
(9, 'Test123', 'sfsdfsdf', 'dsfs', 'sdf', 555, '1955-02-02', NULL, 7, '2017-08-05 10:34:51', NULL, '2017-08-05 15:45:14', 7, '2017-08-05 15:45:14', 1, NULL, NULL, NULL),
(10, 'Test123', 'sfsdfsdf', 'dsfs', 'sdf', 555, '1955-02-02', NULL, 7, '2017-08-05 10:36:02', NULL, '2017-08-05 15:45:13', 7, '2017-08-05 15:45:13', 1, NULL, NULL, NULL),
(11, 'Test123', 'sfsdfsdf', 'dsfs', 'sdf', 555, '1955-02-02', NULL, 7, '2017-08-05 10:38:33', NULL, '2017-08-05 15:45:12', 7, '2017-08-05 15:45:12', 1, NULL, NULL, NULL),
(12, 'Test123', 'sfsdfsdf', 'dsfs', 'sdf', 555, '1955-02-02', NULL, 7, '2017-08-05 10:38:58', NULL, '2017-08-05 15:45:11', 7, '2017-08-05 15:45:11', 1, NULL, NULL, NULL),
(13, 'Test123', 'sfsdfsdf', 'dsfs', 'sdf', 555, '1955-02-02', NULL, 7, '2017-08-05 10:41:31', NULL, '2017-08-05 15:45:08', 7, '2017-08-05 15:45:08', 1, NULL, NULL, NULL),
(14, 'Test123', 'sfsdfsdf', 'dsfs', 'sdf', 555, '1955-02-02', NULL, 7, '2017-08-05 10:42:01', 7, '2017-08-05 15:45:06', 7, '2017-08-05 15:45:06', 1, NULL, NULL, NULL),
(15, 'Test123', 'cxvxcv', 'x', 'cxv', 123456, '1955-02-02', NULL, 7, '2017-08-05 12:56:18', 7, '2017-08-05 15:45:03', 7, '2017-08-05 15:45:03', 1, NULL, NULL, NULL),
(16, 'First Name', 'Second Name', 'Third Name', 'Fourth Name', 1555, '1955-02-02', 1, 7, '2017-08-06 07:27:53', 7, '2017-08-06 07:28:35', NULL, NULL, 0, 1, 7, '2017-08-06 09:28:35'),
(17, 'sadasd', 'fff', '', '', 11111, '1955-02-02', 0, 7, '2017-08-06 07:46:09', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(18, 'sadasd', 'dasd', '', '', 332323, '1955-02-02', 0, 7, '2017-08-06 07:52:56', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(19, 'sadasd', 'dasd', '', '', 332323, '1955-02-02', 0, 7, '2017-08-06 07:53:37', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(20, 'sadasd', 'dasd', '', '', 3333, '1955-02-02', 0, 7, '2017-08-06 07:54:00', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(21, 'أحمد', 'شمس الدين', 'محمد', 'خالد', 111, '2017-07-11', 0, 7, '2017-08-06 08:33:50', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(22, 'First Name', 'Second Name', '', '', 123, '1955-02-02', 1, 7, '2017-08-06 08:44:33', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(23, 'First Name', 'Second Name', '', '', 123, '1955-02-02', 1, 7, '2017-08-06 08:45:15', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(24, 'First Name', 'Second Name', '', '', 123, '1955-02-02', 1, 7, '2017-08-06 08:45:48', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(25, 'First Name', 'Second Name', '', '', 123, '1955-02-02', 1, 7, '2017-08-06 08:46:10', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(26, 'First Name', 'Second Name', '', '', 3333, '1955-02-02', 0, 7, '2017-08-06 08:47:45', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(27, 'First Name', 'Second Name', '', '', 3333, '1955-02-02', 0, 7, '2017-08-06 08:49:27', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(28, 'First Name', 'Second Name', '', '', 3333, '1955-02-02', 0, 7, '2017-08-06 08:49:40', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(29, 'First Name', 'Second Name', '', '', 3333, '1955-02-02', 0, 7, '2017-08-06 08:49:53', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(30, 'First Name', 'Second Name', '', '', 3333, '1955-02-02', 0, 7, '2017-08-06 08:51:46', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(31, 'First Name', 'Second Name', '', '', 3333, '1955-02-02', 0, 7, '2017-08-06 08:54:40', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(32, 'First Name', 'Second Name', '', '', 3333, '1955-02-02', 0, 7, '2017-08-06 08:55:15', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(33, 'First Name', 'Second Name', '', '', 3333, '1955-02-02', 0, 7, '2017-08-06 08:56:56', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(34, 'First Name', 'Second Name', '', '', 3333, '1955-02-02', 0, 7, '2017-08-06 08:57:24', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(35, 'First Name', 'Second Name', '', '', 3333, '1955-02-02', 0, 7, '2017-08-06 08:59:03', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(36, 'wedas', 'dasd', '', '', 456, '1955-02-02', 1, 7, '2017-08-06 10:10:15', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(37, 'asd', 'asd', '', '', 5588, '1955-02-02', 1, 7, '2017-08-06 10:11:40', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(38, 'ddd', 'ddd', '', '', 158, '1955-02-02', 0, 7, '2017-08-06 12:34:52', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(39, 'ddd', 'ddd', '', '', 158, '1955-02-02', 0, 7, '2017-08-06 12:37:44', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(40, 'xcvxc', 'vxcv', '', '', 456, '1955-02-02', 0, 7, '2017-08-06 12:38:33', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(41, 'sadasd', 'asdasd', '', '', 123, '1955-02-02', 0, 7, '2017-08-07 08:38:05', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(42, 'Assist ', 'Leader', '', '', 555, '1955-02-02', 0, 7, '2017-08-07 09:44:43', 7, '2017-08-07 09:52:52', NULL, NULL, 0, NULL, NULL, NULL),
(43, 'Assist ', 'Leader', '', '', 555, '1955-02-02', 0, 7, '2017-08-07 09:49:15', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(44, 'Assist ', 'Leader', '', '', 555, '1955-02-02', 0, 7, '2017-08-07 09:49:32', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(45, 'Assist ', 'Leader', '', '', 555, '1955-02-02', 0, 7, '2017-08-07 09:49:49', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(46, 'Assist ', 'Leader', '', '', 555, '1955-02-02', 0, 7, '2017-08-07 09:49:59', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(47, 'Assist ', 'Leader', '', '', 555, '1955-02-02', 0, 7, '2017-08-07 09:50:21', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(48, 'Assist ', 'Leader', '', '', 555, '1955-02-02', 0, 7, '2017-08-07 09:50:53', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(49, 'Profile 1', 'Profile 1', '', '', 1, '1955-02-02', 1, 7, '2017-08-07 09:52:08', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(50, 'sdsf', 'sdfsdf', '', '', 157, '1955-02-02', 0, 7, '2017-08-07 09:53:38', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(51, 'sdfsd', 'fsdfsdf', '', '', 1133, '1955-02-02', 0, 7, '2017-08-07 09:59:33', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(52, 'sdfsdf', 'Second Name', '', '', 990, '1955-02-02', 0, 7, '2017-08-07 10:01:41', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(53, 'ssss', 'sss', '', '', 1114, '1955-02-02', 0, 7, '2017-08-07 10:05:23', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(54, 'asdddd', 'Second Name', '', '', 12333, '1955-02-02', 0, 7, '2017-08-07 10:43:56', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(55, 'Profile Test 1', 'Profile Test 1', '', '', 123456, '1955-02-02', 0, 7, '2017-08-07 11:20:10', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL);

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
(1, '2016-2017', '2016-05-01', '2017-05-30', 7, '2017-08-07 12:36:47', NULL, NULL, NULL, NULL, 0),
(2, '2017-2018', '2017-05-01', '2018-05-30', 7, '2017-08-07 12:38:28', NULL, NULL, NULL, NULL, 0);

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
(1, 2, 38, 40, NULL, NULL, NULL, 7, '2017-08-07 12:41:42', NULL, NULL, NULL, NULL, 0),
(2, 2, 55, 40, NULL, NULL, NULL, 7, '2017-08-07 12:41:42', NULL, NULL, NULL, NULL, 0),
(3, 2, 38, 41, 1, 7, '2017-08-07 15:56:46', 7, '2017-08-07 13:07:01', 7, '2017-08-07 13:56:46', NULL, NULL, 0),
(4, 2, 55, 41, 1, 7, '2017-08-07 15:56:55', 7, '2017-08-07 13:07:01', 7, '2017-08-07 13:56:55', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sec_accessright`
--

CREATE TABLE `sec_accessright` (
  `id` int(8) UNSIGNED NOT NULL,
  `groupid` int(8) NOT NULL,
  `model_name` varchar(50) NOT NULL,
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

INSERT INTO `sec_accessright` (`id`, `groupid`, `model_name`, `accesstype`, `filter`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
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

--
-- Dumping data for table `studies`
--

INSERT INTO `studies` (`id`, `name`, `created_by`, `created_at`, `updated_by`, `updated_at`, `deleted_by`, `deleted_at`, `is_deleted`) VALUES
(1, 'Study 1', 7, '2017-08-05 14:26:01', NULL, NULL, NULL, NULL, 0);

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

--
-- Dumping data for table `studiesusers`
--

INSERT INTO `studiesusers` (`id`, `studyId`, `userId`, `approval_request`, `approval_by`, `approval_at`, `created_by`, `created_at`, `updated_by`, `updated_at`, `deleted_by`, `deleted_at`, `is_deleted`) VALUES
(1, 1, 1, 1, 7, '2017-08-05 16:28:27', 7, '2017-08-05 14:26:13', 7, '2017-08-05 14:28:27', NULL, NULL, 0);

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
  `created_at` timestamp NOT NULL,
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
(1, 35, 1, 1, NULL, 0, 2, NULL, NULL, NULL, 7, '2017-08-07 12:28:40', NULL, NULL, NULL, NULL, NULL),
(2, 36, 1, 1, NULL, 0, 2, NULL, NULL, NULL, 7, '2017-08-07 12:34:05', NULL, NULL, NULL, NULL, NULL),
(3, 37, 1, 1, NULL, 0, 2, NULL, NULL, NULL, 7, '2017-08-07 12:37:00', NULL, NULL, NULL, NULL, NULL),
(4, 38, 1, 1, NULL, 0, 2, NULL, NULL, NULL, 7, '2017-08-07 12:38:33', NULL, NULL, NULL, NULL, NULL),
(5, 39, 1, 1, NULL, 0, 2, NULL, NULL, NULL, 7, '2017-08-07 12:40:31', NULL, NULL, NULL, NULL, NULL),
(6, 40, 1, 1, NULL, 0, 2, NULL, NULL, NULL, 7, '2017-08-07 12:41:42', NULL, NULL, NULL, NULL, NULL),
(7, 41, 2, 1, NULL, 0, 2, 1, 7, '2017-08-07 13:56:29', 7, '2017-08-07 13:07:01', 7, '2017-08-07 13:56:29', NULL, NULL, NULL);

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
(41, 'ttt', '0101001001001', 9, 5, 7, '2017-08-07 13:07:01', NULL, NULL, NULL, NULL, 0);

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
(1, 7, 'App\\Models\\Lookup\\TeamsReg', 7, 1, 7, '2017-08-07 13:07:01', 7, '2017-08-07 13:56:29', NULL, NULL, 0),
(2, 7, 'App\\Models\\Admin\\RegisteryUserLog', 3, 1, 7, '2017-08-07 13:07:01', 7, '2017-08-07 13:56:46', NULL, NULL, 0),
(3, 7, 'App\\Models\\Admin\\RegisteryUserLog', 4, 1, 7, '2017-08-07 13:07:01', 7, '2017-08-07 13:56:55', NULL, NULL, 0);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `id` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `Profile_ID` int(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `protofolo`
--
ALTER TABLE `protofolo`
  MODIFY `id` int(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `registeryuser`
--
ALTER TABLE `registeryuser`
  MODIFY `id` int(7) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `waitinglist`
--
ALTER TABLE `waitinglist`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
