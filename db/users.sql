-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2016 at 07:27 PM
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
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `mobile`) VALUES
(2, 'gghgh', 'a@a', '123456', 'fgh'),
(6, 'gghgh', 'fgh1@rty', '123456', 'fgh'),
(8, 'gghgh', 'fgh12@rty', '123456', 'fgh'),
(9, 'dfgsg', 'dfgd@sf', '123456', '4245425'),
(10, 'dfgsg', 'dfgd1@sf', '123456', '4245425'),
(11, 'fgfsg', 'dfgfd@sdf', '123456', 'fdf'),
(13, 'Rishi', 'thakur.rishi@siesgst.ac.in', '123456', '123456789'),
(14, 'abc', 'abc@example.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '123456789'),
(15, 'Nisheet', 'thakur.nisheet@siesgst.ac.in', '7c4a8d09ca3762af61e59520943dc26494f8941b', '123456789'),
(16, 'Admin', 'admin@root.com', 'dc76e9f0c0006e8f919e0c515c66dbba3982f785', '9876543210'),
(17, 'Yogesh (Admin)', 'yogesh@admin.com', 'dc76e9f0c0006e8f919e0c515c66dbba3982f785', '9004583074'),
(18, 'Sanket(Admin)', 'sanket@admin.com', 'dc76e9f0c0006e8f919e0c515c66dbba3982f785', '9594820300'),
(19, 'Ritu (Admin)', 'ritu@admin.com', 'dc76e9f0c0006e8f919e0c515c66dbba3982f785', '9757251411'),
(20, 'Yogesh', 'yogesh696ksingh@gmail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', '9004583074');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
