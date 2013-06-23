<?php
// $Id: admin.php,v 1.2 2005/09/06 15:03:27 mcleines Exp $
//  ------------------------------------------------------------------------ //
//                    xcGal 2.0 - XOOPS Gallery Modul                        //
//  ------------------------------------------------------------------------ //
//  Based on      xcGallery 1.1 RC1 - XOOPS Gallery Modul                    //
//                    Copyright (c) 2003 Derya Kiran                         //
//  ------------------------------------------------------------------------ //
//  Based on Coppermine Photo Gallery 1.10 http://coppermine.sourceforge.net///
//                      developed by Grégory DEMAR                           //
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
define("_AM_CONFIG","xcGallery-Konfiguration");
define("_AM_GENERALCONF","Allgemeine Einstellungen");
define("_AM_CATMNGR","Kategoriemanager");
define("_AM_USERMNGR","Mitgliedermanager");
define("_AM_GROUPMNGR","Gruppenmanager");
define("_AM_BATCHADD","Stapelupload");
define("_AM_ECARDMNGR","eCard-Manager");
define("_AM_PICAPP","Auf Veröffentlichung wartende Bilder");

define("_AM_PARAM_MISSING","Das Skript wurde ohne den/die erforderlichen Parameter aufgerufen.");


// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //
define("_AM_USERMGR_TITLE","xcGallery-Mitgliederverwaltung");
define("_AM_USERMGR_USHOW","Zeige alle Mitglieder die Alben/Bilder haben");
define("_AM_USERMGR_USHOWDEL","Zeige Alben von gelöschten Mitgliedern");
define("_AM_USERMGR_ULIST","Mitgliederliste");
define("_AM_USERMGR_USER","Mitglied");
define("_AM_USERMGR_ALBUMS","Alben");
define("_AM_USERMGR_PICS","Bilder");
define("_AM_USERMGR_QUOTA","Speicherplatz");
define("_AM_USERMGR_ALB","Album");
define("_AM_USERMGR_DELUID","gelöschte User-ID");
define("_AM_USERMGR_OPT","Operationen");
define("_AM_USERMGR_NOTMOVE","** Nicht verschieben **");
define("_AM_USERMGR_DEL","Löschen");
define("_AM_USERMGR_PROPS","Eigenschaften");
define("_AM_USERMGR_EDITP","Bilder editieren");

define("_AM_USERMGR_UONPAGE","%d Mitglieder auf %d Seite(n)");
define("_AM_USERMGR_NOUSER","Es wurden keine Mitglieder gefunden!");

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //
define("_AM_SRCHNEW_TITLE","Neue Bilder suchen");
define("_AM_SRCHNEW_SEL_DIR","Wähle Verzeichnis");
define("_AM_SRCHNEW_SEL_DIR_MSG","Diese Funktion ermöglicht mehrere Bilder der Galerie hinzuzufügen die mit einem FTP-Programm schon auf Ihre Webseite hochgeladen wurden.<br /><br />Wählen Sie das Verzeichnis, in dass Sie die Bilder hochgeladen haben");
define("_AM_SRCHNEW_NO_PIC_ADD","Kein Bild zum Hinzufügen gefunden");
define("_AM_SRCHNEW_NEED_ONE_ALB","Sie brauchen mindestens ein Album um diese Funktion auszuführen");
define("_AM_SRCHNEW_WARNING","Achtung");
define("_AM_SRCHNEW_CHG_PERM","das Skript kann in dieses Verzeichnis nicht schreiben. Sie müssen die Lese-/Schreibberechtigung (chmod) auf 755 oder 777 setzen, bevor Sie versuchen Bilder hinzuzufügen!");
define("_AM_SRCHNEW_TARGET_ALB","<b>Bilder aus dem Verzeichnis &quot;</b>%s<b>&quot; in </b>%s ablegen");
define("_AM_SRCHNEW_FOLDER","Verzeichnis");
define("_AM_SRCHNEW_IMAGE","Bild");
define("_AM_SRCHNEW_ALB","Album");
define("_AM_SRCHNEW_RESULT","Resultat");
define("_AM_SRCHNEW_DIR_RO","Verzeichnis nicht beschreibbar.. ");
define("_AM_SRCHNEW_CANT_READ","Verzeichnis nicht lesbar. ");
define("_AM_SRCHNEW_INSERT","Füge neue Bilder der Galerie hinzu");
define("_AM_SRCHNEW_LIST_NEW","Liste neuer Bilder");
define("_AM_SRCHNEW_INS_SEL","Markierte Bilder einfügen");
define("_AM_SRCHNEW_NO_PIC","Keine neuen Bilder gefunden");
define("_AM_SRCHNEW_PATIENT","Bitte warten. Das Skript braucht etwas Zeit, um die Bilder hinzuzufügen");
define("_AM_SRCHNEW_NOTES","<ul><li><b>OK</b> : bedeutet, dass das Bild erfolgreich hinzugefügt wurde<li><b>DP</b> : bedeutet, dass das Bild ein Duplikat ist und schon in der Datenbank vorhanden ist<li><b>PB</b> : bedeutet, dass das Bild nicht hinzugefügt werden konnte; überprüfen Sie Ihre Einstellungen und die Berechtigungen der Verzeichnisse, in dem die Bilder liegen<li>Falls die OK, DP, PB 'Zeichen' nicht erscheinen klicken Sie auf die nicht funktionierenden Bilder, um die Fehlermeldungen von PHP zu sehen<li>Wenn Ihr Browser in einen Timeout läuft, klicken Sie auf die Aktualisieren-Schaltfläche</ul>");


// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //

define("_AM_GRPMGR_KB","KB");
define("_AM_GRPMGR_NAME","Gruppenname");
define("_AM_GRPMGR_QUOTA","Speicherplatz");
define("_AM_GRPMGR_RATE","Darf abstimmen");
define("_AM_GRPMGR_SENDCARD","Darf eCards versenden");
define("_AM_GRPMGR_COM","Darf Kommentare schreiben");
define("_AM_GRPMGR_UPLOAD","Darf Bilder hochladen");
define("_AM_GRPMGR_PRIVATE","Darf eine persönliche Galerie haben");
define("_AM_GRPMGR_APPLY","Änderungen übernehmen");
define("_AM_GRPMGR_MANAGE","Mitgliedergruppen verwalten");
define("_AM_GRPMGR_PUB_APPR","Öffentl. Upload best. (1)");
define("_AM_GRPMGR_PRIV_APPR","Priv. Upload best. (2)");
define("_AM_GRPMGR_PUB_NOTE","<b>(1)</b> Das Hochladen in ein öffentliches Album muss durch den Admin bestätigt werden");
define("_AM_GRPMGR_PRIV_NOTE","<b>(2)</b> Das Hochladen in ein privates Album muss durch den Admin bestätigt werden");
define("_AM_GRPMGR_NOTES","Anmerkungen");
define("_AM_GRPMGR_SYN","Synchronisieren");
define("_AM_GRPMGR_SYN_NOTE","Klicken Sie 'Synchronisieren' an, um xcGallery-Gruppen mit den Xoops-Gruppen zu sychronisieren");
define("_AM_GRPMGR_EMPTY","xcGallery-Gruppentabelle war leer!<br /><br />Standardgruppen wurden erstellt.");

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //

define("_AM_CAT_MISS_PARAM","Fehlender Parameter für die Operation \'%s\' !");
define("_AM_CAT_UNKOWN","Gewählte Kategorie existiert nicht in der Datenbank");
define("_AM_CAT_UGAL_CAT_RO","Mitgliedergalerie kann nicht gelöscht werden!");
define("_AM_CAT_MNGCAT","Kategorien verwalten");
define("_AM_CAT_CONF_DEL","Wollen Sie diese Kategorie wirklich LÖSCHEN");
define("_AM_CAT_CAT","Kategorie");
define("_AM_CAT_OP","Operationen");
define("_AM_CAT_MOVE","Verschieben in");
define("_AM_CAT_UPCR","Kategorie erstellen/ändern");
define("_AM_CAT_PARENT","Übergeordnete Kategorie");
define("_AM_CAT_TITLE","Titel");
define("_AM_CAT_DESC","Beschreibung");
define("_AM_CAT_NOCAT","* Keine Kategorie *");

// ------------------------------------------------------------------------- //
// File ecardmgr.php
// ------------------------------------------------------------------------- //

define("_AM_CARDMGR_TITLE","xcGallery eCard-Verwaltung");
define("_AM_CARDMGR_TIME","Datum");
define("_AM_CARDMGR_SUNAME","Absender Mitgliedsname");
define("_AM_CARDMGR_SEMAIL","Absender E-Mail-Adresse");
define("_AM_CARDMGR_SIP","Absender IP-Adresse");
define("_AM_CARDMGR_PID","Bild-ID");
define("_AM_CARDMGR_STATUS","Abgeholt");
define("_AM_CARDMGR_DEL_SELECTED","Markierte eCards löschen");
define("_AM_CARDMGR_DEL_ALL","Alle eCards löschen");
define("_AM_CARDMGR_DEL_PICKED","Alle abgeholten eCards löschen");
define("_AM_CARDMGR_DEL_UNPICKED","Alle nicht abgeholten eCards löschen");
define("_AM_CARDMGR_CONPAGE","%d eCards auf %d Seite(n)");

?>
