-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 24, 2017 at 06:22 AM
-- Server version: 5.5.57-cll
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mysql_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `adv`
--

CREATE TABLE `adv` (
  `adv_id` bigint(20) NOT NULL,
  `adv_group` tinyint(3) UNSIGNED NOT NULL DEFAULT '0',
  `adv_name` varchar(99) NOT NULL DEFAULT '',
  `adv_text` text NOT NULL,
  `adv_views` bigint(20) NOT NULL DEFAULT '0',
  `adv_click` bigint(20) NOT NULL DEFAULT '0',
  `adv_addtime` bigint(20) NOT NULL DEFAULT '0',
  `adv_status` enum('1','0') NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `adv_group`
--

CREATE TABLE `adv_group` (
  `advgrp_id` tinyint(3) UNSIGNED NOT NULL DEFAULT '0',
  `advgrp_name` varchar(99) NOT NULL DEFAULT '',
  `total_advs` bigint(20) NOT NULL DEFAULT '0',
  `advgrp_rotate` enum('1','0') NOT NULL DEFAULT '1',
  `advgrp_status` enum('1','0') NOT NULL DEFAULT '1',
  `adv_width` tinyint(4) UNSIGNED NOT NULL DEFAULT '0',
  `adv_height` tinyint(4) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `adv_group`
--

INSERT INTO `adv_group` (`advgrp_id`, `advgrp_name`, `total_advs`, `advgrp_rotate`, `advgrp_status`, `adv_width`, `adv_height`) VALUES
(1, 'index_right', 0, '1', '1', 0, 0),
(2, 'index_bottom', 0, '1', '1', 0, 0),
(3, 'videos_right', 0, '1', '1', 0, 0),
(4, 'videos_bottom', 0, '1', '1', 0, 0),
(5, 'categories_right', 0, '1', '1', 0, 0),
(6, 'categories_bottom', 0, '1', '1', 0, 0),
(7, 'community_right', 0, '1', '1', 0, 0),
(8, 'community_bottom', 0, '1', '1', 0, 0),
(9, 'blogs_lefts', 0, '1', '1', 0, 0),
(10, 'blogs_right', 0, '1', '1', 0, 0),
(11, 'blogs_bottom', 0, '1', '1', 0, 0),
(12, 'users_right', 0, '1', '1', 0, 0),
(13, 'users_bottom', 0, '1', '1', 0, 0),
(14, 'albums_right', 0, '1', '1', 0, 0),
(21, 'search_bottom', 0, '1', '1', 0, 0),
(20, 'search_right', 0, '1', '1', 0, 0),
(19, 'video_right_second', 0, '1', '1', 0, 0),
(18, 'photo_bottom', 0, '1', '1', 0, 0),
(17, 'video_bottom', 0, '1', '1', 0, 0),
(16, 'video_right', 0, '1', '1', 0, 0),
(15, 'albums_bottom', 0, '1', '1', 0, 0),
(22, 'search_photos_right', 0, '1', '1', 0, 0),
(23, 'search_photos_bottom', 0, '1', '1', 0, 0),
(24, 'search_users_right', 0, '1', '1', 0, 0),
(25, 'search_users_bottom', 0, '1', '1', 0, 0),
(26, 'games_right', 0, '1', '1', 0, 0),
(27, 'games_bottom', 0, '1', '1', 0, 0),
(28, 'game_right', 0, '1', '1', 0, 0),
(29, 'game_bottom', 0, '1', '1', 0, 0),
(30, 'game_right_second', 0, '1', '1', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `adv_pause`
--

CREATE TABLE `adv_pause` (
  `id` bigint(20) NOT NULL,
  `name` varchar(99) NOT NULL DEFAULT '',
  `code` text NOT NULL,
  `device` enum('dm','d','m') NOT NULL DEFAULT 'dm',
  `categories` text NOT NULL,
  `views` bigint(20) NOT NULL DEFAULT '0',
  `clicks` bigint(20) NOT NULL DEFAULT '0',
  `status` enum('1','0') NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `aembedder`
--

CREATE TABLE `aembedder` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `website` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL DEFAULT '',
  `uid` bigint(20) NOT NULL DEFAULT '1',
  `cid` bigint(20) NOT NULL DEFAULT '0',
  `run_key` varchar(20) NOT NULL DEFAULT '',
  `added` bigint(20) NOT NULL DEFAULT '0',
  `total` bigint(20) NOT NULL DEFAULT '0',
  `last_run` datetime DEFAULT NULL,
  `pid` bigint(20) NOT NULL DEFAULT '0',
  `status` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE `albums` (
  `AID` bigint(20) NOT NULL,
  `UID` bigint(20) NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL DEFAULT '',
  `tags` text NOT NULL,
  `category` tinyint(2) NOT NULL DEFAULT '0',
  `total_photos` bigint(20) NOT NULL DEFAULT '0',
  `total_views` bigint(20) NOT NULL DEFAULT '0',
  `type` enum('public','private') NOT NULL DEFAULT 'public',
  `addtime` bigint(20) NOT NULL DEFAULT '0',
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `adddate` date NOT NULL DEFAULT '0000-00-00',
  `rate` float NOT NULL DEFAULT '0',
  `ratedby` bigint(20) NOT NULL DEFAULT '0',
  `total_comments` bigint(20) NOT NULL DEFAULT '0',
  `total_favorites` bigint(20) NOT NULL DEFAULT '0',
  `likes` bigint(20) NOT NULL DEFAULT '0',
  `dislikes` bigint(20) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `album_categories`
--

CREATE TABLE `album_categories` (
  `CID` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT '',
  `slug` varchar(120) NOT NULL DEFAULT '',
  `total_albums` bigint(20) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `bans`
--

CREATE TABLE `bans` (
  `ban_id` bigint(20) NOT NULL,
  `ban_ip` varchar(16) NOT NULL DEFAULT '',
  `ban_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `BID` bigint(20) NOT NULL,
  `UID` bigint(20) NOT NULL DEFAULT '0',
  `title` varchar(255) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  `total_views` bigint(20) NOT NULL DEFAULT '0',
  `total_comments` bigint(20) NOT NULL DEFAULT '0',
  `total_links` bigint(20) NOT NULL DEFAULT '0',
  `addtime` bigint(20) NOT NULL DEFAULT '0',
  `adddate` date NOT NULL DEFAULT '0000-00-00',
  `status` enum('1','0') NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `blog_comments`
--

CREATE TABLE `blog_comments` (
  `CID` bigint(20) NOT NULL,
  `BID` bigint(20) NOT NULL DEFAULT '0',
  `UID` bigint(20) NOT NULL DEFAULT '0',
  `comment` text NOT NULL,
  `addtime` bigint(20) NOT NULL DEFAULT '0',
  `status` enum('1','0') NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `channel`
--

CREATE TABLE `channel` (
  `CHID` bigint(20) NOT NULL,
  `name` varchar(120) NOT NULL DEFAULT '',
  `slug` varchar(120) NOT NULL DEFAULT '',
  `total_videos` bigint(20) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `confirm`
--

CREATE TABLE `confirm` (
  `UID` bigint(20) NOT NULL DEFAULT '0',
  `code` varchar(10) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `csv_files`
--

CREATE TABLE `csv_files` (
  `id` bigint(20) NOT NULL,
  `url` varchar(255) NOT NULL DEFAULT '',
  `total` bigint(20) NOT NULL DEFAULT '0',
  `completed` bigint(20) NOT NULL DEFAULT '0',
  `pid` bigint(20) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `csv_formats`
--

CREATE TABLE `csv_formats` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT '',
  `format` varchar(255) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `emailinfo`
--

CREATE TABLE `emailinfo` (
  `email_id` varchar(50) NOT NULL DEFAULT '',
  `email_subject` varchar(255) NOT NULL DEFAULT '',
  `email_path` varchar(255) NOT NULL DEFAULT '',
  `comment` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `emailinfo`
--

INSERT INTO `emailinfo` (`email_id`, `email_subject`, `email_path`, `comment`) VALUES
('welcome', 'Welcome to {$site_title}', 'emails/welcome.tpl', 'Register welcome email'),
('recover_password', 'Your {$site_name} Username and Password', 'emails/recover_password.tpl', 'Recovering user login password'),
('subscribe_email', '{$sender_name} has uploaded a new video', 'emails/subscribe_email.tpl', 'Video Subscription Email'),
('friend_request', '{$username} added you as a friend on {$site_name}', 'emails/friend_request.tpl', 'Friend Request'),
('invite_friends_email', '{$sender_name} has sent you a invitation!', 'emails/invite.tpl', 'Invite friends email'),
('share_video', '{$sender_name} has sent you a video!', 'emails/share_video.tpl', 'Share video email'),
('share_photo', '{$sender_name} has sent you a photo!', 'emails/share_photo.tpl', 'Share photo email'),
('share_game', '{$sender_name} has sent you a game!', 'emails/share_game.tpl', 'Share game email'),
('verify_email', '{$site_name} Confirmation Email', 'emails/verify_email.tpl', 'Email verification'),
('video_upload', 'Your video was successfuly uploaded to {$site_name}!', 'emails/video_upload.tpl', 'Video upload email'),
('video_approve', 'Your video was successfuly uploaded to {$site_name}!', 'emails/video_approve.tpl', 'Video upload email'),
('photo_approve', 'Your album was successfuly uploaded to {$site_name}!', 'emails/photo_approve.tpl', 'Album approve email'),
('photo_upload', 'Your album was successfuly uploaded to {$site_name}!', 'emails/photo_upload.tpl', 'Album upload email'),
('game_approve', 'Your game was successfuly uploaded to {$site_name}!', 'emails/game_approve.tpl', 'Game approve email'),
('game_upload', 'Your game was successfuly uploaded to {$site_name}!', 'emails/game_upload.tpl', 'Game upload email'),
('wall_comment', 'Your received wall comment!', 'emails/wall_comment.tpl', 'Wall comment email'),
('request_approved', 'Your friend request has been approved!', 'emails/request_approved.tpl', 'Friend request approve'),
('request_rejected', 'Your friend request has been approved!', 'emails/request_rejected.tpl', 'Friend request rejected'),
('video_comment', 'You received video comment from {$username}!', 'emails/video_comment.tpl', 'video comment'),
('blog_comment', 'You received blog comment from {$username}!', 'emails/blog_comment.tpl', 'blog comment'),
('game_comment', 'You received game comment from {$username}!', 'emails/game_comment.tpl', 'game comment'),
('photo_comment', 'You received photo comment from {$username}!', 'emails/photo_comment.tpl', 'photo comment'),
('player_email', 'I want to share this video with you!', 'emails/player_email.tpl', 'Player email');

-- --------------------------------------------------------

--
-- Table structure for table `encoding`
--

CREATE TABLE `encoding` (
  `id` bigint(20) NOT NULL,
  `label` varchar(99) NOT NULL DEFAULT '',
  `width` int(11) NOT NULL DEFAULT '0',
  `height` int(11) NOT NULL DEFAULT '0',
  `crf` tinyint(4) NOT NULL DEFAULT '18',
  `preset` enum('ultrafast','superfast','veryfast','faster','fast','medium','slow','slower','veryslow','placebo') NOT NULL DEFAULT 'fast',
  `faststart` enum('1','0') NOT NULL DEFAULT '1',
  `ios` enum('-profile:v baseline -level 3.0','-profile:v baseline -level 3.1','-profile:v main -level 3.1','-profile:v main -level 4.0','-profile:v high -level 4.0','-profile:v high -level 4.1','-profile:v high -level 4.2') DEFAULT NULL,
  `format` varchar(99) DEFAULT 'mp4',
  `copyonly` enum('1','0') NOT NULL DEFAULT '1',
  `status` enum('1','0') NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `encoding`
--

INSERT INTO `encoding` (`id`, `label`, `width`, `height`, `crf`, `preset`, `faststart`, `ios`, `format`, `copyonly`, `status`) VALUES
(1, '240p', 320, 240, 23, 'medium', '1', '', 'mp4', '1', '1'),
(2, '360p', 480, 360, 23, 'medium', '1', '', 'mp4', '1', '1'),
(3, '480p', 640, 480, 23, 'medium', '1', '', 'mp4', '1', '1'),
(4, '720p', 1280, 720, 23, 'medium', '1', '', 'mp4', '1', '1'),
(5, '1080p', 1920, 1080, 20, 'fast', '1', '', 'mp4', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `favourite`
--

CREATE TABLE `favourite` (
  `UID` bigint(20) NOT NULL DEFAULT '0',
  `VID` bigint(20) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE `friends` (
  `UID` bigint(20) NOT NULL DEFAULT '0',
  `FID` bigint(20) NOT NULL DEFAULT '0',
  `invite_date` date NOT NULL DEFAULT '0000-00-00',
  `status` enum('Pending','Confirmed','Denied') NOT NULL DEFAULT 'Pending',
  `message` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE `game` (
  `GID` bigint(20) NOT NULL,
  `UID` bigint(20) NOT NULL DEFAULT '0',
  `title` varchar(255) NOT NULL DEFAULT '',
  `tags` text NOT NULL,
  `category` tinyint(3) NOT NULL DEFAULT '0',
  `total_plays` bigint(20) NOT NULL DEFAULT '0',
  `total_comments` bigint(20) NOT NULL DEFAULT '0',
  `total_favorites` bigint(20) NOT NULL DEFAULT '0',
  `rate` float NOT NULL DEFAULT '0',
  `ratedby` bigint(20) NOT NULL DEFAULT '0',
  `type` enum('public','private') NOT NULL DEFAULT 'public',
  `space` bigint(20) NOT NULL DEFAULT '0',
  `playtime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `be_commented` enum('yes','no') NOT NULL DEFAULT 'yes',
  `be_rated` enum('yes','no') NOT NULL DEFAULT 'yes',
  `addtime` bigint(20) NOT NULL DEFAULT '0',
  `adddate` date NOT NULL DEFAULT '0000-00-00',
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `likes` bigint(20) NOT NULL DEFAULT '0',
  `dislikes` bigint(20) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `game_categories`
--

CREATE TABLE `game_categories` (
  `category_id` bigint(20) NOT NULL,
  `category_name` varchar(255) NOT NULL DEFAULT '',
  `slug` varchar(120) NOT NULL DEFAULT '',
  `total_games` bigint(20) NOT NULL DEFAULT '0',
  `status` enum('1','0') NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `game_comments`
--

CREATE TABLE `game_comments` (
  `CID` bigint(20) NOT NULL,
  `GID` bigint(20) NOT NULL DEFAULT '0',
  `UID` bigint(20) NOT NULL DEFAULT '0',
  `comment` text NOT NULL,
  `addtime` bigint(20) NOT NULL DEFAULT '0',
  `status` enum('1','0') NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `game_favorites`
--

CREATE TABLE `game_favorites` (
  `GID` bigint(20) NOT NULL DEFAULT '0',
  `UID` bigint(20) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `game_flags`
--

CREATE TABLE `game_flags` (
  `FID` bigint(20) NOT NULL,
  `GID` bigint(20) NOT NULL DEFAULT '0',
  `UID` bigint(20) NOT NULL DEFAULT '0',
  `reason` varchar(15) NOT NULL DEFAULT '',
  `message` text NOT NULL,
  `add_date` varchar(20) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `game_rating_id`
--

CREATE TABLE `game_rating_id` (
  `GID` bigint(20) NOT NULL DEFAULT '0',
  `UID` bigint(20) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `game_rating_ip`
--

CREATE TABLE `game_rating_ip` (
  `GID` bigint(20) NOT NULL DEFAULT '0',
  `ip` int(9) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `guests`
--

CREATE TABLE `guests` (
  `guest_id` bigint(20) NOT NULL,
  `guest_ip` int(9) NOT NULL DEFAULT '0',
  `last_login` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `bandwidth` bigint(20) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mail`
--

CREATE TABLE `mail` (
  `mail_id` bigint(20) NOT NULL,
  `sender` varchar(15) NOT NULL DEFAULT '',
  `receiver` varchar(15) NOT NULL DEFAULT '',
  `subject` varchar(255) NOT NULL DEFAULT '',
  `body` text NOT NULL,
  `inbox` enum('1','0') NOT NULL DEFAULT '1',
  `outbox` enum('1','0') NOT NULL DEFAULT '0',
  `send_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `readed` enum('1','0') NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `NID` bigint(20) NOT NULL,
  `UID` bigint(20) NOT NULL DEFAULT '0',
  `category` tinyint(3) NOT NULL DEFAULT '0',
  `title` varchar(255) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  `total_views` bigint(20) NOT NULL DEFAULT '0',
  `total_comments` bigint(20) NOT NULL DEFAULT '0',
  `total_links` bigint(20) NOT NULL DEFAULT '0',
  `addtime` bigint(20) NOT NULL DEFAULT '0',
  `adddate` date NOT NULL DEFAULT '0000-00-00',
  `status` enum('1','0') NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `notice_categories`
--

CREATE TABLE `notice_categories` (
  `category_id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT '',
  `total_notices` bigint(20) NOT NULL DEFAULT '0',
  `status` enum('1','0') NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `notice_comments`
--

CREATE TABLE `notice_comments` (
  `CID` bigint(20) NOT NULL,
  `NID` bigint(20) NOT NULL DEFAULT '0',
  `UID` bigint(20) NOT NULL DEFAULT '0',
  `comment` text NOT NULL,
  `addtime` bigint(20) NOT NULL DEFAULT '0',
  `status` enum('1','0') NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `notice_images`
--

CREATE TABLE `notice_images` (
  `image_id` bigint(20) NOT NULL,
  `addtime` bigint(20) NOT NULL DEFAULT '0',
  `extension` varchar(5) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `PID` bigint(20) NOT NULL,
  `AID` bigint(20) NOT NULL DEFAULT '0',
  `caption` varchar(100) NOT NULL DEFAULT '',
  `total_views` bigint(20) NOT NULL DEFAULT '0',
  `total_comments` bigint(20) NOT NULL DEFAULT '0',
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `rate` float NOT NULL DEFAULT '0',
  `ratedby` bigint(20) NOT NULL DEFAULT '0',
  `total_favorites` bigint(20) NOT NULL DEFAULT '0',
  `type` enum('public','private') NOT NULL DEFAULT 'public',
  `likes` bigint(20) NOT NULL DEFAULT '0',
  `dislikes` bigint(20) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `photo_comments`
--

CREATE TABLE `photo_comments` (
  `CID` bigint(20) NOT NULL,
  `PID` bigint(20) NOT NULL DEFAULT '0',
  `UID` bigint(20) NOT NULL DEFAULT '0',
  `comment` text NOT NULL,
  `addtime` bigint(20) NOT NULL DEFAULT '0',
  `status` enum('1','0') NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `photo_favorites`
--

CREATE TABLE `photo_favorites` (
  `PID` bigint(20) NOT NULL DEFAULT '0',
  `UID` bigint(20) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `photo_flags`
--

CREATE TABLE `photo_flags` (
  `FID` bigint(20) NOT NULL,
  `PID` bigint(20) NOT NULL DEFAULT '0',
  `UID` bigint(20) NOT NULL DEFAULT '0',
  `reason` varchar(15) NOT NULL DEFAULT '',
  `message` text NOT NULL,
  `add_date` date NOT NULL DEFAULT '0000-00-00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `photo_rating_id`
--

CREATE TABLE `photo_rating_id` (
  `PID` bigint(20) NOT NULL DEFAULT '0',
  `UID` bigint(20) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `photo_rating_ip`
--

CREATE TABLE `photo_rating_ip` (
  `PID` bigint(20) NOT NULL DEFAULT '0',
  `ip` int(9) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `player`
--

CREATE TABLE `player` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `profile` varchar(255) NOT NULL DEFAULT '',
  `autoplay` enum('0','1') NOT NULL DEFAULT '0',
  `resolution` enum('low','high') NOT NULL DEFAULT 'low',
  `timeline_preview` enum('0','1') NOT NULL DEFAULT '1',
  `logo` enum('0','1') NOT NULL DEFAULT '0',
  `logo_redirect` enum('0','1') NOT NULL DEFAULT '0',
  `logo_position` varchar(20) NOT NULL DEFAULT 'top-right',
  `logo_link` varchar(255) NOT NULL DEFAULT '',
  `logo_opacity` tinyint(3) UNSIGNED NOT NULL DEFAULT '40',
  `pause_adv` enum('0','1') NOT NULL DEFAULT '0',
  `timeline_adv` enum('0','1') NOT NULL DEFAULT '0',
  `status` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `player`
--

INSERT INTO `player` (`id`, `profile`, `autoplay`, `resolution`, `timeline_preview`, `logo`, `logo_redirect`, `logo_position`, `logo_link`, `logo_opacity`, `pause_adv`, `timeline_adv`, `status`) VALUES
(1, 'Main', '0', 'high', '1', '1', '1', 'top-right', '', 40, '1', '1', '1'),
(2, 'Embed', '0', 'low', '1', '1', '1', 'top-right', '', 40, '1', '0', '1'),
(3, 'Blog/Comment', '0', 'low', '0', '0', '0', 'top-right', '', 40, '0', '0', '1'),
(4, 'Admin', '0', 'low', '0', '0', '0', 'top-right', '', 40, '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `playlist`
--

CREATE TABLE `playlist` (
  `UID` bigint(20) DEFAULT NULL,
  `VID` bigint(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `servers`
--

CREATE TABLE `servers` (
  `server_id` int(11) NOT NULL,
  `url` varchar(255) NOT NULL DEFAULT '',
  `video_url` varchar(255) NOT NULL DEFAULT '',
  `server_ip` varchar(255) NOT NULL DEFAULT '',
  `ftp_username` varchar(255) NOT NULL DEFAULT '',
  `ftp_password` varchar(255) NOT NULL DEFAULT '',
  `ftp_root` varchar(255) NOT NULL DEFAULT '',
  `last_used` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `current_used` enum('0','1') NOT NULL DEFAULT '0',
  `status` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `session_id` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `session_expires` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `session_data` text COLLATE utf8_unicode_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `UID` bigint(20) NOT NULL,
  `FBID` varchar(100) NOT NULL DEFAULT '',
  `GID` varchar(100) NOT NULL DEFAULT '',
  `email` varchar(80) NOT NULL DEFAULT '',
  `username` varchar(80) NOT NULL DEFAULT '',
  `fname` varchar(40) NOT NULL DEFAULT '',
  `lname` varchar(40) NOT NULL DEFAULT '',
  `bdate` date NOT NULL DEFAULT '0000-00-00',
  `gender` varchar(6) NOT NULL DEFAULT '',
  `relation` varchar(8) NOT NULL DEFAULT '',
  `aboutme` text NOT NULL,
  `website` varchar(120) NOT NULL DEFAULT '',
  `town` varchar(80) NOT NULL DEFAULT '',
  `city` varchar(80) NOT NULL DEFAULT '',
  `zip` varchar(30) NOT NULL DEFAULT '',
  `country` varchar(80) NOT NULL DEFAULT '',
  `occupation` text NOT NULL,
  `company` text NOT NULL,
  `school` text NOT NULL,
  `interest_hobby` text NOT NULL,
  `fav_movie_show` text NOT NULL,
  `fav_music` text NOT NULL,
  `fav_book` text NOT NULL,
  `friends_type` varchar(255) NOT NULL DEFAULT 'All|Family|Friends',
  `video_viewed` int(10) NOT NULL DEFAULT '0',
  `profile_viewed` int(10) NOT NULL DEFAULT '0',
  `watched_video` int(10) NOT NULL DEFAULT '0',
  `addtime` varchar(20) NOT NULL DEFAULT '',
  `logintime` varchar(20) NOT NULL DEFAULT '',
  `emailverified` varchar(3) NOT NULL DEFAULT 'no',
  `account_status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `vote` varchar(5) NOT NULL DEFAULT '',
  `ratedby` varchar(5) NOT NULL DEFAULT '0',
  `rate` float NOT NULL DEFAULT '0',
  `parents_name` varchar(50) NOT NULL DEFAULT '',
  `parents_email` varchar(50) NOT NULL DEFAULT '',
  `friends_name` varchar(50) NOT NULL DEFAULT '',
  `friends_email` varchar(50) NOT NULL DEFAULT '',
  `photo` varchar(100) NOT NULL DEFAULT '',
  `playlist` enum('Public','Private') NOT NULL DEFAULT 'Public',
  `user_ip` varchar(16) NOT NULL DEFAULT '',
  `pwd` varchar(60) NOT NULL DEFAULT '',
  `interested` varchar(12) NOT NULL DEFAULT '',
  `turnon` text NOT NULL,
  `turnoff` text NOT NULL,
  `total_albums` bigint(20) NOT NULL DEFAULT '0',
  `total_blogs` bigint(20) NOT NULL DEFAULT '0',
  `total_videos` bigint(20) NOT NULL DEFAULT '0',
  `total_friends` bigint(20) NOT NULL DEFAULT '0',
  `popularity` bigint(20) NOT NULL DEFAULT '0',
  `total_games` bigint(20) NOT NULL DEFAULT '0',
  `points` bigint(20) NOT NULL DEFAULT '0',
  `premium` int(11) NOT NULL,
  `premiumexpirytime` date NOT NULL,
  `likes` bigint(20) NOT NULL DEFAULT '0',
  `dislikes` bigint(20) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`UID`, `FBID`, `GID`, `email`, `username`, `fname`, `lname`, `bdate`, `gender`, `relation`, `aboutme`, `website`, `town`, `city`, `zip`, `country`, `occupation`, `company`, `school`, `interest_hobby`, `fav_movie_show`, `fav_music`, `fav_book`, `friends_type`, `video_viewed`, `profile_viewed`, `watched_video`, `addtime`, `logintime`, `emailverified`, `account_status`, `vote`, `ratedby`, `rate`, `parents_name`, `parents_email`, `friends_name`, `friends_email`, `photo`, `playlist`, `user_ip`, `pwd`, `interested`, `turnon`, `turnoff`, `total_albums`, `total_blogs`, `total_videos`, `total_friends`, `popularity`, `total_games`, `points`, `premium`, `premiumexpirytime`, `likes`, `dislikes`) VALUES
(1, '', '', 'anonymous@yoursite.com', 'anonymous', '', '', '0000-00-00', 'Male', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'All|Family|Friends', 297, 37, 0, '1228326055', '1228326055', 'no', 'Active', '', '1', 100, '', '', '', '', '', 'Public', '', '$2a$08$/gSIczQwLZElwKTKZBVhCObjlFjEDi1bSsw4TIqkmzU.AGoHaO5r.', '', '', '', 5, 0, 11, 0, -2, 2, 30, 0, '0000-00-00', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `spam`
--

CREATE TABLE `spam` (
  `spam_id` bigint(20) NOT NULL,
  `UID` bigint(20) NOT NULL DEFAULT '0',
  `type` enum('video','photo','wall','notice','blog','game') NOT NULL DEFAULT 'video',
  `parent_id` bigint(20) NOT NULL DEFAULT '0',
  `comment_id` bigint(20) NOT NULL DEFAULT '0',
  `addtime` bigint(20) NOT NULL DEFAULT '0',
  `adddate` date NOT NULL DEFAULT '0000-00-00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users_blocks`
--

CREATE TABLE `users_blocks` (
  `UID` bigint(20) NOT NULL DEFAULT '0',
  `BID` bigint(20) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_blocks`
--

INSERT INTO `users_blocks` (`UID`, `BID`) VALUES
(2, 11),
(2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `users_flags`
--

CREATE TABLE `users_flags` (
  `flag_id` bigint(20) NOT NULL,
  `UID` bigint(20) NOT NULL DEFAULT '0',
  `RID` bigint(20) NOT NULL DEFAULT '0',
  `reason` enum('offensive','underage','spammer','other') NOT NULL DEFAULT 'offensive',
  `message` varchar(100) NOT NULL DEFAULT '',
  `addtime` bigint(20) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users_online`
--

CREATE TABLE `users_online` (
  `UID` bigint(20) NOT NULL DEFAULT '0',
  `online` bigint(20) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users_prefs`
--

CREATE TABLE `users_prefs` (
  `UID` bigint(20) NOT NULL DEFAULT '0',
  `show_playlist` enum('0','1','2') NOT NULL DEFAULT '2',
  `show_favorites` enum('0','1','2') NOT NULL DEFAULT '2',
  `show_friends` enum('0','1','2') NOT NULL DEFAULT '2',
  `show_subscriptions` enum('0','1','2') NOT NULL DEFAULT '2',
  `show_subscribers` enum('0','1','2') NOT NULL DEFAULT '2',
  `friends_requests` enum('0','1') NOT NULL DEFAULT '0',
  `wall_public` enum('0','1') NOT NULL DEFAULT '1',
  `video_approve` enum('0','1') NOT NULL DEFAULT '1',
  `album_approve` enum('0','1') NOT NULL DEFAULT '1',
  `video_subscribe` enum('0','1') NOT NULL DEFAULT '1',
  `friend_request` enum('0','1') NOT NULL DEFAULT '1',
  `wall_write` enum('0','1') NOT NULL DEFAULT '1',
  `video_comment` enum('0','1') NOT NULL DEFAULT '1',
  `photo_comment` enum('0','1') NOT NULL DEFAULT '1',
  `blog_comment` enum('0','1') NOT NULL DEFAULT '1',
  `send_message` enum('0','1') NOT NULL DEFAULT '1',
  `game_comment` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_prefs`
--

INSERT INTO `users_prefs` (`UID`, `show_playlist`, `show_favorites`, `show_friends`, `show_subscriptions`, `show_subscribers`, `friends_requests`, `wall_public`, `video_approve`, `album_approve`, `video_subscribe`, `friend_request`, `wall_write`, `video_comment`, `photo_comment`, `blog_comment`, `send_message`, `game_comment`) VALUES
(1, '2', '2', '2', '2', '2', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `users_rating_id`
--

CREATE TABLE `users_rating_id` (
  `UID` bigint(20) NOT NULL DEFAULT '0',
  `RID` bigint(20) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users_rating_ip`
--

CREATE TABLE `users_rating_ip` (
  `UID` bigint(20) NOT NULL DEFAULT '0',
  `ip` int(9) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `VID` bigint(20) NOT NULL,
  `UID` bigint(20) NOT NULL DEFAULT '0',
  `title` varchar(120) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `featuredesc` text NOT NULL,
  `keyword` text NOT NULL,
  `channel` varchar(255) NOT NULL DEFAULT '0|',
  `vdoname` varchar(40) NOT NULL DEFAULT '',
  `flvdoname` varchar(40) DEFAULT NULL,
  `formats` varchar(500) DEFAULT NULL,
  `lformats` varchar(500) DEFAULT NULL,
  `duration` float NOT NULL DEFAULT '0',
  `space` bigint(20) NOT NULL DEFAULT '0',
  `type` varchar(7) NOT NULL DEFAULT '',
  `addtime` varchar(20) DEFAULT NULL,
  `adddate` date NOT NULL DEFAULT '0000-00-00',
  `record_date` date NOT NULL DEFAULT '0000-00-00',
  `location` text NOT NULL,
  `country` varchar(120) NOT NULL DEFAULT '',
  `vkey` varchar(20) NOT NULL DEFAULT '',
  `viewnumber` bigint(10) NOT NULL DEFAULT '0',
  `viewtime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `com_num` int(8) NOT NULL DEFAULT '0',
  `fav_num` int(8) NOT NULL DEFAULT '0',
  `download_num` bigint(20) NOT NULL DEFAULT '0',
  `featured` varchar(3) NOT NULL DEFAULT 'no',
  `ratedby` bigint(10) NOT NULL DEFAULT '0',
  `rate` float NOT NULL DEFAULT '0',
  `filehome` varchar(120) NOT NULL DEFAULT '',
  `be_comment` varchar(3) NOT NULL DEFAULT 'yes',
  `be_rated` varchar(3) NOT NULL DEFAULT 'yes',
  `embed` varchar(8) NOT NULL DEFAULT 'enabled',
  `embed_code` text NOT NULL,
  `thumb` tinyint(1) UNSIGNED NOT NULL DEFAULT '1',
  `thumbs` tinyint(2) UNSIGNED NOT NULL DEFAULT '20',
  `voter_id` varchar(200) NOT NULL DEFAULT '',
  `server` varchar(255) NOT NULL DEFAULT '',
  `active` char(1) NOT NULL DEFAULT '',
  `hd_filename` varchar(20) NOT NULL DEFAULT '',
  `ipod_filename` varchar(20) NOT NULL DEFAULT '',
  `aspect_hd` varchar(10) NOT NULL DEFAULT '0',
  `width_hd` int(4) NOT NULL DEFAULT '0',
  `height_hd` int(4) NOT NULL DEFAULT '0',
  `aspect_sd` varchar(10) NOT NULL DEFAULT '0',
  `width_sd` int(4) NOT NULL DEFAULT '0',
  `height_sd` int(4) NOT NULL DEFAULT '0',
  `iphone` int(1) NOT NULL DEFAULT '0',
  `hd` int(1) NOT NULL DEFAULT '0',
  `likes` bigint(20) NOT NULL DEFAULT '0',
  `dislikes` bigint(20) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `video_comments`
--

CREATE TABLE `video_comments` (
  `CID` bigint(20) NOT NULL,
  `VID` bigint(20) NOT NULL DEFAULT '0',
  `UID` bigint(20) NOT NULL DEFAULT '0',
  `comment` text NOT NULL,
  `addtime` bigint(20) NOT NULL DEFAULT '0',
  `status` enum('1','0') NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `video_flags`
--

CREATE TABLE `video_flags` (
  `FID` bigint(20) NOT NULL,
  `VID` bigint(20) NOT NULL DEFAULT '0',
  `UID` bigint(20) NOT NULL DEFAULT '0',
  `reason` varchar(15) NOT NULL DEFAULT '',
  `message` text NOT NULL,
  `add_date` date NOT NULL DEFAULT '0000-00-00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `video_subscribe`
--

CREATE TABLE `video_subscribe` (
  `UID` bigint(20) NOT NULL DEFAULT '0',
  `SUID` bigint(20) NOT NULL DEFAULT '0',
  `subscribe_date` date NOT NULL DEFAULT '0000-00-00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `video_vote_ip`
--

CREATE TABLE `video_vote_ip` (
  `VID` bigint(20) NOT NULL DEFAULT '0',
  `ip` int(9) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `video_vote_users`
--

CREATE TABLE `video_vote_users` (
  `VID` bigint(20) NOT NULL DEFAULT '0',
  `UID` int(9) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `wall`
--

CREATE TABLE `wall` (
  `wall_id` bigint(20) NOT NULL,
  `OID` bigint(20) NOT NULL DEFAULT '0',
  `UID` bigint(20) NOT NULL DEFAULT '0',
  `message` text NOT NULL,
  `addtime` bigint(20) NOT NULL DEFAULT '0',
  `status` enum('1','0') NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adv`
--
ALTER TABLE `adv`
  ADD PRIMARY KEY (`adv_id`),
  ADD KEY `adv_group` (`adv_group`),
  ADD KEY `adv_addtime` (`adv_addtime`),
  ADD KEY `adv_status` (`adv_status`);

--
-- Indexes for table `adv_group`
--
ALTER TABLE `adv_group`
  ADD KEY `advgrp_name` (`advgrp_name`),
  ADD KEY `advgrp_rotate` (`advgrp_rotate`),
  ADD KEY `advgrp_status` (`advgrp_status`);

--
-- Indexes for table `adv_pause`
--
ALTER TABLE `adv_pause`
  ADD PRIMARY KEY (`id`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `aembedder`
--
ALTER TABLE `aembedder`
  ADD PRIMARY KEY (`id`),
  ADD KEY `url` (`url`),
  ADD KEY `pid` (`pid`);

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`AID`),
  ADD KEY `UID` (`UID`),
  ADD KEY `type` (`type`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `album_categories`
--
ALTER TABLE `album_categories`
  ADD PRIMARY KEY (`CID`);

--
-- Indexes for table `bans`
--
ALTER TABLE `bans`
  ADD PRIMARY KEY (`ban_id`),
  ADD KEY `ban_ip` (`ban_ip`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`BID`),
  ADD KEY `UID` (`UID`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `blog_comments`
--
ALTER TABLE `blog_comments`
  ADD PRIMARY KEY (`CID`),
  ADD KEY `BID` (`BID`),
  ADD KEY `UID` (`UID`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `channel`
--
ALTER TABLE `channel`
  ADD PRIMARY KEY (`CHID`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `confirm`
--
ALTER TABLE `confirm`
  ADD KEY `UID` (`UID`),
  ADD KEY `code` (`code`);

--
-- Indexes for table `csv_files`
--
ALTER TABLE `csv_files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `url` (`url`),
  ADD KEY `total` (`total`),
  ADD KEY `completed` (`completed`);

--
-- Indexes for table `csv_formats`
--
ALTER TABLE `csv_formats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`);

--
-- Indexes for table `emailinfo`
--
ALTER TABLE `emailinfo`
  ADD PRIMARY KEY (`email_id`);

--
-- Indexes for table `encoding`
--
ALTER TABLE `encoding`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `favourite`
--
ALTER TABLE `favourite`
  ADD UNIQUE KEY `UID` (`UID`,`VID`);

--
-- Indexes for table `friends`
--
ALTER TABLE `friends`
  ADD KEY `UID_FID` (`UID`,`FID`);

--
-- Indexes for table `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`GID`),
  ADD KEY `UID` (`UID`),
  ADD KEY `type` (`type`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `game_categories`
--
ALTER TABLE `game_categories`
  ADD PRIMARY KEY (`category_id`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `game_comments`
--
ALTER TABLE `game_comments`
  ADD PRIMARY KEY (`CID`),
  ADD KEY `GID` (`GID`),
  ADD KEY `UID` (`UID`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `game_favorites`
--
ALTER TABLE `game_favorites`
  ADD KEY `GID` (`GID`),
  ADD KEY `UID` (`UID`);

--
-- Indexes for table `game_flags`
--
ALTER TABLE `game_flags`
  ADD PRIMARY KEY (`FID`),
  ADD KEY `GID_UID` (`GID`,`UID`);

--
-- Indexes for table `game_rating_id`
--
ALTER TABLE `game_rating_id`
  ADD KEY `GID` (`GID`),
  ADD KEY `UID` (`UID`);

--
-- Indexes for table `game_rating_ip`
--
ALTER TABLE `game_rating_ip`
  ADD KEY `GID` (`GID`),
  ADD KEY `ip` (`ip`);

--
-- Indexes for table `guests`
--
ALTER TABLE `guests`
  ADD PRIMARY KEY (`guest_id`),
  ADD KEY `guest_ip` (`guest_ip`);

--
-- Indexes for table `mail`
--
ALTER TABLE `mail`
  ADD PRIMARY KEY (`mail_id`),
  ADD KEY `sender` (`sender`),
  ADD KEY `receiver` (`receiver`),
  ADD KEY `inbox` (`inbox`),
  ADD KEY `outbox` (`outbox`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`NID`),
  ADD KEY `UID` (`UID`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `notice_categories`
--
ALTER TABLE `notice_categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `notice_comments`
--
ALTER TABLE `notice_comments`
  ADD PRIMARY KEY (`CID`),
  ADD KEY `NID` (`NID`),
  ADD KEY `UID` (`UID`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `notice_images`
--
ALTER TABLE `notice_images`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`PID`),
  ADD KEY `AID` (`AID`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `photo_comments`
--
ALTER TABLE `photo_comments`
  ADD PRIMARY KEY (`CID`),
  ADD KEY `PID` (`PID`),
  ADD KEY `UID` (`UID`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `photo_favorites`
--
ALTER TABLE `photo_favorites`
  ADD KEY `PID` (`PID`),
  ADD KEY `UID` (`UID`);

--
-- Indexes for table `photo_flags`
--
ALTER TABLE `photo_flags`
  ADD PRIMARY KEY (`FID`),
  ADD KEY `PID` (`PID`),
  ADD KEY `UID` (`UID`);

--
-- Indexes for table `photo_rating_id`
--
ALTER TABLE `photo_rating_id`
  ADD KEY `PID` (`PID`),
  ADD KEY `UID` (`UID`);

--
-- Indexes for table `photo_rating_ip`
--
ALTER TABLE `photo_rating_ip`
  ADD KEY `PID` (`PID`),
  ADD KEY `ip` (`ip`);

--
-- Indexes for table `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profile` (`profile`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `playlist`
--
ALTER TABLE `playlist`
  ADD UNIQUE KEY `UID` (`UID`,`VID`);

--
-- Indexes for table `servers`
--
ALTER TABLE `servers`
  ADD PRIMARY KEY (`server_id`),
  ADD UNIQUE KEY `url` (`url`),
  ADD KEY `last_used` (`last_used`),
  ADD KEY `current_used` (`current_used`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`session_id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`UID`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `spam`
--
ALTER TABLE `spam`
  ADD PRIMARY KEY (`spam_id`),
  ADD KEY `type` (`type`),
  ADD KEY `parent_id` (`parent_id`),
  ADD KEY `comment_id` (`comment_id`);

--
-- Indexes for table `users_blocks`
--
ALTER TABLE `users_blocks`
  ADD KEY `UID` (`UID`),
  ADD KEY `BID` (`BID`);

--
-- Indexes for table `users_flags`
--
ALTER TABLE `users_flags`
  ADD PRIMARY KEY (`flag_id`),
  ADD KEY `UID` (`UID`),
  ADD KEY `RID` (`RID`),
  ADD KEY `reason` (`reason`);

--
-- Indexes for table `users_online`
--
ALTER TABLE `users_online`
  ADD PRIMARY KEY (`UID`),
  ADD KEY `online` (`online`);

--
-- Indexes for table `users_prefs`
--
ALTER TABLE `users_prefs`
  ADD PRIMARY KEY (`UID`);

--
-- Indexes for table `users_rating_id`
--
ALTER TABLE `users_rating_id`
  ADD KEY `UID` (`UID`),
  ADD KEY `RID` (`RID`);

--
-- Indexes for table `users_rating_ip`
--
ALTER TABLE `users_rating_ip`
  ADD KEY `UID` (`UID`),
  ADD KEY `ip` (`ip`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`VID`),
  ADD UNIQUE KEY `vkey` (`vkey`),
  ADD KEY `viewnumber` (`viewnumber`),
  ADD KEY `rate` (`rate`),
  ADD KEY `fav_num` (`fav_num`),
  ADD KEY `active` (`active`);

--
-- Indexes for table `video_comments`
--
ALTER TABLE `video_comments`
  ADD PRIMARY KEY (`CID`),
  ADD KEY `VID` (`VID`),
  ADD KEY `UID` (`UID`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `video_flags`
--
ALTER TABLE `video_flags`
  ADD PRIMARY KEY (`FID`),
  ADD KEY `VID` (`VID`),
  ADD KEY `UID` (`UID`);

--
-- Indexes for table `video_subscribe`
--
ALTER TABLE `video_subscribe`
  ADD KEY `USUID` (`UID`,`SUID`);

--
-- Indexes for table `video_vote_ip`
--
ALTER TABLE `video_vote_ip`
  ADD UNIQUE KEY `vid_ip` (`VID`,`ip`);

--
-- Indexes for table `video_vote_users`
--
ALTER TABLE `video_vote_users`
  ADD KEY `vid_uid` (`VID`,`UID`);

--
-- Indexes for table `wall`
--
ALTER TABLE `wall`
  ADD PRIMARY KEY (`wall_id`),
  ADD KEY `OID` (`OID`),
  ADD KEY `UID` (`UID`),
  ADD KEY `status` (`status`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adv`
--
ALTER TABLE `adv`
  MODIFY `adv_id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `adv_pause`
--
ALTER TABLE `adv_pause`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `aembedder`
--
ALTER TABLE `aembedder`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `albums`
--
ALTER TABLE `albums`
  MODIFY `AID` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `album_categories`
--
ALTER TABLE `album_categories`
  MODIFY `CID` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bans`
--
ALTER TABLE `bans`
  MODIFY `ban_id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `BID` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `blog_comments`
--
ALTER TABLE `blog_comments`
  MODIFY `CID` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `channel`
--
ALTER TABLE `channel`
  MODIFY `CHID` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `csv_files`
--
ALTER TABLE `csv_files`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `csv_formats`
--
ALTER TABLE `csv_formats`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `encoding`
--
ALTER TABLE `encoding`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `game`
--
ALTER TABLE `game`
  MODIFY `GID` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `game_categories`
--
ALTER TABLE `game_categories`
  MODIFY `category_id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `game_comments`
--
ALTER TABLE `game_comments`
  MODIFY `CID` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `game_flags`
--
ALTER TABLE `game_flags`
  MODIFY `FID` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `guests`
--
ALTER TABLE `guests`
  MODIFY `guest_id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mail`
--
ALTER TABLE `mail`
  MODIFY `mail_id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `NID` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `notice_categories`
--
ALTER TABLE `notice_categories`
  MODIFY `category_id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `notice_comments`
--
ALTER TABLE `notice_comments`
  MODIFY `CID` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `notice_images`
--
ALTER TABLE `notice_images`
  MODIFY `image_id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `PID` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `photo_comments`
--
ALTER TABLE `photo_comments`
  MODIFY `CID` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `photo_flags`
--
ALTER TABLE `photo_flags`
  MODIFY `FID` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `player`
--
ALTER TABLE `player`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `servers`
--
ALTER TABLE `servers`
  MODIFY `server_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `UID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `spam`
--
ALTER TABLE `spam`
  MODIFY `spam_id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users_flags`
--
ALTER TABLE `users_flags`
  MODIFY `flag_id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `VID` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `video_comments`
--
ALTER TABLE `video_comments`
  MODIFY `CID` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `video_flags`
--
ALTER TABLE `video_flags`
  MODIFY `FID` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `wall`
--
ALTER TABLE `wall`
  MODIFY `wall_id` bigint(20) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
