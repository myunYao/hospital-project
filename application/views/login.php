<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>医院挂号系统</title>
	<link rel="stylesheet" href="<?php echo base_url()?>css/login.css" />

	<script>
		function setContentHeight (){
			var web_subnav = document.getElementById( "login_bj" );
//	        var height = document.documentElement.clientHeight - 40 - document.getElementById("web-topbd").offsetHeight;
			web_subnav.style.height = document.documentElement.clientHeight + 'px';
		}
		window.onload = setContentHeight;
		window.onresize = setContentHeight;
	</script>
	<script src="<?php echo base_url()?>js/jquery.min.js"></script>
</head>
<body>
<!--<div id="login_bj">-->

<div id="login">
	<form action="" method="post">
		<DIV class="logo">医院挂号系统</DIV>
		<div class="login_box">
			<input class="admin "   type="text"       name="account"  value="18282650375" />
			<input class="passWord" type="password"  name="password" value="123456" />
			<input class="submit"   type="button" />
			<div class="clear"></div>
		</div>
	</form>
</div>
<div id="copyright">技术支持：四川省人民医院挂号管理系统</div>
<!--</div>-->


</body>
</html>
<script>
	var loginUrl = '<?php echo site_url("Account/getAcc")?>'
	var swiftUrl= '<?php echo site_url("Swiftest")?>'
	var indexUrl= '<?php echo site_url("Index")?>'
</script>
<script src="<?php echo base_url()?>js/login.js"></script>
