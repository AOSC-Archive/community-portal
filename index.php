<!DOCTYPE html>
<html lang=zh-CN>
  <head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no">
	<meta name="description" content="Homepage of AOSC OS">
	<link rel="icon" href="favicon.ico">
	<title>Community Portal - Home</title>

	<!-- Bootstrap core CSS -->
	<link href="/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="/css/blog.css" rel="stylesheet">

  </head>

  <body>

	<?php include 'templates/portal/navbar.php';?>


	<div class="row jumbotron">
		<div class="container section-welcome">
			<div class="col-md-8">
				<h1>Welcome!</h1>
				<p>AOSC (Anthon Open Source Community) is a community is open for participation from all over the world.</p>
			</div>
			<div class="col-md-4 shortcuts">
				<img src="/img/aosc.png"/ width="192px" height"192px">
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
					<p>"AOSC" stands for Anthon Open Source Community. Anthon Open Source Community is a community that
                                           focuses on improvement of open source software. We are taking action to make open source software
                                           more friendly to everyone.</p>
				</div>
				<hr />
				<div class="col-sm-1">
					<img src="/img/claimation.png">
				</div>
				<div class="col-md-10 col-sm-offset-1">
					<h2>Take Action!</h2>
					<p>It's not only about talking, let's take action for improvement!</p><br />
                                        <div class="col-sm-1">
                                                <img src="/img/os3.png" width="48px" height="48px">
                                        </div>
                                        <div class="col-sm-10 col-sm-offset-1">
                                                <h4><b><a href="http://portal.anthonos.org/aosc-os/">AOSC OS</a></b></h4>
						<p>AOSC OS is one of the most important projects of the community - a Linux Distribution buliding
                                                   project. AOSC OS is built independently with references from Linux From Scratch and other great
                                                   Linux distributions from all over the world.</p>
						<p>This is the project behind AnthonOS and CentralPoint.</p>
                                        </div>
                                        <div class="col-sm-1">
                                                <img src="/img/ast.png" width="48px" height="48px">
                                        </div>
                                        <div class="col-sm-10 col-sm-offset-1">
                                                <h4><b><a href="http://portal.anthonos.org/ast/">Anthon Starter</a></b></h4>
						<p>Anthon Starter is a HDD installation helper for AOSC OS. This project focuses on making installation
						   of AOSC OS from Windows easier.</p>
                                        </div>
					<div class="col-sm-1">
						<img src="/img/localization.png" width="48px" height="48px">
					</div>
					<div class="col-sm-10 col-sm-offset-1">
						<h4><b><a href="http://l10n.anthonos.org/">Localization</a></b></h4>
						<p>We believe the best way to make open source software better is to make more people understand
                                                   what they are. Localization of open source software makes it easier for everyone to use open
                                                   source software more easily and efficiently.</p>
					</div>
                                        <div class="col-sm-1">
                                                <img src="/img/linkc.png" width="48px" height="48px">
                                        </div>
                                        <div class="col-sm-10 col-sm-offset-1">
                                                <h4><b><a href="http://portal.anthonos.org/linkc/">LinkC</a></b></h4>
						<p>LinkC is a portable yet independent IM based on POSIX socket, and a protocol implemented called
						   LinkC Network Protocol, supports Intranet and Internet IM chatting via UDP or HTTP.</p>
                                        </div>
                                        <div class="col-sm-1">
                                                <img src="/img/github.png" width="48px" height="48px">
                                        </div>
                                        <div class="col-sm-10 col-sm-offset-1">
                                                <h4><b><a href="http://github.com/AOSC-Dev">Other Projects</a></b></h4>
						<p>Other projects, as small as AOSC-VersionHelper for displaying system version, as critical as Autobuild
						   for building AOSC OS. They are hosted on GitHub for open participation, PR's are always welcomed.</p>
                                        </div>
				</div>
			</div>
			<div class="col-md-3 col-sm-offset-1">
				<h4><span class="glyphicon glyphicon-save"></span> Downloads</h4>
				<a href="#" class="btn btn-success btn-md btn-block" role="button"><span class="glyphicon glyphicon-send"></span>&nbsp;&nbsp;AnthonOS "Doge"<br></a>
				<a href="#" class="btn btn-success btn-md btn-block" role="button"><span class="glyphicon glyphicon-send"></span>&nbsp;&nbsp;CentralPoint "10032"<br><span class="small text-warning">Beta Version</span></a>
				<a href="#" class="btn btn-success btn-md btn-block" role="button"><span class="glyphicon glyphicon-send"></span>&nbsp;&nbsp;Anthon Starter<br><span class="small text-warning">0.1.2.0, Unstable</span></a>
				<a href="#" class="btn btn-warning btn-md btn-block" role="button"><span class="glyphicon glyphicon-send"></span>&nbsp;&nbsp;AOSC OS3 "Tabitha"<br><span class="small text-warning">Developer Preview</span></a>
				<a href="#" class="btn btn-warning btn-md btn-block" role="button"><span class="glyphicon glyphicon-send"></span>&nbsp;&nbsp;Nirvana "RPM Branch"<br><span class="small text-warning">Developer Preview</span></a>
				<a href="#" class="btn btn-warning btn-md btn-block" role="button"><span class="glyphicon glyphicon-send"></span>&nbsp;&nbsp;LinkC<br><span class="small text-warning">Git Snapshot</span></a>
				<a href="#" class="btn btn-success btn-md btn-block" role="button"><span class="glyphicon glyphicon-send"></span>&nbsp;&nbsp;GitHub Repo<br></a>
			</div>
		</div>
	</div>


	<?php include 'templates/portal/footer.php';?>

	<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="js/jquery-min.js"></script>
	<script src="js/bootstrap.min.js"></script>
  </body>
</html>
