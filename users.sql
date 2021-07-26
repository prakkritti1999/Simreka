-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 26, 2021 at 03:16 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simreka`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `ID` int(255) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `firstName` varchar(255) DEFAULT NULL,
  `lastName` varchar(255) DEFAULT NULL,
  `organization` varchar(255) DEFAULT NULL,
  `reasons` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `email`, `firstName`, `lastName`, `organization`, `reasons`, `password`) VALUES
(1, 'priyanka.chauhan@yahoo.com', 'Priyanka', 'Chauhan', 'Tata Consultancy Services Ltd.', 'Security Purposes', 'cd382ac4d1b142a7456ee202bbc760bd'),
(2, 'smrititayal@gmail.com', 'Smriti ', 'Tayal', 'Tata Consultancy Services Ltd.', 'HR Information', '6c4db03417b8d14df05e65e789faca23'),
(3, 'mathur_suraj@hotmail.in', 'Suraj', 'Mathur', 'CISCO Pvt Ltd.', 'HR Information', 'e864a18f5c002574c5b9bd272a989c9f'),
(4, 'leenachabbra@myla.in', 'Leena', 'Chabra', 'MyLA Ltd.', 'Security', 'd52320f8a2e2aea8ee5be9c48b7cd587'),
(5, 'rani.gupta@gmail.com', 'Rajni', 'Gupta', 'Zenco Ltd.', 'Consulting Reasons', 'RajniGupta1234'),
(6, 'prakriti.guptta@gmail.com', 'Prakriti', 'Gupta', 'Zenco Ltd.', 'security', 'PrakritiGupta1234');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
