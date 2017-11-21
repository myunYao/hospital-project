<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>新闻中心</title>
    <link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url()?>css/swiftest.css" type="text/css">
    <style>
     .kslist {padding-left: 15px;}
     .kslist>a{ color:black}
        .do_list{padding:5px; border-bottom: 1px solid #f3f3f3}
        .do_cotent{}
        #yybtn{corsur:pointer;width:80px;height30px;background-color:#EBAC2A;font-size: 20px ;line-height:30px;color:white;margin-top: 80px;text-align: center}
        .do_info{padding-top: 10px;}
    </style>
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

    <!--    科室列表-->
    <div class="row">
        <div class="col-md-offset-1 kslist" >
          <p>选择科室：
              <span class="active"><a href="<?php echo site_url("Subscribe")?>">全部</a></span>
              <span><a href="<?php echo site_url("Subscribe")?>">神经外科</a></span>
              <span><a href="<?php echo site_url("Subscribe")?>">骨科</a></span>
              <span><a href="<?php echo site_url("Subscribe")?>">眼科</a></span>
          </p>
        </div>
    </div>
    <!--    获取信息-->
    <?php
    $imgBaseUrl = base_url()."img/";
    foreach($res as $value) {
        $dc_id             = $value['dc_id'];
        $name              = $value['name'];
        $sex               = $value['sex'];
        $introduction      = $value['introduction'];
        $position          = $value['position'];
        $subject           = $value['subject'];
        $skill             = $value['skill'];
        $experience        = $value['experience'];
        $head			   = $value['head'];
        $room              = $value['room'];
//        echo "$dc_id $name $sex $introduction $position $subject $skill $experience $head $room";
//        echo "$head";
//        <!--     医生列表-->
        echo   "
           <div class=\"row do_list\">
        <div class=\"col-md-3  col-md-offset-1 do_cotent\">
           <div class=\"do_img\">
               <img src=\"$head\" width=\"200px\" height=\"150px\">
           </div>
        </div>
            <div class=\"col-md-5  do_info\" style=\"padding-top: 10px;\">
                <dl>
                    <dt><p> $name <span >$subject</span></dt>
                    <dd>
                    <p>职务:<span>$position</span></p>
                    <p>技能:$skill</p>
                    <p>医生详情: $introduction </p>
                    <p>办公室:$room</p>
                    </dd>
                </dl>
            </div>
            <div class=\"col-md-1 \">
           <div  id=\"yybtn\"> 预约</div>
            </div>
    </div>
        ";
    };
    ?>

    <script>
        document.getElementById("#yydtn").onclick{
            window.location("base.url().'News'");
            $.ajax({
                url: './indexsubmit.php', //请求的地址，相当于是form表单里面的action
                type: 'POST',//数据提交方式，相当于是form表单里面的method
                dataType: 'json', //接收的数据类型，不能被其他任何类型的数据污染
                data: {dc_id:$dc_id;},
                success:function(data){
                    console.log(data.res);
                    if(data.res=='no_user'){
                        alert('请登录后预约！');
                        window.location.href = 'login.html';
                    }
                    if(data.res=='success'){
                        $('#title').val('');
                        $('#detile').val('');
                        alert("发布成功！");
                        window.location.href = 'index.php';
                    }
                    if(data.res=="fail"){
                        alert("发布失败，请重试！");
                    }
                }
            });

        }
    </script>

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
</html> */