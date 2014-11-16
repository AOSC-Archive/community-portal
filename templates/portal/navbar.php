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
      <a class="blog-nav-item <?php if($_SERVER["SCRIPT_NAME"]=="/index.php") echo "active"; ?>" href="/"><?php echo $langs[$lang]['portal'];?></a>
      <a class="blog-nav-item <?php if($_SERVER["SCRIPT_NAME"]=="/projects/index.php") echo "active"; ?>" href="/projects"><?php echo $langs[$lang]['projects'];?></a>
      <a class="blog-nav-item" href="http://l10n.anthonos.org"><?php echo $langs[$lang]['localization'];?></a>
      <a class="blog-nav-item" href="http://wiki-dev.anthonos.org"><?php echo $langs[$lang]['docs'];?></a>
      <a class="blog-nav-item <?php if($_SERVER["SCRIPT_NAME"]=="/about/index.php") echo "active"; ?>" href="/about"><?php echo $langs[$lang]['about'];?></a>
    </nav>
  </div>
</div>
