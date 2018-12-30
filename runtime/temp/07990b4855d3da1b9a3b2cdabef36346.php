<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:75:"C:\Users\Administrator\Desktop\file/application/index\view\album\index.html";i:1543742406;s:75:"C:\Users\Administrator\Desktop\file\application\index\view\index\index.html";i:1544326523;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="/public/static/layui/css/layui.css" /><link rel="stylesheet" type="text/css" href="/public/static/blog/css/main.css" />
    <!--加载meta IE兼容文件-->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="header">
    <div class="menu-btn">
        <div class="menu"></div>
    </div>
    <h1 class="logo">
        <a href="index.html">
            <span >MYBLOG</span>
            <img src="/public/static/blog/img/logo.png">
        </a>
    </h1>
    <div class="nav">
        <a href="<?php echo url('index/index'); ?>" class="active">文章</a>
        <a href="<?php echo url('whisper/index'); ?>">微语</a>
        <a href="<?php echo url('leacots/index'); ?>">留言</a>
        <a href="<?php echo url('album/index'); ?>">相册</a>
        <a href="<?php echo url('about/index'); ?>">关于</a>
    </div>
    <ul class="layui-nav header-down-nav">
        <li class="layui-nav-item"><a href="<?php echo url('index/index'); ?>" class="active">文章</a></li>
        <li class="layui-nav-item"><a href="<?php echo url('whisper/index'); ?>">微语</a></li>
        <li class="layui-nav-item"><a href="<?php echo url('leacots/index'); ?>">留言</a></li>
        <li class="layui-nav-item"><a href="<?php echo url('album/index'); ?>">相册</a></li>
        <li class="layui-nav-item"><a href="<?php echo url('about/index'); ?>">关于</a></li>
    </ul>
    <p class="welcome-text">
        欢迎来到<span class="name">小明</span>的博客~
    </p>
</div>

