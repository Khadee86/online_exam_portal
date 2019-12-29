-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2019 at 01:11 PM
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
  `mark` varchar(100) NOT NULL,
  `registered_user` varchar(50) DEFAULT NULL,
  `quiz_type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `multiple_choice`
--

INSERT INTO `multiple_choice` (`quizID`, `quiz_title`, `Quiz_number`, `Question`, `A`, `B`, `C`, `D`, `E`, `Answer`, `mark`, `registered_user`, `quiz_type`) VALUES
(16, 'quiz 101', 1, 'what is your name?', NULL, NULL, NULL, NULL, NULL, NULL, '3', 'khadee12', 'theory'),
(17, 'quiz 101', 2, 'where do you go to school?', NULL, NULL, NULL, NULL, NULL, NULL, '5', 'khadee12', 'theory'),
(23, 'quiz 101', 1, '_____is my favorite food.', NULL, NULL, NULL, NULL, NULL, NULL, '4', 'khadee12', 'fill');

-- --------------------------------------------------------

--
-- Table structure for table `quizzz`
--

CREATE TABLE `quizzz` (
  `ID` int(6) UNSIGNED NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `quiz_name` varchar(30) DEFAULT NULL,
  `quiz_type` varchar(30) NOT NULL,
  `quiz_code` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quizzz`
--

INSERT INTO `quizzz` (`ID`, `username`, `quiz_name`, `quiz_type`, `quiz_code`) VALUES
(11, 'khadee12', 'quiz 101', 'theory', '15e0644b88e66e'),
(12, 'khadee12', 'MID TERM EXAMS: PHY 108', 'multiple_choice', '15e0671b692b65'),
(13, 'khadee12', 'quiz 101', 'fill', '15e0675ce3af26');

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
(1, 'khadijah', 'Badmos', 'khadijahbadmos@gmail.com', '181103010', '400', 'khadee12', '1234', 'Caveman_Carving_the_Letter_D_Royalty_Free_Clipart_Picture_081025-185556-927048.jpg', '2019-12-25 08:08:46'),
(8, 'hanifah', 'badmos', 'hanifahbadmos@gmail.com', '171103010', '200', 'yimbs_astro', '1233', 'jimin.jpg', '2019-12-28 16:48:10'),
(9, 'zainab', 'idris', 'khadijah.badmos@aun.edu.ng', '18112020', '300', 'zeee19', '19999', '', '2019-12-26 22:51:14'),
(10, 'Aisha', 'Yakubu', 'humairamadaki1@gmail.com', '1711030106', '500', 'humaira121', '1211', '', '2019-12-27 17:01:24');

-- --------------------------------------------------------

--
-- Table structure for table `resetpassword`
--

CREATE TABLE `resetpassword` (
  `ID` int(6) UNSIGNED NOT NULL,
  `code` varchar(255) NOT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `th`
--

CREATE TABLE `th` (
  `ID` int(6) UNSIGNED NOT NULL,
  `Quiz_number` int(11) DEFAULT NULL,
  `quiz_title` varchar(30) DEFAULT NULL,
  `Question` varchar(100) DEFAULT NULL,
  `registered_user` varchar(30) DEFAULT NULL
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
-- Indexes for table `quizzz`
--
ALTER TABLE `quizzz`
  ADD PRIMARY KEY (`ID`);

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
-- Indexes for table `th`
--
ALTER TABLE `th`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `multiple_choice`
--
ALTER TABLE `multiple_choice`
  MODIFY `quizID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `quizzz`
--
ALTER TABLE `quizzz`
  MODIFY `ID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `ID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `resetpassword`
--
ALTER TABLE `resetpassword`
  MODIFY `ID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `th`
--
ALTER TABLE `th`
  MODIFY `ID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
