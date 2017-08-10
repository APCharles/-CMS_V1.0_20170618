-- -----------------------------
-- SentCMS MySQL Data Transfer 
-- 
-- Host     : 127.0.0.1
-- Port     : 3306
-- Database : cxxiacmsjm
-- 
-- Part : #1
-- Date : 2017-06-19 02:14:05
-- -----------------------------

SET FOREIGN_KEY_CHECKS = 0;


-- -----------------------------
-- Table structure for `cxxia_ad`
-- -----------------------------
DROP TABLE IF EXISTS `cxxia_ad`;
CREATE TABLE `cxxia_ad` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `position` int(5) NOT NULL COMMENT '广告位ID',
  `name` varchar(50) NOT NULL,
  `link` varchar(30) NOT NULL COMMENT '广告链接',
  `img_path` varchar(225) NOT NULL COMMENT '广告图片路径',
  `description` text NOT NULL COMMENT '广告描述',
  `start_time` int(11) NOT NULL,
  `end_time` int(11) NOT NULL,
  `create_time` int(11) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '状态（2：禁用 1：正常）',
  `sort` int(4) NOT NULL DEFAULT '999' COMMENT '广告排序',
  `isdelete` tinyint(1) NOT NULL DEFAULT '0' COMMENT '回收站（1：是 0：否）',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `cxxia_ad`
-- -----------------------------
INSERT INTO `cxxia_ad` VALUES ('1', '1', '首页广告轮播1', '#', '/data/uploads/banner/20170322/f5db60e410ad97487a71f10d861c4ce4.png', '', '1490196728', '1522423928', '0', '1', '1', '0');
INSERT INTO `cxxia_ad` VALUES ('2', '1', '首页轮播广告2', '', '/data/uploads/banner/20170323/ece0a32d59275b31a3ac7cf7a8a35855.jpg', '', '1490198280', '1522339080', '0', '1', '2', '0');
INSERT INTO `cxxia_ad` VALUES ('3', '1', '首页轮播广告3', '#', '/data/uploads/banner/20170323/bb2233e4c493ba257ae21ee13e98540b.jpg', '', '1490198420', '1490544020', '0', '1', '3', '0');
INSERT INTO `cxxia_ad` VALUES ('4', '1', '首页轮播4', '#', '/data/uploads/banner/20170523/2e2f035fdb44fd7aef2b3ab67a8c32da.jpg', '', '1490198520', '1522339320', '0', '1', '4', '0');
INSERT INTO `cxxia_ad` VALUES ('5', '2', '轮播右侧', '#', '/data/uploads/banner/20170523/7735baf4429b335f5626f2698e0f51cf.jpg', '轮播右侧广告', '1495553886', '1590766686', '0', '1', '0', '0');
INSERT INTO `cxxia_ad` VALUES ('6', '3', '新款短袖', '#', '/data/uploads/banner/20170524/a8283a0300dd1c29e699a56cc9c71b00.jpg', '新款短袖', '1495555200', '1590681600', '0', '1', '0', '0');
INSERT INTO `cxxia_ad` VALUES ('7', '3', '唇妆', '#', '/data/uploads/banner/20170524/78de719addf37e44acd6b8651cc9c434.jpg', '唇妆', '1495555282', '1590681682', '0', '1', '0', '0');
INSERT INTO `cxxia_ad` VALUES ('8', '3', '薄款外套', '#', '/data/uploads/banner/20170524/bd3f3c9bbd13b0227c8d97d82a714aae.jpg', '薄款外套', '1495555340', '1590681740', '0', '1', '0', '0');
INSERT INTO `cxxia_ad` VALUES ('9', '3', '单肩包', '#', '/data/uploads/banner/20170524/2d09d5722be9dc0f42f613ba82b56263.jpg', '单肩包', '1495555320', '1558454520', '0', '1', '0', '0');
INSERT INTO `cxxia_ad` VALUES ('10', '3', '男士T恤', '#', '/data/uploads/banner/20170524/d11dd600269309f1578ac6e7ecc41627.jpg', '男士T恤', '1495555380', '1590681780', '0', '1', '0', '0');
INSERT INTO `cxxia_ad` VALUES ('11', '3', '气质美裙', '#', '/data/uploads/banner/20170524/5fc14b1bb6e1a63011a658c8bafefd3d.jpg', '气质美裙', '1495555440', '1590681840', '0', '1', '0', '0');
INSERT INTO `cxxia_ad` VALUES ('12', '4', 'Mobile-首页轮播(1）', '#', '/data/uploads/banner/20170524/18dd0c9339544cfb7d5922c8d55cd91d.png', '', '1495630318', '1590756718', '0', '1', '0', '0');
INSERT INTO `cxxia_ad` VALUES ('13', '4', 'Mobile-首页轮播（2）', '#', '/data/uploads/banner/20170524/80b6ce9c5bd8f0ad6129957f4dc9bb19.png', '', '1495630440', '1590756840', '0', '1', '0', '0');
INSERT INTO `cxxia_ad` VALUES ('14', '4', 'Moblile-首页轮播（3）', '#', '/data/uploads/banner/20170603/ed2047e2f322abf2b071b1225cda9b08.png', '', '1496503462', '1592753062', '0', '1', '0', '0');
INSERT INTO `cxxia_ad` VALUES ('15', '4', 'Moblile-首页轮播（3）', '#', '/data/uploads/banner/20170603/93a9bfecf36f1a8fb6d6f02303ff95ed.png', '', '1496503691', '1591370891', '0', '1', '0', '0');
INSERT INTO `cxxia_ad` VALUES ('16', '5', '9.9包邮', 'Jiu/index', '/data/uploads/banner/20170603/2d2327be1ba82af9fc16c2ce6972cee1.png', '', '1496503883', '1591371083', '0', '1', '1', '0');
INSERT INTO `cxxia_ad` VALUES ('17', '5', '爆款疯抢', 'Hot/index', '/data/uploads/banner/20170603/b8b7de6427251caa8bb5621cb53b0439.png', 'Moblile-首页分类爆款疯抢', '1496504025', '1591371225', '0', '1', '3', '0');
INSERT INTO `cxxia_ad` VALUES ('18', '5', '领券直播', 'Live/index', '/data/uploads/banner/20170603/262adc7a3cf651e2f54cf49c2a86f748.png', '', '1496419200', '1591113600', '0', '1', '4', '0');
INSERT INTO `cxxia_ad` VALUES ('19', '5', '20封顶', 'Ershi/index', '/data/uploads/banner/20170603/b471331fa789f50e8a333c42c52fefa3.png', '', '1496504400', '1591371600', '0', '1', '2', '0');

