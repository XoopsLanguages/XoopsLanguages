<?php
// $Id: admin.php,v 1.2 2007/05/04 18:56:00 andrew Exp $
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
* Admin navbar
*/
define("_AM_AMHTERR_GENERALSET",	"Pøedvolby");
define("_AM_AMHTERR_GOTOMOD",		"Pøejít na modul");
define("_AM_AMHTERR_HELP",			"Nápovìda");
define("_AM_AMHTERR_ABOUT",			"O modulu");
define("_AM_AMHTERR_MODULEADMIN",	"admin:");
define("_AM_AMHTERR_INDEX",			"Pøehled");
define("_AM_AMHTERR_ERROR",			"Chybové hlášky");


/**
* Form captions
*/
define("_AM_AMHTERR_FRMTTLCAP",		"Typy chyb:"); // Error types
define("_AM_AMHTERR_FRMCAPHDRID",	"ID");
define("_AM_AMHTERR_FRMCAPHDRTTL",	"Nadpis");
define("_AM_AMHTERR_FRMCAPERRNUM",	"Èíslo chyby");
define("_AM_AMHTERR_FRMCAPNOERRS",	"Nejsou definovány žádné chybové hlášky.");
define("_AM_AMHTERR_STATUSSHOW",	"Stav: Publikováno");
define("_AM_AMHTERR_STATUSHIDE",	"Stav: Skryto");
define("_AM_AMHTERR_FRMCAPLNKEDT",	"Upravit");
define("_AM_AMHTERR_FRMCAPLNKDLT",	"Vymazat");
define("_AM_AMHTERR_CAPDSPLY",		"Zobrazit:");
define("_AM_AMHTERR_CAPDSPLYTXT",	"&nbsp;Vybrat pro zobrazení.");

define("_AM_AMHTERR_CAPTTL",		"Nadpis:");
define("_AM_AMHTERR_CAPERRNUM",		"Èíslo chyby:");
define("_AM_AMHTERR_CAPMAINTXT",	"Zpráva:");


/**
* errors.php
*/
define("_AM_AMHTERR_ENTCAPADD",		"Pøidat typ chyby:");
define("_AM_AMHTERR_ENTCAPEDIT",	"Upravit typ chyby:");
define("_AM_AMHTERR_ENTCAPSAVE",	"Uložit");
define("_AM_AMHTERR_CODEEXISTS",	"Tento typ chyby již existuje!");


/**
* Misc
*/
define("_AM_AMHTERR_DBUPDATED",		"Aktualizace databáze v poøádku skonèila.");
define("_AM_AMHTERR_DBNOUPDATED",	"Aktualizace databáze se nezdaøila!");
define("_AM_AMHTERR_DBCONFMDEL",	"Myslíte to vážnì? Opravdu chcete vymazat tuto položku?");


/**
* index.php
*/
define("_AM_AMHTERR_INTRO",		"&nbsp;Informace&nbsp;");

define("_AM_AMHTERR_INFO",		"<p><strong>Prosím pamatujte:</strong> Tento modul potøebuje od serveru podporu souborù .htaccess (a také jejich povolení pro Váš úèet na serveru), nebo nìjaký jiný zpùsob pøesmìrování pøi výskytu chyby.</p>");

define("_AM_AMHTERR_FILECHK",		"Kontrola souboru .htaccess :<br />");
define("_AM_AMHTERR_FILEEXISTS",	"<span style=\"color: green; font-weight: bold;\">OK</span>");
define("_AM_AMHTERR_FILENOEXIST",	"<span style=\"color: red; font-weight: bold;\">soubor .htaccess neexistuje - prosím vytvoøte jej s tímto obsahem (pamatujte, že musíte vložit kompletní hlavièku i patièku souboru, toto je jen èást obsahu souboru nutná pro chod modulu).</span>");
define("_AM_AMHTERR_ADDCODE",		"Do souboru <b>.htaccess</b>, umístìného v koøenovém adresáøi vašeho XOOPSu, vložit následující øádky. Bez této úpravy nemùže modul fungovat.");
define("_AM_AMHTERR_NOCODE",		"<span style=\"color: red; font-weight: bold;\">Momentálnì nejsou nadefinovány žádné chybové hlášky.</span>");


/**
* reports.php
*/
define("_AM_AMHTERR_REPORTS",	"Záznamy");
define("_AM_AMHTERR_REPCAPTTL",	"Záznamy:");
define("_AM_AMHTERR_REPUSER",	"Uživatel");
define("_AM_AMHTERR_REPERRCD",	"Èíslo chyby");
define("_AM_AMHTERR_REPDATE",	"Datum");
define("_AM_AMHTERR_REPREFER",	"Referrer");
define("_AM_AMHTERR_REPUAGENT",	"Prohlížeè");
define("_AM_AMHTERR_REPADDR",	"IP adresa");
define("_AM_AMHTERR_REPREQ",	"Požadovaná stránka");


/**
* about.php
*/
define("_AM_AMHTERR_ABOUTABOUT",	"O modulu");

?>
