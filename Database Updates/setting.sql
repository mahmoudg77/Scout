-- phpMyAdmin SQL Dump
-- version 4.0.10.15
-- http://www.phpmyadmin.net
--
-- Host: 10.123.0.85:3306
-- Generation Time: Aug 21, 2017 at 07:25 PM
-- Server version: 5.6.27
-- PHP Version: 5.4.45-0+deb7u9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mahgom35_aece`
--

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE IF NOT EXISTS `setting` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `hint` varchar(200) NOT NULL,
  `setting_key` varchar(50) NOT NULL,
  `value` text NULL,
  `type` int(4) NOT NULL DEFAULT '1',
  `availables` varchar(255) NOT NULL,
  `lang` varchar(4) NOT NULL DEFAULT '*',
  `setting_group` varchar(100) NOT NULL DEFAULT 'General Setting',
  PRIMARY KEY (`id`),
  KEY `lang` (`lang`),
  KEY `setting_group` (`group`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=79 ;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `name`, `hint`, `setting_key`, `value`, `type`, `availables`, `lang`, `setting_group`) VALUES
(1, 'Site name', 'Title of your website', 'site_name', 'Arabscout', 1, '', 'en', 'General'),
(2, 'إسم الموقع', 'Title of your website', 'site_name', 'الكشافة المصرية', 1, '', 'ar', 'General'),
(3, 'Default email البريد الإلفتراضي ', 'Website email you can use any place', 'emails_default', 'info@arabscout.net', 1, '', '*', 'General'),
(4, 'No-replay email بريد الإشعارات', 'This email for message you not follow up it''s response ', 'emails_noreplay', 'no-replay@arabscout.net', 1, '', '*', 'General'),
(5, 'About Us', 'about_us', 'about_us', '', 8, '', 'en', 'General'),
(77, 'Notes', 'Notes', 'site_notes', '', 1, '', 'en', 'General'),
(78, 'نبذة عن الموقع', 'نبذة عن الموقع', 'site_notes', '', 8, '', 'ar', 'General'),
(73, 'العنوان', 'العنوان', 'site_address', '', 1, '', 'ar', 'General'),
(7, 'Max count in home', '', 'max_home', '6', 1, '', '*', 'Posts'),
(8, 'Max count on load more', '', 'max_loadmore', '6', 1, '', '*', 'Posts'),
(10, 'Max post length', '', 'max_length', '200', 1, '', '*', 'Posts'),
(11, 'Allow new comment', '', 'allow_new_comment', 'Yes', 3, '', '*', 'Posts'),
(12, 'Allow Like', '', 'allow_like', 'Yes', 3, '', '*', 'Posts'),
(13, 'Allow share', '', 'allow_share', 'Yes', 3, '', '*', 'Posts'),
(14, 'Max comment length', '', 'max_comment_length', '200', 1, '', '*', 'Posts'),
(15, 'Max comments load', '', 'max_comments_load', '2', 1, '', '*', 'Posts'),
(16, 'Max comments loadmore', '', ' max_comments_loadmore', '2', 1, '', '*', 'Posts'),
(17, 'Max image size (KB)', '', 'max_image_size', '100', 1, '', '*', 'Events'),
(18, 'Max count in home', '', 'max_home', '9', 1, '', '*', 'Events'),
(19, 'Max count on load more', '', 'max_loadmore', '9', 1, '', '*', 'Events'),
(20, 'Max post length', '', 'max_length', '200', 1, '', '*', 'Events'),
(21, 'Allow new comment', '', 'allow_new_comment', 'Yes', 3, '', '*', 'Events'),
(22, 'Allow register', '', 'allow_like', 'Yes', 3, '', '*', 'Events'),
(23, 'Allow share', '', 'allow_share', 'Yes', 3, '', '*', 'Events'),
(24, 'Max comment length', '', 'max_comment_length', '200', 1, '', '*', 'Events'),
(25, 'Max comments load', '', 'max_comments_load', '6', 1, '', '*', 'Events'),
(26, 'Max comments loadmore', '', 'max_comments_loadmore', '6', 1, '', '*', 'Events'),
(27, 'Using editor', '', 'editor', 'No', 3, '', '*', 'Events'),
(28, 'Comment required approve', '', 'comment_approve', 'No', 3, '', '*', 'Posts'),
(29, 'Comment required approve', '', 'comment_approve', 'No', 3, '', '*', 'Events'),
(30, 'Max image size (KB)', '', 'max_image_size', '100', 1, '', '*', 'Articles'),
(31, 'Max count in home', '', 'max_home', '9', 1, '', '*', 'Articles'),
(32, 'Max count on load more', '', 'max_loadmore', '9', 1, '', '*', 'Articles'),
(33, 'Max post length', '', 'max_length', '200', 1, '', '*', 'Articles'),
(34, 'Allow new comment', '', 'allow_new_comment', 'Yes', 3, '', '*', 'Articles'),
(35, 'Allow register', '', 'allow_like', 'Yes', 3, '', '*', 'Articles'),
(36, 'Allow share', '', 'allow_share', 'Yes', 3, '', '*', 'Articles'),
(37, 'Max comment length', '', 'max_comment_length', '200', 1, '', '*', 'Articles'),
(38, 'Max comments load', '', 'max_comments_load', '6', 1, '', '*', 'Articles'),
(39, 'Max comments loadmore', '', 'max_comments_loadmore', '6', 1, '', '*', 'Articles'),
(40, 'Using editor', '', 'editor', 'No', 3, '', '*', 'Events'),
(41, 'Comment required approve', '', 'comment_approve', 'No', 3, '', '*', 'Articles'),
(42, 'Default language لغة الموقع', '', 'site_lang', 'ar', 4, '{shortcut as id ,name from languages}', '*', 'General'),
(43, 'Allow write post', '', 'allow_write_post', 'Yes', 3, '', '*', 'Profile'),
(44, 'Allow write event', '', 'allow_write_event', 'No', 3, '', '*', 'Profile'),
(45, 'Allow write article', '', 'allow_write_article', 'No', 3, '', '*', 'Profile'),
(46, 'Allow write comment', '', 'allow_write_comment', 'Yes', 3, '', '*', 'Profile'),
(47, 'Using editor', '', 'editor', 'No', 3, '', '*', 'Posts'),
(48, 'Using editor', '', 'editor', 'Yes', 3, '', '*', 'Articles'),
(49, 'Allow follow', '', 'allow_follow', 'No', 3, '', '*', 'Profile'),
(50, 'Can followed', '', 'can_followed', 'No', 3, '', '*', 'Profile'),
(51, 'Allow write post', '', 'allow_write_post', 'Yes', 3, '', '*', 'Activity'),
(52, 'Allow write event', '', 'allow_write_event', 'Yes', 3, '', '*', 'Activity'),
(53, 'Allow write article', '', 'allow_write_article', 'No', 3, '', '*', 'Activity'),
(54, 'Allow write comment', '', 'allow_write_comment', 'Yes', 3, '', '*', 'Activity'),
(55, 'Allow follow', '', 'allow_follow', 'No', 3, '', '*', 'Activity'),
(56, 'Can followed', '', 'can_followed', 'No', 3, '', '*', 'Activity'),
(57, 'Activation periods (Day)', '', 'activiation_period', '10', 1, '', '*', 'Profile'),
(58, 'On expired', '', 'expired_action', 'Suspense Account', 4, '{1 as id,''No Action'' as name union all select 2 as id,''Suspense Account'' as name union all select 3 as id,''Denied Post, event and article'' as name}', '*', 'Profile'),
(59, 'Activation periods (Day)', '', 'activiation_period', '10', 1, '', '*', 'Activity'),
(60, 'On expired', '', 'expired_action', 'Suspense Account', 4, '{1 as id,''No Action'' as name union all select 2 as id,''Suspense Account'' as name union all select 3 as id,''Denied Post, event and article'' as name}', '*', 'Activity'),
(61, 'Site Description', 'Description of your website', 'site_desc', '', 1, '', 'en', 'General'),
(74, 'Address', 'Address', 'site_address', '', 1, '', 'en', 'General'),
(75, 'phone', 'phone', 'site_phone', '0580816665', 1, '', '*', 'General'),
(76, 'Fax', 'Fax', 'site_fax', '0542725883', 1, '', '*', 'General'),
(62, 'وصف الموقع', 'Description of your website', 'site_desc', '', 1, '', 'ar', 'General'),
(68, 'Facebook فيسبوك', 'facebook', 'facebook', '//www.facebook.com', 1, '', '*', 'General'),
(69, 'Twitter تويتر', 'twitter', 'twitter', '//www.twitter.com', 1, '', '*', 'General'),
(70, 'Youtube يوتيوب', 'youtube', 'youtube', '//www.youtube.com', 1, '', '*', 'General'),
(71, 'Instagram انستجرام', 'Instagram', 'instagram', '//www.instegram.com', 1, '', '*', 'General'),
(63, 'Site Keaywords', 'Keaywords of your website', 'site_key', '', 1, '', 'en', 'General'),
(64, 'الكلمات الدلالية', 'Keywords of your website', 'site_key', '', 1, '', 'ar', 'General'),
(65, 'Site Image لوجو الموقع', 'Image of your website', 'site_image', '', 1, '', '*', 'General');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
