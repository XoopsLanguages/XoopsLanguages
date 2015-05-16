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
define("_AM_AMHTERR_GENERALSET",	"P�edvolby");
define("_AM_AMHTERR_GOTOMOD",		"P�ej�t na modul");
define("_AM_AMHTERR_HELP",			"N�pov�da");
define("_AM_AMHTERR_ABOUT",			"O modulu");
define("_AM_AMHTERR_MODULEADMIN",	"admin:");
define("_AM_AMHTERR_INDEX",			"P�ehled");
define("_AM_AMHTERR_ERROR",			"Chybov� hl�ky");


/**
* Form captions
*/
define("_AM_AMHTERR_FRMTTLCAP",		"Typy chyb:"); // Error types
define("_AM_AMHTERR_FRMCAPHDRID",	"ID");
define("_AM_AMHTERR_FRMCAPHDRTTL",	"Nadpis");
define("_AM_AMHTERR_FRMCAPERRNUM",	"��slo chyby");
define("_AM_AMHTERR_FRMCAPNOERRS",	"Nejsou definov�ny ��dn� chybov� hl�ky.");
define("_AM_AMHTERR_STATUSSHOW",	"Stav: Publikov�no");
define("_AM_AMHTERR_STATUSHIDE",	"Stav: Skryto");
define("_AM_AMHTERR_FRMCAPLNKEDT",	"Upravit");
define("_AM_AMHTERR_FRMCAPLNKDLT",	"Vymazat");
define("_AM_AMHTERR_CAPDSPLY",		"Zobrazit:");
define("_AM_AMHTERR_CAPDSPLYTXT",	"&nbsp;Vybrat pro zobrazen�.");

define("_AM_AMHTERR_CAPTTL",		"Nadpis:");
define("_AM_AMHTERR_CAPERRNUM",		"��slo chyby:");
define("_AM_AMHTERR_CAPMAINTXT",	"Zpr�va:");


/**
* errors.php
*/
define("_AM_AMHTERR_ENTCAPADD",		"P�idat typ chyby:");
define("_AM_AMHTERR_ENTCAPEDIT",	"Upravit typ chyby:");
define("_AM_AMHTERR_ENTCAPSAVE",	"Ulo�it");
define("_AM_AMHTERR_CODEEXISTS",	"Tento typ chyby ji� existuje!");


/**
* Misc
*/
define("_AM_AMHTERR_DBUPDATED",		"Aktualizace datab�ze v po��dku skon�ila.");
define("_AM_AMHTERR_DBNOUPDATED",	"Aktualizace datab�ze se nezda�ila!");
define("_AM_AMHTERR_DBCONFMDEL",	"Mysl�te to v�n�? Opravdu chcete vymazat tuto polo�ku?");


/**
* index.php
*/
define("_AM_AMHTERR_INTRO",		"&nbsp;Informace&nbsp;");

define("_AM_AMHTERR_INFO",		"<p><strong>Pros�m pamatujte:</strong> Tento modul pot�ebuje od serveru podporu soubor� .htaccess (a tak� jejich povolen� pro V� ��et na serveru), nebo n�jak� jin� zp�sob p�esm�rov�n� p�i v�skytu chyby.</p>");

define("_AM_AMHTERR_FILECHK",		"Kontrola souboru .htaccess :<br />");
define("_AM_AMHTERR_FILEEXISTS",	"<span style=\"color: green; font-weight: bold;\">OK</span>");
define("_AM_AMHTERR_FILENOEXIST",	"<span style=\"color: red; font-weight: bold;\">soubor .htaccess neexistuje - pros�m vytvo�te jej s t�mto obsahem (pamatujte, �e mus�te vlo�it kompletn� hlavi�ku i pati�ku souboru, toto je jen ��st obsahu souboru nutn� pro chod modulu).</span>");
define("_AM_AMHTERR_ADDCODE",		"Do souboru <b>.htaccess</b>, um�st�n�ho v ko�enov�m adres��i va�eho XOOPSu, vlo�it n�sleduj�c� ��dky. Bez t�to �pravy nem��e modul fungovat.");
define("_AM_AMHTERR_NOCODE",		"<span style=\"color: red; font-weight: bold;\">Moment�ln� nejsou nadefinov�ny ��dn� chybov� hl�ky.</span>");


/**
* reports.php
*/
define("_AM_AMHTERR_REPORTS",	"Z�znamy");
define("_AM_AMHTERR_REPCAPTTL",	"Z�znamy:");
define("_AM_AMHTERR_REPUSER",	"U�ivatel");
define("_AM_AMHTERR_REPERRCD",	"��slo chyby");
define("_AM_AMHTERR_REPDATE",	"Datum");
define("_AM_AMHTERR_REPREFER",	"Referrer");
define("_AM_AMHTERR_REPUAGENT",	"Prohl�e�");
define("_AM_AMHTERR_REPADDR",	"IP adresa");
define("_AM_AMHTERR_REPREQ",	"Po�adovan� str�nka");


/**
* about.php
*/
define("_AM_AMHTERR_ABOUTABOUT",	"O modulu");

?>
