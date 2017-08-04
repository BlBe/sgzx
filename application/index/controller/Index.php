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

        //获取值班表
        $duty = db('duty')->find();
        $data['duty'] = $duty;

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

                //将 Session 中的数据修改为可直接使用数据
                $job = $this->job(session("user.job"));
                $branch = $this->branch(session("user.branch"));

                Session::set('user.job',$job);
                Session::set('user.branch',$branch);

                $this->success($res['msg'],'/','','1');
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
        if(session("user.student_id")){
            $info = session("user");
            $data = ['fun' => 1 , 'data' => $info];
        }else{
            $data = ['fun' => 0];
        }
        return $this->fetch('open',$data);
    }

    //判断方法
    function job($num){

        $job = null;

        switch ($num){
            case 1 :
                $job =  "主席";
                break;
            case 2 :
                $job =  "副主席";
                break;
            case 3 :
                $job =  "秘书长";
                break;
            case 4 :
                $job =  "部长";
                break;
            case 5 :
                $job =  "副部长";
                break;
            case 6 :
                $job =  "干部";
                break;
            case 7 :
                $job =  "部员";
                break;
            case 8 :
                $job =  "考核期";
                break;
            case 0 :
                $job =  "管理员";
                break;
        }

        return $job;
    }

    function branch($num)
    {

        $branch = null;

        switch ($num) {
            case 1 :
                $branch = "主席团";
                break;
            case 2 :
                $branch = "生活部";
                break;
            case 3 :
                $branch = "纪检部";
                break;
            case 4 :
                $branch = "秘书部";
                break;
            case 5 :
                $branch = "宣传部";
                break;
            case 6 :
                $branch = "信息资源部";
                break;
            case 0 :
                $branch = "管理组";
                break;
        }

        return $branch;
    }
}
