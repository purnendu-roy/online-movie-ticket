-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 06, 2014 at 03:46 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ticket`
--

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE IF NOT EXISTS `log` (
  `name` varchar(20) NOT NULL,
  `pass` varchar(10) NOT NULL,
  `email` varchar(15) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `phone` varchar(10) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`name`, `pass`, `email`, `city`, `state`, `phone`) VALUES
('aayush', '098', 'aayush@yahoo.co', 'ranchi ', 'jharkhand', '7736231234'),
('abhishek', '1234', 'abhi@gmail.com', 'KISHANGANJ', 'BIHAR', '7865432134'),
('punit', 'punit', 'punit@gmail.com', 'lucknow', 'up', '8765543212');

-- --------------------------------------------------------

--
-- Table structure for table `mov`
--

CREATE TABLE IF NOT EXISTS `mov` (
  `mname` varchar(20) NOT NULL,
  `time` varchar(20) DEFAULT NULL,
  `seat` int(5) NOT NULL,
  `price` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mov`
--

INSERT INTO `mov` (`mname`, `time`, `seat`, `price`) VALUES
('chennai express', '8:00-10:00PM', 196, '250'),
('chennai express', '5:30-7:30PM', 197, '250'),
('chennai express', '2:30-4:30PM', 200, '250'),
('Himmatwala', '2:30-4:30PM', 200, '250'),
('Himmatwala', '5:30-7:30PM', 199, '250'),
('Himmatwala', '8:00-10:00PM', 200, '250'),
('Himmatwala', '10:00-12:00AM', 199, '250'),
('Ghanchakkar', '2:30-4:30PM', 200, '250'),
('Ghanchakkar', '5:30-7:30PM', 199, '250'),
('Ghanchakkar', '8:00-10:00PM', 200, '250'),
('Ghanchakkar', '10:00-12:00AM', 199, '250'),
('ek', '2:30-4:30PM', 200, '250'),
('ek', '5:30-7:30PM', 196, '250'),
('ek', '8:00-10:00PM', 197, '250'),
('ek', '10:00-12:00AM', 200, '250'),
('chennai express', '10:00-12:00AM', 191, '250');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
