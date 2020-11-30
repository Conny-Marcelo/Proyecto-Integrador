-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.1.45-community


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema pizzeria
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ pizzeria;
USE pizzeria;

--
-- Table structure for table `pizzeria`.`entrar`
--

DROP TABLE IF EXISTS `entrar`;
CREATE TABLE `entrar` (
  `nombre_usuario` varchar(40) NOT NULL,
  `passwd` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`nombre_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pizzeria`.`entrar`
--

/*!40000 ALTER TABLE `entrar` DISABLE KEYS */;
INSERT INTO `entrar` (`nombre_usuario`,`passwd`) VALUES 
 ('admin','123'),
 ('Benjas','123');
/*!40000 ALTER TABLE `entrar` ENABLE KEYS */;


--
-- Table structure for table `pizzeria`.`pedido`
--

DROP TABLE IF EXISTS `pedido`;
CREATE TABLE `pedido` (
  `id_pedido` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `cuantas` int(11) DEFAULT NULL,
  `tamano` varchar(45) DEFAULT NULL,
  `domicilio` varchar(45) DEFAULT NULL,
  `num_tel` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id_pedido`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pizzeria`.`pedido`
--

/*!40000 ALTER TABLE `pedido` DISABLE KEYS */;
INSERT INTO `pedido` (`id_pedido`,`nombre`,`cuantas`,`tamano`,`domicilio`,`num_tel`) VALUES 
 (4,'4 quesos',4,'1','Villaviva #12',44351489);
/*!40000 ALTER TABLE `pedido` ENABLE KEYS */;


--
-- Table structure for table `pizzeria`.`pizzas`
--

DROP TABLE IF EXISTS `pizzas`;
CREATE TABLE `pizzas` (
  `id_pizza` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `tipo` varchar(45) DEFAULT NULL,
  `precio` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_pizza`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pizzeria`.`pizzas`
--

/*!40000 ALTER TABLE `pizzas` DISABLE KEYS */;
INSERT INTO `pizzas` (`id_pizza`,`nombre`,`tipo`,`precio`) VALUES 
 (1,'Mexicana','chica',150),
 (2,'Mexicana','mediana',175),
 (3,'Mexicana','grande',200),
 (4,'Cuatro Quesos','chica',175),
 (5,'Cuatro Quesos','mediana',200),
 (6,'Cuatro Quesos','grande',250),
 (7,'Hawaiana','chica',1500),
 (8,'Hawaiana','mediana',175),
 (9,'Hawaiana','grande',200),
 (10,'Pepperoni Especial','chica',150),
 (11,'Pepperoni Especial','mediana',175),
 (12,'Pepperoni Especial','grande',200),
 (13,'Chiken Hawaiana','chica',150),
 (14,'Chiken Hawaiana','mediana',175),
 (15,'Chiken Hawaiana','grande',200),
 (16,'Carnes Frias','chica',150),
 (17,'Carnes Frias','mediana',175),
 (18,'Carnes Frias','grande',200),
 (19,'Vegetariana','chica',150),
 (20,'Vegetariana','mediana',175),
 (21,'Vegetariana','grande',200),
 (22,'Super','chica',150),
 (23,'Super','mediana',175),
 (24,'Super','grande',200);
/*!40000 ALTER TABLE `pizzas` ENABLE KEYS */;


--
-- Table structure for table `pizzeria`.`registrar`
--

DROP TABLE IF EXISTS `registrar`;
CREATE TABLE `registrar` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(60) DEFAULT NULL,
  `apellido_pat` varchar(45) DEFAULT NULL,
  `apellido_mat` varchar(45) DEFAULT NULL,
  `nombre_usuario` varchar(40) DEFAULT NULL,
  `passwd` varchar(45) DEFAULT NULL,
  `confirmar_passwd` varchar(45) DEFAULT NULL,
  `fecha_nac` date DEFAULT NULL,
  `domicilio` varchar(50) DEFAULT NULL,
  `edad` int(2) DEFAULT NULL,
  `sexo` varchar(20) DEFAULT NULL,
  `correo` varchar(40) DEFAULT NULL,
  `num_tel` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pizzeria`.`registrar`
--

/*!40000 ALTER TABLE `registrar` DISABLE KEYS */;
INSERT INTO `registrar` (`id_usuario`,`nombre`,`apellido_pat`,`apellido_mat`,`nombre_usuario`,`passwd`,`confirmar_passwd`,`fecha_nac`,`domicilio`,`edad`,`sexo`,`correo`,`num_tel`) VALUES 
 (13,'Benjamin','Rivera','Perez','Benjas','123','123','1998-06-05','mangana #12',20,'Masculino','benji@gmail.com',44351489);
/*!40000 ALTER TABLE `registrar` ENABLE KEYS */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
