-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 06, 2023 at 11:58 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbmohajerproject`
--
CREATE DATABASE IF NOT EXISTS `dbmohajerproject` DEFAULT CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci;
USE `dbmohajerproject`;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `rowid` int NOT NULL AUTO_INCREMENT,
  `username` varchar(30) COLLATE utf8mb3_persian_ci NOT NULL,
  `password` varchar(30) COLLATE utf8mb3_persian_ci NOT NULL,
  `access_level` int NOT NULL,
  PRIMARY KEY (`rowid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_persian_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`rowid`, `username`, `password`, `access_level`) VALUES
(1, 'admin', 'admin', 5),
(2, 'student', 'student', 0);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` int NOT NULL AUTO_INCREMENT,
  `file_name` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `status` enum('1','0') CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `rowid` int NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) COLLATE utf8mb3_persian_ci NOT NULL,
  `lname` varchar(30) COLLATE utf8mb3_persian_ci NOT NULL,
  `mnumber` varchar(11) CHARACTER SET utf8mb3 COLLATE utf8mb3_persian_ci NOT NULL,
  `hnumber` varchar(11) COLLATE utf8mb3_persian_ci NOT NULL,
  `email` varchar(70) COLLATE utf8mb3_persian_ci NOT NULL,
  `image` text COLLATE utf8mb3_persian_ci NOT NULL,
  `province` varchar(30) COLLATE utf8mb3_persian_ci NOT NULL,
  `city` varchar(30) COLLATE utf8mb3_persian_ci NOT NULL,
  `birthdate` varchar(10) COLLATE utf8mb3_persian_ci NOT NULL,
  `address` text COLLATE utf8mb3_persian_ci NOT NULL,
  PRIMARY KEY (`rowid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_persian_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
