-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.24-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.5.0.6677
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for tomato220
DROP DATABASE IF EXISTS `tomato220`;
CREATE DATABASE IF NOT EXISTS `tomato220` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `tomato220`;

-- Dumping structure for table tomato220.category
DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(7) NOT NULL,
  `category` varchar(100) DEFAULT NULL,
  `favorite` tinyint(1) NOT NULL DEFAULT 0,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.

-- Dumping structure for table tomato220.goals
DROP TABLE IF EXISTS `goals`;
CREATE TABLE IF NOT EXISTS `goals` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `categoryid` int(11) NOT NULL,
  `catname` varchar(50) NOT NULL,
  `hours` int(11) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `timeperiod` enum('day','week','month') NOT NULL DEFAULT 'week',
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=164 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.

-- Dumping structure for table tomato220.keywords
DROP TABLE IF EXISTS `keywords`;
CREATE TABLE IF NOT EXISTS `keywords` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(7) NOT NULL,
  `keyword` varchar(100) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=288 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.

-- Dumping structure for table tomato220.link_cat_to_keywords
DROP TABLE IF EXISTS `link_cat_to_keywords`;
CREATE TABLE IF NOT EXISTS `link_cat_to_keywords` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(7) NOT NULL,
  `cat_id` int(6) DEFAULT NULL,
  `keyword_id` int(6) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=716 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.

-- Dumping structure for table tomato220.link_tom_to_keywords
DROP TABLE IF EXISTS `link_tom_to_keywords`;
CREATE TABLE IF NOT EXISTS `link_tom_to_keywords` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(7) NOT NULL DEFAULT 1001,
  `tom_id` int(6) DEFAULT NULL,
  `keyword_id` int(6) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6417 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.

-- Dumping structure for table tomato220.tomato
DROP TABLE IF EXISTS `tomato`;
CREATE TABLE IF NOT EXISTS `tomato` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(7) NOT NULL DEFAULT 1001,
  `title` varchar(100) DEFAULT NULL,
  `tomdate` date DEFAULT NULL,
  `datestring` text DEFAULT NULL,
  `timestamp` varchar(10) NOT NULL,
  `weekdayno` int(1) NOT NULL,
  `tomweek` varchar(10) DEFAULT NULL,
  `count` int(5) NOT NULL DEFAULT 1,
  `category` int(11) DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `URL` varchar(200) DEFAULT 'URL',
  `nowstamp` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3330 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.

-- Dumping structure for table tomato220.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(32) NOT NULL,
  `lastname` varchar(32) DEFAULT NULL,
  `email` varchar(64) NOT NULL,
  `contact_number` varchar(64) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `password` varchar(512) NOT NULL,
  `user_ip` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `access_level` varchar(16) NOT NULL,
  `access_code` text NOT NULL,
  `status` int(11) NOT NULL COMMENT '0=pending,1=confirmed',
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COMMENT='admin and customer users';

-- Data exporting was unselected.

-- Dumping structure for table tomato220.week
DROP TABLE IF EXISTS `week`;
CREATE TABLE IF NOT EXISTS `week` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(7) NOT NULL,
  `week` varchar(10) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
