/*
SQLyog Community v13.1.6 (64 bit)
MySQL - 8.0.18 : Database - spa
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

/*Table structure for table `pruzalac` */

DROP TABLE IF EXISTS `pruzalac`;

CREATE TABLE `pruzalac` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `imePrezime` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `pruzalac` */

insert  into `pruzalac`(`id`,`imePrezime`) values 
(1,'Marija Ilić'),
(2,'Petra Petrović'),
(3,'Marina Marinković'),
(4,'Jana Janković');


/*Table structure for table `usluga` */

DROP TABLE IF EXISTS `usluga`;

CREATE TABLE `usluga` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `naziv` varchar(30) DEFAULT NULL,
  `pruzalac` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pruzalac` (`pruzalac`),
  CONSTRAINT `usluga_pruzalac_fk` FOREIGN KEY (`pruzalac`) REFERENCES `pruzalac` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `usluga` */

insert  into `usluga`(`id`,`naziv`,`pruzalac`) values 
(1,'Feniranje',1),
(2,'Farbanje',1),
(3,'Šminkanje',3),
(4,'Masaža',2),
(5,'Manikir',4),
(6,'Pedikir',4);

/*Table structure for table `termin` */

DROP TABLE IF EXISTS `termin`;

CREATE TABLE `termin` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `usluga` bigint(20) NOT NULL,
  `klijent` varchar(50) DEFAULT NULL,
  `datum` date DEFAULT NULL,
  `prostorija` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`,`usluga`),
  KEY `usluga` (`usluga`),
  CONSTRAINT `termin_usluga_fk` FOREIGN KEY (`usluga`) REFERENCES `usluga` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `termin` */

insert  into `termin`(`id`,`usluga`,`klijent`,`datum`,`prostorija`) values 
(1,2,'Ana Marković','2022-02-14',1),
(2,3,'Marija Ilić','2022-01-16',3),
(3,5,'Milica Petrović','2022-02-22',5),
(4,4,'Ivana Ivanović','2022-01-30',2),
(5,3,'Jovana Jovanović','2022-03-15',4);



/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
