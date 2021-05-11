CREATE DATABASE /*!32312 IF NOT EXISTS*/`agileops` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */;

USE `agileops`;

DROP TABLE IF EXISTS `suma`;

CREATE TABLE `suma` (
  `sumando1` DECIMAL(10,2),
  `sumando2` DECIMAL(10,2),
  `resultado` DECIMAL(10,2)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


ALTER USER 'root'@'%' IDENTIFIED WITH mysql_native_password BY 'password';
flush privileges;
