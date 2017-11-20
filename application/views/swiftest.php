<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>快速预约</title>
    <link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url()?>css/swiftest.css" type="text/css">
</head>
<body>
<div class="container">
    <div class="row" id="top">
        <div class="col-md-2 col-md-offset-10">
            <span><a href="<?php echo site_url('Login')?>"><?php echo $this->session->userdata['nickname']?> |</a></span>
            <span><a href="<?php echo site_url('Register')?>">注册</a></span>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 col-md-offset-1" style="margin-top:30px;font-size: 20px;">
            <!--<a href="<?php /*echo site_url("Index")*/?>">返回首页</a>-->
            <nav class="navbar navbar-default" role="navigation">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#">挂号系统</a>
                    </div>
                    <div>
                        <ul class="nav nav-pills nav-justified">
                            <li ><a href="<?php echo site_url("Index")?>">网站首页</a></li>
                            <li><a href="<?php echo site_url("News")?>">新闻中心</a></li>
                            <li><a href="<?php echo site_url("Swiftest")?>">快速挂号</a></li>
                            <li><a href="<?php echo site_url("order")?>">预约医生</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="row">
        <div CLASS="col-md-6 col-md-offset-2">
            <form role="form" style="margin-top:20px;">
                <div class="form-group">
                    <label for="name">选择医院</label>
                    <select class="form-control">
                        <option>外科</option>
                        <option>儿科</option>
                        <option>骨科</option>
                        <option>妇产科</option>
                        <option>皮肤科</option>
                        <option>心里医学科</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="name">选择科室</label>
                    <select class="form-control">
                        <option>外科</option>
                        <option>儿科</option>
                        <option>骨科</option>
                        <option>妇产科</option>
                        <option>皮肤科</option>
                        <option>心里医学科</option>
                    </select>
                    <div style="display:none ">
                        <span>科室介绍:</span>
                    </div>
                </div>
                <div class="form-group" style="margin-top:20px;">
                    <label for="firstname" class="col-sm-2 control-label">姓名</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="firstname" placeholder="请输入名字">
                    </div>
                </div>
                <div class="form-group" style="margin-top:80px;">
                    <label for="age" class="col-sm-2 control-label">年龄</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="age" placeholder="请输入年龄">
                    </div>
                </div>
                <div class="form-group" style="margin-top:140px;">
                    <label for="tel" class="col-sm-2 control-label">年龄</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="tel" placeholder="请输入电话号码">
                    </div>
                </div>
                <div style="margin-top: 80px;margin-left:10px;">
                    <label class="radio-inline">
                        <input type="radio" name="optionsRadiosinline" id="optionsRadios3" value="option1" checked> 男
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="optionsRadiosinline" id="optionsRadios4"  value="option2"> 女
                    </label>
                </div>
                <div class="form-group" style="padding-top:-20px;">
                    <input type="button" name="" id="" value="提交" class="btn btn-primary" style="width:120px;margin-top: 40px;">
                </div>
            </form>
        </div>
    </div>
    <div  id="footer" class="row" >
        <div class="col-md-10 col-md-offset-2">
            <ul >
                <li> <a href="/Item/2503.aspx" title="版权声明">版权声明</a> | </li>
                <li><a href="/Item/2504.aspx" title="法律责任">法律责任</a> |</li>
                <li><a href="/Item/2505.aspx" title="隐私声明">隐私声明</a> |</li>
                <li><a href="/Category_36/Index.aspx" title="联系我们">联系我们</a> |</li>
                <li><a href="/Item/11940.aspx" title="网站帮助">网站帮助</a> |</li>
                <li><a href="mailto:webmaster1@pumch.cn" title="站长信箱">站长信箱</a> |</li>
                <li><a href="/Item/11942.aspx" title="网站地图">网站地图</a></li>
            </ul>
        </div>
        <div class="col-md-10 col-md-offset-2" style=" margin-top: 20px;padding-bottom: 8px;">
            <div id="CopyRight">
                <p>地址：（东院）北京市东城区帅府园一号，100730；（西院）北京市西城区大木仓胡同41号，100032</p>
                <p>医院电话：69156114<a href="http://www.miibeian.gov.cn"  title="京ICP 备05067313号-1" target="_blank">京ICP 备05067313号-1</a>文保网安备案号：1101010023 京卫网审字【2014】第39号 </p>
                <p> 网址：<a href="http://www.pumch.cn" target="_self" title="北京协和医院">http://www.pumch.cn</a>&nbsp;&nbsp; 2014-2016 All Rights Reserved  &copy; 北京协和医院&nbsp;&nbsp;<script src=" http://s17.cnzz.com/stat.php?id=2445498&web_id=2445498&show=pic1" language="JavaScript"></script></p></div>

            </div>
        </div>
   </div>
</div>
</body>
</html>