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
-- Table structure for table `bookableEvents`
--

DROP TABLE IF EXISTS `bookableEvents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bookableEvents` (
  `id` varchar(36) NOT NULL,
  `eventName` varchar(300) NOT NULL,
  `bookables_id` varchar(36) NOT NULL,
  `eventOwner_id` varchar(36) NOT NULL,
  `eventStart` datetime NOT NULL,
  `eventEnd` datetime NOT NULL,
  `recurrences_id` varchar(36) NOT NULL,
  `eventStatus_id` varchar(36) NOT NULL,
  `createdDate` datetime DEFAULT CURRENT_TIMESTAMP,
  `updatedDate` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `recurrence_id_idx` (`recurrences_id`),
  KEY `bookable_id_idx` (`bookables_id`),
  KEY `eventOwner_id_idx` (`eventOwner_id`),
  KEY `event_eventStatus_id_idx` (`eventStatus_id`),
  CONSTRAINT `event_bookable_id` FOREIGN KEY (`bookables_id`) REFERENCES `bookables` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `event_eventOwner_id` FOREIGN KEY (`eventOwner_id`) REFERENCES `siteusers` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `event_eventStatustypes_id` FOREIGN KEY (`eventStatus_id`) REFERENCES `eventStatustypes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `event_recurrences_id` FOREIGN KEY (`recurrences_id`) REFERENCES `recurrences` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bookableEvents`
--

LOCK TABLES `bookableEvents` WRITE;
/*!40000 ALTER TABLE `bookableEvents` DISABLE KEYS */;
INSERT INTO `bookableEvents` VALUES ('16249569-47c1-11e5-ab34-549f350764bc','My bookable event test4','c97fcd1d-2b94-11e5-9c9b-549f350764bc','e2ee90d1-381a-11e5-9c9b-549f350764bc','2015-01-01 00:00:00','2015-12-31 00:00:00','1624491e-47c1-11e5-ab34-549f350764bc','ff59d7b3-43db-11e5-ab34-549f350764bc','2015-08-20 21:57:13','2015-08-20 21:57:13'),('2d356bb6-47bd-11e5-ab34-549f350764bc','My bookable event test2','c97fcd1d-2b94-11e5-9c9b-549f350764bc','e2ee90d1-381a-11e5-9c9b-549f350764bc','0000-00-00 00:00:00','0000-00-00 00:00:00','2d307cc2-47bd-11e5-ab34-549f350764bc','ff59d7b3-43db-11e5-ab34-549f350764bc','2015-08-20 21:29:13','2015-08-20 21:29:13'),('533208a7-4576-11e5-ab34-549f350764bc','My bookable event test','c97fcd1d-2b94-11e5-9c9b-549f350764bc','e2ee90d1-381a-11e5-9c9b-549f350764bc','0000-00-00 00:00:00','0000-00-00 00:00:00','53301de2-4576-11e5-ab34-549f350764bc','ff59d7b3-43db-11e5-ab34-549f350764bc','2015-08-17 23:57:00','2015-08-17 23:57:00'),('8080dff9-47c0-11e5-ab34-549f350764bc','My bookable event test3','c97fcd1d-2b94-11e5-9c9b-549f350764bc','e2ee90d1-381a-11e5-9c9b-549f350764bc','0000-00-00 00:00:00','0000-00-00 00:00:00','8080075f-47c0-11e5-ab34-549f350764bc','ff59d7b3-43db-11e5-ab34-549f350764bc','2015-08-20 21:53:01','2015-08-20 21:53:01');
/*!40000 ALTER TABLE `bookableEvents` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-09-13 21:50:12
