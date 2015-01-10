<?php
if (!defined('IN_FRAME')) exit();
function pushNavBar(){
  echo <<<EOD
  <div class="blog-masthead">
    <div class="container">
      <nav class="blog-nav">
EOD;
  return;
}
function addNavItem($phpPath, $href, $lang_selector, $langs_array, $level='normal'){
  echo '<a class="blog-nav-item';
  if($_SERVER["SCRIPT_NAME"]==$phpPath) echo ' active';
  if($level!='normal') echo ' '.$level;
  echo '" href="'.$href.'">';
  echo $langs_array[$lang_selector];
  echo '</a>';
  return;
}
function popNavBar(){
  echo  <<<EOD
      </nav>
      <!-- 我该写点什么好？-->
    </div>
  </div>
EOD;
  return;
}
?>