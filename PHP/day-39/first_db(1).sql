-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2018 at 01:34 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `first_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `person_info`
--

CREATE TABLE IF NOT EXISTS `person_info` (
`Id` int(11) NOT NULL,
  `Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Gender` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `person_info`
--

INSERT INTO `person_info` (`Id`, `Name`, `Gender`) VALUES
(1, 'Abdur Rahimh', 'Malee'),
(2, 'Shakil', 'Male'),
(5, 'Abdur Rahim', 'Male'),
(7, 'Mostak', 'Male'),
(8, 'Shibbir Rizwan', 'Male'),
(9, 'Tamim', 'Male'),
(10, 'Shibbir Ahmed', 'Male'),
(11, 'Farhana', 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_three`
--

CREATE TABLE IF NOT EXISTS `tbl_three` (
`Id` int(11) NOT NULL,
  `student_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact` int(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_two`
--

CREATE TABLE IF NOT EXISTS `tbl_two` (
`id` int(11) NOT NULL,
  `Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Gender` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `person_info`
--
ALTER TABLE `person_info`
 ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_three`
--
ALTER TABLE `tbl_three`
 ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_two`
--
ALTER TABLE `tbl_two`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `person_info`
--
ALTER TABLE `person_info`
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tbl_three`
--
ALTER TABLE `tbl_three`
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_two`
--
ALTER TABLE `tbl_two`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
