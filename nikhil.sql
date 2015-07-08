-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2015 at 11:14 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nikhil`
--

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
`uid` int(11) NOT NULL,
  `username` varchar(11) NOT NULL,
  `email` varchar(11) NOT NULL,
  `password` varchar(11) NOT NULL,
  `status` varchar(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`uid`, `username`, `email`, `password`, `status`) VALUES
(1, 'kishlay@gma', '12345', 'hjhhhh@gmil', 'P'),
(2, '', '', '', 'P'),
(3, 'atul@gmail.', '12345', 'nn@gmail.bb', 'P'),
(4, 'hhghh', '12345', 'atul@gmail.', 'P'),
(8, 'nikhil', 'nikhil@gmai', 'nikhil', 'P'),
(9, 'atul', 'atul@gmail.', 'atul', 'P'),
(10, 'kanish', 'kanish@gmai', 'kanish', 'P');

-- --------------------------------------------------------

--
-- Table structure for table `wildmember`
--

CREATE TABLE IF NOT EXISTS `wildmember` (
`uid` int(33) NOT NULL,
  `username` varchar(33) NOT NULL,
  `email-id` varchar(33) NOT NULL,
  `password` varchar(33) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wildmember`
--

INSERT INTO `wildmember` (`uid`, `username`, `email-id`, `password`) VALUES
(1, '', '', ''),
(2, '', '', ''),
(3, '', '', ''),
(4, '', '', ''),
(5, 'ggjhg', 'nijkj@gmail.com', 'gfdgdgfdgd'),
(6, 'nikhil', 'atul@gmail.com', 'hfggfgffgh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member`
--
ALTER TABLE `member`
 ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `wildmember`
--
ALTER TABLE `wildmember`
 ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `wildmember`
--
ALTER TABLE `wildmember`
MODIFY `uid` int(33) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
