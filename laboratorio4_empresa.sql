-- MySQL dump 10.13  Distrib 8.0.23, for Win64 (x86_64)
--
-- Host: localhost    Database: laboratorio4
-- ------------------------------------------------------
-- Server version	8.0.23

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `empresa`
--

DROP TABLE IF EXISTS `empresa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `empresa` (
  `id` int NOT NULL AUTO_INCREMENT,
  `denominacion` varchar(128) DEFAULT NULL,
  `telefono` varchar(50) DEFAULT NULL,
  `horario_de_atencion` varchar(256) DEFAULT NULL,
  `quienes_somos` varchar(1024) DEFAULT NULL,
  `latitud` decimal(24,0) DEFAULT NULL,
  `longitud` decimal(24,0) DEFAULT NULL,
  `domicilio` varchar(256) DEFAULT NULL,
  `email` varchar(75) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empresa`
--

LOCK TABLES `empresa` WRITE;
/*!40000 ALTER TABLE `empresa` DISABLE KEYS */;
INSERT INTO `empresa` VALUES (1,'Globant','+1 877 215 5230','Lunes a viernes de 8 a 18hs','Utilizamos las últimas tecnologías en el campo digital y cognitivo para transformar las organizaciones en todos los aspectos',-33,-69,'Mendoza capital','hi@globant.com'),(2,'Aconcagua','+54 263 68962','Lunes a viernes de 8 a 18hs','We are an experienced high-quality software product development company. We focus our efforts on adding value to our client’s business through technology.',-33,-69,'Av. España 948, M5500DFJ Mendoza, Argentina','info@aconcaguasf.com'),(3,'Quoma','+54 9 261 156 960483','Lunes a Viernes de 8 a 18hs','ESPECIALISTAS EN DESARROLLO DE SOFTWARE',-33,-69,'Espejo 111 - Piso 1 - Mendoza - Argentina','info@quoma.com.ar'),(4,'Wakapi',' +1 (415) 800-4778','Lunes a Viernes de 8 a 18hs','Global society, its economy, and the way companies do business are in constant evolution, reinventing and reshaping themselves, hand in hand with the progress of technology.',-33,-69,'Av. San Martín 1175, M5501 Godoy Cruz, Mendoza',' hello@wakapi.com');
/*!40000 ALTER TABLE `empresa` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-03-29 17:51:59
