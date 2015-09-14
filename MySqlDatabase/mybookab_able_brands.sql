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
-- Table structure for table `brands`
--

DROP TABLE IF EXISTS `brands`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `brands` (
  `id` varchar(36) NOT NULL,
  `brandName` varchar(300) NOT NULL,
  `ownerID` varchar(36) NOT NULL,
  `tagLine` tinytext,
  `address` varchar(45) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `postalCode` varchar(50) DEFAULT NULL,
  `eMail` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `fax` varchar(255) DEFAULT NULL,
  `profileImage` varchar(255) DEFAULT NULL,
  `addbrand` tinyint(1) DEFAULT NULL,
  `createdDate` datetime DEFAULT CURRENT_TIMESTAMP,
  `updatedDate` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `brands_ownerID_idx` (`ownerID`),
  CONSTRAINT `brands_ownerID` FOREIGN KEY (`ownerID`) REFERENCES `siteusers` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `brands`
--

LOCK TABLES `brands` WRITE;
/*!40000 ALTER TABLE `brands` DISABLE KEYS */;
INSERT INTO `brands` VALUES ('018a6b31-23a4-11e5-9c9b-549f350764bc','dddddddd','e2ee90d1-381a-11e5-9c9b-549f350764bc','ddd','dd','dd','AL','','','ddd','','','/home/mybookab/public_html/uploaded_files/559a18fd331a4.jpg',0,'2015-07-05 22:58:21','2015-07-05 22:58:21'),('4b329ef8-2350-11e5-9c9b-549f350764bc','My brand 2','e2ee90d1-381a-11e5-9c9b-549f350764bc','my brand tagline','','','AL','','','dddd','','','/home/mybookab/public_html/uploaded_files/559b5d91b2d66.jpg',0,'2015-07-05 12:59:07','2015-07-06 22:03:13'),('668ad131-23a4-11e5-9c9b-549f350764bc','eeeee','e2ee90d1-381a-11e5-9c9b-549f350764bc','','','','AL','','','','','','/home/mybookab/public_html/uploaded_files/559a19a6a0b4a.jpg',0,'2015-07-05 23:01:10','2015-07-05 23:01:10'),('7778b2c1-2353-11e5-9c9b-549f350764bc','My brand 4','e2ee90d1-381a-11e5-9c9b-549f350764bc','my tagline 4','','','AL','','','','','','',0,'2015-07-05 13:21:49','2015-07-05 13:21:49'),('85aab80e-2b91-11e5-9c9b-549f350764bc','Test brand 1','e2ee90d1-381a-11e5-9c9b-549f350764bc','Test tagline 1','Test address 1','Test city','Test state','test country','98999','brand@brand.com','555-555-5555','555-555-5555','/home/mybookab/public_html/uploaded_files/55985e5b22b90.jpg',1,'2015-07-16 01:06:11','2015-07-16 01:06:11'),('8883288e-381d-11e5-9c9b-549f350764bc','my test brand 2015','e2ee90d1-381a-11e5-9c9b-549f350764bc','','','','AL','','','','','','/home/mybookab/public_html/uploaded_files/55bc72d0025ca.jpg',0,'2015-08-01 00:18:40','2015-08-01 00:18:40'),('9f374bb4-381e-11e5-9c9b-549f350764bc','Jasons new test brand','e2ee90d1-381a-11e5-9c9b-549f350764bc','','','','AL','','','','','','/home/mybookab/public_html/uploaded_files/55bc74a392009.jpg',0,'2015-08-01 00:26:27','2015-08-01 00:26:27'),('d12062f9-23a2-11e5-9c9b-549f350764bc','My brand 5','e2ee90d1-381a-11e5-9c9b-549f350764bc','My brand 5 tag','my address','my city','WA','','99999','Email@email.com','555-555-5555','555-555-5555','',0,'2015-07-05 22:49:50','2015-07-05 22:49:50'),('de63c63f-22ed-11e5-9c9b-549f350764bc','dddd','e2ee90d1-381a-11e5-9c9b-549f350764bc','','','','AL','','','','','','',0,'2015-07-05 01:14:33','2015-07-05 01:14:33');
/*!40000 ALTER TABLE `brands` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-09-13 21:50:21
