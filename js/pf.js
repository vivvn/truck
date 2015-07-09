$(function(){
    $(".addScore").Validform();
    var count = 0;
    $('input[type=radio]').change(function(event){
        var score = $(event.target).data('score');
        $(event.target).parents('.form-horizontal').data('score',score);
        // var fScore=$(event.target).parents('.form-group').data('score');
    })
    $('.sub_btn').click(function(){
        var array = {}
        $('.form-horizontal').each(function(){
            var score = $(this).data('score');
            var name = $(this).data('name');
            if(!score){
                console.log('不存在score');
            }else{
                array[name] = score;
            }
        })
        console.log(array);
        // var temp = 0;
        // for(var i=0;i<array.length;i++){
        //     temp += array[i];
        // }
        // console.log(temp);
        // alert('分数为：'+temp);
    })
})
