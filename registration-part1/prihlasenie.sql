-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 01, 2022 at 05:16 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prihlasenie`
--

-- --------------------------------------------------------

--
-- Table structure for table `editusers`
--

CREATE TABLE `editusers` (
  `id` int(11) NOT NULL,
  `username` varchar(60) DEFAULT NULL,
  `firstname` varchar(60) DEFAULT NULL,
  `lastname` varchar(60) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `contact` int(20) DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `editusers`
--

INSERT INTO `editusers` (`id`, `username`, `firstname`, `lastname`, `email`, `contact`, `active`, `password`) VALUES
(1, 'admin', 'Peter', 'Kováč', 'adminik@gmail.com', 918158880, 1, '$2y$10$K1CxeSp61ctKZFdeNSE3CO0udQsnGZ2Pp2IkQiwexN9sIw9kZRuE6'),

--
-- Indexes for dumped tables
--

--
-- Indexes for table `editusers`
--
ALTER TABLE `editusers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `editusers`
--
ALTER TABLE `editusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
