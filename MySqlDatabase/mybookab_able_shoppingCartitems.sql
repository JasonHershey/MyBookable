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
-- Table structure for table `shoppingCartitems`
--

DROP TABLE IF EXISTS `shoppingCartitems`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shoppingCartitems` (
  `id` varchar(36) NOT NULL,
  `events_id` varchar(36) NOT NULL,
  `rates_id` varchar(36) NOT NULL,
  `paymentTotal` decimal(10,2) DEFAULT NULL,
  `paymentTransaction_id` varchar(36) NOT NULL,
  `createdDate` datetime DEFAULT CURRENT_TIMESTAMP,
  `updatedDate` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `cart_event_id_idx` (`events_id`),
  KEY `cart_rate_id_idx` (`rates_id`),
  KEY `cart_payment_id_idx` (`paymentTransaction_id`),
  CONSTRAINT `cart_event_id` FOREIGN KEY (`events_id`) REFERENCES `bookableEvents` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `cart_payment_id` FOREIGN KEY (`paymentTransaction_id`) REFERENCES `paymentTransactions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `cart_rate_id` FOREIGN KEY (`rates_id`) REFERENCES `rates` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shoppingCartitems`
--

LOCK TABLES `shoppingCartitems` WRITE;
/*!40000 ALTER TABLE `shoppingCartitems` DISABLE KEYS */;
/*!40000 ALTER TABLE `shoppingCartitems` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-09-13 21:50:09
