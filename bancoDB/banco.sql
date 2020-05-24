-- MySQL dump 10.13  Distrib 8.0.18, for macos10.14 (x86_64)
--
-- Host: 127.0.0.1    Database: operacoes
-- ------------------------------------------------------
-- Server version	5.7.29

create database operacoes;

use operacoes;

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
-- Table structure for table `cargos`
--

DROP TABLE IF EXISTS `cargos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cargos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cargo` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cargos`
--

LOCK TABLES `cargos` WRITE;
/*!40000 ALTER TABLE `cargos` DISABLE KEYS */;
INSERT INTO `cargos` VALUES (1,'analista'),(2,'diretor');
/*!40000 ALTER TABLE `cargos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `centrocusto`
--

DROP TABLE IF EXISTS `centrocusto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `centrocusto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `centrocusto` varchar(40) NOT NULL,
  `descentrocusto` varchar(300) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `centrocusto_idx_desc` (`descentrocusto`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `centrocusto`
--

LOCK TABLES `centrocusto` WRITE;
/*!40000 ALTER TABLE `centrocusto` DISABLE KEYS */;
INSERT INTO `centrocusto` VALUES (1,'Digital','parte de ecommerce');
/*!40000 ALTER TABLE `centrocusto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `chamados`
--

DROP TABLE IF EXISTS `chamados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `chamados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `chamado` varchar(20) NOT NULL,
  `urlchamado` varchar(300) NOT NULL,
  `plantao_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `chamados_plantao` (`plantao_id`),
  CONSTRAINT `chamados_plantao` FOREIGN KEY (`plantao_id`) REFERENCES `plantao` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chamados`
--

LOCK TABLES `chamados` WRITE;
/*!40000 ALTER TABLE `chamados` DISABLE KEYS */;
/*!40000 ALTER TABLE `chamados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `colaborador`
--

DROP TABLE IF EXISTS `colaborador`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `colaborador` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `macricula` int(11) NOT NULL,
  `data_adm` date NOT NULL,
  `telefone` varchar(12) DEFAULT NULL,
  `celular` varchar(12) DEFAULT NULL,
  `email_parti` varchar(255) DEFAULT NULL,
  `empresa_id` int(11) NOT NULL,
  `estabelecimento_id` int(11) NOT NULL,
  `centrocusto_id` int(11) NOT NULL,
  `cargos_id` int(11) NOT NULL,
  `squad_id` int(11) NOT NULL,
  `tribo_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `colaborador_cargos` (`cargos_id`),
  KEY `colaborador_centrocusto` (`centrocusto_id`),
  KEY `colaborador_empresa` (`empresa_id`),
  KEY `colaborador_estabelecimento` (`estabelecimento_id`),
  KEY `colaborador_squad` (`squad_id`),
  KEY `colaborador_tribo` (`tribo_id`),
  KEY `colaborador_users` (`users_id`),
  CONSTRAINT `colaborador_cargos` FOREIGN KEY (`cargos_id`) REFERENCES `cargos` (`id`),
  CONSTRAINT `colaborador_centrocusto` FOREIGN KEY (`centrocusto_id`) REFERENCES `centrocusto` (`id`),
  CONSTRAINT `colaborador_empresa` FOREIGN KEY (`empresa_id`) REFERENCES `empresa` (`id`),
  CONSTRAINT `colaborador_estabelecimento` FOREIGN KEY (`estabelecimento_id`) REFERENCES `estabelecimento` (`id`),
  CONSTRAINT `colaborador_squad` FOREIGN KEY (`squad_id`) REFERENCES `squad` (`id`),
  CONSTRAINT `colaborador_tribo` FOREIGN KEY (`tribo_id`) REFERENCES `tribo` (`id`),
  CONSTRAINT `colaborador_users` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `colaborador`
--

LOCK TABLES `colaborador` WRITE;
/*!40000 ALTER TABLE `colaborador` DISABLE KEYS */;
INSERT INTO `colaborador` VALUES (1,4010225,'2020-04-28','11945380589','11945380589','rafael.filg@mail.com',1,1,1,1,1,2,1),(3,4010332,'2020-05-19','11945380589','11945380589','email@email.com',1,1,1,1,2,2,2);
/*!40000 ALTER TABLE `colaborador` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `empresa`
--

DROP TABLE IF EXISTS `empresa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `empresa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `empresa` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empresa`
--

LOCK TABLES `empresa` WRITE;
/*!40000 ALTER TABLE `empresa` DISABLE KEYS */;
INSERT INTO `empresa` VALUES (1,'rchlo');
/*!40000 ALTER TABLE `empresa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary view structure for view `escala_plantao`
--

DROP TABLE IF EXISTS `escala_plantao`;
/*!50001 DROP VIEW IF EXISTS `escala_plantao`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `escala_plantao` AS SELECT 
 1 AS `id`,
 1 AS `name`,
 1 AS `name_id`,
 1 AS `squad`,
 1 AS `squad_id`,
 1 AS `datainicio`,
 1 AS `datafim`,
 1 AS `email`,
 1 AS `celular`,
 1 AS `obs`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `estabelecimento`
--

DROP TABLE IF EXISTS `estabelecimento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `estabelecimento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `desc_estabelecimento` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estabelecimento`
--

LOCK TABLES `estabelecimento` WRITE;
/*!40000 ALTER TABLE `estabelecimento` DISABLE KEYS */;
INSERT INTO `estabelecimento` VALUES (1,'riachuelo');
/*!40000 ALTER TABLE `estabelecimento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `plantao`
--

DROP TABLE IF EXISTS `plantao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `plantao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `datainicio` datetime NOT NULL,
  `datafim` datetime DEFAULT NULL,
  `obs` varchar(500) DEFAULT NULL,
  `colaborador_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `plantao_colaborador` (`colaborador_id`),
  CONSTRAINT `plantao_colaborador` FOREIGN KEY (`colaborador_id`) REFERENCES `colaborador` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `plantao`
--

LOCK TABLES `plantao` WRITE;
/*!40000 ALTER TABLE `plantao` DISABLE KEYS */;
INSERT INTO `plantao` VALUES (1,'2020-05-18 20:00:00','2020-05-24 20:00:00','ligar no pessoal',1),(4,'2020-05-30 18:00:00','2020-06-02 09:00:00','ligar no meu telefone 11999999999',3);
/*!40000 ALTER TABLE `plantao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `squad`
--

DROP TABLE IF EXISTS `squad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `squad` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `squad` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `squad`
--

LOCK TABLES `squad` WRITE;
/*!40000 ALTER TABLE `squad` DISABLE KEYS */;
INSERT INTO `squad` VALUES (1,'scheduler'),(2,'data'),(3,'ultime');
/*!40000 ALTER TABLE `squad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tribo`
--

DROP TABLE IF EXISTS `tribo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tribo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tribonome` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tribo`
--

LOCK TABLES `tribo` WRITE;
/*!40000 ALTER TABLE `tribo` DISABLE KEYS */;
INSERT INTO `tribo` VALUES (2,'Dados');
/*!40000 ALTER TABLE `tribo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `adm` int(11) NOT NULL DEFAULT '0',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `users_idx_nome` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Rafael Filgueiras','rafael.filgue@gmail.com','$2y$10$wRPvJM4tXyzOMIk5dt7h4e2OSBfemSvfjdJewYf8OuXRRC.A50pzK',3,NULL,NULL,'2020-04-21 15:16:46','2020-04-21 15:16:46'),(2,'Valesca','valesca@mail.com','$2y$10$57mnPgbkBjR7SqV0x4HrzOitAJudgrmU0dVdGIE8A6Lu77EDqTgyu',1,NULL,NULL,NULL,NULL),(3,'Iracema F','iracema@mail.com','$2y$10$dAdq9ATIewGYSr7dvCFDN.fj4oH88FB38RwZEFBxSX/HFJa0f92o6',0,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Final view structure for view `escala_plantao`
--

/*!50001 DROP VIEW IF EXISTS `escala_plantao`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`%` SQL SECURITY DEFINER */
/*!50001 VIEW `escala_plantao` AS (select `t`.`id` AS `id`,`u`.`name` AS `name`,`c`.`users_id` AS `name_id`,`s`.`squad` AS `squad`,`c`.`squad_id` AS `squad_id`,`t`.`datainicio` AS `datainicio`,`t`.`datafim` AS `datafim`,`u`.`email` AS `email`,`c`.`celular` AS `celular`,`t`.`obs` AS `obs` from (((`plantao` `t` join `colaborador` `c` on((`t`.`colaborador_id` = `c`.`id`))) left join `users` `u` on((`c`.`users_id` = `u`.`id`))) left join `squad` `s` on((`c`.`squad_id` = `s`.`id`))) order by `t`.`datainicio`) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-05-24 14:42:38
