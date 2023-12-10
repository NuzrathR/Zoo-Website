-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 30, 2019 at 12:37 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zoo`
--

-- --------------------------------------------------------

--
-- Table structure for table `zoodetails`
--

DROP TABLE IF EXISTS `zoodetails`;
CREATE TABLE IF NOT EXISTS `zoodetails` (
  `Title` varchar(30) NOT NULL,
  `First_Name` varchar(30) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Contact_No` varchar(30) NOT NULL,
  `City` varchar(30) NOT NULL,
  `Age` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zoodetails`
--

INSERT INTO `zoodetails` (`Title`, `First_Name`, `Last_Name`, `Email`, `Contact_No`, `City`, `Age`) VALUES
('', '', '', '', '', 'Galle', ''),
('Mr', 'asd', 'sad', 'asd', 'asda', 'Kandy', 'asda'),
('Mr', 'Aadharshan', 'Akeellan', 'akeellan99@gmail.com', '0777776136', 'Kandy', '22'),
('Mr', 'Aadharshan', 'Akeellan', 'akeellan99@gmail.com', '0777776136', 'Kandy', '22');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
