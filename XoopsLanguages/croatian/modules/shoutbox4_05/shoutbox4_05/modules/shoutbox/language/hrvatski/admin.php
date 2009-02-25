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
define('_AM_SH_CONFIG','Administracija brbljaonice');
define('_AM_SH_POSTER','Objavio');
define('_AM_SH_MESSAGE','Poruka');
define('_AM_SH_INVALID_ID','ID je vratio da nema objave');

// index.php
define('_AM_SH_CHOOSE','Što želite napraviti?');
define('_AM_SH_EDIT_DB','Uredi objave u bazi podataka');
define('_AM_SH_EDIT_FILE','Uredi objave u datoteci');
define('_AM_SH_EDIT_INUSE','Koristi se');
define('_AM_SH_STATUSOF','Status brbljaonice');

// shoutboxEdit.php
define('_AM_SH_EDIT_TITLE','Uredi objavu [Objavljeno %s]');
define('_AM_SH_EDIT_FROM','Sa'); // Ex: "From: 127.0.0.1"

// shoutboxList.php
define('_AM_SH_LIST_TIME','Vrijeme');
define('_AM_SH_LIST_ACTION','Akcija');
define('_AM_SH_LIST_NOSHOUTS','Nema objava');

// shoutboxRemove.php
define('_AM_SH_REMOVE_TITLE','Izbaci objavu [Objavljeno %s]');
define('_AM_SH_REMOVE_SUCCES','Objava obrisana!');
define('_AM_SH_REMOVE_FAILURE','Greška - Ne mogu izvršiti upit...');
define('_AM_SH_REMOVE_FROM','Sa');

// shoutboxStatus.php
define('_AM_SH_STATUS_TITLE','Status brbljaonice');
define('_AM_SH_STATUS_STORAGETYPE','Tip pohrane');
define('_AM_SH_STATUS_INDB','Objave u bazi podataka');
define('_AM_SH_STATUS_INFILE','Objave u datoteci');
define('_AM_SH_STATUS_SIZEDB','Veličina tablice brbljaonice');
define('_AM_SH_STATUS_SIZEFILE','Veličina datoteke brbljaonice');

// shoutboxFile.php
define('_AM_SH_FILE_TITLE','Uredi shout.cvs');
define('_AM_SH_FILE_SOURCE','Izvorna shout.cvs');
define('_AM_SH_FILE_SOURCED','Možete urediti/obrisati linije iz shout.cvs. Budite sigurni da nećete razbiti strukturu (linija po linija).');
define('_AM_SH_FILE_HASH','Prisili ažuriranje');
define('_AM_SH_FILE_HASHD','Preskoči hashchek tako da možete odraditi ažuriranje.'); // Hash nije uspio: datoteka je uspješno ažurirana (čitaj: objava dodana) za vrijeme uređivanja
define('_AM_SH_FILE_HASH_FAILED','Provjera Hash-a nije uspjela!');
define('_AM_SH_FILE_UPDATED','Datoteka je ažurirana');
define('_AM_SH_FILE_FAILED','Ne mogu otvoriti datoteku!');

?>