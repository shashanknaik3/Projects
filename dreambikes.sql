-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2021 at 06:00 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dreambikes`
--

-- --------------------------------------------------------

--
-- Table structure for table `bikes`
--

CREATE TABLE `bikes` (
  `id` int(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `pph` int(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bikes`
--

INSERT INTO `bikes` (`id`, `name`, `pph`, `status`) VALUES
(1001, 'Honda Activa', 600, 'booked'),
(1002, 'Honda Dio', 650, 'booked'),
(1003, 'Suzuki Access', 700, 'booked'),
(1004, 'Yamaha Fascino', 700, 'booked'),
(1005, 'Piaggio Vespa', 750, 'available'),
(1006, 'Bajaj Pulsar 150', 850, 'booked'),
(1007, 'Yamaha FZ 150', 850, 'available'),
(1008, 'Suzuki Gixer 150', 850, 'available'),
(1009, 'Bajaj Avenger', 1000, 'available'),
(1010, 'Yamaha Entizer', 1000, 'available'),
(1011, 'RE Classic 350', 1150, 'available'),
(1012, 'RE Thunderbird', 1150, 'available'),
(1013, 'RE Himalayan', 1350, 'available'),
(1014, 'RE Continental', 1350, 'available');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(255) NOT NULL,
  `bikeid` int(255) NOT NULL,
  `userid` int(255) NOT NULL,
  `price` int(255) NOT NULL,
  `pdate` date NOT NULL,
  `ddate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `bikeid`, `userid`, `price`, `pdate`, `ddate`) VALUES
(16, 1006, 1, 2550, '2021-01-07', '2021-01-10'),
(17, 1002, 2, 1300, '2021-01-06', '2021-01-08'),
(18, 1002, 2, 650, '2021-01-07', '2021-01-08'),
(19, 1002, 2, 1300, '2021-01-06', '2021-01-08'),
(20, 1001, 2, 1200, '2021-01-06', '2021-01-08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phoneno` varchar(10) NOT NULL,
  `aadhar` varchar(16) NOT NULL,
  `driving` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `phoneno`, `aadhar`, `driving`, `password`, `role`) VALUES
(1, 'shashikumar', 'shashi@gmail.com', '8746861736', '123456781234', 'KA18CD1111', 'shashi', 'user'),
(2, 'shashank', 'shashank@gmail.com', '8431052284', '876543218765', 'KA13AB1234', 'shashank', 'user'),
(8, 'shashi', 'shashimanu@gmail.com', '9876543210', '1819818189198', '873982398239298', 'qwerty', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bikes`
--
ALTER TABLE `bikes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bikes`
--
ALTER TABLE `bikes`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1019;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
