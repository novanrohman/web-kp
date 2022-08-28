/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 10.4.6-MariaDB : Database - db_kp
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_kp` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_kp`;

/*Table structure for table `acc_ujian` */

DROP TABLE IF EXISTS `acc_ujian`;

CREATE TABLE `acc_ujian` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dosen_penguji` varchar(45) NOT NULL,
  `jadwal_ujian` varchar(45) NOT NULL,
  `acc_ujian` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `acc_ujian` */

/*Table structure for table `anggota_kelompok` */

DROP TABLE IF EXISTS `anggota_kelompok`;

CREATE TABLE `anggota_kelompok` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_anggota` varchar(45) NOT NULL,
  `nim` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `anggota_kelompok` */

/*Table structure for table `dosen` */

DROP TABLE IF EXISTS `dosen`;

CREATE TABLE `dosen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_dosen` varchar(45) NOT NULL,
  `nik` varchar(45) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `dosen` */

/*Table structure for table `lembar_kerja` */

DROP TABLE IF EXISTS `lembar_kerja`;

CREATE TABLE `lembar_kerja` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` datetime NOT NULL,
  `file` varchar(45) NOT NULL,
  `anggota_kelompok_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `lembar_kerja` */

/*Table structure for table `mahasiswa` */

DROP TABLE IF EXISTS `mahasiswa`;

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_mahasiswa` varchar(45) NOT NULL,
  `nim` varchar(45) NOT NULL,
  `kelas` varchar(45) NOT NULL,
  `alamat` varchar(45) NOT NULL,
  `user_id` int(11) NOT NULL,
  `anggota_kelompok_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `mahasiswa` */

/*Table structure for table `nilai` */

DROP TABLE IF EXISTS `nilai`;

CREATE TABLE `nilai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nilai_pembimbing_lapangan` varchar(45) NOT NULL,
  `nilai_pembimbing_kp` varchar(45) NOT NULL,
  `nilai_penguji` varchar(45) NOT NULL,
  `bukti_nilai_pembimbing_lapangan` varchar(45) NOT NULL,
  `pendaftaran_ujian_kp_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `nilai` */

/*Table structure for table `pendaftaran_kp` */

DROP TABLE IF EXISTS `pendaftaran_kp`;

CREATE TABLE `pendaftaran_kp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tempat_kp` varchar(45) NOT NULL,
  `alamat_kp` varchar(45) NOT NULL,
  `tanggal_mulai` datetime NOT NULL,
  `tanggal_selesai` datetime NOT NULL,
  `proposal` varchar(45) NOT NULL,
  `anggota_kelompok` int(11) NOT NULL,
  `dosen_id` int(11) NOT NULL,
  `perusahaan_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `pendaftaran_kp` */

/*Table structure for table `pendaftaran_ujian_kp` */

DROP TABLE IF EXISTS `pendaftaran_ujian_kp`;

CREATE TABLE `pendaftaran_ujian_kp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `laporan_kp` varchar(45) NOT NULL,
  `jadwal_kp` varchar(45) NOT NULL,
  `pendaftaran_kp_id` int(11) NOT NULL,
  `acc_ujian_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `pendaftaran_ujian_kp` */

/*Table structure for table `perusahaan` */

DROP TABLE IF EXISTS `perusahaan`;

CREATE TABLE `perusahaan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_perusahaan` varchar(45) NOT NULL,
  `alamat` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `telephone` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `perusahaan` */

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `id_role` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `user` */

/*Table structure for table `user_role` */

DROP TABLE IF EXISTS `user_role`;

CREATE TABLE `user_role` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(45) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `user_role` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
