<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:79:"/Applications/MAMP/htdocs/sgzx/public/../application/index/view/index/open.html";i:1495608572;s:14:"view/head.html";i:1501655586;s:14:"view/foot.html";i:1501655520;}*/ ?>
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

    <!-- 编辑器 -->
    <script src="https://cdn.bootcss.com/bootstrap3-wysiwyg/0.3.3/amd/bootstrap3-wysihtml5.all.js"></script>

    <title>网上招新报名表</title>
    <link rel="stylesheet" href="static/index/open.css">

    <script>
        //图片上传预览    IE是用了滤镜。
        function previewImage(file)
        {
            var MAXWIDTH  = 90;
            var MAXHEIGHT = 90;
            var div = document.getElementById('preview');
            if (file.files && file.files[0])
            {
                div.innerHTML ='<img id=imghead onclick=$("#previewImg").click()>';
                var img = document.getElementById('imghead');
                img.onload = function(){
                    var rect = clacImgZoomParam(MAXWIDTH, MAXHEIGHT, img.offsetWidth, img.offsetHeight);
                    img.width  =  rect.width;
                    img.height =  rect.height;
//                 img.style.marginLeft = rect.left+'px';
                    img.style.marginTop = rect.top+'px';
                }
                var reader = new FileReader();
                reader.onload = function(evt){img.src = evt.target.result;}
                reader.readAsDataURL(file.files[0]);
            }
            else //兼容IE
            {
                var sFilter='filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale,src="';
                file.select();
                var src = document.selection.createRange().text;
                div.innerHTML = '<img id=imghead>';
                var img = document.getElementById('imghead');
                img.filters.item('DXImageTransform.Microsoft.AlphaImageLoader').src = src;
                var rect = clacImgZoomParam(MAXWIDTH, MAXHEIGHT, img.offsetWidth, img.offsetHeight);
                status =('rect:'+rect.top+','+rect.left+','+rect.width+','+rect.height);
                div.innerHTML = "<div id=divhead style='width:"+rect.width+"px;height:"+rect.height+"px;margin-top:"+rect.top+"px;"+sFilter+src+"\"'></div>";
            }
        }
        function clacImgZoomParam( maxWidth, maxHeight, width, height ){
            var param = {top:0, left:0, width:width, height:height};
            if( width>maxWidth || height>maxHeight ){
                rateWidth = width / maxWidth;
                rateHeight = height / maxHeight;

                if( rateWidth > rateHeight ){
                    param.width =  maxWidth;
                    param.height = Math.round(height / rateWidth);
                }else{
                    param.width = Math.round(width / rateHeight);
                    param.height = maxHeight;
                }
            }
            param.left = Math.round((maxWidth - param.width) / 2);
            param.top = Math.round((maxHeight - param.height) / 2);
            return param;
        }
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
                                <a href="/admin">管理中心</a>
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
            <form action="/open_insert" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
                <table class="table table-bordered">
                    <tr>
                        <td>姓名：</td>
                        <td><input type="text" name="student_name" class="form-control" placeholder="请输入姓名"></td>
                        <td>学号：</td>
                        <td><input type="text" name="student_id" class="form-control" placeholder="请输入学号"></td>
                        <td>性别</td>
                        <td>
                            <input type="radio" name="student_sex" value="1">男
                            <input type="radio" name="student_sex" value="2">女
                        </td>
                        <td rowspan="2" colspan="2">
                            <div id="addCommodityIndex">


                                <!--input-group start-->

                                        <div id="preview">
                                            <img id="imghead" border="0" src="static/index/images/photo_icon.png" width="90" height="90" onclick="$('#previewImg').click();">
                                        </div>
                                        <input type="file" onchange="previewImage(this)" style="display: none;" id="previewImg" name="student_photo">
                                        <!--<input id="uploaderInput" class="uploader__input" style="display: none;" type="file" accept="" multiple="">-->

                                <!--input-group end-->

                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>宿舍号：</td>
                        <td><input type="text" name="student_hostel" class="form-control" placeholder="请输入宿舍号"></td>
                        <td>手机号码：</td>
                        <td><input type="text" name="student_phone" class="form-control" placeholder="请输入手机号码"></td>
                        <td>宿舍号：</td>
                        <td><input type="text" name="student_hostel" class="form-control" placeholder="请输入姓名"></td>
                    </tr>
                    <tr>
                        <td colspan="7"><div id="editor"  style="overflow:scroll;width: 100%;max-height: 300px;">

                        </div></td>
                        <script>
                            $('#editor').wysiwyg();
                        </script>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>
<div class="foot">
    <div class="container-fluid text-center" style="padding-top: 5px;">
        <pre style="border: 0">

            作者：ModCat　框架：ThinkPHP 5.0　版本：汕尾职业技术学院-院宿委会系统 1.0　
        </pre>
    </div>
</div>
</body>
</html>