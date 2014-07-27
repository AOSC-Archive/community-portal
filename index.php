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
			<h1>Welcome to AOSC!</h1>
				<p>AOSC (Anthon Open Source Community) is yet another open source oriented community, (mainly) founded and led by students from China. Yet the community is open for participation from all over the world. And we are still trying to make this page available in your own language!</p>
			</div>

			<div class="col-md-4 shortcuts">
				<img src="/img/aosc.png"/>
				<a href="#" role="button" class="btn btn-primary btn-lg btn-block">下载最新系统：AnthonOS "Doge"</a>
				<a href="#" role="button" class="btn btn-success btn-lg btn-block">
					帮助应用本地化
					<img src="/img/localization.png"></img>
				</a>
			</div>
		</div>
	</div>


	<div class="container">
		<h1>As a User, we may help each other!</h1>
		<div class="bs-callout">
			<h2>Read wiki to know how to get started immediately.</h2>
			<p>Wiki, blablablalba......</p>
		</div>
		<div class="bs-callout">
			<h2>Report bug during your use.</h2>
			<p>Bug,blabla...</p>
		</div>
		<div class="bs-callout">
			<h2>Localize those in english.</h2>
			<p>Localiztion,blabla...</p>
		</div>
	</div>

	<div class="container marketing">
		<h1>More, I can be a source code contributer!</h1>
		<div class="row section-project">
			<div class="col-md-4">
				<img src="/img/os3.svg" class="img-circle">
				<h2>AOSC OS</h2>
				<p>A Linux Distribution building project, the first project of this community. AOSC OS is an independent Linux distribution with simplified system structure and portable features for anyone.</p>
				<p>AnthonOS and CentralPoint are the two final products of this project</p>
				<a href="#" role=button" class="btn btn-default">View details</a>
			</div>

			<div class="col-md-4">
				<img src="/img/ast.png" class="img-circle">
				<h2>Anthon Starter</h2>
				<p>A helper for installing AOSC OS based distribution from your HDD, while using Windows.</p>
				<a href="#" role=button" class="btn btn-default">View details</a>
			</div>

			<div class="col-md-4">
				<img src="/img/linkc.png" class="img-circle">
				<h2>LinkC</h2>
				<p>A simple open source IM client + server with POSIX socket. </p>
				<a href="#" role=button" class="btn btn-default">View details</a>
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
