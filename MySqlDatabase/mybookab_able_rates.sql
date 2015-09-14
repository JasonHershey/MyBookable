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
-- Table structure for table `rates`
--

DROP TABLE IF EXISTS `rates`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rates` (
  `id` varchar(36) NOT NULL,
  `rateName` varchar(300) NOT NULL,
  `owner_id` varchar(36) DEFAULT NULL,
  `bookables_id` varchar(36) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `periodTypes_id` varchar(36) NOT NULL,
  `minimumPeriods` int(11) NOT NULL DEFAULT '0',
  `description` text,
  `startDate` date DEFAULT NULL,
  `endDate` date DEFAULT NULL,
  `monStart` time DEFAULT NULL,
  `monEnd` time DEFAULT NULL,
  `tueStart` time DEFAULT NULL,
  `tueEnd` time DEFAULT NULL,
  `wedStart` time DEFAULT NULL,
  `wedEnd` time DEFAULT NULL,
  `thuStart` time DEFAULT NULL,
  `thuEnd` time DEFAULT NULL,
  `friStart` time DEFAULT NULL,
  `friEnd` time DEFAULT NULL,
  `satStart` time DEFAULT NULL,
  `satEnd` time DEFAULT NULL,
  `sunStart` time DEFAULT NULL,
  `sunEnd` time DEFAULT NULL,
  `createdDate` datetime DEFAULT CURRENT_TIMESTAMP,
  `updatedDate` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `bookable_id_idx` (`bookables_id`),
  KEY `period_id_idx` (`periodTypes_id`),
  CONSTRAINT `rate_bookable_id` FOREIGN KEY (`bookables_id`) REFERENCES `bookables` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `rate_period_id` FOREIGN KEY (`periodTypes_id`) REFERENCES `periodTypes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rates`
--

LOCK TABLES `rates` WRITE;
/*!40000 ALTER TABLE `rates` DISABLE KEYS */;
INSERT INTO `rates` VALUES ('19955738-3da1-11e5-be05-549f350764bc','My rate test 2.5','e2ee90d1-381a-11e5-9c9b-549f350764bc','c97fcd1d-2b94-11e5-9c9b-549f350764bc',10.00,'fd4b0541-3a72-11e5-9c9b-549f350764bc',4,'asdfasdf','2015-10-08','2019-08-08','08:00:00','00:00:00','00:00:00','00:00:00','00:00:00','00:00:00','00:00:00','00:00:00','00:00:00','00:00:00','00:00:00','00:00:00','00:00:00','00:00:00','2015-08-08 00:43:03','2015-08-08 00:43:03'),('1dadd67f-3da3-11e5-be05-549f350764bc','My rate test 2.7','e2ee90d1-381a-11e5-9c9b-549f350764bc','c97fcd1d-2b94-11e5-9c9b-549f350764bc',10.00,'bd5a2289-3a72-11e5-9c9b-549f350764bc',0,'','0000-00-00','0000-00-00','00:00:00','00:00:00','00:00:00','00:00:00','00:00:00','00:00:00','00:00:00','00:00:00','00:00:00','00:00:00','00:00:00','00:00:00','00:00:00','00:00:00','2015-08-08 00:57:29','2015-08-08 00:57:29'),('299ef13a-3d9f-11e5-be05-549f350764bc','My rate test 1.666777','e2ee90d1-381a-11e5-9c9b-549f350764bc','c97fcd1d-2b94-11e5-9c9b-549f350764bc',10.00,'02b5a237-3a73-11e5-9c9b-549f350764bc',2,'12345','2015-08-08','2015-12-08','08:00:00','12:00:00','08:00:00','12:00:00','08:00:00','00:00:00','08:00:00','00:00:00','00:00:00','16:00:00','00:00:00','16:30:00','00:00:00','00:00:00','2015-08-08 00:29:11','2015-08-09 01:02:14'),('3ed80b9f-3da3-11e5-be05-549f350764bc','My rate test 3.0','e2ee90d1-381a-11e5-9c9b-549f350764bc','c97fcd1d-2b94-11e5-9c9b-549f350764bc',11.00,'bd5a2289-3a72-11e5-9c9b-549f350764bc',0,'','0000-00-00','0000-00-00','00:00:00','00:00:00','00:00:00','00:00:00','00:00:00','00:00:00','00:00:00','00:00:00','00:00:00','00:00:00','00:00:00','00:00:00','00:00:00','00:00:00','2015-08-08 00:58:24','2015-08-08 00:58:24'),('4b9ffe55-3bf8-11e5-be05-549f350764bc','test','e2ee90d1-381a-11e5-9c9b-549f350764bc','c97fcd1d-2b94-11e5-9c9b-549f350764bc',10.00,'bd5a2289-3a72-11e5-9c9b-549f350764bc',0,'asdfasdf','0000-00-00','0000-00-00','08:00:00','08:00:00','00:00:00','00:00:00','00:00:00','00:00:00','00:00:00','00:00:00','00:00:00','00:00:00','00:00:00','00:00:00','00:00:00','00:00:00','2015-08-05 22:02:11','2015-08-05 22:02:11'),('61d6c814-3d9f-11e5-be05-549f350764bc','asdfasdfasd','e2ee90d1-381a-11e5-9c9b-549f350764bc','c97fcd1d-2b94-11e5-9c9b-549f350764bc',10.00,'f9369f9a-3a72-11e5-9c9b-549f350764bc',2,'asdasdf','2015-11-08','2015-12-08','08:00:00','00:00:00','00:00:00','00:00:00','00:00:00','00:00:00','00:00:00','00:00:00','00:00:00','00:00:00','00:00:00','00:00:00','00:00:00','00:00:00','2015-08-08 00:30:45','2015-08-08 00:30:45'),('63325729-3da2-11e5-be05-549f350764bc','My rate test 2.6','e2ee90d1-381a-11e5-9c9b-549f350764bc','c97fcd1d-2b94-11e5-9c9b-549f350764bc',15.50,'02b5a237-3a73-11e5-9c9b-549f350764bc',3,'asdfasdfasdf','2015-11-08','2020-08-08','08:00:00','00:00:00','00:00:00','00:00:00','00:00:00','00:00:00','00:00:00','00:00:00','00:00:00','00:00:00','00:00:00','00:00:00','00:00:00','00:00:00','2015-08-08 00:52:16','2015-08-08 00:52:16'),('64a617f2-3da3-11e5-be05-549f350764bc','My rate 4.0','e2ee90d1-381a-11e5-9c9b-549f350764bc','c97fcd1d-2b94-11e5-9c9b-549f350764bc',12.00,'bd5a2289-3a72-11e5-9c9b-549f350764bc',0,'','0000-00-00','0000-00-00','00:00:00','00:00:00','00:00:00','00:00:00','00:00:00','00:00:00','00:00:00','00:00:00','00:00:00','00:00:00','00:00:00','00:00:00','00:00:00','00:00:00','2015-08-08 00:59:28','2015-08-08 00:59:28'),('67611c5f-3e31-11e5-be05-549f350764bc','my summer daytime weekday rate','e2ee90d1-381a-11e5-9c9b-549f350764bc','c97fcd1d-2b94-11e5-9c9b-549f350764bc',10.00,'0981be01-3a73-11e5-9c9b-549f350764bc',2,'asdfasdfdsaf','2015-05-01','2016-09-30','08:00:00','20:00:00','08:00:00','00:00:00','08:00:00','00:00:00','08:00:00','00:00:00','08:00:00','00:00:00','00:00:00','00:00:00','00:00:00','00:00:00','2015-08-08 17:56:01','2015-08-08 17:56:01'),('f4700472-3da0-11e5-be05-549f350764bc','My rate test 2.1','e2ee90d1-381a-11e5-9c9b-549f350764bc','c97fcd1d-2b94-11e5-9c9b-549f350764bc',12.00,'fd4b0541-3a72-11e5-9c9b-549f350764bc',4,'asdfasdf','2015-10-08','2017-06-08','00:00:00','00:00:00','00:00:00','00:00:00','00:00:00','00:00:00','00:00:00','00:00:00','00:00:00','00:00:00','00:00:00','00:00:00','00:00:00','00:00:00','2015-08-08 00:42:00','2015-08-08 00:42:00');
/*!40000 ALTER TABLE `rates` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-09-13 21:50:36
