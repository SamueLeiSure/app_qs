<!doctype html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <title>QS Media</title>

  <!-- Set render engine for 360 browser -->
  <meta name="renderer" content="webkit">

  <!-- No Baidu Siteapp-->
  <meta http-equiv="Cache-Control" content="no-siteapp"/>

  <link rel="icon" type="image/png" href="/assets/i/favicon.png">

  <!-- Add to homescreen for Chrome on Android -->
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="icon" sizes="192x192" href="/assets/i/app-icon72x72@2x.png">

  <!-- Add to homescreen for Safari on iOS -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-title" content="Amaze UI"/>
  <link rel="apple-touch-icon-precomposed" href="/assets/i/app-icon72x72@2x.png">

  <!-- Tile icon for Win8 (144x144 + tile color) -->
  <meta name="msapplication-TileImage" content="/assets/i/app-icon72x72@2x.png">
  <meta name="msapplication-TileColor" content="#0e90d2">

  <!-- Amaze UI CSS -->
  <link rel="stylesheet" href="/assets/css/amazeui.min.css">
  <link rel="stylesheet" href="/assets/css/app.css">
</head>
<body>

<header data-am-widget="header" class="am-header am-header-default">
    <h1 class="am-header-title">
        <a href="#">QS Media</a>
    </h1>
</header>

<nav data-am-widget="menu" class="am-menu am-menu-offcanvas1" data-am-menu-offcanvas>
    <a href="javascript:void(0)" class="am-menu-toggle">
        <i class="am-menu-toggle-icon am-icon-bars"></i>
    </a>
    <div class="am-offcanvas">
        <div class="am-offcanvas-bar">
            <ul class="am-menu-nav sm-block-grid-1">
                <li class="am-parent">
                    <a href="#">联系我们</a>
                    <ul class="am-menu-sub am-collapse sm-block-grid-2">
                        <li class=""><a href="#">运营团队</a></li>
                        <li class=""><a href="#">开发团队</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

@yield('content')

<footer>
    <hr/>
    <p class="am-text-center">
    <small>by SamueL_eisure.</small>
  </p>
</footer>

<!--[if lt IE 9]>
<script src="//libs.useso.com/js/jquery/1.11.1/jquery.min.js"></script>
<script src="//cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="/js/polyfill/rem.min.js"></script>
<script src="//libs.useso.com/js/respond.js/1.4.2/respond.min.js"></script>
<script src="//cdn.amazeui.org/amazeui/2.1.0/js/amazeui.legacy.min.js"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/amazeui.min.js"></script>
<!--<![endif]-->

</body>
</html>