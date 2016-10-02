-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2016 at 05:22 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `electronics`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cid` int(3) NOT NULL,
  `title` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cid`, `title`) VALUES
(1, 'laptop'),
(2, 'mobile');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pid` int(3) NOT NULL,
  `titlep` varchar(30) NOT NULL,
  `cid` int(3) NOT NULL,
  `scid` int(3) NOT NULL,
  `description` varchar(200) NOT NULL,
  `imgpath` varchar(100) NOT NULL,
  `price` int(6) NOT NULL,
  `quantity` int(3) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `titlep`, `cid`, `scid`, `description`, `imgpath`, `price`, `quantity`, `date`) VALUES
(1, 'Dell Inspiron 5000', 1, 1, 'Intel Core i7 Processor\r\n16 GB DDR3 RAM\r\n64 bit Windows 10 Operating System\r\n1 TB HDD\r\n15.6 inch Display', '../uploads/prodimage/dell1.jpeg', 77990, 100, '2016-09-15'),
(2, 'Acer Predator Core i7', 1, 2, 'Intel Core i7 Processor\r\n16 GB DDR4 RAM\r\n64 bit Windows 10 Operating System\r\n1 TB HDD|128 GB SSD\r\n17.3 inch Display', '../uploads/prodimage/acer1.jpeg', 171999, 50, '2016-09-06'),
(26, 'Sony Xperia Z5 Premium ', 2, 26, '\r\n3 GB RAM | 32 GB ROM | Expandable Upto 200\r\n5.5 inch UHD 4K Display\r\n23MP Primary Camera | 5MP Front\r\n3430 mAh Battery\r\nMSM8994 Qualcomm Snapdragon 810 Processor', '../uploads/prodimage/sony1.jpeg', 54999, 300, '2016-08-27'),
(27, 'Moto X Force (White, 64 GB)', 2, 27, '3 GB RAM | 64 GB ROM | Expandable Upto 2 TB\r\n5.4 inch Quad HD Display\r\n21MP Primary Camera | 5MP Front\r\n3760 mAh Lithium-ion Battery\r\nQualcomm Snapdragon 810 Processor', '../uploads/prodimage/moto1.jpeg', 37999, 557, '2016-07-12');

-- --------------------------------------------------------

--
-- Table structure for table `sub-category`
--

CREATE TABLE `sub-category` (
  `cid` int(3) NOT NULL,
  `scid` int(3) NOT NULL,
  `titlesc` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub-category`
--

INSERT INTO `sub-category` (`cid`, `scid`, `titlesc`) VALUES
(1, 1, 'Dell'),
(1, 2, 'Acer'),
(2, 3, 'Sony'),
(2, 4, 'Moto');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
