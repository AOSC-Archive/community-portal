<!DOCTYPE html>
<html lang=zh-CN>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no">
    <meta name="description" content="Homepage of LinkC">
    <meta name="author" content="SternW Zhang<SternWZhang@outlook.com>">
    <link rel="icon" href="favicon.ico">

    <title>LinkC - Home</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/blog.css" rel="stylesheet">
  </head>

  <body>

    <?php include '../templates/ast/navbar.php';?>

    <div class="container">

      <div class="blog-header">
      <img src="/img/linkc.png" height="150" width="150" align=right hspace="40" >
        <h1 class="blog-title WQYMicroHei">LinkC</h1>
        <p class="lead blog-description WQYMicroHei">A simple open sources IM with POSIX socket<br\>一个简单的，纯粹的，即时通讯软件[遵循POSIX规范]</p>
      </div>

      <div class="row">

        <div class="col-sm-8 blog-main WQYMicroHei">

          <div class="blog-post">
            <h2 class="blog-post-title WQYMicroHei">开发分支[Version 0.4] 进度</h2>
            <p class="blog-post-meta WQYMicroHei">News [2014-07-26]<p>
                现在开发分支为LinkC 第四次重构版本 [With LinkC Network Protocol Version 2]
            <ul>
              <li> 内网和非对等NAT设备的连接服务支持完毕;</li>
              <li> 对协议的几个小BUG进行了修复工作，目前看来，协议可用度不错;</li>
              <li> Linux客户端同时支持GUI Mod 和NonUi Mode[NonUi的P2P模块尚未添加];</li>
              <li> LinkC 服务端以守护进程模式启动相关函数完成(thanks to Wiiiky Li);</li>
              <li> ...</li>
            </ul>
            目前LinkC没有任何Release版本放出，但是开发分支位于
            <a href="https://github.com/AOSC-Dev/LinkC">Git Repository</a>.
            获取LinkC开发分支: <br />
              <p><pre>git clone https://github.com/AOSC-Dev/LinkC</pre>
            获取LinkC主分支: <br />
              <p><pre>git clone https://github.com/TheNextProject/LinkC</pre>
          </div>

          <div class="blog-post">
            <h2 class="blog-post-title WQYMicroHei">开发分支[Version 0.4] 计划</h2>
            <p class="blog-post-meta WQYMicroHei">News [2014-07-26]<p>
            LinkC 开发虽然之前有点搁置，不过现在仍然在开发中。计划如下:
            <ul>
              <li> 完善聊天窗口的配置(如消息显示，消息历史滚动等);</li>
              <li> 跟进NonUi版本的进度;</li>
              <li> 好友上线信息推送准备加入;</li>
              <li> 更好看的UI界面;</li>
            </ul>
          </div>

          <div class="blog-post">
            <h2 class="blog-post-title WQYMicroHei">开发分支[Version 0.4] 有待解决的问题</h2>
            如下问题(BUG)还没能够解决:
            <ul>
              <li> 服务端对于DDoS等攻击的防护;</li>
              <li> 消息转发机制;</li>
              <li> 客户端未知名数据包长度超长(莫名其妙，我怎么测试都没有这个问题) :-( ;</li>
              <li> ...</li>
            </ul>
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
