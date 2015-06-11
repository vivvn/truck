/*在validform的基础上对alert进行调整*/
function showMsg(msg,url){
    var left=($(window).width()-$('#Validform_msg').width())/2;
    var top=($(window).height()-$('#Validform_msg').height())/2;
    top=(document.documentElement.scrollTop?document.documentElement.scrollTop:document.body.scrollTop)+(top>0?top:0);
    $('#Validform_msg').css({
            "left":left
    }).show().animate({
            top:top
    },100).find(".Validform_info").text(msg);
    $('.Validform_close').click(function(){
        console.log(url);
        console.log(arguments[1]);
        if(!!url){
            var regUrl = /(http|https):\/\/[\w\-_]+(\.[\w\-_]+)+([\w\-\.,@?^=%&amp;:/~\+#]*[\w\-\@?^=%&amp;/~\+#])?/;
            if(regUrl.test(url)){
                location.href = url;
            }
        }
    });
    $(window).bind("scroll resize",function(){
        var left=($(window).width()-$('#Validform_msg').width())/2,
            top=($(window).height()-$('#Validform_msg').height())/2,
            topTo=(document.documentElement.scrollTop?document.documentElement.scrollTop:document.body.scrollTop)+(top>0?top:0);

        $('#Validform_msg').animate({
            left : left,
            top : topTo
        },{ duration:400 , queue:false });
    });
}
// 获取url参数
function getQueryString(win){
    var win = win || window,
        qs = win.location.search.length > 0 ? win.location.search.substring(1) : '',
        args = {},
        items = qs.length ? qs.split('&') : '',
        len = items.length,
        i = 0,
        item = null,
        name = null,
        value = null;
    for(i=0;i<len;i++){
        item = items[i].split('=');
        name = decodeURIComponent(item[0]);
        value = decodeURIComponent(item[1]);
        args[name] = value;
    }
    return args;
}
