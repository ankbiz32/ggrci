-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2020 at 08:52 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.2.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ggr`
--

-- --------------------------------------------------------

--
-- Table structure for table `achievers`
--

CREATE TABLE `achievers` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `class` varchar(10) NOT NULL,
  `batch` varchar(10) NOT NULL,
  `img_src` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ad_banner`
--

CREATE TABLE `ad_banner` (
  `id` int(11) NOT NULL,
  `img_src` varchar(500) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `enquiries`
--

CREATE TABLE `enquiries` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(2048) NOT NULL,
  `message` varchar(2048) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'new'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiries`
--

INSERT INTO `enquiries` (`id`, `date`, `name`, `email`, `phone`, `message`, `status`) VALUES
(38, '2020-03-05', 'Ankur A', 'testuser@xyz.com', '9876543214', 'sacascsacavsdvds', 'new'),
(39, '2020-05-06', 'Testing', 'ankbiz32@gmail.com', '9874563214', 'Testing', 'new');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `id` int(255) NOT NULL,
  `rating` int(10) NOT NULL,
  `content` varchar(1024) NOT NULL,
  `name` varchar(100) NOT NULL,
  `designation` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`id`, `rating`, `content`, `name`, `designation`) VALUES
(107, 5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque arcu nisl, bibendum cursus risus vel, porttitor consequat dui. Orci varius natoque penatibus et magnis .', 'Mr. Sharma', ''),
(108, 4, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque arcu nisl, bibendum cursus risus vel, porttitor consequat dui. Orci varius natoque penatibus et magnis .', 'Mr. Dani', ''),
(109, 5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque arcu nisl, bibendum cursus risus vel, porttitor consequat dui. Orci varius natoque penatibus et magnis .', 'Mr. Sharma', ''),
(110, 4, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque arcu nisl, bibendum cursus risus vel, porttitor consequat dui. Orci varius natoque penatibus et magnis .', 'Mr. Dani', '');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `gall_cat_id` int(11) NOT NULL,
  `img_src` varchar(500) NOT NULL,
  `alt_txt` varchar(500) NOT NULL DEFAULT 'Grace international school photo gallery'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `gall_cat_id`, `img_src`, `alt_txt`) VALUES
(1, 1, 'g1.jpg', 'Gyan ganga school photo gallery'),
(2, 1, 'g2.jpg', 'Gyan ganga school photo gallery'),
(3, 2, 'g2.jpg', 'Gyan ganga school photo gallery'),
(4, 2, 'g4.jpg', 'Gyan ganga school photo gallery'),
(5, 1, 'g5.jpg', 'Gyan ganga school photo gallery');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_categories`
--

CREATE TABLE `gallery_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery_categories`
--

INSERT INTO `gallery_categories` (`id`, `name`) VALUES
(1, 'Album Caption'),
(2, 'Album Caption 2');

-- --------------------------------------------------------

--
-- Table structure for table `hero_images`
--

CREATE TABLE `hero_images` (
  `id` int(11) NOT NULL,
  `img_src` varchar(500) NOT NULL,
  `img_src_mob` varchar(500) NOT NULL,
  `alt_txt` varchar(500) NOT NULL DEFAULT 'Grace International School'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hero_images`
--

INSERT INTO `hero_images` (`id`, `img_src`, `img_src_mob`, `alt_txt`) VALUES
(1, 'hero.jpg', 'hero-mob.jpg', 'Gyan Ganga School students');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `heading` varchar(100) NOT NULL,
  `content` longtext NOT NULL,
  `img_src` varchar(500) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'old'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `heading`, `content`, `img_src`, `slug`, `date`, `status`) VALUES
(1, 'Some news with a meaningful heading. Some news with a', 'Some news with a meaningful heading. Some news with a meaningful heading.Some news with a meaningful heading.Some news with a meaningful heading.Some news with a meaningful heading.', 'download.png', 'Some-news-with-a-meaningful-heading', '2020-02-18', 'new'),
(10, 'Some news with a meaningful heading. Some news with a', 'Some news with a meaningful heading. Some news with a meaningful heading.Some news with a meaningful heading.', 'images.jpg', 'Some-news-with-a-meaningful-heading2', '2020-02-21', 'new'),
(11, 'Some news with a meaningful heading. Some news with a', 'Some news with a meaningful heading.', 'insta.jpg', 'Some-news-with-a-meaningful-heading3', '2020-05-28', 'old');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL,
  `file_src` varchar(500) NOT NULL DEFAULT '_blank',
  `status` varchar(100) NOT NULL DEFAULT 'old'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `content`, `date`, `file_src`, `status`) VALUES
(1, 'Some notice with a meaningful heading. Some notice with a meaningful heading. Some notice with a meaningful heading.', '2020-02-18', 'test.jpg', 'old'),
(11, 'Some notice with a meaningful heading. Some notice with a meaningful heading. Some notice with a meaningful heading.', '2020-06-01', 'test2.jpg', 'old'),
(12, 'Some notice with a meaningful heading.', '2020-05-13', 'wa.jpg', 'new');

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transfer_cert`
--

CREATE TABLE `transfer_cert` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `fname` varchar(20) NOT NULL,
  `adm_no` varchar(10) NOT NULL,
  `img_src` varchar(100) NOT NULL,
  `uploaded_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transfer_cert`
--

INSERT INTO `transfer_cert` (`id`, `name`, `dob`, `fname`, `adm_no`, `img_src`, `uploaded_on`) VALUES
(1, 'Shourya singh', '2001-12-03', 'Mr. Singh', '', 'test.jpg', '2020-06-02'),
(3, 'Vishal Sharma', '2001-07-01', 'Mr. Sharma', '', 'test2.jpg', '2020-06-03');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `fname` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `email` varchar(500) NOT NULL,
  `phone` varchar(1000) NOT NULL,
  `status` varchar(15) NOT NULL DEFAULT 'active',
  `role` varchar(15) NOT NULL DEFAULT 'admin'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `pwd`, `fname`, `lname`, `email`, `phone`, `status`, `role`) VALUES
(1, 'admin_gis', '$2y$10$GTuCiR/T2JzOLXiaRCZ.1efI8LK6.pXK0Ga55d5mfZo6xPtFHClsC', 'Demo', 'User', 'info@gyangangaraipur.org.in', '', '1', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `webprofile`
--

CREATE TABLE `webprofile` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone1` varchar(50) NOT NULL,
  `phone2` varchar(50) NOT NULL,
  `whatsapp_no` varchar(50) NOT NULL,
  `address_line1` varchar(50) NOT NULL,
  `address_line2` varchar(50) NOT NULL,
  `address_line3` varchar(100) NOT NULL,
  `timing_1` varchar(200) NOT NULL,
  `timing_2` varchar(200) NOT NULL,
  `fblink` varchar(50) NOT NULL,
  `instalink` varchar(50) NOT NULL,
  `twitterlink` varchar(50) NOT NULL,
  `youtubelink` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `webprofile`
--

INSERT INTO `webprofile` (`id`, `email`, `phone1`, `phone2`, `whatsapp_no`, `address_line1`, `address_line2`, `address_line3`, `timing_1`, `timing_2`, `fblink`, `instalink`, `twitterlink`, `youtubelink`) VALUES
(1, 'info@gyangangaraipur.org.in', '0771-2284716', '0771-2284816', '6666666666', 'Baloda Bazar road, near Vidhan Sabha,', 'Village Nardaha,', 'Raipur, C.G. - 493111', 'Mon to Fri - 10AM to 2PM', 'Sat - 10AM to 12PM', 'www.facebook.com', 'www.instagram.com', 'www.twitter.com', 'www.youtube.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achievers`
--
ALTER TABLE `achievers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ad_banner`
--
ALTER TABLE `ad_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiries`
--
ALTER TABLE `enquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_categories`
--
ALTER TABLE `gallery_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hero_images`
--
ALTER TABLE `hero_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transfer_cert`
--
ALTER TABLE `transfer_cert`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Indexes for table `webprofile`
--
ALTER TABLE `webprofile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `achievers`
--
ALTER TABLE `achievers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ad_banner`
--
ALTER TABLE `ad_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `enquiries`
--
ALTER TABLE `enquiries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `gallery_categories`
--
ALTER TABLE `gallery_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `hero_images`
--
ALTER TABLE `hero_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `transfer_cert`
--
ALTER TABLE `transfer_cert`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `webprofile`
--
ALTER TABLE `webprofile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
