<!DOCTYPE html>
<html lang=zh-CN>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no">
    <meta name="description" content="Homepage of AOSC OS">
    <meta name="author" content="Junde Yi<lmy441900@gmail.com>, Jeff Bai <jeffbacihina@members.fsf.org>">
    <link rel="icon" href="/img/favicons/aosc-os.ico">

    <title>AOSC OS - Home</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/blog.css" rel="stylesheet">

  </head>

  <body>
  
  <?php include '../templates/aosc-os/navbar.php';?>

    <div class="container">

      <div class="blog-header">
      <img src="/img/os3.svg" height="150" width="150" align=right hspace="40" >
        <h1 class="blog-title">AOSC OS</h1>
        <p class="lead blog-description">Origin of Better and Faster Linux Distribution</p>
      </div>

      <div class="row">

        <div class="col-sm-8 blog-main">
        
          <div class="blog-post">
            <h2 class="blog-post-title">What's new...</h2>
            <p class="blog-post-meta">as of now<p>
            <b>AOSC OS2 based AnthonOS final has been released on July 10th of 2014.</b>
            <ul>
              <li> It will be maintained till summer of 2015;</li>
              <li> No further roll-ups will be available for desktop environment, but fixes will be posted;</li>
              <li> Backports will be available from AOSC OS3;</li>
            </ul>
          </div>

          <div class="blog-post">
            <h2 class="blog-post-title">What's next...</h2>
            <p class="blog-post-meta">as of tomorrow<p>
			<b>OOBP (out of box preview) testing kick-started!</b>
			<p>Check it out at the "OOBP" page!</p><br />
            <b>The development of AOSC OS3 (2014 - 2015) has started for the next generation of AnthonOS and CentralPoint.</b>
            <p>...and here's some of the best bits for the next year!</b>
            <ul>
              <li> Better tools for development, like Autobuild3 and GCC 4.9.0;</li>
              <li> Much updated desktop environments like KDE 5 and Xfce 4.11;</li>
              <li> Smaller footprint with improved package management;</li>
              <li> RPM branch will be available;</li>
              <li> ...</li>
            </ul>
          </div>

        </div>

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
            <h4>Bulletin</h4>
            <p>Patch 1 version of AnthonOS "Doge" is now released, with several fixes on installation support.</p>
          </div>

          <div class="sidebar-module">
            <h4>Downloads</h4>
	<div class="dropdown btn-block">
        	<button class="btn btn-success btn-md btn-block dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;AnthonOS "Doge"<br><span class="small">Final Release</span><span class="caret"></span></button>
		<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
			<li role="presentation"><a role="menuitem" tabindex="" href="http://mb.anthonos.org/os2-releases/anthonos/july-2014/patch-1/anthonos_final-doge_kde_pc+mac_zh-CN_patch-1.iso">Chinese Simplified</a></li>
			<li role="presentation"><a role="menuitem" tabindex="" href="http://mb.anthonos.org/os2-releases/anthonos/july-2014/patch-1/anthonos_final-doge_kde_pc+mac_zh-TW_patch-1.iso">Chinese Traditional (Taiwan)</a></li>
			<li role="presentation"><a role="menuitem" tabindex="" href="http://mb.anthonos.org/os2-releases/anthonos/july-2014/patch-1/anthonos_final-doge_kde_pc+mac_en-US_patch-1.iso">English (America)</a></li>
		</ul>
       	</div>
            <a href="http://mb.anthonos.org/os2-releases/centralpoint/Beta2/aosc-centralpoint_beta2-10032_pc+mac_lang-c_stripped.iso" class="btn btn-success btn-md btn-block" role="button"><span class="glyphicon glyphicon-send"></span>&nbsp;&nbsp;CentralPoint "10032"<br><span class="small text-warning">Beta Version</span></a>
            <a href="http://mb.anthonos.org/os3-releases/os3-next/Developer_Preview/aosc-os3_developer-preview_dpkg_lang_c_stripped.tar.xz" class="btn btn-warning btn-md btn-block" role="button"><span class="glyphicon glyphicon-send"></span>&nbsp;&nbsp;AOSC OS3 "Tabitha"<br><span class="small text-warning">Developer Preview</span></a>
            <a href="http://mb.anthonos.org/os3-releases/os3-next/Developer_Preview/aosc-os3_developer-preview_rpm_lang_c_stripped.tar.xz" class="btn btn-warning btn-md btn-block" role="button"><span class="glyphicon glyphicon-send"></span>&nbsp;&nbsp;Nirvana "RPM Branch"<br><span class="small text-warning">Developer Preview</span></a>
         
          </div>
        </div><!-- /.blog-sidebar -->

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
