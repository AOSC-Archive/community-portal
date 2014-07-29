<!DOCTYPE html>
<html lang=zh-CN>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no">
    <meta name="description" content="Home of AOSC OS">
    <meta name="author" content="Junde Yi<lmy441900@gmail.com>, Jeff Bai <jeffbaichina@members.fsf.org>">
    <link rel="icon" href="/img/favicons/aosc-os.ico">

    <title>AOSC OS - Screenshots</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/blog.css" rel="stylesheet">
    <link href="/css/common.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <?php include '../../templates/aosc-os/navbar.php';?>

    <div class="container">

      <div class="blog-header">
      <img src="/img/anos.png" height="150" width="150" align=right hspace="40" >
        <h1 class="blog-title">AnthonOS</h1>
        <p class="lead blog-description">Desktop-Oriented Linux Distribution of AOSC</p>
      </div>

      <div class="row">

        <div class="blog-post">
          <p class="WQYMicroHei blog-description lead blog-post-meta col-sm-9" style="font-size:16px">Final Release "Doge" comes with KDE 4 as its default desktop environment, here showing is the default desktop configuration of AnthonOS (however you can choose for the default Plasma desktop configuration).</p>
          <div class="my_gallery">
          <?php
            for ($a=1;$a<=11;$a++)
              echo '<a target="_blank" href="/img/anthonos/'.$a.'.png"><img src="/img/anthonos/'.$a.'_small.png" id="img'.$a.'" alt="img'.$a.'" width="250"></a>';
          ?>
	</div>

        <div class="blog-header">
        <img src="/img/cp.png" height="150" width="150" align=right hspace="40" >
          <h1 class="blog-title">CentralPoint</h1>
          <p class="lead blog-description">The Distribution for Smaller-Scale Servers</p>
        </div>

        <div class="blog-post">
          <p class="WQYMicroHei blog-description lead blog-post-meta col-sm-9" style="font-size:16px">This server-oriented distribution comes with the lightweight desktop, Xfce. While it's optional, the zsh configuration is pretty awesome, too!</p>
          <p class="WQYMicroHei blog-description lead blog-post-meta col-sm-9" style="font-size:16px">Screenshots will be available soon...</p>
        </div>

        </div>

      </div><!-- /.container -->

    </div>

    <?php include '../../templates/portal/footer.php';?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/js/jquery-min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    </script>
  </body>
</html>
