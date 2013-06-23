<?php
// $Id: main.php,v 1.3 2005/09/13 12:56:06 mcleines Exp $
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

// shortcuts for Byte, Kilo, Mega
define("_MD_BYTES","Bytes");
define("_MD_KB","KB");
define("_MD_MB","MB");

define("_MD_NPICS","%s Bild(er)");
define("_MD_PICS","Bilder");
define("_MD_ALBUM","Album");
define("_MD_ERROR","Zurück");
define("_MD_KEYS","Stichworte");
define("_MD_CONTINUE","Weiter");

define("_MD_RANDOM","Zufallsbilder");
define("_MD_LASTUP","Neueste Uploads");
define("_MD_LASTCOM","Neueste Kommentare");
define("_MD_TOPN","Meiste Aufrufe");
define("_MD_TOPRATED","Best bewertet");
define("_MD_LASTHITS","Zuletzt aufgerufen");
define("_MD_SEARCH","Suchergebnisse");
define("_MD_USEARCH","Bilder hinzugefügt von ");
define("_MD_MOST_SENT","Meist versendete eCards");

define("_MD_ACCESS_DENIED","Sie sind nicht berechtigt diese Seite anzusehen.");
define("_MD_PERM_DENIED","Sie sind nicht berechtigt diese Operation auszuführen.");
define("_MD_PARAM_MISSING","Das Skript wurde ohne den/die erforderlichen Parameter aufgerufen.");
define("_MD_NON_EXIST_AP","Das gewählte Album bzw. Bild existiert nicht!");
define("_MD_QUOTA_EXCEEDED","Speicherplatz ausgeschöpft<br /><br />Sie haben ein Speicherlimit von [quota]kb. Ihre Bilder belegen zur Zeit [space]kb, das Hinzufügen dieses Bildes würde Ihren Speicherplatz überschreiten.");
define("_MD_GD_FILE_TYPE_ERR","Bei Verwendung der GD-Bibliothek sind nur die Dateitypen JPG und PNG erlaubt.");
define("_MD_INVALID_IMG","Das Bild, dass Sie hochgeladen haben ist beschädigt oder kann nicht von der GD-Bibliothek verarbeitet werden");
define("_MD_RESIZE_FAILED","Kann Vorschaubild nicht erzeugen.");
define("_MD_NO_IMG_TO_DISPLAY","Kein Bild zum Anzeigen vorhanden.");
define("_MD_NO_EXIST_CAT","Die gewählte Kategorie existiert nicht");
define("_MD_ORPHAN_CAT","Eine Kategorie besitzt ein nicht existierendes übergeordnetes Element. Benutzen Sie den Kategoriemanager um das Problem zu beheben.");
define("_MD_DIRECTORY_RO","Das Verzeichnis '%s' ist nicht beschreibbar, die Bilder können nicht gelöscht werden");
define("_MD_PIC_IN_INVALID_ALBUM","Das Bild befindet sich in einem nicht existierenden Album (%s)!?");
define("_MD_GD_VERSION_ERR","GD Version 2.x wird von Ihrer PHP-Version nicht unterstützt. Bitte stellen Sie in der xcGallery Konfiguration auf GD Version 1.x um.");
define("_MD_NO_GD_FOUND","Die GD-Bibliothek wird von Ihrer PHP-Version nicht unterstützt. Bitte überprüfen Sie ob ImageMagick oder Netpbm auf Ihrem Server zur Verfügung stehen.");
define("_MD_IM_ERROR","Fehler beim Ausführen von ImageMagick - Rückgabe:");
define("_MD_IM_ERROR_CMD","Cmd-Zeile:");
define("_MD_IM_ERROR_CONV","Das convert-Programm antwortete:");

// ------------------------------------------------------------------------- //
// File include/theme_func.php
// ------------------------------------------------------------------------- //
define("_MD_THM_ALB_LT","Gehe zur Albenübersicht");
define("_MD_THM_ALB_LL","Albenübersicht");
define("_MD_THM_GAL_MYT","Zu meiner persönlichen Galerie");
define("_MD_THM_GAL_MYL","Meine Galerie");
define("_MD_THM_ADM_MT","In den Adminmodus wechseln");
define("_MD_THM_ADM_ML","Adminmodus");
define("_MD_THM_USER_MT","In den Usermodus wechseln");
define("_MD_THM_USER_ML","Usermodus");
define("_MD_THM_UPLT","Bild in ein Album hochladen");
define("_MD_THM_UPLL","Bild hochladen");
define("_MD_THM_UPLLMORE","Mehrere Bilder hochladen");
define("_MD_THM_LAST_UPL","Neueste Uploads");
define("_MD_THM_LAST_COM","Neueste Kommentare");
define("_MD_THM_MOST_VIEW","Meist aufgerufen");
define("_MD_THM_TOP_RATE","Best bewertet");
define("_MD_THM_SEARCH","Suchen");
define("_MD_THM_UPL_APPR","Uploadbestätigung");

