<?php
// +----------------------------------------------------------------------
// | 程序侠CMS [ WeChat And Taobao Customer Management System ]
// +----------------------------------------------------------------------
// | Copyright (c) 2017 http://www.chengxuxia.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: 石头 @程序侠 <chengxuxia@vip.qq.com 573907419@qq.com> <http://bbs.chengxuxia.com>
// +----------------------------------------------------------------------

// 检测PHP版本
header("Content-type: text/html; charset=utf-8");
if (version_compare(PHP_VERSION, '5.4', '<')) {
    die('PHP版本过低，请将PHP版本升级至5.4以上版本！');
}

// 定义应用目录
define('APP_PATH', __DIR__ . '/application/');

// 加载框架引导文件
require __DIR__ . '/thinkphp/start.php';
