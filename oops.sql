-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 10, 2022 at 03:21 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oops`
--

-- --------------------------------------------------------

--
-- Table structure for table `school_classes`
--

DROP TABLE IF EXISTS `school_classes`;
CREATE TABLE IF NOT EXISTS `school_classes` (
  `school_class_id` int(11) NOT NULL AUTO_INCREMENT,
  `school_class_name` varchar(100) NOT NULL,
  `school_section_id` int(11) NOT NULL,
  PRIMARY KEY (`school_class_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `school_section`
--

DROP TABLE IF EXISTS `school_section`;
CREATE TABLE IF NOT EXISTS `school_section` (
  `school_section_id` int(11) NOT NULL AUTO_INCREMENT,
  `school_section_type` varchar(100) NOT NULL,
  PRIMARY KEY (`school_section_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_section`
--

INSERT INTO `school_section` (`school_section_id`, `school_section_type`) VALUES
(1, 'pre-primary'),
(2, 'primary'),
(3, 'middle'),
(4, 'higher'),
(5, 'higher secondry');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_listing`
--

DROP TABLE IF EXISTS `vehicle_listing`;
CREATE TABLE IF NOT EXISTS `vehicle_listing` (
  `vehicle_id` int(11) NOT NULL AUTO_INCREMENT,
  `vehicle_name` varchar(255) NOT NULL,
  `vehicle_modal_year` int(11) NOT NULL,
  `vehicle_seating_capacity` int(11) NOT NULL,
  `vehicle_type_listing_id` int(11) NOT NULL,
  PRIMARY KEY (`vehicle_id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle_listing`
--

INSERT INTO `vehicle_listing` (`vehicle_id`, `vehicle_name`, `vehicle_modal_year`, `vehicle_seating_capacity`, `vehicle_type_listing_id`) VALUES
(1, 'pulsar', 2001, 2, 1),
(2, 'discover', 2002, 2, 1),
(3, 'thunderbird', 2005, 2, 1),
(4, 'apache', 2006, 2, 1),
(5, 'platina', 2009, 2, 1),
(6, 'passion', 2004, 2, 1),
(7, 'activa', 2001, 2, 2),
(8, 'meastro', 2002, 2, 2),
(9, 'scooty', 2006, 2, 2),
(10, 'jupiter', 2009, 2, 2),
(11, 'baleno', 2017, 5, 6),
(12, 'swift', 2015, 5, 6),
(13, 'i20', 2015, 5, 6),
(14, 'nexon', 2018, 5, 6),
(15, 'ciaz', 2020, 5, 5),
(16, 'verna', 2015, 5, 5),
(17, 'xcent', 2015, 5, 5),
(18, 'amaze', 2016, 5, 5),
(19, 'dezire', 2014, 5, 5),
(20, 'zest', 2014, 5, 5),
(21, 'scropio', 2014, 7, 7),
(22, 'xuv500', 2011, 8, 7),
(23, 'safari', 2011, 8, 7),
(24, 'fortuner', 2009, 7, 7),
(25, 'gurukha', 5011, 8, 9),
(26, 'thar', 2008, 7, 9),
(27, 'bolero', 2001, 8, 9);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_types`
--

DROP TABLE IF EXISTS `vehicle_types`;
CREATE TABLE IF NOT EXISTS `vehicle_types` (
  `vehicle_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `vehicle_type` varchar(100) NOT NULL,
  PRIMARY KEY (`vehicle_type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle_types`
--

INSERT INTO `vehicle_types` (`vehicle_type_id`, `vehicle_type`) VALUES
(1, '2 wheeler'),
(3, '4 wheeler');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_type_listing`
--

DROP TABLE IF EXISTS `vehicle_type_listing`;
CREATE TABLE IF NOT EXISTS `vehicle_type_listing` (
  `vehicle_type_listing_id` int(11) NOT NULL AUTO_INCREMENT,
  `vehicle_type_id` int(11) NOT NULL,
  `vehicle_listing_name` varchar(255) NOT NULL,
  PRIMARY KEY (`vehicle_type_listing_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle_type_listing`
--

INSERT INTO `vehicle_type_listing` (`vehicle_type_listing_id`, `vehicle_type_id`, `vehicle_listing_name`) VALUES
(1, 1, 'bikes'),
(2, 1, 'moped'),
(6, 3, 'hatchback'),
(5, 3, 'sedan'),
(7, 3, 'suv'),
(9, 3, 'off-roading');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