define("_MD_THM_ALBMGR_LNK","Alben erstellen / anordnen");
define("_MD_THM_MODIFY_LNK","Meine Alben bearbeiten");
define("_MD_THM_CAT","Kategorie");
define("_MD_THM_ALB","Alben");
define("_MD_THM_PIC","Bilder");
define("_MD_THM_ALBONPAGE","%d Alben auf %d Seite(n)");
define("_MD_THM_DATE","DATUM");
define("_MD_THM_NAME","DATEINAME");
define("_MD_THM_SORT_DA","Aufsteigend nach Datum sortieren");
define("_MD_THM_SORT_DD","Absteigend nach Datum sortieren");
define("_MD_THM_SORT_NA","Aufsteigend nach Name sortieren");
define("_MD_THM_SORT_ND","Absteigend nach Name sortieren");
define("_MD_THM_PICPAGE","%d Bilder auf %d Seite(n)");
define("_MD_THM_USERPAGE","%d Mitglieder auf %d Seite(n)");

// ------------------------------------------------------------------------- //
// File include/functions.inc.php
// ------------------------------------------------------------------------- //

define("_MD_FUNC_FNAME","Dateiname : ");
define("_MD_FUNC_FSIZE","Dateigröße : ");
define("_MD_FUNC_DIM","Abmessungen : ");
define("_MD_FUNC_DATE","hinzugefügt am : ");
define("_MD_FUNC_COM","%s Kommentar(e)");
define("_MD_FUNC_VIEW","%s x aufgerufen");
define("_MD_FUNC_VOTE","%s Stimmen");
define("_MD_FUNC_SEND","%s x versendet");
define("_MD_FUNC_DELUSER","Gelöschtes Mitglied");
// ------------------------------------------------------------------------- //
// File admin.php
// ------------------------------------------------------------------------- //
define("_MD_ADMIN_LEAVE","Galerie Adminmodus wird beendet...");
define("_MD_ADMIN_ENTER","Galerie Adminmodus wird gestartet...");

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //

define("_MD_ALBMGR_NEED_NAME","Alben müssen einen Namen haben!");
define("_MD_ALBMGR_CONF_MOD","Sind Sie sicher, dass Sie diese Änderungen übernehmen wollen?");
define("_MD_ALBMGR_NO_CHANGE","Sie haben nichts verändert!");
define("_MD_ALBMGR_NEW_ALB","Neues Album");
define("_MD_ALBMGR_CONF_DEL1","Wollen Sie dieses Album wirklich löschen?");
define("_MD_ALBMGR_CONF_DEL2","Alle Bilder und Kommentare die darin enthalten sind werden gelöscht!");
define("_MD_ALBMGR_SELECT_FIRST","Wählen Sie zuerst ein Album");
define("_MD_ALBMGR_ALB_MGR","Albenmanager");
define("_MD_ALBMGR_MY_GAL","* Meine Galerie *");
define("_MD_ALBMGR_NO_CAT","* Keine Kategorie *");
define("_MD_ALBMGR_DEL","Löschen");
define("_MD_ALBMGR_NEW","Neu");
define("_MD_ALBMGR_APPLY","Änderungen übernehmen");
define("_MD_ALBMGR_SELECT","Kategorie wählen");

// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //

