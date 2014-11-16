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
      <a class="blog-nav-item <?php if($_SERVER["SCRIPT_NAME"]=="/ast/index.php") echo "active"; ?>" href="/ast/">News</a>
      <a class="blog-nav-item <?php if($_SERVER["SCRIPT_NAME"]=="/ast/summary/index.php") echo "active"; ?>" href="/ast/summary/">Summary</a>
      <a class="blog-nav-item <?php if($_SERVER["SCRIPT_NAME"]=="/ast/screenshot/index.php") echo "active"; ?>" href="/ast/screenshot/">Screenshot</a>
      <a class="blog-nav-item <?php if($_SERVER["SCRIPT_NAME"]=="/ast/about/index.php") echo "active"; ?>" href="/ast/about/">About</a>
    </nav>
  </div>
</div>
