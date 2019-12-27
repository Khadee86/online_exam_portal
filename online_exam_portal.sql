-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2019 at 08:56 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.2.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_exam_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `username` varchar(30) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`username`, `name`) VALUES
('', '0d077e23-feb8-49e9-aeb5-cc727f2ede27.jpg'),
('khadijah123456', 'Fireboy-Jealous-cover.jpeg'),
('', '7e10c59fca805531d9cb5b30f0acb0db.jpg'),
('khadijah123456', 'b2.jpg'),
('khadijah123456', 'b4.jpg'),
('khadijah_b', 'b29.jpg'),
('khadijah_b', 'b29.jpg'),
('khadijah123456', 'b29.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `multiple_choice`
--

CREATE TABLE `multiple_choice` (
  `quizID` int(6) UNSIGNED NOT NULL,
  `quiz_title` varchar(50) DEFAULT NULL,
  `Quiz_number` int(5) DEFAULT NULL,
  `Question` varchar(10000) DEFAULT NULL,
  `A` varchar(1000) DEFAULT NULL,
  `B` varchar(1000) DEFAULT NULL,
  `C` varchar(1000) DEFAULT NULL,
  `D` varchar(1000) DEFAULT NULL,
  `E` varchar(1000) DEFAULT NULL,
  `Answer` varchar(1000) DEFAULT NULL,
  `registered_user` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `ID` int(6) UNSIGNED NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `stud_id` varchar(20) DEFAULT NULL,
  `stu_level` varchar(20) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `passwordd` varchar(20) DEFAULT NULL,
  `photo` varchar(100) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`ID`, `firstname`, `lastname`, `email`, `stud_id`, `stu_level`, `username`, `passwordd`, `photo`, `reg_date`) VALUES
(1, 'khadijah', 'Badmos', 'khadijahbadmos@gmail.com', '181103010', '400', 'khadee12', '1234', 'shawn.jpg', '2019-12-25 07:49:25');

-- --------------------------------------------------------

--
-- Table structure for table `resetpassword`
--

CREATE TABLE `resetpassword` (
  `ID` int(6) UNSIGNED NOT NULL,
  `code` varchar(255) NOT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `multiple_choice`
--
ALTER TABLE `multiple_choice`
  ADD PRIMARY KEY (`quizID`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `resetpassword`
--
ALTER TABLE `resetpassword`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `multiple_choice`
--
ALTER TABLE `multiple_choice`
  MODIFY `quizID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `ID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `resetpassword`
--
ALTER TABLE `resetpassword`
  MODIFY `ID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
