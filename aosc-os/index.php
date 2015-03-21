<?php define('IN_FRAME', true);
$langs = array(
  'en' => array(
    'aosc-intro'=>'The Origin of Better and Faster Linux Distribution',
    'ws-aosc?'=>'What is AOSC?',
    'aosc-topic'=>'AOSC OS is the Linux distribution project of AOSC.',
    'aosc-compostion'=>'>AOSC OS is built independently, with some reference from some of the greatest Linux distributions from all over the
        world, namely Fedora, Arch Linux and Debian, etc. The system was initially built with bits and parts from the Linux from
        Scratch instruction workbook.',
    'aosc-features'=>'<p>While studying from other great role models, AOSC OS has its own feature set.</p>
        <ul>
          <li>AOSC OS is adapted to most of the newest technologies;</li>
          <li>AOSC OS is systemd centric, and has fully deprecated Init compatibility modules (as of AOSC OS3);</li>
          <li>AOSC OS has a number of user experience improvements, while preserving the basic gene of Linux desktop (no Windows
          clones here!);</li>
          <li>AOSC OS supports both DPKG and RPM as default package manager (as of AOSC OS3), and we have plans for more Package
          Manager support;</li>
        </ul>',
    'aosc-plan'=>'While mainly being a desktop oriented Linux distribution, AOSC OS has plans on support for small scaled server, too.
        CentralPoint, as a predecessor, will become AOSC OS for Servers (as an edition of AOSC OS3).',
    'aosc-position'=>'AOSC OS tries to be anything it can be, with its standardized system infrastructure and rich software selection. AOSC OS
        can be a good choice for your daily Linux usage!',
    'htd-aosc?'=>'How do you develop AOSC OS?',
    'aosc-cycle'=>'AOSC OS develops in a year round cycle. For example, 2013 - 2014 our outcome was AOSC OS2, with AnthonOS based on it.',
    'aosc-toolkit'=>'AOSC OS was built with a toolkit called Autobuild, to help us build software packages. Autobuild is capable of abstracting package managers in a configuration file manner. One package comes with one Autobuild configuration archive.',
    'aosc-distros'=>'<p>Prior to AOSC OS3, AOSC OS will divide into different distributions like the former AnthonOS and CentralPoint in the following spring after the start of the cycle. Starting from AOSC OS3, no division will be made all around the year, and here is a conversion list of the distribution names.</p>
        <ul>
          <li><b>AOSC OS with $DE (Desktop Environment name) is the former AnthonOS;</b></li>
          <li><b>AOSC OS for Servers is the former CentralPoint;</b></li>
        </ul>',
    'aosc-summary'=>'Overall AOSC OS was developed in cycles, in every cycle we bring in new improvements and changes to the system distribution, for good of course.',
  ),
  'zh-cn' => array(
    'aosc-intro'=>'又快又好的 Linux 发行版',
    'ws-aosc?'=>'AOSC OS 是什么？',
    'aosc-topic'=>'AOSC OS 是 AOSC 项目组的 Linux 发行版',
    'aosc-compostion'=>'AOSC OS 参考了世界上其它优秀的 Linux 发行版，并进行独立构建。这些参考包括 Fedora, Arch Linux and Debian 等。 
        该系统以 LFS 工作手册为起点，使用源码从零构建。',
    'aosc-features'=>'<p>尽管该系统保留了其它发行版的主要特点，但 AOSC OS 仍有独特之处：</p>
        <ul>
          <li>AOSC OS 试图尝试和保持最新技术，如systemd、wayland、clang等;</li>
          <li>AOSC OS 使用 systemd 管理系统, 但是完整的废弃了它的启动模块 (刚刚加入 AOSC OS3);</li>
          <li>AOSC OS 极大的保留了原 Linux 的用户体验，这得益于绝大多数的桌面环境的提供(当然没有Windows桌面咯);</li>
          <li>AOSC OS 支持 DPKG 和 RPM 两套软件包管理器 (刚刚加入 AOSC OS3), 更多软件包管理器在计划之中;</li>
        </ul>',
    'aosc-plan'=>'AOSC OS 除了面向桌面使用者，我们也推出了小型服务器版的 CentralPoint。目前，CentralPoint 已作为 AOSC OS3 的一个版本发行。',
    'aosc-position'=>'AOSC OS 尽可能探索一切可能，现在它已经有了生产上的标准系统架构和众多的软件。AOSC OS
        对于日常使用来说，是一个不错的选择！',
    'htd-aosc?'=>'那我该如何参与到 AOSC OS 完善当中？',
    'aosc-cycle'=>'AOSC OS 以年为周期进行开发。举个例子, 2013 - 2014 年我们全年的计划是 AOSC OS2, 它为 AnthonOS 奠定了基础。',
    'aosc-toolkit'=>'AOSC OS 有自己的 Autobuild 工具链, 这加快了软件打包工作. 只要填写简单的配置文件，Autobuild 就能从中抽象出可用的软件包。
        所有工作只需让一个软件包对应一个 Autobuild 配置文档即可。',
    'aosc-distros'=>'<p>以 AOSC OS3 为例, AOSC OS 被分成了不同的发行版，比如 AnthonOS 和 CentralPoint。
        从 AOSC OS3 起, 我们全年不再分割更多的发行版，只保留以下发行版的名称：</p>
        <ul>
          <li><b>AOSC OS with $DE (桌面环境名称) 是 AthonOS 的前身;</b></li>
          <li><b>AOSC OS for Servers 是 CentralPoint 的前身;</b></li>
        </ul>',
    'aosc-summary'=>'总之 AOSC OS 按年进行周期开发, 我们都会给 AOSC OS 带来新的改善和尝试, 只为变得更好',
  
  ),
  'zh-tw' => array(
  ),
);
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/lang.php';?>
<!DOCTYPE html>
<html lang="<?php echo $lang;?>">
  <head>
    <meta name="generator"
    content="HTML Tidy for HTML5 (experimental) for Windows https://github.com/w3c/tidy-html5/tree/c63cc39" />
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no" />
    <meta name="description" content="Homepage of AOSC OS" />
    <meta name="author" content="Junde Yi&lt;lmy441900@gmail.com&gt;, Jeff Bai &lt;jeffbacihina@members.fsf.org&gt;" />
    <link rel="icon" href="/img/favicons/aosc-os.ico" />
    <title>AOSC OS - Home</title>
    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="/css/blog.css" rel="stylesheet" />
    <?php include $_SERVER['DOCUMENT_ROOT'].'/templates/font.php'; ?>
  </head>
  <body>
  <?php
    include 'navItems.php';
  ?>
  <div class="jumbotron">
    <div class="container section-welcome">
      <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
          <div class="col-sm-8 col-xs-12">
            <h1>AOSC OS</h1>
             <p><?php echo $langs[$lang]['aosc-intro'];?></p>
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
      <div class="col-sm-10 col-sm-offset-1 blog-main">
        <h1><?php echo $langs[$lang]['ws-aosc'];?></h1>
        <p><?php echo $langs[$lang]['aosc-topic'];?></p>
        <p><?php echo $langs[$lang]['aosc-compostion'];?></p>
        <?php echo $langs[$lang]['aosc-features'];?>
        <p><?php echo $langs[$lang]['aosc-plan'];?></p>
        <p><?php echo $langs[$lang]['aosc-position'];?></p>
      </div>
    </div>
      <hr class="divider" />
    <div class="row">
      <div class="col-sm-10 col-sm-offset-1 blog-main">
        <h1><?php echo $langs[$lang]['htd-aosc?'];?></h1>
        <p><?php echo $langs[$lang]['aosc-cycle'];?></p>
        <p><?php echo $langs[$lang]['aosc-toolkit'];?></p>
        <?php echo $langs[$lang]['aosc-distros'];?>
        <p><?php echo $langs[$lang]['aosc-summary'];?></p>
      </div>
    </div>
  </div>
  <br />

  <!-- /.container -->
  <?php include $_SERVER['DOCUMENT_ROOT'].'/templates/footer.php';?>
  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="/js/jquery-min.js"></script> 
  <script src="/js/bootstrap.min.js"></script></body>
</html>
