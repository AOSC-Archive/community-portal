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
    include '../navItems.php';
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
      </div>
      <div class="col-sm-12">
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
            <a href="#plasma" data-toggle="">Plasma</a>
          </li>
          <li role="presentation" class="disabled">
            <a href="#kodi" data-toggle="">Kodi</a>
          </li>
          <li role="presentation" class="disabled">
            <a href="#pantheon" data-toggle="">Pantheon</a>
          </li>
          <li role="presentation" class="">
            <a href="#unity" data-toggle="tab">Unity</a>
          </li>
          <li role="presentation">
            <a href="#os2" data-toggle="tab">AnthonOS (OS2)</a>
          </li>
        </ul>
      </div>
      <div id="my-tab-content" class="tab-content">
      <?php
      $screenshots = array(
      'unity' => array('flag' => '', 'icon' => '/img/oobp-logo/unity-oobp.png', 'title' => 'AOSC OS with Unity', 'description' => '<-----------------TODO------------------->', 'path' => '/img/screenshots/unity-beta/', 'suffix' => 'jpg', 'count'=>6),

      'gnome' => array('flag' => 'active', 'icon' => '/img/oobp-logo/gnome-oobp.png', 'title' => 'AOSC OS with GNOME', 'description' => 'AOSC OS with the GNOME desktop environment, a completely free and open source desktop and application suite.', 'path' => '/img/screenshots/gnome-oobp/', 'suffix' => 'jpg', 'count'=>10),

      'mate' => array('flag' => '', 'icon' => '/img/oobp-logo/mate-oobp.png', 'title' => 'AOSC OS with MATE', 'description' => 'AOSC OS with the MATE desktop, a fork of GNOME 2 desktop, with slight customization and tweaks for good.', 'path' => '/img/screenshots/mate-oobp/', 'suffix' => 'jpg', 'count'=>10),

      'cinnamon' => array('flag' => '', 'icon' => '/img/oobp-logo/cinnamon-oobp.png', 'title' => 'AOSC OS with Cinnamon', 'description' => 'AOSC OS with Cinnamon desktop, a fork of GNOME 3.x desktop environment with equivalent power in software package. This desktop environment from the Linux Mint community arguably is more suitable for mouse and keyboard setup.', 'path' => '/img/screenshots/cinnamon-oobp/', 'suffix' => 'jpg', 'count'=>10),

      'xfce' => array('flag' => '', 'icon' => '/img/oobp-logo/xfce-oobp.png', 'title' => 'AOSC OS with XFCE', 'description' => 'AOSC OS with XFCE desktop, slight changes in interface and lightweight software choice is where this version is at. This is probably the best version to be run on an older machine.', 'path' => '/img/screenshots/xfce-oobp/', 'suffix' => 'jpg', 'count'=>10),

      'os2' => array('flag' => '', 'icon' => '/img/anos.png', 'title' => 'AnthonOS (AOSC OS2)', 'description' => 'Final Release &quot;Doge&quot; comes with KDE 4 as its default desktop environment, here showing is the default desktop configuration of AnthonOS (however you can choose for the default Plasma desktop configuration).', 'path' => '/img/anthonos/', 'suffix' => 'png', 'count'=>10),
      );

foreach ($screenshots as $id => $ar){
  echo <<<TABEOD
        <div class="tab-pane {$ar['flag']}" id="$id">
          <div class="row">
            <div class="col-sm-1 col-sm-offset-2">
              <img src="{$ar['icon']}" width="96px" height="96px" />
            </div>
            <div class="col-sm-6 col-sm-offset-1">
              <div class="row">
                <div class="col-sm-12">
                  <h2>{$ar['title']}</h2><p>{$ar['description']}</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
              <hr class="divider" />
            <div class="col-sm-12">
              <div class="row">
                <div class="my_gallery">
TABEOD;

    for ($a=1;$a<=$ar['count'];$a++)
      echo '<a target="_blank" href="'.$ar['path'].$a.'.'.$ar['suffix'].'"><img src="'.$ar['path'].$a.'_small.'.$ar['suffix'].'" id="img'.$a.'" alt="img'.$a.'" width="300"></a>';
      
  echo <<<TABEOD
                </div>
              </div>
            </div>
          </div>
        </div>
TABEOD;
}
    ?>
      </div>
    </div>
    <!-- /.container -->
    <?php include $_SERVER['DOCUMENT_ROOT'].'/templates/footer.php';?>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/js/jquery-min.js"></script> 
    <script src="/js/bootstrap.min.js"></script>
  </body>
</html>
