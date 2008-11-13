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

define("_MB_SSECTION_ALLCAT", "Wszystkie kategorie");
define("_MB_SSECTION_AUTO_LAST_ITEMS", "Wy�wietla� automatycznie ostatni� rzecz?");
define("_MB_SSECTION_CATEGORY", "Kategoria");
define("_MB_SSECTION_CHARS", "D�ugo�� tytu�u");
define("_MB_SSECTION_COMMENTS", "Komentarze");
define("_MB_SSECTION_DATE", "Data opublikowania");
define("_MB_SSECTION_DISP", "Wy�wietl");
define("_MB_SSECTION_DISPLAY_CATEGORY", "Wy�wietli� nazw� kategorii?");
define("_MB_SSECTION_DISPLAY_COMMENTS", "Wy�wietli� liczb� komentarzy?");
define("_MB_SSECTION_DISPLAY_TYPE", "Wy�wietli� typy jako:");
define("_MB_SSECTION_DISPLAY_TYPE_BLOCK", "Ka�da rzecz jest w bloku");
define("_MB_SSECTION_DISPLAY_TYPE_BULLET", "Ka�da rzecz zaczyna si� od znaczka");
define("_MB_SSECTION_DISPLAY_WHO_AND_WHEN", "Wy�wietli� dodaj�cego i dat�?");
define("_MB_SSECTION_FULLITEM", "Przeczytaj ca�y artyku�");
define("_MB_SSECTION_HITS", "Liczba odwiedzin");
define("_MB_SSECTION_ITEMS", "Artyku�y");
define("_MB_SSECTION_LAST_ITEMS_COUNT", "Je�li tak, ile rzeczy wy�wietli�?");
define("_MB_SSECTION_LENGTH", " liter");
define("_MB_SSECTION_ORDER", "Sortowanie");
define("_MB_SSECTION_POSTEDBY", "Opublikoway przez");
define("_MB_SSECTION_READMORE", "Czytaj wi�cej...");
define("_MB_SSECTION_READS", "czyta�");
define("_MB_SSECTION_SELECT_ITEMS", "Je�li nie, wybierz artyku� kt�ry b�dzie pokazany :");
define("_MB_SSECTION_SELECTCAT", "Poka� artyku� z :");
define("_MB_SSECTION_VISITITEM", "Odwied�");
define("_MB_SSECTION_WEIGHT", "Lista wed�ug wagi");
define("_MB_SSECTION_WHO_WHEN", "Opublikowany przez %s dnia %s");
//bd tree block hack
define("_MB_SSECTION_LEVELS", "poziomy");
define("_MB_SSECTION_CURRENTCATEGORY", "Obecna kategoria");
define("_MB_SSECTION_ASC", "Rosn�co");
define("_MB_SSECTION_DESC", "Malej�co");
define("_MB_SSECTION_SHOWITEMS", "Pokazuj pozycje (items)");
//--/bd

define("_MB_SSECTION_FILES", "pliki");
define("_MB_SSECTION_DIRECTDOWNLOAD", "Wy�wietli� bezpo�redni link do pliku zamiast linku do artyku�u?");
define("_MB_SSECTION_FROM", "Wybierz artyku�y <br />od ");
define("_MB_SSECTION_UNTIL", "&nbsp;&nbsp;do");
define("_MB_SSECTION_DATE_FORMAT", "Wymagany format daty: mm/dd/rrrr");
define("_MB_SSECTION_ARTICLES_FROM_TO", "Artyku�y opublikowane pomi�dzy %s i %s");
?>