<?php

/**
* $Id: blocks.php,v 1.1 2008/04/15 11:18:01 kurak_bu Exp $
* Module: SmartPartner
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/
// including the common language file
$fileName = XOOPS_ROOT_PATH . '/modules/smartpartner/language/' . $GLOBALS['xoopsConfig']['language'] . '/common.php';
if (file_exists($fileName)) {
	include_once $fileName;
} else {
	include_once XOOPS_ROOT_PATH . '/modules/smartpartner/language/english/common.php';
}
define('_MB_SPARTNER_PARTNERS_PSPACE', 'Put spaces between partners?');
define('_MB_SPARTNER_BRAND', 'Randomize partners in blocks?');
define('_MB_SPARTNER_BLIMIT', 'Limit blocks to xx entries: (0 = no limit)');
define('_MB_SPARTNER_BSHOW', 'In blocks show:');
define('_MB_SPARTNER_BORDER', 'Order block content by:');
define('_MB_SPARTNER_ID', 'ID');
define('_MB_SPARTNER_HITS', 'Hits');
define('_MB_SPARTNER_TITLE', 'Title');
define('_MB_SPARTNER_WEIGHT', 'Weight');
define('_MB_SPARTNER_ASC', 'Ascending');
define('_MB_SPARTNER_DESC', 'Descending');
define('_MB_SPARTNER_IMAGES', 'Images');
define('_MB_SPARTNER_TEXT', 'Text Links');
define('_MB_SPARTNER_BOTH', 'Both');
define('_MB_SPARTNER_FADE', 'Fade Image');
define('_MB_SPARTNER_SEE_ALL', "Display 'See all partners...'");
define('_MB_SPARTNER_LANG_SEE_ALL', "See all partners...");
define('_MB_SMARTPARTNER_CATEGORY', "Category");
define('_MB_SPARTNER_BWIDTH', 'Block width');
define('_MB_SPARTNER_BHEIGHT', 'Block height');
define('_MB_SPARTNER_BSPEED', 'Speed (1 to 10; ten = fast)');
define('_MB_SPARTNER_BSPACE', 'Space beetween each slide');
define('_MB_SPARTNER_BBG', 'Background color (without #)');
define('_MB_SPARTNER_SORT', 'Sort by');
define('_MB_SPARTNER_ORDER', 'Order by');
define('_MB_SPARTNER_SHOW_SUBS', 'Display subcats');
define('_MB_SPARTNER_YES', 'Yes');
define('_MB_SPARTNER_NO', 'No');
define('_MB_SPARTNER_LANG_SEE_ALL_OFFERS', "See all offers...");
define('_MB_SPARTNER_SHOW_CURR_SUBS', 'Display subcats of current category');
?>