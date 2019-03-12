-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2019 at 11:45 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `leaveapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` int(11) NOT NULL,
  `studentName` varchar(255) NOT NULL,
  `rollNumber` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `semester` int(11) NOT NULL,
  `startDate` varchar(256) NOT NULL,
  `endDate` varchar(256) NOT NULL,
  `natureOfLeave` varchar(255) NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `classScheduledOnLeave` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobile` varchar(256) NOT NULL,
  `email` varchar(255) NOT NULL,
  `uploadedImageName` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `studentName`, `rollNumber`, `branch`, `semester`, `startDate`, `endDate`, `natureOfLeave`, `purpose`, `classScheduledOnLeave`, `address`, `mobile`, `email`, `uploadedImageName`, `status`) VALUES
(54, 'prateek', 'iec2017029', 'ECE', 4, '2019-03-09', '2019-03-20', 'IFSC2017029', 'BOI', 'PRATEEK', 'LALPUR', 'BH4', 'iec2017029@iiita.ac.in', '', 3),
(56, 'John doe', 'iec2012029', 'IT', 4, '2019-03-22', '2019-03-23', 'DATA_STRUCTURE', 'ZERO_MERCY', 'popo', 'ALLAHABAD', 'BH1', 'iec2012029@iiita.ac.in', '', 0),
(57, 'jhon doe', 'iec2012029', 'IT', 4, '2019-03-22', '2019-03-23', 'jbjb', 'ZERO_MERCY', 'popo', 'ranchi', 'BH1', 'iec2012029@iiita.ac.in', '', 0),
(58, 'jhon doe', 'iec2012029', 'IT', 6, '2019-03-27', '2019-03-31', 'DATA_STRUCTURE', 'ZERO_MERCY', 'ergte', 'ALLAHABAD', 'BH1', 'iec2012029@iiita.ac.in', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(200) NOT NULL,
  `Name` varchar(300) NOT NULL,
  `Enroll` varchar(200) NOT NULL,
  `HOSTEL` varchar(11) NOT NULL,
  `Email` varchar(300) NOT NULL,
  `Password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Name`, `Enroll`, `HOSTEL`, `Email`, `Password`) VALUES
(7, 'John', 'IIM2017008', 'BH4', 'iim2017008@iiita.ac.in', '527bd5b5d689e2c32ae974c6229ff785'),
(8, 'los balancos', 'iec2017029', 'BH4', 'iec2017029@iiita.ac.in', '202cb962ac59075b964b07152d234b70'),
(15, 'john doe', 'iec2012029', 'BH1', 'iec2012029@iiita.ac.in', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
