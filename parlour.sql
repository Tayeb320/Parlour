-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2019 at 07:15 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.0.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parlour`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` varchar(10) NOT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `address`, `password`, `type`, `phone`) VALUES
(2, 'Janifar Jahan', 'janifar@gmail.com', 'uttara Dhaka', '1234', '', 0),
(3, 'Sonia', 'sonia@gmail.cm', 'uttar chayabithi', '123', '', 0),
(4, 'Tayeb Khan', '16103120@iubat.edu', 'Uttar Chayabithi, Gazipur ', '222222', '', 0),
(5, 'Tayeb Khan', '15103086@IUBAT.EDU', 'Pubail, Gazipur', 'c20ad4d76fe97759aa27a0c99bff6710', '', 0),
(6, 'Tayeb Khan', '16103120@iubat.edu', 'Pubail, Gazipur', '202cb962ac59075b964b07152d234b70', '', 0),
(7, 'Shafayet khan', 'zulkar29@gmail.com', 'Pubail, Gazipur', '202cb962ac59075b964b07152d234b70', '', 1756454545),
(8, 'Shafayet khan', 'zulkar29@gmail.com', 'Pubail, Gazipur', 'c20ad4d76fe97759aa27a0c99bff6710', '', 1756454545),
(9, 'Sharmin Sultana Sonia', '16103085@gmail.com', 'Gazipur', '202cb962ac59075b964b07152d234b70', '', 1677940484);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
