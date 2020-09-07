-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2020 at 07:52 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.3.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `miniproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `mp1`
--

CREATE TABLE `mp1` (
  `id` int(5) NOT NULL,
  `pass` varchar(8) NOT NULL,
  `conP` varchar(8) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `uType` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mp1`
--

INSERT INTO `mp1` (`id`, `pass`, `conP`, `name`, `email`, `uType`) VALUES
(12345, '12345', '12345', 'Kala', 'kala@aiub.edu', 'User'),
(12345, '12345', '12345', 'Kalai', 'kalai@aiub.edu', 'User'),
(12346, '12346', '12346', 'fam', 'fam@aiun.com', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mp1`
--
ALTER TABLE `mp1`
  ADD PRIMARY KEY (`id`,`pass`,`conP`,`name`,`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
