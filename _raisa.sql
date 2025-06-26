/*
 Navicat Premium Dump SQL

 Source Server         : local
 Source Server Type    : MySQL
 Source Server Version : 50739 (5.7.39)
 Source Host           : localhost:3306
 Source Schema         : _raisa

 Target Server Type    : MySQL
 Target Server Version : 50739 (5.7.39)
 File Encoding         : 65001

 Date: 26/06/2025 18:43:12
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for pegawai
-- ----------------------------
DROP TABLE IF EXISTS `pegawai`;
CREATE TABLE `pegawai` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nik` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jkel` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `telp` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `agama` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pegawai
-- ----------------------------
BEGIN;
INSERT INTO `pegawai` (`id`, `nik`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jkel`, `status`, `telp`, `alamat`, `agama`, `created_at`, `updated_at`) VALUES (1, '23421312', 'udin', '123', '2025-09-26', 'L', '123', 'asd', 'sdf', 'ISLAM', '2025-05-26 16:44:54', '2025-06-26 10:36:13');
INSERT INTO `pegawai` (`id`, `nik`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jkel`, `status`, `telp`, `alamat`, `agama`, `created_at`, `updated_at`) VALUES (2, '63324546789', 'Jalak', 'sdfsdf', '2025-06-26', 'L', 'sdf', 'sdf', 'sdf', 'ISLAM', '2025-06-26 07:31:12', '2025-06-26 07:33:39');
COMMIT;

-- ----------------------------
-- Table structure for penempatan
-- ----------------------------
DROP TABLE IF EXISTS `penempatan`;
CREATE TABLE `penempatan` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `kode` varchar(255) DEFAULT NULL,
  `pegawai_id` int(11) unsigned DEFAULT NULL,
  `lokasi` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `cabang` varchar(255) DEFAULT NULL,
  `kota` varchar(255) DEFAULT NULL,
  `tahun` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of penempatan
-- ----------------------------
BEGIN;
INSERT INTO `penempatan` (`id`, `kode`, `pegawai_id`, `lokasi`, `jabatan`, `cabang`, `kota`, `tahun`, `status`, `created_at`, `updated_at`) VALUES (1, '001', 1, 'kantor 1', 'sdf', 'banjarmasin', 'Banjarmasin', '2050', 'ok', '2025-06-26 08:50:53', '2025-06-26 09:45:21');
COMMIT;

-- ----------------------------
-- Table structure for surat
-- ----------------------------
DROP TABLE IF EXISTS `surat`;
CREATE TABLE `surat` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `penempatan_id` int(11) NOT NULL,
  `pegawai_id` int(11) NOT NULL,
  `kode` varchar(255) DEFAULT NULL,
  `jenis` varchar(255) DEFAULT NULL,
  `awal` date DEFAULT NULL,
  `akhir` date DEFAULT NULL,
  `lama` varchar(255) DEFAULT NULL,
  `gaji` int(11) DEFAULT NULL,
  `tunjangan` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`,`penempatan_id`,`pegawai_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of surat
-- ----------------------------
BEGIN;
INSERT INTO `surat` (`id`, `penempatan_id`, `pegawai_id`, `kode`, `jenis`, `awal`, `akhir`, `lama`, `gaji`, `tunjangan`, `created_at`, `updated_at`) VALUES (1, 1, 2, '002', 'penting', '2025-06-26', '2025-06-26', '2', 100, 200, '2025-06-26 09:08:08', '2025-06-26 09:43:47');
INSERT INTO `surat` (`id`, `penempatan_id`, `pegawai_id`, `kode`, `jenis`, `awal`, `akhir`, `lama`, `gaji`, `tunjangan`, `created_at`, `updated_at`) VALUES (2, 1, 1, '001', 'penting', '2025-06-26', '2025-06-26', '2', 10000, 200000, '2025-06-26 09:43:40', '2025-06-26 09:43:40');
COMMIT;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `roles` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
BEGIN;
INSERT INTO `users` (`id`, `username`, `name`, `password`, `remember_token`, `created_at`, `updated_at`, `roles`) VALUES (1, 'superadmin', 'superadmin', '$2y$12$r0HAFQIZdiAabhk3HwCdVub716cax1jMnmwKnv76nJz8sJx0M3TB6', NULL, NULL, '2024-12-20 02:49:44', 'superadmin');
INSERT INTO `users` (`id`, `username`, `name`, `password`, `remember_token`, `created_at`, `updated_at`, `roles`) VALUES (11, 'adi', 'adi2', '$2y$12$S8y2eXzZhf7OMrScCfdwT.9EZo6yv7EBZUkrk/faHh3DNzW/7zhPu', NULL, '2025-05-12 23:54:44', '2025-05-12 23:56:31', 'superadmin');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
