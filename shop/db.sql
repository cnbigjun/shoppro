/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : liaoran

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2017-10-14 17:34:13
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `categorys`
-- ----------------------------
DROP TABLE IF EXISTS `categorys`;
CREATE TABLE `categorys` (
  `cat_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `intro` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `parent_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of categorys
-- ----------------------------
INSERT INTO `categorys` VALUES ('1', '娱乐陪护7777', '提供这个时代最好的智能娱乐陪护型机器人', '0');
INSERT INTO `categorys` VALUES ('2', '智能出行', '平衡车电动车未来的出行方式dfg', '0');
INSERT INTO `categorys` VALUES ('3', '智能清洁', '智能清洁机器人全自动清洁房屋', '0');
INSERT INTO `categorys` VALUES ('4', '智能视界', '聚焦vr ar全视野视界', '0');

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
INSERT INTO `cates` VALUES ('6', '订单列表', '1', '1', '2017-10-08 01:57:30', '2017-10-08 01:57:33', '/admin/orders');
INSERT INTO `cates` VALUES ('7', '商品列表', '2', '1', '2017-10-08 01:58:24', '2017-10-08 01:58:27', '/admin/goods');
INSERT INTO `cates` VALUES ('8', '商品分类', '2', '1', '2017-10-08 01:59:01', '2017-10-08 01:59:04', '/admin/cates');
INSERT INTO `cates` VALUES ('9', '商品回收站', '2', '1', '2017-10-08 01:59:31', '2017-10-08 01:59:34', '/admin/recycle');
INSERT INTO `cates` VALUES ('10', '会员列表', '3', '1', '2017-10-08 02:04:57', '2017-10-08 02:05:09', '/admin/userlist');
INSERT INTO `cates` VALUES ('11', '添加会员', '3', '1', '2017-10-08 02:06:18', '2017-10-08 02:06:22', '/admin/useradd');
INSERT INTO `cates` VALUES ('12', '会员等级', '3', '1', '2017-10-08 02:06:56', '2017-10-08 02:06:59', '/admin/userrank');
INSERT INTO `cates` VALUES ('13', '会员留言', '3', '1', '2017-10-08 02:07:36', '2017-10-08 02:07:39', '/admin/usermsg');
INSERT INTO `cates` VALUES ('14', '站点基本设置', '4', '1', '2017-10-08 02:08:44', '2017-10-08 02:08:47', '/admin/basicset');
INSERT INTO `cates` VALUES ('15', '站点管理员', '4', '1', '2017-10-08 02:09:21', '2017-10-08 02:09:23', '/admin/adminlist');
INSERT INTO `cates` VALUES ('16', '广告列表', '5', '1', '2017-10-08 02:09:59', '2017-10-08 02:10:01', '/admin/buttons');

-- ----------------------------
-- Table structure for `goods`
-- ----------------------------
DROP TABLE IF EXISTS `goods`;
CREATE TABLE `goods` (
  `goods_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cat_id` smallint(6) NOT NULL DEFAULT '0',
  `goods_name` varchar(60) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `plus_price` decimal(9,2) NOT NULL DEFAULT '0.00',
  `market_price` decimal(9,2) NOT NULL DEFAULT '0.00',
  `goods_number` smallint(6) NOT NULL DEFAULT '11',
  `goods_keywords` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `goods_brief` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `goods_desc` text COLLATE utf8_unicode_ci NOT NULL,
  `thumb_img` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `goods_img` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `is_on_sale` tinyint(4) NOT NULL DEFAULT '1',
  `is_delete` tinyint(4) NOT NULL DEFAULT '0',
  `is_best` tinyint(4) NOT NULL DEFAULT '0',
  `is_new` tinyint(4) NOT NULL DEFAULT '0',
  `is_hot` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`goods_id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of goods
-- ----------------------------
INSERT INTO `goods` VALUES ('27', '0', '大范甘迪', '234.00', '233.00', '234', '的顺丰到付', '是的冯绍峰的', '电饭锅第三方', '42de889c.png', 'e3824881.png,2db42d99.png,d926fdf3.png,d775e379.png,7b2ded15.png,', '1', '0', '1', '0', '0');
INSERT INTO `goods` VALUES ('24', '2', '撒地方', '12312.00', '213.00', '21', '是的', '是打发斯蒂芬', '是打发斯蒂芬', 'dab4ca1c.png', 'ad5b8e18.png,', '1', '0', '1', '0', '0');
INSERT INTO `goods` VALUES ('25', '0', '是的发生大', '2342.00', '234.00', '22', '电风扇', '山东饭馆', '第三方', 'ecc780f4.png', '0766e4b2.png,e34593bf.png,dedf3572.png,f12c4c8b.png,23e89cec.png,', '1', '0', '0', '1', '0');

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
INSERT INTO `migrations` VALUES ('2017_10_09_131725_create_table_categorys', '5');
INSERT INTO `migrations` VALUES ('2017_10_11_084110_create_table_goods', '6');

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
