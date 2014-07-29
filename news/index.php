<!DOCTYPE html>
<html lang=zh-CN>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no">
    <meta name="description" content="Summary of AOSC OS">
    <meta name="author" content="Junde Yi<lmy441900@gmail.com>, Jeff Bai <jeffbaichina@members.fsf.org>">
    <link rel="icon" href="/img/favicons/aosc.ico">

    <title>AOSC OS - Summary</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/blog.css" rel="stylesheet">

  </head>

  <body>

    <?php include '../templates/portal/navbar.php';?>

  <div class="row jumbotron">
  <div class="container section-welcome">
      <div class="row">
      <div class="col-md-8 col-xs-8">
        <h1>News</h1>
        <p>Freshly off the shelf</p>
      </div>
      <div class="col-md-4 col-xs-4 shortcuts">
        <img src="/img/aosc.png">
          </div>
        </div>
  </div>
</div>
    
    <div class="container">

      <div class="row">

        <div class="col-sm-9 blog-main">

          <div class="blog-post">
            <h2 class="blog-post-title">Anthon Starter 0.1.2.0 Hits Green</h2>
            <p class="lead blog-description">July 11th, 2014</p>
            <p>On July 11th Junde Yi and his team for Anthon Starter announced the release of Anthon Starter 0.1.2.0. 
            Anthon Starter is a tool for installation / boot deployment of AOSC OS, and it's currently based on Batch. 
            <p>Yi also announced his plan for 0.2.0 branch, as it will be more portable according to his annoucement.
            <p>For more details please check out the <a href="http://projects-dev.anthonos.org/ast">Anthon Starter Homepage</a>.
          </div>

          <div class="blog-post">
            <h2 class="blog-post-title">AnthonOS Final Release "Doge"</h2>
            <p class="lead blog-description">July 10th, 2014</p>
            <p>AnthonOS, the first final product of AOSC OS2 project was announced by Jeff Bai on July 10th, 2014.
            <p>AnthonOS comes with KDE 4 as its default desktop environment, wrapped up with a complete suite of 
            graphical applications to make ease of use throughout your day: games, package management, multimedia
            and even some scientific or studio sensation!
            <p><b>Known issues:</b>
            <ul>
              <li> You must select "This is a EFI system" when you install AnthonOS to prevent error on GRUB installation;</li>
              <li> AnthonOS defaults $HOME to /home/live although you can change your username when installing;</li>
              <li> It's pretty big due to inclusion of development toolkits and some unnecessary debug symbols;</li>
              <li> GRUB may think that there's a OSX if you boot the iso on a flash drive;</li>
            </ul>
            <p>For more details and download please check out the <a href="http://projects-dev.anthonos.org/aosc-os">AOSC OS Homepage</a>.
          </div>

          <div class="blog-post">
            <h4>Well, it's always too late to check old news as we will not keep them...</h4>
          </div>

        </div>

      </div><!-- /.row -->

    </div><!-- /.container -->

    <?php include '../templates/portal/footer.php';?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/js/jquery-min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
  </body>
</html>
