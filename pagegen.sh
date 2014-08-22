#!/bin/bash
# USAGE: .utils/pagegen.sh FILE WORD_ARRAY [ LANGUAGES ]
# ENVIRONMENT VARIABLES `ARRAY' and `LANGUAGES' overrides the settings.

ARRAY="${ARRAY:-$2}"
LANGUAGES="${3:-en zh-CN zh-TW}"

exec >$1 || exit 1

echo "<?php
define('IN_FRAME', true);"
echo
echo '$langues = array('
for i in $LANGUAGES; do
  echo "  '$i' => array ("
  for j in title page_description $ARRAY; do
    echo "    '$j' => ' ',"
  done
  echo '  ),'
done
echo ');'
echo
echo "include 'modules/langue.php' ?>"
echo
cat << _EOF
<!DOCTYPE html>
<html lang=<?=\$langue ?>>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?=\$langues[\$langue]['page-description'] ?>">
    <meta name="author" content="Jeff Bai <jeffbaichina@gmail.com>, Lion Yang <ionxlion@foxmail.com>, YeXiaoxing <ye@xiaoxing.us>">
    <link rel="shortcut icon" href="/img/favicon.png">

    <title><?=\$langues[\$langue]['title'] ?></title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/carousel.css" rel="stylesheet">
    <link href="/css/common.css" rel="stylesheet">
  </head>
  <body>
    <?php include 'templates/navbar.php';?>
    
    <!-- Bootstrap core JavaScript
    ==================================================
    Placed at the end of the document so the pages load faster -->
    <script src="https://lib.sinaapp.com/js/jquery/2.0.3/jquery-2.0.3.min.js" />
    <script src="/js/bootstrap.min.js" />
  </body>
</html>
_EOF
