CREATE DATABASE IF NOT EXISTS projeto;

USE projeto;

-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: projeto
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.28-MariaDB

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
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(40) NOT NULL,
  `nome` varchar(80) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `dataNasc` varchar(10) NOT NULL,
  `genero` varchar(10) NOT NULL,
  `nomeM` varchar(80) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `cel` varchar(20) NOT NULL,
  `endereco` varchar(200) NOT NULL,
  `senha` varchar(200) NOT NULL,
  `cep` varchar(45) NOT NULL,
  `perfil` int(1) NOT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'Master','Usuario master do sistema','183.233.927-06','24/09/2001','Masculino','Luciana Dib Lopes','(+55)11-11111111','(+55)11-11111111','Rua Bangu, 206','1f3ce40415a2081fa3eee75fc39fff8e56c22270d1a978a7249b592dcebd20b4','11111-111',2),(5,'AbCdEf','NomeA SobrenomeA','866.329.287-22','21/06/2005','Masculino','Luciana Dib Lopes','(+55)21-96924427','(+55)21-96924427','Rua Bangu 206','1f3ce40415a2081fa3eee75fc39fff8e56c22270d1a978a7249b592dcebd20b4','11111-111',1),(6,'GhIjKl','NomeB SobrenomeB','866.329.287-22','21/06/2005','Masculino','Luciana Dib Lopes','(+55)21-96924427','(+55)21-96924427','Rua Bangu 206','1f3ce40415a2081fa3eee75fc39fff8e56c22270d1a978a7249b592dcebd20b4','11111-111',1),(7,'MnOpQr','NomeC SobrenomeC','866.329.287-22','21/06/2005','Masculino','Luciana Dib Lopes','(+55)21-96924427','(+55)21-96924427','Rua Bangu 206','1f3ce40415a2081fa3eee75fc39fff8e56c22270d1a978a7249b592dcebd20b4','11111-111',1),(8,'StUvWx','NomeD SobrenomeD','866.329.287-22','21/06/2005','Masculino','Luciana Dib Lopes','(+55)21-96924427','(+55)21-96924427','Rua Bangu 206','1f3ce40415a2081fa3eee75fc39fff8e56c22270d1a978a7249b592dcebd20b4','11111-111',1),(9,'YzAbCd','NomeE SobrenomeE','866.329.287-22','21/06/2005','Masculino','Luciana Dib Lopes','(+55)21-96924427','(+55)21-96924427','Rua Bangu 206','1f3ce40415a2081fa3eee75fc39fff8e56c22270d1a978a7249b592dcebd20b4','11111-111',1),(10,'EfGhIj','NomeF SobrenomeF','866.329.287-22','21/06/2005','Masculino','Luciana Dib Lopes','(+55)21-96924427','(+55)21-96924427','Rua Bangu 206','1f3ce40415a2081fa3eee75fc39fff8e56c22270d1a978a7249b592dcebd20b4','11111-111',1),(11,'KlMnOp','NomeG SobrenomeG','866.329.287-22','21/06/2005','Masculino','Luciana Dib Lopes','(+55)21-96924427','(+55)21-96924427','Rua Bangu 206','1f3ce40415a2081fa3eee75fc39fff8e56c22270d1a978a7249b592dcebd20b4','11111-111',1),(12,'QrStUv','NomeH SobrenomeH','866.329.287-22','21/06/2005','Masculino','Luciana Dib Lopes','(+55)21-96924427','(+55)21-96924427','Rua Bangu 206','1f3ce40415a2081fa3eee75fc39fff8e56c22270d1a978a7249b592dcebd20b4','11111-111',1),(13,'WxYzAb','NomeI SobrenomeI','866.329.287-22','21/06/2005','Masculino','Luciana Dib Lopes','(+55)21-96924427','(+55)21-96924427','Rua Bangu 206','1f3ce40415a2081fa3eee75fc39fff8e56c22270d1a978a7249b592dcebd20b4','11111-111',1),(14,'CdEfGh','NomeJ SobrenomeJ','866.329.287-22','21/06/2005','Masculino','Luciana Dib Lopes','(+55)21-96924427','(+55)21-96924427','Rua Bangu 206','1f3ce40415a2081fa3eee75fc39fff8e56c22270d1a978a7249b592dcebd20b4','11111-111',1),(15,'MnOpQr','NomeC SobrenomeC','866.329.287-22','21/06/2005','Masculino','Luciana Dib Lopes','(+55)21-96924427','(+55)21-96924427','Rua Bangu 206','1f3ce40415a2081fa3eee75fc39fff8e56c22270d1a978a7249b592dcebd20b4','11111-111',1),(16,'StUvWx','NomeD SobrenomeD','866.329.287-22','21/06/2005','Masculino','Luciana Dib Lopes','(+55)21-96924427','(+55)21-96924427','Rua Bangu 206','1f3ce40415a2081fa3eee75fc39fff8e56c22270d1a978a7249b592dcebd20b4','11111-111',1),(17,'YzAbCd','NomeE SobrenomeE','866.329.287-22','21/06/2005','Masculino','Luciana Dib Lopes','(+55)21-96924427','(+55)21-96924427','Rua Bangu 206','1f3ce40415a2081fa3eee75fc39fff8e56c22270d1a978a7249b592dcebd20b4','11111-111',1),(18,'EfGhIj','NomeF SobrenomeF','866.329.287-22','21/06/2005','Masculino','Luciana Dib Lopes','(+55)21-96924427','(+55)21-96924427','Rua Bangu 206','1f3ce40415a2081fa3eee75fc39fff8e56c22270d1a978a7249b592dcebd20b4','11111-111',1),(19,'KlMnOp','NomeG SobrenomeG','866.329.287-22','21/06/2005','Masculino','Luciana Dib Lopes','(+55)21-96924427','(+55)21-96924427','Rua Bangu 206','1f3ce40415a2081fa3eee75fc39fff8e56c22270d1a978a7249b592dcebd20b4','11111-111',1),(20,'QrStUv','NomeH SobrenomeH','866.329.287-22','21/06/2005','Masculino','Luciana Dib Lopes','(+55)21-96924427','(+55)21-96924427','Rua Bangu 206','1f3ce40415a2081fa3eee75fc39fff8e56c22270d1a978a7249b592dcebd20b4','11111-111',1),(21,'WxYzAb','NomeI SobrenomeI','866.329.287-22','21/06/2005','Masculino','Luciana Dib Lopes','(+55)21-96924427','(+55)21-96924427','Rua Bangu 206','1f3ce40415a2081fa3eee75fc39fff8e56c22270d1a978a7249b592dcebd20b4','11111-111',1),(22,'CdEfGh','NomeJ SobrenomeJ','866.329.287-22','21/06/2005','Masculino','Luciana Dib Lopes','(+55)21-96924427','(+55)21-96924427','Rua Bangu 206','1f3ce40415a2081fa3eee75fc39fff8e56c22270d1a978a7249b592dcebd20b4','11111-111',1),(23,'IjKlMn','NomeK SobrenomeK','866.329.287-22','21/06/2005','Masculino','Luciana Dib Lopes','(+55)21-96924427','(+55)21-96924427','Rua Bangu 206','1f3ce40415a2081fa3eee75fc39fff8e56c22270d1a978a7249b592dcebd20b4','11111-111',1),(25,'Osiris','Osiris da Silva Ribeiro','183.233.927-06','21/06/2005','Masculino','Luciana Dib Lopes','(+55)11-11111111','(+55)11-11111111','Rua Bangu, 206','1f3ce40415a2081fa3eee75fc39fff8e56c22270d1a978a7249b592dcebd20b4','11111-111',1),(26,'Magnaa','qsasdasdasddasasdasd','183.233.927-06','21/06/2000','Outro','sedasdasddasasdasd','(+55)23-12312311','(+55)12-31322131','asdasdasdasdasd','1f3ce40415a2081fa3eee75fc39fff8e56c22270d1a978a7249b592dcebd20b4','12123-231',1),(27,'Comumm','qsdasdasdasasasddasasd','183.233.927-06','12/12/2001','Masculino','asasdawasddsaasd','(+55)11-11111111','(+55)11-11111111','asdaasdasd','1f3ce40415a2081fa3eee75fc39fff8e56c22270d1a978a7249b592dcebd20b4','11111-111',1);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-11-26 15:31:16
