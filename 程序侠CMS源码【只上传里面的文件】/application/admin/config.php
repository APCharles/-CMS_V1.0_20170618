<?php


use \think\Request;

$baseFile = Request::instance()->baseFile();
$baseDir  = rtrim($baseFile, 'index.php');

return [
    // 模板参数替换
    'view_replace_str' => [
        '__ROOT__'   => $baseDir,
        '__STATIC__' => $baseDir . 'static/admin',
        '__LIB__'    => $baseDir . 'static/admin/lib',
    ],

    // traits 目录
    'traits_path'      => APP_PATH . 'admin' . DS . 'traits' . DS,

    'template' => [
        // 模板引擎类型 支持 php think 支持扩展
        'type'            => 'Think',
        // 模板路径
        'view_path'       => '',
        // 模板后缀
        'view_suffix'     => '.html',
        // 预先加载的标签库
        'taglib_pre_load' => '',
        // 默认主题
        'default_theme'   => '',
    ],

    //无需认证的操作

    'not_check_auth' => ['Login/index','Login/out'],
];
