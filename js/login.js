$(function(){
    $(".submit").click(function(){
        var account = $(".admin").val();
        var password = $(".passWord").val();
        var url= loginUrl;
        if(!account){
            alert("请输入账号")
        }
        if(!(/^1[34578]\d{9}$/.test(account))) {
            alert("手机号码有误，请重填");
        }
        if(!password){
            alert("请输入密码")
        }
        alert(url);
        $.ajax({
            data: {account: account,password:password},       //要发送的数据
            type: "POST",           //发送的方式
            url: url, //url地址
            error: function (msg) { //处理出错的信息
                console.log(msg);
            },
            success: function (msg) {  //处理正确时的信息
                msg = JSON.parse(msg);
                if(msg["degree"]=="normal"){
                    //通过控制器跳转界面
                    window.location.href=swiftUrl;
                }
                else{
                    alert("账号或密码错误！");
                }
            }
        })
    });

})
