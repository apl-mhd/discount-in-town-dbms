-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 26, 2018 at 09:25 AM
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
(4, '108', '                        Is this still available?\r\n                        ', 'apl.mhd@gmail.com', 0, -1),
(5, '108', '                        Is this still available?\r\n                        ', 'apl.mhd@gmail.com', 0, -1),
(6, '108', '                        Is this still available?\r\n                        ', 'Orko', 0, -1),
(9, '108', '                        Is this still available?\r\n                        ', 'Seller', 0, -1),
(18, '107', '                        Is this still available?\r\n                        ', 'Orko', 0, -1),
(19, '107', '                        Is this still available?\r\n                        ', 'Orko', 0, -1),
(20, '107', '                        Is this still available?\r\n                        ', 'Orko', 0, -1),
(37, '103', '                        Is this still available?\r\n                        ', 'Orko', 1, -1),
(38, '103', '                        Is this still available?\r\n                        ', 'Orko', 0, -1),
(39, '103', 'Yes!                        ', 'Seller', 1, 11),
(40, '103', 'Yes!                        ', 'Seller', 1, 11),
(41, '103', 'Hurry Up                        ', 'Seller', 1, 11);

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
(106, 11, '2018-09-24', 7, 2, '  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate.', ' 5b9c27f3f13ce6.61459410.jpeg', 10, 30, 1, 23.7462291717529300000, 90.3730468750000000000),
(107, 11, '2018-09-24', 2, 3, '  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate.', ' 5b9c28361ff6d3.59900672.jpg', 10, 25, 1, 23.7462291717529300000, 90.3730468750000000000),
(108, 11, '2018-09-24', 2, 4, '  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate.', ' 5b9c2882331b43.71813058.png', 15, 30, 1, 23.7462291717529300000, 90.3730468750000000000),
(110, 11, '2018-09-24', 7, 3, '  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate.', ' 5b9c2904ee44e7.25730784.jpg', 10, 15, 1, 23.7462291717529300000, 90.3730468750000000000),
(112, 11, '2018-09-24', 2, 3, '  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate.', ' 5b9c292949fb45.65244386.jpg', 30, 50, 1, 23.7462291717529300000, 90.3730468750000000000),
(113, 11, '2018-09-24', 7, 4, '  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate.', ' 5b9c2960a441f9.94179756.jpg', 25, 12, 1, 23.7462291717529300000, 90.3730468750000000000),
(115, 11, '2018-09-24', 2, 4, '  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate.', ' 5b9c2a69a07932.55523689.jpeg', 15, 12, 1, 23.7462291717529300000, 90.3730468750000000000),
(116, 11, '2018-09-24', 2, 5, '  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate.', ' 5b9c2ac1e1ec24.95903173.png', 10, 25, 1, 23.7462291717529300000, 90.3730468750000000000),
(117, 11, '2018-09-24', 2, 6, '  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate.', ' 5b9c2b0b0afde8.49111167.jpeg', 10, 25, 1, 23.7462291717529300000, 90.3730468750000000000),
(119, 11, '2018-09-24', 2, 5, '  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate.', ' 5b9c2b923aade3.66041443.jpg', 10, 20, 1, 23.7462291717529300000, 90.3730468750000000000),
(120, 11, '2018-09-24', 2, 14, '  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate.', ' 5b9c2bfed3f157.35057132.jpeg', 15, 50, 1, 23.7462291717529300000, 90.3730468750000000000),
(121, 11, '2018-09-24', 3, 14, '  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate.', ' 5b9c2c187898c4.28174207.jpeg', 10, 50, 1, 23.7462291717529300000, 90.3730468750000000000),
(122, 11, '2018-09-24', 4, 14, '  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate.', ' 5b9c2c4d8d7e77.68231784.jpeg', 15, 10, 1, 23.7462291717529300000, 90.3730468750000000000),
(123, 11, '2018-09-24', 1, 14, '  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate.', ' 5b9c2c65782393.56876641.jpeg', 18, 12, 1, 23.7462291717529300000, 90.3730468750000000000),
(125, 11, '2018-09-24', 6, 14, '  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate.', ' 5b9c2cdb168188.92148675.jpg', 5, 10, 1, 23.7462291717529300000, 90.3730468750000000000),
(126, 11, '2018-09-24', 1, 14, '  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate.', ' 5b9c2d14d80a95.99051810.jpg', 10, 15, 1, 23.7462291717529300000, 90.3730468750000000000),
(127, 11, '2018-09-24', 2, 14, '  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate.', ' 5b9c2d2919a584.67328627.jpg', 25, 20, 1, 23.7462291717529300000, 90.3730468750000000000),
(128, 11, '2018-09-24', 2, 0, '  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate.', ' 5b9c2d7877d809.51635174.jpg', 30, 50, 1, 23.7462291717529300000, 90.3730468750000000000),
(129, 11, '2018-09-24', 3, 0, '  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate.', ' 5b9c2de654c560.68412040.jpg', 15, 10, 1, 23.7462291717529300000, 90.3730468750000000000),
(130, 11, '2018-09-24', 4, 0, '  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate.', ' 5b9c2e354b1028.80674048.png', 12, 10, 1, 23.7462291717529300000, 90.3730468750000000000),
(131, 11, '2018-09-24', 7, 0, '  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate.', ' 5b9c2e46eb1566.95640890.png', 10, 20, 1, 23.7462291717529300000, 90.3730468750000000000),
(132, 11, '2018-09-24', 2, 10, '  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate.', ' 5b9c3321788fc1.75151945.jpg', 15, 25, 1, 23.7462291717529300000, 90.3730468750000000000),
(133, 11, '2018-09-24', 3, 10, '  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate.', ' 5b9c3367ce0330.15570033.png', 10, 15, 1, 23.7462291717529300000, 90.3730468750000000000),
(134, 11, '2018-09-24', 4, 10, '  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate.', ' 5b9c3398526460.96883482.jpg', 5, 70, 1, 23.7462291717529300000, 90.3730468750000000000),
(138, 11, '2018-09-24', 6, 10, '  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate.', ' 5b9c357e3d0727.77703377.png', 15, 70, 1, 23.7462291717529300000, 90.3730468750000000000),
(140, 11, '2018-09-24', 3, 13, '   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate.', ' 5b9c3b3250fd76.14685704.jpg', 25, 10, 1, 23.7462291717529300000, 90.3730468750000000000),
(141, 11, '2018-09-24', 4, 13, '   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate.', ' 5b9c3b9169fa41.10376556.jpg', 15, 20, 1, 23.7462291717529300000, 90.3730468750000000000),
(142, 11, '2018-09-24', 5, 13, '   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate.', ' 5b9c3bc4d42181.48694866.jpg', 20, 30, 1, 23.7462291717529300000, 90.3730468750000000000),
(145, 11, '2018-09-24', 3, 7, '  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi non quis exercitationem culpa nesciunt nihil aut nostrum explicabo reprehenderit optio amet ab temporibus asperiores quasi cupiditate.', ' 5b9c9f69d32a25.71431802.jpg', 15, 10, 1, 23.7462291717529300000, 90.3730468750000000000),
(155, 11, '2018-09-25', 2, 1, ' Best deal 2', ' 5baa0c2c252094.15700948.jpg', 10, 10, 1, 23.7462291717529300000, 90.3730468750000000000);

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
(12, 'Sabbir', 'Rahman', 'sabi@gmail.com', '7777', ' 0171045343', 0, '0000-00-00'),
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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `postid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
