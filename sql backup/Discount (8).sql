-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 17, 2018 at 07:28 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Discount`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int(255) NOT NULL,
  `brandname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) NOT NULL,
  `categoryname` varchar(20) NOT NULL,
  `subcategory` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `categoryname`, `subcategory`) VALUES
(1, 'electronics', 'mobile'),
(2, 'electronics', 'mobileacc'),
(3, 'electronics', 'computer'),
(4, 'electronics', 'computeracc'),
(5, 'electronics', 'tv'),
(6, 'electronics', 'fridge'),
(7, 'electronics', 'ac'),
(8, 'electronics', 'gadget'),
(9, 'electronics', 'otherelec'),
(10, 'shoes', 'shoes'),
(11, 'clooth', 'clooth'),
(12, 'vehical', 'car'),
(13, 'vehical', 'motorcycle'),
(14, 'restaurant', 'food');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(255) NOT NULL,
  `postid` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT 'Seller',
  `commentstatus` tinyint(127) NOT NULL DEFAULT '0',
  `userid` tinyint(127) NOT NULL DEFAULT '-1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `postid`, `comment`, `name`, `commentstatus`, `userid`) VALUES
(1, '', 'aaaa', '', 0, -1),
(2, '', '                        Is this still available?\r\n                        ', '', 0, -1),
(3, '', '                        Is this still available?\r\n                        ', 'apl.mhd@gmail.com', 0, -1),
(4, '108', '                        Is this still available?\r\n                        ', 'apl.mhd@gmail.com', 1, -1),
(5, '108', '                        Is this still available?\r\n                        ', 'apl.mhd@gmail.com', 1, -1),
(6, '108', '                        Is this still available?\r\n                        ', 'Orko', 1, -1),
(9, '108', '                        Is this still available?\r\n                        ', 'Seller', 1, -1),
(18, '107', '                        Is this still available?\r\n                        ', 'Orko', 1, -1),
(19, '107', '                        Is this still available?\r\n                        ', 'Orko', 1, -1),
(20, '107', '                        Is this still available?\r\n                        ', 'Orko', 1, -1),
(37, '103', '                        Is this still available?\r\n                        ', 'Orko', 1, -1),
(38, '103', '                        Is this still available?\r\n                        ', 'Orko', 0, -1),
(39, '103', 'Yes!                        ', 'Seller', 1, 11),
(40, '103', 'Yes!                        ', 'Seller', 1, 11),
(41, '103', 'Hurry Up                        ', 'Seller', 1, 11),
(47, '121', 'Is this still available?\r\n                        ', 'Orko', 0, -1),
(48, '121', 'Price please?', 'Orin', 0, -1),
(49, '107', 'submission', 'Sir', 1, -1),
(50, '107', 'price 10k                        ', 'Seller', 1, 12),
(51, '140', '                        Is this still available?\r\n                        ', 'Orko', 0, -1),
(52, '157', '                        Is this still available?\r\n                        ', 'Orko', 0, -1),
(53, '157', '                        Is this still available?\r\n                        ', 'Apel', 0, -1);

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` int(255) NOT NULL,
  `locationname` varchar(255) NOT NULL DEFAULT 'dhanmondi',
  `latitude` float(23,19) NOT NULL,
  `Longitude` float(23,19) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `locationname`, `latitude`, `Longitude`) VALUES
(1, 'uttara', 23.7415161132812500000, 90.3890991210937500000),
(2, 'dhanmondi', 23.7415161132812500000, 90.3890991210937500000),
(3, 'banani', 23.7415161132812500000, 90.3890991210937500000),
(4, 'gulshan', 23.7415161132812500000, 90.3890991210937500000),
(5, 'Mirpur', 23.7415161132812500000, 90.3890991210937500000),
(6, 'badda', 23.7415161132812500000, 90.3890991210937500000),
(7, 'natunbazar', 23.7415161132812500000, 90.3890991210937500000),
(8, 'dhanmondi', 23.7415161132812500000, 90.3890991210937500000),
(9, 'dhanmondi', 23.7415161132812500000, 90.3890991210937500000),
(10, '', 23.7415161132812500000, 90.3890991210937500000);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `postid` int(255) NOT NULL,
  `userid` int(255) NOT NULL,
  `postdate` date NOT NULL,
  `locationid` int(255) NOT NULL,
  `categoryid` int(30) NOT NULL,
  `postdesc` text NOT NULL,
  `imglink` text NOT NULL,
  `expire` int(255) NOT NULL,
  `discountrate` int(255) NOT NULL,
  `poststatus` tinyint(2) NOT NULL,
  `latitude` float(23,19) NOT NULL,
  `longitude` float(23,19) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`postid`, `userid`, `postdate`, `locationid`, `categoryid`, `postdesc`, `imglink`, `expire`, `discountrate`, `poststatus`, `latitude`, `longitude`) VALUES
(112, 12, '2018-09-24', 2, 3, '  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate.', ' 5b9c292949fb45.65244386.jpg', 30, 50, 1, 23.7441196441650400000, 90.3726425170898400000),
(113, 12, '2018-09-24', 7, 4, '  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate.', ' 5b9c2960a441f9.94179756.jpg', 25, 12, 1, 23.7441196441650400000, 90.3726425170898400000),
(127, 12, '2018-09-24', 2, 14, '  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate.', ' 5b9c2d2919a584.67328627.jpg', 25, 20, 1, 23.7441196441650400000, 90.3726425170898400000),
(128, 12, '2018-09-24', 2, 0, '  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate.', ' 5b9c2d7877d809.51635174.jpg', 30, 50, 1, 23.7441196441650400000, 90.3726425170898400000),
(140, 12, '2018-09-24', 3, 13, '   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate.', ' 5b9c3b3250fd76.14685704.jpg', 25, 10, 1, 23.7441196441650400000, 90.3726425170898400000),
(157, 12, '2018-09-26', 2, 1, 'Good phone', '5bab393436a868.24361511.jpg', 20, 10, 1, 23.7441196441650400000, 90.3726425170898400000);

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `id` int(30) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `usertype` int(2) NOT NULL DEFAULT '0',
  `regdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`id`, `firstname`, `lastname`, `email`, `pass`, `phone`, `usertype`, `regdate`) VALUES
(2, 'y', 'b', 'orin@gmail.com', '1111', ' 0171045343', 1, '0000-00-00'),
(10, 'x', ' a', 'a@gmail.com', 'a', ' 0171045343', 1, '0000-00-00'),
(11, 'Apel', 'Mahmud', 'apl.mhd@gmail.com', '7777', ' 0171045343', 1, '0000-00-00'),
(12, 'Farin', 'Rahman', 'sabi@gmail.com', '7777', ' 0171045343', 0, '0000-00-00'),
(13, ' Manik', ' Hridoy', 'manik@gmail.com', ' 1111', '0155686556', 0, '2018-09-15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`postid`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `postid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
