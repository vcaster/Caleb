-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2018 at 07:29 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moonsys`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `ID` int(11) NOT NULL,
  `activity` varchar(100) NOT NULL,
  `empID` int(11) NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `ID` int(11) NOT NULL,
  `depID` int(11) NOT NULL,
  `announcement` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `empID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `ID` int(11) NOT NULL,
  `timeIn` datetime NOT NULL,
  `timeOut` datetime NOT NULL,
  `empID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `deptID` int(11) NOT NULL,
  `deptName` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `empdetails`
--

CREATE TABLE `empdetails` (
  `empID` int(11) NOT NULL,
  `firstName` varchar(30) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  `middleName` varchar(30) DEFAULT NULL,
  `positionID` int(11) NOT NULL,
  `deptID` int(11) NOT NULL,
  `birthDate` date NOT NULL,
  `age` int(100) NOT NULL,
  `sex` char(1) NOT NULL,
  `address` varchar(50) NOT NULL,
  `hireDate` date NOT NULL,
  `profilePic` varchar(100) NOT NULL,
  `loginID` int(11) NOT NULL,
  `managerID` int(11) NOT NULL,
  `filesID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `filesID` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `category` varchar(30) NOT NULL,
  `empID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `leaves`
--

CREATE TABLE `leaves` (
  `leaveID` int(11) NOT NULL,
  `reason` varchar(30) NOT NULL,
  `date` datetime NOT NULL,
  `startDate` datetime NOT NULL,
  `endDate` datetime NOT NULL,
  `totalDays` int(255) NOT NULL,
  `empID` int(11) NOT NULL,
  `status` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `loginID` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `empID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `managerid`
--

CREATE TABLE `managerid` (
  `managerID` int(11) NOT NULL,
  `empID` int(11) NOT NULL,
  `deptID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `paylog`
--

CREATE TABLE `paylog` (
  `payLogID` int(11) NOT NULL,
  `reason` varchar(30) NOT NULL,
  `amountPaid` int(255) NOT NULL,
  `empID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `positions`
--

CREATE TABLE `positions` (
  `positionID` int(11) NOT NULL,
  `postionName` varchar(30) NOT NULL,
  `deptID` int(11) NOT NULL,
  `status` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `ID` int(11) NOT NULL,
  `reportTitle` varchar(50) NOT NULL,
  `reportBody` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `empID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `salaryID` int(11) NOT NULL,
  `empID` int(11) NOT NULL,
  `salaryAmt` int(255) UNSIGNED NOT NULL,
  `tax` int(255) NOT NULL,
  `payLogID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `empID` (`empID`);

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `deptID` (`depID`),
  ADD KEY `empID` (`empID`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `empID` (`empID`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`deptID`);

--
-- Indexes for table `empdetails`
--
ALTER TABLE `empdetails`
  ADD PRIMARY KEY (`empID`),
  ADD KEY `positionID` (`positionID`),
  ADD KEY `loginID` (`loginID`),
  ADD KEY `managerID` (`managerID`),
  ADD KEY `filesID` (`filesID`),
  ADD KEY `deptID` (`deptID`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`filesID`),
  ADD KEY `empID` (`empID`);

--
-- Indexes for table `leaves`
--
ALTER TABLE `leaves`
  ADD PRIMARY KEY (`leaveID`),
  ADD KEY `empID` (`empID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`loginID`),
  ADD KEY `empID` (`empID`);

--
-- Indexes for table `managerid`
--
ALTER TABLE `managerid`
  ADD PRIMARY KEY (`managerID`),
  ADD KEY `empID` (`empID`),
  ADD KEY `deptID` (`deptID`);

--
-- Indexes for table `paylog`
--
ALTER TABLE `paylog`
  ADD PRIMARY KEY (`payLogID`),
  ADD KEY `empID` (`empID`);

--
-- Indexes for table `positions`
--
ALTER TABLE `positions`
  ADD PRIMARY KEY (`positionID`),
  ADD KEY `deptID` (`deptID`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `empID` (`empID`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`salaryID`),
  ADD KEY `empID` (`empID`),
  ADD KEY `payLogID` (`payLogID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `deptID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `empdetails`
--
ALTER TABLE `empdetails`
  MODIFY `empID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `filesID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `leaves`
--
ALTER TABLE `leaves`
  MODIFY `leaveID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `loginID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `managerid`
--
ALTER TABLE `managerid`
  MODIFY `managerID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `paylog`
--
ALTER TABLE `paylog`
  MODIFY `payLogID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `positions`
--
ALTER TABLE `positions`
  MODIFY `positionID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `salaryID` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `activity`
--
ALTER TABLE `activity`
  ADD CONSTRAINT `FK_empIDactivity` FOREIGN KEY (`empID`) REFERENCES `empdetails` (`empID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `announcement`
--
ALTER TABLE `announcement`
  ADD CONSTRAINT `FK_deptIDannouncement ` FOREIGN KEY (`depID`) REFERENCES `departments` (`deptID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_empIDannouncement ` FOREIGN KEY (`empID`) REFERENCES `empdetails` (`empID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `FK_empIDattendance` FOREIGN KEY (`empID`) REFERENCES `empdetails` (`empID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `empdetails`
--
ALTER TABLE `empdetails`
  ADD CONSTRAINT `FK_deptID` FOREIGN KEY (`deptID`) REFERENCES `departments` (`deptID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_filesID` FOREIGN KEY (`filesID`) REFERENCES `files` (`filesID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_loginID` FOREIGN KEY (`loginID`) REFERENCES `login` (`loginID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_managerID` FOREIGN KEY (`managerID`) REFERENCES `managerid` (`managerID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_postionID` FOREIGN KEY (`positionID`) REFERENCES `positions` (`positionID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `files`
--
ALTER TABLE `files`
  ADD CONSTRAINT `FK_empIDfiles` FOREIGN KEY (`empID`) REFERENCES `empdetails` (`empID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `leaves`
--
ALTER TABLE `leaves`
  ADD CONSTRAINT `FK_empIDleaves` FOREIGN KEY (`empID`) REFERENCES `empdetails` (`empID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `FK_empIDlogin` FOREIGN KEY (`empID`) REFERENCES `empdetails` (`empID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `managerid`
--
ALTER TABLE `managerid`
  ADD CONSTRAINT `FK_deptIDmanager` FOREIGN KEY (`deptID`) REFERENCES `departments` (`deptID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_empIDmanager` FOREIGN KEY (`empID`) REFERENCES `empdetails` (`empID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `paylog`
--
ALTER TABLE `paylog`
  ADD CONSTRAINT `FK_empIDpaylog` FOREIGN KEY (`empID`) REFERENCES `empdetails` (`empID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `positions`
--
ALTER TABLE `positions`
  ADD CONSTRAINT `FK_deptIDpositions` FOREIGN KEY (`deptID`) REFERENCES `departments` (`deptID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reports`
--
ALTER TABLE `reports`
  ADD CONSTRAINT `FK_empIDreports` FOREIGN KEY (`empID`) REFERENCES `empdetails` (`empID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `salary`
--
ALTER TABLE `salary`
  ADD CONSTRAINT `FK_empIDsalary` FOREIGN KEY (`empID`) REFERENCES `empdetails` (`empID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_paylogIDsalary` FOREIGN KEY (`payLogID`) REFERENCES `paylog` (`payLogID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
