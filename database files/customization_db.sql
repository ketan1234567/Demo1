-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2022 at 11:01 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `customization_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `contact_number` bigint(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `designation` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `confirm_password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `name`, `contact_number`, `address`, `designation`, `email`, `password`, `confirm_password`) VALUES
(1, 'Ketan Deshmukh', 9970166981, 'Shree colony udgir\r\n09', 'user', 'deshmukhketan647@gmail.com', 'Ketan@9970166981', 'Ketan@9970166981'),
(2, '', 0, '', 'admin', '', '', ''),
(3, 'kulkarni', 9970166981, 'Sai chowk old sagvi', 'admin', 'daminikulkarni456@gmail.com', 'Anil@9970166981', 'Anil@9970166981'),
(4, 'Deshmukh', 9970166981, 'Shree colony udgir,', 'admin', 'deshmukhketan647@gmail.com', 'Vishal@9970166981', 'Vishal@9970166981'),
(5, 'kulkarni', 9822324193, 'Sai chowk old sagvi', 'admin', 'daminikulkarni456@gmail.com', 'Kulkarni@9970166981', 'Kulkarni@9970166981'),
(6, 'kulkarni', 9822324193, 'Sai chowk old sagvi', 'admin', 'daminikulkarni456@gmail.com', 'fffffff', 'ffffffff');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
