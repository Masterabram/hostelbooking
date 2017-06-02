-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2017 at 03:07 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hostel_booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `transactionId` int(11) NOT NULL,
  `hostelId` int(10) NOT NULL,
  `tenantId` int(10) NOT NULL,
  `landlordId` varchar(13) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `name` varchar(30) DEFAULT NULL,
  `id` varchar(12) DEFAULT NULL,
  `tell` varchar(14) DEFAULT NULL,
  `gender` varchar(6) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `county` varchar(14) DEFAULT NULL,
  `study` varchar(45) DEFAULT NULL,
  `student_id` varchar(45) DEFAULT NULL,
  `duration` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`transactionId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`transactionId`, `hostelId`, `tenantId`, `landlordId`, `date`, `name`, `id`, `tell`, `gender`, `email`, `county`, `study`, `student_id`, `duration`) VALUES
(526931, 11, 7, '4', '2017-03-31 20:13:22', 'Cafew Mourice', NULL, '079046353', 'Male', 'cafew@gmail.com', 'Baringo', 'Year 1 Semester 1', 'ci/00099/014', '3'),
(897370, 1, 7, '1', '2017-03-31 20:14:02', 'Cafew Mourice', NULL, '079046353', 'Male', 'cafew@gmail.com', 'Baringo', 'Year 1 Semester 1', 'ci/00099/014', '3'),
(903473, 11, 1, '4', '2017-03-31 06:44:31', 'Abraham Ogoll', NULL, '0790463533', 'Male', 'abramogol@gmail.com', 'AF', '1.1', 'ci/00097/014', '3'),
(931183, 11, 1, '4', '2017-03-30 04:42:40', 'Abraham Ogol', NULL, '0790463533', 'Male', 'abramogol@gmail.com', 'AF', 'Year 2 Sem 1', 'ci/00097/0', '3'),
(976563, 3, 1, '1', '2017-04-03 12:33:42', 'Abraham Ogoll', NULL, '0790463533', 'Male', 'abramogol@gmail.com', 'Taita Taveta', 'Year 1 Semester 1', 'ci/00097/014', '3');

-- --------------------------------------------------------

--
-- Table structure for table `chatting`
--

CREATE TABLE IF NOT EXISTS `chatting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(60) NOT NULL,
  `message` varchar(100) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip_address` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `chatting`
--

INSERT INTO `chatting` (`id`, `user`, `message`, `date_time`, `ip_address`) VALUES
(10, 'Admin', '!0 dollar at lest', '2014-08-13 02:05:50', '127.0.0.1'),
(11, 'Nimco Qadaafi', 'OO Walaal Tuxaaafa Waa Qaalia WWa sidee', '2014-08-15 04:36:58', '127.0.0.1'),
(12, 'Admin', 'It&#39;s Too Fair According Ware House Mannager', '2014-08-15 04:37:34', '127.0.0.1'),
(13, 'Janan', 'Any Budy There????????????????????', '2014-08-15 05:44:33', '127.0.0.1'),
(14, 'mahamed', 'gudoomiye waran bal', '2014-08-17 17:15:15', '::1'),
(15, 'admin', 'wa khayr sxb sare', '2014-08-17 17:15:39', '::1'),
(16, 'Abraham', 'Flatscreen', '2017-01-12 08:31:51', '::1'),
(17, 'Admin', 'In bevs', '2017-01-12 08:32:33', '::1'),
(18, '', ',k.,.,', '2017-01-19 17:56:24', '::1'),
(19, 'Abraham', 'Am back', '2017-03-31 21:03:32', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `tenantId` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) DEFAULT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `tell` varchar(14) DEFAULT NULL,
  `studentId` varchar(18) DEFAULT NULL,
  `nationalId` varchar(10) DEFAULT NULL,
  `sex` varchar(6) DEFAULT NULL,
  `county` varchar(50) DEFAULT NULL,
  `dob` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`tenantId`) USING HASH
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`tenantId`, `name`, `email`, `password`, `tell`, `studentId`, `nationalId`, `sex`, `county`, `dob`) VALUES
(1, 'Abraham Ogoll', 'abramogol@gmail.com', 'e87385f3b131ff2cd207bd28e4215d5e', '0790463533', 'ci/00097/014', '32361391', 'Male', 'Kisumu', '1/1/2017'),
(6, 'Bob Calympore', 'client@gmail.com', 'e87385f3b131ff2cd207bd28e4215d5e', '0790463533', 'ci/00097/0', '116636511', 'Male', '1482233314_20160326_213724.jpg', '0000-00-00 00:0'),
(7, 'Cafew Mourice', 'cafew@gmail.com', 'e87385f3b131ff2cd207bd28e4215d5e', '079046353', 'ci/00099/014', '11111111', 'Male', 'Baringo', '1/1/1990');

-- --------------------------------------------------------

--
-- Table structure for table `counties`
--

CREATE TABLE IF NOT EXISTS `counties` (
  `county_id` int(2) NOT NULL AUTO_INCREMENT,
  `county_name` varchar(20) NOT NULL,
  PRIMARY KEY (`county_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `counties`
