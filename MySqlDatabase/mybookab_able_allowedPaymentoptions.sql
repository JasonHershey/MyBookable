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
-- Table structure for table `allowedPaymentoptions`
--

DROP TABLE IF EXISTS `allowedPaymentoptions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `allowedPaymentoptions` (
  `id` varchar(36) NOT NULL,
  `apo_name` varchar(300) NOT NULL,
  `paymentTypes_id` varchar(36) NOT NULL,
  `bookables_id` varchar(36) NOT NULL,
  `paymentConfiguration` mediumtext NOT NULL,
  `newCustomerdefault` tinyint(1) NOT NULL,
  `description` text,
  `createdDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `bookable_id_idx` (`bookables_id`),
  KEY `payment_type_idx` (`paymentTypes_id`),
  CONSTRAINT `apo_bookable_id` FOREIGN KEY (`bookables_id`) REFERENCES `bookables` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `apo_payment_type` FOREIGN KEY (`paymentTypes_id`) REFERENCES `paymentTypes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `allowedPaymentoptions`
--

LOCK TABLES `allowedPaymentoptions` WRITE;
/*!40000 ALTER TABLE `allowedPaymentoptions` DISABLE KEYS */;
INSERT INTO `allowedPaymentoptions` VALUES ('1cca069e-3fec-11e5-be05-549f350764bc','2222222','077f8679-3ec5-11e5-be05-549f350764bc','c97fcd1d-2b94-11e5-9c9b-549f350764bc','asdfsadfasdfasdfasdf',1,'123435','2015-08-10 22:45:03','2015-08-11 00:54:54'),('3e469a60-3fed-11e5-be05-549f350764bc','2222222','077f8679-3ec5-11e5-be05-549f350764bc','c97fcd1d-2b94-11e5-9c9b-549f350764bc','asdfsadfasdfasdfasdf',1,'123435','2015-08-10 22:53:08','2015-08-11 00:54:54'),('5eb9be37-3fec-11e5-be05-549f350764bc','2222222','077f8679-3ec5-11e5-be05-549f350764bc','c97fcd1d-2b94-11e5-9c9b-549f350764bc','asdfsadfasdfasdfasdf',1,'123435','2015-08-10 22:46:53','2015-08-11 00:54:54'),('99ac301f-3fed-11e5-be05-549f350764bc','2222222','077f8679-3ec5-11e5-be05-549f350764bc','c97fcd1d-2b94-11e5-9c9b-549f350764bc','asdfsadfasdfasdfasdf',1,'123435','2015-08-10 22:55:42','2015-08-11 00:54:54'),('d621a17f-3fed-11e5-be05-549f350764bc','2222222','077f8679-3ec5-11e5-be05-549f350764bc','c97fcd1d-2b94-11e5-9c9b-549f350764bc','asdfsadfasdfasdfasdf',1,'123435','2015-08-10 22:57:23','2015-08-11 00:54:54'),('e57eee2f-3fed-11e5-be05-549f350764bc','2222222','077f8679-3ec5-11e5-be05-549f350764bc','c97fcd1d-2b94-11e5-9c9b-549f350764bc','asdfsadfasdfasdfasdf',0,'asdfasdfsdf','2015-08-10 22:57:49','2015-08-11 00:58:19'),('f1e6de59-3feb-11e5-be05-549f350764bc','2222222','077f8679-3ec5-11e5-be05-549f350764bc','c97fcd1d-2b94-11e5-9c9b-549f350764bc','asdfsadfasdfasdfasdf',1,'123435','2015-08-10 22:43:51','2015-08-11 00:54:54');
/*!40000 ALTER TABLE `allowedPaymentoptions` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-09-13 21:50:18
