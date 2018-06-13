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
      




<div class="am-container">
  	<div class="am-g">
    	<div class="am-u-sm-12">

    		<ol class="am-breadcrumb">
			  <li><a href="#">首页</a></li>
			  <li class="am-active">新闻中心</li>
			</ol>

    	</div>

    	<div class="am-u-sm-3">

    		<ul class="am-nav">
			  <li class="am-active"><a href="#">公司新闻</a></li>
			  <li><a href="#">行业新闻</a></li>
			</ul>

    	</div>

    	<div class="am-u-sm-9">

    		<ul class="am-list">
			  <li><a href="#">每个人都有一个死角， 自己走不出来，别人也闯不进去。</a></li>
			  <li><a href="#">我把最深沉的秘密放在那里。</a></li>
			  <li><a href="#">你不懂我，我不怪你。</a></li>
			  <li><a href="#">每个人都有一道伤口， 或深或浅，盖上布，以为不存在。</a></li>
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