-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2024 at 05:34 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `truck`
--
CREATE DATABASE IF NOT EXISTS `truck` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `truck`;

-- --------------------------------------------------------

--
-- Table structure for table `truck_info`
--

CREATE TABLE `truck_info` (
  `truck_id` int(11) NOT NULL,
  `image_url` text DEFAULT NULL,
  `truck_name` text DEFAULT NULL,
  `stock` text DEFAULT NULL,
  `price` text DEFAULT NULL,
  `mileage` text DEFAULT NULL,
  `engine` text DEFAULT NULL,
  `trans` text DEFAULT NULL,
  `note` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `truck_info`
--

INSERT INTO `truck_info` (`truck_id`, `image_url`, `truck_name`, `stock`, `price`, `mileage`, `engine`, `trans`, `note`) VALUES
(10, 'IMG-65fc0078e7bde0.28643355.jpg', 'Truck 1', 'ajdklsajkld', '444', '1213214', 'wewq', 'asd', ''),
(15, 'IMG-6605c34a8342f1.09405446.jpg', 'Truck abc', 'xdcfgb', '550', '120000', 'eee', 'transm', '///'),
(16, 'IMG-6605c364ea9da7.58010123.jpg', 'Trck233', 'sdsa', '440', '888888', 'sdaas', 'sdada', 'aaa'),
(17, 'IMG-6605c37c9f4820.54612444.jpg', 'Truck 44', 'abbbc', '999999', '78347848', 'adsa', 'aa', '..');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `truck_info`
--
ALTER TABLE `truck_info`
  ADD PRIMARY KEY (`truck_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `truck_info`
--
ALTER TABLE `truck_info`
  MODIFY `truck_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
