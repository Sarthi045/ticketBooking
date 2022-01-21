-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2022 at 12:56 PM
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
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `uploaded_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `movielist`
--

CREATE TABLE `movielist` (
  `movnm` varchar(255) NOT NULL,
  `moviedisc` varchar(255) NOT NULL,
  `uplodeimg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movielist`
--

INSERT INTO `movielist` (`movnm`, `moviedisc`, `uplodeimg`) VALUES
('Inception', 'A thief who steals corporate secrets through the use of dream-sharing technology is given the inverse task of planting an idea into the mind of a C.E.O., but his tragic past may doom the project and his team to disaster.', './all_images/inception.jpg'),
('Tenet', 'Armed with only one word, Tenet, and fighting for the survival of the entire world, a Protagonist journeys through a twilight world of international espionage on a mission that will unfold in something beyond real time.', './all_images/tenet.jpg'),
('Interstellar', 'When Earth becomes uninhabitable in the future, a farmer and ex-NASA pilot, Joseph Cooper, is tasked to pilot a spacecraft, along with a team of researchers, to find a new planet for humans.', './all_images/Interstellarr.jpg'),
('Dunkirk', 'Allied soldiers from Belgium, the British Commonwealth and Empire, and France are surrounded by the German Army and evacuated during a fierce battle in World War II.', './all_images/Dunkirk.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `seat_booking`
--

CREATE TABLE `seat_booking` (
  `seat` varchar(250) NOT NULL,
  `coust_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seat_booking`
--

INSERT INTO `seat_booking` (`seat`, `coust_id`) VALUES
('1,2', 1),
('2', 2),
('1,2', 1),
('1', 1),
('1,2', 1),
('3', 3);

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
(1, 'Sarthi Pithadiya', '9624789682', 'sarthipithadiya45@gmail.com', '6d071901727aec1ba6d8e2497ef5b7', '6d071901727aec1ba6d8e2497ef5b7'),
(2, 'Jay', '1234567890', 'jay@gmail.com', '96e79218965eb72c92a549dd5a3301', '96e79218965eb72c92a549dd5a3301'),
(3, 'admin', '9656214578', 'admin@admin.com', '21232f297a57a5a743894a0e4a801f', '21232f297a57a5a743894a0e4a801f'),
(4, 'Virat Kohli', '6524789654', 'viratkohli@gmail.com', '670b14728ad9902aecba32e22fa4f6', '670b14728ad9902aecba32e22fa4f6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seat_booking`
--
ALTER TABLE `seat_booking`
  ADD KEY `coust_id_f` (`coust_id`);

--
-- Indexes for table `signup_booking`
--
ALTER TABLE `signup_booking`
  ADD PRIMARY KEY (`coust_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `signup_booking`
--
ALTER TABLE `signup_booking`
  MODIFY `coust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `seat_booking`
--
ALTER TABLE `seat_booking`
  ADD CONSTRAINT `coust_id_f` FOREIGN KEY (`coust_id`) REFERENCES `signup_booking` (`coust_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
