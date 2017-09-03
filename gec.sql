-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2017 at 05:50 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gec`
--
CREATE DATABASE IF NOT EXISTS `gec` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `gec`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_name` varchar(50) NOT NULL,
  `admin_pass` varchar(100) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_type` varchar(30) NOT NULL,
  PRIMARY KEY (`admin_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_name`, `admin_pass`, `admin_email`, `admin_type`) VALUES
('vi', 'b7a34cd782ccdfd0293be3d5763e7b87', 'v@g.com', 'Administrative'),
('Vikash', 'b7a34cd782ccdfd0293be3d5763e7b87', 'vikashbanjare01@gmail.com', 'Principal'),
('vikki', 'b7a34cd782ccdfd0293be3d5763e7b87', 'v@g.om', 'HOD'),
('Yo', 'b7a34cd782ccdfd0293be3d5763e7b87', 'v@g.com', 'Faculty');

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE IF NOT EXISTS `branch` (
  `bid` int(5) NOT NULL AUTO_INCREMENT,
  `bname` varchar(50) NOT NULL,
  PRIMARY KEY (`bid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`bid`, `bname`) VALUES
(1, 'Computer Science & Engineering'),
(2, 'Mechanical Engineering'),
(3, 'Electrical &amp; Electronics Engineering'),
(4, 'Electronics &amp; Telecommunication Engineering'),
(5, 'Civil Engineering'),
(6, 'For all');

-- --------------------------------------------------------

--
-- Table structure for table `codeclub`
--

CREATE TABLE IF NOT EXISTS `codeclub` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `work` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `linkedin` varchar(100) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `github` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `number` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `faculty_profile`
--

