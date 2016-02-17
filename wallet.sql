-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2015 at 08:01 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wallet`
--

-- --------------------------------------------------------

--
-- Table structure for table `item_ordrd`
--

CREATE TABLE IF NOT EXISTS `item_ordrd` (
  `itord_id` int(20) NOT NULL DEFAULT '0',
  `dosa` int(20) DEFAULT NULL,
  `idly` int(20) DEFAULT NULL,
  `s_meals` int(20) DEFAULT NULL,
  `r_curry` int(20) DEFAULT NULL,
  `paratha` int(20) DEFAULT NULL,
  `thali` int(20) DEFAULT NULL,
  `gobi` int(20) DEFAULT NULL,
  `noodles` int(20) DEFAULT NULL,
  `f_rice` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wall_account`
--

CREATE TABLE IF NOT EXISTS `wall_account` (
  `usn` varchar(20) NOT NULL DEFAULT '',
  `balance` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wall_account`
--

INSERT INTO `wall_account` (`usn`, `balance`) VALUES
('12', 0),
('13', 2835),
('14', 500),
('1RV12IS011', 730),
('1rv12is040', 940),
('1RV12IS060', 1180),
('1RV12IS061', 165),
('1RV12IS100', 0),
('eswhdsrh', 0),
('shrehreh', 0);

-- --------------------------------------------------------

--
-- Table structure for table `wall_coupon`
--

CREATE TABLE IF NOT EXISTS `wall_coupon` (
  `code` varchar(20) NOT NULL DEFAULT '',
  `percentage` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wall_coupon`
--

INSERT INTO `wall_coupon` (`code`, `percentage`) VALUES
('13', 500);

-- --------------------------------------------------------

--
-- Table structure for table `wall_feedback`
--

CREATE TABLE IF NOT EXISTS `wall_feedback` (
  `usn` varchar(20) NOT NULL DEFAULT '',
  `feedback` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wall_menu1`
--

CREATE TABLE IF NOT EXISTS `wall_menu1` (
`item_id` int(20) NOT NULL,
  `item_name` char(255) NOT NULL,
  `cost` int(20) DEFAULT NULL,
  `quantity` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wall_order`
--

CREATE TABLE IF NOT EXISTS `wall_order` (
`order_id` int(20) NOT NULL,
  `items_ordered` varchar(255) NOT NULL,
  `usn` varchar(20) DEFAULT NULL,
  `can_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `total` int(20) DEFAULT NULL,
  `status` char(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wall_order`
--

INSERT INTO `wall_order` (`order_id`, `items_ordered`, `usn`, `can_timestamp`, `total`, `status`) VALUES
(1, '2', '13', '2015-04-04 09:05:05', 135, NULL),
(2, '2', '13', '2015-04-04 09:06:35', 165, NULL),
(3, '2', '13', '2015-04-04 09:07:25', 215, NULL),
(4, '2', '13', '2015-04-04 09:39:09', 255, NULL),
(5, '2', '13', '2015-04-04 09:39:46', 255, NULL),
(6, '2', '13', '2015-04-04 09:40:07', 255, NULL),
(7, '2', '13', '2015-04-04 09:45:58', 280, NULL),
(8, '2', '13', '2015-04-04 09:49:23', 280, NULL),
(9, '2', '13', '2015-04-04 10:28:00', 280, NULL),
(10, '2', '13', '2015-04-04 10:29:37', 280, NULL),
(11, '2', '13', '2015-04-04 10:31:31', 280, NULL),
(12, '2', '13', '2015-04-04 10:34:50', 280, NULL),
(13, '2', '13', '2015-04-04 10:35:48', 280, NULL),
(14, 'dosa - 2,       gobi manchurian - 4,    noodles - 4 ,   fried rice - 3,    ', '13', '2015-04-04 10:36:27', 330, NULL),
(15, 'dosa - 2,       gobi manchurian - 4,    noodles - 4 ,   fried rice - 3,    ', '13', '2015-04-04 10:48:52', 330, NULL),
(16, 'dosa - 2,       gobi manchurian - 4,    noodles - 4 ,   fried rice - 3,    ', '13', '2015-04-04 10:54:30', 330, NULL),
(17, 'dosa - 2,       gobi manchurian - 4,    noodles - 4 ,   fried rice - 3,    ', '13', '2015-04-04 10:55:05', 330, NULL),
(18, 'dosa - 2,       gobi manchurian - 4,    noodles - 4 ,   fried rice - 3,    ', '13', '2015-04-04 10:57:53', 330, NULL),
(19, 'dosa - 0,       gobi manchurian - 1,    noodles - 1 ,   fried rice - 0,    ', '13', '2015-04-04 11:04:56', 50, NULL),
(20, '       noodles - 3 ,    ', '13', '2015-04-04 15:11:20', 75, NULL),
(21, '      gobi manchurian - 1    noodles - 2    fried rice - 2    ', '13', '2015-04-04 15:14:40', 135, NULL),
(22, '   roti curry - 2   paratha - 2   north indian thali - 1      ', '13', '2015-04-04 15:16:19', 125, NULL),
(23, '   roti curry - 2 	  paratha - 2  	 north indian thali - 1  	    ', '13', '2015-04-04 15:19:54', 125, NULL),
(24, '      gobi manchurian - 3   	 noodles - 1  	   ', '13', '2015-04-05 13:10:50', 100, NULL),
(25, 'dosa - 2 	    paratha - 2  	     ', '1RV12IS061', '2015-04-05 15:03:16', 80, NULL),
(26, '      gobi manchurian - 1   	   ', '1RV12IS061', '2015-04-05 15:03:47', 25, NULL),
(27, '      gobi manchurian - 3   	   ', '1RV12IS061', '2015-04-05 15:05:49', 75, NULL),
(28, '      gobi manchurian - 3   	   ', '1RV12IS061', '2015-04-05 15:05:56', 75, NULL),
(29, 'dosa - 3 	         ', '1RV12IS061', '2015-04-05 15:07:28', 60, NULL),
(30, '       noodles - 4  	   ', '1RV12IS061', '2015-04-05 15:07:56', 100, NULL),
(31, 'dosa - 3 	         ', '1RV12IS061', '2015-04-05 15:09:36', 60, NULL),
(32, 'dosa - 4 	    paratha - 3  	     ', '1RV12IS060', '2015-04-05 15:38:01', 140, NULL),
(33, 'dosa - 4 	         ', '1RV12IS060', '2015-04-05 15:39:42', 80, NULL),
(34, '   roti curry - 3 	  paratha - 1  	     ', '1RV12IS061', '2015-04-06 18:45:57', 95, 'delivered'),
(35, 'dosa - 1 	         ', '1RV12IS061', '2015-04-06 18:45:58', 20, 'delivered'),
(36, 'dosa - 1 	         ', '13', '2015-04-06 18:50:47', 20, 'delivered'),
(37, '    paratha - 4  	     ', '13', '2015-04-06 18:50:48', 80, 'delivered'),
(38, '        fried rice - 4   	 ', '13', '2015-04-06 18:50:49', 120, 'delivered'),
(39, ' idly - 4 	         ', '13', '2015-04-06 18:50:49', 60, 'delivered'),
(40, 'dosa - 3 	         ', '13', '2015-04-06 19:59:56', 60, 'delivered'),
(41, '  south indian meals - 3 	    north indian thali - 2  	   fried rice - 3   	 ', '13', '2015-04-06 19:59:52', 220, 'delivered'),
(42, 'dosa - 3 	 idly - 3 	    paratha - 2  	     ', '13', '2015-04-06 19:59:55', 145, 'delivered'),
(43, '    paratha - 3  	     ', '1rv12is040', '2015-04-18 09:44:42', 60, 'delivered'),
(44, 'dosa - 2 	     north indian thali - 2  	 gobi manchurian - 2   	 noodles - 2  	  fried rice - 2   	 ', '1RV12IS011', '2015-04-21 08:02:35', 270, 'delivered'),
(45, 'dosa - 3 	   roti curry - 4 	       ', '13', '2015-11-16 19:37:56', 160, 'delivered'),
(46, 'dosa - 4 	         ', '13', '2015-11-16 19:39:58', 80, 'delivered'),
(47, ' idly - 4 	         ', '13', '2015-11-16 19:39:53', 60, 'delivered'),
(48, '         ', '13', '2015-11-18 14:12:58', 0, 'delivered');

-- --------------------------------------------------------

--
-- Table structure for table `wall_signup`
--

CREATE TABLE IF NOT EXISTS `wall_signup` (
  `usn` varchar(20) NOT NULL,
  `name` char(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wall_signup`
--

INSERT INTO `wall_signup` (`usn`, `name`, `password`, `email_id`) VALUES
('11', 'avi', '1234', 'gld'),
('12', 'Avinash Polepally', 'A2dshvgshfv', 'venky@gag.com'),
('13', 'avi', '1234', 'gld'),
('14', 'avi', '1234', 'gld'),
('1RV12IS011', 'archana', '1234', 'ARCHIESDH'),
('1rv12is040', 'rach', '123', 'fgewuifg'),
('1RV12IS060', 'sujith', '1234', 'suj@gmail.com'),
('1RV12IS061', 'venkatesh', '1234', 'venkypolls@gmail.com'),
('1RV12IS100', 'adgdsa', 'aA1fghjkl', 'venky@gmail.com'),
('23', 'Avinash', '1234', 'CEWV'),
('24', 'Avinash', '1234', 'CEWV'),
('24a', 'daw', 'afdw', 'faw'),
('26', 'Avinash', '1234', 'CEWV'),
('eswhdsrh', '', '', ''),
('fe', 'swf', 'fsw', 'fw'),
('shrehreh', 'venky', 'aA1shsehje', 'venky@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `wall_signup2`
--

CREATE TABLE IF NOT EXISTS `wall_signup2` (
  `name` char(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wall_signup2`
--

INSERT INTO `wall_signup2` (`name`, `password`, `username`) VALUES
('ogara', '1234', 'ogara');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `item_ordrd`
--
ALTER TABLE `item_ordrd`
 ADD PRIMARY KEY (`itord_id`);

--
-- Indexes for table `wall_account`
--
ALTER TABLE `wall_account`
 ADD PRIMARY KEY (`usn`);

--
-- Indexes for table `wall_coupon`
--
ALTER TABLE `wall_coupon`
 ADD PRIMARY KEY (`code`);

--
-- Indexes for table `wall_feedback`
--
ALTER TABLE `wall_feedback`
 ADD PRIMARY KEY (`usn`);

--
-- Indexes for table `wall_menu1`
--
ALTER TABLE `wall_menu1`
 ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `wall_order`
--
ALTER TABLE `wall_order`
 ADD PRIMARY KEY (`order_id`), ADD KEY `usn` (`usn`);

--
-- Indexes for table `wall_signup`
--
ALTER TABLE `wall_signup`
 ADD PRIMARY KEY (`usn`);

--
-- Indexes for table `wall_signup2`
--
ALTER TABLE `wall_signup2`
 ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `wall_menu1`
--
ALTER TABLE `wall_menu1`
MODIFY `item_id` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `wall_order`
--
ALTER TABLE `wall_order`
MODIFY `order_id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=49;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `item_ordrd`
--
ALTER TABLE `item_ordrd`
ADD CONSTRAINT `item_ordrd_ibfk_1` FOREIGN KEY (`itord_id`) REFERENCES `wall_order` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `wall_account`
--
ALTER TABLE `wall_account`
ADD CONSTRAINT `wall_account_ibfk_1` FOREIGN KEY (`usn`) REFERENCES `wall_signup` (`usn`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `wall_feedback`
--
ALTER TABLE `wall_feedback`
ADD CONSTRAINT `wall_feedback_ibfk_1` FOREIGN KEY (`usn`) REFERENCES `wall_signup` (`usn`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `wall_order`
--
ALTER TABLE `wall_order`
ADD CONSTRAINT `wall_order_ibfk_1` FOREIGN KEY (`usn`) REFERENCES `wall_signup` (`usn`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
