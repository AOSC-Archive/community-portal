<?php
if (!defined('IN_FRAME')) exit();
$_pride_color=array('#dc1c29', '#fb8f34', '#fedc45', '#47c53d', '#3270d3', '#7625a8');
function pushNavBar(){
  global $_pride_navcnt;
  $_pride_navcnt=0;
  echo <<<EOD
  <div class="blog-masthead">
    <div class="container">
      <nav class="blog-nav">
EOD;
  return;
}
function addNavItem($phpPath, $href, $lang_selector, $langs_array, $level='normal'){
  global $_pride_color, $_pride_navcnt;
  echo '<a class="blog-nav-item';
  if($_SERVER["SCRIPT_NAME"]==$phpPath) echo ' active';
  if($level != 'normal') echo ' '.$level;
  echo '" href="'.$href.'"';
  /* _pride_do - OH NO PHP */
  if($level == 'normal') {
	$_pride_id='_nav_norm_'.$_pride_navcnt;
	echo ' id="'.$_pride_id.'" onmouseover="_pride_s(\''.$_pride_color[$_pride_navcnt].'\',\''.$_pride_id;
	echo '\')" onmouseout="_pride_u(\''.$_pride_id.'\')"';
	$_pride_navcnt++;
  }
  echo '>';
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
?><script>function _pride_s(color,id){ document.getElementById(id).style.backgroundColor=color; }
function _pride_u(id){ document.getElementById(id).style.backgroundColor=''; }
</script>