-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 22, 2017 at 11:26 AM
-- Server version: 5.1.37
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--
/*CREATE DATABASE `project` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `project`;*/

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `s_no` int(100) NOT NULL AUTO_INCREMENT,
  `admin_id` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  PRIMARY KEY (`s_no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`s_no`, `admin_id`, `pass`) VALUES
(1, 'admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE IF NOT EXISTS `banner` (
  `s_no` int(100) NOT NULL AUTO_INCREMENT,
  `photos` varchar(500) NOT NULL,
  PRIMARY KEY (`s_no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`s_no`, `photos`) VALUES
(25, 'ipad.jpg'),
(26, 'slide-03.jpg'),
(24, 'InnerBanner-Golf.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `s_no` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `pass1` varchar(300) NOT NULL,
  `mobile` varchar(300) NOT NULL,
  `city` varchar(200) NOT NULL,
  `pincode` varchar(200) NOT NULL,
  `picture` varchar(500) NOT NULL,
  `status` int(100) NOT NULL,
  PRIMARY KEY (`s_no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`s_no`, `name`, `gender`, `email`, `pass1`, `mobile`, `city`, `pincode`, `picture`, `status`) VALUES
(53, 'abcd', 'male', 'abcd@gmail.com', '12345', '9540184389', 'New Delhi', '11236', 'thDUCXSBDS.jpg', 1),
(52, 'kamal', 'male', '123@gmail.com', '12345', '8427678575', 'New Delhi', '1123654', '2.jpg', 1),
(51, 'pankaj', 'male', 'abc@gmail.com', '12345', '9540184389', 'New Delhi', '11235', 'IMG_20170208_112233.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE IF NOT EXISTS `review` (
  `s_no` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `reviews` varchar(500) NOT NULL,
  PRIMARY KEY (`s_no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`s_no`, `name`, `mobile`, `email`, `reviews`) VALUES
(3, 'dsanu', '9540184389', 'sbbas@gmail.com', 'askcnsu\r\n'),
(6, 'pankaj', '9540184389', 'asas', 'l,csla,'),
(5, 'pankaj', '8427678575', 'snsb@gmail.com', 'hello.......');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
