<?php
define('IN_FRAME', true);

$langues = array(
  'en' => array (
    'title' => 'Mirror::HowTo - AOSC',
    'help' => 'Mirror HOWTOs',
    'howto_change' => 'Change Mirrors',
    'howto_change_des' => 'Here is a sample of <code>/etc/apt/sources.list</code>. Edit it with your favourite text editor. Replace <code>{baseurl}</code> with any server on the status page or <a href="https://mb.anthonos.org"mb.anthonos.org</a>.',
    'howto_mirror' => 'Provide Mirror Service',
    'howto_mirror_des' => '<p>You should use rsync for mirroring: <code>rsync://repo.anthonos.org::anthon</code>.
	And of course it would be better if you use one of our <a href=/status>mirrors</a>. The USTC and The yun-idc mirror provides rsync. You can also try the rest<s>, or even use FTP (Just Kidding)</s>.</p>
	<p>You need around 100GB of space for mirroring the whole site. Refer to this <code>du -sh</code> result when you choose exclusions.</p>',
	'howto_mirror_dush' => '<p>If you decide NOT to mirror a folder, please maka a redirection to the nearest mirror for you so users from the MirrorBrain server is not affected.</p>' ,
  ),
  'zh-CN' => array (
    'title' => '镜像源指南 - 安同开源社区',
    'help' => '镜像源指南',
    'howto_change' => '更换镜像源',
    'howto_change_des' => '以下是一份源文件 <code>/etc/apt/sources.list</code> 的样板，请将 <code>{baseurl}</code> 替换为源状态中所显示的源地址或 <a href="https://mb.anthonos.org"mb.anthonos.org</a>。',
    'howto_mirror' => '提供镜像源',
    'howto_mirror_des' => '<p>您应该使用 rsync 进行镜像：<code>rsync://repo.anthonos.org::anthon</code>.
	若您使用我们的<a href=/status>镜像</a>，那么这样减轻服务器压力也是很好的。USTC 和 yun-idc 的镜像提供了 rsync 连接。您也可以试试别的镜像<s>，甚至你用 FTP 我们也不一定会管你</s>。</p>
	<p>若您要做整站镜像，那大概需要 100GB 空间。请参考以下 <code>du -sh</code> 的命令输出以便做决定。</p>',
    'howto_mirror_dush' => '<p>若您决定<strong>不</strong>镜像某些文件/文件夹，请至少确保它被 HTTP 重定向到离您最近的镜像站以防止 MirrorBrain 服务器在自动选择镜像时给用户带来问题。</p>' 
  ), /* TODO
  'zh-TW' => array (
    'title' => ' ',
    'help' => ' ',
    'howto_change' => ' ',
    'howto_change_des' => ' ',
    'howto_mirror' => ' ',
    'howto_mirror_des' => ' ',
    'howto_mirror_dush' => ' ', */
  ),
);

include 'modules/langue.php' ?>

