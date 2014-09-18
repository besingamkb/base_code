/*
SQLyog Enterprise - MySQL GUI v8.02 RC
MySQL - 5.6.12-log : Database - base_code_login
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`base_code_login` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `base_code_login`;

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `ulevel` int(10) DEFAULT NULL,
  `is_active` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`id`,`username`,`password`,`ulevel`,`is_active`) values (1,'a','0cc175b9c0f1b6a831c399e269772661',1,1),(2,'admin','5f4dcc3b5aa765d61d8327deb882cf99',1,1),(3,'mbesinga','5f4dcc3b5aa765d61d8327deb882cf99',1,1),(4,'iamsjsedo','4b7adc6c602eab784b4d6f5e54099e95',1,1),(5,'besingamk','5f4dcc3b5aa765d61d8327deb882cf99',1,1),(6,'nazeryow','83c8e038a61a215af249af7cfffd8e6e',1,1),(7,'st_mokomoko','f4bed1244bbe29f17de304d07740a41c',1,1),(8,'sabinana','5740d3147bba1bad7c1bd31943f66e55',1,1),(9,'test1','5f4dcc3b5aa765d61d8327deb882cf99',1,1),(10,'test2','5f4dcc3b5aa765d61d8327deb882cf99',1,1),(11,'test3','5f4dcc3b5aa765d61d8327deb882cf99',1,1),(12,'test4','5f4dcc3b5aa765d61d8327deb882cf99',1,1),(13,'test5','5f4dcc3b5aa765d61d8327deb882cf99',1,1),(14,'test6','5f4dcc3b5aa765d61d8327deb882cf99',1,1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
