-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2021 at 04:43 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `relation`
--

CREATE TABLE `relation` (
  `s` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `MobileNo` varchar(10) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Con_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `relation`
--

INSERT INTO `relation` (`s`, `Name`, `MobileNo`, `Email`, `Gender`, `Address`, `Password`, `Con_password`) VALUES
(116, 'skd', '1234567890', 'sdk@gmail.com', 'Male', 'daadasd', 'asdf@1234', 'asdf@1234'),
(240, 'Mansi Mohite', '2147483647', 'Mansi@123gmai.com', 'Female', 'A/P-Tembhurni', 'Mansi@12345', 'Mansi@12345'),
(244, 'Miss Pooja', '2147483647', 'Miss@poojagmail.com', 'Female', 'A/P-Kavhe Tal-madha Dist-Solapur', 'Pooja@12345', 'Pooja@12345'),
(248, 'Abhishek Sagar', '9921344556', 'Abhi@123gmail.com', 'Male', 'A/P-Anapara Madhya Pradesh', 'Technical@sagar', 'Technical@sagar'),
(249, 'Abhishek Sagar', '9921344556', 'Abhi@123gmail.com', 'Male', 'A/P-Anapara Madhya Pradesh', 'Technical@sagar', 'Technical@sagar'),
(252, 'Samadhan Barve', '9464432465', 'Samadhan@123gmai.com', 'Male', 'A/P-Tembhurni Tal-madha Dist-Solapur', 'Samadhan@1234', 'Samadhan@1234');

-- --------------------------------------------------------

--
-- Table structure for table `sk`
--

CREATE TABLE `sk` (
  `Seria` int(10) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sk`
--

INSERT INTO `sk` (`Seria`, `Name`, `Email`, `Password`) VALUES
(1, 'Suraj Kale', 'Surajdkale@gmai.com', 'Suraj@1221');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `relation`
--
ALTER TABLE `relation`
  ADD PRIMARY KEY (`s`);

--
-- Indexes for table `sk`
--
ALTER TABLE `sk`
  ADD PRIMARY KEY (`Seria`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `relation`
--
ALTER TABLE `relation`
  MODIFY `s` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=254;

--
-- AUTO_INCREMENT for table `sk`
--
ALTER TABLE `sk`
  MODIFY `Seria` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
