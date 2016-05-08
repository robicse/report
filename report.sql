-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2016 at 05:59 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `report`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE IF NOT EXISTS `menu_items` (
  `id` int(10) unsigned NOT NULL,
  `parent_id` int(11) NOT NULL,
  `url` text NOT NULL,
  `title` text NOT NULL,
  `classes` varchar(128) DEFAULT 'menu'
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`id`, `parent_id`, `url`, `title`, `classes`) VALUES
(1, 0, '', 'Home', ''),
(2, 0, '', 'SFBL Report', ''),
(3, 0, '', 'Square Report', ''),
(4, 0, '', 'Add New Supervisor', ''),
(5, 3, '', '- Meril Baby', ''),
(6, 3, '', '- Meril Baby Registration', ''),
(7, 3, '', '- Product Report', ''),
(8, 3, '', '- Counsilor Report', ''),
(9, 3, '', '- Doctor Report', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
