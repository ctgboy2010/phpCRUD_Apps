-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 27, 2014 at 01:00 PM
-- Server version: 5.5.40-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `training`
--

-- --------------------------------------------------------

--
-- Table structure for table `ict`
--

CREATE TABLE IF NOT EXISTS `ict` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `exp_category` varchar(50) NOT NULL,
  `skill` varchar(100) NOT NULL,
  `skill_description` int(11) NOT NULL,
  `ext_activities` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `ict`
--

INSERT INTO `ict` (`id`, `exp_category`, `skill`, `skill_description`, `ext_activities`) VALUES
(1, 'Computer Engineering', 'Programming', 0, 'dfasawf'),
(2, 'IT/Telecommunication', 'Programming', 0, 'hyhyhy'),
(3, 'Computer Engineering', 'Programming', 0, 'hyhyhy');

-- --------------------------------------------------------

--
-- Table structure for table `reference`
--

CREATE TABLE IF NOT EXISTS `reference` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(30) NOT NULL,
  `organization` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `relation` varchar(30) NOT NULL,
  `phoneo` varchar(15) NOT NULL,
  `phoneh` varchar(15) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `reference`
--

INSERT INTO `reference` (`id`, `full_name`, `organization`, `address`, `relation`, `phoneo`, `phoneh`, `mobile`, `email`) VALUES
(1, 'Shajed', 'DIII', 'dhaka', 'hello', '1234567', '1234589', '01921342454', 'ctgboy2010@gmail.com'),
(3, 'Shajed', 'STD', 'dhaka', 'hello', '1234567', '1234589', '01921342454', 'ctgboy2010@gmail.com'),
(7, ';lkfg', 'jkljljkl', 'lkljlk', 'lklkjljl', 'llklljl', 'lkljlk', 'ljlkj', 'lllkl');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE IF NOT EXISTS `user_info` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `t_tile` varchar(30) NOT NULL,
  `t_desc` varchar(100) NOT NULL,
  `institute` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `t_year` year(4) NOT NULL,
  `duration` int(10) NOT NULL,
  `s_date` date NOT NULL,
  `e_date` date NOT NULL,
  `c_title` varchar(30) NOT NULL,
  `trainer` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `t_tile`, `t_desc`, `institute`, `address`, `t_year`, `duration`, `s_date`, `e_date`, `c_title`, `trainer`) VALUES
(1, 'FTFL', 'First Track Future Leader', 'BCC,Dhaka', 'Agorgoan, BCC,Dhaka', 2015, 120, '2014-12-01', '2014-12-31', 'PHP', 'Zadid'),
(2, 'Ftfl', 'ftfl', 'BCC', 'dhaka', 2014, 120, '2014-12-01', '2014-02-28', 'PHP', 'zadid'),
(4, 'FTFL', 'First Track Future Leader', 'BCC,Dhaka', 'Agorgoan, BCC,Dhaka', 2014, 120, '2014-12-01', '2014-12-31', 'PHP', 'Zadid');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
