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
            <h1>高考自招门户</h1>
            <p>此页面计划中并非公开，本页面服务对象为页尾签名列表中的相关开发者和贡献者。</p>
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
            <h2 class="blog-post-title">社区综述</h2>
            <p class="lead blog-description">基本项目介绍</p>
            <p> AOSC，即安同开源社区，是一个以贡献开源社区为目标的志愿性社团。社区中志愿参与开发和建设的人员有相当部分是高中学生。社区相对重要的项目为 AOSC OS <sup>[0]</sup>，一个基于 Linux 内核 <sup>[1]</sup> 及外部 GNU/non-GNU <sup>[2]</sup> 以及其他自由（部分非自由）及开源项目构建的 Linux 发行版（一个社区自行组装的操作系统）。社区还运行着诸如 Anthon Starter <sup>[3]</sup>（安同开始程序，帮助 Windows 用户安装 AOSC OS 的工具）、Autobuild <sup>[4]</sup>（AOSC OS 的构建工具集）这样旨在为用户和开发者提供便利的工具。
            </p>
            <p>
            同时，社区还努力改善中国及台湾地区开源及自由软件用户的使用体验。我们创建了社区级别的本地化改善计划 <sup>[5]</sup>，使用一个合作性的平台，让每个有兴趣的人都能方便地贡献这些软件的翻译或本地化工作。目前，我们社区已大幅度改善，甚至完成了 Wine <sup>[6]</sup>、DPKG <sup>[7]</sup>、GIMP <sup>[8]</sup>、KDE <sup>[9]</sup> 等较大型项目的翻译工作。
            </p>
          </div>
        </div>   
      </div>
    </div>
    <hr class="divider" />
    <div class="row">
      <div class="col-sm-9 col-sm-offset-1 blog-main">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="blog-post-title">社区文化</h2>
            <p class="lead blog-description">开放，友好，进步</p>
            <p> 安同开源社区在开发并维护许多开源及自由软件项目的同时，保持着开放、友好及进步的态度。作为一个开源社区，社区内保持着对非开源或自由软件项目（比如 Windows 及其他私有软件）的友好态度。社区也一直保持着开放参与的规则，任何对开源及自由软件抱有兴趣的人都能在社区内获得开发方面的帮助，甚至可以申请创建新的项目。作为一个开源社区，AOSC 的任何开发计划都秉持着推进开源及自由软件进步的目标，并对其他非盈利的开源及自由软件的开发组织保持着友好的关系。社区坚决反对任何涉及政治、意识形态以及种族问题的讨论或人身攻击。
            </p>
            <p>
            在 2014 年暑期，我们组织了一次社区范围内的集会，并有幸邀请到了 Crossover 公司中国区代表洪谦对我们社区工作进行指导，并提供了许多非常宝贵的建议。在此次社区集会中，来自四面八方的网友们都得到了和社区人员见面交流的机会，社区开发者们也大大增进了相互之间的了解。
            </p>
          </div>
        </div>
      </div>
    </div>
    <hr class="divider" />
    <div class="row">
      <div class="col-sm-9 col-sm-offset-1 blog-main">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="blog-post-title">AOSC OS</h2>
            <p class="lead blog-description">社区发行版构建</p>
            <p>
            AOSC OS（前称“安同 OS”，或“AnthonOS”），在 2012 年社区建立时是社区的唯一开发项目。AOSC OS 初期基于 Debian <sup>[10]</sup> 构建，而后在 2013 年暑期转为独立构建。独立构建意味着整个发行版均为开发者自行配置、安排并编译为成品。AOSC OS 在构建时在一定程度上使用 Arch Linux <sup>[11]</sup>, Debian, 以及 Fedora <sup>[12]</sup> 作为参考，这些项目对 AOSC OS 的开发来说必不可分。
            </p>
            <p>
            AOSC OS 在主要使用 GNU 编译器集合 <sup>[13]</sup> 以及 GNU C 语言库 <sup>[14]</sup> 搭建编译环境的同时，使用了自行开发的 Autobuild 并在很大程度上实现了系统构建的自动化。这个工具对于许多学业繁忙的高中生开发者来说，不仅在很大程度上保障了软件包的质量，还让开发者在有限的时间内达到了相当高的构建效率，让这个庞大的系统级项目得以生存。
            </p>
            <p>
            AOSC OS 到目前为止已进入第三个开发周期 <sup>[15]</sup> (AOSC OS3)，当前目标为扩展软件包数量并改善整体兼容性。为达到此目标，AOSC OS 开发者们使用自己的空闲时间，通过学习其他 Linux 发行版的构建资料，为 AOSC OS 移植/适配了超过 3000 个软件包，并为 AOSC OS 众多独有的特性提供了和其他 Linux 发行版兼容的可能性。
            </p>
          </div>
        </div>
      </div>
    </div>
    <hr class="divider" />
    <div class="row">
      <div class="col-sm-9 col-sm-offset-1 blog-main">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="blog-post-title">本地化项目</h2>
            <p class="lead blog-description">在走向世界的同时，让世界走向我们</p>
            <p>
            在以 AOSC OS 作为社区工作中心的同时，社区还组织了开源及自由软件本地化计划。开源软件以及自由软件的开发往往超越国界，但要让这些软件真正造福用户，我们需要首先将软件翻译到用户使用的母语。我们的社区在国内得到了相当大的支持，我们也同时使用了这一有利条件发起了社区内外的开源及自由软件本地化（翻译）项目。
            </p>
            <p>
            到今天为止，记录在案的本地化及翻译项目（包含简体中文以及繁体中文）包含 49429 条语句，而尚未翻译的则有约 15000 条。此本地化计划拥有 25 名翻译人员。
            </p>
            <p> 社区在改进这些软件的翻译的同时，也没有忘记向原作者回馈这些改进，所有在此计划中完成的翻译将被统一审阅并重新提交到源开发人员或社区。
            </p>
          </div>
        </div>
      </div>
    </div>
    <hr class="divider" />
    <div class="row">
      <div class="col-sm-9 col-sm-offset-1 blog-main">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="blog-post-title">外部交流</h2>
            <p class="lead blog-description">开放的社区，开放的交流</p>
            <p> 社区在进行开发和建设的同时，也进行了许多外部交流。社区在这些外部交流中也获得了许多的外部赞助和支持，在此列举部分重大资助：
            </p>
            <ul>
              <li>优思得 (United Stacks) 为我们提供了该网站的服务器 <sup>[16]</sup></li>
              <li>BlueT Studio 为我们提供了软件仓库的服务器以及一台编译用的高性能服务器 <sup>[17]</sup></li>
              <li>GlobalSign 为我们提供了该站点的加密链接签名 <sup>[18]</sup></li>
              <li>Crowdin 为我们提供了社区本地化计划的翻译平台 <sup>[19]</sup></li>
              <li>中国科技大学 Linux 用户组 (USTC LUG) 为我们提供了社区软件仓库的镜像 <sup>[20]</sup></li>
              <li>Fastly CDN 为我们提供了社区软件仓库的 CDN 镜像，为国外用户使用 AOSC OS 提供了极大便利 <sup>[21]</sup></li>
          </div>
        </div>
      </div>
    </div>
    <hr class="divider" />
    <div class="row">
      <div class="col-sm-9 col-sm-offset-1 blog-main">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="blog-post-title">外界关注</h2>
            <p class="lead blog-description">批评和认同同等重要</p>
            <p>
            在社区建立的近三年来，我们在接受了许多外部批评的同时，也得到了相当多的肯定。中国国内一些开源软件及 Linux 媒体对我们也持续关注，这里列出两次较为重大的报道：
            </p>
            <ul>
              <li>来自 Linux 中国对于 AnthonOS 正式版发布的报道 (2014) <sup>[22]</sup></li>
              <li>来自 LinuxEden 社区对于 AOSC 社区开发者的采访 (2014) <sup>[23]</sup></li>
            <ul>
          </div>
        </div>
      </div>
    </div>
    <hr class="divider" />
    <div class="row">
      <div class="col-sm-9 col-sm-offset-1 blog-main">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="blog-post-title">社区志愿者</h2>
            <p class="lead blog-description">社区的心脏，由他们启动</p>
            <p> 安同开源社区的一切开发均为志愿参与，任何人都没有从中获得经济利益。正是这么一群志愿者，让安同开源社区在创立近三年时，依然保持着相当积极的氛围，开发项目也一刻未停地向前推动。
            </p>
            <p>
            <b>社区核心组成员</b>
            社区核心组（一般称为 CT），负责着 AOSC OS 这一庞大项目的开发以及维护，对社区其他项目的推进也有着相当重要的作用。
            <ul>
              <li>郑兴达 (Icenowy Zheng) &lt;<a href="mailto:icenowy@members.fsf.org">icenowy@members.fsf.org</a>&gt;</li>
              <li>白铭骢 (Jeff Bai) &lt;<a href="mailto:jeffbaichina@members.fsf.org">jeffbaichina@members.fsf.org</a>&gt;</li>
              <li>卜思劼 (Tom Bu) &lt;<a href="mailto:tom.bu@members.fsf.org">tom.bu@members.fsf.org</a>&gt;</li>
              <li>王铭烨 (Arthur Wang) &lt;<a href="mailto:arthur200126@gmail.com">arthur200126@gmail.com</a>&gt;</li>
            </ul>
            </p>
            <p>
            <b>社区周边开发者</b>
            社区周边开发者负责社区众多开源项目的开发，是社区活力的强心针。
            <ul>
              <li>黎民雍 (Junde Yhi) &lt;<a href="mailto:lmy441900@gmail.com">lmy441900@gmail.com</a>&gt;</li>
              <li>Tom Li &lt;<a href="mailto:biergaizi@members.fsf.org">biergaizi@members.fsf.org</a>&gt;</li>
              <li>Minhui Du &lt;<a href="mailto:duminhui@126.com">duminhui@126.com</a>&gt;</li>
              <li>hot123tea123 &lt;<a href="mailto:hot123tea123@gmail.com">hot123tea123@gmail.com</a>&gt;</li>
              <li>Joy Neop &lt;<a href="mailto:i@joyneop.com">i@joyneop.com</a>&gt;</li>
              <li>Laurence Liu &lt;<a href="mailto:liuxy6@gmail.com">liushuyu@gmail.com</a>&gt;</li>
              <li>Liushuyu &lt;<a href="mailto:liushuyu@gmail.com">liushuyu@gmail.com</a>&gt;</li>
              <li>Star Brilliant &lt;<a href="mailto:m13253@hotmail.com">m13253@hotmail.com</a>&gt;</li>
              <li>张峻锋 (Trickness) &lt;<a href="mailto:SternWZhang@outlook.com">SternWZhang@outlook.com</a>&gt;</li>
              <li>Yuchen Gu &lt;<a href="mailto:1121476816@qq.com">1121476816@qq.com</a>&gt;</li>
              <li>翟翔 (Leslie Zhai) &lt;<a href="mailto:xiangzhai83@gmail.com">xiangzhai83@gmail.com</a>&gt;</li>
            </ul>
            </p>
            <p>
            <b>社区前端开发者及运维</b>
            多亏了他们，社区的网站能日以继夜地显示我们最新的动态。
            <ul>
              <li>叶晓星 (Xiaoxing Ye) &lt;<a href="mailto:zcxing@gmail.com">zcxing@gmail.com</a>&gt;</li>
              <li>杨达明 (LionNatsu) &lt;<a href="mailto:lionxlion@foxmail.com">lionxlion@foxmail.com</a>&gt;</li>
            </ul>
            </p>
          </div>
        </div>
      </div>
    </div>
    <hr class="divider" />
    <div class="row">
      <div class="col-sm-9 col-sm-offset-1 blog-main">
          <div class="row">
              <div class="col-sm-12">
                  <h2 class="blog-post-title">上述信息注解</h2>
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
                      <li>[10] Debian 通用操作系统是一个由 Ian Murdock 创始的社区 Linux 发行版项目 <a href="http://debian.org">转至</a></li>
                      <li>[11] Arch Linux 是一个社区志愿者为中心的滚动更新的 Linux 发行版 <a href="https://archlinux.org">转至</a></li>
                      <li>[12] Fedora 是由红帽公司资助的 Linux 发行版 <a href="http://fedoraproject.org">转至</a></li>
                      <li>[13] GNU 编译器集合 (GCC, GNU Compiler Collection) 是一个自由并开源的编译器套件 <a href="https://gcc.gnu.org">转至</a></li>
                      <li>[14] GNU C 语言库 (GLibC, GNU C Library) 是一个针对 UNIX 以及类 UNIX 操作系统设计的，自由并开源的 C 语言库实现 <a href="http://www.gnu.org/software/libc/">转至</a></li>
                      <li>[15] AOSC 开发周期简述 <a href="https://portal.anthonos.org/aosc-os/summary">转至</a></li>
                      <li>[16] United Stacks 官方主页 <a href="https://unitedstack.com">转至</a></li>
                      <li>[17] BlueT Studio 主页 <a href="http://studio.bluet.org/">转至</a></li>
                      <li>[18] Global Sign 官方主页 <a href="https://www.globalsign.com">转至</a></li>
                      <li>[19] Crowdin 官方主页 <a href="https://crowdin.com">转至</a></li>
                      <li>[20] 中国科技大学开源软件镜像 (USTC Open Source Mirror) <a href="http://mirrors.ustc.edu.cn">转至</a></li>
                      <li>[21] Fastly CDN 官方主页 <a href="http://www.fastly.com">转至</a>
                      <li>[22] Linux 中国 (Linux.CN) 对 AnthonOS 正式版发布的报道 <a href="http://linux.cn/article-3366-1.html">转至</a></li>
                      <li>[23.a] LinuxEden 对安同开源社区开发者的采访（上篇） <a href="http://www.linuxeden.com/html/made_in_eden/2014/0603/152298.html">转至</a></li>
                      <li>[23.b] LInuxEden 对安同开源社区开发者的采访（下篇） <a href="http://www.linuxeden.com/html/made_in_eden/2014/0615/152682.html">转至</a></li>
                </ul>
              </div>
            </div>
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
