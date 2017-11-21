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
            <?php
            if (!array_key_exists("nickname",$this->session->all_userdata()) || $this->session->userdata['nickname']=="游客"){
                echo "<span><a href='".site_url('Login')."'>登录 |</a></span>";
            }else{
                echo "<span><a href='".site_url('Person')."'>".$this->session->userdata['nickname']." |</a></span>";
            }
            ?>
            <span> | </span>
            <span><a href="<?php echo site_url('Register')?>">注册</a></span>
        </div>
    </div>
    <div class="row sliderNav">
        <div class="col-md-2  col-md-offset-1" >
            <nav class="navbar navbar-default" role="navigation">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <!--<button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target="#example-navbar-collapse">
                            <span class="sr-only">切换导航</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>-->
                        <a class="navbar-brand" href="<?php echo site_url("Index")?>">返回首页</a>
                    </div>
                    <div class="collapse navbar-collapse" id="example-navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li class="active" id="persons"><a href="#">个人信息</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    预约信息<b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li id="fastorder"><a href="#">快速预约</a></li>
                                    <li id="orderDc"><a href="#">预约医生</a></li>

                                </ul>
                            </li>
                            <li  id="updataPerson"><a href="#">修改个人信息</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <div class="col-md-8 "  id="orderNews">
            <h3>我的预约信息</h3>
            <?php
            foreach($res as $value){
                if($value["order_id"]) {
                    $dc_name = $value ["name"];
                    $order_time = $value ["ordertime"];
                    $order_date = $value ["orderdate"];
                    //echo $dc_name;
                    echo "
                    <ul class=\"orderDc\">
                    <li>预约类型:预约医生</li>
                    <li><span>预约日期:</span><span>$order_date  </span></li>
                    <li><span>具体时间:</span><span>$order_time  </span></li>
                    <li><span>预约医生:</span><span> $dc_name  </span></li>
                    </ul>";
                }
                else if(!$value['fastorder_id']){
                    echo "
                        <ul class=\"fastorder\">
                            <li>您没有快速预约的信息</li>
                        </ul>";
                }
                else{
                    echo "
                        <ul class=\"fastorder\">
                            <li>预约类型:快速预约</li>
                            <li><span>预约医生:</span><span></span></li>
                            <li><span>预约日期:</span><span></span></li>
                            <li><span>具体时间:</span><span></span></li>
                        </ul>";
                }
            }
            ?>



        </div>
        <div class="col-md-8" id="personNews">
            <h3>我的个人信息</h3>
            <?php
            foreach($res as $value){
                $account=$value["account"];
                $nickname=$value["nickname"];
            }
            echo "
             <ul>
                <li><img src=\"https://ss1.bdstatic.com/70cFvXSh_Q1YnxGkpoWK1HF6hhy/it/u=319120560,14449975&fm=27&gp=0.jpg\" alt=\"个人头像\"></li>
                <li><span>昵&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp称:</span><span>$nickname</span></li>
                <li><span>电话号码:</span><span>$account</span></li>
            </ul>";

            ?>

        </div>

    </div>


    <!--footer start	-->
    <div class="row" id="footer">
        <div class="col-md-10 col-md-offset-1">
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
        <div class="col-md-10 col-md-offset-1" style=" margin-top: 20px;padding-bottom: 8px;">
            <div id="CopyRight">
                <p>地址：（东院）北京市东城区帅府园一号，100730；（西院）北京市西城区大木仓胡同41号，100032</p>
                <p>医院电话：69156114<a href="http://www.miibeian.gov.cn"  title="京ICP 备05067313号-1" target="_blank">京ICP 备05067313号-1</a>文保网安备案号：1101010023 京卫网审字【2014】第39号 </p>
                <p> 网址：<a href="http://www.pumch.cn" target="_self" title="北京协和医院">http://www.pumch.cn</a>&nbsp;&nbsp; 2014-2016 All Rights Reserved  &copy; 北京协和医院&nbsp;&nbsp;<script src=" http://s17.cnzz.com/stat.php?id=2445498&web_id=2445498&show=pic1" language="JavaScript"></script></p></div>

        </div>
    </div>
    <!--footer end	-->
</div>
<script src="<?php echo base_url()?>js/person.js"></script>
</body>
</html>