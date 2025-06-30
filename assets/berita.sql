/*
SQLyog - Free MySQL GUI v5.02
Host - 6.0.4-alpha-community-log : Database - penjualan
*********************************************************************
Server version : 6.0.4-alpha-community-log
*/


/*TABLE structure FOR TABLE `berita` */

DROP TABLE IF EXISTS `berita`;

CREATE TABLE `berita` (
  `id_berita` INT(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_kategori` INT(3) UNSIGNED NOT NULL DEFAULT '0',
  `judul` VARCHAR(100) NOT NULL DEFAULT '',
  `headline` TEXT NOT NULL,
  `isi` TEXT NOT NULL,
  `pengirim` VARCHAR(15) NOT NULL DEFAULT '',
  `tanggal` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id_berita`)
) ENGINE=MYISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `berita` */

INSERT INTO `berita` VALUES (1,1,'Ubuntu 8.10','Ubuntu 8.10 release','abis dapat kiriman ubuntu 8.10','ajib','2008-12-12 08:54:28');

/*Table structure for table `bukutamu` */

DROP TABLE IF EXISTS `bukutamu`;

CREATE TABLE `bukutamu` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama` VARCHAR(15) NOT NULL,
  `situs` VARCHAR(50) NOT NULL,
  `email` VARCHAR(30) NOT NULL,
  `pesan` TEXT NOT NULL,
  `waktu` DATETIME NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `id_2` (`id`)
) ENGINE=MYISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `bukutamu` */

INSERT INTO `bukutamu` VALUES (1,'ajib','http://www.ajibsusanto.blogspo','ajibsusanto@gmail.com','bagus deh idenya','2008-12-05 09:01:25');

/*Table structure for table `kategori` */

DROP TABLE IF EXISTS `kategori`;

CREATE TABLE `kategori` (
  `id_kategori` INT(3) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nm_kategori` VARCHAR(30) NOT NULL DEFAULT '',
  `deskripsi` VARCHAR(200) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_kategori`)
) ENGINE=MYISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `kategori` */

INSERT INTO `kategori` VALUES (1,'Komputer','berita komputer');
