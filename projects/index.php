<?php
define('IN_FRAME', true);
$langs = array(
  'en' => array(
    'title'=>'Community Portal - Projects',
    'projects'=>'Projects',
    'projects-text'=>'AOSC hosts a bucketful of projects, from AOSC OS, our Linux distribution, to small tools like Anthon Starter that make life better.',
    'aosc-os'=>'AOSC OS',
    'aosc-os-desc'=>'AOSC OS is one of the most important projects of the community - a Linux Distribution building project. AOSC OS is built independently with references from Linux From Scratch and other great Linux distributions (like Fedora, Arch Linux and Debian) from all over the world. AOSC OS is packed with latest technologies and better user experience improvements.',
    'anthon-starter'=>'Anthon Starter',
    'anthon-starter-text'=>'Anthon Starter is a HDD installation helper for AOSC OS. This project focuses on making installation of AOSC OS from Windows easier.',
    'localization'=>'Localization',
    'localization-text'=>'We believe the best way to make open source software better is to make more people understand what they are. Localization of open source software makes it easier and more efficient for everyone to use.',
    'other'=>'Other Projects',
    'other-text'=>'Other projects, as simple as AOSC-VersionHelper for displaying system version, as critical as Autobuild for building AOSC OS. They are hosted on GitHub for open participation, PRs are always welcomed.',
  ),
  'zh-cn' => array(
    'title'=>'社区门户 - 项目',
    'projects'=>'项目',
    'projects-text'=>'AOSC 维护着满满一箩筐的项目，大到 AOSC OS，我们的 Linux 发行版，小到安同开始程序，让你的生活更美好。',
    'aosc-os'=>'AOSC OS',
    'aosc-os-desc'=>'AOSC OS 是社区最重要的项目之一 - 我们的 Linux 发行版构建项目。 AOSC OS 是一个独立构建的 Linux 发行版，构建过程中使用了 Linux From Scratch 以及其他来自世界各地优秀的发行版项目（如 Fedora, Arch Linux 以及 Debian）。AOSC OS 加入了最新的技术以及诸多用户体验改进。',
    'anthon-starter'=>'安同开始程序',
    'anthon-starter-text'=>'安同开始程序是 AOSC OS 的硬盘安装助手，该项目的目标是让用户更方便地从 Windows 安装 AOSC OS。',
    'localization'=>'本地化',
    'localization-text'=>'我们认为改进开源软件的最佳方式就是让更多人理解它们。本地化有助于让大家更高效、更便捷地使用开源软件。',
    'other'=>'其他项目',
    'other-text'=>'其他项目，如最简单的用于显示系统版本的 AOSC-VersionHelper，又如最关键的用于构建 AOSC OS 的 Autobuild 套件。这些项目存放于我们的公用 GitHub 仓库以方便开放参与，我们时刻欢迎你的 PR。',
  ),
  'zh-tw' => array(
    'title'=>'社區門戶 - 項目',
    'projects'=>'項目',
    'projects-text'=>'AOSC 維護著滿滿一籮筐的項目，大到 AOSC OS，我們的 Linux 發行版，小到安同開始程式，讓你的生活更美好。',
    'aosc-os'=>'AOSC OS',
    'aosc-os-desc'=>'AOSC OS is one of the most important projects of the community - a Linux Distribution building project. AOSC OS is built independently with references from Linux From Scratch and other great Linux distributions from all over the world. AOSC OS is packed with latest techologies and user experience improvements.',
    'anthon-starter'=>'安同開始程式',
    'anthon-starter-text'=>'安同開始程式是 AOSC OS 的磁碟安裝助手，該項目的目標是讓用戶更方便地自微軟視窗作業系統安裝 AOSC OS 。',
    'localization'=>'本地化',
    'localization-text'=>'我們認為改進開源軟體的最佳方式就是讓更多人理解它們。本地化有助於讓大家更高效、更便捷地使用開源軟體。',
    'other'=>'其他項目',
    'other-text'=>'其他項目，例如最簡單的用於顯示作業系統版本的 AOSC-VersionHelper ，又如最關鍵的用於構建 AOSC OS 的 Autobuild 套件。這些項目存放於我們的公開 GitHub 倉庫以方便大家參與。我們時刻歡迎您的 PR。'
  ),
);
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/lang.php';
?>
<!DOCTYPE html>
<html lang="<?php echo $lang;?>">

