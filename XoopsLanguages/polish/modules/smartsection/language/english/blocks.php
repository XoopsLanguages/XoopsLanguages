<?php

/**
* $Id: blocks.php,v 1.1 2008/04/06 19:51:48 kurak_bu Exp $
* Module: SmartSection
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/

/*global $xoopsConfig, $xoopsModule, $xoopsModuleConfig;
if (isset($xoopsModuleConfig) && isset($xoopsModule) && $xoopsModule->getVar('dirname') == 'smartsection') {
	$itemType = $xoopsModuleConfig['itemtype'];
} else {
	$hModule = &xoops_gethandler('module');
	$hModConfig = &xoops_gethandler('config');
	if ($smartsection_Module = &$hModule->getByDirname('smartsection')) {
		$module_id = $smartsection_Module->getVar('mid');
		$smartsection_Config = &$hModConfig->getConfigsByCat(0, $smartsection_Module->getVar('mid'));
		$itemType = $smartsection_Config['itemtype'];
	} else {
		$itemType = 'article';
	}
}

include_once(XOOPS_ROOT_PATH . "/modules/smartsection/language/" . $xoopsConfig['language'] . "/plugin/" . $itemType . "/blocks.php");
*/
// Blocks

define("_MB_SSECTION_ALLCAT","All categories");
define("_MB_SSECTION_AUTO_LAST_ITEMS","Automatically display last item(s)?");
define("_MB_SSECTION_CATEGORY","Category");
define("_MB_SSECTION_CHARS","Length of the title");
define("_MB_SSECTION_COMMENTS","Comment(s)");
define("_MB_SSECTION_DATE","Published date");
define("_MB_SSECTION_DISP","Display");
define("_MB_SSECTION_DISPLAY_CATEGORY","Display the category name?");
define("_MB_SSECTION_DISPLAY_COMMENTS","Display comment count?");
define("_MB_SSECTION_DISPLAY_TYPE","Display type :");
define("_MB_SSECTION_DISPLAY_TYPE_BLOCK","Each item is a block");
define("_MB_SSECTION_DISPLAY_TYPE_BULLET","Each item is a bullet");
define("_MB_SSECTION_DISPLAY_WHO_AND_WHEN","Display the poster and date?");
define("_MB_SSECTION_FULLITEM","Read the complete article");
define("_MB_SSECTION_HITS","Number of hits");
define("_MB_SSECTION_ITEMS","Articles");
define("_MB_SSECTION_LAST_ITEMS_COUNT","if yes, how many items to display?");
define("_MB_SSECTION_LENGTH"," characters");
define("_MB_SSECTION_ORDER","Display order");
define("_MB_SSECTION_POSTEDBY","Published by");
define("_MB_SSECTION_READMORE","Read more...");
define("_MB_SSECTION_READS","reads");
define("_MB_SSECTION_SELECT_ITEMS","if no, select the articles to be displayed :");
define("_MB_SSECTION_SELECTCAT","Display the articles of :");
define("_MB_SSECTION_VISITITEM","Visit the");
define("_MB_SSECTION_WEIGHT","List by weight");
define("_MB_SSECTION_WHO_WHEN","Published by %s on %s");
//bd tree block hack
define("_MB_SSECTION_LEVELS","levels");
define("_MB_SSECTION_CURRENTCATEGORY","Current Category");
define("_MB_SSECTION_ASC","ASC");
define("_MB_SSECTION_DESC","DESC");
define("_MB_SSECTION_SHOWITEMS","Show Items");
//--/bd

define("_MB_SSECTION_FILES","files");
define("_MB_SSECTION_DIRECTDOWNLOAD","Direct link to dowload the file instead of a link to the article?");
define("_MB_SSECTION_FROM","Select articles <br />from ");
define("_MB_SSECTION_UNTIL","&nbsp;&nbsp;to");
define("_MB_SSECTION_DATE_FORMAT","Date format must be mm/dd/yyy");
define("_MB_SSECTION_ARTICLES_FROM_TO","Articles published between %s and %s");
?>