-- -----------------------------
-- Table structure for `cxxia_ad_position`
-- -----------------------------
DROP TABLE IF EXISTS `cxxia_ad_position`;
CREATE TABLE `cxxia_ad_position` (
  `id` smallint(5) NOT NULL AUTO_INCREMENT,
  `type` tinyint(1) NOT NULL COMMENT '广告类型（0：PC端  1：手机端）',
  `name` varchar(50) NOT NULL,
  `width` smallint(5) NOT NULL,
  `height` smallint(5) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `isdelete` tinyint(1) NOT NULL DEFAULT '0' COMMENT '回收站（1：是 0：否）',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `cxxia_ad_position`
-- -----------------------------
INSERT INTO `cxxia_ad_position` VALUES ('1', '0', 'PC-首页轮播广告', '750', '260', '首页广告轮播广告位', '1', '0');
INSERT INTO `cxxia_ad_position` VALUES ('2', '0', 'PC-轮播右侧', '200', '210', 'PC轮播右侧广告', '1', '0');
INSERT INTO `cxxia_ad_position` VALUES ('3', '0', 'PC-轮播底部', '130', '130', '轮播底部广告位图片', '1', '0');
INSERT INTO `cxxia_ad_position` VALUES ('4', '1', 'Mobile-首页轮播', '750', '290', 'Mobile-首页轮播', '1', '0');
INSERT INTO `cxxia_ad_position` VALUES ('5', '1', 'Moblile-首页分类', '80', '80', 'Moblile-首页轮播下方分类', '1', '0');

-- -----------------------------
-- Table structure for `cxxia_admin_group`
-- -----------------------------
DROP TABLE IF EXISTS `cxxia_admin_group`;
CREATE TABLE `cxxia_admin_group` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` char(100) NOT NULL DEFAULT '',
  `sort` smallint(5) NOT NULL COMMENT '排序',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `remark` text NOT NULL COMMENT '备注',
  `rules` char(80) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `cxxia_admin_group`
-- -----------------------------
INSERT INTO `cxxia_admin_group` VALUES ('1', '超级管理员', '1', '1', '', '1,11,12,13,29,32,2,19,20,21,22,23,3,14,15,16,17,18,5,27,28,6,24,25,26');

-- -----------------------------
-- Table structure for `cxxia_admin_group_access`
-- -----------------------------
DROP TABLE IF EXISTS `cxxia_admin_group_access`;
CREATE TABLE `cxxia_admin_group_access` (
  `uid` mediumint(8) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  UNIQUE KEY `uid_group_id` (`uid`,`group_id`),
  KEY `uid` (`uid`),
  KEY `group_id` (`group_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `cxxia_admin_group_access`
-- -----------------------------
INSERT INTO `cxxia_admin_group_access` VALUES ('1', '1');

-- -----------------------------
-- Table structure for `cxxia_admin_rule`
-- -----------------------------
DROP TABLE IF EXISTS `cxxia_admin_rule`;
CREATE TABLE `cxxia_admin_rule` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `pid` smallint(6) unsigned NOT NULL DEFAULT '0',
  `spid` varchar(50) NOT NULL,
  `group_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL DEFAULT '',
  `icon` varchar(50) NOT NULL COMMENT '节点小图标',
  `title` varchar(50) NOT NULL DEFAULT '',
  `remark` varchar(255) NOT NULL DEFAULT '',
  `condition` char(100) NOT NULL DEFAULT '',
  `level` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `type` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '节点类型，1-控制器 | 0-方法',
  `sort` smallint(6) unsigned NOT NULL DEFAULT '50',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `isdelete` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `level` (`level`),
  KEY `pid` (`pid`),
  KEY `status` (`status`),
  KEY `name` (`name`),
  KEY `isdelete` (`isdelete`),
  KEY `sort` (`sort`),
  KEY `group_id` (`group_id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- -----------------------------
-- Records of `cxxia_admin_rule`
-- -----------------------------
INSERT INTO `cxxia_admin_rule` VALUES ('1', '0', '0', '0', '', '&#xe62b;', '系统管理', '', '', '0', '1', '8', '1', '0');
INSERT INTO `cxxia_admin_rule` VALUES ('2', '0', '0', '0', '', '&#xe62e;', '网站设置', '', '', '0', '1', '1', '1', '0');
INSERT INTO `cxxia_admin_rule` VALUES ('3', '0', '0', '0', '', '&#xe620;', '商品管理', '', '', '0', '1', '2', '1', '0');
INSERT INTO `cxxia_admin_rule` VALUES ('4', '0', '0', '0', '', '&#xe653;', '用户管理', '', '', '0', '1', '2', '0', '0');
INSERT INTO `cxxia_admin_rule` VALUES ('5', '0', '0', '0', '', '&#xe641;', '采集管理', '', '', '0', '1', '1', '1', '0');
INSERT INTO `cxxia_admin_rule` VALUES ('6', '0', '0', '0', '', '&#xe635;', '运营推广', '', '', '0', '1', '5', '1', '0');
INSERT INTO `cxxia_admin_rule` VALUES ('7', '0', '0', '0', '', '&#xe616;', '内容管理', '', '', '0', '1', '6', '0', '0');
INSERT INTO `cxxia_admin_rule` VALUES ('8', '0', '0', '0', '', '&#xe6ce;', '微信公众号', '', '', '0', '1', '7', '0', '0');
INSERT INTO `cxxia_admin_rule` VALUES ('9', '0', '0', '0', '', '', '插件管理', '', '', '0', '1', '9', '0', '0');
INSERT INTO `cxxia_admin_rule` VALUES ('10', '0', '0', '0', '', '', '其他管理', '', '', '0', '1', '10', '0', '0');
INSERT INTO `cxxia_admin_rule` VALUES ('11', '1', '1|', '0', 'AdminGroup/Index', '&amp;#xe62d;', '角色管理', '', '', '1', '1', '50', '1', '0');
INSERT INTO `cxxia_admin_rule` VALUES ('12', '1', '1|', '0', 'AdminUser/Index', '&amp;#xe60a;', '管理员', '', '', '1', '1', '50', '1', '0');
INSERT INTO `cxxia_admin_rule` VALUES ('13', '1', '1|', '0', 'AdminRule/index', '&amp;#xe6f3;', '菜单管理', '', '', '1', '1', '50', '0', '0');
INSERT INTO `cxxia_admin_rule` VALUES ('14', '3', '3|', '0', 'Goods/index', '&amp;#xe620;', '商品管理', '', '', '1', '1', '50', '1', '0');
INSERT INTO `cxxia_admin_rule` VALUES ('15', '3', '', '0', 'GoodsCate/index', '&amp;#xe681;', '商品分类', '', '', '1', '1', '50', '1', '0');
INSERT INTO `cxxia_admin_rule` VALUES ('16', '3', '', '0', 'Goods/add', '&amp;#xe604;', '添加商品', '', '', '1', '1', '50', '1', '0');
INSERT INTO `cxxia_admin_rule` VALUES ('17', '3', '', '0', 'Goods/clear', '&amp;#xe609;', '批量清理', '', '', '1', '1', '50', '0', '0');
INSERT INTO `cxxia_admin_rule` VALUES ('18', '3', '', '0', 'Goods_check/index', '&amp;#xe6e0;', '商品检测', '', '', '1', '1', '50', '1', '0');
INSERT INTO `cxxia_admin_rule` VALUES ('19', '2', '', '0', 'Config/seo', '&amp;#xe683;', 'SEO设置', '', '', '1', '1', '3', '1', '0');
INSERT INTO `cxxia_admin_rule` VALUES ('20', '2', '', '0', 'Config/site', '&amp;#xe63c;', '基本设置', '', '', '1', '1', '1', '1', '0');
INSERT INTO `cxxia_admin_rule` VALUES ('21', '2', '', '0', 'Database/index?type=import', '&amp;#xe6ab;', '数据还原', '', '', '1', '1', '5', '1', '0');
INSERT INTO `cxxia_admin_rule` VALUES ('22', '2', '', '0', 'Database/index?type=export', '&amp;#xe63c;', '数据备份', '', '', '1', '1', '4', '1', '0');
INSERT INTO `cxxia_admin_rule` VALUES ('23', '2', '', '0', 'Config/api', '&amp;#xe6b5;', 'API接口', '', '', '1', '1', '2', '1', '0');
INSERT INTO `cxxia_admin_rule` VALUES ('24', '6', '', '0', 'AdPosition/index', '&amp;#xe612;', '广告位置', '', '', '1', '1', '50', '1', '0');
INSERT INTO `cxxia_admin_rule` VALUES ('25', '6', '', '0', 'Ad/index', '&amp;#xe635;', '广告管理', '', '', '1', '1', '50', '1', '0');
INSERT INTO `cxxia_admin_rule` VALUES ('26', '6', '', '0', 'Link/index', '&amp;#xe6aa;', '友情链接', '', '', '1', '1', '50', '1', '0');
INSERT INTO `cxxia_admin_rule` VALUES ('27', '5', '', '0', 'SearchCollect/index', '&amp;#xe683;', '超级搜索', '', '', '1', '1', '50', '1', '0');
INSERT INTO `cxxia_admin_rule` VALUES ('28', '5', '', '0', 'SpareCollect/index', '&amp;#xe6b5;', '备用采集', '', '', '1', '1', '50', '1', '0');
INSERT INTO `cxxia_admin_rule` VALUES ('29', '1', '', '0', 'LoginLog/index', '&amp;#xe70c;', '登录日志', '', '', '1', '1', '50', '1', '0');
INSERT INTO `cxxia_admin_rule` VALUES ('30', '1', '', '0', 'Index/welcome', '', '后台首页', '', '', '1', '1', '50', '0', '0');
INSERT INTO `cxxia_admin_rule` VALUES ('31', '1', '', '0', 'Index/index', '', '后台首页', '', '', '1', '1', '50', '0', '0');
INSERT INTO `cxxia_admin_rule` VALUES ('32', '1', '', '0', 'Upgrade/index', '&amp;#xe641;', '程序升级', '', '', '1', '1', '50', '1', '0');
INSERT INTO `cxxia_admin_rule` VALUES ('33', '6', '', '0', 'Column/index', '&amp;#xe68c;', '频道管理', '', '', '1', '1', '50', '0', '0');
INSERT INTO `cxxia_admin_rule` VALUES ('34', '6', '', '0', 'Nav/index', '&amp;#xe6f3;', '导航管理', '', '', '1', '1', '50', '1', '0');

-- -----------------------------
-- Table structure for `cxxia_admin_user`
-- -----------------------------
DROP TABLE IF EXISTS `cxxia_admin_user`;
CREATE TABLE `cxxia_admin_user` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `username` char(32) NOT NULL DEFAULT '',
  `gid` mediumint(8) unsigned NOT NULL COMMENT '角色ID',
  `password` char(32) NOT NULL DEFAULT '',
  `last_login_time` int(11) unsigned NOT NULL DEFAULT '0',
  `last_login_ip` char(15) NOT NULL DEFAULT '',
  `login_count` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `email` varchar(50) NOT NULL DEFAULT '',
  `remark` varchar(255) NOT NULL DEFAULT '',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '50',
  `create_time` int(11) unsigned NOT NULL DEFAULT '0',
  `update_time` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `accountpassword` (`username`,`password`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- -----------------------------
-- Table structure for `cxxia_config`
-- -----------------------------
DROP TABLE IF EXISTS `cxxia_config`;
CREATE TABLE `cxxia_config` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `type` tinyint(4) NOT NULL COMMENT '配置分组',
  `name` varchar(100) NOT NULL,
  `value` text NOT NULL,
  `remark` varchar(255) NOT NULL,
  `create_time` int(11) NOT NULL COMMENT '创建时间',
  `update_time` int(11) NOT NULL COMMENT '更新时间',
  PRIMARY KEY (`id`),
  KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- -----------------------------
-- Records of `cxxia_config`
-- -----------------------------
INSERT INTO `cxxia_config` VALUES ('1', '1', 'WEB_SITE_URL', 'http://bbs.chengxuxia.com/', '', '0', '0');
INSERT INTO `cxxia_config` VALUES ('2', '1', 'WEB_SITE_NAME', '程序侠', '', '0', '0');
INSERT INTO `cxxia_config` VALUES ('3', '1', 'WEB_SITE_STATUS', '1', '', '0', '0');
INSERT INTO `cxxia_config` VALUES ('5', '1', 'WEB_SITE_LOGO', '/data/uploads/site/20170618/322ca387e8b0dff955309f1cb6974393.png', '', '0', '0');
INSERT INTO `cxxia_config` VALUES ('6', '1', 'WEB_GOODS_BGIMG', '/data/uploads/site/20170520/5a0740f69a8f273dbeb48740a0c40ff0.png', '', '0', '0');
INSERT INTO `cxxia_config` VALUES ('7', '1', 'WEB_WEIXIN_IMG', '/data/uploads/site/20170528/93613f1d43b09f979d1dbd4a558e967a.png', '', '0', '0');
INSERT INTO `cxxia_config` VALUES ('8', '1', 'WEB_SITE_COPRIGHT', '@2016-2017 程序侠 chengxuxia.com', '', '0', '0');
INSERT INTO `cxxia_config` VALUES ('9', '1', 'WEB_SITE_ICP', '', '', '0', '0');
INSERT INTO `cxxia_config` VALUES ('10', '1', 'WEB_SITE_TDJ', '', '', '0', '0');
INSERT INTO `cxxia_config` VALUES ('11', '1', 'WEB_SITE_STATISTICS', '', '', '0', '0');
INSERT INTO `cxxia_config` VALUES ('12', '1', 'WEB_SITE_META', '', '', '0', '0');
INSERT INTO `cxxia_config` VALUES ('13', '3', 'SEO', '{\"index\":{\"title\":\"\\u7a0b\\u5e8f\\u4fa0-\\u4e13\\u4e1a\\u7684\\u6dd8\\u5b9d\\u5ba2\\u7f51\\u7ad9\\u7a0b\\u5e8f\",\"keyword\":\" \\u7a0b\\u5e8f\\u4fa0,\\u6dd8\\u5b9d\\u5ba2\\u7f51\\u7ad9,\\u7f51\\u7ad9\\u7a0b\\u5e8f\",\"description\":\"\\u7a0b\\u5e8f\\u4fa0&mdash;\\u5728\\u4e1a\\u754c\\u5c5e\\u4e8e\\u6700\\u7a33\\u5b9a\\u3001\\u6700\\u5b89\\u5168\\u7684\\u6dd8\\u5b9d\\u7a0b\\u5e8f\\uff0c\\u7ec8\\u8eab\\u63d0\\u4f9b\\u6280\\u672f\\u652f\\u6301\\uff0c\\u6c38\\u4e45\\u66f4\\u65b0\\u5347\\u7ea7\\uff0c\\u505a\\u6dd8\\u5b9d\\u5ba2\\u9996\\u9009\\u7a0b\\u5e8f\\u4fa0\\u6e90\\u7801\\u5168\\u65b0\\u5f00\\u53d1\\u6b63\\u7248\\u6388\\u6743 \\u8bf7\\u5927\\u5bb6\\u652f\\u6301\\u7a0b\\u5e8f\\u4fa0\\u3002\"},\"cate\":{\"title\":\" {seo_title}-{WEB_SITE_NAME}\",\"keyword\":\"{seo_keywords}\",\"description\":\" {seo_description}\"},\"goods\":{\"title\":\"{title}-{WEB_SITE_NAME}\",\"keyword\":\"{seo_keywords},{WEB_SITE_NAME}\",\"description\":\"{seo_description}\"},\"article\":{\"title\":\"\",\"keyword\":\"\",\"description\":\"\"},\"article_cate\":{\"title\":\"\",\"keyword\":\"\",\"description\":\"\"},\"article_detail\":{\"title\":\"\",\"keyword\":\"\",\"description\":\"\"},\"user\":{\"title\":\"\",\"keyword\":\"\",\"description\":\"\"},\"user_cate\":{\"title\":\"\",\"keyword\":\"\",\"description\":\"\"},\"user_detail\":{\"title\":\"\",\"keyword\":\"\"},\"user__detail\":{\"description\":\"\"}}', '', '0', '0');
INSERT INTO `cxxia_config` VALUES ('14', '4', 'API', '{\"taobao\":{\"key\":\"\",\"secret\":\"\"},\"chengxuxia\":{\"key\":\"\",\"secret\":\"\"}}', '', '0', '0');
INSERT INTO `cxxia_config` VALUES ('15', '2', 'DATA_BACKUP_PATH', './data/backup/', '备份路径地址', '0', '0');
INSERT INTO `cxxia_config` VALUES ('16', '2', 'DATA_BACKUP_PART_SIZE', '20971520', '该值用于限制压缩后的分卷最大长度。单位：B；建议设置20M', '0', '0');
INSERT INTO `cxxia_config` VALUES ('17', '2', 'DATA_BACKUP_COMPRESS', '1', '', '0', '0');
INSERT INTO `cxxia_config` VALUES ('18', '2', 'DATA_BACKUP_COMPRESS_LEVEL', '9', '数据库备份文件的压缩级别，该配置在开启压缩时生效', '0', '0');
INSERT INTO `cxxia_config` VALUES ('19', '1', 'WEB_SITE_REWRITE', '0', '', '0', '0');
INSERT INTO `cxxia_config` VALUES ('20', '1', 'WEB_AUTH_CODE', '', '', '0', '0');
INSERT INTO `cxxia_config` VALUES ('22', '1', 'WEB_COUPON_PID', '', '', '0', '0');
INSERT INTO `cxxia_config` VALUES ('23', '1', 'WEB_CACHE_STATUS', '1', '', '0', '0');
INSERT INTO `cxxia_config` VALUES ('24', '1', 'GOODS_AUTO_STATUS', '1', '', '0', '0');
INSERT INTO `cxxia_config` VALUES ('25', '1', 'GOODS_PAGE_SIZE', '80', '', '0', '0');
INSERT INTO `cxxia_config` VALUES ('26', '1', 'GOODS_SHOP_TYPE', '', '', '0', '0');
INSERT INTO `cxxia_config` VALUES ('27', '1', 'GOODS_SORT_TYPE', 'start_time desc', '', '0', '0');
INSERT INTO `cxxia_config` VALUES ('28', '1', 'GOODS_TAOBAO_APP', '1', '', '0', '0');

-- -----------------------------
-- Table structure for `cxxia_goods`
-- -----------------------------
DROP TABLE IF EXISTS `cxxia_goods`;
CREATE TABLE `cxxia_goods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sort` int(11) DEFAULT '999' COMMENT '自定义排序',
  `cid` int(11) DEFAULT '0' COMMENT '属于分类',
  `goods_id` varchar(12) NOT NULL COMMENT '商品ID',
  `title` varchar(255) NOT NULL,
  `intro` varchar(255) DEFAULT NULL,
  `content` text,
  `goods_url` varchar(255) NOT NULL COMMENT '商品URL地址',
  `nick` varchar(200) NOT NULL,
  `sellerId` varchar(11) DEFAULT NULL,
  `img` varchar(200) NOT NULL,
  `price` double(11,2) NOT NULL DEFAULT '0.00' COMMENT '商品价格',
  `discount_price` double(11,2) NOT NULL DEFAULT '0.00' COMMENT '商品折扣价',
  `discount_rate` int(11) NOT NULL COMMENT '折扣率',
  `click_url` text,
  `taokouling` varchar(50) NOT NULL COMMENT '淘口令',
  `volume` int(11) NOT NULL,
  `commission` double(11,2) NOT NULL DEFAULT '0.00' COMMENT '佣金金额',
  `commission_rate` int(11) NOT NULL,
  `shop_type` varchar(11) DEFAULT NULL,
  `ems` smallint(1) DEFAULT '0',
  `coupon_id` varchar(50) DEFAULT NULL COMMENT '优惠券活动ID',
  `coupon_url` varchar(255) DEFAULT '' COMMENT '优惠券地址',
  `coupon_price` double(11,2) NOT NULL DEFAULT '0.00' COMMENT '优惠券价格',
  `coupon_receive` int(20) NOT NULL COMMENT '优惠券已领取数量',
  `coupon_surplus` int(20) NOT NULL COMMENT '优惠券剩余数量',
  `coupon_total` int(20) NOT NULL COMMENT '优惠券总数',
  `coupon_explain` text NOT NULL COMMENT '优惠券说明',
  `start_time` int(11) NOT NULL COMMENT '开始时间',
  `end_time` int(11) NOT NULL COMMENT '结束时间',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '状态（1：开启 0：禁用）',
  `seo_title` varchar(255) DEFAULT NULL,
  `seo_keys` varchar(255) DEFAULT NULL,
  `seo_desc` text,
  `create_time` int(11) DEFAULT NULL COMMENT '添加时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='商品表';


-- -----------------------------
-- Table structure for `cxxia_goods_cate`
-- -----------------------------
DROP TABLE IF EXISTS `cxxia_goods_cate`;
CREATE TABLE `cxxia_goods_cate` (
  `id` smallint(4) unsigned NOT NULL AUTO_INCREMENT,
  `icon` varchar(10) DEFAULT NULL COMMENT '分类图标',
  `name` varchar(50) NOT NULL,
  `pid` smallint(4) unsigned NOT NULL,
  `spid` varchar(50) NOT NULL,
  `order` varchar(50) NOT NULL DEFAULT 'id  desc',
  `shop_type` varchar(11) NOT NULL COMMENT 'B:商城C:集市',
  `ems` tinyint(1) NOT NULL DEFAULT '0',
  `add_time` int(11) NOT NULL,
  `sort` tinyint(3) NOT NULL DEFAULT '99' COMMENT '分类排序',
  `status` tinyint(1) NOT NULL,
  `index_status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '首页是否显示',
  `seo_title` varchar(255) NOT NULL,
  `seo_keys` varchar(255) NOT NULL,
  `seo_desc` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COMMENT='商品分类表';

-- -----------------------------
-- Records of `cxxia_goods_cate`
-- -----------------------------
INSERT INTO `cxxia_goods_cate` VALUES ('1', '&#xe62b;', '女装', '0', '0', 'coupon_start_time  desc', '', '0', '0', '99', '1', '1', '【女装1折起】2017新款时尚女装,潮流品牌女装,全场1折起限量秒杀', '2017新款,时尚女装,品牌女装,折扣', '每天为您推荐2017新款服饰、时尚精品女装、潮流品牌女装等商品最新折扣信息，全场低至1折起包邮，给您带来超低折扣的女士上衣产品，每天10:00点开始，限时限量抢购。');
INSERT INTO `cxxia_goods_cate` VALUES ('2', '&#xe65e;', '男装', '0', '0', 'coupon_start_time  desc', '', '0', '0', '99', '1', '1', '【男装1折起】新款时尚男装,潮流品牌男装,全场1折起限量秒杀', '2017新款,时尚男装,品牌男装,折扣', '每天为您推荐2017新款服饰、时尚精品男装、潮流品牌男装等商品最新折扣信息，全场低至1折起包邮，给您带来超低折扣的男士上衣产品，每天10:00点开始，限时限量抢购。');
INSERT INTO `cxxia_goods_cate` VALUES ('3', '&#xe60f;', '鞋子', '0', '0', 'volume desc', '', '0', '0', '99', '1', '1', '女鞋,时尚女鞋,品牌女鞋,男鞋,鞋子折扣1折包邮', '时尚女鞋,品牌女鞋,男鞋,1折,包邮', '每天为您推荐时尚女鞋、品牌女鞋、男鞋等最新折扣商品，鞋子全场低至1折起包邮，每天10:00点开始!');
INSERT INTO `cxxia_goods_cate` VALUES ('4', '&#xe681;', '箱包', '0', '0', 'coupon_start_time  desc', '', '0', '0', '99', '1', '1', '女包,时尚女包,男包,箱包折扣1折包邮', '女包,时尚女包,男包,拉杆箱,1折,包邮', '每天为您推荐时尚女包、男包、拉杆箱等最新折扣商品，箱包全场低至1折起包邮，每天10:00点开始!');
INSERT INTO `cxxia_goods_cate` VALUES ('5', '&#xe61e;', '母婴', '0', '0', 'coupon_start_time  desc', '', '0', '0', '99', '1', '1', '【母婴1折起】母婴用品,婴儿用品,儿童服装,全场1折起限量秒杀', '母婴用品,婴儿用品,儿童服装,折扣,秒杀', '每天为您精选母婴用品、婴儿用品、品牌童装、童鞋等最新折扣商品，全场低至1折起包邮，每天10:00点开始，限时限量秒杀!');
INSERT INTO `cxxia_goods_cate` VALUES ('6', '&#xe638;', '内衣', '0', '0', 'coupon_start_time  desc', '', '0', '0', '99', '1', '1', '内衣,性感内衣,文胸,睡衣,内衣折扣1折包邮', '内衣,性感内衣,文胸,睡衣,1折,包邮', '每天为您精选内衣、性感内衣、文胸、睡衣等最新折扣商品，当季流行内衣全场低至1折扣起包邮，每天10:00点开始！');
INSERT INTO `cxxia_goods_cate` VALUES ('7', '&#xe602;', '美妆', '0', '0', 'coupon_start_time  desc', '', '0', '0', '99', '1', '1', '品牌化妆品,护肤品,美妆,彩妆,美妆折扣1折包邮', '品牌化妆品,护肤品,美妆,彩妆,1折,包邮', '每天为您推荐品牌化妆品、护肤品、美妆、彩妆等最新折扣商品，美妆用品全场低至1折起包邮，每天10:00点开始！');
INSERT INTO `cxxia_goods_cate` VALUES ('8', '&#xe62c;', '配饰', '0', '0', 'coupon_start_time  desc', '', '0', '0', '99', '1', '1', '饰品,时尚饰品,潮流配饰,配饰折扣1折包邮', '配饰,饰品,时尚饰品,1折,包邮', '每天为您推荐时尚饰品、服装配饰等最新折扣商品，配饰全场低至1折起包邮，每天10:00点开始!');
INSERT INTO `cxxia_goods_cate` VALUES ('9', '&#xe601;', '居家', '0', '0', 'coupon_start_time  desc', '', '0', '0', '99', '1', '1', '【居家1折起】家居用品,厨卫用品,生活家电,全场1折起1折限量秒杀', '家居用品,厨卫用品,家用电器,折扣,秒杀', '每天为您精选家居用品、厨卫用品、生活家电、家具、建材等最新折扣商品，全场低至1折起包邮，每天10:00点开始，限时限量秒杀!');
INSERT INTO `cxxia_goods_cate` VALUES ('10', '&#xe72b;', '家装', '0', '0', 'volume desc', '', '0', '0', '99', '1', '1', '床上用品,家纺,家居布艺,床品布艺折扣1折包邮', '床品布艺,家纺,床上用品,1折,包邮', '每天为您推荐床上用品、家纺、家居布艺等最新折扣商品，床品布艺全场低至1折起包邮，每天10:00点开始!');
INSERT INTO `cxxia_goods_cate` VALUES ('11', '&#xe67f;', '数码', '0', '0', 'volume desc', '', '0', '0', '99', '1', '1', '数码产品,电子数码,数码配件,数码折扣1折包邮', '数码,数码产品,数码配件,1折,包邮', '每天为您推荐数码产品、电子数码、数码配件等最新折扣商品，数码产品全场低至1折起包邮，每天10:00点开始!');
INSERT INTO `cxxia_goods_cate` VALUES ('12', '&#xe60b;', '电器', '0', '0', 'volume desc', '', '0', '0', '99', '1', '1', '家电,厨房电器,小家电,生活电器,家用电器折扣1折包邮', '家电,厨房电器,小家电,家用电器,1折,包邮', '每天为您推荐家电、厨房电器、小家电、生活电器等最新折扣商品，家用电器全场低至1折起包邮，每天10:00点开始!');
INSERT INTO `cxxia_goods_cate` VALUES ('13', '&#xe600;', '美食', '0', '0', 'volume desc', '', '0', '0', '99', '1', '1', '好吃的零食,人气美食,特产,美食折扣1折包邮', '美食,零食,特产,人气美食,1折,包邮', '每天为您推荐好吃的零食、人气美食、品牌零食等最新折扣商品，美食全场低至1折起包邮，每天10:00点开始！');
INSERT INTO `cxxia_goods_cate` VALUES ('14', '&#xe680;', '文体', '0', '0', 'volume desc', '', '0', '0', '99', '1', '1', '户外用品,体育用品,办公用品,文具用品,文体折扣1折包邮', '户外用品,体育用品,办公用品,文具用品,汽车用品,1折,包邮', '每天为您推荐户外用品、体育用品、办公用品、文具用品、汽车用品等最新折扣商品，文体用品全场低至1折起包邮，每天10:00点开始！');

-- -----------------------------
-- Table structure for `cxxia_link`
-- -----------------------------
DROP TABLE IF EXISTS `cxxia_link`;
CREATE TABLE `cxxia_link` (
  `id` smallint(4) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `img` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `rel` tinyint(1) NOT NULL COMMENT '0为nofollow',
  `sort` tinyint(3) unsigned NOT NULL DEFAULT '99' COMMENT '排序',
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- -----------------------------
-- Records of `cxxia_link`
-- -----------------------------
INSERT INTO `cxxia_link` VALUES ('1', '程序侠', '', 'http://www.chengxuxia.com/', '1', '0', '1');
INSERT INTO `cxxia_link` VALUES ('2', '程序侠官方论坛', '', 'http://bbs.chengxuxia.com/', '1', '1', '1');
INSERT INTO `cxxia_link` VALUES ('3', '程序侠云主机', '', 'http://www.chengxuxia.net/', '1', '1', '1');

-- -----------------------------
-- Table structure for `cxxia_login_log`
-- -----------------------------
DROP TABLE IF EXISTS `cxxia_login_log`;
CREATE TABLE `cxxia_login_log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `login_ip` char(15) NOT NULL DEFAULT '',
  `login_browser` varchar(255) NOT NULL DEFAULT '',
  `login_os` varchar(255) NOT NULL DEFAULT '',
  `login_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;


-- -----------------------------
-- Table structure for `cxxia_nav`
-- -----------------------------
DROP TABLE IF EXISTS `cxxia_nav`;
CREATE TABLE `cxxia_nav` (
  `id` smallint(4) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `alias` varchar(20) NOT NULL,
  `icon` varchar(200) NOT NULL,
  `info` varchar(100) DEFAULT NULL COMMENT '介绍信息',
  `link` varchar(255) NOT NULL,
  `target` tinyint(1) NOT NULL DEFAULT '1',
  `sort` tinyint(3) NOT NULL DEFAULT '99' COMMENT '排序',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='导航管理';

-- -----------------------------
-- Records of `cxxia_nav`
-- -----------------------------
INSERT INTO `cxxia_nav` VALUES ('1', '', '9块9包邮', 'jiu', '', '', 'jiu/index', '0', '99', '1');
INSERT INTO `cxxia_nav` VALUES ('2', '', '20元封顶', 'ershi', '', '', 'Ershi/index', '0', '99', '1');
INSERT INTO `cxxia_nav` VALUES ('3', '', '我的足迹', 'history', '', '', 'History/index', '0', '99', '1');
INSERT INTO `cxxia_nav` VALUES ('4', '', '优惠直播', 'live', '', '', 'Live/index', '0', '99', '1');
