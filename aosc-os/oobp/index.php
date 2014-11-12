<!DOCTYPE html>
<?php
define('IN_FRAME', true);

$langs = array(
	'en' => array (
		'h1' => 'Out Of Box Preview',
		'h-desc' => 'Alpha-level release of AOSC OS3',
		'h2' => 'Be Brave...',
		'p-desc' => 'It looks fresh, and clean this time',
		'p-1' => 'It\'s almost 2 months since the official start of AOSC OS3 project, while we are still struggling
to maintain AOSC OS2 with loads of its issues coming, we are ready to show off some of our maintained AOSC OS3 releases.',
		'p-2' => 'These Out Of Box Preview, for now, comes in the form of tarball (for now); a variety of editions
(spins if you prefer) are released.',
		'p-3' => 'These are some OOBP releases available:',
		'links' => 'And here are the download links:',
		'download' => 'Download',
		'with' => 'with',
		'instht' => ' ',
		'insthtsteps' => ' ',
		'greet' => ' ',
	),
	'zh-CN' => array (
		'h1' => '开箱即用预览版',
		'h-desc' => 'AOSC OS3 Alpha 级别测试',
		'h2' => '勇敢点啦！',
		'p-desc' => '这次的系统，干净清爽',
		'p-1' => '离 AOSC OS3 的开始已经有几个月了。尽管我们还在对付 AOSC OS2 一堆又一堆的问题报告和建议，但我们已经准备好
炫耀我们全新的系统版本了。',
		'p-2' => '这些“开箱即用”版本目前以 tar 文件的形式给出，我们提供各种各样的版本。',
		'p-3' => '看一眼吧：',
		'links' => '……然后来下载吧！',
		'download' => '下载',
		'with' => '带',
		'instht' => ' ',
		'insthtsteps' => ' ',
		'greet' => ' ',
	),
	'zh-TW' => array (
		'title' => ' ',
		'h1' => '',
		'h-desc' => '',
		'h2' => ' ',
		'p-desc' => ' ',
		'p-1' => ' ',
		'p-2' => ' ',
		'p-3' => ' ',
		'links' => ' ',
		'download' => ' ',
		'with' => ' ',
		'instht' => ' ',
		'insthtsteps' => ' ',
		'greet' => ' ',
	),
);

include '../../templates/lang.php' ?>

<html lang=<?=$lang?>>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no">
    <meta name="description" content="Summary of AOSC OS Out of the box preview">
    <meta name="keywords" content="AOSC OS OOBP Preview Out Of Box 安同 Linux 开箱即用 预览 OS3">
    <meta name="author" content="Junde Yi<lmy441900@gmail.com>, Jeff Bai <jeffbaichina@members.fsf.org>">
    <link rel="icon" href="/img/favicons/aosc-os.ico">
    <title>AOSC OS - OOBP</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/blog.css" rel="stylesheet">
  </head>
  <body>
    <?php include '../../templates/aosc-os/navbar.php';?>
    <div class="container">
      <div class="blog-header">
        <img src="/img/os3.svg" height="150" width="150" align=right hspace="40" >
        <h1 class="blog-title"><?=$langs[$lang]['h1']?></h1>
        <p class="lead blog-description"><?=$langs[$lang]['h-desc']?></p>
      </div>
      <div class="row">
        <div class="col-sm-9 blog-main">
          <div class="blog-post">
            <h2 class="blog-post-title"><?=$langs[$lang]['h2']?></h2>
            <p class="lead blog-description"><?=$langs[$lang]['p-desc']?></p>
            <p>It's been some months since the official start of AOSC OS3 project, while we are 
            still struggling to maintain AOSC OS2 with loads of its issues coming, we are ready
            to show off some of our maintained AOSC OS3 releases.</p>
            <p>These Out Of Box Preview, for now, comes in the form of tarball (for now); a variety
            of editions (spins if you prefer) are released. Versions for download are shown below.</p>
            <br /><br />
            <p><h3>How do I use them?</h3></p>
            <p>If you would really want to use a distribution in its Alpha stage, the mandatory skill would be
            RTFM (no, we mean Read The Fine Manuals). Basic steps to install and use these tarball releases were
            shown as below:</p>
            <ul>
              <li> Get a LiveCD or boot up another Linux distribution (must be x86_64);</li>
              <li> Download the tarball(s);</li>
              <li> Clear a partition (of course you can seperate /home, /boot, etc);</li>
              <li> Mount the partition (TFM for "mount" command, <a href="http://linux.die.net/man/8/mount">here</a>);</li>
              <li> Untar the tarball(s) (TFM for "tar" command, <a href="http://linux.die.net/man/1/tar">here</a>);</li>
              <li> Configure domain name resolver (cp /etc/resolv.conf /path/to/mount/point/etc/);</li>
              <li> Mount and bind /dev /proc /sys to OOBP;</li>
              <li> "chroot" into OOBP (TFM for "chroot" command, <a href="http://linux.die.net/man/2/chroot">here</a>);</li>
              <li> Install GRUB (search it up, man...);</li>
              <li> Unmount the partition, and reboot;</li>
              <li> Boom (if this happenned, report it on IRC or throw it on the <a href="http://bugs.anthonos.org">bug tracker</a>);</li>
            </ul><br />
            <p>Happy hacking...</p>
          </div>
	</div>
      </div>
    </div>
    <?php include '../../templates/portal/footer.php';?>
    <script src="/js/jquery-min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
  </body>
</html>
