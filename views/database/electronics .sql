-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2016 at 09:41 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `electronics`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `title`) VALUES
(1, 'Laptop'),
(2, 'Mobile');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `cid` int(11) NOT NULL,
  `scid` int(11) NOT NULL,
  `description` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `price` int(6) NOT NULL,
  `quantity` int(3) NOT NULL,
  `created` datetime DEFAULT CURRENT_TIMESTAMP,
  `rating` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `cid`, `scid`, `description`, `img`, `price`, `quantity`, `created`, `rating`) VALUES
(1, 'Dell Inspiron 5000', 1, 1, 'Intel Core i7 Processor\r\n16 GB DDR3 RAM\r\n64 bit Windows 10 Operating System\r\n1 TB HDD\r\n15.6 inch Display', '../uploads/prodimage/dell1.jpeg', 77990, 100, '2016-09-15 00:00:00', '4'),
(2, 'Acer Predator Core i7', 1, 2, 'Intel Core i7 Processor\r\n16 GB DDR4 RAM\r\n64 bit Windows 10 Operating System\r\n1 TB HDD|128 GB SSD\r\n17.3 inch Display', '../uploads/prodimage/acer1.jpeg', 171999, 50, '2016-09-06 00:00:00', '4.5'),
(26, 'Sony Xperia Z5 Premium ', 2, 26, '\r\n3 GB RAM | 32 GB ROM | Expandable Upto 200\r\n5.5 inch UHD 4K Display\r\n23MP Primary Camera | 5MP Front\r\n3430 mAh Battery\r\nMSM8994 Qualcomm Snapdragon 810 Processor', '../uploads/prodimage/sony1.jpeg', 54999, 300, '2016-08-27 00:00:00', '5'),
(27, 'Moto X Force (White, 64 GB)', 2, 27, '3 GB RAM | 64 GB ROM | Expandable Upto 2 TB\r\n5.4 inch Quad HD Display\r\n21MP Primary Camera | 5MP Front\r\n3760 mAh Lithium-ion Battery\r\nQualcomm Snapdragon 810 Processor', '../uploads/prodimage/moto1.jpeg', 37999, 557, '2016-07-12 00:00:00', '4');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE IF NOT EXISTS `sub_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(3) NOT NULL,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`id`, `cid`, `title`) VALUES
(1, 1, 'Dell'),
(2, 1, 'Acer'),
(3, 2, 'Sony'),
(4, 2, 'Moto');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
