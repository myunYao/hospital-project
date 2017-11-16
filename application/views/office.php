<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>个人办公</title>
		<link rel="stylesheet" href="<?php echo base_url()?>css/show.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>js/tree_themes/SimpleTree.css"/>
		<script type="text/javascript" src="<?php echo base_url()?>js/jquery-1.6.min.js" ></script>
		<script type="text/javascript" src="<?php echo base_url()?>js/mine.js" ></script>
		<script type="text/javascript" src="<?php echo base_url()?>js/SimpleTree.js"></script>
		<script type="text/javascript">
		
		</script>
		<script type="text/javascript">
		window.onload=function(){
			
//			navLeft.style.height=(showRight.offsetHeight+150)+'px'
//			showRight.style.width=(document.documentElement.clientWidth-295)+'px'
			$(function(){
			$(".st_tree").SimpleTree({
				click:function(a){
					if(!$(a).attr("hasChild"))
						alert($(a).attr("ref"));
				}
			});
			});
			
		}
			
		</script>
	</head>
	<body>
		<div id="box">

			<div id="right_width" class="right_show">
				
				<div class="right_wrap">
					<div class="show_title"><p>个人办公</p></div>
					
					<Div class="right_box">
						<div class="right_topBar">
							<ul>
								<li><a href="#">上传文件</a></li>
								<li><a href="#">下载全部</a></li>
							</ul>
						</div>
						
						
						<div class="content_box">
							
							
							<div class="content_right">
							
								<div class="content_wrap">
								<table width="100%" border="0" cellspacing="0" cellpadding="0">
								<tr>
						     	<td height="35" align="left" valign="middle" bgcolor="#d1d1d1" class="Pleft">标题</td>
							    <td height="35" align="center" valign="middle" bgcolor="#d1d1d1">收件人</td>
							    <td height="35" align="center" valign="middle" bgcolor="#d1d1d1">重要性</td>
							    <td height="35" align="center" valign="middle" bgcolor="#d1d1d1">回执</td>
							    <td height="35" align="center" valign="middle" bgcolor="#d1d1d1">发送时间</td>
							    <td height="35" align="center" valign="middle" bgcolor="#d1d1d1">操作</td>
						  		</tr>
						  		 <tr>
								    <td height="35" align="left" valign="middle" class="Pleft">jquery树形菜单特效 插件_模板无忧</td>
								    <td height="35" align="center" valign="middle">zm592565</td>
								    <td height="35" align="center" valign="middle">一般</td>
								    <td height="35" align="center" valign="middle">否</td>
								    <td height="35" align="center" valign="middle">2014-09-18</td>
								    <td height="35" align="center" valign="middle"><a href="#">删除</a>|<a href="#">收藏</a></td>
								  </tr>
								  <tr>
								    <td height="35" align="left" valign="middle" bgcolor="#e7e7e7" class="Pleft">标题</td>
								    <td height="35" align="center" valign="middle" bgcolor="#e7e7e7">收件人</td>
								    <td height="35" align="center" valign="middle" bgcolor="#e7e7e7">重要性</td>
								    <td height="35" align="center" valign="middle" bgcolor="#e7e7e7">回执</td>
								    <td height="35" align="center" valign="middle" bgcolor="#e7e7e7">发送时间</td>
								    <td height="35" align="center" valign="middle" bgcolor="#e7e7e7"><a href="#">删除</a>|<a href="#">收藏</a></td>
								  </tr>
								  <tr>
								    <td height="35" align="left" valign="middle" class="Pleft">jquery树形菜单特效 插件_模板无忧</td>
								    <td height="35" align="center" valign="middle">zm592565</td>
								    <td height="35" align="center" valign="middle">一般</td>
								    <td height="35" align="center" valign="middle">否</td>
								    <td height="35" align="center" valign="middle">2014-09-18</td>
								    <td height="35" align="center" valign="middle"><a href="#">删除</a>|<a href="#">收藏</a></td>
								  </tr>
								  <tr>
								    <td height="35" align="left" valign="middle" bgcolor="#e7e7e7" class="Pleft">标题</td>
								    <td height="35" align="center" valign="middle" bgcolor="#e7e7e7">收件人</td>
								    <td height="35" align="center" valign="middle" bgcolor="#e7e7e7">重要性</td>
								    <td height="35" align="center" valign="middle" bgcolor="#e7e7e7">回执</td>
								    <td height="35" align="center" valign="middle" bgcolor="#e7e7e7">发送时间</td>
								    <td height="35" align="center" valign="middle" bgcolor="#e7e7e7"><a href="#">删除</a>|<a href="#">收藏</a></td>
								  </tr>
								  <tr>
								    <td height="35" align="left" valign="middle" class="Pleft">jquery树形菜单特效 插件_模板无忧</td>
								    <td height="35" align="center" valign="middle">zm592565</td>
								    <td height="35" align="center" valign="middle">一般</td>
								    <td height="35" align="center" valign="middle">否</td>
								    <td height="35" align="center" valign="middle">2014-09-18</td>
								    <td height="35" align="center" valign="middle"><a href="#">删除</a>|<a href="#">收藏</a></td>
								  </tr>
								  <tr>
								    <td height="35" align="left" valign="middle" bgcolor="#e7e7e7" class="Pleft">标题</td>
								    <td height="35" align="center" valign="middle" bgcolor="#e7e7e7">收件人</td>
								    <td height="35" align="center" valign="middle" bgcolor="#e7e7e7">重要性</td>
								    <td height="35" align="center" valign="middle" bgcolor="#e7e7e7">回执</td>
								    <td height="35" align="center" valign="middle" bgcolor="#e7e7e7">发送时间</td>
								    <td height="35" align="center" valign="middle" bgcolor="#e7e7e7"><a href="#">删除</a>|<a href="#">收藏</a></td>
								  </tr>
								  <tr>
								    <td height="35" align="left" valign="middle" class="Pleft">jquery树形菜单特效 插件_模板无忧</td>
								    <td height="35" align="center" valign="middle">zm592565</td>
								    <td height="35" align="center" valign="middle">一般</td>
								    <td height="35" align="center" valign="middle">否</td>
								    <td height="35" align="center" valign="middle">2014-09-18</td>
								    <td height="35" align="center" valign="middle"><a href="#">删除</a>|<a href="#">收藏</a></td>
								  </tr>
								  <tr>
								    <td height="35" align="left" valign="middle" bgcolor="#e7e7e7" class="Pleft">标题</td>
								    <td height="35" align="center" valign="middle" bgcolor="#e7e7e7">收件人</td>
								    <td height="35" align="center" valign="middle" bgcolor="#e7e7e7">重要性</td>
								    <td height="35" align="center" valign="middle" bgcolor="#e7e7e7">回执</td>
								    <td height="35" align="center" valign="middle" bgcolor="#e7e7e7">发送时间</td>
								    <td height="35" align="center" valign="middle" bgcolor="#e7e7e7"><a href="#">删除</a>|<a href="#">收藏</a></td>
								  </tr>
								  <tr>
								    <td height="35" align="left" valign="middle" class="Pleft">jquery树形菜单特效 插件_模板无忧</td>
								    <td height="35" align="center" valign="middle">zm592565</td>
								    <td height="35" align="center" valign="middle">一般</td>
								    <td height="35" align="center" valign="middle">否</td>
								    <td height="35" align="center" valign="middle">2014-09-18</td>
								    <td height="35" align="center" valign="middle"><a href="#">删除</a>|<a href="#">收藏</a></td>
								  </tr>
								  <tr>
								    <td height="35" align="left" valign="middle" bgcolor="#e7e7e7" class="Pleft">标题</td>
								    <td height="35" align="center" valign="middle" bgcolor="#e7e7e7">收件人</td>
								    <td height="35" align="center" valign="middle" bgcolor="#e7e7e7">重要性</td>
								    <td height="35" align="center" valign="middle" bgcolor="#e7e7e7">回执</td>
								    <td height="35" align="center" valign="middle" bgcolor="#e7e7e7">发送时间</td>
								    <td height="35" align="center" valign="middle" bgcolor="#e7e7e7"><a href="#">删除</a>|<a href="#">收藏</a></td>
								  </tr>
								  <tr>
								    <td height="35" align="left" valign="middle" class="Pleft">jquery树形菜单特效 插件_模板无忧</td>
								    <td height="35" align="center" valign="middle">zm592565</td>
								    <td height="35" align="center" valign="middle">一般</td>
								    <td height="35" align="center" valign="middle">否</td>
								    <td height="35" align="center" valign="middle">2014-09-18</td>
								    <td height="35" align="center" valign="middle"><a href="#">删除</a>|<a href="#">收藏</a></td>
								  </tr>
								  <tr>
								    <td height="35" align="left" valign="middle" bgcolor="#e7e7e7" class="Pleft">标题</td>
								    <td height="35" align="center" valign="middle" bgcolor="#e7e7e7">收件人</td>
								    <td height="35" align="center" valign="middle" bgcolor="#e7e7e7">重要性</td>
								    <td height="35" align="center" valign="middle" bgcolor="#e7e7e7">回执</td>
								    <td height="35" align="center" valign="middle" bgcolor="#e7e7e7">发送时间</td>
								    <td height="35" align="center" valign="middle" bgcolor="#e7e7e7"><a href="#">删除</a>|<a href="#">收藏</a></td>
								  </tr>
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
							</div>
							
							
							
							
							
							
							
							<div class="content_left">
								<div class="left_ul">
									<ul>
										<li><a class="btn_01" href="#">添加</a></li>
										<li><a class="btn_02" href="#">修改</a></li>
										<li><a class="btn_03" href="#">删除</a></li>
									</ul>
								</div>
								<div class="st_tree">
								<ul>
									<li><a href="#" ref="hyjm">欢迎界面</a></li>
									<li><a href="#" ref="xtgl">系统管理</a></li>
								    <ul show="true">
										<li><a href="#" ref="yhgl">用户管理</a></li>
										<li><a href="#" ref="rzck">日志查看</a></li>
									</ul>
									<li><a href="#" ref="ckgl">仓库管理</a></li>
								    <ul>
										<li><a href="#" ref="kcgl">库存管理</a></li>
										<li><a href="#" ref="shgl">收货管理</a></li>
										<li><a href="#" ref="fhgl">发货管理</a></li>
								        <ul>
								            <li><a href="#" ref="yhgl">用户管理</a></li>
								            <li><a href="#" ref="rzck">日志查看</a></li>
								        </ul>
									</ul>
								</ul>
								</div>
							
							</div>
						
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
						<li><a href="#">短消息</a></li>
						<li><a href="#">文件传递</a></li>
						<li><a href="#">个人文件夹</a></li>
						<li><a href="#">电子邮件</a></li>
						<li><a href="#">通讯录</a></li>
						<li><a href="#">待办事宜</a></li>						
					</ul>
				</div>
			</div>
			
		
		</div>
	</body>
</html>
