-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2016 at 10:23 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `relatives`
--

-- --------------------------------------------------------

--
-- Table structure for table `families`
--

CREATE TABLE IF NOT EXISTS `families` (
  `Sno` int(5) NOT NULL,
  `family_title` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf32;

--
-- Dumping data for table `families`
--

INSERT INTO `families` (`Sno`, `family_title`) VALUES
(1, 'godalapa'),
(2, 'Prem'),
(3, 'Ananth Rao'),
(4, 'KJ Victor'),
(5, 'Vimala Helen'),
(6, 'Sara'),
(7, 'Sheeba'),
(8, 'Sneha'),
(9, 'Swetha'),
(10, 'Santhosh'),
(11, 'Vinod'),
(12, 'Usha'),
(13, 'Sheela'),
(14, 'Rohit'),
(15, 'Vineetha'),
(16, 'Vinolia'),
(17, 'Orpah'),
(18, 'Ashwin'),
(19, 'Abhishai');

-- --------------------------------------------------------

--
-- Table structure for table `relation`
--

CREATE TABLE IF NOT EXISTS `relation` (
  `Id` int(11) NOT NULL,
  `relationship` varchar(40) DEFAULT NULL,
  `Name` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `relation`
--

INSERT INTO `relation` (`Id`, `relationship`, `Name`) VALUES
(1, 'grandfather', 'Ananth Rao'),
(1, 'grandfather', 'KJ Victor'),
(1, 'grandmother', 'Vimala Helen'),
(1, 'grandmother', 'Sara'),
(1, 'Father', 'Prem'),
(1, 'Mother', 'Sheeba'),
(1, 'Sibling', 'Sneha'),
(1, 'Sibling', 'Swetha'),
(2, 'Father', 'Ananth Rao'),
(2, 'Mother', 'Vimala Helen'),
(2, 'Sibling', 'Santhosh'),
(2, 'Children', 'Priyanka'),
(2, 'Children', 'Swetha'),
(2, 'Children', 'Sneha'),
(3, 'Children', 'Santhosh'),
(3, 'Children', 'Vinod'),
(3, 'Children', 'Prem'),
(4, 'Children', 'Sheeba'),
(4, 'Children', 'Sheela'),
(4, 'Children', 'Usha'),
(4, 'Children', 'Shekar'),
(5, 'Children', 'Santhosh'),
(5, 'Children', 'Vinod'),
(5, 'Children', 'Prem'),
(6, 'Children', 'Usha'),
(6, 'Children', 'Sheela'),
(6, 'Chlidren', 'Sheeba'),
(6, 'Children', 'Shekar'),
(7, 'Father', 'KJ Victor'),
(7, 'Mother', 'Sara'),
(7, 'Sibling', 'Usha'),
(7, 'Sibling', 'Sheela'),
(7, 'Sibling', 'Shekar'),
(7, 'Children', 'Sneha'),
(7, 'Children', 'Swetha'),
(7, 'Children', 'Priyanka'),
(8, 'grandfather', 'Ananth Rao'),
(8, 'grandmother', 'Vimala Helen'),
(8, 'grandfather', 'KJ Victor'),
(8, 'grandmother', 'Sara'),
(8, 'Father', 'Prem'),
(8, 'Mother', 'Sheeba'),
(8, 'Sibling', 'Swetha'),
(8, 'Sibling', 'Priyanka'),
(9, 'grandfather', 'KJ Victor'),
(9, 'grandmother', 'Sara'),
(9, 'grandfather', 'Ananth Rao'),
(9, 'grandmother', 'Vimala Helen'),
(9, 'Father', 'Prem'),
(9, 'Mother', 'Sheeba'),
(9, 'Sibling', 'Sneha'),
(9, 'Sibling', 'Priyanka'),
(10, 'Father', 'Ananth Rao'),
(10, 'Mother', 'Vimala Helen'),
(10, 'Children', 'Vineetha'),
(10, 'Sibling', 'Vinod'),
(10, 'Sibling', 'Prem'),
(11, 'Father', 'Ananth Rao'),
(11, 'Mother', 'Vimala Helen'),
(11, 'Sibling', 'Santosh'),
(11, 'Sibling', 'Prem'),
(11, 'Children', 'Rohit'),
(12, 'Father', 'KJ Victor'),
(12, 'Mother', 'Sara'),
(12, 'Children', 'Sunil'),
(13, 'Mother', 'Sara'),
(13, 'Father', 'KJ Victor'),
(13, 'Sibling', 'Sheeba'),
(13, 'Children', 'Ashwin'),
(13, 'Children ', 'Abhishai'),
(12, 'Sibling', 'Sheela'),
(12, 'Sibling', 'Sheeba'),
(13, 'Sibling', 'Usha'),
(2, 'Sibling', 'Vinod'),
(6, 'Children', 'Sheeba'),
(14, 'grandfather', 'Ananth Rao'),
(15, 'grandfather', 'Ananth Rao'),
(14, 'grandmother', 'Vimala Helen'),
(15, 'grandmother', 'Vimala Helen'),
(14, 'Father', 'Vinod'),
(14, 'Mother', 'Orpah'),
(15, 'Father', 'Santhosh'),
(15, 'Mother', 'Vinolia');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `families`
--
ALTER TABLE `families`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `relation`
--
ALTER TABLE `relation`
  ADD KEY `Id` (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `families`
--
ALTER TABLE `families`
  MODIFY `Sno` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `relation`
--
ALTER TABLE `relation`
  ADD CONSTRAINT `relation_ibfk_1` FOREIGN KEY (`Id`) REFERENCES `families` (`Sno`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
