<?php
define('IN_FRAME', true);
$langs = array(
  'en' => array(
    'title'=>'Community Portal - AOSC',
    'portal'=>'Portal',
    'projects'=>'Projects',
    'about'=>'About',
    'localization'=>'Localization',
    'docs'=>'TechBase',
  ),
  'zh-cn' => array(
    'title'=>'关于我们 - 安同开源社区',
    'portal'=>'门户',
    'projects'=>'项目',
    'about'=>'关于',
    'localization'=>'本地化',
    'docs'=>'知识库',
  ),
  'zh-tw' => array(
    'title'=>'關於我們 - 安同開源社區',
    'portal'=>'門戶',
    'projects'=>'項目',
    'about'=>'關於',
    'localization'=>'本地化',
    'docs'=>'知識庫',
  ),
);
include '../templates/lang.php';
?>

<html lang="<?php echo $lang;?>">
  <head>
    <meta name="generator"
    content="HTML Tidy for HTML5 (experimental) for Windows https://github.com/w3c/tidy-html5/tree/c63cc39" />
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no" />
    <meta name="description" content="Summary of AOSC OS" />
    <meta name="author" content="Junde Yi&lt;lmy441900@gmail.com&gt;, Jeff Bai &lt;jeffbaichina@members.fsf.org&gt;" />
    <link rel="icon" href="/img/favicons/aosc.ico" />
    <title>Community Portal - About</title>
    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="/css/blog.css" rel="stylesheet" />
  </head>
  
  <body><?php include '../templates/portal/navbar.php';?>
  <div class="row jumbotron">
    <div class="container section-welcome">
      <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
          <div class="col-sm-8 col-xs-12">
            <h1>About Us</h1>
            <p>We are not mystery, but we implement miracles.</p>
          </div>
          <div class="col-sm-3 col-sm-offset-1 shortcuts hidden-xs">
            <img src="/img/aosc.png" />
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-sm-offset-1">
        <div class="row">
          <h1>Who are we?</h1>
          <br />
          <p>We are members of this open source community, some of us are students and the others may be people working for their
          own lives and families.</p>
        </div>
        <hr class="divider" />
        <div class="row">
          <h1>What do we do?</h1>
          <br />
          <p>As members of this open source (oriented) community, of cource we are fighting for improvement of open source software
          and solutions. To do this:</p>
          <ul>
            <li>We build better Linux distribution for ourselves and Linux lovers;</li>
            <li>We improve localization of open source software and actually contributes them;</li>
            <li>We open participation for more opportunities to build open source software together;</li>
            <li>We don&#39;t waste time on propaganda and speeches, when not necessary;</li>
          </ul>
        </div>
        <hr class="divider" />
        <div class="row">
          <h1>How do I participate?</h1>
          <br />
          <p>For now, the best way to participate is to join the community group.</p>
          <ul>
            <li>for IRC users go to: #anthon at freenode.net;</li>
            <li>for QQ users (mainly from Mainland China) go to group: 125016052</li>
          </ul>
          <div class="alert alert-info" role="alert">
            <p>
              <b>These 2 groups are binded with each other, so what you&#39;ve said in one side will be reposted to another. No log
              will be made.</b>
            </p>
          </div>
        </div>
        <hr class="divider" />
        <div class="row">
          <h1>Thanks!</h1>
          <br />
          <p>There are good guys all around the world that provided us with good server and network resources!</p>
          <p>Here&#39;s some of the awesome ones we want to mention of:</p>
          <ul>
            <li>
            <a href="http://www.ucloud.com/">UCloud</a> - where this website is hosted on.</li>
            <li>
            <a href="http://www.ncnu.edu.tw/">National Chi Nan University</a> - our public compiling server.</li>
            <li>
            <a href="http://studio.bluet.org/">BlueT</a> - awesome server for repository.</li>
            <li>
            <a href="http://www.upyun.com/">Upyun</a> - CDN contents.</li>
            <li>
            <a href="http://www.qiniutek.com/">Qiniu</a> - CDN contents.</li>
            <li>
            <a href="http://www.maxcdn.com/">MaxCDN</a> - awesome CDN resources for repository mirrors.</li>
            <li>
            <a href="http://crowdin.net/">Crowdin</a> - localization hosting.</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <br />

  <?php include '../templates/portal/footer.php';?>
  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="/js/jquery-min.js"></script> 
  <script src="/js/bootstrap.min.js"></script></body>
</html>
