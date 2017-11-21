
$(function(){
    $('#orders').click(function(){
        $("#orderNews").css({"display":"block"});
        $("#personNews").css({"display":"none"});
        $('#orders').attr({"class":"active"});
        $('#persons').attr({"class":""});


    })
    $('#persons').click(function(){
        $("#personNews").css({"display":"block"});
        $("#orderNews").css({"display":"none"});
        $('#persons').attr({"class":"active"});
        $('#orders').attr({"class":""});

    })

})
