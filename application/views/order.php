<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>预约医生</title>
    <link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url()?>css/swiftest.css" type="text/css">
</head>
<body>
<div class="container">
    <div class="row" id="top">
        <div class="col-md-2 col-md-offset-10">
            <?php
            if (!array_key_exists("nickname",$this->session->all_userdata()) || $this->session->userdata['nickname']=="游客"){
                echo "<span><a href='".site_url('Login')."'>登录 |</a></span>";
            }else{
                echo "<span><a href='".site_url('Person')."'>".$this->session->userdata['nickname']." |</a></span>";
            }
            ?>
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
                            <li><a href="<?php echo site_url("Subscribe")?>">预约医生</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="row">
        <div CLASS="col-md-6 col-md-offset-2">
            <form role="form" method="post" action="<?php echo site_url("Orders/insert")?>" style="margin-top:20px;">
                <input type="hidden" name="dc_id" value="<?=$_GET["dc_id"]?>">
                <div class="form-group" margin-top="30px">
                    <label for="dcname" class="col-sm-2 control-label" >医生姓名</label>
                    <div class="col-sm-10">
                        <input type="text"  name="dcname"  disabled="disabled" class="form-control" id="dcname" value="<?php echo $res[0]["name"]?>">
                    </div>
                </div>
                <div class="form-group"   margin-top="30px">
                    <label for="date" class="col-sm-2 control-label">预约日期</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="date" name="date">
                    </div>
                </div>
                <div class="form-group"  margin-top="30px">
                    <label for="time" class="col-sm-2 control-label">预约时间</label>
                    <div class="col-sm-10">
                        <input type="time" name="time" class="form-control" id="time" >
                    </div>
                </div>

                <div class="form-group" >
                    <input type="submit" name="submit"  value="提交" class="btn btn-primary" style="width:120px; margin-top: 30px;">
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