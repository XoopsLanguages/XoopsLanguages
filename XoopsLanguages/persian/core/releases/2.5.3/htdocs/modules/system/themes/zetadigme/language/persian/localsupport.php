<?php
// $Id$

$menu = array();


$menu[] = array(
    'link'      => 'http://www.xoops.org',
    'title'     => 'زوپس انگلیسی',
    'absolute'  => 1,
    'icon'      => XOOPS_URL . '/modules/system/class/gui/oxygen/images/xoops.png'
);

$menu[] = array(
    'link'      => 'http://www.irxoops.org',
    'title'     => 'زوپس فارسی',
    'absolute'  => 1,
    'icon'      => XOOPS_URL . '/modules/system/class/gui/oxygen/images/xoops.png'
);

$menu[] = array(
    'link'      => 'http://www.irxoops.org/modules/TDMDownloads/index.php',
    'title'     => _AD_XOOPSMODULES,
    'absolute'  => 1,
    'icon'      => XOOPS_URL . '/modules/system/class/gui/oxygen/images/xoops.png'
);


return $menu;
?>