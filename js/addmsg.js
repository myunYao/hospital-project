/**
 * Created by Administrator on 2017/11/17.
 */
$(document).ready(function(){
    $('#queding').click(function() {
        var name = $(".name").val();
        var sex = $(".sex").val();
        var introduction = $(".introduction").val();
        var position = $(".position").val();
        var subject = $(".subject").val();
        var skill = $(".skill").val();
        var experience = $(".experience").val();
        var room = $(".room").val();
        console.log($('#addmessage').serialize());
        //提交数据
        $.ajax({
            url: addmsgUrl,
            type: 'POST',
            data: {name:name,sex:sex,introduction:introduction,position:position,subject:subject,skill:skill,experience:experience,room:room},
            success:function (data) {
                /* body... */
                //console.log(data);

                    alert('添加成功！');
                    window.location.href = tiaozhuanUrl;

            }
        });
    });
    $("#cancl").click(function(){
        window.location.href = refreshUrl;
    })
})