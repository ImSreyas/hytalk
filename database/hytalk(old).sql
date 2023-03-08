-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2023 at 04:05 AM
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
  `designation` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_album_faculty` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

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
(8, 18, 19, 19, 'it is a good video', 'student');

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
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feed`
--

INSERT INTO `feed` (`id`, `user_id`, `upload_time`, `caption`, `image`, `video`, `article`, `user_type`) VALUES
(18, '19', '2023-03-05 02:46:51', 'im going to post a video', '', 'uploads/6404029b5364c5.27088686.mp4', 'this is an anime portion and it is funny', 'student');

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
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`id`, `user_id`, `friend_id`, `friend_type`, `user_type`, `status`) VALUES
(33, 19, 20, 'student', 'student', 1),
(34, 19, 21, 'student', 'student', 1),
(35, 20, 19, 'student', 'student', 1),
(36, 21, 19, 'student', 'student', 1),
(37, 19, 22, 'student', 'student', 0),
(38, 42, 19, 'student', 'student', 0),
(39, 42, 20, 'student', 'student', 0),
(40, 42, 21, 'student', 'student', 0),
(42, 42, 44, 'student', 'student', 0),
(44, 43, 19, 'student', 'student', 0),
(45, 43, 20, 'student', 'student', 0),
(46, 43, 21, 'student', 'student', 0),
(47, 43, 44, 'student', 'student', 0),
(48, 42, 43, 'student', 'student', 1),
(49, 43, 42, 'student', 'student', 1),
(50, 19, 44, 'student', 'student', 0),
(51, 19, 43, 'student', 'student', 0),
(52, 19, 42, 'student', 'student', 0);

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
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `send_id`, `receive_id`, `message`, `time`) VALUES
(16, 19, 20, 'Thank you for accepting the friend request.', '2023-03-05 13:47:13'),
(17, 19, 21, 'Thank you for accepting the friend request.', '2023-03-05 13:47:14'),
(18, 19, 21, 'hello', '2023-03-05 13:48:45'),
(19, 19, 20, 'how are you', '2023-03-05 13:49:09'),
(24, 43, 42, 'Thank you for accepting the friend request.', '2023-03-06 03:44:33'),
(25, 42, 43, 'Thank you for accepting the friend request.', '2023-03-06 03:45:10'),
(26, 42, 43, 'hai', '2023-03-06 03:45:17'),
(27, 43, 42, 'hello', '2023-03-06 03:45:32'),
(28, 43, 42, 'how are you', '2023-03-06 03:49:44'),
(29, 42, 43, 'im fine', '2023-03-06 03:50:00'),
(30, 42, 43, 'you', '2023-03-06 03:50:11'),
(31, 43, 42, 'im good', '2023-03-06 03:50:55'),
(32, 19, 20, 'are you there', '2023-03-06 04:02:15'),
(33, 20, 19, 'im fine. you...?', '2023-03-06 04:02:59'),
(34, 20, 19, 'im sorry for the late reply', '2023-03-06 04:03:51'),
(35, 19, 20, 'its okay', '2023-03-06 04:04:28');

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
  `student_id` int(11) NOT NULL,
  `Company_details` varchar(255) NOT NULL,
  `designation` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_placement_recruiter` (`recruiter_id`),
  KEY `fk_placement_student` (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(4, 'Ifeoma Yates', 'Houston and Brown Co', 'suri@mailinator.com', 'images/recruiter/default.png', 'Cillum mollit et pra', 'Harum reprehenderit', NULL, 'Pa$$w0rd!');

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
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `Name`, `semester`, `register_no`, `Dob`, `Gender`, `Email`, `Student_pic`, `Stream`, `Mobile_no`, `Username`, `Password`) VALUES
(19, 'uma Morrow', '5', '72', '1998-09-24', 'female', 'uma@gmail.com', 'images/users/6404ae7ac5db44.65802374.jpg', 'Chemistry', '59', 'uma@gmail.com', 'umauma'),
(20, 'sreyas', '6', '2000', '2003-03-06', 'male', 'sreyas@gmail.com', 'images/users/default.png', 'computer science', '5658565458', 'sreyas@gmail.com', 'sreyas'),
(21, 'luffy Love', '2', '58', '2000-10-16', 'male', 'luffy@main.com', 'images/users/default.png', 'Chemistry', '7', 'luffy@main.com', 'luffy'),
(42, 'Beau Carey', '8', '16', '1999-05-27', 'female', 'a@gmail.com', 'images/users/default.png', 'Economics', '59', 'a@gmail.com', 'a'),
(43, 'Brock Baird', '8', '40', '1999-11-24', 'male', 'b@gmail.com', 'images/users/default.png', 'Physics', '46', 'b@gmail.com', 'b'),
(44, 'Quail Sherman', '2', '90', '2000-12-26', 'male', 'c@gmail.com', 'images/users/default.png', 'Physics', '10', 'c@gmail.com', 'c');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `album`
--
ALTER TABLE `album`
  ADD CONSTRAINT `fk_album_faculty` FOREIGN KEY (`user_id`) REFERENCES `faculty` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_album_recruiter` FOREIGN KEY (`user_id`) REFERENCES `recruiter` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_album_user` FOREIGN KEY (`user_id`) REFERENCES `student` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `notification`
--
ALTER TABLE `notification`
  ADD CONSTRAINT `notification_ibfk_1` FOREIGN KEY (`sender_id`) REFERENCES `admin` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `notification_ibfk_2` FOREIGN KEY (`sender_id`) REFERENCES `student` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `notification_ibfk_3` FOREIGN KEY (`sender_id`) REFERENCES `faculty` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `notification_ibfk_4` FOREIGN KEY (`sender_id`) REFERENCES `recruiter` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `placement`
--
ALTER TABLE `placement`
  ADD CONSTRAINT `fk_placement_recruiter` FOREIGN KEY (`recruiter_id`) REFERENCES `recruiter` (`id`),
  ADD CONSTRAINT `fk_placement_student` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