define("_MD_DB_ALB_NEED_TITLE","Sie müssen einen Titel für das Album eingeben!");
define("_MD_DB_NO_NEED","Keine Aktualisierung notwendig.");
define("_MD_DB_ALB_UPDATED","Das Album wurde aktualisiert");
define("_MD_DB_UNKOWN","Das gewählte Album existiert nicht oder Sie haben keine Berechtigung, Bilder in dieses Album hochzuladen");
define("_MD_DB_NO_PICUP","Es wurde kein Bild hochgeladen!<br /><br />Wenn Sie tatsächlich ein Bild zum Hochladen selektiert haben, überprüfen Sie ob Ihr Server das Hochladen von Dateien zulässt...");
define("_MD_DB_ERR_MKDIR","Verzeichnis %s konnte nicht angelegt werden!");
define("_MD_DB_DEST_DIR_RO","In das Zielverzeichnis %s kann vom Skript nicht geschrieben werden!");
define("_MD_DB_ERR_FEXT","Nur Dateien mit den folgenden Erweiterungen sind zulässig: <br /><br />%s.");
define("_MD_DB_ERR_MOVE","%s kann nicht nach %s verschoben werden!");
define("_MD_DB_ERR_PIC_SIZE","Die Datei, die Sie hochgeladen haben ist zu groß (maximal zulässig ist %s x %s) !");
define("_MD_DB_ERR_FSIZE","Die Datei, die Sie hochgeladen haben ist zu groß (maximal zulässig ist %s KB) !");
define("_MD_DB_ERR_IMG_INVALID","Die Datei, die Sie hochgeladen haben ist keine gültige Bilddatei!");
define("_MD_DB_IMG_ALLOWED","Sie können nur %s Bilder hochladen.");
define("_MD_DB_ERR_INSERT","Das Bild '%s' kann nicht in das Album eingefügt werden ");
define("_MD_DB_UPLOAD_SUCC","Ihr Bild wurde erfolgreich hochgeladen.<br /><br />Es wird nach der Bestätigung durch den Admin sichtbar sein.");
define("_MD_DB_UPL_SUCC","Ihr Bild wurde erfolgreich hinzugefügt");
// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //
define("_MD_DEL_CAPTION","Überschrift");
define("_MD_DEL_FS_PIC","Bild in Originalgröße");
define("_MD_DEL_DEL_SUCCESS","erfolgreich gelöscht");
define("_MD_DEL_NS_PIC","Normal großes Bild");
define("_MD_DEL_ERR_DEL","kann nicht gelöscht werden");
define("_MD_DEL_THUMB","Vorschaubild");
define("_MD_DEL_COMMENT","Kommentar");
define("_MD_DEL_IMGALB","Bild in Album");
define("_MD_DEL_ALB_DEL_SUC","Album '%s' gelöscht");
define("_MD_DEL_ALBMGR","Albenmanager");
define("_MD_DEL_INVALID","Ungültige Daten empfangen in '%s'");
define("_MD_DEL_CREATE","Erstelle Album '%s'");
define("_MD_DEL_UPDATE","Aktualisiere Album '%s' mit Titel '%s' und Index '%s'");
define("_MD_DEL_DELPIC","Bild löschen");
define("_MD_DEL_DELALB","Album löschen");

// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //
define("_MD_DIS_CONF_DEL","Dieses Bild wirklich LÖSCHEN? Kommentare werden ebenfalls gelöscht.");
define("_MD_DIS_DEL_PIC","Dieses Bild Löschen");
define("_MD_DIS_SIZE","%s x %s Pixel");
define("_MD_DIS_VIEWS","%s mal");
define("_MD_DIS_SLIDE","Diashow");
define("_MD_DIS_STOP_SLIDE","Diashow anhalten");
define("_MD_DIS_FULL","Klicken für Bild in voller Größe");
define("_MD_DIS_TITLE","Bildinformation");
define("_MD_DIS_FNAME","Dateiname");
define("_MD_DIS_ANAME","Albumname");
define("_MD_DIS_RATING","Bewertung (%s Stimmen)");
define("_MD_DIS_FSIZE","Dateigröße");
define("_MD_DIS_DIMEMS","Abmessungen");
define("_MD_DIS_DISPLAYED","Angezeigt");
define("_MD_DIS_CAMERA","Kamera");
define("_MD_DIS_DATA_TAKEN","Aufnahmedatum");
define("_MD_DIS_APERTURE","Blende");
define("_MD_DIS_EXPTIME","Belichtungszeit");
define("_MD_DIS_FLENGTH","Brennweite");
define("_MD_DIS_COMMENT","Kommentar");
define("_MD_DIS_BACK_TNPAGE","Zurück zur Vorschauseite");
define("_MD_DIS_SHOW_PIC_INFO","Bildinformationen anzeigen/verbergen");
define("_MD_DIS_SEND_CARD","Bild als eCard versenden");
define("_MD_DIS_CARD_DISABLE","eCards sind deaktiviert");
define("_MD_DIS_CARD_DISABLEMSG","Sie haben nicht das Recht eCards zu versenden");
define("_MD_DIS_NEXT","Nächstes Bild anzeigen");
define("_MD_DIS_PREV","Vorheriges Bild anzeigen");
define("_MD_DIS_PICPOS","Bild %s/%s");
define("_MD_DIS_RATE_THIS","Dieses Bild bewerten ");
define("_MD_DIS_NO_VOTE","(noch keine Bewertung)");
define("_MD_DIS_RATINGCUR","- derzeitige Bewertung : %s/5 mit %s Stimme(n)");
define("_MD_DIS_RUBBISH","Sehr schlecht");
define("_MD_DIS_POOR","Schlecht");
define("_MD_DIS_FAIR","Ganz OK");
define("_MD_DIS_GOOD","Gut");
define("_MD_DIS_EXCELLENT","Sehr gut");
define("_MD_DIS_GREAT","Super");
define("_MD_DIS_UPLOADER","Hinzugefügt von");
define("_MD_DIS_EXIF_ERR","Ihre PHP-Konfiguration unterstützt nicht das Auslesen von EXIF-Angaben in JPEG-Bildern. Bitte schalten Sie das Auslesen von EXIF-Daten in der xcGallery-Einstellung ab.");
define("_MD_DIS_VIEW_MORE_BY","Zeige mehr Bilder von ");
define("_MD_DIS_SUBIP","IP-Adresse des Uploaders");
define("_MD_DIS_SENT","Als eCard versenden");
// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