--

INSERT INTO `counties` (`county_id`, `county_name`) VALUES
(1, 'Nairobi'),
(2, 'Kakamega'),
(3, 'Vihiga'),
(4, 'Baringo'),
(5, 'Bomet'),
(6, 'Bungoma'),
(7, 'Busia'),
(8, 'Elgeyo Marakwet'),
(9, 'Embu'),
(10, 'Garissa'),
(11, 'Homa Bay'),
(12, 'Isiolo'),
(13, 'Kajiado'),
(14, 'Kericho'),
(15, 'Kiambu'),
(16, 'Kilifi'),
(17, 'Kirinyaga'),
(18, 'Kisii'),
(19, 'Kisumu'),
(20, 'Kitui'),
(21, 'Kwale'),
(22, 'Laikipia'),
(23, 'Lamu'),
(24, 'Machakos'),
(25, 'Makueni'),
(26, 'Mandera'),
(27, 'Meru'),
(28, 'Migori'),
(29, 'Marsabit'),
(30, 'Mombasa'),
(31, 'Muranga'),
(32, 'Nakuru'),
(33, 'Nandi'),
(34, 'Narok'),
(35, 'Nyamira'),
(36, 'Nyandarua'),
(37, 'Nyeri'),
(38, 'Samburu'),
(39, 'Siaya'),
(40, 'Taita Taveta'),
(41, 'Tana River'),
(42, 'Tharaka Nithi'),
(43, 'Trans Nzoia'),
(44, 'Turkana'),
(45, 'Uasin Gishu'),
(46, 'Wajir'),
(47, 'West Pokot');

-- --------------------------------------------------------

--
-- Table structure for table `county`
--

