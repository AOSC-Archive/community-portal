#!/bin/bash
# USAGE: .utils/pagegen.sh FILE "WORD_ARRAY" [ LANGUAGES ]
# ENVIRONMENT VARIABLES `ARRAY' and `LANGUAGES' overrides the settings.

ARRAY="${ARRAY:-$2}"
LANGUAGES="${3:-en zh-CN zh-TW}"

exec >$1 || exit 1

echo "<?php
define('IN_FRAME', true);"
echo
echo '$langs = array('
for i in $LANGUAGES; do
  echo "  '$i' => array ("
  for j in title $ARRAY; do
    echo "    '$j' => ' ',"
  done
  # echo '/* COMMA FIXME */'
  echo '  ),'
done
# echo '/* COMMA FIXME */'
echo ');'
echo
echo "include 'templates/lang.php' ?>"
echo
cat << _EOF
<!DOCTYPE html>
<html lang=<?=\$langue ?>>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Get these right! -->
    <meta name="description" content="AOSC Page Description in All languages">
    <meta name="keyword" content="TODO"> 
    <meta name="author" content="Jeff Bai <jeffbaichina@gmail.com>, Lion Yang <ionxlion@foxmail.com>, YeXiaoxing <ye@xiaoxing.us>">
    <link rel="shortcut icon" href="/img/favicon.png">

    <title><?=\$langs[\$lang]['title'] ?></title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/carousel.css" rel="stylesheet">
    <link href="/css/common.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/blog.css" rel="stylesheet">
    <?php include 'templates/font.php'; ?></head>
  <body>
    <?php include 'templates/portal/navbar.php';?>
     
    <!-- Bootstrap core JavaScript
    ==================================================
    Placed at the end of the document so the pages load faster -->
    <script src="https://lib.sinaapp.com/js/jquery/2.0.3/jquery-2.0.3.min.js" />
    <script src="/js/bootstrap.min.js" />
  </body>
</html>
_EOF
echo "Completed blank page generation." >&2
