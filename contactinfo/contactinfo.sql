-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 27, 2014 at 04:22 PM
-- Server version: 5.5.40-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `contactinfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE IF NOT EXISTS `information` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `mobile` varchar(15) NOT NULL,
  `h_phone` varchar(15) NOT NULL,
  `e_contact` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `a_email` varchar(30) NOT NULL,
  `c_location` varchar(20) NOT NULL,
  `p_address` varchar(200) NOT NULL,
  `per_address` varchar(200) NOT NULL,
  `laptop` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`id`, `mobile`, `h_phone`, `e_contact`, `email`, `a_email`, `c_location`, `p_address`, `per_address`, `laptop`) VALUES
(2, '01921342454', '123456789', '741258963', 'info@bcc.com', 'info@gmail.com', 'Khulna', 'IDB,dhaka', 'mirpur,dhaka', 'yes'),
(3, '01921342454', '123456789', '741258963', 'info@bcc.com', 'info@gmail.com', 'Chittagong', 'IDB,dhaka', 'mirpur,dhaka', 'no'),
(7, '01921342454', '123456789', '741258963', 'info@bcc.com', 'info@gmail.com', 'Sylhet', 'BCC, dhaka.com', 'ctg, bangladesh', 'yes'),
(8, '01921342454', '123456789', '741258963', 'info@bcc.com', 'info@gmail.com', 'Chittagong', 'IDB,dhaka', 'mirpur,dhaka', 'yes'),
(11, '01921342454', '01816436853', '01672276102', 'ctgboy2010@gmail.com', 'shajed@yahoo.com', 'Dhaka', 'mirpur10', 'CTG', 'no');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
