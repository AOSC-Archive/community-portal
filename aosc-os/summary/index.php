<?php define('IN_FRAME', true);
$langs = array(
  'en' => array(
    'aosc-history'=>'Her history...',
    'os3-logo'=>'the Yellow circular badge',
    'os3-summary'=>'AOSC OS3 is the distribution building project for the year 2014 - 2015, based on the 
      established base of AOSC OS2. Updates and changes are lined up for the year. 
      AOSC OS started its experiment on supporting RPM. AOSC OS will merge in AnthonOS and CentralPoint, 
      as AOSC OS with $DE (name of Desktop Environment) and AOSC OS for Servers.',
    'os2-logo'=>'the Blue circular badge',
    'os2-summary'=>'AOSC OS2 is the distribution building project for the year 2013 - 2014, this is the first generation of our
            community&#39;s independent distribution. Two final products are intended for this generation of project:',
    'os2-release-1'=>'AnthonOS, as desktop-oriented Linux distribution',
    'os2-release-2'=>'CentralPoint, as server-oriented Linux distribution',
    'os1-logo'=>'the Red circular badge',
    'os1-summary'=>'AOSC OS1 is the distribution ',
    'os1-summary-1'=>'<b>customization</b> project for the year 2011 - 2013, this is the first generation of our community&#39;s distribution
            project. Only one final products are intended for this generation of project:',
    'aosc-summary-2'=>'AnthonOS, as desktop-oriented Linux distribution',
    'aosc-summary-3'=>'This version of AnthonOS is only a Debian derivative with customized KDE desktop, and it was never maintained after
            its final release as a measure to kickstart AOSC OS2 to make CentralPoint and AnthonOS into a unified distribution.',
  ),
  'zh-cn' => array(
    'aosc-history'=>'它的历史...',
    'os3-logo'=>'黄色环形徽章',
    'os3-summary'=>'AOSC OS3 是 2014-2015 年期间构建的版本，它基于 AOSC OS2，并将被我们持续维护一整年。
            现在，AOSC OS 开始实验性的支持 RPM。 我们也会对 AnthonOS 和 CentralPoint 进行合并，以 AOSC OS with $DE 
            (桌面环境名) 和 AOSC OS for Servers 的方式重新命名它们。',
    'os2-logo'=>'蓝色环形徽章',
    'os2-summary'=>'AOSC OS2 是 2013-2014 年期间构建的版本，这也是社区独立构建的第一个版本。在那时，我们构建了两个发行版：',
    'os2-release-1'=>'面向桌面用户的 AnthonOS ;',
    'os2-release-2'=>'面向小型服务器的 CentralPoint ;',
    'os1-logo'=>'红色环形徽章',
    'os1-summary'=>'AOSC OS1 是一个发行版。',
    'os1-summary-1'=>'它仅仅是一个<b>定制化</b>的项目，也是社区的第一代产品。我们在 2011 - 2013 年间开发了它。在这一代中，我们只有这个唯一的项目:',
    'aosc-summary-2'=>'一个面向桌面用户的 AnthonOS',
    'aosc-summary-3'=>'这一版的 AnthonOS 仅仅是 Debian 加上 KDE 桌面的再分发，并且在最终释出后，我们没有进行任何的维护。
            当然，是它让我们敲开了 AOSC OS2 的大门，也使得我们能够把 CentralPoint 和 AnthonOS 作为一个整体进行开发。',
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
    <meta name="description" content="Summary of AOSC OS" />
    <meta name="author" content="Junde Yi&lt;lmy441900@gmail.com&gt;, Jeff Bai &lt;jeffbaichina@members.fsf.org&gt;" />
    <link rel="icon" href="/img/favicons/aosc-os.ico" />
    <title>AOSC OS - Summary</title>
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
            <h1>AOSC OS</h1>
            <p><?php echo $langs[$lang]['aosc-history'];?></p>
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
        <div class="row">
          <div class="col-sm-12">
            <h2 class="blog-post-title">AOSC OS3</h2>
            <p class="lead blog-description"><?php echo $langs[$lang]['os3-logo'];?></p>
            <p><?php echo $langs[$lang]['os3-summary'];?></p>
          </div>
        </div>
        <hr class="divider" />
        <div class="row">
          <div class="col-sm-12">
            <h2 class="blog-post-title">AOSC OS2</h2>
            <p class="lead blog-description"><?php echo $langs[$lang]['os2-logo'];?></p>
            <p><?php echo $langs[$lang]['os2-summary'];?></p>
            <ul>
              <li><?php echo $langs[$lang]['os2-release-1'];?></li>
              <li><?php echo $langs[$lang]['os2-release-2'];?></li>
            </ul>
          </div>
        </div>
        <hr class="divider" />
        <div class="row">
          <div class="col-sm-12">
            <h2 class="blog-post-title">AOSC OS1</h2>
            <p class="lead blog-description"><?php echo $langs[$lang]['os1-logo'];?></p>
            <p><?php echo $langs[$lang]['os1-summary'];?>
            <?php echo $langs[$lang]['os1-summary-1'];?></p>
            <ul>
              <li><?php echo $langs[$lang]['aosc-summary-2'];?></li>
            </ul>
            <p><?php echo $langs[$lang]['aosc-summary-3'];?></p>
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
