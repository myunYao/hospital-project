<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>医院挂号管理系统</title>
    <link rel="stylesheet" href="<?php echo base_url() ?>css/main.css"/>
    <script type="text/javascript">
        window.onload = function () {
            var aDmin = document.getElementById('admin');
            btn_a = aDmin.getElementsByTagName('a')[0];
            uladmin = document.getElementById('ul_admin');

            btn_a.onclick = function () {
                uladmin.style.display = 'block';

            }
            uladmin.onmouseleave = function () {
                uladmin.style.display = 'none';
            }


        }

    </script>
</head>
<body>
<div id="main">
    <div class="top">
        <div class="logo">医院挂号系统</div>
        <div class="admin" id="admin">
            <?php
            if ($this->session->userdata['nickname'] == '游客') {
                echo "<a href='javascript:;'>" . $this->session->userdata['nickname'] . "</a>
                    <ul id='ul_admin'>
                        <li><a href='".site_url("login")."'>登录</a></li>
                        <li><a href='".site_url("register")."'>注册</a></li>
                    </ul>";
            } else {
                echo "<a href='javascript:;'>" . $this->session->userdata['nickname'] . "</a>
                    <ul id='ul_admin'>
                        <li><a href=\"#\">个人资料</a></li>
                        <li><a href=\"#\">我的信息</a></li>
                        <li><a href='".site_url("index?exit=1")."'>安全退出</a></li>
                    </ul>";
            }
            ?>
        </div>
    </div>
    <!--标志和admin end-->

    <div id="block_list">


        <div class="block_left">
            <div class="wel_text">
                <div class="wel_black">欢迎登入医院挂号系统</div>
            </div>
            <!--欢迎登入协同办公管理系统 end-->

            <div class="secend_box">
                <div class="weather">
                    <a href="#">预约管理</a>
                </div>
                <!--天气预报 end-->

                <div class="newscenter">
                    <a href="<?php echo site_url('News') ?>">
                        <div class="new_title">
                            新闻中心
                        </div>
                        <div class="news_show">
                            习近平:调查外滩踩踏事件原因
                        </div>
                    </a>
                </div>
                <!--新闻中心 end-->
                <div class="clear"></div>
            </div>

            <div class="secend_box">
                <div class="send">
                    <a href="#">发文管理</a>
                </div>

                <div class="accept">
                    <a href="#">收文管理</a>
                </div>

                <div class="TOdeal">
                    <a href="#">文件管理</a>
                </div>

                <div class="clear"></div>
            </div>


        </div>

        <div class="block_right">
            <div class="right_box">
                <div class="talk">
                    <a href="<?php echo site_url('Talk') ?>">网上聊天</a>
                </div>
                <div class="book">
                    <a href="#">通讯录</a>
                </div>
                <div class="message">
                    <a href="#">短消息</a>
                </div>
                <div class="office">
                    <a href="<?php echo site_url('Office') ?>">个人办公</a>
                </div>
                <div class="clear"></div>
            </div>

            <div class="right_box">
                <div class="attendance">
                    <a href="#">考勤管理</a>
                </div>
                <div class="official ">
                    <a href="#">公文管理</a>
                </div>
                <div class="table">
                    <a href="<?php echo site_url('System') ?>">医生信息</a>
                </div>
                <div class="clear"></div>
            </div>
            <div class="right_box_end">
                <div class="folder">
                    <a href="#">个人文件夹</a>
                </div>
                <div class="system ">
                    <a href="<?php echo site_url('Password') ?>">系统设置</a>
                </div>
                <div class="clear"></div>
            </div>


        </div>
    </div>


    <div class="clear"></div>
</div>

</body>
</html>
