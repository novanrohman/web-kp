/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 5.7.33 : Database - db_kp
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;
git 
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
) ENGINE=InnoDB AUTO_INCREMENT=7006 DEFAULT CHARSET=latin1;

/*Data for the table `acc_ujian` */

insert  into `acc_ujian`(`id`,`dosen_penguji`,`jadwal_ujian`,`acc_ujian`) values 
(7001,'Sepyan Purnama Kristanto, S.Kom.,M.Kom','September','A'),
(7002,'Moh. Dimyati Ayatullah, S..T., M.Kom','September','B'),
(7003,'Dianni Yusuf, S.Kom, M.Kom','September','A'),
(7004,'Eka Mistiko Rini, S.Kom, M.kom','September','B'),
(7005,'Devit Suwardiyanto, S.Si., M.T','September','A');

/*Table structure for table `anggota_kelompok` */

DROP TABLE IF EXISTS `anggota_kelompok`;

CREATE TABLE `anggota_kelompok` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_anggota` varchar(45) NOT NULL,
  `nim` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7006 DEFAULT CHARSET=latin1;

/*Data for the table `anggota_kelompok` */

insert  into `anggota_kelompok`(`id`,`nama_anggota`,`nim`) values 
(7001,'Novan Rohman Nur Khoir ','362155401135'),
(7002,'Putri Indira Puspitasari','362155401138'),
(7003,'Muh. Ilham Syafaat Dava Ferdyansyah','362155401142'),
(7004,'Virgianita Ramadhani Susilo Putri','362155401143'),
(7005,'Mohamad Aji Hermansya','362155401145');

/*Table structure for table `dosen` */

DROP TABLE IF EXISTS `dosen`;

CREATE TABLE `dosen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_dosen` varchar(45) NOT NULL,
  `nik` varchar(45) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=54005 DEFAULT CHARSET=latin1;

/*Data for the table `dosen` */

insert  into `dosen`(`id`,`nama_dosen`,`nik`,`user_id`) values 
(54001,'Devit Suwardiyanto, S.Si., M.T','1',201),
(54002,'Sepyan Purnama Kristanto, S.Kom.,M.Kom ','2',202),
(54003,'Moh. Dimyati Ayatullah, S.T., M.Kom','3',203),
(54004,'Dianni Yusuf, S.Kom, M.Kom','4',204);

/*Table structure for table `lembar_kerja` */

DROP TABLE IF EXISTS `lembar_kerja`;

CREATE TABLE `lembar_kerja` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` datetime NOT NULL,
  `file` varchar(45) NOT NULL,
  `anggota_kelompok_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5006 DEFAULT CHARSET=latin1;

/*Data for the table `lembar_kerja` */

insert  into `lembar_kerja`(`id`,`tanggal`,`file`,`anggota_kelompok_id`) values 
(5001,'2022-08-11 02:42:28','pdf',7001),
(5002,'2022-08-11 02:42:53','pdf',7002),
(5003,'2022-08-13 02:43:11','pdf',7003),
(5004,'2022-08-13 02:43:36','pdf',7004),
(5005,'2022-08-15 02:43:59','pdf',7005);

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
) ENGINE=InnoDB AUTO_INCREMENT=3705 DEFAULT CHARSET=latin1;

/*Data for the table `mahasiswa` */

insert  into `mahasiswa`(`id`,`nama_mahasiswa`,`nim`,`kelas`,`alamat`,`user_id`,`anggota_kelompok_id`) values 
(3701,'Novan Rohman Nur Khoir','362155401135','1E','Bagorejo',201,7001),
(3702,'Putri Indira Puspitasari','362155401138','1E','Sukowidi',202,7002),
(3703,'Muh. Ilham Syafaat Dava Ferdyansyah','362155401142','1E','Songgon',203,7003),
(3704,'Virgianita Ramadhani Susilo Putri','362155401143','1E','Wonosobo',204,7004);

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
) ENGINE=InnoDB AUTO_INCREMENT=5006 DEFAULT CHARSET=latin1;

/*Data for the table `nilai` */

insert  into `nilai`(`id`,`nilai_pembimbing_lapangan`,`nilai_pembimbing_kp`,`nilai_penguji`,`bukti_nilai_pembimbing_lapangan`,`pendaftaran_ujian_kp_id`) values 
(5001,'-AB','B','B','Penelitian data lapangan',1),
(5002,'-B','A','B','Penelitian data lapangan',2),
(5003,'-A','-AB','-AB','Penelitian data lapangan',3),
(5004,'-A','-AB','-AB','Penelitian data lapangan',4),
(5005,'A','B','AB','Penelitian data lapangan',5);

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
) ENGINE=InnoDB AUTO_INCREMENT=303 DEFAULT CHARSET=latin1;

/*Data for the table `pendaftaran_kp` */

insert  into `pendaftaran_kp`(`id`,`tempat_kp`,`alamat_kp`,`tanggal_mulai`,`tanggal_selesai`,`proposal`,`anggota_kelompok`,`dosen_id`,`perusahaan_id`) values 
(301,'Ikea','surabaya','2022-08-11 10:46:17','2022-08-31 10:46:23','grovee',4,54005,701),
(302,'ikea','surabaya','2022-08-11 12:00:27','2022-08-31 12:00:31','grovee',5,7001,702);

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
) ENGINE=InnoDB AUTO_INCREMENT=4702 DEFAULT CHARSET=latin1;

/*Data for the table `perusahaan` */

insert  into `perusahaan`(`id`,`nama_perusahaan`,`alamat`,`email`,`telephone`) values 
(4701,'ikea','surabaya','ikea@gmail.com','08233457264');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `id_role` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=124 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`id`,`username`,`password`,`id_role`) values 
(1,'poliwangi','202cb962ac59075b964b07152d234b70',1),
(2,'321','202cb962ac59075b964b07152d234b70',2);

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