CREATE TABLE IF NOT EXISTS `county` (
  `county_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `county_name` char(45) DEFAULT NULL,
  PRIMARY KEY (`county_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `emails`
--

CREATE TABLE IF NOT EXISTS `emails` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `sentStatus` int(1) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `to` varchar(40) NOT NULL,
  `msg` varchar(400) NOT NULL,
  `sender` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `emails`
--

INSERT INTO `emails` (`id`, `sentStatus`, `date`, `to`, `msg`, `sender`) VALUES
(1, 0, '2017-03-24 08:37:36', 'abramogol@gmail.com', 'Your Password has been reseted to Changeme Please login in and change it immediatly', ''),
(2, 0, '2017-03-24 08:38:32', 'abramogol@gmail.com', 'Your Password has been reseted to Changeme Please login in and change it immediatly', ''),
(3, 0, '2017-03-24 08:41:14', 'abramogol@gmail.com', 'Your Password has been reseted to Changeme Please login in and change it immediatly', ''),
(4, 0, '2017-03-24 08:47:19', 'abramogol@gmail.com', 'Your Password has been reseted to Changeme Please login in and change it immediatly', 'abramogol@gmail.com'),
(5, 0, '2017-03-25 05:01:49', 'abramogol@gmail.com', 'Your Password has been reseted to Changeme Please login in and change it immediatly', 'abramogol@gmail.com'),
(6, 0, '2017-03-25 05:48:23', 'abramogol@gmail.com', 'Click the link below to change your password Click here ', 'abramogol@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `email_setting`
--

CREATE TABLE IF NOT EXISTS `email_setting` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `smtp` varchar(30) NOT NULL,
  `facebook` varchar(100) DEFAULT NULL,
  `twitter` varchar(100) DEFAULT NULL,
  `id` int(1) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `email_setting`
--

INSERT INTO `email_setting` (`username`, `password`, `subject`, `smtp`, `facebook`, `twitter`, `id`) VALUES
('hostelsystem17@gmail.com', 'qwerty123.', 'Hostel Booking', '445', 'https://facebook.com/abram.ogol', 'https://twitter.com/ogolAbraham', 1);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `msg` varchar(150) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tel` int(10) DEFAULT NULL,
  `user_ip` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `msg`, `date`, `tel`, `user_ip`) VALUES
(1, 'Abraham Ogol', 'abramogol@gmail.com', '<p>I love the site so far .....</p><p>its really cool</p>', '2017-01-19 18:21:52', 790463533, ''),
(2, 'Austine Ian', 'client@gmail.com', '<p>Am good now</p>', '2017-01-19 18:47:26', 790463533, '::1'),
(3, 'John Moleso', 'john@moleso.com', 'i love your work', '2017-03-30 17:32:15', 0, '::1');

-- --------------------------------------------------------

--
-- Table structure for table `hostel`
--

CREATE TABLE IF NOT EXISTS `hostel` (
  `hostelId` int(11) NOT NULL AUTO_INCREMENT,
  `landlordId` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `location` varchar(30) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'empty',
  `price` varchar(8) DEFAULT NULL,
  `img1` varchar(100) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `qty` int(3) NOT NULL DEFAULT '1',
  `bkqty` int(3) NOT NULL DEFAULT '0',
  `size` varchar(40) DEFAULT NULL,
  `type` varchar(34) DEFAULT NULL,
  PRIMARY KEY (`hostelId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `hostel`
--

INSERT INTO `hostel` (`hostelId`, `landlordId`, `name`, `location`, `status`, `price`, `img1`, `description`, `qty`, `bkqty`, `size`, `type`) VALUES
(1, 1, 'Orange House', 'Nyawita', 'empty', '10000', '1484299172_15871898_1802880966629409_743754048093459004_n.jpg', 'Water and electricity', 1, 0, NULL, NULL),
(2, 1, 'Pink House', 'Luanda', 'empty', '12000', '1484299295_IMG_20150924_112413.jpg', 'Water, power and Token', 1, 0, NULL, NULL),
(3, 1, 'Komyagi', 'Market', 'empty', '30000', '1484302629_443b883e839ba3fbee3be6a75ee70bd0.jpg', 'Water, sewer, self contain', 1, 0, NULL, NULL),
(4, 3, 'Havila', 'Market', 'empty', '20000', '1484663341_IMG_20160218_132506.jpg', '<ol><li><em>Hot water</em></li><li><em>Electricity</em></li><li><em>Hotel</em></li><li><em>Nice bedrooms</em></li></ol>', 1, 0, NULL, NULL),
(10, 4, 'Orange House', 'Market', 'empty', '20000', '1484985052_IMG-20160406-WA0006.jpg', '<ol><li>Water</li><li>Power</li><li>Sewage</li></ol>', 3, 3, NULL, NULL),
(11, 4, 'Kalekye', 'Mabungo', 'empty', '10000', '1487743826_54ff82282ac26-living-room-green-window-de.jpg', '<ol><li>Hot water</li><li>sprinngs</li><li>tokenned power</li><li>DSTV</li></ol>', 23, 0, NULL, NULL),
(12, 4, 'New Blaze', 'Market', 'empty', '15000`', '1491024597_Top Tips For Buying The Perfect Water Tank.png', '<ol><li>Electricity</li><li>Water</li><li>Inside sink</li><li>Hot showers</li></ol>', 10, 0, '30', 'Self Contain'),
(13, 4, 'Runda', 'Nyawita', 'empty', '13000', '1491024955_image012.jpg', '<ol><li>Electricity</li><li>Water</li><li>DSTV</li><li>Swimming pool</li></ol>', 3, 0, '23', 'Bed Sitter');

-- --------------------------------------------------------

--
-- Table structure for table `hostel_image`
--

CREATE TABLE IF NOT EXISTS `hostel_image` (
  `hoselId` int(12) NOT NULL,
  `img1` varchar(111) DEFAULT NULL,
  `img2` varchar(111) DEFAULT NULL,
  `img3` varchar(111) DEFAULT NULL,
  `img4` varchar(111) DEFAULT NULL,
  PRIMARY KEY (`hoselId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hostel_image`
--

INSERT INTO `hostel_image` (`hoselId`, `img1`, `img2`, `img3`, `img4`) VALUES
(1, '1484546972_812231202_126362.jpg', '1484546972_812317857_125954.jpg', '1484546972_812804657_111111.jpg', '1484546972_815919924_12140.jpg'),
(4, '1484663411_IMG_20150708_135000.jpg', '1484663411_IMG_20150708_135149.jpg', '1484663411_IMG_20150708_135031.jpg', '1484663411_IMG_20150708_134907.jpg'),
(5, '1484929720_IMG_20150812_110639.jpg', '1484929720_20150722_183523.jpg', '1484929720_C360_2015-08-23-17-53-28-159.jpg', '1484929720_C360_2015-08-23-17-15-29-055.jpg'),
(10, '1484985427_IMG-20160406-WA0007.jpg', '1484985427_IMG-20160406-WA0006.jpg', '1484985427_IMG-20160406-WA0008.jpg', '1484985427_IMG-20160406-WA0009.jpg'),
(11, '1487743906_4d8155e104ef5d51_2301-w500-h666-b0-p0--transitional-bedroom.jpg', '1487743906_46_gutter.jpg', '1487743906_dp15202_4col_Bathroom_Storage.jpeg', '1487743906_54bf45c7cd04a_-_hbx-gray-purple-bedroom-0913-s2.jpg'),
(12, '1491024815_water-tank.jpg', '1491024815_6.jpg', '1491024815_3.jpg', '1491024815_4d8155e104ef5d51_2301-w500-h666-b0-p0--transitional-bedroom.jpg'),
(13, '1491025050_roseburg_water_tank_lg.jpg', '1491025050_5.jpeg', '1491025050_lincoln-sitting-room-2008.jpg', '1491025050_CoopOutside2029w.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `landlord`
--

CREATE TABLE IF NOT EXISTS `landlord` (
  `landlordId` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(43) NOT NULL,
  `password` varchar(45) NOT NULL DEFAULT 'changeme',
  `tel` varchar(14) NOT NULL,
  `gender` varchar(6) DEFAULT NULL,
  `idno` varchar(20) DEFAULT NULL,
  `ownership` varchar(30) DEFAULT NULL,
  `profile_image` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`landlordId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `landlord`
--

INSERT INTO `landlord` (`landlordId`, `name`, `email`, `password`, `tel`, `gender`, `idno`, `ownership`, `profile_image`) VALUES
(4, 'Abraham Ogol', 'abramogol@gmail.com', 'e87385f3b131ff2cd207bd28e4215d5e', '0790463533', 'Male', '116636511', NULL, '1491022574_IMG_20161117_163237.jpg'),
(5, 'Alice Maganga', 'alice@gm.vom', 'changeme', '0790463533', NULL, NULL, NULL, NULL),
(6, 'Judy Odhiambo', 'judy@judy.com', 'e87385f3b131ff2cd207bd28e4215d5e', '1234567890', 'Female', '11111111', 'Male', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mpesa`
--

CREATE TABLE IF NOT EXISTS `mpesa` (
  `myid` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) DEFAULT NULL COMMENT 'ID',
  `orig` varchar(30) DEFAULT NULL COMMENT 'Origin',
  `dest` varchar(30) DEFAULT NULL COMMENT 'My MSISDN',
  `tstamp` timestamp NULL DEFAULT NULL COMMENT 'Time',
  `text` text COMMENT 'SMS Text',
  `customer_id` varchar(30) DEFAULT NULL COMMENT 'Customer ID',
  `user` varchar(30) DEFAULT NULL,
  `pass` varbinary(30) DEFAULT NULL,
  `routemethod_id` int(11) DEFAULT NULL,
  `routemethod_name` varchar(30) DEFAULT NULL,
  `mpesa_code` varchar(30) DEFAULT NULL COMMENT 'Code',
  `mpesa_acc` varchar(30) DEFAULT NULL COMMENT 'Account',
  `mpesa_msisdn` varchar(30) DEFAULT NULL COMMENT 'Mobile No',
  `mpesa_trx_date` varchar(30) DEFAULT NULL COMMENT 'Transaction Date',
  `mpesa_trx_time` varchar(30) DEFAULT NULL COMMENT 'Transaction Time',
  `mpesa_amt` varchar(30) NOT NULL COMMENT 'Amount',
  `mpesa_sender` varchar(100) NOT NULL COMMENT 'Name',
  `business_number` varchar(30) DEFAULT NULL COMMENT 'Business Number',
  `created_number` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`myid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `network`
--

CREATE TABLE IF NOT EXISTS `network` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `ip_add` varchar(23) NOT NULL,
  `browser` varchar(32) DEFAULT NULL,
  `session_id` int(4) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `name` varchar(100) DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL,
  `activity` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `network`
--

INSERT INTO `network` (`id`, `ip_add`, `browser`, `session_id`, `date`, `name`, `type`, `activity`) VALUES
(1, '', NULL, 1, '2017-01-20 16:21:39', 'Abraham Ogol', 'Client', 1),
(2, '::1', NULL, 1, '2017-01-20 16:21:39', 'Abraham Ogol', 'Client', 1),
(3, '::1', NULL, 1, '2017-01-20 16:21:39', 'Abraham Ogol', 'Client', 1),
(4, '::1', NULL, 1, '2017-01-20 16:22:46', 'Abraham Ogol', 'Client', 1),
(5, '::1', NULL, 1, '2017-01-21 18:33:26', 'Abraham Ogol', 'Client', 1),
(6, '::1', NULL, 4, '2017-01-20 16:26:33', 'Abraham Ogol', 'Landlord', 0),
(7, '::1', NULL, 1, '2017-01-21 18:33:26', 'Admin Admin', 'Admin', 1),
(8, '::1', NULL, 4, '2017-01-21 06:39:19', 'Abraham Ogol', 'Landlord', 0),
(9, '::1', NULL, 1, '2017-01-21 18:33:26', 'Abraham Ogol', 'Client', 1),
(10, '::1', NULL, 4, '2017-01-21 18:33:44', 'Abraham Ogol', 'Landlord', 0),
(11, '::1', NULL, 1, '2017-01-27 11:32:38', 'Abraham Ogol', 'Client', 1),
(12, '::1', NULL, 1, '2017-01-27 11:32:38', 'Admin Admin', 'Admin', 1),
(13, '::1', NULL, 1, '2017-01-27 11:32:38', 'Abraham Ogol', 'Client', 1),
(14, '::1', NULL, 1, '2017-01-27 11:32:38', 'Admin Admin', 'Admin', 1),
(15, '::1', NULL, 1, '2017-01-27 11:32:38', 'Admin Admin', 'Admin', 1),
(16, '::1', NULL, 1, '2017-01-27 11:32:38', 'Abraham Ogol', 'Client', 1),
(17, '::1', NULL, 4, '2017-01-27 11:32:59', 'Abraham Ogol', 'Landlord', 0),
(18, '::1', NULL, 1, '2017-03-30 14:42:55', 'Admin Admin', 'Admin', 1),
(19, '::1', NULL, 1, '2017-03-30 14:42:55', 'Abraham Ogol', 'Client', 1),
(20, '::1', NULL, 1, '2017-03-30 14:42:55', 'Admin Admin', 'Admin', 1),
(21, '::1', NULL, 1, '2017-03-30 14:42:55', 'Admin Admin', 'Admin', 1),
(22, '::1', NULL, 4, '2017-02-22 06:09:03', 'Abraham Ogol', 'Landlord', 0),
(23, '::1', NULL, 1, '2017-03-30 14:42:55', 'Admin Admin', 'Admin', 1),
(24, '::1', NULL, 4, '2017-03-24 07:52:00', 'Abraham Ogol', 'Landlord', 0),
(25, '::1', NULL, 1, '2017-03-30 14:42:55', 'Admin Admin', 'Admin', 1),
(26, '::1', NULL, 1, '2017-03-30 14:42:55', 'Admin Admin', 'Admin', 1),
(27, '::1', NULL, 1, '2017-03-30 14:42:55', 'Admin Admin', 'Admin', 1),
(28, '::1', NULL, 1, '2017-03-30 14:45:12', 'Abraham Ogol', 'Client', 1),
(29, '::1', NULL, 1, '2017-03-30 14:57:16', 'Abraham Ogol', 'Client', 1),
(30, '::1', NULL, 1, '2017-03-30 14:57:16', 'Abraham Ogol', 'Client', 1),
(31, '::1', NULL, 1, '2017-03-30 14:58:29', 'Abraham Ogol', 'Client', 1),
(32, '::1', NULL, 1, '2017-03-31 18:41:39', 'Abraham Ogol', 'Client', 1),
(33, '::1', NULL, 1, '2017-03-31 18:41:39', 'Admin Admin', 'Admin', 1),
(34, '::1', NULL, 1, '2017-03-31 19:12:48', 'Abraham Ogoll', 'Client', 1),
(35, '::1', NULL, 7, '2017-03-31 20:27:59', 'Cafew Mourice', 'Client', 1),
(36, '::1', NULL, 7, '2017-03-31 20:27:59', 'Cafew Mourice', 'Client', 1),
(37, '::1', NULL, 4, '2017-04-02 07:49:35', 'Abraham Ogol', 'Landlord', 0),
(38, '::1', NULL, 4, '2017-04-02 07:50:47', 'Abraham Ogol', 'Landlord', 0),
(39, '::1', NULL, 1, '2017-04-03 12:33:00', 'Abraham Ogoll', 'Client', 0),
(40, '::1', NULL, 4, '2017-04-05 07:32:22', 'Abraham Ogol', 'Landlord', 0);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset`
--

CREATE TABLE IF NOT EXISTS `password_reset` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sender` varchar(14) NOT NULL,
  `userType` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `password_reset`
--

INSERT INTO `password_reset` (`id`, `date`, `sender`, `userType`) VALUES
(1, '2017-03-24 08:05:40', 'Abraham Ogol', 'Landlord'),
(2, '2017-03-24 08:06:21', 'Abraham Ogol', 'Landlord'),
(3, '2017-03-24 08:15:20', 'Abraham Ogol', 'Landlord'),
(4, '2017-03-24 08:18:08', 'Abraham Ogol', 'Landlord'),
(5, '2017-03-24 08:20:06', 'Abraham Ogol', 'Landlord'),
(6, '2017-03-24 08:21:25', 'Abraham Ogol', 'Landlord'),
(7, '2017-03-24 08:26:49', 'Abraham Ogol', 'Landlord'),
(8, '2017-03-24 08:27:39', 'Abraham Ogol', 'Landlord'),
(9, '2017-03-24 08:28:10', 'Abraham Ogol', 'Landlord'),
(10, '2017-03-24 08:31:18', 'Abraham Ogol', 'Landlord'),
(11, '2017-03-24 08:32:01', 'Abraham Ogol', 'Landlord'),
(12, '2017-03-24 08:36:24', 'Abraham Ogol', 'Landlord'),
(13, '2017-03-24 08:38:32', 'Abraham Ogol', 'Landlord'),
(14, '2017-03-24 08:41:14', 'Abraham Ogol', 'Landlord'),
(15, '2017-03-24 08:47:19', 'Abraham Ogol', 'Landlord'),
(16, '2017-03-25 04:57:07', 'Abraham Ogol', 'Client'),
(17, '2017-03-25 05:01:49', 'Abraham Ogol', 'Landlord'),
(18, '2017-03-25 05:03:56', 'Abraham Ogol', 'Client'),
(19, '2017-03-25 05:05:03', 'Abraham Ogol', 'Client'),
(20, '2017-03-25 05:37:51', 'Abraham Ogol', 'Client'),
(21, '2017-03-25 05:42:04', 'Abraham Ogol', 'Client'),
(22, '2017-03-25 05:43:10', 'Abraham Ogol', 'Client'),
(23, '2017-03-25 05:45:03', 'Abraham Ogol', 'Client'),
(24, '2017-03-25 05:46:39', 'Abraham Ogol', 'Client'),
(25, '2017-03-25 05:47:12', 'Abraham Ogol', 'Client'),
(26, '2017-03-25 05:49:36', 'Abraham Ogol', 'Client');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `transactionId` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `hostelId` int(10) NOT NULL,
  `price_credit` varchar(10) NOT NULL DEFAULT '0',
  `tell` varchar(150) NOT NULL,
  `price_debit` int(10) NOT NULL DEFAULT '0',
  `status` varchar(23) NOT NULL DEFAULT 'uncomplete',
  PRIMARY KEY (`transactionId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`transactionId`, `date`, `hostelId`, `price_credit`, `tell`, `price_debit`, `status`) VALUES
(526931, '2017-03-31 20:13:22', 11, '10000', '079046353', 0, 'uncomplete'),
(897370, '2017-03-31 20:14:02', 1, '10000', '079046353', 0, 'uncomplete'),
(903473, '2017-03-31 06:44:31', 11, '10000', '0790463533', 0, 'uncomplete'),
(931183, '2017-03-30 04:42:40', 11, '10000', '0790463533', 0, 'uncomplete'),
(976563, '2017-04-03 12:33:42', 3, '30000', '0790463533', 0, 'uncomplete');

-- --------------------------------------------------------

--
-- Table structure for table `systemadmin`
--

CREATE TABLE IF NOT EXISTS `systemadmin` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL DEFAULT 'changeme',
  `tel` varchar(14) NOT NULL,
  `nationalId` varchar(10) DEFAULT NULL,
  `sex` varchar(6) DEFAULT NULL,
  `profile_image` varchar(150) DEFAULT 'no_avatar.png',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `systemadmin`
--

INSERT INTO `systemadmin` (`id`, `name`, `email`, `password`, `tel`, `nationalId`, `sex`, `profile_image`) VALUES
(1, 'Admin Admin', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3', '0790463533', '116636511', 'Male', '1484739445_IMG_20150708_135025 - Copy.jpg'),
(2, 'Mercy Muthony', 'marcyikumbi@gmail.com', 'changeme', '0724484862', NULL, NULL, 'no_avatar.png');

-- --------------------------------------------------------

--
-- Table structure for table `views`
--

CREATE TABLE IF NOT EXISTS `views` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `date` timestamp NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `ip_add` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=94 ;

--
-- Dumping data for table `views`
--

INSERT INTO `views` (`id`, `date`, `ip_add`) VALUES
(1, '0000-00-00 00:00:00', '::1'),
(2, '0000-00-00 00:00:00', '::1'),
(3, '0000-00-00 00:00:00', '::1'),
(4, '0000-00-00 00:00:00', '::1'),
(5, '0000-00-00 00:00:00', '::1'),
(6, '0000-00-00 00:00:00', '::1'),
(7, '0000-00-00 00:00:00', '::1'),
(8, '0000-00-00 00:00:00', '::1'),
(9, '0000-00-00 00:00:00', '::1'),
(10, '0000-00-00 00:00:00', '::1'),
(11, '0000-00-00 00:00:00', '::1'),
(12, '0000-00-00 00:00:00', '::1'),
(13, '0000-00-00 00:00:00', '::1'),
(14, '0000-00-00 00:00:00', '::1'),
(15, '0000-00-00 00:00:00', '::1'),
(16, '0000-00-00 00:00:00', '::1'),
(17, '0000-00-00 00:00:00', '::1'),
(18, '0000-00-00 00:00:00', '::1'),
(19, '0000-00-00 00:00:00', '::1'),
(20, '0000-00-00 00:00:00', '::1'),
(21, '0000-00-00 00:00:00', '::1'),
(22, '0000-00-00 00:00:00', '::1'),
(23, '0000-00-00 00:00:00', '::1'),
(24, '0000-00-00 00:00:00', '::1'),
(25, '0000-00-00 00:00:00', '::1'),
(26, '0000-00-00 00:00:00', '::1'),
(27, '0000-00-00 00:00:00', '::1'),
(28, '0000-00-00 00:00:00', '::1'),
(29, '0000-00-00 00:00:00', '::1'),
(30, '0000-00-00 00:00:00', '::1'),
(31, '0000-00-00 00:00:00', '::1'),
(32, '0000-00-00 00:00:00', '::1'),
(33, '0000-00-00 00:00:00', '::1'),
(34, '0000-00-00 00:00:00', '::1'),
(35, '0000-00-00 00:00:00', '::1'),
(36, '0000-00-00 00:00:00', '::1'),
(37, '0000-00-00 00:00:00', '::1'),
(38, '0000-00-00 00:00:00', '::1'),
(39, '0000-00-00 00:00:00', '::1'),
(40, '0000-00-00 00:00:00', '::1'),
(41, '0000-00-00 00:00:00', '::1'),
(42, '0000-00-00 00:00:00', '::1'),
(43, '0000-00-00 00:00:00', '::1'),
(44, '0000-00-00 00:00:00', '::1'),
(45, '0000-00-00 00:00:00', '::1'),
(46, '0000-00-00 00:00:00', '::1'),
(47, '0000-00-00 00:00:00', '::1'),
(48, '0000-00-00 00:00:00', '::1'),
(49, '0000-00-00 00:00:00', '::1'),
(50, '0000-00-00 00:00:00', '::1'),
(51, '0000-00-00 00:00:00', '::1'),
(52, '0000-00-00 00:00:00', '::1'),
(53, '0000-00-00 00:00:00', '::1'),
(54, '0000-00-00 00:00:00', '::1'),
(55, '0000-00-00 00:00:00', '127.0.0.1'),
(56, '0000-00-00 00:00:00', '::1'),
(57, '0000-00-00 00:00:00', '::1'),
(58, '0000-00-00 00:00:00', '::1'),
(59, '0000-00-00 00:00:00', '::1'),
(60, '0000-00-00 00:00:00', '::1'),
(61, '0000-00-00 00:00:00', '::1'),
(62, '0000-00-00 00:00:00', '::1'),
(63, '0000-00-00 00:00:00', '::1'),
(64, '0000-00-00 00:00:00', '::1'),
(65, '0000-00-00 00:00:00', '::1'),
(66, '0000-00-00 00:00:00', '::1'),
(67, '0000-00-00 00:00:00', '::1'),
(68, '0000-00-00 00:00:00', '::1'),
(69, '0000-00-00 00:00:00', '::1'),
(70, '0000-00-00 00:00:00', '::1'),
(71, '0000-00-00 00:00:00', '::1'),
(72, '0000-00-00 00:00:00', '::1'),
(73, '0000-00-00 00:00:00', '::1'),
(74, '0000-00-00 00:00:00', '::1'),
(75, '0000-00-00 00:00:00', '::1'),
(76, '0000-00-00 00:00:00', '::1'),
(77, '0000-00-00 00:00:00', '::1'),
(78, '0000-00-00 00:00:00', '::1'),
(79, '0000-00-00 00:00:00', '::1'),
(80, '0000-00-00 00:00:00', '::1'),
(81, '0000-00-00 00:00:00', '::1'),
(82, '0000-00-00 00:00:00', '::1'),
(83, '0000-00-00 00:00:00', '::1'),
(84, '0000-00-00 00:00:00', '::1'),
(85, '0000-00-00 00:00:00', '::1'),
(86, '0000-00-00 00:00:00', '::1'),
(87, '0000-00-00 00:00:00', '::1'),
(88, '0000-00-00 00:00:00', '::1'),
(89, '0000-00-00 00:00:00', '::1'),
(90, '0000-00-00 00:00:00', '::1'),
(91, '0000-00-00 00:00:00', '::1'),
(92, '0000-00-00 00:00:00', '::1'),
(93, '0000-00-00 00:00:00', '::1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
