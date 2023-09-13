-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2023 at 04:22 PM
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
-- Database: `newcottege`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `con_name` varchar(25) NOT NULL,
  `con_email` varchar(25) NOT NULL,
  `con_msg` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`con_name`, `con_email`, `con_msg`) VALUES
('madan', 'rajpadam143@gmail.com', 'here finally'),
('madan', 'rajpadam143@gmail.com', 'fdfd'),
('madan', 'rajpadam143@gmail.com', 'sdasas'),
('puri', 'rukmanpuri@gmail.com', 'i need momo'),
('madan', 'madanrajkharel@gmaill.com', 'hello thsi si sjdsdks  sakhff kh lh  sjkhsmnfksdhf khss dksdfsdjfksdjhfsdkjfsdk svsd ks dksdhsdkdsm dkshsjn'),
('rambo', 'rambo@gmail.com', 'my name is rambo');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `u_name` varchar(25) NOT NULL,
  `u_pass` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`u_name`, `u_pass`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `nproduct`
--

CREATE TABLE `nproduct` (
  `np_id` int(11) NOT NULL,
  `np_name` varchar(25) NOT NULL,
  `np_price` int(11) NOT NULL,
  `np_about` text NOT NULL,
  `np_image` varchar(400) NOT NULL,
  `np_status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nproduct`
--

INSERT INTO `nproduct` (`np_id`, `np_name`, `np_price`, `np_about`, `np_image`, `np_status`) VALUES
(5, 'momo', 130, 'dfsfsadfsadfs', 'image/89f2ac48925fc1959899442bc5c1bb9f.jpg', 'nonSpecial'),
(6, 'momo', 12, ' affsdfsf ', 'image/89f2ac48925fc1959899442bc5c1bb9f.jpg', 'Special'),
(7, 'momo', 42, 'jhfasfg ', 'image/3731bdaee71f6398af483f7ec5c57787.jpg', 'nonSpecial'),
(8, 'momo', 42, 'jhfasfg ', 'image/3731bdaee71f6398af483f7ec5c57787.jpg', 'Special'),
(16, 'new23232', 130, 'fsdfsdf ', 'image/Slice 1 (1).png', 'Special'),
(17, 'new', 130, 'snsnsn ', 'image/Slice 1 (1).png', 'Special'),
(20, 'sccom', 130, 'fdfdfdfdfdf  ', 'image/351450475_109542715494624_6040017968280958939_n.jpg', 'nonSpecial'),
(22, 'test', 30, 'dfsdfd', 'image/WIN_20230910_12_04_47_Pro.jpg', 'nonSpecial'),
(24, 'momo4', 0, 'dasdasd', 'image/chowmin.jpg', 'nonSpecial');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nproduct`
--
ALTER TABLE `nproduct`
  ADD PRIMARY KEY (`np_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nproduct`
--
ALTER TABLE `nproduct`
  MODIFY `np_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
