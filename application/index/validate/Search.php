<?php
/**
 * Created by PhpStorm.
 * User: Cat
 * Date: 2017/5/10
 * Time: 13:55
 */

namespace app\index\validate;


use think\Validate;

class Search extends Validate
{

        protected $rule = [
            'search' => 'require', //不能为空
        ];

        protected $message = [
            'search.require' => '搜索条件不能为空',

        ];
}