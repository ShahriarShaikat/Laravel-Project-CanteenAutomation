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
-- Database: `canteen_automation_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `post_id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `comment` varchar(1000) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `user_id`, `comment`, `time`) VALUES
(27, 1, 17, 'first comment', '2020-09-30 10:45:10'),
(23, 1, 12, 'lol', '2020-07-06 14:50:20'),
(24, 3, 12, 'Ki obostha vhai?', '2020-07-08 15:22:55'),
(19, 1, 13, 'no', '2020-07-05 16:58:38'),
(21, 1, 12, 'new comment', '2020-07-06 08:08:07'),
(25, 1, 12, 'HI....', '2020-07-09 15:45:36'),
(22, 1, 12, 'so what', '2020-07-06 11:57:02'),
(10, 1, 12, 'yes!', '2020-07-03 21:47:23'),
(26, 1, 16, 'hellow', '2020-08-19 13:30:40');

-- --------------------------------------------------------

--
-- Table structure for table `peoples`
--

DROP TABLE IF EXISTS `peoples`;
CREATE TABLE IF NOT EXISTS `peoples` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=58 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `peoples`
--

INSERT INTO `peoples` (`id`, `fname`, `lname`, `email`) VALUES
(49, 'Shahriar', 'shaikat', 'shaikat@gmail.com'),
(51, 'Tahmina', 'Shorna', 'tahmina@gmail.com'),
(57, 'shawon', 'nrs', 'shawon@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE IF NOT EXISTS `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `total_comment` int(255) NOT NULL DEFAULT '0',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `content`, `image`, `total_comment`, `date`) VALUES
(1, 'What is Lorem Ipsum', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '1593706891.png', 8, '2020-07-01 05:31:06'),
(3, 'A New post', 'Lorem Ipsum dolor site......', '1593449585.png', 1, '2020-07-01 05:31:06'),
(4, 'Shaikat post', 'Shaikat is a good boy....', '1593449706.png', 0, '2020-07-01 05:31:06'),
(8, 'Shaikat posthh', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '1593450594.png', 0, '2020-07-01 05:31:06'),
(10, 'Midul', 'asdgfrhf', '1593450736.png', 0, '2020-07-01 05:31:06'),
(19, 'A New post', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '1594396363.png', 0, '2020-07-10 15:52:43'),
(20, 'Shaikat post', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '1594396379.png', 0, '2020-07-10 15:52:59'),
(21, 'This is a post', 'skddksvnf', '1597844136.jpg', 0, '2020-08-19 13:35:36');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

DROP TABLE IF EXISTS `user_table`;
CREATE TABLE IF NOT EXISTS `user_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `uname` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `image` varchar(200) NOT NULL DEFAULT 'guest-user.jpg',
  `birthday` varchar(15) NOT NULL,
  `email` varchar(40) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `mobile` int(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`id`, `name`, `uname`, `password`, `image`, `birthday`, `email`, `gender`, `mobile`) VALUES
(12, 'shaikat', 'shaikat920', 'shaikat920', 'guest-user.jpg', '11/05/1999', 'shaikat@gmail.com', 'Male', 1794047219),
(14, 'shorna', 'shorna920', 'shorna920', 'guest-user.jpg', '10/06/2020', 'shorna@gmail.com', 'Female', 1794047222),
(15, 'midul', 'midul920', 'midul920', 'guest-user.jpg', '09/06/2020', 'midul@gmail.com', 'Male', 1794047219),
(17, 'Nazim', 'nazim920', 'nazim920', 'guest-user.jpg', '10/06/2003', 'nazim@gmail.com', 'Male', 1794657219);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
