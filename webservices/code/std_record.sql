-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2024 at 10:38 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `std`
--

-- --------------------------------------------------------

--
-- Table structure for table `std_record`
--

CREATE TABLE `std_record` (
  `std_id` int(11) NOT NULL,
  `std_name` varchar(255) NOT NULL,
  `std_course` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `std_record`
--

INSERT INTO `std_record` (`std_id`, `std_name`, `std_course`, `created_at`, `updated_at`) VALUES
(2, 'ravi', 'php', '2024-05-19 08:02:31', '2024-05-19 08:02:31'),
(3, 'nikita', 'bca', '2024-05-19 08:02:31', '2024-05-19 08:02:31'),
(4, 'nisha', 'mba', '2024-05-19 08:02:31', '2024-05-19 08:02:31'),
(8, 'jaya', 'mca', '2024-05-19 08:09:06', '2024-05-19 08:09:06'),
(9, 'neha', 'mcom', '2024-05-19 08:09:06', '2024-05-19 08:09:06'),
(10, 'raja', 'hacker', '2024-05-19 08:09:06', '2024-05-19 08:09:06'),
(11, 'dignesh', 'mbbs', '2024-05-19 08:09:06', '2024-05-19 08:09:06'),
(12, 'raj', 'mba', '2024-05-19 08:09:06', '2024-05-19 08:09:06'),
(13, 'arjun', 'phd', '2024-05-19 08:09:06', '2024-05-19 08:09:06'),
(14, 'rahul', 'bscit', '2024-05-19 08:09:06', '2024-05-19 08:09:06'),
(15, 'jayesh', 'mba', '2024-05-19 08:09:06', '2024-05-19 08:09:06'),
(16, 'raveena', 'llb', '2024-05-19 08:09:06', '2024-05-19 08:09:06'),
(17, '', '', '2024-05-19 08:11:28', '2024-05-19 08:11:28'),
(18, '', '', '2024-05-19 08:13:04', '2024-05-19 08:13:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `std_record`
--
ALTER TABLE `std_record`
  ADD PRIMARY KEY (`std_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `std_record`
--
ALTER TABLE `std_record`
  MODIFY `std_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
