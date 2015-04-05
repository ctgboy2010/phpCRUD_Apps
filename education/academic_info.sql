-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 27, 2014 at 04:23 PM
-- Server version: 5.5.40-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `academic_info`
--

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE IF NOT EXISTS `information` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `academic` varchar(100) NOT NULL,
  `exam_title` varchar(100) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `institution` varchar(100) NOT NULL,
  `result_type` varchar(20) NOT NULL,
  `result` float NOT NULL,
  `scale` float NOT NULL,
  `year` year(4) NOT NULL,
  `duration` decimal(10,0) NOT NULL,
  `achievement` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`id`, `academic`, `exam_title`, `subject`, `institution`, `result_type`, `result`, `scale`, `year`, `duration`, `achievement`) VALUES
(1, 'Diploma', 'Computer Engineering', 'Computer', 'Asian University for Women', 'Grade', 3.59, 4, 2007, 4, 'Engineering'),
(2, 'Bachelor/Honors', 'BSC', 'Computer Science & Engineering', 'Daffodil International University', 'Grade', 3.78, 4, 2014, 4, 'Engineering'),
(7, 'Bachelor/Honors', 'BSC', 'Computer Science & Engineering', 'Daffodil International University', 'Grade', 3.78, 4, 2014, 4, 'Engineering'),
(9, 'Bachelor/Honors', 'BSC', 'Computer Science & Engineering', 'Daffodil International University', 'Grade', 3.78, 4, 2014, 4, 'Engineering'),
(10, 'Diploma', 'Computer Engineering', 'Computer', 'Asian University for Women', 'Grade', 3.59, 4, 2007, 4, 'Engineering'),
(11, 'Diploma', 'Computer Engineering', 'Computer', 'Asian University for Women', 'Grade', 3.59, 4, 2007, 4, 'Engineering');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
