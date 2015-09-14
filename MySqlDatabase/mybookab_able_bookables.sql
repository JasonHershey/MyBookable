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
-- Table structure for table `bookables`
--

DROP TABLE IF EXISTS `bookables`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bookables` (
  `id` varchar(36) NOT NULL,
  `bookableName` varchar(300) NOT NULL,
  `ownerID` varchar(36) NOT NULL,
  `bookableTypes_id` varchar(36) NOT NULL,
  `description` text,
  `locations_id` varchar(36) NOT NULL,
  `brands_id` varchar(36) NOT NULL,
  `showInsearch` tinyint(1) NOT NULL,
  `createdDate` datetime DEFAULT CURRENT_TIMESTAMP,
  `updatedDate` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `owner_id_idx` (`ownerID`),
  KEY `brand_id_idx` (`brands_id`),
  KEY `type_id_idx` (`bookableTypes_id`),
  KEY `location_id_idx` (`locations_id`),
  CONSTRAINT `bookable_bookableTypes_id` FOREIGN KEY (`bookableTypes_id`) REFERENCES `bookableTypes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `bookable_brands_id` FOREIGN KEY (`brands_id`) REFERENCES `brands` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `bookable_locations_id` FOREIGN KEY (`locations_id`) REFERENCES `locations` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `bookable_ownesr_id` FOREIGN KEY (`ownerID`) REFERENCES `siteusers` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bookables`
--

LOCK TABLES `bookables` WRITE;
/*!40000 ALTER TABLE `bookables` DISABLE KEYS */;
INSERT INTO `bookables` VALUES ('c97fcd1d-2b94-11e5-9c9b-549f350764bc','Bookable name test 1','e2ee90d1-381a-11e5-9c9b-549f350764bc','fbbf3e6c-40ae-11e5-be05-549f350764bc','Bookable description test.','39eaad3a-2b93-11e5-9c9b-549f350764bc','85aab80e-2b91-11e5-9c9b-549f350764bc',1,'2015-07-16 01:29:34','2015-07-16 01:29:34');
/*!40000 ALTER TABLE `bookables` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-09-13 21:50:40
