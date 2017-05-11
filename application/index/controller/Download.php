<?php
/**
 * Created by PhpStorm.
 * User: Cat
 * Date: 2017/5/10
 * Time: 16:06
 */

namespace app\index\controller;


class Download extends Common
{
    public function download(){
        $this->success("正在跳往下载","http://git.oschina.net/ModCat/sgzx1");
    }
}