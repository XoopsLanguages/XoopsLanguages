<?php
// $Id: language/german/modinfo.php,v 0.11 2004/04/26 10:00:00 frankblack Exp $
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

define('_MI_DEBASER_NAME','debaser');

/* language defines for template manager */
define("_MI_DEBASER_UPLOADER","debaser Uploader");
define("_MI_DEBASER_MPEGPLAYER","Player im Popup-Window");
define("_MI_DEBASER_INDEX","debaser Indexseite");
define("_MI_DEBASER_GENRES","Zeigt die Kategorien für debaser an");
define("_MI_DEBASER_AMEDITGENRE","ADMIN: Kategorie bearbeiten");
define("_MI_DEBASER_AMGENREMANAGE","ADMIN: Kategoriemanager");
define("_MI_DEBASER_AMPLAYMANAGE","ADMIN: Playermanager");
define("_MI_DEBASER_AMSHOWMPEGS","ADMIN: Zeigt Dateien gruppiert nach Kategorie an");
define("_MI_DEBASER_AMEDITPLAY","ADMIN: Player bearbeiten");
define("_MI_DEBASER_EDITMPEGS","ADMIN: Dateien bearbeiten");
define("_MI_DEBASER_APPROVE","ADMIN: Dateien freigeben");
define("_MI_DEBASER_SINGLEFILE","Zeigt die Dateien");

define("_MI_DEBASER_DESC","Multimedia-Player für Xoops 2.x");

//language define for submenu
define("_MI_DEBASER_SUBMIT","Einschicken");
define("_MI_DEBASER_MYDEBASER","Playerauswahl");

// defines for blocks
define("_MI_DEBASER_LATEST","Aktuelle Dateien");
define("_MI_DEBASER_LATEST_DESC","Zeigt die neuesten Dateien an");
define('_MI_DEBASER_RATED','Top bewertete Dateien');
define('_MI_DEBASER_RATED_DESC','Zeigt die am höchsten bewerteten Dateien an');
define('_MI_DEBASER_HITS','Top Downloads');
define('_MI_DEBASER_HITS_DESC','Zeigt die am am meisten heruntergeladenen Dateien an');
define('_MI_DEBASER_VIEWS','Top Besuche');
define('_MI_DEBASER_VIEWS_DESC','Zeigt die am am meisten aufgerufenen Dateien an');
define("_MI_DEBASER_DISPLATEST","Neueste Datei abspielen");
define("_MI_DEBASER_DISPLATEST_DESC","Spielt die neueste Datei direkt im Block ab");
define("_MI_DEBASER_DISPRATED","Best bewertete Datei abspielen");
define("_MI_DEBASER_DISPRATED_DESC","Spielt die best bewertete Datei direkt im Block ab");
define("_MI_DEBASER_DISPFEATURED","Feature-Datei abspielen");
define("_MI_DEBASER_DISPFEATURED_DESC","Spielt eine gefeaturete Datei direkt im Block ab");
define("_MI_DEBASER_DISPDOWN","Top-Download-Datei abspielen");
define("_MI_DEBASER_DISPDOWN_DESC","Spielt die meist heruntergeladene Datei direkt im Block ab");
define("_MI_DEBASER_DISPVIEWED","Meist aufgerufene Datei abspielen");
define("_MI_DEBASER_DISPVIEWED_DESC","Spielt die meist aufgerufene Datei direkt im Block ab");

