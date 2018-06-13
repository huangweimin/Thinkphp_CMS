$(function(){

	// 动态高亮莱单
	var _url = window.location.href;
	$('.am-topbar-nav>li').each(function(i,e){
		_class = $(e).data('class')
		console.log(_class)
		if(_url.indexOf(_class) > 0){
			$(e).addClass('am-active').siblings().removeClass('am-active')
		} 
	})

})