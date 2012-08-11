<?php
// $Id: main.php,v 1.5 2003/02/12 11:39:00 okazu Exp $
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

define('_MD_XPARTNERS_JOIN','Word een partner');
define('_MD_XPARTNERS_PARTNERS','Partners');
define('_MD_XPARTNERS_PARTNER','Partner');
define('_MD_XPARTNERS_DESCRIPTION','Omschrijving');
define('_MD_XPARTNERS_HITS','Klikken');
define('_MD_XPARTNERS_NOPART','Geen partner gevonden.');
//file join.php
define('_MD_XPARTNERS_IMAGE','Afbeelding:');
define('_MD_XPARTNERS_TITLE','Titel:');
define('_MD_XPARTNERS_URL','URL:');
define('_MD_XPARTNERS_SEND','Stuur E-mail');
define('_MD_XPARTNERS_ERROR1',"<center>ERROR: Er is een fout opgetreden. <a href='javascript:history.back(1)'>probeer opnieuw</a></center>");
define('_MD_XPARTNERS_ERROR2',"<span style='text-align: center'>"
    . "Afbeelding is groter dan 150x80. <a href='javascript:history.back(1)'>Probeer opnieuw met een andere afbeelding</a>" . "</span>");
define('_MD_XPARTNERS_ERROR3',"<style='text-align: center;'>"
    . "Het afbeeldingsbestand bestaat niet. <a href='javascript:history.back(1)'>probeer opnieuw met een andere afbeelding</a>" . "</span>");
define('_MD_XPARTNERS_GOBACK',"<a href='javascript:history.back(1)'>Back</a>");
define('_MD_XPARTNERS_NEWPARTNER',"%s Partners verzoek");
define('_MD_XPARTNERS_SENDMAIL',"E-mailverzoek verstuurd naar de beheerder <br /><a href='index.php'>Terug naar overzicht</a>");
// 1.11
//file /admin/index.php
define('_MD_XPARTNERS_DASHBOARD','Xoops Partner Overzicht');
define('_MD_XPARTNERS_TOTALPARTNERS',"Totaal Partners: <strong>%s</strong> ");
define('_MD_XPARTNERS_TOTALACTIVE',"Actieve Partners: <strong>%s</strong> ");
define('_MD_XPARTNERS_TOTALNONACTIVE',"Niet-Actieve Partners: <strong>%s</strong> ");
//define('_MD_XPARTNERS_TOTALPARTNERS',"Er zijn <strong>%s</strong> Actieve Partners in de Database");