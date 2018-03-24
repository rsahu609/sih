-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2018 at 06:28 AM
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
(1, 'rajan', 'pass', 2, '8871477746'),
(2, 'mohit', 'pass', 1, '9879874564'),
(3, 'mohit', 'pass', 1, '9879874564'),
(4, 'akm', '123', 1, '11111111');

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
  `pincode` int(11) NOT NULL,
  `project_budget` text NOT NULL,
  `equipments` text NOT NULL,
  `_procedure` text NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `upvote` bigint(20) NOT NULL,
  `policy` text NOT NULL,
  `policy_organization` text NOT NULL,
  `policy_details` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `a_submit`
--

INSERT INTO `a_submit` (`post_id`, `user_id`, `idea`, `description`, `image`, `latitude`, `longitude`, `status`, `city`, `state`, `pincode`, `project_budget`, `equipments`, `_procedure`, `date_time`, `upvote`, `policy`, `policy_organization`, `policy_details`) VALUES
(6, 2, 'Katta ', 'It is a cost effective and simple method, used widely in rural areas.', 'pexels-photo-432786.jpg', 30.7333, 76.7794, 1, 'Chandigarh', 'Punjab ', 160001, 'Rs15,000 approx', 'small streams and rivers\r\nthis stone bund', 'Katta is a temporary structure made by binding mud and loose stones available locally. Built across small streams and rivers, this stone bund slows the flow of water, and stores a large amount (depending upon its height) during the dry months. The collected water gradually seeps into ground and increase the water level of nearby wells. In coastal areas, they also minimize the flow of fresh water into the sea.\r\nIt is a cost effective and simple method, used widely in rural areas. Series of stone bunds build one behind the other have proved to be more effective than modern concrete dams in some villages, as these local structures can be easily repaired by farmers themselves. Although they require many skilled laborers during construction, the cost is mostly shared by all the villagers as it is a common structure. However, with more people opting for personal borewells and handpumps, the water level in open wells has gone down severely, taking a toll on marginal villages. Thus, rejuvenating these community Kattas can go a long way in sustainable water management.', '0000-00-00 00:00:00', 0, '', '', ''),
(12, 0, 'idea', 'khud ko bhenhi pta', 'images/5ab5dd446624a.jpg', 22.407, 82.3896, 0, 'gundapur', 'chhattisgarh', 491001, '10000000000', 'nothing', '', '0000-00-00 00:00:00', 0, 'radio_true', 'BIT', 'nothing');

-- --------------------------------------------------------

--
-- Table structure for table `a_upvote`
--

CREATE TABLE `a_upvote` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `post_id` int(11) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Indexes for table `a_upvote`
--
ALTER TABLE `a_upvote`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `a_login`
--
ALTER TABLE `a_login`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `a_submit`
--
ALTER TABLE `a_submit`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `a_upvote`
--
ALTER TABLE `a_upvote`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
