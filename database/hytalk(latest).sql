-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2023 at 01:42 AM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hytalk`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

DROP TABLE IF EXISTS `album`;
CREATE TABLE IF NOT EXISTS `album` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`id`, `user_id`, `image`, `video`) VALUES
(30, 22, 'uploads/640794e8da1c83.23622589.jpg', ''),
(29, 22, 'uploads/640794c4d92b46.31329178.jpg', ''),
(28, 19, 'uploads/640623bda409b4.41107432.jpg', ''),
(27, 19, '', 'uploads/640623a63f14d3.17767310.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `post_owner_id` int(11) NOT NULL,
  `commenter_id` int(11) NOT NULL,
  `comment` varchar(10000) NOT NULL,
  `commenter_type` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `post_id`, `post_owner_id`, `commenter_id`, `comment`, `commenter_type`) VALUES
(1, 0, 0, 19, '', 'student'),
(2, 0, 0, 19, 'good', 'student'),
(3, 0, 19, 19, 'good', 'student'),
(4, 0, 19, 19, 'very good', 'student'),
(5, 0, 19, 19, 'hello', 'student'),
(6, 17, 19, 19, 'hello', 'student'),
(7, 18, 19, 19, 'this is a good video', 'student'),
(8, 18, 19, 19, 'it is a good video', 'student'),
(9, 48, 4, 22, 'thank you for informing sir', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

DROP TABLE IF EXISTS `faculty`;
CREATE TABLE IF NOT EXISTS `faculty` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `Dob` date NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Faculty_pic` varchar(255) DEFAULT 'images/faculty/default.png',
  `Department` varchar(50) NOT NULL,
  `Mobile_no` varchar(20) NOT NULL,
  `Username` varchar(50) DEFAULT NULL,
  `Password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `Name`, `designation`, `Dob`, `Email`, `Faculty_pic`, `Department`, `Mobile_no`, `Username`, `Password`) VALUES
(2, 'Nevada Mathis', 'proff', '0000-00-00', 'faculty@gmail.com', 'images/faculty/default.png', 'MAT', '9658658688', NULL, 'faculty'),
(3, 'Guinevere Morton', 'Voluptas velit quos ', '0000-00-00', 'rubicazy@mailinator.com', 'images/faculty/default.png', 'ECO', '8555555555', NULL, 'Pa$$w0rd!');

-- --------------------------------------------------------

--
-- Table structure for table `feed`
--

DROP TABLE IF EXISTS `feed`;
CREATE TABLE IF NOT EXISTS `feed` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(50) NOT NULL,
  `upload_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `caption` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `article` varchar(255) DEFAULT NULL,
  `user_type` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feed`
--

INSERT INTO `feed` (`id`, `user_id`, `upload_time`, `caption`, `image`, `video`, `article`, `user_type`) VALUES
(46, '19', '2023-03-06 17:32:45', 'bunny', 'uploads/640623bda409b4.41107432.jpg', '', 'high quality', 'student'),
(47, '4', '2023-03-07 15:30:13', 'tcs', '', '', 'new tcs recruitment is up', 'recruiter'),
(48, '4', '2023-03-07 19:12:01', 'infosys ', 'uploads/64078c81227953.60519573.jpg', '', 'infosys will start the recruitment from tommarrow onwards', 'recruiter'),
(49, '22', '2023-03-07 19:47:16', 'education', 'uploads/640794c4d92b46.31329178.jpg', '', 'education ', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

DROP TABLE IF EXISTS `friends`;
CREATE TABLE IF NOT EXISTS `friends` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `friend_id` int(11) NOT NULL,
  `friend_type` varchar(100) NOT NULL,
  `user_type` varchar(250) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`id`, `user_id`, `friend_id`, `friend_type`, `user_type`, `status`) VALUES
(33, 19, 20, 'student', 'student', 1),
(34, 19, 21, 'student', 'student', 1),
(35, 20, 19, 'student', 'student', 1),
(36, 21, 19, 'student', 'student', 1),
(37, 19, 22, 'student', 'student', 1),
(38, 22, 19, 'student', 'student', 0),
(39, 22, 21, 'student', 'student', 0),
(40, 22, 20, 'student', 'student', 0),
(41, 23, 22, 'student', 'student', 1),
(42, 22, 23, 'student', 'student', 1);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `send_id` int(11) NOT NULL,
  `receive_id` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `send_id`, `receive_id`, `message`, `time`) VALUES
(16, 19, 20, 'Thank you for accepting the friend request.', '2023-03-05 13:47:13'),
(17, 19, 21, 'Thank you for accepting the friend request.', '2023-03-05 13:47:14'),
(18, 19, 21, 'hello', '2023-03-05 13:48:45'),
(19, 19, 20, 'how are you', '2023-03-05 13:49:09'),
(20, 22, 19, 'Thank you for accepting the friend request.', '2023-03-07 19:15:25'),
(21, 22, 19, '', '2023-03-07 19:17:21'),
(22, 22, 23, 'Thank you for accepting the friend request.', '2023-03-07 19:20:30'),
(23, 23, 22, 'Thank you for accepting the friend request.', '2023-03-07 19:20:56'),
(24, 23, 22, 'hello azif', '2023-03-07 19:21:10'),
(25, 23, 22, 'how are you', '2023-03-07 19:21:18'),
(26, 22, 19, 'hello', '2023-03-07 19:22:35'),
(27, 22, 23, 'im fine', '2023-03-07 19:25:02'),
(28, 22, 23, 'how are you', '2023-03-07 19:25:17'),
(29, 23, 22, 'im fine too...', '2023-03-07 19:25:55');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

DROP TABLE IF EXISTS `notification`;
CREATE TABLE IF NOT EXISTS `notification` (
  `Notification_id` int(11) NOT NULL AUTO_INCREMENT,
  `sender_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  PRIMARY KEY (`Notification_id`),
  KEY `sender_id` (`sender_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `placement`
--

DROP TABLE IF EXISTS `placement`;
CREATE TABLE IF NOT EXISTS `placement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `recruiter_id` int(11) NOT NULL,
  `student_name` varchar(1000) DEFAULT NULL,
  `Company_details` varchar(255) NOT NULL,
  `designation` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `placement`
--

INSERT INTO `placement` (`id`, `recruiter_id`, `student_name`, `Company_details`, `designation`) VALUES
(41, 4, 'amal', 'tcs', 'software engineer'),
(42, 4, 'arun', 'tcs', 'software engineer'),
(43, 4, 'albin', 'algo', 'manager'),
(44, 4, 'alan', 'algo', 'manager'),
(45, 4, 'minnu', 'algo', 'manager'),
(46, 4, 'sona', 'tcs', 'developer'),
(47, 4, 'binto', 'tcs', 'developer'),
(48, 4, 'sunjay', 'tcs', 'developer'),
(49, 4, 'akhil', 'tcs', 'developer'),
(50, 4, 'manu', 'tcs', 'developer');

-- --------------------------------------------------------

--
-- Table structure for table `recruiter`
--

DROP TABLE IF EXISTS `recruiter`;
CREATE TABLE IF NOT EXISTS `recruiter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Company_details` varchar(255) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `recruiter_pic` varchar(255) DEFAULT 'images/recruiter/default.png',
  `Designation` varchar(50) NOT NULL,
  `Mobile_no` varchar(20) NOT NULL,
  `Username` varchar(50) DEFAULT NULL,
  `Password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recruiter`
--

INSERT INTO `recruiter` (`id`, `Name`, `Company_details`, `Email`, `recruiter_pic`, `Designation`, `Mobile_no`, `Username`, `Password`) VALUES
(2, 'arun', 'google', 'arun@gmail.com', 'images/recruiter/default.png', 'senior engineer', '8575965856', NULL, 'arun'),
(3, 'Sean Delgado', 'Carr Ashley Trading', 'pynumoq@mailinator.com', 'images/recruiter/default.png', 'Libero dolore earum ', 'Nihil Nam autem irur', NULL, 'Pa$$w0rd!'),
(4, 'Micah Huber', 'Case Donovan Traders', 'ab@gmail.com', 'images/recruiter/default.png', 'Nisi deserunt velit', 'Explicabo Odit hic ', NULL, 'abb');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `register_no` varchar(20) DEFAULT NULL,
  `Dob` date NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Student_pic` varchar(255) DEFAULT 'images/users/default.png',
  `Stream` varchar(50) NOT NULL,
  `Mobile_no` varchar(20) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `Name`, `semester`, `register_no`, `Dob`, `Gender`, `Email`, `Student_pic`, `Stream`, `Mobile_no`, `Username`, `Password`) VALUES
(19, 'uma Morrow', '5', '72', '1998-09-24', 'female', 'uma@gmail.com', 'images/users/6404ae7ac5db44.65802374.jpg', 'Chemistry', '59', 'uma@gmail.com', 'umauma'),
(21, 'luffy Love', '2', '58', '2000-10-16', 'male', 'luffy@main.com', 'images/users/default.png', 'Chemistry', '7', 'luffy@main.com', 'luffy'),
(22, 'Azif Nizam', '6', '40', '1997-11-14', 'male', 'azif@gmail.com', 'images/users/default.png', 'Computer Science', '24', 'azif@gmail.com', 'azif'),
(23, 'Treesa Kuriakose', '6', '88', '2002-09-01', 'female', 'treesa@gmail.com', 'images/users/default.png', 'Computer Science', '7', 'treesa@gmail.com', 'treesa');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `notification`
--
ALTER TABLE `notification`
  ADD CONSTRAINT `notification_ibfk_1` FOREIGN KEY (`sender_id`) REFERENCES `admin` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `notification_ibfk_2` FOREIGN KEY (`sender_id`) REFERENCES `student` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `notification_ibfk_3` FOREIGN KEY (`sender_id`) REFERENCES `faculty` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `notification_ibfk_4` FOREIGN KEY (`sender_id`) REFERENCES `recruiter` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
