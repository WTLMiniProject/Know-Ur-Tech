-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2016 at 08:11 PM
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
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `cid` int(11) NOT NULL,
  `scid` int(11) NOT NULL,
  `description` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `price` int(6) NOT NULL,
  `quantity` int(3) NOT NULL,
  `created` datetime DEFAULT CURRENT_TIMESTAMP,
  `rating` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `cid`, `scid`, `description`, `img`, `price`, `quantity`, `created`, `rating`) VALUES
(1, 'Dell Inspiron 5000', 1, 1, 'Intel Core i7 Processor\r\n16 GB DDR3 RAM\r\n64 bit Windows 10 Operating System\r\n1 TB HDD\r\n15.6 inch Display', '../uploads/prodimage/dell1.jpeg', 77990, 100, '2016-09-15 00:00:00', 4),
(2, 'Dell XPS 12 Core i5 ', 1, 1, 'Intel Core i5 Processor ( 6th Gen )\r\n8 GB DDR3 RAM\r\n64 bit Windows 10 Operating System\r\n512 GB SSD\r\n12.5 inch Touchscreen Display', '../uploads/prodimage/dell-xps-12-original-imaek4bxhzmbgkyz.jpeg', 143990, 369, '2016-09-13 00:00:00', 3.2),
(3, 'Dell Inspiron 7000 Core i7', 1, 1, 'Intel Core i7 Processor ( 6th Gen )\r\n16 GB DDR3 RAM\r\n64 bit Windows 10 Operating System\r\n1 TB HDD|128 GB SSD\r\n15.6 inch Touchscreen Display', '../uploads/prodimage/dell-inspiron-notebook-original-imaemxtbwpvakmgh.jpeg', 114990, 342, '2016-08-26 00:00:00', 4),
(4, 'Dell Inspiron 15 7537', 1, 1, 'Intel Core i5 Processor ( )\r\n6 GB DDR3 RAM\r\n64 bit Windows 8 Operating System\r\n500 GB HDD\r\n15.6 inch Touchscreen Display', '../uploads/prodimage/dell-inspiron-notebook-original-imaemxtbwpvakmgh.jpeg', 67975, 150, '2016-08-02 00:00:00', 4.7),
(5, 'Dell Inspiron Core i7', 1, 1, 'Intel Core i7 Processor ( 6th Gen )\r\n8 GB DDR3 RAM\r\n64 bit Windows 10 Operating System\r\n1 TB HDD\r\n15.6 inch Display', '../uploads/prodimage/dell-inspiron-15-notebook-original-imaemgnwdyhthmrn.jpeg', 64990, 450, '2016-07-30 00:00:00', 3.5),
(6, 'Acer Predator Core i7', 1, 2, 'Intel Core i7 Processor\r\n16 GB DDR4 RAM\r\n64 bit Windows 10 Operating System\r\n1 TB HDD|128 GB SSD\r\n17.3 inch Display', '../uploads/prodimage/acer1.jpeg', 171999, 50, '2016-09-06 00:00:00', 4.5),
(7, 'Acer Aspire V3 Core i5', 1, 2, 'Intel Core i5 Processor ( 6th Gen )\r\n4 GB DDR3 RAM\r\n64 bit Windows 10 Operating System\r\n1 TB HDD\r\n15.6 inch Display', '../uploads/prodimage/acer-notebook-original-imaekfspbjfzny2b.jpeg', 48200, 250, '2016-08-10 00:00:00', 4.7),
(8, 'Acer Core i5', 1, 2, 'Intel Core i5 Processor ( 6th Gen )\r\n4 GB DDR3 RAM\r\n64 bit Windows 10 Operating System\r\n1 TB HDD\r\n15.6 inch Display', '../uploads/prodimage/acer-aspire-e-notebook-original-imaeckwzgd6d7zzg.jpeg', 45990, 340, '2016-08-03 00:00:00', 3.8),
(9, 'Acer E15 Core i7', 1, 2, 'Intel Core i7 Processor ( )\r\n8 GB DDR3 RAM\r\nLinux/Ubuntu Operating System\r\n1 TB HDD\r\n15.6 inch Display', '../uploads/prodimage/acer-aspire-notebook-original-imaemnfxg7xm5dch.jpeg', 45990, 125, '2016-09-14 00:00:00', 4.2),
(10, 'Acer Aspire V3 Core i3', 1, 2, 'Intel Core i3 Processor ( 5th Gen )\r\n4 GB DDR3 RAM\r\n64 bit Windows 10 Operating System\r\n1 TB HDD\r\n15.6 inch Display', '../uploads/prodimage/acer-aspire-v3-notebook-original-imaeckyhh6cfbfgh.jpeg', 43121, 230, '2016-07-21 00:00:00', 3.7),
(11, 'HP Spectre Core i7', 1, 3, 'Intel Core i7 Processor ( 5th Gen )\r\n8 GB DDR3 RAM\r\n64 bit Windows 10 Operating System\r\n512 GB SSD\r\n13.3 inch Display', '../uploads/prodimage/hp-spectre-notebook-original-imaekrbysexecagk.jpeg', 139990, 100, '2016-09-29 00:00:00', 3),
(12, 'HP Core i7', 1, 3, 'Intel Core i7 Processor ( 5th Gen )\r\n8 GB DDR3 RAM\r\n64 bit Windows 8.1 Operating System\r\n256 GB SSD\r\n13.3 inch Touchscreen Display', '../uploads/prodimage/hp-ultrabook-original-imae73e8bbphkycg.jpeg', 134990, 50, '2016-09-07 00:00:00', 2.8),
(13, 'HP Elite X2 Core i5', 1, 3, 'Intel Core i5 Processor ( 6th Gen )\r\n8 GB DDR3 RAM\r\n64 bit Windows 10 Operating System\r\n256 GB SSD\r\n12 inch Touchscreen Display', '../uploads/prodimage/hp-elite-x2-2-in-1-laptop-original-imaemqrthjzgawt5.jpeg', 99990, 150, '2016-08-26 00:00:00', 4.8),
(14, 'HP Envy Core i7', 1, 3, 'Intel Core i7 Processor ( 6th Gen )\r\n12 GB DDR3 RAM\r\n64 bit Windows 10 Operating System\r\n1 TB HDD\r\n14 inch Display', '../uploads/prodimage/hp-envy-notebook-original-imaees9nfhcadnxp.jpeg', 96000, 200, '2016-07-26 00:00:00', 3.8),
(15, 'HP Pavilion Core i7\r\n', 1, 1, 'Intel Core i7 Processor ( 6th Gen )\r\n16 GB DDR3 RAM\r\n64 bit Windows 10 Operating System\r\n2 TB HDD\r\n15.6 inch Display', '../uploads/prodimage/hp-pavilion-original-imaekct5fn7hubbt.jpeg', 78999, 243, '2016-07-08 00:00:00', 5),
(16, 'Lenovo Y Series Core i7 ', 1, 4, 'Intel Core i7 Processor ( 6th Gen )\r\n16 GB DDR4 RAM\r\n64 bit Windows 10 Operating System\r\n1 TB HDD|128 GB SSD\r\n15.6 inch Display', '../uploads/prodimage/lenovo-80nv-notebook-original-imaegf4u7vgpsbat.jpeg', 96999, 130, '2016-09-15 00:00:00', 4),
(17, 'Lenovo Y50-70 Core i7', 1, 4, 'NVIDIA Core i7 Processor ( 4th Gen )\r\n8 GB DDR3 RAM\r\n64 bit Windows 10 Operating System\r\n1 TB HDD|8 GB SSD\r\n15.6 inch Display', '../uploads/prodimage/lenovo-y50-70-ultrabook-original-imaed55zg6dfkbus.jpeg', 88590, 150, '2016-08-24 00:00:00', 3.9),
(18, 'Lenovo ThinkPad x250 Core i5', 1, 4, 'Intel Core i5 Processor ( 5th Gen )\r\n4 GB DDR3 RAM\r\n64 bit Windows 8 Operating System\r\n1 TB HDD\r\n12.5 inch Display', '../uploads/prodimage/lenovo-thinkpad-ultrabook-original-imae9bgbmzrffvag.jpeg', 80590, 156, '2015-05-21 00:00:00', 3),
(19, 'Lenovo Yoga 500 Core i7', 1, 4, 'Intel Core i7 Processor ( )\r\n8 GB DDR3 RAM\r\n64 bit Windows 10 Operating System\r\n1 TB HDD\r\n14 inch Touchscreen Display', '../uploads/prodimage/lenovo-yoga-2-in-1-laptop-original-imaefrzkujczzbcc.jpeg', 66990, 345, '2016-02-17 00:00:00', 4.1),
(20, 'Lenovo Z51-I5 Core i5', 1, 4, 'Intel Core i5 Processor ( 5th Gen )\r\n8 GB DDR2 RAM\r\n32 bit Windows 10 Operating System\r\n1 TB HDD\r\n15.6 inch Display', '../uploads/prodimage/lenovo-lenovo-vwin-notebook-original-imaebbfpcbvvraed.jpeg', 61900, 542, '2015-09-15 00:00:00', 3.4),
(21, 'Asus ROG Core i7', 1, 5, 'Intel Core i7 Processor ( 6th Gen )\r\n16 GB RAM\r\n64 bit Windows 10 Operating System\r\n1 TB HDD|512 GB SSD\r\n17.3 inch Display', '../uploads/prodimage/asus-rog-notebook-original-imaejnkcfb2eksus.jpeg', 178990, 35, '2016-09-30 00:00:00', 3.8),
(22, 'Asus Zen Book Pro Core i7', 1, 5, 'Intel Core i7 Processor ( 6th Gen )\r\n16 GB DDR4 RAM\r\n64 bit Windows 10 Operating System\r\n0 GB HDD|512 GB SSD\r\n15.6 inch Display', '../uploads/prodimage/asus-zenbook-pro-notebook-original-imaeg74k6ag9ycaz.jpeg', 119490, 90, '2016-10-02 16:23:21', 4.4),
(23, 'Asus ZenBook Core i7', 1, 5, 'Intel Core i7 Processor ( 6th Gen )\r\n8 GB DDR3 RAM\r\n64 bit Windows 10 Operating System\r\n512 GB SSD\r\n13.3 inch Display', '../uploads/prodimage/asus-zenbook-ultrabook-original-imaeh2y64czgdtyh.jpeg', 93990, 357, '2016-07-14 00:00:00', 4.3),
(24, 'Asus ZenBook Core i5', 1, 5, 'Intel Core i5 Processor ( 6th Gen )\r\n8 GB DDR3 RAM\r\n64 bit Windows 10 Operating System\r\n256 GB SSD\r\n13.3 inch Display', '../uploads/prodimage/asus-zenbook-ultrabook-original-imaeh2ycxezajebd.jpeg', 71900, 400, '2015-10-31 00:00:00', 2.8),
(25, 'Asus ZenBook Core M', 1, 5, 'Intel Core M Processor ( )\r\n4 GB RAM\r\n64 bit Windows 10 Operating System\r\n512 GB SSD\r\n13.3 inch Touchscreen Display', '../uploads/prodimage/asus-zenbook-notebook-original-imaeh84zhpndkfkz.jpeg', 57990, 200, '2016-01-28 00:00:00', 2.8),
(26, 'Sony Xperia Z5 Premium ', 2, 6, '\r\n3 GB RAM | 32 GB ROM | Expandable Upto 200\r\n5.5 inch UHD 4K Display\r\n23MP Primary Camera | 5MP Front\r\n3430 mAh Battery\r\nMSM8994 Qualcomm Snapdragon 810 Processor', '../uploads/prodimage/sony1.jpeg', 54999, 300, '2016-08-27 00:00:00', 5),
(27, 'Sony Xperia Z2', 2, 6, '3 GB RAM | 16 GB ROM | Expandable Upto 128 GB\r\n5.2 inch Full HD Display\r\n20.7MP Primary Camera | 2.2MP Front\r\n3200 mAh Battery\r\nQualcomm MSM8974AB Snapdragon 801 Processor', '../uploads/prodimage/sony-xperia-z2-original-imadvy7rgexautyz.jpeg', 39599, 300, '2016-03-23 00:00:00', 4),
(28, 'Sony Xperia X Dual Sim (Graphite Black, 64 GB)', 2, 6, '3 GB RAM | 64 GB ROM | Expandable Upto 200 GB\r\n5 inch Full HD Display\r\n23MP Primary Camera | 13MP Front\r\n2620 mAh Li-Ion Battery\r\nQualcomm Snapdragon 650 64-bit Processor', '../uploads/prodimage/sony-xperia-x-dual-sim-na-original-imaejj39fafg6pmq.jpeg', 36985, 500, '2016-10-19 00:00:00', 3.3),
(29, 'Sony Xperia Z3+ (Black, 32 GB)', 2, 6, '3 GB RAM | 32 GB ROM | Expandable Upto 128 GB\r\n5.2 inch Full HD Display\r\n20.7MP Primary Camera | 5MP Front\r\n2930 mAh Battery\r\nQualcomm Snapdragon 810 MSM8994 Processor', '../uploads/prodimage/sony-z3-na-original-imae8rgbswgxjccz.jpeg', 31990, 450, '2016-07-23 00:00:00', 3.8),
(30, 'Sony Xperia XA Ultra Dual (White, 16 GB)', 2, 6, '3 GB RAM | 16 GB ROM | Expandable Upto 200 GB\r\n6 inch Full HD Display\r\n21.5MP Primary Camera | 16MP Front\r\n2700 mAh Li-Ion Battery\r\nMediaTek MT6755 64-bit Processor', '../uploads/prodimage/sony-xperia-xa-ultra-na-original-imaekz5amyt2vxzf.jpeg', 27199, 465, '2016-10-06 00:00:00', 4.1),
(31, 'Moto X Force (White, 64 GB)', 2, 7, '3 GB RAM | 64 GB ROM | Expandable Upto 2 TB\r\n5.4 inch Quad HD Display\r\n21MP Primary Camera | 5MP Front\r\n3760 mAh Lithium-ion Battery\r\nQualcomm Snapdragon 810 Processor', '../uploads/prodimage/moto1.jpeg', 37999, 557, '2016-07-12 00:00:00', 4),
(32, 'Moto Turbo (Black, 64 GB)', 2, 7, '3 GB RAM | 64 GB ROM |\r\n5.2 inch Quad HD Display\r\n21MP Primary Camera | 2MP Front\r\n3900 mAh Battery\r\nQualcomm Snapdragon 805 QSC 8084 Processor', '../uploads/prodimage/motorola-moto-turbo-xt1225-original-imae5fyxgh7qy6ag.jpeg', 31999, 400, '2016-10-01 00:00:00', 4),
(33, 'Moto Z with Style Mod (Black, 64 GB)', 2, 7, '4 GB RAM | 64 GB ROM | Expandable Upto 2 TB\r\n5.5 inch Quad HD Display\r\n13MP Primary Camera | 5MP Front\r\n2600 mAh Battery\r\nQualcomm Snapdragon 820 Processor', '../uploads/prodimage/motorola-moto-z-xt-1650-original-imaene32mdnscbhy.jpeg', 39999, 600, '2016-10-07 00:00:00', 4.6),
(34, 'Moto X Style (Black, 32 GB)', 2, 7, '3 GB RAM | 32 GB ROM | Expandable Upto 128 GB\r\n5.7 inch Quad HD Display\r\n21MP Primary Camera | 5MP Front\r\n3000 mAh Li-Ion Battery\r\nQualcomm Snapdragon 808 MSM8992 Processor', '../uploads/prodimage/motorola-moto-x-style-xt1572-original-imaebugedxgxfr6g.JPEG', 28999, 600, '2016-06-30 00:00:00', 4.1),
(35, 'Moto X Play (White, 32 GB)', 2, 7, '2 GB RAM | 32 GB ROM | Expandable Upto 128 GB\r\n5.5 inch Full HD Display\r\n21MP Primary Camera | 5MP Front\r\n3630 mAh Li-Ion Battery\r\nQualcomm Snapdragon 615 Processor', '../uploads/prodimage/motorola-moto-x-play-xt1562-original-imaeb7fcpgftfvfq.jpeg', 18500, 700, '2016-06-21 00:00:00', 4.2),
(36, 'SAMSUNG Galaxy S6 Edge+ (Gold Platinum, 32 GB)', 2, 8, '4 GB RAM | 32 GB ROM |\r\n5.7 inch Quad HD Display\r\n16MP Primary Camera | 5MP Front\r\n3000 mAh Li-Ion Battery\r\nExynos 7420 64-bit, 14 nm Process Processor', '../uploads/prodimage/samsung-galaxy-s6-edge-sm-g928gzdains-original-imaeagccsrgy2nxm.jpeg', 52999, 250, '2016-09-09 00:00:00', 4.2),
(37, 'SAMSUNG Galaxy Note 5 (Dual Sim) (Silver Titanium, 32 GB', 2, 8, '4 GB RAM | 32 GB ROM |\r\n5.7 inch Quad HD Display\r\n16MP Primary Camera | 5MP Front\r\n3000 mAh Li-Polymer Battery\r\nExynos 7420 64-bit Processor', '../uploads/prodimage/samsung-galaxy-note-5-dual-sim-n920g-original-imaefzcgcevuyjmw.jpeg', 52099, 230, '2016-09-14 00:00:00', 3.5),
(38, 'SAMSUNG Galaxy Note Edge (Charcoal Black, 32 GB)', 2, 8, '3 GB RAM | 32 GB ROM | Expandable Upto 128 GB\r\n5.6 inch Display\r\n16MP Primary Camera | 3.7MP Front\r\n3000 mAh Battery\r\nAPQ 8084 Processor', '../uploads/prodimage/samsung-galaxy-note-edge-n915gkeinu-original-imae37cuteyax9qw.jpeg', 68000, 400, '2016-07-28 00:00:00', 3.2),
(39, 'SAMSUNG Galaxy Note 4 (Bronze Gold, 32 GB)', 2, 8, '3 GB RAM | 32 GB ROM | Expandable Upto 128 GB\r\n5.7 inch Quad HD Display\r\n16MP Primary Camera | 3.7MP Front\r\n3220 mAh Battery', '../uploads/prodimage/samsung-note-4-sm-n910gzdeins-original-imaeyg8uzfhxzfuc.jpeg', 61500, 345, '2016-09-17 00:00:00', 4),
(41, 'Lenovo S920 (White, 4 GB)', 2, 9, '1 GB RAM | 4 GB ROM | Expandable Upto 32 GB\r\n5.3 inch HD Display\r\n8MP Primary Camera | 2MP Front\r\n2250 mAh Li-Polymer Battery\r\nCortex-A7 Processor', '../uploads/prodimage/lenovo-ideaphone-s920-original-imadn49ukyxhmtum.jpeg', 19499, 230, '2016-03-31 00:00:00', 4.1),
(42, 'Lenovo Vibe Shot (Carmine Red, 32 GB)', 2, 9, '3 GB RAM | 32 GB ROM | Expandable Upto 128 GB\r\n5 inch Full HD Display\r\n16MP Primary Camera | 8MP Front\r\n2900 mAh Li-Polymer Battery\r\nQualcomm Snapdragon 615 Processor', '../uploads/prodimage/lenovo-vibe-shot-na-original-imaebgcc3z4dkfkc', 18500, 500, '2015-12-31 00:00:00', 3.6),
(43, 'Lenovo S90 Or Sisley S90 (Grey, 32 GB)', 2, 9, '2 GB RAM | 32 GB ROM |\r\n5 inch HD Display\r\n13MP + 8MP Dual Rear Cameras | 8MP Front\r\n2300 mAh Li-Ion Battery\r\n1.2 GHz + Qualcomm Snapdragon 410 MSM8916 Cortex-A53, Quad Core Processor', '../uploads/prodimage/lenovo-sisley-s90-gr-original-imae5ydygauhn4vz.jpeg', 17999, 698, '2016-07-27 00:00:00', 3.5),
(46, 'LG G5 (Titan, 32 GB)', 2, 10, '4 GB RAM | 32 GB ROM | Expandable Upto 200 GB\r\n5.3 inch Quad HD Display\r\n16MP Primary Camera | 8MP Front\r\n2800 mAh Li-Ion Battery\r\nQualcomm Snapdragon 820 64-bit Processor', '../uploads/prodimage/lg-g5-h860-original-imaegskhwzd2cyh8.jpeg', 47990, 300, '2016-05-10 00:00:00', 4),
(47, 'LG G FLEX2 (Red, 32 GB)', 2, 10, '2 GB RAM | 32 GB ROM | Expandable Upto 2 TB\r\n5.5 inch HD Display\r\n13MP Primary Camera | 2.1MP Front\r\n3000 mAh Battery\r\nQualcomm Snapdragon 810 64-bit Processor', '../uploads/prodimage/lg-g-flex2-h955-original-imaedun23k6xz5yr.jpeg', 38999, 450, '2016-03-08 00:00:00', 3.7),
(48, 'LG G4 (Genuine Leather Black, 32 GB)', 2, 10, '3 GB RAM | 32 GB ROM | Expandable Upto 2 TB\r\n5.5 inch Quad HD Display\r\n16MP + 8MP Dual Rear Cameras | 8MP Front\r\n3000 mAh Li-Ion Battery\r\nQualcomm Snapdragon 808 Processor', '../uploads/prodimage/lg-g4-na-original-imae82xuh5aabwha.jpeg', 33999, 594, '2016-01-15 00:00:00', 4);

