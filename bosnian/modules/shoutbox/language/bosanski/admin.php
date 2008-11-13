<?php
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
//  Original Author: Alphalogic <alphafake@hotmail.com>					     //
//  Original Author Website: http://www.alphalogic-network.de		         //
//  ------------------------------------------------------------------------ //
//  XOOPS Version made by: (XOOPS 1.3.x and 2.0.x version)			         //
//  Jan304 <http://www.jan304.org>									         //
//  ------------------------------------------------------------------------ //
//  Author:     tank                                                         //
//  Website:    http://www.customvirtualdesigns.com                          //
//  E-Mail:     tanksplace@comcast.net                                       //
//  Date:       10/05/2008                                                   //
//  Module:     Shoutbox                                                     //
//  File:       language/english/admin.php                                   //
//  Version:    4.01                                                         //
//  Preveo na bosanski: Saba                                                 //
//  Website:   http//g-orahovica.com                                         //
//  E-Mail:    info@g-orahovica.com                                          //
//  ------------------------------------------------------------------------ //
//  Change Log                                                               //
//  ***                                                                      //
//  Version 4.01 Initial CVD Release 10/05/2008                              //
//  ***                                                                      //

// General usage
define('_AM_SH_CONFIG','Shoutbox Administracija');
define('_AM_SH_POSTER','Poster');
define('_AM_SH_MESSAGE','Poruke');
define('_AM_SH_INVALID_ID','ID neispravan i bez shout-a');

// index.php
define('_AM_SH_CHOOSE','&Scaron;to &#382;elite u&#269;initi?');
define('_AM_SH_EDIT_DB','Obradi poruke u Bazi podataka');
define('_AM_SH_EDIT_FILE','Obradite poruke u tekst podatku');
define('_AM_SH_EDIT_INUSE','U upotrebi');
define('_AM_SH_STATUSOF','Status od shoutbox');

// shoutboxEdit.php
define('_AM_SH_EDIT_TITLE','Uredi poruke [Poslano u %s]');
define('_AM_SH_EDIT_FROM','Od'); // Ex: "Od: 127.0.0.1"

// shoutboxList.php
define('_AM_SH_LIST_TIME','Vrijeme');
define('_AM_SH_LIST_ACTION','Akcija');
define('_AM_SH_LIST_NOSHOUTS','Nema Poruka');

// shoutboxRemove.php
define('_AM_SH_REMOVE_TITLE','Izbri&scaron;i poruke [Poslate u %s]');
define('_AM_SH_REMOVE_SUCCES','Izbri&scaron;i poruke!');
define('_AM_SH_REMOVE_FAILURE','Gre&scaron;ka - Poruke se nemogu izbrisati...');
define('_AM_SH_REMOVE_FROM','Od');

// shoutboxStatus.php
define('_AM_SH_STATUS_TITLE','Shoutbox Status');
define('_AM_SH_STATUS_STORAGETYPE','Postavke od Poruka su u');
define('_AM_SH_STATUS_INDB','Poruke u databazi');
define('_AM_SH_STATUS_INFILE','Poruke u file');
define('_AM_SH_STATUS_SIZEDB','Postavi u tablama shoutbox');
define('_AM_SH_STATUS_SIZEFILE','Postavi u file shoutbox');

// shoutboxFile.php
define('_AM_SH_FILE_TITLE','Izmjenite u shout.cvs');
define('_AM_SH_FILE_SOURCE','Source of shout.cvs');
define('_AM_SH_FILE_SOURCED','Vi mozete Urediti/Brisati lines of shout.cvs. Be sure to not break the structure (line by line).');
define('_AM_SH_FILE_HASH','Force Update');
define('_AM_SH_FILE_HASHD','Overrule hashcheck so you can update file.'); // Hash fail: file has been updated (read: shout added) during editing
define('_AM_SH_FILE_HASH_FAILED','Hash check failed!');
define('_AM_SH_FILE_UPDATED','File updated');
define('_AM_SH_FILE_FAILED','Could not open file!');

?>