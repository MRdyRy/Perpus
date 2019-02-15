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
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_file`
--

LOCK TABLES `tb_file` WRITE;
/*!40000 ALTER TABLE `tb_file` DISABLE KEYS */;
INSERT INTO `tb_file` VALUES (50,4,'Pascal','Informatika','pascal_tutorial.pdf','pascal','2014-11-04 15:27:04'),(32,4,'dasar php','Informatika','2-Struktur Dasar PHP.pdf','dasar php','2014-10-24 22:59:18'),(33,4,'JDBC','Informatika','JDBC.pdf','JDBC','2014-10-24 23:54:33'),(34,4,'OOP','Informatika','OOP.pdf','Modul OOP Java','2014-10-25 16:15:15'),(35,4,'GUI','Informatika','22GUIProgramming.pdf','Modul GUI','2014-10-25 16:16:22'),(36,5,'D3','Informatika','D3_Modul_Algoritma&PemrogII_Delphi.pdf','D3','2014-10-25 16:16:54'),(39,5,'auah','Informatika','Pertemuan4.pdf','auah','2014-10-29 22:30:41'),(40,5,'entahlah','Informatika','Pertemuan3.pdf','entahlah','2014-10-29 22:32:32'),(41,5,'p3','Informatika','Pertemuan3.pdf','p3','2014-10-30 01:01:43'),(42,5,'algo','Informatika','D3_Modul_Algoritma&PemrogII_Delphi.pdf','algo','2014-10-30 01:02:07'),(43,5,'dbms sql','Informatika','11-Pengenalan DBMS dan MySQL.pdf','dbms sql','2014-10-30 01:03:31'),(44,5,'php oop','Informatika','10-Pemrograman Berorientasi Objek di PHP.pdf','php oop','2014-10-30 01:04:14'),(45,5,'contoh','Informatika','13-Contoh Aplikasi Berita dengan PHP dan MySQL.pdf','contoh','2014-10-30 22:57:41'),(46,4,'artikel','Informatika','artikel PHP.pdf','artikel','2014-10-30 22:58:32'),(47,5,'string','Informatika','6-Penanganan String.pdf','string','2014-10-30 23:10:20'),(48,4,'berita','Informatika','13-Contoh Aplikasi Berita dengan PHP dan MySQL.pdf','berita','2014-10-30 23:10:56'),(49,14,'Panduan AJAX JQuery','Informatika','Panduan Lengkap PHP Ajax jQuery.pdf','AJAX & JQuery','2014-11-02 22:26:09');
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
-- Table structure for table `tb_hapus`
--

DROP TABLE IF EXISTS `tb_hapus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_hapus` (
  `id_hapus` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `waktu` datetime NOT NULL,
  PRIMARY KEY (`id_hapus`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_hapus`
--

LOCK TABLES `tb_hapus` WRITE;
/*!40000 ALTER TABLE `tb_hapus` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_hapus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_kategori`
--

DROP TABLE IF EXISTS `tb_kategori`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_kategori` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(20) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_kategori`
--

LOCK TABLES `tb_kategori` WRITE;
/*!40000 ALTER TABLE `tb_kategori` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_kategori` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_pengguna`
--

DROP TABLE IF EXISTS `tb_pengguna`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_pengguna` (
  `id_pengguna` bigint(11) NOT NULL AUTO_INCREMENT,
  `level` int(2) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `npm` varchar(12) NOT NULL,
  `jenis_kelamin` text NOT NULL,
  `tempat` text NOT NULL,
  `tanggal` text NOT NULL,
  `fakultas` text NOT NULL,
  `prodi` text NOT NULL,
  `syarat` text NOT NULL,
  `foto` text NOT NULL,
  PRIMARY KEY (`id_pengguna`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_pengguna`
--

LOCK TABLES `tb_pengguna` WRITE;
/*!40000 ALTER TABLE `tb_pengguna` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_pengguna` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_upload`
--

DROP TABLE IF EXISTS `tb_upload`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_upload` (
  `id_upload` int(2) NOT NULL AUTO_INCREMENT,
  `waktu` datetime NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_upload`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_upload`
--

LOCK TABLES `tb_upload` WRITE;
/*!40000 ALTER TABLE `tb_upload` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_upload` ENABLE KEYS */;
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
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_user`
--

LOCK TABLES `tb_user` WRITE;
/*!40000 ALTER TABLE `tb_user` DISABLE KEYS */;
INSERT INTO `tb_user` VALUES (5,2,'Rudy Ryanto','201343501567','jakarta','11-04-1995','FTMIPA','TI','L','Y',''),(4,1,'admin','000000000001','jkt','11-04-1995','TI','TI','L','Y',''),(10,1,'uma','1','bogor','09-01-1996','FHTMIPA','teknik informatika','P','Y',''),(14,2,'undo','12345','Jakarta','04-01-1995','FHTMIPA','bhs inggris','L','Y','');
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

-- Dump completed on 2014-11-09  0:35:59
