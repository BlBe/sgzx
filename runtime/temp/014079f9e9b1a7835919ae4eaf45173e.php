<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:77:"/home/ftp/m/modcat1996/sgzx/public/../application/index/view/index/index.html";i:1495607423;s:14:"view/head.html";i:1495361368;s:14:"view/foot.html";i:1494547247;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <meta name="renderer" content="webkit" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous" />
    <!-- 可选的 Bootstrap 主题文件（一般不用引入） -->
    <!-- <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"> -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <title>首页</title>
    <link rel="stylesheet" href="static/index/index.css">

    <script>

        $(document).ready(function(){
//            if($("#accordion").height() < $(document).height() - $(".top").height() - $(".foot").height() - 40){
//                $("#accordion").height($(document).height() - $(".top").height() - $(".foot").height() - 40);
//            }
            $("#accordion").css("min-height",$(document).height() - $(".top").height() - $(".foot").height() - 22);
            var min_height = $(document).height();
        });

        $(window).resize(function (){

                $("#accordion").css("min-height",0);
                $("#accordion").css("min-height",$(document).height() - $(".top").height() - $(".foot").height() - 22);


//            if($("#accordion").css("min-height") > min_height ){
//                $("#accordion").css("min-height",0);
//                $("#accordion").css("min-height",$(document).height() - $(".top").height() - $(".foot").height() - 22);
//            }else{
//                $("#accordion").css("min-height",$(document).height() - $(".top").height() - $(".foot").height() - 22);
//            }

        });




    </script>

</head>
<body>
<div class="top">
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="/">汕尾职业技术学院-院宿委会</a>
            </div>
            <div>
                <ul class="nav navbar-nav">

                    <li><a href="/open" se_prerender_url="loading">网上报名招新</a></li>

                </ul>
            </div>
            <div>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <div style="overflow: hidden;">
                            <form action="/search" method="get" class="navbar-form navbar-left" role="search">
                                <div class="form-group" style="overflow: hidden;">
                                    <div class="col-sm-10 col-xs-10">
                                        <input type="text" name="search" class="form-control" placeholder="输入姓名/手机/学号查询">
                                    </div>
                                    <!--<input type="submit" class="btn btn-default col-sm-2 col-xs-2 glyphicon glyphicon-search">-->
                                    <button type="submit" class="btn btn-default col-sm-2 col-xs-1"><i class="glyphicon glyphicon-search"></i></button>
                                </div>
                            </form>
                        </div>
                    </li>
                    <li class="dropdown">
                        <?php if($fun == 1): ?>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <?php echo $data['name']; ?>
                            <b class="caret"></b>
                        </a>
                        <?php else: ?>
                        <!-- Button to trigger modal -->
                        <a id="modal-855067" class="dropdown-toggle text-center" href="#modal-container-855067" data-toggle="modal">登录　</a>
                        <?php endif; ?>
                        <ul class="dropdown-menu">

                            <li>
                                <a href="#">个人中心</a>
                            </li>
                            <li>
                                <a href="#">管理中心</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="/quit">退出</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>

