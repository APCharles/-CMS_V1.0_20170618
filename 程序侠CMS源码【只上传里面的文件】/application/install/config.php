<?php

use \think\Request;
$baseFile = Request::instance()->baseFile();
$baseDir  = rtrim($baseFile, 'index.php');

//配置文件
return [
    // 应用调试模式
    'app_debug' => true,
    // 模板参数替换
    'view_replace_str' => [
        '__ROOT__'   => $baseDir,
        '__LIB__'    => $baseDir . 'static/Lib',
        '__STATIC__' => $baseDir . 'static/install',
        '__AUI__'    => $baseDir . 'static/Lib/AmazeUI',

    ],

    'install_website_domain' => 'http://www.chengxuia.com', //官方网址
    'install_website_name'   => '程序侠CMS', //程序侠名称
    'default_table_prefix'  =>  'cxxia_', //默认表前缀


];