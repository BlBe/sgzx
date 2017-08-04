<?php
/**
 * Created by PhpStorm.
 * User: Cat
 * Date: 2017/5/10
 * Time: 11:26
 */

namespace app\index\validate;


use think\Validate;

class Login extends Validate
{
    protected $rule = [
        'login_name' => 'require',
        'login_password' => 'require', //不能为空
        'code' => 'require|captcha',  //验证码
    ];
    protected $message = [
        'login_name.require' => '请输入用户名',
        'login_password.require' => '请输入密码',
        'code.require' => '请输入验证码',
        'code.captcha' => '验证码输入不正确',
    ];
}