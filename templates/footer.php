<?php
if (!defined('IN_FRAME')) exit();
$langs_f = array(
  'en' => array(
    'main'=>'Main Sites',
  ),
  'zh-cn' => array(
    'main'=>'主要站点',
  ),
  'zh-tw' => array(
    'main'=>'Main Sites',
  ),
);
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/lang.php';
?>
<div class="blog-footer">
  <div class="container">
    <div class="row">
      <div class="col-sm-10 col-sm-offset-1 footer-block">
        <div class="col-sm-4">
          <h4 align="left"><?php echo $langs_f[$lang]['main'];?></h4>
          <p align="left"><a href="/">Community Portal</a></p>
          <p align="left"><a href="/aosc-os/">AOSC OS</a></p>
          <p align="left"><a href="/ast/">Anthon Starter</a></p>
          <p align="left"><a href="https://github.com/AOSC-Dev/" rel="external nofollow">GitHub Repository</a></p>
        </div>
        <div class="col-sm-4">
          <h4 align="left">Community Sites</h4>
          <p align="left"><a href="https://bugs.anthonos.org/" rel="external nofollow">Bug Tracker</a></p>
          <p align="left"><a href="http://wiki-dev.anthonos.org/" rel="external nofollow">TechBase</a></p>
          <p align="left"><a href="http://l10n.anthonos.org/" rel="external nofollow">Localization</a></p>
        </div>
        <div class="col-sm-4 ">
          <h4 align="left">Contact Us</h4>
          <p align="left"><a href="http://weibo.com/anthondev/" rel="external nofollow">Sina Weibo</a></p>
          <p align="left"><a href="irc://irc.freenode.org/#anthon" rel="external nofollow">IRC Channel</a></p>
          <p align="left"><a href="http://shang.qq.com/wpa/qunwpa?idkey=ab7dd682e389d0432bf71e7446ea2ecb923499c49b146e4c25717ecbb15ffb03" rel="external nofollow">QQ Group</a></p>
          <p align="left"><a href="mailto:aosc@members.fsf.org">E-Mail</a></p>
        </div>
      </div>
      <div class="col-sm-10 col-sm-offset-1">
        <div class="col-sm-1 pull-left">
          <img src="/img/aosc.png" class="img-responsive" width=50px height=50px>
        </div>
        <div class="col-sm-11">
          <h4 align="left">Anthon Open Source Community</h4>
          <p align="left">Copyleft 2011 - 2014, for every member of the community.</p>
        </div>
        <div class="col-sm-9" style="margin-top:20px;">
          <p align="left">
          Powered by <a href="http://getbootstrap.com/" rel="external nofollow">Bootstrap 3.x</a>. Page designed by Lion Yang, Duminhui and Jeff Bai.
          </p>
          <p align="left">
          <a href="http://www.miibeian.gov.cn/">粤ICP备14040623号</a>
          </p>
          <p align="left">
          Fonts by <a href="http://glyphicons.com/" rel="external nofollow">Glyphicons</a> and <a href="http://sourceforge.net/projects/sourcesans.adobe/" rel="external nofollow">Adobe Source Sans Pro</a>.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
