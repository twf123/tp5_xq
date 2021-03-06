<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:68:"D:\www\tp\public/../application/admin/view/default/repair\index.html";i:1526201156;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>报修列表|TwoThink管理平台</title>
    <link href="/public/favicon.ico" type="image/x-icon" rel="shortcut icon">
    <link rel="stylesheet" type="text/css" href="/static/admin/css/base.css" media="all">
    <link rel="stylesheet" type="text/css" href="/static/admin/css/common.css" media="all">
    <link rel="stylesheet" type="text/css" href="/static/admin/css/module.css">
    <link rel="stylesheet" type="text/css" href="/static/admin/css/style.css" media="all">
    <link rel="stylesheet" type="text/css" href="/static/admin/css/default_color.css" media="all">
    <!--[if lt IE 9]>
    <script type="text/javascript" src="/static/static/jquery-1.10.2.min.js"></script>
    <![endif]--><!--[if gte IE 9]><!-->
    <script type="text/javascript" src="/static/static/jquery-2.0.3.min.js"></script>
    <script type="text/javascript" src="/static/admin/js/jquery.mousewheel.js"></script>
    <!--<![endif]-->

</head>
<body style="">
<!-- 头部 -->
<div class="header">
    <!-- Logo -->
    <span class="logo"></span>
    <!-- /Logo -->

    <!-- 主导航 -->
    <ul class="main-nav">
        <li class="current"><a href="/admin/ticket/index.html">物业管理</a></li>
        <li class=""><a href="/admin/index/index.html">首页</a></li>
        <li class=""><a href="/admin/article/index.html">内容</a></li>
        <li class=""><a href="/admin/user/index.html">用户</a></li>
        <li class=""><a href="/admin/config/group.html">系统</a></li>
        <li class=""><a href="/admin/addons/index.html">扩展</a></li>
    </ul>
    <!-- /主导航 -->

    <!-- 用户栏 -->
    <div class="user-bar">
        <a href="javascript:;" class="user-entrance"><i class="icon-user"></i></a>
        <ul class="nav-list user-menu hidden">
            <li class="manager">你好，<em title="admin">admin</em></li>
            <li><a onclick="go_home();">前台首页</a></li>
            <li><a href="/admin/user/updatepassword.html">修改密码</a></li>
            <li><a href="/admin/user/updatenickname.html">修改昵称</a></li>
            <li><a href="/admin/admin/delcache.html">更新缓存</a></li>
            <li><a href="/admin/publics/logout.html">退出</a></li>
        </ul>
    </div>
</div>
<!-- /头部 -->

<!-- 边栏 -->
<div class="sidebar">
    <!-- 子导航 -->

    <div id="subnav" class="subnav">
        <!-- 子导航 -->
        <h3><i class="icon icon-unfold"></i>物业管理</h3>                        <ul class="side-sub-menu">
        <li class="current">
            <a class="item" href="/admin/ticket/index.html">报修管理</a>
        </li>
        <li>
            <a class="item" href="/admin/house/index.html">小区租售</a>
        </li>
        <li>
            <a class="item" href="/admin/owner/index.html">业主认证</a>
        </li>
        <li>
            <a class="item" href="/admin/about/index.html">关于我们</a>
        </li>
    </ul>
        <!-- /子导航 -->
        <!-- 子导航 -->
        <h3><i class="icon icon-unfold"></i>报修管理</h3>                        <ul class="side-sub-menu">
        <li>
            <a class="item" href="/admin/ticket/123.html">123</a>
        </li>
    </ul>
        <!-- /子导航 -->
    </div>

    <!-- /子导航 -->
</div>
<!-- /边栏 -->

<!-- 内容区 -->
<div id="main-content">
    <div id="top-alert" class="fixed alert alert-error" style="display: none;">
        <button class="close fixed" style="margin-top: 4px;">×</button>
        <div class="alert-content">这是内容</div>
    </div>
    <div id="main" class="main" style="min-height: 1992px;">

        <!-- nav -->
        <!-- nav -->



        <div class="main-title">
            <h2>报修管理</h2>
        </div>

        <div class="cf">
            <a class="btn" href="/admin/repair/add">新 增</a>
            <button class="btn ajax-post confirm" url="/admin/ticket/del.html" target-form="ids">删 除</button>
        </div>

        <div class="data-table table-striped">
            <form class="ids">
                <table>
                    <thead>
                    <tr>
                        <th class="row-selected">
                            <input class="checkbox check-all" type="checkbox">
                        </th>
                        <th>ID</th>
                        <th>报修标题</th>
                        <th>报修人</th>
                        <th>报修人电话</th>
                        <th>报修人地址</th>
                        <th>报修内容</th>
                        <th>报修时间</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if(!(empty($list) || (($list instanceof \think\Collection || $list instanceof \think\Paginator ) && $list->isEmpty()))): if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$repair): $mod = ($i % 2 );++$i;?>
                    <tr>
                        <td><input class="ids row-selected" type="checkbox" name="" id="" value="<?php echo $repair['id']; ?>"> </td>
                        <td><?php echo $repair['id']; ?></td>
                        <td><a href="<?php echo url('index?pid='.$repair['id']); ?>"><?php echo $repair['title']; ?></a></td>
                        <td><?php echo $repair['name']; ?></td>
                        <td><?php echo $repair['tel']; ?></td>
                        <td><?php echo $repair['address']; ?></td>
                        <td><?php echo $repair['content']; ?></td>
                        <td><?php echo $repair['time']; ?></td>
                        <td>
                            <a title="编辑" href="<?php echo url('edit?id='.$repair['id'].'&pid='.$pid); ?>">编辑</a>
                            <a href="<?php echo url('setStatus?ids='.$repair['id'].'&status='.abs(1-$repair['status'])); ?>" class="ajax-get"><?php echo show_status_op($channel['status']); ?></a>
                            <a class="confirm ajax-get" title="删除" href="<?php echo url('del?id='.$repair['id']); ?>">删除</a>
                        </td>
                    </tr>
                    <?php endforeach; endif; else: echo "" ;endif; else: ?>
                    <td colspan="6" class="text-center"> aOh! 暂时还没有内容! </td>
                    <?php endif; ?>
                    </tbody>
                </table>
        <div class="page">
            <ul>
                <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$repair): $mod = ($i % 2 );++$i;endforeach; endif; else: echo "" ;endif; ?>
            </ul>
            <?php echo $list->render(); ?>
        </div>
    </div>
