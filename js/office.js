/**
 * Created by Administrator on 2017/11/17.
 */
$('#delete-office-msg').click(function(){
    if(!confirm('你确定要删除该信息吗？')){
        return ;
    }
    var $dc_id = $(this).attr('dc_id');
    console.log($dc_id)
    $.ajax({
        url: officeUrl,
        type: 'POST',
        data: {dc_id : $dc_id},
        success:function (data) {
            console.log(data)
            /* body... */
                alert('删除成功！');
                window.location.reload();  //刷新当前页面


        }
    });
})