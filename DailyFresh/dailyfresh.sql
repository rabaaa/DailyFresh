-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2019 at 03:26 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dailyfresh`
--

-- --------------------------------------------------------

--
-- Table structure for table `feature`
--

CREATE TABLE `feature` (
  `wid` int(10) NOT NULL,
  `f1` int(10) NOT NULL,
  `f2` int(10) NOT NULL,
  `f3` int(10) NOT NULL,
  `f4` int(10) NOT NULL,
  `f5` int(10) NOT NULL,
  `live` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feature`
--

INSERT INTO `feature` (`wid`, `f1`, `f2`, `f3`, `f4`, `f5`, `live`) VALUES
(1, 2, 3, 4, 5, 6, 1),
(2, 3, 5, 2, 1, 5, 0),
(3, 2, 4, 6, 6, 1, 0),
(4, 1, 8, 5, 6, 7, 0);

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `ingredients` text,
  `ctime` varchar(100) DEFAULT NULL,
  `veg` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`id`, `name`, `image`, `description`, `ingredients`, `ctime`, `veg`) VALUES
(1, 'Chicken Karahi', 'karahi.jpg', 'Fry chicken add ginger garlic paste add some spices add some water and cook for 20 minutes. Sprinkle corriander and green chilies. Tasty chicken karahi is ready.', NULL, '40', 0),
(2, 'Biryani', 'karahi.jpg', 'mix well and keep aside.\r\n', NULL, '2', 1),
(3, 'Vegi Curry', 'karahi.jpg', 'boil', NULL, '10 minutes', 0),
(4, 'chicken tikka', 'karahi.jpg', 'tasty chicken tikka', 'chicken ', '30 minutes', 0),
(5, 'vegi pizza', 'karahi.jpg', 'tasty pizza', 'corn, green chilies', '30 minutes', 0),
(6, 'grilled salmon', 'karahi.jpg', 'put it in the oven', 'salmon, fish masala', '45 minutes', 1),
(7, 'club sandwich', 'karahi.jpg', 'take bread and make sandwich', 'bread, chicken, lettuce, mayo', '30 minutes', 0),
(8, 'Tandoori Chicken', 'karahi.jpg', 'Take chicken add spices put it in the oven.', 'chicken', '35 minutes', 0),
(18, 'chicken paratha', 'karahi.jpg', 'take flour and make it', 'flour, chicken, spices and herbs.', '45 minutes', 1),
(20, 'strawberry cheese cake', 'img2', 'take strawberries and make it.', 'strawberries', '45 minutes', 0),
(22, 'apple pie', 'img3', 'take apples and make it.', 'apples', '45 minutes', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `register_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `register_date`) VALUES
(1, 'admin', 'a@a.com', 'admin', '0000-00-00'),
(8, 'b', 'b@b.com', '92eb5ffee6ae2fec3ad71c777531578f', '0000-00-00'),
(9, 'rosie', 'ro@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feature`
--
ALTER TABLE `feature`
  ADD PRIMARY KEY (`wid`);

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
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
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
