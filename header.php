<?php
define('IN_FRAME', true);

$langues = array(
  'en' => array(
    'title' => 'Mirror Status',
    'AOSC' => 'AOSC',
    'text' => '<p>This is the mirror status page. We recommend you to use a mirror that is close to you for better downloading. For more information, go to each mirror\'s home page.</p>
    <p><a href="/status/help.php">Mirror HOWTO</a></p>',
    'No' => 'No',
    'Yes' => 'Yes',
    'N/A' => 'N/A',
    'Name' => 'Mirror Name',
    'Address' => 'Mirror address',
    'LastUpd' => 'Last Update',
    'Latest' => 'Latest?',
    'date_error' => 'Error when converting date, contact',
    'mirror_admin' => 'Mirror admin',
    'main_name' => 'AOSC Main Server',
    'page_gen' => 'Page Generated at:',
    // Mirror Names, To be replaced by bash via sed
[MIRROR_NAME_EN]
  ),
  'zh-CN' => array(
    'title' => '镜像站',
    'AOSC' => '安同开源社区',
    'text' => '<p>这里是镜像源列表与状态页面。我们建议您使用一个离您更近的源，以便获得更好的下载速度。欲获取更多信息，请前往各源的主页。</p>
    <p><a href="/status/help.php">镜像源设置指南</a></p>',
    'No' => '否',
    'Yes' => '是',
    'N/A' => '不适用',
    'Name' => '源名称',
    'Address' => '源地址',
    'LastUpd' => '最近更新',
    'Latest' => '是否最新',
    'date_error' => '日期转换错误，请联系',
    'mirror_admin' => '该镜像站的管理员',
    'main_name' => '安同开源社区主服务器',
    'page_gen' => '页面生成于：',
    // 源名称，由 bash 脚本通过 sed 填实
[MIRROR_NAME_SC]
  ),
  'zh-TW' => array(
    'title' => '鏡像站',
    'AOSC' => '安同開源社區',
    'text' => '<p>這裡是鏡像源列表與狀態頁面。我們建議您使用一個離您更近的源，以便獲得更好的下載速度。欲獲取更多信息，請前往各源的主頁。 </p>
    <p><a href="/status/help.php">鏡像源設置指南</a></p>',
    'No' => '否',
    'Yes' => '是',
    'N/A' => '不適用',
    'Name' => '源名稱',
    'Address' => '源地址',
    'date_error' => '日期轉換錯誤，請聯繫',
    'mirror_admin' => '該鏡像站的管理員',
    'main_name' => '安同開源社區主伺服器',
    'page_gen' => '頁面生成於：',
    // 源名稱，由 bash 腳本通過 sed 填實
[MIRROR_NAME_TC]
  ),
);
include '../modules/langue.php';?>

<!DOCTYPE html>
<html lang="<?php echo $langue;?>">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" /> <!-- DOGE! -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="Jeff Bai <jeffbaichina@gmail.com>, YeXiaoxing <ye@xiaoxing.us>" />
    <link rel="shortcut icon" href="/img/favicon.png" />

    <title><?php echo $langues[$langue]['title'] "-" $langues[$langue]['AOSC'];?></title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.css" rel="stylesheet" />
    <link href="/css/carousel.css" rel="stylesheet" />
    <link href="/css/common.css" rel="stylesheet" />
  </head>

  <body>
  <!-- Navbar -->
   <?php include '../templates/navbar.php';?>
   
  <div class="container" style=" margin-top: 50px; ">
    <div class="well">
      <h3><?php echo $langues[$langue]['title'] ?></h3>
      <?php echo $langues[$langue]['text'] ?>
    </div>
    <table class="table table-hover">
      <thead>
        <tr>
          <th><?php echo $langues[$langue]['Name'] ?></th>
          <th><?php echo $langues[$langue]['Address'] ?></th>
          <th><?php echo $langues[$langue]['LastUpd'] ?></th>
          <th><?php echo $langues[$langue]['Latest'] ?></th>
        </tr>
      </thead>
      <tbody> <!-- END OF HEADER, TO BE FILLED BY BASH REPORTS -->
      
