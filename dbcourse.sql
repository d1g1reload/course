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

-- Dumping data for table dbcourse.tm_course: ~1 rows (approximately)
INSERT INTO `tm_course` (`id`, `course_banner`, `course_title`, `course_description`, `course_preview`, `course_price`, `course_discount`, `course_status`, `course_create`) VALUES
	(00001, '7249866ff5b98f6a772b7f89eceb011f.png', 'Membangun website foodapp + integrasi API', 'course app detaill', 'ReulLR8QuYE', '50000', '10', '0', '2024-05-23 08:45:40'),
	(00002, 'ee061fec1c95b9f358d0d14f27fc8dad.jpg', 'PHP untuk pemula - Project TODOLIST APP', 'kelas untuk membuat project todolist-APP dengan PHP', '', '75000', '10', '0', '2024-05-25 09:32:08');

-- Dumping data for table dbcourse.tm_course_detail: ~1 rows (approximately)
INSERT INTO `tm_course_detail` (`id`, `course_id`, `course_detail_title`, `course_detail_duration`, `course_detail_video_code`, `course_detail_description`, `course_detail_slug`, `course_detail_status`, `course_detail_created`) VALUES
	(1, 1, 'intro', '00:02:12', 'ReulLR8QuYE', 'berikut adalah preview dari kelas yang akan kalian ikuti.', NULL, 0, '2024-05-25 09:11:45'),
	(2, 1, 'setup code editor', '00:00:37', 'odnYozQ01U0', 'pada kelas ini kalian akan belajar bagaimana untuk melakukan setup pada code editor yang akan kalian gunakan.', NULL, 0, '2024-05-25 09:17:43');

-- Dumping data for table dbcourse.tm_course_student: ~0 rows (approximately)

-- Dumping data for table dbcourse.tm_student: ~0 rows (approximately)

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
