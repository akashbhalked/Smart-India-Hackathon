-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 02, 2017 at 02:40 PM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sih`
--

-- --------------------------------------------------------

--
-- Table structure for table `badmin`
--

CREATE TABLE IF NOT EXISTS `badmin` (
  `uid` int(10) NOT NULL AUTO_INCREMENT,
  `empid` varchar(20) NOT NULL,
  `empname` varchar(20) NOT NULL,
  `emailid` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `mob` bigint(10) NOT NULL,
  `poss` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `verify` int(1) NOT NULL DEFAULT '0',
  `block` int(1) NOT NULL DEFAULT '0',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `OTP` bigint(4) NOT NULL DEFAULT '-1',
  PRIMARY KEY (`uid`),
  UNIQUE KEY `emailid` (`emailid`),
  UNIQUE KEY `mob` (`mob`),
  UNIQUE KEY `empid` (`empid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `badmin`
--

INSERT INTO `badmin` (`uid`, `empid`, `empname`, `emailid`, `password`, `mob`, `poss`, `dob`, `verify`, `block`, `timestamp`, `OTP`) VALUES
(1, 'admin', 'Administrator', '1406083@kiit.ac.in', '4d6341896a313c02d55a86eaaa8126b4', 9876543210, 'Admin', '2017-04-12', 1, 0, '2017-04-18 18:34:14', 3106);

-- --------------------------------------------------------

--
-- Table structure for table `bemp_registration`
--

