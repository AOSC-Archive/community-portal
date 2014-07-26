<!DOCTYPE html>
<html lang=zh-CN>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no">
    <meta name="description" content="Homepage of Anthon Starter">
    <meta name="author" content="Junde Yi<lmy441900@gmail.com>">
    <link rel="icon" href="favicon.ico">

    <title>Anthon Starter - Screenshot</title>

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
        <h1 class="blog-title WQYMicroHei">Cheese!</h1>
        <p class="lead blog-description WQYMicroHei">And Anthon Starter Looks In Frame</p>
      </div>

      <div class="row">

        <div class="col-sm-9 blog-main">

          <div class="blog-post">
            <h4 class="blog-post-title WQYMicroHei">0.2.0 (Development Version)</h4>
            <p><a target="_blank" href="/img/screenshots/0.2.0/0.jpg"><img src="/img/screenshots/0.2.0/0.jpg" width="250"></a>
          </div>

          <div class="blog-post">
            <h4 class="blog-post-title WQYMicroHei">0.1.2</h4>
            <a target="_blank" href="/img/screenshots/0.1.2/0.jpg"><img src="/img/screenshots/0.1.2/0.jpg" width="250"></a>
            <a target="_blank" href="/img/screenshots/0.1.2/1.jpg" margin-left="10px"><img src="/img/screenshots/0.1.2/1.jpg" width="250"></a>
            <a target="_blank" href="/img/screenshots/0.1.2/2.jpg"><img src="/img/screenshots/0.1.2/2.jpg" width="250"></a>
          </div>

          <div class="blog-post">
            <h2 class="blog-post-title WQYMicroHei">0.1.1 (Alpha)</h2>
            <a target="_blank" href="/img/screenshots/0.1.1/0.PNG"><img src="/img/screenshots/0.1.1/0.PNG" width="250"></a>
            <a target="_blank" href="/img/screenshots/0.1.1/1.PNG"><img src="/img/screenshots/0.1.1/1.PNG" width="250"></a>
            <a target="_blank" href="/img/screenshots/0.1.1/2.PNG"><img src="/img/screenshots/0.1.1/2.PNG" width="250"></a>
            <a target="_blank" href="/img/screenshots/0.1.1/3.PNG"><img src="/img/screenshots/0.1.1/3.PNG" width="250"></a>
          </div>

          <div class="blog-post">
            <h2 class="blog-post-title WQYMicroHei">0.1.0</h2>
            <a target="_blank" href="/img/screenshots/0.1.0/截图1.PNG"><img src="/img/screenshots/0.1.0/截图1.PNG" width="250"></a>
            <a target="_blank" href="/img/screenshots/0.1.0/截图2.PNG"><img src="/img/screenshots/0.1.0/截图2.PNG" width="250"></a>
            <a target="_blank" href="/img/screenshots/0.1.0/截图3.PNG"><img src="/img/screenshots/0.1.0/截图3.PNG" width="250"></a>
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
    </script>
  </body>
</html>
