<?php

use \think\Request;

$basename = Request::instance()->root();
if (pathinfo($basename, PATHINFO_EXTENSION) == 'php') {
    $basename = dirname($basename);
}
//配置文件
return [
    // 模板参数替换
    'view_replace_str' => [
        '__ROOT__'   => $basename,
        '__LIB__'    => $basename . '/static/Lib',
        '__STATIC__' => $basename . '/static/m',
        '__AUI__'    => $basename . '/static/Lib/AmazeUI',

    ],


    'template'               => [
		// 模板引擎类型 支持 php think 支持扩展
  		'type'         => 'Think',
  		// 模板路径// 				
  		'view_path'    => APP_PATH.'m/view/default/',
  		// 模板后缀
  		'view_suffix'  => 'html',
  		// 模板文件名分隔符
  		'view_depr'    => DS,
  		// 模板引擎普通标签开始标记
  		'tpl_begin'    => '{',
  		// 模板引擎普通标签结束标记
  		'tpl_end'      => '}',
  		// 标签库标签开始标记
  		'taglib_begin' => '{',
  		// 标签库标签结束标记
  		'taglib_end'   => '}',
  		'taglib_load'       => true, // 是否使用内置标签库之外的其它标签库，默认自动检测
      'taglib_build_in'   =>    'cx,app\common\taglib\Base,app\common\taglib\Goods',
		],
];
 
