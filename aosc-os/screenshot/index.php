<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta name="generator"
    content="HTML Tidy for HTML5 (experimental) for Windows https://github.com/w3c/tidy-html5/tree/c63cc39" />
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no" />
    <meta name="description" content="Home of AOSC OS" />
    <meta name="author" content="Junde Yi&lt;lmy441900@gmail.com&gt;, Jeff Bai &lt;jeffbaichina@members.fsf.org&gt;" />
    <link rel="icon" href="/img/favicons/aosc-os.ico" />
    <title>AOSC OS - Screenshots</title>
    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="/css/blog.css" rel="stylesheet" />
    <link href="/css/common.css" rel="stylesheet" />
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <?php include '../../templates/aosc-os/navbar.php';?>
    <div class="alert alert-warning" role="alert">
      Page under construction, content incomplete.
    </div>
    <div class="row jumbotron">
      <div class="container section-welcome">
        <div class="row">
          <div class="col-sm-10 col-sm-offset-1">
            <div class="col-sm-8 col-xs-12">
              <h1>Screenshot</h1>
              <p>Let the show begin!</p>
            </div>
            <div class="col-sm-3 col-sm-offset-1 shortcuts hidden-xs">
              <img src="/img/os3.png" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="col-sm-10 col-sm-offset-1 blog-main">
        <p>Screenshot of the versions of AOSC OS, feel the difference and pick your choice for a spin! This below shows the
        diversity of desktop environments we provide.</p>
        <hr class="divider" />
        <ul class="nav nav-tabs">
          <li role="presentation" class="active">
            <a href="#gnome" data-toggle="tab">GNOME</a>
          </li>
          <li role="presentation">
            <a href="#xfce" data-toggle="tab">XFCE</a>
          </li>
          <li role="presentation">
            <a href="#cinnamon" data-toggle="tab">Cinnamon</a>
          </li>
          <li role="presentation">
            <a href="#mate" data-toggle="tab">MATE</a>
          </li>
          <li role="presentation">
            <a href="#enlightenment" data-toggle="tab">Enlightenment</a>
          </li>
          <li role="presentation">
            <a href="#plasma" data-toggle="tab">Plasma</a>
          </li>
          <li role="presentation">
            <a href="#kodi" data-toggle="tab">Kodi</a>
          </li>
          <li role="presentation">
            <a href="#pantheon" data-toggle="tab">Pantheon</a>
          </li>
          <li role="presentation">
            <a href="#unity" data-toggle="tab">Unity</a>
          </li>
          <li role="presentation">
            <a href="#dde" data-toggle="tab">DDE</a>
          </li>
          <li role="presentation">
            <a href="#os2" data-toggle="tab">AnthonOS (OS2)</a>
          </li>
        </ul>
      </div>
    </div>
    <div id="my-tab-content" class="tab-content">
      <div class="tab-pane" id="os2">
      <div class="row">
        <br />
        <div class="col-sm-1 col-sm-offset-2">
          <img src="/img/anos.png" width="96px" height="96px" />
        </div>
        <div class="col-sm-6 col-sm-offset-1">
          <div class="row">
            <h2>AnthonOS (AOSC OS2)</h2>
            <p>Final Release &quot;Doge&quot; comes with KDE 4 as its default desktop environment, here showing is the default
            desktop configuration of AnthonOS (however you can choose for the default Plasma desktop configuration).</p>
          </div>
        </div>
      </div class="row">
      <hr class="divider" />
      <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
          <div class="row">
            <div class="my_gallery">
              <?php
                              for ($a=1;$a<=11;$a++)
                                echo '<a target="_blank" href="/img/anthonos/'.$a.'.png"><img src="/img/anthonos/'.$a.'_small.png" id="img'.$a.'" alt="img'.$a.'" width="200"></a>';
                            ?>
            </div>
            <br />
          </div>
        </div>
      </div>
      <!-- /.container -->
      <?php include '../../templates/portal/footer.php';?>
      <!-- Bootstrap core JavaScript
    ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="/js/jquery-min.js"></script> 
      <script type="text/javascript">
      jQuery(document).ready(function ($) {
        $(&amp;amp;amp;amp;#39;#tabs&amp;amp;amp;amp;#39;).tab();
      }); 
  
</script> 
      <script src="/js/bootstrap.min.js"></script> 
      <script src="/js/bootstrap.min.js"></script></div>
    </div>
  </body>
</html>
