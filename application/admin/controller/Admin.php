<?php
namespace app\admin\controller;
use think\Session;


/**
 * Created by PhpStorm.
 * User: Cat
 * Date: 2017/5/8
 * Time: 20:04
 */
class Admin extends Common
{
    public function admin(){

        //判断 session 中存在 $user['student_id'] 字段
        if(session("user.student_id")){
            $info = session("user");
            $data = ['fun' => 1 , 'data' => $info];
        }else{
            $data = ['fun' => 0];
        }

        return $this->fetch('index',$data);
    }
}