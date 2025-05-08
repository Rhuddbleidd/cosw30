-- MySQL dump 10.13  Distrib 8.0.33, for Win64 (x86_64)
--
-- Host: www.webdevlearning.org    Database: dbjhmiadodszur
-- ------------------------------------------------------
-- Server version	8.0.39-30

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `product_id` int unsigned NOT NULL AUTO_INCREMENT,
  `product_name` varchar(30) DEFAULT NULL,
  `color` varchar(15) DEFAULT NULL,
  `created_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `last_updated` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'Carvin v200','red','2025-04-21 01:35:21','2025-04-21 01:35:21'),(2,'Ibanez Jem Evo','white','2025-04-21 01:35:21','2025-04-21 01:35:21'),(3,'FrankenStrat','red','2025-04-21 01:35:21','2025-04-21 01:35:21'),(4,'Polka Dot V','black','2025-04-21 01:35:21','2025-04-21 01:35:21'),(5,'JB Numbers Guitar','wood','2025-04-21 01:35:21','2025-04-21 01:35:21'),(6,'Fender YM Stratocaster','cream','2025-04-21 01:35:21','2025-04-21 01:35:21'),(7,'KH-202','black','2025-04-21 01:35:21','2025-04-21 01:35:21'),(8,'KH White Zombie','blue','2025-04-21 01:35:21','2025-04-21 01:35:21'),(9,'Sawtooth Double Guitar','maple','2025-04-21 01:35:21','2025-04-21 01:35:21'),(10,'Despagni Flame','red','2025-04-21 01:35:21','2025-04-21 01:35:21'),(11,'Ibanez JPM100','black','2025-04-21 23:35:17','2025-04-21 23:35:17'),(12,'KH 2 Vintage','black','2025-04-21 23:39:19','2025-04-21 23:39:19'),(13,'KH Demonology','white','2025-04-21 23:41:39','2025-04-21 23:41:39'),(14,'KH-3 Spider','black','2025-04-29 07:57:36','2025-04-29 07:58:13'),(15,'Ibanez rk1','standard','2025-05-07 08:24:03','2025-05-07 08:24:36');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-05-07 17:24:10
