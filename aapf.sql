-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2016 at 06:18 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aapf`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_category`
--

CREATE TABLE `blog_category` (
  `categoryid` int(16) NOT NULL,
  `categoryname` varchar(256) NOT NULL,
  `categorytop` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `blog_comment` (
  `commentid` int(16) NOT NULL,
  `content` text NOT NULL,
  `status` varchar(128) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `author` varchar(256) NOT NULL,
  `email` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `postid` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_comment`
--

INSERT INTO `blog_comment` (`commentid`, `content`, `status`, `create_date`, `author`, `email`, `url`, `postid`) VALUES
(1, 'Hello Nice Article', 'Active', '2015-10-01 16:20:44', '1', 'aa@aa.com', 'aa.aapf.tk', 1),
(2, 'Its 2nd Comment', 'Published', '2015-10-01 16:30:47', '1', 'aa@aa.com', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `blog_post`
--

CREATE TABLE `blog_post` (
  `postid` int(16) NOT NULL,
  `title` varchar(128) NOT NULL,
  `contents` text NOT NULL,
  `image_urls` varchar(256) NOT NULL,
  `tags` text NOT NULL,
  `status` varchar(256) NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_time` timestamp NOT NULL,
  `userid` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `blog_post_category` (
  `id` int(16) NOT NULL,
  `postid` int(16) NOT NULL,
  `categoryid` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `blog_post_comment` (
  `id` int(16) NOT NULL,
  `postid` int(16) NOT NULL,
  `commentid` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `blog_post_tag` (
  `id` int(16) NOT NULL,
  `postid` int(16) NOT NULL,
  `tagid` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `blog_tag` (
  `tagid` int(16) NOT NULL,
  `tagtitle` varchar(128) NOT NULL,
  `frequency` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'admin', '$2y$08$.roi64bLbZvkOIZodsCrUe8/WnL/y/8lcOvjOzFGZ.JT0XvOCFqfW', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1477975820, 1, 'Ahmed', 'Akter', 'AA Planetica', '0'),
(2, '::1', 'test', '$2y$08$5nrdKqOAMIya72331tik5.qJy8uEswgCZf8Y0HHdawmUM9Vk8tDb6', NULL, 'test@aapf.tk', NULL, NULL, NULL, NULL, 1445493195, NULL, 1, 'Test', 'Case', 'Test', '878702');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(4, 2, 1),
(5, 2, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_category`
--
ALTER TABLE `blog_category`
  ADD PRIMARY KEY (`categoryid`);

--
-- Indexes for table `blog_post`
--
ALTER TABLE `blog_post`
  ADD PRIMARY KEY (`postid`);

--
-- Indexes for table `blog_post_category`
--
ALTER TABLE `blog_post_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_post_comment`
--
ALTER TABLE `blog_post_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_post_tag`
--
ALTER TABLE `blog_post_tag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_tag`
--
ALTER TABLE `blog_tag`
  ADD PRIMARY KEY (`tagid`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_category`
--
ALTER TABLE `blog_category`
  MODIFY `categoryid` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `blog_post`
--
ALTER TABLE `blog_post`
  MODIFY `postid` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `blog_post_category`
--
ALTER TABLE `blog_post_category`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `blog_post_comment`
--
ALTER TABLE `blog_post_comment`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `blog_post_tag`
--
ALTER TABLE `blog_post_tag`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `blog_tag`
--
ALTER TABLE `blog_tag`
  MODIFY `tagid` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
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
