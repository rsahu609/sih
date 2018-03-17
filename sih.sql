-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2018 at 10:36 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sih`
--

-- --------------------------------------------------------

--
-- Table structure for table `a_login`
--

CREATE TABLE `a_login` (
  `user_id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `role` int(1) NOT NULL COMMENT '0:ADMIN 1:USER 2:AUTHORITY',
  `mobile` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `a_login`
--

INSERT INTO `a_login` (`user_id`, `username`, `password`, `role`, `mobile`) VALUES
(1, 'rajan', 'pass', 0, '8871477746');

-- --------------------------------------------------------

--
-- Table structure for table `a_submit`
--

CREATE TABLE `a_submit` (
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `idea` text NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `latitude` float NOT NULL,
  `longitude` float NOT NULL,
  `status` int(11) NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `zip` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `a_submit`
--

INSERT INTO `a_submit` (`post_id`, `user_id`, `idea`, `description`, `image`, `latitude`, `longitude`, `status`, `city`, `state`, `zip`) VALUES
(1, 0, 'lkfja', 'fjalkdsjflkj', '5aabe86e107bb.jpg', 21.1222, 83.3132, 0, 'alksdj', 'cg', 238739),
(2, 0, 'lkfja', 'fjalkdsjflkj', '5aabeb52cada4.jpg', 21.1222, 83.3132, 0, 'alksdj', 'cg', 238739),
(3, 0, 'fajklkdasf', 'lkjfsdaljkkl', '5aabed1437cec.jpg', 21.1222, 83.3132, 0, 'jfldsakj', 'cg', 43789),
(4, 0, 'amazing innovation', 'this is descriptino of amzing innovation', '5aac661bef68c.jpg', 22.407, 82.3896, 0, 'durg', 'cg', 491001);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `a_login`
--
ALTER TABLE `a_login`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `a_submit`
--
ALTER TABLE `a_submit`
  ADD PRIMARY KEY (`post_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `a_login`
--
ALTER TABLE `a_login`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `a_submit`
--
ALTER TABLE `a_submit`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
