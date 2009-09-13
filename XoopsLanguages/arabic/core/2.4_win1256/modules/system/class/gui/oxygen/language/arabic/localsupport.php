<?php
// $Id$

$menu = array();


$menu[] = array(
    'link'      => 'http://www.xoops.org',
    'title'     => 'XOOPS',
    'absolute'  => 1,
    'icon'      => XOOPS_URL . '/modules/system/class/gui/oxygen/images/xoops.png'
);

$menu[] = array(
    'link'      => 'http://www.arabxoops.com',
    'title'     => 'зях рФФхс',
    'absolute'  => 1,
    'icon'      => XOOPS_URL . '/modules/system/class/gui/oxygen/images/xoops.png'
);

$menu[] = array(
    'link'      => 'http://www.arabxoops.com/modules/themesviewer/',
    'title'     => _AD_XOOPSTHEMES,
    'absolute'  => 1,
    'icon'      => XOOPS_URL . '/modules/system/class/gui/oxygen/images/xoops.png'
);
$menu[] = array(
    'link'      => 'http://www.arabxoops.com/modules/mydownloads/',
    'title'     => _AD_XOOPSMODULES,
    'absolute'  => 1,
    'icon'      => XOOPS_URL . '/modules/system/class/gui/oxygen/images/xoops.png'
);

return $menu;
?>