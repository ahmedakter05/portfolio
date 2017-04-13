-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2016 at 04:45 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `aapf`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_category`
--

CREATE TABLE IF NOT EXISTS `blog_category` (
  `categoryid` int(16) NOT NULL AUTO_INCREMENT,
  `categoryname` varchar(256) NOT NULL,
  `categorytop` int(16) NOT NULL,
  PRIMARY KEY (`categoryid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `blog_category`
--

INSERT INTO `blog_category` (`categoryid`, `categoryname`, `categorytop`) VALUES
(1, 'Photography', 0),
(2, 'Web Design', 0),
(3, 'CMS Design', 2),
(4, 'Abstract Photo', 1),
(5, 'Web Developments', 0);

-- --------------------------------------------------------

--
-- Table structure for table `blog_comment`
--

CREATE TABLE IF NOT EXISTS `blog_comment` (
  `commentid` int(16) NOT NULL,
  `content` text NOT NULL,
  `status` varchar(128) NOT NULL,
  `comment_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `author` varchar(256) NOT NULL,
  `email` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `postid` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_comment`
--

INSERT INTO `blog_comment` (`commentid`, `content`, `status`, `comment_time`, `author`, `email`, `url`, `postid`) VALUES
(1, 'Hello Nice Article', 'Active', '2015-10-01 16:20:44', '1', 'aa@aa.com', 'aa.aapf.tk', 1),
(2, 'Its 2nd Comment', 'Published', '2015-10-01 16:30:47', '1', 'aa@aa.com', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `blog_post`
--

CREATE TABLE IF NOT EXISTS `blog_post` (
  `postid` int(16) NOT NULL AUTO_INCREMENT,
  `title` varchar(128) NOT NULL,
  `contents` text NOT NULL,
  `image_urls` varchar(256) NOT NULL,
  `tags` text NOT NULL,
  `status` varchar(256) NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_time` timestamp NOT NULL,
  `userid` int(16) NOT NULL,
  PRIMARY KEY (`postid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `blog_post`
--

INSERT INTO `blog_post` (`postid`, `title`, `contents`, `image_urls`, `tags`, `status`, `create_time`, `update_time`, `userid`) VALUES
(1, 'An Unsung Hero', 'The Hero is Not a Human or anymals, Its a virtue living inside us. So find ur heroness from ur inside and change the world.', 'assets/exquiso/images/entries/700x240/modern-skyscraper-700x240.png', 'Hero Human World', '', '2015-10-01 14:26:47', '2015-10-01 14:26:47', 1),
(2, 'Kutub Minar', 'Aliquam quis libero dapibus ante rhoncus eleifend quis vitae erat. Quisque vel nisi nibh. Suspendisse ipsum lorem integer nec interdum massa. Sed ornare rutrum sem, vitae imperdiet risus ullamcorper non. Aliquam adipiscing iaculis lorem, luctus semper diam dignissim vitae. Phasellus vel enim vel purus vehicula sollicitudin. In hac habitasse platea dictumst. Aliquam lacinia euismod odio id pulvinar. Quisque sagittis malesuada lectus, bibendum tristique integer nec interdum massa. Sed ornare rutrum sem, vitae imperdiet risus ullamcorper non.\n                        <blockquote class="simple">\n                            <div class="quote-content">\n                                <p>Integer nec interdum massa. Sed ornare rutrum sem, vitae imperdiet risus ullamcorper non. Aliquam adipiscing iaculis lorem, luctus semper diam dignissim vitae. Phasellus vel enim vel purus vehicula sollicitudin. In hac habitasse platea dictumst. Aliquam lacinia euismod odio id pulvinar. Quisque sagittis malesuada lectus, bibendum tristique turpis aliquam sed. Vivamus id volutpat metus. Praesent ac arcu purus, id commodo odio.</p>\n                            </div>	\n                            <div class="quote-meta">— Author</div>\n                        </blockquote>\n                        <p>Curabitur hendrerit bibendum erat, id sollicitudin arcu adipiscing eget. Nullam in nibh eget sapien placerat tincidunt nec ac dui. Ut lobortis, felis vel congue viverra, dui eros auctor lectus, sed sodales massa leo id sapien. Quisque nec tristique augue. Duis ut neque vitae velit rutrum gravida. Sed vel turpis nunc, non scelerisque nisi. Nulla id eros pretium neque condimentum laoreet.</p>\n                        <ol class="decimal indent">\n                            <li>Proin eleifend fermentum elit</li>\n                            <li>Vivamus cursus porta purus</li>\n                            <li>Proin at sagittis dolor</li>\n                            <li>Donec eu justo diam</li>\n                        </ol>\n                        <p>Fusce iaculis, lacus et consectetur condimentum, lorem erat vestibulum metus, vitae euismod odio risus et ipsum. Pellentesque nunc justo, mattis et sollicitudin non, malesuada quis est. Etiam gravida ultrices ipsum quis eleifend. Cras tristique lectus ut libero dictum semper. Nullam mauris lacus, convallis non ornare sit amet, pellentesque sit amet ante. Nulla accumsan adipiscing ultrices. Ut ac magna nec justo dapibus suscipit quis vel sapien. Donec in arcu tellus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer egestas augue non quam vehicula dictum. Nam orci eros, placerat laoreet pharetra lacinia, tempus ut odio. Pellentesque hendrerit risus eu libero sodales.</p>', 'assets/exquiso/images/entries/700x240/computer-room-700x240.png', 'Cow Horse Ant Monkey', 'Active', '2015-10-01 16:51:53', '2015-10-01 16:51:53', 1),
(3, 'Hello World v2', 'our world belongs to us. So no Allien is invited here. Good Luck People & Alliens both. Have a good Day.', 'assets/exquiso/images/entries/700x240/computer-room-700x240.png', 'Alliens, Human, Sky, Planet', 'active', '2015-10-16 16:10:43', '2015-10-16 16:10:43', 1);

-- --------------------------------------------------------

--
-- Table structure for table `blog_post_category`
--

CREATE TABLE IF NOT EXISTS `blog_post_category` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `postid` int(16) NOT NULL,
  `categoryid` int(16) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `blog_post_category`
--

INSERT INTO `blog_post_category` (`id`, `postid`, `categoryid`) VALUES
(1, 1, 2),
(2, 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `blog_post_comment`
--

CREATE TABLE IF NOT EXISTS `blog_post_comment` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `postid` int(16) NOT NULL,
  `commentid` int(16) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `blog_post_comment`
--

INSERT INTO `blog_post_comment` (`id`, `postid`, `commentid`) VALUES
(1, 1, 1),
(2, 1, 1),
(3, 2, 1),
(4, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `blog_post_tag`
--

CREATE TABLE IF NOT EXISTS `blog_post_tag` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `postid` int(16) NOT NULL,
  `tagid` int(16) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `blog_post_tag`
--

INSERT INTO `blog_post_tag` (`id`, `postid`, `tagid`) VALUES
(1, 1, 2),
(2, 1, 1),
(3, 1, 3),
(4, 2, 1),
(5, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `blog_tag`
--

CREATE TABLE IF NOT EXISTS `blog_tag` (
  `tagid` int(16) NOT NULL AUTO_INCREMENT,
  `tagtitle` varchar(128) NOT NULL,
  `frequency` varchar(128) NOT NULL,
  PRIMARY KEY (`tagid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `blog_tag`
--

INSERT INTO `blog_tag` (`tagid`, `tagtitle`, `frequency`) VALUES
(1, 'Animal', '2'),
(2, 'Human', '4'),
(3, 'World', '5'),
(4, 'Planetica', '1');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE IF NOT EXISTS `login_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
  `id` int(32) NOT NULL AUTO_INCREMENT,
  `temperature` float NOT NULL,
  `humidity` float NOT NULL,
  `phlevel` float NOT NULL,
  `lightintensity` float NOT NULL,
  `soilmoist` float NOT NULL,
  `waterlevel` float NOT NULL,
  `day` int(16) NOT NULL,
  `timedate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `temperature`, `humidity`, `phlevel`, `lightintensity`, `soilmoist`, `waterlevel`, `day`, `timedate`) VALUES
(1, 28.32, 60.12, 7, 332.22, 153.56, 0, 2, '2015-12-05 06:54:23'),
(2, 29.45, 49.21, 7, 140.65, 186.32, 0, 2, '2015-12-05 06:54:23'),
(3, 30.87, 49.21, 7, 300.21, 186.32, 0, 2, '2015-12-05 06:57:37'),
(4, 30.36, 49.21, 7, 300.21, 186.32, 0, 2, '2015-12-05 07:59:37'),
(5, 31.56, 54.21, 7, 317.67, 150.32, 0, 2, '2015-12-05 13:22:24'),
(6, 31.78, 49.21, 6, 415.21, 186.32, 0, 2, '2015-12-05 14:30:00'),
(7, 29.54, 49.21, 7, 428.93, 186.32, 0, 2, '2015-12-05 14:30:51'),
(8, 28.23, 49.21, 7, 282, 153, 0, 3, '2015-12-06 15:30:56'),
(9, 28.36, 49.21, 7, 301, 154, 0, 3, '2015-12-06 15:31:07'),
(10, 27.45, 45.21, 6, 0, 148, 0, 3, '2015-12-06 16:35:35'),
(11, 27.36, 45.21, 6, 0, 146, 0, 3, '2015-12-06 17:35:39'),
(12, 28, 54.01, 6, 156, 116, 0, 4, '2015-12-07 05:25:29'),
(13, 28.15, 55.78, 6, 315, 119, 0, 4, '2015-12-07 06:29:48'),
(14, 28.3, 55.37, 6, 343, 121, 0, 4, '2015-12-07 04:32:51'),
(15, 28, 54.55, 6, 353, 116, 0, 4, '2015-12-07 06:34:37'),
(16, 28.45, 55.09, 6, 365, 119, 0, 4, '2015-12-07 06:56:23'),
(17, 26.63, 54.41, 6, 274, 117, 0, 4, '2015-12-07 07:47:11'),
(18, 26.78, 54.82, 6, 275, 118, 0, 4, '2015-12-07 07:47:46'),
(19, 27.1, 57.43, 6, 268, 132, 0, 4, '2015-12-07 07:49:38'),
(20, 26.78, 55.5, 6, 262, 118, 0, 4, '2015-12-07 07:51:09'),
(21, 20.78, 52.8, 6, 68, 121, 60, 12, '2015-12-15 16:26:33'),
(22, 20.78, 53.6, 6, 43, 124, 60, 12, '2015-12-15 16:28:11'),
(24, 20.6, 53.6, 6, 0, 124, 60, 12, '2015-12-15 16:36:39'),
(25, 20.78, 53.2, 6, 0, 124, 60, 12, '2015-12-15 16:46:09'),
(27, 20.96, 51.87, 6, 0, 125, 60, 12, '2015-12-15 16:49:21'),
(28, 20.96, 51.6, 6, 0, 124, 60, 12, '2015-12-15 16:51:06'),
(29, 20.78, 53.2, 6, 0, 123, 60, 12, '2015-12-15 16:53:45'),
(30, 25.36, 49.21, 8.58, 300.21, 186.32, 30, 5, '0000-00-00 00:00:00'),
(31, 25.36, 49.21, 8.58, 300.21, 186.32, 30, 5, '0000-00-00 00:00:00'),
(32, 25.36, 49.21, 8.58, 300.21, 186.32, 30, 5, '0000-00-00 00:00:00'),
(33, 25.36, 49.21, 8.58, 300.21, 186.32, 30, 5, '0000-00-00 00:00:00'),
(34, 25.36, 49.21, 8.58, 300.21, 186.32, 30, 5, '0000-00-00 00:00:00'),
(35, 25.36, 49.21, 8.58, 300.21, 186.32, 30, 5, '0000-00-00 00:00:00'),
(36, 25.36, 49.21, 8.58, 300.21, 186.32, 30, 5, '2015-12-16 14:35:47'),
(37, 25.36, 49.21, 8.58, 300.21, 186.32, 30, 5, '2015-12-16 14:36:12'),
(38, 25.36, 49.21, 8.58, 300.21, 186.32, 30, 5, '2015-12-16 14:39:23'),
(39, 25.36, 49.21, 8.58, 300.21, 186.32, 30, 5, '2015-12-15 23:44:23'),
(40, 25.36, 49.21, 8.58, 300.21, 186.32, 30, 5, '2015-12-16 02:45:22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(15) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'admin', '$2y$08$.roi64bLbZvkOIZodsCrUe8/WnL/y/8lcOvjOzFGZ.JT0XvOCFqfW', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1445492868, 1, 'Ahmed', 'Akter', 'AA Planetica', '0'),
(2, '::1', 'test', '$2y$08$5nrdKqOAMIya72331tik5.qJy8uEswgCZf8Y0HHdawmUM9Vk8tDb6', NULL, 'test@aapf.tk', NULL, NULL, NULL, NULL, 1445493195, NULL, 1, 'Test', 'Case', 'Test', '878702');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE IF NOT EXISTS `users_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  KEY `fk_users_groups_users1_idx` (`user_id`),
  KEY `fk_users_groups_groups1_idx` (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(4, 2, 1),
(5, 2, 2);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
