<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>个人中心</title>
    <link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>css/swiftest.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url()?>css/show.css" />
    <link rel="stylesheet" href="<?php echo base_url()?>css/person.css" />
    <script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="<?php echo base_url()?>js/jquery-1.6.min.js" ></script>
    <script type="text/javascript" src="<?php echo base_url()?>js/mine.js" ></script>
</head>
<body>
<div class="container">
    <div class="row" id="top">
        <!--        登录注册-->
        <div class="col-md-2 col-md-offset-10">
            <span><a href="<?php echo site_url('Login')?>">登录</a></span>
            <span> | </span>
            <span><a href="<?php echo site_url('Register')?>">注册</a></span>
        </div>
    </div>

    <div class="row">
        <div class="col-md-10 col-md-offset-1" style="padding-top:30px;font-size: 20px;">
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

    <div class="row person" >
        <div class="col-md-6 col-md-offset-2">
            <h3>我的预约信息</h3>
            <table width="95%" border="0" cellpadding="0" cellspacing="1" bgcolor="#999999">
                <!--								列表信息-->
                <tr>
                    <td align="center" valign="middle" bgcolor="#d1d1d1" >预约时间</td>
                    <td align="center" valign="middle" bgcolor="#d1d1d1" >预约医院</td>
                    <td align="center" valign="middle" bgcolor="#d1d1d1" >医生名字</td>
                    <td align="center" valign="middle" bgcolor="#d1d1d1" >医生介绍</td>


                </tr>
                <tr>

                    <td align='center' valign='middle' bgcolor='#FFFFFF' class='Pleft'>$dc_id</td>
                    <td align='center' valign='middle' bgcolor='#FFFFFF' class='Pleft'>$dc_id</td>
                    <td align='center' valign='middle' bgcolor='#FFFFFF' class='Pleft'>$dc_id</td>
                    <td align='center' valign='middle' bgcolor='#FFFFFF' class='Pleft'>$dc_id</td>

                </tr>
                <tr>

                    <td align='center' valign='middle' bgcolor='#FFFFFF' class='Pleft'>$dc_id</td>
                    <td align='center' valign='middle' bgcolor='#FFFFFF' class='Pleft'>$dc_id</td>
                    <td align='center' valign='middle' bgcolor='#FFFFFF' class='Pleft'>$dc_id</td>
                    <td align='center' valign='middle' bgcolor='#FFFFFF' class='Pleft'>$dc_id</td>

                </tr>
                <tr>

                    <td align='center' valign='middle' bgcolor='#FFFFFF' class='Pleft'>$dc_id</td>
                    <td align='center' valign='middle' bgcolor='#FFFFFF' class='Pleft'>$dc_id</td>
                    <td align='center' valign='middle' bgcolor='#FFFFFF' class='Pleft'>$dc_id</td>
                    <td align='center' valign='middle' bgcolor='#FFFFFF' class='Pleft'>$dc_id</td>

                </tr>

                <?php
/*                foreach($res as $value){

                    echo "<tr>

                        <td align='center' valign='middle' bgcolor='#FFFFFF' class='Pleft'>$dc_id</td>
                        <td align='center' valign='middle' bgcolor='#FFFFFF' class='Pleft'>$dc_id</td>
                        <td align='center' valign='middle' bgcolor='#FFFFFF' class='Pleft'>$dc_id</td>
                        <td align='center' valign='middle' bgcolor='#FFFFFF' class='Pleft'>$dc_id</td>

                        </tr>";
                }
                */?>
            </table>
        </div>
        <div class="col-md-4">
            <h3>我的个人信息</h3>
            <ul>
                <li><img src="" alt="个人头像"></li>
                <li><span>昵&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp称:</span><span>我是病人</span></li>
                <li><span>电话号码:</span><span>2017-12-26</span></li>
            </ul>

        </div>
    </div>
    <!--footer start	-->
    <div class="row" id="footer">
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
    <!--footer end	-->
</div>
</body>
</html>