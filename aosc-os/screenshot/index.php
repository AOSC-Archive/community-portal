<?php define('IN_FRAME', true);
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/lang.php';?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta name="generator"
    content="HTML Tidy for HTML5 (experimental) for Windows https://github.com/w3c/tidy-html5/tree/c63cc39" />
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no" />
    <meta name="description" content="Home of AOSC OS" />
    <meta name="author" content="Junde Yi&lt;lmy441900@gmail.com&gt;, Jeff Bai &lt;jeffbaichina@members.fsf.org&gt;" />
    <link rel="icon" href="/img/favicons/aosc-os.ico" />
    <title>AOSC OS - Screenshots</title>
    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="/css/blog.css" rel="stylesheet" />
    <link href="/css/common.css" rel="stylesheet" />
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
    addNavItem('/aosc-os/index.php', '/aosc-os/', $lang, array('en' => 'AOSC_home', 'zh-cn' => 'AOSC 主页', 'zh-tw' => 'AOSC_home',), 'minor');
    addNavItem('/aosc-os/downloads/index.php', '/aosc-os/downloads/', $lang, array('en' => 'Downloads', 'zh-cn' => '下载', 'zh-tw' => 'Downloads',));
    addNavItem('/aosc-os/summary/index.php', '/aosc-os/summary/', $lang, array('en' => 'History', 'zh-cn' => '历史', 'zh-tw' => 'History',));
    addNavItem('/aosc-os/screenshot/index.php', '/aosc-os/screenshot/', $lang, array('en' => 'Screenshot', 'zh-cn' => '截图', 'zh-tw' => 'Screenshot',));
    addNavItem('/aosc-os/about/index.php', '/aosc-os/about/', $lang, array('en' => 'About', 'zh-cn' => '关于', 'zh-tw' => 'About',));
    popNavBar();
  ?>
    <div class="jumbotron">
      <div class="container section-welcome">
        <div class="row">
          <div class="col-sm-10 col-sm-offset-1">
            <div class="col-sm-8 col-xs-12">
              <h1>Screenshot</h1>
              <p>Let the show begin!</p>
            </div>
            <div class="col-sm-3 col-sm-offset-1 shortcuts hidden-xs">
              <img src="/img/os3.png" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="col-sm-10 col-sm-offset-1 blog-main">
        <p>Screenshot of the versions of AOSC OS, feel the difference and pick your choice for a spin! This below shows the
        diversity of desktop environments we provide.</p>
        <hr class="divider" />
        <ul class="nav nav-tabs">
          <li role="presentation" class="active">
            <a href="#gnome" data-toggle="tab">GNOME</a>
          </li>
          <li role="presentation">
            <a href="#xfce" data-toggle="tab">XFCE</a>
          </li>
          <li role="presentation">
            <a href="#cinnamon" data-toggle="tab">Cinnamon</a>
          </li>
          <li role="presentation">
            <a href="#mate" data-toggle="tab">MATE</a>
          </li>
          <li role="presentation" class="disabled">
            <a href="#enlightenment" data-toggle="tab">Enlightenment</a>
          </li>
          <li role="presentation" class="disabled">
            <a href="#plasma" data-toggle="tab">Plasma</a>
          </li>
          <li role="presentation" class="disabled">
            <a href="#kodi" data-toggle="tab">Kodi</a>
          </li>
          <li role="presentation" class="disabled">
            <a href="#pantheon" data-toggle="tab">Pantheon</a>
          </li>
          <li role="presentation" class="disabled">
            <a href="#unity" data-toggle="tab">Unity</a>
          </li>
          <li role="presentation" class="disabled">
            <a href="#dde" data-toggle="tab">DDE</a>
          </li>
          <li role="presentation">
            <a href="#os2" data-toggle="tab">AnthonOS (OS2)</a>
          </li>
        </ul>
      </div>
    </div>
    <div id="my-tab-content" class="tab-content">
    <div class="tab-pane active" id="gnome">
      <div class="row">
        <div class="col-sm-1 col-sm-offset-2">
          <img src="/img/oobp-logo/gnome-oobp.png" width="96px" height="96px" />
        </div>
        <div class="col-sm-6 col-sm-offset-1">
          <div class="row">
            <div class="col-sm-12">
              <h2>AOSC OS with GNOME</h2>
              <p>AOSC OS with the GNOME desktop environment, a completely free and open source desktop and application suite.</p>
            </div>
          </div>
          <hr class="divider" />
        </div>
      </div>
      <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
          <div class="row">
            <div class="my_gallery">
