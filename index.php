<!DOCTYPE html>
<html lang=zh-CN>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no">
    <meta name="description" content="Homepage of AOSC OS">
    <link rel="icon" href="/img/favicons/aosc.ico">
    <title>Community Portal - Home</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/blog.css" rel="stylesheet">

  </head>

  <body>

  <?php include 'templates/portal/navbar.php';?>


  <!-- Main title -->
  <div class="row jumbotron">
    <div class="container section-welcome">
      <div class="row">
        <div class="col-md-8 col-xs-8">
          <h1>Welcome!</h1>
          <p>AOSC (Anthon Open Source Community) is an open community, which welcomes participation from all over the world.</p>
        </div>
        <div class="col-md-4 col-xs-4 shortcuts">
          <img src="/img/aosc.png">
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="container">
      <div class="col-md-8">

        <div class="col-sm-1">
          <img src="/img/question.png">
        </div>
        <div class="col-md-10 col-sm-offset-1">
          <h2>What is AOSC?</h2>
          <p>
          "AOSC" stands for Anthon Open Source Community. Anthon Open Source Community is a community that
          focuses on improvement of open source software. We are taking action to make open source software
          more friendly to everyone.<br /><br />
          </p>
        </div>

        <div class="col-sm-1">
          <img src="/img/claimation.png">
          <br /><br />
        </div>
        <div class="col-md-10 col-sm-offset-1">
          <h2>Take Action!</h2>
          <p>It's not only about talking, let's take action for improvement! By using, testing, crititizing or even
              contributing to the projects, they are just going to get better.</p><br />
        </div>
        
        <div class="col-sm-1">
          <img src="/img/os3.png" width="64px" height="64px">
        </div>
        <div class="col-sm-10 col-sm-offset-1">
          <h2><a href="/aosc-os/" target=_blank>AOSC OS</a></h2>
          <p>
          AOSC OS is one of the most important projects of the community - a Linux Distribution buliding
          project. AOSC OS is built independently with references from Linux From Scratch and other great
          Linux distributions from all over the world.
          </p>
          <p>This is the project behind AnthonOS and CentralPoint.</p><br />
        </div>
        
        <div class="col-sm-1">
          <img src="/img/ast.png" width="64px" height="64px">
        </div>
        <div class="col-sm-10 col-sm-offset-1">
          <h2><a href="/ast/" target=_blank>Anthon Starter</a></h4>
          <p>
          Anthon Starter is a HDD installation helper for AOSC OS. This project focuses on making installation
          of AOSC OS from Windows easier.
          </p><br />
        </div>
        
        <div class="col-sm-1">
          <img src="/img/localization.png" width="64px" height="64px">
        </div>
        <div class="col-sm-10 col-sm-offset-1">
          <h2><a href="http://l10n.anthonos.org/" target=_blank>Localization</a></h2>
          <p>
          We believe the best way to make open source software better is to make more people understand
          what they are. Localization of open source software makes it easier for everyone to use open
          source software more easily and efficiently.
          </p><br />
        </div>
              
        <div class="col-sm-1">
          <img src="/img/linkc.png" width="64px" height="64px">
        </div>
        <div class="col-sm-10 col-sm-offset-1">
          <h2><a href="/linkc/" target=_blank>LinkC</a></h2>
          <p>
          LinkC is a portable yet independent IM based on POSIX socket, and a protocol implemented called
          LinkC Network Protocol, supports Intranet and Internet IM chatting via UDP or HTTP.
          </p><br />
        </div>
        
        <div class="col-sm-1">
          <img src="/img/github.png" width="64px" height="64px">
        </div>
        <div class="col-sm-10 col-sm-offset-1">
          <h2><a href="http://github.com/AOSC-Dev" target=_blank>Other Projects</a></h2>
          <p>
          Other projects, as simple as AOSC-VersionHelper for displaying system version, as critical as Autobuild
          for building AOSC OS. They are hosted on GitHub for open participation, PRs are always welcomed.<br /><br />
          </p>
        </div>
        
      </div>

      <div class="col-md-3 col-sm-offset-1">
        <div class="sidebar-module sidebar-module-inset">
          <h4>Bulletin</h4>
          <p>Patch 1 version of AnthonOS "Doge" is now released, with several fixes on installation support.</p>
          <p>For more details please check the <a href="/news/">"News"</a> page</p>
        </div>

        <h4><span class="glyphicon glyphicon-save"></span>&nbsp;&nbsp;Downloads</h4>
	<div class="dropdown btn-block">
        	<button class="btn btn-success btn-md btn-block dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;AnthonOS "Doge"<br><span class="small">Final Release</span><span class="caret"></span></button>
		<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
			<li role="presentation"><a role="menuitem" tabindex="" href="http://mb.anthonos.org/os2-releases/anthonos/july-2014/patch-1/anthonos_final-doge_kde_pc+mac_zh-CN_patch-1.iso">Chinese Simplified</a></li>
			<li role="presentation"><a role="menuitem" tabindex="" href="http://mb.anthonos.org/os2-releases/anthonos/july-2014/patch-1/anthonos_final-doge_kde_pc+mac_zh-TW_patch-1.iso">Chinese Traditional (Taiwan)</a></li>
			<li role="presentation"><a role="menuitem" tabindex="" href="http://mb.anthonos.org/os2-releases/anthonos/july-2014/patch-1/anthonos_final-doge_kde_pc+mac_en-US_patch-1.iso">English (America)</a></li>
		</ul>
	</div>
        <a href="http://mb.anthonos.org/os2-releases/centralpoint/Beta2/aosc-centralpoint_beta2-10032_pc+mac_lang-c_stripped.iso" class="btn btn-primary btn-md btn-block" role="button"><span class="glyphicon glyphicon-tag"></span>&nbsp;&nbsp;CentralPoint "10032"<br><span class="small">Beta Version</span></a>
        <a href="https://github.com/AOSC-Dev/Anthon-Starter/archive/0.2.0-devel.zip" class="btn btn-primary btn-md btn-block" role="button"><span class="glyphicon glyphicon-tag"></span>&nbsp;&nbsp;Anthon Starter<br><span class="small">Git Snapshot</span></a>
        <a href="https://github.com/AOSC-Dev/LinkC/archive/master.zip" class="btn btn-primary btn-md btn-block" role="button"><span class="glyphicon glyphicon-tag"></span>&nbsp;&nbsp;LinkC<br><span class="small">Git Snapshot</span></a>
        <a href="https://github.com/AOSC-Dev" target=_blank class="btn btn-primary btn-md btn-block" role="button"><span class="glyphicon glyphicon-search"></span>&nbsp;&nbsp;GitHub Repositories<br></a>
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
