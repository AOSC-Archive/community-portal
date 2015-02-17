<?php if (!defined('IN_FRAME')) exit();
    include $_SERVER['DOCUMENT_ROOT'].'/templates/navgen.php';
    pushNavBar();
    addNavItem('/index.php', '/', $lang, array('en' => 'Portal', 'zh-cn' => '门户', 'zh-tw' => '門戶',), 'major');
    addNavItem('/projects/index.php', '/projects/', $lang, array('en' => 'Projects', 'zh-cn' => '项目', 'zh-tw' => '項目',));
    addNavItem('', 'http://l10n.anthonos.org/', $lang, array('en' => 'Localization', 'zh-cn' => '本地化', 'zh-tw' => '本地化',));
    addNavItem('', 'https://techbase.anthonos.org/', $lang, array('en' => 'TechBase', 'zh-cn' => '知识库', 'zh-tw' => '知識庫',));
    addNavItem('/about/index.php', '/about/', $lang, array('en' => 'About', 'zh-cn' => '关于', 'zh-tw' => '關於',));
    popNavBar();
?>