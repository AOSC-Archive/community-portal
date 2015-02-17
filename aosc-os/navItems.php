<?php if (!defined('IN_FRAME')) exit();
    include $_SERVER['DOCUMENT_ROOT'].'/templates/navgen.php';
    pushNavBar();
    addNavItem('/index.php', '/', $lang, array('en' => 'Portal', 'zh-cn' => '门户', 'zh-tw' => '門戶',), 'major');
    addNavItem('/aosc-os/index.php', '/aosc-os/', $lang, array('en' => 'AOSC_OS', 'zh-cn' => 'AOSC OS 主页', 'zh-tw' => 'AOSC OS 主頁',), 'minor');
    addNavItem('/aosc-os/downloads/index.php', '/aosc-os/downloads/', $lang, array('en' => 'Downloads', 'zh-cn' => '下载', 'zh-tw' => '下載',));
    addNavItem('/aosc-os/summary/index.php', '/aosc-os/summary/', $lang, array('en' => 'History', 'zh-cn' => '历史', 'zh-tw' => '歷史',));
    addNavItem('/aosc-os/screenshot/index.php', '/aosc-os/screenshot/', $lang, array('en' => 'Screenshot', 'zh-cn' => '截图', 'zh-tw' => '截圖',));
    addNavItem('/aosc-os/about/index.php', '/aosc-os/about/', $lang, array('en' => 'About', 'zh-cn' => '关于', 'zh-tw' => '關於',));
    popNavBar();
?>