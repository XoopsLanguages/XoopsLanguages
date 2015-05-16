<?php
// $Id: modinfo.php,v 1.4 2007/05/07 20:21:29 andrew Exp $
//  ------------------------------------------------------------------------ //
//  Author: Andrew Mills                                                     //
//  Email:  ajmills@sirium.net                                               //
//	About:           //
//                                                                           //
//  ------------------------------------------------------------------------ //
//                XOOPS - PHP Content Management System                      //
//                    Copyright (c) 2000 XOOPS.org                           //
//                       <http://www.xoops.org/>                             //
//  ------------------------------------------------------------------------ //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  You may not change or alter any portion of this comment or credits       //
//  of supporting developers from this source code or any supporting         //
//  source code which is considered copyrighted (c) material of the          //
//  original comment or credit authors.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
//  ------------------------------------------------------------------------ //


/**
* xoops_version.php
*/
define("_MI_AM_HTERROR_NAME",	"AM HTError");
define("_MI_AM_HTERROR_DESC",	"Modul pro zprávu chybových hlášení serveru v systému XOOPS.");

// config options
define("_MI_AMHTERR_IGNOREADMIN",		"Ignorovat administrátory:");
define("_MI_AMHTERR_IGNOREADMINDSC",	"Do databáze nezapisovat chyby zpùsobené èleny administrátorské skupiny.");
define("_MI_AMHTERR_REPORTING",			"Vypnout protokoly:");
define("_MI_AMHTERR_REPORTINGDSC",		"Pro hojnì navštìvované stránky je nìkdy lepší vypnout logování, protože by záznam mohl být pøíliš veliký.");
define("_MI_AMHTERR_PAGETTL",			"Nadpis stránky:");
define("_MI_AMHTERR_PAGETTLDSC",		"Vložit èíslo chyby do nadpisu stránky");
define("_MI_AMHTERR_PAGETTL1",			"Nevkládat");
define("_MI_AMHTERR_PAGETTL2",			"Ano: &lt;jméno modulu&gt; - &lt;chyba&gt;");
define("_MI_AMHTERR_PAGETTL3",			"Ano: &lt;chyba&gt; - &lt;jméno modulu&gt;");
define("_MI_AMHTERR_DATEFRMT",			"Formát datumu:");
define("_MI_AMHTERR_DATEFRMTDSC",		'Formát data ve výpisech. Prohlédnìte si dokumentaci PHP <a href="http://www.php.net/date" target="_blank">date format page</a> kde zjistíte, jaké formátování lze použít.');
define("_MI_AMHTERR_NUMREPS",			"Poèet záznamù:");
define("_MI_AMHTERR_NUMREPSDSC",		"Poèet záznamù které se zobrazí ve výpisu.");
define("_MI_AMHTERR_LINEBRKS",			"Zalamování øádek:");
define("_MI_AMHTERR_LINEBRKSDSC",		"Zapnutí automatického zalamování øádek v chybových hláškách (což ale mùže zpùsobit potíže pøi použití HTML).");


/**
* Admin navbar
*/
define("_MI_AMHTERR_GENERALSET",	"Pøedvolby");
define("_MI_AMHTERR_GOTOMOD",		"Pøejít na modul");
define("_MI_AMHTERR_HELP",			"Nápovìda");
define("_MI_AMHTERR_MODULEADMIN",	"admin:");
define("_MI_AMHTERR_INDEX",			"Pøehled");


/**
* Admin menu
*/
define("_MI_AMHTERROR_MENU1",	"Pøehled");
define("_MI_AMHTERROR_MENU2",	"Chybové hlášky");
define("_MI_AMHTERROR_MENU3",	"Protokoly");


?>
