-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2018 at 10:21 AM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ryan_eric`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `parent_name` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `parent_name`) VALUES
(7, 'چوب', NULL),
(8, 'مبل', 7),
(9, 'هنر های دستی', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `date` timestamp NOT NULL,
  `content` text NOT NULL,
  `like` mediumtext,
  `dislike` mediumtext,
  `status` enum('accept','non_accept') NOT NULL,
  `status_read` enum('read','unread') NOT NULL,
  `products_id` int(11) NOT NULL,
  `products_category_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(45) NOT NULL,
  `phone` int(11) DEFAULT NULL,
  `mobile` int(11) DEFAULT NULL,
  `address` text,
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `factor`
--

CREATE TABLE `factor` (
  `id` int(11) NOT NULL,
  `number` mediumtext,
  `date` timestamp NULL DEFAULT NULL,
  `sending_method` enum('express_mail','porterage','tibox','bike_delivery') DEFAULT NULL,
  `payment_method` enum('online','offline') DEFAULT NULL,
  `status` enum('confirmation','posted','ready_to_send','delivered') DEFAULT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(45) NOT NULL,
  `abstract` text,
  `body` text,
  `publish_date` tinytext,
  `status` enum('active','non_active') NOT NULL,
  `like_count` int(11) DEFAULT NULL,
  `img` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `abstract`, `body`, `publish_date`, `status`, `like_count`, `img`) VALUES
(1, 'jhjhjh', 'jhjhjh', '<p>jhjhjh</p>\r\n\r\n<p>&nbsp;</p>', '7 بهمن 1396 - 02:11', 'active', 0, NULL),
(2, 'scscsc', 'scscsc', '<p>scscsc</p>', '7 بهمن 1396 - 02:11', 'active', 0, '26255a6c602d2da764.78883653.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `code` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `img` varchar(100) DEFAULT NULL,
  `content` text,
  `score` float DEFAULT NULL,
  `off` int(11) DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `sell_count` int(11) DEFAULT NULL,
  `publish_date` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `code`, `price`, `img`, `content`, `score`, `off`, `category_id`, `sell_count`, `publish_date`) VALUES
(2, 'محصول 2', 635, 2500, '161505a8eac825da9f1.18872717.jpeg', 'عالیه', 0, 10, 9, NULL, NULL),
(3, 'jhjhjhjhj', 25, 25, '99905aa7a2a319fcd4.91727587.jpeg', 'kjkjkj', 0, 25, 9, 0, '22 اسفند 1396 - 01:12'),
(4, 'ddvdvd', 36, 26, '86475aa7a2dee13ff5.22484044.jpeg', 'kjkjkj,snvjsnvjnkvsk', 0, 0, 7, 0, '22 اسفند 1396 - 01:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username_UNIQUE` (`username`),
  ADD UNIQUE KEY `password_UNIQUE` (`password`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_category_category_idx` (`parent_name`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`,`products_id`,`products_category_id`,`customer_id`),
  ADD KEY `fk_comment_products1_idx` (`products_id`,`products_category_id`),
  ADD KEY `fk_comment_customer1_idx` (`customer_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username_UNIQUE` (`username`);

--
-- Indexes for table `factor`
--
ALTER TABLE `factor`
  ADD PRIMARY KEY (`id`,`customer_id`),
  ADD KEY `fk_factor_customer1_idx` (`customer_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`,`category_id`),
  ADD KEY `fk_products_category1_idx` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `factor`
--
ALTER TABLE `factor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `category`
--
ALTER TABLE `category`
  ADD CONSTRAINT `fk_category_category` FOREIGN KEY (`parent_name`) REFERENCES `category` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `fk_comment_customer1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_comment_products1` FOREIGN KEY (`products_id`,`products_category_id`) REFERENCES `product` (`id`, `category_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `factor`
--
ALTER TABLE `factor`
  ADD CONSTRAINT `fk_factor_customer1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk_products_category1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
