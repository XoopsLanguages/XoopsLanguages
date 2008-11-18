<?php
// $Id: language/german/main.php,v 0.11 2004/04/24 10:00:00 frankblack Exp $
//  ------------------------------------------------------------------------ //
//                XOOPS - PHP Content Management System                      //
//                    Copyright (c) 2000 XOOPS.org                           //
//                       <http://www.xoops.org/>                             //
// ------------------------------------------------------------------------- //
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

define("_MD_DEBASER_FILE","Datei:");
define("_MD_DEBASER_ALBUM","Album:");
define("_MD_DEBASER_YEAR","Jahr:");
define("_MD_DEBASER_COMMENT","Zusatzinfo:");
define("_MD_DEBASER_TRACK","Track:");
define("_MD_DEBASER_GENRE","Kategorie:");
define("_MD_DEBASER_LENGTH","L�nge:");
define("_MD_DEBASER_BITRATE","Bitrate:");
define("_MD_DEBASER_FREQUENCY","Frequenz:");
define("_MD_DEBASER_DOWNLOAD","Download");
define("_MD_DEBASER_UPLOADSUCC","Upload war erfolgreich!");
define("_MD_DEBASER_TITLE","Titel:");
define("_MD_DEBASER_ARTIST","K�nstler:");
define("_MD_DEBASER_SECONDS","Minuten");
define("_MD_DEBASER_KBITS","kBit/s");
define("_MD_DEBASER_HERTZ","Hz");

//language defines for category.html
define("_MD_DEBASER_INDEX","Index");
define("_MD_DEBASER_PLAY","Abspielen");
define("_MD_DEBASER_NOFILES","F�r diese Kategorie liegen keine Dateien vor");

//language defines for upload.php
define("_MD_DEBASER_MAXUPSIZE","Max. Uploadgr��e = ");
define("_MD_DEBASER_MAXBYTES","Bytes");
define("_MD_DEBASER_EXTLINK","Ext. Link:");
define("_MD_DEBASER_FCATEGORY_GROUPPROMPT", "Kategoriezugriffsberechtigungen:");

//language defines for getfile.php
define("_MD_DEBASER_FILENOTFOUND","Die Datei konnte nicht gefunden werden!");

//language defines for singlefile.php
define("_MD_DEBASER_READMORE","Weitere Informationen...");
define("_MD_DEBASER_RATETHIS", "Bewerten Sie diese Datei!");
define("_MD_DEBASER_RATING", "Bewertung");
define("_MD_DEBASER_VOTES", "Stimmen");
define("_MD_DEBASER_NOTRATED", "Diese Datei wurde noch nicht bewertet");
define("_MD_DEBASER_VIEWS","Aufrufe");
define("_MD_DEBASER_HITS","Downloads");
define("_MD_DEBASER_EDIT","Bearbeiten");

//language defines for ratefile.php
define("_MD_DEBASER_NORATING", "Sie haben keine Bewertung f�r diese Datei gew�hlt!");
define("_MD_DEBASER_VOTEONCE", "Bitte stimmen Sie f�r eine Datei nur einmal ab.");
define("_MD_DEBASER_VOTEAPPRE", "Ihre Stimme wissen wir zu sch�tzen.");
define("_MD_DEBASER_THANKYOU", "Danke das Sie sich Zeit genommen hier auf %s abzustimmen");
define("_MD_DEBASER_UNKNOWNERROR", "FEHLER. Sie werden zur�ck gebracht!");

//language defines for mydebaser.php
define("_MD_DEBASER_DBUPDATED","Datenbank wurde aktualisiert!");
define("_MD_DEBASER_MYFAVPLAYER","Bitte w�hlen Sie ihren Lieblingsplayer aus:");

//language defines for player.php
define("_MD_DEBASER_NOPLAYERYET","<strong>Sie haben noch keinen Player ausgew�hlt! Stellen Sie Ihren Player im Submen� Playerauswahl ein.</strong><br /><br />Dieses Fenster schlie�t sich automatisch.");

//language defines for include/functions.php
define("_MD_DEBASER_ALREADYEXIST","Datei ist bereits vorhanden!");

define("_MD_DEBASER_ADDLINK","Link hinzuf�gen");
define("_MD_DEBASER_ADDMPEG","Datei hinzuf�gen");

/* class/uploader.php */
define("_MD_NOFILECHOOSE","Sie haben entweder keine Datei zum Upload ausgew�hlt oder Sie haben nicht die richtigen Schreib-/Leserechte um diese Datei hochzuladen.!");
define("_MD_INVALIDFILESIZE","Ung�ltige Dateigr��e");
define("_MD_FILENAMEEMPTY","Dateiname ist leer");
define("_MD_NOFILEUP","Fehler! Keine Datei hochgeladen");
define("_MD_PROBUP","Es gab ein Problem mit Ihrem Upload. Fehler: 0");
define("_MD_TOOBIG1","Die Datei die Sie hochladen wollen ist zu gro�. Fehler: 1");
define("_MD_TOOBIG2","Die Datei die Sie hochladen wollen ist zu gro�. Fehler: 2");
define("_MD_PARTIALLY","Die Datei die Sie hochladen wollen wurde nur teilweise hochgeladen. Fehler: 3");
define("_MD_NOFILESEL4","Keine Datei f�r Upload ausgew�hlt. Fehler: 4");
define("_MD_NOFILESEL5","Keine Datei f�r Upload ausgew�hlt. Fehler: 5");
define("_MD_UPDIRNOTSET","Uploadverzeichnis ist nicht festgelegt");
define("_MD_FAILOPENDIR","Fehler beim �ffnen des Verzeichnisses:");
define("_MD_FAILOPENDIRWRITE","Fehler beim �ffnen des Verzeichnisses mit Schreibberechtigungen: ");
define("_MD_FILESIZE","Dateigr��e:");
define("_MD_MAXSIZEALLOW","Maximal erlaubte Gr��e:");
define("_MD_MIMENOTALLOW","Mimetyp nicht erlaubt: ");
define("_MD_FAILUPLOADING","Fehler beim Hochladen der Datei: ");
define("_MD_ERROR_RETURN","<h4>Fehler w�hrend des Uploads</h4>");

/* uploadresult.php */
define("_MD_DEBASER_CLOSEWIN","Fenster schlie�en");
define("_MD_DEBASER_THANKYOUAPPROVE","Vielen Dank f�r Ihre Einsendung. Ihre Einsendung muss erst noch vom Webmaster freigegeben werden.");

?>