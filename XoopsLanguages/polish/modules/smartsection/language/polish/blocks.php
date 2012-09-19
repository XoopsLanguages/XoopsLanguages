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
define("_MB_SSECTION_AUTO_LAST_ITEMS", "Wyświetlać automatycznie ostatnią rzecz?");
define("_MB_SSECTION_CATEGORY", "Kategoria");
define("_MB_SSECTION_CHARS", "Długość tytułu");
define("_MB_SSECTION_COMMENTS", "Komentarze");
define("_MB_SSECTION_DATE", "Data opublikowania");
define("_MB_SSECTION_DISP", "Wyświetl");
define("_MB_SSECTION_DISPLAY_CATEGORY", "Wyświetlić nazwę kategorii?");
define("_MB_SSECTION_DISPLAY_COMMENTS", "Wyświetlić liczbę komentarzy?");
define("_MB_SSECTION_DISPLAY_TYPE", "Wyświetlić typy jako:");
define("_MB_SSECTION_DISPLAY_TYPE_BLOCK", "Każda rzecz jest w bloku");
define("_MB_SSECTION_DISPLAY_TYPE_BULLET", "Każda rzecz zaczyna się od znaczka");
define("_MB_SSECTION_DISPLAY_WHO_AND_WHEN", "Wyświetlić dodającego i datę?");
define("_MB_SSECTION_FULLITEM", "Przeczytaj cały artykuł");
define("_MB_SSECTION_HITS", "Liczba odwiedzin");
define("_MB_SSECTION_ITEMS", "Artykuły");
define("_MB_SSECTION_LAST_ITEMS_COUNT", "Jeśli tak, ile rzeczy wyświetlić?");
define("_MB_SSECTION_LENGTH", " liter");
define("_MB_SSECTION_ORDER", "Sortowanie");
define("_MB_SSECTION_POSTEDBY", "Opublikoway przez");
define("_MB_SSECTION_READMORE", "Czytaj więcej...");
define("_MB_SSECTION_READS", "czytań");
define("_MB_SSECTION_SELECT_ITEMS", "Jeśli nie, wybierz artykuł który będzie pokazany :");
define("_MB_SSECTION_SELECTCAT", "Pokaż artykuł z :");
define("_MB_SSECTION_VISITITEM", "Odwiedź");
define("_MB_SSECTION_WEIGHT", "Lista według wagi");
define("_MB_SSECTION_WHO_WHEN", "Opublikowany przez %s dnia %s");
//bd tree block hack
define("_MB_SSECTION_LEVELS", "poziomy");
define("_MB_SSECTION_CURRENTCATEGORY", "Obecna kategoria");
define("_MB_SSECTION_ASC", "Rosnąco");
define("_MB_SSECTION_DESC", "Malejąco");
define("_MB_SSECTION_SHOWITEMS", "Pokazuj pozycje (items)");
//--/bd

define("_MB_SSECTION_FILES", "pliki");
define("_MB_SSECTION_DIRECTDOWNLOAD", "Wyświetlić bezpośredni link do pliku zamiast linku do artykułu?");
define("_MB_SSECTION_FROM", "Wybierz artykuły <br />od ");
define("_MB_SSECTION_UNTIL", "&nbsp;&nbsp;do");
define("_MB_SSECTION_DATE_FORMAT", "Wymagany format daty: mm/dd/rrrr");
define("_MB_SSECTION_ARTICLES_FROM_TO", "Artykuły opublikowane pomiędzy %s i %s");
?>