-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 13, 2021 at 04:27 PM
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
-- Database: `qa`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `telephone` int(15) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `username`, `password`, `mail`, `telephone`) VALUES
('Ahmed', 'ahs', '123', 'ahs@mail.com', 123456789),
('Khalid', 'kha', '123', 'kha@mail.com', 123456789),
('Mohammad', 'mma', '123', 'mma@mail.com', 123456789),
('Youssef', 'yoe', '123', 'yoe@mail.com', 123456789),
('Ziad', 'zta', '123', 'zta@mail.com', 123456789);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

DROP TABLE IF EXISTS `department`;
CREATE TABLE IF NOT EXISTS `department` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `name`) VALUES
(7, 'CS'),
(8, 'IT'),
(9, 'SE');

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

DROP TABLE IF EXISTS `emp`;
CREATE TABLE IF NOT EXISTS `emp` (
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `telephone` int(15) NOT NULL,
  `role` varchar(3) NOT NULL DEFAULT 'emp',
  `department` varchar(100) DEFAULT NULL,
  `status` varchar(8) NOT NULL DEFAULT 'working',
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`name`, `username`, `password`, `mail`, `telephone`, `role`, `department`, `status`) VALUES
('Ali', 'Ali1', '1234', 'ali@g.com', 543654, 'emp', 'CS', 'working'),
('Amr', 'Amr1', '1234', 'Amr@g.com', 876666, 'emp', 'CS', 'working'),
('Essam', 'Essam1', '1234', 'Essam@g.com', 399932, 'emp', 'SE', 'working'),
('Hossam', 'Hossam1', '1234', 'Hossam@g.com', 165654, 'emp', 'CS', 'working'),
('Omar', 'Omar1', '1234', 'omar@g.com', 312423, 'emp', 'IT', 'working'),
('Salah', 'Salah1', '1234', 'Salah@g.com', 3838882, 'emp', 'IT', 'working'),
('Tarek', 'Tarek1', '1234', 'Tarek@g.com', 765323, 'emp', 'SE', 'working'),
('Yasser', 'Yasser1', '1234', 'Yasser@g.com', 543563, 'emp', 'CS', 'working'),
('Yehya', 'Yehya1', '1234', 'Yehya@g.com', 7655573, 'emp', 'IT', 'working');

-- --------------------------------------------------------

--
-- Table structure for table `emplog`
--

DROP TABLE IF EXISTS `emplog`;
CREATE TABLE IF NOT EXISTS `emplog` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `Clock_in` timestamp NULL DEFAULT NULL,
  `Clock_out` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `hod`
--

DROP TABLE IF EXISTS `hod`;
CREATE TABLE IF NOT EXISTS `hod` (
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `telephone` int(15) NOT NULL,
  `role` varchar(3) NOT NULL DEFAULT 'hod',
  `department` varchar(100) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hod`
--

INSERT INTO `hod` (`name`, `username`, `password`, `mail`, `telephone`, `role`, `department`) VALUES
('Ali Hassan', 'HOD CS', '1234', 'HODCS@g.com', 5435634, 'hod', 'CS'),
('Hatem Maher', 'HOD IT', '1234', 'HODIT@g.com', 65463453, 'hod', 'IT'),
('Ramez Galal', 'HOD SE', '1234', 'HODSE@g.com', 98348892, 'hod', 'SE');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

DROP TABLE IF EXISTS `requests`;
CREATE TABLE IF NOT EXISTS `requests` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'not seen',
  `days` int(11) NOT NULL,
  `Reason` varchar(100) DEFAULT NULL,
  `Deleted` tinyint(1) NOT NULL DEFAULT 0,
  `time` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sign`
--

DROP TABLE IF EXISTS `sign`;
CREATE TABLE IF NOT EXISTS `sign` (
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `telephone` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
