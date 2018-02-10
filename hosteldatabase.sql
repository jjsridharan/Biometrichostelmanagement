-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2018 at 03:24 AM
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
  `etime` varchar(40) NOT NULL,
  `reason` varchar(150) NOT NULL,
  `approvedby` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `currentoutpass`
--

INSERT INTO `currentoutpass` (`regno`, `stime`, `etime`, `reason`, `approvedby`) VALUES
('2014503056', '01/28/18 2:22 (PM)', '01/30/18 2:22 (PM)', 'Family Function', 'Raja');

-- --------------------------------------------------------

--
-- Table structure for table `hostelalloted`
--

CREATE TABLE `hostelalloted` (
  `ufirstb` varchar(50) NOT NULL,
  `usecondb` varchar(50) NOT NULL,
  `uthirdb` varchar(50) NOT NULL,
  `ufourb` varchar(50) NOT NULL,
  `ufirstg` varchar(50) NOT NULL,
  `usecondg` varchar(50) NOT NULL,
  `uthirdg` varchar(50) NOT NULL,
  `ufourg` varchar(50) NOT NULL,
  `pfirstb` varchar(50) NOT NULL,
  `psecondb` varchar(50) NOT NULL,
  `pfirstg` varchar(50) NOT NULL,
  `psecondg` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hostelalloted`
--

INSERT INTO `hostelalloted` (`ufirstb`, `usecondb`, `uthirdb`, `ufourb`, `ufirstg`, `usecondg`, `uthirdg`, `ufourg`, `pfirstb`, `psecondb`, `pfirstg`, `psecondg`) VALUES
('0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `hostellist`
--

CREATE TABLE `hostellist` (
  `id` int(11) NOT NULL,
  `hname` varchar(50) NOT NULL,
  `nblocks` varchar(50) NOT NULL,
  `roomno` longtext NOT NULL,
  `capacity` longtext NOT NULL,
  `ccapacity` text NOT NULL,
  `grad` varchar(40) NOT NULL,
  `year` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hostellist`
--

INSERT INTO `hostellist` (`id`, `hname`, `nblocks`, `roomno`, `capacity`, `ccapacity`, `grad`, `year`) VALUES
(0, 'Amaravathi', '1', 'a:1:{i:1;a:1:{i:0;s:1:"1";}}', 'a:1:{i:1;a:1:{i:0;s:1:"1";}}', 'a:1:{i:1;a:1:{i:0;s:1:"1";}}', 'null', 'null');

-- --------------------------------------------------------

--
-- Table structure for table `hosteloffice`
--

CREATE TABLE `hosteloffice` (
  `email` varchar(40) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hosteloffice`
--

INSERT INTO `hosteloffice` (`email`, `fname`, `pass`) VALUES
('jjsridharan@gmail.com', 'Admin', 'hostel@123');

-- --------------------------------------------------------

--
-- Table structure for table `maillist`
--

CREATE TABLE `maillist` (
  `mail` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maillist`
--

INSERT INTO `maillist` (`mail`) VALUES
('srijj48@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `nightattendance`
--

CREATE TABLE `nightattendance` (
  `regno` varchar(15) NOT NULL,
  `time` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `outpasshistory`
--

CREATE TABLE `outpasshistory` (
  `regno` varchar(15) NOT NULL,
  `history` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `outpassrequest`
--

CREATE TABLE `outpassrequest` (
  `regno` varchar(15) NOT NULL,
  `sdate` varchar(50) NOT NULL,
  `edate` varchar(50) NOT NULL,
  `reason` varchar(150) NOT NULL,
  `rcmail` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `parentinfo`
--

CREATE TABLE `parentinfo` (
  `regno` varchar(15) NOT NULL,
  `pname` varchar(40) NOT NULL,
  `mailid` varchar(40) NOT NULL,
  `phoneno` varchar(15) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parentinfo`
--

INSERT INTO `parentinfo` (`regno`, `pname`, `mailid`, `phoneno`) VALUES
('2014503056', 'Jothiraman', 'srijj48@gmail.com', '9442334539'),
('2014503057', 'Pachai', 'pachai@gmail.com', '9442334539'),
('2014503058', 'Resham', 'Resham@gmail.com', '9442334539');

-- --------------------------------------------------------

--
-- Table structure for table `rclist`
--

CREATE TABLE `rclist` (
  `fname` varchar(40) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `hname` varchar(50) NOT NULL,
  `hblock` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rclist`
--

INSERT INTO `rclist` (`fname`, `lname`, `gender`, `pass`, `mail`, `phone`, `hname`, `hblock`) VALUES
('Raja', 'R', 'male', 'raja', 'raja@gmail.com', '8438145810', 'Amaravathi', '1');

-- --------------------------------------------------------

--
-- Table structure for table `rejectedoutpass`
--

CREATE TABLE `rejectedoutpass` (
  `regno` varchar(40) NOT NULL,
  `sdate` varchar(40) NOT NULL,
  `edate` varchar(40) NOT NULL,
  `reason` varchar(150) NOT NULL,
  `rcname` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
  `hid` varchar(50) NOT NULL,
  `hblock` varchar(40) DEFAULT NULL,
  `hroom` varchar(15) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`regno`, `bioid`, `fname`, `lname`, `pass`, `gender`, `year`, `grad`, `dept`, `mailid`, `phone`, `hid`, `hblock`, `hroom`) VALUES
('2014503056', NULL, 'Sridharan', 'J', '1234', 'male', '4', 'UG', 'CSE', 'jjsridharan@gmail.com', '8438145810', '', NULL, NULL),
('2014503057', NULL, 'Sundara', 'Akilesh', '1234', 'male', '4', 'UG', 'CSE', 'sundar@gmail.com', '8438145810', '', NULL, NULL),
('2014503058', NULL, 'Tenduli', 'Reshma', '1234', 'male', '4', 'UG', 'MECH', 'tenduli@gmail.com', '8438145809', '', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hostellist`
--
ALTER TABLE `hostellist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hosteloffice`
--
ALTER TABLE `hosteloffice`
  ADD PRIMARY KEY (`email`);

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
-- Indexes for table `outpassrequest`
--
ALTER TABLE `outpassrequest`
  ADD PRIMARY KEY (`regno`);

--
-- Indexes for table `parentinfo`
--
ALTER TABLE `parentinfo`
  ADD PRIMARY KEY (`mailid`,`regno`);

--
-- Indexes for table `rclist`
--
ALTER TABLE `rclist`
  ADD PRIMARY KEY (`mail`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`mailid`,`regno`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