<div class="album-content w1000" id="layer-photos-demo" class="layer-photos-demo">
    <div class="img-info">
        <img src="/public/static/blog/img/xc_img1.jpg" alt="">
        <div class="title">
            <p class="data">今日上传<span>2018/10/10</span></p>
            <p class="text">观赏最美的土耳其的日</p>
        </div>
    </div>
    <div class="img-list">
        <div class="layui-fluid" style="padding:0">
            <div class="layui-row layui-col-space30 space">
                <div class="layui-col-xs12 layui-col-sm4 layui-col-md4">
                    <div class="item">
                        <img src="/public/static/blog/img/xc_img3.jpg">
                        <div class="cont-text">
                            <div class="data">2018/08/08</div>
                            <p class="address"><i class="layui-icon layui-icon-location"></i><span>江西九江</span></p>
                            <p class="briefly">今日天气晴朗,庐山一日游</p>
                        </div>
                    </div>
                </div>
                <div class="layui-col-xs12 layui-col-sm4 layui-col-md4">
                    <div class="item">
                        <img src="/public/static/blog/img/xc_img4.jpg">
                        <div class="cont-text">
                            <div class="data">2018/08/08</div>
                            <p class="address"><i class="layui-icon layui-icon-location"></i><span>江西九江</span></p>
                            <p class="briefly">今日天气晴朗,庐山一日游</p>
                        </div>
                    </div>
                </div>
                <div class="layui-col-xs12 layui-col-sm4 layui-col-md4">
                    <div class="item">
                        <img src="/public/static/blog/img/xc_img5.jpg">
                        <div class="cont-text">
                            <div class="data">2018/08/08</div>
                            <p class="address"><i class="layui-icon layui-icon-location"></i><span>江西九江</span></p>
                            <p class="briefly">今日天气晴朗,庐山一日游</p>
                        </div>
                    </div>
                </div>
                <div class="layui-col-xs12 layui-col-sm4 layui-col-md4">
                    <div class="item">
                        <img src="/public/static/blog/img/xc_img3.jpg">
                        <div class="cont-text">
                            <div class="data">2018/08/08</div>
                            <p class="address"><i class="layui-icon layui-icon-location"></i><span>江西九江</span></p>
                            <p class="briefly">今日天气晴朗,庐山一日游</p>
                        </div>
                    </div>
                </div>
                <div class="layui-col-xs12 layui-col-sm4 layui-col-md4">
                    <div class="item">
                        <img src="/public/static/blog/img/xc_img4.jpg">
                        <div class="cont-text">
                            <div class="data">2018/08/08</div>
                            <p class="address"><i class="layui-icon layui-icon-location"></i><span>江西九江</span></p>
                            <p class="briefly">今日天气晴朗,庐山一日游</p>
                        </div>
                    </div>
                </div>
                <div class="layui-col-xs12 layui-col-sm4 layui-col-md4">
                    <div class="item">
                        <img src="/public/static/blog/img/xc_img5.jpg">
                        <div class="cont-text">
                            <div class="data">2018/08/08</div>
                            <p class="address"><i class="layui-icon layui-icon-location"></i><span>江西九江</span></p>
                            <p class="briefly">今日天气晴朗,庐山一日游</p>
                        </div>
                    </div>
                </div>
                <div class="layui-col-xs12 layui-col-sm4 layui-col-md4">
                    <div class="item">
                        <img src="/public/static/blog/img/xc_img3.jpg">
                        <div class="cont-text">
                            <div class="data">2018/08/08</div>
                            <p class="address"><i class="layui-icon layui-icon-location"></i><span>江西九江</span></p>
                            <p class="briefly">今日天气晴朗,庐山一日游</p>
                        </div>
                    </div>
                </div>
                <div class="layui-col-xs12 layui-col-sm4 layui-col-md4">
                    <div class="item">
                        <img src="/public/static/blog/img/xc_img4.jpg">
                        <div class="cont-text">
                            <div class="data">2018/08/08</div>
                            <p class="address"><i class="layui-icon layui-icon-location"></i><span>江西九江</span></p>
                            <p class="briefly">今日天气晴朗,庐山一日游</p>
                        </div>
                    </div>
                </div>
                <div class="layui-col-xs12 layui-col-sm4 layui-col-md4">
                    <div class="item">
                        <img src="/public/static/blog/img/xc_img5.jpg">
                        <div class="cont-text">
                            <div class="data">2018/08/08</div>
                            <p class="address"><i class="layui-icon layui-icon-location"></i><span>江西九江</span></p>
                            <p class="briefly">今日天气晴朗,庐山一日游</p>
                        </div>
                    </div>
                </div>
                <div class="layui-col-xs12 layui-col-sm4 layui-col-md4">
                    <div class="item">
                        <img src="/public/static/blog/img/xc_img3.jpg">
                        <div class="cont-text">
                            <div class="data">2018/08/08</div>
                            <p class="address"><i class="layui-icon layui-icon-location"></i><span>江西九江</span></p>
                            <p class="briefly">今日天气晴朗,庐山一日游</p>
                        </div>
                    </div>
                </div>
                <div class="layui-col-xs12 layui-col-sm4 layui-col-md4">
                    <div class="item">
                        <img src="/public/static/blog/img/xc_img4.jpg">
                        <div class="cont-text">
                            <div class="data">2018/08/08</div>
                            <p class="address"><i class="layui-icon layui-icon-location"></i><span>江西九江</span></p>
                            <p class="briefly">今日天气晴朗,庐山一日游</p>
                        </div>
                    </div>
                </div>
                <div class="layui-col-xs12 layui-col-sm4 layui-col-md4">
                    <div class="item">
                        <img src="/public/static/blog/img/xc_img5.jpg">
                        <div class="cont-text">
                            <div class="data">2018/08/08</div>
                            <p class="address"><i class="layui-icon layui-icon-location"></i><span>江西九江</span></p>
                            <p class="briefly">今日天气晴朗,庐山一日游</p>
                        </div>
                    </div>
                </div>
                <div class="layui-col-xs12 layui-col-sm4 layui-col-md4">
                    <div class="item">
                        <img src="/public/static/blog/img/xc_img3.jpg">
                        <div class="cont-text">
                            <div class="data">2018/08/08</div>
                            <p class="address"><i class="layui-icon layui-icon-location"></i><span>江西九江</span></p>
                            <p class="briefly">今日天气晴朗,庐山一日游</p>
                        </div>
                    </div>
                </div>
                <div class="layui-col-xs12 layui-col-sm4 layui-col-md4">
                    <div class="item">
                        <img src="/public/static/blog/img/xc_img4.jpg">
                        <div class="cont-text">
                            <div class="data">2018/08/08</div>
                            <p class="address"><i class="layui-icon layui-icon-location"></i><span>江西九江</span></p>
                            <p class="briefly">今日天气晴朗,庐山一日游</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="demo"></div>
    </div>
</div>

<div class="footer-wrap">
    <div class="footer w1000">
        <div class="qrcode">
            <img src="/public/static/blog/img/erweima.jpg">
        </div>
        <div class="practice-mode">
            <img src="/public/static/blog/img/down_img.jpg">
            <div class="text">
                <h4 class="title">我的联系方式</h4>
                <p>微信<span class="WeChat">1234567890</span></p>
                <p>手机<span class="iphone">1234567890</span></p>
                <p>邮箱<span class="email">1234567890@qq.com</span></p>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="/public/static/layui/layui.js"></script>
<script type="text/javascript">
    layui.config({
        base: '/public/static/blog/js/util/'
    }).use(['element', 'laypage', 'jquery', 'menu'], function () {
        element = layui.element, laypage = layui.laypage, $ = layui.$, menu = layui.menu;
        laypage.render({
            elem: 'demo'
            , count: 70 //数据总数，从服务端得到
        });
        menu.init();
    })
</script>
</body>
</html>