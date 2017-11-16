<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>系统设置</title>
		<link rel="stylesheet" href="<?php echo base_url()?>css/show.css" />
		<script type="text/javascript" src="<?php echo base_url()?>js/jquery-1.6.min.js" ></script>
		<script type="text/javascript" src="<?php echo base_url()?>/mine.js" ></script>
	</head>
	<body>
		<div id="box">

			<div id="right_width" class="right_show">
				<div class="right_wrap">
				<div class="show_title"><p>系统设置</p></div>
				<Div class="right_box">
					<div class="right_topBar">
						<ul>
							<li><a href="#">您目前的位置：个人管理 >修改信息</a></li>
						</ul>
					</div>
					
					<div class="content_box">
						<div class="content_all">
							
							<ul>
								<li><span>用户编号：</span><input type="text" value="admin"></li>
								<li><span>用户姓名：</span><input type="text" value="admin"></li>
								<li><span>密码：</span><input type="text" value="admin"></li>
								<li><span>所属部门：</span><select name=""> <option>业务部</option>
  													<option>秘书部</option></select></li>
								<li><span>职位：</span><select name=""> <option>业务部</option>
  													<option>秘书部</option></select></li>
								<li><span>用户地址：</span><input type="text" value="admin"></li>
								<li><span>电话：</span><input type="text" value="admin"></li>
								<li><span>创建日期：</span><input type="text" value="admin"></li>
								<li><span>失效日期：</span><input type="text" value="admin"></li>
								<li><span>用户状态：</span><input class="radio" type="radio" checked="checked"><ol>锁定</ol><input class="radio" type="radio"><ol>正常</ol></li>
								
							</ul>
							<div class="btn_box">
									<input class="queding" value="确定" type="button"><input class="cancl" value="取消" type="button">
							</div>	
							
							
							
						</div>
						<div class="clear"></div>
					</div>
				</Div>
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
	</body>
</html>
