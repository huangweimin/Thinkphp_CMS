<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ThinkPHP Admin</title>
    <meta name="description" content="这是一个 index 页面">
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="icon" type="image/png" href="assets/i/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="assets/i/app-icon72x72@2x.png">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <script src="/Public/admin/assets/js/echarts.min.js"></script>
    <link rel="stylesheet" href="/Public/admin/assets/css/amazeui.min.css" />
    <link rel="stylesheet" href="/Public/admin/assets/css/amazeui.datatables.min.css" />
    <link rel="stylesheet" href="/Public/admin/assets/css/dataTables.bootstrap.css" />
    <link rel="stylesheet" href="/Public/admin/assets/css/app.css">
    <script src="/Public/admin/assets/js/jquery.min.js"></script>
    <script src="/Public/admin/assets/js/theme.js"></script>


</head>

<body data-type="widgets" class="theme-white">

        <div class="am-g tpl-g">
        <!-- 头部 -->
        <header>
            <!-- logo -->
            <div class="am-fl tpl-header-logo">
                <a href="javascript:;"><img src="/Public/admin/assets/img/logo.png" alt=""></a>
            </div>
            <!-- 右侧内容 -->
            <div class="tpl-header-fluid">
                <!-- 侧边切换 -->
                <div class="am-fl tpl-header-switch-button am-icon-list">
                    <span>

                </span>
                </div>
                <!-- 搜索 -->
                <div class="am-fl tpl-header-search">
                    <form class="tpl-header-search-form" action="javascript:;">
                        <button class="tpl-header-search-btn am-icon-search"></button>
                        <input class="tpl-header-search-box" type="text" placeholder="搜索内容...">
                    </form>
                </div>
                <!-- 其它功能-->
                <div class="am-fr tpl-header-navbar">
                    <ul>
                        <!-- 欢迎语 -->
                        <li class="am-text-sm tpl-header-navbar-welcome">
                            <a href="javascript:;">欢迎你, <span>Amaze UI</span> </a>
                        </li>

                        <!-- 新邮件 -->
                        <li class="am-dropdown tpl-dropdown" data-am-dropdown>
                            <a href="javascript:;" class="am-dropdown-toggle tpl-dropdown-toggle" data-am-dropdown-toggle>
                                <i class="am-icon-envelope"></i>
                                <span class="am-badge am-badge-success am-round item-feed-badge">4</span>
                            </a>
                            <!-- 弹出列表 -->
                            <ul class="am-dropdown-content tpl-dropdown-content">
                                <li class="tpl-dropdown-menu-messages">
                                    <a href="javascript:;" class="tpl-dropdown-menu-messages-item am-cf">
                                        <div class="menu-messages-ico">
                                            <img src="/Public/admin/assets/img/user04.png" alt="">
                                        </div>
                                        <div class="menu-messages-time">
                                            3小时前
                                        </div>
                                        <div class="menu-messages-content">
                                            <div class="menu-messages-content-title">
                                                <i class="am-icon-circle-o am-text-success"></i>
                                                <span>夕风色</span>
                                            </div>
                                            <div class="am-text-truncate"> Amaze UI 的诞生，依托于 GitHub 及其他技术社区上一些优秀的资源；Amaze UI 的成长，则离不开用户的支持。 </div>
                                            <div class="menu-messages-content-time">2016-09-21 下午 16:40</div>
                                        </div>
                                    </a>
                                </li>

                                <li class="tpl-dropdown-menu-messages">
                                    <a href="javascript:;" class="tpl-dropdown-menu-messages-item am-cf">
                                        <div class="menu-messages-ico">
                                            <img src="/Public/admin/assets/img/user02.png" alt="">
                                        </div>
                                        <div class="menu-messages-time">
                                            5天前
                                        </div>
                                        <div class="menu-messages-content">
                                            <div class="menu-messages-content-title">
                                                <i class="am-icon-circle-o am-text-warning"></i>
                                                <span>斯迈欧</span>
                                            </div>
                                            <div class="am-text-truncate"> 为了能最准确的传达所描述的问题， 建议你在反馈时附上演示，方便我们理解。 </div>
                                            <div class="menu-messages-content-time">2016-09-16 上午 09:23</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="tpl-dropdown-menu-messages">
                                    <a href="javascript:;" class="tpl-dropdown-menu-messages-item am-cf">
                                        <i class="am-icon-circle-o"></i> 进入列表…
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- 新提示 -->
                        <li class="am-dropdown" data-am-dropdown>
                            <a href="javascript:;" class="am-dropdown-toggle" data-am-dropdown-toggle>
                                <i class="am-icon-bell"></i>
                                <span class="am-badge am-badge-warning am-round item-feed-badge">5</span>
                            </a>

                            <!-- 弹出列表 -->
                            <ul class="am-dropdown-content tpl-dropdown-content">
                                <li class="tpl-dropdown-menu-notifications">
                                    <a href="javascript:;" class="tpl-dropdown-menu-notifications-item am-cf">
                                        <div class="tpl-dropdown-menu-notifications-title">
                                            <i class="am-icon-line-chart"></i>
                                            <span> 有6笔新的销售订单</span>
                                        </div>
                                        <div class="tpl-dropdown-menu-notifications-time">
                                            12分钟前
                                        </div>
                                    </a>
                                </li>
                                <li class="tpl-dropdown-menu-notifications">
                                    <a href="javascript:;" class="tpl-dropdown-menu-notifications-item am-cf">
                                        <div class="tpl-dropdown-menu-notifications-title">
                                            <i class="am-icon-star"></i>
                                            <span> 有3个来自人事部的消息</span>
                                        </div>
                                        <div class="tpl-dropdown-menu-notifications-time">
                                            30分钟前
                                        </div>
                                    </a>
                                </li>
                                <li class="tpl-dropdown-menu-notifications">
                                    <a href="javascript:;" class="tpl-dropdown-menu-notifications-item am-cf">
                                        <i class="am-icon-bell"></i> 进入列表…
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- 退出 -->
                        <li class="am-text-sm">
                            <a href="javascript:;">
                                <span class="am-icon-sign-out"></span> 退出
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </header>
        <!-- 风格切换 -->
        <div class="tpl-skiner">
            <div class="tpl-skiner-toggle am-icon-cog">
            </div>
            <div class="tpl-skiner-content">
                <div class="tpl-skiner-content-title">
                    选择主题
                </div>
                <div class="tpl-skiner-content-bar">
                    <span class="skiner-color skiner-white" data-color="theme-white"></span>
                    <span class="skiner-color skiner-black" data-color="theme-black"></span>
                </div>
            </div>
        </div>
        <!-- 侧边导航栏 -->
        <div class="left-sidebar">
            <!-- 用户信息 -->
            <div class="tpl-sidebar-user-panel">
                <div class="tpl-user-panel-slide-toggleable">
                    <div class="tpl-user-panel-profile-picture">
                        <img src="/Public/admin/assets/img/user04.png" alt="">
                    </div>
                    <span class="user-panel-logged-in-text">
              <i class="am-icon-circle-o am-text-success tpl-user-panel-status-icon"></i>
              斯迈欧
          </span>
                    <a href="javascript:;" class="tpl-user-panel-action-link"> <span class="am-icon-pencil"></span> 账号设置</a>
                </div>
            </div>

            <!-- 菜单 -->
            <ul class="sidebar-nav">
                <li class="sidebar-nav-link">
                    <a href="/Admin/Index/index" data-href="Indx">
                        <i class="am-icon-home sidebar-nav-link-logo"></i> 首页
                    </a>
                </li>
                <li class="sidebar-nav-link">
                    <a href="/Admin/News/index" data-href="News">
                        <i class="am-icon-wpforms sidebar-nav-link-logo"></i> 新闻
                    </a>
                </li>
                <li class="sidebar-nav-link">
                    <a href="/Admin/Cases/index" data-href="Cases">
                        <i class="am-icon-wpforms sidebar-nav-link-logo"></i> 案例
                    </a>
                </li>

            </ul>
        </div>



    <link rel="stylesheet" href="/Public/admin/kindeditor/themes/default/default.css">
    <script src="/Public/admin/kindeditor/kindeditor-all.js"></script>
    <script src="/Public/admin/kindeditor/lang/zh-CN.js"></script>

   <!-- 内容区域 -->
    <div class="tpl-content-wrapper">

        <div class="row-content am-cf">

            <div class="row">

                <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                    <div class="widget am-cf">
                        <div class="widget-head am-cf">
                            <div class="widget-title am-fl"><?php echo ($title); ?></div>
                            <div class="widget-function am-fr">
                                <a href="javascript:;" class="am-icon-cog"></a>
                            </div>
                        </div>
                        <div class="widget-body am-fr">

                            <form class="am-form tpl-form-border-form tpl-form-border-br">
                                <div class="am-form-group">
                                    <label for="title" class="am-u-sm-3 am-form-label">标题 <span class="tpl-form-line-small-title">Title</span></label>
                                    <div class="am-u-sm-9">
                                        <input type="text" class="tpl-form-input" id="title" placeholder="请输入标题文字" value="<?php echo ($cases_detail["title"]); ?>">
                                        <small>请填写标题文字10-20字左右。</small>
                                    </div>
                                </div>

                                 <div class="am-form-group">
                                    <label for="desc" class="am-u-sm-3 am-form-label">简介<span class="tpl-form-line-small-title">Desc</span></label>
                                    <div class="am-u-sm-9">
                                        <textarea class="" rows="4" id="desc" placeholder="请输入简介"><?php echo ($cases_detail["desc"]); ?></textarea>
                                    </div>
                                </div>

                                <div class="am-form-group">
                                        <label for="user-weibo" class="am-u-sm-3 am-form-label">封面图 <span class="tpl-form-line-small-title">Images</span></label>
                                        <div class="am-u-sm-9">
                                            <div class="am-form-group am-form-file">
                                                <div class="tpl-form-file-img">
                                                    <img src="/Uploads/<?php echo ($cases_detail["cover"]); ?>" alt="">
                                                </div>
                                                <button type="button" class="am-btn am-btn-danger am-btn-sm">
                                                    <i class="am-icon-cloud-upload "></i> 添加封面图片</button>
                                                <input id="file_upload" type="file" multiple="" name="file_upload">
                                            </div>

                                        </div>
                                    </div>

                                <div class="am-form-group">
                                    <label for="user-intro" class="am-u-sm-3 am-form-label">是否显示<span class="tpl-form-line-small-title">IsShow</span></label>
                                    <div class="am-u-sm-9">
                                        <div class="tpl-switch">
                                            <input type="checkbox" class="ios-switch bigswitch tpl-switch-btn" checked="" id="is_show">
                                            <div class="tpl-switch-btn-view">
                                                <div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="content" class="am-u-sm-3 am-form-label">详细内容<span class="tpl-form-line-small-title">Content</span></label>
                                    <div class="am-u-sm-9">
                                        <textarea class="" rows="10" id="content"  placeholder="请输入文章内容"><?php echo ($cases_detail["content"]); ?></textarea>
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <div class="am-u-sm-9 am-u-sm-push-3">
                                        <button type="button" class="am-btn am-btn-primary tpl-btn-bg-color-success j-submit">提交</button>
                                        <button type="button" class="am-btn am-btn-default "  onclick="window.location.href='index'">取消</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        
           var editor; 

             KindEditor.ready(function(K) { 

             editor = K.create('#content', { 

                    allowFileManager : true,

                     uploadJson:'<?php echo U("fileUpload");?>', //上传控制器所在url

                 afterBlur: function(){this.sync();}

                }); 

            }); 

    </script>

    <script type="text/javascript">
        $(function(){

            var _this = this;

            var _img_path = ''

            // 获取案例ID 
             var _search = window.location.search;

             var _page_id = ''

            if (_search.indexOf('?id') != -1){

                _page_id = _search.split('id=')[1];

            }

            //还原值
            var $cases_detail = <?php echo (json_encode($cases_detail )); ?>

            if($cases_detail) {
                
                if($cases_detail.is_show == 0) {

                    $("#is_show").attr('checked',false)

                }

            }   
            

            // 提交
            $('.j-submit').on('click',function(){

                var is_show = $('.tpl-switch-btn').is(":checked") ? 1 : 0;

                if(!$('#title').val()){

                    alert('标题不能为空！')

                    return false

                }
                
                var param = {

                     title : $('#title').val(),

                     desc : $('#desc').val(),

                     cover : _this._img_path,

                     is_show : is_show,

                     content : $('#content').val()

                }

                if (!_page_id) {

                     param = $.extend(param,{
                       
                        do : 'create'
                 
                    })

                } else {

                    param = $.extend(param,{
                       
                        do : 'edit',

                        id : _page_id
                 
                    })

                }

                $.ajax({

                    url: "create",

                    data:param,

                    type:'post',

                    success:function(res) {

                        if(res.status == 1){

                            alert("操作成功！")

                            // window.location.href = '<?php echo U("Cases/index");?>';

                        } else {

                            alert(res.data)

                        }

                    }

                });


            })

            // 上传图片
            file_upload.onchange = function(e){

                var files = this.files

                var data = new FormData();

                for (var i = 0; i < files.length; i++) {

                    data.append('file[]', files[i]);

                }

                $.ajax({

                    url: "uploadImg",

                    data: data,

                    type:'post',

                    cache: false,

                    contentType: false,

                    processData: false,

                    success:function(res) {

                        if(res) {

                            _this._img_path = res

                        }

                    }

                });

            }

        })

    </script>


     
    </div>
    </div>

      <script src="/Public/admin/assets/js/amazeui.min.js"></script>
    <script src="/Public/admin/assets/js/amazeui.datatables.min.js"></script>
    <script src="/Public/admin/assets/js/dataTables.responsive.min.js"></script>
    <script src="/Public/admin/assets/js/app.js"></script>
    <script src="/Public/admin/assets/js/web.js"></script>
    <script src="/Public/admin/assets/js/dataTables.bootstrap.js"></script>
    <script src="/Public/admin/assets/js/jquery.dataTables.js"></script>

</body>

</html>