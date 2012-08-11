<?php

/**
* $Id: blocks.php 331 2007-12-23 16:01:11Z malanciault $
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

define('_MB_SSECTION_ALLCAT','Alle Kategorier');
define('_MB_SSECTION_AUTO_LAST_ITEMS','Automatisk visning af sidste post(er)?');
define('_MB_SSECTION_CATEGORY','Kategori');
define('_MB_SSECTION_CHARS','Længde på titel');
define('_MB_SSECTION_COMMENTS','Kommentar');
define('_MB_SSECTION_DATE','Udgivet den');
define('_MB_SSECTION_DISP','Vis');
define('_MB_SSECTION_DISPLAY_CATEGORY','Vis kategori navnet?');
define('_MB_SSECTION_DISPLAY_COMMENTS','Vis antallat af kommentarer?');
define('_MB_SSECTION_DISPLAY_TYPE','Visnings type:');
define('_MB_SSECTION_DISPLAY_TYPE_BLOCK','Hver post er en blok');
define('_MB_SSECTION_DISPLAY_TYPE_BULLET','Hver post er en liste');
define('_MB_SSECTION_DISPLAY_WHO_AND_WHEN','Vis indsender og dato?');
define('_MB_SSECTION_FULLITEM','Læs hele artiklen');
define('_MB_SSECTION_HITS','Antal hits');
define('_MB_SSECTION_ITEMS','Artikler');
define('_MB_SSECTION_LAST_ITEMS_COUNT','hvis ja, hvor mange poster vil du vise?');
define('_MB_SSECTION_LENGTH',' katakter');
define('_MB_SSECTION_ORDER','Rækkefølge');
define('_MB_SSECTION_POSTEDBY','Indsendt af');
define('_MB_SSECTION_READMORE','Læs mere ....');
define('_MB_SSECTION_READS','læst');
define('_MB_SSECTION_SELECT_ITEMS','hvis nej, vælg hvilke artikler der skal vises:');
define('_MB_SSECTION_SELECTCAT','Vis artiklerne af :');
define('_MB_SSECTION_VISITITEM','Besøg den');
define('_MB_SSECTION_WEIGHT','Vis efter vægt');
define('_MB_SSECTION_WHO_WHEN','Indsendt af %s den %s');
//bd tree block hack
define('_MB_SSECTION_LEVELS','niveau');
define('_MB_SSECTION_CURRENTCATEGORY','Aktuel kategori');
define('_MB_SSECTION_ASC','Stigende');
define('_MB_SSECTION_DESC','Faldende');
define('_MB_SSECTION_SHOWITEMS','Vis poster');
//--/bd

define('_MB_SSECTION_FILES','filer');
define('_MB_SSECTION_DIRECTDOWNLOAD','Direkte link til download af fil, i stedet for et link til artiklen?');
define('_MB_SSECTION_FROM','Vælg artikler <br />fra');
define('_MB_SSECTION_UNTIL','&nbsp;&nbsp;til');
define('_MB_SSECTION_DATE_FORMAT','Dato format skal være mm/dd/yyyy');
define('_MB_SSECTION_ARTICLES_FROM_TO','Artikler, der blev offentliggjort mellem %s og %s');
?>