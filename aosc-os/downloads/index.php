<?php define('IN_FRAME', true);
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/lang.php';?>
<!DOCTYPE html>
<html lang="en_US">
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
    <?php include $_SERVER['DOCUMENT_ROOT'].'/templates/font.php'; ?>
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
            <h1>Downloads</h1>
            <p>Something new today?</p>
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
          <p>Here below are the downloads for AOSC OS distributions, including the new, experimental OS3 and legacy OS2 (stable).
          Check the tabs below for more information.</p>
          <hr class="divider" />
          <ul class="nav nav-tabs">
            <li role="presentation" class="active">
              <a href="#dpkg" data-toggle="tab">DPKG Based</a>
            </li>
            <li role="presentation">
              <a href="#rpm" data-toggle="tab">RPM Based</a>
            </li>
            <li role="presentation">
              <a href="#server" data-toggle="tab">for Servers</a>
            </li>
            <li role="presentation">
              <a href="#help" data-toggle="tab">Instructions (OS3)</a>
            </li>
            <li role="presentation">
              <a href="#os2" data-toggle="tab">Legacy (OS2)</a>
            </li>
          </ul>
          <div id="my-tab-content" class="tab-content">
            <div class="tab-pane active" id="dpkg">
              <br />
              <div class="row">
                <div class="col-sm-2">
                  <img src="/img/oobp-logo/gnome-oobp.png" width="96px" height="96px" />
                </div>
                <div class="col-sm-10">
                  <h2>AOSC OS with GNOME</h2>
                  <p>AOSC OS Out-of-Box Preview with GNOME desktop, version 3.14. GNOME is a entirely free and open desktop
                  environment and application suite brought to you by the GNOME Foundation. GNOME is chosen to be the default
                  desktop environment for some major Linux distributions like Fedora.</p>
                  <a href="http://repo.anthonos.org/os3-releases/00_OOBP/201411/gnome/aosc-os3_oobp-gnome_after-class-tea-time_amd64_dpkg_en-US.tar.xz" class="btn btn-default">Download Release</a>
                  <a href="https://portal.anthonos.org/aosc-os/screenshot/" class="btn btn-default">Screenshot</a>
                </div>
              </div>
              <hr class="divider" />
              <div class="row">
                <div class="col-sm-2">
                  <img src="/img/oobp-logo/xfce-oobp.png" width="96px" height="96px" />
                </div>
                <div class="col-sm-10">
                  <h2>AOSC OS with XFCE</h2>
                  <p>AOSC OS Out-of-Box Preview with XFCE desktop, version 4.11. XFCE is a lightweight, yet elegant and easy to use
                  desktop environment. XFCE is built upon GTK+ 2 interface toolkit, the predecessor to GTK+ 3 used by the GNOME
                  desktop environment. XFCE runs releatively fast on older machines dated all the way back to 2001 (for AOSC OS,
                  you need a machine that runs 64-bit operating system). XFCE is adapted to, cutting edge technologies like
                  systemd-logind.</p>
                  <a href="http://repo.anthonos.org/os3-releases/00_OOBP/201411/xfce/aosc-os3_oobp-xfce_after-class-tea-time_rev1_amd64_dpkg_en-US.tar.xz" class="btn btn-default">Download Release</a>
                  <a href="https://portal.anthonos.org/aosc-os/screenshot/" class="btn btn-default">Screenshot</a>
                </div>
              </div>
              <hr class="divider" />
              <div class="row">
                <div class="col-sm-2">
                  <img src="/img/oobp-logo/cinnamon-oobp.png" width="96px" height="96px" />
                </div>
                <div class="col-sm-10">
                  <h2>AOSC OS with Cinnamon</h2>
                  <p>AOSC OS Out-of-Box Preview with Cinnamon Desktop, version 2.4. Cinnamon is a fork of GNOME shell. It&#39;s one
                  of the default desktop environments for Linux Mint with guaranteed ease of use. Cinnamon needs a machine with
                  decent amount of performance, just like the GNOME desktop. Arguably it is more adapted to mouse and keyboard use
                  than the GNOME shell.</p>
                  <a href="http://repo.anthonos.org/os3-releases/00_OOBP/201411/cinnamon/aosc-os3_oobp-cinnamon_after-class-tea-time_amd64_dpkg_en-US.tar.xz" class="btn btn-default">Download Release</a>
                  <a href="https://portal.anthonos.org/aosc-os/screenshot/" class="btn btn-default">Screenshot</a>
                </div>
              </div>
              <hr class="divider" />
              <div class="row">
                <div class="col-sm-2">
                  <img src="/img/oobp-logo/mate-oobp.png" width="96px" height="96px" />
                </div>
                <div class="col-sm-10">
                  <h2>AOSC OS with MATE</h2>
                  <p>AOSC OS Out-of-Box Preview with MATE desktop, version 1.8.1. MATE is a fork of GNOME 2.x, a perfect shelter
                  for those who goes strongly against the GNOME 3, and the GNOME shell. Although being a legacy fork of a desktop,
                  it&#39;s well adapted to newer technologies like UDisks-2 and UPower 0.99, they even have a plan to bring Wayland
                  support to it!</p>
                  <a href="http://repo.anthonos.org/os3-releases/00_OOBP/201411/mate/aosc-os3_oobp-mate_after-class-tea-time_amd64_dpkg_en-US.tar.xz" class="btn btn-default">Download Release</a>
                  <a href="https://portal.anthonos.org/aosc-os/screenshot/" class="btn btn-default">Screenshot</a>
                </div>
              </div>
              <hr class="divider" />
              <div class="row">
                <div class="col-sm-2">
                  <img src="/img/oobp-logo/enlightenment-oobp.png" width="96px" height="96px" />
                </div>
                <div class="col-sm-10">
                  <h2>AOSC OS with Enlightenment</h2>
                  <p>AOSC OS Out-of-Box Preview with Enlightenment desktop, version 0.19.1. Enlightenmen is a very radically
                  designed desktop environment built upon their own EFL library (Enlightenment Foundation Library). This desktop
                  comes with full Wayland capabilities. This desktop is under heavy construction (as always), unless you are really
                  a big fan or an experienced user, we do not recommend this for daily usage.</p>
                  <div class="alert alert-danger">OOBP not ready: blocker, not fully tested.</div>
                </div>
              </div>
              <hr class="divider" />
              <div class="row">
                <div class="col-sm-2">
                  <img src="/img/oobp-logo/kde-oobp.png" width="96px" height="96px" />
                </div>
                <div class="col-sm-10">
                  <h2>AOSC OS with Plasma</h2>
                  <p>AOSC OS Out-of-Box Preview with (KDE) Plasma desktop, version 5. Plasma desktop is formerly known as the KDE,
                  or K Desktop Environment. Plasma desktop is built fully upon Qt 5 technologies, with some plugins built to make
                  Plasma work better. Plasma desktop requires a machine with decent amount of processor and graphics
                  performance.</p>
                  <div class="alert alert-danger">OOBP not ready: pending, waiting for KDE Applications 14.12 to be released.</div>
                </div>
              </div>
              <hr class="divider" />
              <div class="row">
                <div class="col-sm-2">
                  <img src="/img/oobp-logo/kodi-oobp.png" width="96px" height="96px" />
                </div>
                <div class="col-sm-10">
                  <h2>AOSC OS with Kodi</h2>
                  <p>AOSC OS Out-of-Box Preview with Kodi media center, version 14. This version of AOSC OS is built for media
                  center computers or Linux-based TV boxes. Kodi media center is formerly known as XBMC (XBox Media Center), while
                  maintaining a small footprint, it&#39;s probably the most powerful media center solution you can find in all of
                  the UNIX/Linux computing world.</p>
                  <div class="alert alert-danger">OOBP not ready: blocker, Kodi 14.0 Beta 2 cannot be built successfully.</div>
                </div>
              </div>
              <hr class="divider" />
              <div class="row">
                <div class="col-sm-2">
                  <img src="/img/oobp-logo/pantheon-oobp.png" width="96px" height="96px" />
                </div>
                <div class="col-sm-10">
                  <h2>AOSC OS with Pantheon</h2>
                  <p>AOSC OS Out-of-Box Preview with Pantheon desktop. Pantheon desktop is the default desktop environment used and
                  maintained by the ElementaryOS. Pantheon is a lightweight GTK+ 3 based desktop environment. Although being fast,
                  and probably beautiful, it&#39;s plagued with stability issues. Be careful when choosing this desktop
                  environment.</p>
                  <div class="alert alert-danger">OOBP not ready: blocker, Pantheon is broken with the update to GTK+ 3.14.</div>
                </div>
              </div>
              <hr class="divider" />
              <div class="row">
                <div class="col-sm-2">
                  <img src="/img/oobp-logo/unity-oobp.png" width="96px" height="96px" />
                </div>
                <div class="col-sm-10">
                  <h2>AOSC OS with Unity</h2>
                  <p>AOSC OS Out-of-Box Preview with Unity desktop, version 7. Unity desktop is mostly known as the default Ubuntu
                  interface. This Unity build is brought to you by the AOSC OS development group, with several fixes and patches to
                  remove all Ubuntu specific features and interface. Unity is often time considered as unstable, but still, very
                  suitable for new users.</p>
                  <div class="alert alert-danger">OOBP not ready: blocker, Unity is broken with the update to GTK+ 3.14, will not
                  release any build until the Beta of Ubuntu 15.04 is released.</div>
                </div>
              </div>
              <hr class="divider" />
              <div class="row">
                <div class="col-sm-2">
                  <img src="/img/oobp-logo/deepin-oobp.png" width="96px" height="96px" />
                </div>
                <div class="col-sm-10">
                  <h2>AOSC OS with DDE</h2>
                  <p>AOSC OS Out-of-Box Preview with DDE (Deepin Desktop Environment), version 2. Deepin Desktop Environment is a
                  desktop interface developed by Deepin Inc, Wuhan. DDE relies heavily on WebKit and NodeJs, therefore, may not be
                  suitable for any machine older than the ones on sale before 2010.</p>
                  <div class="alert alert-danger">OOBP not ready: pending, the group is still discussing over the methods of
                  porting.</div>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="rpm">
              <div class="alert alert-danger" role="alert">
                <p>RPM based AOSC OS3 builds are considered highly experimental, some of the factors considered as known issue, as
                listed below:</p>
                <ul>
                  <li>1. RPM builds, compared to DPKG, has large number of dependency overhead, which is brought by false reading
                  of dependencies of a library, ELF executables, even data files;</li>
                  <li>2. RPM builds are built with some dirty hacks upon initial bootstrap, some packages must be installed with
                  &quot;--nodeps&quot; switch of the rpm command in order to install and build the ground for other packages to be
                  installed;</li>
                  <li>3. RPM builds do not support PackageKit;</li>
                </ul>
              </div>
              <div class="row">
                <div class="col-sm-2">
                  <img src="/img/oobp-logo/gnome-oobp.png" width="96px" height="96px" />
                </div>
                <div class="col-sm-10">
                  <h2>AOSC OS with GNOME</h2>
                  <p>AOSC OS Out-of-Box Preview with GNOME desktop, version 3.14. GNOME is a entirely free and open desktop
                  environment and application suite brought to you by the GNOME Foundation. GNOME is chosen to be the default
                  desktop environment for some major Linux distributions like Fedora.</p>
                  <a href="#" class="btn btn-default disabled">Download Release</a>
                  <a href="https://portal.anthonos.org/aosc-os/screenshot/" class="btn btn-default">Screenshot</a>
                </div>
              </div>
              <hr class="divider" />
              <div class="row">
                <div class="col-sm-2">
                  <img src="/img/oobp-logo/xfce-oobp.png" width="96px" height="96px" />
                </div>
                <div class="col-sm-10">
                  <h2>AOSC OS with XFCE</h2>
                  <p>AOSC OS Out-of-Box Preview with XFCE desktop, version 4.11. XFCE is a lightweight, yet elegant and easy to use
                  desktop environment. XFCE is built upon GTK+ 2 interface toolkit, the predecessor to GTK+ 3 used by the GNOME
                  desktop environment. XFCE runs releatively fast on older machines dated all the way back to 2001 (for AOSC OS,
                  you need a machine that runs 64-bit operating system). XFCE is adapted to, cutting edge technologies like
                  systemd-logind.</p>
                  <a href="http://repo.anthonos.org/os3-releases/00_OOBP/201411/xfce/aosc-os3_oobp-xfce_after-class-tea-time_rev1_amd64_rpm_en-US.tar.xz" class="btn btn-default">Download Release</a>
                  <a href="https://portal.anthonos.org/aosc-os/screenshot/" class="btn btn-default">Screenshot</a>
                </div>
              </div>
              <hr class="divider" />
              <div class="row">
                <div class="col-sm-2">
                  <img src="/img/oobp-logo/cinnamon-oobp.png" width="96px" height="96px" />
                </div>
                <div class="col-sm-10">
                  <h2>AOSC OS with Cinnamon</h2>
                  <p>AOSC OS Out-of-Box Preview with Cinnamon Desktop, version 2.4. Cinnamon is a fork of GNOME shell. It&#39;s one
                  of the default desktop environments for Linux Mint with guaranteed ease of use. Cinnamon needs a machine with
                  decent amount of performance, just like the GNOME desktop. Arguably it is more adapted to mouse and keyboard use
                  than the GNOME shell.</p>
                  <a href="http://repo.anthonos.org/os3-releases/00_OOBP/201411/cinnamon/aosc-os3_oobp-cinnamon_after-class-tea-time_amd64_rpm_en-US.tar.xz" class="btn btn-default">Download Release</a>
                  <a href="https://portal.anthonos.org/aosc-os/screenshot/" class="btn btn-default">Screenshot</a>
                </div>
              </div>
              <hr class="divider" />
              <div class="row">
                <div class="col-sm-2">
                  <img src="/img/oobp-logo/mate-oobp.png" width="96px" height="96px" />
                </div>
                <div class="col-sm-10">
                  <h2>AOSC OS with MATE</h2>
                  <p>AOSC OS Out-of-Box Preview with MATE desktop, version 1.8.1. MATE is a fork of GNOME 2.x, a perfect shelter
                  for those who goes strongly against the GNOME 3, and the GNOME shell. Although being a legacy fork of a desktop,
                  it&#39;s well adapted to newer technologies like UDisks-2 and UPower 0.99, they even have a plan to bring Wayland
                  support to it!</p>
                  <a href="#" class="btn btn-default disabled">Download Release</a>
                  <a href="https://portal.anthonos.org/aosc-os/screenshot/" class="btn btn-default">Screenshot</a>
                </div>
              </div>
              <hr class="divider" />
              <div class="row">
                <div class="col-sm-2">
                  <img src="/img/oobp-logo/enlightenment-oobp.png" width="96px" height="96px" />
                </div>
                <div class="col-sm-10">
                  <h2>AOSC OS with Enlightenment</h2>
                  <p>AOSC OS Out-of-Box Preview with Enlightenment desktop, version 0.19.1. Enlightenmen is a very radically
                  designed desktop environment built upon their own EFL library (Enlightenment Foundation Library). This desktop
                  comes with full Wayland capabilities. This desktop is under heavy construction (as always), unless you are really
                  a big fan or an experienced user, we do not recommend this for daily usage.</p>
                  <div class="alert alert-danger">OOBP not ready: blocker, not fully tested.</div>
                </div>
              </div>
              <hr class="divider" />
              <div class="row">
                <div class="col-sm-2">
                  <img src="/img/oobp-logo/kde-oobp.png" width="96px" height="96px" />
                </div>
                <div class="col-sm-10">
                  <h2>AOSC OS with Plasma</h2>
                  <p>AOSC OS Out-of-Box Preview with (KDE) Plasma desktop, version 5. Plasma desktop is formerly known as the KDE,
                  or K Desktop Environment. Plasma desktop is built fully upon Qt 5 technologies, with some plugins built to make
                  Plasma work better. Plasma desktop requires a machine with decent amount of processor and graphics
                  performance.</p>
                  <div class="alert alert-danger">OOBP not ready: pending, waiting for KDE Applications 14.12 to be released.</div>
                </div>
              </div>
              <hr class="divider" />
              <div class="row">
                <div class="col-sm-2">
                  <img src="/img/oobp-logo/kodi-oobp.png" width="96px" height="96px" />
                </div>
                <div class="col-sm-10">
                  <h2>AOSC OS with Kodi</h2>
                  <p>AOSC OS Out-of-Box Preview with Kodi media center, version 14. This version of AOSC OS is built for media
                  center computers or Linux-based TV boxes. Kodi media center is formerly known as XBMC (XBox Media Center), while
                  maintaining a small footprint, it&#39;s probably the most powerful media center solution you can find in all of
                  the UNIX/Linux computing world.</p>
                  <div class="alert alert-danger">OOBP not ready: blocker, Kodi 14.0 Beta 2 cannot be built successfully.</div>
                </div>
              </div>
              <hr class="divider" />
              <div class="row">
                <div class="col-sm-2">
                  <img src="/img/oobp-logo/pantheon-oobp.png" width="96px" height="96px" />
                </div>
                <div class="col-sm-10">
                  <h2>AOSC OS with Pantheon</h2>
                  <p>AOSC OS Out-of-Box Preview with Pantheon desktop. Pantheon desktop is the default desktop environment used and
                  maintained by the ElementaryOS. Pantheon is a lightweight GTK+ 3 based desktop environment. Although being fast,
                  and probably beautiful, it&#39;s plagued with stability issues. Be careful when choosing this desktop
                  environment.</p>
                  <div class="alert alert-danger">OOBP not ready: blocker, Pantheon is broken with the update to GTK+ 3.14.</div>
                </div>
              </div>
              <hr class="divider" />
              <div class="row">
                <div class="col-sm-2">
                  <img src="/img/oobp-logo/unity-oobp.png" width="96px" height="96px" />
                </div>
                <div class="col-sm-10">
                  <h2>AOSC OS with Unity</h2>
                  <p>AOSC OS Out-of-Box Preview with Unity desktop, version 7. Unity desktop is mostly known as the default Ubuntu
                  interface. This Unity build is brought to you by the AOSC OS development group, with several fixes and patches to
                  remove all Ubuntu specific features and interface. Unity is often time considered as unstable, but still, very
                  suitable for new users.</p>
                  <div class="alert alert-danger">OOBP not ready: blocker, Unity is broken with the update to GTK+ 3.14, will not
                  release any build until the Beta of Ubuntu 15.04 is released.</div>
                </div>
              </div>
              <hr class="divider" />
              <div class="row">
                <div class="col-sm-2">
                  <img src="/img/oobp-logo/deepin-oobp.png" width="96px" height="96px" />
                </div>
                <div class="col-sm-10">
                  <h2>AOSC OS with DDE</h2>
                  <p>AOSC OS Out-of-Box Preview with DDE (Deepin Desktop Environment), version 2. Deepin Desktop Environment is a
                  desktop interface developed by Deepin Inc, Wuhan. DDE relies heavily on WebKit and NodeJs, therefore, may not be
                  suitable for any machine older than the ones on sale before 2010.</p>
                  <div class="alert alert-danger">OOBP not ready: pending, the group is still discussing over the methods of
                  porting.</div>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="server">
              <div class="alert alert-danger" role="alert">
                <p>RPM based AOSC OS3 builds are considered highly experimental, some of the factors considered as known issue, as
                listed below:</p>
                <ul>
                  <li>1. RPM builds, compared to DPKG, has large number of dependency overhead, which is brought by false reading
                  of dependencies of a library, ELF executables, even data files;</li>
                  <li>2. RPM builds are built with some dirty hacks upon initial bootstrap, some packages must be installed with
                  &quot;--nodeps&quot; switch of the rpm command in order to install and build the ground for other packages to be
                  installed;</li>
                  <li>3. RPM builds do not support PackageKit;</li>
                </ul>
              </div>
              <div class="row">
                <div class="col-sm-2">
                  <img src="/img/cp.png" width="96px" height="96px" />
                </div>
                <div class="col-sm-10">
                  <h2>AOSC OS for Servers</h2>
                  <p>AOSC OS for Servers, formerly known as CentralPoint, is a lightweight and compact system release for small
                  scaled servers. AOSC OS for Servers comes with RPM based system only.</p>
                  <div class="alert alert-danger">Release not ready: pending, AOSC OS3 not yet stable enought for server usage.</div>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="help">
              <br />
              <h2>How do I use them?</h2>
              <p>If you would really want to use a distribution in its Alpha stage, the mandatory skill would be RTFM (no, we mean
              Read The Fine Manuals). Basic steps to install and use these tarball releases were shown as below:</p>
              <ul>
                <li>Get a LiveCD or boot up another Linux distribution (must be x86_64);</li>
                <li>Download the tarball(s);</li>
                <li>Clear a partition (of course you can seperate /home, /boot, etc);</li>
                <li>Mount the partition (TFM for &quot;mount&quot; command, 
                <a href="http://linux.die.net/man/8/mount">here</a>);</li>
                <li>Untar the tarball(s) (TFM for &quot;tar&quot; command, 
                <a href="http://linux.die.net/man/1/tar">here</a>);</li>
                <li>Configure domain name resolver (cp /etc/resolv.conf /path/to/mount/point/etc/);</li>
                <li>Mount and bind /dev /proc /sys to OOBP;</li>
                <li>&quot;chroot&quot; into OOBP (TFM for &quot;chroot&quot; command, 
                <a href="http://linux.die.net/man/2/chroot">here</a>);</li>
                <li>Install GRUB (search it up, man...);</li>
                <li>Unmount the partition, and reboot;</li>
                <li>Boom (if this happenned, report it on IRC or throw it on the 
                <a href="http://bugs.anthonos.org">bug tracker</a>);</li>
              </ul>
              <br />
              <p>Happy hacking...</p>
            </div>
            <div class="tab-pane" id="os2">
              <br />
              <div class="row">
                <div class="col-sm-2">
                  <img src="/img/anos.png" width="96px" height="96px" />
                </div>
                <div class="col-sm-10">
                  <h2>AnthonOS (AOSC OS2)</h2>
                  <p>AnthonOS is a desktop oriented Linux distribution with KDE Plasma 4 as its default desktop environment.
                  AnthonOS has a heavy customized interface called AnthonUI. AnthonOS will be maintained until summer of 2015.</p>
                  <a href="http://repo.anthonos.org/os2-releases/anthonos/july-2014/patch-1/anthonos_final-doge_kde_pc%2bmac_en-US_patch-1.iso" class="btn btn-default">Download English Release</a>
                  <a href="http://repo.anthonos.org/os2-releases/anthonos/july-2014/patch-1/anthonos_final-doge_kde_pc%2bmac_zh-CN_patch-1.iso" class="btn btn-default">下载简体中文版本</a>
                  <a href="http://repo.anthonos.org/os2-releases/anthonos/july-2014/patch-1/anthonos_final-doge_kde_pc%2bmac_zh-TW_patch-1.iso" class="btn btn-default">下載正體中文版本</a>
                  <a href="https://portal.anthonos.org/aosc-os/screenshot/" class="btn btn-default">Screenshot</a>
                </div>
              </div>
              <hr class="divider" />
              <div class="row">
                <div class="col-sm-2">
                  <img src="/img/cp.png" width="96px" height="96px" />
                </div>
                <div class="col-sm-10">
                  <h2>CentralPoint (AOSC OS2)</h2>
                  <p>CentralPoint is a server oriented Linux distribution. Development was halted after Beta 2 was released.
                  CentralPoint will continue to be released as AOSC OS for Servers, based on AOSC OS3.</p>
                  <div class="alert alert-danger">This build is deprecated and not recommended for installing.</div>
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
