-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2018 at 12:09 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `appointmentId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `service` varchar(100) NOT NULL,
  `doctor` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appointmentId`, `userId`, `service`, `doctor`) VALUES
(1, 2, 'Cardiology', 'Dr.D'),
(2, 6, 'Dermatologists', 'Dr.A'),
(3, 3, 'Cardiologists', 'Dr.E'),
(4, 3, 'Pathologists', 'Dr.H'),
(5, 4, 'Physicians', 'Dr.J'),
(6, 3, 'Cardiologists', 'Dr.D'),
(7, 6, 'Cardiologists', 'Dr.E');

-- --------------------------------------------------------

--
-- Table structure for table `signupinfo`
--

CREATE TABLE `signupinfo` (
  `id` int(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contactno` bigint(40) NOT NULL,
  `password` varchar(100) NOT NULL,
  `signupdate` datetime NOT NULL,
  `profilepic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signupinfo`
--

INSERT INTO `signupinfo` (`id`, `username`, `email`, `address`, `contactno`, `password`, `signupdate`, `profilepic`) VALUES
(1, 'Ram Prasad', 'ram@gmail.com', 'Gorkha', 9817711711, 'abcdef', '2018-02-12 11:30:09', 'img1.jpeg'),
(2, 'Shyam Dhakal', 'shyam@gmail.com', 'Lalitpur', 9817733333, '123456', '2018-02-12 11:31:24', 'I ,ME & MÂ¥Â§â‚¬Â£F!!!Dm.jpg'),
(3, 'Janak Karki', 'janak@gmail.com', 'Kalanki', 9822727272, 'janak1234', '2018-02-12 06:38:18', 'img4.png'),
(4, 'Madan Sapkota', 'madan@gmail.com', 'Baneshwor', 9827272727, 'ab1234', '2018-02-12 06:16:01', 'img5.jpeg'),
(5, 'Suman Pandey', 'suman@gmail.com', 'Bhaktapur', 9829220222, '123abc', '2018-02-12 06:17:37', 'img2.png'),
(6, 'Sulab Dhungana', 'sulabknight@gmail.com', 'Hattigauda,kathmandu', 9860878563, 'sdh123', '2018-02-15 09:56:28', 'dp.jpg'),
(7, 'John Wick', 'john@gmail.com', 'Kentucky', 9838232323, 'john1234', '2018-02-18 07:19:57', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appointmentId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `signupinfo`
--
ALTER TABLE `signupinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `appointmentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `signupinfo`
--
ALTER TABLE `signupinfo`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `appointment_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `signupinfo` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
