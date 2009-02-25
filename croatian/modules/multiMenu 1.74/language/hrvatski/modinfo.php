<?php
//  ------------------------------------------------------------------------- //
//                XOOPS - PHP Content Management System				//
//                    Copyright (c) 2004 XOOPS.org					//
//                       <http://www.xoops.org/>					//
//													//
//                  Authors :									//
//						- solo (www.wolfpackclan.com)			//
//                                 	- herve (www.herve-thouzard.com)		//
//                  multiMenu v1.6								//
//  ------------------------------------------------------------------------	//

define("_MI_MULTIMENU_MODULE",	"multiIzbornik");
define("_MI_MULTIMENU_NAME_",		"multiIzbornik ");

for ($i = 1; $i <= 8; $i++) {
$idMenu = sprintf("%02d",$i);
define("_MI_MULTIMENU_NAME_".$idMenu,	"multiIzbornik ".$idMenu);
define("_MI_MULTIMENU_MM_INDEX_".$idMenu, "Prikaži u popisu multiIzbornika ".$idMenu);
define("_MI_MULTIMENU_MM_TITLE_".$idMenu,	"Naslov izbornika ".$idMenu);
}
define("_MI_MULTIMENU_NAME_A",	"multiIzbornik A");
define("_MI_MULTIMENU_NAME_B",	"multiIzbornik B");
define("_MI_MULTIMENU_NAME_ADMIN",	"Admin bloka");
define("_MI_MULTIMENU_DESC",		"Omogućava stvaranje do 7 različitih prilagođenih menija.");

define("_MI_MULTIMENU_TEXT_INDEX",	"Uvodni tekst");
define("_MI_MULTIMENU_TEXT_INDEXDSC","Unesite ovdje tekst koji će biti prikazan na popisu stranica");
define("_MI_MULTIMENU_WELCOME",	"Dobro došli u multiIzbornik*. 

Za više informacija ili prijavu grešaka za ovaj modul, molimo posjetite <a href='http://www.wolfpackclan.com/wolfactory/' target='_blank'>WolFactory</a>.

:-D

<div align='right'>Solo</div>

<div align='left'>*Da bi promjenili ovaj tekst idite u postavke modula.</div>");
define("_MI_MULTIMENU_SHOW_MAIN",	"Prikaz glavne stranice");
define("_MI_MULTIMENU_DISPLAY_NAV",	"Prikaz trake navigacije");

define("_MI_MULTIMENU_INDEX",		"Popis");
define("_MI_MULTIMENU_ADMIN",		"Administracija");
define("_MI_MULTIMENU_READ",		"Pročitaj: ");
define("_MI_MULTIMENU_IMAGE_WIDTH",	"Zadana širina slika: ");
define("_MI_MULTIMENU_ICONS",		"Prikaz ikona: ");
define("_MI_MULTIMENU_THEME",		"Izbornik za prikaz u temi:<br /><br />
Ubacite u vašu temu :<br /><font color='blue'><nobr><{include file=\"../modules/multiMenu/theme/multimenu.php\"}></nobr></font><br /><br />
<font color='red'> Napomena: Samo '<i>glavni linkovi</i>' se prikazuju u temi !</font>");

define("_MI_MULTIMENU_BANNER_DISP",	"Prikaži reklamu:");
define("_MI_MULTIMENU_BANNER",	"Reklamna poruka");
define("_MI_MULTIMENU_MODULENAME",	"Ime modula");
define("_MI_MULTIMENU_NONE",		"Ništa");
define("_MI_MULTIMENU_THEME_TYPE",	"Prikazni model izbornika za temu");
define("_MI_MULTIMENU_THEME_TABLE",	"Tablica");
define("_MI_MULTIMENU_THEME_PATH",	"Put");

?>
