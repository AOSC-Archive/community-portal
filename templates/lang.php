<?php
if (!defined('IN_FRAME')) exit();

$langs_allow = array('en', 'zh-cn', 'zh-tw');
define('ALTERNATE_LANGUAGE', 'zh-cn');
define('LANGUAGE_IN_URL_ARG', true);
define('LANGUAGE_IN_COOKIE', true);
define('LANGUAGE_IN_REQUEST', true);

if (LANGUAGE_IN_URL_ARG && !isset ($lang) && isset ($_GET['lang'])) {
  $lang_tester = htmlspecialchars($_GET['lang'],ENT_QUOTES);
  if (in_array($lang_tester, $langs_allow)) {
    $lang = $lang_tester;
    setcookie('lang', $lang, time()+3600*24*30, '/', 'anthonos.org');
  }
}
if (LANGUAGE_IN_COOKIE && !isset ($lang) && isset ($_COOKIE['lang'])) {
  if (in_array($_COOKIE['lang'], $langs_allow)) $lang = $_COOKIE['lang'];
}
function sortByWeight($a, $b) {
  if (strpos ($a,'q=') == false) $_a_w = 1;
  else $_a_w = floatval(substr($a, strpos($a, 'q=')+3));
  if (strpos ($b,'q=') == false)$_b_w = 1;
  else $_b_w = floatval(substr($b, strpos($b, 'q=')+3));
  if ($_a_w == $_b_w) return 0;
  return ($_a_w > $_b_w) ? -1 : 1;
}
if (LANGUAGE_IN_REQUEST && !isset ($lang) && isset ($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
  $lang_http = explode(",",strtolower($_SERVER['HTTP_ACCEPT_LANGUAGE']));
  usort($lang_http, 'sortByWeight');
  foreach($lang_http as $lang_i) {
    $lang_tester = '';
    if (strpos ($lang_i,';') == false) $lang_tester = trim($lang_i);
    else $lang_tester = trim(substr($lang_i, 0, strpos($lang_i, ';')));
    if (in_array($lang_tester, $langs_allow)) {
      $lang = $lang_tester;
      break;
    }
  }
}

if (!isset ($lang)) $lang = ALTERNATE_LANGUAGE;
$lang = strtolower($lang);
?>
