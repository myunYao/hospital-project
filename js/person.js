
$(function(){
    $('#fastorder').click(function(){
        $("#orderNews").css({"display":"block"});
        $("#personNews").css({"display":"none"});
        $(".orderDc").css({"display":"none"});
        $(".fastorder").css({"display":"block "});

        $('#fastorder').attr({"class":"active"});
        $('#persons').attr({"class":""});


    })
    $('#orderDc').click(function(){
        $("#orderNews").css({"display":"block"});
        $("#personNews").css({"display":"none"});
        $(".orderDc").css({"display":"block"});
        $(".fastorder").css({"display":"none "});

        $('#fastorder').attr({"class":"active"});
        $('#persons').attr({"class":""});


    })
    $('#persons').click(function(){
        $("#personNews").css({"display":"block"});
        $("#orderNews").css({"display":"none"});
        $('#persons').attr({"class":"active"});
        $('#fastorder').attr({"class":""});

    })

})
