-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 18, 2017 at 01:18 PM
-- Server version: 5.1.33
-- PHP Version: 5.2.9-2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `clgtc_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `sno` int(50) NOT NULL AUTO_INCREMENT,
  `Fname` varchar(30) NOT NULL,
  `login` varchar(30) NOT NULL,
  `logout` varchar(30) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`sno`, `Fname`, `login`, `logout`) VALUES
(1, 'rajesh', '03-05-2017 07:32:44p', ''),
(2, 'raj', '03-05-2017 07:38:22pm', '03-05-2017 07:38:25pm'),
(3, 'oouu', '03-05-2017 07:40:41pm', ''),
(4, 'rrrrrr', '03-05-2017 11:15:04pm', ''),
(5, 'rag', '03-05-2017 11:32:47pm', ''),
(6, 'rrk', '04-05-2017 09:00:07am', ''),
(7, 'rajesh', '04-05-2017 09:12:55am', ''),
(8, 'ruthira', '04-05-2017 09:22:31am', ''),
(9, 'renjith', '04-05-2017 09:42:47am', ''),
(10, 'renjith', '04-05-2017 10:02:24am', ''),
(11, 'rajesh', '04-05-2017 10:47:15am', ''),
(12, 'ruthira', '04-05-2017 12:03:11pm', ''),
(13, 'renjith', '04-05-2017 12:11:58pm', ''),
(14, 'rajesh', '04-05-2017 12:13:34pm', ''),
(15, 'ruthira', '04-05-2017 12:18:57pm', ''),
(16, 'ru', '10-05-2017 02:10:09pm', ''),
(17, 'rajesh', '10-05-2017 02:48:07pm', '10-05-2017 02:48:44pm'),
(18, 'ruthira', '10-05-2017 02:50:57pm', ''),
(19, 'rajesh', '10-05-2017 03:25:24pm', ''),
(20, 'rajesh', '15-05-2017 01:53:19pm', ''),
(21, 'rajesh', '17-05-2017 04:13:57pm', ''),
(22, 'ruthira', '18-05-2017 01:20:18pm', '18-05-2017 02:51:05pm');

-- --------------------------------------------------------

--
-- Table structure for table `tc_data`
--

CREATE TABLE IF NOT EXISTS `tc_data` (
  `sno` int(100) NOT NULL AUTO_INCREMENT,
  `regno` varchar(40) NOT NULL,
  `tcno` int(30) NOT NULL,
  `adno` int(30) NOT NULL,
  `sname` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `nat` varchar(20) NOT NULL,
  `rel` varchar(20) NOT NULL,
  `caste` varchar(30) NOT NULL,
  `com` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `gen` varchar(10) NOT NULL,
  `doa` date NOT NULL,
  `sem` varchar(10) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `quali` varchar(20) NOT NULL,
  `ldate` date NOT NULL,
  `tcdate` date NOT NULL,
  `fdate` date NOT NULL,
  PRIMARY KEY (`sno`),
  UNIQUE KEY `regno` (`regno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tc_data`
--

INSERT INTO `tc_data` (`sno`, `regno`, `tcno`, `adno`, `sname`, `fname`, `nat`, `rel`, `caste`, `com`, `dob`, `gen`, `doa`, `sem`, `dept`, `quali`, `ldate`, `tcdate`, `fdate`) VALUES
(1, '732414104051', 8006, 7324, 'R.Rajeshkumar', 'V.Ramapandian', 'INDIAN', 'hindu', 'bc', 'sadhucheti', '1996-05-24', 'MALE', '2014-05-24', 'viii', 'computer science and', 'REFER MARKSHEET', '2017-07-25', '2017-05-28', '2017-10-18'),
(3, '732414104063', 8002, 78, 'sadhik', 'yusufkhan', 'indian', 'muslim', 'bc', 'sadhucheti', '1996-05-24', 'MALE', '0000-00-00', '', '', 'REFER MARKSHEET', '2017-05-24', '0000-00-00', '2017-06-19'),
(4, '732413104001', 8057, 5299, 'ABINAYA M', 'MATHIALAGAN ', 'INDIAN', 'HINDU', 'bc', 'VEERAKODI VELLALAR ', '1994-10-23', 'FEMALE', '2013-08-02', 'VIII', 'ELECTRONICS AND COMMUNICATION ENGINEERING', 'REFER MARKSHEET', '2017-05-03', '2017-05-04', '2017-05-07'),
(5, '732411103326', 8058, 4679, 'SATHISH KUMAR M', 'MANICKAM', 'INDIAN', 'HINDU', 'mbc', 'BOYAR', '1990-07-05', 'MALE', '2012-07-12', 'VIII', 'CIVIL ENGINEERIMG', 'DISCONTINUED', '2015-04-18', '2015-04-27', '2015-04-29'),
(8, '51', 0, 0, '', '', 'INDIAN', '', 'bc', '', '0000-00-00', '', '0000-00-00', 'I', 'COMPUTER SCIENCE AND ENGINEERING', 'DISCONTINUED', '0000-00-00', '0000-00-00', '0000-00-00'),
(9, '732412114049', 7920, 5061, 'NITHUN KUMAR K.P', 'MOHANAN T.K', 'INDIAN', 'HINDU', '', '', '1992-02-08', 'MALE', '2012-08-06', 'VIII', 'MECHANICAL ENGINEERNG', 'REFER MARKSHEET', '2016-04-30', '2016-05-02', '2016-05-02'),
(10, '732416106053', 8319, 6564, 'ARUNRAJ N', 'NAGENDRA GANESH R', 'INDIAN', 'HINDU', 'bc', 'KAMMALAR', '1997-09-14', 'MALE', '2016-08-04', 'I', 'ELECTRONICS AND COMMUNICATION ENGINEERING', 'DISCONTINUED ', '2016-08-06', '2017-03-24', '2017-03-27');
