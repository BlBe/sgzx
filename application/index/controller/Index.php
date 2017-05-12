<?php
namespace app\index\controller;

use app\index\model\Staff;
use think\Controller;
use think\Session;

class Index extends Controller
{
    //首页方法
    public function index()
    {
        //判断 session 中存在 $user['student_id'] 字段
        if(session("user.student_id")){
            $info = session("user");
            $data = ['fun' => 1 , 'data' => $info];
        }else{
            $data = ['fun' => 0];
        }

        //加载视图，并传输$data到视图中去
        return $this->fetch('index',$data);
    }

    //登录方法
    public function login(){
        if(request()->isPost()){
            //$res = (new 模型名())->模型方法();
            $res = (new Staff())->login(input('post.'));
            if($res['valid']){
                //登录成功
                $this->success($res['msg'],'/');
            }else{
                //登录失败
                $this->error($res['msg']);exit;
	        }
            return $this->fetch('/');
        }
    }

    //搜索方法
    public function search(){
        $res = (new Staff())->search(input('get.'));
        if($res['valid']){
            dump($res['msg']);
        }else{
            $this->error($res['msg']);exit;
        }
    }

    //退出方法
    public function quit(){
        Session::clear();
        $this->success('退出成功','/');
    }

    //开放注册
    public function open(){
        return $this->fetch('open');
    }

    //判断方法
    function job($num){
        switch ($num){
            case 1 :
                return "主席";
            case 2 :
                return "副主席";
            case 3 :
                return "秘书长";
            case 4 :
                return "部长";
            case 5 :
                return "副部长";
            case 6 :
                return "干部";
            case 7 :
                return "部员";
            case 8 :
                return "考核期";
            case 0 :
                return "管理员";
        }
    }

    function branch($num){
        switch ($num){
            case 1 :
                return "主席团";
            case 2 :
                return "生活部";
            case 3 :
                return "纪检部";
            case 4 :
                return "秘书部";
            case 5 :
                return "宣传部";
            case 6 :
                return "信息资源部";
            case 0 :
                return "管理组";
        }
    }
}
