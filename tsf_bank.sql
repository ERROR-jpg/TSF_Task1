-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov, 2021 at 07:28 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tsf_bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `sno` int(3) NOT NULL,
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `balance` int(8) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`sno`, `sender`, `receiver`, `balance`, `datetime`) VALUES
(1, 'Sachin', 'Purva', 200, '2021-11-05 18:58:27'),
(2, 'Abhijit', 'Rohan', 200, '2021-11-05 19:00:31'),
(3, 'Fredricks', 'Vivek', 5000, '2021-11-05 19:01:32'),
(4, 'Purva', 'Rohan', 5000, '2021-11-05 19:06:15'),
(5, 'Mohan', 'Sarika', 500, '2021-11-05 19:28:24'),
(6, 'Shubham', 'Pradyuman', 500, '2021-11-05 19:30:31'),
(7, 'Rohan', 'Sachin', 200, '2021-11-05 19:31:22'),
(8, 'Shubham', 'Sarika', 520, '2021-11-05 07:39:58'),
(9, 'Pradyuman', 'Abhijit', 500, '2021-11-05 09:37:08'),
(10, 'Vivek', 'Fredricks', 100, '2021-11-05 11:52:18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `balance` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `balance`) VALUES
(101, 'Rohan', 'rohan@email.com', 20000),
(102, 'Mohan', 'mohan@email.com', 43599),
(103, 'Shubham', 'shubham@email.com', 24213),
(104, 'Abhijit', 'abhijit@email.com', 53222),
(105, 'Sarika', 'sarika@email.com', 85324),
(201, 'Purva', 'purva@email.com', 42445),
(202, 'Pradyuman', 'pradyuman@email.com', 24552),
(203, 'Fredricks', 'fredricks@email.com', 35632),
(204, 'Sachin', 'sachin@email.com', 24521),
(205, 'Vivek', 'vivek@email.com', 61948);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaction`
--f
ALTER TABLE `transaction`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54655;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;