<!DOCTYPE html>
<html lang=<?=$langue ?>>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Mirror HOWTOs">
    <meta name="author" content="Jeff Bai <jeffbaichina@gmail.com>, Lion Yang <ionxlion@foxmail.com>, YeXiaoxing <ye@xiaoxing.us>">
    <link rel="shortcut icon" href="/img/favicon.png">

    <title><?=$langues[$langue]['title'] ?></title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.css" rel="stylesheet">
    <!-- <link href="/css/carousel.css" rel="stylesheet"> -->
    <link href="/css/common.css" rel="stylesheet">
	
	<!-- gist data, for offline githubbing :) -->
	<style type="text/css">
	.gist{color:#000}.gist .render-container .render-viewer-error,.gist .render-container .render-viewer-fatal,.gist .render-container .octospinner{display:none}.gist .gist-render iframe{width:100%}.gist pre{font:inherit;line-height:inherit;white-space:pre}.gist .gist-file{border:1px solid #ddd;border-bottom:1px solid #ccc;border-radius:3px;font-family:Consolas, "Liberation Mono", Courier, monospace;margin-bottom:1em}.gist .gist-file.gist-render{border:none}.gist .gist-file .gist-meta{font:12px "Helvetica Neue", Helvetica, arial, freesans, clean, sans-serif;text-shadow:1px 1px rgba(255,255,255,0.8);overflow:hidden;color:#999;padding:10px;background-color:#e8e8e8;background-image:-webkit-gradient(linear, left top, left bottom, from(#fafafa), to(#e8e8e8));background-image:-webkit-linear-gradient(#fafafa, #e8e8e8);background-image:linear-gradient(#fafafa, #e8e8e8);background-repeat:repeat-x}.gist .gist-file .gist-meta a{font-weight:bold;color:#666;text-decoration:none}.gist .gist-file .gist-data{overflow:auto;word-wrap:normal;background-color:#f8f8ff;border-bottom:1px solid #ddd;font-size:100%}.gist .gist-file.scroll .gist-data{position:absolute;top:0px;right:0px;bottom:30px;left:0px;overflow:scroll}.gist .gist-file.scroll .gist-meta{position:absolute;bottom:0px;right:0px;left:0px}.gist .gist-file .gist-data .line-data{padding:.5em !important}.gist .gist-file .gist-data .line-pre{font-family:Consolas, "Liberation Mono", Courier, monospace;background:transparent !important;border:none !important;margin:0 !important;padding:0 !important}.gist .gist-file .gist-data .gist-highlight{background:transparent !important}.gist .gist-file .gist-data .line-numbers{background-color:#ececec;color:#aaa;border-right:1px solid #ddd;text-align:right;padding:.5em}.gist .gist-file .gist-data .line-numbers .line-number{clear:right;display:block}.gist-syntax{background:#ffffff}.gist-syntax .c{color:#999988;font-style:italic}.gist-syntax .err{color:#a61717;background-color:#e3d2d2}.gist-syntax .k{color:#000000;font-weight:bold}.gist-syntax .o{color:#000000;font-weight:bold}.gist-syntax .cm{color:#999988;font-style:italic}.gist-syntax .cp{color:#999999;font-weight:bold}.gist-syntax .c1{color:#999988;font-style:italic}.gist-syntax .cs{color:#999999;font-weight:bold;font-style:italic}.gist-syntax .gd{color:#000000;background-color:#fdd}.gist-syntax .gd .x{color:#000000;background-color:#faa}.gist-syntax .ge{color:#000000;font-style:italic}.gist-syntax .gr{color:#a00}.gist-syntax .gh{color:#999}.gist-syntax .gi{color:#000000;background-color:#dfd}.gist-syntax .gi .x{color:#000000;background-color:#afa}.gist-syntax .go{color:#888}.gist-syntax .gp{color:#555}.gist-syntax .gs{font-weight:bold}.gist-syntax .gu{color:#aaa}.gist-syntax .gt{color:#a00}.gist-syntax .kc{color:#000000;font-weight:bold}.gist-syntax .kd{color:#000000;font-weight:bold}.gist-syntax .kp{color:#000000;font-weight:bold}.gist-syntax .kr{color:#000000;font-weight:bold}.gist-syntax .kt{color:#445588;font-weight:bold}.gist-syntax .m{color:#099}.gist-syntax .s{color:#d14}.gist-syntax .na{color:teal}.gist-syntax .nb{color:#0086b3}.gist-syntax .nc{color:#445588;font-weight:bold}.gist-syntax .no{color:teal}.gist-syntax .ni{color:purple}.gist-syntax .ne{color:#990000;font-weight:bold}.gist-syntax .nf{color:#990000;font-weight:bold}.gist-syntax .nn{color:#555}.gist-syntax .nt{color:navy}.gist-syntax .nv{color:teal}.gist-syntax .ow{color:#000000;font-weight:bold}.gist-syntax .w{color:#bbb}.gist-syntax .mf{color:#099}.gist-syntax .mh{color:#099}.gist-syntax .mi{color:#099}.gist-syntax .mo{color:#099}.gist-syntax .sb{color:#d14}.gist-syntax .sc{color:#d14}.gist-syntax .sd{color:#d14}.gist-syntax .s2{color:#d14}.gist-syntax .se{color:#d14}.gist-syntax .sh{color:#d14}.gist-syntax .si{color:#d14}.gist-syntax .sx{color:#d14}.gist-syntax .sr{color:#009926}.gist-syntax .s1{color:#d14}.gist-syntax .ss{color:#990073}.gist-syntax .bp{color:#999}.gist-syntax .vc{color:teal}.gist-syntax .vg{color:teal}.gist-syntax .vi{color:teal}.gist-syntax .il{color:#099}
    </style>
  </head>
  <body>
    <?php include 'templates/navbar.php';?>
    <div class="container" style=" margin-top: 50px; ">
  <h1><?=$langues[$langue]['help'] ?></h1>
  <div class="panel  panel-info">
    <div class="panel-heading">
      <h3 class="panel-title"><?=$langues[$langue]['howto_change'] ?></h3>
    </div>
    <div class="panel-body">
      <p><?=$langues[$langue]['howto_change_des'] ?></p>
      <!-- <script src="https://gist.github.com/TheNextProject/9677019.js"></script> -->
      <!-- GIST START -->
      <div id="gist9677019" class="gist">
      <div class="gist-file">
      <div class="gist-data gist-syntax">
      <div class="file-data">
      <table cellpadding="0" cellspacing="0" class="lines highlight">
      <tr>
      <td class="line-numbers">
      <span class="line-number" id="file-sources-L1" rel="file-sources-L1">1</span>
      <span class="line-number" id="file-sources-L2" rel="file-sources-L2">2</span>
      <span class="line-number" id="file-sources-L3" rel="file-sources-L3">3</span>
      <span class="line-number" id="file-sources-L4" rel="file-sources-L4">4</span>
      </td>
      <td class="line-data">
      <pre class="line-pre"><div class="line" id="file-sources-LC1">deb http://mirror.anthonos.org/os2-repo/os2 / # 主源</div><div class="line" id="file-sources-LC2">deb http://mirror.anthonos.org/os2-repo/os2-anthonos / # AnthonOS 更新源</div><div class="line" id="file-sources-LC3">deb http://mirror.anthonos.org/os2-repo/os2-apps / # 一般应用更新源</div><div class="line" id="file-sources-LC4">deb http://mirror.anthonos.org/os2-repo/os2-centralpoint / # CentralPoint 服务器软件源</div></pre>
      </td>
      </tr>
      </table>
      </div>
      </div>
      <div class="gist-meta">
      <a href="https://gist.github.com/TheNextProject/9677019/raw/sources" style="float:right">Original Text</a>
      <a href="https://gist.github.com/TheNextProject/9677019#file-sources">sources</a> as a <a href="https://gist.github.com">gist</a>.
      </div>
      </div>
      </div>
      </div>
      <!-- GIST END -->
    </div>
    <div class="panel-heading">
      <h3 class="panel-title"><?=$langues[$langue]['howto_mirror'] ?></h3>
    </div>
        <div class="panel-body">
        <?=$langues[$langue]['howto_mirror_des'] ?>
		    <!-- GIST START -->
        <div id="gist14045057" class="gist">
        <div class="gist-file">
        <div class="gist-data gist-syntax">
        <div class="file-data">
        <table cellpadding="0" cellspacing="0" class="lines highlight">
        <tr>
          <td class="line-numbers">
            <span class="line-number" id="file-aosc_mirror-L1" rel="file-aosc_mirror-L1">1</span>
            <span class="line-number" id="file-aosc_mirror-L2" rel="file-aosc_mirror-L2">2</span>
            <span class="line-number" id="file-aosc_mirror-L3" rel="file-aosc_mirror-L3">3</span>
            <span class="line-number" id="file-aosc_mirror-L4" rel="file-aosc_mirror-L4">4</span>
            <span class="line-number" id="file-aosc_mirror-L5" rel="file-aosc_mirror-L5">5</span>
            <span class="line-number" id="file-aosc_mirror-L6" rel="file-aosc_mirror-L6">6</span>
            <span class="line-number" id="file-aosc_mirror-L7" rel="file-aosc_mirror-L7">7</span>
            <span class="line-number" id="file-aosc_mirror-L8" rel="file-aosc_mirror-L8">8</span>
            <span class="line-number" id="file-aosc_mirror-L9" rel="file-aosc_mirror-L9">9</span>
            <span class="line-number" id="file-aosc_mirror-L10" rel="file-aosc_mirror-L10">10</span>
            <span class="line-number" id="file-aosc_mirror-L11" rel="file-aosc_mirror-L11">11</span>
            <span class="line-number" id="file-aosc_mirror-L12" rel="file-aosc_mirror-L12">12</span>
            <span class="line-number" id="file-aosc_mirror-L13" rel="file-aosc_mirror-L13">13</span>
            <span class="line-number" id="file-aosc_mirror-L14" rel="file-aosc_mirror-L14">14</span>
            <span class="line-number" id="file-aosc_mirror-L15" rel="file-aosc_mirror-L15">15</span>
            <span class="line-number" id="file-aosc_mirror-L16" rel="file-aosc_mirror-L16">16</span>
            <span class="line-number" id="file-aosc_mirror-L17" rel="file-aosc_mirror-L17">17</span>
            <span class="line-number" id="file-aosc_mirror-L18" rel="file-aosc_mirror-L18">18</span>
            <span class="line-number" id="file-aosc_mirror-L19" rel="file-aosc_mirror-L19">19</span>
            <span class="line-number" id="file-aosc_mirror-L20" rel="file-aosc_mirror-L20">20</span>
            <span class="line-number" id="file-aosc_mirror-L21" rel="file-aosc_mirror-L21">21</span>
            <span class="line-number" id="file-aosc_mirror-L22" rel="file-aosc_mirror-L22">22</span>
            <span class="line-number" id="file-aosc_mirror-L23" rel="file-aosc_mirror-L23">23</span>
            <span class="line-number" id="file-aosc_mirror-L24" rel="file-aosc_mirror-L24">24</span>
            <span class="line-number" id="file-aosc_mirror-L25" rel="file-aosc_mirror-L25">25</span>
            <span class="line-number" id="file-aosc_mirror-L26" rel="file-aosc_mirror-L26">26</span>
            <span class="line-number" id="file-aosc_mirror-L27" rel="file-aosc_mirror-L27">27</span>
            <span class="line-number" id="file-aosc_mirror-L28" rel="file-aosc_mirror-L28">28</span>
            <span class="line-number" id="file-aosc_mirror-L29" rel="file-aosc_mirror-L29">29</span>
          </td>
          <td class="line-data">
            <pre class="line-pre"><div class="line" id="file-aosc_mirror-LC1">1.4M    ./aosc-documentation # Needless</div><div class="line" id="file-aosc_mirror-LC2">95M     ./google-binaries # Needless</div><div class="line" id="file-aosc_mirror-LC3">32K     ./icons # Needless</div><div class="line" id="file-aosc_mirror-LC4">32M     ./junde-studio # Needless</div><div class="line" id="file-aosc_mirror-LC5">4.0K    ./last_update # HIGHLY IMPORTANT, USED TO MARK REPO UPDATE TIME</div><div class="line" id="file-aosc_mirror-LC6">7.4G    ./misc # NEEDLESS</div><div class="line" id="file-aosc_mirror-LC7">228M    ./openra # OPTIONAL, OpenRA Stuffs, good to mirror if you love OpenRA :)</div><div class="line" id="file-aosc_mirror-LC8">8.0K    ./os1-archive # NEEDLESS</div><div class="line" id="file-aosc_mirror-LC9">63G     ./os2-releases # See Below</div><div class="line" id="file-aosc_mirror-LC10">  \-- 34G     ./anthonos # BETA AND FINAL RELEASES, HIGHLY IMPORTANT</div><div class="line" id="file-aosc_mirror-LC11">                         # FINAL: 13G (including FINAL PATCH-1: 5.4G)</div><div class="line" id="file-aosc_mirror-LC12">  \-- 8.9G    ./aosc-os2-spins # UNOFFICAL SPINS COLLECTED FROM THE COMMUNITY</div><div class="line" id="file-aosc_mirror-LC13">     \-- 1.3G    ./awesome # AVERAGE</div><div class="line" id="file-aosc_mirror-LC14">     \-- 2.7G    ./mate # SUCKS</div><div class="line" id="file-aosc_mirror-LC15">     \-- 3.8G    ./xfce # SUCKS</div><div class="line" id="file-aosc_mirror-LC16">     \-- 1.3G    ./kde5-plasma-preview # AVERAGE</div><div class="line" id="file-aosc_mirror-LC17">  \-- 2.1G    ./centralpoint # BETA AND FINAL RELEASES</div><div class="line" id="file-aosc_mirror-LC18">  \-- 11G     ./icenowy # SELDOM USED FOR NON-DEVELOPERS</div><div class="line" id="file-aosc_mirror-LC19">  \-- 2.3G    ./oobp1 # SELDOM USED FOR NON-DEVELOPERS</div><div class="line" id="file-aosc_mirror-LC20">  \-- 4.4G    ./os2-final # OLD FINAL RELEASE</div><div class="line" id="file-aosc_mirror-LC21">  \-- 1.2G    ./os2-next # SELDOM USED FOR NON-DEVELOPERS</div><div class="line" id="file-aosc_mirror-LC22">9.6G    ./os2-repo # HIGHLY IMPORTANT DURING OS2 RELEASE CYCLE</div><div class="line" id="file-aosc_mirror-LC23">6.0G    ./os3-next # HIGHLY IMPORTANT DURING OS3 RELEASE/BUILDING CYCLE</div><div class="line" id="file-aosc_mirror-LC24">8.5G    ./os3-releases # OPTIONAL</div><div class="line" id="file-aosc_mirror-LC25">2.1M    ./projects # EXTRA FILES, OPTIONAL</div><div class="line" id="file-aosc_mirror-LC26">2.8G    ./to-our-friend # Needless</div><div class="line" id="file-aosc_mirror-LC27">238M    ./wallpapers # Needless</div><div class="line" id="file-aosc_mirror-LC28">-----------------</div><div class="line" id="file-aosc_mirror-LC29">TOTAL: 98G</div></pre>
          </td>
        </tr>
        </table>
        </div>
        <div class="gist-meta">
          <a href="https://gist.github.com/Arthur200000/fd484c6ecffd43375497/raw/AOSC_Mirror" style="float:right">Original Text</a>
          <a href="https://gist.github.com/Arthur200000/fd484c6ecffd43375497#file-aosc_mirror">AOSC_Mirror</a> as a <a href="https://gist.github.com">gist</a>.
        </div>
        </div>
        </div>
        </div>
        <!-- GIST END -->
        <?=$langues[$langue]['howto_mirror_dush'] ?>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript
    ==================================================
    Placed at the end of the document so the pages load faster -->
    <script src="https://lib.sinaapp.com/js/jquery/2.0.3/jquery-2.0.3.min.js" />
    <script src="/js/bootstrap.min.js" />
  </body>
</html>
