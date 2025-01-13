-- Active: 1732469434310@@127.0.0.1@3306@regis
-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2022 at 05:00 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `regis`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` tinyint(9) NOT NULL,
  `cls` varchar(1) NOT NULL,
  `apname` varchar(10) NOT NULL,
  `afname` varchar(50) NOT NULL,
  `alname` varchar(50) NOT NULL,
  `uname` varchar(25) NOT NULL,
  `upass` varchar(25) NOT NULL,
  `chk` tinyint(4) NOT NULL,
  `adminrecord` datetime DEFAULT NULL,
  `adminupdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `cls`, `apname`, `afname`, `alname`, `uname`, `upass`, `chk`, `adminrecord`, `adminupdate`) VALUES
(1, '1', 'นาย', 'ดูแล', 'ระบบ', 'admin', '123456', 0, '2022-12-03 23:00:00', '2022-12-03 16:00:29');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `mid` int(11) NOT NULL,
  `randomid` varchar(60) NOT NULL,
  `pname` varchar(12) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `chk` tinyint(4) NOT NULL,
  `password` varchar(25) NOT NULL,
  `ip` varchar(100) NOT NULL,
  `daterecord` datetime DEFAULT NULL,
  `dateupdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `setupdata`
--

CREATE TABLE `setupdata` (
  `sdid` tinyint(4) NOT NULL,
  `office` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rootmail` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rootpass` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hostmail` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `durl` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `setupdata`
--

INSERT INTO `setupdata` (`sdid`, `office`, `title`, `img`, `admin`, `rootmail`, `rootpass`, `hostmail`, `durl`) VALUES
(1, 'Test-SentMail', 'Test-SentMail', '134520281020221125_094318.png', 'N13R6xMKISlyTSSDyRBbQokwuIyj0FjRVQnnyRfbfMr', 'yongyut@tgsaving.com', 'test', 'mail.tgsaving.com', 'https://www.ขายของราคาถูก/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `setupdata`
--
ALTER TABLE `setupdata`
  ADD PRIMARY KEY (`sdid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` tinyint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `setupdata`
--
ALTER TABLE `setupdata`
  MODIFY `sdid` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
