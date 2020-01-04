-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2020 at 09:40 PM
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
(24, 'BTS trivia', 1, 'who is jimin?', 'Jimin', 'J-Hope', 'RM', 'Suga', 'Jin', 'Jimin', '10', 'khadee12', 'multiple_choice'),
(25, 'BTS trivia', 2, 'who is the youngest member of BTS?', 'JongKook', 'Jimin', 'V', 'Suga', 'J-Hope', 'JongKook', '20', 'khadee12', 'multiple_choice'),
(28, 'general knowledge', 1, 'A noun is a name of a person, animal, place or ?', 'object', 'person', 'food', 'book', 'water', 'object', '3', 'yimbs_astro ', 'multiple_choice'),
(29, 'general knowledge', 2, 'where is nigeria located?', 'Africa', 'Europe', 'Asia', 'N/America', 'S/America', 'Africa', '5', 'yimbs_astro ', 'multiple_choice'),
(30, 'Nigeria', 1, 'where is nigeria located?', 'Africa', 'Asia', 'Australia', 'America', 'India', 'Africa', '5', 'khadee12', 'multiple_choice'),
(31, 'Nigeria', 2, 'Who is the president of Nigeria?', 'Buhari', 'El-Rufai', 'Goodluck Jonathan', 'Patience Jonathan', 'Aisha Buhari', 'Buhari', '5', 'khadee12', 'multiple_choice');

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
(12, 'khadee12', 'MID TERM EXAMS: PHY 108', 'multiple_choice', '15e0671b692b65'),
(14, 'khadee12', 'BTS trivia', 'multiple_choice', '15e0a51c3f3ab5'),
(16, 'yimbs_astro ', 'general knowledge', 'multiple_choice', '15e0eecb340e3c'),
(18, 'khadee12', 'Nigeria', 'multiple_choice', '15e0f58767a087');

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
(1, 'khadijah', 'Badmos', 'khadijahbadmos@gmail.com', '181103010', '400', 'khadee12', '1234', 'IMG-20190904-WA0198.jpg', '2019-12-30 19:08:14'),
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
-- Table structure for table `student_multiple`
--

CREATE TABLE `student_multiple` (
  `ID` int(6) UNSIGNED NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `quiz_title` varchar(30) DEFAULT NULL,
  `question_no` int(20) DEFAULT NULL,
  `question` varchar(50) NOT NULL,
  `answer` varchar(20) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_multiple`
--

INSERT INTO `student_multiple` (`ID`, `username`, `quiz_title`, `question_no`, `question`, `answer`, `reg_date`) VALUES
(11, NULL, 'Nigeria', 0, '', 'Africa', '2020-01-03 16:56:19'),
(12, NULL, 'Nigeria', 1, 'where is nigeria located?', 'Africa', '2020-01-03 16:56:48'),
(13, NULL, 'Nigeria', 2, 'Who is the president of Nigeria?', 'Africa', '2020-01-03 16:56:49'),
(14, NULL, 'Nigeria', 1, 'where is nigeria located?', 'Africa', '2020-01-03 17:02:08'),
(15, NULL, 'Nigeria', 2, 'Who is the president of Nigeria?', 'Africa', '2020-01-03 17:02:08'),
(16, NULL, 'Nigeria', 1, 'where is nigeria located?', 'Buhari', '2020-01-03 17:02:15'),
(17, NULL, 'Nigeria', 2, 'Who is the president of Nigeria?', 'Buhari', '2020-01-03 17:02:15');

-- --------------------------------------------------------

--
-- Table structure for table `view`
--

CREATE TABLE `view` (
  `ID` int(6) UNSIGNED NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `quiz_title` varchar(30) DEFAULT NULL,
  `score` int(20) DEFAULT NULL,
  `quiz_type` varchar(30) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `view`
--

INSERT INTO `view` (`ID`, `username`, `quiz_title`, `score`, `quiz_type`, `reg_date`) VALUES
(1, 'khadee12', 'BTS trivia', NULL, 'multiple_choice', '2019-12-30 21:43:59');

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
-- Indexes for table `student_multiple`
--
ALTER TABLE `student_multiple`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `view`
--
ALTER TABLE `view`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `multiple_choice`
--
ALTER TABLE `multiple_choice`
  MODIFY `quizID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `quizzz`
--
ALTER TABLE `quizzz`
  MODIFY `ID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

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
-- AUTO_INCREMENT for table `student_multiple`
--
ALTER TABLE `student_multiple`
  MODIFY `ID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `view`
--
ALTER TABLE `view`
  MODIFY `ID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