// preferences constants
define('_MI_DEBASER_DOWNLOAD','1. Download');
define('_MI_DEBASER_ALLOWDOWN','<span style="color:#ff0000;"><em>Downloads erlauben</em></span>');
define('_MI_DEBASER_PLAYLIST','2. Playlists');
define('_MI_DEBASER_PLAYLISTDSC','<span style="color:#ff0000;"><em>Playlists erlauben (NICHT IN DIESER VERSION)</em></span>');
define('_MI_DEBASER_VIEWLIMIT','3. Dateien pro Seite');
define('_MI_DEBASER_VIEWLIMITDESC','<span style="color:#ff0000;"><em>Dateien die pro Seite angezeigt werden sollen</em></span>');
define('_MI_DEBASER_UPLOAD','4. Upload-Rechte');
define('_MI_DEBASER_UPLOADDESC','<span style="color:#ff0000;"><em>Gruppen die Dateien einschicken dürfen</em></span>');
define('_MI_DEBASER_ANONPOST','5. Gästen erlauben Dateien einzuschicken');
define('_MI_DEBASER_ANONPOSTDESC','');
define('_MI_DEBASER_AUTOFILEAPPROVE','6. Automatische Freigabe von Dateieinzeluploads?');
define('_MI_DEBASER_AUTOFILEAPPROVEDSC','<span style="color:#ff0000;"><em>Dateieinzeluploads werden automatisch freigegeben</em></span>');
define('_MI_DEBASER_AUTOLINKAPPROVE','7. Automatische Freigabe von eingeschickten Links?');
define('_MI_DEBASER_AUTOLINKAPPROVEDSC','<span style="color:#ff0000;"><em>Eingeschickte Links werden automatisch freigegeben</em></span>');
define('_MI_DEBASER_AUTOBATAPPROVE','8. Automatische Freigabe Batchloads?');
define('_MI_DEBASER_AUTOBATAPPROVEDSC','<span style="color:#ff0000;"><em>Batchloads werden automatisch freigegeben</em></span>');
define('_MI_DEBASER_MAXSIZE','9. Maximale Einzeluploadgröße in Bytes');
define('_MI_DEBASER_MAXSIZEDSC','<span style="color:#ff0000;"><em>Der voreingestellte Wert wird aus der php.ini ausgelesen</em></span>');
define('_MI_DEBASER_UPSEL','10. Art der Datenübermittlung');
define('_MI_DEBASER_UPSELDSC','<span style="color:#ff0000;"><em>Hier wird festgelegt ob Dateien, Links zu Dateien oder beides eingeschickt werden können</em></span>');
define('_MI_DEBASER_UPFILE','Dateien');
define('_MI_DEBASER_UPLINK','Links');
define('_MI_DEBASER_UPBOTH','Beides');
define('_MI_DEBASER_GUESTVOTE','11. Gast-Bewertung');
define('_MI_DEBASER_GUESTVOTEDSC','<span style="color:#ff0000;"><em>Hier wird festgelegt ob Gäste Dateien bewerten dürfen</em></span>');
define('_MI_DEBASER_AUTOGENRESINGLE','12. Automatische Kategorie-Generierung für Einzeluploads?');
define('_MI_DEBASER_AUTOGENRESINGLEDSC','<span style="color:#ff0000;"><em>Hier legen Sie fest, ob die Kategorien aus den Datei-Informationen generiert werden sollen. Wenn nicht müssen Sie die Kategorien von Hand anlegen</em></span>');
define('_MI_DEBASER_AUTOGENREBATCH','13. Automatische Kategorie-Generierung für Batchloads?');
define('_MI_DEBASER_AUTOGENREBATCHDSC','<span style="color:#ff0000;"><em>Hier legen Sie fest, ob die Kategorien aus den Datei-Informationen generiert werden sollen. Wenn nicht müssen Sie die Kategorien von Hand anlegen</em></span>');
define('_MI_DEBASER_CATEGORYIMG','14. Uploadverzeichnis für Kategoriebilder');
define('_MI_DEBASER_USETHUMBS','15. Thumbnails:');
define('_MI_DEBASER_USETHUMBSDSC','<span style="color:#ff0000;"><em>Unterstützte Dateitypen: JPG, GIF, PNG.<br /><br />Thumbnails werden zur Darstellung der Kategoriebilder benutzt. Einstellung \'Nein\' bewirkt, dass das Originalbild benutzt wird, falls der Server diese Option nicht unterstützt.</em></span>');
define('_MI_DEBASER_SHOTWIDTH','16. Maximale Breite der Kategoriebilder');
define('_MI_DEBASER_SHOTHEIGHT','17. Maximale Höhe der Kategoriebilder');
define('_MI_DEBASER_SHOTWIDTHDSC','');
define('_MI_DEBASER_QUALITY','18. Thumbnail-Qualität: ');
define('_MI_DEBASER_IMGUPDATE','19. Thumbnails aktualisieren?');
define('_MI_DEBASER_IMGUPDATEDSC','<span style="color:#ff0000;"><em>Falls ausgewählt werden die Thumbnails bei jedem Seitenaufruf aktualisiert, anderenfalls wird das letzte Thumbnail benutzt.</em></span>');
define("_MI_DEBASER_KEEPASPECT","20. Seitenverhältnis beibehalten?");
define("_MI_DEBASER_KEEPASPECTDSC","");
define('_MI_DEBASER_USECATPERM','21. Berechtigungssystem für Kategorien benutzen?');
define('_MI_DEBASER_USECATPERMDSC','<span style="color:#ff0000;"><em>Hier legen Sie fest, ob Sie auf zusätzlichen Administrationsaufwand durch das Berechtigungssystem für Kategorien verzichten wollen und alle Kategorien für alle User sichtbar sind</em></span>');
define('_MI_DEBASER_USEFILEPERM','22. Berechtigungssystem für Dateien benutzen?');
define('_MI_DEBASER_USEFILEPERMDSC','<span style="color:#ff0000;"><em>Hier legen Sie fest, ob Sie auf zusätzlichen Administrationsaufwand durch das Berechtigungssystem für Dateien verzichten wollen und alle Dateien für alle User sichtbar sind</em></span>');
define("_MI_DEBASER_PRESELECTPLAY","23. Playervorauswahl");
define("_MI_DEBASER_PRESELECTPLAYDESC","<span style='color:#ff0000;'><em>Hier legen Sie fest, bei welchen Gruppen die vorausgewählten Player eingesetzt werden sollen. Für Gäste werden auf jeden Fall vorausgewählte Player benutzt.</em></span>");
define("_MI_DEBASER_SORTBY","24. Dateien sortieren nach:");
define("_MI_DEBASER_SORTBY_DSC","<span style='color:#ff0000;'><em>Hier legen Sie fest, nach welchen Kriterien die Dateien auf der Userseite sortiert sein sollen</em></span>");
define("_MI_DEBASER_ORDERBY","25. Reihenfolge der Dateien:");
define("_MI_DEBASER_ORDERBY_DSC","<span style='color:#ff0000;'><em>Hier legen Sie fest, in welcher Reihenfolge die Dateien angezeigt werden sollen</em></span>");
define("_MI_DEBASER_CATSORTBY",'26. Kategorien sortieren nach:');
define("_MI_DEBASER_CATSORTBY_DSC","<span style='color:#ff0000;'><em>Hier legen Sie fest, nach welchen Kriterien die Kategorien auf der Userseite sortiert sein sollen</em></span>");
define("_MI_DEBASER_CATORDERBY","27. Reihenfolge der Kategorien:");
define("_MI_DEBASER_CATORDERBY_DSC","<span style='color:#ff0000;'><em>Hier legen Sie fest, in welcher Reihenfolge die Kategorien angezeigt werden sollen</em></span>");
define("_MI_DEBASER_USETOOLTIPS","28. Tooltips benutzen:");
define("_MI_DEBASER_USETOOLTIPSDSC","<span style='color:#ff0000;'><em>Hier legen Sie fest, ob in genre.php und den Blöcken Tooltips mit weiteren Infos angezeigt werden sollen</em></span>");
define('_MI_DEBASER_ID','ID');
define('_MI_DEBASER_ARTIST','Künstler');
define('_MI_DEBASER_TITLE','Titel');
define('_MI_DEBASER_WEIGHT','Gewichtung');
define("_MI_DEBASER_CATEGORY","Kategoriename");

