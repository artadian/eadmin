/*
 Navicat Premium Data Transfer

 Source Server         : Localhost
 Source Server Type    : MySQL
 Source Server Version : 100138
 Source Host           : localhost:3306
 Source Schema         : eadministrasi

 Target Server Type    : MySQL
 Target Server Version : 100138
 File Encoding         : 65001

 Date: 12/01/2022 16:41:39
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for md
-- ----------------------------
DROP TABLE IF EXISTS `md`;
CREATE TABLE `md`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `mdname` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `parentid` int(10) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 15 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of md
-- ----------------------------
INSERT INTO `md` VALUES (1, 'MADIUN', 14);
INSERT INTO `md` VALUES (2, 'KEDIRI UTARA I', 14);
INSERT INTO `md` VALUES (3, 'KEDIRI UTARA II', 14);
INSERT INTO `md` VALUES (4, 'MOJOKERTO SURABAYA BARAT', 14);
INSERT INTO `md` VALUES (5, 'SURABAYA TIMUR I', 14);
INSERT INTO `md` VALUES (6, 'SURABAYA TIMUR 2', 14);
INSERT INTO `md` VALUES (7, 'MALANG I', 14);
INSERT INTO `md` VALUES (8, 'MALANG II', 14);
INSERT INTO `md` VALUES (9, 'MALANG III', 14);
INSERT INTO `md` VALUES (10, 'MALANG IV', 14);
INSERT INTO `md` VALUES (11, 'BESUKI BARAT', 14);
INSERT INTO `md` VALUES (12, 'BESUKI TIMUR', 14);
INSERT INTO `md` VALUES (13, 'JOMBANG SURABAYA BARAT', 14);
INSERT INTO `md` VALUES (14, 'MA', 0);

-- ----------------------------
-- Table structure for menu
-- ----------------------------
DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parentid` int(10) NULL DEFAULT NULL,
  `name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `alias` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `published` int(5) NULL DEFAULT NULL,
  `icon` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ordering` int(5) NULL DEFAULT NULL,
  `mcategory` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `mcategoryorder` int(5) NULL DEFAULT NULL,
  `createdby` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `createdon` datetime(0) NULL DEFAULT NULL,
  `updatedby` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `updatedon` datetime(0) NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of menu
-- ----------------------------
INSERT INTO `menu` VALUES (1, 0, 'Dashboard', '', 1, 'dashboard', 1, '', 0, 'admin', '2021-11-18 13:08:51', NULL, '2022-01-11 17:04:50');
INSERT INTO `menu` VALUES (2, 0, 'Input', '', 1, 'fa fa-gear', 1, 'TRANSACTION', 1, 'admin', NULL, NULL, '2022-01-11 13:44:03');
INSERT INTO `menu` VALUES (3, 2, 'Data Jemaat', 'Inputdata', 1, 'fa fa-rain', 1, 'TRANSACTION', 1, 'admin', NULL, NULL, '2022-01-11 15:19:41');
INSERT INTO `menu` VALUES (4, 0, 'Report', '', 1, 'fa fa-home', 1, 'REPORT', 2, NULL, NULL, NULL, '2022-01-11 13:44:04');
INSERT INTO `menu` VALUES (5, 4, 'Jemaat', '', 1, 'fa fa-gear', 1, 'REPORT', 2, NULL, NULL, NULL, '2022-01-11 13:44:06');
INSERT INTO `menu` VALUES (6, 0, 'Manajemen Menu', 'menu', 1, 'fa fa-gear', 1, 'SETTING', 3, 'admin', '2021-11-22 14:06:03', NULL, NULL);
INSERT INTO `menu` VALUES (7, 0, 'Manajemen User', '', 1, 'fa fa-gear', 1, 'SETTING', 3, 'admin', '2021-11-22 14:06:03', NULL, '2022-01-11 13:44:07');
INSERT INTO `menu` VALUES (8, 7, 'Manajemen Role', 'role', 1, 'fa fa-gear', 1, 'SETTING', 3, 'admin', '2021-11-22 14:08:53', NULL, '2021-11-22 14:10:37');
INSERT INTO `menu` VALUES (9, 7, 'User', 'user', 1, 'fa fa-gear', 1, 'SETTING', 3, 'admin', '2021-11-22 14:11:19', NULL, NULL);

-- ----------------------------
-- Table structure for role
-- ----------------------------
DROP TABLE IF EXISTS `role`;
CREATE TABLE `role`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `role` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `rolename` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 29 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of role
-- ----------------------------
INSERT INTO `role` VALUES (1, 'admin', 'Admin');
INSERT INTO `role` VALUES (2, 'sekretaris', 'Sekretaris');
INSERT INTO `role` VALUES (3, 'bendahara', 'Bendahara');
INSERT INTO `role` VALUES (4, 'komperlitbang', 'Komperlitbang');
INSERT INTO `role` VALUES (5, 'KPPL', 'KPPL');
INSERT INTO `role` VALUES (6, 'KP2', 'KP2');
INSERT INTO `role` VALUES (7, 'pendeta', 'Pendeta');
INSERT INTO `role` VALUES (8, 'KPAR', 'KPAR');
INSERT INTO `role` VALUES (9, 'KPPM', 'KPPM');
INSERT INTO `role` VALUES (10, 'KPPW', 'KPPW');
INSERT INTO `role` VALUES (11, 'KPP', 'KPP');
INSERT INTO `role` VALUES (12, 'KPKP', 'KPKP');
INSERT INTO `role` VALUES (13, 'KPKP', 'KPKP(Kaum Pria)');
INSERT INTO `role` VALUES (14, 'KPT', 'KPT');
INSERT INTO `role` VALUES (15, 'KAUM', 'KAUM');
INSERT INTO `role` VALUES (16, 'KPAY', 'ADI YUSWO(Lansia)');
INSERT INTO `role` VALUES (17, 'KPMG', 'KPMG(Musik Gereja)');
INSERT INTO `role` VALUES (18, 'P2A', 'P2A');
INSERT INTO `role` VALUES (19, 'URTG', 'URTG');
INSERT INTO `role` VALUES (20, 'TB', 'Tanggul Bencana');
INSERT INTO `role` VALUES (21, 'IT', 'Pokja IT/Multimedia');
INSERT INTO `role` VALUES (22, 'KPKT', 'KPKT(Katekisasi)');
INSERT INTO `role` VALUES (23, 'PTWG', 'PTWG');
INSERT INTO `role` VALUES (24, 'ibadah', 'Pokja Ibadah');
INSERT INTO `role` VALUES (25, 'KESGA', 'Kesehatan Keluarga');
INSERT INTO `role` VALUES (26, 'PEW', 'PEW');
INSERT INTO `role` VALUES (27, 'kematian', 'Pangrukti Layon');
INSERT INTO `role` VALUES (28, 'KP', 'Kedaulatan Pangan');

-- ----------------------------
-- Table structure for rolemenu
-- ----------------------------
DROP TABLE IF EXISTS `rolemenu`;
CREATE TABLE `rolemenu`  (
  `roleid` int(5) NULL DEFAULT NULL,
  `menuid` int(10) NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for territory
-- ----------------------------
DROP TABLE IF EXISTS `territory`;
CREATE TABLE `territory`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `parentid` int(10) NULL DEFAULT NULL,
  `typeid` int(10) NULL DEFAULT NULL,
  `createdby` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `createdon` timestamp(6) NULL DEFAULT NULL,
  `status` int(1) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for territorytype
-- ----------------------------
DROP TABLE IF EXISTS `territorytype`;
CREATE TABLE `territorytype`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `parentid` int(10) NULL DEFAULT NULL,
  `status` int(1) NULL DEFAULT NULL,
  `createdby` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `createdon` timestamp(6) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `fullname` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `mdid` int(5) NULL DEFAULT NULL,
  `roleid` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `jemaatid` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status` int(5) NULL DEFAULT NULL,
  `createdby` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `createdon` datetime(0) NULL DEFAULT NULL,
  `updatedby` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `updatedon` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for userrole
-- ----------------------------
DROP TABLE IF EXISTS `userrole`;
CREATE TABLE `userrole`  (
  `userid` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `roleid` int(10) NULL DEFAULT NULL,
  PRIMARY KEY (`userid`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

SET FOREIGN_KEY_CHECKS = 1;
