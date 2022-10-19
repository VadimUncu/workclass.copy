-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2016 at 03:52 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `guitar_garage`
--

-- --------------------------------------------------------

--
-- Table structure for table `guitars`
--

CREATE TABLE IF NOT EXISTS `guitars` (
  `PID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` char(50) NOT NULL,
  `Price` int(10) NOT NULL,
  PRIMARY KEY (`PID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `guitars`
--

INSERT INTO `guitars` (`PID`,`Name`, `Price`) VALUES
(1,'Blueridge', 449),
(2,'Yamaha', 329),
(3,'Ovation',  539),
(4,'Fender', 299),
(5,'Jasmine', 349),
(6,'Gibson', 249),
(7,'Epiphone', 369),
(8,'Marshall',  459),
(9,'Ibanez', 649),
(10,'Hofner', 699),
(11,'Schecter', 479),
(12,'Blackstar', 529);

-- --------------------------------------------------------

--
-- Table structure for table `persons`
--

CREATE TABLE IF NOT EXISTS `persons` (
  `PID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` char(50) NOT NULL,
  `Email` char(50) NOT NULL,
  `Password` char(50) NOT NULL,
  `Contact` char(50) NOT NULL,
  `City` char(50) NOT NULL,
  `Address` char(50) NOT NULL,
  PRIMARY KEY (`PID`),
  UNIQUE KEY `Email` (`Email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;


