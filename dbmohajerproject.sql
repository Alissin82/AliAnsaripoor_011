-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2023 at 08:45 AM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbmohajerproject`
--
CREATE DATABASE IF NOT EXISTS `dbmohajerproject` DEFAULT CHARACTER SET utf8 COLLATE utf8_persian_ci;
USE `dbmohajerproject`;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `rowid` int(11) NOT NULL,
  `username` varchar(30) COLLATE utf8_persian_ci NOT NULL,
  `password` varchar(30) COLLATE utf8_persian_ci NOT NULL,
  `access_level` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

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

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `rowid` int(11) NOT NULL,
  `codemelli` varchar(11) COLLATE utf8_persian_ci NOT NULL,
  `fname` varchar(30) COLLATE utf8_persian_ci NOT NULL,
  `lname` varchar(30) COLLATE utf8_persian_ci NOT NULL,
  `mnumber` varchar(11) COLLATE utf8_persian_ci NOT NULL,
  `hnumber` varchar(11) COLLATE utf8_persian_ci NOT NULL,
  `email` varchar(70) COLLATE utf8_persian_ci NOT NULL,
  `img` text COLLATE utf8_persian_ci NOT NULL,
  `province` varchar(30) COLLATE utf8_persian_ci NOT NULL,
  `city` varchar(30) COLLATE utf8_persian_ci NOT NULL,
  `birthdate` varchar(10) COLLATE utf8_persian_ci NOT NULL,
  `haddress` text COLLATE utf8_persian_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`rowid`, `codemelli`, `fname`, `lname`, `mnumber`, `hnumber`, `email`, `img`, `province`, `city`, `birthdate`, `haddress`) VALUES
(1, '1190331608', 'علی', 'انصاریپور', '09908699859', '03153220359', 'farahonarjoo@gmail.com', '11903316080990869985903153220359.jpg', 'تهران', 'پرديس', '1383/10/28', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.'),
(2, '1190332255', 'علیرضا', 'انصاری', '09908568495', '03153359220', 'aliansaipoor@gmail.com', '11903322550990856849503153359220.jpg', 'اصفهان', 'شهرضا', '1383/10/30', 'لورم ایپسوم'),
(3, '1191608033', 'رضا', 'انصاری پور', '', '03153123456', 'matinbeigiwp@gmail.com', '119160803303153123456.jpg', 'وارد نشده', '', '1383/10/30', 'lorem ipsum'),
(4, '1112223333', 'مهدی', 'زاهدی', '09938644444', '09938644444', 'test@gmail.com', '11122233330993864444409938644444.jpg', 'اصفهان', 'اصغرآباد', '1381/11/24', 'lorem ipsum');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`rowid`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`rowid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `rowid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `rowid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