<!-- Modal -->
<div class="modal fade" id="modal-container-855067" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">登录院宿委会系统</h4>
            </div>
            <form action="/login" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="login_name"  class="col-sm-2 control-label">名字</label>
                        <div class="col-sm-7">
                            <input type="text" id="login_name" name="login_name" class="form-control" placeholder="请输入学号/手机号">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="login_password" class="col-sm-2 control-label">密码</label>
                        <div class="col-sm-7">
                            <input type="password" id="login_password" name="login_password" class="form-control" placeholder="请输入密码">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="code" class="col-sm-2 control-label">验证码</label>
                        <div class="col-sm-10" style="overflow: hidden;margin-left: -16px;">
                            <div class="col-sm-9 col-xs-8">
                                <input type="text" id="code" name="code" class="form-control" placeholder="请输入验证码">
                            </div>
                            <div class="col-sm-2 col-xs-2">
                                <?php echo captcha_img(); ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default">关闭</button>
                    <button type="submit" class="btn btn-primary">登录</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<div class="middle">
    <div class="container">
        <div class="row" style="position: relative;">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true" style="padding-top: 20px;">

                <div class="panel">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                            <a title="1" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                院宿委会简介
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                            <div class="sgzx_logo col-sm-3">
                                <img src="http://odiyqfo1k.bkt.clouddn.com/o_1bfqp3alajvj14s1e86r251n7ra.png" alt="">
                            </div>
                            <div class="sgzx_text col-sm-9">
                                　　汕尾职业技术学院学生宿舍自我管理委员会（简称院宿委会）成立于2005年9月，以实现学生宿舍区内“自我管理，服务他人”为宗旨的学生机构，与院团委会、院学生会，成为三大院会。主要负责学院宿舍园区卫生、常规、用电安全检查等工作，以及配合各部门开展工作，为提高我院的宿舍园区良好住宿环境而共同努力。<br>
                                　　院宿委会学生干部50多名。机构设置：有主席团、秘书部、信息资源部、纪检部、生活部、宣传部共6个部门。学生干部立足于本职岗位，积极工作，做到内强素质、外塑形象，紧紧围绕学院的中心工作，全面提高学院学生宿舍管理水平和服务质量。逐步建立完善社会化的学生宿舍保障体系，为学院的稳定发展和办学目标实现提供强有力的后勤服务保障。</div>
                        </div>
                    </div>
                </div>

                <div class="panel">
                    <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                            <a title="2" class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                值班表
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body" style="overflow: auto;">
                            <p>暂无值班表</p>
                            <p>
                                <table class="table table-bordered" style="color: #4f4f4f;min-width: 500px;">
                                    <tr>
                                        <th>　</th>
                                        <th>星期一</th>
                                        <th>星期二</th>
                                        <th>星期三</th>
                                        <th>星期四</th>
                                        <th>星期五</th>
                                        <th>星期六</th>
                                        <th>星期日</th>
                                    </tr>
                                    <tr>
                                        <th>单周</th>
                                        <td>
                                            <div><a href="#">人员1</a></div>
                                            <div><a href="#">人员2</a></div>
                                            <div><a href="#">人员3</a></div>
                                            <div><a href="#">人员4</a></div>
                                            <div><a href="#">人员5</a></div>
                                        </td>
                                        <td>
                                            <div><a href="#">人员1</a></div>
                                            <div><a href="#">人员2</a></div>
                                            <div><a href="#">人员3</a></div>
                                            <div><a href="#">人员4</a></div>
                                            <div><a href="#">人员5</a></div>
                                        </td>
                                        <td>
                                            <div><a href="#">人员1</a></div>
                                            <div><a href="#">人员2</a></div>
                                            <div><a href="#">人员3</a></div>
                                            <div><a href="#">人员4</a></div>
                                            <div><a href="#">人员5</a></div>
                                        </td>
                                        <td>
                                            <div><a href="#">人员1</a></div>
                                            <div><a href="#">人员2</a></div>
                                            <div><a href="#">人员3</a></div>
                                            <div><a href="#">人员4</a></div>
                                            <div><a href="#">人员5</a></div>
                                        </td>
                                        <td>
                                            <div><a href="#">人员1</a></div>
                                            <div><a href="#">人员2</a></div>
                                            <div><a href="#">人员3</a></div>
                                            <div><a href="#">人员4</a></div>
                                            <div><a href="#">人员5</a></div>
                                        </td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>双周</th>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </table>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="panel">
                    <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title">
                            <a title="3" class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                招新活动
                            </a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">
                            <p>暂无招新活动</p>
                            <p><a href="/open">网上报名招新</a></p>
                        </div>
                    </div>
                </div>

                <div class="panel">
                    <div class="panel-heading" role="tab" id="headingFour">
                        <h4 class="panel-title">
                            <a title="4" class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                下载中心
                            </a>
                        </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                        <div class="panel-body">
                            <p>暂无</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="foot">
    <div class="container-fluid text-center" style="padding-top: 5px;">
        <pre style="border: 0">

            作者：ModCat　框架：ThinkPHP 5.0　版本：汕尾职业技术学院-院宿委会系统 1.0　<a href="/GitHub">点此前往GitHub下载完整系统包</a>
        </pre>
    </div>
</div>
</body>
</html>


