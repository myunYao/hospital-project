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
	<div class="row"  >
		<div class="col-md-8 col-md-offset-2"  style="padding-top:30px;" >
			<div id="myCarousel" class="carousel slide">
				<!-- 轮播（Carousel）指标 -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>
				<!-- 轮播（Carousel）项目 -->
				<div class="carousel-inner">
					<div class="item active">
						<img src="<?php echo base_url()?>img/2017101911104.jpg" alt="First slide">
						<div class="carousel-caption">标题 1</div>
					</div>
					<div class="item">
						<img  src="<?php echo base_url()?>img/2017101911104.jpg" alt="Second slide">
						<div class="carousel-caption">标题 2</div>
					</div>
					<div  class="item">
						<img  src="<?php echo base_url()?>img/20171017162258.jpg" alt="Third slide">
						<div class="carousel-caption">标题 3</div>
					</div>
				</div>
				<!-- 轮播（Carousel）导航 -->
				<a class="carousel-control left" href="#myCarousel"
				   data-slide="prev">&lsaquo;</a>
				<a class="carousel-control right" href="#myCarousel"
				   data-slide="next">&rsaquo;</a>
			</div>
		</div>

	</div>
<!--	下边栏开始-->
	<div class="row" style="margin-top: 20px;">
		<div class="col-md-10 col-md-offset-2" >
			<ul>
				<?php
					foreach($news as $value){

						//print_r($value);
						$title=$value["title"];
						$author=$value["author"];
						$pubtime=$value["pubtime"];
						$images=$value["images"];
						echo "<div style='position: relative; border: 1px solid #ccc;width: 760px; height:100px;margin-bottom: 5px;margin-left: -40px'>
								<div style='position: absolute;top: 20px;left: 10px' class=\"news_img\">
									<img src='".base_url().$images."' alt=''>
								</div>
								<div style='position: absolute;top: 20px;left: 90px'  class=\"news_title\">
									<p><span>标题：</span><a href=\"#\">$title</a></p>
									<span style='font-weight:bold;'><span>姓名：</span>$author</span>
									<span>时间：$pubtime</span>
								</div>
						</div>";
					}
				?>

			</ul>
		</div>
	</div>
<!--	下边栏结束-->
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