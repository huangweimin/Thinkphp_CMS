
// 侧边菜单 - 动态高亮
var _url = window.location.href;
$('.sidebar-nav a').each(function(){
    var _href = $(this).data('href');
    if(_url.indexOf(_href) > 0){
        $(this).addClass('active')
    }
})