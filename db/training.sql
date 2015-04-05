-- phpMyAdmin SQL Dump
-- version 4.2.6deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 05, 2015 at 04:36 PM
-- Server version: 5.5.41-0ubuntu0.14.10.1
-- PHP Version: 5.5.12-2ubuntu4.3

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
-- Table structure for table `academicinfo`
--

CREATE TABLE IF NOT EXISTS `academicinfo` (
`id` int(10) NOT NULL,
  `academic` varchar(100) NOT NULL,
  `exam_title` varchar(100) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `institution` varchar(100) NOT NULL,
  `result_type` varchar(20) NOT NULL,
  `result` float NOT NULL,
  `scale` float NOT NULL,
  `year` year(4) NOT NULL,
  `duration` decimal(10,0) NOT NULL,
  `achievement` varchar(200) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `academicinfo`
--

INSERT INTO `academicinfo` (`id`, `academic`, `exam_title`, `subject`, `institution`, `result_type`, `result`, `scale`, `year`, `duration`, `achievement`) VALUES
(1, 'Diploma', 'Computer Engineering', 'Computer', 'Asian University for Women', 'Grade', 3.59, 4, 2006, 4, 'Engineering'),
(2, 'Bachelor/Honors', 'BSC', 'Computer Science & Engineering', 'Daffodil International University', 'Grade', 3.78, 4, 2014, 4, 'Engineering'),
(7, 'Bachelor/Honors', 'BSC', 'Computer Science & Engineering', 'Daffodil International University', 'Grade', 3.78, 4, 2014, 4, 'Engineering'),
(9, 'Bachelor/Honors', 'BSC', 'Computer Science & Engineering', 'Daffodil International University', 'Grade', 3.78, 4, 2014, 4, 'Engineering'),
(10, 'Diploma', 'Computer Engineering', 'Computer', 'Asian University for Women', 'Grade', 3.59, 4, 2007, 4, 'Engineering');

-- --------------------------------------------------------

--
-- Table structure for table `employment`
--

CREATE TABLE IF NOT EXISTS `employment` (
`id` int(10) NOT NULL,
  `com_name` varchar(30) NOT NULL,
  `com_business` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `department` varchar(30) NOT NULL,
  `str_date` date NOT NULL,
  `pre_end` varchar(20) NOT NULL,
  `emp_duration` varchar(10) NOT NULL,
  `responsibility` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `employment`
--

INSERT INTO `employment` (`id`, `com_name`, `com_business`, `address`, `description`, `department`, `str_date`, `pre_end`, `emp_duration`, `responsibility`) VALUES
(1, 'Mohammad Shajedul Hoque', 'HELLO', 'DHaka', 'work', 'IT', '2014-12-12', '2015-12-12', '2', 'IT'),
(3, 'Mohammad Shajedul Hoque', 'HELLO', 'DHaka', 'work', 'IT', '2014-12-12', '2014-12-31', '1', 'IT'),
(4, 'Mohammad Shajedul Hoque', 'HELLO', 'DHaka', 'work', 'IT', '2014-12-12', '2014-12-31', '1', 'IT'),
(5, 'Mohammad Shajedul Hoque', 'HELLO', 'DHaka', 'work', 'IT', '2014-12-12', '2014-12-31', '1', 'IT'),
(6, 'Mohammad Shajedul Hoque', 'HELLO', 'DHaka', 'work', 'IT', '2014-12-12', '2014-12-31', '1', 'IT');

-- --------------------------------------------------------

--
-- Table structure for table `ict`
--

CREATE TABLE IF NOT EXISTS `ict` (
`id` int(10) NOT NULL,
  `exp_category` varchar(50) NOT NULL,
  `skill` varchar(100) NOT NULL,
  `skill_description` varchar(50) NOT NULL,
  `ext_activities` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `ict`
--

INSERT INTO `ict` (`id`, `exp_category`, `skill`, `skill_description`, `ext_activities`) VALUES
(1, 'Computer Engineering', 'JQuery', 'jquery ', 'watching football'),
(2, 'IT/Telecommunication', 'Database', 'MySql, Oracle', 'Playing games'),
(4, 'Computer Engineering', 'Programming', 'c, c++, c#', 'Travelling'),
(7, 'Computer Engineering', 'Programming', 'c, c++, php', 'reading book'),
(8, 'Computer Engineering', 'JQuery', 'jquery ', 'watching football'),
(9, 'IT/Telecommunication', 'Database', 'MySql, Oracle', 'Playing games'),
(10, 'Computer Engineering', 'Programming', 'c, c++, c#', 'Travelling'),
(11, 'Accounting', 'Programming', 'Objective c', 'Travelling');

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE IF NOT EXISTS `information` (
`id` int(10) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `h_phone` varchar(15) NOT NULL,
  `e_contact` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `a_email` varchar(30) NOT NULL,
  `c_location` varchar(20) NOT NULL,
  `p_address` varchar(200) NOT NULL,
  `per_address` varchar(200) NOT NULL,
  `laptop` varchar(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`id`, `mobile`, `h_phone`, `e_contact`, `email`, `a_email`, `c_location`, `p_address`, `per_address`, `laptop`) VALUES
(2, '01921342454', '123456789', '741258963', 'info@bcc.com', 'info@gmail.com', 'Chittagong', 'IDB,dhaka', 'mirpur,dhaka', 'yes'),
(3, '01921342454', '123456789', '741258963', 'info@bcc.com', 'info@gmail.com', 'Khulna', 'IDB,dhaka', 'mirpur,dhaka', 'no'),
(7, '01921342454', '123456789', '741258963', 'info@bcc.com', 'info@gmail.com', 'Sylhet', 'BCC, dhaka.com', 'ctg, bangladesh', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `personalinfo`
--

CREATE TABLE IF NOT EXISTS `personalinfo` (
`id` int(10) NOT NULL,
  `cname` varchar(30) NOT NULL,
  `father` varchar(30) NOT NULL,
  `mother` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `religion` varchar(15) NOT NULL,
  `birth_date` date NOT NULL,
  `nationality` varchar(20) NOT NULL,
  `national_id` varchar(20) NOT NULL,
  `birth_reg` varchar(20) NOT NULL,
  `passport_number` varchar(15) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `personalinfo`
--

INSERT INTO `personalinfo` (`id`, `cname`, `father`, `mother`, `gender`, `religion`, `birth_date`, `nationality`, `national_id`, `birth_reg`, `passport_number`) VALUES
(3, 'Mohammad Osman Goni', 'Mohammad Nurul Hoque', 'Sakina Begum', 'Male', 'Islam', '1982-05-12', 'Bangladeshi', '123456789009876', 'CTG12345678', 'BD088CTG123456'),
(7, 'Mohammad Osman Goni', 'Mohammad Nurul Hoque', 'Sakina Begum', 'Male', 'Islam', '1982-05-12', 'Bangladeshi', '123456789012334', 'CTG12345678', 'BD088CTG123456'),
(8, 'Mohammad Osman Goni', 'Mohammad Nurul Hoque', 'Sakina Begum', 'Male', 'Islam', '1982-05-12', 'Bangladeshi', '123456789012334', 'CTG12345678', 'BD088CTG123456');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE IF NOT EXISTS `photos` (
`id` int(10) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `reference`
--

CREATE TABLE IF NOT EXISTS `reference` (
`id` int(10) NOT NULL,
  `full_name` varchar(30) NOT NULL,
  `organization` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `relation` varchar(30) NOT NULL,
  `phoneo` varchar(15) NOT NULL,
  `phoneh` varchar(15) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `reference`
--

INSERT INTO `reference` (`id`, `full_name`, `organization`, `address`, `relation`, `phoneo`, `phoneh`, `mobile`, `email`) VALUES
(1, 'Shajed', 'DIII', 'dhaka', 'hello', '1234567', '1234589', '01921342454', 'ctgboy2010@gmail.com'),
(3, 'Shajed', 'STD', 'dhaka', 'hello', '1234567', '1234589', '01921342454', 'ctgboy2010@gmail.com'),
(8, 'Shajed', 'STD', 'dhaka', 'hello', '1234567', '1234589', '01921342454', 'ctgboy2010@gmail.com'),
(9, 'Shajed', 'DIII', 'dhaka', 'hello', '1234567', '1234589', '01921342454', 'ctgboy2010@gmail.com'),
(10, 'Shajed', 'STD', 'dhaka', 'hello', '1234567', '1234589', '01921342454', 'ctgboy2010@gmail.com'),
(11, 'Shajed', 'STD', 'dhaka', 'hello', '1234567', '1234589', '01921342454', 'ctgboy2010@gmail.com'),
(12, 'Shajed', 'STD', 'dhaka', 'hello', '1234567', '1234589', '01921342454', 'ctgboy2010@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE IF NOT EXISTS `user_info` (
`id` int(10) NOT NULL,
  `t_tile` varchar(30) NOT NULL,
  `t_desc` varchar(100) NOT NULL,
  `institute` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `t_year` year(4) NOT NULL,
  `duration` int(10) NOT NULL,
  `s_date` date NOT NULL,
  `e_date` date NOT NULL,
  `c_title` varchar(30) NOT NULL,
  `trainer` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `t_tile`, `t_desc`, `institute`, `address`, `t_year`, `duration`, `s_date`, `e_date`, `c_title`, `trainer`) VALUES
(1, 'FTFL', 'First Track Future Leader', 'BCC,Dhaka', 'Agorgoan, BCC,Dhaka', 2015, 120, '2014-12-01', '2014-12-31', 'PHP Laravel', 'Zadid'),
(2, 'Ftfl', 'FTFL', 'BCC', 'dhaka', 2014, 120, '2014-12-01', '2014-02-28', 'PHP', 'zadid'),
(4, 'FTFL', 'First Track Future Leader', 'BCC,Dhaka', 'Agorgoan, BCC,Dhaka', 2014, 120, '2014-12-01', '2014-12-31', 'PHP', 'Zadid'),
(8, 'FTFL', 'First Track Future Leader', 'BCC,Dhaka', 'Agorgoan, BCC,Dhaka', 2014, 120, '2014-12-01', '2014-12-31', 'PHP', 'Zadid'),
(9, 'FTFL', 'First Track Future Leader', 'BCC,Dhaka', 'Agorgoan, BCC,Dhaka', 2015, 120, '2014-12-01', '2014-12-31', 'PHP Laravel', 'Zadid');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academicinfo`
--
ALTER TABLE `academicinfo`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employment`
--
ALTER TABLE `employment`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ict`
--
ALTER TABLE `ict`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `information`
--
ALTER TABLE `information`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personalinfo`
--
ALTER TABLE `personalinfo`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reference`
--
ALTER TABLE `reference`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academicinfo`
--
ALTER TABLE `academicinfo`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `employment`
--
ALTER TABLE `employment`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `ict`
--
ALTER TABLE `ict`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `personalinfo`
--
ALTER TABLE `personalinfo`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `reference`
--
ALTER TABLE `reference`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
