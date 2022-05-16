-- MySQL dump 10.13  Distrib 8.0.29, for Linux (x86_64)
--
-- Host: localhost    Database: ayoosh
-- ------------------------------------------------------
-- Server version	8.0.29-0ubuntu0.22.04.2

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
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `articles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` int NOT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articles`
--

LOCK TABLES `articles` WRITE;
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
INSERT INTO `articles` VALUES (1,'aSDfaSDF','Article textdfsDFdasF asdf sdgf SDGF SDFV sDGFVG v','uploads/articles/updated/image-1652731351.jpg',1,'gffzdg','2022-05-15 21:20:28','2022-05-16 17:02:31'),(2,'Article 1','Article 1 Article 1 Article 1 Article 1 Article 1 Article 1 Article 1 Article 1 Article 1 Article 1 Article 1 Article 1 Article 1 Article 1 Article 1 Article 1 Article 1 Article 1 Article 1 Article 1 Article 1 Article 1 Article 1 Article 1 Article 1 Article 1 Article 1 Article 1 Article 1 Article 1 Article 1 Article 1 Article 1 Article 1 Article 1 Article 1 Article 1 Article 1','uploads/articles/image-1652662343.jpg',1,'tester 1','2022-05-15 21:52:23','2022-05-15 21:52:23'),(3,'Article 2','Article 2 Article 2 Article 2 Article 2 Article 2 Article 2 Article 2 Article 2 Article 2 Article 2 Article 2 Article 2 Article 2 Article 2 Article 2 Article 2 Article 2 Article 2 Article 2 Article 2 Article 2 Article 2 Article 2 Article 2 Article 2 Article 2 Article 2 Article 2 Article 2 Article 2 Article 2','uploads/articles/image-1652662367.jpg',3,'tester 3','2022-05-15 21:52:47','2022-05-15 21:52:47'),(4,'Article 3','Article 3 Article 3 Article 3 Article 3 Article 3 Article 3 Article 3 Article 3 Article 3 Article 3 Article 3 Article 3 Article 3 Article 3 Article 3 Article 3 Article 3 Article 3 Article 3 Article 3 Article 3 Article 3 Article 3 Article 3 Article 3 Article 3 Article 3 Article 3 Article 3 Article 3 Article 3 Article 3 Article 3 Article 3 Article 3 Article 3 Article 3 Article 3 Article 3 Article 3 Article 3 Article 3','uploads/articles/image-1652662383.jpg',2,'tester 5','2022-05-15 21:53:03','2022-05-15 21:53:03'),(5,'Article 4','Article 4 Article 4 Article 4 Article 4 Article 4 Article 4 Article 4 Article 4 Article 4 Article 4 Article 4 Article 4 Article 4 Article 4 Article 4 Article 4 Article 4 Article 4 Article 4 Article 4 Article 4 Article 4 Article 4 Article 4 Article 4 Article 4 Article 4 Article 4 Article 4 Article 4 Article 4 Article 4 Article 4 Article 4 Article 4','uploads/articles/image-1652662396.jpg',4,'tester 6','2022-05-15 21:53:16','2022-05-15 21:53:16'),(6,'Article 9','Article 9 Article 9 Article 9 Article 9 Article 9 Article 9 Article 9 Article 9 Article 9 Article 9 Article 9 Article 9 Article 9 Article 9 Article 9 Article 9 Article 9 Article 9 Article 9 Article 9 Article 9 Article 9 Article 9 Article 9 Article 9 Article 9 Article 9 Article 9 Article 9 Article 9 Article 9 Article 9 Article 9 Article 9 Article 9 Article 9 Article 9 Article 9 Article 9 Article 9 Article 9 Article 9','uploads/articles/image-1652662413.jpg',0,'tester 4','2022-05-15 21:53:33','2022-05-15 21:53:33'),(7,'Test article','Test article Test articleTest articleTest articleTest articleTest articleTest articleTest articleTest articleTest articleTest articleTest articleTest articleTest articleTest articleTest articleTest articleTest articleTest articleTest articleTest articleTest articleTest articleTest article Test articleTest articleTest articleTest article','uploads/articles/image-1652720427.jpg',4,'dsaassC sd sd','2022-05-16 14:00:27','2022-05-16 14:00:27'),(8,'ghfxghjfgh','Article text','uploads/articles/image-1652724045.jpg',2,'fghfgh','2022-05-16 15:00:45','2022-05-16 15:00:45'),(9,'araer we rwe','Article text','uploads/articles/image-1652725317.jpg',3,'adsfs ef','2022-05-16 15:21:57','2022-05-16 15:21:57'),(10,'afdaf','Article textaf aesf gesg sag sag','uploads/articles/image-1652725406.jpg',4,'sdfsdf sf','2022-05-16 15:23:26','2022-05-16 15:23:26'),(11,'aef aef ads f','Article textASDF asdf asd fAF','uploads/articles/image-1652725571.jpg',1,'AEFD DASF','2022-05-16 15:26:11','2022-05-16 15:26:11'),(12,'asdasd sa','Article textd asd AS Dasd asd aD','uploads/articles/image-1652726315.jpeg',3,'ASD ASD','2022-05-16 15:38:35','2022-05-16 15:38:35'),(13,'ASD aSD','ASD asFD ASD asFD ASD asFD ASD asFD ASD asFD ASD asFD ASD asFD ASD asFD ASD asFD ASD asFD ASD asFD ASD asFD ASD asFD ASD asFD ASD asFD ASD asFD','uploads/articles/image-1652726494.jpg',3,'adf das f','2022-05-16 15:41:34','2022-05-16 15:41:34'),(14,'ASD asD das','Article textaSD aSD asD ADS A SD','uploads/articles/updated/image-1652728236.jpeg',0,'asd asd aSD','2022-05-16 15:42:32','2022-05-16 16:10:36');
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `comments` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `article_id` int unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` VALUES (1,'sdfsdf','sffg@sfgfh.gfhgf','adsfsdfgsdvg sgaer g',0,'2022-05-16 14:40:58','2022-05-16 14:40:58'),(2,'adfdsaf','dasfdsf@addfdf.dfdf','sdfsdf sef gsg arsrg sd gsf g',5,'2022-05-16 14:45:35','2022-05-16 14:45:35'),(3,'dfd','pr@aeproto.com','adas fsadf',14,'2022-05-16 15:48:57','2022-05-16 15:48:57'),(4,'asdas','adfdgf@sdfsdf.sdf','asd asd asd AS',14,'2022-05-16 15:49:52','2022-05-16 15:49:52'),(5,'sfsdaf sdaf','asdfsdf@sdfsdf.sdf','asdf asf werf wetr',14,'2022-05-16 15:53:02','2022-05-16 15:53:02'),(6,'sfsdaf sdaf','asdfsdf@sdfsdf.sdf','asdf asf werf wetr',14,'2022-05-16 15:53:03','2022-05-16 15:53:03'),(7,'sfsdaf sdaf','asdfsdf@sdfsdf.sdf','asdf asf werf wetr',14,'2022-05-16 15:53:06','2022-05-16 15:53:06'),(8,'ygCIeX','pr@artrtert.com','fvhjrts fghfe bergb',1,'2022-05-16 16:38:09','2022-05-16 16:38:09'),(9,'dfdaf','dfdsf@adsfsd.dsf','sfsdfsdf sdafSDF  F',1,'2022-05-16 16:40:07','2022-05-16 16:40:07'),(10,'dfdsf sd','sfsdfW@dfsdg.sdf','sdfsdfsdf',1,'2022-05-16 16:59:08','2022-05-16 16:59:08');
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2022_05_15_201104_create_articles_table',1),(5,'2022_05_15_201347_create_comments_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-05-16 23:09:12
