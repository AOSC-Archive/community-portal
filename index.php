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
                        <div class="col-sm-3">
				<a href="#" class="btn btn-default btn-md btn-block">What's New</a>
			</div>
			</div>

			<div class="col-md-4 shortcuts">
				<img src="/img/aosc.png"/ width="192px" height"192px">
                        </div>

		</div>
	</div>

        <div class="row">
		<div class="container">
			<div class="col-md-8">
				<div class="col-sm-2">
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
