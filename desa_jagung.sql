/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 100138
 Source Host           : localhost:3306
 Source Schema         : desa_jagung

 Target Server Type    : MySQL
 Target Server Version : 100138
 File Encoding         : 65001

 Date: 23/08/2019 20:40:01
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin`  (
  `id_admin` tinyint(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `hak_akses` enum('operator','admin') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'operator',
  `terakhir_login` datetime(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id_admin`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES (1, 'tegarsatyanegara.id', '1234567890', 'admin', '2019-08-23 15:40:40');
INSERT INTO `admin` VALUES (2, 'Mufiyana', 'desajagung', 'admin', '2019-07-23 20:18:28');

-- ----------------------------
-- Table structure for berita
-- ----------------------------
DROP TABLE IF EXISTS `berita`;
CREATE TABLE `berita`  (
  `id_berita` tinyint(4) NOT NULL AUTO_INCREMENT,
  `judul_berita` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `slug_berita` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `waktu_berita` datetime(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0),
  `isi_berita` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `gambar_berita` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `id_admin` tinyint(4) NOT NULL,
  PRIMARY KEY (`id_berita`) USING BTREE,
  INDEX `id_admin`(`id_admin`) USING BTREE,
  INDEX `slug_berita`(`slug_berita`) USING BTREE,
  INDEX `judul_berita`(`judul_berita`) USING BTREE,
  CONSTRAINT `berita_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of berita
-- ----------------------------
INSERT INTO `berita` VALUES (5, 'Acara Tahunan Desa Jagung Menyambut Datangnya Bulan Puasa (Nyadran)', 'acara-tahunan-desa-jagung-menyambut-datangnya-bulan-puasa-nyadran', '2019-07-11 15:18:36', 'Tradisi Nyadran adalah nama dari salah satu budaya masyarakat Islam Jawa dalam menyambut datangnya Bulan Ramadhan.\r\n\r\nSebuah serangkaian budaya berupa kenduri selamatan, Besik atau pembersihan makam leluhur serta upacara ziarah kubur, dengan mendoakan roh yang telah meninggal di area makam.\r\n\r\nOleh masyarakat Jawa terutama Jawa Tengah, tradisi ini biasa dilaksanakan di setiap hari ke-10 bulan Rajab atau saat datangnya bulan Sya’ban.\r\n\r\nMakna dan Asal Usul Istilah Nyadran\r\nPerihal penamaan tradisi ini, beragam istilah yang membentuknya. Ada yang mengatakan bahwa Nyadran yang berasal dari Bahasa Sansekerta “sraddha” yang artinya keyakinan.\r\n\r\nAda pula Nyadran dari kata kerja dalam Bahasa Jawa, (Sadran = Ruwah, Syakban) yang juga dimaknai dengan Sudra (orang awam) menyudra berarti berkumpul dengan orang awam yang mengingatkan kita akan hakekat bahwa manusia pada dasarnya sama.\r\n\r\nDisisi lain juga ada yang mngatakan bahwa Nyadran berasal dari kata Sodrun yang berarti Dada atau Hati. Tentunya asal istilah tersebut telah mengisyaratkan tujuan dari terbentuknya tradisi ini.\r\n\r\nAdapun perubahan pengucapannya mungkin dikarenakan lidah orang Jawa yang cenderung Medhok yang menjadikan istilah-istilah tersebut berubah menjadi Nyadran.\r\n\r\nTelah dimaklumi bahwa masyarakat Jawa sangatlah kokoh dalam memegang budaya leluhur mereka. Berbagai macam tradisi yang keberadaannya masih bisa ditemui hingga hari ini, sebagian besar tidak terlepas dari keyakinan mereka yang diwariskan turun temurun.\r\n\r\nPercampuran budaya (Akulturasi) serta nuansa sinkretisme tetap terlihat mewarnai demi sebuah harapan akan keserasian atau keseimbangan hidup.\r\n\r\nTradisi Nyadran adalah salah satunya yang dimaknai diantaranya sebagai sebuah refleksi kerukunan, kebersamaan demi mencapai keharmonisan hidup. Baik hal itu berkaitan dengan yang masih hidup, yang telah meninggal serta keterikatannya dengan Tuhan.\r\n\r\n\r\n \r\nSejarah Tradisi Nyadran\r\nTradisi Nyadran telah dimulai sejak zaman Hindu-Budha dimana Agama Islam belumlah masuk ke Indonesia. Terdapat tradisi serupa dengan Nyadran yakni Tradisi Craddha pada zaman Kerajaan Majapahit.\r\n\r\nAdapun kesamaan dari tradisi tersebut pada kegiatan manusia dengan leluhur yang sudah meninggal. Adanya sesaji dan ritual sesembahan untuk penghormatan terhadap leluhur yang telah meninggal.\r\n\r\nSedangkan Tradisi nyadran merupakan sebuah ritual yang berupa penghormatan kepada arwah nenek moyang dan memanjatkan doa selamatan.\r\n\r\nAgama Islam Masuk ke Indonesia pada abad ke-13 melalui Walisongo. Sekiranya dakwah dengan pendekatan-pendekatan budaya merupakan jalan terbaik dalam penyebaran Agama yang masih baru tersebut.\r\n\r\nBanyaknya ritual-ritual yang bertentangan dengan Agama Islam tidak menjadikan para wali semerta-merta menghapus tradisi-tradisi yang telah melembaga dalam Masyarakat Jawa.\r\n\r\nMereka mengambil jalan kebijaksanaan yakni menyebarkan agama Islam dengan mengakulturasikan budaya masyarakat Jawa dengan nilai-nilai Islam supaya mudah diterima oleh masyarakat dan masuk Islam.\r\n\r\nPelaksanaan Tradisi Nyadran (Craddha) pada masa Hindu-Budha menggunakan puji-pujian dan sesaji sebagai perlengkapan ritualnya sedangkan oleh Walisongo diakulturasikan dengan doa-doa dari Al-Quran.\r\n\r\nMasyarakat Jawa Kuno meyakini bahwa leluhur yang sudah meninggal sejatinya masih ada dan mempengaruhi kehidupan anak cucu atau keturunannya.\r\n\r\nKarena pengaruh agama Islam pula makna nyadran mengalami pergeseran dari sekedar berdoa kepada Tuhan menjadi ritual pelaporan dan wujud penghargaan kepada bulan Sya’ban atau nifsu Sya’ban.\r\n\r\nAjaran agama Islam meyakini bahwa bulan Sya’ban yang datang menjelang Ramadhan merupakan bulan pelaporan atas amal perbuatan manusia.\r\n\r\nOleh karena itu pelaksanaan ziarah kubur juga dimaksud sebagai sarana intropeksi atau perenungan terhadap segala daya dan upaya yang telah dilakukan selama satu tahun.', 'IMG-20190420-WA00341.jpg', 1);

-- ----------------------------
-- Table structure for demo_agama
-- ----------------------------
DROP TABLE IF EXISTS `demo_agama`;
CREATE TABLE `demo_agama`  (
  `id_demo_agama` tinyint(4) NOT NULL AUTO_INCREMENT,
  `islam` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kristen_protestan` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `budha` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `hindu` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `katolik` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `total_agama` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `id_ta` tinyint(4) NOT NULL,
  PRIMARY KEY (`id_demo_agama`) USING BTREE,
  INDEX `id_ta`(`id_ta`) USING BTREE,
  CONSTRAINT `demo_agama_ibfk_1` FOREIGN KEY (`id_ta`) REFERENCES `tahun_anggaran` (`id_ta`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of demo_agama
-- ----------------------------
INSERT INTO `demo_agama` VALUES (1, '3319', '0', '0', '0', '0', '1594', 1);

-- ----------------------------
-- Table structure for demo_kesejahkk
-- ----------------------------
DROP TABLE IF EXISTS `demo_kesejahkk`;
CREATE TABLE `demo_kesejahkk`  (
  `id_demo_kesejahkk` tinyint(4) NOT NULL AUTO_INCREMENT,
  `pra_sejahtera` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `sejahtera` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kaya` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `sedang` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `miskin` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `total_kk` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `id_ta` tinyint(4) NOT NULL,
  PRIMARY KEY (`id_demo_kesejahkk`) USING BTREE,
  INDEX `total_kk`(`total_kk`) USING BTREE,
  INDEX `id_ta`(`id_ta`) USING BTREE,
  CONSTRAINT `demo_kesejahkk_ibfk_1` FOREIGN KEY (`id_ta`) REFERENCES `tahun_anggaran` (`id_ta`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for demo_pekerjaan
-- ----------------------------
DROP TABLE IF EXISTS `demo_pekerjaan`;
CREATE TABLE `demo_pekerjaan`  (
  `id_demo_pekerjaan` tinyint(4) NOT NULL AUTO_INCREMENT,
  `buruh_tani` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `buruh_harian_lepas` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `petani` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `peternak` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `pedagang` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tukang_kayu` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tukang_batu` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `penjahit` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `pns` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `pensiunan` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tni_polri` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `perangkat_desa` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `montir` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `pengusaha` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tukang_gunting` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `karyawan_swasta` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `karyawan_honorer` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `guru_honorer` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nelayan` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `pedagang_keliling` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `bidan` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `pembantu_rt` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `dukun_kampung_terlatih` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `dosen_swasta` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `sopir` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `koki` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `pengemudi_bentor` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `konsultan` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `wiraswasta` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `penata_rias` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `total_pekerjaan` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `id_ta` tinyint(4) NOT NULL,
  PRIMARY KEY (`id_demo_pekerjaan`) USING BTREE,
  INDEX `id_ta`(`id_ta`) USING BTREE,
  CONSTRAINT `demo_pekerjaan_ibfk_1` FOREIGN KEY (`id_ta`) REFERENCES `tahun_anggaran` (`id_ta`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for demo_pendidikan
-- ----------------------------
DROP TABLE IF EXISTS `demo_pendidikan`;
CREATE TABLE `demo_pendidikan`  (
  `id_demo_pendidikan` tinyint(4) NOT NULL AUTO_INCREMENT,
  `belum_tamat_sd` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `sd` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `sltp` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `slta` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `diploma_sarjana` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `total_pendidikan` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `id_ta` tinyint(4) NOT NULL,
  PRIMARY KEY (`id_demo_pendidikan`) USING BTREE,
  INDEX `id_ta`(`id_ta`) USING BTREE,
  CONSTRAINT `demo_pendidikan_ibfk_1` FOREIGN KEY (`id_ta`) REFERENCES `tahun_anggaran` (`id_ta`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for demo_penkk
-- ----------------------------
DROP TABLE IF EXISTS `demo_penkk`;
CREATE TABLE `demo_penkk`  (
  `id_demo_penkk` tinyint(4) NOT NULL AUTO_INCREMENT,
  `laki_laki` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `laki_015` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `laki_1655` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `laki_diatas55` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `perempuan` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `perem_015` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `perem_1655` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `perem_diatas55` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `jum_pen` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `jum_kk` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `id_ta` tinyint(4) NOT NULL,
  PRIMARY KEY (`id_demo_penkk`) USING BTREE,
  INDEX `id_ta`(`id_ta`) USING BTREE,
  CONSTRAINT `demo_penkk_ibfk_1` FOREIGN KEY (`id_ta`) REFERENCES `tahun_anggaran` (`id_ta`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of demo_penkk
-- ----------------------------
INSERT INTO `demo_penkk` VALUES (1, '1710', '317', '1023', '65', '1609', '516', '1032', '106', '3319', '0', 1);
INSERT INTO `demo_penkk` VALUES (2, '3320', '134', '124', '121', '1703', '144', '12', '144', '12', '0', 2);

-- ----------------------------
-- Table structure for keu_belanja
-- ----------------------------
DROP TABLE IF EXISTS `keu_belanja`;
CREATE TABLE `keu_belanja`  (
  `id_keu_belanja` tinyint(4) NOT NULL AUTO_INCREMENT,
  `apbd_belanja_pegawai` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `apbd_belanja_bajas` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `apbd_belanja_modal` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `apbd_total` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `apbn_belanja_pegawai` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `apbn_belanja_bajas` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `apbn_belanja_modal` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `jumlah_belanja` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `id_ta` tinyint(4) NOT NULL,
  PRIMARY KEY (`id_keu_belanja`) USING BTREE,
  INDEX `id_ta`(`id_ta`) USING BTREE,
  CONSTRAINT `keu_belanja_ibfk_1` FOREIGN KEY (`id_ta`) REFERENCES `tahun_anggaran` (`id_ta`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of keu_belanja
-- ----------------------------
INSERT INTO `keu_belanja` VALUES (1, '207000000', '80788000', NULL, '287788000', NULL, '204100000', '490988000', '982876000', 1);

-- ----------------------------
-- Table structure for keu_pendapatan
-- ----------------------------
DROP TABLE IF EXISTS `keu_pendapatan`;
CREATE TABLE `keu_pendapatan`  (
  `id_keu_pendapatan` tinyint(4) NOT NULL AUTO_INCREMENT,
  `hasil_usaha_desa` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tanah_kas_desa` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `hasil_swamas` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `hasil_pargoro` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `pungutan_desa` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `pendesah` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `bahaspadar` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `bapbn` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `add_apbd` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `bkppus` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `bkppro` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `bkpk` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `pos_hibah` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `sumpiket` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `jum_pendapatan` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `id_ta` tinyint(4) NOT NULL,
  PRIMARY KEY (`id_keu_pendapatan`) USING BTREE,
  INDEX `id_ta`(`id_ta`) USING BTREE,
  CONSTRAINT `keu_pendapatan_ibfk_1` FOREIGN KEY (`id_ta`) REFERENCES `tahun_anggaran` (`id_ta`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of keu_pendapatan
-- ----------------------------
INSERT INTO `keu_pendapatan` VALUES (1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '695088000', '287788000', NULL, NULL, NULL, NULL, NULL, '982876000', 1);

-- ----------------------------
-- Table structure for struktur_desa
-- ----------------------------
DROP TABLE IF EXISTS `struktur_desa`;
CREATE TABLE `struktur_desa`  (
  `id_struktur_desa` tinyint(4) NOT NULL AUTO_INCREMENT,
  `gambar_struktur_desa` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `id_ta` tinyint(4) NOT NULL,
  PRIMARY KEY (`id_struktur_desa`) USING BTREE,
  INDEX `id_ta`(`id_ta`) USING BTREE,
  CONSTRAINT `struktur_desa_ibfk_1` FOREIGN KEY (`id_ta`) REFERENCES `tahun_anggaran` (`id_ta`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of struktur_desa
-- ----------------------------
INSERT INTO `struktur_desa` VALUES (2, 'Drawing11.jpg', 2);

-- ----------------------------
-- Table structure for tahun_anggaran
-- ----------------------------
DROP TABLE IF EXISTS `tahun_anggaran`;
CREATE TABLE `tahun_anggaran`  (
  `id_ta` tinyint(4) NOT NULL AUTO_INCREMENT,
  `tahun` char(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id_ta`) USING BTREE,
  INDEX `tahun`(`tahun`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tahun_anggaran
-- ----------------------------
INSERT INTO `tahun_anggaran` VALUES (1, '2018');
INSERT INTO `tahun_anggaran` VALUES (2, '2019');

SET FOREIGN_KEY_CHECKS = 1;
