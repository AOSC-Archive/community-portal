<?php
if (!defined('IN_FRAME')) exit();

echo '<style type="text/css">body,h1,.h1,h2,.h2,h3,.h3,h4,.h4,h5,.h5,h6,.h6{font-family:';
if (isset ($lang)){
  switch ($lang){
    case 'zh-cn':
    case 'zh-tw':
    case 'zh-hk':
    case 'zh':
      echo "source-sans, 'Segoe UI', 'Lantinghei SC', 'Lantinghei TC', 'Xin Gothic', 'Microsoft YaHei UI Light', 'Microsoft YaHei UI', 'Heiti SC', sans-serif;";
      break;
    
    case 'en-us':
    case 'en':
    default:
      echo 'source-sans, sans-serif;';
      break;
  }
}else{
  
}
echo '}</style>';
?>