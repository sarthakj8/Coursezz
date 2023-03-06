-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2023 at 09:38 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `courses`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_user`
--

CREATE TABLE `contact_user` (
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `message` varchar(50) NOT NULL,
  `subscribe` varchar(5) NOT NULL DEFAULT 'No',
  `s_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_user`
--

INSERT INTO `contact_user` (`name`, `email`, `subject`, `message`, `subscribe`, `s_no`) VALUES
('sarthak jain', 'sarthak@gmail.com', 'test', 'this is test message', 'Yes', 1),
('anshu', 'anshu@gmail.com', 'test', 'test message', 'Yes', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `name` varchar(20) NOT NULL,
  `e_mail` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `s_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`name`, `e_mail`, `password`, `s_no`) VALUES
('sarthak', 'sarthak@gmail.com', '12345', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_user`
--
ALTER TABLE `contact_user`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`s_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_user`
--
ALTER TABLE `contact_user`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
