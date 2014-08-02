-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 02, 2014 at 05:42 PM
-- Server version: 5.5.37
-- PHP Version: 5.3.10-1ubuntu3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `Yaadein`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `comment` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `email`, `comment`) VALUES
('Deepak', 'deeky.sharma@gmail.com', 'Hello'),
('Deepak', 'deeky.sharma@gmail.com', 'dd');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `email_verification_code` varchar(55) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `password` varchar(128) NOT NULL,
  `active_status` varchar(2) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `email`, `email_verification_code`, `password`, `active_status`) VALUES
(14, 'Deepak', 'deeky.sharma@gmail.com', 'LTZ9dA50fLt2zQMpfNTT', 'b45cfe2dccca8876162cf79919c9540e8b96fa9f', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(128) NOT NULL,
  `middlename` varchar(128) NOT NULL,
  `lastname` varchar(128) NOT NULL,
  `fatherprefix` varchar(50) NOT NULL,
  `fatherfirstname` varchar(128) NOT NULL,
  `fathermiddlename` varchar(128) NOT NULL,
  `fatherlastname` varchar(128) NOT NULL,
  `motherprefix` varchar(50) NOT NULL,
  `motherfirstname` varchar(128) NOT NULL,
  `mothermiddlename` varchar(128) NOT NULL,
  `motherlastname` varchar(128) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `dob` text NOT NULL,
  `email` varchar(128) NOT NULL,
  `mobile` varchar(40) NOT NULL,
  `postalcode` int(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `classrollno` int(20) NOT NULL,
  `universityrollno` int(20) NOT NULL,
  `comment` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `firstname`, `middlename`, `lastname`, `fatherprefix`, `fatherfirstname`, `fathermiddlename`, `fatherlastname`, `motherprefix`, `motherfirstname`, `mothermiddlename`, `motherlastname`, `gender`, `dob`, `email`, `mobile`, `postalcode`, `address`, `photo`, `branch`, `classrollno`, `universityrollno`, `comment`) VALUES
(38, '', '', '', '0', '', '', '', '0', '', '', '', '', '', '', '', 0, '', 'gne2.jpg', '0', 0, 0, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
