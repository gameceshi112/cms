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

 Date: 03/07/2018 05:41:27
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for adv
-- ----------------------------
DROP TABLE IF EXISTS `adv`;
CREATE TABLE `adv`  (
  `adv_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `adv_group` tinyint(3) UNSIGNED NOT NULL DEFAULT 0,
  `adv_name` varchar(99) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `adv_text` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `adv_views` bigint(20) NOT NULL DEFAULT 0,
  `adv_click` bigint(20) NOT NULL DEFAULT 0,
  `adv_addtime` bigint(20) NOT NULL DEFAULT 0,
  `adv_status` enum('1','0') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`adv_id`) USING BTREE,
  INDEX `adv_group`(`adv_group`) USING BTREE,
  INDEX `adv_addtime`(`adv_addtime`) USING BTREE,
  INDEX `adv_status`(`adv_status`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for adv_group
-- ----------------------------
DROP TABLE IF EXISTS `adv_group`;
CREATE TABLE `adv_group`  (
  `advgrp_id` tinyint(3) UNSIGNED NOT NULL DEFAULT 0,
  `advgrp_name` varchar(99) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `total_advs` bigint(20) NOT NULL DEFAULT 0,
  `advgrp_rotate` enum('1','0') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '1',
  `advgrp_status` enum('1','0') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '1',
  `adv_width` tinyint(4) UNSIGNED NOT NULL DEFAULT 0,
  `adv_height` tinyint(4) UNSIGNED NOT NULL DEFAULT 0,
  INDEX `advgrp_name`(`advgrp_name`) USING BTREE,
  INDEX `advgrp_rotate`(`advgrp_rotate`) USING BTREE,
  INDEX `advgrp_status`(`advgrp_status`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of adv_group
-- ----------------------------
INSERT INTO `adv_group` VALUES (1, 'index_right', 0, '1', '1', 0, 0);
INSERT INTO `adv_group` VALUES (2, 'index_bottom', 0, '1', '1', 0, 0);
INSERT INTO `adv_group` VALUES (3, 'videos_right', 0, '1', '1', 0, 0);
INSERT INTO `adv_group` VALUES (4, 'videos_bottom', 0, '1', '1', 0, 0);
INSERT INTO `adv_group` VALUES (5, 'categories_right', 0, '1', '1', 0, 0);
INSERT INTO `adv_group` VALUES (6, 'categories_bottom', 0, '1', '1', 0, 0);
INSERT INTO `adv_group` VALUES (7, 'community_right', 0, '1', '1', 0, 0);
INSERT INTO `adv_group` VALUES (8, 'community_bottom', 0, '1', '1', 0, 0);
INSERT INTO `adv_group` VALUES (9, 'blogs_lefts', 0, '1', '1', 0, 0);
INSERT INTO `adv_group` VALUES (10, 'blogs_right', 0, '1', '1', 0, 0);
INSERT INTO `adv_group` VALUES (11, 'blogs_bottom', 0, '1', '1', 0, 0);
INSERT INTO `adv_group` VALUES (12, 'users_right', 0, '1', '1', 0, 0);
INSERT INTO `adv_group` VALUES (13, 'users_bottom', 0, '1', '1', 0, 0);
INSERT INTO `adv_group` VALUES (14, 'albums_right', 0, '1', '1', 0, 0);
INSERT INTO `adv_group` VALUES (21, 'search_bottom', 0, '1', '1', 0, 0);
INSERT INTO `adv_group` VALUES (20, 'search_right', 0, '1', '1', 0, 0);
INSERT INTO `adv_group` VALUES (19, 'video_right_second', 0, '1', '1', 0, 0);
INSERT INTO `adv_group` VALUES (18, 'photo_bottom', 0, '1', '1', 0, 0);
INSERT INTO `adv_group` VALUES (17, 'video_bottom', 0, '1', '1', 0, 0);
INSERT INTO `adv_group` VALUES (16, 'video_right', 0, '1', '1', 0, 0);
INSERT INTO `adv_group` VALUES (15, 'albums_bottom', 0, '1', '1', 0, 0);
INSERT INTO `adv_group` VALUES (22, 'search_photos_right', 0, '1', '1', 0, 0);
INSERT INTO `adv_group` VALUES (23, 'search_photos_bottom', 0, '1', '1', 0, 0);
INSERT INTO `adv_group` VALUES (24, 'search_users_right', 0, '1', '1', 0, 0);
INSERT INTO `adv_group` VALUES (25, 'search_users_bottom', 0, '1', '1', 0, 0);
INSERT INTO `adv_group` VALUES (26, 'games_right', 0, '1', '1', 0, 0);
INSERT INTO `adv_group` VALUES (27, 'games_bottom', 0, '1', '1', 0, 0);
INSERT INTO `adv_group` VALUES (28, 'game_right', 0, '1', '1', 0, 0);
INSERT INTO `adv_group` VALUES (29, 'game_bottom', 0, '1', '1', 0, 0);
INSERT INTO `adv_group` VALUES (30, 'game_right_second', 0, '1', '1', 0, 0);

-- ----------------------------
-- Table structure for adv_pause
-- ----------------------------
DROP TABLE IF EXISTS `adv_pause`;
CREATE TABLE `adv_pause`  (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(99) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `code` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `device` enum('dm','d','m') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'dm',
  `categories` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `views` bigint(20) NOT NULL DEFAULT 0,
  `clicks` bigint(20) NOT NULL DEFAULT 0,
  `status` enum('1','0') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `status`(`status`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for aembedder
-- ----------------------------
DROP TABLE IF EXISTS `aembedder`;
CREATE TABLE `aembedder`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `website` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `url` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `uid` bigint(20) NOT NULL DEFAULT 1,
  `cid` bigint(20) NOT NULL DEFAULT 0,
  `run_key` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `added` bigint(20) NOT NULL DEFAULT 0,
  `total` bigint(20) NOT NULL DEFAULT 0,
  `last_run` datetime(0) NULL DEFAULT NULL,
  `pid` bigint(20) NOT NULL DEFAULT 0,
  `status` enum('0','1') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `url`(`url`) USING BTREE,
  INDEX `pid`(`pid`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for album_categories
-- ----------------------------
DROP TABLE IF EXISTS `album_categories`;
CREATE TABLE `album_categories`  (
  `CID` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `slug` varchar(120) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `total_albums` bigint(20) NOT NULL DEFAULT 0,
  PRIMARY KEY (`CID`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of album_categories
-- ----------------------------
INSERT INTO `album_categories` VALUES (1, '图片分类1', '', 0);
INSERT INTO `album_categories` VALUES (2, '图片分类2', '3', 0);
INSERT INTO `album_categories` VALUES (3, '图片分类3', '11', 0);

-- ----------------------------
-- Table structure for albums
-- ----------------------------
DROP TABLE IF EXISTS `albums`;
CREATE TABLE `albums`  (
  `AID` bigint(20) NOT NULL AUTO_INCREMENT,
  `UID` bigint(20) NOT NULL DEFAULT 0,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `tags` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `category` tinyint(2) NOT NULL DEFAULT 0,
  `total_photos` bigint(20) NOT NULL DEFAULT 0,
  `total_views` bigint(20) NOT NULL DEFAULT 0,
  `type` enum('public','private') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'public',
  `addtime` bigint(20) NOT NULL DEFAULT 0,
  `status` enum('1','0') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '1',
  `adddate` date NOT NULL,
  `rate` float NOT NULL DEFAULT 0,
  `ratedby` bigint(20) NOT NULL DEFAULT 0,
  `total_comments` bigint(20) NOT NULL DEFAULT 0,
  `total_favorites` bigint(20) NOT NULL DEFAULT 0,
  `likes` bigint(20) NOT NULL DEFAULT 0,
  `dislikes` bigint(20) NOT NULL DEFAULT 0,
  PRIMARY KEY (`AID`) USING BTREE,
  INDEX `UID`(`UID`) USING BTREE,
  INDEX `type`(`type`) USING BTREE,
  INDEX `status`(`status`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for bans
-- ----------------------------
DROP TABLE IF EXISTS `bans`;
CREATE TABLE `bans`  (
  `ban_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `ban_ip` varchar(16) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `ban_date` datetime(0) NOT NULL,
  PRIMARY KEY (`ban_id`) USING BTREE,
  INDEX `ban_ip`(`ban_ip`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bans
-- ----------------------------
INSERT INTO `bans` VALUES (2, '128.0.01', '2018-06-05 08:12:45');
INSERT INTO `bans` VALUES (1, '128.0.01', '2018-06-05 08:12:45');

-- ----------------------------
-- Table structure for blog
-- ----------------------------
DROP TABLE IF EXISTS `blog`;
CREATE TABLE `blog`  (
  `BID` bigint(20) NOT NULL AUTO_INCREMENT,
  `UID` bigint(20) NOT NULL DEFAULT 0,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `content` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `total_views` bigint(20) NOT NULL DEFAULT 0,
  `total_comments` bigint(20) NOT NULL DEFAULT 0,
  `total_links` bigint(20) NOT NULL DEFAULT 0,
  `addtime` bigint(20) NOT NULL DEFAULT 0,
  `adddate` date NOT NULL,
  `status` enum('1','0') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`BID`) USING BTREE,
  INDEX `UID`(`UID`) USING BTREE,
  INDEX `status`(`status`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for blog_comments
-- ----------------------------
DROP TABLE IF EXISTS `blog_comments`;
CREATE TABLE `blog_comments`  (
  `CID` bigint(20) NOT NULL AUTO_INCREMENT,
  `BID` bigint(20) NOT NULL DEFAULT 0,
  `UID` bigint(20) NOT NULL DEFAULT 0,
  `comment` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `addtime` bigint(20) NOT NULL DEFAULT 0,
  `status` enum('1','0') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`CID`) USING BTREE,
  INDEX `BID`(`BID`) USING BTREE,
  INDEX `UID`(`UID`) USING BTREE,
  INDEX `status`(`status`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for channel
-- ----------------------------
DROP TABLE IF EXISTS `channel`;
CREATE TABLE `channel`  (
  `CHID` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(120) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `slug` varchar(120) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `total_videos` bigint(20) NOT NULL DEFAULT 0,
  PRIMARY KEY (`CHID`) USING BTREE,
  UNIQUE INDEX `name`(`name`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of channel
-- ----------------------------
INSERT INTO `channel` VALUES (1, '动漫', '', 2);
INSERT INTO `channel` VALUES (2, '动漫2', '2', 1);
INSERT INTO `channel` VALUES (3, '动漫4', '1', 0);

-- ----------------------------
-- Table structure for confirm
-- ----------------------------
DROP TABLE IF EXISTS `confirm`;
CREATE TABLE `confirm`  (
  `UID` bigint(20) NOT NULL DEFAULT 0,
  `code` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  INDEX `UID`(`UID`) USING BTREE,
  INDEX `code`(`code`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of confirm
-- ----------------------------
INSERT INTO `confirm` VALUES (2, '5Hfp8ATht3');
INSERT INTO `confirm` VALUES (3, 'PzzsdmXPco');

-- ----------------------------
-- Table structure for csv_files
-- ----------------------------
DROP TABLE IF EXISTS `csv_files`;
CREATE TABLE `csv_files`  (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `total` bigint(20) NOT NULL DEFAULT 0,
  `completed` bigint(20) NOT NULL DEFAULT 0,
  `pid` bigint(20) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `url`(`url`) USING BTREE,
  INDEX `total`(`total`) USING BTREE,
  INDEX `completed`(`completed`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for csv_formats
-- ----------------------------
DROP TABLE IF EXISTS `csv_formats`;
CREATE TABLE `csv_formats`  (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `format` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `name`(`name`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for emailinfo
-- ----------------------------
DROP TABLE IF EXISTS `emailinfo`;
CREATE TABLE `emailinfo`  (
  `email_id` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `email_subject` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `email_path` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`email_id`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of emailinfo
-- ----------------------------
INSERT INTO `emailinfo` VALUES ('welcome', 'Welcome to {$site_title}', 'emails/welcome.tpl', 'Register welcome email');
INSERT INTO `emailinfo` VALUES ('recover_password', 'Your {$site_name} Username and Password', 'emails/recover_password.tpl', 'Recovering user login password');
INSERT INTO `emailinfo` VALUES ('subscribe_email', '{$sender_name} has uploaded a new video', 'emails/subscribe_email.tpl', 'Video Subscription Email');
INSERT INTO `emailinfo` VALUES ('friend_request', '{$username} added you as a friend on {$site_name}', 'emails/friend_request.tpl', 'Friend Request');
INSERT INTO `emailinfo` VALUES ('invite_friends_email', '{$sender_name} has sent you a invitation!', 'emails/invite.tpl', 'Invite friends email');
INSERT INTO `emailinfo` VALUES ('share_video', '{$sender_name} has sent you a video!', 'emails/share_video.tpl', 'Share video email');
INSERT INTO `emailinfo` VALUES ('share_photo', '{$sender_name} has sent you a photo!', 'emails/share_photo.tpl', 'Share photo email');
INSERT INTO `emailinfo` VALUES ('share_game', '{$sender_name} has sent you a game!', 'emails/share_game.tpl', 'Share game email');
INSERT INTO `emailinfo` VALUES ('verify_email', '{$site_name} Confirmation Email', 'emails/verify_email.tpl', 'Email verification');
INSERT INTO `emailinfo` VALUES ('video_upload', 'Your video was successfuly uploaded to {$site_name}!', 'emails/video_upload.tpl', 'Video upload email');
INSERT INTO `emailinfo` VALUES ('video_approve', 'Your video was successfuly uploaded to {$site_name}!', 'emails/video_approve.tpl', 'Video upload email');
INSERT INTO `emailinfo` VALUES ('photo_approve', 'Your album was successfuly uploaded to {$site_name}!', 'emails/photo_approve.tpl', 'Album approve email');
INSERT INTO `emailinfo` VALUES ('photo_upload', 'Your album was successfuly uploaded to {$site_name}!', 'emails/photo_upload.tpl', 'Album upload email');
INSERT INTO `emailinfo` VALUES ('game_approve', 'Your game was successfuly uploaded to {$site_name}!', 'emails/game_approve.tpl', 'Game approve email');
INSERT INTO `emailinfo` VALUES ('game_upload', 'Your game was successfuly uploaded to {$site_name}!', 'emails/game_upload.tpl', 'Game upload email');
INSERT INTO `emailinfo` VALUES ('wall_comment', 'Your received wall comment!', 'emails/wall_comment.tpl', 'Wall comment email');
INSERT INTO `emailinfo` VALUES ('request_approved', 'Your friend request has been approved!', 'emails/request_approved.tpl', 'Friend request approve');
INSERT INTO `emailinfo` VALUES ('request_rejected', 'Your friend request has been approved!', 'emails/request_rejected.tpl', 'Friend request rejected');
INSERT INTO `emailinfo` VALUES ('video_comment', 'You received video comment from {$username}!', 'emails/video_comment.tpl', 'video comment');
INSERT INTO `emailinfo` VALUES ('blog_comment', 'You received blog comment from {$username}!', 'emails/blog_comment.tpl', 'blog comment');
INSERT INTO `emailinfo` VALUES ('game_comment', 'You received game comment from {$username}!', 'emails/game_comment.tpl', 'game comment');
INSERT INTO `emailinfo` VALUES ('photo_comment', 'You received photo comment from {$username}!', 'emails/photo_comment.tpl', 'photo comment');
INSERT INTO `emailinfo` VALUES ('player_email', 'I want to share this video with you!', 'emails/player_email.tpl', 'Player email');

-- ----------------------------
-- Table structure for encoding
-- ----------------------------
DROP TABLE IF EXISTS `encoding`;
CREATE TABLE `encoding`  (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `label` varchar(99) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `width` int(11) NOT NULL DEFAULT 0,
  `height` int(11) NOT NULL DEFAULT 0,
  `crf` tinyint(4) NOT NULL DEFAULT 18,
  `preset` enum('ultrafast','superfast','veryfast','faster','fast','medium','slow','slower','veryslow','placebo') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'fast',
  `faststart` enum('1','0') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '1',
  `ios` enum('-profile:v baseline -level 3.0','-profile:v baseline -level 3.1','-profile:v main -level 3.1','-profile:v main -level 4.0','-profile:v high -level 4.0','-profile:v high -level 4.1','-profile:v high -level 4.2') CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `format` varchar(99) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT 'mp4',
  `copyonly` enum('1','0') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '1',
  `status` enum('1','0') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of encoding
-- ----------------------------
INSERT INTO `encoding` VALUES (1, '240p', 320, 240, 23, 'medium', '1', '', 'mp4', '1', '1');
INSERT INTO `encoding` VALUES (2, '360p', 480, 360, 23, 'medium', '1', '', 'mp4', '1', '1');
INSERT INTO `encoding` VALUES (3, '480p', 640, 480, 23, 'medium', '1', '', 'mp4', '1', '1');
INSERT INTO `encoding` VALUES (4, '720p', 1280, 720, 23, 'medium', '1', '', 'mp4', '1', '1');
INSERT INTO `encoding` VALUES (5, '1080p', 1920, 1080, 20, 'fast', '1', '', 'mp4', '1', '1');

-- ----------------------------
-- Table structure for favourite
-- ----------------------------
DROP TABLE IF EXISTS `favourite`;
CREATE TABLE `favourite`  (
  `UID` bigint(20) NOT NULL DEFAULT 0,
  `VID` bigint(20) NOT NULL DEFAULT 0,
  UNIQUE INDEX `UID`(`UID`, `VID`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Fixed;

-- ----------------------------
-- Table structure for friends
-- ----------------------------
DROP TABLE IF EXISTS `friends`;
CREATE TABLE `friends`  (
  `UID` bigint(20) NOT NULL DEFAULT 0,
  `FID` bigint(20) NOT NULL DEFAULT 0,
  `invite_date` date NOT NULL,
  `status` enum('Pending','Confirmed','Denied') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'Pending',
  `message` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  INDEX `UID_FID`(`UID`, `FID`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for game
-- ----------------------------
DROP TABLE IF EXISTS `game`;
CREATE TABLE `game`  (
  `GID` bigint(20) NOT NULL AUTO_INCREMENT,
  `UID` bigint(20) NOT NULL DEFAULT 0,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `tags` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `category` tinyint(3) NOT NULL DEFAULT 0,
  `total_plays` bigint(20) NOT NULL DEFAULT 0,
  `total_comments` bigint(20) NOT NULL DEFAULT 0,
  `total_favorites` bigint(20) NOT NULL DEFAULT 0,
  `rate` float NOT NULL DEFAULT 0,
  `ratedby` bigint(20) NOT NULL DEFAULT 0,
  `type` enum('public','private') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'public',
  `space` bigint(20) NOT NULL DEFAULT 0,
  `playtime` datetime(0) NOT NULL,
  `be_commented` enum('yes','no') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'yes',
  `be_rated` enum('yes','no') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'yes',
  `addtime` bigint(20) NOT NULL DEFAULT 0,
  `adddate` date NOT NULL,
  `status` enum('1','0') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '1',
  `likes` bigint(20) NOT NULL DEFAULT 0,
  `dislikes` bigint(20) NOT NULL DEFAULT 0,
  PRIMARY KEY (`GID`) USING BTREE,
  INDEX `UID`(`UID`) USING BTREE,
  INDEX `type`(`type`) USING BTREE,
  INDEX `status`(`status`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for game_categories
-- ----------------------------
DROP TABLE IF EXISTS `game_categories`;
CREATE TABLE `game_categories`  (
  `category_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `slug` varchar(120) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `total_games` bigint(20) NOT NULL DEFAULT 0,
  `status` enum('1','0') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`category_id`) USING BTREE,
  INDEX `status`(`status`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for game_comments
-- ----------------------------
DROP TABLE IF EXISTS `game_comments`;
CREATE TABLE `game_comments`  (
  `CID` bigint(20) NOT NULL AUTO_INCREMENT,
  `GID` bigint(20) NOT NULL DEFAULT 0,
  `UID` bigint(20) NOT NULL DEFAULT 0,
  `comment` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `addtime` bigint(20) NOT NULL DEFAULT 0,
  `status` enum('1','0') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`CID`) USING BTREE,
  INDEX `GID`(`GID`) USING BTREE,
  INDEX `UID`(`UID`) USING BTREE,
  INDEX `status`(`status`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for game_favorites
-- ----------------------------
DROP TABLE IF EXISTS `game_favorites`;
CREATE TABLE `game_favorites`  (
  `GID` bigint(20) NOT NULL DEFAULT 0,
  `UID` bigint(20) NOT NULL DEFAULT 0,
  INDEX `GID`(`GID`) USING BTREE,
  INDEX `UID`(`UID`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Fixed;

-- ----------------------------
-- Table structure for game_flags
-- ----------------------------
DROP TABLE IF EXISTS `game_flags`;
CREATE TABLE `game_flags`  (
  `FID` bigint(20) NOT NULL AUTO_INCREMENT,
  `GID` bigint(20) NOT NULL DEFAULT 0,
  `UID` bigint(20) NOT NULL DEFAULT 0,
  `reason` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `message` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `add_date` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`FID`) USING BTREE,
  INDEX `GID_UID`(`GID`, `UID`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for game_rating_id
-- ----------------------------
DROP TABLE IF EXISTS `game_rating_id`;
CREATE TABLE `game_rating_id`  (
  `GID` bigint(20) NOT NULL DEFAULT 0,
  `UID` bigint(20) NOT NULL DEFAULT 0,
  INDEX `GID`(`GID`) USING BTREE,
  INDEX `UID`(`UID`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Fixed;

-- ----------------------------
-- Table structure for game_rating_ip
-- ----------------------------
DROP TABLE IF EXISTS `game_rating_ip`;
CREATE TABLE `game_rating_ip`  (
  `GID` bigint(20) NOT NULL DEFAULT 0,
  `ip` int(9) NOT NULL DEFAULT 0,
  INDEX `GID`(`GID`) USING BTREE,
  INDEX `ip`(`ip`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Fixed;

-- ----------------------------
-- Table structure for guests
-- ----------------------------
DROP TABLE IF EXISTS `guests`;
CREATE TABLE `guests`  (
  `guest_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `guest_ip` int(9) NOT NULL DEFAULT 0,
  `last_login` datetime(0) NOT NULL,
  `bandwidth` bigint(20) NOT NULL DEFAULT 0,
  PRIMARY KEY (`guest_id`) USING BTREE,
  INDEX `guest_ip`(`guest_ip`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Fixed;

-- ----------------------------
-- Table structure for mail
-- ----------------------------
DROP TABLE IF EXISTS `mail`;
CREATE TABLE `mail`  (
  `mail_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `sender` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `receiver` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `subject` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `body` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `inbox` enum('1','0') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '1',
  `outbox` enum('1','0') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '0',
  `send_date` datetime(0) NOT NULL,
  `status` enum('1','0') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '1',
  `readed` enum('1','0') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`mail_id`) USING BTREE,
  INDEX `sender`(`sender`) USING BTREE,
  INDEX `receiver`(`receiver`) USING BTREE,
  INDEX `inbox`(`inbox`) USING BTREE,
  INDEX `outbox`(`outbox`) USING BTREE,
  INDEX `status`(`status`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for notice
-- ----------------------------
DROP TABLE IF EXISTS `notice`;
CREATE TABLE `notice`  (
  `NID` bigint(20) NOT NULL AUTO_INCREMENT,
  `UID` bigint(20) NOT NULL DEFAULT 0,
  `category` tinyint(3) NOT NULL DEFAULT 0,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `content` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `total_views` bigint(20) NOT NULL DEFAULT 0,
  `total_comments` bigint(20) NOT NULL DEFAULT 0,
  `total_links` bigint(20) NOT NULL DEFAULT 0,
  `addtime` bigint(20) NOT NULL DEFAULT 0,
  `adddate` date NOT NULL,
  `status` enum('1','0') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`NID`) USING BTREE,
  INDEX `UID`(`UID`) USING BTREE,
  INDEX `status`(`status`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for notice_categories
-- ----------------------------
DROP TABLE IF EXISTS `notice_categories`;
CREATE TABLE `notice_categories`  (
  `category_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `total_notices` bigint(20) NOT NULL DEFAULT 0,
  `status` enum('1','0') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`category_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for notice_comments
-- ----------------------------
DROP TABLE IF EXISTS `notice_comments`;
CREATE TABLE `notice_comments`  (
  `CID` bigint(20) NOT NULL AUTO_INCREMENT,
  `NID` bigint(20) NOT NULL DEFAULT 0,
  `UID` bigint(20) NOT NULL DEFAULT 0,
  `comment` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `addtime` bigint(20) NOT NULL DEFAULT 0,
  `status` enum('1','0') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`CID`) USING BTREE,
  INDEX `NID`(`NID`) USING BTREE,
  INDEX `UID`(`UID`) USING BTREE,
  INDEX `status`(`status`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for notice_images
-- ----------------------------
DROP TABLE IF EXISTS `notice_images`;
CREATE TABLE `notice_images`  (
  `image_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `addtime` bigint(20) NOT NULL DEFAULT 0,
  `extension` varchar(5) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`image_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for photo_comments
-- ----------------------------
DROP TABLE IF EXISTS `photo_comments`;
CREATE TABLE `photo_comments`  (
  `CID` bigint(20) NOT NULL AUTO_INCREMENT,
  `PID` bigint(20) NOT NULL DEFAULT 0,
  `UID` bigint(20) NOT NULL DEFAULT 0,
  `comment` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `addtime` bigint(20) NOT NULL DEFAULT 0,
  `status` enum('1','0') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`CID`) USING BTREE,
  INDEX `PID`(`PID`) USING BTREE,
  INDEX `UID`(`UID`) USING BTREE,
  INDEX `status`(`status`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for photo_favorites
-- ----------------------------
DROP TABLE IF EXISTS `photo_favorites`;
CREATE TABLE `photo_favorites`  (
  `PID` bigint(20) NOT NULL DEFAULT 0,
  `UID` bigint(20) NOT NULL DEFAULT 0,
  INDEX `PID`(`PID`) USING BTREE,
  INDEX `UID`(`UID`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Fixed;

-- ----------------------------
-- Table structure for photo_flags
-- ----------------------------
DROP TABLE IF EXISTS `photo_flags`;
CREATE TABLE `photo_flags`  (
  `FID` bigint(20) NOT NULL AUTO_INCREMENT,
  `PID` bigint(20) NOT NULL DEFAULT 0,
  `UID` bigint(20) NOT NULL DEFAULT 0,
  `reason` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `message` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `add_date` date NOT NULL,
  PRIMARY KEY (`FID`) USING BTREE,
  INDEX `PID`(`PID`) USING BTREE,
  INDEX `UID`(`UID`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for photo_rating_id
-- ----------------------------
DROP TABLE IF EXISTS `photo_rating_id`;
CREATE TABLE `photo_rating_id`  (
  `PID` bigint(20) NOT NULL DEFAULT 0,
  `UID` bigint(20) NOT NULL DEFAULT 0,
  INDEX `PID`(`PID`) USING BTREE,
  INDEX `UID`(`UID`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Fixed;

-- ----------------------------
-- Table structure for photo_rating_ip
-- ----------------------------
DROP TABLE IF EXISTS `photo_rating_ip`;
CREATE TABLE `photo_rating_ip`  (
  `PID` bigint(20) NOT NULL DEFAULT 0,
  `ip` int(9) NOT NULL DEFAULT 0,
  INDEX `PID`(`PID`) USING BTREE,
  INDEX `ip`(`ip`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Fixed;

-- ----------------------------
-- Table structure for photos
-- ----------------------------
DROP TABLE IF EXISTS `photos`;
CREATE TABLE `photos`  (
  `PID` bigint(20) NOT NULL AUTO_INCREMENT,
  `AID` bigint(20) NOT NULL DEFAULT 0,
  `caption` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `total_views` bigint(20) NOT NULL DEFAULT 0,
  `total_comments` bigint(20) NOT NULL DEFAULT 0,
  `status` enum('1','0') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '1',
  `rate` float NOT NULL DEFAULT 0,
  `ratedby` bigint(20) NOT NULL DEFAULT 0,
  `total_favorites` bigint(20) NOT NULL DEFAULT 0,
  `type` enum('public','private') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'public',
  `likes` bigint(20) NOT NULL DEFAULT 0,
  `dislikes` bigint(20) NOT NULL DEFAULT 0,
  PRIMARY KEY (`PID`) USING BTREE,
  INDEX `AID`(`AID`) USING BTREE,
  INDEX `status`(`status`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for player
-- ----------------------------
DROP TABLE IF EXISTS `player`;
CREATE TABLE `player`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `profile` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `autoplay` enum('0','1') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '0',
  `resolution` enum('low','high') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'low',
  `timeline_preview` enum('0','1') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '1',
  `logo` enum('0','1') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '0',
  `logo_redirect` enum('0','1') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '0',
  `logo_position` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'top-right',
  `logo_link` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `logo_opacity` tinyint(3) UNSIGNED NOT NULL DEFAULT 40,
  `pause_adv` enum('0','1') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '0',
  `timeline_adv` enum('0','1') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '0',
  `status` enum('0','1') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `profile`(`profile`) USING BTREE,
  INDEX `status`(`status`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of player
-- ----------------------------
INSERT INTO `player` VALUES (1, 'Main', '0', 'high', '1', '1', '1', 'top-right', '', 40, '1', '1', '1');
INSERT INTO `player` VALUES (2, 'Embed', '0', 'low', '1', '1', '1', 'top-right', '', 40, '1', '0', '1');
INSERT INTO `player` VALUES (3, 'Blog/Comment', '0', 'low', '0', '0', '0', 'top-right', '', 40, '0', '0', '1');
INSERT INTO `player` VALUES (4, 'Admin', '0', 'low', '0', '0', '0', 'top-right', '', 40, '0', '0', '0');

-- ----------------------------
-- Table structure for playlist
-- ----------------------------
DROP TABLE IF EXISTS `playlist`;
CREATE TABLE `playlist`  (
  `UID` bigint(20) NULL DEFAULT NULL,
  `VID` bigint(20) NULL DEFAULT NULL,
  UNIQUE INDEX `UID`(`UID`, `VID`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Fixed;

-- ----------------------------
-- Records of playlist
-- ----------------------------
INSERT INTO `playlist` VALUES (3, 92);

-- ----------------------------
-- Table structure for servers
-- ----------------------------
DROP TABLE IF EXISTS `servers`;
CREATE TABLE `servers`  (
  `server_id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `video_url` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `server_ip` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `ftp_username` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `ftp_password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `ftp_root` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `last_used` datetime(0) NOT NULL,
  `current_used` enum('0','1') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '0',
  `status` enum('0','1') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`server_id`) USING BTREE,
  UNIQUE INDEX `url`(`url`) USING BTREE,
  INDEX `last_used`(`last_used`) USING BTREE,
  INDEX `current_used`(`current_used`) USING BTREE,
  INDEX `status`(`status`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for sessions
-- ----------------------------
DROP TABLE IF EXISTS `sessions`;
CREATE TABLE `sessions`  (
  `session_id` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `session_expires` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `session_data` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
  PRIMARY KEY (`session_id`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of sessions
-- ----------------------------
INSERT INTO `sessions` VALUES ('ks757mvmrpsuntscp980prgk95', 1530372458, 'language|s:5:\"cn_CS\";uid|s:1:\"3\";username|s:5:\"user1\";email|s:16:\"dfasf11@gami.com\";emailverified|s:2:\"no\";photo|s:0:\"\";fname|s:0:\"\";gender|s:4:\"Male\";redirect|s:13:\"/upload/video\";AUID|s:5:\"admin\";APASSWORD|s:5:\"admin\";');
INSERT INTO `sessions` VALUES ('paou7ej4q06e716an5kqgs0r40', 1530378801, 'language|s:5:\"cn_CS\";AUID|s:5:\"admin\";APASSWORD|s:5:\"admin\";');
INSERT INTO `sessions` VALUES ('843t5f0rr7bnt85t4ni1vufpq4', 1530414667, 'language|s:5:\"cn_CS\";uid|s:1:\"3\";username|s:5:\"user1\";email|s:16:\"dfasf11@gami.com\";emailverified|s:2:\"no\";photo|s:0:\"\";fname|s:0:\"\";gender|s:4:\"Male\";redirect|s:13:\"/upload/video\";w_comment_added|i:1530412836;');
INSERT INTO `sessions` VALUES ('vaejdcs77rim84q06gknjnlqh0', 1530416040, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('c7dttbtpgjca4esc4fcspcnkt4', 1530435509, 'language|s:5:\"cn_CS\";');
INSERT INTO `sessions` VALUES ('15pvcnte666eo8qnfsokfmmvf6', 1530416066, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('fm0hupksfh85rngolgvu2a7da4', 1530416066, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('al6hg69ru2tkmv5tb2e8ubip07', 1530416178, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('lotrhcgvpvhd62nkmvncqnoqt3', 1530417022, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('36bsm5oh88hm0cq2ceh6h5rjv4', 1530417022, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('qqv2f9tft6976ehunjvrlasql3', 1530417054, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('plqh0csird2drp86j9gdcioi73', 1530417054, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('39b524prd3c1324cnr2gb181t3', 1530417056, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('3v293nq07quvef2dfs996jl2q3', 1530417056, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('0bd6hh5dhoeefanat0artrkqb5', 1530417181, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('h531d2eqhcqncfvhkbq3a3drf6', 1530417181, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('eq5f9dqerd1o7a05qm3l9glq27', 1530417182, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('fdkes83bre59dckg1lrjuhub03', 1530417182, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('uncq2uo09h7le0e7b5bjgko7s1', 1530417237, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('jtlr24v6578qvhlqkou30sggc7', 1530417237, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('dm3in1qmvu1f410q14hifqema1', 1530417237, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('4uqigkevj9cile9lnn7ulg3c52', 1530417237, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('hld97q96hccij2414jv8lt3od5', 1530417239, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('6ccf36orv3nr2hqehvfdtg24p1', 1530417239, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('ma7udf8t0cksu7nqda8es25jf2', 1530417239, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('du4n01e12ej2ne250aok4hl1p5', 1530417239, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('p6mb58v1tvmll9bn8rjf209jn3', 1530417240, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('94v3eu8uj176iugvbr4sc8kqv4', 1530417240, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('das4o9sbs5as5qic85nfui9ke0', 1530417240, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('438uhdrpe94dhomorptktvv7o5', 1530417240, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('s1ca8lcvhg87c72ab5l4hg2211', 1530417240, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('qevekd33dallrqpk8pds5ifg05', 1530417240, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('27pktvuni9prm6n5iscjaihfi3', 1530417241, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('lemqsj59s12brs4kalhqkoiul3', 1530417241, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('k17shrk9mja3micgi861pe9ui2', 1530417241, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('akcqod5g48oc5olpd3792rcv73', 1530417241, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('95rv9glmc40iotvtcop3ub8es6', 1530417241, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('93cmukr2u6q9p1440u9rmjns56', 1530417241, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('o9kqckr7u5q3vm28m4ncinkin7', 1530417242, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('14erk3ou5pm2f3ufm4av9k53i4', 1530417242, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('i7hha9nehb90hkm3f7hv2vj4e0', 1530417242, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('6ljjtoo7c43cf7ljooncu498k4', 1530417242, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('pqf671imoa63sngaf763i2ae13', 1530417242, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('mgroqdtleoqim2abpdcid3ota2', 1530417242, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('6makesprlki4tek9eujssut811', 1530417243, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('ijp3v7788s5jbjh7g4j08lu833', 1530417243, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('c62elc2o5dvpgtqtvg0d0j2ig4', 1530417243, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('qdaa0u6hocd176gk4tj8bshl61', 1530417243, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('uaukmo2920ke6oo3btt0r199a5', 1530417243, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('l9c8tpb0t9qiku6mdigim4vnb0', 1530417243, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('j0hlifk6ina4t3pap78ej5nq77', 1530417244, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('6k8ojt6snb4vtfb4m9ghbrggj5', 1530417244, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('gk3qosnlo5dm4qu9vncvfkug27', 1530417244, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('vkvgp4nj6lou95hhs8uf00h3b5', 1530417244, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('2ascv9la27lvnuet457ldgl677', 1530417245, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('k7ok0m6810lub5du08llpr51a3', 1530417245, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('i6iobtscu6iksigb4f8179s0f1', 1530417245, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('e4e03p50appj6orm9gmms07m67', 1530417245, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('4h4vlnjdh9s2b2n575p37e5dj1', 1530417245, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('nq3q4b7v2udrq64qmccpt27i05', 1530417245, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('9i76aa803nc4394p906uj5pmt0', 1530417246, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('tpurtdtufo6n9ciluig5qb5gu7', 1530417246, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('tk4g6vt0un8coaug3hs070uj53', 1530417246, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('d3u4jqqbm73dl7jl7o05r9jts0', 1530417246, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('45ubgl07rera31armvhe9lfj00', 1530417246, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('2vc1scd9kvjo98lgr9u524ign3', 1530417246, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('4ljha6uapklcn77ldp4nnf51u2', 1530417247, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('vq2pk0joalg2ab2lv3cqlhh735', 1530417247, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('b8hr836o2q8rjm810s54pdjjm2', 1530417247, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('56hgpt3ll3cst4b2oahl1ab7e3', 1530417247, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('igpdr806cdcbbsn0ooqu8vtnc0', 1530417247, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('ir5fl2k1lg38gr94u2ccmub2i3', 1530417247, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('eh49aqqoagm74jcq2eo7vtmej5', 1530417248, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('3i8gbshv34kkhvald541v82el1', 1530417248, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('4uss62hhhopfk02p4ct2om3je3', 1530417248, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('qkrbjero8g16fj8pup9tterj67', 1530417248, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('8mjibc90m7v26osmav8o24qlj6', 1530417248, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('9hevjiqfitgkdb3i28soeap0s0', 1530417248, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('206eml9ulm9fbkmjkjio8pp0q0', 1530417249, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('94fhs8uc3r78dg39aj64kkkl72', 1530417249, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('bre5rva48lku8rulf517p11dd0', 1530417249, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('ojuumsao8nqus33sm4u68gu3l0', 1530417249, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('321a814d7pjj334arp1octkf60', 1530417249, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('g38n5usslnb64sb8ve94ri2r35', 1530417249, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('f9mu7opdghrc475nfsnandd721', 1530417249, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('ob8cs8n5ijje4f1nnhl255q0p1', 1530417250, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('sp6o86jqti47hu0mdlt2gn6b04', 1530417250, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('ou3elp7jlthti5qp61euh14206', 1530417250, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('e1fdm5s6ruk66dfrg1fi4ghdj1', 1530417250, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('deafio7cg85rdu0molaq1gvt64', 1530417250, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('vmsfqkda7jin6f2bmp7niilfm2', 1530417251, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('dehkffl6oah0d58unuiuf4alg6', 1530417251, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('b6ieap31uq7bvf95mbliah2vn2', 1530417368, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('6nekr01ptajpsv2rdk1rvioai5', 1530417368, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('kbpc0s4dp5ijngsbr37ts4u7g2', 1530417369, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('p0gaiql7lja5ej03pauf646gs2', 1530417369, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('3u6osf3vkoko2e5va5tam85vp4', 1530417409, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('99v5gp9a3h1r2chh24n0vesde3', 1530417410, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('ue9rjvbs6hd61gtgngqfssgru1', 1530417410, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('eegmqihptfpgm1va7uh17u8pq7', 1530417410, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('etn63qma24t7kkdfpbc59v9904', 1530417411, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('fobd93l97p5s51uktb3udvsn12', 1530417412, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('cq65h230lor2lvnjfs4f2rh0u1', 1530417412, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('ht5jp4vatgmo44vrki97e0jbe3', 1530417412, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('8026a9bclnnmfcp8mei2hh8cv3', 1530417412, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('on0cjfljindat2329s6sgokbe4', 1530417412, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('u1fkn2jph6rq2b0bg71h1opct6', 1530417412, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('iqbu1lnl1esap0b91qa2j96ug2', 1530417413, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('6ulmkvj3pja9vsie1mll8de8o3', 1530417413, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('6dppf6huig4604b4dc51trvic0', 1530417413, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('omd79psc2hppqo5hcs2oos1930', 1530417413, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('u9umj99djmqratnfmp0i8faog3', 1530417413, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('tp5la3ogjnoetnt49j8ppdbbu7', 1530417413, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('d3pqtigvcsjke6jc5tk4t2eeh2', 1530417414, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('5sfnmsp27dmpugpkk7r1koavn5', 1530417414, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('a8dupv0p9juinqv26sldihdaq1', 1530417414, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('kjcodi89evdi6hv6ivlg9o55c6', 1530417414, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('rgbi9m2pne3didgqqqh4lt0rq3', 1530417414, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('8bptpf2sar995lvuehf3qmqgs0', 1530417414, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('a96vckde5fss9j8is6hu4df994', 1530417414, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('np9jn5b6u9j7rkeqvor015l1b0', 1530418875, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('8pb3u3tfpj84tttbjt06a82l71', 1530418875, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('3iujq9s31cb8jk9q5o1cdccsl1', 1530418890, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('qiatbja3ebgruauonuss3fac67', 1530418890, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('nf3u7ueqralf7poumfju88ul52', 1530418890, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('n80cd51hsv04tvkbjb74r0ngk2', 1530418890, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('3p6s3d6m8vd32s9ui7car09mb6', 1530418891, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('p04c5g7tmmcargovfqhs2fmgm5', 1530418891, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('ph26is7tjmigr8i3ul2r2mo400', 1530418891, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('asr5cl5g0b2e90p2h5bj7gm5a2', 1530418891, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('osllcq5v8tuu28acrn5g0kml72', 1530418892, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('4ef7vkv498jvm8rrfovn0gl9p3', 1530418892, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('tca0jauoh6u7rkn32toee4i7p7', 1530418892, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('aa1ejph46b07u5sdpt03bkkco4', 1530418892, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('5385v705a21unaebirbk4u7243', 1530418905, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('gunjgrgci7f2s7urda8m6uv9q3', 1530418905, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('f8dn3po6sbq0e8g2vv1ae0ps26', 1530418905, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('do9e13a39p8t39jggd8bv02bu0', 1530418905, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('a754fm0im9oblfdh83g410jsa6', 1530418906, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('q3bsgj90c5t15g70lcea5t0c33', 1530418906, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('0i398kkhusq8332ahdbb42kh00', 1530418906, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('0o9t5l8t7u3d7h5q85p1a0rd00', 1530418906, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('ag2bsl00apefiblo2cvqs4s9s4', 1530418906, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('s04jcoigch9oafqsbmifjultr0', 1530418906, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('b482nr3pcttnvnm7rtjl2k8mc2', 1530418906, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('7l75fuu4roes2c0fs98m5j7jv6', 1530418906, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('qqtj6jacqqn937obf3irgu96f6', 1530418907, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('sjmm7trnqt47eo1v687rsuu566', 1530418907, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('vhn3r0tvhab3bv5goqh585mpl7', 1530418907, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('42uvmv43k6jp83p1smuuppcts0', 1530418907, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('ofp90dvjskinqrgi8embkd0b86', 1530418907, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('7ffsvjhr62lbdcc3e8hgbpsq15', 1530418907, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('eecnhtmaoel1n1ch1ginri9345', 1530418908, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('4057f4pl0chaiv5m8me0b7rnm4', 1530418908, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('657lmlgkvoocidntovuestp5t5', 1530418908, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('r2hskljpc34iuhj486cu3rcv72', 1530418908, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('4hv6v4lbgs655fb2ickhj70t81', 1530418908, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('mtk1i5h0b9f4d90g5iut5ot0v0', 1530418908, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('hp129uefu4kj9r3mgv84pig5e0', 1530418909, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('7rn15ei4k6cqsrvor1p46upuc3', 1530418909, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('kib0lqplf7k4g2je6j1lt36l20', 1530418909, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('8p2231j0tmcj0rmjfdm51088s2', 1530418909, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('5ki1tlon29g31qjjigqnaetkh5', 1530418909, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('s6f8faeirg7ffmqm6vvhqi5806', 1530418909, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('60u2kevgr6f5kuo3cn74uaogr5', 1530418910, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('ae33oem9nm0ie6213jo28oqr37', 1530418910, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('p75gvl22umglpsi8b16nugrhn4', 1530418910, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('q4tj2blgescfkhho8aft8l39v0', 1530418910, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('o9dbr9pidot7sm4p0bvj3bbj13', 1530418910, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('s275cmlj6le7mm3pp39pgl8ef0', 1530418910, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('3bq2c3agotm81d5so7rune5an6', 1530418910, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('gtgidjfsjhfpvgnvvtet3q2nb5', 1530418910, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('1n8rrc1ula4md0csg6kbk0f8b6', 1530418911, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('gkepremcmuterg721smtst3jf5', 1530418912, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('v4kaejm7o179m4kc3qatfvplc1', 1530418912, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('thvi571gfp7v20qjdfvd4r4fl5', 1530418912, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('oagbikt8t0j3ft2p9ecn1cd8o4', 1530418938, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('pqrcakqh7fbofpbu6li0o4bhj4', 1530418938, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('flla96tjrhi9qbr72thgmc58h3', 1530418938, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('5637q19dgmfqaclkpsse9s1214', 1530418938, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('2mcf9nvprkbv79vr5hnnih1jc7', 1530418938, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('fg57fn6kra74ujr1vkhnij4g32', 1530418939, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('bd1tckrkfl9k1lppuas752a3h5', 1530418942, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('dnphn1f788kch254mjjpgrif64', 1530418942, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('glortcf7hrgs407u02l893faa5', 1530418942, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('8hi53vga8cc81jgst9p8akus40', 1530418942, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('12ckoni3fof8ckf9c15ghrufu0', 1530418942, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('sldi8mol92i9jp7bc5bn34qgm2', 1530418942, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('u4gt5kq3me8c81em6bttjed6i1', 1530418942, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('i5fq5b9278ggc2dpc9qfv05b14', 1530418943, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('imf5mft2t3r127f97ccua5q1q3', 1530418943, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('k2pbgqcjclgjbcbos71gjfoe23', 1530418943, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('qkv83jvcc2nn8o16c5ms17ao30', 1530418943, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('1d2org2h031m8n4g0fl7f5mr30', 1530418943, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('aqr5otp1ukg3u16b45abn7hn83', 1530418943, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('lvjmh5ncuu8tj59f7v30methj5', 1530418943, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('i6td64p4vjr5roealfc4qjrob1', 1530418944, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('64n1g89kcp308bv9goqsf614q4', 1530418944, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('7fdre511c6orp9t4j8l0t1pmn3', 1530418944, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('kgg5e1m0lfof6odpb1o3p32953', 1530418944, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('sb1t1ueti3jusqnkgkmk14m1e3', 1530418944, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('6m388hfr9mtndo4ghvg8cf0e92', 1530418944, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('k7tt1kpo4gqhjlluk21u8lho03', 1530418944, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('fekdjcv7s0h1ao9p039fvicin1', 1530418944, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('2c8mi3qe462vl80b5v07p1vnc5', 1530418944, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('728i9tr9vgu16k651j77n9e5q7', 1530418945, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('0b01k8neoqjk47dn9o1418hq05', 1530418945, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('ku97n8g31n3pqq4ui259j0fai0', 1530418945, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('qqb0m60aqjkkeijpc1qlmepqe6', 1530418954, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('bt03slq1lq5c9an4ba0l81gm02', 1530418954, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('s1n983jbb8vqlmp7oklur01v42', 1530418955, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('2t20uqsi7kdu2o1m2jgpag2v76', 1530418955, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('36c7qnq0oogqot7avff7rivrn0', 1530418956, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('077iqptuth90d3i51vrn1iftr2', 1530418956, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('2c82pogb1qqcdmsr6cbncp1sk4', 1530418956, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('tasftnhig1t2kg6sbfeforgi06', 1530418956, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('p9npqdokvnr1414aql969dp5j0', 1530418959, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('tqhu31pqhke09t6s1s37tnka34', 1530418960, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('do1gfs2qqrchk7njnnmegnlcn5', 1530418975, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('fljgnslris4lnh4gs423vu7ab2', 1530418975, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('8r69phd0ob4vjcnbr2lbgk6nf5', 1530418976, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('g1llgh5dr4en6p70sqnuhuakk7', 1530418976, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('bfrh6in6qjrjmtlnqc0hubmka1', 1530418976, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('gqqb7msmr6lt99rjh8e296f0u7', 1530418976, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('asl10ea1cplpna6lp82ug4d3u1', 1530419022, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('tb3tprvh9vj19eh9gfhvl81ja1', 1530419022, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('q9s7sj1o7nifegu6jk15dra311', 1530419023, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('0iqomvr5olfqr7m0mlcas0neo3', 1530419023, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('d3r05karth9ts0ea1kh16psu40', 1530419023, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('hp6irrto28b7r82v37jjgnl1m2', 1530419023, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('s7pkng2khdgu7r1ba6cjrisih1', 1530419024, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('oku08ot8qjtub7j8d426jv5dp5', 1530419024, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('lsuuiihj3vlaqi0oe7os5o20s2', 1530419027, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('fu38m3ihdrddf54ca6411sp766', 1530419027, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('9biv54o7t5cgsonfsntf72o9b7', 1530419027, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('18ivq52d0a1lmvkfgr5gh2g1l3', 1530419027, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('q64ickkhvsjlsme7iepilroom1', 1530419066, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('fv5riunnrf3cfslj77t0um1ia2', 1530419066, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('h3oh7u9b7o4un4vr3ifamcn9u7', 1530419066, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('f1sa32rfalnvuk17k3or3eo2f1', 1530419066, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('srmuraqtf7gsshk9vs91rur0q3', 1530419099, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('sqb2i6f8r2534g873ml54s8nd4', 1530419099, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('pllgpioc12na11biucebptehq7', 1530419101, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('oo1q6nk7rfaq052kdbu6ck46h3', 1530419101, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('kk80oeoe0h1bevel5s35acf9u2', 1530419257, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('jgf9iblfsvo3vhq9k8meecnsi5', 1530419257, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('3n2rvi121lebo9t11mv29tut91', 1530419307, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('aoq5f9b75sjj4099762ilbp0u7', 1530419307, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('c6vr6fjr7j3dk3apsis7c9mgp7', 1530419328, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('obertf73rgpdmjkjqu2chvi3n6', 1530419328, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('12119776m74t20fko9es82kq45', 1530419343, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('tdk3d13u75npe74pasau5mq367', 1530419343, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('4tpe7b7aqb7srs8mbhsa4qln02', 1530419343, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('3jdnui4jdus2t4v7vs7ff05871', 1530419343, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('0ja226mbts20a2f867546ro1p0', 1530419344, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('2l6u878geuilippfeg0mcnl0m1', 1530419344, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('6pdnmjn3p3u0cvjv1s114t09c6', 1530419437, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('bvkil9luvd1k6mjb478slkqc24', 1530419438, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('kue2uag34puhnnvckn62854q14', 1530419439, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('ev4bffu3d27ojjqqcgpd11f3t2', 1530419460, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('5e1npkr82k6ieelheubm84le47', 1530419461, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('5oqnfcfmv001p88a9u6lb8dbk3', 1530419461, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('ek2cotja5d2r8rn6otrqep1k13', 1530419461, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('j6f6q0nod9s10dsnrbv7t5v5u0', 1530419473, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('oqghv40hk1d3srqrmu2cp3nqi0', 1530419475, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('qq61djrc5dteeugt5t2u7ftt36', 1530419475, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('04fnhmpvllnslsqpchge6j89k2', 1530419475, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('ghs57ds2u3s3926ams9t4a8jt2', 1530419517, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('u3vqr7745oiuutohniecd72o22', 1530419518, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('hdnvt7cpb8nhc0cd701qap8j95', 1530419571, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('c3d5m6plfg6trchqtt97pu5125', 1530419779, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('jdkgafn0gfhivncl4dr73o6ie1', 1530419779, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('9s57kilfreacbgbv3emrjt18u2', 1530419837, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('1b2ltukebpnag78jbjabjm9gh5', 1530419837, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('3fn4hom7cbigusk48s1bg2tbk3', 1530419837, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('8uda3fqrchoq8r152tca4utvd2', 1530419837, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('u9q8mg5esgb5qnv2co8t5tbs02', 1530419837, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('fgave5cp786njm8ht1ud79kkd4', 1530419837, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('num2ktvvc3t3a6f3eg72src2p0', 1530419837, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('nusrji2040l1hct671k451pco1', 1530419837, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('0tlc936gufjuu7bni39dllr8e5', 1530419837, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('gefr412nn9nmicmjj8ajdjf144', 1530419837, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('3dq9a80hjunmeqvtetn61n2nn1', 1530419837, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('s5mt46u2a7p264e1i8p3mt3382', 1530419838, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('p3iav9gf8mq4ug5s2qsjparat1', 1530419838, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('gingokpuosa1d3uai0lv2m9p36', 1530419838, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('73d30vqrd6baq3auoitpp029j5', 1530419838, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('0fihi10rtd8tt3euug878f1gi5', 1530419838, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('25ph3k1fgk5its783cfsor2a04', 1530419838, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('suds8m22bh8idkkkto8ol6m2l4', 1530419838, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('ha4uv9097eku8eptsp020604q3', 1530419838, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('n22pj729et5qvmrgme5bo7b515', 1530419838, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('o709qhrn3hktq2ki27ljrd7dh2', 1530419838, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('c7vkrrvcitpuq05hh05arfe9r5', 1530419838, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('h4hitu6l4q30qdqbekn4p6bgf1', 1530419839, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('6kdebhlr4ufjapvor4i4evnjh3', 1530419839, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('ep0rjli9etb1ss39q48uv59bo0', 1530419839, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('4nfpji9l78pahbv3j2ji7r9721', 1530419839, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('st5qfqput4nagapaf8qn4njml4', 1530419839, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('m7io4a3ulq9moelo089v610mm0', 1530419839, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('0cfe485151tffnvd0o6q9nqkc5', 1530419839, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('csuta3dvi7dgfbjnt15b4aqme4', 1530419839, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('6i4pbdh3hggdk7laftigcths25', 1530419839, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('hchn7a4bb4unmlm1ttf5a3ep54', 1530419839, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('gdf5gm8ii2fp394od6cuc83rv2', 1530419839, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('6vjk679h3bjl0gga01l68d7t14', 1530419839, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('8eb0emrv85um09h7tt8i7i36d7', 1530419840, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('nknp31r311a5q05h86rinaq916', 1530419840, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('mvl2qrbi9hvm5dush4h5mqe453', 1530419840, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('t11rpi4c1rbtifhbs6he7mdri2', 1530419840, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('n6vor9343ha9ru7kckbvnbpa57', 1530419840, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('b0ehn6b9qq3uq3o3ispffktdn7', 1530419840, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('0803fcumjgtug6r5ktjh1t82a7', 1530419840, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('pdk69crbgrspoh4cqut6g3jmu5', 1530419840, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('16447d0et84s4fn29slh2q9uo5', 1530419840, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('md174un70l4vmn2a68nthhglm1', 1530419840, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('4rqvgauo7mf2n8pk07q32373j1', 1530419840, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('s3di26197gir4dnjevp6h20fv0', 1530419840, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('2ajqf2j92n6l74vp6qtp0ra6c4', 1530419841, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('e6fjia9bgus88jtvm1obg7ckc7', 1530419841, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('fkjlishrifd6ob8u0e9f162aq1', 1530419841, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('go61c3h3g0mhemf9a60dqi7e40', 1530419841, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('i69j3p4no71osp88laiuk4vdt7', 1530419841, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('l3l2a2iqn5qvh79i50oinqhf83', 1530419841, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('3ceqap9prq4o21gtb53tt15i43', 1530419841, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('ooo284oqpktiqeutkjfltgf506', 1530419841, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('hhmbavqoivgntugs6ebpsticv7', 1530419841, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('75m3ms89alubst1voj4nklc3j1', 1530419841, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('727unf2rn02mk4rdussllcppk0', 1530419841, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('lge9urc1mlll8e8pec4eabtj43', 1530419842, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('7bfmro1hgth8711j4o74n689m7', 1530419842, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('eert6ks76g4qta3hof73c1tu43', 1530419842, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('k2ehvqi8uoog8bfnvj0m2vnhb0', 1530419842, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('0u56fhs2nlutdc7qjlr0bpikg5', 1530419842, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('3jno6hr82rk9a9sdlh35fvov14', 1530419842, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('m1rq3r2qobtrmh6oaemu9dtku1', 1530419842, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('k423ia2mp529gs2tqooqvi3ae0', 1530419842, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('v8gakdus9dij4jiem98l133mo3', 1530419842, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('7sim4mduaj0m6bcbqoe783e3q3', 1530419842, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('6del733nhvp3ai76494edi4v85', 1530419842, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('kpd2hldimjounvl979enf8kh21', 1530419842, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('hsh10d62ej82gi5dvvecaun8i5', 1530419843, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('p3ilidm4o839ef7e7pr8lc2im3', 1530419843, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('fqd1c417skp3f0jttqt5r9rqf3', 1530419843, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('66sj1ibc5rblb5vftvdo6sgk13', 1530419843, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('v92u4dm740a1lsqmsqhd8lgpa3', 1530419843, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('cj7fi5moi2j80i1k7tsfbkckp7', 1530419843, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('4ou2aojom4sh4330skd9a7jsv0', 1530419843, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('q1kg1otl6mr5b9e1fpo8qjehq5', 1530419843, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('sqbp4qm0a7eljiipk1t5am0jk5', 1530419843, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('9ofo5uorcsbfgp5n27143k2hr6', 1530419843, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('9rs6uc1ohq4vu2nkj9907hbb14', 1530419843, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('2niea8232i2lrvmb9655jen6r5', 1530419844, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('m6uo2j650jvqqt6i0d3c0cp942', 1530419844, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('1ubhthmgbjtid4ukhdecuat975', 1530419844, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('os063s3nb79q6uqd4qe2rtm6a6', 1530419844, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('as11l37lm3q4ds37a42c8p7q84', 1530419844, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('kb15dh4hq0cjd1t2allv68d3g3', 1530419844, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('ppvpea4vbdpgbj3q8evfjgtti7', 1530419844, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('u7u3k7ks2e6ircncsoc9dqq8k6', 1530419844, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('86d2egpon6g38hft0qbl5pe712', 1530419844, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('3u97bbc9gq8cq3e0h5756rorp1', 1530419844, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('n83sjb6u9900davgk9b81upis1', 1530419844, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('pvbe5ji4linlhlts8ar4icl7m7', 1530419844, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('rv3cm3inako93g32muk4h4bos1', 1530419845, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('6nbr8rvaf3an3kqjvocfclfj20', 1530419845, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('ito8qq807292pithpev6p36kd7', 1530419845, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('hjahhatbbu517pqmjimlu480p1', 1530419845, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('993dpci6ljs0ill552rmvf3pt1', 1530419845, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('vvaub4p0k7si9cksgh0fst6oi5', 1530419845, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('0mtmuclq6uh82mpbf9d8d7hma1', 1530419845, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('j25j2m7a6mkt5e72k2mu91uvf2', 1530419845, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('4e29r0qq703umdsebn7oktjco7', 1530419845, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('ethbl1ng6j505crvt393ba97u4', 1530419845, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('fj4ktitr6vc7jtq4f4mrnc44f1', 1530419845, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('us5npoohdc5mk36mqi9mi2h7r7', 1530419845, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('htjsn3dq136h806qucvph21ql4', 1530419846, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('ggg8de47uub1d6m4dfmbl6gdu5', 1530419846, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('9jaeet3gepelc34v75i7rhvnn6', 1530419846, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('krf5fpqjif1rauun2chdinvpe4', 1530419846, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('beuupjl3led2bgtnv4qgqejma2', 1530419846, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('q2c1qpb3lnr8ie8qj6gu113f43', 1530419846, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('qv17a44hin6v7095dd89pivl86', 1530419846, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('p9nf8pqkaevq0n7falrcaj01b5', 1530419846, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('ujm0d06lv8k8adjauifnb275m4', 1530419846, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('pu6rnol3jos47hp3d8g1bkhj84', 1530419846, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('h8l05155fjhipj9upmpjb6c822', 1530419846, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('gkh0bm7qur1v57qj55ju3573p1', 1530419846, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('9f5cpkgjveghkc5v5b67d6kjf6', 1530419847, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('qgjc7ve0o9ok7oddv1l9kob2v0', 1530419847, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('htjuuvu9nh10crpgv494bqu320', 1530419847, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('p0q9duqnrj56va8c16p2vr76h1', 1530419847, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('dtcn8ca7rn9uerhn31bemn1mp2', 1530419847, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('nmtbavb1h02c56d36f7u1aer07', 1530419847, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('iir7rccmljtm37bfj19cj8klb1', 1530419847, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('onpj8b1os979glm42lpslll020', 1530419847, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('cpv0biaevj4875bccklfrjdpn4', 1530419847, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('gof6580nl8sn2mjhhj32t75aa0', 1530419847, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('bbkm6ac7l2rshgk0gppb7iq141', 1530419847, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('a245s8d2d106ojqr3ei95pdh31', 1530419848, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('3jr8veheh1skoci2r4puh6c4h1', 1530419848, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('ni3vk7j0n3o8k0ovpknj11pks2', 1530419848, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('edg2o169a6lae7ugeu8rnib9u0', 1530419848, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('giqnngibpe0k7qbs58elsghri7', 1530419848, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('5mp4fd42bm3pj3fbp5u9h28tm7', 1530419848, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('0vm87vsi0rk4irle9enbf5gin0', 1530419848, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('b249modk9im7rgdhc1ge2oomt1', 1530419848, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('ie1uo7ftedgja82pjp1i3cok01', 1530419848, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('b9v03v9ll01ojmvcm33e0lbpg3', 1530419848, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('o98i27tb7qrcurho1kkng2d6l4', 1530419848, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('ftg6a9uicvrgnao82aojtdqhg7', 1530419849, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('3dmcgl594idl27kkh25llkitj0', 1530419849, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('gma0sp5s3k7nki8rdntl9dl057', 1530419849, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('nj87nlifdlhofbeoekd3nc6ci7', 1530419849, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('lg70cu34dr5dqniv2ldm2t0v55', 1530419849, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('98vmo6su8pk5dj7oluqdlvpc31', 1530419849, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('i6qt97ofi886usrnbnk7cgmfi1', 1530419849, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('2j4928lhgcn62rras83vukgo14', 1530419849, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('7rvps1b1u2rqncm9am1du073j7', 1530419849, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('r6q387vjh77011ve2lcqa9b075', 1530419849, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('rdicda6dmm1pi1e1rjknkjctr4', 1530419850, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('b6048ahnm28jnhnpashvicpb57', 1530419850, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('561c79r0qdp6ikgg1vcdm9la02', 1530419850, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('sf3jp763k1of9ejkd9irhsmhu1', 1530419850, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('1v6o633kolmfhd7es0v9v1r147', 1530419850, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('llt6lks5l7k5rfccpi70vj37q5', 1530419850, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('0gnkuksvnhhbca8rn6gl6d27p2', 1530419850, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('r9d9hlkpr83141a74392m3d3l2', 1530419850, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('u0j1juvb9b2j1jcm4mh8oe6de0', 1530419850, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('n6pbvorcdqvop7k8f9t85tf204', 1530419850, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('9pl6vqjun4v0auk4hu3f5jtdf6', 1530419851, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('7gj2e9trnu6q1dee781o3bahg2', 1530419851, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('34eijpv9adnju1imcb0k8u6v17', 1530419851, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('cee75lsavatsqervmmbmekhnt6', 1530419851, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('7s1mq5olv0mb564g7k2t0hgap2', 1530419851, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('i8hb1q91hdjmrcm5ledros3d16', 1530419851, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('0vtrku1j25i8erqnqiiikulcj7', 1530419851, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('iavbm9veaq2nrs59r602b2ipr0', 1530419851, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('8ent473pphkqjpgac7d9vlqu52', 1530419851, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('b34b1dommf3k84c31c6h66c136', 1530419851, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('2eo1lq7u7p8b683h1gkcqg6uj3', 1530419851, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('loc20lflcefkvsmbbmkeepicp5', 1530419851, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('10h1b2da1p5q0d78nm9c45ttm5', 1530419852, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('ud837fn921ivnrf5mbopokgd57', 1530419852, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('4dumkb5gtodg8mhp733vdmuhf1', 1530419852, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('7k11amcp9irq6ft83p1flt56s4', 1530419852, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('g1e34bvothk31f0cbuhjltlla3', 1530419852, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('7u3nr5rb9tacjq3oh175ncl024', 1530419852, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('lifop39uhbk9kr2da8m7ovgaj3', 1530419852, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('nnm3lb7f0404isi79927ogqh46', 1530419852, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('ob5fk1mrst8idgptd31blvkeb5', 1530419852, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('arkm7g33grnk6v96us54tnhpv2', 1530419852, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('abdi1gkbp4fe5a5qfdms56p9u2', 1530419852, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('3d6fahj6qp1ge6im1nee48bsg5', 1530419853, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('pjdpuvlrvuuci9b2slb3io8i06', 1530419853, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('glj4oip39s4pirdktdvgnr0e91', 1530419853, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('vjijrp5hkbocm3rc4mmhmstq94', 1530419853, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('hgppinjkf9f1i7m7ub9ma7hpj2', 1530419853, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('qhqrdqudni14da1u583uod8lt4', 1530419853, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('7gl54igtdeq7b1tsp0vj97qif0', 1530419853, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('e2hijkmq3anis364ce3mq3vjs7', 1530419853, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('ksfejt3cba5viledbnmng9fud2', 1530419853, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('geabttv1mhctjmc1pvgotmi4o1', 1530419853, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('3vbp7vdovh87gs4k586esg7021', 1530419853, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('edf2rdsgcurs9ialk9jv4an1f1', 1530419854, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('gjt1a9cdit4tm16fn3rtjsq701', 1530419854, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('s13brk1mioo869cev35iv5o473', 1530419854, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('3ssft3t9u0idmjognnmlqcnth2', 1530419854, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('75erebnnuv3ehn10rqi8b0eko6', 1530419854, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('e93kmf034egujksl8onukbopj5', 1530419854, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('k35g2n7arvsdh0m50epbvs7rc3', 1530419854, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('mtmkuqtjnbfr7fbf2k7o4bnu27', 1530419854, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('7fgbqp705uptpej9hioph4g690', 1530419854, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('oifgtk7rt6teds3r4tj5e392v4', 1530419854, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('pu9lgha0sgn0mrcd9er3p73p15', 1530419855, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('ioe771kctjq1ogg9q1uqfvhpb7', 1530419855, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('5bus5fikl38thofmlpkq9l6al7', 1530419855, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('7q7llr20vkg31vbbpeb4msjs05', 1530419855, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('4t00l41fjbm06vjubsmto3toq2', 1530419855, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('ccka5oin91b6jd105r0m8ujde7', 1530419855, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('qbc1bj88bfvmqd14bel4cjoa57', 1530419855, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('dr7807kdtvrt249u0umpp6ebv6', 1530419855, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('4cj37jc7m30j5r2ofccqnqrs16', 1530419855, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('g5np3hs4f7o818417pc2gl4863', 1530419855, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('6i52aspt0bus0ko6pn5adm0i52', 1530419856, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('6mlv49ac8l1e564i445sit0f90', 1530419856, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('7kvqmptui4do3ef016kh4celn0', 1530419856, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('i75m57vh3hfcvfc4o3h5gkdbu6', 1530419856, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('5t7anpk7928a3ljn161v8jk3v4', 1530419856, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('3usp3l4plvhh6kkrh2cd3ll504', 1530419856, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('k19c4186n5kj6m1eq4dup0b361', 1530419856, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('qkru0ugdfkumm1v22vv8t5i8a2', 1530419856, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('4ao9fpp9o47mruv7cjssiius80', 1530419856, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('uhl3ghriieiekt01l5mupe6jt2', 1530419856, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('ugvnmqucfnj7r9lv0qufceb664', 1530419856, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('e0i41qjpdspgk497aleh0hb0i6', 1530419857, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('5ks0el6sgs514766g53lu3pdt1', 1530419857, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('892dfdih6ppnmisse8uc7aa010', 1530419857, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('oclaglov31ngnt8rs4dshg47d7', 1530419857, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('s7gp6rien3e3d3endlhbfjcn20', 1530419857, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('f19vhohq8fgdnao5gd419moc70', 1530419857, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('hiag174qr9b5rigf6cufueuo21', 1530419857, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('n0i2ofbpd8mnkebqc5b95fp3e6', 1530419857, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('rtak29sborh4rn9ldgce4e1kl1', 1530419857, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('ko8b10ch2mgqdjkvatci5diom5', 1530419857, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('5cm36slrggi1fuu6gu94bfqdm4', 1530419857, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('umtv4mp9u6anp320ag874fdau2', 1530419858, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('sfv6p1vkgbs9cfb6365ik07kf4', 1530419858, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('cif7ak3oucuii0uh0m2eku9v95', 1530419858, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('vkjp9lo2gkn00tq5st3m0kq9c2', 1530419858, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('bs0lmlj3b9d06sd6lfvofg6qn0', 1530419858, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('gf0nau6ht4g9g6sh0cu04lc9k5', 1530419858, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('ahmhq9o8dr5grg02ualkpa1qq1', 1530419858, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('o906vc8m901d7on9nmnci4e247', 1530419858, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('irh4h64274dn08e8p2dbo6mf82', 1530419858, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('09ej9pgdcn1lldjkc34tdo3od6', 1530419858, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('i1au7qh1465ur6h78or36q6pe4', 1530419858, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('2gdgfkrrf2df17va7m29hc9ft4', 1530419859, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('gisa9ujc91cn5p3r9a96dnqcr4', 1530419859, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('baa8gpctao0l0fkaujrb2tc651', 1530419859, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('dplmqb30afu52jbb74tv8b60j6', 1530419859, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('qf3f2sq1f7pkad9s9oi7lg42h6', 1530419859, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('nf971qna6efri896psohcglgk0', 1530419859, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('ngbdft7q0e7i2ekj5kearg7ok2', 1530419859, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('o9mjt9gquhc8qn4q6q4vi7o252', 1530419859, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('5agc1plv802pv0m46rqgmc7g47', 1530419859, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('019219s9v1kcpd6qnp64j9mue1', 1530419859, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('uk1894sjq3mpfqq57qnth90ec2', 1530419859, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('q434r9dvvpd3bi701smc0felk3', 1530419860, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('og539hfv2lfe5v4ibjpv2slon4', 1530419860, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('gv75ocvssmp5k3isvmqmis7b63', 1530419860, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('641cebk2vgg39i5qg1qlbunsc7', 1530419860, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('2gnv23vmcallk0cbnm88nsm7e5', 1530419860, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('5hscct6f4u73kjq9m724ttuuf2', 1530419860, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('av1g267tngs78noapilciibut1', 1530419860, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('a49nmeupchsrabtee27a6jooo3', 1530419860, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('48hjee21q81nf3p76s32n0b7m5', 1530419860, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('3aads3p839a2ajmenf7idkn9o2', 1530419860, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('9fbp1sk2k5231v8k4ssa2ts0o3', 1530419860, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('kvr1su9o8fp2590ovvker19334', 1530419861, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('qkuf12filiprfka7ohtpiv2592', 1530419861, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('eu987ja9pbkjh6jqu3gp24elk6', 1530419861, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('jj0livpv0a0pecv1n9frlmjqh0', 1530419861, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('rkl1ohc10ersq4fo6amajqgrg6', 1530419861, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('dootmeq70eif22r9q1bogafci4', 1530419861, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('v74tq8195n7o84v01lej7vc3f3', 1530419861, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('rj0el47ni6liue0qmlvi9to953', 1530419861, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('6alvig4penrqufa2sql9hlqmj5', 1530419861, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('pv9s1mn4mlc585a926jes6sk15', 1530419861, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('33l1dum9tueit5fm4nuderjhk7', 1530419861, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('s87kc344c6qlhku23ejs7lkeg2', 1530419862, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('ra8nouogb9b0o7s53kjh4b9ar5', 1530419862, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('2fjtbiq1vndkcg43cia5d54r20', 1530419862, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('jfsmpmbdr5ahjl5naudvhomsn7', 1530419862, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('vrtm4t1iem33mm0c2d7kbn16f1', 1530419862, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('fq750f21b72p4ilf6q15niu3f1', 1530419862, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('aq7apblv4vcdarq7p5ptjlle21', 1530419862, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('nf08u6uc2163aqcpea0aq6gtk7', 1530419862, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('f8mnlcl0783flinoe7brs16eh7', 1530419862, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('2k5ve9h4sqhgr07mejr83gf8b6', 1530419862, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('0mut5lnt8m61s57g6get2kda05', 1530419863, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('omq8bmn3esulf3o93e5m11lb90', 1530419863, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('0dlsdeertnro67g0fa26cb87i1', 1530419863, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('l14nfl6098jj5ipgcmprnvb8r1', 1530419863, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('754p8nds4vi23b47g7ji1crlt1', 1530419863, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('5jd5573fv18sg6bpveovbqomd1', 1530419863, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('kr39m49d3hib7v1qo0jadapqd5', 1530419863, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('7sda7qkionr3tqi8ah86j9umk7', 1530419863, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('jn1ues6s5rdjhdrdjv3nsofie1', 1530419863, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('qkdmktmroka9hbs9g4pt188ln4', 1530419863, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('bks873e5qag33lle20c9qjh8i0', 1530419863, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('0areij8iov0mvl8gvrgvesoha7', 1530419864, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('h20chmgqbdt89tr5kpt0786el5', 1530419864, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('ulb68rto92gb3uh9tm97mtcr33', 1530419864, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('sm3s8cn3nm918r8j4au1alp9m2', 1530419864, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('i25nhb6fc5lbg35u33pnjmgvv5', 1530419864, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('rnu29rvtqh32ua28s8a7j7v235', 1530419864, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('dnfdhmso8l6u5lnnjuigees3k0', 1530419864, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('pr3hbtac07aqmp7dsvkevp2sd2', 1530419864, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('sfumffahk52cdk2t9sp16fhmf5', 1530419864, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('9i23ra4rrrf36rugr3p52vcjs2', 1530419864, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('po1va983hdvsksna4qo51e5eq6', 1530419864, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('24ai4himnnc1pm90bqed4i3473', 1530419865, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('9lcffof8hs08lrhiaca1713l23', 1530419865, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('aaaenq1jf6g3pvvvlkblkka544', 1530419865, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('sfidej7pa0k2p9f43ta1oijs86', 1530419865, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('dn0cbsptsu6detj65tt6f005u6', 1530419865, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('v80dfpv9dvr7470ndjs5qbpvm7', 1530419865, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('fgssellci9bteh3daqsba6s4j4', 1530419865, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('rgcae9vcev0ptvo297v13tj4j0', 1530419865, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('c326qepufq9ln08qqttkcu8q81', 1530419865, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('jls8cn6hku75i157m9p0mca6j4', 1530419865, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('kqahps75sdsvdavci992u9eh55', 1530419865, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('q5frkc7m1ja6aadtrescbnfj60', 1530419865, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('27n05j7veevis9rhtdtduechu2', 1530419866, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('aqg2t2iidbodsg48pvseufj3c1', 1530419866, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('8l5f5jtc79hkroltcdin74nhu3', 1530419866, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('u79blo634nuubi5h23626dmlg7', 1530419866, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('q9r721q7d4ofkejiae6foapdc3', 1530419866, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('eodd662hu0acqbthnuq25vb290', 1530419866, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('d1lgq3vvuc3g0juev9ik8p7mv4', 1530419866, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('s77055bpad9e5vsfq7rqiiivr3', 1530419866, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('4155te6ofk72rlahha9c3n3383', 1530419866, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('9umuji25kgn6v0mklpnf5809d2', 1530419866, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('7hf9c847h7uc0dvi97f1966h01', 1530419866, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('el104fsuqqkm3le9v5jhkp6q57', 1530419867, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('g01hsjqd747aglj7tqn3m6d6o2', 1530419867, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('u2as0c3mq79ceio84cpcfutkk3', 1530419867, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('jb3ggn0eek9gp0cbe05bo66266', 1530419867, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('e3mpflre4ug8d5uqu6v1oo4kh7', 1530419867, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('5rotfb4l1b9i60a6rq0g4t07b6', 1530419867, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('l6b6b1k1fftud6b9qcbobq39k3', 1530419867, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('cic4urhp7cp62ncqekku5340o4', 1530419867, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('fg130gkjig7gpldgrhldd3v5j4', 1530419867, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('7fc4ovphpq80qa5va6d7p6k795', 1530419867, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('utoi6gufn1j1nkjvg8uark5a96', 1530419867, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('ueli8mkai47iv7n2d9odb1hd53', 1530419868, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('tjldk2e1r5lu0e2occd3ac61d7', 1530419868, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('amrc30lkvf4effcjlg749rf6d2', 1530419868, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('u5qqjpiree3iahah2jmkofi664', 1530419868, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('vvsphbuttsd96f2u71964mig23', 1530419868, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('k6favo1iv2jk6jm8oube03ort2', 1530419868, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('prkeamja2dothmleq4t43gfkb7', 1530419868, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('tbs581p2p1f7c1o7fjgc1ed7l1', 1530419868, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('quvpvqoml743l3gfl3ncgipq41', 1530419868, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('4dkur482sn2qhhd2h9cn2nset7', 1530419868, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('cbldkbrsmvmsggq79u3to31b06', 1530419868, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('pde806o4dmj6bfuas580sug3o1', 1530419868, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('kt3adevljprfsinr4g9u6srjo2', 1530419869, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('1k6fqe6c8p9e4efcant8v3ded1', 1530419869, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('l2pe3dn8ff71irtcmo42r84ul7', 1530419869, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('il61d3dct07g1vc84sqlbe0hk2', 1530419869, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('qtcv97cmo1tcg2m3nc6q3onjg5', 1530419869, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('rnusliv0n5sojnceuafhbu5li5', 1530419869, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('9dpg3j0okgnme7r1lt530ckid1', 1530419869, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('li646p550lnarsjlhc7gtp6316', 1530419869, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('aclalelr69oojbsh878pg47rh6', 1530419869, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('smpucuaid7dot9ccufn633iq07', 1530419869, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('3jfelpmao4in1e9fqua4ah9nm1', 1530419869, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('dd18cfndt163nhkm9bmt9ol2p0', 1530419869, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('hh7o6d25ktg2s1u2ua9m9umus2', 1530419870, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('89je46srre4m29e44t1hm56i27', 1530419870, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('s154olam31tc8is1mm36nlbjj2', 1530419870, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('vqmi2uhfd0bo3rmpglle544fs7', 1530419870, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('dmppjc75ng6usheojkgdk4bi05', 1530419870, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('0ud4ki4q4lpo49oalt9o1otf25', 1530419870, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('2d7dfgc97jqqsjq11pt0647jj1', 1530419975, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('b1o4cogqi49kq29itk1i68bjo6', 1530420029, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('duutco865ld2nqav7pt91s6m02', 1530420055, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('l4gunr3vealfac75f2f42a2pt0', 1530420056, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('7pvm5vkisaa8tkoglj5nf7icu7', 1530420057, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('2gh8knfjich8aevqff76p1qf53', 1530420057, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('cm875smmj3jk4ln5oa75rhvcs2', 1530420069, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('72qetd4setaiguv1p2ppaah2f5', 1530420070, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('o800veql20hijg1j44u9e26ej0', 1530420071, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('ukg7vdbn45spe2kplat5fuec52', 1530420071, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('66t8o6rq8i28atch1euntdq6k4', 1530420071, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('5qais0ild3gqh0lmc2rgjd14s2', 1530420092, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('eiha76oc0tgf5sgem813cehaf3', 1530420108, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('4ic2bg8u2n7kc8pt6jdqvr7bf2', 1530420109, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('ku9mi443apdtph4ot4ghl619f2', 1530420111, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('h9h5krb6equ16nuq5aqool2u21', 1530420112, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('caql68d808lutpp13ja128lbu0', 1530420113, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('2gv26s25ugnl99h6sdmiaj0ia4', 1530420114, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('vv5mujl7h10bkhaf99hfj1h012', 1530420115, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('dslm1vjruagb0ccru5v37ks950', 1530420116, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('kf0gttaecm62sfu33smi7qfha2', 1530420117, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('n8k44dtjumscj9iq8pkb0qjfm4', 1530420118, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('mftd8qs2i328evu8rmdfh4gdv7', 1530420119, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('q4ei5s4qopg8ggcmfurgemvr92', 1530420121, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('lrth9r0m45ulg9n4ivtoujdq10', 1530420122, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('o1ulg6nidglv790asaosmselb3', 1530420123, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('4bh1q5lnd5fvits0gg4ump2er3', 1530420124, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('8icdsp7a80lbr6la2lpepmlb27', 1530420125, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('kva20pkepn8q6pl94591uga9v6', 1530420126, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('ebvk1n67rl3kit87jrbh331877', 1530420127, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('306uplt46updojbdhnt5kg2g16', 1530420128, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('1cutbv0rkot7qf9rdlqkbpr131', 1530420129, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('j9g1i41lqmjo400dfbufovung2', 1530420131, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('ivkua3baj5kg88bs9ej2lmeuc6', 1530420132, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('ds4j2oum9ghaclma1gmu40f1q7', 1530420133, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('svfp7mfan5df3h1no0ip2j6613', 1530420134, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('i47ufcntonroterq198i43b8n2', 1530420135, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('lf4q66invqkjifrupfsi84dbf4', 1530420136, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('gphjj09aofcg90d6940gdhild7', 1530420137, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('sk887r92gfaaqf4oudecv4l5q3', 1530420138, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('pnrplr7pd6dq7p8p1rbpqejjd0', 1530420139, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('dcihqsg2a6djf2io8g3b23l6g4', 1530420141, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('0tueqfm8q34p7qs33qj1vmdcn3', 1530420142, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('00g19dg116j40i896llkkpgkr4', 1530420143, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('fkgqeeab9gr5bimss92i9gt9d4', 1530420144, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('01t5i0tfutls3fidn4h1firln7', 1530420145, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('kflbl0ssgj12hnt7dopdgph0u1', 1530420146, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('r9rrk6g49h6enj41k77sg7tp44', 1530420147, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('9ds7oh6b0oc6cus44pugmr2o54', 1530420148, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('vtmgko16i4h5vmkq3rs8q6l1a4', 1530420149, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('80s04v4bhsui6n12mhlm83u1m5', 1530420151, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('5pci2etdab9sivun70kl3lqc17', 1530420152, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('hgvbaukrq5r16gh97718jslpq4', 1530420153, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('jv1e6cappaehppi5iv2nq7mmi7', 1530420154, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('218nnrp58sn27m3i3cahs61v95', 1530420155, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('451369dtncs7o1gtu5krah5sj3', 1530420156, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('2lt6f5vf0e5gvsuvum5ek2ii76', 1530420157, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('cn2m468smv1vcn305mnbirosj4', 1530420158, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('2elci20glnlbrm52vqm7a1eno0', 1530420160, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('7t072vjkhnteirvovh49flh443', 1530420161, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('r5h8b6n06u6b720t7a49mpnj26', 1530420162, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('qs9orhkhqhqdfqo8d9l74eu0a3', 1530420163, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('ahiknmstfd76mcktph4ek724f6', 1530420163, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('0n66leqdpjrhnvhtr919hd9ui2', 1530420163, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('m5fhpa9vtk9btpg5org5572nv0', 1530420163, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('q94quq4u953s60jqshk3te1a00', 1530420163, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('69uob45llloaev2f1rhauorbk2', 1530420164, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('ujn0rfc5m57rr88628ec8nhqq5', 1530420164, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('o90piv60r2vcnlftsmmbr7ksg2', 1530420164, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('qvuk1q8nn44o6uupkon755v4b2', 1530420164, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('8groqn54k4mbphmagshua05952', 1530420164, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('k5tm1jt1a879p3ibsa8n5kmlr2', 1530420164, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('a437v7rl2sdkpv4oh0l71o8er0', 1530420164, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('f9ssk7dt388mt71j3qs8m3ana6', 1530420164, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('b8fk6ndjijqo78m0hd7rm4eqf6', 1530420164, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('d2cu6khblg22in5241fh3128q6', 1530420164, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('a60d3mvge6sffovrib57him4o4', 1530420164, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('3qhuuuoc0n97p0ho0aajhtj9p7', 1530420165, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('hnvfm7rlk1d3mbujbcmjkun640', 1530420165, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('51ht00ttu6r8jm6464o4r8pku6', 1530420165, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('c45uplq9ftlrcquob4gigqquj6', 1530420165, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('6q18c9o52ae69gg61gt1rksai7', 1530420165, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('5u12ij3l0g6mcvs1acrr1b7hh1', 1530420165, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('44nd01bj71tkcc7uqrfrmmuig0', 1530420165, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('f45a08rrek3f3h7ofmpomvop50', 1530420165, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('6ahefg8utvlqhc1iu6bav3ohi5', 1530420165, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('t73lk70o7l35tm9sl4ki7uo227', 1530420165, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('flhjctkbk2d25ni65mnujn29j7', 1530420165, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('8tf93f4v7mm242o2ao7q6d8757', 1530420166, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('qss5q7nrqko6u1gldnv0f9orv2', 1530420166, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('je94o9la89jidu5l3ffr9ea1d1', 1530420166, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('n4mmap5k44fkar742pu3kdu572', 1530420166, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('f9jocbtka5cnkbl6cehodrqs85', 1530420166, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('trn7u8gp8t2tnfmaa8c6b0ssv6', 1530420166, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('27a9f8n622270laohgcr78m7b7', 1530420166, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('fg9l8cm5ngf59l4mp8b3iohjj3', 1530420166, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('4ojjl4ffkdrhq2bu7dou2f2n35', 1530420166, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('s5v0rd61d0t6fpnbo34gnrgjl0', 1530420166, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('qk6jrk3p6ieqigf7gag8i3nuh4', 1530420166, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('58h92o5grkmnumtj2alirhv6j5', 1530420167, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('kbl4c35s4k5b06h40t88bm0qr2', 1530420167, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('uqousu4qje3v579qnpvih8ldh7', 1530420167, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('s0ge0nf4b5rjb8stt3g6gfjqm7', 1530420167, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('ka96vhpco49bqe3eglsn0a0ub7', 1530420167, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('6c5sh3b8ihrf0frrdle4l32p40', 1530420167, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('8glqmsc3ld073vns0i9is2qdr4', 1530420167, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('gb6usoin34kqqp2l33r7290au6', 1530420167, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('flu5q9bgvn9ioss9pksmh9l324', 1530420167, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('n6jvlhb3v9108q73qof7blnpn5', 1530420167, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('im8jccsft93d63ckhvr62v4bq2', 1530420167, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('k4cufoa55jmlj6g69ao3rdgl22', 1530420168, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('7od8vajqbn0app1i3j39k3n2q5', 1530420168, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('1ak0osoaresr7j03aarn9aosb3', 1530420168, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('3ha8p9nbnqr4ep9lg2m4q592i0', 1530420168, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('4bbrtdjbi0udcrcrh3h1f42er4', 1530420168, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('eh5og8b9ukgv4pp4l9fmv6djp1', 1530420168, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('h6lhrg8ncr2sg3t49507l91142', 1530420168, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('1te3vtd5j2ish37ha1lanobvm6', 1530420169, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('0qmrt6g3e8s37d95e75egsrlc4', 1530420171, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('1l37cj8d52u333nm9g0vaifr31', 1530420172, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('e3djmh7acs2qj0j61j6iu2m5k2', 1530420173, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('7gtcj0f6pqm8lhi76u8qrt06q5', 1530420174, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('82fug5r2vu7auleqlcpqgaeio0', 1530420175, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('g1n5t1mcj5e3npkhq58kfskdk5', 1530420176, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('ogdjensa3tfr7roe79lgdmnjr3', 1530420177, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('nmvtl6h46jcig3oo7891vjar43', 1530420178, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('o7pqkm2n06ourrk0rgbn9eigf1', 1530420179, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('49obqkbjrmhrp8uk39n60dr130', 1530420181, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('922cuf7a4foao0leq9fmn811h2', 1530420182, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('k728e5os4r9oavpsoqnvgu3850', 1530420183, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('7u3fipm2nb6e4qmui03ksrlal7', 1530420184, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('dd77j99hfq37b9idv396libgg1', 1530420185, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('5mqhcb60675t9b8dv8mhb0v1p3', 1530420186, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('kkd5de1bjq3kti6iba5oo1pm46', 1530420187, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('fthtsduic3udfdnch56rn6f0m4', 1530420188, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('8bje9onkftv8bmusjtu9a6mkn1', 1530420189, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('euq131vgotsg20tuamkfs3d416', 1530420191, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('fjs6k1qshbfkv9l5bfgs9mp9h6', 1530420192, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('ftbndcpt2inrh1952o8ac5ru40', 1530420193, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('cda8uru901mqcfdrqillfjlq00', 1530420194, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('cuuorlbr406m4pd6shpmq573i5', 1530420195, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('4e9graaf0i75pa62jjjmal3052', 1530420196, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('ddi5kib9qh84u9it3jm0flpbs6', 1530420197, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('fc96fe2uivoiuhsrak1jm6n2j3', 1530420198, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('rtcs4c3bdgop9as6qtffq973d3', 1530420200, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('52mt3um4fkg4dol5qi4td40bl0', 1530420201, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('ioamlocn74m7uqrtllqo4ua1p7', 1530420202, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('misn9p1k6lg03t48osk061ibt1', 1530420203, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('iue7br3pfb13dlm4rsnj3jnsg5', 1530420204, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('7feuvt5m9d3isptdffjpkma8a2', 1530420205, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('7ng1efbbhroslteqrhor9cpoh6', 1530420205, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('pj12u7qj3j2n8urf15a4rbqvp6', 1530420205, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('1ig0ermgnbn9hb4kdl6fi03447', 1530420207, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('5e5673d9erem1m323ru16poi11', 1530420207, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('tuj1d42gsm732j1841tdlecf90', 1530420207, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('4th3i3jk3pv4o2lftm4l3rila7', 1530420208, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('6ms75e74vduftdg1cn45hkhu14', 1530420208, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('9hcbaui13m0tb4vqqtsajfoa03', 1530420208, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('i6i0jp221qiann285pc0ol3ci2', 1530420208, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('t85a4k8d1at41f0k5do16jemf2', 1530420208, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('rhmdn3rdc1t08to7cbq020omb4', 1530420209, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('rqt6efa8g7cns3hl48q8v2gra2', 1530420209, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('qsudcu6em5kr2v4971pk30kog7', 1530420209, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('qihu4dkrnsq5mq652ifr92urj6', 1530420209, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('1cl6pfaj7apv02soia6q7dk687', 1530420209, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('c9s0ue2967gdcbupdjfvc1nsf4', 1530420209, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('b2nor81a2tmlknj5fcemueeso2', 1530420210, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('9le2ffv73l8gk2i65edpms8nt2', 1530420210, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('u78qegi6si01v1rpj5tp50qth1', 1530420210, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('qjimci4jsn8srn0ia9v1d3qto5', 1530420210, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('9ju7kgrhkliop6lbll4dinvq54', 1530420210, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('c2cpb3o85dflltbdmhnvtb1ec3', 1530420210, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('tmk4hoctkp6rmdqm9moqqfoaa2', 1530420211, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('npfk822gqrl5adqr9bpjf63l27', 1530420211, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('444k7q6etmjioa4npjqactc587', 1530420211, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('mvfiurt9lc7it6icebqftraoq1', 1530420211, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('2qr7peu8ffbpqcvsd03jvhv8d0', 1530420212, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('roq62dulhrandgok5s4sq88a11', 1530420212, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('6bsr12jo7ikn52gu9t0s9hlql1', 1530420212, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('2lkrdq9qsh4olrlks74ide08r2', 1530420212, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('2vls61gpq9gsg617n0iuuqkd40', 1530420212, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('145dibhlujlqv4b0fa0p1svd32', 1530420212, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('c8q0huea5qantvalec4jh5tmb2', 1530420213, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('4viq81enkl8tdt0fs9lmivo5n3', 1530420213, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('s00ksvdjol004doi6h92980qq1', 1530420213, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('bm7db9pueq09bl025eppdioj91', 1530420213, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('q8eesnh2b673g4j8rf67jb45v1', 1530420213, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('2e0ebe099sdd2btnq789qusr34', 1530420213, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('tek9hl8bnq50sr1dj6upc22qn6', 1530420214, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('gtvl8pn4uuhd10jhoae1fbvle7', 1530420214, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('n3jaod4obpsjga9nk6b62t8jk2', 1530420214, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('ij68jgcuk6biagjninah6c9fm4', 1530420214, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('7g1jpb3qqr6ocgkjpaonktlmt0', 1530420214, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('02mc1uvgu07322qd8nh009bba7', 1530420215, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('vcuf2o6u96opgalk1c80781135', 1530420215, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('57a6u8eb0q7de1s9rjgc7abuv4', 1530420215, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('fjkafag6a2s7diddm4gjkk4om2', 1530420215, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('5cf0eojork45ttqbfirdgv5tt3', 1530420215, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('ot4malgpc77oe13etmj8v3nlg0', 1530420215, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('hs2s2re4fcn7vf1bc37n1cusc7', 1530420215, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('0gmpip0k039155o7l1mv8fo6c7', 1530420216, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('3pdgb5c50vl2nd5tfqshnka383', 1530420216, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('fspg26nrjl6atcaulpq5621uu0', 1530420216, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('ntkju2srjbl3356r29opjd1mi4', 1530420216, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('9c5jgihfspnhngls5vrbda8353', 1530420216, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('0116ficmhqm98h73gt5nfh3jf1', 1530420216, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('83u2duh2u9b9c0c462tln3u023', 1530420217, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('gbofoqd1mcrc6ek0pqqpulq3j3', 1530420217, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('cgpstojmdpn05h6qqa28tulon5', 1530420217, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('vasv4om33qcmdm1ukhhjp6hjt6', 1530420217, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('cb9q61q3u3cogd48am11umtol7', 1530420217, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('lnlkd5udo4d920g20vdcvj0171', 1530420217, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('a54rh70r79filkogt69sm15ji6', 1530420218, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('k7en363baf9feea3g7fb5o2b85', 1530420218, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('epd06tjetgajghpffu4msbp966', 1530420218, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('7hj6fhpki8u6cqdngjdpgekf71', 1530420218, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('o9k3clicank8ou25vq6870olq6', 1530420218, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('g0rnssmlcp457kbc3b1v7f05j2', 1530420218, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('egou7t83r8386j26tqn2afs520', 1530420219, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('chiv55v1dablloji18uodfi2s6', 1530420219, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('7ho2543il5q100aa01udecco66', 1530420219, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('0bibajilmskjd6aletg1olpiv7', 1530420219, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('ojehlj9fcmchn1jjib00ifqrj0', 1530420219, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('6lhaumko64hg3bp717a7de9n31', 1530420219, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('grn917mribs6rda6ducmtoiot1', 1530420240, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('g815dkeg7s7o1dtqtr2aoh2c44', 1530420241, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('7q56gl8n4m3tfo4vc5bjp06ru4', 1530420242, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('c1at690fm4vb0lk8pketnc87m0', 1530420243, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('979bn417pur2a0m5llj0fn6331', 1530420244, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('04aujjqjp97c3v70g9571ljsd6', 1530420245, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('lh8h5vdssvucrblaofnmbecg66', 1530420247, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('vquqshbl7029u9ubb13snc3rl7', 1530420248, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('ru1k2tk7p1eft0vgv8ddo7l8o5', 1530420249, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('ie6840mabe8ja7e118spklucq5', 1530420250, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('d59gu9inhmrolrjde76bfc6580', 1530420251, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('6arfaipgs6v76dr5dku5oso855', 1530420252, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('vgdoucgg7n6lkkvq4ps0modfd3', 1530420253, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('oiuoimsl7n40jl64f3hdacqt53', 1530420254, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('pb5dqc13r8d9juonqafd6vum20', 1530420255, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('uttlfnqn4qa6s1msj8esi6nf02', 1530420257, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('3d1omvkvf5u172lkm3orauf9u5', 1530420309, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('ruo1lp5g0sqf3mjt1caa30vmf7', 1530420312, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('19a5mhdn55v184g4bgaano2pq5', 1530420315, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('1uo900hn7te7lga0q8ilcpaed7', 1530420344, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('livc1l7qs5hk2nv1f15oq766c1', 1530420345, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('bdclpi5m0qdmmk416jt24pbb14', 1530420346, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('rp3v2oisc0j8vp8pta492u3sd5', 1530420348, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('arq7kd86ln5agfjlr6mrd4ue20', 1530420349, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('ldisjplad4m8084vbcucvorlm6', 1530420350, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('p8hfan6iqpdrrfrf4b631scd14', 1530420351, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('ta7k0nl09mdiin1g4rii76usm2', 1530420352, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('eet6616a1voukbv2ca6vbqqbt1', 1530420353, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('6htltambcsfeocthjp8iui77p0', 1530420354, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('tdu282s7h1fj9sqdro67906q55', 1530420355, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('hpn1h8r3p6ds223se4a8egcbc2', 1530420356, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('vp8drb223g3cncpk6oqru198h4', 1530420358, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('npma24a4mkf22rt36fjptjf1c5', 1530420359, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('f18q1ti42qb9o8kl2vlq4m3gg6', 1530420360, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('aqb80r9t7atkh8gp82otnv8ak1', 1530420361, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('2qo8tchdgjttqkf9u2qoufftq6', 1530420362, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('nvshtk1v0e7aspu6mgh8q5v0a3', 1530420363, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('hidbugsbtcpsbvhga16475bq97', 1530420364, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('vb52msj5jo1pau71oag02idmg1', 1530420365, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('70gtq98231m240j44ahhll0e75', 1530420366, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('jnetgj0hm2nrfgs7bj0gdk7d77', 1530420368, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('uv1pvchl88ng6dlrd6lfvq6ph0', 1530420369, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('2kc2c5oe850pkld6gkesp8h4j5', 1530420370, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('r7a1l9h5cum5kvr5jm67q2ol25', 1530420371, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('3g88g31qfuhsp07kd7a4l2uql7', 1530420372, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('ueab9nm2t85vqe4r1ohc2iv0j0', 1530420373, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('268bbmfa00dt7lg72715pfg7r3', 1530420374, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('e7ms27mcv0qb4chve20vmdisk2', 1530420375, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('46tqgg870aa9mfpdcv0t6gso65', 1530420376, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('5tebeur64249p4hjpgi1b0c312', 1530420378, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('49vpjt4gll9drg1aegrbp6opl4', 1530420379, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('fprvlt4lp76fgkchtvff87eun7', 1530420380, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('fe77jrvj3rqgi2bbdbn25kc8c5', 1530420381, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('a0flbp0hat57m5f59g30o6dhr5', 1530420382, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('4lq8i3ssg9dfq26mvbdkd06gs0', 1530420383, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('gbuealppm635b4jk6nnav6be92', 1530420384, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('cm676cg3dre4f7a8gkcdonhc91', 1530420385, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('jl0iv9vpapqpsaqjafji02bv87', 1530420386, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('65d6qdenf0951e7uhl0ekuq2q1', 1530420388, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('ie8654uvvlcjt6n301c94tcb93', 1530420389, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('6danftaf80mf8fu3kuibj8i4f2', 1530420390, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('hdk7nbns8q38t7vcrg311709u4', 1530420391, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('rgq2pog0ihscki2bo8663pao35', 1530420392, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('52ufvph70gc7ad7dvk5k1b0vs7', 1530421413, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('fr3u8jg5bd59iag9s3rs36bgr1', 1530421414, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('kt0jfmhljah8m0rm5246nh5dd5', 1530421415, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('k9gu0ov8sds0v564curh3ngq15', 1530421416, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('2igrakkbfeoisaadop1tlqd8m2', 1530424242, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('ine5s3r8qaee7i7msvu3iod0u0', 1530424243, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('oan1e4ku9u1b16fisp4hh8e866', 1530424244, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('o7hvlg75fb2blrcfbhnlc0qt42', 1530424245, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('928v5fi3nd05b8g84pa4h9m390', 1530424321, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('01bmjgkik9p84c0a1p2mp0b4u7', 1530424408, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('dkn5s0cvo6timuom82qh09q2h6', 1530424409, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('pqlhc6j1h3e77e5dmt2q79qq23', 1530424410, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('qumlmbqcm2qbr0aq6r9ghphs04', 1530424600, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('22hb5jm977egqlibepgdpd4pn2', 1530424601, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('49p8u1pvlairpupdvfh6fsdd64', 1530424602, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('f6vqalnv9po4ntkr1iipb6t034', 1530424603, 'language|s:5:\"en_US\";');
INSERT INTO `sessions` VALUES ('vk6g0rjhc81j3po53ndlii12g5', 1530437994, 'language|s:5:\"cn_CT\";');
INSERT INTO `sessions` VALUES ('v74q8hmnk8gajfd49visp26ri2', 1530547015, 'language|s:5:\"en_US\";AUID|s:5:\"admin\";APASSWORD|s:5:\"admin\";uid|s:1:\"3\";username|s:5:\"user1\";email|s:16:\"dfasf11@gami.com\";emailverified|s:3:\"yes\";photo|s:0:\"\";fname|s:0:\"\";gender|s:4:\"Male\";');

-- ----------------------------
-- Table structure for signup
-- ----------------------------
DROP TABLE IF EXISTS `signup`;
CREATE TABLE `signup`  (
  `UID` bigint(20) NOT NULL AUTO_INCREMENT,
  `FBID` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `GID` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `email` varchar(80) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `username` varchar(80) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `fname` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `lname` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `bdate` date NOT NULL,
  `gender` varchar(6) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `relation` varchar(8) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `aboutme` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `website` varchar(120) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `town` varchar(80) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `city` varchar(80) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `zip` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `country` varchar(80) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `occupation` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `company` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `school` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `interest_hobby` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `fav_movie_show` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `fav_music` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `fav_book` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `friends_type` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'All|Family|Friends',
  `video_viewed` int(10) NOT NULL DEFAULT 0,
  `profile_viewed` int(10) NOT NULL DEFAULT 0,
  `watched_video` int(10) NOT NULL DEFAULT 0,
  `addtime` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `logintime` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `emailverified` varchar(3) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'no',
  `account_status` enum('Active','Inactive') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'Active',
  `vote` varchar(5) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `ratedby` varchar(5) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '0',
  `rate` float NOT NULL DEFAULT 0,
  `parents_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `parents_email` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `friends_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `friends_email` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `photo` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `playlist` enum('Public','Private') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'Public',
  `user_ip` varchar(16) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `pwd` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `interested` varchar(12) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `turnon` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `turnoff` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `total_albums` bigint(20) NOT NULL DEFAULT 0,
  `total_blogs` bigint(20) NOT NULL DEFAULT 0,
  `total_videos` bigint(20) NOT NULL DEFAULT 0,
  `total_friends` bigint(20) NOT NULL DEFAULT 0,
  `popularity` bigint(20) NOT NULL DEFAULT 0,
  `total_games` bigint(20) NOT NULL DEFAULT 0,
  `points` bigint(20) NOT NULL DEFAULT 0,
  `premium` int(11) NOT NULL,
  `premiumexpirytime` date NOT NULL,
  `likes` bigint(20) NOT NULL DEFAULT 0,
  `dislikes` bigint(20) NOT NULL DEFAULT 0,
  PRIMARY KEY (`UID`) USING BTREE,
  UNIQUE INDEX `email`(`email`) USING BTREE,
  UNIQUE INDEX `username`(`username`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of signup
-- ----------------------------
INSERT INTO `signup` VALUES (1, '', '', 'anonymous@yoursite.com', 'anonymous', '', '', '0000-00-00', 'Male', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'All|Family|Friends', 592, 77, 0, '1228326055', '1228326055', 'yes', 'Active', '', '1', 100, '', '', '', '', '', 'Public', '', '$2a$08$/gSIczQwLZElwKTKZBVhCObjlFjEDi1bSsw4TIqkmzU.AGoHaO5r.', '', '', '', 5, 0, 11, 0, -2, 2, 30, 0, '0000-00-00', 1, 0);
INSERT INTO `signup` VALUES (2, '', '', 'dfasf@gami.com', 'user2', '', '', '0000-00-00', 'Male', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'All|Family|Friends', 0, 4, 0, '1530363697', '1530363697', 'yes', 'Active', '', '0', 0, '', '', '', '', '', 'Public', '', '9cbf8a4dcb8e30682b927f352d6559a0', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, '0000-00-00', 0, 0);
INSERT INTO `signup` VALUES (3, '', '', 'dfasf11@gami.com', 'user1', '', '', '0000-00-00', 'Male', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'All|Family|Friends', 0, 18, 76, '1530365307', '1530544361', 'yes', 'Active', '', '0', 0, '', '', '', '', '', 'Public', '127.0.0.1', '9cbf8a4dcb8e30682b927f352d6559a0', '', '', '', 0, 0, 3, 0, 0, 0, 35, 0, '0000-00-00', 0, 0);

-- ----------------------------
-- Table structure for spam
-- ----------------------------
DROP TABLE IF EXISTS `spam`;
CREATE TABLE `spam`  (
  `spam_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `UID` bigint(20) NOT NULL DEFAULT 0,
  `type` enum('video','photo','wall','notice','blog','game') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'video',
  `parent_id` bigint(20) NOT NULL DEFAULT 0,
  `comment_id` bigint(20) NOT NULL DEFAULT 0,
  `addtime` bigint(20) NOT NULL DEFAULT 0,
  `adddate` date NOT NULL,
  PRIMARY KEY (`spam_id`) USING BTREE,
  INDEX `type`(`type`) USING BTREE,
  INDEX `parent_id`(`parent_id`) USING BTREE,
  INDEX `comment_id`(`comment_id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Fixed;

-- ----------------------------
-- Table structure for users_blocks
-- ----------------------------
DROP TABLE IF EXISTS `users_blocks`;
CREATE TABLE `users_blocks`  (
  `UID` bigint(20) NOT NULL DEFAULT 0,
  `BID` bigint(20) NOT NULL DEFAULT 0,
  INDEX `UID`(`UID`) USING BTREE,
  INDEX `BID`(`BID`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Fixed;

-- ----------------------------
-- Records of users_blocks
-- ----------------------------
INSERT INTO `users_blocks` VALUES (2, 11);
INSERT INTO `users_blocks` VALUES (2, 3);

-- ----------------------------
-- Table structure for users_flags
-- ----------------------------
DROP TABLE IF EXISTS `users_flags`;
CREATE TABLE `users_flags`  (
  `flag_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `UID` bigint(20) NOT NULL DEFAULT 0,
  `RID` bigint(20) NOT NULL DEFAULT 0,
  `reason` enum('offensive','underage','spammer','other') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'offensive',
  `message` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `addtime` bigint(20) NOT NULL DEFAULT 0,
  PRIMARY KEY (`flag_id`) USING BTREE,
  INDEX `UID`(`UID`) USING BTREE,
  INDEX `RID`(`RID`) USING BTREE,
  INDEX `reason`(`reason`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for users_online
-- ----------------------------
DROP TABLE IF EXISTS `users_online`;
CREATE TABLE `users_online`  (
  `UID` bigint(20) NOT NULL DEFAULT 0,
  `online` bigint(20) NOT NULL DEFAULT 0,
  PRIMARY KEY (`UID`) USING BTREE,
  INDEX `online`(`online`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Fixed;

-- ----------------------------
-- Records of users_online
-- ----------------------------
INSERT INTO `users_online` VALUES (2, 1530363697);
INSERT INTO `users_online` VALUES (3, 1530547015);

-- ----------------------------
-- Table structure for users_prefs
-- ----------------------------
DROP TABLE IF EXISTS `users_prefs`;
CREATE TABLE `users_prefs`  (
  `UID` bigint(20) NOT NULL DEFAULT 0,
  `show_playlist` enum('0','1','2') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '2',
  `show_favorites` enum('0','1','2') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '2',
  `show_friends` enum('0','1','2') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '2',
  `show_subscriptions` enum('0','1','2') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '2',
  `show_subscribers` enum('0','1','2') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '2',
  `friends_requests` enum('0','1') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '0',
  `wall_public` enum('0','1') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '1',
  `video_approve` enum('0','1') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '1',
  `album_approve` enum('0','1') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '1',
  `video_subscribe` enum('0','1') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '1',
  `friend_request` enum('0','1') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '1',
  `wall_write` enum('0','1') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '1',
  `video_comment` enum('0','1') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '1',
  `photo_comment` enum('0','1') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '1',
  `blog_comment` enum('0','1') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '1',
  `send_message` enum('0','1') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '1',
  `game_comment` enum('0','1') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`UID`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Fixed;

-- ----------------------------
-- Records of users_prefs
-- ----------------------------
INSERT INTO `users_prefs` VALUES (1, '2', '2', '2', '2', '2', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1');
INSERT INTO `users_prefs` VALUES (2, '2', '2', '2', '2', '2', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1');
INSERT INTO `users_prefs` VALUES (3, '2', '2', '2', '2', '2', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1');

-- ----------------------------
-- Table structure for users_rating_id
-- ----------------------------
DROP TABLE IF EXISTS `users_rating_id`;
CREATE TABLE `users_rating_id`  (
  `UID` bigint(20) NOT NULL DEFAULT 0,
  `RID` bigint(20) NOT NULL DEFAULT 0,
  INDEX `UID`(`UID`) USING BTREE,
  INDEX `RID`(`RID`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Fixed;

-- ----------------------------
-- Table structure for users_rating_ip
-- ----------------------------
DROP TABLE IF EXISTS `users_rating_ip`;
CREATE TABLE `users_rating_ip`  (
  `UID` bigint(20) NOT NULL DEFAULT 0,
  `ip` int(9) NOT NULL DEFAULT 0,
  INDEX `UID`(`UID`) USING BTREE,
  INDEX `ip`(`ip`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Fixed;

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

-- ----------------------------
-- Table structure for video_comments
-- ----------------------------
DROP TABLE IF EXISTS `video_comments`;
CREATE TABLE `video_comments`  (
  `CID` bigint(20) NOT NULL AUTO_INCREMENT,
  `VID` bigint(20) NOT NULL DEFAULT 0,
  `UID` bigint(20) NOT NULL DEFAULT 0,
  `comment` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `addtime` bigint(20) NOT NULL DEFAULT 0,
  `status` enum('1','0') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`CID`) USING BTREE,
  INDEX `VID`(`VID`) USING BTREE,
  INDEX `UID`(`UID`) USING BTREE,
  INDEX `status`(`status`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for video_flags
-- ----------------------------
DROP TABLE IF EXISTS `video_flags`;
CREATE TABLE `video_flags`  (
  `FID` bigint(20) NOT NULL AUTO_INCREMENT,
  `VID` bigint(20) NOT NULL DEFAULT 0,
  `UID` bigint(20) NOT NULL DEFAULT 0,
  `reason` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `message` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `add_date` date NOT NULL,
  PRIMARY KEY (`FID`) USING BTREE,
  INDEX `VID`(`VID`) USING BTREE,
  INDEX `UID`(`UID`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for video_subscribe
-- ----------------------------
DROP TABLE IF EXISTS `video_subscribe`;
CREATE TABLE `video_subscribe`  (
  `UID` bigint(20) NOT NULL DEFAULT 0,
  `SUID` bigint(20) NOT NULL DEFAULT 0,
  `subscribe_date` date NOT NULL,
  INDEX `USUID`(`UID`, `SUID`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Fixed;

-- ----------------------------
-- Table structure for video_vote_ip
-- ----------------------------
DROP TABLE IF EXISTS `video_vote_ip`;
CREATE TABLE `video_vote_ip`  (
  `VID` bigint(20) NOT NULL DEFAULT 0,
  `ip` int(9) NOT NULL DEFAULT 0,
  UNIQUE INDEX `vid_ip`(`VID`, `ip`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Fixed;

-- ----------------------------
-- Table structure for video_vote_users
-- ----------------------------
DROP TABLE IF EXISTS `video_vote_users`;
CREATE TABLE `video_vote_users`  (
  `VID` bigint(20) NOT NULL DEFAULT 0,
  `UID` int(9) NOT NULL DEFAULT 0,
  INDEX `vid_uid`(`VID`, `UID`) USING BTREE
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Fixed;

-- ----------------------------
-- Table structure for wall
-- ----------------------------
DROP TABLE IF EXISTS `wall`;
CREATE TABLE `wall`  (
  `wall_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `OID` bigint(20) NOT NULL DEFAULT 0,
  `UID` bigint(20) NOT NULL DEFAULT 0,
  `message` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `addtime` bigint(20) NOT NULL DEFAULT 0,
  `status` enum('1','0') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`wall_id`) USING BTREE,
  INDEX `OID`(`OID`) USING BTREE,
  INDEX `UID`(`UID`) USING BTREE,
  INDEX `status`(`status`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of wall
-- ----------------------------
INSERT INTO `wall` VALUES (1, 1, 3, '111111', 1530412836, '1');

SET FOREIGN_KEY_CHECKS = 1;
