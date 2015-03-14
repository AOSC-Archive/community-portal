<?php define('IN_FRAME', true);
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/lang.php';?>
<!DOCTYPE html>
<html lang="zh_CN">
  <head>
    <meta name="generator"
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no" />
    <meta name="description" content="AOSC NCEE Prep Portal" />
    <meta name="author" content="Jeff Bai &lt;jeffbaichina@members.fsf.org&gt;" />
    <link rel="icon" href="/img/favicons/aosc-os.ico" />
    <title>AOSC NCEE Prep Portal</title>
    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="/css/blog.css" rel="stylesheet" />
    <?php include $_SERVER['DOCUMENT_ROOT'].'/templates/font.php'; ?>
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
            <h1>AOSC 高考自招材料整理</h1>
            <p>注意：此页面计划中并非公开，本页面服务对象为页尾签名列表中的相关开发者和贡献者。</p>
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
      <div class="col-sm-9 col-sm-offset-1 blog-main">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="blog-post-title">AOSC 综述</h2>
            <p class="lead blog-description">基本项目介绍</p>
            <p>
            AOSC，即安同开源社区，是一个以贡献开源社区为目标的志愿性社团。社区中志愿参与开发和建设的人员有相当部分是高中学生。社区相对重要的项目为 AOSC OS [0]，一个基于 Linux 内核 [1] 及外部 GNU/non-GNU [2] 以及其他自由（部分非自由）及开源项目构建的 Linux 发行版（一个社区自行组装的操作系统）。社区还运行着诸如 Anthon Starter [3]（安同开始程序，帮助 Windows 用户安装 AOSC OS 的工具）、Autobuild [4]（AOSC OS 的构建工具集）这样旨在为用户和开发者提供便利的工具。
            </p>
            <p>
            同时，社区还努力改善中国及台湾地区开源及自由软件用户的使用体验。我们创建了社区级别的本地化改善计划 [5]，使用一个合作性的平台，让每个有兴趣的人都能方便地贡献这些软件的翻译或本地化工作。目前，我们社区已大幅度改善，甚至完成了 Wine [6]、DPKG [7]、GIMP [8]、KDE [9] 等较大型项目的翻译工作。
            </p>
            <p>
            上述信息注解：
            </p>
            <ul>
                <li>[0] AOSC OS 项目主页 <a href="https://portal.anthonos.org/aosc-os">转至</a></li>
                <li>[1] Linux 内核是 Linus Torvalds 先生研究并组织开发的自由且开源的操作系统内核项目 <a href="http://kernel.org">转至</a></li>
                <li>[2.a] GNU (GNU is Not Unix) 项目是由 Richard M. Stallman 先生发起的自由软件运动，此运动旨在让全世界计算机用户获得对自己使用或开发的软件的分发、使用自由以及相关的法律保护 <a href="http://gnu.org">转至</a></li>
                <li>[2.b] non-GNU 代指任何并非使用 GNU 公共许可协议分发的自由（及开源）软件</li>
                <li>[3] Anthon Starter 项目主页 <a href="https://portal.anthonos.org/ast">转至</a>，以及源代码仓库 <a href="https://github.com/AOSC-Dev/Anthon-Starter">转至</a></li>
                <li>[4] Autobuild 的源代码仓库 <a href="https://github.com/AOSC-Dev/Autobuild3">转至</a></li>
                <li>[5] AOSC 的本地化改善计划，使用 Crowdin 公司提供的社区化翻译及本地化平台 <a href="http://l10n.anthonos.org">转至</a></li>
                <li>[6] Wine (Wine Is Not an Emulator) 是一个 Windows 环境以及 API（应用程序接口）的模拟及再实现项目 <a href="http://winehq.org">转至</a></li>
                <li>[7] DPKG (Debian Packages) 是主要由 Debian 使用的软件包管理系统 <a href="http://debian.org">转至</a></li>
                <li>[8] GIMP (GNU Image Manipulation Program) 是一个由 GNU 项目开发的图像处理套件 <a href="http://gimp.org">转至</a></li>
                <li>[9] KDE (Kool Desktop Environment) 是一个由 KDE e.V. 开发的自由及开源的桌面体验套件 <a href="http://kde.org">转至</a></li>
            </ul>
          </div>
        </div>
        <hr class="divider" />
        
      </div>
    </div>
    <br />
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
