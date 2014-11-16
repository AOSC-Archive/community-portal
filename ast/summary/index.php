<!DOCTYPE html>
<html lang=zh-CN>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no">
    <meta name="description" content="Homepage of Anthon Starter">
    <meta name="author" content="Junde Yi<lmy441900@gmail.com>">
    <link rel="icon" href="/img/favicons/ast.ico">

    <title>Anthon Starter - Summary</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/blog.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <?php include '../../templates/ast/navbar.php'; ?>

    <div class="container">

      <div class="blog-header">
      <img src="/img/ast.png" height="150" width="150" align=right hspace="40" >
        <h1 class="blog-title">Summary</h1>
        <p class="lead blog-description">of Anthon Starter</p>
      </div>

      <div class="row">

        <div class="col-sm-9 blog-main">

          <div class="blog-post">
            <h2 class="blog-post-title">What is it?</h2>
            <br />
            <p>Anthon Starter is a helper for operating system installation, maintained by AOSC. Designed for
            installation of AOSC OS from other OSes (only MS Windows is supported by now), right on your hard drive. <br />
            <p>This project is pushing forward SLOWLY.
          </div>

          <div class="blog-post">
            <h2 class="blog-post-title">Project History & Plans</h2>
            <p class="blog-post-meta">From <a href="https://wiki.anthonos.org/projects:anthon-starter:devel-guide">Developer Handbook</a></p>
            <h3>0.1.0 Branch</h3>
            <ul>
              <li>0.1.0.0: Released on 2013/2/9;</li>
              <li>0.1.0.3: Released on2013/2/17;</li>
              <li>Support <b>ENDED</b> on: 2013/7/1</li>
            </ul>
            <p>0.1.0 was the first version to support installing AnthonOS (AOSC OS1) from HDD,
            its GUI was based on Delphi but still runs on a core of Batch; 0.1.0.3 fixed some
            flaws on deployed bootloader.<br />
            <br />
            <h3>0.1.1 Branch</h3>
            <ul>
              <li>0.1.1.0：Released on 2013/6/27;</li>
              <li>0.1.1.1：Released on 2013/7/6;</li>
              <li>0.1.1.2：Released on 2013/7/19;</li>
              <li>0.1.1.3：Released on 2013/8/3 (Stable Release);</li>
              <li>Support <b>ENDED</b> on: 2014/2/1</li>
            </ul>
            <p>0.1.1 dropped the GUI from 0.1.0 branch; built fully on Batch and dropped some components with potential
            licensing issues. It modifies WINNT loader to boot into GRUB4DOS 0.4.4, and finally to Anthon-EHL3 Installation
            Environment.
            <p>Supports Chinese Simplified, Chinese Traditional (Taiwan), English (United States) and German.
            <p>Windows NT 6.x UAC was also supported.<br />
            <br />
            <h3>0.1.2 Branch</h3>
            <ul>
              <li>0.1.2.0: Release on 2014/7/10;</li>
              <li>Support <b>ENDED</b> on: 2014/8/30</li>
            </ul>
            <p>0.1.2 was a major strip down on code and structure: support of German and Traditional Chinese (Taiwan) interface
            was dropped. GPT + EFI systems are supported at this point; Added support for AOSC OS2 and image checksum. Some of
            the components were updated.<br />
            <br />
            <h3>0.2 Branch (Future Plan)</h3>
            <p>0.2.0 will be written in C instead of Batch. Only CLI will be supported in the first place, GUI will be added later.
            <p>System configuration probing will be supported.<br />
            <br />
            <h3>0.3 Branch (Future Plan)</h3>
            <p>0.3 will be based off 0.2. Step-based and easier-to-ues GUI will be available.<br />
            <br />
            <h3>0.4 Branch (Future Plan)</h3>
            <p>0.4 will support installation and configuration of AOSC OS right under Windows.
          </div>

          <div class="blog-post">
            <h2 class="blog-post-title">Licensing</h2>
            <br />
            Anthon Starter is an open source (even free) software, it's released under:
            <ul>
              <li> Apache License 2.0 (0.1 Branch)</li>
              <li> GNU GPL 2 or Later (0.2 Branch)</li>
            </ul>
            <p>The source code are open and free for usage, and non-free components will not be included in the licence.
            Thus, this is <b>NOT</b> strictly a FOSS.
          </div>

        </div>

      </div><!-- /.row -->

    </div><!-- /.container -->

    <?php include '../../templates/portal/footer.php'; ?>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/js/jquery-min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
  </body>
</html>
