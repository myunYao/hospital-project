<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>医院挂号系统</title>
    <link rel="stylesheet" href="<?php echo base_url()?>css/register.css" />
    <script>
        function setContentHeight (){
            var web_subnav = document.getElementById( "login_bj" );
//	        var height = document.documentElement.clientHeight - 40 - document.getElementById("web-topbd").offsetHeight;
            web_subnav.style.height = document.documentElement.clientHeight + 'px';
        }
        window.onload = setContentHeight;
        window.onresize = setContentHeight;
    </script>
    <script src="<?php echo  base_url()?>js/jquery.min.js"></script>
</head>
<body>
<!--<div id="login_bj">-->
<div id="reg">
    <form action="" method="post">
        <DIV class="logo">医院挂号系统</DIV>
        <div class="reg_box">
            <input class="admin" type="type"  name="nickname" id="nikename" value=""  placeholder="请输入昵称">
            <input class="admin" type="text" name="account"  id="account" value="" placeholder="请用手机号码注册" />
            </br></br><input class="passWord" type="password" id="passwd" name="password" value=""></br></br>
            <input class="passWord" type="password"  name="password" id="s_passwd" value=""></br></br>

            </br></br>
            <input class="submit" type="button"  value="注  册"/>
            <div class="clear"></div>
        </div>
    </form>
</div>
<div id="copyright">技术支持：四川省人民医院挂号管理系统</div>
<script>
    var regUrl= "<?php echo  site_url("Account/insertAcc")?>"
</script>
<script src="<?php echo  base_url()?>js/register.js"></script>
<!--</div>-->
</body>
</html>
