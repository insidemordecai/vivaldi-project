-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2022 at 05:48 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vivaldi`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail`
--

CREATE TABLE `detail` (
  `id` int(10) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phonenumber` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail`
--

INSERT INTO `detail` (`id`, `fullname`, `email`, `phonenumber`, `gender`) VALUES
(1, 'Karl Benz', 'karl@daimler.com', '0712345687', 'Male'),
(2, 'Henry Ford', 'henry@ford.com', '0787654321', 'Male'),
(3, 'Bertha Benz', 'bertha@daimler.com', '0712345678', 'Male'),
(4, 'Carlos Ghosn', 'carlos@nissan.com', '0772136587', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `id` int(10) NOT NULL,
  `doctorName` varchar(255) NOT NULL,
  `admissionDate` date NOT NULL,
  `plannedProcedure` varchar(255) NOT NULL,
  `patientName` varchar(255) NOT NULL,
  `patientDOB` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `patientEmail` varchar(255) NOT NULL,
  `patientPhoneNumber` varchar(20) NOT NULL,
  `preferredContactMethod` varchar(20) NOT NULL,
  `kinName` varchar(255) NOT NULL,
  `kinRelationship` varchar(255) NOT NULL,
  `kinEmail` varchar(255) NOT NULL,
  `kinPhoneNumber` varchar(20) NOT NULL,
  `tsandcs` varchar(10) NOT NULL,
  `signature` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `participant`
--

CREATE TABLE `participant` (
  `id` int(10) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `emailAddress` varchar(255) NOT NULL,
  `phoneNumber` varchar(20) NOT NULL,
  `location` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `participant`
--

INSERT INTO `participant` (`id`, `fullName`, `emailAddress`, `phoneNumber`, `location`, `dob`, `gender`, `photo`, `timestamp`) VALUES
(1, 'Aryton Senna', 'asenna@gmail.com', '0712457836', 'Sao Paulo', '1960-03-21', 'male', '', '2022-03-27 14:52:14'),
(2, 'Lewis Hamilton', 'lhamilton@gmail.com', '0723568914', 'Stevenage', '1985-01-07', 'male', 'avatar-tealed.png', '2022-03-11 06:41:06'),
(3, 'Lando Norris ', 'lnorris@gmail.com', '0712345678', 'Woking', '1999-10-05', 'male', 'avatar-tealed.png', '2022-03-27 15:48:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `secondname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `usertype` varchar(10) NOT NULL DEFAULT 'student'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `secondname`, `email`, `password`, `usertype`) VALUES
(1, 'Jack', 'Bauer', 'jbauer@gmail.com', '$2y$10$wa01Yn6YY.s/m8xZ2iE4R.QwrUATn1yFXJD7UCXOzO8vQMVEPSsy.', 'admin'),
(2, 'Monica', 'Lewinsky', 'mlewinsky@gmail.com', '$2y$10$ulHhbwc/8iYYdhWJ3A9DSuHQQ6gXYFD9vH2wLTjKTHSWlkHqSOpCO', 'student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail`
--
ALTER TABLE `detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `participant`
--
ALTER TABLE `participant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail`
--
ALTER TABLE `detail`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `participant`
--
ALTER TABLE `participant`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
