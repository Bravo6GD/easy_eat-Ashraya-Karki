-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2022 at 12:15 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `easyeat`
--

-- --------------------------------------------------------

--
-- Table structure for table `dish_data`
--

CREATE TABLE `dish_data` (
  `id` int(11) NOT NULL,
  `dish` varchar(255) NOT NULL,
  `recipe` longtext NOT NULL,
  `date and time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dish_data`
--

INSERT INTO `dish_data` (`id`, `dish`, `recipe`, `date and time`) VALUES
(6, 'daa', 'dwa', '0000-00-00 00:00:00'),
(7, 'NEw', 'dadd', '0000-00-00 00:00:00'),
(8, 'dawda', 'dwad', '0000-00-00 00:00:00'),
(9, 'Momo', 'dwaklndlnawlk', '0000-00-00 00:00:00'),
(10, 'Momo', 'dwaklndlnawlk', '0000-00-00 00:00:00'),
(11, 'wdad', 'adw', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dish_data`
--
ALTER TABLE `dish_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dish_data`
--
ALTER TABLE `dish_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
