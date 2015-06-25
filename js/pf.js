$(function(){
    var count = 0;
    $('input[type=radio]').change(function(event){
        var score = $(event.target).data('score');
        $(event.target).parents('.form-group').data('score',score);
        // var fScore=$(event.target).parents('.form-group').data('score');
    })
    $('.sub_btn').click(function(){
        var array = [];
        $('.form-group').each(function(){
            var score = $(this).data('score');
            if(!score){
                console.log(score);
            }else{
                array.push(score);
            }
        })
        var temp = 0;
        for(var i=0;i<array.length;i++){
            temp += array[i];
        }
        console.log(temp);
        alert('分数为：'+temp)
    })
})
