-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 28, 2018 at 04:01 AM
-- Server version: 5.7.21-0ubuntu0.16.04.1
-- PHP Version: 7.0.28-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
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
  `project_budget` bigint(20) NOT NULL,
  `state_policy` text NOT NULL,
  `equipments` text NOT NULL,
  `_procedure` text NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
(2, 'mohit', 'pass', 1, '7987979978'),
(3, 'praveen', '123456', 1, '8886500442'),
(4, '', '', 1, ''),
(5, 'Abc', 'abc', 1, '8860544455'),
(6, 'user', 'pass', 1, '9999988888');

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
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `upvote` bigint(20) NOT NULL DEFAULT '0',
  `policy` text NOT NULL,
  `policy_organization` text,
  `policy_details` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `a_submit`
--

INSERT INTO `a_submit` (`post_id`, `user_id`, `idea`, `description`, `image`, `latitude`, `longitude`, `status`, `city`, `state`, `pincode`, `project_budget`, `equipments`, `_procedure`, `date_time`, `upvote`, `policy`, `policy_organization`, `policy_details`) VALUES
(6, 2, 'Katta ', 'It is a cost effective and simple method, used widely in rural areas.', 'images/pexels-photo-432786.jpg', 30.7333, 76.7794, 1, 'Chandigarh', 'Punjab ', 160001, 'Rs 15,000 approx', 'small streams and rivers\r\nthis stone bund', 'Katta is a temporary structure made by binding mud and loose stones available locally. Built across small streams and rivers, this stone bund slows the flow of water, and stores a large amount (depending upon its height) during the dry months. The collected water gradually seeps into ground and increase the water level of nearby wells. In coastal areas, they also minimize the flow of fresh water into the sea.\r\nIt is a cost effective and simple method, used widely in rural areas. Series of stone bunds build one behind the other have proved to be more effective than modern concrete dams in some villages, as these local structures can be easily repaired by farmers themselves. Although they require many skilled laborers during construction, the cost is mostly shared by all the villagers as it is a common structure. However, with more people opting for personal borewells and handpumps, the water level in open wells has gone down severely, taking a toll on marginal villages. Thus, rejuvenating these community Kattas can go a long way in sustainable water management.', '2018-03-27 07:06:26', 200, '', '', ''),
(13, 2, 'Rain Water Harvesting', 'Capturing and storing water so as to use it in the times of need and avoid wastage.', 'images/5ab77433ed859.jpg', 25.3176, 82.9739, 1, 'Varanasi', 'Uttar Pradesh', 221002, 'Rs 2,500 approx', 'Storage Tank, a combined pump and gravity system, filter system', 'Many farmers rely on municipal water or wells(groundwater), while some have built their own ponds to capture and store rainfall water for use throughout the year. Properly managed wildlife can create habitat for local wildlife. ', '2018-03-26 06:34:57', 0, '', '', ''),
(14, 2, 'Irrigation Scheduling', 'Effective method to conserve water.', 'images/5ab7744a71917.jpg', 22.5726, 88.3639, 1, 'Kolkata', 'West Bengal', 700028, 'Rs 1Lac ', '16mm main supply line pipe - 25 mtrs 4mm feeder line pipe - 50 mtrs Drip emitters - 100 nos Feeder to main supply line connectors - 100 nos Emitter stakes - 100 nos Dummy - 20nos(For closing any unwanted hole in main supply line) Elbow connector - 15 nos T connector - 8 nos Straight connector with tap - 5(stop supply to particular line) Straight connector - 5 Universal water tap adapter - 1 End cap - 12 Drip hole punch - 1(tool to make hole in main supply pipe)', 'Smart water management is not just about how water is delivered but also when, how often, and how much. To avoid under- or over watering their crops, farmers carefully monitor the weather forecast, as well as soil and plant moisture, and adapt their irrigation schedule to the current conditions. Tory Farms, which uses flood irrigation in their orchards , waters at night to slow down evaporation, allowing water to seep down into the soil and replenish the water table. ', '2018-03-26 06:53:19', 89, '', '', ''),
(15, 2, '', '', 'images/5ab774e8c1a8f.jpg', 21.1904, 81.2849, 1, '', 'Kerala', 0, '', '', '', '2018-03-27 06:42:00', 0, '', '', ''),
(16, 1, 'Cycle Run Water Pumps', 'A saver of time and cost of electricity and fuel', 'images/5ab792e49ef21.jpg', 22.5726, 88.3639, 1, 'Nasiruddin Gayen', 'West Bengal', 743332, '7500', 'dafjlkj', 'asdfasdfsdfsdfsadf', '2018-03-26 06:53:13', 0, '', '', ''),
(17, 1, 'jfdalkj', 'flajk', 'images/5ab7937eb1d8f.jpg', 21.1904, 81.2849, 0, 'dslkj', 'Kerala', 2332, '100', 'dafjlkj', 'asdfasdfsdfsdfsadf', '2018-03-25 13:58:45', 0, 'radio_false', '', ''),
(22, 2, 'water conservation', 'something ', 'images/5aba04cfa14e7.jpg', 12.89, 54.8766, 0, 'nijninini', 'chhattisgarh', 490042, '2131', 'tractor', 'asdfasdfsdfsdfsadf', '2018-03-27 08:46:07', 0, 'radio_true', 'ienin', 'neiqni'),
(20, 2, 'water conservation', 'something ', 'images/5ab943d4aca66.jpg', 12.89, 54.8766, 1, 'nijninini', 'chhattisgarh', 490042, '2131', 'tractor', 'asdfasdfsdfsdfsadf', '2018-03-26 19:03:29', 0, 'radio_true', 'ienin', 'neiqni'),
(21, 2, 'water conservation', 'something ', 'images/5ab9dc6cd1a50.jpg', 12.89, 54.8766, 1, 'nijninini', 'chhattisgarh', 490042, '2131', 'tractor', 'asdfasdfsdfsdfsadf', '2018-03-27 08:53:20', 0, 'radio_true', 'ienin', 'neiqni');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Agriculture'),
(7, 'Dam'),
(3, 'Home'),
(2, 'Industry'),
(6, 'River'),
(4, 'Rural'),
(5, 'Urban');

-- --------------------------------------------------------

--
-- Table structure for table `category_map`
--

CREATE TABLE `category_map` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category_map`
--

INSERT INTO `category_map` (`id`, `post_id`, `cat_id`) VALUES
(19, 6, 1),
(20, 6, 2),
(21, 13, 1),
(22, 14, 3),
(23, 15, 2),
(24, 16, 1),
(25, 17, 3),
(26, 18, 1),
(27, 19, 1),
(28, 6, 2),
(29, 13, 2),
(30, 14, 5),
(31, 15, 3),
(32, 17, 4),
(33, 18, 3),
(34, 19, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `role` int(1) NOT NULL COMMENT '0:ADMIN 1:USER 2:AUTHORITY',
  `mobile` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`post_id`);

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
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `category_map`
--
ALTER TABLE `category_map`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `a_login`
--
ALTER TABLE `a_login`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `a_submit`
--
ALTER TABLE `a_submit`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `category_map`
--
ALTER TABLE `category_map`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
