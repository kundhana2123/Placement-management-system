-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2021 at 09:29 AM
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
-- Database: `placementproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(20) NOT NULL,
  `NameoftheStudent` varchar(40) NOT NULL,
  `NameoftheUniversity` varchar(40) NOT NULL,
  `Registrationnumber` varchar(40) NOT NULL,
  `Emailaddress` varchar(40) NOT NULL,
  `Companyyouhaveselected` varchar(20) NOT NULL,
  `SelectBranch` varchar(20) NOT NULL,
  `CGPA` float NOT NULL,
  `Languagesknown` varchar(40) NOT NULL,
  `Projects` varchar(40) NOT NULL,
  `Achievements` varchar(40) NOT NULL,
  `WorkshopsInternships` varchar(20) NOT NULL,
  `FrameworksTools` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `NameoftheStudent`, `NameoftheUniversity`, `Registrationnumber`, `Emailaddress`, `Companyyouhaveselected`, `SelectBranch`, `CGPA`, `Languagesknown`, `Projects`, `Achievements`, `WorkshopsInternships`, `FrameworksTools`) VALUES
(1, 'thathajayasree', 'srm', 'AP19110010463', 'thathajayasree@gmail.com', 'Google', 'CSE', 9, 'html,CSS,python', 'admission form', 'Python course completed with certificati', '5', 'Django'),
(2, 'noushika', 'srm', 'AP19110010430', 'noushika897@gmail.com', 'Apple', 'CSE', 9, 'html,CSS,python', 'Summer Intership  form', 'Onw month internship on designed game us', '6', 'Django');

-- --------------------------------------------------------

--
-- Table structure for table `submit`
--

CREATE TABLE `submit` (
  `id` int(20) NOT NULL,
  `Username` varchar(40) NOT NULL,
  `Firstname` varchar(40) NOT NULL,
  `Lastname` varchar(40) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `psw` varchar(20) NOT NULL,
  `cpsw` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `submit`
--

INSERT INTO `submit` (`id`, `Username`, `Firstname`, `Lastname`, `email`, `phone`, `psw`, `cpsw`) VALUES
(1, 'jaya10', 'thatha', 'jayasree', 'thathajayasree@gmail', '7654321098', '12345', '12345'),
(2, 'noushi', 'motukuri', 'noushika', 'noushi123@gmail.com', '9533234666', '9876', '9876');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submit`
--
ALTER TABLE `submit`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `submit`
--
ALTER TABLE `submit`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
