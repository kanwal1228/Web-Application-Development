-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 07, 2014 at 03:03 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `school_database`
--
CREATE DATABASE IF NOT EXISTS `school_database` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `school_database`;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_Num` varchar(25) NOT NULL,
  `course_Desc` varchar(255) NOT NULL,
  `credit_Hours` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_Num`, `course_Desc`,`credit_Hours`) VALUES
(1, 'CS-442', 'Mobile Application Development',3),
(2, 'CS-542', 'Computer Networks I',3),
(3, 'CS-544', 'Computer Networks II',3),
(4, 'CS-553', 'Cloud Computing',3),
(5, 'CS-551', 'Software Project Management',3);
-- --------------------------------------------------------

--
-- Table structure for table `course_reg`
--

CREATE TABLE IF NOT EXISTS `course_reg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course` varchar(25) NOT NULL,
  `username` varchar(100) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(100) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(300) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `email`, `password`) VALUES
('admin', 'admin@iit.edu', 'admin'),
('user1', 'user1@iit.edu', 'user1'),
('user2', 'user2@iit.edu', 'user2'),
('user3', 'user3@iit.edu', 'user3');

-- ----------------------------------------------------------
-- table to store site name and subtitle

CREATE TABLE IF NOT EXISTS `sitedetail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sitename` varchar(40) NOT NULL,
  `subtitle` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table sitename
-- 

INSERT INTO `sitedetail` (`sitename`, `subtitle`) VALUES
('Blackboard', 'Welcome to the blackboard');


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
