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
    'dl-subtitle'=>'给我看点新鲜的',
    'ws-brief'=>'下面列出的是AOSC OS的各大发行版，其中包括最新的OS3系列和历史遗留的OS2系列（稳定但不再维护）
                详情请查看各自的标签',
    'dl-instructions'=>'OS3简介',
    'dl-dpkg'=>'DPKG管理器版',
    'dl-rpm'=>'RPM管理器版',
    'dl-server'=>'服务器版',
    'dl-legacy'=>'OS2历史遗留版',
    'dl-installation'=>'如何安装',
    'dl-ways'=>'AOSC OS有两种可选的安装方式',
    'dl-way1'=>'1. 下载AOSC LiveKit并使用其中的安装器安装它',
    'dl-way2'=>'2. 下载AOSC OS的tarballs（压缩包）并且以传统的方式手工部署它',
    'way-livekit-brief'=>'使用AOSC LiveKit的安装方法',
    'way-livkit-detail'=>'首先请下载带有LiveKit安装器的AOSC OS发行版，需要下载的iso镜像已在下面的按钮中提供',
    'livekit-contents'=>'这张iso镜像中提供了一些安装过程中必要的软件:',
    'livekit-gparted'=>'GParted 分区管理器，可以预备你的安装分区;',
    'livekit-midori'=>'Midori 浏览器，可以联网搜索问题获得必要的解答;',
    'livekit-terminal'=>'Terminal 模拟器，为了让你见上帝:-);',
    'livekit-installer'=>'LiveKit 安装器，可以对AOSC OS做些安装上的个性化设置;',
    'way-tarball'=>'使用Tarballs手动部署系统的安装方法',
    'way-tarball-detail'=>'除了基于互联网的LiveKit的安装模式，另一种办法是直接使用tarballs进行安装，这钟方式可以更快的获得我们提供的最新版本。
                一般情况下，你需要进行下列操作：',
    'way-tarball-step-1'=>'寻找一个可启动的发行版LiveCD，必须是x86_64架构的（64位系统）。除了ubuntu、debian等较大的发行版外archlinux、gentoo的镜像也都是不错的选择;',
    'way-tarball-step-2'=>'下载我们提供的tarball(s);',
    'way-tarball-step-3'=>'自行分区（你当然可以分别分区给 /home, /boot, 等等);',
    'way-tarball-step-4'=>'挂载分区MF,请用man命令自行参阅mount手册，',
    'way-tarball-step-5'=>'解压缩tarball(s)（RTFM,请用man命令自行参阅tar手册，',
    'way-tarball-step-6'=>'复制宿主机的DNS到目标系统（cp /etc/resolv.conf /path/to/mount/point/etc/);',
    'way-tarball-step-7'=>'挂在并绑定 /dev /proc /sys 目录到目标系统;',
    'way-tarball-step-8'=>'　chroot　，以进入目标系统（请阅读chroot命令的Fxxking Manual,',
    'way-tarball-step-9'=>'安装GRUB（自行谷歌啊, man啊...);',
    'way-tarball-step-10'=>'卸载分区并重启;',
    'way-tarball-step-11'=>'Duang，它boom掉了（如果没按预期进入系统, 请通过页脚的IRC或者把错误信息放在',
    'bug-tracker'=>'bug跟踪',
    'install-tips'=>'欢迎开坑...',
    'dpkg-gnome'=>'AOSC OS with GNOME, 版本号 3.14。GNOME 是一个完全免费且开源的桌面环境。在GNOME基金会的帮助下，它配套拥有众多应用套件。
                    GNOME被许多发行版选为默认的桌面环境，如Fedora',
    'dl'=>'下载',
    'dl-link'=>'下载最新发布',
    'ss-link'=>'截屏',
    'dpkg-xfce'=>'AOSC OS with XFCE, 版本号 4.11. XFCE 是一个轻量级, 并且优雅易用的桌面环境。XFCE基于GTK+ 2的工具链接口进行构建。GTK+ 2也是GTK+ 3的前身，后者正在被GNOME所使用。XFCE相对来说会在老机器上运行的更快，甚至于可以跑在2001年的机器上（对于AOSC OS来说，这个发行版只要求机器支持安装64位操作系统）。XFCE适配尖端技术，如systemd-logind',
    'dpkg-cinnamon'=>'AOSC OS with Cinnamon, 版本号 2.4. Cinnamon是一个GNOME shell的分支项目. 它是Linux Mint的默认桌面环境，友好而易用。
                  Cinnamon 机器性能要求高，其要求可能与GNOME接近。平心而论，它在鼠标和键盘的适配上，比GNOME　shell还要优秀',
    'dpkg-mate'=>'AOSC OS with MATE, 版本号 1.8.1。 MATE 是GNOME 2.x的分支项目, 是给那些喜欢GNOME又强烈反感GNOME 3和GNOME shell的人所准备。
                    尽管它是历史遗留桌面分支，它还是很好的适应了新技术：如UDisks-2和UPower 0.99，贡献者们也有计划加入最新的wayland支持',
    'dpkg-kde'=>'AOSC OS with (KDE) Plasma, 版本号 4。 Plasma桌面通常以KDE（K Desktop Environment）的身份被人熟知,
                    Plasma桌面完全使用Qt构建，并且拥有好用的插件让Plasma更高效的工作。Plasma需要处理器和显卡拥有较好的性能',
    'dpkg-unity'=>'AOSC OS with Unity, 版本号 ７。 Unity desktop桌面被人熟知是因为它是Ubuntu的默认桌面。经过AOSC OS开发组的修bug和打补丁，
                    Unity桌面已经移除了Ubuntu特有的构件和接口，并且能被你所使用。Unity长期以来被认为是不很稳定，但是对于新手仍是十分好用的',
    'dpkg-kodi'=>'AOSC OS with Kodi 媒体中心, 版本号 14. 这一版AOSC OS是为了多媒体中心或是基于Linux的电视盒而构建. Kodi媒体中心通常被人以
                    XBMC（XBox Media Center)的身份所熟知, 尽管这只是我们的一小步，但也许这是你能在UNIX/Linux下找到的最好用的多媒体解决方案',
    'dpkg-kodi-oobp'=>'OOBP（开箱预览版)没有就绪: 等待状态, 将会在Beta 2时发布',
    'dpkg-pantheon'=>'AOSC OS with Pantheon. Pantheon 桌面是ElementaryOS的默认桌面，并被其所维护。
                    Pantheon 是轻量级的基于GTK+ 3的桌面环境。尽管它快速，甚至美观，它仍被一些小问题所困扰。谨慎选择它',
    'dpkg-pantheon-oobp'=>'OOBP（开箱预览版)没有就绪: 阻碍状态： Pantheon在升级至GTK+ 3.14时坏掉了',
    'rpm-attention'=>'基于RPM管理器的AOSC OS3是非常实验性质的的构建，一些已知的问题如下：',
    'rpm-factor-1'=>'1. 相比于DPKG，RPM式构建,有大量的依赖杂项，这些杂项可能由错误的读取了库文件、不正确的ELF可执行，甚至是错误文件所引起',
    'rpm-factor-2'=>'2. RPM式构建并不支持PackageKit（可视化的软件包管理程序）;',
    'rpm-gnome'=>'AOSC OS with GNOME, 版本号 3.14。GNOME 是一个完全免费且开源的桌面环境。在GNOME基金会的帮助下，它配套拥有众多应用套件。
                    GNOME被许多发行版选为默认的桌面环境，如Fedora',
    'rpm-xfce'=>'AOSC OS with XFCE, 版本号 4.11. XFCE 是一个轻量级, 并且优雅易用的桌面环境。XFCE基于GTK+ 2的工具链接口进行构建。
                    GTK+ 2也是GTK+ 3的前身，后者正在被GNOME所使用。XFCE相对来说会在老机器上运行的更快，甚至于可以跑在2001年的机器上
                    （对于AOSC OS来说，这个发行版只要求机器支持安装64位操作系统）。XFCE适配尖端技术，如systemd-logind',
    'rpm-cinnamon'=>'AOSC OS with Cinnamon, 版本号 2.4. Cinnamon　是一个GNOME shell的分支项目. 它是Linux Mint的默认桌面环境，友好而易用。
                    Cinnamon对机器性能要求高，其要求可能与GNOME接近。平心而论，它在鼠标和键盘的适配上，做的比GNOME　shell还要优秀',
    'rpm-mate'=>'AOSC OS with MATE, 版本号 1.8.1. MATE 是GNOME 2.x的分支项目, 是给那些喜欢GNOME又强烈反感GNOME 3和GNOME shell的人所准备。
                    尽管它是历史遗留桌面分支，它还是很好的适应了新技术：如UDisks-2和UPower 0.99，贡献者们也有计划加入最新的wayland支持',
    'rpm-kde'=>'AOSC OS with（KDE) Plasma, 版本号 4。 Plasma桌面通常以KDE（K Desktop Environment）的身份被人熟知,
                    Plasma桌面完全使用Qt构建，并且拥有好用的插件让Plasma更高效的工作。Plasma需要处理器和显卡拥有较好的性能',
    'rpm-unity'=>'AOSC OS with Unity, 版本号 ７。 Unity desktop桌面被人熟知是因为它是Ubuntu的默认桌面。经过AOSC OS开发组的修bug和打补丁，
                    Unity桌面已经移除了Ubuntu特有的构件和接口，并且能被你所使用。Unity长期以来被认为是不很稳定，但是对于新手仍是十分好用的',
    'rpm-kodi'=>'AOSC OS with Kodi 媒体中心, 版本号 14. 这一版AOSC OS是为了多媒体中心或是基于Linux的电视盒而构建. Kodi媒体中心通常被人以
                    XBMC （XBox Media Center)的身份所熟知, 尽管这只是我们的一小步，但也许这是你能在UNIX/Linux下找到的最好用的多媒体解决方案',
    'rpm-kodi-oobp'=>'OOBP（开箱预览版)没有就绪: 等待状态, 将会在Beta 2时发布',
    'rpm-pantheon'=>'AOSC OS with Pantheon. Pantheon 桌面是ElementaryOS的默认桌面，并被其所维护。
                    Pantheon 是轻量级的基于GTK+ 3的桌面环境。尽管它快速，甚至美观，它仍被一些小问题所困扰。谨慎选择它',
    'rpm-pantheon-oobp'=>'OOBP(（开箱预览版)没有就绪: 阻碍状态： Pantheon在升级至GTK+ 3.14时坏掉了',
    'rpm-server'=>'AOSC OS for Servers, 以CentralPoint的名称被人熟知, 是轻量级的紧凑的系统版本，可以用在小规模的服务器上。仅支持RPM软件包管理。',
    'server-oobp'=>'未就绪的版本: 等待状态, AOSC OS3还不足以稳定到可以为服务器所使用',
    'legacy-os2'=>'AnthonOS 使用了KDE Plasma 4桌面环境，并面向桌面用户。
                  AnthonOS 有一个高度定制的交互设计——AnthonUI. AnthonOS将被支持到2015年夏季',
    'legacy-centralPoint'=>'CentralPoint是面向服务器的发行版本.在Beta 2之后，开发即被中断。
                  CentralPoint 将继续以AOSC OS for Servers的形式发行，它将直接基于AOSC OS3',
    'centralPoint-oobp'=>'该构建已被废弃，并不再推荐安装',
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
                  <a href="https://portal.anthonos.org/aosc-os/screenshot/" class="btn btn-default"><?php echo $langs[$lang]['ss-link'];?></a>
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
                  <a href="https://portal.anthonos.org/aosc-os/screenshot/" class="btn btn-default"><?php echo $langs[$lang]['ss-link'];?></a>
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
                  <a href="https://portal.anthonos.org/aosc-os/screenshot/" class="btn btn-default"><?php echo $langs[$lang]['ss-link'];?></a>
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
                  <a href="https://portal.anthonos.org/aosc-os/screenshot/" class="btn btn-default"><?php echo $langs[$lang]['ss-link'];?></a>
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
                  <a href="https://portal.anthonos.org/aosc-os/screenshot/" class="btn btn-default"><?php echo $langs[$lang]['ss-link'];?></a>
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
                  <a href="https://portal.anthonos.org/aosc-os/screenshot/" class="btn btn-default"><?php echo $langs[$lang]['ss-link'];?></a>
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
                  <a href="https://portal.anthonos.org/aosc-os/screenshot/" class="btn btn-default"><?php echo $langs[$lang]['ss-link'];?></a>
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
                  <a href="https://portal.anthonos.org/aosc-os/screenshot/" class="btn btn-default"><?php echo $langs[$lang]['ss-link'];?></a>
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
                  <a href="https://portal.anthonos.org/aosc-os/screenshot/" class="btn btn-default"><?php echo $langs[$lang]['ss-link'];?></a>
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
                  <a href="https://portal.anthonos.org/aosc-os/screenshot/" class="btn btn-default"><?php echo $langs[$lang]['ss-link'];?></a>
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
                  <a href="https://portal.anthonos.org/aosc-os/screenshot/" class="btn btn-default"><?php echo $langs[$lang]['ss-link'];?></a>
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
                  <a href="https://portal.anthonos.org/aosc-os/screenshot/" class="btn btn-default"><?php echo $langs[$lang]['ss-link'];?></a>
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
