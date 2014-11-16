<?php
if (!defined('IN_FRAME')) exit();
$langs_n = array(
  'en' => array(
    'foo'=>'bar',
  ),
  'zh-cn' => array(
    'foo'=>'bar',
  ),
  'zh-tw' => array(
    'foo'=>'bar',
  ),
);
?>
<div class="blog-masthead">
  <div class="container">
    <nav class="blog-nav">
      <a class="blog-nav-item <?php if($_SERVER["SCRIPT_NAME"]=="/index.php") echo "active"; ?>" href="/">Portal</a>
      <a class="blog-nav-item <?php if($_SERVER["SCRIPT_NAME"]=="/projects/index.php") echo "active"; ?>" href="/projects">Projects</a>
      <a class="blog-nav-item <?php if($_SERVER["SCRIPT_NAME"]=="/about/index.php") echo "active"; ?>" href="/about">About</a>
      <a class="blog-nav-item" href="http://l10n.anthonos.org">Localization</a>
      <a class="blog-nav-item" href="http://wiki-dev.anthonos.org">Documentation</a>
    </nav>
  </div>
</div>
