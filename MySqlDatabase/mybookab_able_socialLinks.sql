CREATE DATABASE  IF NOT EXISTS `mybookab_able` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `mybookab_able`;
-- MySQL dump 10.13  Distrib 5.6.24, for Win64 (x86_64)
--
-- Host: mybookable.com    Database: mybookab_able
-- ------------------------------------------------------
-- Server version	5.6.23-log

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
-- Table structure for table `socialLinks`
--

DROP TABLE IF EXISTS `socialLinks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `socialLinks` (
  `id` varchar(36) NOT NULL,
  `sourceType` varchar(45) NOT NULL,
  `sourceID` varchar(36) NOT NULL,
  `socialName` varchar(45) NOT NULL,
  `socialLinkUrl` varchar(255) NOT NULL,
  `createdDate` datetime DEFAULT NULL,
  `updateddate` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Social media links';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `socialLinks`
--

LOCK TABLES `socialLinks` WRITE;
/*!40000 ALTER TABLE `socialLinks` DISABLE KEYS */;
INSERT INTO `socialLinks` VALUES ('489ab8c4-4320-11e5-ab34-549f350764bc','bookable','c97fcd1d-2b94-11e5-9c9b-549f350764bc','facebook','https://www.facebook.com/TellusRealEstate','2015-08-15 00:36:04','2015-08-15 00:36:04'),('a4574255-4320-11e5-ab34-549f350764bc','bookable','c97fcd1d-2b94-11e5-9c9b-549f350764bc','linkedin','https://www.linkedin.com/in/jasonhershey','2015-08-15 00:38:37','2015-08-15 00:38:37');
/*!40000 ALTER TABLE `socialLinks` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-09-13 21:50:15
