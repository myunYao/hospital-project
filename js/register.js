$(function(){

    $("#s_passwd").blur(function(){
       // alert("111");
        var password = $("#passwd").val();
        var s_password=$("#s_passwd").val();
        if(password!=s_password){
            alert("请输入相同的密码");
            $("#s_passwd").val("");
            return;
        }
    })
    $("#account").blur(function(){
        // alert("111");
        var account = $("#account").val();
        if(!(/^1[34578]\d{9}$/.test(account))) {
            alert("手机号码格式错误，请重填");
            $("#account").val("");
            return;
        }
    })
    $("#register").click(function(){
        var nickname = $("#nickname").val();
        var account = $("#account").val();
        var password = $("#passwd").val();
        var s_password=$("#s_passwd").val();
        var url= regUrl;
        if(!nickname){
            alert("请输入昵称");
        }
        if(!account){
            alert("请输入账号");
        }
        if(!password){
            alert("请输入密码");
        }
        if(!s_password){
            alert("请输入密码");
        }
        alert(url);
        $.ajax({
            data: {nickname:nickname,account: account,password:s_password,contact:account},       //要发送的数据
            type: "POST",           //发送的方式
            url: url, //url地址
            error: function (msg) { //处理出错的信息
                console.log(msg);
            },
            success: function (msg) {  //处理正确时的信息
                console.log(msg);
                if(msg["degree"]=="normol"){
                    //通过控制器跳转界面
                    window.location.href=swiftUrl;
                }
                else{
                    window.location.href=indexUrl;
                }
            }
        })
    });

})
