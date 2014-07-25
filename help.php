<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>帮助 | AnthonOS </title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
<link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/cerulean/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="navbar navbar-default navbar-fixed-top" style="margin-bottom: 30px;">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">AnthonOS</a>
    </div>
    <div class="navbar-collapse collapse" style="height: 0px; ">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.html">源状态</a></li>
        <li class="active"><a href="help.html">帮助</a></li>
        <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">社区 <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="http://wenda.anthonos.org">问答</a></li>
          <li><a href="http://wiki.anthonos.org">百科</a></li>
          <li><a href="http://news.anthonos.org">资讯</a></li>
          <li><a href="http://bugs.anthonos.org/">反馈</a></li>
          <li><a href="http://mirror.anthonos.org/">仓库</a></li>
          <li><a href="https://github.com/TheNextProject/">Git</a></li>
        </ul>
        </li>
      </ul>
    </div>
  </div>
</div>
<div class="container" style=" margin-top: 50px; ">
  <h1>安同源镜像使用帮助 </h1>
  <div class="panel  panel-info">
    <div class="panel-heading">
      <h3 class="panel-title">如何更换源？ </h3>
    </div>
    <div class="panel-body">
      <p>以下是一份源文件的样板，请将{baseurl}替换为源状态中所显示的源地址。</p>
      <script src="https://gist.github.com/TheNextProject/9677019.js"></script>
    </div>
    <div class="panel-heading">
      <h3 class="panel-title">如何镜像源？ </h3>
    </div>
    <div class="panel-body">
      <p>rsync地址：rsync://mirror.anthonos.org::anthon 或 rsync://mirrors.ustc.edu.cn::anthon 或 rsync://mirrors.yun-idc.com::anthon</p>
       <p>您将需要准备50G左右的空间进行镜像。</p>
    </div>
  </div>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
</div>
</body>
</html>