CREATE TABLE IF NOT EXISTS `bemp_registration` (
  `uid` int(10) NOT NULL AUTO_INCREMENT,
  `empid` varchar(20) NOT NULL,
  `empname` varchar(20) NOT NULL,
  `emailid` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `mob` bigint(10) NOT NULL,
  `poss` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `verify` int(1) NOT NULL DEFAULT '0',
  `block` int(1) NOT NULL DEFAULT '0',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `OTP` bigint(4) NOT NULL DEFAULT '-1',
  `tablename` varchar(1) NOT NULL DEFAULT 'b',
  PRIMARY KEY (`uid`),
  UNIQUE KEY `emailid` (`emailid`),
  UNIQUE KEY `mob` (`mob`),
  UNIQUE KEY `empid` (`empid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `bemp_registration`
--

INSERT INTO `bemp_registration` (`uid`, `empid`, `empname`, `emailid`, `password`, `mob`, `poss`, `dob`, `verify`, `block`, `timestamp`, `OTP`, `tablename`) VALUES
(2, 'jaiswaladesh', 'Adesh Jaiswal', 'jaiswaladesh', '123', 9876543210, 'Manager', '2017-04-11', 1, 0, '2017-04-02 09:35:58', -1, 'b'),
(3, 'kanodiaanshul', 'Anshul Kanodia', 'anshul.kanodia24@hmail.com', '123', 9876543211, 'Manager', '2017-04-11', 0, 0, '2017-04-02 06:28:12', -1, 'b'),
(4, '89689', 'Sadj snasjkl', 'ans@gma.com', '88ca80df2d72dbebcef83a756c323da1', 2352353452, 'fru', '2017-04-01', 1, 0, '2017-04-02 09:36:42', -1, 'b'),
(5, 'jas', 'adesh JAISWAL', 'jaiswaladesh@gmail.com', 'ebdb117bd8ddada82523601cf77b8ac2', 9876543299, 'Manager', '0000-00-00', 1, 0, '2017-04-18 15:56:07', -1, 'b');

-- --------------------------------------------------------

--
-- Table structure for table `chat_users`
--

CREATE TABLE IF NOT EXISTS `chat_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `chat_users`
--

INSERT INTO `chat_users` (`id`, `username`) VALUES
(1, 'Sayan'),
(2, 'Anshul'),
(3, '123rishabh');

-- --------------------------------------------------------

--
-- Table structure for table `conversation`
--

CREATE TABLE IF NOT EXISTS `conversation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_one` int(11) NOT NULL,
  `user_two` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `conversation`
--

INSERT INTO `conversation` (`id`, `user_one`, `user_two`) VALUES
(1, 2, 2),
(2, 2, 3),
(3, 2, 1),
(4, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE IF NOT EXISTS `invoice` (
  `iid` int(10) NOT NULL AUTO_INCREMENT,
  `rrnum` int(10) NOT NULL,
  `box` varchar(8) NOT NULL,
  `wtype` varchar(8) NOT NULL,
  `a` int(5) NOT NULL DEFAULT '0',
  `b` int(5) NOT NULL DEFAULT '0',
  `c` int(5) NOT NULL DEFAULT '0',
  `d` int(5) NOT NULL DEFAULT '0',
  `e` int(5) NOT NULL DEFAULT '0',
  `f` int(5) NOT NULL DEFAULT '0',
  `g` int(5) NOT NULL DEFAULT '0',
  `h` int(5) NOT NULL DEFAULT '0',
  `i` int(5) NOT NULL DEFAULT '0',
  `j` int(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`iid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`iid`, `rrnum`, `box`, `wtype`, `a`, `b`, `c`, `d`, `e`, `f`, `g`, `h`, `i`, `j`) VALUES
(1, 455, 'BOX', 'NW', 1, 1, 11, 11, 11, 11, 1, 11, 1, 11),
(2, 455, 'BOX', 'NW', 2, 22, 2, 22, 2, 22, 2, 22, 2, 2),
(3, 455, 'BOX', 'NW', 3, 3, 3, 33, 3, 3, 3, 3, 33, 3),
(4, 456, 'BOX', 'NW', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(5, 456, 'BOX', 'NW', 2, 2, 2, 2, 223, 23, 2, 22, 2, 2),
(6, 98, 'BOX', 'NW', 1, 2, 3, 34, 346, 43, 654, 6, 3, 2),
(7, 98, 'BOX', 'NW', 233, 34, 3, 43, 46, 456, 5, 0, 45, 345),
(8, 0, 'BOX', 'NW', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, 0, 'BOX', 'NW', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(10, 24, 'BOX', 'NW', 134, 34, 456, 456, 34, 45, 45, 345, 4, 123),
(11, 24, 'BOX', 'NW', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(12, 455, 'BOX', 'NW', 12, 34, 34, 34, 56, 345, 345, 345, 345, 3),
(13, 111, 'BOX', 'NW', 11, 123, 23, 34, 2, 234, 234, 345, 345, 345),
(14, 111, 'BOX', 'NW', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `conversation_id` int(11) NOT NULL,
  `user_from` int(11) NOT NULL,
  `user_to` int(11) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `conversation_id`, `user_from`, `user_to`, `message`) VALUES
(1, 1, 2, 2, 'hi'),
(2, 1, 2, 2, 'hello adesh'),
(3, 3, 2, 1, 'SDasd'),
(4, 2, 3, 2, 'as'),
(5, 2, 3, 2, 'abcde');

-- --------------------------------------------------------

--
-- Table structure for table `radmin`
--

CREATE TABLE IF NOT EXISTS `radmin` (
  `uid` int(10) NOT NULL AUTO_INCREMENT,
  `empid` varchar(20) NOT NULL,
  `empname` varchar(20) NOT NULL,
  `emailid` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `mob` bigint(10) NOT NULL,
  `poss` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `verify` int(1) NOT NULL DEFAULT '0',
  `block` int(1) NOT NULL DEFAULT '0',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `OTP` bigint(4) NOT NULL DEFAULT '-1',
  PRIMARY KEY (`uid`),
  UNIQUE KEY `emailid` (`emailid`),
  UNIQUE KEY `mob` (`mob`),
  UNIQUE KEY `empid` (`empid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `radmin`
--

INSERT INTO `radmin` (`uid`, `empid`, `empname`, `emailid`, `password`, `mob`, `poss`, `dob`, `verify`, `block`, `timestamp`, `OTP`) VALUES
(1, 'admin', 'Administrator', '1406083@kiit.ac.in', '4d6341896a313c02d55a86eaaa8126b4', 8212345671, 'Admin', '2017-04-12', 1, 0, '2017-04-18 18:50:07', 2482);

-- --------------------------------------------------------

--
-- Table structure for table `reciept`
--

CREATE TABLE IF NOT EXISTS `reciept` (
  `rid` int(10) NOT NULL AUTO_INCREMENT,
  `rrnum` int(10) NOT NULL,
  `rrdate` date NOT NULL,
  `type1` varchar(25) NOT NULL,
  `type2` varchar(8) NOT NULL,
  `frnnum` int(15) NOT NULL,
  `invdate` date NOT NULL,
  `invnum` int(10) NOT NULL,
  `zonecode` varchar(5) NOT NULL,
  `RiskRate` varchar(2) DEFAULT NULL,
  `handledBy` varchar(1) DEFAULT NULL,
  `rateType` varchar(2) DEFAULT NULL,
  `CHRG` int(6) NOT NULL,
  `charDist` int(6) NOT NULL,
  `rate` int(4) NOT NULL,
  `charVia` varchar(100) NOT NULL,
  `from` varchar(150) NOT NULL,
  `fromStationCode` varchar(5) NOT NULL,
  `to` varchar(150) NOT NULL,
  `toStationCode` varchar(5) NOT NULL,
  `sendName` varchar(100) NOT NULL,
  `sendAdd` varchar(100) NOT NULL,
  `congName` varchar(100) NOT NULL,
  `congAdd` varchar(100) NOT NULL,
  `commCode` int(9) NOT NULL,
  `Artnum` int(3) DEFAULT '0',
  `packCode` int(3) NOT NULL,
  `actWt` int(10) NOT NULL,
  `overWt` int(10) NOT NULL,
  `charRate` int(5) NOT NULL,
  `otherChar` int(10) NOT NULL DEFAULT '0',
  `rebate` int(10) NOT NULL DEFAULT '0',
  `paidOnChar` int(10) NOT NULL DEFAULT '0',
  `underChar` int(10) NOT NULL DEFAULT '0',
  `OverChar` int(10) NOT NULL DEFAULT '0',
  `remark` varchar(150) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `byemp` varchar(30) NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `reciept`
--

INSERT INTO `reciept` (`rid`, `rrnum`, `rrdate`, `type1`, `type2`, `frnnum`, `invdate`, `invnum`, `zonecode`, `RiskRate`, `handledBy`, `rateType`, `CHRG`, `charDist`, `rate`, `charVia`, `from`, `fromStationCode`, `to`, `toStationCode`, `sendName`, `sendAdd`, `congName`, `congAdd`, `commCode`, `Artnum`, `packCode`, `actWt`, `overWt`, `charRate`, `otherChar`, `rebate`, `paidOnChar`, `underChar`, `OverChar`, `remark`, `status`, `byemp`) VALUES
(1, 455, '0000-00-01', 'Paid', 'Local', 564, '0000-00-00', 56, '6754', 'OR', '5', '66', 0, 7655, 6765, '765', '67', '8', '57', '56', '56', '5656', '56', '56', 5456, 5456, 5, 654, 565, 65, 56, 56, 56, 5456, 56, '5', 1, 'adesh JAISWAL'),
(2, 456, '0000-00-02', 'Paid', 'Local', 564, '0000-00-00', 56, '6754', 'OR', '5', '66', 0, 7655, 6765, '765', '67', '8', '57', '56', '56', '5656', '56', '56', 5456, 5456, 5, 654, 565, 65, 56, 56, 56, 5456, 56, '5', -1, 'adesh JAISWAL'),
(3, 98, '0000-00-00', 'Paid', 'Local', 34, '0000-00-00', 3, '', 'OR', '3', '34', 3, 3, 3, '33', '3', '3', '3', '343', '', '33', '3', '3', 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, '34', 0, '0');

-- --------------------------------------------------------

--
-- Table structure for table `remp_registration`
--

CREATE TABLE IF NOT EXISTS `remp_registration` (
  `uid` int(10) NOT NULL AUTO_INCREMENT,
  `empid` varchar(20) NOT NULL,
  `empname` varchar(20) NOT NULL,
  `emailid` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `mob` bigint(10) NOT NULL,
  `poss` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `verify` int(1) NOT NULL DEFAULT '0',
  `block` int(1) NOT NULL DEFAULT '0',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `OTP` bigint(4) NOT NULL DEFAULT '-1',
  `tablename` varchar(1) NOT NULL DEFAULT 'r',
  PRIMARY KEY (`uid`),
  UNIQUE KEY `emailid` (`emailid`),
  UNIQUE KEY `mob` (`mob`),
  UNIQUE KEY `empid` (`empid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `remp_registration`
--

INSERT INTO `remp_registration` (`uid`, `empid`, `empname`, `emailid`, `password`, `mob`, `poss`, `dob`, `verify`, `block`, `timestamp`, `OTP`, `tablename`) VALUES
(1, 'mayankdubey', 'Mayank Dubey', 'mayankdubey@gmail.com', '123', 9876543212, 'Staff', '2017-04-11', 0, 0, '2017-04-02 06:30:43', -1, 'r'),
(2, 'rishabsharma', 'Rishab Sharma', 'rishabsharma@gmail.com', '123', 9876543215, 'staff', '2017-04-03', 0, 0, '2017-04-02 06:30:43', -1, 'r'),
(3, 'Sayan', 'sayan ', 'gsjd@k.com', '3b6ac8405b0af0af23e3f7f56f1b4d5d', 1222222222, 'qefeqf', '0000-00-00', 0, 0, '2017-04-02 09:20:52', -1, 'r'),
(4, '123rishabh', 'Rishabh Sharma', 'rishabhrajshrm00@gmail.com', '8dd43ae0638e1ce2690e2e3cfa653923', 9078673199, 'ceo', '2017-04-14', 1, 0, '2017-04-18 18:39:07', -1, 'r');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
