<!DOCTYPE html>
<html lang=zh-CN>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no">
    <meta name="description" content="Homepage of AOSC OS">
    <meta name="author" content="Junde Yi<lmy441900@gmail.com>, Jeff Bai <jeffbacihina@members.fsf.org>">
    <link rel="icon" href="favicon.ico">

    <title>Community Portal - Home</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/blog.css" rel="stylesheet">

  </head>

  <body>

  <?php include 'templates/portal/navbar.php';?>

    <div class="container">

      <div class="blog-header">
      <img src="/img/aosc.png" height="150" width="150" align=right hspace="40" >
        <h1 class="blog-title WQYMicroHei">Portal</h1>
        <p class="lead blog-description WQYMicroHei">of Anthon Open Source Community</p>
      </div>

      <div class="row">

        <div class="col-sm-8 blog-main WQYMicroHei">

          <div class="blog-post">
            <h2 class="blog-post-title WQYMicroHei">Welcome</h2>
            <p class="blog-post-meta WQYMicroHei">to this certain corner of open source world<p>
            <p>AOSC (Anthon Open Source Community) is yet another open source oriented community, (mainly) founded and
            led by students from China. Yet the community is open for participation from all over the world. And we are
            still trying to make this page available in your own language!
            <p>AOSC maintains a bucketful of projects:
            <div class="list-group">
              <a href="#" class="sidebar-module">
              <h4 class="list-group-item-heading">AOSC OS</h4>
              <p class="list-group-item-text">A Linux Distribution building project, the first project of this community.
                                              AOSC OS is an independent Linux distribution with simplified system structure
                                              and portable features for anyone.</p>
              </a>
            </div>
          </div>

        </div>

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <div class="sidebar-module sidebar-module-inset WQYMicroHei">
            <h4>Bulletin</h4>
            <p>Patch 1 version of AnthonOS "Doge" is now released, with several fixes on installation support.</p>
          </div>

          <div class="sidebar-module WQYMicroHei">
            <h4>Downloads</h4>
              <a href="#" class="btn btn-success btn-md btn-block" role="button"><span class="glyphicon glyphicon-send"></span>&nbsp;&nbsp;AnthonOS "Doge"<br></a>
              <a href="#" class="btn btn-success btn-md btn-block" role="button"><span class="glyphicon glyphicon-send"></span>&nbsp;&nbsp;CentralPoint "10032"<br><span class="small text-warning">Beta Version</span></a>
              <a href="#" class="btn btn-success btn-md btn-block" role="button"><span class="glyphicon glyphicon-send"></span>&nbsp;&nbsp;Anthon Starter<br><span class="small text-warning">0.1.2.0, Unstable</span></a>
              <a href="#" class="btn btn-warning btn-md btn-block" role="button"><span class="glyphicon glyphicon-send"></span>&nbsp;&nbsp;AOSC OS3 "Tabitha"<br><span class="small text-warning">Developer Preview</span></a>
              <a href="#" class="btn btn-warning btn-md btn-block" role="button"><span class="glyphicon glyphicon-send"></span>&nbsp;&nbsp;Nirvana "RPM Branch"<br><span class="small text-warning">Developer Preview</span></a>
              <a href="#" class="btn btn-warning btn-md btn-block" role="button"><span class="glyphicon glyphicon-send"></span>&nbsp;&nbsp;LinkC<br><span class="small text-warning">Git Snapshot</span></a>
              <a href="#" class="btn btn-success btn-md btn-block" role="button"><span class="glyphicon glyphicon-send"></span>&nbsp;&nbsp;GitHub Repo<br></a>
          </div>

        </div><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </div><!-- /.container -->
    <?php include 'templates/portal/footer.php';?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
