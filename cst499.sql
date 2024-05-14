-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2024 at 07:02 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cst499`
--

-- --------------------------------------------------------

--
-- Table structure for table `courseenrollment`
--

CREATE TABLE `courseenrollment` (
  `enrollmentID` int(8) NOT NULL,
  `studentID` int(8) NOT NULL,
  `offeringID` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `courseoffering`
--

CREATE TABLE `courseoffering` (
  `offeringID` varchar(8) NOT NULL,
  `courseID` varchar(6) NOT NULL,
  `courseYear` int(4) NOT NULL,
  `courseSemester` char(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `courseopennotification`
--

CREATE TABLE `courseopennotification` (
  `notificationID` int(8) NOT NULL,
  `studentID` int(8) NOT NULL,
  `offeringID` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `courseID` varchar(6) NOT NULL,
  `courseName` varchar(64) NOT NULL,
  `courseMax` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`courseID`, `courseName`, `courseMax`) VALUES
('BUS105', 'Business & Academic Success', 25),
('CPT200', 'Fundamentals of Programming Languages', 25),
('CPT301', 'Computer Organization & Architecture', 25),
('CPT304', 'Operating Systems Theory & Design', 25),
('CPT307', 'Data Structures & Algorithms', 25),
('CPT310', 'Database Systems & Management', 25),
('CST301', 'Software Technology & Design', 25),
('CST304', 'Software Requirements & Analysis', 25),
('CST307', 'Software Architecture & Design', 25),
('CST310', 'Software Development', 25),
('CST313', 'Software Testing', 25),
('CST316', 'Information Security Management', 25),
('CST499', 'Capstone for Computer Software Technology', 25),
('CYB300', 'System Administration & Security', 25),
('ENG328', 'Scietific & Technical Writing', 25),
('GEN499', 'General Education Capsone', 25),
('INT301', 'Computer Networking', 25),
('MAT222', 'Intermediate Algebra', 25),
('MAT232', 'Statistical Literacy', 25),
('TEC101', 'Fundamentals of Information Technology & Literacy', 25),
('TMG300', 'Scrum Basics', 25);

-- --------------------------------------------------------

--
-- Table structure for table `queue`
--

CREATE TABLE `queue` (
  `queueID` int(8) NOT NULL,
  `studentID` int(8) NOT NULL,
  `offeringID` varchar(8) NOT NULL,
  `queueDateTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `studentID` int(8) NOT NULL,
  `studentName` varchar(16) NOT NULL,
  `studentFirst` varchar(16) NOT NULL,
  `studentLast` varchar(16) NOT NULL,
  `studentAddress` varchar(128) NOT NULL,
  `studentPhone` int(11) NOT NULL,
  `studentEmail` varchar(32) NOT NULL,
  `studentPword` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`studentID`, `studentName`, `studentFirst`, `studentLast`, `studentAddress`, `studentPhone`, `studentEmail`, `studentPword`) VALUES
(1234, 'aesvatek', 'Adam', 'Svatek', '318 S. Highland St\r\nWales, WI 53183', 1234567890, 'adam.svatek@gmail.com', 'Happy123!'),
(1994, 'deldavis', 'Del', 'Davis', 'Del Davis Christmas Tree Farm', 1123580000, 'deldavis@treemail.com', 'trees!'),
(1997, 'johnfish', 'John', 'Fisherman', 'San Pablo Bay', 1234560000, 'johnthefisherman@fishmail.com', 'fishon!');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courseenrollment`
--
ALTER TABLE `courseenrollment`
  ADD PRIMARY KEY (`enrollmentID`),
  ADD KEY `studentID` (`studentID`),
  ADD KEY `offeringID` (`offeringID`);

--
-- Indexes for table `courseoffering`
--
ALTER TABLE `courseoffering`
  ADD PRIMARY KEY (`offeringID`),
  ADD KEY `courseID` (`courseID`);

--
-- Indexes for table `courseopennotification`
--
ALTER TABLE `courseopennotification`
  ADD PRIMARY KEY (`notificationID`),
  ADD KEY `offeringID` (`offeringID`),
  ADD KEY `studentID` (`studentID`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`courseID`);

--
-- Indexes for table `queue`
--
ALTER TABLE `queue`
  ADD PRIMARY KEY (`queueID`),
  ADD KEY `studentID` (`studentID`),
  ADD KEY `offeringID` (`offeringID`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`studentID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `courseenrollment`
--
ALTER TABLE `courseenrollment`
  ADD CONSTRAINT `courseenrollment_ibfk_1` FOREIGN KEY (`studentID`) REFERENCES `students` (`studentID`),
  ADD CONSTRAINT `courseenrollment_ibfk_2` FOREIGN KEY (`offeringID`) REFERENCES `courseoffering` (`offeringID`);

--
-- Constraints for table `courseoffering`
--
ALTER TABLE `courseoffering`
  ADD CONSTRAINT `courseoffering_ibfk_1` FOREIGN KEY (`courseID`) REFERENCES `courses` (`courseID`);

--
-- Constraints for table `courseopennotification`
--
ALTER TABLE `courseopennotification`
  ADD CONSTRAINT `courseopennotification_ibfk_1` FOREIGN KEY (`offeringID`) REFERENCES `courseoffering` (`offeringID`),
  ADD CONSTRAINT `courseopennotification_ibfk_2` FOREIGN KEY (`studentID`) REFERENCES `students` (`studentID`);

--
-- Constraints for table `queue`
--
ALTER TABLE `queue`
  ADD CONSTRAINT `queue_ibfk_1` FOREIGN KEY (`studentID`) REFERENCES `students` (`studentID`),
  ADD CONSTRAINT `queue_ibfk_2` FOREIGN KEY (`offeringID`) REFERENCES `courseoffering` (`offeringID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
