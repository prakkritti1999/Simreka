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
-- Table structure for table `admindataupload`
--

DROP TABLE IF EXISTS `admindataupload`;
CREATE TABLE IF NOT EXISTS `admindataupload` (
  `OrganizationName` varchar(255) NOT NULL,
  `Monthly_Revenue` bigint(255) NOT NULL,
  `No._of_emp` int(255) NOT NULL,
  `adminName` varchar(255) NOT NULL,
  PRIMARY KEY (`OrganizationName`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admindataupload`
--

INSERT INTO `admindataupload` (`OrganizationName`, `Monthly_Revenue`, `No._of_emp`, `adminName`) VALUES
('adidas', 100000, 10, 'Deepa'),
('Bingo', 2001010, 4, 'Deepa');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
