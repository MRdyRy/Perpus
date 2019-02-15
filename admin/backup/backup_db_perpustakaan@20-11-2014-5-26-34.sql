-- MySQL dump 10.13  Distrib 5.5.24, for Win32 (x86)
--
-- Host: localhost    Database: db_perpustakaan
-- ------------------------------------------------------
-- Server version	5.5.16

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
-- Table structure for table `tb_file`
--

DROP TABLE IF EXISTS `tb_file`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_file` (
  `id_file` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `judul_file` varchar(35) CHARACTER SET latin1 NOT NULL,
  `kategori` text COLLATE latin1_general_ci NOT NULL,
  `isi_file` text CHARACTER SET latin1 NOT NULL,
  `deskripsi` text CHARACTER SET latin1 NOT NULL,
  `tgl_upload` datetime NOT NULL,
  PRIMARY KEY (`id_file`)
) ENGINE=MyISAM AUTO_INCREMENT=69 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_file`
--

LOCK TABLES `tb_file` WRITE;
/*!40000 ALTER TABLE `tb_file` DISABLE KEYS */;
INSERT INTO `tb_file` VALUES (59,4,'array','Informatika','5-Array dan Fungsi.pdf','array','2014-11-20 22:49:50'),(60,4,'jarkom','Informatika','modul-teori-jaringan-komunikasi.pdf','jarkom','2014-11-20 22:50:19'),(34,4,'OOP','Informatika','OOP.pdf','Modul OOP Java','2014-10-25 16:15:15'),(53,4,'pascal tutorial','Informatika','pascal_tutorial.pdf','pemograman 1','2014-11-20 00:18:06'),(54,4,'pointer','Informatika','POINTER.pdf','pointer','2014-11-20 22:45:34'),(55,4,'rangkuman pascal','Informatika','pascal-16-rangkuman-soal-pascal-libre.pdf','pascal','2014-11-20 22:46:56'),(56,4,'xml','Informatika','tutorial xml.pdf','xml tutor','2014-11-20 22:47:58'),(57,4,'aljabar','Matematika','tke_113_handout_gerbang_dan_aljabar_boole.pdf','aljabar boolean','2014-11-20 22:48:24'),(44,5,'php oop','Informatika','10-Pemrograman Berorientasi Objek di PHP.pdf','php oop','2014-10-30 01:04:14'),(61,4,'html','Informatika','Mastering Kode HTML - Full.pdf','html','2014-11-20 22:50:45'),(46,4,'artikel','Informatika','artikel PHP.pdf','artikel','2014-10-30 22:58:32'),(51,4,'statistik','Matematika','Modul-2-STATISTIK-DAN-STATISTIKA.pdf','statistika','2014-11-18 01:10:26'),(52,4,'Statistik pdf','Matematika','STATISTIKA-PDF.pdf','materi statistik','2014-11-18 22:37:40'),(58,4,'css','Informatika','css-tutorial-19.pdf','css tutor','2014-11-20 22:49:08'),(62,4,'flash','Informatika','flash db.pdf','flash db','2014-11-20 22:51:14'),(63,4,'javascript','Informatika','javascript modul.pdf','javascript','2014-11-20 22:51:42'),(64,4,'jarkom unindra','Informatika','Jaringan Komputer [Unindra].pdf','unindra','2014-11-20 22:52:54'),(65,4,'cii','Informatika','modul pelatihan ci 2014-2-4.pdf','modul cii','2014-11-20 22:56:06'),(66,4,'tips trik php','Informatika','tipstrikphp.pdf','php','2014-11-20 22:56:37'),(67,4,'codeigniter','Informatika','Framework Codeigniter 2.pdf','codeigniter','2014-11-20 22:57:15'),(68,4,'form','Informatika','4-Penanganan Form.pdf','form','2014-11-20 22:57:33');
/*!40000 ALTER TABLE `tb_file` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_foto`
--

DROP TABLE IF EXISTS `tb_foto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_foto` (
  `id_foto` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `foto` text NOT NULL,
  PRIMARY KEY (`id_foto`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_foto`
--

LOCK TABLES `tb_foto` WRITE;
/*!40000 ALTER TABLE `tb_foto` DISABLE KEYS */;
INSERT INTO `tb_foto` VALUES (2,5,'contoh.jpg'),(3,14,'IMG_20140404_172039.jpg'),(4,4,'IMG_20140404_172039.jpg');
/*!40000 ALTER TABLE `tb_foto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_komentar`
--

DROP TABLE IF EXISTS `tb_komentar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_komentar` (
  `id_komentar` int(11) NOT NULL AUTO_INCREMENT,
  `id_file` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `komentar` text NOT NULL,
  `datetime` datetime NOT NULL,
  PRIMARY KEY (`id_komentar`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_komentar`
--

LOCK TABLES `tb_komentar` WRITE;
/*!40000 ALTER TABLE `tb_komentar` DISABLE KEYS */;
INSERT INTO `tb_komentar` VALUES (39,46,4,'mantap pertahankan : )','2014-11-17 15:30:36'),(38,36,5,'delphi?','2014-11-17 14:52:03'),(37,50,5,'java dong bro','2014-11-17 14:51:31'),(36,50,5,'mantap mantap ','2014-11-17 14:50:48'),(40,46,5,'dari ilmu komputer ..','2014-11-17 17:18:53'),(41,46,5,'wkwk ada tulisannya','2014-11-17 17:19:37'),(42,46,4,'haha iya maka dari itu ..','2014-11-17 17:20:06'),(43,46,10,'maka dari itu apa ? jangan nanggung -_-','2014-11-17 17:22:37'),(44,46,4,'[senyum]','2014-11-17 18:48:22'),(45,46,4,'','2014-11-17 18:51:04'),(46,51,4,'modul statistka','2014-11-18 01:10:52'),(47,35,4,'tes','2014-11-19 13:21:04'),(48,35,4,'tes','2014-11-19 13:21:31'),(49,35,4,'wdwd','2014-11-19 13:21:55'),(50,35,4,'Fadel','2014-11-19 13:23:51');
/*!40000 ALTER TABLE `tb_komentar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_lihat`
--

DROP TABLE IF EXISTS `tb_lihat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_lihat` (
  `id_lihat` int(11) NOT NULL AUTO_INCREMENT,
  `id_file` int(11) NOT NULL,
  `lihat` int(11) NOT NULL,
  PRIMARY KEY (`id_lihat`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_lihat`
--

LOCK TABLES `tb_lihat` WRITE;
/*!40000 ALTER TABLE `tb_lihat` DISABLE KEYS */;
INSERT INTO `tb_lihat` VALUES (3,47,1),(4,47,1);
/*!40000 ALTER TABLE `tb_lihat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_user`
--

DROP TABLE IF EXISTS `tb_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `level` int(2) NOT NULL,
  `nama` varchar(30) CHARACTER SET latin1 NOT NULL,
  `npm` varchar(12) CHARACTER SET latin1 NOT NULL,
  `tempat` text COLLATE latin1_general_ci NOT NULL,
  `tgl` text COLLATE latin1_general_ci NOT NULL,
  `fakultas` text CHARACTER SET latin1 NOT NULL,
  `prodi` text CHARACTER SET latin1 NOT NULL,
  `jenis_kelamin` enum('L','P') CHARACTER SET latin1 NOT NULL,
  `syarat` enum('Y') COLLATE latin1_general_ci NOT NULL,
  `foto` text CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_user`
--

LOCK TABLES `tb_user` WRITE;
/*!40000 ALTER TABLE `tb_user` DISABLE KEYS */;
INSERT INTO `tb_user` VALUES (5,2,'Rudy Ryanto','201343501567','jakarta','11-04-1995','FTMIPA','TI','L','Y',''),(4,1,'admin','000000000001','jkt','11-04-1995','TI','TI','L','Y',''),(10,1,'uma','1','bogor','09-01-1996','FHTMIPA','teknik informatika','P','Y',''),(14,2,'undo','12345','Jakarta','04-01-1995','FHTMIPA','bhs inggris','L','Y',''),(16,2,'bensin','8500','Jakarta','05-04-1995','FHTMIPA','Matematika','L','Y',''),(17,2,'pertamax','7500','Jakarta','09-05-1995','FTBAHASA','Sastra','L','Y',''),(18,2,'solar','6500','Jakarta','04-12-1995','FSENI','Inggris','L','Y','');
/*!40000 ALTER TABLE `tb_user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-11-20 23:26:35
