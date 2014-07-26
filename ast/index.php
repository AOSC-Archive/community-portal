<!DOCTYPE html>
<html lang=zh-CN>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no">
    <meta name="description" content="Homepage of Anthon Starter">
    <meta name="author" content="Junde Yi<lmy441900@gmail.com>">
    <link rel="icon" href="favicon.ico">

    <title>Anthon Starter - Home</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/blog.css" rel="stylesheet">
  </head>

  <body>

    <?php include '../templates/ast/navbar.php';?>

    <div class="container">

      <div class="blog-header">
      <img src="/img/ast.png" height="150" width="150" align=right hspace="40" >
        <h1 class="blog-title WQYMicroHei">Anthon Starter</h1>
        <p class="lead blog-description WQYMicroHei">AOSC OS HDD Installation Helper</p>
      </div>

      <div class="row">

        <div class="col-sm-8 blog-main WQYMicroHei">

          <div class="blog-post">
            <h2 class="blog-post-title WQYMicroHei">Feature Plan of 0.2 Branch Issued</h2>
            <p class="blog-post-meta WQYMicroHei">News [2014-07-17]<p>
            Building of base structure of Anthon Starter 0.2 branch is finished. According to current source structure, the
            next version of Anthon Starter: version 0.2.0 will have the following features available:
            <ul>
              <li> 90% of the source will be coded in C, critical system calls will still be controlled by Batch;</li>
              <li> Support of POSIX paramenter switch (long paramenters);</li>
              <li> CLI (Command Line Interface) only;</li>
              <li> Modulated structure, development of functions will be divided to various developers to garantee quality and development schedule;</li>
              <li> Optimized checksum algorithm (thanks to Zixing Liu);</li>
              <li> ...</li>
            </ul>
            Participation is still welcomed. Anthon Starter is currently hosted on our
            <a href="https://github.com/AOSC-Dev/Anthon-Starter/tree/0.2.0-devel">Git Repository.</a>
            Simply use this command: <br />
              <p><pre>git clone -b 0.2.0-devel https://github.com/AOSC-Dev/Anthon-Starter.git</pre>
            to get the latest source from our 0.2.0-devel branch.
          </div>

          <div class="blog-post">
            <h2 class="blog-post-title WQYMicroHei">Feature Plan of 0.2 Discussed</h2>
            <p class="blog-post-meta WQYMicroHei">News [2014-07-11]<p>
            Our team has started structural build of Anthon Starter 0.2. According to our discussion,
            this particular version will have the following new features:
            <ul>
              <li> <u> Rewrite of program in C;</u>( Wow )</li>
              <li> CLI only for earlier stage;</li>
              <li> Simple GUI will be added on later;</li>
              <li> Newer components;</li>
            </ul>
          </div>

          <div class="blog-post">
            <h2 class="blog-post-title WQYMicroHei">It Just Gets Better Everyday!</h2>
            <br />
            Latest Stable Release: <strong>0.1.2.0</strong><br />
            Scheduled Release: <strong>0.1.2.1</strong><br />
            <br />
            Anthon Starter currently support the following features:
            <ul>
              <li> Modular program structure;</li>
              <li> EFI + GPT support;</li>
              <li> Ability to deal with exceptions;</li>
              <li> Support of AOSC OS2;</li>
              <li> Checksum support for ISO image and its contents;</li>
              <li> Optimized CLI apparence;</li>
              <li> Updated Components</li>
              <li> ...</li>
            </ul>
          </div>

          <div class="blog-post">
            <h2 class="blog-post-title WQYMicroHei">We need your participation!</h2>
            <br />
            If you are interested, you may join us! No matter if you are good at:
            <ul>
              <li> Coding;</li>
              <li> Artwork;</li>
              <li> Tucao;</li>
              <li> Translation;</li>
            </ul>
            Simply find a way to contact with us (on the <a href="http://projects-dev.anthonos.org/ast/about/">"About"</a> page), you may become a developer!
          </div>
        </div>

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <div class="sidebar-module sidebar-module-inset WQYMicroHei">
            <h4>Bulletin</h4>
            <p>Version 0.1.2.0 is released.<br />If you got trouble using this version, please don't hesitate to report them, we will try our best
            to fix them in the next release (0.1.2.1).</p>
          </div>

          <div class="sidebar-module WQYMicroHei">
            <h4>Downloads</h4>
              <a href="http://repo.anthonos.org/projects/anthon-starter_0.1.2.0.7z" class="btn btn-warning btn-lg btn-block" role="button"><span class="glyphicon glyphicon-send"></span>&nbsp;&nbsp;Latest: 0.1.2.0<br><span class="small text-warning">Pretty Buggy</span> </a>
            <p><ol class="list-unstyled">
              <li><a href="###"><strong>0.1.2.1 </strong>[Planning]</a></li>
              <li><a href="###"><strong>0.2.0.0 </strong>[Planning]</a></li>
            </ol></p>
            <h4>Historical Release</h4>
            <h5>These version are no longer maintained, proceed with caution.</h5>
            <ol class="list-unstyled">
              <li><a href="http://repo.anthonos.org/junde-studio/Projects/Anthon-Starter/anthonos-starter_0.1.1.3.7z">0.1.1.3</a></li>
              <li><a href="http://repo.anthonos.org/junde-studio/Projects/Anthon-Starter/anthon_win_0.1.0.3.7z">0.1.0.3</a></li>
              <li><a href="http://repo.anthonos.org/junde-studio/Projects/Anthon-Starter/anthon_win_0.1.0.0.7z">0.1.0.0</a></li>
            </ol>
          </div>
          <div class="sidebar-module WQYMicroHei">
            <h4>Other Links</h4>
            <ol class="list-unstyled">
              <li><a href="http://github.com/AOSC-Dev/Anthon-Starter">Git Repository</a></li>
            </ol>
          </div>
        </div><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </div><!-- /.container -->

    <?php include '../templates/aosc-os/footer.php';?>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://www.youziku.com/UserDownFile/jquery.md5.js"></script>
    <script type="text/javascript"> 
    function youziku46747() {
        var resultStr = $(".WQYMicroHei").text();
        var md5 = "";
        resultStr = Trim(resultStr);
        resultStr = SelectWord(resultStr);
        md5 = $.md5("c5735e89f122450b97f376e401dbe1b1"+"WQYMicroHei" + resultStr);
        $.getJSON("http://www.youziku.com/webfont/CSSPOST?jsoncallback=?", { "id": md5, "guid": "c5735e89f122450b97f376e401dbe1b1", "type": "5" }, function (json) {
            if (json.result == 0) {/*alert("需要生成");*/
                $.post("http://www.youziku.com/webfont/PostCorsCreateFont", { "name": "WQYMicroHei", "gid": "c5735e89f122450b97f376e401dbe1b1", "type": "5", "text": resultStr }, function (json) {
                if (json == "0") { /*alert("参数不对");*/
                } else if (json == "2") {/*alert("超过每日生成字体数的上限");*/
                } else if (json == "3") { /*alert("当前正在生成请稍后");*/
                } else {/*alert("正在生成");*/
                }
            });
            }
            else {/*alert("下载css文件");*/
                loadExtentFile("http://www.youziku.com/webfont/css?id=" + md5 + "&guid=" + "c5735e89f122450b97f376e401dbe1b1" + "&type=5");
            }
        });
    }
    </script>
  </body>
</html>
