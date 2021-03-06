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
-- Table structure for table `eventStatustypes`
--

DROP TABLE IF EXISTS `eventStatustypes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `eventStatustypes` (
  `id` varchar(36) NOT NULL,
  `eventStatustypename` varchar(300) NOT NULL,
  `description` text,
  `createdDate` datetime DEFAULT CURRENT_TIMESTAMP,
  `updatedDate` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eventStatustypes`
--

LOCK TABLES `eventStatustypes` WRITE;
/*!40000 ALTER TABLE `eventStatustypes` DISABLE KEYS */;
INSERT INTO `eventStatustypes` VALUES ('0a4dc4c1-43dc-11e5-ab34-549f350764bc','Cancelled','Represents a reservation date and time that has been cancelled','2015-08-15 23:00:04','2015-08-15 23:00:04'),('1354a692-43dc-11e5-ab34-549f350764bc','Denied','Represents a reservation date and time that has been denied by the owner','2015-08-15 23:00:20','2015-08-15 23:00:20'),('bad0b1b8-43db-11e5-ab34-549f350764bc','Tentative','Represents a reservation date and time before it is requested or confirmed','2015-08-15 22:57:51','2015-08-15 22:57:51'),('f5815b23-43db-11e5-ab34-549f350764bc','Requested','Represents a reservation date and time when it is requested but not confirmed','2015-08-15 22:59:30','2015-08-15 22:59:30'),('ff59d7b3-43db-11e5-ab34-549f350764bc','Confirmed','Represents a reservation date and time when it is confirmed','2015-08-15 22:59:46','2015-08-15 22:59:46');
/*!40000 ALTER TABLE `eventStatustypes` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-09-13 21:50:23
