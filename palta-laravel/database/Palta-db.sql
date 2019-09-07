-- MySQL dump 10.13  Distrib 8.0.16, for macos10.14 (x86_64)
--
-- Host: 127.0.0.1    Database: palta
-- ------------------------------------------------------
-- Server version	5.7.26

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `carritos`
--

DROP TABLE IF EXISTS `carritos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `carritos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `medioDePago` varchar(11) NOT NULL,
  `cantItems` int(11) NOT NULL,
  `monto` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carritos`
--

LOCK TABLES `carritos` WRITE;
/*!40000 ALTER TABLE `carritos` DISABLE KEYS */;
INSERT INTO `carritos` VALUES (1,1,'2019-01-01','cash',10,5000),(2,1,'2019-01-01','cash',10,5000),(3,1,'2019-01-01','cash',10,5000);
/*!40000 ALTER TABLE `carritos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `carritos_productos`
--

DROP TABLE IF EXISTS `carritos_productos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `carritos_productos` (
  `compras_id` int(11) NOT NULL,
  `productos_id` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carritos_productos`
--

LOCK TABLES `carritos_productos` WRITE;
/*!40000 ALTER TABLE `carritos_productos` DISABLE KEYS */;
/*!40000 ALTER TABLE `carritos_productos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categorias`
--

DROP TABLE IF EXISTS `categorias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categorias`
--

LOCK TABLES `categorias` WRITE;
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productos`
--

DROP TABLE IF EXISTS `productos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `productos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `cantidad` int(150) NOT NULL,
  `id_categorias` varchar(11) NOT NULL,
  `precio` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `imagen` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos`
--

LOCK TABLES `productos` WRITE;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` VALUES (1,'Limon',0,'fruta',20,30,'product-img-5d68654559477.jpg'),(2,'Banana',0,'fruta',30,40,'product-img-5d6867aaac80f.jpg'),(3,'Batata',0,'verdura',20,60,'product-img-5d6867c210fbf.jpg'),(4,'Cebolla',0,'fruta',30,30,'product-img-5d6867e64792a.jpg'),(5,'Huevos',0,'almacen',150,30,'product-img-5d6867fe26f52.jpg'),(6,'Lechuga',0,'verdura',90,30,'product-img-5d68681a93e26.jpg'),(7,'Mandarina',0,'fruta',20,30,'product-img-5d686835c1039.jpg'),(8,'Manzana',0,'fruta',60,30,'product-img-5d6868443d381.jpg'),(9,'Morron',0,'verdura',120,30,'product-img-5d68685398d1a.jpg'),(10,'Naranja',0,'fruta',20,30,'product-img-5d68685ec21fe.jpg'),(11,'Papa',0,'verdura',15,30,'product-img-5d68686b7ddd6.jpg'),(12,'Pera',0,'fruta',50,30,'product-img-5d68687d1a685.jpg'),(13,'Tomate',0,'verdura',70,30,'product-img-5d6868909ea29.jpg'),(14,'Zanahoria',0,'verdura',60,30,'product-img-5d6868a032daa.jpg'),(15,'Zapallo',0,'verdura',70,30,'product-img-5d6868af9baa6.jpg'),(16,'Zucchini',0,'verdura',40,30,'product-img-5d6868d46bc29.jpg');
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(11) NOT NULL,
  `apellido` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `localidad` varchar(100) NOT NULL,
  `celular` int(11) NOT NULL,
  `pass` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (72,'Victoria','Guiñazu','vicotest1@mail.com','Juan Pedro Echeverría 850','General Pacheco',21627903,'$2y$10$.VGb8EBivGFRZW1MO14Fc.EP5NE/5yi3CHYJykfMuRv8QvVuxujfi'),(73,'Nazareno','Rouco','naza@gmail.com','jujuy 215','pacheco',1521627381,'$2y$10$9Slg5ozOaFJDW9rseuhs7.Jk2RdMkR4A2JYahiHeRtXqOp8kNOa/y'),(74,'Victoria','Guiñazu','vikie@hotmail.com','Juan Pedro Echeverría 850','General Pacheco',21627903,'$2y$10$7TmlXbjYKE2kp0puOSWfiu/EWl174CAjaJ3AOf.gdb8waCbSQYGWK'),(75,'Maria','Perez','mariaperez@mail.com','independencia 87','pacheco',47153822,'$2y$10$4T9V59EHSbUki1Qa5RHi..cIxZCvStGCPgvgajvH92pMKEmSBKS2C'),(76,'Victoria','Guiñazu','vicki@123.com','Juan Pedro Echeverría 850','General Pacheco',21627903,'$2y$10$LKYV5qZeN3Wcjo61DXGbHee1KuMKAEpHYK0zNJEpOAXTw17IIvOOa');
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

-- Dump completed on 2019-09-07 13:23:27
