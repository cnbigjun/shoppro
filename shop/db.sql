/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : liaoran

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2017-10-09 17:35:46
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `cates`
-- ----------------------------
DROP TABLE IF EXISTS `cates`;
CREATE TABLE `cates` (
  `cate_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '后台栏目ID',
  `cate_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '后台栏目名',
  `parent_id` tinyint(4) NOT NULL DEFAULT '0' COMMENT '父级栏目ID',
  `is_enabled` tinyint(4) NOT NULL DEFAULT '1' COMMENT '是否有效',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `url` varchar(40) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '所要跳转的url地址',
  PRIMARY KEY (`cate_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of cates
-- ----------------------------
INSERT INTO `cates` VALUES ('1', '订单管理', '0', '1', '2017-10-08 01:47:32', '2017-10-08 01:47:36', '');
INSERT INTO `cates` VALUES ('2', '商品管理', '0', '1', '2017-10-08 01:47:39', '2017-10-08 01:47:43', '');
INSERT INTO `cates` VALUES ('3', '会员管理', '0', '1', '2017-10-08 01:47:49', '2017-10-08 01:47:46', '');
INSERT INTO `cates` VALUES ('4', '系统设置', '0', '1', '2017-10-08 01:48:59', '2017-10-08 11:38:28', '');
INSERT INTO `cates` VALUES ('5', '广告管理', '0', '1', '2017-10-08 11:39:23', '2017-10-08 11:39:27', '');
INSERT INTO `cates` VALUES ('6', '订单列表', '1', '1', '2017-10-08 01:57:30', '2017-10-08 01:57:33', 'orders');
INSERT INTO `cates` VALUES ('7', '商品列表', '2', '1', '2017-10-08 01:58:24', '2017-10-08 01:58:27', 'goods');
INSERT INTO `cates` VALUES ('8', '商品分类', '2', '1', '2017-10-08 01:59:01', '2017-10-08 01:59:04', 'cates');
INSERT INTO `cates` VALUES ('9', '商品回收站', '2', '1', '2017-10-08 01:59:31', '2017-10-08 01:59:34', 'recycle');
INSERT INTO `cates` VALUES ('10', '会员列表', '3', '1', '2017-10-08 02:04:57', '2017-10-08 02:05:09', 'userlist');
INSERT INTO `cates` VALUES ('11', '添加会员', '3', '1', '2017-10-08 02:06:18', '2017-10-08 02:06:22', 'useradd');
INSERT INTO `cates` VALUES ('12', '会员等级', '3', '1', '2017-10-08 02:06:56', '2017-10-08 02:06:59', 'userrank');
INSERT INTO `cates` VALUES ('13', '会员留言', '3', '1', '2017-10-08 02:07:36', '2017-10-08 02:07:39', 'usermsg');
INSERT INTO `cates` VALUES ('14', '站点基本设置', '4', '1', '2017-10-08 02:08:44', '2017-10-08 02:08:47', 'basicset');
INSERT INTO `cates` VALUES ('15', '站点管理员', '4', '1', '2017-10-08 02:09:21', '2017-10-08 02:09:23', 'adminlist');
INSERT INTO `cates` VALUES ('16', '广告列表', '5', '1', '2017-10-08 02:09:59', '2017-10-08 02:10:01', 'buttons');

-- ----------------------------
-- Table structure for `migrations`
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO `migrations` VALUES ('2017_09_27_033002_create_admin_table', '2');
INSERT INTO `migrations` VALUES ('2017_09_29_031525_create_table_cates', '3');
INSERT INTO `migrations` VALUES ('2017_09_30_064958_add_url_to_cates', '4');

-- ----------------------------
-- Table structure for `password_resets`
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'admin', '1063239259@qq.com', '$2y$10$8w/OGaTsNt5wKa6fAZ3lyOQo/wlOivO6uYPf4wom15yfdOrZmvJC6', null, '2017-09-27 13:20:21', '2017-09-27 13:20:21');
INSERT INTO `users` VALUES ('2', 'hello', '542040876@qq.com', '$2y$10$.MCQ0TK/uJ1BchOo/9dR3uMZ4jAuIqpRbJ0XROHXQxPrPJAwMJTFG', null, '2017-09-27 13:37:17', '2017-09-27 13:37:17');
INSERT INTO `users` VALUES ('4', 'zheng', '446262388@qq.com', '$2y$10$YiyYMQC.Y0xl1Mm1RpPXXOxuyjDmoHxqBnuUYdopJglqwwOBheI7q', null, '2017-09-30 03:34:32', '2017-09-30 03:34:32');
