-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2022 at 09:44 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin`, `password`) VALUES
('admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `movielist`
--

CREATE TABLE `movielist` (
  `movnm` varchar(255) NOT NULL,
  `moviedisc` varchar(255) NOT NULL,
  `uplodeimg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `seat_booking`
--

CREATE TABLE `seat_booking` (
  `seat` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `signup_booking`
--

CREATE TABLE `signup_booking` (
  `coust_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `cpassword` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup_booking`
--

INSERT INTO `signup_booking` (`coust_id`, `name`, `mobile`, `email`, `password`, `cpassword`) VALUES
(1, 'Jay Patel', '9966554422', 'jay@gmail.com', '202020', '202020'),
(2, 'MS Dhoni', '9998406535', 'msdhoni@gmail.com', '101010', '101010'),
(3, 'Sarthi Pithadiya', '9624789682', 'sarthipithadiya45@gmail.com', '454545', '454545'),
(4, 'Virat Kohli', '6524789654', 'viratkohli@gmail.com', '123123', '123123'),
(5, 'Chirag Patel', '6595457895', 'chiragpatel@gmail.com', '202020', '202020'),
(6, 'Mayur Khatri', '9856214585', 'mayur@gmail.com', 'a28f05f5f45fe2d8a900736c8935fe', 'a28f05f5f45fe2d8a900736c8935fe'),
(7, 'Nikhil', '8989898652', 'nikhil123@gmail.com', '6d071901727aec1ba6d8e2497ef5b7', '6d071901727aec1ba6d8e2497ef5b7');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `signup_booking`
--
ALTER TABLE `signup_booking`
  ADD PRIMARY KEY (`coust_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `signup_booking`
--
ALTER TABLE `signup_booking`
  MODIFY `coust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
