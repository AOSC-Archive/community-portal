<?php
define('IN_FRAME', true);
$langs = array(
  'en' => array(
    'title'=>'Community Portal - AOSC',
    'welcome'=>'Welcome!',
    'welcome-text'=>'AOSC ( Anthon Open Source Community ) is an open community, which welcomes participation from all over the world.',
    'ws-aosc?'=>'What is AOSC?',
    'ws-aosc?-text'=>'"AOSC" stands for Anthon Open Source Community. Anthon Open Source Community is a community that
            focuses on improvement of open source software. We are taking action to make open source software
            more friendly to everyone.',
    'take-action'=>'Take Action!',
    'take-action-text'=>"It's not only about talking, let's take action for improvement! By using, testing, criticizing or even
                contributing to the projects, they are just going to get better.",
  ),
  'zh-cn' => array(
    'title'=>'社区门户 - 安同开源社区',
    'welcome'=>'欢迎！',
    'welcome-text'=>'安同开源社区 ( AOSC，Anthon Open Source Community ) 是一个开放的社区，我们欢迎来自全世界的参与者。',
    'ws-aosc?'=>'安同开源社区是?',
    'ws-aosc?-text'=>'"AOSC" stands for Anthon Open Source Community. Anthon Open Source Community is a community that
            focuses on improvement of open source software. We are taking action to make open source software
            more friendly to everyone.',
    'take-action'=>'马上行动！',
    'take-action-text'=>"It's not only about talking, let's take action for improvement! By using, testing, criticizing or even
                contributing to the projects, they are just going to get better.",
  ),
  'zh-tw' => array(
    'title'=>'社區門戶 - 安同開源社區',
    'welcome'=>'歡迎！',
    'welcome-text'=>'安同開源社區 ( AOSC，Anthon Open Source Community ) 是一個開放的社區，我們歡迎來自全世界的參與者。',
    'ws-aosc?'=>'安同開源社區是？',
    'ws-aosc?-text'=>'"AOSC" stands for Anthon Open Source Community. Anthon Open Source Community is a community that
            focuses on improvement of open source software. We are taking action to make open source software
            more friendly to everyone.',
    'take-action'=>'馬上行動！',
    'take-action-text'=>"It's not only about talking, let's take action for improvement! By using, testing, criticizing or even
                contributing to the projects, they are just going to get better.",
  ),
);
include 'templates/lang.php';
?>
<!DOCTYPE html>
<html lang=<?php echo $lang;?>>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no">
    <meta name="description" content="Homepage of AOSC OS 安同社区首页">
    <meta name="keywords" content="AOSC,OS,Anthon,AnthonOS,安同,Linux,GNU/Linux,GNU,开源,社区,Open Source,Community">
    <link rel="icon" href="/img/favicons/aosc.ico">
    <title><?php echo $langs[$lang]['title'];?></title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/blog.css" rel="stylesheet">
    <?php include 'templates/font.php'; ?>

  </head>

  <body>
  <?php include 'templates/portal/navbar.php'; ?>

  <div class="container">
    <!-- Main title -->
    <div class="row jumbotron">
      <div class="container section-welcome">
        <div class="row">
          <div class="col-sm-8 col-xs-12">
            <h1><?php echo $langs[$lang]['welcome'];?></h1>
            <p><?php echo $langs[$lang]['welcome-text'];?></p>
          </div>
          <div class="col-sm-3 col-sm-offset-1 shortcuts hidden-xs">
            <img src="/img/aosc.png">
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-6">
         <div class="col-sm-1">
           <img src="/img/question.png">
         </div>
         <div class="col-sm-10 col-sm-offset-1">
           <h2><?php echo $langs[$lang]['ws-aosc?'];?></h2>
           <p><?php echo $langs[$lang]['ws-aosc?-text'];?></p>
         </div>
       </div>

       <div class="col-sm-6">
         <div class="col-sm-1">
           <img src="/img/claimation.png">
         </div>
         <div class="col-sm-10 col-sm-offset-1">
           <h2><?php echo $langs[$lang]['take-action'];?></h2>
           <p><?php echo $langs[$lang]['take-action-text'];?></p>
         </div>
       </div>
     </div>
     <hr class="divider"></hr>
    </div>

    <div class="row">
      <div class="col-sm-12 col-sm-offset-0.5">
        <h1>Community News</h1>
      </div>
    </div>
    
    <div class="container">
      <div class="row">
        <div class="col-sm-4 col-sm-offset-0.5">
          <h4>AOSC OS3 OOBP Coming Soon</h4>
          <p>After 3 months of development. AOSC OS3 builds with several
          different desktop environments are almost ready and will be
          released very soon.
          </p>
          <p>Be sure to check for downloads at the 
          <a href="https://portal.anthonos.org/aosc-os/oobp">OOBP Section</a>
          of AOSC OS sub-site.
          </a>
        </div>
        <div class="col-sm-4">
          <h4>LinkC to Change Core</h4>
          <p>According to our LinkC developers, LinkC will switch to a new
          protocol implementation called Gurgle, check it out at the
          <a href="https://github.com/AOSC-Dev/gurgle">GitHub repository</a>.
          </p>
          <p>* LinkC is a standalone Instant Messaging client and server developed
               by the community</p>
        </div>
        <div class="col-sm-4">
          <h4>AnthonOS "Doge" Finally Released</h4>
          <p>AnthonOS, based on AOSC OS2 has released as a final product
          of our 2013-2014 development cycle. It will be maintained before AOSC OS3
          comes to its debut. Security updates and several backports from AOSC OS3
          will be available.</p>
          <p>Downloads are available from the 
          <a href="https://portal.antonos.org/aosc-os">AOSC OS Sub-site</a>.</p>
        </div>
      </div>
    </div>
  </div>
  <?php include 'templates/portal/footer.php';?>

  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="/js/jquery-min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  </body>
</html>
