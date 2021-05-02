-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2021 at 02:59 PM
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
-- Database: `teacher`
--

-- --------------------------------------------------------

--
-- Table structure for table `teacher_data`
--

CREATE TABLE `teacher_data` (
  `id` int(100) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `phoneNumber` varchar(10) NOT NULL,
  `qualification` varchar(200) NOT NULL,
  `dept` varchar(200) NOT NULL,
  `username_pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_data`
--

INSERT INTO `teacher_data` (`id`, `first_name`, `last_name`, `address`, `Email`, `phoneNumber`, `qualification`, `dept`, `username_pass`) VALUES
(228, 'Aarti', 'Chavan', 'Siddhi Homes Society, Achole Cross rd, Sanyukth Nagar, Opp. Zallawad Ground, Nallasopara(East). ', 'aartichavan201@gmail.com', '7219788097', 'Master in Information and Technology', 'Information Technology', 'aarti123'),
(232, 'Rahul', 'yadav', 'B/102, Shantiniketan , Achole road, Nallasopara(east).', 'rahulyadav@gmail.com', '7448271254', 'Master In Bachelor Of information and technology', 'Information Technology', 'rahul123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `teacher_data`
--
ALTER TABLE `teacher_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `teacher_data`
--
ALTER TABLE `teacher_data`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=233;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
