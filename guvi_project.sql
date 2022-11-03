-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2022 at 06:10 PM
-- Server version: 8.0.30
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `guvi_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `ph` varchar(16) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `email`, `ph`, `password`) VALUES
(1, 'Narmadha', 'narmadha@gmail.com', '9565652563', '1234'),
(2, '', '', '', ''),
(18, 'Rahuram ', 'ram@gmail.com', '9629124694', '1234'),
(20, 'sam', 'sam@gmail.com', '9566474405', '1234'),
(22, 'hello', 'helo@gmail.com', '4855555', '1234'),
(28, 'jimmy', 'jimmy@gmail.com', '7896541236', '1234'),
(96, 'bero', 'bero@gmail.com', '232334343', '1234'),
(97, 'bench', 'bench@gmail.com', '65655564545465', '1234'),
(98, 'battery', 'battery@gmail.com', '12233434', '1234'),
(99, 'bag', 'bag@gmail.com', '234454', '1234'),
(100, 'hp', 'hp@gmail.com', '564954544', '1234'),
(103, 'salem', 'salem@gmail.com', '5426659555', '1234'),
(104, 'rasi', 'rasi@gmail.com', '545155251', '1234'),
(105, 'docker', 'docker@gmail.com', '5545451515', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `ph` (`ph`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
