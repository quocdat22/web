-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
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


-- Dumping database structure for webj2
CREATE DATABASE IF NOT EXISTS `webj2` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `webj2`;

-- Dumping structure for table webj2.lop
CREATE TABLE IF NOT EXISTS `lop` (
  `ma` int NOT NULL AUTO_INCREMENT,
  `ten` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ho` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ma`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table webj2.lop: ~8 rows (approximately)
INSERT INTO `lop` (`ma`, `ten`, `ho`) VALUES
	(1, 'cong nghe thong tin', 'dat'),
	(2, 'cong nghiep thuc pham', '1'),
	(3, 'bao mat thong tin', '1'),
	(5, 'tai chinh ngan hang', '1'),
	(8, 'buu chinh', 'vien thong'),
	(9, 'nong lam', 'ngu nghiep'),
	(13, 'ngon ngu anh', ''),
	(15, 'cong thuong', '');

-- Dumping structure for table webj2.sinhvien
CREATE TABLE IF NOT EXISTS `sinhvien` (
  `ma` int NOT NULL AUTO_INCREMENT,
  `ten` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lop` int NOT NULL,
  `ho` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ma`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table webj2.sinhvien: ~6 rows (approximately)
INSERT INTO `sinhvien` (`ma`, `ten`, `lop`, `ho`) VALUES
	(5, 'dat awp', 6, NULL),
	(6, 'dat', 2, 'hoang'),
	(7, 'le hoang', 5, NULL),
	(8, 'quoc dat hoang le', 3, NULL),
	(9, 'p90 d', 5, NULL),
	(10, 'hoang dat ak', 2, NULL),
	(11, 'dat', 15, 'dat'),
	(12, 'le', 5, 'dat');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
