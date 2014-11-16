<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no">
    <meta name="description" content="Homepage of LinkC">
    <meta name="author" content="SternW Zhang<SternWZhang@outlook.com>">
    <link rel="icon" href="/img/favicons/linkc.ico">

    <title>LinkC - Home</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/blog.css" rel="stylesheet">
    <?php include $_SERVER['DOCUMENT_ROOT'].'/templates/font.php'; ?>
  </head>

  <body>

    <?php include $_SERVER['DOCUMENT_ROOT'].'/templates/linkc/navbar.php';?>

    <div class="container">

      <div class="blog-header">
      <img src="/img/linkc.png" height="150" width="150" align=right hspace="40" >
        <h1 class="blog-title">LinkC</h1>
        <p class="lead blog-description">a simple open source IM client + server with POSIX socket</p>
      </div>

      <div class="row">

        <div class="col-sm-8 blog-main">

          <div class="blog-post">
            <h2 class="blog-post-title">Development News</h2>
            <p class="blog-post-meta">Updated [2014-07-26]<p>
            <p>LinkC is now on its 4th rewrite, with "LinkC Netowrk Protocol v2".
            <ul>
              <li> Intranet and non-peer NAT devices are now supported;</li>
              <li> Some fixes on protocol are accomplished, currently the protocol is usable;</li>
              <li> Linux client now has both CLI and GUI available (P2P module for CLI version is not included);</li>
              <li> LinkC Server is now running as a daemon, and some startup related functions are finished (thanks to Wiiiky Li);</li>
              <li> ...</li>
            </ul>
            <p>No release was tagged for LinkC at this moment, you may get the latest source from
            <p><pre>git clone https://github.com/AOSC-Dev/LinkC</pre>
          </div>

          <div class="blog-post">
            <h2 class="blog-post-title">What's Next</h2>
            <p class="blog-post-meta">Updated [2014-07-26]<p>
            <p>Development of LinkC is slow at this moment, but future plan are listed below:
            <ul>
              <li> More complete chatting window (message echoes and message history);</li>
              <li> Sync the progress of CLI version with GUI version;</li>
              <li> Notification pushing for "Friend Online";</li>
              <li> Better UI;</li>
            </ul>
          </div>

          <div class="blog-post">
            <h2 class="blog-post-title">Known Issue</h2>
            <ul>
              <li> Hardening server side for defending attacks like DDoS;</li>
              <li> Message repost is not working;</li>
              <li> Client sends some over-length packets;</li>
              <li> ...</li>
            </ul>
          </div>

        </div><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </div><!-- /.container -->

    <?php include $_SERVER['DOCUMENT_ROOT'].'/templates/footer.php';?>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/js/jquery-min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
  </body>
</html>
