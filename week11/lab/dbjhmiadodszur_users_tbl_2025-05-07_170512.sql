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
-- Table structure for table `users_tbl`
--

DROP TABLE IF EXISTS `users_tbl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users_tbl` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `role` varchar(30) NOT NULL DEFAULT 'customer',
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_tbl`
--

/*!40000 ALTER TABLE `users_tbl` DISABLE KEYS */;
INSERT INTO `users_tbl` VALUES (1,'Hank','Hill','customer','stricklandp@arlen.com',NULL,'2025-04-20 02:23:18','2025-04-20 02:23:18'),(2,'Dale','Gribble','customer','extermintator@arlen.com',NULL,'2025-04-20 02:31:33','2025-04-20 02:31:33'),(3,'Bill','Dauterrive','customer','wfdltDauterive@arlen.com',NULL,'2025-04-20 02:31:33','2025-04-20 02:31:33'),(4,'Jeff','Boomhauer','customer','Jbtrs@arlen.com',NULL,'2025-04-20 02:31:33','2025-04-20 02:31:33'),(5,'Peggy','Hill','customer','peggyH@arlen.com',NULL,'2025-04-20 02:31:33','2025-04-20 02:31:33'),(6,'Bobby','Hill','customer','rbh99@arlen.com',NULL,'2025-04-20 02:31:33','2025-04-20 02:31:33'),(7,'Joseph','Gribble','customer','jrg99@arlen.com',NULL,'2025-04-20 02:31:33','2025-04-20 02:31:33'),(8,'Nancy','Gribble','customer','ngaa@arlen.com',NULL,'2025-04-20 02:31:33','2025-04-20 02:31:33'),(9,'Cotton','Hill','customer','ikfm@arlen.com',NULL,'2025-04-20 02:31:33','2025-04-20 02:31:33'),(10,'Kahn','Souphanousinphone','customer','kks00@arlen.com',NULL,'2025-04-20 02:31:33','2025-04-20 02:31:33'),(11,'Benedict ','Arlen','customer','hinkhal@hotmail.com','fittymen','2025-04-28 09:03:24','2025-04-28 09:03:24'),(12,'Hink ','Hall','customer','Assitant53@hotmail.com','54321','2025-04-29 02:07:53','2025-04-29 02:07:53'),(13,'Chuck','Mangione','customer','MegaloC@hotmail.com','mypassword1','2025-04-29 02:09:26','2025-04-29 02:09:26'),(14,'Rusty','Shackleford','customer','DalesBuddy@hotmail.com','qweruiop','2025-04-29 02:10:48','2025-04-29 02:10:48'),(15,'Minh','Souphanousinphone','customer','lmoma@hotmail.com','zxcvb','2025-04-29 02:11:42','2025-04-29 02:11:42'),(16,'Buck ','Strickland','customer','StricklandP@hotmail.com','zxcvasdf','2025-04-29 02:12:17','2025-04-29 02:12:17'),(17,'John','Redcorn','customer','bestMasseuse@hotmail.com','asdfg','2025-04-29 02:13:41','2025-04-29 02:13:41'),(18,'Kahn Jr','Souphanousinphone','customer','bestViolinist@hotmail.com','lkjhg','2025-04-29 02:14:47','2025-04-29 02:14:47'),(19,'Anthony','Page','customer','scsArlen@hotmail.com','123456','2025-04-29 02:16:46','2025-04-29 02:16:46'),(20,'Chick','Mangione','customer','ImNotAChickImADude!@hotmail.com','muzak','2025-04-29 02:17:19','2025-04-29 02:17:19');
/*!40000 ALTER TABLE `users_tbl` ENABLE KEYS */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-05-07 17:05:32
