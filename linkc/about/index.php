<!DOCTYPE html>
<html lang=zh-CN>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no">
    <meta name="description" content="Homepage of Anthon Starter">
    <meta name="author" content="Junde Yi<lmy441900@gmail.com>">
    <link rel="icon" href="favicon.ico">

    <title>Anthon Starter - About</title>

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
        <h1 class="blog-title WQYMicroHei">About</h1>
        <p class="lead blog-description WQYMicroHei">Anthon Starter</p>
      </div>

      <div class="row">

        <div class="col-sm-9 blog-main WQYMicroHei">

          <div class="blog-post">
            <h2 class="blog-post-title WQYMicroHei">The Team</h2>
            <br />
            <ul>
              <li> Minyong Li <a href="mailto:lmy441900@gmail.com">lmy441900@gmail.com</a></li>
              <li> Zixing Liu <a href="mailto:liushuyu011@gmail.com">liushuyu011@gmail.com</a></li>
              <li> Haoming Xu <a href="mailto:18929292333@163.com">18929292333@163.com</a></li>
            </ul>
          </div>

          <div class="blog-post">
            <h2 class="blog-post-title WQYMicroHei">Thanks ;-)</h2>
            <br />
            <span class="text-success"><b>Anthon Starter won't be in existence without support from our friends.</b></span>
            <p>The dev team of Anthon Starter comes from:
            <ul>
              <li> <a href="https://anthonos.org">AOSC, Anthon Open Source Community</a>；</li>
              <li> IT Club of Dongguan No.1 Middle School;</li>
            </ul>
            <p>Technological support from:
            <br />
            <ul>
              <li> Microsoft Windows (Seriously);</li>
              <li> AOSC Core Team;</li>
            </ul>
            <p>And suggestions from:
            <br />
            <ul>
              <li> ruojiner</li>
              <li> freddy4212</li>
              <li> ...</li>
            </ul>
            Your support pushes us forward.
          </div>

        </div>

      </div><!-- /.row -->

    </div><!-- /.container -->

    <?php include '../../templates/aosc-os/footer.php'; ?>

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
