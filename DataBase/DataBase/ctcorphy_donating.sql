-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 12, 2018 at 02:46 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ctcorphy_donating`
--

-- --------------------------------------------------------

--
-- Table structure for table `charity`
--

CREATE TABLE `charity` (
  `cid` int(100) NOT NULL,
  `name` varchar(500) NOT NULL,
  `unm` varchar(500) NOT NULL,
  `pwd` varchar(500) NOT NULL,
  `mno` varchar(500) NOT NULL,
  `adrs` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `charity`
--

INSERT INTO `charity` (`cid`, `name`, `unm`, `pwd`, `mno`, `adrs`) VALUES
(1, 'a', 'a', 'm', '9052830803', 'hyd'),
(2, 'g', 'g', 'g', '9052830803', 'hyd'),
(3, '', '', '', '', ''),
(4, 'Prathyusha', 'sarika', 'sarika123', '9440240396', 'kukatpally'),
(5, 'sonali', 'sonu', 'sonali', '7671995974', 'kp');

-- --------------------------------------------------------

--
-- Table structure for table `donating`
--

CREATE TABLE `donating` (
  `did` int(100) NOT NULL,
  `unm` varchar(500) NOT NULL,
  `dtype` varchar(500) NOT NULL,
  `descrptn` varchar(1000) NOT NULL,
  `qty` varchar(500) NOT NULL,
  `receive` varchar(500) NOT NULL,
  `datee` varchar(500) NOT NULL,
  `adrs` varchar(500) NOT NULL,
  `status` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `name` varchar(500) NOT NULL,
  `unm` varchar(500) NOT NULL,
  `pwd` varchar(500) NOT NULL,
  `mno` varchar(500) NOT NULL,
  `adrs` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`name`, `unm`, `pwd`, `mno`, `adrs`) VALUES
('a', 'a', 'b', '9052830803', 'hyd'),
('b', 'b', 'b', '9052830803', 'hgggg'),
('', '', '', '', ''),
('Dhanusha', 'dhanusha9', '123456', '9550585836', 'kphb'),
('sravani', 'metta', 'sravani', '7671995974', 'kp'),
('parimala', 'parimalan', '123456', '7386882256', 'bh'),
('sravani', 'srav', '123456', '7671995974', 'moosapet'),
('swapna', 'swapna9', 's123', '9550585836', 'ammeerpet');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `did` varchar(500) NOT NULL,
  `cunm` varchar(500) NOT NULL,
  `unm` varchar(500) NOT NULL,
  `status` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `charity`
--
ALTER TABLE `charity`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `donating`
--
ALTER TABLE `donating`
  ADD PRIMARY KEY (`did`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `charity`
--
ALTER TABLE `charity`
  MODIFY `cid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `donating`
--
ALTER TABLE `donating`
  MODIFY `did` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
