-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2018 at 09:44 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `instructors`
--

CREATE TABLE `instructors` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `seatsAvailable` int(11) NOT NULL,
  `maxseats` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `instructors`
--

INSERT INTO `instructors` (`id`, `name`, `seatsAvailable`, `maxseats`) VALUES
(1, 'Albert Danison', 20, 30),
(2, 'Marcos Bittencourt', 5, 30),
(3, 'Pritesh Patel', 25, 25),
(4, 'Pedram Faghihi', 1, 30),
(5, 'Kadeem Best', 22, 45);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `studentid` varchar(200) NOT NULL,
  `gkey` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `studentid`, `gkey`) VALUES
(1, 'Abhishek Bansal', 'B6372180', NULL),
(2, 'Akashdeep Singh', 'B3709387', NULL),
(3, 'Alay Desai', 'B2718375', 'abc'),
(4, 'Dhyanee Bhatt', 'B7654518', 'abcd'),
(5, 'Joao Rebelo', 'B4913605', NULL),
(6, 'Manpreet Kaur', 'B6894568', NULL),
(7, 'Ramandeep Kaur', 'B8574738', NULL),
(8, 'Sagar Saini', 'B9620101', NULL),
(9, 'Saloni Upendra Parekh', 'B5705089', NULL),
(10, 'Santosh Tekulapally', 'B8772428', NULL),
(11, 'Shashank Preetham Machani', 'B7785875', NULL),
(12, 'Shivam Soni', 'B8092966', NULL),
(13, 'Sukhwinder Singh', 'B2993196', NULL),
(14, 'Tejas Pradip Jadhav', 'B3422726', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `instructors`
--
ALTER TABLE `instructors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `instructors`
--
ALTER TABLE `instructors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
