-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2020 at 03:05 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobisol`
--

-- --------------------------------------------------------

--
-- Table structure for table `conform`
--

CREATE TABLE `conform` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `phone` text NOT NULL,
  `email` text NOT NULL,
  `message` text NOT NULL,
  `generatedAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `enabled` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `conform`
--

INSERT INTO `conform` (`id`, `name`, `phone`, `email`, `message`, `generatedAt`, `enabled`) VALUES
(1, 'Ri95NFhHZmtwNHRvWTNiM3l4RjZqdz09', 'NjY5cXRXMEMrZDludE9wTElRdSs3QT09', 'eTdzWTI3Z3RrdmRwakRsSGdCbGZUUT09', 'eFFNSHd3cWFOUWMyenhRQ1A2bzVQeFJrNTZibk5McXpMWHIvNGVHb3lNST0=', '2020-05-31 08:29:12', 0),
(2, 'Z25YUWIzbUZJaXNodEx6OU1TSk9tQT09', 'M3VhZWZYUk9DVFpxMldFbWhMcjFFQT09', 'eTdzWTI3Z3RrdmRwakRsSGdCbGZUUT09', 'UTBsTm5zZ0t6WkdjckVDOFNGck1HVHVDUEY1ckVCRWtWSXJoNW9tNHlrMGkrWXVOMWl4RWtjeUN3WEJiVkVacGhDQmlHbkJjUlNxK09MMWZudk1mekdEbVkxNTNGaUVrdDN0VFJMZDFEalE9', '2020-05-31 08:28:11', 0),
(3, 'S253dEJwbXNIT0FZSHUzQ1RXdlBQUT09', 'NndtYVQrcUhOUnFNVWFuWjBKU3FUQT09', 'MnBybTc0ekUyRVQ2ZnVkc0Z5WlY3YjhUVmZQVGJ0TjdGZEF1ZXZTckM3OD0=', 'eVlPSHlab2ZjWnZ3TDFRQ2dCSm5DUT09', '2020-05-31 10:01:15', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ip_add`
--

CREATE TABLE `ip_add` (
  `id` int(1) NOT NULL,
  `ip_add` text NOT NULL,
  `generatedAt` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ip_add`
--

INSERT INTO `ip_add` (`id`, `ip_add`, `generatedAt`) VALUES
(1, '::1', '2020-05-31 12:47:21'),
(2, '::1', '2020-05-31 12:47:38'),
(3, '::1', '2020-05-31 12:47:40'),
(4, '::1', '2020-05-31 12:47:41'),
(5, '::1', '2020-05-31 12:47:42'),
(6, '::1', '2020-05-31 12:48:13'),
(7, '::1', '2020-05-31 13:02:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `conform`
--
ALTER TABLE `conform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ip_add`
--
ALTER TABLE `ip_add`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `conform`
--
ALTER TABLE `conform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ip_add`
--
ALTER TABLE `ip_add`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
