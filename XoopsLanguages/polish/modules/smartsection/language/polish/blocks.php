<?php

/**
* $Id: blocks.php,v 1.2 2007/02/11 14:42:31 dap997 Exp $
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

define("_MB_SSECTION_ALLCAT","Wszystkie kategorie");
define("_MB_SSECTION_AUTO_LAST_ITEMS","Wy¶wietlaæ automatycznie ostatni± rzecz?");
define("_MB_SSECTION_CATEGORY","Kategoria");
define("_MB_SSECTION_CHARS","D³ugo¶æ tytu³u");
define("_MB_SSECTION_COMMENTS","Komentarze");
define("_MB_SSECTION_DATE","Data opublikowania");
define("_MB_SSECTION_DISP","Wy¶wietl");
define("_MB_SSECTION_DISPLAY_CATEGORY","Wy¶wietliæ nazwê kategorii?");
define("_MB_SSECTION_DISPLAY_COMMENTS","Wy¶wietliæ liczbê komentarzy?");
define("_MB_SSECTION_DISPLAY_TYPE","Wy¶wietliæ typy jako:");
define("_MB_SSECTION_DISPLAY_TYPE_BLOCK","Ka¿da rzecz jest w bloku");
define("_MB_SSECTION_DISPLAY_TYPE_BULLET","Ka¿da rzecz zaczyna siê od znaczka");
define("_MB_SSECTION_DISPLAY_WHO_AND_WHEN","Wy¶wietliæ dodaj±cego i datê?");
define("_MB_SSECTION_FULLITEM","Przeczytaj ca³y artyku³");
define("_MB_SSECTION_HITS","Liczba odwiedzin");
define("_MB_SSECTION_ITEMS","Artyku³y");
define("_MB_SSECTION_LAST_ITEMS_COUNT","Je¶li tak, ile rzeczy wy¶wietliæ?");
define("_MB_SSECTION_LENGTH"," liter");
define("_MB_SSECTION_ORDER","Sortowanie");
define("_MB_SSECTION_POSTEDBY","Opublikoway przez");
define("_MB_SSECTION_READMORE","Czytaj wiêcej...");
define("_MB_SSECTION_READS","czytañ");
define("_MB_SSECTION_SELECT_ITEMS","Je¶li nie, wybierz artyku³ który bêdzie pokazany :");
define("_MB_SSECTION_SELECTCAT","Poka¿ artyku³ z :");
define("_MB_SSECTION_VISITITEM","Odwied¼");
define("_MB_SSECTION_WEIGHT","Lista wed³ug wagi");
define("_MB_SSECTION_WHO_WHEN","Opublikowany przez %s dnia %s");
//bd tree block hack
define("_MB_SSECTION_LEVELS","poziomy");
define("_MB_SSECTION_CURRENTCATEGORY","Obecna kategoria");
define("_MB_SSECTION_ASC","Rosn±co");
define("_MB_SSECTION_DESC","Malej±co");
define("_MB_SSECTION_SHOWITEMS","Pokazuj pozycje (items)");
//--/bd

define("_MB_SSECTION_FILES","pliki");
define("_MB_SSECTION_DIRECTDOWNLOAD","Wy¶wietliæ bezpo¶redni link do pliku zamiast linku do artyku³u?");
define("_MB_SSECTION_FROM","Wybierz artyku³y <br />od ");
define("_MB_SSECTION_UNTIL","&nbsp;&nbsp;do");
define("_MB_SSECTION_DATE_FORMAT","Wymagany format daty: mm/dd/rrrr");
define("_MB_SSECTION_ARTICLES_FROM_TO","Artyku³y opublikowane pomiêdzy %s i %s");
?>