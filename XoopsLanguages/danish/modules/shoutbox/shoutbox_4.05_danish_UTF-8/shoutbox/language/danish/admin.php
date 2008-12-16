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
//  ------------------------------------------------------------------------ //
//  Change Log                                                               //
//  ***                                                                      //
//  Version 4.01 Initial CVD Release 10/05/2008                              //
//  ***                                                                      //

// General usage
define('_AM_SH_CONFIG','Shoutbox Admin');
define('_AM_SH_POSTER','Skribent');
define('_AM_SH_MESSAGE','Besked');
define('_AM_SH_INVALID_ID','ID returnerede intet shout');

// index.php
define('_AM_SH_CHOOSE','Hvad ønsker du at gøre?');
define('_AM_SH_EDIT_DB','Redigere shouts i database');
define('_AM_SH_EDIT_FILE','redigere shouts i fil?');
define('_AM_SH_EDIT_INUSE','Bruges');
define('_AM_SH_STATUSOF','Shoutbox Status');

// shoutboxEdit.php
define('_AM_SH_EDIT_TITLE','Rediger shout [Skrevet den %s]');
define('_AM_SH_EDIT_FROM','Fra'); // Ex: "From: 127.0.0.1"

// shoutboxList.php
define('_AM_SH_LIST_TIME','Tid');
define('_AM_SH_LIST_ACTION','Handling');
define('_AM_SH_LIST_NOSHOUTS','Ingen Shouts');

// shoutboxRemove.php
define('_AM_SH_REMOVE_TITLE','Fjern shout [Skrevet den %s]');
define('_AM_SH_REMOVE_SUCCES','Shout Slettet!');
define('_AM_SH_REMOVE_FAILURE','Fejl - Kunne ikke køre forespørgsel ...');
define('_AM_SH_REMOVE_FROM','Fra');

// shoutboxStatus.php
define('_AM_SH_STATUS_TITLE','Shoutbox Status');
define('_AM_SH_STATUS_STORAGETYPE','Lager type');
define('_AM_SH_STATUS_INDB','Shouts i database');
define('_AM_SH_STATUS_INFILE','Shouts i fil');
define('_AM_SH_STATUS_SIZEDB','Størrelse på shoutbox tabel');
define('_AM_SH_STATUS_SIZEFILE','Størrelse på shoutbox fil');

// shoutboxFile.php
define('_AM_SH_FILE_TITLE','Redigering af shout.cvs');
define('_AM_SH_FILE_SOURCE','Kilde på shout.cvs');
define('_AM_SH_FILE_SOURCED','Du kan redigere/fjerne linier i shout.cvs. Vær omhyggelig med ikke at bryde strukturen (linje efter linje).');
define('_AM_SH_FILE_HASH','Kør Opdate');
define('_AM_SH_FILE_HASHD','Ignorer hashcheck så du kan opdatere filen.'); // Hash fail: file has been updated (read: shout added) during editing
define('_AM_SH_FILE_HASH_FAILED','Hash check fejlede!');
define('_AM_SH_FILE_UPDATED','Filen er opdateret');
define('_AM_SH_FILE_FAILED','Kunne ikke åbne filen!');

?>