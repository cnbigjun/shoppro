-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017-10-15 15:59:11
-- 服务器版本： 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoppro`
--

-- --------------------------------------------------------

--
-- 表的结构 `categorys`
--

CREATE TABLE `categorys` (
  `cat_id` int(10) UNSIGNED NOT NULL,
  `cat_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `intro` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `parent_id` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `categorys`
--

INSERT INTO `categorys` (`cat_id`, `cat_name`, `intro`, `parent_id`) VALUES
(1, '商城系统', '提供这个时代最好的智能娱乐陪护型机器人', 0),
(2, '微信营销', '平衡车电动车未来的出行方式dfg', 0),
(3, '博客论坛', '智能清洁机器人全自动清洁房屋', 0),
(4, '企业官网', '聚焦vr ar全视野视界', 0),
(12, '其他源码', '', 0),
(13, '人工服务', '', 0);

-- --------------------------------------------------------

--
-- 表的结构 `cates`
--

CREATE TABLE `cates` (
  `cate_id` int(10) UNSIGNED NOT NULL COMMENT '后台栏目ID',
  `cate_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '后台栏目名',
  `parent_id` tinyint(4) NOT NULL DEFAULT '0' COMMENT '父级栏目ID',
  `is_enabled` tinyint(4) NOT NULL DEFAULT '1' COMMENT '是否有效',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `url` varchar(40) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '所要跳转的url地址'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `cates`
--

INSERT INTO `cates` (`cate_id`, `cate_name`, `parent_id`, `is_enabled`, `created_at`, `updated_at`, `url`) VALUES
(1, '订单管理', 0, 1, '2017-10-07 17:47:32', '2017-10-07 17:47:36', ''),
(2, '商品管理', 0, 1, '2017-10-07 17:47:39', '2017-10-07 17:47:43', ''),
(3, '会员管理', 0, 1, '2017-10-07 17:47:49', '2017-10-07 17:47:46', ''),
(4, '系统设置', 0, 1, '2017-10-07 17:48:59', '2017-10-08 03:38:28', ''),
(5, '广告管理', 0, 1, '2017-10-08 03:39:23', '2017-10-08 03:39:27', ''),
(6, '订单列表', 1, 1, '2017-10-07 17:57:30', '2017-10-07 17:57:33', '/admin/orders'),
(7, '商品列表', 2, 1, '2017-10-07 17:58:24', '2017-10-07 17:58:27', '/admin/goods'),
(8, '商品分类', 2, 1, '2017-10-07 17:59:01', '2017-10-07 17:59:04', '/admin/cates'),
(9, '商品回收站', 2, 1, '2017-10-07 17:59:31', '2017-10-07 17:59:34', '/admin/recycle'),
(10, '会员列表', 3, 1, '2017-10-07 18:04:57', '2017-10-07 18:05:09', '/admin/userlist'),
(11, '添加会员', 3, 1, '2017-10-07 18:06:18', '2017-10-07 18:06:22', '/admin/useradd'),
(12, '会员等级', 3, 1, '2017-10-07 18:06:56', '2017-10-07 18:06:59', '/admin/userrank'),
(13, '会员留言', 3, 1, '2017-10-07 18:07:36', '2017-10-07 18:07:39', '/admin/usermsg'),
(14, '站点基本设置', 4, 1, '2017-10-07 18:08:44', '2017-10-07 18:08:47', '/admin/basicset'),
(15, '站点管理员', 4, 1, '2017-10-07 18:09:21', '2017-10-07 18:09:23', '/admin/adminlist'),
(16, '广告列表', 5, 1, '2017-10-07 18:09:59', '2017-10-07 18:10:01', '/admin/buttons');

-- --------------------------------------------------------

--
-- 表的结构 `goods`
--

CREATE TABLE `goods` (
  `goods_id` int(10) UNSIGNED NOT NULL,
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
  `is_hot` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `goods`
--

INSERT INTO `goods` (`goods_id`, `cat_id`, `goods_name`, `plus_price`, `market_price`, `goods_number`, `goods_keywords`, `goods_brief`, `goods_desc`, `thumb_img`, `goods_img`, `is_on_sale`, `is_delete`, `is_best`, `is_new`, `is_hot`) VALUES
(27, 0, '大范甘迪', '234.00', '233.00', 234, '的顺丰到付', '是的冯绍峰的', '电饭锅第三方', '42de889c.png', 'e3824881.png,2db42d99.png,d926fdf3.png,d775e379.png,7b2ded15.png,', 1, 0, 1, 0, 1),
(24, 2, '撒地方', '12312.00', '213.00', 21, '是的', '是打发斯蒂芬', '是打发斯蒂芬', 'dab4ca1c.png', 'ad5b8e18.png,', 1, 0, 1, 0, 1),
(25, 0, '是的发生大', '2342.00', '234.00', 22, '电风扇', '山东饭馆', '第三方', 'ecc780f4.png', '0766e4b2.png,e34593bf.png,dedf3572.png,f12c4c8b.png,23e89cec.png,', 1, 0, 0, 1, 0),
(28, 0, '智联云K4打印机', '546.00', '600.00', 100, '打印机', 'GPRS、以太网、WIFI、三种联网方式', '<img src="http://www.koahub.com/public/uploads/2017-04-11/af768200-1e91-11e7-b91b-953390e2cc9a.jpg">', 'ec0478de.png', '3dac766b.png,', 1, 0, 1, 1, 1);

-- --------------------------------------------------------

--
-- 表的结构 `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2017_09_27_033002_create_admin_table', 2),
('2017_09_29_031525_create_table_cates', 3),
('2017_09_30_064958_add_url_to_cates', 4),
('2017_10_09_131725_create_table_categorys', 5),
('2017_10_11_084110_create_table_goods', 6);

-- --------------------------------------------------------

--
-- 表的结构 `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', '1063239259@qq.com', '$2y$10$8w/OGaTsNt5wKa6fAZ3lyOQo/wlOivO6uYPf4wom15yfdOrZmvJC6', NULL, '2017-09-27 05:20:21', '2017-09-27 05:20:21'),
(2, 'hello', '542040876@qq.com', '$2y$10$.MCQ0TK/uJ1BchOo/9dR3uMZ4jAuIqpRbJ0XROHXQxPrPJAwMJTFG', NULL, '2017-09-27 05:37:17', '2017-09-27 05:37:17'),
(4, 'zheng', '446262388@qq.com', '$2y$10$YiyYMQC.Y0xl1Mm1RpPXXOxuyjDmoHxqBnuUYdopJglqwwOBheI7q', NULL, '2017-09-29 19:34:32', '2017-09-29 19:34:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorys`
--
ALTER TABLE `categorys`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `cates`
--
ALTER TABLE `cates`
  ADD PRIMARY KEY (`cate_id`);

--
-- Indexes for table `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`goods_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `categorys`
--
ALTER TABLE `categorys`
  MODIFY `cat_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- 使用表AUTO_INCREMENT `cates`
--
ALTER TABLE `cates`
  MODIFY `cate_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '后台栏目ID', AUTO_INCREMENT=17;
--
-- 使用表AUTO_INCREMENT `goods`
--
ALTER TABLE `goods`
  MODIFY `goods_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- 使用表AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
