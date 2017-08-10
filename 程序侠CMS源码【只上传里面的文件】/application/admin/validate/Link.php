<?php
// +----------------------------------------------------------------------
// | 程序侠CMS [ WeChat And Taobao Customer Management System ]
// +----------------------------------------------------------------------
// | Copyright (c) 2017 http://www.chengxuxia.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: 石头 @程序侠 <chengxuxia@vip.qq.com 573907419@qq.com> <http://bbs.chengxuxia.com>
// +----------------------------------------------------------------------

namespace app\admin\validate;

use think\Validate;

/**
 * 友链验证器
 * @author 石头 <573907419@qq.com>
 */
class Link extends Validate
{
    //定义验证规则
    protected $rule = [
        'name|链接名称' => 'require',
        'url|链接地址'  => 'require',
    ];

    //定义验证提示
    protected $message = [
        'username.require' => '请输入链接名称',
        'url.require'  => '请输入链接地址',
    ];

    
}
