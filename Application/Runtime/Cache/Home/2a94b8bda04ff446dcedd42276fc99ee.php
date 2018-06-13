<?php if (!defined('THINK_PATH')) exit();?><html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>ThinkPHP web</title>

        <link type="text/css" rel="stylesheet" href="http://cdn.amazeui.org/amazeui/2.7.2/css/amazeui.css"/>
        <link type="text/css" rel="stylesheet" href="http://cdn.amazeui.org/amazeui/2.7.2/css/amazeui.min.css"/>
        <link type="text/css" rel="stylesheet" href="/Public/home/css/common.css"/>
        <link type="text/css" rel="stylesheet" href="/Public/home/css/amazeui.swiper.css"/>

    <body>

    <header class="am-topbar">
        <h1 class="am-topbar-brand">
            <a href="#">Amaze UI</a>
        </h1>
        
        <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#doc-topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>
        
        <div class="am-collapse am-topbar-collapse" id="doc-topbar-collapse">
            <ul class="am-nav am-nav-pills am-topbar-nav">
            <li class="am-active" data-class="Index"><a href="/">首页</a></li>
            <li data-class="About"><a href="/Home/About/index">公司简介</a></li>
            <li data-class="News"><a href="/Home/News/index">新闻中心</a></li>
            <li class="am-dropdown" data-am-dropdown data-class="Product">
                <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
                    产品中心 <span class="am-icon-caret-down"></span>
                </a>
                <ul class="am-dropdown-content">
                <li class="am-dropdown-header">标题</li>
                <li><a href="#">太阳能</a></li>
                <li><a href="#">空气能</a></li>
                </ul>
            </li>
            </ul>
        
            <form class="am-topbar-form am-topbar-left am-form-inline" role="search">
            <div class="am-form-group">
                <input type="text" class="am-form-field am-input-sm" placeholder="搜索">
            </div>
            </form>
        
        </div>
    </header>
      

<div class="swiper-container demo" id="demo2">
  <div class="swiper-wrapper">
    <div class="swiper-slide">Slide 1</div>
    <div class="swiper-slide">Slide 2</div>
  </div>
  <!-- Add Pagination -->
  <div class="swiper-pagination"></div>
</div>

<div class="am-container">
  <div class="am-g">
    <div class="am-u-sm-6">
    	  <div data-am-widget="list_news" class="am-list-news am-list-news-default" >
		  <!--列表标题-->
		    <div class="am-list-news-hd am-cf">
		       <!--带更多链接-->
		        <a href="###" class="">
		          <h2>栏目标题</h2>
		        </a>
		          </div>

		  <div class="am-list-news-bd">
		  <ul class="am-list">

		      <li class="am-g">
		          <a href="http://www.douban.com/online/11614662/" class="am-list-item-hd ">我很囧，你保重....晒晒旅行中的那些囧！</a>
		      </li>
		      <li class="am-g">
		          <a href="http://www.douban.com/online/11624755/" class="am-list-item-hd ">我最喜欢的一张画</a>
		      </li>
		      <li class="am-g">
		          <a href="http://www.douban.com/online/11645411/" class="am-list-item-hd ">“你的旅行，是什么颜色？” 晒照片，换北欧梦幻极光之旅！</a>
		      </li>
		  </ul>
		  </div>
		  <!--更多在底部-->
		      <div class="am-list-news-ft">
		        <a class="am-list-news-more am-btn am-btn-default " href="###">查看更多 &raquo;</a>
		      </div>
		  </div>

    </div>
    <div class="am-u-sm-6">
    	
    	<div data-am-widget="list_news" class="am-list-news am-list-news-default" >
		  <!--列表标题-->
		    <div class="am-list-news-hd am-cf">
		       <!--带更多链接-->
		        <a href="###" class="">
		          <h2>栏目标题</h2>
		        </a>
		          </div>

		  <div class="am-list-news-bd">
		  <ul class="am-list">

		      <li class="am-g">
		          <a href="http://www.douban.com/online/11614662/" class="am-list-item-hd ">我很囧，你保重....晒晒旅行中的那些囧！</a>
		      </li>
		      <li class="am-g">
		          <a href="http://www.douban.com/online/11624755/" class="am-list-item-hd ">我最喜欢的一张画</a>
		      </li>
		      <li class="am-g">
		          <a href="http://www.douban.com/online/11645411/" class="am-list-item-hd ">“你的旅行，是什么颜色？” 晒照片，换北欧梦幻极光之旅！</a>
		      </li>
		  </ul>
		  </div>
		  <!--更多在底部-->
		      <div class="am-list-news-ft">
		        <a class="am-list-news-more am-btn am-btn-default " href="###">查看更多 &raquo;</a>
		      </div>
		  </div>

    </div>
  </div>
