-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Apr 13, 2020 at 11:35 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dms_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(10) NOT NULL,
  `AdminName` varchar(120) DEFAULT NULL,
  `UserName` varchar(120) DEFAULT NULL,
  `MobileNumber` bigint(11) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `Password` varchar(120) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `UserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`) VALUES
(1, 'Ramesh Bugga', 'admin', 211712539, 'rkbugga@gmail.com', 'Test@123', '2020-03-10 18:30:00'),
(2, 'kumar ', 'admin', 211712539, 'rkbugga@gmail.com', 'kumar', '2020-03-10 18:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbldirectory`
--

CREATE TABLE `tbldirectory` (
  `ID` int(10) NOT NULL,
  `FullName` varchar(120) DEFAULT NULL,
  `Profession` varchar(120) DEFAULT NULL,
  `Email` varchar(120) NOT NULL,
  `MobileNumber` bigint(11) DEFAULT NULL,
  `UnitSerialNo` varchar(120) DEFAULT NULL,
  `UnitCatagory` varchar(120) DEFAULT NULL,
  `Comments` varchar(255) DEFAULT NULL,
  `BusName` varchar(120) DEFAULT NULL,
  `BusPhNo` varchar(120) DEFAULT NULL,
  `Address` varchar(250) NOT NULL,
  `City` varchar(250) NOT NULL,
  `Status` varchar(120) NOT NULL,
  `CallRecorddate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbldirectory`
--

INSERT INTO `tbldirectory` (`ID`, `FullName`, `Profession`, `Email`, `MobileNumber`, `UnitSerialNo`, `UnitCatagory`, `Comments`, `BusName`, `BusPhNo`, `Address`, `City`, `Status`, `CallRecorddate`) VALUES
(1, 'Ramesh', 'Software Developer', 'rkbugga@gmail.com', 221363539, '17567CT3456789', 'ICT250', 'Alert Irrution keeps on restarting', 'EFTCO', '043654675', 'Hamiton', 'Hamiton', 'Dealer', '2020-03-10 18:30:00'),
(2, 'Kumar', 'IT Service', 'kumar@gmail.com', 221363539, '17567CT3456789', 'ICT250', 'Alert Irrution keeps on restarting', 'EFTCO', '043654675', 'Hamiton', 'Hamiton', '', '2020-03-10 18:30:00'),
(3, 'Srujana', 'Software Developer', 'srujana@gmail.com', 221363539, '17567CT3456789', 'ICT250', 'Alert Irrution keeps on restarting', 'EFTCO', '043654675', 'Hamiton', 'Hamiton', '0', '2020-03-10 18:30:00'),
(4, 'Praveen', 'IT Support', 'praveen@gmail.com', 221363539, '17567CT3456789', 'ICT250', 'Alert Irrution keeps on restarting', 'EFTCO', '043654675', 'Hamiton', 'Hamiton', 'Corporate', '2020-03-10 18:30:00'),
(5, 'Madan', 'IT Service', 'madan@gmail.com', 221363539, '17567CT3456789', 'ICT250', 'Alert Irrution keeps on restarting', 'EFTCO', '043654675', 'Hamiton', 'Hamiton', '', '2020-03-10 18:30:00'),
(6, 'Ramesh', 'Software Developer', 'rkbugga@gmail.com', 221363539, '17567CT3456789', 'ICT250', 'Alert Irrution keeps on restarting', 'EFTCO', '043654675', 'Hamiton', 'Hamiton', 'Corporate', '2020-03-10 05:30:00'),
(15, 'Kumar', 'Developer', 'rkbugga@gmail.com', 211713539, '18345CT234666', 'iwl255', 'LCD faulty', 'Skyzer', '0211713539', '4/21A Malvern Road, Morningside', 'Auckland', '', '2020-04-13 07:39:08'),
(16, 'Rajesh ', 'IT Consultant', 'rajesh@gmail.com', 211713539, '1834584748234777', 'Tetra', 'GPRS issues', 'Skyzer', '0211713539', '1/700 NEW NORTH ROAD', 'MOUNT ALBERT', '', '2020-04-13 07:39:50'),
(17, 'Kumar', 'Developer', 'rkbugga@gmail.com', 211713539, '18345CT234666', 'iwl255', 'GPRS issues', '0643334344', '0211713539', '4/21A Malvern Road, Morningside', 'Auckland', 'Corporate', '2020-04-13 07:46:48'),
(18, 'Kumar', 'Developer', 'rkbugga@gmail.com', 211713539, '18345CT234', 'iwl255', 'Network issues', 'Skyzer', '095678784', '4/21A Malvern Road, Morningside', 'Auckland', 'Dealer', '2020-04-13 07:54:28'),
(19, 'Kumar', 'Developer', 'rkbugga@gmail.com', 211713539, '18345CT234777', 'iwl255', NULL, 'Skyzer', '04333333333', '4/21A Malvern Road, Morningside', 'Auckland', '1', '2020-04-13 08:04:46'),
(20, 'Kumar4', 'Developer', 'rkbugga@gmail.com', 211713539, '18345CT234777', 'iwl255', NULL, 'Skyzer', '0211713539', '4/21A Malvern Road, Morningside', 'Auckland', '1', '2020-04-13 08:24:44'),
(21, 'Kumar8', 'IT Consultant', 'rkbugga@gmail.com', 211713539, '1834584748234777', 'Tetra', 'LCD faulty', 'eftco', '064567678', '4/21A Malvern Road, Morningside', 'Auckland', 'Dealer', '2020-04-13 08:30:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbldirectory`
--
ALTER TABLE `tbldirectory`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbldirectory`
--
ALTER TABLE `tbldirectory`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
