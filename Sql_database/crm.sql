-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2015 at 06:54 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `crm`
--
CREATE DATABASE IF NOT EXISTS `crm` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `crm`;

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE IF NOT EXISTS `form` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(10) DEFAULT NULL,
  `user_name` varchar(15) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `mobile_other` varchar(20) DEFAULT NULL,
  `tele` varchar(20) DEFAULT NULL,
  `location` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `time_stamp` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=85 ;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`user_id`, `emp_id`, `user_name`, `mobile`, `mobile_other`, `tele`, `location`, `email`, `time_stamp`) VALUES
(83, 1, 'zohairhemani', '2353-25-23-523', '2352-35-23-523', '235-32523532', 'Afshan Apartments', 'zohairhemani', '2015-02-22 03:56:12');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `emp_id` int(10) NOT NULL AUTO_INCREMENT,
  `user` varchar(15) DEFAULT NULL,
  `password` varchar(25) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `cookie` int(30) DEFAULT NULL,
  `time_stamp` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`emp_id`, `user`, `password`, `email`, `cookie`, `time_stamp`) VALUES
(1, 'arbish', 'torpedo1', 'arbishpalla@yahoo.co', NULL, '2015-02-19 07:34:23');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE IF NOT EXISTS `package` (
  `package_id` int(11) NOT NULL AUTO_INCREMENT,
  `package_name` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`package_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`package_id`, `package_name`) VALUES
(1, 'Hajj Package'),
(2, 'Umrah Package'),
(3, 'Malaysia'),
(4, 'Dubai'),
(31, '$package_name'),
(32, 'A SLK '),
(33, 'LAM'),
(34, 'not');

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE IF NOT EXISTS `query` (
  `user_id` int(11) DEFAULT NULL,
  `emp_id` int(11) DEFAULT NULL,
  `package_id` int(11) DEFAULT NULL,
  `time_stamp` varchar(30) DEFAULT NULL,
  `description` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`user_id`, `emp_id`, `package_id`, `time_stamp`, `description`) VALUES
(83, 1, 3, '2015-02-22 03:56:12', ''),
(84, 1, 0, '2015-02-22 07:04:58', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
