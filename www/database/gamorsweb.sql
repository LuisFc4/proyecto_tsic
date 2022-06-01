-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: gamorsweb
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `carrito`
--

DROP TABLE IF EXISTS `carrito`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `carrito` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_playera` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `precio` float NOT NULL,
  `cantidad` int(5) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=129 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carrito`
--

LOCK TABLES `carrito` WRITE;
/*!40000 ALTER TABLE `carrito` DISABLE KEYS */;
INSERT INTO `carrito` VALUES (125,2,'Playera 1',160,2,'Playera 1','Imagenes/1.jpg','2022-05-30 19:28:52'),(126,11,'Playera 2',200,1,'Playera 2','Imagenes/2.jpg','2022-05-30 19:28:54'),(127,12,'Playera 3',130,1,'Playera 3','Imagenes/3.jpg','2022-05-30 19:28:54'),(128,16,'Playera 4',200,1,'Playera 4','Imagenes/4.jpg','2022-05-30 19:28:55');
/*!40000 ALTER TABLE `carrito` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `playeras`
--

DROP TABLE IF EXISTS `playeras`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `playeras` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `precio` float NOT NULL,
  `inventario` int(5) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `playeras`
--

LOCK TABLES `playeras` WRITE;
/*!40000 ALTER TABLE `playeras` DISABLE KEYS */;
INSERT INTO `playeras` VALUES (2,'Playera 1',160,8,'Playera 1','Imagenes/1.jpg','2022-05-28 04:49:43'),(11,'Playera 2',200,9,'Playera 2','Imagenes/2.jpg','2022-05-30 19:10:53'),(12,'Playera 3',130,9,'Playera 3','Imagenes/3.jpg','2022-05-30 19:11:09'),(16,'Playera 4',200,9,'Playera 4','Imagenes/4.jpg','2022-05-30 19:24:01');
/*!40000 ALTER TABLE `playeras` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tarjetas`
--

DROP TABLE IF EXISTS `tarjetas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tarjetas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `mes` int(2) NOT NULL,
  `año` int(2) NOT NULL,
  `tarjeta` varchar(255) NOT NULL,
  `cvc` int(3) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tarjetas`
--

LOCK TABLES `tarjetas` WRITE;
/*!40000 ALTER TABLE `tarjetas` DISABLE KEYS */;
INSERT INTO `tarjetas` VALUES (12,'José',12,24,'3243234323434324',435,'2022-05-28 19:04:26'),(13,'José',12,24,'4234 4324 4234 4325',545,'2022-05-28 19:05:29'),(14,'José',12,24,'4234 4324 4234 4325',656,'2022-05-28 19:06:19'),(15,'José',12,24,'4234 4324 4234 4325',535,'2022-05-28 19:08:59'),(16,'José',12,24,'1231254321567823',535,'2022-05-28 19:16:26'),(17,'José Luis Gamiño Gonzalez',12,25,'4234 4324 4234 4324',435,'2022-05-28 19:21:55'),(18,'José Luis',11,24,'4234 4324 4234 4324',123,'2022-05-28 20:00:20'),(19,'José',12,24,'4234 4324 4234 4325',123,'2022-05-28 20:20:14'),(20,'José',12,24,'3243234323434324',123,'2022-05-29 20:26:33'),(21,'José',12,24,'4234 4324 4234 4325',123,'2022-05-30 19:04:19');
/*!40000 ALTER TABLE `tarjetas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ventas`
--

DROP TABLE IF EXISTS `ventas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ventas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_playera` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `precio` float NOT NULL,
  `cantidad` int(5) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ventas`
--

LOCK TABLES `ventas` WRITE;
/*!40000 ALTER TABLE `ventas` DISABLE KEYS */;
INSERT INTO `ventas` VALUES (20,2,'Playera 1',150,1,'Playera bien mamalona','Imagenes/1.jpg','2022-05-28 19:06:19'),(21,2,'Playera 1',150,2,'Playera bien mamalona','Imagenes/1.jpg','2022-05-28 19:08:59'),(22,3,'Playera 2',120,1,'Esta es la playera 2','Imagenes/2.jpg','2022-05-28 19:08:59'),(23,6,'Playera 1',140,1,'Playera 3','Imagenes/3.jpg','2022-05-28 19:08:59'),(24,3,'Playera 2',120,1,'Esta es la playera 2','Imagenes/2.jpg','2022-05-28 19:16:26'),(25,2,'Playera 1',150,1,'Playera bien mamalona','Imagenes/1.jpg','2022-05-28 19:21:55'),(26,3,'Playera 2',120,1,'Esta es la playera 2','Imagenes/2.jpg','2022-05-28 19:21:55'),(27,6,'Playera 1',140,1,'Playera 3','Imagenes/3.jpg','2022-05-28 19:21:55'),(28,7,'Playera 4',140,1,'Playera 4','Imagenes/4.jpg','2022-05-28 19:21:55'),(29,2,'Playera 1',150,1,'Playera bien mamalona','Imagenes/1.jpg','2022-05-28 20:00:20'),(30,3,'Playera 2',120,1,'Esta es la playera 2','Imagenes/2.jpg','2022-05-28 20:00:20'),(31,2,'Playera 1',150,1,'Playera bien mamalona','Imagenes/1.jpg','2022-05-28 20:20:14'),(32,3,'Playera 2',120,1,'Esta es la playera 2','Imagenes/2.jpg','2022-05-28 20:20:14'),(33,2,'Playera 1',150,2,'Playera bien mamalona','Imagenes/1.jpg','2022-05-29 20:26:33'),(34,7,'Playera 4',140,3,'Playera 4','Imagenes/4.jpg','2022-05-30 19:04:19'),(35,2,'Playera 1',150,2,'Playera bien mamalona','Imagenes/1.jpg','2022-05-30 19:04:19'),(36,11,'Playera 2',200,2,'Playera 2','Imagenes/2.jpg','2022-05-30 19:19:26'),(37,2,'Playera 1',160,2,'Playera 1','Imagenes/1.jpg','2022-05-30 19:19:26'),(38,11,'Playera 2',200,1,'Playera 2','Imagenes/2.jpg','2022-05-30 19:22:29'),(39,12,'Playera 3',130,1,'Playera 3','Imagenes/3.jpg','2022-05-30 19:22:29'),(40,15,'Playera 4',150,1,'Playera 4','Imagenes/4.jpg','2022-05-30 19:22:29'),(41,2,'Playera 1',160,1,'Playera 1','Imagenes/1.jpg','2022-05-30 19:22:29'),(42,11,'Playera 2',200,2,'Playera 2','Imagenes/2.jpg','2022-05-30 19:25:47'),(43,2,'Playera 1',160,2,'Playera 1','Imagenes/1.jpg','2022-05-30 19:25:47'),(44,12,'Playera 3',130,2,'Playera 3','Imagenes/3.jpg','2022-05-30 19:25:47');
/*!40000 ALTER TABLE `ventas` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-05-30 14:31:50
