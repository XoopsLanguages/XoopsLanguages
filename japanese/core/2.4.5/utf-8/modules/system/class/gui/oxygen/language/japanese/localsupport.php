<?php
// $Id$

$menu = array();

// 

$menu[] = array(
    'link'      => 'http://www.xoops.org',
    'title'     => 'XOOPS',
    'absolute'  => 1,
    'icon'      => XOOPS_URL . '/modules/system/class/gui/oxygen/images/xoops.png'
);

$menu[] = array(
    'link'      => 'http://www.xoops.org/modules/library/',
    'title'     => _AD_XOOPSTHEMES,
    'absolute'  => 1,
    'icon'      => XOOPS_URL . '/modules/system/class/gui/oxygen/images/tweb.png'
);

$menu[] = array(
    'link'      => 'http://www.xoops.org/modules/modules-search/',
    'title'     => _AD_XOOPSMODULES,
    'absolute'  => 1,
    'icon'      => XOOPS_URL . '/modules/system/class/gui/oxygen/images/xoops.png'
);

$menu[] = array(
    'link'      => 'http://xoopscms.jp',
    'title'     => 'XOOPS ���{��T�|�[�g',
    'absolute'  => 1,
    'icon'      => XOOPS_URL . '/modules/system/class/gui/oxygen/images/xoops.png'
);


return $menu;
?>
