-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2021 at 06:54 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_result`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `sr_no` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`sr_no`, `name`, `email`, `password`) VALUES
(1, 'Admin', 'admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `sr_no` int(11) NOT NULL,
  `roll_no` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `class` varchar(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `result` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`sr_no`, `roll_no`, `name`, `class`, `email`, `password`, `result`) VALUES
(1, 1033, 'Monica Geller', 'CSE', 'thecameraadds10pounds@gmail.com', 'howyoudoin', '78'),
(3, 1003, 'Ross Geller', 'Comp', 'unagi@gmail.com', 'howyoudoin', 'Distinction'),
(4, 1044, 'Joey Tribbiani', 'Comps', 'howyoudoin@gmail.com', 'howyoudoin', 'C-'),
(5, 1044, 'Joey Tribbiani', 'Comps', 'howyoudoin@gmail.com', 'howyoudoin', '23'),
(6, 1067, 'Chandler Bing', 'IT', 'sarcasticbing@gmail.com', 'howyoudoin', '84'),
(8, 1033, 'Monica Geller', 'CSE', 'thecameraadds10pounds@gmail.com', 'howyoudoin', 'A'),
(9, 1067, 'Chandler Bing', 'IT', 'sarcasticbing@gmail.com', 'howyoudoin', 'Distinction'),
(13, 1501, 'Phoebe Buffay', 'CSE', 'idonthaveapla@outlook.com', 'howyoudoin', 'B+'),
(15, 1501, 'Phoebe Buffay', 'CSE', 'idonthaveapla@outlook.com', 'howyoudoin', '79'),
(17, 1046, 'Rachel Green', 'Comps', 'galpalrachelgreen@gmail.com', 'howyoudoin', 'C'),
(21, 1046, 'Rachel Green', 'Comps', 'galpalrachelgreen@gmail.com', 'howyoudoin', '53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`sr_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
