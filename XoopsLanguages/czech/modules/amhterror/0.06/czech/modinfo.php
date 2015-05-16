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
define("_MI_AM_HTERROR_DESC",	"Modul pro zpr�vu chybov�ch hl�en� serveru v syst�mu XOOPS.");

// config options
define("_MI_AMHTERR_IGNOREADMIN",		"Ignorovat administr�tory:");
define("_MI_AMHTERR_IGNOREADMINDSC",	"Do datab�ze nezapisovat chyby zp�soben� �leny administr�torsk� skupiny.");
define("_MI_AMHTERR_REPORTING",			"Vypnout protokoly:");
define("_MI_AMHTERR_REPORTINGDSC",		"Pro hojn� nav�t�vovan� str�nky je n�kdy lep�� vypnout logov�n�, proto�e by z�znam mohl b�t p��li� velik�.");
define("_MI_AMHTERR_PAGETTL",			"Nadpis str�nky:");
define("_MI_AMHTERR_PAGETTLDSC",		"Vlo�it ��slo chyby do nadpisu str�nky");
define("_MI_AMHTERR_PAGETTL1",			"Nevkl�dat");
define("_MI_AMHTERR_PAGETTL2",			"Ano: &lt;jm�no modulu&gt; - &lt;chyba&gt;");
define("_MI_AMHTERR_PAGETTL3",			"Ano: &lt;chyba&gt; - &lt;jm�no modulu&gt;");
define("_MI_AMHTERR_DATEFRMT",			"Form�t datumu:");
define("_MI_AMHTERR_DATEFRMTDSC",		'Form�t data ve v�pisech. Prohl�dn�te si dokumentaci PHP <a href="http://www.php.net/date" target="_blank">date format page</a> kde zjist�te, jak� form�tov�n� lze pou��t.');
define("_MI_AMHTERR_NUMREPS",			"Po�et z�znam�:");
define("_MI_AMHTERR_NUMREPSDSC",		"Po�et z�znam� kter� se zobraz� ve v�pisu.");
define("_MI_AMHTERR_LINEBRKS",			"Zalamov�n� ��dek:");
define("_MI_AMHTERR_LINEBRKSDSC",		"Zapnut� automatick�ho zalamov�n� ��dek v chybov�ch hl�k�ch (co� ale m��e zp�sobit pot�e p�i pou�it� HTML).");


/**
* Admin navbar
*/
define("_MI_AMHTERR_GENERALSET",	"P�edvolby");
define("_MI_AMHTERR_GOTOMOD",		"P�ej�t na modul");
define("_MI_AMHTERR_HELP",			"N�pov�da");
define("_MI_AMHTERR_MODULEADMIN",	"admin:");
define("_MI_AMHTERR_INDEX",			"P�ehled");


/**
* Admin menu
*/
define("_MI_AMHTERROR_MENU1",	"P�ehled");
define("_MI_AMHTERROR_MENU2",	"Chybov� hl�ky");
define("_MI_AMHTERROR_MENU3",	"Protokoly");


?>
