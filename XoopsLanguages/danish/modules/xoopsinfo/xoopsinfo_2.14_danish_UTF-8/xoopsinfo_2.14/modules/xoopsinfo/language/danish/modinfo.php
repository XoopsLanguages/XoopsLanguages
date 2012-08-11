<?php
/**
* XOOPS - PHP Content Management System
* Copyright (c) 2001 - 2006 <http://www.xoops.org/>
*
* Module: xoopsinfo 2.0
* Licence : GPL
* Authors :
*              - Jmorris
*              - Marco
*              - Christian
*              - DuGris (http://www.dugris.info)
*/
// The name of this module
define("_MI_XI_NAME","XOOPS Info");

// A brief description of this module
define("_MI_XI_DESC","Grundlæggende modul til visning XOOPS, Apache, MySQL og PHP information.");

// Credit where credit is due
define("_MI_XI_AUTHOR","XOOPS Support Team - DuGris (XOOPS France)");
define("_MI_XI_CREDITS","XOOPS Core Team (http://www.xoops.org/) - DuGris (http://www.dugris.info/");

// Support
define("_MI_XI_SUPPORT","Ved support, brug siden http://xoops.org/");

// Names of admin menu items
define("_MI_XI_ADMENU1","Xoops Info.");
define("_MI_XI_ADMENU2","Server Info.");
define("_MI_XI_ADMENU3","MySql Info.");
define("_MI_XI_ADMENU4","Modules Info.");
define("_MI_XI_ADMENU5","Editors Info.");
define("_MI_XI_ADMENU6","Overriding Info.");
define("_MI_XI_ADMENU7","Mimetypes");

define("_MI_XI_XOOPS_DEBUG","Debug mode");
define("_MI_XI_XOOPS_THEME","Aktiver Tema som standard");
define("_MI_XI_XOOPS_CACHE","Slet cache filer");
define("_MI_XI_XOOPS_TEMPLATE","Slet template_c filer");
define("_MI_XI_XOOPS_PROTECTOR","<font color='#CC0000'>Protector : </font>Temporary disabled");
define("_MI_XI_XOOPS_PROTECTOR_IP","<font color='#CC0000'>Protector : </font>Delete the banished IP");

define("_MI_XI_XOOPS_PASSWORD","Password");
define("_MI_XI_PASSWORD_ERROR","Forkert Password !!!");
define("_MI_XI_XOOPS_SUBMIT","Indsend");
define("_MI_XI_YES","Ja");
define("_MI_XI_NO","Nej");

define("_MI_XI_UPDATE_MODULE","<font color='#CC0000'>Opdater modul</font>");
define("_MI_XI_NEWVERSION","<font color='#000099'>Ny modul version</font>");
define("_MI_XI_HELP","Hjælp");

define("_AM_XI_MODULE_LEGEND_UPDATE","Opdateringen af modulet blev ikke gennemført !!!");
define("_AM_XI_MODULE_LEGEND_DOWNLOAD","En ny version af modulet er tilgængelige i download");

// Options
define("_MI_XI_CHECK_TABLE","Tabeller, som skal kontrolleres");
define("_MI_XI_CHECK_TABLE_DSC","Adskil tabellernes navn med <font color='#CC0000'><b>|</b></font>");

define("_MI_XI_IMG_FONT","Font bredde");
define("_MI_XI_IMG_BACKGROUND","Baggrundsfarve");
define("_MI_XI_IMG_BORDER","Kantfarve");
define("_MI_XI_IMG_CONSTANT","tekstfarve");
define("_MI_XI_IMG_DATA","Xoops info farve");

define("_MI_XI_PASSWORD","Password");
define("_MI_XI_PASSWORD_DSC","Hvis du af en eller anden grund ikke har adgang til dit websted.<br />
 Gå til scriptet :
 <a href='" . XOOPS_URL . "/modules/xoopsinfo/admin/rescue.php'><font color='#CC0000'><b>XOOPS_URL/modules/xoopsinfo/admin/rescue.php</b></font></a><br />
 <li>Vælg debug mode</li>
 <li>Aktivér standard theme</li><br />
 <li>Indtast dette password</li><br />
 Glem ikke at sætte password<br />
 Hvis denne indstilling er blank, vil det ikke virke !!!
 ");




 // Version 2.12
define("_MI_XI_REFERER","Henvisning godkendt til <font color='#CC0000'>xoopsinfo.php</font>");
define("_MI_XI_REFERER_DSC","adskilt af <font color='#CC0000'><b>|</b></font>");

define("_MI_XI_ADMENU8","System info");

define("_MI_PHPSYSINFO_FOLDER","[PHPSYSINFO] Mappe, der indeholder <font color='#CC0000'>PHPSYSINFO</font>");
define("_MI_PHPSYSINFO_FOLDER_DSC","For eksempel <font color='#CC0000'><b>/phpsysinfo</b></font>, uden den afsluttende <font color='#CC0000'><b>/</font></b><br />Flere oplysninger om <a target='_blank' href='http://phpsysinfo.sourceforge.net/'>phpsysinfo</a>");

define("_MI_PHPSYSINFO_LANG","[PHPSYSINFO] Standard sprog");
define("_MI_PHPSYSINFO_LANG_DSC","Det sprog er tilgængelig i filen includes/lang af phpsysinfo");
define("_MI_PHPSYSINFO_LANG_DEF","en");

define("_MI_PHPSYSINFO_THEME","[PHPSYSINFO] Standard tema");
define("_MI_PHPSYSINFO_THEME_DSC","Temaerne er listet i filen skabeloner af phpsysinfo");

define("_MI_XI_XOOPS_SESSION_TABLE","Optimer session table");

 // Version 2.13
define("_MI_XI_ADMENU9","PHP Sikkerheds Information");

define("_MI_PHPSECINFO_FOLDER","[PHPSECINFO] Mapppen indeholder <font color='#CC0000'>PHPSECINFO</font>");
define("_MI_PHPSECINFO_FOLDER_DSC","For eksempel <font color='#CC0000'><b>/phpsecinfo</b></font>, uden den afsluttende <font color='#CC0000'><b>/</font></b><br />Flere oplysninger om <a target='_blank' href='http://phpsec.org/projects/phpsecinfo/index.html'>PHP Security Consortium: PHPSecInfo</a>");
?>