-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2022 at 06:39 PM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(4) NOT NULL,
  `ptitle` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `media` varchar(200) NOT NULL,
  `media1` varchar(200) NOT NULL,
  `media2` varchar(200) NOT NULL,
  `media3` varchar(200) NOT NULL,
  `media4` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `ptitle`, `description`, `media`, `media1`, `media2`, `media3`, `media4`) VALUES
(1, 'AAA', 'AAA', '.././UploadIMG_20220920_160440.jpg', '', '', '', ''),
(2, 'aaa', 'aaa', '../././Uploadicons8-app-64 (1).png', '', '', '', ''),
(3, 'AAA', 'AAA', '../Uploadionic.png', '', '', '', ''),
(4, 'AAA', 'aaa', '../../Uploadionic.png', '', '', '', ''),
(5, 'AAA', 'aa', '../../UploadIMG_20220920_171158995.jpg', '', '', '', ''),
(6, 'AAA', 'AAA', '../.Uploadionic.png', '', '', '', ''),
(7, 'AAA', 'AAA', '.././Uploadionic.png', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
