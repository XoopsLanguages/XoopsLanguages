<?php
// $Id: modinfo.php,v 1.4 2005/12/16 14:54:35 mcleines Exp $
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
define("_MI_XCGAL_NAME","xcGallery");
define("_MI_XCGAL_ADMENU1","Adminüberblick");
define("_MI_XCGAL_ADMENU2","Kategorien");
define("_MI_XCGAL_ADMENU3","Mitglieder");
define("_MI_XCGAL_ADMENU4","Gruppen");
define("_MI_XCGAL_ADMENU5","eCards");
define("_MI_XCGAL_ADMENU6","Stapelupload");

define("_MI_XCGAL_SCROLL","Scrollende Vorschaubilder");
define("_MI_XCGAL_CATMENU","xcGallery-Kategorien");
define("_MI_XCGAL_STATIC","Statische Vorschaubilder");
define("_MI_XCGAL_METAALB","Metaalben");

define("_MI_ANONSEE","Erlaube anonymen Usern die Bilderansicht");
define("_MI_SUBCAT_LEVEL","Ansicht Albumliste: Anzahl anzuzeigende Kategorieebenen");
define("_MI_ALB_PER_PAGE","Ansicht Albumliste: Anzahl anzuzeigende Alben");
define("_MI_ALB_LIST_COLS","Ansicht Albumliste: Anzahl Spalten in Albumliste");
define("_MI_ALB_THUMB_SIZE","Ansicht Albumliste: Vorschaugröße in Pixeln");
define("_MI_MAIN_LAYOUT","Ansicht Albumliste: Inhalt der Hauptseite");
define("_MI_THUMBCOLS","Ansicht Vorschaubild: Spaltenzahl auf Vorschauseite");
define("_MI_THUMBROWS","Ansicht Vorschaubild: Zeilenzahl auf Vorschaueite");
define("_MI_MAX_TABS","Ansicht Vorschaubild: Anzahl maximal anzuzeigende Tabs");
define("_MI_TEXT_THUMBVIEW","Ansicht Vorschaubild: Bildbeschreibung anzeigen (zusätzlich zum Bildtitel) unterhalb der Vorschaubilder");
define("_MI_COM_COUNT","Ansicht Vorschaubild: Anzahl der Kommentare unterhalb dem Vorschaubild anzeigen");
define("_MI_DEF_SORT","Ansicht Vorschaubild: Standardsortierung für Bilder ");
define("_MI_SORT_NA","Aufsteigend nach Name");
define("_MI_SORT_ND","Absteigend nach Name");
define("_MI_SORT_DA","Aaufsteigend nach Datum");
define("_MI_SORT_DD","Absteigend nach Datum");
define("_MI_MIN_VOTES","Ansicht Vorschaubild: Mindeststimmen, die ein Bild benötigt, um in der 'Best bewertet'-Liste zu erscheinen");
define("_MI_DIS_PICINFO","Ansicht Bild: Bildinformationen sind standardmäßig sichtbar");
define("_MI_JPG_QUAL","Bild- und Vorschaubild-Einstellungen: Qualität für JPEG-Dateien");
define("_MI_THUMB_WIDTH","Bild- und Vorschaubild-Einstellungen: Maximale Höhe oder Breite von Vorschaubildern *");
define("_MI_MAKE_INTERM","Bild- und Vorschaubild-Einstellungen: Zusätzlich Bilder in Normalgröße erstellen");
define("_MI_PICTURE_WIDTH","Bild- und Vorschaubild-Einstellungen: Maximale Breite oder Höhe von normalgroßen Bildern *");
define("_MI_MAX_UPL_SIZE","Bild- und Vorschaubild-Einstellungen: Maximale erlaubte Dateigröße für Bilderupload (KB)");
define("_MI_MAX_UPL_WIDTH","Bild- und Vorschaubild-Einstellungen: Maximale Breite oder Höhe für Bilderupload (in Pixeln)");
define("_MI_ALLOW_PRIVATE","Mitglieder-Einstellungen: Benutzer dürfen Privatalbum anlegen");
define("_MI_UF_NAME1","Zusatzfeld 1 für Bildbeschreibung (leer lassen falls nicht verwendet)");
define("_MI_UF_NAME2","Zusatzfeld 2 für Bildbeschreibung (leer lassen falls nicht verwendet)");
define("_MI_UF_NAME3","Zusatzfeld 3 für Bildbeschreibung (leer lassen falls nicht verwendet)");
define("_MI_UF_NAME4","Zusatzfeld 4 für Bildbeschreibung (leer lassen falls nicht verwendet)");
define("_MI_FORB_FNAME","Nicht erlaubte Zeichen in Dateinamen");
define("_MI_FILE_EXT","Erlaubte Dateierweiterungen für das Hochladen von Bildern");
define("_MI_THUMB_METHOD","Methode zur Größenänderung von Bildern");
define("_MI_IMPATH","Pfad zu ImageMagick/Netpbm (Bsp.: /usr/bin/X11/)");
define("_MI_ALLOW_IMG_TYPES","Erlaubte Dateitypen (nur gültig für ImageMagick)");
define("_MI_IM_OPTIONS","Kommandozeilen-Parameter für ImageMagick");
define("_MI_READ_EXIF","EXIF-Daten aus JPEG-Dateien lesen (benötigt PHP-Exif-Erweiterung");
define("_MI_FULLPATH","Albenverzeichnis *");
define("_MI_USERPICS","Verzeichnis für Userbilder *");
define("_MI_NORMAL_PFX","Präfix für normalgroße Bilder *");
define("_MI_THUMB_PFX","Präfix für Vorschaubilder *");
define("_MI_DIR_MODE","Standardmodus (chmod) für Verzeichnisse");
define("_MI_PIC_MODE","Standardmodus (chmod) für Bilder");
define("_MI_COOKIE_NAME","Cookie-Name, der vom Skript verwendet wird");
define("_MI_COOKIE_PATH","Cookie-Pfad");
define("_MI_DEBUG_MODE","Debug-Modus an");
define("_MI_ECRAD_SEE_MORE","Zieladresse für den 'Mehr Bilder ansehen' Link in eCards");
define("_MI_ECRAD_TYPE","eCard Typauswahl");
define("_MI_TEXT_CARD","Text");
define("_MI_HTML_CARD","HTML");
define("_MI_ECRAD_PER_HOUR","eCard-Anzahl, die ein User pro Stunde verschicken darf");
define("_MI_ECRAD_SAVE","Wieviele Tage sollen eCards in der Datenbank gespeichert werden");
define("_MI_ECRAD_TEXT","eCard Text");
define("_MI_ECRAD_TEXTDESC","(für Text-eCards und als Alternativtext bei HTML-eCards)<br /><b>Sinnvolle Tags</b><br />{X_SITEURL} gibt ".XOOPS_URL." aus<br />{X_SITENAME} gibt den Sitenamen aus<br />{R_NAME} gibt den Empfängernamen aus<br />{R_MAIL} gibt die Empfänger-E-Mail aus<br />{S_NAME} gibt den Absendernamen aus<br />{S_MAIL} gibt die Absender-E-Mail-Adresse aus<br />{SAVE_DAYS} gibt die Anzahl der Tage aus, die eine Karte in der Datenbank gespeichert wird<br />{CARD_LINK} gibt die eCard Abhol-URL aus");
define("_MI_ECRAD_TEXT_VALUE","Hallo {R_NAME},\n\n{S_NAME}({S_MAIL}) hat Ihnen eine eCard geschickt.\nBitte holen Sie Ihre eCard auf {CARD_LINK} ab.\nIhre eCard wird für {SAVE_DAYS} Tage in unserer Datenbank gespeichert.\n\nMit freundlichen Grüßen\nIhr {X_SITENAME} Team ({X_SITEURL})");
define("_MI_KEEP_VOTES","Wie lange sollen Abstimmungsstimmen in der Datenbank gespeichert werden (Tage) (0 falls sie nie gelöscht werden sollen)");
define("_MI_SEARCH_THUMB","Zeige Vorschaubild anstatt des xcGallery-Icons bei den Xoops-Suchergebnissen und dem Userprofil");
define("_MI_WATERMARKING","Verwende Watermarking für JPG");
define("_MI_WATERMARK_TEXTDESC","Die Watermark wird unter xcgal/images/watermark.png abgelegt.");
define("_MI_BATCHSHOWALL","Batchupload - Show all");
define("_MI_BATCHSHOWALLDESC","All files are shown, also files that are already in an album. For NO only new files are displayed");
?>