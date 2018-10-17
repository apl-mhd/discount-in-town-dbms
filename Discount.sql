-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 14, 2018 at 03:50 AM
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
(7, 'restaurant', 'ac'),
(8, 'electronics', 'gadget'),
(9, 'electronics', 'otherelec'),
(10, 'food', 'food'),
(11, 'clooth', 'clooth');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(255) NOT NULL,
  `postid` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` int(255) NOT NULL,
  `locationname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `locationname`) VALUES
(1, 'uttara'),
(2, 'dhanmondi'),
(3, 'banani'),
(4, 'gulshan'),
(5, 'mirpur'),
(6, 'badda'),
(7, 'natunbazar');

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
  `poststatus` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`postid`, `userid`, `postdate`, `locationid`, `categoryid`, `postdesc`, `imglink`, `expire`, `discountrate`, `poststatus`) VALUES
(1, 2, '0000-00-00', 0, 1, 'Brand new', 't.jpg', 10, 10, 0),
(2, 2, '0000-00-00', 0, 2, 'Brand new', 't.jpg', 10, 10, 0),
(3, 2, '0000-00-00', 0, 2, 'used', 't.jpg', 10, 12, 0),
(27, 1, '2018-09-13', 0, 1, ' ', 't.jpg', 0, 0, 0),
(41, 1, '2018-09-13', 0, 1, ' ', 't.jpg', 0, 0, 1),
(48, 1, '2018-09-13', 0, 3, ' ', 't.jpg', 0, 0, 1),
(49, 1, '2018-09-13', 0, 4, ' ', 't.jpg', 0, 0, 1),
(50, 1, '2018-09-13', 0, 5, ' ', 't.jpg', 0, 0, 1),
(51, 1, '2018-09-13', 0, 3, ' ', 't.jpg', 0, 0, 1),
(52, 1, '2018-09-13', 0, 1, ' ', 't.jpg', 0, 0, 1),
(53, 1, '2018-09-13', 0, 1, ' ', 't.jpg', 0, 0, 0),
(54, 1, '2018-09-13', 0, 1, ' ', 't.jpg', 0, 0, 0),
(55, 1, '2018-09-13', 0, 1, ' ', 't.jpg', 0, 0, 0),
(56, 1, '2018-09-13', 0, 1, ' ', 't.jpg', 0, 0, 0),
(57, 1, '2018-09-13', 0, 1, ' ', 't.jpg', 0, 0, 1),
(58, 11, '2018-09-13', 0, 1, ' ', 't.jpg', 0, 0, 1),
(59, 11, '2018-09-13', 0, 1, ' ', 't.jpg', 0, 0, 1),
(60, 11, '2018-09-13', 0, 1, ' ', 't.jpg', 0, 0, 1),
(61, 11, '2018-09-13', 0, 1, ' ', 't.jpg', 0, 0, 0),
(62, 11, '2018-09-13', 0, 1, ' ', 't.jpg', 0, 0, 1),
(63, 11, '2018-09-13', 0, 1, ' ', 't.jpg', 0, 0, 1),
(64, 11, '2018-09-13', 0, 1, ' ', 't.jpg', 0, 0, 1),
(65, 11, '2018-09-13', 0, 1, ' ', 't.jpg', 0, 0, 1),
(66, 11, '2018-09-13', 0, 1, ' ', 't.jpg', 0, 0, 1),
(67, 11, '2018-09-13', 0, 1, ' ', 't.jpg', 0, 0, 1),
(68, 11, '2018-09-13', 0, 1, ' ', 't.jpg', 0, 0, 0),
(73, 11, '2018-09-13', 0, 1, ' ', 't.jpg', 0, 0, 0),
(74, 11, '2018-09-13', 0, 1, ' ', 't.jpg', 0, 0, 0),
(75, 11, '2018-09-13', 3, 1, ' ', 't.jpg', 0, 0, 0),
(76, 11, '2018-09-13', 2, 1, ' ', 't.jpg', 0, 0, 0),
(77, 11, '2018-09-13', 2, 1, ' ', 't.jpg', 0, 0, 0),
(78, 11, '2018-09-13', 2, 1, ' ', 't.jpg', 0, 0, 0),
(79, 11, '2018-09-13', 2, 1, ' ', 't.jpg', 0, 0, 0),
(80, 11, '2018-09-13', 2, 1, ' ', 't.jpg', 0, 0, 0),
(81, 11, '2018-09-13', 2, 1, ' ', 't.jpg', 0, 0, 0),
(82, 11, '2018-09-13', 2, 1, ' ', 't.jpg', 0, 0, 0),
(83, 11, '2018-09-13', 2, 1, ' ', 't.jpg', 0, 0, 0),
(84, 11, '2018-09-13', 2, 1, ' ', 't.jpg', 0, 0, 0),
(85, 11, '2018-09-13', 2, 1, ' ', 't.jpg', 0, 0, 0),
(86, 11, '2018-09-13', 2, 1, ' ', 't.jpg', 0, 0, 0),
(87, 11, '2018-09-13', 2, 1, ' ', 't.jpg', 0, 0, 0),
(88, 11, '2018-09-13', 2, 1, ' ', 't.jpg', 0, 0, 0),
(89, 11, '2018-09-13', 2, 1, ' ', 't.jpg', 0, 0, 0),
(90, 11, '2018-09-13', 2, 1, ' ', 't.jpg', 0, 0, 0),
(91, 11, '2018-09-13', 2, 3, ' ', 't.jpg', 0, 0, 0);

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
(1, 'apel', 'mahmud', 'a.pl@gmail.com', '1111', '1710453438', 1, '0000-00-00'),
(2, 'orko', 'orkut', 'orko@gmail.com', '1111', '1558971505', 0, '0000-00-00'),
(11, ' Donald', ' Duck', ' apl.mhd@gmail.com', ' 7777', ' 0171045343', 0, '0000-00-00'),
(12, ' Donald', ' Duck', ' apl.mhd@gmail.com', ' 7777', ' 0171045343', 0, '0000-00-00'),
(13, ' Donald', ' Duck', ' apl.mhd@gmail.com', ' 7777', ' 0171045343', 0, '0000-00-00'),
(16, ' Donald', ' Duck', ' mmahmud161036@bscse.uiu.ac.bd', ' 1111', ' 0171045343', 0, '2018-09-10'),
(18, ' Donald', ' Duck', ' mmahmud161036@bscse.uiu.ac.bd', ' ', '  ', 0, '2018-09-12');

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `postid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