</div>
<!-- /内容区 -->
<script type="text/javascript">
    (function(){
        var ThinkPHP = window.Think = {
            "ROOT"   : "", //当前网站地址
            "APP"    : "__APP__", //当前项目地址
            "PUBLIC" : "/static", //项目公共目录地址
            "DEEP"   : "/", //PATHINFO分割符
            "MODEL"  : ["3", "1", "html"],//config('URL_MODEL')
            "VAR"    : ["admin", "Index", "index"]
        }
    })();
</script>
<script type="text/javascript" src="/static/static/think.js"></script>
<script type="text/javascript" src="/static/admin/js/common.js"></script>
<script type="text/javascript">
    +function(){
        var $window = $(window), $subnav = $("#subnav"), url;
        $window.resize(function(){
            $("#main").css("min-height", $window.height() - 130);
        }).resize();

        /* 左边菜单高亮 */
        url = window.location.pathname + window.location.search;
        url = url.replace(/(\/(p)\/\d+)|(&p=\d+)|(\/(id)\/\d+)|(&id=\d+)|(\/(group)\/\d+)|(&group=\d+)/, "");
        $subnav.find("a[href='" + url + "']").parent().addClass("current");

        /* 左边菜单显示收起 */
        $("#subnav").on("click", "h3", function(){
            var $this = $(this);
            $this.find(".icon").toggleClass("icon-fold");
            $this.next().slideToggle("fast").siblings(".side-sub-menu:visible").
            prev("h3").find("i").addClass("icon-fold").end().end().hide();
        });

        $("#subnav h3 a").click(function(e){e.stopPropagation()});

        /* 头部管理员菜单 */
        $(".user-bar").mouseenter(function(){
            var userMenu = $(this).children(".user-menu ");
            userMenu.removeClass("hidden");
            clearTimeout(userMenu.data("timeout"));
        }).mouseleave(function(){
            var userMenu = $(this).children(".user-menu");
            userMenu.data("timeout") && clearTimeout(userMenu.data("timeout"));
            userMenu.data("timeout", setTimeout(function(){userMenu.addClass("hidden")}, 100));
        });

        /* 表单获取焦点变色 */
        $("form").on("focus", "input", function(){
            $(this).addClass('focus');
        }).on("blur","input",function(){
            $(this).removeClass('focus');
        });
        $("form").on("focus", "textarea", function(){
            $(this).closest('label').addClass('focus');
        }).on("blur","textarea",function(){
            $(this).closest('label').removeClass('focus');
        });

        // 导航栏超出窗口高度后的模拟滚动条
        var sHeight = $(".sidebar").height();
        var subHeight  = $(".subnav").height();
        var diff = subHeight - sHeight; //250
        var sub = $(".subnav");
        if(diff > 0){
            $(window).mousewheel(function(event, delta){
                if(delta>0){
                    if(parseInt(sub.css('marginTop'))>-10){
                        sub.css('marginTop','0px');
                    }else{
                        sub.css('marginTop','+='+10);
                    }
                }else{
                    if(parseInt(sub.css('marginTop'))<'-'+(diff-10)){
                        sub.css('marginTop','-'+(diff-10));
                    }else{
                        sub.css('marginTop','-='+10);
                    }
                }
            });
        }
    }();
    function go_home() {
        window.open("/");
    }
</script>

<script type="text/javascript">
    $(function() {
        //点击排序
        $('.list_sort').click(function(){
            var url = $(this).attr('url');
            var ids = $('.ids:checked');
            var param = '';
            if(ids.length > 0){
                var str = new Array();
                ids.each(function(){
                    str.push($(this).val());
                });
                param = str.join(',');
            }

            if(url != undefined && url != ''){
                window.location.href = url + '/ids/' + param;
            }
        });
    });
</script>



</body></html>