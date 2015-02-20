-- MySQL dump 10.13  Distrib 5.5.40, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: shoppingcar
-- ------------------------------------------------------
-- Server version	5.5.40-0ubuntu0.14.04.1

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
-- Current Database: `shoppingcar`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `shoppingcar` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `shoppingcar`;

--
-- Table structure for table `item_categories`
--

DROP TABLE IF EXISTS `item_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `item_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `item_categories`
--

LOCK TABLES `item_categories` WRITE;
/*!40000 ALTER TABLE `item_categories` DISABLE KEYS */;
INSERT INTO `item_categories` VALUES (10,'Accesorios para computadoras'),(7,'Camaras fotograficas'),(5,'Celulares'),(2,'Computadoras de escritorio'),(8,'Impresoras'),(1,'Laptops'),(9,'Reproductores de video'),(3,'Tablets'),(4,'Televisores'),(6,'Videojuegos');
/*!40000 ALTER TABLE `item_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `producto` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `precio` int(11) NOT NULL,
  `categoria` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `items`
--

LOCK TABLES `items` WRITE;
/*!40000 ALTER TABLE `items` DISABLE KEYS */;
INSERT INTO `items` VALUES (1,'HP Pavilion - 23t Touch All-in-One PC','',6999,2),(2,'Reproductor Tectoy C1','',999,9),(3,'Bundle Wind Waker Nintendo Wii U 32GB','',5999,6),(4,'Televisor 55\" B3770 LED FULL HD','',12599,4),(5,'Multifuncional Epson B88','',4999,8),(6,'Samsung Galaxy Tab S 8.4\" 16GB, Dazzling White','',9999,3),(7,'Teclado portatil LCK','',349,10),(8,'Samsung Galaxy Tab 2 7.0 8GB','',5999,3),(9,'Acesonic BDK-200','',3999,9),(10,'StarTimes Move S100','',1499,5),(11,'Teclado Luminus Blue D12','',799,10),(12,'Galaxy One Touch M10','',4320,5),(13,'Televisor 37\" H6850 LED SMART TV 3D Full HD','',6300,4),(14,'Multifuncional Wifi HP D2585','',3499,8),(15,'HP ENVY 700xt Windows 7 Desktop','',8700,2),(16,'Camara Fotografica Hero','',5999,7),(17,'SONY 24CHD','',3200,9),(18,'Canon EOS','',4499,7),(19,'Laptop HP X2518','',8700,1),(20,'Samsung Galaxy Tab 8.0 16GB, White','',0,3),(21,'HP ENVY Recline 23\"','',9300,2),(22,'HP EliteDesk 800','',7499,2),(23,'iPad 2','',6999,3),(24,'Televisor 55\" Z513 OnTV LED SMART TV FULL HD','',13500,4),(25,'Laptop ASUS RG2002','',18000,1),(26,'Camara Samsug E12','',1999,7),(27,'Televisor 22\" R212 FULL HD','',3200,4),(28,'Videojuego Super Smash Bros for Wii u','',999,6),(29,'Videojuego The Last of Us PS3','',799,6),(30,'Reproductor LG M8852','',2999,9),(31,'Reproductor LG F5645','',1999,9),(32,'Nexus One 1G','',3750,5),(33,'Mouse Logitech/USB2.0 T17','',69,10),(34,'Impresora Lenxmark R2D2','',4499,8),(35,'Televisor SONY World Cup 2014 I654 Full HD','',9700,4),(36,'Laptop DELL Z512','',7150,1),(37,'Impresora HP 2000','',1999,8),(38,'HP ProDesk 600','',7999,2),(39,'Camara Samsung Z2912','',3799,7),(40,'Impresora Canon L10','',1999,8),(41,'Samsung Galaxy Tab 7','',5300,3),(42,'Laptop HP 15\" MT300','',13600,1),(43,'Impresora HP MULTI U69','',1999,8),(44,'Bundle Xbox One 500GB + GTAV','',6999,6),(45,'Reproductor Epson E2512','',4999,9),(46,'Playstation 4 500GB','',7999,6),(47,'Camara Samsung B99','',2999,7),(48,'HP ProDesk 400','',13500,2),(49,'Xbox One 500GB','',6999,6),(50,'Samsung Galaxy Tab 5 12.0 512GB','',17999,3),(51,'Smart BluRay B4CK','',2499,9),(52,'Samsung Galaxy Note 3 D512','',6999,5),(53,'HP All-in-One PC Buster 2000','',7500,2),(54,'Impresora Epson T77','',2300,8),(55,'Portatil Lenovo YH987 Windows 8.1','',4500,1),(56,'Televisor 9-in-One 105\" SWEDX','',52000,4),(57,'Nikon G10','',5499,7),(58,'Motorola Verizon K487','',6500,5),(59,'Samsung Galaxy Note 10.1 128GB','',12999,3),(60,'Portatil Lenovo H264 Windows 8.1','',5900,1),(61,'Televisor Samsung Smart HUB 5 32\"','',7999,4),(62,'Televisor RD 21\"','',2999,4),(63,'Reproductor LG 255D','',2499,9),(64,'Go Pro Hero4','',6499,7),(65,'Xbox One 250GB','',5100,6),(66,'Teclado KB J115','',199,10),(67,'Mouse Blue YMCA1','',59,10),(68,'NEG Z3 AT&T','',2500,5),(69,'Samsung Galaxy S5','',8799,5),(70,'Auriculares UDI99','',299,10),(71,'Nintendo Wii White','',2499,6),(72,'Camara Canon EOS White','',4499,7),(73,'Reproductor SONY APK10','',2300,9),(74,'Auriculares BOSE H264','',1200,10),(75,'Pavilion 23\" TouchSmart','',18000,2),(76,'Televisor Panasonic VIETA XY123','',5100,4),(77,'Samsung Galaxy ACE','',4300,5),(78,'Impresora Samsung A123','',1499,8),(79,'Impresora Samsung B123 Black','',1599,8),(80,'Camara Samsung C45','',2499,7),(81,'Samsung Galaxy Tab 1','',4999,3),(82,'Go Pro Hero5','',7200,7),(83,'Macbook Pro 15\"','',36000,1),(84,'Auriculares c/repuesto ZONI E12','',999,10),(85,'Nintendo Wii U White 8GB','',4999,6),(86,'Samsung Galaxy Note 2 GT-7100','',4300,5),(87,'Laptop DELL G4550','',6999,1),(88,'Control de mando PS4','',899,6),(89,'iPad 3 Mini','',4999,3),(90,'HP 110','',5999,2),(91,'Samsung Nexus Tab 10.1 128GB','',7400,3),(92,'Auriculares Jabra B10','',599,10),(93,'Macbook Pro 15\" SDD 500GB','',43000,1),(94,'Laptop TOSHIBA Satellite M7100','',3999,1),(95,'Televisor Samsung World Cup 2014 3D 55\"','',16785,4),(96,'HP 220','',9999,2),(97,'Bundle iPhone 5S + S5','',16000,5),(98,'Impresora Samsung Smart Color F126','',3700,8),(99,'Mouse Multiaser S10','',99,10),(100,'Smart BluRay D550','',2799,9);
/*!40000 ALTER TABLE `items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(32) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `hash` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `usuario` (`usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (14,'byoigres','Sergio Flores','$2y$10$zW93O0qrfVYUzKZpfxAgROreR7vgKXAbjyEbZlOLNbbXTtZjik.2i');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-02-16 11:27:27