<?php
  for ($a=1;$a<=10;$a++)
    echo '<a target="_blank" href="/img/screenshots/gnome-oobp/'.$a.'.jpg"><img src="/img/screenshots/gnome-oobp/'.$a.'_small.jpg" id="img'.$a.'" alt="img'.$a.'" width="200"></a>';
?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="tab-pane" id="mate">
      <div class="row">
        <div class="col-sm-1 col-sm-offset-2">
          <img src="/img/oobp-logo/mate-oobp.png" width="96px" height="96px" />
        </div>
        <div class="col-sm-6 col-sm-offset-1">
          <div class="row">
            <div class="col-sm-12">
              <h2>AOSC OS with MATE</h2>
              <p>AOSC OS with the MATE desktop, a fork of GNOME 2 desktop, with slight customization and tweaks for good.</p>
            </div>
          </div>
          <hr class="divider" />
        </div>
      </div>
      <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
          <div class="row">
            <div class="my_gallery">
<?php
  for ($a=1;$a<=10;$a++)
    echo '<a target="_blank" href="/img/screenshots/mate-oobp/'.$a.'.jpg"><img src="/img/screenshots/mate-oobp/'.$a.'_small.jpg" id="img'.$a.'" alt="img'.$a.'" width="200"></a>';
?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="tab-pane" id="cinnamon">
      <div class="row">
        <div class="col-sm-1 col-sm-offset-2">
          <img src="/img/oobp-logo/cinnamon-oobp.png" width="96px" height="96px" />
        </div>
        <div class="col-sm-6 col-sm-offset-1">
          <div class="row">
            <div class="col-sm-12">
              <h2>AOSC OS with Cinnamon</h2>
              <p>AOSC OS with Cinnamon desktop, a fork of GNOME 3.x desktop environment with equivalent power in software package. This desktop environment from the Linux Mint community arguably is more suitable for mouse and keyboard setup.</p>
            </div>
          </div>
          <hr class="divider" />
        </div>
      </div>
      <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
          <div class="row">
            <div class="my_gallery">
<?php
  for ($a=1;$a<=10;$a++)
    echo '<a target="_blank" href="/img/screenshots/cinnamon-oobp/'.$a.'.jpg"><img src="/img/screenshots/cinnamon-oobp/'.$a.'_small.jpg" id="img'.$a.'" alt="img'.$a.'" width="200"></a>';
?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="tab-pane" id="xfce">
      <div class="row">
        <div class="col-sm-1 col-sm-offset-2">
          <img src="/img/oobp-logo/xfce-oobp.png" width="96px" height="96px" />
        </div>
        <div class="col-sm-6 col-sm-offset-1">
          <div class="row">
            <div class="col-sm-12">
              <h2>AOSC OS with XFCE</h2>
              <p>AOSC OS with XFCE desktop, slight changes in interface and lightweight software choice is where this version is at. This is probably the best version to be run on an older machine.</p>
            </div>
          </div>
          <hr class="divider" />
        </div>
      </div>
      <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
          <div class="row">
            <div class="my_gallery">
<?php
  for ($a=1;$a<=10;$a++)
    echo '<a target="_blank" href="/img/screenshots/xfce-oobp/'.$a.'.jpg"><img src="/img/screenshots/xfce-oobp/'.$a.'_small.jpg" id="img'.$a.'" alt="img'.$a.'" width="200"></a>';
?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="tab-pane" id="os2">
      <div class="row">
        <div class="col-sm-1 col-sm-offset-2">
          <img src="/img/anos.png" width="96px" height="96px" />
        </div>
        <div class="col-sm-6 col-sm-offset-1">
          <div class="row">
            <div class="col-sm-12">
              <h2>AnthonOS (AOSC OS2)</h2>
              <p>Final Release &quot;Doge&quot; comes with KDE 4 as its default desktop environment, here showing is the default
              desktop configuration of AnthonOS (however you can choose for the default Plasma desktop configuration).</p>
            </div>
          </div>
          <hr class="divider" />
        </div>
      </div>
      <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
          <div class="row">
            <div class="my_gallery">
<?php
  for ($a=1;$a<=10;$a++)
    echo '<a target="_blank" href="/img/anthonos/'.$a.'.png"><img src="/img/anthonos/'.$a.'_small.png" id="img'.$a.'" alt="img'.$a.'" width="200"></a>';
?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.container -->
    <?php include $_SERVER['DOCUMENT_ROOT'].'/templates/footer.php';?>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/js/jquery-min.js"></script> 
    <script src="/js/bootstrap.min.js"></script></div>
  </body>
</html>
