-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2016 at 11:14 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `swapmybook`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookstransaction`
--

CREATE TABLE IF NOT EXISTS `bookstransaction` (
  `transactionId` int(11) NOT NULL AUTO_INCREMENT,
  `bookId` int(11) NOT NULL,
  `nameOfBook` int(11) NOT NULL,
  `publisher` text NOT NULL,
  `dateSwapped` date NOT NULL,
  `swappedWith` text NOT NULL,
  PRIMARY KEY (`transactionId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `donatebook`
--

CREATE TABLE IF NOT EXISTS `donatebook` (
  `donateBookId` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) NOT NULL,
  `donateBookName` text NOT NULL,
  `donateBookAuthor` text NOT NULL,
  `dateDonated` date NOT NULL,
  PRIMARY KEY (`donateBookId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `donatebook`
--

INSERT INTO `donatebook` (`donateBookId`, `userId`, `donateBookName`, `donateBookAuthor`, `dateDonated`) VALUES
(1, 3, 'Physics', 'Anyakhoha', '2019-11-16');

-- --------------------------------------------------------

--
-- Table structure for table `requestedbooks`
--

CREATE TABLE IF NOT EXISTS `requestedbooks` (
  `requestId` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) NOT NULL,
  `nameOfBook` text NOT NULL,
  `author` text NOT NULL,
  `dateRequested` date NOT NULL,
  PRIMARY KEY (`requestId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `requestedbooks`
--

INSERT INTO `requestedbooks` (`requestId`, `userId`, `nameOfBook`, `author`, `dateRequested`) VALUES
(1, 3, 'Mathematics', 'Jibril', '2019-11-16'),
(2, 4, 'Geography', 'Gankon', '2019-11-16');

-- --------------------------------------------------------

--
-- Table structure for table `swappedbooks`
--

CREATE TABLE IF NOT EXISTS `swappedbooks` (
  `swappedId` int(11) NOT NULL AUTO_INCREMENT,
  `bookId` int(11) NOT NULL,
  `nameOfBook` text NOT NULL,
  `dateSwapped` date NOT NULL,
  `swappedStatus` text NOT NULL,
  PRIMARY KEY (`swappedId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userId` int(30) NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `phone` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `status` text NOT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `username`, `phone`, `email`, `password`, `status`) VALUES
(1, 'admin', '07038645342', 'admin@gmail.com', 'admin', 'admin'),
(2, 'yghkjl', 'jkhl', 'jhgklj@ugkhl', 'gjk', 'user'),
(3, 'newme', '08043232123', 'email@gmail.com', 'dddddd', 'user'),
(4, 'musa', '0804524321', 'musa@gmail.com', 'memusa', 'user');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
