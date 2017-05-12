<?php
/**
 * Created by PhpStorm.
 * User: Cat
 * Date: 2017/5/10
 * Time: 16:06
 */

namespace app\index\controller;


class GitHub extends Common
{
    public function github(){
        $this->success("正在跳往GitHub","https://github.com/BlBe/sgzx/");
    }
}