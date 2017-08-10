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
 * 管理员验证器
 * @author 石头 <573907419@qq.com>
 */
class AdminUser extends Validate
{
    //定义验证规则
    protected $rule = [
        'username|用户名' => 'require',
        'captcha|验证码'  => 'require|captcha',
        'email|邮箱'      => 'email',
        'password|密码'   => 'require|length:4,20',
    ];

    //定义验证提示
    protected $message = [
        'username.require' => '请输入用户名',
        'captcha.require'  => '验证码为空',
        'captcha.captcha'  => '验证码错误',
        'email.require'    => '邮箱不能为空',
        'email.email'      => '邮箱格式不正确',
        'email.unique'     => '该邮箱已存在',
        'password.require' => '密码不能为空',
        'password.length'  => '密码长度6-20位',
    ];

    //定义验证场景
    protected $scene = [
        //更新
        'update'  =>  ['username', 'gid'],
        //更新
        'add'  =>  ['username', 'password', 'gid'],
        //登录
        'login'    => ['usename', 'password', 'captcha'],
    ];
}
