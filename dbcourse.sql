-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for dbcourse
CREATE DATABASE IF NOT EXISTS `dbcourse` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `dbcourse`;

-- Dumping structure for table dbcourse.tm_course
CREATE TABLE IF NOT EXISTS `tm_course` (
  `id` int(5) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `course_banner` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `course_title` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `course_description` text COLLATE utf8mb4_general_ci NOT NULL,
  `course_preview` varchar(64) COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `course_price` varchar(64) COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `course_discount` varchar(64) COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `course_status` varchar(2) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '0' COMMENT '0=Non Active,1=Active',
  `course_create` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table dbcourse.tm_course: ~1 rows (approximately)
INSERT INTO `tm_course` (`id`, `course_banner`, `course_title`, `course_description`, `course_preview`, `course_price`, `course_discount`, `course_status`, `course_create`) VALUES
	(00001, '7249866ff5b98f6a772b7f89eceb011f.png', 'Membangun website foodapp + integrasi API', 'course app detaill', 'ReulLR8QuYE', '50000', '10', '0', '2024-05-23 08:45:40'),
	(00002, 'ee061fec1c95b9f358d0d14f27fc8dad.jpg', 'PHP untuk pemula - Project TODOLIST APP', 'kelas untuk membuat project todolist-APP dengan PHP', '', '75000', '10', '0', '2024-05-25 09:32:08');

-- Dumping structure for table dbcourse.tm_course_detail
CREATE TABLE IF NOT EXISTS `tm_course_detail` (
  `id` int NOT NULL AUTO_INCREMENT,
  `course_id` int NOT NULL,
  `course_detail_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `course_detail_duration` varchar(8) DEFAULT NULL,
  `course_detail_video_code` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `course_detail_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `course_detail_slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `course_detail_status` tinyint NOT NULL DEFAULT '0' COMMENT '0=pending,1=unpublish,2=publish',
  `course_detail_created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table dbcourse.tm_course_detail: ~1 rows (approximately)
INSERT INTO `tm_course_detail` (`id`, `course_id`, `course_detail_title`, `course_detail_duration`, `course_detail_video_code`, `course_detail_description`, `course_detail_slug`, `course_detail_status`, `course_detail_created`) VALUES
	(1, 1, 'intro', '00:02:12', 'ReulLR8QuYE', 'berikut adalah preview dari kelas yang akan kalian ikuti.', NULL, 0, '2024-05-25 09:11:45'),
	(2, 1, 'setup code editor', '00:00:37', 'odnYozQ01U0', 'pada kelas ini kalian akan belajar bagaimana untuk melakukan setup pada code editor yang akan kalian gunakan.', NULL, 0, '2024-05-25 09:17:43');

-- Dumping structure for table dbcourse.tm_course_student
CREATE TABLE IF NOT EXISTS `tm_course_student` (
  `id` int NOT NULL AUTO_INCREMENT,
  `student_id` int NOT NULL,
  `course_id` int NOT NULL,
  `course_detail_id` int NOT NULL,
  `course_status` int NOT NULL DEFAULT '0' COMMENT '0: Pending;1:Done',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table dbcourse.tm_course_student: ~0 rows (approximately)

-- Dumping structure for table dbcourse.tm_student
CREATE TABLE IF NOT EXISTS `tm_student` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fullname` varchar(32) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL,
  `is_status` int NOT NULL DEFAULT '0' COMMENT '0:Pending;1:Verify',
  `verified_at` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table dbcourse.tm_student: ~0 rows (approximately)

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
