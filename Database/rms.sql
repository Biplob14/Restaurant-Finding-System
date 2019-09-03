-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2019 at 04:29 PM
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
  `food_name` varchar(255) NOT NULL,
  `food_offer` varchar(255) NOT NULL,
  `food_img` text NOT NULL,
  `r_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food_post`
--

INSERT INTO `food_post` (`food_post_id`, `food_name`, `food_offer`, `food_img`, `r_name`) VALUES
(1, 'Burger', '20% OFF on all burgers', 'resource/item1.jpg', 'khadok'),
(2, 'Chicken', '50 % offer', '', ''),
(3, 'Chicken', '14536', './r', ''),
(4, 'Chicken', '541564', '', ''),
(5, 'Chicken', '541564', '', ''),
(6, '', '', '', ''),
(7, '', '', '', 'khadok'),
(8, '', '', '', 'khadok'),
(9, 'Chicken', 'ih9u,8', '../resource/5d6e6cd02ca018.81182398.jpg', 'khadok'),
(10, 'Chicken', '54634', 'resource/5d6e6debc949b8.51635388.jpg', 'khadok'),
(11, 'Burger', '20% Offers', 'resource/5d6e6e48e5bbf3.65028009.jpg', 'khadok');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(11) NOT NULL,
  `r_name` text NOT NULL,
  `food_name` text NOT NULL,
  `food_price` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `r_name`, `food_name`, `food_price`) VALUES
(1, 'khadok', 'burger', 500),
(2, 'khadok', 'pizza', 1000),
(7, 'khadok', 'bamboo', 10000),
(8, 'khadok', 'Chicken', 0);

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
  `rating` float NOT NULL,
  `r_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `r_signup`
--

INSERT INTO `r_signup` (`id`, `r_name`, `r_address`, `mobile_num`, `email`, `r_password`, `rating`, `r_img`) VALUES
(3, 'khadok', ' hfdtjdtsj', 2147483647, 'bdnath@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 0, 'resource/5d6e3568984bc6.55093507.png');

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
  `gender` varchar(20) NOT NULL,
  `user_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `first_name`, `last_name`, `mobile_no`, `email`, `password`, `gender`, `user_img`) VALUES
(3, 'bdnath', 'Roy', 1949215019, 'bdnath@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Male', 'resource/5d6e23814cfd77.32716905.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `food_post`
--
ALTER TABLE `food_post`
  ADD PRIMARY KEY (`food_post_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

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
  MODIFY `food_post_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `r_signup`
--
ALTER TABLE `r_signup`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
