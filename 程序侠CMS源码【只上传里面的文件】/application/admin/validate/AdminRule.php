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
 * 菜单验证器
 * @author 石头 <573907419@qq.com>
 */
class AdminRule extends Validate
{
    //定义验证规则
    protected $rule = [
        'title|菜单名称' => 'require',
    ];

    //定义验证提示
    protected $message = [
        'title.require' => '请输入菜单名称',
    ];

    
}