</div>

<div class="am-container">
  <div class="am-g">
    <div class="am-u-sm-12">
	  <ul data-am-widget="gallery" class="am-gallery am-avg-sm-2
	  am-avg-md-3 am-avg-lg-4 am-gallery-default" data-am-gallery="{ pureview: true }" >
	      <li>
	        <div class="am-gallery-item">
	            <a href="http://s.amazeui.org/media/i/demos/bing-1.jpg" class="">
	              <img src="http://s.amazeui.org/media/i/demos/bing-1.jpg"  alt="远方 有一个地方 那里种有我们的梦想"/>
	                <h3 class="am-gallery-title">远方 有一个地方 那里种有我们的梦想</h3>
	                <div class="am-gallery-desc">2375-09-26</div>
	            </a>
	        </div>
	      </li>
	      <li>
	        <div class="am-gallery-item">
	            <a href="http://s.amazeui.org/media/i/demos/bing-2.jpg" class="">
	              <img src="http://s.amazeui.org/media/i/demos/bing-2.jpg"  alt="某天 也许会相遇 相遇在这个好地方"/>
	                <h3 class="am-gallery-title">某天 也许会相遇 相遇在这个好地方</h3>
	                <div class="am-gallery-desc">2375-09-26</div>
	            </a>
	        </div>
	      </li>
	      <li>
	        <div class="am-gallery-item">
	            <a href="http://s.amazeui.org/media/i/demos/bing-3.jpg" class="">
	              <img src="http://s.amazeui.org/media/i/demos/bing-3.jpg"  alt="不要太担心 只因为我相信"/>
	                <h3 class="am-gallery-title">不要太担心 只因为我相信</h3>
	                <div class="am-gallery-desc">2375-09-26</div>
	            </a>
	        </div>
	      </li>
	      <li>
	        <div class="am-gallery-item">
	            <a href="http://s.amazeui.org/media/i/demos/bing-4.jpg" class="">
	              <img src="http://s.amazeui.org/media/i/demos/bing-4.jpg"  alt="终会走过这条遥远的道路"/>
	                <h3 class="am-gallery-title">终会走过这条遥远的道路</h3>
	                <div class="am-gallery-desc">2375-09-26</div>
	            </a>
	        </div>
	      </li>
	  </ul>

	</div>
  </div>
</div>	


  <footer data-am-widget="footer"
          class="am-footer am-footer-default"
           data-am-footer="{  }">
    <div class="am-footer-switch">
    <span class="am-footer-ysp" data-rel="mobile"
          data-am-modal="{target: '#am-switch-mode'}">
          云适配版
    </span>
      <span class="am-footer-divider"> | </span>
      <a id="godesktop" data-rel="desktop" class="am-footer-desktop" href="javascript:">
          电脑版
      </a>
    </div>
    <div class="am-footer-miscs ">

          <p>由 <a href="http://www.yunshipei.com/" title="诺亚方舟"
			target="_blank" class="">诺亚方舟</a>
            提供技术支持</p>
        <p>CopyRight©2014  AllMobilize Inc.</p>
        <p>京ICP备13033158</p>
    </div>
  </footer>

  <div id="am-footer-modal"
       class="am-modal am-modal-no-btn am-switch-mode-m am-switch-mode-m-default">
    <div class="am-modal-dialog">
      <div class="am-modal-hd am-modal-footer-hd">
        <a href="javascript:void(0)" data-dismiss="modal" class="am-close am-close-spin " data-am-modal-close>&times;</a>
      </div>
      <div class="am-modal-bd">
          您正在浏览的是

        <span class="am-switch-mode-owner">
            云适配
        </span>

        <span class="am-switch-mode-slogan">
              为您当前手机订制的移动网站。
        </span>
      </div>
    </div>
  </div>

  <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
<script src="http://cdn.amazeui.org/amazeui/2.7.2/js/amazeui.min.js"></script>
<script src="http://cdn.amazeui.org/amazeui/2.7.2/js/amazeui.ie8polyfill.min.js"></script>
<script src="http://cdn.amazeui.org/amazeui/2.7.2/js/amazeui.widgets.helper.min.js"></script>
<script src="/Public/home/js/amazeui.swiper.js"></script>
<script src="/Public/home/js/common.js"></script>

</body>
</html>

<script type="text/javascript">
$('#demo2').swiper({
	pagination: '#demo2 .swiper-pagination',
	paginationClickable: true
});
</script>