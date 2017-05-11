<?php
/**
 * Created by PhpStorm.
 * User: Cat
 * Date: 2017/5/10
 * Time: 10:05
 */

namespace app\index\controller;


use think\Controller;
use think\Request;

class Common extends Controller
{

    public function __construct(Request $request = null)
    {
        parent::__construct($request);
        if(!session("user.student_id")){
            $this->error("请登录后再下载",'/');
        }
    }


}