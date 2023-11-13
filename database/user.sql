-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2023 at 02:13 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `didimoon`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `name`) VALUES
(1, '008pm008@gmail.com', '008pm008@gmail.com', '123', 'ppp'),
(15, 'pedrammmm6', 'mirmomenp@gmail.com', '$2y$10$UtOvC03.aiEbrvZTFYbay.afV63xJKJhd2UDloHQwh9iuw/OoWQdK', 'pedram'),
(16, 'pedrampedram', 'shadow_man_pm8@gmail.com', '$2y$10$k6LJQkSSu.4VHfisMCeYY.UTfF7QQX8cvoprltWy3QVLsZk4Wfvwq', 'pppp'),
(17, 'pedro', 'pm008pm@gmail.com', '$2y$10$LZo2haFtvT6AafKgnQQw2O9gEZA3oKZs1GIJdFTt6FrW9mlSK0hje', 'pedro'),
(18, 'pedro2', 'mirmomenp@gmail.com', '$2y$10$OuNmFbU3sIgBtG6JCgMxKOuzTI43zvzkbcYU/xSkKGBxkzMQVzcBW', 'pedrom');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
