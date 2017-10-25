/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50635
 Source Host           : localhost
 Source Database       : basis_dki

 Target Server Type    : MySQL
 Target Server Version : 50635
 File Encoding         : utf-8

 Date: 10/25/2017 19:55:40 PM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `admin_profile`
-- ----------------------------
DROP TABLE IF EXISTS `admin_profile`;
CREATE TABLE `admin_profile` (
  `id` int(11) NOT NULL,
  `id_account` int(11) NOT NULL,
  `id_foto_admin` int(11) NOT NULL,
  `id_satker` int(11) NOT NULL,
  `nip` decimal(18,0) NOT NULL,
  `tempat_lahir` varchar(25) NOT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `alamat_domisili` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `admin_profile`
-- ----------------------------
BEGIN;
INSERT INTO `admin_profile` VALUES ('0', '0', '0', '1', '123456789012345678', 'Bogor', '2017-10-16', 'VBI 2');
COMMIT;

-- ----------------------------
--  Table structure for `member_markers`
-- ----------------------------
DROP TABLE IF EXISTS `member_markers`;
CREATE TABLE `member_markers` (
  `marker_id` int(11) NOT NULL AUTO_INCREMENT,
  `marker_name` varchar(60) NOT NULL,
  `marker_address` text NOT NULL,
  `marker_lat` float(10,6) DEFAULT NULL,
  `marker_lng` float(10,6) DEFAULT NULL,
  `marker_type` varchar(30) NOT NULL DEFAULT '',
  PRIMARY KEY (`marker_id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `member_markers`
-- ----------------------------
BEGIN;
INSERT INTO `member_markers` VALUES ('1', 'Monumen Nasional', 'Gambir, Central Jakarta City, Jakarta', '-6.175372', '106.827103', 'Statue'), ('2', 'Balai Kota', 'Jl. Medan Merdeka Sel. No.8-9, Gambir', '-6.181217', '106.828949', 'Government Office'), ('3', 'Grand Indonesia', 'Jalan M.H. Thamrin No.1', '-6.195151', '106.819725', 'Shopping Mall');
COMMIT;

-- ----------------------------
--  Table structure for `member_profile`
-- ----------------------------
DROP TABLE IF EXISTS `member_profile`;
CREATE TABLE `member_profile` (
  `id` int(11) NOT NULL,
  `id_account` int(11) NOT NULL,
  `id_foto` int(11) NOT NULL,
  `no_ktp` decimal(18,0) NOT NULL,
  `tempat_lahir` varchar(25) NOT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `alamat_domisili` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `user_account`
-- ----------------------------
DROP TABLE IF EXISTS `user_account`;
CREATE TABLE `user_account` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_fullname` varchar(60) NOT NULL,
  `user_email` varchar(60) NOT NULL,
  `user_username` varchar(45) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_registered` date NOT NULL,
  `user_by_who` int(11) NOT NULL,
  `user_status` int(1) NOT NULL,
  `user_privilege` int(11) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `user_account`
-- ----------------------------
BEGIN;
INSERT INTO `user_account` VALUES ('1', 'ANGGA PINO', 'angga.pino@gmail.com', 'pino28', 'dc0fa7df3d07904a09288bd2d2bb5f40', '2017-10-16', '1', '1', '1');
COMMIT;

-- ----------------------------
--  Table structure for `user_foto`
-- ----------------------------
DROP TABLE IF EXISTS `user_foto`;
CREATE TABLE `user_foto` (
  `id` int(11) NOT NULL,
  `file_foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `user_foto`
-- ----------------------------
BEGIN;
INSERT INTO `user_foto` VALUES ('1', '----------');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
