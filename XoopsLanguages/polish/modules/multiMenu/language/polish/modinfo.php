<?php
//  ------------------------------------------------------------------------- //
//                XOOPS - PHP Content Management System				//
//                    Copyright (c) 2004 XOOPS.org					//
//                       <http://www.xoops.org/>					//
//													//
//                  Authors :									//
//						- solo (www.wolfpackclan.com)			//
//                                 	- herve (www.herve-thouzard.com)		//
//                  multiMenu v1.4								//
//  ------------------------------------------------------------------------	//

define("_MI_MULTIMENU_MODULE",	"multiMenu");
define("_MI_MULTIMENU_NAME_",		"multiMenu ");

for ($i = 1; $i <= 8; $i++) {
$idMenu = sprintf("%02d",$i);
define("_MI_MULTIMENU_NAME_".$idMenu,	"multiMenu ".$idMenu);
define("_MI_MULTIMENU_MM_INDEX_".$idMenu, "Poka� spis multimenu ".$idMenu);
define("_MI_MULTIMENU_MM_TITLE_".$idMenu,	"Nazwa menu ".$idMenu);
}
define("_MI_MULTIMENU_NAME_A",	"Menu A");
define("_MI_MULTIMENU_NAME_B",	"Menu B");
define("_MI_MULTIMENU_NAME_ADMIN",	"Blok administratora");
define("_MI_MULTIMENU_DESC",		"Pozwala na utworzenie 7 r�nych w�asnych menu.");

define("_MI_MULTIMENU_TEXT_INDEX"      , "Tekst wprowadzenia");
define("_MI_MULTIMENU_TEXT_INDEXDSC"   , "Wpisz tutaj tekst kt�ry zostanie wy�wietlony na stronie g��wnej");
define("_MI_MULTIMENU_WELCOME"         , "Witamy w multiMenu. 

Aby zobaczyc wi�cej informacji na temat tego modu�u odwied� <a href='http://www.wolfpackclan.com/wolfactory/' target='_blank'>WolFactory</a>.

:-D

<div align='right'>Solo</div>

<div align='left'>*Aby zmieni� ten tekst wejd� w opcje multiMenu.</div>");
define("_MI_MULTIMENU_SHOW_MAIN",	"Wy�wietl stron� g��wn�");
define("_MI_MULTIMENU_DISPLAY_NAV",	"Wy�wietl belk� nawigacji");

define("_MI_MULTIMENU_INDEX"		, "Index");
define("_MI_MULTIMENU_ADMIN"		, "Admin");
define("_MI_MULTIMENU_READ" 		, "Czytaj: ");
define("_MI_MULTIMENU_IMAGE_WIDTH"  , "Domy�lna szeroko�� obrazka: ");
define("_MI_MULTIMENU_ICONS"		, "Wy�wietl ikony: ");
define("_MI_MULTIMENU_THEME"		, "Wy�wietlanie menu w sk�rce:<br /><br />
Insert your theme :<br /><font color='blue'><nobr><{include file=\"../modules/multiMenu/theme/multimenu.php\"}></nobr></font><br /><br />
<font color='red'> Uwaga: Tylko '<i>g��wne linki</i>' s� wy�wietlane w sk�rce !</font>");

define("_MI_MULTIMENU_BANNER_DISP"  , "Wy�wietl baner:");
define("_MI_MULTIMENU_BANNER"       , "Baner");
define("_MI_MULTIMENU_MODULENAME"   , "Nazwa modu�u");
define("_MI_MULTIMENU_NONE"         , "Nic");
define("_MI_MULTIMENU_THEME_TYPE"   , "Rodzaj wy�wietlania menu");
define("_MI_MULTIMENU_THEME_TABLE"  , "Tabela");
define("_MI_MULTIMENU_THEME_PATH"   , "�cie�ka");

?>
