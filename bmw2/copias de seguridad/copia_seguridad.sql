-- MySQL dump 10.13  Distrib 5.7.20, for Linux (x86_64)
--
-- Host: localhost    Database: coches
-- ------------------------------------------------------
-- Server version	5.7.20-0ubuntu0.16.04.1

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
-- Table structure for table `bmw`
--

DROP TABLE IF EXISTS `bmw`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bmw` (
  `CodCoche` int(5) NOT NULL AUTO_INCREMENT,
  `Modelo` varchar(20) NOT NULL,
  `Año` varchar(4) NOT NULL,
  PRIMARY KEY (`CodCoche`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bmw`
--

LOCK TABLES `bmw` WRITE;
/*!40000 ALTER TABLE `bmw` DISABLE KEYS */;
INSERT INTO `bmw` VALUES (1,'m3','1990'),(2,'m5','1998'),(3,'m4','2012'),(4,'m4','2012'),(5,'m3','2000'),(35,'Deportivo','2017');
/*!40000 ALTER TABLE `bmw` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bmw1`
--

DROP TABLE IF EXISTS `bmw1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bmw1` (
  `CodCoche` int(11) NOT NULL AUTO_INCREMENT,
  `Marca` varchar(30) NOT NULL,
  `Modelo` varchar(30) NOT NULL,
  `Año` varchar(30) NOT NULL,
  PRIMARY KEY (`CodCoche`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bmw1`
--

LOCK TABLES `bmw1` WRITE;
/*!40000 ALTER TABLE `bmw1` DISABLE KEYS */;
INSERT INTO `bmw1` VALUES (1,'BMW','M3','1990'),(2,'Bmw','m4','1990'),(3,'Bmw','m3','1990'),(100,'Chevrolet','MMX','1975');
/*!40000 ALTER TABLE `bmw1` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;


-- Dump completed on 2017-11-09 10:22:58
-- Dump completed on 2017-11-09 10:22:58
