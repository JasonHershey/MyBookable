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
-- Table structure for table `bookableImages`
--

DROP TABLE IF EXISTS `bookableImages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bookableImages` (
  `id` varchar(36) NOT NULL,
  `bookables_id` varchar(36) NOT NULL,
  `primaryImage` tinyint(1) DEFAULT NULL,
  `imageFile` varchar(255) DEFAULT NULL,
  `createdDate` datetime DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `bookableImage_bookable_idx` (`bookables_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bookableImages`
--

LOCK TABLES `bookableImages` WRITE;
/*!40000 ALTER TABLE `bookableImages` DISABLE KEYS */;
INSERT INTO `bookableImages` VALUES ('75685b52-3687-11e5-9c9b-549f350764bc','c97fcd1d-2b94-11e5-9c9b-549f350764bc',0,'/home/mybookab/public_html/uploaded_files/559a18fd331a4.jpg','2015-07-29 23:51:52','2015-07-29 23:52:00'),('b450c51f-3687-11e5-9c9b-549f350764bc','c97fcd1d-2b94-11e5-9c9b-549f350764bc',0,'/home/mybookab/public_html/uploaded_files/559b5d91b2d66.jpg','2015-07-29 23:53:37','2015-07-29 23:53:37'),('c583b4c9-3687-11e5-9c9b-549f350764bc','c97fcd1d-2b94-11e5-9c9b-549f350764bc',1,'/home/mybookab/public_html/uploaded_files/559a19a6a0b4a.jpg','2015-07-29 23:54:06','2015-07-29 23:54:06'),('d16d5d9c-3687-11e5-9c9b-549f350764bc','c97fcd1d-2b94-11e5-9c9b-549f350764bc',0,'/home/mybookab/public_html/uploaded_files/55985e5b22b90.jpg','2015-07-29 23:54:26','2015-07-29 23:54:26');
/*!40000 ALTER TABLE `bookableImages` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-09-13 21:50:10
