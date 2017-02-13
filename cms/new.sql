-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2016 at 04:03 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `new`
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
('13csu120', '3b6beb51e76816e632a40d440eab0097', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `mail_13csu120`
--

CREATE TABLE `mail_13csu120` (
  `rec_id` varchar(10) NOT NULL,
  `type` varchar(9) DEFAULT NULL,
  `subject` varchar(100) DEFAULT ' ',
  `content` varchar(200) DEFAULT ' ',
  `attach` blob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mail_13csu120`
--

INSERT INTO `mail_13csu120` (`rec_id`, `type`, `subject`, `content`, `attach`) VALUES
('kuchbhi', 'inbox', 'hi', 'hello', NULL),
('kuchbhi', 'inbox', 'asd', 'asda', NULL),
('kuchbhi', 'inbox', 'asdqwq', 'asdadsasd', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `test_1`
--

CREATE TABLE `test_1` (
  `q_no` int(11) NOT NULL,
  `ques` varchar(2000) DEFAULT NULL,
  `opt1` varchar(1000) DEFAULT NULL,
  `opt2` varchar(1000) DEFAULT NULL,
  `opt3` varchar(1000) DEFAULT NULL,
  `opt4` varchar(1000) DEFAULT NULL,
  `ans` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `test_3`
--

CREATE TABLE `test_3` (
  `q_no` int(11) NOT NULL,
  `ques` varchar(2000) DEFAULT NULL,
  `opt1` varchar(1000) DEFAULT NULL,
  `opt2` varchar(1000) DEFAULT NULL,
  `opt3` varchar(1000) DEFAULT NULL,
  `opt4` varchar(1000) DEFAULT NULL,
  `ans` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `test_4`
--

CREATE TABLE `test_4` (
  `q_no` int(11) NOT NULL,
  `ques` varchar(2000) DEFAULT NULL,
  `opt1` varchar(1000) DEFAULT NULL,
  `opt2` varchar(1000) DEFAULT NULL,
  `opt3` varchar(1000) DEFAULT NULL,
  `opt4` varchar(1000) DEFAULT NULL,
  `ans` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

--
-- Dumping data for table `test_info`
--

INSERT INTO `test_info` (`sno`, `t_name`, `semester`, `dept`, `sub`, `test_name`) VALUES
(1, 'Shubham', 1, 'CSE', 'OS', 'quiz1'),
(3, 'shubham', 1, 'cse', 'cse', 'ashgdjas'),
(4, 'shubham', 1, 'ece', 'os', 'quiz1'),
(5, 'shubham', 1, 'ece', 'os', 'quiz1');

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

--
-- Dumping data for table `uploads`
--

INSERT INTO `uploads` (`id`, `sem`, `branch`, `sectio`, `filename`, `memberType`) VALUES
(1, 12, '12', '12', 'scan0313.jpg', 'student'),
(2, 3, 'ece', 'c', 'scan0313.jpg', 'student'),
(3, 1, 'cse', 'A', 'scan0313.jpg', 'student'),
(4, 3, 'cse', 'A', 'scan0313.jpg', 'student'),
(5, 1, 'cse', 'B', 'scan0313.jpg', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `username` varchar(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `phone` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`username`, `name`, `fname`, `phone`) VALUES
('13csu120', 'Shubham', 'K.K.Bansal', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `test_1`
--
ALTER TABLE `test_1`
  ADD PRIMARY KEY (`q_no`);

--
-- Indexes for table `test_3`
--
ALTER TABLE `test_3`
  ADD PRIMARY KEY (`q_no`);

--
-- Indexes for table `test_4`
--
ALTER TABLE `test_4`
  ADD PRIMARY KEY (`q_no`);

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
-- AUTO_INCREMENT for table `test_info`
--
ALTER TABLE `test_info`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `uploads`
--
ALTER TABLE `uploads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