<html>
  <head>
    <meta name="generator"
    content="HTML Tidy for HTML5 (experimental) for Windows https://github.com/w3c/tidy-html5/tree/c63cc39" />
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no" />
    <meta name="description" content="Homepage of AOSC OS 安同开源社区" />
    <meta name="keywords" content="AOSC,OS,Anthon,AnthonOS,安同,Linux,GNU/Linux,GNU,开源,社区,Open Source,Community" />
    <link rel="icon" href="/img/favicons/aosc.ico" />
    <title><?php echo $langs[$lang]['title'];?></title>
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
    addNavItem('/projects/index.php', '/projects/', $lang, array('en' => 'Projects', 'zh-cn' => '项目', 'zh-tw' => '項目',));
    addNavItem('', 'http://l10n.anthonos.org/', $lang, array('en' => 'Localization', 'zh-cn' => '本地化', 'zh-tw' => '本地化',));
    addNavItem('', 'http://wiki-dev.anthonos.org/', $lang, array('en' => 'TechBase', 'zh-cn' => '知识库', 'zh-tw' => '知識庫',));
    addNavItem('/about/index.php', '/about/', $lang, array('en' => 'About', 'zh-cn' => '关于', 'zh-tw' => '關於',));
    popNavBar();
  ?>
  
  <div class="jumbotron">
    <div class="container section-welcome">
      <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
          <div class="col-sm-8 col-xs-12">
            <h1><?php echo $langs[$lang]['projects'];?></h1>
            <p><?php echo $langs[$lang]['projects-text'];?></p>
          </div>
          <div class="col-sm-3 col-sm-offset-1 shortcuts hidden-xs">
            <img src="/img/aosc.png" />
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="container">
    <br />
    <div class="row">
      <div class="container">
        <div class="col-sm-10 col-sm-offset-1">
          <div class="col-sm-2">
            <img src="/img/os3.png" width="96px" height="96px" />
          </div>
          <div class="col-sm-9 col-sm-offset-1">
            <h2>
              <a href="/aosc-os/" target="_blank"><?php echo $langs[$lang]['aosc-os'];?></a>
            </h2>
            <p><?php echo $langs[$lang]['aosc-os-desc'];?></p>
          </div>
        </div>
      </div>
    </div>
    
    <hr class="divider" />
    <div class="row">
      <div class="container">
        <div class="col-sm-10 col-sm-offset-1">
          <div class="col-sm-2">
            <img src="/img/ast.png" width="96px" height="96px" />
          </div>
          <div class="col-sm-9 col-sm-offset-1">
            <h2>
              <a href="/ast/" target="_blank"><?php echo $langs[$lang]['anthon-starter'];?></a>
            </h2>
            <p><?php echo $langs[$lang]['anthon-starter-text'];?></p>
          </div>
        </div>
      </div>
    </div>
    
    <hr class="divider" />
    <div class="row">
      <div class="container">
        <div class="col-sm-10 col-sm-offset-1">
          <div class="col-sm-2">
            <img src="/img/localization.png" width="96px" height="96px" />
          </div>
          <div class="col-sm-9 col-sm-offset-1">
            <h2>
              <a href="http://l10n.anthonos.org/" target="_blank"><?php echo $langs[$lang]['localization'];?></a>
            </h2>
            <p><?php echo $langs[$lang]['localization-text'];?></p>
          </div>
        </div>
      </div>
    </div>
    
    <hr class="divider" />
    <div class="row">
      <div class="container">
        <div class="col-sm-10 col-sm-offset-1">
          <div class="col-sm-2">
            <img src="/img/github.png" width="96px" height="96px" />
          </div>
          <div class="col-sm-9 col-sm-offset-1">
            <h2>
              <a href="http://github.com/AOSC-Dev" target="_blank"><?php echo $langs[$lang]['other'];?></a>
            </h2>
            <p><?php echo $langs[$lang]['other-text'];?></p>
            <br />
          </div>
        </div>
      </div>
    </div>
    
  </div><?php include $_SERVER['DOCUMENT_ROOT'].'/templates/footer.php';?>

  <script src="/js/jquery-min.js"></script> 
  <script src="/js/bootstrap.min.js"></script></body>
</html>
