<?php define('IN_FRAME', true);
$langs = array(
  'en' => array(
    'dl-title'=>'Downloads',
    'dl-subtitle'=>'Something new today?',
    'ws-brief'=>'Here below are the downloads for AOSC OS distributions, including the new, experimental OS3 and legacy OS2 (stable).
                  Check the tabs below for more information.',
    'dl-instructions'=>'Instructions (OS3)',
    'dl-dpkg'=>'DPKG Based',
    'dl-rpm'=>'RPM Based',
    'dl-server'=>'for Servers',
    'dl-legacy'=>'Legacy (OS2)',
    'dl-installation'=>'Installation',
    'dl-ways'=>'There are generally two ways to install AOSC OS on your machine.',
    'dl-way1'=>'1. Get AOSC LiveKit and use the installer;',
    'dl-way2'=>'2. Get tarballs of AOSC OS and deploy them manually.',
    'way-livekit-brief'=>'Installation using AOSC LiveKit',
    'way-livkit-detail'=>'To install AOSC OS with LiveKit and the LiveKit Installer, download the LiveKit
                  iso image from the button provided below.',
    'livekit-contents'=>'This iso image has provided you with some basic tools for installation:',
    'livekit-gparted'=>'GParted partition manager for preparing your partitions for installation;',
    'livekit-midori'=>'Midori Web Browser for some needs with Internet resources;',
    'livekit-terminal'=>'Terminal emulator for the sake of God :-);',
    'livekit-installer'=>'LiveKit Installer to install AOSC OS of your choice;',
    'way-tarball'=>'Manual Deployment Using Tarballs',
    'way-tarball-detail'=>'Apart from using the LiveKit image for Internet based installation, another option
                  is to install directly from the released tarballs. Here&#39;s how to do it.',
    'way-tarball-step-1'=>'Get a LiveCD or boot up another Linux distribution (must be x86_64);',
    'way-tarball-step-2'=>'Download the tarball(s);',
    'way-tarball-step-3'=>'lear a partition (of course you can seperate /home, /boot, etc);',
    'way-tarball-step-4'=>'Mount the partition (TFM for &quot;mount&quot; command,',
    'way-tarball-step-5'=>'Untar the tarball(s) (TFM for &quot;tar&quot; command,',
    'way-tarball-step-6'=>'Configure domain name resolver (cp /etc/resolv.conf /path/to/mount/point/etc/);',
    'way-tarball-step-7'=>'Mount and bind /dev /proc /sys to target system;',
    'way-tarball-step-8'=>'&quot;chroot&quot; into the target system (TFM for &quot;chroot&quot; command,',
    'way-tarball-step-9'=>'Install GRUB (search it up, man...);',
    'way-tarball-step-10'=>'Unmount the partition, and reboot;',
    'way-tarball-step-11'=>'Boom (if this happenned, report it on IRC or throw it on the',
    'bug-tracker'=>'bug tracker',
    'install-tips'=>'happy hacking...',
    'dpkg-gnome'=>'AOSC OS Beta with GNOME desktop, version 3.14. GNOME is a entirely free and open desktop
                  environment and application suite brought to you by the GNOME Foundation. GNOME is chosen to be the default
                  desktop environment for some major Linux distributions like Fedora.',
    'dl'=>'Download',
    'dl-link'=>'Download Release',
    'ss-link'=>'Screenshot',
    'dpkg-xfce'=>'AOSC OS Beta with XFCE desktop, version 4.11. XFCE is a lightweight, yet elegant and easy to use
                  desktop environment. XFCE is built upon GTK+ 2 interface toolkit, the predecessor to GTK+ 3 used by the GNOME
                  desktop environment. XFCE runs releatively fast on older machines dated all the way back to 2001 (for AOSC OS,
                  you need a machine that runs 64-bit operating system). XFCE is adapted to, cutting edge technologies like
                  systemd-logind.',
    'dpkg-cinnamon'=>'AOSC OS Beta with Cinnamon Desktop, version 2.4. Cinnamon is a fork of GNOME shell. It&#39;s one
                  of the default desktop environments for Linux Mint with guaranteed ease of use. Cinnamon needs a machine with
                  decent amount of performance, just like the GNOME desktop. Arguably it is more adapted to mouse and keyboard use
                  than the GNOME shell.',
    'dpkg-mate'=>'AOSC OS Beta with MATE desktop, version 1.8.1. MATE is a fork of GNOME 2.x, a perfect shelter
                  for those who goes strongly against the GNOME 3, and the GNOME shell. Although being a legacy fork of a desktop,
                  it&#39;s well adapted to newer technologies like UDisks-2 and UPower 0.99, they even have a plan to bring Wayland
                  support to it!',
    'dpkg-kde'=>'AOSC OS Beta with (KDE) Plasma desktop, version 4. Plasma desktop is formerly known as the KDE,
                  or K Desktop Environment. Plasma desktop is built fully upon Qt technologies, with some plugins built to make
                  Plasma work better. Plasma desktop requires a machine with decent amount of processor and graphics
                  performance.',
    'dpkg-unity'=>'AOSC OS Beta with Unity desktop, version 7. Unity desktop is mostly known as the default Ubuntu
                  interface. This Unity build is brought to you by the AOSC OS development group, with several fixes and patches to
                  remove all Ubuntu specific features and interface. Unity is often time considered as unstable, but still, very
                  suitable for new users.',
    'dpkg-kodi'=>'AOSC OS Beta with Kodi media center, version 14. This version of AOSC OS is built for media
                  center computers or Linux-based TV boxes. Kodi media center is formerly known as XBMC (XBox Media Center), while
                  maintaining a small footprint, it&#39;s probably the most powerful media center solution you can find in all of
                  the UNIX/Linux computing world.',
    'dpkg-kodi-oobp'=>'OOBP not ready: Pending, will be released with Beta 2.',
    'dpkg-pantheon'=>'AOSC OS Beta with Pantheon desktop. Pantheon desktop is the default desktop environment used and
                  maintained by the ElementaryOS. Pantheon is a lightweight GTK+ 3 based desktop environment. Although being fast,
                  and probably beautiful, it&#39;s plagued with stability issues. Be careful when choosing this desktop
                  environment.',
    'dpkg-pantheon-oobp'=>'OOBP not ready: blocker, Pantheon is broken with the update to GTK+ 3.14.',
    'rpm-attention'=>'RPM based AOSC OS3 builds are considered highly experimental, some of the factors considered as known issue, as
                listed below:',
    'rpm-factor-1'=>'1. RPM builds, compared to DPKG, has large number of dependency overhead, which is brought by false reading
                  of dependencies of a library, ELF executables, even data files;',
    'rpm-factor-2'=>'2. RPM builds do not support PackageKit;',
    'rpm-gnome'=>'AOSC OS Beta with GNOME desktop, version 3.14. GNOME is a entirely free and open desktop
                  environment and application suite brought to you by the GNOME Foundation. GNOME is chosen to be the default
                  desktop environment for some major Linux distributions like Fedora.',
    'rpm-xfce'=>'AOSC OS Beta with XFCE desktop, version 4.11. XFCE is a lightweight, yet elegant and easy to use
                  desktop environment. XFCE is built upon GTK+ 2 interface toolkit, the predecessor to GTK+ 3 used by the GNOME
                  desktop environment. XFCE runs releatively fast on older machines dated all the way back to 2001 (for AOSC OS,
                  you need a machine that runs 64-bit operating system). XFCE is adapted to, cutting edge technologies like
                  systemd-logind.',
    'rpm-cinnamon'=>'AOSC OS Beta with Cinnamon Desktop, version 2.4. Cinnamon is a fork of GNOME shell. It&#39;s one
                  of the default desktop environments for Linux Mint with guaranteed ease of use. Cinnamon needs a machine with
                  decent amount of performance, just like the GNOME desktop. Arguably it is more adapted to mouse and keyboard use
                  than the GNOME shell.',
    'rpm-mate'=>'AOSC OS Beta with MATE desktop, version 1.8.1. MATE is a fork of GNOME 2.x, a perfect shelter
                  for those who goes strongly against the GNOME 3, and the GNOME shell. Although being a legacy fork of a desktop,
                  it&#39;s well adapted to newer technologies like UDisks-2 and UPower 0.99, they even have a plan to bring Wayland
                  support to it!',
    'rpm-kde'=>'AOSC OS Beta with (KDE) Plasma desktop, version 4. Plasma desktop is formerly known as the KDE,
                  or K Desktop Environment. Plasma desktop is built fully upon Qt technologies, with some plugins built to make
                  Plasma work better. Plasma desktop requires a machine with decent amount of processor and graphics
                  performance.',
    'rpm-unity'=>'AOSC OS Beta wdith Unity desktop, version 7. Unity desktop is mostly known as the default Ubuntu
                  interface. This Unity build is brought to you by the AOSC OS development group, with several fixes and patches to
                  remove all Ubuntu specific features and interface. Unity is often time considered as unstable, but still, very
                  suitable for new users.',
    'rpm-kodi'=>'AOSC OS Beta with Kodi media center, version 14. This version of AOSC OS is built for media
                  center computers or Linux-based TV boxes. Kodi media center is formerly known as XBMC (XBox Media Center), while
                  maintaining a small footprint, it&#39;s probably the most powerful media center solution you can find in all of
                  the UNIX/Linux computing world.',
    'rpm-kodi-oobp'=>'OOBP not ready: Pending, will be released with Beta 2.',
    'rpm-pantheon'=>'AOSC OS Beta with Pantheon desktop. Pantheon desktop is the default desktop environment used and
                  maintained by the ElementaryOS. Pantheon is a lightweight GTK+ 3 based desktop environment. Although being fast,
                  and probably beautiful, it&#39;s plagued with stability issues. Be careful when choosing this desktop
                  environment.',
    'rpm-pantheon-oobp'=>'OOBP not ready: blocker, Pantheon is broken with the update to GTK+ 3.14.',
    'rpm-server'=>'AOSC OS for Servers, formerly known as CentralPoint, is a lightweight and compact system release for small
                  scaled servers. AOSC OS for Servers comes with RPM based system only.',
    'server-oobp'=>'Release not ready: pending, AOSC OS3 not yet stable enought for server usage.',
    'legacy-os2'=>'AnthonOS is a desktop oriented Linux distribution with KDE Plasma 4 as its default desktop environment.
                  AnthonOS has a heavy customized interface called AnthonUI. AnthonOS will be maintained until summer of 2015.',
    'legacy-centralPoint'=>'CentralPoint is a server oriented Linux distribution. Development was halted after Beta 2 was released.
                  CentralPoint will continue to be released as AOSC OS for Servers, based on AOSC OS3.',
    'centralPoint-oobp'=>'This build is deprecated and not recommended for installing.',
  ),
  'zh-cn' => array(
    'dl-title'=>'下载',
    'dl-subtitle'=>'今天你尝鲜了吗？',
    'ws-brief'=>'下面列出的是 AOSC OS 各个版本的下载，包括目前仍在开发中的 AOSC OS3，以及旧版本 AOSC OS2（稳定但不再维护）。
                  详情请查看各个标签页。',
    'dl-instructions'=>'安装指引',
    'dl-dpkg'=>'DPKG 版本',
    'dl-rpm'=>'RPM 版本',
    'dl-server'=>'服务器版本',
    'dl-legacy'=>'AOSC OS2',
    'dl-installation'=>'如何安装',
    'dl-ways'=>'AOSC OS 有两种主要的安装方式',
    'dl-way1'=>'1. 下载 AOSC LiveKit 并使用其中的安装器；',
    'dl-way2'=>'2. 下载 AOSC OS 的 tarballs (压缩包) 发行，并手工部署；',
    'way-livekit-brief'=>'简易安装方法 (使用 AOSC LiveKit) ',
    'way-livkit-detail'=>'首先请下载 LiveKit 安装器镜像 (使用下方提供的按钮) ；',
    'livekit-contents'=>'此 ISO 镜像中提供了一些安装过程中必要的软件：',
    'livekit-gparted'=>'GParted 分区管理器，预备你的安装分区；',
    'livekit-midori'=>'Midori 浏览器，可以联网搜索疑难问题获得必要的解答；',
    'livekit-terminal'=>'终端模拟器 :-)；',
    'livekit-installer'=>'LiveKit 安装器，定制并部署 AOSC OS；',
    'way-tarball'=>'手动安装方法 (使用 Tarball 发行) ',
    'way-tarball-detail'=>'除了基于互联网的 LiveKit 的安装方式，你还可以直接使用 Tarball 发行进行安装，这种方式可以更快的获得最新版本的 AOSC OS。
                  一般情况下，你需要进行下列操作：',
    'way-tarball-step-1'=>'寻找一个可启动的发行版 LiveCD，必须是 x86_64 架构 (64位系统)。除了 Ubuntu、Debian 等较大的发行版外，ArchLinux、Gentoo 
                  的 Live 镜像也都是不错的选择；',
    'way-tarball-step-2'=>'下载我们提供的 Tarball 发行；',
    'way-tarball-step-3'=>'自行分区 (你当然可以分别分区给 /home, /boot, 等等);',
    'way-tarball-step-4'=>'挂载分区 (请用 man 命令参阅 mount 手册, ',
    'way-tarball-step-5'=>'解压缩 Tarball 发行 (请用 man 命令参阅 tar 手册，',
    'way-tarball-step-6'=>'复制宿主机的 DNS 到目标系统 (cp /etc/resolv.conf /path/to/mount/point/etc/);',
    'way-tarball-step-7'=>'挂在并绑定 /dev, /proc, 以及 /sys 目录到目标系统;',
    'way-tarball-step-8'=>'chroot 以进入目标系统 (请自行阅读 chroot 命令手册, ',
    'way-tarball-step-9'=>'安装GRUB (请自行查阅 GRUB 相关命令的手册);',
    'way-tarball-step-10'=>'卸载分区并重启;',
    'way-tarball-step-11'=>'Duang，它boom掉了(玩笑)。(如果没按预期进入系统, 请通过页脚的IRC或者把错误信息提交到',
    'bug-tracker'=>'Bug 跟踪平台',
    'install-tips'=>'祝折腾愉快……',
    'dpkg-gnome'=>'AOSC OS with GNOME。GNOME 是一个完全免费且开源的桌面环境。在GNOME基金会的帮助下，它拥有众多的应用套件。
                  GNOME被诸如 Fedora 之类的发行版选为默认的桌面环境。',
    'dl'=>'下载',
    'dl-link'=>'下载最新 Tarball 发行',
    'ss-link'=>'截屏',
    'dpkg-xfce'=>'AOSC OS with XFCE。XFCE 是一个优雅易用的轻量级桌面环境。XFCE 使用 GTK+ 2 工具包进行构建。GTK+ 2 是 GTK+ 3 的前身，
                  后者目前正在被 GNOME 所使用。相比于其它的 AOSC OS 发行版，XFCE 在老机器上运行的更快，甚至在 2001 年的机器上也运行良
                  好 (这个发行版可能仅仅要求处理器支持 64 位运算)。XFCE 也适配一些最新的技术，比如 systemd-logind。',
    'dpkg-cinnamon'=>'AOSC OS with Cinnamon。 Cinnamon 是 GNOME shell 的一个分支项目。Linux Mint 的默认桌面环境便使用了它。它友好且易用。
                  Cinnamon 对机器的性能要求较为苛刻，这个要求与 GNOME 相类似。平心而论，它在鼠标和键盘的适配上，比 GNOME　shell 还要出色。',
    'dpkg-mate'=>'AOSC OS with MATE。 MATE 是 GNOME 2.x 的分支项目, 是给那些喜欢 GNOME 又不适应 GNOME 3 和 GNOME shell 的人准备的。
                  尽管它是旧项目的分支，它还是很好的适应了新技术，如 UDisks-2 和 UPower 0.99。它的贡献者们也有计划，使它支持最新的 wayland 显示。',
    'dpkg-kde'=>'AOSC OS with (KDE) Plasma。 Plasma 桌面通常以 KDE (K Desktop Environment) 的身份被人熟知,
                  Plasma 桌面环境全部采用 Qt 进行构建。它拥有众多插件，可以让 Plasma 变得更有效率。但与此同时，Plasma 需要更好的处理器和更快的显卡性能。',
    'dpkg-unity'=>'AOSC OS with Unity。 由于 Ubuntu 的普及，Unity 桌面被人熟知。经过 AOSC OS 开发组的努力，
                  Unity 桌面已经移除了所有 Ubuntu 独有的构件和接口，并添加到 AOSC OS 中来。长期以来，Unity 被认为是不稳定的，但是对于新手,它仍然十分好用。',
    'dpkg-kodi'=>'AOSC OS with Kodi (多媒体中心)。这个发行版是 AOSC OS 为了多媒体中心和基于 Linux 的电视盒而构建的。Kodi 媒体中心通常以
                  XBMC (XBox Media Center) 的身份被人熟知。尽管这只是我们所有努力中的一小步，但这也许是你在 UNIX/Linux 中找到的最好用的多媒体解决方案。',
    'dpkg-kodi-oobp'=>'此发行版的 OOBP (开箱预览版) 仍在开发当中，届时将会在 Beta 2 中发布。',
    'dpkg-pantheon'=>'AOSC OS with Pantheon. Pantheon 桌面是 ElementaryOS 的默认桌面。它被 ElementaryOS 项目组所维护。
                  Pantheon 是一款基于 GTK+ 3 的轻量级桌面环境。尽管它快速美观，它仍然被一些小问题所困扰。谨慎选择它。',
    'dpkg-pantheon-oobp'=>'此发行版的 OOBP (开箱预览版) 仍在开发当中，Pantheon 在换用 GTK+ 3.14 后坏掉了。',
    'rpm-attention'=>'RPM 版本的 AOSC OS3 是一些具有实验性质的构建版本，我们列出了一些已知的问题：',
    'rpm-factor-1'=>'1. 相比于 DPKG，RPM 版本中软件包之间存在着大量的错误依赖，这些依赖可能由错误的库文件、ELF 和数据文件所引起;',
    'rpm-factor-2'=>'2. RPM 版本并不支持 PackageKit (可视化的软件包管理程序);',
    'rpm-gnome'=>'AOSC OS with GNOME。GNOME 是一个完全免费且开源的桌面环境。在GNOME基金会的帮助下，它拥有众多的应用套件。
                  GNOME被诸如 Fedora 之类的发行版选为默认的桌面环境。',
    'rpm-xfce'=>'AOSC OS with XFCE。XFCE 是一个优雅易用的轻量级桌面环境。XFCE 使用 GTK+ 2 工具包进行构建。GTK+ 2 是 GTK+ 3 的前身，
                  后者目前正在被 GNOME 所使用。相比于其它的 AOSC OS 发行版，XFCE 在老机器上运行的更快，甚至在 2001 年的机器上也运行良
                  好 (这个发行版可能仅仅要求处理器支持 64 位运算)。XFCE 也适配一些最新的技术，比如 systemd-logind。',
    'rpm-cinnamon'=>'AOSC OS with Cinnamon。 Cinnamon 是 GNOME shell 的一个分支项目。Linux Mint 的默认桌面环境便使用了它。它友好且易用。
                  Cinnamon 对机器的性能要求较为苛刻，这个要求与 GNOME 相类似。平心而论，它在鼠标和键盘的适配上，比 GNOME　shell 还要出色。',
    'rpm-mate'=>'AOSC OS with MATE。 MATE 是 GNOME 2.x 的分支项目, 是给那些喜欢 GNOME 又不适应 GNOME 3 和 GNOME shell 的人准备的。
                  尽管它是旧项目的分支，它还是很好的适应了新技术，如 UDisks-2 和 UPower 0.99。它的贡献者们也有计划，使它支持最新的 wayland 显示。',
    'rpm-kde'=>'AOSC OS with (KDE) Plasma。 Plasma 桌面通常以 KDE (K Desktop Environment) 的身份被人熟知,
                  Plasma 桌面环境全部采用 Qt 进行构建。它拥有众多插件，可以让 Plasma 变得更有效率。但与此同时，Plasma 需要更好的处理器和更快的显卡性能。',
    'rpm-unity'=>'AOSC OS with Unity。 由于 Ubuntu 的普及，Unity 桌面已经被人们熟知。经过 AOSC OS 开发组的努力，
                  Unity 桌面已经移除了所有 Ubuntu 独有的构件和接口，并添加到AOSC OS中来。长期以来，Unity 被认为是不稳定的，但是对于新手,它仍然十分好用。',
    'rpm-kodi'=>'AOSC OS with Kodi (多媒体中心)。这个发行版是 AOSC OS 为了多媒体中心和基于 Linux 的电视盒而构建的。Kodi 媒体中心通常以
                  XBMC (XBox Media Center) 的身份被人熟知。尽管这只是我们所有努力中的一小步，但这也许是你在 UNIX/Linux 中找到的最好用的多媒体解决方案。',
    'rpm-kodi-oobp'=>'此发行版的 OOBP (开箱预览版) 仍在开发当中，届时将会在 Beta 2 中发布。',
    'rpm-pantheon'=>'AOSC OS with Pantheon. Pantheon 桌面是 ElementaryOS 的默认桌面。它被 ElementaryOS 项目组所维护。
                  Pantheon 是一款基于 GTK+ 3 的轻量级桌面环境。尽管它快速美观，它仍然被一些小问题所困扰。谨慎选择它。',
    'rpm-pantheon-oobp'=>'此发行版的 OOBP (开箱预览版) 仍在开发当中，Pantheon 在换用 GTK+ 3.14 后坏掉了。',
    'rpm-server'=>'AOSC OS for Servers。它在上一个版本中被称作 CentralPoint。它为轻量级的小型服务器而设计，目前仅支持 RPM 软件包管理。',
    'server-oobp'=>'该版本受限于 AOSC OS3 的开发,当前的 AOSC OS3 还不够稳定。',
    'legacy-os2'=>'AnthonOS 使用了KDE Plasma 4桌面环境，并面向桌面用户。
                  AnthonOS 有一个高度定制化的交互设计 —— AnthonUI，AnthonOS 将被支持到 2015 年夏季。',
    'legacy-centralPoint'=>'CentralPoint 是面向服务器的发行版本。在 Beta 2 之后，此版本的开发已停止。
                  CentralPoint 将继续以 AOSC OS for Servers 的名称发行，它将直接基于 AOSC OS3。',
    'centralPoint-oobp'=>'此发行版已被废弃，并不再提供安装。',
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
    <meta name="description" content="AOSC OS Downloads" />
    <meta name="keywords" content="AOSC OS OOBP Preview Out Of Box 安同 Linux 开箱即用 预览 OS3 Download AnthonOS OS2" />
    <meta name="author" content="Junde Yi&lt;lmy441900@gmail.com&gt;, Jeff Bai &lt;jeffbaichina@members.fsf.org&gt;" />
    <link rel="icon" href="/img/favicons/aosc-os.ico" />
    <title>AOSC OS - Downloads</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/css/blog.css" rel="stylesheet" />
    <link href="/css/common.css" rel="stylesheet" />
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
            <h1><?php echo $langs[$lang]['dl-title'];?></h1>
            <p><?php echo $langs[$lang]['dl-subtitle'];?></p>
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
        <div class="blog-post">
          <p><?php echo $langs[$lang]['ws-brief'];?></p>
          <hr class="divider" />
          <ul class="nav nav-tabs">
            <li role="presentation" class="active">
              <a href="#help" data-toggle="tab"><?php echo $langs[$lang]['dl-instructions'];?></a>
            </li>
            <li role="presentation">
              <a href="#dpkg" data-toggle="tab"><?php echo $langs[$lang]['dl-dpkg'];?></a>
            </li>
            <li role="presentation">
              <a href="#rpm" data-toggle="tab"><?php echo $langs[$lang]['dl-rpm'];?></a>
            </li>
            <li role="presentation">
              <a href="#server" data-toggle="tab"><?php echo $langs[$lang]['dl-server'];?></a>
            </li>
            <li role="presentation">
              <a href="#os2" data-toggle="tab"><?php echo $langs[$lang]['dl-legacy'];?></a>
            </li>
          </ul>

          <div id="my-tab-content" class="tab-content">
            <div class="tab-pane active" id="help">
              <h2><?php echo $langs[$lang]['dl-installation'];?></h2>
              <p><?php echo $langs[$lang]['dl-ways'];?>
                <ul>
                  <li><?php echo $langs[$lang]['dl-way1'];?></li>
                  <li><?php echo $langs[$lang]['dl-way2'];?></li>
                </ul>
              </p>
              <hr class="divider" />
              <h2><?php echo $langs[$lang]['way-livekit-brief'];?></h2>
              <p><?php echo $langs[$lang]['way-livkit-detail'];?></p>
              <p><?php echo $langs[$lang]['livekit-contents'];?>
                <ul>
                  <li><?php echo $langs[$lang]['livekit-gparted'];?></li>
                  <li><?php echo $langs[$lang]['livekit-midori'];?></li>
                  <li><?php echo $langs[$lang]['livekit-terminal'];?></li>
                  <li><?php echo $langs[$lang]['livekit-installer'];?></li>
                </ul>
                <a href="http://repo.anthonos.org/os3-releases/01_Beta/00_LiveKit/LATEST.iso" class="btn btn-default"><?php echo $langs[$lang]['dl'];?></a>
              </p>
              <hr class="divider" />
              <h2><?php echo $langs[$lang]['way-tarball'];?></h2>
              <p><?php echo $langs[$lang]['way-tarball-detail'];?>
                <ul>
                  <li><?php echo $langs[$lang]['way-tarball-step-1'];?></li>
                  <li><?php echo $langs[$lang]['way-tarball-step-2'];?></li>
                  <li><?php echo $langs[$lang]['way-tarball-step-3'];?></li>
                  <li><?php echo $langs[$lang]['way-tarball-step-4'];?>
                    <a href="http://linux.die.net/man/8/mount">here</a>);</li>
                  <li><?php echo $langs[$lang]['way-tarball-step-5'];?>
                    <a href="http://linux.die.net/man/1/tar">here</a>);</li>
                  <li><?php echo $langs[$lang]['way-tarball-step-6'];?></li>
                  <li><?php echo $langs[$lang]['way-tarball-step-7'];?></li>
                  <li><?php echo $langs[$lang]['way-tarball-step-8'];?>
                    <a href="http://linux.die.net/man/2/chroot">here</a>);</li>
                  <li><?php echo $langs[$lang]['way-tarball-step-9'];?></li>
                  <li><?php echo $langs[$lang]['way-tarball-step-10'];?></li>
                  <li><?php echo $langs[$lang]['way-tarball-step-11'];?>
                    <a href="http://bugs.anthonos.org"><?php echo $langs[$lang]['bug-tracker'];?></a>);</li>
                </ul>
              </p>
              <hr class="divider" />
              <p><?php echo $langs[$lang]['install-tips'];?></p>
            </div>
            <div class="tab-pane" id="dpkg">
              <div class="row">
                <div class="col-sm-2">
                  <img src="/img/oobp-logo/gnome-oobp.png" width="96px" height="96px" />
                </div>
                <div class="col-sm-10">
                  <h2>AOSC OS with GNOME</h2>
                  <p><?php echo $langs[$lang]['dpkg-gnome'];?></p>
                  <a href="http://repo.anthonos.org/os3-releases/01_Beta/01_Tarballs/aosc-os3_gnome-beta_pichu_dpkg_en-US.tar.xz" class="btn btn-default"><?php echo $langs[$lang]['dl-link'];?></a>
                  <a href="https://portal.anthonos.org/aosc-os/screenshot/#gnome" class="btn btn-default"><?php echo $langs[$lang]['ss-link'];?></a>
                </div>
              </div>
              <hr class="divider" />
              <div class="row">
                <div class="col-sm-2">
                  <img src="/img/oobp-logo/xfce-oobp.png" width="96px" height="96px" />
                </div>
                <div class="col-sm-10">
                  <h2>AOSC OS with XFCE</h2>
                  <p><?php echo $langs[$lang]['dpkg-xfce'];?></p>
                  <a href="http://repo.anthonos.org/os3-releases/01_Beta/01_Tarballs/aosc-os3_xfce-beta_pichu_dpkg_en-US.tar.xz" class="btn btn-default"><?php echo $langs[$lang]['dl-link'];?></a>
                  <a href="https://portal.anthonos.org/aosc-os/screenshot/#xfce" class="btn btn-default"><?php echo $langs[$lang]['ss-link'];?></a>
                </div>
              </div>
              <hr class="divider" />
              <div class="row">
                <div class="col-sm-2">
                  <img src="/img/oobp-logo/cinnamon-oobp.png" width="96px" height="96px" />
                </div>
                <div class="col-sm-10">
                  <h2>AOSC OS with Cinnamon</h2>
                  <p><?php echo $langs[$lang]['dpkg-cinnamon'];?></p>
                  <a href="http://repo.anthonos.org/os3-releases/01_Beta/01_Tarballs/aosc-os3_cinnamon-beta_pichu_dpkg_en-US.tar.xz" class="btn btn-default"><?php echo $langs[$lang]['dl-link'];?></a>
                  <a href="https://portal.anthonos.org/aosc-os/screenshot/#cinnamon" class="btn btn-default"><?php echo $langs[$lang]['ss-link'];?></a>
                </div>
              </div>
              <hr class="divider" />
              <div class="row">
                <div class="col-sm-2">
                  <img src="/img/oobp-logo/mate-oobp.png" width="96px" height="96px" />
                </div>
                <div class="col-sm-10">
                  <h2>AOSC OS with MATE</h2>
                  <p><?php echo $langs[$lang]['dpkg-mate'];?></p>
                  <a href="http://repo.anthonos.org/os3-releases/01_Beta/01_Tarballs/aosc-os3_mate-beta_pichu_dpkg_en-US.tar.xz" class="btn btn-default"><?php echo $langs[$lang]['dl-link'];?></a>
                  <a href="https://portal.anthonos.org/aosc-os/screenshot/#mate" class="btn btn-default"><?php echo $langs[$lang]['ss-link'];?></a>
                </div>
              </div>
              <hr class="divider" />
              <div class="row">
                <div class="col-sm-2">
                  <img src="/img/oobp-logo/kde-oobp.png" width="96px" height="96px" />
                </div>
                <div class="col-sm-10">
                  <h2>AOSC OS with Plasma</h2>
                  <p><?php echo $langs[$lang]['dpkg-kde'];?></p>
                  <a href="http://repo.anthonos.org/os3-releases/01_Beta/01_Tarballs/aosc-os3_kde-beta_pichu_dpkg_en-US.tar.xz" class="btn btn-default"><?php echo $langs[$lang]['dl-link'];?></a>
                  <a href="javascript:void(0);" class="btn btn-default disabled"><?php echo $langs[$lang]['ss-link'];?></a>
                </div>
              </div>
              <hr class="divider" />
              <div class="row">
                <div class="col-sm-2">
                  <img src="/img/oobp-logo/unity-oobp.png" width="96px" height="96px" />
                </div>
                <div class="col-sm-10">
                  <h2>AOSC OS with Unity</h2>
                  <p><?php echo $langs[$lang]['dpkg-unity'];?></p>
                  <a href="http://repo.anthonos.org/os3-releases/01_Beta/01_Tarballs/aosc-os3_unity-beta_pichu_dpkg_en-US.tar.xz" class="btn btn-default"><?php echo $langs[$lang]['dl-link'];?></a>
                  <a href="https://portal.anthonos.org/aosc-os/screenshot/#unity" class="btn btn-default"><?php echo $langs[$lang]['ss-link'];?></a>
                </div>
              </div>
              <hr class="divider" />
              <div class="row">
                <div class="col-sm-2">
                  <img src="/img/oobp-logo/kodi-oobp.png" width="96px" height="96px" />
                </div>
                <div class="col-sm-10">
                  <h2>AOSC OS with Kodi</h2>
                  <p><?php echo $langs[$lang]['dpkg-kodi'];?></p>
                  <div class="alert alert-danger"><?php echo $langs[$lang]['dpkg-kodi-oobp'];?></div>
                </div>
              </div>
              <hr class="divider" />
              <div class="row">
                <div class="col-sm-2">
                  <img src="/img/oobp-logo/pantheon-oobp.png" width="96px" height="96px" />
                </div>
                <div class="col-sm-10">
                  <h2>AOSC OS with Pantheon</h2>
                  <p><?php echo $langs[$lang]['dpkg-pantheon'];?></p>
                  <div class="alert alert-danger"><?php echo $langs[$lang]['dpkg-pantheon-oobp'];?></div>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="rpm">
              <div class="alert alert-danger" role="alert">
                <p><?php echo $langs[$lang]['rpm-attention'];?></p>
                <ul>
                  <li><?php echo $langs[$lang]['rpm-factor-1'];?></li>
                  <li><?php echo $langs[$lang]['rpm-factor-2'];?></li>
                </ul>
              </div>
              <div class="row">
                <div class="col-sm-2">
                  <img src="/img/oobp-logo/gnome-oobp.png" width="96px" height="96px" />
                </div>
                <div class="col-sm-10">
                  <h2>AOSC OS with GNOME</h2>
                  <p><?php echo $langs[$lang]['rpm-gnome'];?></p>
                  <a href="http://repo.anthonos.org/os3-releases/01_Beta/01_Tarballs/aosc-os3_gnome-beta_pichu_rpm_en-US.tar.xz" class="btn btn-default" class="btn btn-default"><?php echo $langs[$lang]['dl-link'];?></a>
                  <a href="https://portal.anthonos.org/aosc-os/screenshot/#gnome" class="btn btn-default"><?php echo $langs[$lang]['ss-link'];?></a>
                </div>
              </div>
              <hr class="divider" />
              <div class="row">
                <div class="col-sm-2">
                  <img src="/img/oobp-logo/xfce-oobp.png" width="96px" height="96px" />
                </div>
                <div class="col-sm-10">
                  <h2>AOSC OS with XFCE</h2>
                  <p><?php echo $langs[$lang]['rpm-xfce'];?></p>
                  <a href="http://repo.anthonos.org/os3-releases/01_Beta/01_Tarballs/aosc-os3_xfce-beta_pichu_rpm_en-US.tar.xz" class="btn btn-default" class="btn btn-default"><?php echo $langs[$lang]['dl-link'];?></a>
                  <a href="https://portal.anthonos.org/aosc-os/screenshot/#xfce" class="btn btn-default"><?php echo $langs[$lang]['ss-link'];?></a>
                </div>
              </div>
              <hr class="divider" />
              <div class="row">
                <div class="col-sm-2">
                  <img src="/img/oobp-logo/cinnamon-oobp.png" width="96px" height="96px" />
                </div>
                <div class="col-sm-10">
                  <h2>AOSC OS with Cinnamon</h2>
                  <p><?php echo $langs[$lang]['rpm-cinnamon'];?></p>
                  <a href="http://repo.anthonos.org/os3-releases/01_Beta/01_Tarballs/aosc-os3_cinnamon-beta_pichu_rpm_en-US.tar.xz" class="btn btn-default" class="btn btn-default"><?php echo $langs[$lang]['dl-link'];?></a>
                  <a href="https://portal.anthonos.org/aosc-os/screenshot/#cinnamon" class="btn btn-default"><?php echo $langs[$lang]['ss-link'];?></a>
                </div>
              </div>
              <hr class="divider" />
              <div class="row">
                <div class="col-sm-2">
                  <img src="/img/oobp-logo/mate-oobp.png" width="96px" height="96px" />
                </div>
                <div class="col-sm-10">
                  <h2>AOSC OS with MATE</h2>
                  <p><?php echo $langs[$lang]['rpm-mate'];?></p>
                  <a href="http://repo.anthonos.org/os3-releases/01_Beta/01_Tarballs/aosc-os3_mate-beta_pichu_rpm_en-US.tar.xz" class="btn btn-default" class="btn btn-default"><?php echo $langs[$lang]['dl-link'];?></a>
                  <a href="https://portal.anthonos.org/aosc-os/screenshot/#mate" class="btn btn-default"><?php echo $langs[$lang]['ss-link'];?></a>
                </div>
              </div>
              <hr class="divider" />
              <div class="row">
                <div class="col-sm-2">
                  <img src="/img/oobp-logo/kde-oobp.png" width="96px" height="96px" />
                </div>
                <div class="col-sm-10">
                  <h2>AOSC OS with Plasma</h2>
                  <p><?php echo $langs[$lang]['rpm-kde'];?></p>
                  <a href="http://repo.anthonos.org/os3-releases/01_Beta/01_Tarballs/aosc-os3_kde-beta_pichu_rpm_en-US.tar.xz" class="btn btn-default" class="btn btn-default"><?php echo $langs[$lang]['dl-link'];?></a>
                  <a href="javascript:void(0);" class="btn btn-default disabled"><?php echo $langs[$lang]['ss-link'];?></a>
                </div>
              </div>
              <hr class="divider" />
              <div class="row">
                <div class="col-sm-2">
                  <img src="/img/oobp-logo/unity-oobp.png" width="96px" height="96px" />
                </div>
                <div class="col-sm-10">
                  <h2>AOSC OS with Unity</h2>
                  <p><?php echo $langs[$lang]['rpm-unity'];?></p>
                  <a href="http://repo.anthonos.org/os3-releases/01_Beta/01_Tarballs/aosc-os3_unity-beta_pichu_rpm_en-US.tar.xz" class="btn btn-default" class="btn btn-default"><?php echo $langs[$lang]['dl-link'];?></a>
                  <a href="https://portal.anthonos.org/aosc-os/screenshot/#unity" class="btn btn-default"><?php echo $langs[$lang]['ss-link'];?></a>
                </div>
              </div>
              <hr class="divider" />
              <div class="row">
                <div class="col-sm-2">
                  <img src="/img/oobp-logo/kodi-oobp.png" width="96px" height="96px" />
                </div>
                <div class="col-sm-10">
                  <h2>AOSC OS with Kodi</h2>
                  <p><?php echo $langs[$lang]['rpm-kodi'];?></p>
                  <div class="alert alert-danger"><?php echo $langs[$lang]['rpm-kodi-oobp'];?></div>
                </div>
              </div>
              <hr class="divider" />
              <div class="row">
                <div class="col-sm-2">
                  <img src="/img/oobp-logo/pantheon-oobp.png" width="96px" height="96px" />
                </div>
                <div class="col-sm-10">
                  <h2>AOSC OS with Pantheon</h2>
                  <p><?php echo $langs[$lang]['rpm-pantheon'];?></p>
                  <div class="alert alert-danger"><?php echo $langs[$lang]['rpm-pantheon-oobp'];?></div>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="server">
              <div class="alert alert-danger" role="alert">
                <p><?php echo $langs[$lang]['rpm-attention'];?></p>
                <ul>
                  <li><?php echo $langs[$lang]['rpm-factor-1'];?></li>
                  <li><?php echo $langs[$lang]['rpm-factor-2'];?></li>
                </ul>
              </div>
              <div class="row">
                <div class="col-sm-2">
                  <img src="/img/cp.png" width="96px" height="96px" />
                </div>
                <div class="col-sm-10">
                  <h2>AOSC OS for Servers</h2>
                  <p><?php echo $langs[$lang]['rpm-server'];?></p>
                  <div class="alert alert-danger"><?php echo $langs[$lang]['server-oobp'];?></div>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="os2">
              <div class="row">
                <div class="col-sm-2">
                  <img src="/img/anos.png" width="96px" height="96px" />
                </div>
                <div class="col-sm-10">
                  <h2>AnthonOS (AOSC OS2)</h2>
                  <p><?php echo $langs[$lang]['legacy-os2'];?></p>
                  <a href="http://repo.anthonos.org/os2-releases/anthonos/july-2014/patch-1/anthonos_final-doge_kde_pc%2bmac_en-US_patch-1.iso" class="btn btn-default">Download English Release</a>
                  <a href="http://repo.anthonos.org/os2-releases/anthonos/july-2014/patch-1/anthonos_final-doge_kde_pc%2bmac_zh-CN_patch-1.iso" class="btn btn-default">下载简体中文版本</a>
                  <a href="http://repo.anthonos.org/os2-releases/anthonos/july-2014/patch-1/anthonos_final-doge_kde_pc%2bmac_zh-TW_patch-1.iso" class="btn btn-default">下載正體中文版本</a>
                  <a href="https://portal.anthonos.org/aosc-os/screenshot/" class="btn btn-default"><?php echo $langs[$lang]['ss-link'];?></a>
                </div>
              </div>
              <hr class="divider" />
              <div class="row">
                <div class="col-sm-2">
                  <img src="/img/cp.png" width="96px" height="96px" />
                </div>
                <div class="col-sm-10">
                  <h2>CentralPoint (AOSC OS2)</h2>
                  <p><?php echo $langs[$lang]['legacy-centralPoint'];?></p>
                  <div class="alert alert-danger"><?php echo $langs[$lang]['centralPoint-oobp'];?></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><?php include $_SERVER['DOCUMENT_ROOT'].'/templates/footer.php';?>
  <script src="/js/jquery-min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script type="text/javascript">
      jQuery(document).ready(function ($) {
        $(&amp;#39;#tabs&amp;#39;).tab();
      });
</script></body>
</html>
