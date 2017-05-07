-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2017 at 04:36 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

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
  `filename` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datesheet`
--

INSERT INTO `datesheet` (`id`, `filename`) VALUES
(1, '312-50.pdf');

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
('13csu120', 'da4fb5c6e93e74d3df8527599fa62642', 'student'),
('shubham', '3b6beb51e76816e632a40d440eab0097', 'faculty');

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
('shubham', '', '2017-05-06 17:49:00'),
('shubham', '', '2017-05-06 18:03:35'),
('shubham', '', '2017-05-07 09:12:53'),
('13csu120', 'Shubham Bansal', '2017-05-07 09:54:51'),
('shubham', '', '2017-05-07 12:46:37'),
('13csu120', 'Shubham Bansal', '2017-05-07 13:23:15'),
('13csu120', 'Shubham Bansal', '2017-05-07 14:02:35'),
('13csu120', 'Shubham Bansal', '2017-05-07 14:02:57'),
('shubham', '', '2017-05-07 14:05:12'),
('13csu120', 'Shubham Bansal', '2017-05-07 14:25:41'),
('shubham', '', '2017-05-07 14:25:55'),
('13csu120', 'Shubham Bansal', '2017-05-07 14:26:57');

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
('13csu120', '13csu032', 'test', 'inbox', 'test', NULL, 1);

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
-- Table structure for table `to_do_all`
--

CREATE TABLE `to_do_all` (
  `id` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `desc` varchar(200) NOT NULL,
  `sr_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `to_do_all`
--

INSERT INTO `to_do_all` (`id`, `name`, `desc`, `sr_no`) VALUES
('admin', 'test Task', 'test', 1);

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
('13csu120', 'Shubham Bansal', 'cse7c', '1971771971', 1, 'default.png');

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
-- Indexes for table `to_do_all`
--
ALTER TABLE `to_do_all`
  ADD PRIMARY KEY (`sr_no`);

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
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `test_info`
--
ALTER TABLE `test_info`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `to_do_all`
--
ALTER TABLE `to_do_all`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `uploads`
--
ALTER TABLE `uploads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