//defines for flyout menu
define("_MI_DEBASER_ADMIN","Administration");
define("_MI_DEBASER_EDITGENRES","Kategorien bearbeiten");
define("_MI_DEBASER_EDITPLAYERS","Player bearbeiten");
define("_MI_DEBASER_SINGLEUP","Einzel-Upload");
define("_MI_DEBASER_BATCH","Stapelverarbeitung");
define("_MI_DEBASER_MAPPROVE","Dateien freigeben");
define('_MI_DEBASER_PERMISSIONS','Berechtigungen');

//defines for notifications
define('_MI_DEBASER_GLOBAL_NOTIFY','Allgemein');
define('_MI_DEBASER_GLOBAL_NOTIFYDSC','Allgemeine Benachrichtigungsoptionen.');

define('_MI_DEBASER_GENRE_NOTIFY','Genre');
define('_MI_DEBASER_GENRE_NOTIFYDSC','Benachrichtigungsoptionen die Kategorien betreffen.');

define('_MI_DEBASER_GENRE_NEWGENRE_NOTIFY','Neue Kategorie');
define('_MI_DEBASER_GENRE_NEWGENRE_NOTIFYCAP','Benachrichtigen bei neuen Kategorien.');
define('_MI_DEBASER_GENRE_NEWGENRE_NOTIFYDSC','Benachrichtigung bei neuen Kategorien.');
define('_MI_DEBASER_GENRE_NEWGENRE_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Automatische Benachrichtigung: Neue Kategorie');

define('_MI_DEBASER_SONG_NOTIFY','Dateien');
define('_MI_DEBASER_SONG_NOTIFYDSC','Benachrichtigungsoptionen die Dateien betreffen.');

define('_MI_DEBASER_SONG_NEWSONG_NOTIFY','Neue Datei');
define('_MI_DEBASER_SONG_NEWSONG_NOTIFYCAP','Benachrichtigen bei neuen Dateien.');
define('_MI_DEBASER_SONG_NEWSONG_NOTIFYDSC','Benachrichtigung bei neuen Dateien.');
define('_MI_DEBASER_SONG_NEWSONG_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Automatische Benachrichtigung: Neue Datei');

