<?php
/**
 * Created by PhpStorm.
 * User: Cat
 * Date: 2017/5/10
 * Time: 12:31
 */

namespace app\index\model;


use think\Loader;
use think\Model;

class Staff extends Model
{
    protected $pk = 'id';   //表主键
    protected $table = 'sgzx_staff';    //完整表名

    public function login($data)
    {

        //执行登录判断
        $validate = Loader::validate('Login');
        if (!$validate->check($data)) {
            return ['valid' => 0, 'msg' => $validate->getError()];
        }
        //比对用户登录操作是否正确
        $userInfo = $this->where('student_id', $data['login_name'])->where('student_password', md5($data['login_password']))->find();  //成功返回对象,失败返回NULL
        if (!$userInfo) {
            $userInfo = $this->where('student_phone', $data['login_name'])->where('student_password', md5($data['login_password']))->find();
            if (!$userInfo) {
                return ['valid' => 0, 'msg' => '学号或手机或密码不正确，请重试'];
            }
        }
        //将用户信息存入session中
        session('user',$userInfo);
        return ['valid'=>1,'msg'=>'登录成功'];
    }

    public function search($data){
        $validate = Loader::validate('Search');
        if (!$validate->check($data)) {
            return ['valid' => 0, 'msg' => $validate->getError()];
        }
        $search_content = $data['search'];
        $search = $this->where('id>100')->where("student_id like'%$search_content%' or student_phone like'%$search_content%' or name like'%$search_content%'")->find();
        if(!$search){
            return ['valid' => 0, 'msg' => '输入的内容搜索不到结果'];
        }else{
            return ['valid' => 1, 'msg' => $search];
        }
    }

}