define("_MD_CARD_TITLE","eCard senden");
define("_MD_CARD_INVALIDE_EMAIL","<b>Achtung</b> : Ungültige E-Mail-Adresse!");
define("_MD_CARD_ECARD_TITLE","Eine eCard von %s für Sie");
define("_MD_CARD_VIEW_ECARD","Falls diese eCard nicht korrekt angezeigt wird, klicken Sie auf den folgenden Link: ");
define("_MD_CARD_VIEW_MORE_PICS","Klicken Sie auf diesen Link, um mehr Bilder ansehen zu können!");
define("_MD_CARD_SEND_SUCCESS","Ihre eCard wurde gesendet.");
define("_MD_CARD_SEND_FAILED","Leider kann der Server Ihre eCard nicht versenden...");
define("_MD_CARD_FROM","Von");
define("_MD_CARD_YOUR_NAME","Ihr Name");
define("_MD_CARD_YOUR_EMAIL","Ihre E-Mail-Adresse");
define("_MD_CARD_TO","An");
define("_MD_CARD_RCPT_NAME","Empfänger Name");
define("_MD_CARD_RCPT_EMAIL","Empfanger E-Mail-Adresse");
define("_MD_CARD_GREETINGS","Grüsse");
define("_MD_CARD_MESSAGE","Nachricht");
define("_MD_CARD_PERHOUR","Sie dürfen nur %s eCards pro Stunde verschicken. Bitte versuchen Sie es später noch einmal.");
define("_MD_CARD_NOTINDB","Konnte eCard-Daten nicht in die Datenbank schreiben!<br />Bitte kontaktieren Sie unsere Administratoren.");


// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

define("_MD_EDITPICS_PIC_INFO","Bildinfo");
define("_MD_EDITPICS_TITLE","Titel");
define("_MD_EDITPICS_DESC","Beschreibung");
define("_MD_EDITPICS_INFOSTR","%sx%s - %sKB - %s x angesehen - %s x bewertet");
define("_MD_EDITPICS_APPROVE","Bild veröffentlichen");
define("_MD_EDITPICS_PP_APPROVE","Veröffentlichung verschieben");
define("_MD_EDITPICS_DEL_PIC","Bild löschen");
define("_MD_EDITPICS_RVIEW","Anzeigenzähler zurücksetzen");
define("_MD_EDITPICS_RVOTES","Abstimmung zurücksetzen");
define("_MD_EDITPICS_DCOM","Kommentare löschen");
define("_MD_EDITPICS_UPL_APPROVAL","Auf Veröffentlichung wartende Bilder");
define("_MD_EDITPICS_EDIT","Bilder bearbeiten");
define("_MD_EDITPICS_NEXT","Nächste Bilder ansehen");
define("_MD_EDITPICS_PREV","Vorherige Bilder ansehen");
define("_MD_EDITPICS_NUMDIS","Bilder pro Seite");
define("_MD_EDITPICS_APPLY","Änderungen übernehmen");

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //

define("_MD_INDEX_CONF_DEL","Wollen Sie dieses Album wirklich LÖSCHEN? Alle darin befindlichen Bilder und Kommentare werden ebenfalls gelöscht.");
define("_MD_INDEX_DEL","Löschen");
define("_MD_INDEX_MOD","Eigenschaften");
define("_MD_INDEX_EDIT","Bilder bearbeiten");
define("_MD_INDEX_STAT1","<b>[pictures]</b> Bilder in <b>[albums]</b> Alben und <b>[cat]</b> Kategorien mit <b>[comments]</b> Kommentaren, <b>[views]</b> mal angesehen");
define("_MD_INDEX_STAT2","<b>[pictures]</b> Bilder in <b>[albums]</b> Alben, <b>[views]</b> mal angesehen");
define("_MD_INDEX_USERS_GAL","%s's Galerie");
define("_MD_INDEX_STAT3","<b>[pictures]</b> Bilder in <b>[albums]</b> Alben mit <b>[comments]</b> Kommentaren, <b>[views]</b> mal angesehen");
define("_MD_INDEX_ULIST","Mitgliederliste");
define("_MD_INDEX_NO_UGAL","Keine Mitgliedergalerien vorhanden");
define("_MD_INDEX_NALBS","%s Album/en");
define("_MD_INDEX_NPICS","%s Bild(er)");
define("_MD_INDEX_LASTADD",", letzte Aktualisierung am %s");

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //
define("_MD_MODIFYALB_UPD_ALB_N","Album %s aktualisieren");
define("_MD_MODIFYALB_GEN_SET","Allgemeine Einstellungen");
define("_MD_MODIFYALB_ALB_TITLE","Albumtitel");
define("_MD_MODIFYALB_ALB_CAT","Albumkategorie");
define("_MD_MODIFYALB_ALB_DESC","Albumbeschreibung");
define("_MD_MODIFYALB_ALB_THUMB","Albumvorschaubild");
define("_MD_MODIFYALB_ALB_PERM","Berechtigungen für dieses Album");
define("_MD_MODIFYALB_CAN_VIEW","Album kann angesehen werden von");
define("_MD_MODIFYALB_CAN_UPLOAD","Besucher können Bilder hochladen");
define("_MD_MODIFYALB_CAN_COM","Besucher können Kommentare schreiben");
define("_MD_MODIFYALB_CAN_RATE","Besucher können Bilder bewerten");
define("_MD_MODIFYALB_USER_GAL","Mitgliedergalerie");
define("_MD_MODIFYALB_NO_CAT","* Keine Kategorie *");
define("_MD_MODIFYALB_ALB_EMPTY","Album ist leer");
define("_MD_MODIFYALB_LAST_UPL","Letzes Bild, das hochgeladen wurde");
define("_MD_MODIFYALB_PUB_ALB","Jeder (öffentliches Album)");
define("_MD_MODIFYALB_ME_ONLY","Nur ich");
define("_MD_MODIFYALB_OWNER_ONLY","Nur der Besitzer des Albums (%s)");
define("_MD_MODIFYALB_GROUP_ONLY","Mitglieder der Gruppe '%s'");
define("_MD_MODIFYALB_ERR_NO_ALB","Es ist kein Album zum Bearbeiten in der Datenbank.");
define("_MD_MODIFYALB_UPDATE","Album aktualisieren");

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //
define("_MD_RATE_ALREADY","Sie haben schon für dieses Bild abgestimmt");
define("_MD_RATE_OK","Ihre Stimme wurde akzeptiert");

// ------------------------------------------------------------------------- //
// File search.php - OK
// ------------------------------------------------------------------------- //
define("_MD_SEARCH_TITLE","Bildersammlung durchsuchen");

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //
define("_MD_UPL_TITLE","Bild hochladen");
define("_MD_UPL_MAX_FSIZE","Maximal zulässige Dateigröße ist %s KB.");
define("_MD_UPL_ALBUM","Album");
define("_MD_UPL_PICTURE","Bild");
define("_MD_UPL_PIC_TITLE","Bildtitel");
define("_MD_UPL_DESCRIPTION","Bildbeschreibung");
define("_MD_UPL_KEYWORDS","Stichworte (Trennung mit Leerzeichen)");
define("_MD_UPL_ERR_NO_ALB_UPLOAD","Leider gibt es kein Album, in dass Sie Bilder hochladen dürfen");
define("_MD_UPL_YOURALB","Ihr persönliches Album");
define("_MD_UPL_ALBPUB","Öffentliche Alben");
define("_MD_UPL_OUSERALB","Alben anderer Mitglieder");



?>
