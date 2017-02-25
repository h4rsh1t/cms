-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 25, 2017 at 05:17 PM
-- Server version: 5.5.53-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `datesheet`
--

CREATE TABLE `datesheet` (
  `id` int(1) NOT NULL DEFAULT '1',
  `filename` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datesheet`
--

INSERT INTO `datesheet` (`id`, `filename`) VALUES
(1, 'scan0313.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(10) NOT NULL,
  `password` varchar(36) NOT NULL,
  `memberType` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `memberType`) VALUES
('13csu032', '1f28e49f34e2406fdb6d6158eebd793b', 'student'),
('13csu049', '1f28e49f34e2406fdb6d6158eebd793b', 'student'),
('13csu050', '1f28e49f34e2406fdb6d6158eebd793b', 'student'),
('13csu090', '1f28e49f34e2406fdb6d6158eebd793b', 'student'),
('teacher', '1f28e49f34e2406fdb6d6158eebd793b', 'faculty');

-- --------------------------------------------------------

--
-- Table structure for table `login_log`
--

CREATE TABLE `login_log` (
  `username` varchar(8) NOT NULL,
  `name` varchar(30) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_log`
--

INSERT INTO `login_log` (`username`, `name`, `time`) VALUES
('13csu049', 'hjjj', '0000-00-00 00:00:00'),
('13csu090', 'hjjj', '0000-00-00 00:00:00'),
('13csu050', 'hjjj', '0000-00-00 00:00:00'),
('13csu049', 'hjjj', '0000-00-00 00:00:00'),
('13csu090', 'hjjj', '0000-00-00 00:00:00'),
('13csu049', 'hjjj', '0000-00-00 00:00:00'),
('13csu090', 'hjjj', '0000-00-00 00:00:00'),
('13csu049', 'hjjj', '0000-00-00 00:00:00'),
('13csu090', 'hy hy', '0000-00-00 00:00:00'),
('13csu090', 'hy hy', '0000-00-00 00:00:00'),
('13csu049', '', '2017-02-20 11:26:37'),
('teacher', '', '2017-02-20 11:32:08'),
('13csu049', '', '2017-02-20 11:52:58'),
('13csu049', '', '2017-02-20 11:56:16'),
('13csu090', 'hy hy', '2017-02-20 11:56:35'),
('13csu050', '', '2017-02-20 11:56:51'),
('13csu049', '', '2017-02-20 12:22:52'),
('13csu090', 'hy hy', '2017-02-20 12:23:01'),
('13csu090', 'hy hy', '2017-02-20 12:33:07'),
('13csu090', 'hy hy', '2017-02-20 12:34:51'),
('13csu090', 'hy hy', '2017-02-20 12:36:15'),
('13csu049', '', '2017-02-23 15:41:28'),
('13csu049', '', '2017-02-24 10:54:46'),
('13csu050', '', '2017-02-24 10:55:00'),
('13csu090', 'hy hy', '2017-02-24 10:55:32'),
('13csu090', 'hy hy', '2017-02-25 05:23:18'),
('13csu090', 'hy hy', '2017-02-25 06:46:10'),
('13csu090', 'hy hy', '2017-02-25 06:47:23'),
('13csu090', 'hy hy', '2017-02-25 06:57:02'),
('13csu090', 'hy hy', '2017-02-25 07:24:06');

-- --------------------------------------------------------

--
-- Table structure for table `mail_all`
--

CREATE TABLE `mail_all` (
  `sender` varchar(30) NOT NULL,
  `reciever` varchar(30) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `type` text NOT NULL,
  `content` varchar(200) NOT NULL,
  `attach` blob,
  `sr_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mail_all`
--

INSERT INTO `mail_all` (`sender`, `reciever`, `subject`, `type`, `content`, `attach`, `sr_no`) VALUES
('13csu049', '13csu050', 'hel', 'inbox', 'grebfc v', NULL, 2),
('13csu050', '13csu049', 'RE: hel', 'inbox', 'fuck you 2', NULL, 4),
('13csu050', '13csu049', 'RE: hel', 'inbox', 'fuck you 2', NULL, 5),
('13csu050', '13csu049', 'RE: hel', 'inbox', 'this is it', NULL, 6),
('13csu049', '13csu050', 'hhhhhh', 'inbox', 'wwwww', NULL, 7),
('13csu049', '13csu050', 'RE: RE: hel', 'inbox', 'sdfbnbvcs', NULL, 8),
('13csu049', '13csu050', 'RE: RE: hel', 'inbox', 'sdfbnbvcs', NULL, 9),
('13csu049', '13csu050', 'RE: RE: hel', 'inbox', 'sdfbnbvcs', NULL, 10);

-- --------------------------------------------------------

--
-- Table structure for table `test_info`
--

CREATE TABLE `test_info` (
  `sno` int(11) NOT NULL,
  `t_name` varchar(50) NOT NULL,
  `semester` int(11) NOT NULL,
  `dept` varchar(5) NOT NULL,
  `sub` varchar(50) NOT NULL,
  `test_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE `uploads` (
  `id` int(11) NOT NULL,
  `sem` int(4) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `sectio` varchar(50) NOT NULL,
  `filename` varchar(100) NOT NULL,
  `memberType` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `username` varchar(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0',
  `pic` varchar(20) NOT NULL DEFAULT 'deafult.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`username`, `name`, `fname`, `phone`, `active`, `pic`) VALUES
('13csu032', 'dwdfbgnb', 'sd3f', '1234567890', 0, 'default.png'),
('13csu049', 'harshit jain', 'cse8b', '0987654321', 0, 'default.png'),
('13csu050', 'harshit juneja', 'cse8b', '9988334455', 0, 'default.png'),
('13csu090', 'hy hy', 'cse8b', '2147483647', 1, '13csu090.jpg'),
('teacher', 'this teacher', 'nothing', '9911553455', 0, 'default.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `mail_all`
--
ALTER TABLE `mail_all`
  ADD UNIQUE KEY `srno` (`sr_no`);

--
-- Indexes for table `test_info`
--
ALTER TABLE `test_info`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `uploads`
--
ALTER TABLE `uploads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mail_all`
--
ALTER TABLE `mail_all`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `test_info`
--
ALTER TABLE `test_info`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `uploads`
--
ALTER TABLE `uploads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
