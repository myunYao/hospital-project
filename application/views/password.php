<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>系统设置</title>
    <link rel="stylesheet" href="<?php echo base_url() ?>css/show.css"/>
    <script type="text/javascript" src="<?php echo base_url() ?>js/jquery-1.6.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>js/mine.js"></script>
</head>
<body>
<div id="box">

    <div id="right_width" class="right_show">
        <div class="right_wrap">
            <div class="show_title"><p>系统设置</p></div>
            <Div class="right_box">
                <div class="right_topBar">
                    <ul>
                        <li><a href="#">您目前的位置：新闻管理 >添加新闻</a></li>
                    </ul>
                </div>

                <div class="content_box">
                    <div class="content_all">
                        <form method="post" action="<?php echo site_url('NewsC/InsertNews') ?>">
                            <ul>

                                <li><span>标题：</span><input type="text" name="title"></li>
                                <li><span>内容：</span><input type="text" name="detail"></li>
                                <li><span>作者：</span><input type="text" name="author"></li>
                                <li><span>创建日期：</span><input type="date" name="pubtime"></li>
                                <li><span>首页图：</span><input type="file" name="images"></li>

                            </ul>
                            <div class="btn_box">
                                <input class="queding" value="确定" type="submit">
                                <input type="reset" class="cancl" value="取消" type="button">
                            </div>

                        </form>

                    </div>
                    <div class="clear"></div>
                </div>
            </Div>
        </div>
    </div>


    <div id="left_nav" class="left_menu">
        <div class="back">
            <a href="<?php echo site_url("Index")?>"></a>
        </div>
        <div class="menu_list">
            <ul>
                <li><a href="<?php echo site_url("Office")?>">个人办公</a></li>
                <li><a href="<?php echo site_url("System")?>">医生信息</a></li>
                <li><a href="<?php echo site_url("Password")?>">新闻添加</a></li>
            </ul>
        </div>
    </div>


</div>
</body>
</html>
