-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2018 at 11:33 AM
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
(11, 6, 'Water Wheel', 'This is one of the cheapest and most effective method of water usage.', 'Wello-water-wheel.jpg', 22.5726, 88.3639, 1, 'Udaipur', 'Rajasthan', 313001, 'Rs5,000-7,000', 'PMKSY (Per Drop More Crop) – to focus on micro level storage structures,\r\nefficient water conveyance & application, precision irrigation systems, topping\r\nup of input cost beyond MGNREGA permissible limits, secondary storage,\r\nwater lifting devices, extension activities, coordination & management - being\r\nimplemented by DAC&FW.', 'It is a round wheel shaped storage tanker with an attached handle on top to provide painless mobility', 'This innovation comes from a foreign visitor who was inspired by women from villages of Rajasthan, who carried round earthen matkas on head for long distances in hot weather. This invention has made carrying water not only an effortless but fun activity. It is a round wheel shaped storage tanker with an attached handle on top to provide painless mobility. It has already become popular in villages of Gujarat, Madhya Pradesh and Rajasthan. Designed to reduce the drudgery and save time of working women, water wheel can store upto 10 to 50 litres of water in hygienic conditions. It’s designed for lasting on rough terrains and made from high quality plastic. It’s affordable too costing around 2000 rupees. It was innovated by a US based social entrepreneur, Cynthia Koeing under an organisation called Wello.', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `a_submit`
--
ALTER TABLE `a_submit`
  ADD PRIMARY KEY (`post_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `a_submit`
--
ALTER TABLE `a_submit`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
