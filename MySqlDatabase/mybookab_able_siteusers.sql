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
-- Table structure for table `siteusers`
--

DROP TABLE IF EXISTS `siteusers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `siteusers` (
  `id` varchar(36) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(60) NOT NULL,
  `eMail` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `postalCode` varchar(50) DEFAULT NULL,
  `profileImage` varchar(255) DEFAULT NULL,
  `password` varchar(128) NOT NULL,
  `createdDate` datetime DEFAULT CURRENT_TIMESTAMP,
  `updatedDate` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `ID_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `siteusers`
--

LOCK TABLES `siteusers` WRITE;
/*!40000 ALTER TABLE `siteusers` DISABLE KEYS */;
INSERT INTO `siteusers` VALUES ('26ae4df1-229c-11e5-9c9b-549f350764bc','Jason','Hershey','Jason@Jason.com','555-555-5555','1234 Main St','Duvall','','','980191','/home/mybookab/public_html/uploaded_files/55985e5b22b90.jpg','$2y$10$RHg1tkfStgR1hy02l2ceCeHtYqqbaTAn3hZEh7aLFxoZHWPcToxu2','2015-07-04 15:29:36','2015-07-06 00:45:26'),('667ef3e0-22a3-11e5-9c9b-549f350764bc','','','','','','','','','',NULL,'$2y$10$Ye5xiMYbcEwsZUVulHBDrug44bp3Fqq1aPdUkFfSBq7wQOY7yPFJm','2015-07-04 16:21:29','2015-07-04 20:50:59'),('e2ee90d1-381a-11e5-9c9b-549f350764bc','Jason','Hershey','Jason@jasonhershey.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'$2y$10$lalShcbwY0cZkmIZ8neJxOTBTB2cScBbzcEyN5xY/rmKdsb6Jn27C','2015-07-31 23:59:43','2015-07-31 23:59:43');
/*!40000 ALTER TABLE `siteusers` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-09-13 21:50:32
