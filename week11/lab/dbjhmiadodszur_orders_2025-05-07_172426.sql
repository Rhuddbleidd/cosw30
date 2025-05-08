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
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `orders` (
  `order_id` int unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int unsigned DEFAULT NULL,
  `user_id` int unsigned DEFAULT NULL,
  `order_status` varchar(10) DEFAULT 'Pending',
  `created_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `last_updated` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`order_id`),
  KEY `fk_product_id` (`product_id`),
  KEY `fk_user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,3,1,'delivered','2025-04-21 09:27:16','2025-04-21 09:27:16'),(2,10,2,'delivered','2025-04-21 23:51:41','2025-04-22 01:05:43'),(3,1,3,'shipped','2025-04-21 23:51:41','2025-04-21 23:51:41'),(4,2,4,'delivered','2025-04-21 23:51:41','2025-04-21 23:51:41'),(5,4,5,'shipped','2025-04-21 23:51:41','2025-04-21 23:51:41'),(6,9,9,'Pending','2025-04-21 23:55:05','2025-04-21 23:55:05'),(7,5,8,'Pending','2025-04-21 23:55:05','2025-04-21 23:55:05'),(8,6,7,'Pending','2025-04-21 23:55:05','2025-04-21 23:55:05'),(9,7,6,'Pending','2025-04-21 23:55:05','2025-04-21 23:55:05'),(10,8,10,'delivered','2025-04-21 23:56:55','2025-04-21 23:56:55'),(11,12,13,'Pending','2025-04-29 07:29:11','2025-04-29 07:29:11');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-05-07 17:24:40
