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
				<div class="show_title"><p>医生信息</p></div>
				<Div class="right_box">
					<div class="right_topBar">
						<ul>
							<li><a href="#">添加人员</a></li>
							<li><a href="#">删除人员</a></li>
						</ul>
					</div>
					
					<div class="content_box">
						<div class="content_all">
							<table width="95%" border="0" cellpadding="0" cellspacing="1" bgcolor="#999999">
<!--								列表信息-->
								<tr>
								  <td align="center" valign="middle" bgcolor="#d1d1d1" >ID</td>
						     	  <td align="center" valign="middle" bgcolor="#d1d1d1">医生名字</td>
						     	  <td align="center" valign="middle" bgcolor="#d1d1d1">性别</td>
						     	  <td align="center" valign="middle" bgcolor="#d1d1d1">医生介绍</td>
						     	  <td height="35" align="center" valign="middle" bgcolor="#d1d1d1">医生职位</td>
							    <td height="35" align="center" valign="middle" bgcolor="#d1d1d1">医生所属科目</td>
							    <td height="35" align="center" valign="middle" bgcolor="#d1d1d1">擅长方面</td>
							    <td height="35" align="center" valign="middle" bgcolor="#d1d1d1">工作经验</td>
							    <td height="35" align="center" valign="middle" bgcolor="#d1d1d1">照片</td>
							    <td height="35" align="center" valign="middle" bgcolor="#d1d1d1">科室位置</td>
						  		</tr>
<!--								需要获取的列表信息-->
								<?php
								foreach($res as $value){
									$dc_id	 				=    	$value['dc_id'];
									$name	 				=    	$value['name'];
									$sex					=    	$value['sex'];
									$introduction			=		$value['introduction'];
									$position				=		$value['position'];
									$subject				=		$value['subject'];
									$skill					=		$value['skill'];
									$experience				=		$value['experience'];
									$head					=		$value['head'];
									$room					=		$value['room'];
								echo "<tr><td align='center' valign='middle' bgcolor='#FFFFFF' class='Pleft'>$dc_id</td><td align='center' valign='middle' bgcolor='#FFFFFF' class='Pleft'>$name</td><td align='center' valign='middle' bgcolor='#FFFFFF' class='Pleft'>$sex</td><td align='center' valign='middle' bgcolor='#FFFFFF' class='Pleft'>$introduction</td><td height='35' align='center' valign='middle' bgcolor='#FFFFFF' class='Pleft'>$position</td><td height='35' align='center' valign='middle' bgcolor='#FFFFFF'>$subject</td><td height='35' align='center' valign='middle' bgcolor='#FFFFFF'>$skill</td><td height='35' align='center' valign='middle' bgcolor='#FFFFFF'>$experience</td><td height='35' align='center' valign='middle' bgcolor='#FFFFFF'><img style='width:40px;height: 20px;' src='".base_url().$head."' alt=''></td><td height='35' align='center' valign='middle' bgcolor='#FFFFFF'>$room</td></tr>";
								}
									?>
							</table>
							<div class="page">
								<ul>
									<li><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li><a href="#">5</a></li>
								</ul>
								
							</div>
							
						</div>
						<div class="clear"></div>
					</div>
				</Div>
			</div>
			<div class="clear"></div>
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
