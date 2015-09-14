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
-- Table structure for table `bookableFeatures`
--

DROP TABLE IF EXISTS `bookableFeatures`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bookableFeatures` (
  `id` varchar(36) NOT NULL,
  `bookable_id` varchar(36) NOT NULL,
  `featureType_id` varchar(36) NOT NULL,
  `featureName` varchar(50) NOT NULL,
  `featureValue` varchar(45) DEFAULT NULL,
  `createdDate` datetime DEFAULT CURRENT_TIMESTAMP,
  `updatedDate` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `feature_bookable_id_idx` (`bookable_id`),
  KEY `feature_type_idx` (`featureType_id`),
  CONSTRAINT `feature_bookable` FOREIGN KEY (`bookable_id`) REFERENCES `bookables` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `feature_type` FOREIGN KEY (`featureType_id`) REFERENCES `featureTypes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Features for a bookable';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bookableFeatures`
--

LOCK TABLES `bookableFeatures` WRITE;
/*!40000 ALTER TABLE `bookableFeatures` DISABLE KEYS */;
INSERT INTO `bookableFeatures` VALUES ('2f6f57f2-40bd-11e5-be05-549f350764bc','c97fcd1d-2b94-11e5-9c9b-549f350764bc','8a589be3-40b9-11e5-be05-549f350764bc','feature1','My custom feature value 2','2015-08-11 23:41:39','2015-08-11 23:41:39'),('3933a806-40bd-11e5-be05-549f350764bc','c97fcd1d-2b94-11e5-9c9b-549f350764bc','8a589be3-40b9-11e5-be05-549f350764bc','feature2','My custom feature value 3','2015-08-11 23:41:55','2015-08-11 23:41:55'),('6988b190-40bd-11e5-be05-549f350764bc','c97fcd1d-2b94-11e5-9c9b-549f350764bc','c41fc3b5-40b9-11e5-be05-549f350764bc','My person feature 1','My person feature value 1','2015-08-11 23:43:16','2015-08-11 23:43:16'),('7e010c40-430b-11e5-ab34-549f350764bc','c97fcd1d-2b94-11e5-9c9b-549f350764bc','ccc36b8f-40b9-11e5-be05-549f350764bc','place-non-smoking','checked','2015-08-14 22:07:14','2015-08-14 22:07:14'),('894ffbac-430b-11e5-ab34-549f350764bc','c97fcd1d-2b94-11e5-9c9b-549f350764bc','ccc36b8f-40b9-11e5-be05-549f350764bc','place-ada-accessible','checked','2015-08-14 22:07:33','2015-08-14 22:07:33'),('9b1c4310-430b-11e5-ab34-549f350764bc','c97fcd1d-2b94-11e5-9c9b-549f350764bc','ccc36b8f-40b9-11e5-be05-549f350764bc','place-wifi-available','checked','2015-08-14 22:08:03','2015-08-14 22:08:03'),('a206d3fe-430b-11e5-ab34-549f350764bc','c97fcd1d-2b94-11e5-9c9b-549f350764bc','ccc36b8f-40b9-11e5-be05-549f350764bc','place-insurance-required','checked','2015-08-14 22:08:14','2015-08-14 22:08:14'),('ab667f9c-430b-11e5-ab34-549f350764bc','c97fcd1d-2b94-11e5-9c9b-549f350764bc','ccc36b8f-40b9-11e5-be05-549f350764bc','place-capacity','20','2015-08-14 22:08:30','2015-08-14 22:08:30'),('b1848e41-430b-11e5-ab34-549f350764bc','c97fcd1d-2b94-11e5-9c9b-549f350764bc','ccc36b8f-40b9-11e5-be05-549f350764bc','place-size','2000','2015-08-14 22:08:40','2015-08-14 22:08:40'),('bded4d25-430b-11e5-ab34-549f350764bc','c97fcd1d-2b94-11e5-9c9b-549f350764bc','ccc36b8f-40b9-11e5-be05-549f350764bc','place-type','studio','2015-08-14 22:09:01','2015-08-14 22:09:01'),('da7234d9-430b-11e5-ab34-549f350764bc','c97fcd1d-2b94-11e5-9c9b-549f350764bc','ccc36b8f-40b9-11e5-be05-549f350764bc','person-trainer','checked','2015-08-14 22:09:49','2015-08-14 22:09:49'),('e0fce593-430b-11e5-ab34-549f350764bc','c97fcd1d-2b94-11e5-9c9b-549f350764bc','ccc36b8f-40b9-11e5-be05-549f350764bc','person-entertainer','checked','2015-08-14 22:10:00','2015-08-14 22:10:00'),('e60b5278-430b-11e5-ab34-549f350764bc','c97fcd1d-2b94-11e5-9c9b-549f350764bc','ccc36b8f-40b9-11e5-be05-549f350764bc','person-therapist','checked','2015-08-14 22:10:08','2015-08-14 22:10:08'),('ea995f27-40bc-11e5-be05-549f350764bc','c97fcd1d-2b94-11e5-9c9b-549f350764bc','8a589be3-40b9-11e5-be05-549f350764bc','feature3','My custom feature value 1','2015-08-11 23:39:43','2015-08-11 23:39:43'),('ec425cc6-430b-11e5-ab34-549f350764bc','c97fcd1d-2b94-11e5-9c9b-549f350764bc','ccc36b8f-40b9-11e5-be05-549f350764bc','thing-tools','checked','2015-08-14 22:10:19','2015-08-14 22:10:19');
/*!40000 ALTER TABLE `bookableFeatures` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-09-13 21:50:26
