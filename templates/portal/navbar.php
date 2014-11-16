<?php
if (!defined('IN_FRAME')) exit();
$langs_n = array(
  'en' => array(
    'portal'=>'Portal',
    'projects'=>'Projects',
    'about'=>'About',
    'localization'=>'Localization',
    'docs'=>'TechBase',
  ),
  'zh-cn' => array(
    'portal'=>'门户',
    'projects'=>'项目',
    'about'=>'关于',
    'localization'=>'本地化',
    'docs'=>'知识库',
  ),
  'zh-tw' => array(
    'portal'=>'門戶',
    'projects'=>'項目',
    'about'=>'關於',
    'localization'=>'本地化',
    'docs'=>'知識庫',
  ),
);
?>
<div class="blog-masthead">
  <div class="container">
    <nav class="blog-nav">
      <a class="blog-nav-item <?php if($_SERVER["SCRIPT_NAME"]=="/index.php") echo "active"; ?>" href="/"><?php echo $langs_n[$lang]['portal'];?></a>
      <a class="blog-nav-item <?php if($_SERVER["SCRIPT_NAME"]=="/projects/index.php") echo "active"; ?>" href="/projects"><?php echo $langs_n[$lang]['projects'];?></a>
      <a class="blog-nav-item" href="http://l10n.anthonos.org"><?php echo $langs_n[$lang]['localization'];?></a>
      <a class="blog-nav-item" href="http://wiki-dev.anthonos.org"><?php echo $langs_n[$lang]['docs'];?></a>
      <a class="blog-nav-item <?php if($_SERVER["SCRIPT_NAME"]=="/about/index.php") echo "active"; ?>" href="/about"><?php echo $langs_n[$lang]['about'];?></a>
    </nav>
  </div>
</div>
