/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : liaoran

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2017-10-21 20:18:26
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `carts`
-- ----------------------------
DROP TABLE IF EXISTS `carts`;
CREATE TABLE `carts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of carts
-- ----------------------------
INSERT INTO `carts` VALUES ('3', '7', '2017-10-15 12:41:47', '2017-10-15 12:41:47');
INSERT INTO `carts` VALUES ('4', '4', '2017-10-15 12:59:35', '2017-10-15 12:59:35');
INSERT INTO `carts` VALUES ('5', '9', '2017-10-18 14:20:16', '2017-10-18 14:20:16');

-- ----------------------------
-- Table structure for `cart_items`
-- ----------------------------
DROP TABLE IF EXISTS `cart_items`;
CREATE TABLE `cart_items` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cart_id` int(11) NOT NULL,
  `goods_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=206 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of cart_items
-- ----------------------------
INSERT INTO `cart_items` VALUES ('204', '4', '31', '2017-10-20 11:48:30', '2017-10-20 11:48:30');
INSERT INTO `cart_items` VALUES ('205', '4', '29', '2017-10-20 14:50:38', '2017-10-20 14:50:38');

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
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of categorys
-- ----------------------------
INSERT INTO `categorys` VALUES ('1', '商城系统', '提供这个时代最好的智能娱乐陪护型机器人', '0');
INSERT INTO `categorys` VALUES ('2', '微信营销', '平衡车电动车未来的出行方式dfg', '0');
INSERT INTO `categorys` VALUES ('3', '博客论坛', '智能清洁机器人全自动清洁房屋', '0');
INSERT INTO `categorys` VALUES ('12', '其他源码', '', '0');
INSERT INTO `categorys` VALUES ('4', '企业官网', '聚焦vr ar全视野视界', '0');
INSERT INTO `categorys` VALUES ('13', '人工服务', '', '0');

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
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of goods
-- ----------------------------
INSERT INTO `goods` VALUES ('5', '4', '多用户商城尊享版', '12800.00', '12800.00', '11', '5', 'thinkphp', '        多用户商城尊享版是由thinkphp开发的b2b2c商城系统，自由机制管理自营店铺和入驻商家；超级管理员后台与入驻商家后台完美分离，使平台对各商家的结算管理更便捷；商家均有各自独立的管理后台，可自行设置客服账号，更加快速高效的工作。\r\n       \r\n       多用户商城尊享版速度流畅，性能完胜！同等网速下千次测试，多用户商城尊享版从商品下单到订单完成只需3.01S，比市场上现有商城系统速度提升3倍以上！', '2114e0b21.png', 'sdffb3538270f2.png,sdfsdafasdfasef.jpg,sdfadsfewaedssd.jpg,dfgd53390e2cc9a.jpg,f953390e2cc9a.jpg', '1', '0', '0', '0', '0');
INSERT INTO `goods` VALUES ('3', '1', '单用户商城', '16000.00', '16000.00', '11', '3', 'koahubjs(nodejs)+pjax+mysql', '        单用户微商城，基于nodejs的koahubjs开发。\r\n\r\n        从开发体验来看，前后端都是使用js，开发效率非常高；从性能来看，nodejs非常擅长IO操作，高并发请求。\r\n\r\n        全开源，一年内系统免费自动更新！\r\n\r\n开发文档：http://js.koahub.com/public/docs/index.html', '2114e0b21.png', 'ssdfsddfsda11.jpg,sfdasdfasdfsz.png,sdffasefdse33.jpg,', '1', '0', '1', '1', '1');
INSERT INTO `goods` VALUES ('4', '3', 'Wordpress DUX主题1.8 ', '10.00', '799.00', '11', '4', 'PHP', '\r\n        SEO优化完美的基础SEO优化、首页关键字和描述自定义、文章关键字和描述的自定义\r\n\r\n        速度优化图片和头像lazyload按需异步加载提速、JS文件托管、jQuery可选底部加载\r\n\r\n        会员中心找回密码、登录、注册、找回密码、用户投稿、修改资料、修改密码\r\n\r\n        14+颜色风格14种可选颜色风格和随意自定义配色\r\n\r\n        5+独立页面读者墙、链接、存档、标签、网址导航\r\n\r\n        8+小工具网站统计、置顶文章、特别推荐、广告、文章(超强)、评论、标签云、搜索\r\n\r\n        直达链接在列表页和文章页都有展示，你可以选择开启、是否新窗口\r\n\r\n        列表无限加载可以设置无限加载页数和是否开启，列表更有单图展示', '2114e0b21.png', 'asdffdsafase.png,', '1', '0', '1', '1', '1');
INSERT INTO `goods` VALUES ('1', '2', 'B2B的快消品订货平台（微信+wap）', '5000.00', '9000.00', '1', '基于thinkphp3.1.3，php > 5.5', '基于thinkphp3.1.3，php > 5.5', ' 系统包含商品管理、SKU管理、商品分类/匹配管理、微信扫码支付、oAuth自动登录、模板消息、微信基础功能、打印订单、广告管理、客户管理、数据分析、文章管理等常用功能。  demo体验（请用微信扫码）：', '2114e0b21.png', '2114e0b8.png,348b3c52.png,149d6b31.png,89970d9b.png,', '1', '0', '0', '0', '1');
INSERT INTO `goods` VALUES ('2', '0', '智联云K4打印机', '546.00', '600.00', '100', '打印机', 'GPRS、以太网、WIFI、三种联网方式', '<img src=\"http://www.koahub.com/public/uploads/2017-04-11/af768200-1e91-11e7-b91b-953390e2cc9a.jpg\">', '2114e0b21.png', '3dac766b.png,,348b3c52.png,149d6b31.png,89970d9b.png,', '1', '0', '1', '1', '1');

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
INSERT INTO `migrations` VALUES ('2017_10_15_065216_create_table_carts', '7');
INSERT INTO `migrations` VALUES ('2017_10_15_065252_create_table_carts_item', '7');
INSERT INTO `migrations` VALUES ('2017_10_15_074504_change_description_on_users_table', '8');
INSERT INTO `migrations` VALUES ('2017_10_15_083127_create_table_carts_item', '9');
INSERT INTO `migrations` VALUES ('2017_10_15_085228_change_description_on_users_table', '10');
INSERT INTO `migrations` VALUES ('2017_10_15_142810_create_table_cart_items', '11');

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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'admin', '1063239259@qq.com', '$2y$10$8w/OGaTsNt5wKa6fAZ3lyOQo/wlOivO6uYPf4wom15yfdOrZmvJC6', null, '2017-09-27 13:20:21', '2017-09-27 13:20:21');
INSERT INTO `users` VALUES ('2', 'hello', '542040876@qq.com', '$2y$10$.MCQ0TK/uJ1BchOo/9dR3uMZ4jAuIqpRbJ0XROHXQxPrPJAwMJTFG', null, '2017-09-27 13:37:17', '2017-09-27 13:37:17');
INSERT INTO `users` VALUES ('4', 'zheng', '446262388@qq.com', '$2y$10$YiyYMQC.Y0xl1Mm1RpPXXOxuyjDmoHxqBnuUYdopJglqwwOBheI7q', '2oUwmV2kmBvI2iJnOHA0ORsE37A2KrgueFXirs6Y5mjrPECzm01Foy5iCzWu', '2017-09-30 03:34:32', '2017-10-19 06:16:20');
INSERT INTO `users` VALUES ('5', 'sunsun', '111118888@qq.com', '$2y$10$Qo11hzvPmRWQuyJnucN.DeLMOJgDAszEHmhFGqWZnd3qdcPu/VY/u', null, '2017-10-15 09:11:22', '2017-10-15 09:11:22');
INSERT INTO `users` VALUES ('6', 'sunzhengss', '121243234@qq.com', '$2y$10$nv/c2BQfZeI.y7tebAc4HuqbLAUtxSUOv90x1lYUG.7H.RjWY8UUO', null, '2017-10-15 09:46:00', '2017-10-15 09:46:00');
INSERT INTO `users` VALUES ('7', 'sunzhenqwe', '345234564@qq.com', '$2y$10$6wqrKgjsHTLda2HdISFuKOm54njGRBNaQ93G0EqTxOphCmqh2TCl.', '71SXQnTzs5feQaSEqBu8KnYMEnRma8cRj6fzNMyHUGuRxH9hpFuI3w5R3Wqf', '2017-10-15 09:57:05', '2017-10-15 12:58:35');
INSERT INTO `users` VALUES ('8', 'sunzhe', '11223344@qq.com', '$2y$10$ZVj4fHCdj40zy2.jajrPSeHmIB9pPE6uLGrSJS8K1JvFqOdzd9a82', null, '2017-10-15 10:02:28', '2017-10-15 10:02:28');
INSERT INTO `users` VALUES ('9', 'haochigou', '111222333@qq.com', '$2y$10$UNLnPXrUhgPR7STPoz3UMeReTkFeVB.w/I.5DKpEJO/8Xy41rlM..', null, '2017-10-18 14:19:57', '2017-10-18 14:19:57');
