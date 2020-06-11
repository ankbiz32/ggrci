-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2020 at 01:40 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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

--
-- Dumping data for table `achievers`
--

INSERT INTO `achievers` (`id`, `name`, `class`, `batch`, `img_src`) VALUES
(1, 'Akanksha Chandra', 'X', '2019', 'img_1.png'),
(2, 'Hipendra Naik', 'X', '2019', 'img_4.png'),
(3, 'Harjas Singh Chhabra', 'X', '2019', 'img2.png'),
(4, 'Astha Mishra', 'X', '2019', 'top1.jpg'),
(5, 'Jyotirmoy Ghosh', 'XII', '2019', 'Layer_5.png'),
(6, 'Dakshansha Chawda', 'XII', '2019', 'Layer_6.png'),
(7, 'Shivam Rai', 'XII', '2019', 'Layer_8_-_Copy.png'),
(8, 'Shivam Lahoti', 'XII', '2019', 'Layer_9.png');

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
  `alt_txt` varchar(500) NOT NULL DEFAULT 'Gyan ganga school photo gallery'
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
(2, 'Students');

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
(1, 'hero.jpg', 'hero-mob.jpg', 'Gyan Ganga School students'),
(10, 'hero2.jpg', 'hero-mob2.jpg', 'Gyan Ganga School students'),
(11, 'hero3.jpg', 'hero-mob3.jpg', 'Gyan Ganga School students'),
(12, 'hero4.jpg', 'hero-mob4.jpg', 'Gyan Ganga School students'),
(13, 'hero5.jpg', 'hero-mob5.jpg', 'Gyan Ganga School students');

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
  `name` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `fname` varchar(50) NOT NULL,
  `adm_no` varchar(10) NOT NULL,
  `img_src` varchar(100) NOT NULL,
  `uploaded_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1, 'admin_ggea', '$2y$10$Tw9GoCsFUjqu1I8yLyxbjOVynSwXkqCw1.BSWRgKurtrA7SFQIldC', 'Admin', ' ', 'info@gyangangaraipur.org.in', '', '1', 'admin');

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
  `youtubelink` varchar(500) NOT NULL,
  `virtual_tour` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `webprofile`
--

INSERT INTO `webprofile` (`id`, `email`, `phone1`, `phone2`, `whatsapp_no`, `address_line1`, `address_line2`, `address_line3`, `timing_1`, `timing_2`, `fblink`, `instalink`, `twitterlink`, `youtubelink`, `virtual_tour`) VALUES
(1, 'info@gyangangaraipur.org.in', '0771-2284716', '0771-2284816', '6666666666', 'Baloda Bazar road, near Vidhan Sabha,', 'Village Nardaha,', 'Raipur, C.G. - 493111', 'Mon to Fri - 10AM to 2PM', 'Sat - 10AM to 12PM', 'https://.facebook.com', 'https://instagram.com', 'www.twitter.com', 'https://youtube.com', 'http://www.vdarshan.com/dt/gg/gyanganga.html');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achievers`
--
ALTER TABLE `achievers`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `enquiries`
--
ALTER TABLE `enquiries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `gallery_categories`
--
ALTER TABLE `gallery_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `hero_images`
--
ALTER TABLE `hero_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transfer_cert`
--
ALTER TABLE `transfer_cert`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
