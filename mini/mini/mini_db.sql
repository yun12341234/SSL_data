-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2023 at 08:00 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mini_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `empid` int(10) NOT NULL,
  `price` varchar(50) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`empid`, `price`, `quantity`, `image`, `location`, `date`) VALUES
(114, '32', '1', 'pro_64c37bd4ac969.png', '่jpaa', '2023-07-28'),
(115, '32', '1', 'pr_64c37d92408c5.PNG', '่jpaa', '2023-07-28'),
(116, '42', '2', 'pr_64c37f4c5739b.png', 'th', '2023-07-27'),
(117, '54', '2', 'pr_64c3805c5db3d.png', 'th', '2023-07-27'),
(118, '54', '1', 'pr_64c3862992e18.PNG', 'th', '2023-07-28'),
(119, '43', '2', 'pr_64c387149895e.PNG', '่jpaa', '2023-07-26'),
(120, '33', '1', '', '่jpaa', '1970-01-01'),
(121, '55', '1', 'pr_64c3880fe25b7.PNG', '่jp', '2023-07-30'),
(122, '22', '1', 'pr_64c3889d0a74e.png', 'th', '2023-07-28'),
(123, '99', '1', 'photo/pr_64c39351be25e.png', 'th', '2023-07-28'),
(124, '22', '1', 'pr_64c3943b0fd0d.PNG', 'th', '2023-07-28'),
(125, '2', '1', 'pr_64c39a6b8c27f.png', 'th', '2023-07-28'),
(126, '3', '1', 'pr_64c39b4f461e4.png', 'th', '2023-07-28'),
(127, '4', '1', 'pr_64c39b97db4ba.PNG', 'th', '2023-07-28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `privilege` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `user`, `password`, `privilege`) VALUES
(0, '[value-2]', '[value-3]', '[value-4]');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`empid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `empid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
