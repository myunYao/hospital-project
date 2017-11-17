<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>系统设置</title>
		<link rel="stylesheet" href="<?php echo base_url()?>css/show.css" />
		<script type="text/javascript" src="<?php echo base_url()?>js/jquery-1.6.min.js" ></script>
		<script type="text/javascript" src="<?php echo base_url()?>js/mine.js" ></script>
	</head>
	<body>
		<div id="box">

			<div id="right_width" class="right_show">
				<div class="right_wrap">
				<div class="show_title"><p>添加信息</p></div>
				<div class="right_box">
					<div class="right_topBar">
						<ul>
							<li><a href="#">您目前的位置：个人管理 >修改信息</a></li>
						</ul>
					</div>
					
					<div class="content_box" style="margin: 0 auto">
						<div class="content_all" id="addmessage">

							<ul>
<!--								<li><span>用户编号：</span><input type="text" value="admin"></li>-->
								<li><span>医生名字：</span><input class="name" type="text" placeholder="请填写医生名字" value=""></li>
								<li><span>性&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;别：</span><input class="sex" type="text" placeholder="性别" value=""></li>
								<li><span>医生介绍：</span><input class="introduction" type="text" placeholder="请填写医生介绍" value=""></li>
								<li><span>医生职位：</span><input class="position" type="text" placeholder="请填写医生职位" value=""></li>
								<li><span>医生科室：</span><input class="subject" type="text" placeholder="请填写医生所属科目" value=""></li>
								<li><span>擅长方面：</span><input class="skill" type="text" placeholder="请填写医生擅长方面" value=""></li>
								<li><span>工作经验：</span><input class="experience" type="text" placeholder="请填写医生工作经验" value=""></li>
								<li><span>科室位置：</span><input class="room" type="text" placeholder="请填写医生科室位置" value=""></li>
<!--								<li><span>用户状态：</span><input class="radio" type="radio" checked="checked"><ol>锁定</ol><input class="radio" type="radio"><ol>正常</ol></li>-->
								
							</ul>
							<div class="btn_box">
									<input class="queding" id="queding" value="确定" type="button"><input class="cancl" value="取消" type="button">
							</div>
							
							
						</div>
						<div class="clear"></div>
					</div>
				</div>
			</div>
			</div>
			
			
			<div id="left_nav" class="left_menu">
				<div class="back">
					<a href="#"></a>
				</div>
				<div class="menu_list">
					<ul>
						<li><a href="#">部门管理</a></li>
						<li><a href="#">人员管理</a></li>
						<li><a href="#">权限管理</a></li>
						<li><a href="#">密码管理</a></li>
						<li><a href="#">岗位管理</a></li>
						<li><a href="#">报表参数</a></li>						
					</ul>
				</div>
			</div>
			
			
			
		</div>
		<script>
			var addmsgUrl = "<?php echo site_url("Doctor/insertDoc")?>"
			var tiaozhuanUrl = "<?php echo site_url("Office")?>"
		</script>
		<script src="<?php echo base_url()?>js/addmsg.js"></script>
	</body>
</html>