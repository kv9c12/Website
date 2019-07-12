-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2019 at 02:47 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `sfname` varchar(20) NOT NULL,
  `smname` varchar(20) NOT NULL,
  `slname` varchar(20) NOT NULL,
  `paddress1` text NOT NULL,
  `paddress2` text NOT NULL,
  `pcity` text NOT NULL,
  `pstate` text NOT NULL,
  `pcountry` text NOT NULL,
  `ppincode` text NOT NULL,
  `pickdate` text NOT NULL,
  `picktime` text NOT NULL,
  `rfname` varchar(20) NOT NULL,
  `rmname` varchar(20) NOT NULL,
  `rlname` varchar(20) NOT NULL,
  `daddress1` text NOT NULL,
  `daddress2` varchar(20) NOT NULL,
  `dcity` text NOT NULL,
  `dstate` text NOT NULL,
  `dcountry` text NOT NULL,
  `dpincode` text NOT NULL,
  `dropdate` text NOT NULL,
  `droptime` text NOT NULL,
  `service` text NOT NULL,
  `pay` text NOT NULL,
  `message` text NOT NULL,
  `packageid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('varun', 'varun12345');

-- --------------------------------------------------------

--
-- Table structure for table `userstable`
--

CREATE TABLE `userstable` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(50) NOT NULL,
  `state` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `pincode` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userstable`
--

INSERT INTO `userstable` (`username`, `password`, `email`, `dob`, `address`, `state`, `country`, `pincode`) VALUES
('varun', '123456789', 'varun@gmail.com', '1998-09-12', 'Thamarai 112 SRM Nagar, Chennai', 'Tamil Nadu', 'India', '603203');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`packageid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `userstable`
--
ALTER TABLE `userstable`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `packageid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
