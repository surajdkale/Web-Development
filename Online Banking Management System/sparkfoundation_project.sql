-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2022 at 04:37 AM
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
-- Database: `sparkfoundation_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `baking_spark`
--

CREATE TABLE `baking_spark` (
  `ID` int(11) NOT NULL,
  `Sender` varchar(200) NOT NULL,
  `Reciever` varchar(200) NOT NULL,
  `Balance` varchar(200) NOT NULL,
  `Date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `baking_spark`
--

INSERT INTO `baking_spark` (`ID`, `Sender`, `Reciever`, `Balance`, `Date`) VALUES
(4, 'Sagar Misal', 'Vikas Gupta', '1000', '2022-01-02 13:05:25.223344'),
(5, 'Sujit Mali', 'Rutuja Kale', '5000', '2022-01-03 05:25:03.781733'),
(6, 'Suraj Kale', 'Abhishek sagar', '10', '2022-01-06 05:28:08.952365'),
(7, 'Priti Balwantrao', 'Suraj Kale', '5000', '2022-01-06 05:33:30.269269'),
(8, 'Priti Balwantrao', 'Suraj Kale', '5000', '2022-01-06 05:34:38.400742'),
(9, 'Akshay Pawar', 'Sagar Misal', '50000', '2022-01-07 04:19:25.547688'),
(10, 'Vishwajit Makar', 'Sujit Makar', '50000', '2022-01-07 09:17:50.337449');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `ID` int(3) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Amount` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`ID`, `Name`, `Email`, `Amount`) VALUES
(1, 'Sagar Misal', 'Sagar@123gmail.com', '138000'),
(2, 'Amol Khochare', 'Amol@gmail.com', '987501'),
(3, 'Rutuja Kale', 'Rutuja@gmail.com', '17503'),
(4, 'rohit Bansode', 'Rohit@gmail.com', '123457'),
(5, 'Abhishek sagar', 'sagar@abhishekgmail.com', '98695'),
(6, 'Saurabh shende', 'Saurabh@123gmail.com', '123455'),
(7, 'Vikas Gupta', 'Vikas@mastergmail.com', '998650'),
(8, 'Vishwajit Makar', 'Vishu@gamil.com', '50000'),
(9, 'Sujit Makar', 'Sujit@gmail.com', '51088'),
(10, 'Akshay Pawar', 'Akshay@gmail.com', '949000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baking_spark`
--
ALTER TABLE `baking_spark`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baking_spark`
--
ALTER TABLE `baking_spark`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
