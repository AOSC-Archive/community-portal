<?php define('IN_FRAME', true);
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/lang.php';?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no">
    <meta name="description" content="Homepage of Anthon Starter">
    <meta name="author" content="Junde Yi<lmy441900@gmail.com>">
    <link rel="icon" href="/img/favicons/ast.ico">

    <title>Anthon Starter - About</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/blog.css" rel="stylesheet">
    <?php include $_SERVER['DOCUMENT_ROOT'].'/templates/font.php'; ?>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
  <?php
    include $_SERVER['DOCUMENT_ROOT'].'/templates/navgen.php';
    pushNavBar();
    addNavItem('/index.php', '/', $lang, array('en' => 'Portal', 'zh-cn' => '门户', 'zh-tw' => '門戶',), 'major');
    addNavItem('/ast/index.php', '/ast/', $lang, array('en' => 'AST_home', 'zh-cn' => 'AST 主页', 'zh-tw' => 'AST_home',), 'minor');
    addNavItem('/ast/summary/index.php', '/ast/summary/', $lang, array('en' => 'History', 'zh-cn' => '历史', 'zh-tw' => 'History',));
    addNavItem('/ast/screenshot/index.php', '/ast/screenshot/', $lang, array('en' => 'Screenshot', 'zh-cn' => '截图', 'zh-tw' => 'Screenshot',));
    addNavItem('/ast/about/index.php', '/ast/about/', $lang, array('en' => 'About', 'zh-cn' => '关于', 'zh-tw' => 'About',));
    popNavBar();
  ?>
    <div class="container">

      <div class="blog-header">
      <img src="/img/ast.png" height="150" width="150" align=right hspace="40" >
        <h1 class="blog-title">About</h1>
        <p class="lead blog-description">Anthon Starter</p>
      </div>

      <div class="row">

        <div class="col-sm-9 blog-main">

          <div class="blog-post">
            <h2 class="blog-post-title">The Team</h2>
            <br />
            <ul>
              <li>Junde Yi <a href="mailto:lmy441900@gmail.com">lmy441900@gmail.com</a></li>
              <li>Zixing Liu <a href="mailto:liushuyu011@gmail.com">liushuyu011@gmail.com</a></li>
              <li>Nino <a href="mailto:campermsn@gmail.com">campermsn@gmail.com</a></li>
              <li>Minhui Du <a href="mailto:duminghui@126.com">duminghui@126.com</a></li>
              <li>Haoming Xu <a href="mailto:18929292333@163.com">18929292333@163.com</a></li>
            </ul>
          </div>

          <div class="blog-post">
            <h2 class="blog-post-title">Thanks ;-)</h2>
            <br />
            <span class="text-success"><b>Anthon Starter won't be in existence without support from our friends.</b></span>
            <p>The dev team of Anthon Starter comes from:
            <ul>
              <li> <a href="https://anthonos.org">AOSC, Anthon Open Source Community</a>；</li>
              <li> IT Club of Dongguan No.1 Middle School;</li>
            </ul>
            <p>Technological support from:
            <br />
            <ul>
              <li> Microsoft Windows (Seriously);</li>
              <li> AOSC Core Team;</li>
            </ul>
            <p>And suggestions from:
            <br />
            <ul>
              <li> ruojiner</li>
              <li> freddy4212</li>
              <li> ...</li>
            </ul>
            Your support pushes us forward.
          </div>

        </div>

      </div><!-- /.row -->

    </div><!-- /.container -->

    <?php include $_SERVER['DOCUMENT_ROOT'].'/templates/footer.php'; ?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/js/jquery-min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
  </body>
</html>
