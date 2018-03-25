-- MySQL dump 10.13  Distrib 5.7.21, for Linux (x86_64)
--
-- Host: localhost    Database: sih
-- ------------------------------------------------------
-- Server version	5.7.21-0ubuntu0.16.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `a_login`
--

DROP TABLE IF EXISTS `a_login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `a_login` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `role` int(1) NOT NULL COMMENT '0:ADMIN 1:USER 2:AUTHORITY',
  `mobile` text NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `a_login`
--

LOCK TABLES `a_login` WRITE;
/*!40000 ALTER TABLE `a_login` DISABLE KEYS */;
INSERT INTO `a_login` VALUES (1,'rajan','pass',2,'8871477746'),(2,'mohit','pass',1,'7987979978');
/*!40000 ALTER TABLE `a_login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `a_submit`
--

DROP TABLE IF EXISTS `a_submit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `a_submit` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
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
  `project_budget` bigint(20) NOT NULL,
  `state_policy` text NOT NULL,
  `equipments` text NOT NULL,
  `_procedure` text NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`post_id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `a_submit`
--

LOCK TABLES `a_submit` WRITE;
/*!40000 ALTER TABLE `a_submit` DISABLE KEYS */;
INSERT INTO `a_submit` VALUES (6,2,'Katta ','It is a cost effective and simple method, used widely in rural areas.','pexels-photo-432786.jpg',30.7333,76.7794,1,'Chandigarh','Punjab ',160001,15000,'PMKSY Watershed Development  to focus on ridge area treatment,\r\ndrainage line treatment, soil and moisture conservation, water harvesting\r\nstructure, livelihood support activities and other watershed works being\r\nimplemented by DoLR.\r\n','small streams and rivers\r\nthis stone bund','Katta is a temporary structure made by binding mud and loose stones available locally. Built across small streams and rivers, this stone bund slows the flow of water, and stores a large amount \r\n depending upon its height during the dry months. The collected water gradually seeps into ground and increase the water level of nearby wells. In coastal areas, they also minimize the flow of fresh water into the sea.\r\nIt is a cost effective and simple method, used widely in rural areas. Series of stone bunds build one behind the other have proved to be more effective than modern concrete dams in some villages, as these local structures can be easily repaired by farmers themselves. Although they require many skilled laborers during construction, the cost is mostly shared by all the villagers as it is a common structure. However, with more people opting for personal borewells and handpumps, the water level in open wells has gone down severely, taking a toll on marginal villages. Thus, rejuvenating these community Kattas can go a long way in sustainable water management.','2018-03-23 10:09:23'),(23,23,'some idea','some description','some image',23.2332,54.3434,1,'Durg test','cg test',491001,45000,'some state policy','some lists of equipments','some procedure','2018-03-23 09:41:10');
/*!40000 ALTER TABLE `a_submit` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-03-24 16:27:56
