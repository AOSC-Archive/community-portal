<?php define('IN_FRAME', true);
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/lang.php';?>
<!DOCTYPE html>
<html lang="<?php echo $lang;?>">
  <head>
    <meta name="generator"
    content="HTML Tidy for HTML5 (experimental) for Windows https://github.com/w3c/tidy-html5/tree/c63cc39" />
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no" />
    <meta name="description" content="About Page of AOSC OS" />
    <meta name="author" content="Junde Yi&lt;lmy441900@gmail.com&gt;" />
    <link rel="icon" href="favicon.ico" />
    <title>AOSC OS - About</title>
    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="/css/blog.css" rel="stylesheet" />
    <?php include $_SERVER['DOCUMENT_ROOT'].'/templates/font.php'; ?>
  </head>
  <body>
  <?php
    include $_SERVER['DOCUMENT_ROOT'].'/templates/navgen.php';
    pushNavBar();
    addNavItem('/index.php', '/', $lang, array('en' => 'Portal', 'zh-cn' => '门户', 'zh-tw' => '門戶',), 'major');
    addNavItem('/aosc-os/index.php', '/aosc-os/', $lang, array('en' => 'AOSC_home', 'zh-cn' => 'AOSC 主页', 'zh-tw' => 'AOSC 主頁',), 'minor');
    addNavItem('/aosc-os/downloads/index.php', '/aosc-os/downloads/', $lang, array('en' => 'Downloads', 'zh-cn' => '下载', 'zh-tw' => '下載',));
    addNavItem('/aosc-os/summary/index.php', '/aosc-os/summary/', $lang, array('en' => 'History', 'zh-cn' => '历史', 'zh-tw' => '歷史',));
    addNavItem('/aosc-os/screenshot/index.php', '/aosc-os/screenshot/', $lang, array('en' => 'Screenshot', 'zh-cn' => '截图', 'zh-tw' => '截圖',));
    addNavItem('/aosc-os/about/index.php', '/aosc-os/about/', $lang, array('en' => 'About', 'zh-cn' => '关于', 'zh-tw' => '關於',));
    popNavBar();
  ?>
  <div class="jumbotron">
    <div class="container section-welcome">
      <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
          <div class="col-sm-8 col-xs-12">
            <h1>AOSC OS</h1>
            <p>Her origin...</p>
          </div>
          <div class="col-sm-3 col-sm-offset-1 shortcuts hidden-xs">
            <img src="/img/os3.png" />
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-sm-offset-1 blog-main">
        <div class="blog-post">
          <h2 class="blog-post-title">&quot;Boring String&quot;</h2>
          <br />
          <p>The registered trademark Linux(R) is used pursuant to a sublicense from LMI, the exclusive licensee of Linus Torvalds,
          owner of the mark on a world-wide basis.</p>
          <p>This distribution is built up, based on, or linked against various (free and open source) projects, any licence
          information can be obtained from its original distribution package.</p>
          <p>AOSC OS is an open source Linux distribution with a different way source code distributing: when not included in
          autobuild archives, look for upstream source package.</p>
          <p>The AOSC OS logo, as seen above is the mutual creation of AOSC-Dev, licenced under Apache 2.0 licence, any usage
          outside of distribution building is prohibited without permission from AOSC-Dev</p>
        </div>
      </div>
      <!-- /.blog-sidebar -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
  <?php include $_SERVER['DOCUMENT_ROOT'].'/templates/footer.php';?>
  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="/js/jquery-min.js"></script> 
  <script src="/js/bootstrap.min.js"></script></body>
</html>
