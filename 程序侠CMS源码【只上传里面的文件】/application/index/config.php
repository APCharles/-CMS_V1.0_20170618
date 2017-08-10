<?php

use \think\Request;
$baseFile = Request::instance()->baseFile();
$baseDir  = rtrim($baseFile, 'index.php');
//配置文件
return [
    // 模板参数替换
    'view_replace_str' => [
        '__ROOT__'   => $baseDir,
        '__LIB__'    => $baseDir . 'static/Lib',
        '__STATIC__' => $baseDir . 'static/index',
        '__AUI__'    => $baseDir . 'static/Lib/AmazeUI',

    ],


    'template'  => [
		// 模板引擎类型 支持 php think 支持扩展
		'type'         => 'Think',
		// 模板路径// 				
		'view_path'    => APP_PATH.'index/view/default/',
		'taglib_load'       => true, // 是否使用内置标签库之外的其它标签库，默认自动检测
        'taglib_build_in'   =>    'cx,app\common\taglib\Base,app\common\taglib\Goods',
	],

    //分页配置
    'paginate'  => [
        'type'      => 'bootstrap',
        'var_page'  => 'page',

    ],
];
 
