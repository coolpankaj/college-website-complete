-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 22, 2017 at 11:25 AM
-- Server version: 5.1.37
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `contact`
--
CREATE DATABASE `contact` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `contact`;

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE IF NOT EXISTS `enquiry` (
  `s_no` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `message` varchar(500) NOT NULL,
  PRIMARY KEY (`s_no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`s_no`, `name`, `gender`, `mobile`, `message`) VALUES
(1, 'pankaj', 'male', '123', 'hello,i am Pankaj...'),
(2, 'abc', 'male', '123456', 'aaaabbbbccc'),
(3, 'aaa', '', '456', 'kadachia'),
(4, '', 'female', '', ''),
(5, 'iushfsuih', 'male', '12548', 'kjfbuiew'),
(6, 'pankaj', 'male', '789456123', 'jsdcuns'),
(7, '', 'female', '', ''),
(8, '', 'female', '', ''),
(9, 'scuis', 'male', 'doicnin', 'jhbdchbdcdchicdu'),
(10, '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
