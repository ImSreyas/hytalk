-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2023 at 12:05 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
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

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `designation` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `post_owner_id` int(11) NOT NULL,
  `commenter_id` int(11) NOT NULL,
  `comment` varchar(10000) NOT NULL,
  `commenter_type` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

CREATE TABLE `faculty` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `Dob` date NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Faculty_pic` varchar(255) DEFAULT 'images/faculty/default.png',
  `Department` varchar(50) NOT NULL,
  `Mobile_no` varchar(20) NOT NULL,
  `Username` varchar(50) DEFAULT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `Name`, `designation`, `Dob`, `Email`, `Faculty_pic`, `Department`, `Mobile_no`, `Username`, `Password`) VALUES
(2, 'Nevada Mathis', 'proff', '0000-00-00', 'faculty@gmail.com', NULL, 'MAT', '9658658688', NULL, 'faculty'),
(3, 'Guinevere Morton', 'Voluptas velit quos ', '0000-00-00', 'rubicazy@mailinator.com', NULL, 'ECO', '8555555555', NULL, 'Pa$$w0rd!');

-- --------------------------------------------------------

--
-- Table structure for table `feed`
--

CREATE TABLE `feed` (
  `id` int(11) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `upload_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `caption` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `article` varchar(255) DEFAULT NULL,
  `user_type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feed`
--

INSERT INTO `feed` (`id`, `user_id`, `upload_time`, `caption`, `image`, `video`, `article`, `user_type`) VALUES
(18, '19', '2023-03-05 02:46:51', 'im going to post a video', '', 'uploads/6404029b5364c5.27088686.mp4', 'this is an anime portion and it is funny', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE `friends` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `friend_id` int(11) NOT NULL,
  `friend_type` varchar(100) NOT NULL,
  `user_type` varchar(250) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`id`, `user_id`, `friend_id`, `friend_type`, `user_type`, `status`) VALUES
(33, 19, 20, 'student', 'student', 1),
(34, 19, 21, 'student', 'student', 1),
(35, 20, 19, 'student', 'student', 1),
(36, 21, 19, 'student', 'student', 1),
(37, 19, 22, 'student', 'student', 0);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `send_id` int(11) NOT NULL,
  `receive_id` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `send_id`, `receive_id`, `message`, `time`) VALUES
(16, 19, 20, 'Thank you for accepting the friend request.', '2023-03-05 13:47:13'),
(17, 19, 21, 'Thank you for accepting the friend request.', '2023-03-05 13:47:14'),
(18, 19, 21, 'hello', '2023-03-05 13:48:45'),
(19, 19, 20, 'how are you', '2023-03-05 13:49:09');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `Notification_id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `placement`
--

CREATE TABLE `placement` (
  `id` int(11) NOT NULL,
  `recruiter_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `Company_details` varchar(255) NOT NULL,
  `designation` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `recruiter`
--

CREATE TABLE `recruiter` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Company_details` varchar(255) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `recruiter_pic` varchar(255) DEFAULT 'images/recruiter/default.png',
  `Designation` varchar(50) NOT NULL,
  `Mobile_no` varchar(20) NOT NULL,
  `Username` varchar(50) DEFAULT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recruiter`
--

INSERT INTO `recruiter` (`id`, `Name`, `Company_details`, `Email`, `recruiter_pic`, `Designation`, `Mobile_no`, `Username`, `Password`) VALUES
(2, 'arun', 'google', 'arun@gmail.com', 'images/recruiter/default.png', 'senior engineer', '8575965856', NULL, 'arun'),
(3, 'Sean Delgado', 'Carr Ashley Trading', 'pynumoq@mailinator.com', 'images/recruiter/default.png', 'Libero dolore earum ', 'Nihil Nam autem irur', NULL, 'Pa$$w0rd!');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
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
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `Name`, `semester`, `register_no`, `Dob`, `Gender`, `Email`, `Student_pic`, `Stream`, `Mobile_no`, `Username`, `Password`) VALUES
(19, 'uma Morrow', '5', '72', '1998-09-24', 'female', 'uma@gmail.com', 'images/users/6404ae7ac5db44.65802374.jpg', 'Chemistry', '59', 'uma@gmail.com', 'umauma'),
(20, 'sreyas', '6', '2000', '2003-03-06', 'male', 'sreyas@gmail.com', 'images/users/default.png', 'computer science', '5658565458', 'sreyas@gmail.com', 'sreyas'),
(21, 'luffy Love', '2', '58', '2000-10-16', 'male', 'luffy@main.com', 'images/users/default.png', 'Chemistry', '7', 'luffy@main.com', 'luffy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_album_faculty` (`user_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feed`
--
ALTER TABLE `feed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`Notification_id`),
  ADD KEY `sender_id` (`sender_id`);

--
-- Indexes for table `placement`
--
ALTER TABLE `placement`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_placement_recruiter` (`recruiter_id`),
  ADD KEY `fk_placement_student` (`student_id`);

--
-- Indexes for table `recruiter`
--
ALTER TABLE `recruiter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feed`
--
ALTER TABLE `feed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `friends`
--
ALTER TABLE `friends`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `Notification_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `placement`
--
ALTER TABLE `placement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `recruiter`
--
ALTER TABLE `recruiter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
