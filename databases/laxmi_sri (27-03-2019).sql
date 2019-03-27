-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2019 at 06:16 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laxmi_sri`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `mobile`, `password`, `status`, `date_time`) VALUES
(1, 'Krishna', 'laxmisri@gmail.com', '9676053355', 'e8deebfd7f3751997963dd9270789e75', 1, '2019-03-16 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `featured` enum('yes','no') NOT NULL DEFAULT 'no',
  `status` int(11) NOT NULL DEFAULT '1',
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `featured`, `status`, `date_time`) VALUES
(2, 'necklace', 'no', 1, '2019-03-17 09:13:41'),
(6, 'neck', 'yes', 1, '2019-03-17 09:19:53'),
(7, 'Earrings', 'yes', 1, '2019-03-19 13:45:30'),
(8, 'Idols', 'no', 1, '2019-03-22 13:28:21');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `price` float NOT NULL,
  `offer_price` float NOT NULL,
  `category_id` int(11) NOT NULL,
  `social_links` longtext NOT NULL,
  `images` longtext NOT NULL,
  `featured` int(11) NOT NULL DEFAULT '0',
  `offer` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1',
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `name`, `description`, `price`, `offer_price`, `category_id`, `social_links`, `images`, `featured`, `offer`, `status`, `date_time`) VALUES
(9, 'necklacce', 'aacdcsdv sdv svd d f', 12323, 0, 2, 'a:5:{s:8:\"facebook\";s:1:\"a\";s:7:\"twitter\";s:4:\"dvcv\";s:9:\"instagram\";s:3:\"xcv\";s:8:\"linkedin\";s:3:\"xcv\";s:8:\"whatsapp\";s:3:\"xcv\";}', 'a:0:{}', 0, 0, 1, '2019-03-19 17:42:49'),
(11, 'Ganapathi Idol ', 'Load Ganapathi idol', 1500, 0, 2, 'a:5:{s:8:\"facebook\";s:65:\"https://www.facebook.com/Laxmi-sri-art-jewellers-360037680812129/\";s:7:\"twitter\";s:0:\"\";s:9:\"instagram\";s:0:\"\";s:8:\"linkedin\";s:0:\"\";s:8:\"whatsapp\";s:0:\"\";}', 'a:1:{i:0;s:21:\"idols._1553246690.png\";}', 1, 1, 1, '2019-03-22 14:54:50'),
(13, 'p2', 'pdesc3', 1233, 0, 6, 'a:5:{s:8:\"facebook\";s:3:\"wqr\";s:7:\"twitter\";s:3:\"dsf\";s:9:\"instagram\";s:4:\"szdc\";s:8:\"linkedin\";s:4:\"asdf\";s:8:\"whatsapp\";s:3:\"sdc\";}', 'a:0:{}', 0, 0, 1, '2019-03-24 08:19:14'),
(14, 'asd', 'asdsad', 12335, 0, 2, 'a:5:{s:8:\"facebook\";s:3:\"asd\";s:7:\"twitter\";s:2:\"SA\";s:9:\"instagram\";s:1:\"d\";s:8:\"linkedin\";s:1:\"w\";s:8:\"whatsapp\";s:1:\"q\";}', 'a:0:{}', 0, 0, 1, '2019-03-24 08:20:13'),
(16, 'sdf', 'scd', 123, 0, 2, 'a:5:{s:8:\"facebook\";s:4:\"czcx\";s:7:\"twitter\";s:3:\"zxc\";s:9:\"instagram\";s:3:\"zxc\";s:8:\"linkedin\";s:4:\"zxx \";s:8:\"whatsapp\";s:3:\"zxc\";}', 'a:0:{}', 1, 1, 1, '2019-03-24 10:57:43'),
(17, 'iuu', 'ui', 10, 0, 6, 'a:5:{s:8:\"facebook\";s:3:\"tgh\";s:7:\"twitter\";s:3:\"fgn\";s:9:\"instagram\";s:4:\"fdgn\";s:8:\"linkedin\";s:0:\"\";s:8:\"whatsapp\";s:3:\"fgn\";}', 'a:0:{}', 1, 1, 1, '2019-03-27 16:00:25'),
(18, 'sdadf', 'adfsdfsd', 10, 0, 6, 'a:5:{s:8:\"facebook\";s:4:\"edgf\";s:7:\"twitter\";s:3:\"dfv\";s:9:\"instagram\";s:5:\"fvdfv\";s:8:\"linkedin\";s:4:\"dfvd\";s:8:\"whatsapp\";s:4:\"dfvd\";}', 'a:0:{}', 1, 1, 1, '2019-03-27 16:04:36'),
(19, 'sv', 'dfvdfvdfv', 12, 0, 2, 'a:5:{s:8:\"facebook\";s:3:\"adf\";s:7:\"twitter\";s:4:\"aczc\";s:9:\"instagram\";s:1:\"c\";s:8:\"linkedin\";s:3:\"scx\";s:8:\"whatsapp\";s:3:\"zxc\";}', 'a:0:{}', 0, 1, 1, '2019-03-27 16:05:49'),
(20, 'sv', 'dfvdfvdfv', 12, 11, 2, 'a:5:{s:8:\"facebook\";s:3:\"adf\";s:7:\"twitter\";s:4:\"aczc\";s:9:\"instagram\";s:1:\"c\";s:8:\"linkedin\";s:3:\"scx\";s:8:\"whatsapp\";s:3:\"zxc\";}', 'a:0:{}', 1, 1, 1, '2019-03-27 16:07:01'),
(21, 'asc', 'ascad', 12, 0, 2, 'a:5:{s:8:\"facebook\";s:2:\"sd\";s:7:\"twitter\";s:3:\"cxc\";s:9:\"instagram\";s:2:\"cv\";s:8:\"linkedin\";s:6:\" xc xc\";s:8:\"whatsapp\";s:0:\"\";}', 'a:0:{}', 0, 0, 1, '2019-03-27 16:07:25'),
(22, 'sd', 'sd asd', 12, 9, 2, 'a:5:{s:8:\"facebook\";s:0:\"\";s:7:\"twitter\";s:0:\"\";s:9:\"instagram\";s:0:\"\";s:8:\"linkedin\";s:0:\"\";s:8:\"whatsapp\";s:0:\"\";}', 'a:0:{}', 0, 1, 1, '2019-03-27 16:07:43');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(11) NOT NULL,
  `slider_text` varchar(255) NOT NULL,
  `slider_image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `slider_text`, `slider_image`, `status`, `date_time`) VALUES
(12, 'Latest Bridal Collection', '1552982540_slider12.png', 1, '2019-03-18 16:23:36'),
(16, 'Up to 50% Discount Sale!!', '1552982556_slider13.png', 1, '2019-03-19 13:13:57'),
(17, 'Up to 50% Discount Sale!!', '1552982579_slider14.png', 1, '2019-03-19 13:24:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
