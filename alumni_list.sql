-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2025 at 09:37 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alumni_list`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumni_list`
--

CREATE TABLE `alumni_list` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` int(14) NOT NULL,
  `linkedin` varchar(100) NOT NULL,
  `birthday` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `bloodgrp` varchar(5) NOT NULL,
  `degree` varchar(15) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `passingyr` int(4) NOT NULL,
  `batch` varchar(4) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `professional_info` text NOT NULL,
  `work_experience` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(100) NOT NULL,
  `profilepic` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `alumni_list`
--

INSERT INTO `alumni_list` (`id`, `firstname`, `lastname`, `email`, `mobile`, `linkedin`, `birthday`, `gender`, `bloodgrp`, `degree`, `dept`, `passingyr`, `batch`, `designation`, `company`, `professional_info`, `work_experience`, `username`, `password`, `profilepic`) VALUES
(27, 'Abir', 'Das', 'abir@gmail.com', 18156, 'http://localhost/Alumni/register/register.php', '2025-04-16', 'Male', 'B+', 'BSc', 'CSE', 2021, '28th', 'Software Engineer', 'SoftRobotics Bangladesh', 'Software Engineer', 4, 'abir', '$2y$10$84EJDj4UZbHwpfEh6kCTYOl56nW0SgNsS3QaL36vt0NZw5Iy.k/F2', 'uploads/alumni4.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumni_list`
--
ALTER TABLE `alumni_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alumni_list`
--
ALTER TABLE `alumni_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
