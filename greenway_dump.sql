-- MySQL dump 10.13  Distrib 5.7.25, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: greenway_db
-- ------------------------------------------------------
-- Server version	5.7.25-0ubuntu0.18.04.2

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
-- Table structure for table `clients`
--

DROP TABLE IF EXISTS `clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clients` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `fio` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `passport` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `target` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clients`
--

LOCK TABLES `clients` WRITE;
/*!40000 ALTER TABLE `clients` DISABLE KEYS */;
INSERT INTO `clients` VALUES (1,'Чебуречный автомат','1999-12-12','1223 123123','89993331155','поселок Чебуреков, улица бигмаков дом www','kopkop@mail.ru','client'),(2,'ÐšÐ°Ñ€Ñ‚Ð¾ÑˆÐºÐ¸Ð½ Ð¤ÐµÐ´Ð¾Ñ€ Ð¡Ñ‚ÐµÐ¿Ð°Ð½ÐµÐ½ÐºÐ¾Ð²Ð¸Ñ‡','2014-01-01','','1212 546456','Ð³. Ð£Ð·Ð±ÐµÐºÐ¾Ð² ','virtuoz_@bk.ru','prodavec'),(3,'Kartoshkin Fedot','1999-12-29','','89991232211','Gorod kakoy to','virtuoz_@bk.ru','razvitie'),(4,'Hdjfdjsfjdsfh JJhhd','2006-03-17','','89991112233','Gorod','jasdjasjd@sdsd.com','client'),(5,'Hdjfdjsfjdsfh JJhhd','2019-12-01','12323123231','123123123123','Gorordskoy','dfsdf@dsfds.com','razvitie'),(6,'ÐšÐ°Ñ€Ñ‚Ð¾ÑˆÐºÐ¸Ð½ Ð¤ÐµÐ´Ð¾Ñ€ Ð¡Ñ‚ÐµÐ¿Ð°Ð½ÐµÐ½ÐºÐ¾Ð²Ð¸Ñ‡','2019-01-01','12323123231','89991112233','Ð³. Ð£Ð·Ð±ÐµÐºÐ¾Ð² ','virtuoz_@bk.ru','prodavec'),(7,'ÐšÐ°Ñ€Ñ‚Ð¾ÑˆÐºÐ¸Ð½ Ð¤ÐµÐ´Ð¾Ñ€ Ð¡Ñ‚ÐµÐ¿Ð°Ð½ÐµÐ½ÐºÐ¾Ð²Ð¸Ñ‡','2017-12-31','12323123231','89991112233','Ð³. Ð£Ð·Ð±ÐµÐºÐ¾Ð² ','virtuoz_@bk.ru','prodavec'),(8,'Картошкин Федор Степаненкович','2018-12-30','12323123231','12323123231','г. Узбеков ','virtuoz_@bk.ru','prodavec'),(9,'Лепёха Михаил Федорович','1932-03-27','1212 333333','+79124441299','г. Красноярск, ул. Земельников д.33, кв. 34234','','razvitie'),(10,'Какойто Там Ктотович','1900-11-30','12323123231','89991112233','Городец большой, улица Улище, дом Домище квартира квартирище','hdjkfdfg@fdf.ru','client'),(11,'РРррррррр Роман Ромович','1976-10-30','1243 343432','889998283283','г. Красноярск, ул. Уличная 32-32','dfdfdg@bk.ru','razvitie');
/*!40000 ALTER TABLE `clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `login` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','admin'),(2,'virtuoz','12345678');
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

-- Dump completed on 2019-01-28 21:13:06
