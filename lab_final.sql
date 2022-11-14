-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 18, 2021 at 10:19 AM
-- Server version: 8.0.18
-- PHP Version: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lab_final`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `event_name` varchar(20) NOT NULL,
  `event_details` varchar(200) NOT NULL,
  `importance` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `event_name`, `event_details`, `importance`, `username`) VALUES
(1, 'lab', 'exan', 'very important', 'alamin'),
(2, 'admin', 'hg', 'moderate', 'admin'),
(5, 'class 11', 'php laravel', 'high', 'sr shuvo2'),
(7, 'Class 16', 'Laravel coding', 'high', 'sr shuvo'),
(8, 'Class 17', 'laravel main coding part-4 tomorrow', 'moderate', 'sr shuvo'),
(9, 'crud3', '20june', 'high', 'sr shuvo'),
(10, 'Class 17', 'crud opration modify, delete', 'high', 'alamin'),
(12, 'kjklaf', 'hgfngh', 'moderate', 'sr shuvo'),
(13, 'Mid Term', 'exam', 'moderate', 'sr shuvo');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `type`) VALUES
(1, 'admin', '1', 'admin'),
(2, 'alamin', 'alamin', 'admin'),
(3, 'sr shuvo', '1', 'admin'),
(4, 'sr shuvo', '1', 'admin'),
(5, 'rahman', '1', 'admin'),
(6, 'rahman', '1', 'admin'),
(7, 'nibir', '1', 'user'),
(8, 'sohel', '1', 'customer'),
(9, 'anika', '1', 'admin'),
(10, 'niloy', '1', 'admin'),
(11, 'admin sir', '1', 'admin'),
(12, 'sr shuvo3', '1', 'admin'),
(13, 'sr shuvo3', '1', 'admin'),
(14, 'sr shuvo2', '2', 'customer');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
