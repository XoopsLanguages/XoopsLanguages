<?php
	// $Author: wishcraft $
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
// Author: Simon Roberts (AKA wishcraft)                                     //
// URL: http://www.chronolabs.org.au                                         //
// Project: The XOOPS Project                                                //
// ------------------------------------------------------------------------- //

/**
 * @translation     xoops nordic (http://www.xoopsnordic.org)
 * @specification   _LANGCODE: dk
 * @specification   _CHARSET: UTF-8 without bom
 * @Translator      Culex (culex@culex.dk) - (www.culex.dk)
**/

define('_AM_SPIDERS_IMPORTFILE','Vælg Robot Data fil til Import');
define('_AM_SPIDERS_FILE','Filer til rådighed i ressource');
define('_AM_SPIDERS_FILEDESC','Hvis du ønsker at få en anden kopi af understøttede filer gå til <a href="http://www.robotstxt.org/dbexport.html"> www.robotstxt.org </a>') ;
define('_AM_SPIDERS_TXTBOX_EXCLUSION','Udeluk Bruger Agent:');
define('_AM_SPIDERS_TXTBOX_USERAGENT','User Agent:');
define('_AM_SPIDERS_IMPORTCOMPLETE','Import er færdig');
define('_AM_SPIDERS_DATADELETEDSUCCESSFULLY','Data blev slettet med succes');
define('_AM_SPIDERS_DATADELETEDUNSUCCESSFULLY','Der blev ikke slettet - ressource kan være ufuldstændig!');
define('_AM_SPIDERS_DATASAVEDSUCCESSFULLY','Data gemt');
define('_AM_SPIDERS_DATASAVEDUNSUCCESSFULLY','Data ikke gemt');

define('_AM_SPIDERS_CONFIRM_DELETE','Er du sikker på du vil slette spider %s!');

define('_AM_SPIDERS_EDITSPIDER','Rediger Spider %s');
define('_AM_SPIDERS_NEWSPIDER','Nye Spiders');
define('_AM_SPIDERS_TXTBOX_ROBOTID','Robot Identitets String:');
define('_AM_SPIDERS_TXTBOX_ROBOTID_DESC','');
define('_AM_SPIDERS_TXTBOX_ROBOTNAME','Robot navn');
define('_AM_SPIDERS_TXTBOX_ROBOTNAME_DESC','');
define('_AM_SPIDERS_TXTBOX_COVERURL','Cover URL:');
define('_AM_SPIDERS_TXTBOX_COVERURL_DESC','Den URL, der giver dækning af robot');
define('_AM_SPIDERS_TXTBOX_DETAILURL','Detalje URL:');
define('_AM_SPIDERS_TXTBOX_DETAILURL_DESC','Detalje URL:');
define('_AM_SPIDERS_TXTBOX_OWNERNME','Ejer navn');
define('_AM_SPIDERS_TXTBOX_OWNERNAME_DESC','Ejeres navn for robot');
define('_AM_SPIDERS_TXTBOX_OWNERURL','Ejers URL');
define('_AM_SPIDERS_TXTBOX_OWNERURL_DESC','Ejere URL til robotten');
define('_AM_SPIDERS_TXTBOX_OWNEREMAIL','Ejers eMail:');
define('_AM_SPIDERS_TXTBOX_OWNEREMAIL_DESC','Robotejers emailadresse!');
define('_AM_SPIDERS_TXTBOX_STATUS','Status:');
define('_AM_SPIDERS_TXTBOX_STATUS_DESC','Status for robot!');
define('_AM_SPIDERS_TXTBOX_PURPOSE','Formål:');
define('_AM_SPIDERS_TXTBOX_PURPOSE_DESC','beskrivelse af formål');
define('_AM_SPIDERS_TXTBOX_TYPE','Type:');
define('_AM_SPIDERS_TXTBOX_TYPE_DESC','Type af robot til internettet');
define('_AM_SPIDERS_TXTBOX_AVAILABILITY','Tilgængelighed');
define('_AM_SPIDERS_TXTBOX_AVAILABILITY_DESC','Findes på nettet nu!');
define('_AM_SPIDERS_TXTBOX_EXCLUSION_DESC','udelukkelse');
define('_AM_SPIDERS_TXTBOX_EXCLUSIONUSERAGENT','Udelukkelse UserAgent:');
define('_AM_SPIDERS_TXTBOX_EXCLUSIONUSERAGENT_DESC','Bytetekst matchsekvens for Useragent (Case Insensitive)');
define('_AM_SPIDERS_TXTBOX_NOINDEX','Ingen Index:');
define('_AM_SPIDERS_TXTBOX_NOINDEX_DESC','Ingen Index');
define('_AM_SPIDERS_TXTBOX_HOST','vært:');
define('_AM_SPIDERS_TXTBOX_HOST_DESC','Værtdetaljer om robot/spider/crawler');
define('_AM_SPIDERS_TXTBOX_FROM','Fra:');
define('_AM_SPIDERS_TXTBOX_FROM_DESC','Fra hvorsomhelst');
define('_AM_SPIDERS_TXTBOX_USERAGENT_DESC','Brugeragent match til BrugerAgent af robot (Case Insensitive)');
define('_AM_SPIDERS_TXTBOX_LANGUAGE','Sprog:');
define('_AM_SPIDERS_TXTBOX_LANGUAGE_DESC','Sprog det er programmeret i');
define('_AM_SPIDERS_TXTBOX_DESCRIPTION','Beskrivelse:');
define('_AM_SPIDERS_TXTBOX_DESCRIPTION_DESC','Beskrivelse af robot');
define('_AM_SPIDERS_TXTBOX_HISTORY','Log:');
define('_AM_SPIDERS_TXTBOX_HISTORY_DESC','Kort historie af robot');
define('_AM_SPIDERS_TXTBOX_ENVIRONMENT','Miljø:');
define('_AM_SPIDERS_TXTBOX_ENVIRONMENT_DESC','Miljø robotten kører i');
define('_AM_SPIDERS_TXTBOX_MODIFIEDDATE','Redigerings dato:');
define('_AM_SPIDERS_TXTBOX_MODIFIEDDATE_DESC','Datoen den senest blev ændret');
define('_AM_SPIDERS_TXTBOX_MODIFIEDBY','ændret af:');
define('_AM_SPIDERS_TXTBOX_MODIFIEDBY_DESC','Dit navn');
define('_AM_SPIDERS_TXTBOX_SAFEUSERAGENT','Sikker User Agent:');
define('_AM_SPIDERS_TXTBOX_SAFEUSERAGENT_DESC','Dette er den matchende sikre tekststreng til at matche brugeragenten for botten til en post! (Case Insensitive)');


if (!defined ('_MI_SPIDERS_DIRNAME'))
define('_MI_SPIDERS_DIRNAME','spiders');
if (!defined ('_MI_SPIDERS_GROUP_TYPE'))
define('_MI_SPIDERS_GROUP_TYPE','Spider');
if (!defined ('_MI_SPIDERS_GROUP_NAME'))
define('_MI_SPIDERS_GROUP_NAME','Robotter, Crawlers & Spiders');
if (!defined ('_MI_SPIDERS_GROUP_DESCRIPTION'))
define('_MI_SPIDERS_GROUP_DESCRIPTION','Robotter, Crawlers & Spiders at scanne din hjemmeside og har myndighed.');
?>