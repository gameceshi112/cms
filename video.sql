/*
 Navicat MySQL Data Transfer

 Source Server         : Loacl
 Source Server Type    : MySQL
 Source Server Version : 100132
 Source Host           : localhost:3306
 Source Schema         : mysql_db

 Target Server Type    : MySQL
 Target Server Version : 100132
 File Encoding         : 65001

 Date: 03/07/2018 05:32:05
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for video
-- ----------------------------
DROP TABLE IF EXISTS `video`;
CREATE TABLE `video`  (
  `VID` bigint(20) NOT NULL AUTO_INCREMENT,
  `UID` bigint(20) NOT NULL DEFAULT 0,
  `title` varchar(120) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `description` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `featuredesc` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `keyword` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `channel` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '0|',
  `vdoname` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `flvdoname` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `formats` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `lformats` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `duration` float NOT NULL DEFAULT 0,
  `space` bigint(20) NOT NULL DEFAULT 0,
  `type` varchar(7) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `addtime` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `adddate` date NOT NULL,
  `record_date` date NOT NULL,
  `location` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `country` varchar(120) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `vkey` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `viewnumber` bigint(10) NOT NULL DEFAULT 0,
  `viewtime` datetime(0) NOT NULL,
  `com_num` int(8) NOT NULL DEFAULT 0,
  `fav_num` int(8) NOT NULL DEFAULT 0,
  `download_num` bigint(20) NOT NULL DEFAULT 0,
  `featured` varchar(3) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'no',
  `ratedby` bigint(10) NOT NULL DEFAULT 0,
  `rate` float NOT NULL DEFAULT 0,
  `filehome` varchar(120) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `be_comment` varchar(3) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'yes',
  `be_rated` varchar(3) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'yes',
  `embed` varchar(8) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'enabled',
  `embed_code` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `thumb` tinyint(1) UNSIGNED NOT NULL DEFAULT 1,
  `thumbs` tinyint(2) UNSIGNED NOT NULL DEFAULT 20,
  `voter_id` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `server` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `active` char(1) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `hd_filename` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `ipod_filename` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `aspect_hd` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '0',
  `width_hd` int(4) NOT NULL DEFAULT 0,
  `height_hd` int(4) NOT NULL DEFAULT 0,
  `aspect_sd` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '0',
  `width_sd` int(4) NOT NULL DEFAULT 0,
  `height_sd` int(4) NOT NULL DEFAULT 0,
  `iphone` int(1) NOT NULL DEFAULT 0,
  `hd` int(1) NOT NULL DEFAULT 0,
  `likes` bigint(20) NOT NULL DEFAULT 0,
  `dislikes` bigint(20) NOT NULL DEFAULT 0,
  `is_link` tinyint(255) NULL DEFAULT NULL,
  `link` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `thumb_img` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`VID`) USING BTREE,
  UNIQUE INDEX `vkey`(`vkey`) USING BTREE,
  INDEX `viewnumber`(`viewnumber`) USING BTREE,
  INDEX `rate`(`rate`) USING BTREE,
  INDEX `fav_num`(`fav_num`) USING BTREE,
  INDEX `active`(`active`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 708 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

SET FOREIGN_KEY_CHECKS = 1;
