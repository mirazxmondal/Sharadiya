-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2022 at 12:02 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sharadiya`
--

-- --------------------------------------------------------

--
-- Table structure for table `sharadiya`
--

CREATE TABLE `sharadiya` (
  `id` int(3) NOT NULL,
  `name` varchar(50) NOT NULL,
  `number` varchar(50) NOT NULL,
  `zip` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `cpassword` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sharadiya`
--

INSERT INTO `sharadiya` (`id`, `name`, `number`, `zip`, `email`, `password`, `cpassword`, `address`) VALUES
(5, 'Miraz Mondal', '6291688300', '700151', 'mirazmondal1@gmail.com', '11', '111', '93, K.M Roy Chowdhury Road, Dakshin Jagaddal, Rups'),
(6, 'Miraz Mondal', '6291688300', '700151', 'mirazmondal1@gmail.com', 'gg', 'gg', '93, K.M Roy Chowdhury Road, Dakshin Jagaddal, Rups'),
(7, 'Miraz Mondal', '6291688300', '700151', 'mirazmondal1@gmail.com', 'gg', 'gg', '93, K.M Roy Chowdhury Road, Dakshin Jagaddal, Rups'),
(8, 'Miraz Mondal', '6291688300', '700151', 'mirazmondal1@gmail.com', 'bbbb', 'hjhhh', '93, K.M Roy Chowdhury Road, Dakshin Jagaddal, Rups'),
(9, 'Miraz Mondal', '6291688300', '700151', 'mirazmondal1@gmail.com', 'aa', 'aa', '93, K.M Roy Chowdhury Road, Dakshin Jagaddal, Rups'),
(10, 'Miraz Mondal', '6291688300', '700151', 'mirazmondal1@gmail.com', 'a', 'a', '93, K.M Roy Chowdhury Road, Dakshin Jagaddal, Rups');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sharadiya`
--
ALTER TABLE `sharadiya`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sharadiya`
--
ALTER TABLE `sharadiya`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
