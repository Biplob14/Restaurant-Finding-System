-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2019 at 07:50 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rms`
--

-- --------------------------------------------------------

--
-- Table structure for table `food_post`
--

CREATE TABLE `food_post` (
  `food_post_id` int(10) NOT NULL,
  `restaurant_name` varchar(255) NOT NULL,
  `food_name` varchar(255) NOT NULL,
  `food_price` int(255) NOT NULL,
  `food_image` varchar(255) NOT NULL,
  `food_offer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food_post`
--

INSERT INTO `food_post` (`food_post_id`, `restaurant_name`, `food_name`, `food_price`, `food_image`, `food_offer`) VALUES
(1, '', 'abir', 10, '', '100% free'),
(2, '', 'abir', 10, '', '10% free'),
(3, '', '', 0, '', ''),
(4, '', '', 0, '', ''),
(5, '', 'Naga Burger', 0, '', 'kono offer nai'),
(6, '', 'pasta beguni', 22, '', 'no  fucking offer available'),
(7, '', 'pasta beguni', 231, '', 'akdom free sauce '),
(8, '', 'cake', 222, '', 'off'),
(9, '', 'pizza', 2000, '', 'no offer available'),
(10, '', 'dog hot', 200, '', '20% off'),
(11, '', 'abir', 0, '', '156'),
(12, '', 'abir', 0, '', '156'),
(13, '', '', 0, '', ''),
(14, '', '', 0, '', ''),
(15, '', '', 0, '', ''),
(16, '', 'jyf', 4563, '', '473'),
(17, '', '', 0, '', ''),
(18, '', 'Naga Burger', 231, '', 'dsgdfg'),
(19, '', 'Naga Burger', 231, '', 'dsgdfg'),
(20, '', 'Naga Burger', 231, '', 'dsgdfg'),
(21, '', 'cake', 465, '', 'gsdg df'),
(22, '', '', 0, '', ''),
(23, 'cake bean', 'Naga Burger', 432, '', 'dsfghdfh');

-- --------------------------------------------------------

--
-- Table structure for table `r_signup`
--

CREATE TABLE `r_signup` (
  `id` int(255) NOT NULL,
  `r_name` varchar(255) NOT NULL,
  `r_address` varchar(255) NOT NULL,
  `mobile_num` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `r_password` varchar(255) NOT NULL,
  `rating` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `r_signup`
--

INSERT INTO `r_signup` (`id`, `r_name`, `r_address`, `mobile_num`, `email`, `r_password`, `rating`) VALUES
(1, 'normal chef', 'dhanmondi', 1456748974, 'yapskroy085432552232@gmail.com', '202cb962ac59075b964b07152d234b70', 3),
(2, 'ab-normal chef', 'gulshan', 145265256, 'skroy082232@gmail.com', '202cb962ac59075b', 2.8),
(3, 'aho vatija', 'mirpur', 65842514, 'skroy32@gmail.com', '202cb962ac', 3.5),
(4, 'c-minor', '', 123456, 'cminor@minor.com', '81dc9bdb52d04dc20036dbd8313ed055', 0),
(5, 'triangle', '', 90909090, 'triangle@gel.com', '962012d09b8170d912f0669f6d7d9d07', 0),
(6, 'In n Out', 'Mirpur-2, Dhaka ', 9876, 'in@out.com', '81dc9bdb52d04dc20036dbd8313ed055', 0);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `first_name` varchar(32) NOT NULL,
  `last_name` varchar(32) NOT NULL,
  `mobile_no` int(15) NOT NULL,
  `email` varchar(32) NOT NULL,
  `password` varchar(40) NOT NULL,
  `gender` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `first_name`, `last_name`, `mobile_no`, `email`, `password`, `gender`) VALUES
(8, 'bdnath', 'bdnath', 1949215019, 'fadksfhaj@laksjf.com', '202cb962ac59075b964b07152d234b70', 'Male'),
(9, 'Saikat', 'Roy', 1949215019, 'yapskroy08@gmail.com', 'fd2cc6c54239c40495a0d3a93b6380eb', 'Male'),
(10, 'Saikat', 'Roy', 1949215019, 'yapssskroy08@gmail.coms', '912ec803b2ce49e4a541068d495ab570', 'Male'),
(11, 'Saikat', '', 1949215019, 'ysssapskroy08@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'Male'),
(12, 'Borsha', 'Debnath', 1845216349, 'dhfjsbgvh@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'Female'),
(13, 's', 'k', 2147483647, 'njm@gmail.com', '202cb962ac59075b964b07152d234b70', 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `food_post`
--
ALTER TABLE `food_post`
  ADD PRIMARY KEY (`food_post_id`);

--
-- Indexes for table `r_signup`
--
ALTER TABLE `r_signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD UNIQUE KEY `r_name` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `food_post`
--
ALTER TABLE `food_post`
  MODIFY `food_post_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `r_signup`
--
ALTER TABLE `r_signup`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