define('_MI_DEBASER_SUBMIT_NOTIFY','Dateien');
define('_MI_DEBASER_SUBMIT_NOTIFYDSC','Benachrichtigungsoptionen die Uploads betreffen.');

define('_MI_DEBASER_NEWSUBMIT_NOTIFY','Neuer Upload');
define('_MI_DEBASER_NEWSUBMIT_NOTIFYCAP','Benachrichtigen bei neuen Uploads.');
define('_MI_DEBASER_NEWSUBMIT_NOTIFYDSC','Benachrichtigung bei neuen Uploads.');
define('_MI_DEBASER_NEWSUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Automatische Benachrichtigung: Neuer Upload');

define('_MI_DEBASER_MIMETYPESUBMIT_NOTIFY','Unbekannter Mimetyp');
define('_MI_DEBASER_MIMETYPESUBMIT_NOTIFYCAP','Benachrichtigen bei unbekannten Mimetypen.');
define('_MI_DEBASER_MIMETYPESUBMIT_NOTIFYDSC','Benachrichtigung bei unbekannten Mimetypen.');
define('_MI_DEBASER_MIMETYPESUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Automatische Benachrichtigung: Unbekannter Mimetyp');

define('_MI_DEBASER_EMPTYMIMETYPE_NOTIFY','Leerer Mimetyp');
define('_MI_DEBASER_EMPTYMIMETYPE_NOTIFYCAP','Benachrichtigen bei leeren Mimetypen.');
define('_MI_DEBASER_EMPTYMIMETYPE_NOTIFYDSC','Benachrichtigung bei leeren Mimetypen.');
define('_MI_DEBASER_EMPTYMIMETYPE_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} Automatische Benachrichtigung: Leerer Mimetyp');

define('_MI_DEBASERRAD_ADMIN','Radio Administration');
define('_MI_DEBASERRAD_DESC','Stellt einen Popup-Block zur Verfuegung mit dem Internetradio-Sendungen gespielt werden koennen');
define('_MI_DEBASERRAD_TITLE','Internetradio');

define("_MI_DEBASER_WARNING","Für das einwandfreie Funktionieren dieses Moduls kann keine Garantie übernommen werden. Dieses Modul befindet sich noch in der Entwicklung, der Einsatz auf Produktionsseiten erfolgt also auf eigene Gefahr.");
define("_MI_DEBASER_AUTHORMSG","debaser ist mein erstes größeres Xoops-Modul und enthält als solches natürlich alle Anfängerfehler. Dank an alle die mir bei der Entwicklung des Moduls geholfen haben und Undank an alle die mich bei der Bitte um Hilfe ignoriert haben ;-).");
define("_MI_DEBASER_MODULE_DISCLAIMER","Disclaimer");
define("_MI_DEBASER_AUTHOR_WORD","Autorenkommentare");
define("_MI_DEBASER_MODULE_STATUS","Version");
define("_MI_DEBASER_AUTHOR_INFO","Autoreninformation");
define("_MI_DEBASER_AUTHOR_WEBSITE","Website des Autors");
define("_MI_DEBASER_AUTHOR_EMAIL","E-Mail des Autors");
define("_MI_DEBASER_AUTHOR_CREDITS","Modul-Credits");
define("_MI_DEBASER_MODULE_SUPPORT","Supportsite");
define("_MI_DEBASER_MODULE_BUG","Bug einschicken");
define("_MI_DEBASER_MODULE_FEATURE","Featureanfrage");
define("_MI_DEBASER_MODULE_INFO","Allgemeine Modulinformation");
define('_AM_DEBASER_BY','Entwickelt von');

define('_MI_DEBASER_HELP','Hilfe');
define('_MI_DEBASER_FILETYPES','Dateitypen');

define('_MI_DEBASER_CREDITS','Ich möchte mich bei allen Modulentwicklern bedanken, bei denen ich heftigst klauen bzw. lernen durfte. Im Besonderen: "über dieses Modul" geklaut bei marcan\'s smart-Modulen. "Mimetypen-Management","Kategorie-Bilder" und Teile von getfile.php geklaut bei diversen wf-modulen. "Admin-Interface" geklaut bei hszalasar\'s Modulen. Ich danke dem getid3-Projekt für ihre Klasse zum Einlesen von Dateiinformationen. Ich danke Mark Lubkowitz und seiner id3-Klasse die mich zu diesem Modul inspiriert hat. Ich danke Bob Janes für seine exoops-Konvertierung von iRadio. Natürlich bedanke ich mich auch bei Predator, chapi, phppp, Marcan, Liquid, gnikalu und Mithrandir für ihre Hilfe. Falls ich jemanden vergessen haben sollte, dann tut es mir leid.');
?>