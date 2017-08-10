<?php
// +----------------------------------------------------------------------
// | 程序侠CMS [ WeChat And Taobao Customer Management System ]
// +----------------------------------------------------------------------
// | Copyright (c) 2017 程序侠  http://www.chengxuxia.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: 石头  <chengxuxia@vip.qq.com 573907419@qq.com>
// +----------------------------------------------------------------------
// | 官方网站: http://chengxuxia.com
// +----------------------------------------------------------------------


// 检测PHP版本
header("Content-type: text/html; charset=utf-8");
if (version_compare(PHP_VERSION, '5.4', '<')) {
    die('PHP版本过低，请将PHP版本升级至5.4以上版本！');
}
// 定义入口为admin
header("Location:index.php?s=/admin/index/index/");
exit;
