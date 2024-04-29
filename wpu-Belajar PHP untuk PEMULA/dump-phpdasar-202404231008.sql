-- MySQL dump 10.13  Distrib 5.7.33, for Win64 (x86_64)
--
-- Host: localhost    Database: phpdasar
-- ------------------------------------------------------
-- Server version	5.7.33

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `mahasiswa`
--

DROP TABLE IF EXISTS `mahasiswa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `nim` char(8) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `jurusan` varchar(100) DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mahasiswa`
--

LOCK TABLES `mahasiswa` WRITE;
/*!40000 ALTER TABLE `mahasiswa` DISABLE KEYS */;
INSERT INTO `mahasiswa` VALUES (1,'Aditya Pratama','V3920001','aditya@gmail.com','Teknik Informatika','gambar1.jpg'),(2,'Bunga Sari','V3920002','bunga@gmail.com','Ilmu Komunikasi','gambar2.jpg'),(3,'Cahya Wijaya','V3920003','cahya@gmail.com','Manajemen Bisnis','gambar3.jpg'),(4,'Dewi Kartika','V3920004','dewi@gmail.com','Akuntansi','gambar4.jpg'),(5,'Eko Wahyudi','V3920005','eko@gmail.com','Teknik Elektro','gambar5.jpg'),(6,'Fani Purnama','V3920006','fani@gmail.com','Hukum','gambar6.jpg'),(7,'Gilang Ramadhan','V3920007','gilang@gmail.com','Kedokteran','gambar7.jpg'),(8,'Hana Fitriani','V3920008','hana@gmail.com','Ilmu Psikologi','gambar8.jpg'),(9,'Irfan Setiawan','V3920009','irfan@gmail.com','Teknik Sipil','gambar9.jpg'),(10,'Jasmine Putri','V3920010','jasmine@gmail.com','Desain Grafis','gambar10.jpg'),(11,'Krisna Pradana','V3920011','krisna@gmail.com','Fisika','gambar11.jpg'),(12,'Laras Ayu','V3920012','laras@gmail.com','Ilmu Biologi','gambar12.jpg'),(13,'Maulana Akbar','V3920013','maulana@gmail.com','Manajemen Sumber Daya Manusia','gambar13.jpg'),(14,'Nadia Ramadhani','V3920014','nadia@gmail.com','Farmasi','gambar14.jpg'),(15,'Opik Hidayat','V3920015','opik@gmail.com','Agribisnis','gambar15.jpg'),(16,'Putra Nugraha','V3920016','putra@gmail.com','Ilmu Politik','gambar16.jpg'),(17,'Qonita Putri','V3920017','qonita@gmail.com','Arsitektur','gambar17.jpg'),(18,'Rizki Fahmi','V3920018','rizki@gmail.com','Teknik Kimia','gambar18.jpg'),(19,'Sinta Puspita','V3920019','sinta@gmail.com','Bahasa Inggris','gambar19.jpg'),(20,'Taufik Hidayat','V3920020','taufik@gmail.com','Pendidikan Matematika','gambar20.jpg'),(21,'Umi Kalsum','V3920021','umi@gmail.com','Teknik Mesin','gambar21.jpg'),(22,'Vina Melati','V3920022','vina@gmail.com','Ilmu Ekonomi','gambar22.jpg'),(23,'Wahyu Prasetyo','V3920023','wahyu@gmail.com','Sastra Jepang','gambar23.jpg'),(24,'Xavier Gunawan','V3920024','xavier@gmail.com','Teknik Lingkungan','gambar24.jpg'),(25,'Yunita Kusuma','V3920025','yunita@gmail.com','Kesehatan Masyarakat','gambar25.jpg'),(26,'Zaki Rahman','V3920026','zaki@gmail.com','Teknik Pertanian','gambar26.jpg'),(27,'Aisyah Nurul','V3920027','aisyah@gmail.com','Manajemen Keuangan','gambar27.jpg'),(28,'Bobby Aditya','V3920028','bobby@gmail.com','Sosiologi','gambar28.jpg'),(29,'Citra Dewi','V3920029','citra@gmail.com','Teknik Geologi','gambar29.jpg'),(30,'Dicky Prasetya','V3920030','dicky@gmail.com','Ilmu Komputer','gambar30.jpg'),(31,'ewfwefewf','V3920013','slimeshady606@gmail.com','wtiohwoj','wioehfiowef');
/*!40000 ALTER TABLE `mahasiswa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'phpdasar'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-04-23 10:08:57
