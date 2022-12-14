-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2022 at 11:24 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hrms`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_vacancy`
--

CREATE TABLE `add_vacancy` (
  `id` int(50) NOT NULL,
  `post_name` varchar(100) NOT NULL,
  `experience` varchar(50) NOT NULL,
  `salary` int(50) NOT NULL,
  `place` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_vacancy`
--

INSERT INTO `add_vacancy` (`id`, `post_name`, `experience`, `salary`, `place`) VALUES
(3, 'python expert', '5', 500000, 'kochi'),
(4, 'web developer', '11', 500000, 'ernakulam'),
(5, 'php expert', '4', 40000, 'goa'),
(6, 'designer', '5', 500000, 'kochi');

-- --------------------------------------------------------

--
-- Table structure for table `add_work`
--

CREATE TABLE `add_work` (
  `id` int(50) NOT NULL,
  `work` varchar(200) NOT NULL,
  `loginid` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_work`
--

INSERT INTO `add_work` (`id`, `work`, `loginid`) VALUES
(6, 'To take the list of applicants who applied for the post for software developer.', 16);

-- --------------------------------------------------------

--
-- Table structure for table `application_form`
--

CREATE TABLE `application_form` (
  `id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phonenumber` int(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date_of_birth` varchar(20) NOT NULL,
  `post_of_application` varchar(200) NOT NULL,
  `experience` varchar(50) NOT NULL,
  `expected_ctc` varchar(200) NOT NULL,
  `cover_letter` varchar(200) NOT NULL,
  `loginid` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `application_form`
--

INSERT INTO `application_form` (`id`, `name`, `address`, `phonenumber`, `email`, `date_of_birth`, `post_of_application`, `experience`, `expected_ctc`, `cover_letter`, `loginid`) VALUES
(1, 'Don', 'fgeshxtdfhnxfyjntuhnt', 2147483647, 'don@gmail.com', '12/08/8907', 'electrical', '11', '111', '1ss', 12),
(5, 'Nower', 'yhnxyhnfhynfn', 2147483647, 'nower@gmail.com', '05/01/8988', 'engineer', '112', '2222', 'ecrtbhy', 19),
(8, 'Vicky', 'fhnfnhyfnhfn yhrxh h eh', 2147483647, 'vicky@gmail.com', '25/10/8999', 'engineer', '0', '111', 'aaaaaaaa', 22);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phonenumber` int(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `salary` int(50) NOT NULL,
  `loginid` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `phonenumber`, `email`, `salary`, `loginid`) VALUES
(3, 'nick', 214748364, 'nick@gmail.com', 24000, 16),
(4, 'hooky', 2147483647, 'hook@gmail.com', 0, 28);

-- --------------------------------------------------------

--
-- Table structure for table `hr`
--

CREATE TABLE `hr` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phonenumber` int(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `loginid` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hr`
--

INSERT INTO `hr` (`id`, `name`, `phonenumber`, `email`, `loginid`) VALUES
(7, 'Hike', 214748364, 'hike@gmail.com', 27);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `loginid` int(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`loginid`, `username`, `password`, `usertype`, `status`) VALUES
(1, 'admin', 'admin', 'admin', '1'),
(16, 'eee', 'eee', 'employee', '1'),
(17, 'uuu', 'uuu', 'user', '1'),
(27, 'hr', 'hr', 'hr', '1'),
(28, 'em', 'em', 'employee', '1');

-- --------------------------------------------------------

--
-- Table structure for table `user_registration`
--

CREATE TABLE `user_registration` (
  `id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phonenumber` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `loginid` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_registration`
--

INSERT INTO `user_registration` (`id`, `name`, `address`, `phonenumber`, `email`, `loginid`) VALUES
(7, 'mack', 'tyrfffffffhujjjj', '4568478', 'mack@gmail.com', 17);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_vacancy`
--
ALTER TABLE `add_vacancy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_work`
--
ALTER TABLE `add_work`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `application_form`
--
ALTER TABLE `application_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hr`
--
ALTER TABLE `hr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`loginid`);

--
-- Indexes for table `user_registration`
--
ALTER TABLE `user_registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_vacancy`
--
ALTER TABLE `add_vacancy`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `add_work`
--
ALTER TABLE `add_work`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `application_form`
--
ALTER TABLE `application_form`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hr`
--
ALTER TABLE `hr`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `loginid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user_registration`
--
ALTER TABLE `user_registration`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
