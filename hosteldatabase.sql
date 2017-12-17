-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2017 at 01:57 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hosteldatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `currentoutpass`
--

CREATE TABLE `currentoutpass` (
  `regno` varchar(15) NOT NULL,
  `stime` varchar(40) NOT NULL,
  `etime` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nightattendance`
--

CREATE TABLE `nightattendance` (
  `regno` varchar(15) NOT NULL,
  `time` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nightattendance`
--

INSERT INTO `nightattendance` (`regno`, `time`) VALUES
('2014503057', '12/17/17 1:30 (PM)');

-- --------------------------------------------------------

--
-- Table structure for table `outpasshistory`
--

CREATE TABLE `outpasshistory` (
  `regno` varchar(15) NOT NULL,
  `history` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `outpasshistory`
--

INSERT INTO `outpasshistory` (`regno`, `history`) VALUES
('2014503056', '12/17/17 1:55 (PM)##12/17/17 1:56 (PM)');

-- --------------------------------------------------------

--
-- Table structure for table `parentinfo`
--

CREATE TABLE `parentinfo` (
  `regno` varchar(15) NOT NULL,
  `pname` varchar(40) NOT NULL,
  `mailid` varchar(40) DEFAULT NULL,
  `phoneno` varchar(15) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parentinfo`
--

INSERT INTO `parentinfo` (`regno`, `pname`, `mailid`, `phoneno`) VALUES
('2014503057', 'Pachiappan', 'srijj48@gmail.com', '8438145810'),
('2014503056', 'Jothiraman', 'srijj48@gmail.com', '9442334539');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `regno` varchar(15) NOT NULL,
  `bioid` varchar(50) DEFAULT NULL,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `year` varchar(10) DEFAULT NULL,
  `grad` varchar(10) NOT NULL,
  `dept` varchar(25) NOT NULL,
  `mailid` varchar(40) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `hblock` varchar(40) DEFAULT NULL,
  `hroom` varchar(15) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`regno`, `bioid`, `fname`, `lname`, `pass`, `gender`, `year`, `grad`, `dept`, `mailid`, `phone`, `hblock`, `hroom`) VALUES
('2014503057', NULL, 'Sundara', 'Akilesh', '1234', 'male', '4', 'UG', 'CSE', 'sundi@gmail.com', '8438145810', NULL, NULL),
('2014503056', NULL, 'Sridharan', 'J', '1234', 'male', '4', 'UG', 'CSE', 'jjsridharan@gmail.com', '8438145810', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `currentoutpass`
--
ALTER TABLE `currentoutpass`
  ADD PRIMARY KEY (`regno`);

--
-- Indexes for table `nightattendance`
--
ALTER TABLE `nightattendance`
  ADD PRIMARY KEY (`regno`);

--
-- Indexes for table `outpasshistory`
--
ALTER TABLE `outpasshistory`
  ADD PRIMARY KEY (`regno`);

--
-- Indexes for table `parentinfo`
--
ALTER TABLE `parentinfo`
  ADD PRIMARY KEY (`regno`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`regno`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
