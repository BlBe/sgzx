<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\Route;

//前台显示页面:
Route::any('/','index/index');              //显示首页
Route::any('/open','index/open');           //开放注册

//管理显示页面:
Route::any('/admin','admin/admin/admin');   //显示管理页

//处理页面:
Route::any('/login','index/login');         //登录处理
Route::any('/quit','index/quit');           //退出处理
Route::any('/search','index/search');       //搜索处理