-- --------------------------------------------------------

--
-- Table structure for table `specs_lap`
--

CREATE TABLE `specs_lap` (
  `id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `os` varchar(255) NOT NULL,
  `processor` varchar(255) NOT NULL,
  `speed` varchar(255) NOT NULL,
  `graphic_card` varchar(255) NOT NULL,
  `ram` varchar(255) NOT NULL,
  `hd` varchar(255) NOT NULL,
  `battery` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `specs_lap`
--

INSERT INTO `specs_lap` (`id`, `p_id`, `os`, `processor`, `speed`, `graphic_card`, `ram`, `hd`, `battery`) VALUES
(1, 1, 'Windows 10', 'Core i7', '2.5 GHz with Turbo Boost upto 3.1 GHz', ' AMD Radeon R5 M335 4GB', '16 GB', '1TB', '6 hrs'),
(2, 2, 'Windows 10', 'Core i5', '1.2 GHz with Turbo Boost Upto 3.1 GHz', 'Intel HD Graphics 515', '8 GB', '512 GB', '7 hrs'),
(3, 3, 'Windows 10', 'Core i7', '2.6 GHz with Turbo Boost Upto 3.5 GHz', 'NVIDIA GeForce GTX 960M (4 GB)', '16 GB', '1 TB', '6.5 hrs'),
(4, 4, 'windows 8', 'Core i7', '1.8 GHz with Turbo Boost Upto 2.93 GHz 2 GB', 'NVIDIA GeForce GT 750M (4 GB)', '8 GB', '1 TB', '7 hrs'),
(5, 5, 'Windows 10', 'Core i7', '2.5 GHz with Turbo Boost Upto 3.1 GHz', 'AMD Radeon R5 M335 (2 GB)\r\n', '8 GB', '1 TB', '3.5 hrs\r\n'),
(6, 6, 'Windows 10', 'Core i7', '2.6 GHz with Turbo Boost Upto 3.5 GHz', 'Nvidia Geforce Gtx 980M 8GB', '16 GB', '1 TB', '7 hrs'),
(7, 7, 'Windows 10', 'Core i5', '2.3 GHz', 'Nvidia GeForce 940M (2 GB)', '4 GB', '1 TB', '5 hrs'),
(8, 8, 'Windows 10', 'Core i5', '2.3 GHz with Turbo Boost Upto 2.8 GHz', 'Nvidia Geforce 920M (2 GB)', '4 GB', '1 TB', '5 hrs'),
(9, 9, 'Linux/Ubuntu', 'Core i7', '2.4 GHz with Turbo Boost Upto 3 GHz', 'NVIDIA GeForce 920M (2 GB)', '8 GB', '1 TB', '5 hrs'),
(10, 10, 'Windows 10', 'Core i3', '2.0 GHz', 'Nvidia Geforce 940M (2GB)', '4 GB', '1 TB', '5 hrs'),
(11, 11, 'Windows 8.1', 'Core i7', '2.4 GHz with Turbo Boost Upto 3 GHz', 'Intel HD Graphics 5500', '8 GB', '1 TB', '5.5 to 6 hrs'),
(12, 12, 'Windows 8.1', 'Core i7', '2.4 GHz with Turbo Boost Upto 3 GHz', 'Intel HD Graphics 5500', '8 GB', '1 TB', '6 hrs'),
(13, 13, 'Windows 10', 'Core i5', '1.1 GHz with Turbo Boost Upto 2.7 GHz', 'Intel HD Graphics 515', '8 GB', '1 TB', '5.5 hrs'),
(14, 14, 'Windows 10', 'Core i7', '3 GHz', 'Nvidia Geforce Gtx 950M (4 GB)', '12 GB', '1 TB', '4.5 hrs\r\n'),
(15, 15, 'Windows 10', 'Core i7', '2.5 GHz with Turbo Boost Upto 3.1 GHz', 'NVIDIA GeForce 940M (4 GB)', '16 GB', '2 TB', '5 hrs'),
(16, 16, 'Windows 10', 'Core i7', '2.6 GHz (Upto 3.5GHz)', 'Nvidia GTX 960M 4 GB\r\n', '16 GB', '1 TB', '6.5 hrs'),
(17, 17, 'Windows 10', 'Core i7', '2.5 GHz', 'N16P-GX 4GB DDR5', '8 GB', '1 TB', '6 hrs'),
(18, 18, 'Windows 8', 'Core i5', '2.2 GHz with Turbo boost up to 2.7 GHz', 'Intel HD Graphics 5500', '4 GB', '1 TB', '7 hrs'),
(19, 19, 'Windows 10', 'Core i7', '2.4 GHz with Turbo Boost Upto 3 GHz', 'NVIDIA GeForce 920M (2 GB)', '8 GB', '1 TB', '6 hrs'),
(20, 20, 'Windows 10', 'Core i5', '2.3 GHz', 'Intel Graphics\r\n', '8 GB', '1 TB', '4 hrs'),
(21, 21, 'Windows 10', 'Core i7', '2.6 GHz with Turbo Boost Upto 3.5 GHz', 'NVIDIA GeForce GTX 980M (8 GB)', '16 GB', '1 TB', '7.5 hrs'),
(22, 22, 'Windows 10', 'Core i7', '2.6 GHz with Turbo Boost Upto 3.5 GHz', 'NVIDIA GeForce GTX 960M (4GB)', '16 GB', '1 TB', '4.5 hrs'),
(23, 23, 'Windows 10', 'Core i7', '2.5 GHz with Turbo Boost Upto 3.1 GHz', 'Intel HD Graphics 520', '8 GB', '1 TB', '6 hrs'),
(24, 24, 'Windows 10', 'Core i5', '2.3 GHz with Turbo Boost Upto 2.8 GHz', 'Intel HD Graphics 520', '8 GB', '500 GB', '4.5 hrs'),
(25, 25, 'Windows 10', 'Core M', '900 MHz with Turbo Boost Upto 2.2 GHz', 'Intel HD Graphics 515', '4 GB', '512 GB', '10 hrs');

-- --------------------------------------------------------

--
-- Table structure for table `specs_mob`
--

CREATE TABLE `specs_mob` (
  `id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `internal_memory` varchar(255) NOT NULL,
  `ram` varchar(255) NOT NULL,
  `primary_cam` varchar(255) NOT NULL,
  `secondary_cam` varchar(255) NOT NULL,
  `battery` varchar(255) NOT NULL,
  `screen` varchar(255) NOT NULL,
  `cores` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `specs_mob`
--

INSERT INTO `specs_mob` (`id`, `p_id`, `internal_memory`, `ram`, `primary_cam`, `secondary_cam`, `battery`, `screen`, `cores`) VALUES
(26, 26, '32 GB', '3 GB', '23 MP ', '5 MP', '2900 mAh', '5.5 inch', 'Octa core'),
(27, 27, '16 GB', '3 GB', '20.7 MP', '2.2 MP', '3200 mAh', '5.2 inch', 'Quad Core'),
(28, 28, '64 GB', '3 GB', '23 MP', '13 MP', '2620 mAh', '5 inch', 'Hexa Core\r\n'),
(29, 29, '32 GB', '3 Gb', '20.7 MP', '5 MP', '2930 mAh', '5.2 inch', 'Octa Core'),
(30, 30, '16 GB', '3 GB', '21.5 MP', '16 MP', '2700 mAh', '6 inch', 'Octa Core'),
(31, 31, '64 GB', '3 GB', '21 MP', '5 MP', '3760 mAh', '5.4 inch', 'Octa Core'),
(32, 32, '64 GB', '3 GB', '21 MP', '2 MP', '3900 mAh', '5.2 inch', 'Quad Core'),
(33, 33, '64 GB', '4 GB', '13 MP', '5 MP', '2600 mAh', '5.5 inch', 'Quad Core'),
(34, 34, '32 GB', '3 GB', '21 MP ', '5 MP', '3000 mAh', '5.7 inch', 'Hexa Core'),
(35, 35, '32 GB', '2 GB', '21 MP', '5 MP', '3630 mAh', '5.5 inch', 'Octa Core'),
(36, 36, '32 GB', '4 GB', '16 MP', '5 MP', '3000 mAh', '5.7 inch', 'Octa Core'),
(37, 37, '32 GB', '4 GB', '16 MP ', '5 MP', '3000 mAh', '5.7 inch', 'Octa Core'),
(38, 38, '32 GB', '3 GB', '16 MP', '3.7 MP', '3000 mAh', '5.7 inch', 'Quad Core'),
(39, 39, '32 GB', '3 GB', '16 MP', '3.7 MP', '3220 mAh', '5.7 inch', 'Quad Core\r\n'),
(41, 41, '4 GB', '1 GB', '8 MP', '2 MP', '2250 mAh', '5.3 inch', 'Quad Core'),
(42, 42, '32 GB', '3 GB', '16 MP', '8 Mp', '2900 mAh', '5 inch', 'Octa Core'),
(43, 43, '32 GB', '2 GB', '13 MP + 8 MP', '8 MP', '2300 mAh', '5 inch', 'Quad Core'),
(46, 46, '32 GB', '4 GB', '16 MP', '8 MP', '2800 mAh', '5.3 inch', 'Quad Core'),
(47, 47, '32 GB', '2 GB', '13 MP', '2.1 MP', '3500 mAh', '6 inch', 'Quad Core'),
(48, 48, '32 GB', '3 GB', '16 MP + 8 MP', '8 MP', '3000 mAh', '5.5 inch', 'Hexa Core');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `id` int(11) NOT NULL,
  `cid` int(3) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`id`, `cid`, `title`) VALUES
(1, 1, 'Dell'),
(2, 1, 'Acer'),
(3, 1, 'HP'),
(4, 1, 'Lenovo'),
(5, 1, 'ASUS'),
(6, 2, 'Sony'),
(7, 2, 'Moto'),
(8, 2, 'Samsung'),
(9, 2, 'Lenovo'),
(10, 2, 'LG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specs_lap`
--
ALTER TABLE `specs_lap`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specs_mob`
--
ALTER TABLE `specs_mob`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
