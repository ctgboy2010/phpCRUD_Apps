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
-- Database: `personal_info`
--

-- --------------------------------------------------------

--
-- Table structure for table `personalinfo`
--

CREATE TABLE IF NOT EXISTS `personalinfo` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `cname` varchar(30) NOT NULL,
  `father` varchar(30) NOT NULL,
  `mother` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `religion` varchar(15) NOT NULL,
  `birth_date` date NOT NULL,
  `nationality` varchar(20) NOT NULL,
  `national_id` varchar(20) NOT NULL,
  `birth_reg` varchar(20) NOT NULL,
  `passport_number` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `personalinfo`
--

INSERT INTO `personalinfo` (`id`, `cname`, `father`, `mother`, `gender`, `religion`, `birth_date`, `nationality`, `national_id`, `birth_reg`, `passport_number`) VALUES
(12, 'Mohammad Osman Goni', 'Mohammad Nurul Hoque', 'Sakina Begum', 'Male', 'Islam', '1982-05-12', 'Bangladeshi', '123456789012334', 'CTG12345678', 'BD088CTG123456'),
(17, 'Mohammad Osman Goni', 'Mohammad Nurul Hoque', 'Sakina Begum', 'Male', 'Islam', '1982-05-12', 'Bangladeshi', '123456789012334', 'CTG12345678', 'BD088CTG123456'),
(18, 'Mohammad Osman Goni', 'Mohammad Nurul Hoque', 'Sakina Begum', 'Male', 'Islam', '1982-05-12', 'Bangladeshi', '123456789012334', 'CTG12345678', 'BD088CTG123456'),
(19, 'adfl', 'kjlk', 'jkljkl', 'Female', 'Hinduism', '0000-00-00', 'hjkhjk', 'hjkh', 'jkh', 'jkhjk');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
