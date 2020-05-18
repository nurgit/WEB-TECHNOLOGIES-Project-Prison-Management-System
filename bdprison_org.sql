-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2020 at 04:26 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdprison.org`
--

-- --------------------------------------------------------

--
-- Table structure for table `allprisoner`
--

CREATE TABLE `allprisoner` (
  `id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `phoneNo` int(12) NOT NULL,
  `address` varchar(100) NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `crime` varchar(50) NOT NULL,
  `day` int(50) NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  `notes` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allprisoner`
--

INSERT INTO `allprisoner` (`id`, `name`, `gender`, `image`, `phoneNo`, `address`, `occupation`, `crime`, `day`, `startDate`, `endDate`, `notes`) VALUES
(652, 'Nur Mohammaed', 'fassda', '../storage/prisoner_image/', 2147483647, 'flat No#5A, House#245(244,245), Road#04 , Block#G, Bashundhara R/A, Dhaka-1229', 'adds', 'wasdf', 0, '0000-00-00', '0000-00-00', ''),
(1001, 'Roky', 'Male', 'img', 130315, 'dhaka', 'business', 'Thug', 16, '2020-05-13', '2020-05-29', 'nothing'),
(4653, 'Nur Mohammaed', 'fgh', '../storage/prisoner_image/', 2147483647, 'flat No#5A, House#245(244,245), Road#04 , Block#G, Bashundhara R/A, Dhaka-1229', 'tkj', 'jhhk', 5, '0000-00-00', '0000-00-00', ''),
(4656, 'ghjg,k', 'mail', '../storage/prisoner_image/', 2147483647, 'kha7/3 ,momatajvila , shajadpur,gulshan-2,dhaka', 'busnes', 'hbk,', 5, '0000-00-00', '0000-00-00', ''),
(4657, 'ghjg,k', 'mail', '../storage/prisoner_image/', 2147483647, 'kha7/3 ,momatajvila , shajadpur,gulshan-2,dhaka', 'busnes', 'hbk,', 5, '0000-00-00', '0000-00-00', ''),
(10065, 'xyz', 'mail', '../storage/prisoner_image/', 17000000, 'kha7/3 ,momatajvila , shajadpur,gulshan-2,dhaka', 'busnes', 'cghn', 365, '0000-00-00', '0000-00-00', ''),
(563543, 'piash', 'male', '../storage/prisoner_image/', 2147483647, 'kha7/3 ,momatajvila , shajadpur,gulshan-2,dhaka', 'fsefg', 'rape', 265, '0000-00-00', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `allstaff`
--

CREATE TABLE `allstaff` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `phoneNo` int(11) NOT NULL,
  `job_ title` varchar(50) NOT NULL,
  `job_grade` varchar(10) NOT NULL,
  `job_joining_date` date NOT NULL,
  `w_joining_time` time DEFAULT NULL,
  `w_end_time` time DEFAULT NULL,
  `working_site` text,
  `holiday` varchar(50) DEFAULT NULL,
  `notice` text,
  `image` varchar(100) DEFAULT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allstaff`
--

INSERT INTO `allstaff` (`id`, `name`, `gender`, `phoneNo`, `job_ title`, `job_grade`, `job_joining_date`, `w_joining_time`, `w_end_time`, `working_site`, `holiday`, `notice`, `image`, `password`) VALUES
(1, 'jack', 'Male', 1303156230, 'staff manager ', 'b', '2020-04-01', '20:00:00', '08:00:00', 'rode', 'friday', NULL, '../storage/staff/nur.jpg', ''),
(1601, 'abcd', 'Male', 170000000, 'Jailor', 'a', '0000-00-00', '20:00:00', '08:00:00', 'rode', 'friday', NULL, NULL, '1234'),
(16002, 'abcn', 'Male', 1300000, 'Staff Manager', 'b', '0000-00-00', '20:00:00', '08:00:00', 'rode', 'friday', NULL, NULL, '1234'),
(16003, 'abcv', 'Male', 1700000000, 'Visitor Staff', '', '0000-00-00', '20:00:00', '08:00:00', 'rode', 'friday', NULL, NULL, '1234');

-- --------------------------------------------------------

--
-- Table structure for table `cell`
--

CREATE TABLE `cell` (
  `cellId` int(50) NOT NULL,
  `guiltCell` varchar(200) NOT NULL,
  `allPrisoner` int(10) NOT NULL,
  `prisonerLimit` int(10) NOT NULL,
  `allPrisonerId` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cell`
--

INSERT INTO `cell` (`cellId`, `guiltCell`, `allPrisoner`, `prisonerLimit`, `allPrisonerId`) VALUES
(1001, 'Murderer', 3, 3, '203,204,105'),
(1002, 'Thieve', 3, 5, '203,204,105'),
(1003, 'Rapist', 3, 10, '203,204,105'),
(1004, 'Thug', 3, 20, '203,204,105'),
(1005, 'Human Trafficker', 3, 15, '203,204,105');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `VisitorId` int(10) NOT NULL,
  `VisitorName` varchar(50) NOT NULL,
  `VisitorAddres` varchar(150) DEFAULT NULL,
  `VisitorPhoneNo` int(12) NOT NULL,
  `VisitorGender` varchar(10) NOT NULL,
  `Relation` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  `Time` time(6) NOT NULL,
  `PrisonerName` varchar(50) NOT NULL,
  `PrisonerId` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`VisitorId`, `VisitorName`, `VisitorAddres`, `VisitorPhoneNo`, `VisitorGender`, `Relation`, `Date`, `Time`, `PrisonerName`, `PrisonerId`) VALUES
(1, 'Alax', 'Dhaka', 1257688934, 'mail', 'Brother', '2020-03-26', '10:10:00.000000', 'Prince', 101),
(2, 'A', 'Khulna', 1581123, 'male', 'uncle', '2020-03-03', '07:13:10.000000', 'Daku Mastan', 102);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allprisoner`
--
ALTER TABLE `allprisoner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `allstaff`
--
ALTER TABLE `allstaff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cell`
--
ALTER TABLE `cell`
  ADD PRIMARY KEY (`cellId`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`VisitorId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allprisoner`
--
ALTER TABLE `allprisoner`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=563544;

--
-- AUTO_INCREMENT for table `allstaff`
--
ALTER TABLE `allstaff`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16004;

--
-- AUTO_INCREMENT for table `cell`
--
ALTER TABLE `cell`
  MODIFY `cellId` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1006;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `VisitorId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
