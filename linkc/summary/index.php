<!DOCTYPE html>
<html lang=zh-CN>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no">
    <meta name="description" content="Homepage of Anthon Starter">
    <meta name="author" content="Junde Yi<lmy441900@gmail.com>">
    <link rel="icon" href="favicon.ico">

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

    <?php include '.././././././././././././././././../templates/ast/navbar.php'; ?>

    <div class="container">

      <div class="blog-header">
      <img src="/img/ast.png" height="150" width="150" align=right hspace="40" >
        <h1 class="blog-title WQYMicroHei">Summary</h1>
        <p class="lead blog-description WQYMicroHei">of Anthon Starter</p>
      </div>

      <div class="row">

        <div class="col-sm-9 blog-main WQYMicroHei">

          <div class="blog-post">
            <h2 class="blog-post-title WQYMicroHei">What is it?</h2>
            <br />
            <p>Anthon Starter is a helper for operating system installation, maintained by AOSC. Designed for
            installation of AOSC OS from other OSes (only MS Windows is supported by now), right on your hard drive. <br />
            <p>This project is pushing forward SLOWLY.
          </div>

          <div class="blog-post">
            <h2 class="blog-post-title WQYMicroHei">Project History & Plans</h2>
            <p class="blog-post-meta WQYMicroHei">From <a href="https://wiki.anthonos.org/projects:anthon-starter:devel-guide">Developer Handbook</a></p>
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
            </ul>
            <p>0.1.2 was a major strip down on code and structure: support of German and Traditional Chinese (Taiwan) interface
            was dropped. GPT + EFI systems are supported at this point; Added support for AOSC OS2 and image checksum. Some of
            the components were updated.
            <p><b>EOL (End Of Line) will be at the point 0.3 is released (in the future).</b></p><br />
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
            <h2 class="blog-post-title WQYMicroHei">Licensing</h2>
            <br />
            Anthon Starter is an open source (even free) software, it's released under:
            <ul>
              <li> Apache License 2.0 (0.1 Branch)</li>
              <li> GNU LGPL 2.1 (0.2 Branch)</li>
            </ul>
            <p>The source code are open and free for usage, and non-free components will not be included in the licence.
            Thus, this is <b>NOT</b> strictly a FOSS.
          </div>

        </div>

      </div><!-- /.row -->

    </div><!-- /.container -->

    <div class="blog-footer WQYMicroHei">
      <p>本网页基于<a href="http://getbootstrap.com"> Bootstrap </a>制作，原作者<a href="https://twitter.com/mdo"> @mdo</a>.</p>
      <p>
        <a href="#">返回顶部</a>
      </p>
    </div>


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
    (function youziku() {
    if (window.location.href.toString().substring(0, 7) == "file://") {
            alert("你当前是通过双击打开html文件，进行本地测试的，这样看不到字体效果，一定要通过本地建立的虚拟网站或发布到外网进行测试。详见有字库的使用说明。");
        }else{
        youziku46747();
        }
    })()
    </script>
  </body>
</html>
