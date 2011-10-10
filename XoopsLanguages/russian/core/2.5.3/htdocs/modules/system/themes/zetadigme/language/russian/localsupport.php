<?php
// $Id: localsupport.php 3860 2009-11-09 21:35:53Z kris_fr $

$menu = array();

// sample for English  support
/*
$menu[] = array(
    'link'      => 'http://www.xoops.org',
    'title'     => 'XOOPS',
    'absolute'  => 1,
    'icon'      => XOOPS_URL . '/modules/system/class/gui/paradigme/icons/xoops.png'
);

$menu[] = array(
    'link'      => 'http://www.xoops.org',
    'title'     => 'XOOPS',
    'absolute'  => 1,
    'icon'      => XOOPS_URL . '/modules/system/class/gui/paradigme/icons/xoops.png'
);

$menu[] = array(
    'link'      => 'http://www.xoops.org/modules/library/',
    'title'     => _AD_XOOPSTHEMES,
    'absolute'  => 1,
    'icon'      => XOOPS_URL . '/modules/system/class/gui/paradigme/icons/tweb.png'
);

$menu[] = array(
    'link'      => 'http://www.xoops.org/modules/modules-search/',
    'title'     => _AD_XOOPSMODULES,
    'absolute'  => 1,
    'icon'      => XOOPS_URL . '/modules/system/class/gui/paradigme/icons/xoops.png'
);
*/

$menu[] = array(
    'link'      => 'http://www.xoops.org',
    'title'     => 'Офсайт XOOPS',
    'absolute'  => 1,
    'icon'      => XOOPS_ADMINTHEME_URL . '/zetadigme/img/xoops.png'
);

$menu[] = array(
    'link'      => 'http://xoops2.ru/',
    'title'     => 'Русскоязычная техподдержка',
    'absolute'  => 1,
    'icon'      => XOOPS_ADMINTHEME_URL . '/zetadigme/img/xoops.png'
);

$menu[] = array(
    'link'      => 'http://xoops.ws/',
    'title'     => 'Приднестровская техподдержка',
    'absolute'  => 1,
    'icon'      => XOOPS_ADMINTHEME_URL . '/zetadigme/img/xoops.ws.png'
);

return $menu;
?>