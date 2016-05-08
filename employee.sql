-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2016 at 04:00 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `employee`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctorreport`
--

CREATE TABLE IF NOT EXISTS `doctorreport` (
  `id` int(11) NOT NULL,
  `created_time` varchar(60) NOT NULL,
  `caller_number` varchar(60) NOT NULL,
  `caller_name` varchar(60) NOT NULL,
  `baby_name` varchar(60) NOT NULL,
  `dob` varchar(60) NOT NULL,
  `age_of_today` varchar(60) NOT NULL,
  `address` varchar(60) NOT NULL,
  `division` varchar(60) NOT NULL,
  `source` varchar(60) NOT NULL,
  `dr_call_type` varchar(60) NOT NULL,
  `prescript` varchar(60) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctorreport`
--

INSERT INTO `doctorreport` (`id`, `created_time`, `caller_number`, `caller_name`, `baby_name`, `dob`, `age_of_today`, `address`, `division`, `source`, `dr_call_type`, `prescript`) VALUES
(1, 'caller time 1', 'caller number 1', 'caller name 1', 'baby name 1', 'dob 1', 'age on today 1', 'address 1', 'division 1', 'source 1', 'dr call type 1', 'prescript 1'),
(2, 'caller time 2', 'caller number 2', 'caller name 2', 'baby name 2', 'dob 2', 'age on today 2', 'address 2', 'division 2', 'source 2', 'dr call type 2', 'prescript 2'),
(3, 'caller time 3', 'caller number 3', 'caller name 3', 'baby name 3', 'dob 3', 'age on today 3', 'address 3', 'division 3', 'source 3', 'dr call type 3', 'prescript 3'),
(4, 'caller time 4', 'caller number 4', 'caller name 4', 'baby name 4', 'dob 4', 'age on today 4', 'address 4', 'division 4', 'source 4', 'dr call type 4', 'prescript 4'),
(5, 'caller time 5', 'caller number 5', 'caller name 5', 'baby name 5', 'dob 5', 'age on today 5', 'address 5', 'division 5', 'source 5', 'dr call type 5', 'prescript 5'),
(6, 'caller time 6', 'caller number 6', 'caller name 6', 'baby name 6', 'dob 6', 'age on today 6', 'address 6', 'division 6', 'source 6', 'dr call type 6', 'prescript 6'),
(7, 'caller time 7', 'caller number 7', 'caller name 7', 'baby name 7', 'dob 7', 'age on today 7', 'address 7', 'division 7', 'source 7', 'dr call type 7', 'prescript 7'),
(8, 'caller time 8', 'caller number 8', 'caller name 8', 'baby name 8', 'dob 8', 'age on today 8', 'address 8', 'division 8', 'source 8', 'dr call type 8', 'prescript 8'),
(9, 'caller time 9', 'caller number 9', 'caller name 9', 'baby name 9', 'dob 9', 'age on today 9', 'address 9', 'division 9', 'source 9', 'dr call type 9', 'prescript 9'),
(10, 'caller time 10', 'caller number 10', 'caller name 10', 'baby name 10', 'dob 10', 'age on today 10', 'address 10', 'division 10', 'source 10', 'dr call type 10', 'prescript 10'),
(11, 'caller time 11', 'caller number 11', 'caller name 11', 'baby name 11', 'dob 11', 'age on today 11', 'address 11', 'division 11', 'source 11', 'dr call type 11', 'prescript 11'),
(12, 'caller time 12', 'caller number 12', 'caller name 12', 'baby name 12', 'dob 12', 'age on today 12', 'address 12', 'division 12', 'source 12', 'dr call type 12', 'prescript 12'),
(13, 'caller time 13', 'caller number 13', 'caller name 13', 'baby name 13', 'dob 13', 'age on today 13', 'address 13', 'division 13', 'source 13', 'dr call type 13', 'prescript 13'),
(14, 'caller time 14', 'caller number 14', 'caller name 14', 'baby name 14', 'dob 14', 'age on today 14', 'address 14', 'division 14', 'source 14', 'dr call type 14', 'prescript 14'),
(15, 'caller time 15', 'caller number 15', 'caller name 15', 'baby name 15', 'dob 15', 'age on today 15', 'address 15', 'division 15', 'source 15', 'dr call type 15', 'prescript 15'),
(16, 'caller time 16', 'caller number 16', 'caller name 16', 'baby name 16', 'dob 16', 'age on today 16', 'address 16', 'division 16', 'source 16', 'dr call type 16', 'prescript 16'),
(17, 'caller time 17', 'caller number 17', 'caller name 17', 'baby name 17', 'dob 17', 'age on today 17', 'address 17', 'division 17', 'source 17', 'dr call type 17', 'prescript 17'),
(18, 'caller time 18', 'caller number 18', 'caller name 18', 'baby name 18', 'dob 18', 'age on today 18', 'address 18', 'division 18', 'source 18', 'dr call type 18', 'prescript 18'),
(19, 'caller time 19', 'caller number 19', 'caller name 19', 'baby name 19', 'dob 19', 'age on today 19', 'address 19', 'division 19', 'source 19', 'dr call type 19', 'prescript 19'),
(20, 'caller time 20', 'caller number 20', 'caller name 20', 'baby name 20', 'dob 20', 'age on today 20', 'address 20', 'division 20', 'source 20', 'dr call type 20', 'prescript 20'),
(21, 'caller time 21', 'caller number 21', 'caller name 21', 'baby name 21', 'dob 21', 'age on today 21', 'address 21', 'division 21', 'source 21', 'dr call type 21', 'prescript 21'),
(22, 'caller time 22', 'caller number 22', 'caller name 22', 'baby name 22', 'dob 22', 'age on today 22', 'address 22', 'division 22', 'source 22', 'dr call type 22', 'prescript 22');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `id` int(11) NOT NULL,
  `employee_name` varchar(255) NOT NULL,
  `employee_salary` double NOT NULL,
  `employee_age` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=latin1 COMMENT='datatable demo table';

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `employee_name`, `employee_salary`, `employee_age`) VALUES
(1, 'Tiger Nixon', 320800, 61),
(2, 'Garrett Winters', 170750, 63),
(3, 'Ashton Cox', 86000, 66),
(4, 'Cedric Kelly', 433060, 22),
(5, 'Airi Satou', 162700, 33),
(6, 'Brielle Williamson', 372000, 61),
(7, 'Herrod Chandler', 137500, 59),
(8, 'Rhona Davidson', 327900, 55),
(9, 'Colleen Hurst', 205500, 39),
(10, 'Sonya Frost', 103600, 23),
(11, 'Jena Gaines', 90560, 30),
(12, 'Quinn Flynn', 342000, 22),
(13, 'Charde Marshall', 470600, 36),
(14, 'Haley Kennedy', 313500, 43),
(15, 'Tatyana Fitzpatrick', 385750, 19),
(16, 'Michael Silva', 198500, 66),
(17, 'Paul Byrd', 725000, 64),
(18, 'Gloria Little', 237500, 59),
(19, 'Bradley Greer', 132000, 41),
(20, 'Dai Rios', 217500, 35),
(21, 'Jenette Caldwell', 345000, 30),
(22, 'Yuri Berry', 675000, 40),
(23, 'Caesar Vance', 106450, 21),
(24, 'Doris Wilder', 85600, 23),
(25, 'Angelica Ramos', 1200000, 47),
(26, 'Gavin Joyce', 92575, 42),
(27, 'Jennifer Chang', 357650, 28),
(28, 'Brenden Wagner', 206850, 28),
(29, 'Fiona Green', 850000, 48),
(30, 'Shou Itou', 163000, 20),
(31, 'Michelle House', 95400, 37),
(32, 'Suki Burks', 114500, 53),
(33, 'Prescott Bartlett', 145000, 27),
(34, 'Gavin Cortez', 235500, 22),
(35, 'Martena Mccray', 324050, 46),
(36, 'Unity Butler', 85675, 47),
(37, 'Howard Hatfield', 164500, 51),
(38, 'Hope Fuentes', 109850, 41),
(39, 'Vivian Harrell', 452500, 62),
(40, 'Timothy Mooney', 136200, 37),
(41, 'Jackson Bradshaw', 645750, 65),
(42, 'Olivia Liang', 234500, 64),
(43, 'Bruno Nash', 163500, 38),
(44, 'Sakura Yamamoto', 139575, 37),
(45, 'Thor Walton', 98540, 61),
(46, 'Finn Camacho', 87500, 47),
(47, 'Serge Baldwin', 138575, 64),
(48, 'Zenaida Frank', 125250, 63),
(49, 'Zorita Serrano', 115000, 56),
(50, 'Jennifer Acosta', 75650, 43),
(51, 'Cara Stevens', 145600, 46),
(52, 'Hermione Butler', 356250, 47),
(53, 'Lael Greer', 103500, 21),
(54, 'Jonas Alexander', 86500, 30),
(55, 'Shad Decker', 183000, 51),
(56, 'Michael Bruce', 183000, 29),
(57, 'Donna Snider', 112000, 27);

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
(9, 3, 'report/doctorreport', '- Doctor Report', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'robicse', 'robicse8@gmail.com', '123456'),
(2, 'robi', 'robeul@windmillbd.net', '123456'),
(11, 'robeul', 'robeulcse8@gmail.com', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctorreport`
--
ALTER TABLE `doctorreport`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctorreport`
--
ALTER TABLE `doctorreport`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