CREATE TABLE IF NOT EXISTS `faculty_profile` (
  `fid` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `department` varchar(30) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL,
  `experience` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `researcharea` varchar(200) NOT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `faculty_profile`
--

INSERT INTO `faculty_profile` (`fid`, `fname`, `department`, `qualification`, `image`, `experience`, `subject`, `researcharea`) VALUES
(3, 'master jiii', 'Computer Science & Engineering', 'nkgn', 'gst.jpg', 'abcsd', 'vdgggd', 'vdbbb'),
(4, 'manmohan', '.Computer Science & Engineerin', 'm.tech', 'images1.jpg', '4', 'physics', 'quantum theory'),
(5, 'manmohan SINGH', '.Computer Science & Engineerin', 'MAN', 'images1.jpg', 'GGURY', 'hjgy', 'ygyufguyjh'),
(6, '', '.Computer Science & Engineerin', 'MAN', 'images1.jpg', 'GGURY', 'hjgy', 'ygyufguyjh'),
(7, '', '.Computer Science & Engineerin', 'MAN', 'images1.jpg', 'GGURY', 'hjgy', 'ygyufguyjh'),
(8, '', '.Computer Science & Engineerin', 'mbd', '', 'nfehf', 'hudyhue', 'vfdyyduvguyfg'),
(9, 'viakash', '.Computer Science & Engineerin', 'mbd', '', 'nfehf', 'hudyhue', 'vfdyyduvguyfg'),
(10, 'viakash', '.Computer Science & Engineerin', 'mbd', '', 'nfehf', 'hudyhue', 'vfdyyduvguyfg'),
(11, 'viakash', '.Computer Science & Engineerin', 'mbd', '', 'nfehf', 'hudyhue', 'vfdyyduvguyfg'),
(12, '".$fname."', '".$dptid."', '".$qwl."', '".$imagename1."', '".$expr."', '".$subject."', '".$rsrch."'),
(13, 'manish', '.Computer Science & Engineerin', 'jfih', 'img.png', 'fdeef', 'ijdfi', 'jifehf'),
(14, 'arunasur', '.Computer Science & Engineerin', '20', 'img.png', 'kkk', 'kkgk', 'kgfkgkgkggkkkgkg'),
(15, 'arunasur', '.Computer Science & Engineerin', '20', 'img.png', 'kkk', 'kkgk', 'kgfkgkgkggkkkgkg');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `feedback_id` int(11) NOT NULL AUTO_INCREMENT,
  `feedback_rate` varchar(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `feedback_title` varchar(1000) NOT NULL,
  `feedback_desc` text NOT NULL,
  `added_on` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `feedback_type` varchar(50) NOT NULL,
  PRIMARY KEY (`feedback_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `issues`
--

CREATE TABLE IF NOT EXISTS `issues` (
  `issue_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(11) NOT NULL,
  `issue_title` varchar(300) NOT NULL,
  `issue_desc` longtext NOT NULL,
  `issue_status` varchar(20) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `related_photo` varchar(200) NOT NULL,
  `product_detail` varchar(70) NOT NULL,
  `issue_type` varchar(20) NOT NULL,
  `admin_comment` text NOT NULL,
  PRIMARY KEY (`issue_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `issues`
--

INSERT INTO `issues` (`issue_id`, `student_id`, `issue_title`, `issue_desc`, `issue_status`, `added_on`, `related_photo`, `product_detail`, `issue_type`, `admin_comment`) VALUES
(5, '3162214059', 'The standard Lorem Ipsum passage, used since the 1500s', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 'Open', '2017-08-09 15:41:05', 'slider1.jpg', 'The standard Lorem Ipsum passage, used since the 1500s', 'Technical', '                        '),
(6, '3162214059', 'The standard Lorem Ipsum passage, used since the 1500s', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 'Inprocess', '2017-08-09 15:41:13', 'slider1.jpg', 'The standard Lorem Ipsum passage, used since the 1500s', 'Technical', '                        '),
(7, '3162214059', 'The standard Lorem Ipsum passage, used since the 1500s', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 'Inprocess', '2017-08-10 11:26:09', 'slider1.jpg', 'The standard Lorem Ipsum passage, used since the 1500s', 'Technical', '          RaamTest1AdmIssue, Testing for handling issue management, progress looking for how assignment or escalation can be handled'),
(8, '3162214059', 'The standard Lorem Ipsum passage, used since the 1500s', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 'Respond', '2017-08-09 15:41:33', 'slider1.jpg', 'The standard Lorem Ipsum passage, used since the 1500s', 'Technical', '                        '),
(11, '3162214059', '"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."', '"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."', 'Resolve', '2017-08-09 15:42:12', 'feedback.jpg', '"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, conse', 'Technical', '                        '),
(12, '3162214059', 'Yo baby', 'Yo babdy asdjflsdjf jadk ndjf nioj klnio kio', 'Solved', '2017-08-09 15:42:24', '10.png', '', 'Miscellaneous', '                        '),
(13, '3162214059', 'computer not working', 'software is not working. computer is not booting up.', 'Solved', '2017-08-21 10:35:05', 'bulb_logo.png', 'c-12  of our computer lab is  not working', 'Technical', '          ');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `news_id` int(11) NOT NULL AUTO_INCREMENT,
  `dept_name` varchar(500) NOT NULL,
  `news_title` varchar(300) NOT NULL,
  `news_desc` varchar(5000) NOT NULL,
  `related_photo` varchar(300) NOT NULL,
  `creater_id` varchar(100) NOT NULL,
  `is_active` varchar(10) NOT NULL,
  `added_on` varchar(50) NOT NULL,
  `last_date` varchar(50) NOT NULL,
  `news_type` varchar(50) NOT NULL,
  `url` varchar(500) NOT NULL,
  PRIMARY KEY (`news_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `dept_name`, `news_title`, `news_desc`, `related_photo`, `creater_id`, `is_active`, `added_on`, `last_date`, `news_type`, `url`) VALUES
(1, 'For College,', 'The standard Lorem Ipsum passage, used since the 1500s', '                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum                                        ', '1004.jpg', 'Vikash', 'active', '2017-08-07 13:48:18', '2017-08-12', 'For Training and Placement', 'aayam.com'),
(2, 'Computer Science And Engineering,Mechanical Engineering,Civil Engineering,', 'The standard Lorem Ipsum passage, used since the 1500s', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', '1004.jpg', 'Vikash', 'active', '2017-08-07 13:47:09', '2017-08-12', 'For Training and Placement', 'aayam.com'),
(3, 'Computer Science And Engineering,Mechanical Engineering,Civil Engineering,', 'The standard Lorem Ipsum passage, used since the 1500s', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', '1004.jpg', 'Vikash', 'active', '2017-08-07 13:47:27', '2017-08-12', 'For Training and Placement', 'aayam.com'),
(4, 'For all branch,For College,', 'Manmohans Laptop is not working so collection money to replace his motherboard', 'Manmohans Laptop is not working so collection money to replace his motherboard', 'Screenshot (22).png', 'Vikash', 'active', '2017-08-10 13:02:13', '2017-08-19', 'For Addmission', 'http://google.com'),
(5, 'For College,', 'The standard Lorem Ipsum passage, used since the 1500s', '                        The standard Lorem Ipsum passage, used since the 1500s                    ', '', 'Vikash', 'active', '2017-08-10 14:43:41', '2017-08-18', 'For Exam', 'http://google.com'),
(6, 'Computer Science And Engineering,', 'The standard Lorem Ipsum passage, used since the 1500s', 'The standard Lorem Ipsum passage, used since the 1500s', '', 'Vikash', 'active', '2017-08-10 14:46:58', '2017-08-11', 'For Training and Placement', 'http://google.com'),
(7, 'Computer Science And Engineering,Mechanical Engineering,', 'The standard Lorem Ipsum passage, used since the 1500s', '                        ', '', 'Vikash', 'active', '2017-08-10 14:56:51', '', 'For Exam', 'https://go'),
(8, 'Civil Engineering,', 'The standard Lorem Ipsum passage, used since the 1500s', '                        ', '', 'Vikash', 'active', '2017-08-10 14:58:49', '', 'For Exam', 'http://google.com'),
(9, 'Mechanical Engineering,', 'The standard Lorem Ipsum passage, used since the 1500s', '                        ', '', 'Vikash', 'active', '2017-08-10 15:01:13', '', 'For Exam', 'http://google.com'),
(10, 'Computer Science And Engineering,', 'The standard Lorem Ipsum passage, used since the 1500s', '  ', 'complain.pdf', 'Vikash', 'active', '2017-08-10 15:03:32', '', 'For Function', 'http://google.com'),
(11, 'Electronics And Telecommunication,', 'The standard Lorem Ipsum passage, used since the 1500s', '                        ', '', 'Vikash', 'active', '2017-08-10 15:04:49', '', 'For Exam', 'http://google.com'),
(12, 'For College,', 'State Scholarship', '                      The state announced the scholarship.', 'IMG_20170421_125749.jpg', 'Vikash', 'active', '2017-08-10 16:46:01', '2017-08-10', 'For Scholoarship', 'http://');

-- --------------------------------------------------------

--
-- Table structure for table `news_type`
--

CREATE TABLE IF NOT EXISTS `news_type` (
  `nid` int(10) NOT NULL AUTO_INCREMENT,
  `ntype` varchar(50) NOT NULL,
  PRIMARY KEY (`nid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `news_type`
--

INSERT INTO `news_type` (`nid`, `ntype`) VALUES
(3, 'For Training and Placement'),
(4, 'For Scholoarship'),
(5, 'For Addmission'),
(6, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE IF NOT EXISTS `semester` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `semester` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`id`, `semester`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8);

-- --------------------------------------------------------

--
-- Table structure for table `university`
--

CREATE TABLE IF NOT EXISTS `university` (
  `nid` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  PRIMARY KEY (`nid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `university`
--

INSERT INTO `university` (`nid`, `title`) VALUES
(1, '5th semester result open'),
(2, '6th semester result open'),
(3, 'Syllabus'),
(4, 'Enrollment form 2017'),
(5, 'Academic Calender');

-- --------------------------------------------------------

--
-- Table structure for table `user_registration`
--

CREATE TABLE IF NOT EXISTS `user_registration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `fathername` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `emailid` varchar(30) NOT NULL,
  `mobileno` varchar(15) NOT NULL,
  `address` text NOT NULL,
  `rollno` varchar(12) NOT NULL,
  `enrollment` varchar(10) DEFAULT NULL,
  `semester` int(2) NOT NULL,
  `branch` varchar(40) NOT NULL,
  `achive` text NOT NULL,
  `photo` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `rollno` (`rollno`),
  UNIQUE KEY `enrollment` (`enrollment`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `user_registration`
--

INSERT INTO `user_registration` (`id`, `fname`, `lname`, `fathername`, `dob`, `gender`, `emailid`, `mobileno`, `address`, `rollno`, `enrollment`, `semester`, `branch`, `achive`, `photo`, `password`) VALUES
(1, 'Vikash', 'Banjare', 'J.R.Banjare', '1997-02-01', 'Male', 'vikashbanjare01@gmail.com', '8085742314', '                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                Kumhari                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                ', '3162214059', 'AP0938', 7, 'Computer Science And Engineering', '                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                Bootstrap                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                ', '', 'b7a34cd782ccdfd0293be3d5763e7b87'),
(2, '', '', '', '0000-00-00', '', '', '', '', '', '', 0, '', '', '', '@'),
(5, 'Manmohan', '', '', '0000-00-00', '', 'vikashbanjare01@gmail.com', '7575757575', '', '3162214024', NULL, 0, 'Mechanical Engineering', '', '', 'Man@57575'),
(6, 'Locha', '', '', '0000-00-00', '', 'vikashbanjare01@gmail.com', '8085742314', '', '3162214023', NULL, 0, 'Civil Engineering', '', '', '460987fe7c9ea944e23f63d57dbd1d2f'),
(7, 'Honey sing', '', '', '0000-00-00', '', 'vikashbanjare01@gmail.com', '8085742314', '', '3162214000', NULL, 0, 'Computer Science And Engineering', '', '', '5c46bdc77eb62bfb5f7eb61b6a67108b');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
