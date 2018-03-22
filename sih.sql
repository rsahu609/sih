-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2018 at 09:42 AM
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
(2, 'mohit', 'pass', 1, ''),
(3, 'vibha', 'pass', 1, '142341234');

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
  `state_policy` text NOT NULL,
  `equipments` text NOT NULL,
  `_procedure` text NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `a_submit`
--

INSERT INTO `a_submit` (`post_id`, `user_id`, `idea`, `description`, `image`, `latitude`, `longitude`, `status`, `city`, `state`, `pincode`, `project_budget`, `state_policy`, `equipments`, `_procedure`, `date_time`) VALUES
(4, 3, ' Irrigation Scheduling', 'A effective method to conserve water.', 'pexels-photo-312105.jpg', 22.5726, 88.3639, 1, 'Kolkata', 'West Bengal', 700028, 'Rs 1Lac', 'Accelerated Irrigation Benefit Programme (AIBP) – to focus on faster\r\ncompletion of ongoing Major and Medium Irrigation projects – being\r\nimplemented by MOWR, RD & GR.', '16mm main supply line pipe - 25 mtrs\r\n4mm feeder line pipe - 50 mtrs\r\nDrip emitters - 100 nos\r\nFeeder to main supply line connectors - 100 nos\r\nEmitter stakes - 100 nos\r\nDummy - 20nos(For closing any unwanted hole in main supply line)\r\nElbow connector - 15 nos\r\nT connector - 8 nos\r\nStraight connector with tap - 5(stop supply to particular line)\r\nStraight connector - 5\r\nUniversal water tap adapter - 1\r\nEnd cap - 12\r\nDrip hole punch - 1(tool to make hole in main supply pipe)', 'Smart water management is not just about how water is delivered but also when, how often, and how much. To avoid under- or over watering their crops, farmers carefully monitor the weather forecast, as well as soil and plant moisture, and adapt their irrigation schedule to the current conditions. Tory Farms, which uses flood irrigation in their orchards , waters at night to slow down evaporation, allowing water to seep down into the soil and replenish the water table. ', '2018-03-20 10:15:00'),
(5, 1, 'Rainwater Harvesting', ' Capturing and Storing Water, to use it in times of need and avoid wastage of water.', 'pexels-photo-287229.jpg', 11.8745, 75.3704, 1, 'Kannur', 'Kerala', 670650, 'Rs50,000 approx. ', 'PMKSY (Per Drop More Crop) – to focus on micro level storage structures,\r\nefficient water conveyance & application, precision irrigation systems, topping\r\nup of input cost beyond MGNREGA permissible limits, secondary storage,\r\nwater lifting devices, extension activities, coordination & management - being\r\nimplemented by DAC&FW. \r\n', 'Catchments\r\nCoarse Mesh\r\nGutters\r\nConduits\r\nFirst-Flushing\r\nFilter\r\n', 'Many farms rely on municipal water or wells (groundwater), while some have built their own ponds to capture and store rainfall for use throughout the year. Properly managed ponds can also create habitat for local wildlife. Marin Roots Farm relies on two ponds for all of their water needs, helping to minimize their impact on the surrounding watershed. ', '0000-00-00 00:00:00'),
(6, 2, 'Katta ', 'It is a cost effective and simple method, used widely in rural areas.', 'pexels-photo-432786.jpg', 30.7333, 76.7794, 1, 'Chandigarh', 'Punjab ', 160001, 'Rs15,000 approx', 'PMKSY (Watershed Development) - to focus on ridge area treatment,\r\ndrainage line treatment, soil and moisture conservation, water harvesting\r\nstructure, livelihood support activities and other watershed works being\r\nimplemented by DoLR.\r\n', 'small streams and rivers\r\nthis stone bund', 'Katta is a temporary structure made by binding mud and loose stones available locally. Built across small streams and rivers, this stone bund slows the flow of water, and stores a large amount (depending upon its height) during the dry months. The collected water gradually seeps into ground and increase the water level of nearby wells. In coastal areas, they also minimize the flow of fresh water into the sea.\r\nIt is a cost effective and simple method, used widely in rural areas. Series of stone bunds build one behind the other have proved to be more effective than modern concrete dams in some villages, as these local structures can be easily repaired by farmers themselves. Although they require many skilled laborers during construction, the cost is mostly shared by all the villagers as it is a common structure. However, with more people opting for personal borewells and handpumps, the water level in open wells has gone down severely, taking a toll on marginal villages. Thus, rejuvenating these community Kattas can go a long way in sustainable water management.', '0000-00-00 00:00:00'),
(7, 4, 'Ferro-Cement Tanks', 'Highly effective in water rainfall region.', 'new.jpg', 26.8467, 80.9462, 1, 'Lucknow', 'Uttar Pradesh', 226001, 'Rs52,000 approx', 'Accelerated Irrigation Benefit Programme (AIBP) – to focus on faster\r\ncompletion of ongoing Major and Medium Irrigation projects – being\r\nimplemented by MOWR, RD & GR', 'harvesting containers made of masonry, plastic and RCC', 'This is a low cost alternative for expensive water harvesting containers made of masonry, plastic and RCC. It has proved highly effective in high rainfall regions where large amount of water need to stored in clean form. These tanks requiring materials like sand, cement, mild steel bar and galvanized iron wire mesh, can be easily constructed by semi skilled labours. It’s light in weight and can be moulded into any shape required. It is believed to last for around 25 years with little maintenance. Picture above shows a ferro-cement tank under construction. It can be appropriate for use in Indian villages and disaster prone areas as its fireproof and tough in build.', '0000-00-00 00:00:00'),
(8, 5, 'Cycle Run Water Pumps', 'A saver of time and cost of electricity and fuel', 'bike-water-pumppreview.jpg', 22.5726, 88.3639, 1, 'Nasiruddin Gayen', 'West Bengal', 743332, 'Rs7,000-10,000', 'Accelerated Irrigation Benefit Programme (AIBP) – to focus on faster\r\ncompletion of ongoing Major and Medium Irrigation projects – being\r\nimplemented by MOWR, RD & GR.', 'This technology utilizes human power generated by pedalling a bicycle to lift water from streams, ponds, canals and wells', 'A saver of time and cost of electricity and fuel, this technology utilizes human power generated by pedalling a bicycle to lift water from streams, ponds, canals and wells. When cycle is pedalled, it creates an up and down motion of pistons which pressurizes water flow to outlet. A portable model which can be installed on site has also been developed. Designed for small scale farmers who don’t have capacity to afford costly diesel rum motors, this arrangement can bring a flow of 100 litres per minute. The complete unit made of cast iron and aluminium costs from rupees 2500 to 7000. These pumps have also supported women, kids and old people who at times found operating hand pumps in bend position a strenuous task. Some models have replaced bicycle by steppers (commonly seen if gyms), making pumping water a healthy and fun activity. In India, it was conceptualized by poor farmer from a village of West Bengal, Nasiruddin Gayen in 1980s. Xylam water solutions, a Vadodra based company is also designing and selling this innovation. If made applicable in urban areas, this concept can do wonders in making people realize importance of water and lose some calories too.', '0000-00-00 00:00:00'),
(11, 6, 'Water Wheel', 'This is one of the cheapest and most effective method of water usage.', 'Wello-water-wheel.jpg', 22.5726, 88.3639, 1, 'Udaipur', 'Rajasthan', 313001, 'Rs5,000-7,000', 'PMKSY (Per Drop More Crop) – to focus on micro level storage structures,\r\nefficient water conveyance & application, precision irrigation systems, topping\r\nup of input cost beyond MGNREGA permissible limits, secondary storage,\r\nwater lifting devices, extension activities, coordination & management - being\r\nimplemented by DAC&FW.', 'It is a round wheel shaped storage tanker with an attached handle on top to provide painless mobility', 'This innovation comes from a foreign visitor who was inspired by women from villages of Rajasthan, who carried round earthen matkas on head for long distances in hot weather. This invention has made carrying water not only an effortless but fun activity. It is a round wheel shaped storage tanker with an attached handle on top to provide painless mobility. It has already become popular in villages of Gujarat, Madhya Pradesh and Rajasthan. Designed to reduce the drudgery and save time of working women, water wheel can store upto 10 to 50 litres of water in hygienic conditions. It’s designed for lasting on rough terrains and made from high quality plastic. It’s affordable too costing around 2000 rupees. It was innovated by a US based social entrepreneur, Cynthia Koeing under an organisation called Wello.', '0000-00-00 00:00:00'),
(12, 0, 'cwc ', 'des 2', 'images/5ab1eaf6b0b2a.jpg', 22.407, 82.3898, 1, 'raigarh', 'chhattisgarh', 0, 'a', 'a', 'a', 'a', '2018-03-21 17:06:42'),
(13, 0, 'cwc ', 'des 2', 'images/5ab1f0407e81f.jpg', 22.407, 82.3898, 0, 'raigarh', 'chhattisgarh', 0, 'a', 'a', 'a', 'a', '0000-00-00 00:00:00'),
(14, 0, 'cwc ', 'des 2', 'images/5ab1f05f44196.jpg', 22.407, 82.3898, 0, 'raigarh', 'chhattisgarh', 0, 'a', 'a', 'a', 'a', '0000-00-00 00:00:00'),
(15, 0, 'cwc ', 'des 2', 'images/5ab1f0a7d527e.jpg', 22.407, 82.3898, 0, 'raigarh', 'chhattisgarh', 0, 'a', 'a', 'a', 'a', '0000-00-00 00:00:00'),
(16, 0, '', 'DES', 'images/5ab1f0e7ac009.jpg', 22.407, 82.3896, 0, 'RAIGARH', 'chhattisgarh', 496001, 'a', 'a', 'a', 'a', '0000-00-00 00:00:00'),
(17, 0, '', 'des', 'images/5ab1f14ed34df.jpg', 22.407, 82.3896, 0, 'raigarh', 'chhattisgarh', 87685, 'a', 'a', 'a', 'a', '0000-00-00 00:00:00'),
(18, 0, '', 'des', 'images/5ab1f2a97e64e.jpg', 22.407, 82.3896, 0, 'dsds', 'chhattisgarh', 89, 'a', 'a', 'a', 'a', '0000-00-00 00:00:00'),
(19, 0, '', 'des', 'images/5ab1f2cfc7ed5.jpg', 22.407, 82.3896, 0, 'dsds', 'chhattisgarh', 89, 'a', 'a', 'a', 'a', '0000-00-00 00:00:00'),
(20, 0, '', 'lfjaslkj', 'images/5ab1f40f9ebce.jpg', 22.407, 82.3896, 0, 'lfkja', 'chhattisgarh', 2323, 'a', 'a', 'a', 'a', '0000-00-00 00:00:00'),
(21, 0, '', 'flakj', 'images/5ab1f56bdb9a2.jpg', 22.407, 82.3896, 0, 'ljkfalk', 'chhattisgarh', 87, 'a', 'a', 'a', 'a', '0000-00-00 00:00:00'),
(22, 0, '', 'jfalkjflkj', 'images/5ab1f5ae0fcfa.jpg', 22.407, 82.3896, 0, 'rgh', 'chhattisgarh', 8778678, 'a', 'a', 'a', 'a', '0000-00-00 00:00:00'),
(23, 0, '', 'ajfljksd', 'images/5ab1f651805a0.jpg', 22.407, 82.3896, 0, 'rgh', 'chhattisgarh', 32987, 'a', 'a', 'a', 'a', '0000-00-00 00:00:00'),
(24, 0, '', 'falkj', 'images/5ab1f69f242f8.jpg', 22.407, 82.3896, 1, 'lfjkalj', 'chhattisgarh', 984789, 'a', 'a', 'a', 'a', '2018-03-21 17:07:02'),
(25, 0, '', 'des', 'images/5ab1ffaf4b5cc.jpg', 22.407, 82.3896, 0, 'rhs', 'chhattisgarh', 2343, 'a', 'a', 'a', 'a', '0000-00-00 00:00:00'),
(26, 0, '', 'lfkjaslkj', 'images/5ab2031b58a2a.jpg', 22.407, 82.3896, 0, 'lkaflkj', 'chhattisgarh', 87678, 'a', 'a', 'a', 'a', '0000-00-00 00:00:00'),
(27, 0, '', 'lfkjaslkj', 'images/5ab20e2e4efd8.jpg', 22.407, 82.3896, 0, 'lkaflkj', 'chhattisgarh', 87678, 'a', 'a', 'a', 'a', '0000-00-00 00:00:00'),
(28, 0, '', 'lfkjaslkj', 'images/5ab20e97edca6.jpg', 22.407, 82.3896, 0, 'lkaflkj', 'chhattisgarh', 87678, 'a', 'a', 'a', 'a', '0000-00-00 00:00:00'),
(29, 0, '', 'cool', 'images/5ab20f923adaa.jpg', 22.407, 82.3898, 0, 'cool', 'chhattisgarh', 456, 'a', 'a', 'a', 'a', '0000-00-00 00:00:00'),
(30, 0, '', 'colem', 'images/5ab2101b6aba4.jpg', 22.407, 82.3896, 0, 'mot', 'chhattisgarh', 987654, 'a', 'a', 'a', 'a', '0000-00-00 00:00:00'),
(31, 0, 'bit', 'bit', 'images/5ab2107927792.jpg', 22.407, 82.3896, 0, 'bit', 'chhattisgarh', 980, 'a', 'a', 'a', 'a', '0000-00-00 00:00:00'),
(32, 0, 'bits', 'bits', 'images/5ab211795c2df.jpg', 22.407, 82.3898, 0, 'post', 'chhattisgarh', 987654321, 'a', 'a', 'a', 'a', '0000-00-00 00:00:00'),
(33, 0, 'abcd', '', 'images/5ab211e124150.jpg', 22.407, 82.3898, 0, 'mnop', 'chhattisgarh', 980, 'a', 'a', 'a', 'a', '0000-00-00 00:00:00'),
(34, 0, 'vibha', 'anukriti', 'images/5ab2122ce64b9.jpg', 22.407, 82.3898, 0, 'agra', 'chhattisgarh', 8756, 'a', 'a', 'a', 'a', '0000-00-00 00:00:00'),
(35, 0, 'big b', 'amitabh', 'images/5ab2126e634e8.jpg', 22.407, 82.3898, 0, 'durg', 'chhattisgarh', 8754, 'a', 'a', 'a', 'a', '0000-00-00 00:00:00'),
(36, 0, 'big boss', 'salman', 'images/5ab212c18c12d.jpg', 22.407, 82.3898, 0, 'guwhati', 'chhattisgarh', 5475, 'a', 'a', 'a', 'a', '0000-00-00 00:00:00'),
(37, 0, 'fut', 'hu', 'images/5ab213cf9cbc5.jpg', 22.407, 82.3896, 0, 'dug', 'chhattisgarh', 785, 'a', 'a', 'a', 'a', '0000-00-00 00:00:00'),
(38, 0, 'as', 'dsd', 'images/5ab214de19cb6.jpg', 22.407, 82.3898, 0, 'nkj', 'chhattisgarh', 89, 'a', 'a', 'a', 'a', '0000-00-00 00:00:00'),
(39, 0, 'gtu', 'hg', 'images/5ab2150aaa34e.jpg', 22.407, 82.3896, 0, 'jk', 'chhattisgarh', 1254, 'a', 'a', 'a', 'a', '0000-00-00 00:00:00'),
(40, 0, 'gtu', 'hg', 'images/5ab2152a1e43b.jpg', 22.407, 82.3896, 0, 'jk', 'chhattisgarh', 1254, 'a', 'a', 'a', 'a', '0000-00-00 00:00:00'),
(41, 0, 'asw', 'swe', 'images/5ab2169437d69.jpg', 22.407, 82.3898, 0, 'lop', 'chhattisgarh', 2565, 'a', 'a', 'a', 'a', '0000-00-00 00:00:00'),
(42, 0, 'frt', 'frf', 'images/5ab216f17a57c.jpg', 22.407, 82.3898, 0, 'jiu', 'chhattisgarh', 7458, 'a', 'a', 'a', 'a', '0000-00-00 00:00:00'),
(43, 0, 'as', 'a', 'images/5ab2172177b44.jpg', 22.407, 82.3896, 0, 'a', 'chhattisgarh', 1, 'a', 'a', 'a', 'a', '0000-00-00 00:00:00'),
(44, 0, 'as', 'as', 'images/5ab217f88c4d3.jpg', 22.407, 82.3898, 0, 'll', 'chhattisgarh', 98, 'a', 'a', 'a', 'a', '0000-00-00 00:00:00'),
(45, 0, 'as', 'as', 'images/5ab2180a67ee0.jpg', 22.407, 82.3896, 0, 'll', 'chhattisgarh', 98, 'a', 'a', 'a', 'a', '0000-00-00 00:00:00'),
(46, 0, 'swe', 'dsw', 'images/5ab2192591d1a.jpg', 22.407, 82.3898, 0, 'hjhu', 'chhattisgarh', 987654, 'a', 'a', 'a', 'a', '0000-00-00 00:00:00'),
(47, 0, 'jfalkj', 'flajklkjjfal', 'images/5ab247e40a266.jpg', 0, 0, 0, 'afjlkj', 'chhattisgarh', 3987349, 'a', 'a', 'a', 'a', '0000-00-00 00:00:00'),
(48, 0, 'jfalkj', 'flajklkjjfal', 'images/5ab247ed9f35c.jpg', 0, 0, 0, 'afjlkj', 'chhattisgarh', 3987349, 'a', 'a', 'a', 'a', '0000-00-00 00:00:00');

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
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `a_submit`
--
ALTER TABLE `a_submit`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
