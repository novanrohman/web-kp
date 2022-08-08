/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 5.7.33 : Database - nilaimahasiswa
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`nilaimahasiswa` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `nilaimahasiswa`;

/*Table structure for table `tb_nilai` */

DROP TABLE IF EXISTS `tb_nilai`;

CREATE TABLE `tb_nilai` (
  `Id` int(11) DEFAULT NULL,
  `Nilai_pembimbing_lapangan` varchar(45) DEFAULT NULL,
  `Nilai_pembimbing_KP` varchar(45) DEFAULT NULL,
  `Nilai_penguji` varchar(45) DEFAULT NULL,
  `Bukti_nilai_pembimbing_lapangan` varchar(45) DEFAULT NULL,
  `Pendaftaran_ujian_KP_Id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_nilai` */

insert  into `tb_nilai`(`Id`,`Nilai_pembimbing_lapangan`,`Nilai_pembimbing_KP`,`Nilai_penguji`,`Bukti_nilai_pembimbing_lapangan`,`Pendaftaran_ujian_KP_Id`) values 
(362155401,'-AB','B','B','Penelitian data lapangan ',1),
(362155402,'-B','A','B','Penelitian data lapangan',2),
(362155403,'AB','-B','B','Penelitian data lapangan',3),
(362155404,'-A','-AB','-AB','Penelitian data lapangan',4),
(362155405,'A','-AB','AB','Penelitian data lapangan',5);

/*Table structure for table `tb_pendaftaran_kp` */

DROP TABLE IF EXISTS `tb_pendaftaran_kp`;

CREATE TABLE `tb_pendaftaran_kp` (
  `Id` int(11) DEFAULT NULL,
  `Tempat_KP` varchar(45) DEFAULT NULL,
  `Alamat_KP` varchar(45) DEFAULT NULL,
  `Tanggal_mulai` datetime DEFAULT NULL,
  `Tanggal_selesai` datetime DEFAULT NULL,
  `Proposal` varchar(45) DEFAULT NULL,
  `Anggota_Kelompok_Id` int(11) DEFAULT NULL,
  `Dosen_Id` int(11) DEFAULT NULL,
  `Perusahaan_Id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_pendaftaran_kp` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
