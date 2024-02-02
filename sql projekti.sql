-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2024 at 04:53 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projekti`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `is_admin`) VALUES
(1, 'enes@enes.com', '$2y$10$AT7harCaDyKoY62EDOrtiOn.Mmkd5GcwILaSSvVHaWFfYin8ZL1/G', 1),
(2, 'olti@olti.com', '$2y$10$i92DNjMZ2p34P7CN4AP6mOV2li0MeGt7uK/Tuh6Z6b6u7nN0Y983y', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contactuss`
--

CREATE TABLE `contactuss` (
  `emri` varchar(255) NOT NULL,
  `mbiemri` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactuss`
--

INSERT INTO `contactuss` (`emri`, `mbiemri`, `email`, `comment`) VALUES
('Abish', 'Bisha', 'dsadadsad@asdsad.com', 'dsadadsaddsadadsaddsadadsaddsadadsaddsadadsad'),
('Olti', 'Kepuska', 'olti@gmail.com', 'Pershendetje pata deshir te aplikoj per pun tek ju');

-- --------------------------------------------------------

--
-- Table structure for table `produktett`
--

CREATE TABLE `produktett` (
  `id` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produktett`
--

INSERT INTO `produktett` (`id`, `price`, `category`, `color`) VALUES
(102, 40.00, 'RUBBERIZED PUFFER VEST WITH HOOD', 'White'),
(103, 20.00, 'T-Shirt', 'Brown');

-- --------------------------------------------------------

--
-- Table structure for table `userss`
--

CREATE TABLE `userss` (
  `emri` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userss`
--

INSERT INTO `userss` (`emri`, `email`, `age`) VALUES
('Olti', 'kepuskaolti@gmail.com', 22),
('Erti', 'erti@gmail.com', 22),
('Erti', 'erti@gmail.com', 22),
('Maqoki', 'Masda@dasdas.com', 43),
('Soki', 'soki@asdasd.com', 11),
('Adasgad', 'asdasd@dsadac.com', 34);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produktett`
--
ALTER TABLE `produktett`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `produktett`
--
ALTER TABLE `produktett`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
